<?php
//yahoo baba v-76

//$str = "A 'quote' is <b> Bold </b> ";

$str = '<a href="www.robeen.com">Robeen</a>';
echo $str . "<br><br>";

$newstr = htmlentities($str);
echo $newstr;

echo html_entity_decode($newstr);

?>