<?php
/*Logical operator তিনটি ।
১। and ==> && ==> Ampersand 
২। or ==> || ==> Pipe or bar
৩। not ==> ! ==> Exclamation mark

*/
$t = true;
$f = false;

$and = $t && $f;
var_dump($and);

$or = $t || $f;
var_dump($or);

$not =  ! $f;
var_dump($not);

var_dump($t && $f);
var_dump($t || $f);
var_dump(!$f);