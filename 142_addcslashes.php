<?php
//yahoo baba v-75

$str = "I am 'Robeen Priom'";
echo $str . "<br>";

$newstr = addcslashes($str, "e");

echo stripcslashes($newstr);

?>