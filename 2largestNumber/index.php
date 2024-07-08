<?php 

$num1 = 4;
$num2 = 2;
$num3 = 6;

if($num1>$num2 && $num1>$num3){
    echo "The Largest Number is :" .$num1;
}
else if($num2>$num1 && $num2>$num3){
    echo "The Largest Number is :" .$num2;
}
else{
    echo "The Largest Number is :" .$num3;
}