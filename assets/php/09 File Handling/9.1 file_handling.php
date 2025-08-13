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



    $file = fopen("text.txt", "w"); // fopen(); function ব্যবহার করে ১টা ফাইল open করছি write mode এ এবং  এটাকে $file  নামে ১টি ভ্যারিয়েবল এর মধ্যে রাখলাম।
    fwrite($file, "এখানে আমাদের শেখার বিষয় পিএইচপি ফাইল পরিচালনার খুটিনাটি।"); // fwrite() এর মাধ্যমে text.txt ফাইলে  "এখানে আমাদের শেখার বিষয় পিএইচপি ফাইল পরিচালনার খুটিনাটি।" লিখলাম। 
    // এখন যেহেতু text.txt ফাইলের মধ্যের লেখাগুলো পড়ব। তাই  read (r) mode চালু করলাম নিচে।

    $file = fopen("text.txt", "r");     // এখানে write mode এর ফাইলটাকেই আমরা read mode এ ওপেন করলাম।
       
    // উক্ত ফাইলকে fread(); এর মাধমে echo করব।
    echo fread($file, filesize("text.txt")) . "\n";
    // echo"\n";
    fclose($file);  // শেষে fclose(); ফাংশনের মাধ্যমে ফাইলটি ক্লজ করতে হয়। যাতে র‌্যাম থেকে চলে যায়।

    rename("anoterText.txt", "text.txt");    // ফাইল এর নাম পরিবর্তন করতে rename(); ব্যবহার করা হয়।
    // rmdir("projukti_plus");  rmdir(""); ফাংশনের মাধ্যমে যে কোন খালি ফোল্ডারকে মুছে ফেলা যায়।
    // mkdir("projukti_plus");  // mkdir(""); function এর মাধ্যমে নতুন ফোল্ডার তৈরি করলাম।
    

    file_put_contents("content.txt", " উপরের নিয়মের সংক্ষিপ্ত নিয়ম -");
    file_put_contents("content.txt", " পূর্বে লেখা না মুছে নতুন লেখা যুক্ত করতে FILE_APPEND কিওয়ার্ড যুক্ত করতে হয়।", FILE_APPEND);
    echo file_get_contents("content.txt");
    
    echo"\n";
    
    file_put_contents("projukti_plus/contenTwo.txt", "ফোল্ডার  এর  মধ্যে নতুন ফাইল তৈরি করে এর ভিতরে লিখলাম। ");
    echo file_get_contents("projukti_plus/contenTwo.txt");
    */