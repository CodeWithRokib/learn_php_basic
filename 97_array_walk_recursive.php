<?php

//yahoo baba v-55

$animals = [
    "1" => "tiger",
    "2" => "Chittah",
    "3" => "lion"
];

$fruits = [
    $animals,
    "a" => "Lemon",
    "b" => "Orange",
    "c" => "Banana",
    "d" => "Apple"
];

array_walk_recursive($fruits, "myFunction", "is a key of");

function myFunction($value, $key, $param){
    echo "$key $param $value <br> ";
}

?>