<?php

$number = 100;
var_dump(is_int($number));

$txt = "Akib islam";
// var_dump($txt);

$numfloat = 5.5;
var_dump(is_float($numfloat));
echo"\n";
// $num2float = 5.5;
var_dump(is_double($numfloat));

echo"Numarical string start here\n";
// Numarical string
$x = 5947;
var_dump(is_numeric($x));

$y = "5859";
var_dump(is_numeric($y));

$z = "5859" + 7583;
var_dump(is_numeric($z));

$n = "Numeric string";
var_dump(is_numeric($n));

//Float to integer
echo"Float to integer start here\n";
$floatToInteger = 23465.768;
$int_cast = (int)$floatToInteger;
echo"$int_cast\n";

//String to integer
echo"String to integer start here\n";
$stringToInteger = "23465.768";
$int_cast2 = (int)$stringToInteger;
echo"$int_cast2";
