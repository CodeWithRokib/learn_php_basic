<?php

$bikes = [
    "Fazer",
    "R15",
    "FZ-X",
    "Suzuki Gixxer",
    "Avengers 150",
    "Taro GP- ONE"
];

$newArray = array_chunk($bikes, 3);

echo "<pre>";
print_r($newArray);
echo "</pre>";

?>