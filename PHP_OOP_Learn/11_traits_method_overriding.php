<?php

trait hello{
    public function sayhello(){    //priority 2nd, which function used in trait.
        echo "Hello from trait.\n";
    }
}

class base{
    public function sayhello(){  //priority third, which function extended.
        echo "Hello from base class.\n";
    }
}

class child extends base{
    use hello;
    public function sayhello(){  //priority first,which function used in this class.
        echo "Hello from child class.\n";
    }
}

$test = new child();

$test->sayhello();

?>