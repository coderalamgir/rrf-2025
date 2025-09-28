<?php
    /*
    $fruits = array(
        "Mango",
        "Banana",
        "Jackfruit"
    );
    print_r($fruits);


    $info = array(
    "Name" => "Akib",
    "Class" => "Four",
    "Roll" => "ONE",
        
    );
    print_r($info);

    $associative = array(
    "Name" => "Sadika",
    "Class" => "Four",
    "Roll" => "ONE",   
    );
    // var_dump($associative["Name"]);
    var_dump($associative["Name"]);
    print_r($associative["Roll"]);
    echo"\n";
    echo($associative["Class"]);

    $number = [10, 20, 30];
    array_push($number,40); //শেষে উপাদান যোগ করতে
    array_unshift($number, 5); //শুরুতে উপাদান যোগ করতে
    array_shift($number); //শুরুর উপাদান মুছতে 
    array_pop($number); //শেষের উপাদান মুছতে 

    print_r($number);
    */
    $stringToArray = 'Alamgir, Akib, Sadika, Popy';
    // explode(" , ",$stringToArray);
    $names = explode(",", $stringToArray);
    print_r($names);
    
    $arrayToString = implode(" \n - ", $names);
    
    print_r($arrayToString);
