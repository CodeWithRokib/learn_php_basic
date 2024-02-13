<?php
$num = 55;


if($num >= 35 && $num <= 39){
    echo "your great is C";
}
elseif($num >= 40 && $num <= 49){
    echo "your great is B-";
}
elseif($num >= 50 && $num <= 59){
    echo "your great is B";
}
elseif($num >= 60 && $num <= 69){
    echo "your great is A-";
}
elseif($num >= 70 && $num <= 79){
    echo "your great is A";
}
elseif($num >= 80 && $num <= 100){
    echo "your great is A+";
}
elseif($num < 35){
    echo "you are fail";
}
else{
    echo "input valid number";
}

?>