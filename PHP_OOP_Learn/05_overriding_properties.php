<?php

class base{
    public $name = "Parent Class" . "<br>";
}

class derived extends base{
    public $name = "Child Class";
}

$test = new base();

$rate = new derived();

echo $test->name;
echo $rate->name;

?>