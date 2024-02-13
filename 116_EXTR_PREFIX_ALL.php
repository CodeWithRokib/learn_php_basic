<?php

//yahoo baba v-61

$a = "Mango";
$fruits = [
    "a" => "Lemon",
    "b" => "Orange",
    "c" => "Banana"
];

extract($fruits, EXTR_PREFIX_ALL, "test");

echo "Value of a : $a <br>";
echo "Value of a : $test_a <br>";
echo "Value of b : $test_b <br>";
echo "Value of c : $test_c <br>";



?>