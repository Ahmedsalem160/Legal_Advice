<?php

namespace App\Traits;


trait FileTrait{


    public function save_file($file, $file_path)
    {//getClientOriginalExtension
        //file_name = name of file and extention, file_path = the place that the file will saved in "folder"
        $file_extention = $file->getClientOriginalExtension(); // to get extention of file .pdf,.jpg,....
        if ($file_extention =="pdf") {
            $file_name = "file".time().$file_extention;
        }else{
            $file_name = "img".time().$file_extention;
        }
        $file->move($file_path, $file_name);


        return $file_name; // name that will store in db
    }
}