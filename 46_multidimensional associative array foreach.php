<?php

$marks = [
    "Robeen" => [
        "Physics" => 93,
        "Math" => 95,
        "ICT" => 97
    ],

    "Raju" => [
        "physics" => 91,
        "Math" => 94,
        "ICT" => 89
    ],

    "Rokib" => [
        "Physics" => 90,
        "Math" => 89,
        "ICT" => 91
    ]
];

foreach($marks as $key => $v1){
    echo $key . " ";
    foreach($v1 as $v2){
        echo $v2 . " " ;
    }
    echo "<br>";
}

?>