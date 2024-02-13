<?php

$x = 15;
$y = 10;

function test(){
    global $x , $y;
    $x = $x + $y;
}

test();
echo $x;

?>