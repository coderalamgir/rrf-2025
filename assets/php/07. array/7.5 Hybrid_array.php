<?php
    //যে array তে কিছু মান সংখ্যার (১, ২,৩) মাধ্যমে আবার কিছু মান নামের (name, age,) মাধ্যমে চিহ্নিত থাকে তাকে Hybrid array বলে।
    $menu2 = array (
        1 => "Margherita Pizza",      //Numerical index
        2 => "Spaghetti Carbonara",      //Numerical index
        "special" => "Grilled Salmon",      //Associative key
        "dessert" => "Chocolate Lave Cake"      //Associative key
    );

    // Hybrid array থেকে ডেটা access 
    echo "Dish with index 1: " . $menu2[1] . "\n";
    echo "Dish with index 2: " . $menu2[2] . "\n";
    echo "Special Dish => " . $menu2['special'] . "\n";
    echo "Dessert Dish => " . $menu2["dessert"] . "\n";

    echo"\n";

    // Hybrid array থেকে ডেটা access foreach loop এর মাধ্যমে।
    foreach ($menu2 as $key => $value){
        echo"$key => $value" . "\n";
    }