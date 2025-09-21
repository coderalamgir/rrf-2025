<?php
    //Ternery operator: if ... else oparetor এর সংক্ষিপ্ত রুপ হলো টারনারী ওপারেটর।
    /*
    $score = 60;
    if ($score >= 80) {
        echo"You have gotten A+ \n";
        } else{
            echo"Sorry, Please try again.\n";
    }
    */
    $score = 90;
    $result = $score >= 80?"You have gotten A+":"Sorry, Please try again.";
    echo"$result";
