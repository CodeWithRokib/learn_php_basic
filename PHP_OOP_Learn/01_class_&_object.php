<?php

class calculation{
   public $a, $b, $c;
   

   function sum(){
    $this->c = $this->a + $this->b;
    return $this->c;
   }

   
   function sub(){
    $this->c = $this->a - $this->b;
    return $this->c;
   }

   function multi(){
      $this->c = $this->a * $this->b;
      return $this->c;
   }

}

$c1 = new calculation();

$c1->a = 55;
$c1->b = 33;

$c2 = new calculation();

$c2->a = 44;
$c2->b = 22;

$c3 = new calculation();

$c3->a = 5;
$c3->b = 3;

echo "Sum Value of C1: " . $c1->sum() . "\n" . "<br>";
echo "Subtraction Value of C2: " . $c2->sub() . "\n" . "<br>";
echo "multification of c3: " . $c3->multi() . "\n" ;

?>