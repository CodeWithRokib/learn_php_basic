<?php

trait hello{
    public function sayhello(){
        echo "Hello Everyone" . "<br>";
    }
}

class base{
    use hello;
}

class base2{
    use hello;
}

$test = new base();
$test2 = new base2();

$test->sayhello();
$test2->sayhello();

?>