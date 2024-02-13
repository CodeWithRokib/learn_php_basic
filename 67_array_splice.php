<?php

$color = ["blue", "black", "white", "brown", "purple"];

$fruit = ["orange", "mango"];

array_splice($color, 0, 2, $fruit);

echo "<pre>";
print_r($color);
echo "</pre>";


?>