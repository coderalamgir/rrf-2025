<?php
    //PHP তে যখন একটি array এর  মধ্যে একাধিক array থাকে, তাকে PHP এর পরিভাষায়  Nested array বলে।

    $students = [
        ["name" => "Akib Islam", "age"  => 4, "grade" => "A"],
        ["name" => "Sadika Sultana", "age"  => 9, "grade" => "B"],
        ["name" => "Alam", "age"  => 40, "grade" => "C"],
    ];

    // print_r($student);
    // var_dump($student);
    foreach( $students as $student ){
        foreach ( $student as $key => $value ) {
            // echo"$key => $value" . "\n";
            //echo $key . ":" . $value  . "\n";
        }
    }
    // যে লাইনগুলো আউটপুট দিচ্ছে সেগুলোকে INVALID করব।

    $numbers = range(1, 10); //1= শুরু, 20= শেষ হবে এবং 5= কত করে পার্থক্য।
    $sliced = array_slice($numbers, 5, 3);
    // print_r($sliced);
    


    //array_slice() একটা ফাংশনকে নির্দিষ্ট অংশে কাটতে  ব্যবহার করা হয়।
    $fruits = ["Banana", "Jackfruits", "Litchi", "Strawberry"];
    $sliced = array_slice($fruits, 1,2);
    // print_r($sliced);
    