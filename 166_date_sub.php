<?php
//yahoo baba v-91

$date = date_create("2019-04-03");

date_sub($date, date_interval_create_from_date_string("199 days"));

echo date_format($date, "d-m-Y");

?>