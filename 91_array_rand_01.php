<?php

//yahoo baba v-53

$name = ["robeen", "nayeem", "rokib", "patwary", "ebu"];

$newArray = array_rand($name);

echo "<pre>";
print_r($newArray);
echo "</pre>";

echo $name[$newArray];


?>