<?php

$color = [
    "first" => "black",
    "second" => "white",
    "third" => "blue"
];

$newArray = array_key_last($color);

echo "<pre>";
print_r($newArray);
echo "</pre>";

?>