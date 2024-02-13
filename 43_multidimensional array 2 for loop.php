<?php

$emp = [   //outer array
    [1,"Robeen","Manager",80000],  //inner array
    [2,"Raju","Computer Operator",20000],
    [3,"Rokib","Salesman",15000],
    [4,"Ebu","Driver",10000]
];

for($row = 0; $row < 4; $row++){
    for($col = 0; $col < 4; $col++){
        echo $emp[$row][$col] . " ";
    }
    echo "<br>";
}


?>