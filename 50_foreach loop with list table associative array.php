<?php

//indexted array


$emp = [
    [
        "id" => 1,
        "Name" => "Robeen",
        "Designation" => "Manager",
        "Salary" => 80000
    ],
    [
        "id" => 2,
        "Name" => "Raju",
        "Designation" => "Computer Operator",
        "Salary" => 20000
    ],
    [
        "id" => 3,
        "Name" => "Rokib",
        "Designation" => "Salesman",
        "Salary" => 15000
    ],
    [
        "id" => 4,
        "Name" => "Ebu",
        "Designation" => "Driver",
        "Salary" => 10000
    ]
];

echo "<table border='2px' cellpadding='5px' cellspacing='0'>

     <tr>
        <th> Employee No. </th>
        <th> Name </th>
        <th> Designation </th>
        <th> Salary </th>
     </tr>";

foreach($emp as list("id" => $id, "Name" => $name, "Designation" => $designation, "Salary" => $salary)){
    echo "<tr>
    <td> $id </td>
    <td> $name </td>
    <td> $designation </td>
    <td> $salary </td></tr>";
}

echo "</table>";

?>

<!-- yahoo baba v37 -->