<?php

$emp = [   //outer array
    [1,"Robeen","Manager",80000],  //inner array
    [2,"Raju","Computer Operator",20000],
    [3,"Rokib","Salesman",15000],
    [4,"Ebu","Driver",10000]
];

foreach($emp as list($id, $name, $designation, $salary)){
    echo "$id $name $designation $salary <br>";
}


?>

<!-- yahoo baba v37 -->