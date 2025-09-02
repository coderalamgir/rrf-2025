<?php
/*
<<<<<<< HEAD
 //  আলোচ্য বিষয়ঃ
 /*
=======

    //  আলোচ্য বিষয়ঃ

   /*

>>>>>>> b1789157011e79584e342ea9eee0ac4468016720
    >> Regular Function
    >> Paramerer, Argument যুক্ত ফাংশন।
    >> Return Valu
    >> Anonymous Function
    >> Arrow Function
    >> Callback Function
    >> Variable scope
 

    function add(){
        echo" Hello, আকিব, কেমন আছো ? \n";
    }

   add(  );



   $global = "Global";                       // এখানে, $global হলো ভ্যারিয়েবল। Global হলো ভ্যালু।

   function add($n1, $n2 = 0){           //এখানে $n2 = 0 হলো default parameter. 
      $local = " local ";               // এখানে $local হলো লোকাল ভ্যারিয়েবল।
      return $n1 + $n2;
   }
   echo add(5, 45);

      

   $globalVar = "Global\n";                     

   function testScope( ){           
      $local = " Akib islam ";  
      global $globalVar;            //global variable কে লোকাল এ ব্যবহার করতে হলে তার পূর্বে global keyword লিখতে হয়।


      
      echo"$globalVar";
      echo"$local ";
   }
   testScope( );

   

   // Anonymous Function : নামহীন ফাংশনকে anonymous ফাংশন বলে। 
   // এর শেষে সেমিকোলন দিতে হয়।
   //  ভ্যারিয়েবল এর শেষে প্যারেনথেসিস দিয়ে কল করতে হয়।
   //  Anonymous function কে ভ্যারিয়েবল এর মধ্যে রাখতে  হয়।

   $nonymous = function(){
      echo "Hello Akib";
   };
   $nonymous();
  


//Arrow Function: 
// syntax:

$add = fn($n1, $n2) => $n1 + $n2;

echo $add(5,5);


// Callback function:
function process( $callback ){
   return $callback("Hello world!");
}


$txt = process(function($name){
   return "Hello $name";
});

echo" $txt ";

<<<<<<< HEAD

=======


   function greet($name2){
      return "Hello, " . $name2 . "! Welcome to our site. \n" ;
   }

   echo greet("Sadika");


   $siteName = "My Awesome Website";
   function showSiteName(){
      global $siteName;
      echo "Welcome to " . $siteName . "!";   
   }
   showSiteName();
>>>>>>> b1789157011e79584e342ea9eee0ac4468016720


function print_name($name, $age) {
   echo "Name: $name, Age: $age \n";
}

print_name("Sadika Sultana", 9);
print_name("Akib Isalam", 4);
print_name("Alamgir", 42);


//Default parameter & Default argument
function full_name($first_name, $last_name) {
   echo $first_name . ' ' . $last_name . "\n";
}
full_name("Hello", "World");
full_name("Hello", "Bangladesh");
full_name("Hello", "Friends");
*/
function full_name( $fname, $lname, $separator = " " ){  //$separator = " " এটাকে বলা হয় ডিফল্ট প্যারামিটার।
   echo $fname . $separator . $lname ;
}
full_name("Akib", "Islam");