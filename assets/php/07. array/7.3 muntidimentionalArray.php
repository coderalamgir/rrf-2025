<?php
    //multidimentional array
    $students = [
        ["Name" => "Alamgir", "Age" => 40],
        ["Name" => "Sadika Sultan", "Age" => 10],
        ["Name" => "Akib Islam", "Age" => 4],
        ["Name" => "Popy Runa", "Age" => 35]
    ];

    // print_r($students);

    // এখন যদি একটা একটা করে দেখতে চাই।
    echo $students[1]['Name'];
    echo "\n";
    echo $students[2]['Name'];