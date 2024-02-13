<?php

//yahoo baba v-55

$fruits = [
    "a" => "Lemon",
    "b" => "Orange",
    "c" => "Banana",
    "d" => "Apple"
];

array_walk($fruits, "myFunction", "is a key of");

function myFunction($value, $key, $param){
    echo "$key $param $value <br> ";
}

?>