<?php 

namespace App\Support;

class Helper {

    Public static function setSelect($arg1,$arg2)
    {
        if($arg1 == $arg2){
            return 'selected';
        }

        return null;
    }
}