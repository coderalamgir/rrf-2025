<?php
   declare(strict_types = 1);

/*
  $x = "Hello";
  $y = "World";
  $z = "$x $y";
  echo $z;
 
   $x = "Hello";
  $y = "World";
  $z = $x . " " . $y;
  echo $z;


   $name = "Now, I am learning PHP that make dynamic website.";
   echo strlen($name) . "\n"; // কতগুলো অক্ষর আছে। স্পেস, কমা ও ফুলস্টপসহ। 
   echo str_word_count($name) . "\n"; // কতগুলো শব্দ আছে জানতে।
   echo trim($name) . "\n"; // স্ট্রিং এর শুরুতে এবং শেষে ফাকা জায়গা মুছে ফেলতে।
   echo substr($name, 10, 8) . "\n"; // স্ট্রিং এর ১টি নির্দিষ্ট অংশ কেটে বের করে আনতে।
   echo strtoupper($name) . "\n";   //স্ট্রিং কে বড় হাতের অক্ষর করতে।
   echo strtolower($name) . "\n";   //স্ট্রিং কে ছোট হাতের অক্ষর করতে।
   echo str_replace("website", "webpage", $name) . "\n"; // স্ট্রিং এর কোন অংশকে প্রতিস্থাপন করতে ।
   echo strrev($name) . "\n"; // স্ট্রিং কে উল্টা করে লিখতে।

   $exploded = explode(" ", $name); // স্ট্রিং কে এ্যারেতে রুপান্তর করতে explode(); function . কিন্তু  প্রথম প্যারামিটার অবশ্যই দিতে হবে মাঝখানে একটা স্পেসসহ " " ।
   print_r($exploded);
   echo substr($name, 6);  // ১ম ৬টি বাদ দিয়ে শেষ পর্যন্ত সবগুলো প্রিন্ট করবে।


  $name = "Now, I am learning PHP that make dynamic website." . "\n";
   echo substr($name, -8, 8);    // মাইনাস মান দিয়ে স্ট্রিং এর শেষের দিক থেকে গননা করা হয়।
   $x = "We are the so-called \"Vikings\" from \t the north." . "\n";
   echo $x;
   $y = 'We are the so-called \'Vikings\' from the north.' . "\n";
   echo $y;


   $password = "alamgir";
   echo md5($password,FALSE) . "\n";
   echo sha1($password, TRUE);



   //String heredoc syntax
   $text = <<<EOT
   This is 
      multiline
         string.
   EOT;
   echo $text . "\n";      

   //String Nowdoc syntax
   $text = <<<'EOT'
   This is 
      multiline
         string.
   EOT;
   echo $text;      

   $name = "Akib Islam";

   //heredoc Syntax on string datatype 

   $message = <<<EOT
      Hi, My name
         is
            $name
   EOT;
   echo "$name" . "\n";
   echo "$message" . "\n";


   $password = "myPass1";  ///strlen(); ফাংশন দিয়ে পাসওয়ার্ড এর  দৈর্ঘ্য বের করা হয়েছে।
   strlen($password);

   if(strlen($password) < 8) {
      echo "পাসওয়ার্ড কমপক্ষে ৮ অক্ষরের হতে হবে। ";
   } else {
      echo "পাসওয়ার্ড গ্রহণযোগ্য। ";
   }





   // 14-09-2025
   $product = "Laptop";
   $price = "120000";

   echo"Product Name: " . $product . ". " ."Product Price: " . $price;


   */
   //Null coalescing operatore প্রথম ভ্যালু null হলে পরবর্তী বা default Value কাজ করে। আর প্রথম ভ্যালু null  না হলে সেই ভ্যালুই কাজ করে। 
   // syntax null ?? name;
   $customer = "Akib";

   $customer ?? "Visitor";

   // ১টা ভ্যারিয়েবল এর মধ্যে রাখি।
   $result = $customer ?? "Visitor";

   echo $result ;
