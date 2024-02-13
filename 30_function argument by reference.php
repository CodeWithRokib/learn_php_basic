<?php

function testing(&$string){
    $string .= " and something extra";  // .= mean $a = $a . statement

}

$str = "This is a string";
testing($str);
echo $str;



?>