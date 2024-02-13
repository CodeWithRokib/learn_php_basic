<?php

//yahoo baba v-59

$fruits = ['orange', 'mango', 'banana', 'apple', 'jackfruit'];

echo "<b> Current: </b>" . current($fruits) . "<br>";
echo  "<b> key: </b>" . key($fruits) . "<br>";
echo "<b> pos: </b>" . pos($fruits) . "<br>";

next($fruits);
echo "<b> Current: </b>" . current($fruits) . "<br>";

next($fruits);
echo "<b> Current: </b>" . current($fruits) . "<br>";

prev($fruits);
echo "<b> Current: </b>" . current($fruits) . "<br>";

end($fruits);
echo "<b> Current: </b>" . current($fruits) . "<br>";
echo  "<b> key: </b>" . key($fruits) . "<br>";


reset($fruits);
echo "<b> Current: </b>" . current($fruits) . "<br>";

?>