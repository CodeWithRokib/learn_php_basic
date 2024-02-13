<?php
//yahoo baba v-90

$date1 = date_create("2023-04-04");
$date2 = date_create("2023-10-19");

$diff = date_diff($date1, $date2);

echo $diff-> days . " days";

echo "<pre>";
print_r($diff);
echo "</pre>";

?>