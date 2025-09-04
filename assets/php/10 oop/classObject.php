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
        
    // class তৈরি।
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


    //class তৈরি।
    class product{
        public $name;
        public $price;
        public $category;
        public $brand;
        public $stock;
        public $SKU;
    }
    // Object তৈরি।
    $product1 = new product();

    //Object এ প্রবেশ।
    $product1->name = "Mobile \n";
    $product1->price = "4000 \n";
    $product1->category = "Technology \n";
    $product1->brand = "Walton \n";
    $product1->stock = "40 \n";
    $product1->SKU = "Tech001 \n";

    echo $product1->name;
    echo $product1->price;
    echo $product1->brand;
    echo $product1->category;
    echo $product1->stock;
    echo $product1->SKU;

    // Object তৈরি।
    $product2 = new product();

    //Object এ প্রবেশ।
    $product2->name = "Motorcycle \n";
    $product2->price = "350000 \n";
    $product2->category = "Vehicle \n";
    $product2->brand = "TVS \n";
    $product2->stock = "20 \n";
    $product2->SKU = "vehicle001 \n";

    echo $product2->name;
    echo $product2->price;
    echo $product2->brand;
    echo $product2->category;
    echo $product2->stock;
    echo $product2->SKU;


    // Object তৈরি।
    $product3 = new product();

    //Object এ প্রবেশ।
    $product3->name = "Laptop \n";
    $product3->price = "50000 \n";
    $product3->category = "Technology \n";
    $product3->brand = "Samsung \n";
    $product3->stock = "10 \n";
    $product3->SKU = "tech002 \n";

    //Print object.
    echo $product3->name;
    echo $product3->price;
    echo $product3->brand;
    echo $product3->category;
    echo $product3->stock;
    echo $product3->SKU;


    // make class
    class person{
        public $name;
        public $age;
        public $email;
        public $phone;
        public $address;
        public $occupation;
    }

    //Make Object.
    $person1 = new person();

    //Access to object.
    $person1->name = "Akib \n";
    $person1->email = "akib@gmail.com \n";
    $person1->age = "4 \n";
    $person1->phone = "01722000000 \n";
    $person1->address = "Kushtia \n";
    $person1->occupation = "Developer \n";

    //print object.
    echo $person1->name ;
    echo $person1->email;
    echo $person1->age;
    echo $person1->phone;
    echo $person1->address;
    echo $person1->occupation;
    
    //Make Object.
    $person2 = new person();

    //Access to object.
    $person2->name = "Sadika Sultana \n";
    $person2->email = "sadika@gmail.com \n";
    $person2->age = "9 \n";
    $person2->phone = "01715000000 \n";
    $person2->address = "Daulatpur \n";
    $person2->occupation = "Developer \n";

    //print object.
    echo $person2->name ;
    echo $person2->email;
    echo $person2->age;
    echo $person2->phone;
    echo $person2->address;
    echo $person2->occupation;


    // make class
    class person{
        public $name;
        public $age;
        public $email;
        public $phone;
        public $address;
        public $occupation;

        //Make Method
        public function showProfile(){
            echo"Name: $this->name \n Age: $this->age \n Email: $this->email \n Phone: $this->phone \n Current Address: $this->address \n Occupation: $this->occupation \n";
        }
    }

    //Make Object.
    $person1 = new person();

    //Access to object
    $person1->name = "Alamgir";
    $person1->age = "age";
    $person1->email = "alamgirabc6@gmail.com";
    $person1->phone = "01715000000";
    $person1->address = "Kushtia";
    $person1->occupation = "Developer";

    //Print object.
    $person1->showProfile();
    ***********/ 
