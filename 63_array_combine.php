<?php

$name = ["Robeen", "Nayeem", "Patwayr","Rokib"];
$age = ["24", "23", "22", "21"];

$newArray = array_combine($name, $age);

echo "<pre>";
print_r($newArray);
echo "</pre>";

?>