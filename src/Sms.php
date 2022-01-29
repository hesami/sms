<?php

namespace Hesami\Sms;

class Sms
{
    public static function send(String $receptor , String $message ){

        return $receptor."  ".$message;
    }


    public static function getBalance(){
        return 0;
    }


}
