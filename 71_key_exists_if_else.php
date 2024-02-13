<?php

$color = [
    "name1" => "black",
    "name2" => "blue",
    "name3" => "white"
];

$newArray = key_exists("name3", $color);

if($newArray){
    echo "Key exists!";
}
else{
    echo "Key does not exists!";
}

?>