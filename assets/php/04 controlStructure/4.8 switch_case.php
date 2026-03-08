<?php
    // switch....case হলো if...elseif...else আপডেট version একের অধিক শর্ত থাকলে switch ... case ব্যবহার করা হয়।

    /*$score = 85;
    switch ( $score ){
        case ($score >= 80):
            echo"A+";
            break;
        case($score >= 70):
            echo"A";
            break;
        case($score >= 60):
            echo"A-";
            break;
        case($score >= 50):
            echo"B";
            break;
        case($score >= 40):
            echo"C";
            break;
        case($score >= 33):
            echo"D";
            break;
        default;
            echo"Failed";
            break;
        
    }
    */
    $score = 55;
    switch($score){
        case( $score >= 80 ):
            echo "Your grade is: A+";
            break;
        case($score >= 70):
            echo "Your score is: A";
            break;
        case($score >= 60):
            echo "Your score is: A-";
            break;
        case($score >= 50):
            echo "Your score is: B";
            break;
        case($score >= 40):
            echo "Your score is: C";
            break;
        case($score >= 33):
            echo "Your score is: D";
            break;
        default:
            echo "Your score is: Faild";
            break;
    }