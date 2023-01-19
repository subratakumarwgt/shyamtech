<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public $folder_name;

    public function __construct(){
        $this->folder_name = "userimage";
    }
    
    public function save(Request $request,$id=null){
        
        try {
            //validating incoming data  
            $validator = Validator::make($request->all(), [
                "name" => "required|string|min:2",
                "address" => "required|string|min:5",
                "gender" => "required|string",
                'image' => 'mimes:jpeg,jpg,png,gif|required|max:10000' // max 10000kb
            ]);
            if ($validator->fails()) {
                return response(['status' => false, "errors" => $validator->errors(),"message"=>"Validation error, please check the form"], 400);
            }
            else{
                //save the image and get the path
                $imagepath =  request('image')->store($this->folder_name, 'public');
                return response(['status' => true, "image_path" => "//storage/".$imagepath,"message"=>"Data validated successfully"], 200);
                    
            }
        } catch (\Throwable $th) {
            return response(['status' => false, "errors" => $th->getMessage(),"message"=>"There is something wrong!"], 500);
    
        }
       
    }
}
