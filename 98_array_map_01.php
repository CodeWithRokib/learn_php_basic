<?php

//yahoo baba v-56
//it's for single array

function square($n){
    return $n * $n;
}

$a = [1,2,3,4,5];

$newArray = array_map('square', $a);

echo "<pre>";
print_r($newArray);
echo "</pre>";

?>