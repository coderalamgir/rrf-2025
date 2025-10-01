<?php
    //Associative array তৈরি করি।
    $menu = [
        'steak' => 'Grilled Steak',
        'wings' => 'Buffalo Chicken Wings',
        'fries' => 'Crispy French Fries',
        'salad' => 'Fresh Garden Salad',
        'soup' => 'Chicken Noodle Soup',
    ];

    //Array থেকে data access করা। কয়েক পদ্ধতিতে  array থেকে data access করা যায়।
    echo $menu['steak'] . "\n";
    echo $menu['wings'] . "\n";
    echo $menu['fries'] . "\n";
    echo $menu['salad'] . "\n";
    echo $menu['soup'] . "\n";

    echo"\n";

    //আরো সুন্দর করে করা যায়।
    echo "Dish Seak: " . $menu['steak'] . "\n";
    echo "Dish Wings: " . $menu['wings'] . "\n";
    echo "Dish Fries: " . $menu['fries'] . "\n";
    echo "Dish Salad: " . $menu['salad'] . "\n";
    echo "Dish Soup: " . $menu['soup'] . "\n";

    //আরো একভাবে লেখা যায়।
    print_r($menu);
    var_dump($menu);

    //foreach loop এর সাহায্যে ‍array তে access .
    foreach ($menu as $key => $value) {
        echo "$key => $value" . "\n";
    }