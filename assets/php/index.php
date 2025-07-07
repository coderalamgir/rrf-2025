<?php
/*
echo"Hello PHP";





$name = "Akib";


$num1 = 10;
$num2 = 5;
$total_number = $num1 + $num2;
echo "$total_number";



function address(){
    echo"This is my Address.";
}

address();

$my_name // Snake_case
$myName // camelCase
$My_Name // Pascal_Case

// php তে constant লেখার নিয়ম। ২ভাবে constant লেখা যায়। 

১। define() ফাংশন এর মাধ্যমে এবং
    define(" constant এর নাম বড় হাতের অক্ষরে লিখতে হয়। ", ভ্যালু);
    define( "DAYS IN WEEK", 7 );
    
    echo"There are " . DAYS_IN_WEEK . " days in a week";


২। const কিওয়ার্ড দিয়ে। যেমন-
    const DAYS_IN_WEEK = 7;
    echo"There are " . DAYS_IN_WEEK . " days in a week";
    



const DAYS_IN_WEEK = 7;
    echo"There are " . DAYS_IN_WEEK . " days in a week";


    define( "VATE_RATE" , 0.15);
    $product_price = 100;
    $total_price = $product_price + ($product_price * VATE_RATE);
    echo" Total price including vat " . $total_price;
*/

//পাই এর মান।
define("PI", 3.1415);
$radius = 5;
$circumference = 2 * PI * $radius;
echo" circumference of the circle " . $circumference ;