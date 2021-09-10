<?php
namespace itrax\core;

class helper{
     static function redirect($path){
               header("LOCATION:".ASSETS."/".$path);
     }
     static function url($path)
     {
         return ASSETS.$path;
     }
}

?>