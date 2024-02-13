<?php

$emp = [   //outer array
    [1,"Robeen","Manager",80000],  //inner array
    [2,"Raju","Computer Operator",20000],
    [3,"Rokib","Salesman",15000],
    [4,"Ebu","Driver",10000]
];


echo "<table border='2px' cellpadding='5px' cellspacing='0'>";
echo "<tr>

         <th> Employee No. </th>
         <th> Name </th>
         <th> Designation </th>
         <th> Salary </th>

      </tr>";

foreach($emp as $v1){
    echo "<tr>";
    foreach($v1 as $v2){
        echo "<td> $v2 </td> ";
    }
    echo "</tr>";
}
echo "</table>";
 
?>