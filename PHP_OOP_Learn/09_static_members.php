<?php

class base{

    public static $name = "Robeen Priom";

    public static function show(){
        echo self::$name;
    }
}

echo base::$name . "<br>";

echo base::show();

?>