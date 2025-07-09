<?php 

it('Validates a string', function(){
    $result = \Core\Validator::string('Hello World');
    expect($result)->toBeTrue();
});

?>