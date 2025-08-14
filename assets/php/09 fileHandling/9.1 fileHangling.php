<?php
   // declare(strict_types = 1);

   
    $file = fopen("new.txt", "w");
    fwrite($file, "Projukti plus");

    $file = fopen("new.txt", "r");
    echo fread($file, filesize("new.txt"));
    fclose($file);

   /*
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


    // প্রশ্ন: একটি ফোল্ডার তৈরি করুন। তার মধ্যে ১টি ফাইল তৈরি করুন। এই ফাইলে ভেতরে লিখুন “ যেখানে প্রযুক্তির গল্প হয় বাংলা ভাষায়। ”

    // file_put_contents("NewFolder/NewFile.txt", "যেখানে প্রযুক্তির গল্প হয় বাংলা ভাষায়।");
    // echo file_get_contents("NewFolder/NewFile.txt");
   //  $fileName = "akib_folder";
   //  $fileContent = "My name is Akib islam";
   //  file_put_contents($fileName, $fileContent);
   //  echo file_get_contents($fileName);



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

   // $fileName2 = "unlink.txt";
   // $fileCotent2 = "Delete with unlink function.";
   // file_put_contents($fileName2, $fileCotent2);
   // file_get_contents($fileName2);

   // echo __DIR__;
   // echo dirname(__FILE__);
   $fileName = "F:/practice2/rrf-2025/assets/php/09 fileHandling/akib_folder";
   // rmdir("akib_folder");
   if(file_exists($fileName)){
      
      echo"ফাইলটি পাওয়া গেছে। \n";

      if(rmdir($fileName)){
         echo"File deleted successfully. \n";
      }else{
         echo"Failed to delete the log file. \n";
      }


   }else{
      echo"ফাইলটি পাওয়া যাই নি। \n";
   }

*/