<?php

interface parent1{

    function calc($a, $b);
}

interface parent2{

    function sub($c, $d);
}

class childclass implements parent1, parent2{

    public function calc($a, $b){
        echo $a + $b . "<br>";
    }

    public function sub($c, $d){
        echo $c - $d;
    }
}

$test = new childclass();

echo $test->calc(15, 5);
echo $test->sub(15, 5);

?>