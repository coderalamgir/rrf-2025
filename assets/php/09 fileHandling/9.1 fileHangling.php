<?php
   // declare(strict_types = 1);

    /*

    $file = fopen("new.txt", "w");
    fwrite($file, "Projukti plus");

    $file = fopen("new.txt", "r");
    echo fread($file, filesize("new.txt"));
    fclose($file);


    $file = fopen("new2.txt", "w"); // এখানে, new2.txt হলো ফাইল এর নাম এবং w হলো ফাইল মোডস অর্থাৎ লেখার জন্য।
    fwrite($file, "We are learning PHP about file & folder "); //$file এর অর্থ হলো এই ভ্যারিয়েবল এর মধ্যে যে ফাইল আছে তার মধ্যে  We are learning PHP about file & folder এই টেক্সট লিখলাম।
    $file = fopen("new2.txt", "r");  // "r" এর অর্থ হলো ফাইলটি পড়ার মুড এ আছে।
    echo fread($file, filesize("new2.txt")); //এখানে বলা হয়েছে ফাইলটি echo এর মাধ্যমে প্রিন্ট করা হলো।
    fclose($file);  // এর অর্থ হলো ফাইলটি বন্ধ করা হয়েছে।
    $another_file = fopen("another.txt", "w");
    rename("another.txt", "Changed.txt");
    mkdir("my_folder");

  
   // mkdir("new_folder");
    $text_file = fopen("text_file.txt", "w");

    fwrite($text_file, " PHP handling start from here.");

    $text_file = fopen("text_file.txt", "r");

    echo fread($text_file, filesize("text_file.txt"));

    fclose($text_file);
    */

    // প্রশ্ন: একটি ফোল্ডার তৈরি করুন। তার মধ্যে ১টি ফাইল তৈরি করুন। এই ফাইলে ভেতরে লিখুন “ যেখানে প্রযুক্তির গল্প হয় বাংলা ভাষায়। ”

    // file_put_contents("NewFolder/NewFile.txt", "যেখানে প্রযুক্তির গল্প হয় বাংলা ভাষায়।");
    // echo file_get_contents("NewFolder/NewFile.txt");
    $fileName = "akib_folder";
    $fileContent = "My name is Akib islam";
    file_put_contents($fileName, $fileContent);
    echo file_get_contents($fileName);
    // 
