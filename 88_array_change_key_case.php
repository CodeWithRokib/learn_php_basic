<?php
//yahoo baba v-51
$age = [
    "robeen" => "cse",
    "nayeem" => 'bba',
    "patwary" => "eee",
];

$newArray = array_change_key_case($age, CASE_UPPER); //CASE_UPPER means all keys letter will be big letter,
                                                     //CASE_LOWER means all keys letter will be small letter.
                                                     //but CASE_LOWER is the default parameter

echo "<pre>";
print_r($newArray);
echo "</pre>";

?>

