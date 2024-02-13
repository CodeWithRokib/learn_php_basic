<?php
//for associative array
$age = [
    "robeen" => 24,
    "nayeem" => 23,
    "patwary" => 22,
    "ebu" => 21,
    "rokib" => 22,
    "raju" => 24
];

$newArray = array_chunk($age, 2, true);  //third perameter true is the presereve value,for this there will also shows the values with their reel keys.

echo "<pre>";
print_r($newArray);
echo "</pre>";

?>