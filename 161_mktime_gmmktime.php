<?php
//yahoo baba v-88

echo "Time & Date :" . date("d-m-Y h:i:sa") . "<br> <br>";

echo date("d-m-Y", mktime(0,0,0,10,15,2003)) . "<br> <br>";

echo date("d-m-Y", gmmktime(0,0,0,10,15,2003));

?>