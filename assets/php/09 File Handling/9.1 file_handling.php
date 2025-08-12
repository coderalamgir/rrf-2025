<?php

/*
    declare(strict_types = 1);
    // date(); function এর ব্যবহার।
    echo date("d/m/y") . "\n";
    echo date("Y/m/d")  . "\n";
    echo date("1")  . "\n";
    echo date("Y")  . "\n";
    echo date("h:i:sa")  . "\n";
    date_default_timezone_set("America/New_York");


    $fileHandle = fopen("user_activitz_log.txt", "a");
    if ( $fileHandle ) {
        $logData = "User: JohnDoe | Login Time:" . date('Y-m-d H:i:s') . " | Status: Success \n";
        fwrite( $fileHandle, $logData );
        fclose( $fileHandle );
        echo " User activitz logged successfully. ";
    } else {
        echo " Failed to create or open log file. ";
    }

    $fileHandle1 = fopen("log1.txt", "a");
    fwrite($fileHandle1, "শেষে নতুন ডাটা যোগকরা হয়েছে।");
    $read = fread($fileHandle1, filesize("log1.txt"));
    fclose($fileHandle1);
    echo"$read";


    $fileLog = fopen("log3.txt", "a");
    if ( $fileLog ) {
        $logData2 = "User Login";
        fwrite($fileLog, $logData2);

    }
    */
    $myFolder = ("projukti_pro");

    if( !is_dir($myFolder) ) {
        mkdir($myFolder);
        echo" Folder is created successfully.";
    }else {
        echo "Sorry, \"$myFolder\" Folder is already Exist.";
    }

    //এখানে, !is_dir($myFolder) অর্থ হলো যদি projuktiplus নামে ফোল্ডার না থাকে।
    // mkdir($myFolder); তাহলে ফোল্ডারটি তৈরি কর। তারপর দেখাও Folder is created successfully.
    // অন্যথায় বলবে Sorry, Folder is already Exist.