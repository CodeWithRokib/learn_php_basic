<?php

$marks = [
    "Robeen" => [
        "Physics" => 93,
        "Math" => 95,
        "ICT" => 97
    ],

    "Raju" => [
        "physics" => 91,
        "Math" => 94,
        "ICT" => 89
    ],

    "Rokib" => [
        "Physics" => 90,
        "Math" => 89,
        "ICT" => 91
    ]
];

echo "<table border='2px' cellpadding='5px' cellspacing='0'>
     <tr>
       <th> Name </th>
       <th> Physics </th>
       <th> Math </th>
       <th> ICT </th>
    </tr>";

foreach($marks as $key => $v1){
    echo "<tr> <td> $key </td> ";
    foreach($v1 as $v2){
        echo "<td> $v2 </td> " ;
    }
    echo "</tr>";
}
echo "</table>";

?>

<!-- yahoo baba php v36 -->