<?php
//yahoo baba v-94

echo strftime("%B %d %Y, %X %Z") . "<br>";
echo strftime("%B %d %Y, %X %Z", mktime(21,30,0,05,19,2005)) . "<br>"; //current time of the server


echo gmstrftime("%B %d %Y, %X %Z", mktime(21,30,0,05,19,2005)) . "<br>"; //add gm for current time of programmer

?>