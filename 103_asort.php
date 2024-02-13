<?php

//yahoo baba v-58
//ascending sort

$fruits = [
    'c' => "Lemon",
    'd' => "Orange",
    'e' => "Banana",
    'b' => "Apple",
    'a' => "Jackfruit"  
];

$veggie = [
    'c' => "potato",
    'd' => "carrot",
    'e' => "ladiesfinger"
];

array_multisort($fruits, $veggie, $hero, $dc);

echo "<pre>";
print_r($fruits);
echo "</pre>";

echo "<pre>";
print_r($veggie);
echo "</pre>";



?>