<?php

// create new array with the unique values,duplicate values use only one time

$a = ["a" => "robeen", "b" => "nayeem", "c" => "robeen", "d" => "ebu"];

$newArray = array_unique($a);

echo "<pre>";
print_r($newArray);
echo "</pre>";

?>