<?php

//yahoo baba v-57

function myFunction($n, $m){
    return $n . "-" . $m;
}

$a = ['lemon', 'orange', 'banana', 'apple', 'mango'];

$newArray = array_reduce($a, 'myFunction', "potato");

echo "<pre>";
print_r($newArray);
echo "</pre>";


?>