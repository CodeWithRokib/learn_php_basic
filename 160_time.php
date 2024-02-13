<?php
//yahoo baba v-87

echo "hour is :" . date("h") . "<br>";
echo "hour is :" . date("H") . "<br>";
echo "hour is :" . date("g") . "<br>";
echo "hour is :" . date("G") . "<br>";

echo "Minutes is :" . date("i") . "<br>";

echo "Seconds is :" . date("s") . "<br>";

echo "Meridiem is :" . date("a") . "<br>";

echo "Time is :" . date("h:i:sa") . "<br>"; //default. it's show the php server's timezone.

date_default_timezone_set("Asia/Dhaka");  //for set present timezone of me or programmer.
echo "Time is :" . date("h:i:sa") . "<br>";

?>