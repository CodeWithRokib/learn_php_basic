<?php

//yahoo baba v-61

$a = "Mango";
$fruits = [
    "a" => "Lemon",
    "b" => "Orange",
    "c" => "Banana"
];

extract($fruits, EXTR_SKIP);

echo "Value of a : $a <br>";
echo "Value of b : $b <br>";
echo "Value of c : $c <br>";



?>