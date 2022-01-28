<?php

namespace Islamtareqgit\Packagist;
Class Tareq{

    
    /**
     * Make slug
     */


     public static function slugMake($title)
     {
       $lowerdata = strtolower($title);
       return str_replace(' ', '-', $lowerdata);
     }

     // Array to JSON Convert

     public function jsonEnc(Array $arr)
     {
       return json_encode($arr);
     }


     //  JSON to array Convert

     public static function jsondecode(String $str, $type = false)
     {
       return json_decode($str, $type);
     }


     // Random number generate

     public function randNum()
     {
      return rand();
     }

     // Unique name

     public function uname($ext)
     {
       return md5(time().rand()).'.'.$ext;
     }

}





?>