<?php
function sum($math, $phy, $chem){
    $s = $math + $phy +$chem;
    return $s;
}

function percentage($st){
    $per = $st / 3;
    echo $per . "%";
}

$total = sum(77,88,99);
percentage($total);

?>