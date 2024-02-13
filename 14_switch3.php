<?php
$age = 18;

switch(true){
    case ($age >= 18 && $age <= 25):
        echo "You are eligible";
    break;

    case ($age < 18 && $age >= 1):
        echo "You are not eligible";
    break;

    default:
        echo "Enter the valid age";
}
?>