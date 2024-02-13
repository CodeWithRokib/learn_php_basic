<?php

$array = [
    [
        'nubid' => 1449,
        'name' => 'robeen',
        'sec' => 'A'
    ],
    [
        'nubid' => 1467,
        'name' => 'patwary',
        'sec' => 'B'
    ],
    [
        'nubid' => 1517,
        'name' => 'nayeem',
        'sec' => 'C'
    ]
];

$newArray = array_column($array, 'name');

echo "<pre>";
print_r($newArray);
echo "</pre>";

?>