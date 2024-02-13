<?php

//yahoo baba v-58

$fruits = ['orange', 'mango', 'banana', 'apple', 'jackfruit'];
$colors = ['black', 'blue', 'white', 'red', 'green'];

array_multisort($fruits, $colors);


echo "<pre>";
print_r($fruits);
echo "</pre>";


echo "<pre>";
print_r($colors);
echo "</pre>";



?>