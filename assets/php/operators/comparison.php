<?php

#echo"Hello PHP Comparison operator \n";

$a = 20;
$b = "10";

$equal = $a == $b;
var_dump("$equal\n");

$not_equal = $a !== $b;
echo"$not_equal\n";


$identical = $a === $b;
var_dump($identical);

$not_identical = $a === $b;
echo($not_identical);

$greater = $a > $b;
var_dump($greater);

$less = $a < $b;
var_dump($less);

$greater_or_equal = $a >= $b; 
var_dump($greater_or_equal);

$less_or_equal = $a <= $b; 
var_dump($less_or_equal);

//২টি সংখ্যার মধ্যে তুলনা করতে হবে।
$number1 = 10;
$number2 = 20;

if($number1 < $number2) {
    echo" $number1 is less than $number2 ";
}else{
    echo" $number1 is not less than $number2 ";
}

