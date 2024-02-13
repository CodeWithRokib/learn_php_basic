<?php

class base{
    public $name = "Parent Class" . "<br>";

    public function calc($a, $b){
        return $a * $b  . "<br>";
    }
}

class derived extends base{

    public function calc($a, $b){
        return $a + $b;
    }
}

$test = new base();

$rate = new derived();

echo $test->calc(10,5);
echo $rate->calc(10,5);

?>