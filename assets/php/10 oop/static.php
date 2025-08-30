<?php
    /*
        আলোচ্য বিষয়:
            ১। Static properties : 
            ২। Static Method
    */

    class Product{
        static public $pname = "Book";

        // যদি ক্লাস এর মধ্যে কোন মেথড এ কোন স্ট্যাটিক প্রপার্টি এ্যাকসেস করাতে চাই । তাহলে self কীওয়ার্ড ব্যবহার করতে হয়।
        public function info(){
            return "Product Name: " . self :: $pname;
        } 
    }

    // object তৈরি করি।
    $pinfo = new Product();
    echo $pinfo -> info();
    echo "\n";

    //সরাসরি এ্যাকসেস করতে চাই।
    echo product :: $pname; // product = ক্লাস এর নাম; :: = scope regulation operator;