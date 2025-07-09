<?php

use Core\Response;

function dd($value){
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

function urlIs($value){
    return $_SERVER['REQUEST_URI'] === $value;
}

function abort($code = 404){
    http_response_code($code);
    require base_path("views/{$code}.php");
    die();

}

function authorize($condition, $status = Response::FORBIDDEN){
    if (! $condition){
        abort($status);
    }
}

function base_path($value){
    return BASE_PATH . $value;
}

function view($path, $attribute = []){
    extract($attribute);
    require base_path('views/' . $path); // /views/index.php
}

function redirect($path){
    header("location: {$path}");
    exit();
}

function old($key, $default = null){
    return Core\Session::get('old')[ $key ] ?? $default;
}


?>