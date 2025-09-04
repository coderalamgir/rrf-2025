<?php
    /* ক্লাস কি ?
     class হলো একটি কাঠামো বা নকশা যার সাহায্যে অনেক object তৈরি করা যায়।
        -> ক্লাস তৈরি করতে class কীওয়ার্ড ব্যবহার করতে হয়।
        -> ক্লাসে নামের প্রথম অক্ষর  অবশ্যই বড় হাতের লিখতে হয়।
        -> ক্লাসের ভিতরে property = variable এবং method = function নির্দিষ্ট করা থাকে।
        -> বাস্তব জীবনে class হলো যেমন- mobile আর এর বৈশিষ্ঠ এবং কাজ হলো object । যেমন name: samsung,model: j7nxt ইত্যাদি।

     method কি ?
        -> class এর ভিতরে থাকা function কে method বলে।
        -> method object এর কর্ম সম্পাদন করে।




    class Man {
        public $name;
        public $age ;
        public $address;

        public function info ( $fname, $age, $address ) {
            $this -> name = $fname;
            $this -> age = $age;
            $this -> address = $address;
            return "Name : " . $this -> name  ." , Age : " . $this -> age  . " & Address :  " . $this -> address;
        }
    }

    $akib = new man();
    echo $akib -> info ( "Akib", 4, "Kushtia" );
    echo "\n";
    $sadika = new Man();
    echo $sadika -> info ( "Sadika", 9, "Hakimpur");
    
    */
    /**********
    echo $akib -> name = "Akib Islam";
    echo "<br>";
    echo $akib -> age = "4";
    echo "<br>";
    echo $akib -> address ="Kushtia";
    // নিচে আরেকটি অবজেক্ট তৈরি করি।
    echo "<br>";
    $sadika = new man();
    echo $sadika -> name = "Sadika";
    echo "<br>";
    echo $sadika -> address = "Hakimpur";



    echo "<br>";
    echo $akib -> age;
    echo "<br>";
    echo $akib -> address;
    echo "<br>";
    echo $akib -> info ();


    // class তৈরি করা হলো।
    class Car {
        public $color;      // পাবলিক প্রপার্টি।
        public $model;      // পাবলিক প্রপার্টি।

        // মেথড তৈরি করা হচ্ছে।
        public function start(  ) {
            return " This car is starting. ";
        }
    }
    // অবজেক্ট তৈরি করা হচ্ছে।
    $myCar = new Car();

    //প্রপার্টি এবং মেথড এ ‍অ্যাক্সেস করা হচ্ছে।
    echo "\n";
    echo $myCar -> color = "Red";    //রঙ সেট করা হচ্ছে।
    echo "\n";
    echo $myCar -> model = "Toyota";   //মডেল সেট করা হচ্ছে।
    echo "\n";
    echo $myCar -> start();



    // Visibility বা Access Modifier কত প্রকার  এবং কি কি ?
    তিন প্রকার। যথা- 
    ১। public : ক্লাসের ভিতর থেকে, ক্লাসের বাইরে থেকে এবং অন্য ক্লাস থেকেও পাবলিক প্রপার্টি বা মেথড অ্যাক্সেস করা যায়।
    ২। private: প্রাইভেট প্রপার্টি বা মেথড শুধু সেই ক্লাসের ভিতরে অ্যাক্সেস করা যায়। ক্লাসের বাইরে থেকে এবং অন্য ক্লাস থেকে অ্যাক্সেস করা যাই না।
    ৩। protected:

    class Person {
        public $name;
        public function sayHello(){
            return "Hello, " . $this -> name;
        }
    }
    $person1 = new Person();
    echo $person1 -> name = "Sadika Sultana";
    echo "\n";
    echo $person1 -> sayHello();



    class BankAccount{
        private $balance;

        public function deposite( $amount ){
            $this -> balance += $amount;
        }

        public function getBalance(){
            return $this -> balance;
        }
    }


    $account = new BankAccount();
    $account -> deposit( 1000 );
    echo $account -> getBalance();


    // class তৈরি করি। যা static object / class.
    class product{
        // property তৈরি করি। variable কে OOp তে property বলে।
        public $name = "Mobile";
        public $price = "200";
        public $category;
        public $stock;
        public $SKU;
        public $brand;
    }

    //object তৈরি করি।
    $product_1 = new product();     //object টি কে product_1 নামক ১টি variable এর মধ্যে রাখলাম।

    // object এর মধ্যে প্রবেশ।
    echo $product_1->name;      // এখানে $product_1->name অংশটুকু সম্পূর্ন variable হিসাবে বিবেচিত হবে।

 
    // class তৈরি করি। যা dynamic object / class.
    class product{
        // property তৈরি করি। variable কে OOp তে property বলে।
        public $name;
        public $price;
        public $category;
        public $stock;
        public $SKU;
        public $brand;

        //method তৈরি করি। OOP তে function কে method বলে।
        public function showDetails(){
            echo "Name: $this->name, Price: $this->price ";
        }

    }

    //object তৈরি করি।
    $product_1 = new product();     //object টি কে product_1 নামক ১টি variable এর মধ্যে রাখলাম।

    // object এর মধ্যে প্রবেশ।
    //echo $product_1->name;      // এখানে $product_1->name অংশটুকু সম্পূর্ন variable হিসাবে বিবেচিত হবে।
    echo $product_1->showDetails();

    /* ক্লাস কি ?
     class হলো একটি কাঠামো বা নকশা যার সাহায্যে অনেক object তৈরি করা যায়।
        -> ক্লাস তৈরি করতে class কীওয়ার্ড ব্যবহার করতে হয়।
        -> ক্লাসে নামের প্রথম অক্ষর  অবশ্যই বড় হাতের লিখতে হয়।
        -> ক্লাসের ভিতরে property = variable এবং method = function নির্দিষ্ট করা থাকে।
        -> বাস্তব জীবনে class হলো যেমন- mobile আর এর বৈশিষ্ঠ এবং কাজ হলো object । যেমন name: samsung,model: j7nxt ইত্যাদি।

     method কি ?
        -> class এর ভিতরে থাকা function কে method বলে।
        -> method object এর কর্ম সম্পাদন করে।




    class Man {
        public $name;
        public $age ;
        public $address;

        public function info ( $fname, $age, $address ) {
            $this -> name = $fname;
            $this -> age = $age;
            $this -> address = $address;
            return "Name : " . $this -> name  ." , Age : " . $this -> age  . " & Address :  " . $this -> address;
        }
    }

    $akib = new man();
    echo $akib -> info ( "Akib", 4, "Kushtia" );
    echo "\n";
    $sadika = new Man();
    echo $sadika -> info ( "Sadika", 9, "Hakimpur");
    


    echo $akib -> name = "Akib Islam";
    echo "<br>";
    echo $akib -> age = "4";
    echo "<br>";
    echo $akib -> address ="Kushtia";
    // নিচে আরেকটি অবজেক্ট তৈরি করি।
    echo "<br>";
    $sadika = new man();
    echo $sadika -> name = "Sadika";
    echo "<br>";
    echo $sadika -> address = "Hakimpur";



    echo "<br>";
    echo $akib -> age;
    echo "<br>";
    echo $akib -> address;
    echo "<br>";
    echo $akib -> info ();


    // class তৈরি করা হলো।
    class Car {
        public $color;      // পাবলিক প্রপার্টি।
        public $model;      // পাবলিক প্রপার্টি।

        // মেথড তৈরি করা হচ্ছে।
        public function start(  ) {
            return " This car is starting. ";
        }
    }
    // অবজেক্ট তৈরি করা হচ্ছে।
    $myCar = new Car();

    //প্রপার্টি এবং মেথড এ ‍অ্যাক্সেস করা হচ্ছে।
    echo "\n";
    echo $myCar -> color = "Red";    //রঙ সেট করা হচ্ছে।
    echo "\n";
    echo $myCar -> model = "Toyota";   //মডেল সেট করা হচ্ছে।
    echo "\n";
    echo $myCar -> start();



    // Visibility বা Access Modifier কত প্রকার  এবং কি কি ?
    তিন প্রকার। যথা- 
    ১। public : ক্লাসের ভিতর থেকে, ক্লাসের বাইরে থেকে এবং অন্য ক্লাস থেকেও পাবলিক প্রপার্টি বা মেথড অ্যাক্সেস করা যায়।
    ২। private: প্রাইভেট প্রপার্টি বা মেথড শুধু সেই ক্লাসের ভিতরে অ্যাক্সেস করা যায়। ক্লাসের বাইরে থেকে এবং অন্য ক্লাস থেকে অ্যাক্সেস করা যাই না।
    ৩। protected:

    class Person {
        public $name;
        public function sayHello(){
            return "Hello, " . $this -> name;
        }
    }
    $person1 = new Person();
    echo $person1 -> name = "Sadika Sultana";
    echo "\n";
    echo $person1 -> sayHello();



    class BankAccount{
        private $balance;

        public function deposite( $amount ){
            $this -> balance += $amount;
        }

        public function getBalance(){
            return $this -> balance;
        }
    }


    $account = new BankAccount();
    $account -> deposit( 1000 );
    echo $account -> getBalance();


    // class তৈরি করি। যা static object / class.
    class product{
        // property তৈরি করি। variable কে OOp তে property বলে।
        public $name = "Mobile";
        public $price = "200";
        public $category;
        public $stock;
        public $SKU;
        public $brand;
    }

    //object তৈরি করি।
    $product_1 = new product();     //object টি কে product_1 নামক ১টি variable এর মধ্যে রাখলাম।

    // object এর মধ্যে প্রবেশ।
    echo $product_1->name;      // এখানে $product_1->name অংশটুকু সম্পূর্ন variable হিসাবে বিবেচিত হবে।


   
    // class তৈরি করি। যা dynamic object / class.
    class product{
        // property তৈরি করি। variable কে OOp তে property বলে।
        public $name;
        public $price;
        public $category;
        public $stock;
        public $SKU;
        public $brand;

        //method তৈরি করি। OOP তে function কে method বলে।
        public function showDetails(){
            echo "Name: $this->name, Price: $this->price ";
        }

    }

    //object তৈরি করি।
    $product_1 = new product();     //object টি কে product_1 নামক ১টি variable এর মধ্যে রাখলাম।

    // object এর মধ্যে প্রবেশ।
    //echo $product_1->name;      // এখানে $product_1->name অংশটুকু সম্পূর্ন variable হিসাবে বিবেচিত হবে।
    echo $product_1->showDetails();

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


    //class তৈরি করি
    class Product{
        //properties তৈরি করি।
        public $name = "Mobile";
        public $price = "2000";
        public $brand;
        public $cagegory;
        public $stock;
        public $SKU;
    }

    //method তৈরি করি।
    //     public function showDetails(){
    //         echo "Name: $this->name, price: $this->price";
    //     }
 

    //Object তৈরি করি।
    $product_2 = new Product();

    //Object এ প্রবেশ করি।
    echo "$product_2->name \n";
    echo $product_2->price ;
    echo $product_2->name;
    


    //class
    class car{

        //properties
        public $color;
        public $model;

        //method
        public function start(){
            return "This car is starting.";
        }
    }
    //Object
    $myCar = new car();

    //Access to property & Method
    echo $myCar->color = "Red";
    echo"\n";
    echo $myCar->model = "Toyota";
    echo"\n";
    echo $myCar->start();
    ***********/
