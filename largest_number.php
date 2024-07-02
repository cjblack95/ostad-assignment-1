<?php

$num1 = 4;
$num2 = 5;
$num3 = 6;

if($num1>$num2 && $num1>$num3){
    echo $num1." Largest Number";
}
elseif ($num2>$num1 && $num2>$num3){
    echo $num2." Largest Number";
}
else{
    echo $num3." Largest Number";
}