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
        return response(["status" => true , "data" => Session::get("users")  ]);
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
                    $imagepath = "//storage/".request('image')->store($this->folder_name, 'public');
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
}
