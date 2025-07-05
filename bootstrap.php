<?php 

use Core\App;
use Core\Container;
use Core\DataBase;


// Step 1: Create container instance
$container = new container();


// Step 2: Bind Core\DataBase into the container
$container->bind('Core\DataBase', function (){
    $config = require base_path("config.php");
    
    return new DataBase($config['database']);
});

// Step 3: Set container into the App
App::setContainer($container);
