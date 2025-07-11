<?php


    // প্রতিটি ল্যাঙ্গুয়েজ এরই লুপ আছে। তবে সিনট্যাক্স একটু আলাদা। তেমনি পিএইচপি এর ও লুপ আছে। php তে লুপ ৪ প্রকার। যথাঃ-
    // ১। for loop
    // ২। while loop
    # ৩। do...while loop
    # ৪। foreach loop
    

    // for loop এ আমাদের পূর্ব থেকে জানা থাকে লুপটি কতবার ঘুরবে বা iteration করবে।

    // ছোট থেকে বড়।
    $i = 1;
    for( $i = 1; $i <= 10; $i++ ){
        echo" $i \n";
    }
   
    # বড় থেকে ছোট।
      $i = 10;
    for( $i = 10; $i >= 1; $i-- ){
        echo" $i \n";
    }

    
    $sum = 0;
    for( $i = 0; $i <= 10; $i++ ){
        //$sum += $i;
        $sum = $sum + $i;
        echo"The sum of numbers from 1 to 10 is: " . $sum  . "\n";
    }


    //অ্যারে থেকে ডেটা প্রিন্ট করতে চাও।

    $fruits = [
        "Apple",
        "Banana",
        "Cherry",
        "Date",
        "Elderberry",
    ];
    for ( $i = 0; $i < count($fruits); $i++ ){
        echo" $fruits[$i] " . " \n " ;
    }

    // টেবিল তৈরি করা।
    $number = 5;
    for ( $i = 1; $i <= 10; $i++ ){
        echo $number . " X " . $i . " = " . ($number * $i ) . "\n" ;
    }

    // HTML unorder list 
    $items = [ "Home", "About", "Services", "Contact"];
    echo"<ul> \n";
    for( $i = 0; $i < count($items); $i++ ){
        echo" <li>" . $items[$i] . "</li> " . "\n";
    }
    echo"</ul>";