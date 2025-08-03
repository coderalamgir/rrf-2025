<?php


    /*

    // Array হলো মাল্টিপল ডাটা টাইপ স্টোর করে এমন ভ্যারিয়েবল।
    
    1. Single array
    2. Nested array
    3. Numerical array
    4. Associative array
    5. Hybrid array
    6. Indexed with key array
    7. multidimensional array



     // >>>>>> 1.Single array: যখন একটি array এর মধ্যে অন্য কোন array থাকে না তখন তাকে Single array বলে।

     $fruits = array( "Banana", "Apple", "Orange" );

     //   print_r($fruits);
     // var_dump($fruits);
     
    //>>>>>>>>>>>>2. Nested array: যখন একটি array এর মধ্যে একাধিক array থাকে তখন তাকে  Nested array বলে। 
    $fruitsBasket = array(

        "Citrus Fruits" => array("Orange", "Lemon", "Grapefruits"),
        "Berries Fruits" => array("Strawberry", "Blueberry", "Raspberry"),
        "Tropical Fruits" => array("Mango", "Pineapple","Banana"),

    );

    echo"Citrus Fruits : " . implode(" , ", $fruitsBasket["Citrus Fruits"]) . "\n";
    echo"Berries Fruits : " . implode(" , ", $fruitsBasket["Berries Fruits"]) . "\n";
    echo"Tropical Fruits : " . implode(" , ", $fruitsBasket["Tropical Fruits"]) . "\n";
    // print_r($fruitsBasket);
    


    //>>>>>>>3. Numerical array হলো এমন একটি array যেখানে প্রতিটি মান একটি নির্দিষ্ট সংখ্যা দিয়ে চিহ্নিত করা হয়। সাধারনত শুন্য থেকে শুরু হয়। যাকে index number বলে।
    $foodItems = array("Pizza", "Burger", "Pasta", "Salad", "Sushi");
    // var_dump($foodItems);
    // print_r($foodItems);
    echo "Dish 1 : " . $foodItems[0] . "\n";
    echo "Dish 2 : " . $foodItems[1] . "\n";
    echo "Dish 3 : " . $foodItems[2] . "\n";
    echo "Dish 4 : " . $foodItems[3] . "\n";
    echo "Dish 5 : " . $foodItems[4] . "\n";

    
    //>>>>>> 4. Associative array হলো একটি Array যেখানে প্রতিটি মান একটি নির্দিষ্ট নাম বা key দিয়ে চিহ্নিত করা হয়। যেখানে সংখ্যা ব্যবহারের পরিবর্তে নাম ব্যবহার করা হয়। যা তথ্যকে খুজে পেতে আরো সহজ করে তোলে।
    //Associative array তৈরি।
    $menu = array(
        "steak" => "Grilled Steak",
        "wings" => "Buffalo Chicken Wings",
        "fries" => "Crispy French Fries",
        "salad" => "Fresh Gerden Salad",
        "soup" => "Chicken Noodle Soup"

    );
    //Associative array থেকে data access করা।
    // var_dump($menu);
    // print_r($menu);
    echo " Dish 'steak' " . $menu["steak"] . "\n";
    echo " Dish 'wings' " . $menu["wings"] . "\n";
    echo " Dish 'fries' " . $menu["fries"] . "\n";
    echo " Dish 'salad' " . $menu["salad"] . "\n";
    echo " Dish 'soup' " . $menu["soup"] . "\n";


    

    //>>>>>>>> 5. Hybrid array হলো একটি array যেখানে কিছু মান সংখ্যার মাধ্যমে চিহ্নিত থাকে এবং কিছু মান নাম দিয়ে চিহ্নিত থাকে। এটি ২ ধরনের index ব্যবহার করে।
    $menu = array(

        1 => "Margherita Pizza",
        2 => "Spaghetti Carbonara",
        "special" => "Grilled Salmon",
        "dessert" => "Chocolate Lava Cake",

    );
    // print_r($menu);
    // var_dump($menu);
        echo "Dish with index 1: " . $menu[1] . "\n";
        echo "Dish with index 2: " . $menu[2] . "\n";
        echo "special: " . $menu["special"] . "\n";
        echo "dessert: " . $menu["dessert"] . "\n";

  
    $cars = array("BMW","TOYOTA", "NEXUS");
    print_r($cars);

    
    $fruits = [ "Mango", "Jackfruit", "Lichi" ];
    foreach ( $fruits as $fruit ) {
        // echo $fruit . " \n ";
    }

    $person = [
        'Name' => 'Alamgir',
        'City' => 'Kushtia',
        'Phone' => '01715684469'
    ];
    foreach( $person as $key => $value ) {
        echo" $key => $value \n";
    };
  
    // print_r( $person );

  
    $person = ["Alamgir", "Hakimpur", "01715000000"];
    print_r($person);
    var_dump($person);
    foreach( $person as $man ) {
        echo"$man " . "\n";
    };
    unset($person[1]);
    print_r($person);



    ////////////// associative array থেকে extract ///////////////
    
    $user = [ 'name' => 'Akib', 'phone' => '017150000000', 'email' => 'akib@gmail.com' ];
    extract($user);
    echo $name;
    echo "\n";
    echo $phone;
    echo "\n";
    echo $email ;

    ////////////// range(); function এর সাহায্যে array থেকে array_slice(); ///////////////

    $numbers = range(1,20);
    $sliced = array_slice($numbers, 5, 5);
    print_r($numbers);
    print_r($sliced);
 
       ////////////// array_filter(); খালি মান বাদ দেওয়া। 

       $data = ['Mango', '', null];
       // array_filter($data);
       $filtered = array_filter($data);  // একটা variable এর মধ্যে রাখলাম।
       print_r($filtered);
       // print_r($data);
    
    ////////////// array_merge(); একের অধিক ‍এ্যারেকে একসাথে করাকে মার্জ বলে। 

    $arr1 = ["Mango", "Jackfruit"];
    $arr2 = ["Litchi", "Pineapple"];
    $merged = array_merge($arr1, $arr2);
    // print_r($merged);
    
    $arr1 [1] = "Bluberry";
    print_r($arr1);

    
    ////////////// in_array(); নির্দিষ্ট ভ্যালু আছে কিনা চেক করা।
    $fruits = ['Mango', 'Jackfruit'];

    if(in_array('Banana', $fruits)) {
        echo"Found!";
    }else{
        echo"NOT Found!";
    }
   
    $student = [
        "name" => "Akib",
        "age" => "5",
        "grade" => "A"
    ];
    foreach($student as $key => $value){
        echo $key . " : " . $value . "\n";
    };
    
    $students = [
        ["name" => "Akib", "age" => "4", "grade" => "A"],
        ["name" => "Hasib", "age" => "8", "grade" => "B"],
        ["name" => "Mim", "age" => "6", "grade" => "C"]
    ];

    foreach( $students as $student ){
        foreach($student as $key => $value){
            echo $key . ": " . $value . "\n";
        };
    };
    */