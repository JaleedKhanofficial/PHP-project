<?php 

use Illuminate\Support\Collection;

require __DIR__ . '/../vendor/autoload.php';

$numbers = new Collection([
    11,12,13,14,15,16,17,18,19,10
]);

if ($numbers->contains(15)){
    die('it contains******* 15');
}

?>