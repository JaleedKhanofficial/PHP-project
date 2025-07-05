<?php 

use Core\App;
use Core\DataBase;

$db = App::resolve(DataBase::class);

$notes = $db->query('select * from notes where user_id =1')->get();


view("notes/index.view.php", [
    'heading' => 'My Notes',
    'notes' => $notes
]);
?>