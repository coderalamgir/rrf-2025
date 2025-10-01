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
            echo $key . ":" . $value  . "\n";
        }
    }