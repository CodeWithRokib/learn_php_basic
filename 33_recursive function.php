<?php

function display($num){
    if($num <= 30){
        echo "$num <br>";
        display($num + 3 );
    }
}

display(3);

?>