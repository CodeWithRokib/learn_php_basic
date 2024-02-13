<?php

//yahoo baba v-56
//it's for multiple array

function square($n, $m){
    return "$n = $m";
}

$a = [1,2,3,4,5];
$b = ['lemon', 'orange', 'banana', 'apple', 'mango'];

$newArray = array_map('square', $a, $b);

echo "<pre>";
print_r($newArray);
echo "</pre>";

?>