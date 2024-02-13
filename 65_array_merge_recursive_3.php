<?php

$fruit = ['a' => "orange", 'b' => "banana", 'c' => "grapes"];
$veggie = [ 'b' => ['color' => ['white', 'blue', 'black']],
            'e' => "pea",
            'f' => "carrot"
          ];

$newArray = array_merge_recursive($fruit, $veggie);

echo "<pre>";
print_r($newArray);
echo "</pre>";


?>