<?php

class person{
    public $name = "No Name";
    public $age = 3;

    function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }

    function show(){
        echo $this->name . " - " . $this->age . "<br>" . "\n";
    }
}

$p1 = new person("Robeen", 25);
$p2 = new person("Akash", 22);
$p3 = new person("Tuhin", 23);


$p1-> show();
$p2-> show();
$p3-> show();

?>