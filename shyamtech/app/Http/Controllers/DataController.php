<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DataController extends Controller
{
    public $folder_name;

    public $list;

    public function __construct(){
        $this->folder_name = "userimage";
    }

    public function get(Request $request){
      $draw = $request->draw;        
      $start = $request->start;
      $rowperpage = $request->length; 
  
      $columnIndex_arr = $request->order;
    
      $columnName_arr = $request->columns;
      $order_arr = $request->order;
      $search_arr = $request->search;  
      $columnIndex = $columnIndex_arr[0]['column']; 
      $columnName = $columnName_arr[$columnIndex]['data']; 
      $columnSortOrder = @$order_arr[0]['dir']; 
      $searchValue = @$search_arr['value']; 
      $recordsQuery =Session::get("users");
     
    

    //   $sort=0;
    //   if($searchValue!=""){
    //     $sort=1;
    //     $_SESSION['key'] = $searchValue;
    //     $recordsQuery=$recordsQuery->where('pages.name', 'LIKE', '%' .$_SESSION['key']. '%');
    // }
    
      $totalRecords = count($recordsQuery);
      $totalRecordswithFilter = count($recordsQuery);
      $records = array_slice($recordsQuery,$start,$rowperpage);
  
      
  
    $data_arr = array();
      $i=1;
      foreach($records as $record){
          $sl_no=$i;
          $id  = $record["id"];

          $action = '<a href="#" class="btn btn-sm btn-outline-primary m-1 editButton small btn-sm" data-id="'.$record["id"].'">Edit</a><a href="#" class="btn btn-sm btn-outline-danger m-1 deleteButton btn-sm small" data-id="'.$record["id"].'"   >Delete</a><a href="#" class="btn btn-sm btn-outline-success m-1 viewButton btn-sm small" data-id="'.$record["id"].'"   >View</a>';
          $data_arr[] = array(
            "ID"     =>$record["id"],
            "Name"     =>$record["name"],
            "Image"     =>"<img src='".asset("/images/loader.gif")."' data-src='".$record["image"]."' class='img-thumbnail image' width='70px'  />",
            "Gender"     =>$record["gender"],
            "Address"     =>$record["address"],
            "Action"      =>$action,        
          );
          $i++;
  
      }  
      $response = array(
          "draw" => intval($draw),
          "iTotalRecords" => $totalRecords,
          "iTotalDisplayRecords" => $totalRecordswithFilter,
          "aaData" => $data_arr
      );
    
    echo json_encode($response);
    }
    public function getOne($id){
        $data = $this->getRowById($id);
        if($data)
        return response(['status' => true, "data" => $data,"message"=>"Data fetched successfully"], 200);
        else 
        return response(['status' => $data, "data" => $data,"message"=>"No records found with given ID"], 400);

    }    
    public function delete($id){
        $data = $this->getRowById($id);
        if($data)
        {
            if($this->deleteRowById($id))
            return response(['status' => true, "data" => $data,"message"=>"Data deleted successfully"], 200);
            else
            return response(['status' => $data, "data" => $data,"message"=>"There was some error"], 400);
      
        }
          else 
        return response(['status' => $data, "data" => $data,"message"=>"No records found with given ID"], 400);
    }
    public function save(Request $request,$id=null){
        
        try {
            //validating incoming data  
            $validator = Validator::make($request->all(), [
                "name" => "required|string|min:2",
                "address" => "required|string|min:5",
                "gender" => "required|string",
                'image' => 'mimes:jpeg,jpg,png,gif' // mimetype acceptable for image file
            ]);
            if ($validator->fails()) {
                return response(['status' => false, "errors" => $validator->errors(),"message"=>"Validation error, please check the form"], 400);
            }
            else{
                //save the image and get the path
                if($request->image && !empty($request->image)){
                    $imagepath = "storage/".request('image')->store($this->folder_name, 'public');
                }
                else 
                    $imagepath = !empty($id) ? $this->getRowById($id)["image"] : "";
               
                $new_row = [
                    "id" => empty($id) ?  $this->getNewId() : $id,
                    "name" => $request->name,
                    "address" => $request->address,
                    "gender" => $request->gender,
                    "image" => $imagepath
                ];
                if(empty($id))
                Session::push("users",$new_row);
                else
                $this->updateRow($id,$new_row);
                return response(['status' => true, "data" => $new_row,"message"=>"Data added successfully"], 200);

            }
        } catch (\Throwable $th) {
            return response(['status' => false, "errors" => $th->getMessage(),"message"=>"There is something wrong!"], 500);
    
        }
       
    }

    //function to generate new ID
    private function getNewId(){
        $last_id = Session::get("last_id");
        Session::forget('last_id');
        $last_id = $last_id +1;
        Session::put("last_id",$last_id);

        return $last_id;

    }

    //function to update a particular row
    private function updateRow($id,$row_data){
        $data = Session::get("users");
        Session::forget('users');
        foreach ($data as $key => $row) {
          if($row["id"] == $id){
            $data[$key] = $row_data;
            break;
          }
        }
        Session::put("users",$data);
        return true;
    }

    //private function get row details by ID
    private function getRowById($id){
        $data = Session::get("users");
        foreach ($data as $key => $row) {
            if($row["id"] == $id){
             return $row;
            }
        }
        return false;
    }

    private function deleteRowById($id){
        $data = Session::get("users");
        Session::forget('users');
        foreach ($data as $key => $row) {
          if($row["id"] == $id){
            unset($data[$key]);
            break;
          }
        }
        Session::put("users",$data);
        return true;
    }
}
