<?php

//yahoo baba v-58
//descending sort

$fruits = [
    "c" => "Lemon",
    "d" => "Orange",
    "e" => "Banana",
    "b" => "Apple",
    "a" => "Jackfruit"
];

arsort($fruits);

echo "<pre>";
print_r($fruits);
echo "</pre>";

?>