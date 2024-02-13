<?php

//yahoo baba v-53

$name = ["robeen", "nayeem", "rokib", "patwary", "ebu"];

$newArray = array_rand($name,2);

echo "<pre>";
print_r($newArray);
echo "</pre>";


echo $name[$newArray[0]] . "<br>";
echo $name[$newArray[1]];


?>