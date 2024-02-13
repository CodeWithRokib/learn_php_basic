<?php
//yahoo baba v-75

$str = "I am 'Robeen Priom'";
echo $str . "<br>";

$newstr = addslashes($str);

echo stripcslashes($newstr);

?>