<?php
//yahoo baba v-91

$date = date_create("2019-04-03");

date_modify($date, "10 days"); //if -10 days then date will sub.

echo date_format($date, "d-m-Y");

?>