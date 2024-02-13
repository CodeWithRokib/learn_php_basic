<?php

$fruit = ['a' => "orange", 'b' => "mango"];
$color = ['c' => "black", 'd' => "blue"];

$new = array_merge($fruit, $color);

echo "<pre>";
print_r($new);
echo "</pre>";

?>