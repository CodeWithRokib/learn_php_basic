<?php

$a = ["a" => "robeen", "b" => "nayeem", "c" => "patwary", "d" => "ebu"];
$b = ["a" => "robeen", "e" => "nayeem", "d" => "ebu"];

$newArray = array_intersect_key($a, $b);

echo "<pre>";
print_r($newArray);
echo "</pre>";

?>