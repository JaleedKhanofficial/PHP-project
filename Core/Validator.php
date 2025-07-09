<?php 

namespace Core;

class Validator{
    //the string function can validator the characters its means that when a user enter more 1000 words or less then one(spaces) than this dont works
        public static function string($value, $min = 1, $max = INF){
        $value = trim((string)$value);
        return strlen($value) >= $min && strlen($value) <= $max;
    }

    public static function email($value){
        // validator email
        return filter_var($value, FILTER_VALIDATE_EMAIL);

    }
    

}

?>