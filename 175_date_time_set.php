<?php
//yahoo baba v-95

$date = date_create("2023-03-04");

date_time_set($date , 13 , 20);

echo date_format($date, "d-m-Y H:i:s");

?>