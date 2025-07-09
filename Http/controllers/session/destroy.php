<?php 

use Core\Authenticator;

// Create an Authenticator instance and call logout
$auth = new Authenticator();
$auth->logout();

header('location: /');
exit();

?>