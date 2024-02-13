<?php

class abc{
    public function __construct(){
        echo "This is Construct Function \n" . "<br>";
    }

    public function hello(){
        echo "Hello Everyone \n" . "<br>";
    }

    public function __destruct(){
        echo "This is Destruct Function \n" . "<br>";
    }
}

$test = new abc();

$test->hello();
$test->hello();
$test->hello();

?>