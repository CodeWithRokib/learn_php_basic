<?php

$color = [
    "first" => "black",
    "second" => "white",
    "third" => "blue"
];

$newArray = array_key_exists("second", $color);

echo "<pre>";
print_r($newArray);
echo "</pre>";

?>