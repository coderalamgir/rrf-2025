<?php
    // প্রতিটি ল্যাঙ্গুয়েজ এরই লুপ আছে। তবে সিনট্যাক্স একটু আলাদা। তেমনি পিএইচপি এর ও লুপ আছে। php তে লুপ ৪ প্রকার। যথাঃ-
    // ১। for loop
    // ২। while loop
    # ৩। do...while loop
    # ৪। foreach loop
    
    // while loop এ আমাদের পূর্ব থেকে জানা থাকে না, লুপটি কতবার ঘুরবে বা iteration করবে।
    $i = 1;
    while( $i <= 5 ){
        echo"$i \n";
        $i++;
    }

    $number = 1;
    $product = 1;
    while( $number <= 10 ){
        $product *= $number;
        $number++;
    }
    echo " The product of numbers from 1 to 10 is: " . $product;