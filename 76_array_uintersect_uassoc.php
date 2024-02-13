<?php


function compare($a1, $b2){
    if($a1 === $b2){
        return 0;
    }
    return ($a1 > $b2)? 1 : -1;
}

function compareValue($a1, $b2){
    if($a1 === $b2){
        return 0;
    }
    return ($a1 > $b2)? 1 : -1;
}

$a = ["a" => "robeen", "b" => "nayeem", "c" => "patwary", "d" => "ebu"];
$b = ["a" => "robeen", "e" => "nayeem", "d" => "ebu"];

$newArray = array_uintersect_uassoc($a, $b, "compare", "compareValue");

echo "<pre>";
print_r($newArray);
echo "</pre>";

?>