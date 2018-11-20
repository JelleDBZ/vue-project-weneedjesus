<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model 
{
    public $timestamps = false;


    function trim($item){
        $trimmed = !empty($item) ? trim($item) : null;
        return $trimmed;
    }
//TODO: check if email already exists in db
    public function valid($em){
        if (!filter_var($em, FILTER_VALIDATE_EMAIL)){ 
            echo "Invalid email format";
        }
        return !filter_var($em, FILTER_VALIDATE_EMAIL) === false;
    }

    public function validPw($pw, $cpw){
        if($pw == $cpw){
            return md5($pw);
        }
        return "Passwords don't match!";
    }
}