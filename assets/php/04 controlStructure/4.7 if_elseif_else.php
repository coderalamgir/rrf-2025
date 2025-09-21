<?php
    // একের অধিক শর্ত থাকলে if...elseif...else control structure ব্যবহার করা হয়।
    $score = 910;
    if ( $score >= 80 ) {
        echo"A+";
    }elseif ( $score >= 70 ){
        echo"A";
    }elseif ( $score >= 60 ){
        echo"A-";
    }elseif ( $score >= 50 ){
        echo"B";
    }elseif ( $score >= 40 ){
        echo"C";
    }elseif ( $score >= 33 ){
        echo"D";
    }else{
        echo"Failed";
    }