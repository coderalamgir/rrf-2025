<?php
// php তে if ... else স্টেটমেন্ট ব্যবহার করা হয় যখন if স্টেটমেন্টর শর্ত পূরণ না হয়। যদি if স্টেটমেন্ট মিথ্যা হয়, তাহলে else স্টেটমেন্ট কোড চালানো হয়।
/*
    $studentScore = 75;
    if( $studentScore >= 80 ){
        echo" অভিনন্দন, আপনি একটি পুরস্কার পেয়েছেন। ";
    }else{
        echo" দুঃখিত, আরো কঠোরভাবে পড়াশোনা করুন।\n ";
    }

    */
    $age = 22;
    if ( $age >= 18 ) {
        echo"You are Adult.\n";
    }else{
        echo"You are not Adult.\n";
    }
    //Ternary Operator
    echo $age >= 18 ? "You are Adult" : "You are not Adult" ;

