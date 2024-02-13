<?php

//yahoo baba v-58
//ascending sort for keys

$fruits = [
    "c" => "Lemon",
    "d" => "Orange",
    "e" => "Banana",
    "b" => "Apple",
    "a" => "Jackfruit"
];

ksort($fruits);

echo "<pre>";
print_r($fruits);
echo "</pre>";

?>