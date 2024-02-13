<?php

$student = [
    "Robeen",
    "Raju",
    "Ebu",
    "Rokib"
];

$color = [
    "black",
    "blue",
    "white",
    "green"
];

$c = array_replace($student , $color);

echo "<pre>";
print_r($c);
echo "</pre>";

?>