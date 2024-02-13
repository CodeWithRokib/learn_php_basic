<?php

$fruit = ['a' => "orange", 'b' => "banana", 'c' => "mango"];
$veggie = ['b' => "carrot", 'e' => "pea"];

$newArray = array_merge_recursive($fruit, $veggie);

echo "<pre>";
print_r($newArray);
echo "</pre>";

?>