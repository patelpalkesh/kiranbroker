<?php
namespace App\Helpers;

class Helpers
{
    public static function ViewRender($v,$array=[]){
        return view($v,$array);
   }
}
