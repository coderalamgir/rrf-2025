<?php
    /*
    // ক্লাস  হলো একটি কাঠামো যা দিয়ে অনেকগুলো অবজেক্ট তৈরি করা যাই।
    class Product {
        $name = "Mobile";   // $name হলো একটি ভ্যারিয়েবল কিন্তু ক্লাসের মধ্যে থাকলে তাকে প্রোপার্টিজ বলে।
        $brand = "Samsung";
    }


    class product{
        // properties
        public $name = "Samsung";
        public $price = "400";

        //method
        public function showDetails(){
            echo "Name: $this -> name, Price: $this -> price"  ;
        }
    }

    //Object তৈরি
    $product_1 = new product();

    //object এ প্রবেশ
    echo $product_1 -> name;
    echo $product_1 -> price;
     */

    //class তৈরি করি
    class Product{
        //properties তৈরি করি।
        public $name = "Mobile";
        public $price = "2000";
        public $brand;
        public $cagegory;
        public $stock;
        public $SKU;

        //method তৈরি করি।
        public function showDetails(){
            echo "Name: $this->name, price: $this->price";
        }
    }

    //Object তৈরি করি।
    $product_2 = new Product();

    //Object এ প্রবেশ করি।
     $product_2->showDetails();