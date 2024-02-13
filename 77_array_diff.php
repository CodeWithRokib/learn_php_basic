<?php

//different values

$a = ["a" => "robeen", "b" => "nayeem", "c" => "patwary", "d" => "ebu"];
$b = ["a" => "robeen", "e" => "nayeem", "d" => "ebu"];

$newArray = array_diff($a, $b);

echo "<pre>";
print_r($newArray);
echo "</pre>";

?>

