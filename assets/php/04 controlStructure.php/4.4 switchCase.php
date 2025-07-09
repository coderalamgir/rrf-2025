<?php
// অনেকগুলো শর্তের মধ্যে যেকোন একটি বাছায় করতে if ... elseif ..else। এর আপডেট হলো switch ..case

    /* syntax

    if(  ){

    }elseif( ){

    }else{

    }
    */

    $score = 83;
        if( $score >= 80 ){
            echo"Your result is:" . " A+ \n";
        }elseif( $score >= 70 ){
            echo"Your result is:" . " A \n";
        }elseif( $score >= 60 ){
            echo"Your result is:" . " A- \n";
        }elseif( $score >= 50 ){
            echo"Your result is:" . " B \n";
        }elseif( $score >= 40 ){
            echo"Your result is:" . " C \n";
        }elseif( $score >= 33 ){
            echo"Your result is:" . " D \n";
        }else{
            echo"Your result is:" . " Faild \n";
        }
    