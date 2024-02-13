<?php

abstract class parentclass{
    public $name;

    abstract protected function calc($a, $b);
}

class childclass extends parentclass{

    public function calc($c, $d){
        echo $c + $d;
    }
}

$test = new childclass();
echo $test->calc(30, 10);

?>