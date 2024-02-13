<?php

//yahoo baba v-58
//descending sort for keys

$fruits = [
    "c" => "Lemon",
    "d" => "Orange",
    "e" => "Banana",
    "b" => "Apple",
    "a" => "Jackfruit"
];

krsort($fruits);

echo "<pre>";
print_r($fruits);
echo "</pre>";

?>