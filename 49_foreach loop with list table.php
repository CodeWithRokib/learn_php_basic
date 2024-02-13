<?php

//indexted array

$emp = [   //outer array
    [1,"Robeen","Manager",80000],  //inner array
    [2,"Raju","Computer Operator",20000],
    [3,"Rokib","Salesman",15000],
    [4,"Ebu","Driver",10000]
];

echo "<table border='2px' cellpadding='5px' cellspacing='0'>

     <tr>
        <th> Employee No. </th>
        <th> Name </th>
        <th> Designation </th>
        <th> Salary </th>
     </tr>";

foreach($emp as list($id, $name, $designation, $salary)){
    echo "<tr>
    <td> $id </td>
    <td> $name </td>
    <td> $designation </td>
    <td> $salary </td></tr>";
}

echo "</table>";

?>

<!-- yahoo baba v37 -->