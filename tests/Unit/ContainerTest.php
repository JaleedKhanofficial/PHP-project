<?php

use Core\Container;

test('that true is true', function (){
    // arrange 
    $container = new Container();
    $container->bind('foo', fn()=>'bar');

    // act
    $result = $container->resolve('foo');
    
    // assert/expect
    expect($result)->toEqual('bar');

});
