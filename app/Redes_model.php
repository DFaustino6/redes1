<?php

namespace App;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Cookie;

class Redes_model 
{
    public static function get_content($chapter_id){
        $sql  = "SELECT id,image,chapter_id,description
             FROM powerpoint WHERE chapter_id='$chapter_id'";
        $query=DB::select($sql);
        return $query;
    }

    public static function get_chapter($id){
        $sql  = "SELECT id,name
             FROM chapters WHERE id='$id'";
        $query=DB::select($sql);
        return $query;
    }

     public static function getAll_chapter(){
        $sql  = "SELECT id,name
             FROM chapters";
        $query=DB::select($sql);
        return $query;
    }  

}   
?>