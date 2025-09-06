<?php
    // __constructor() function এর ব্যবহার।
    // class তৈরি করি।
    class person{
        //class এর মধ্যে properties তৈরি করি। 
        public $name;
        public $age;

        //class এর মধ্যে constructor তৈরি করি। auto call করার জন্য যে ফাংশন আছে তার নাম --constructor. এখানে parameter (Variable) গুলো দিয়ে দিতে হয়।
        public function __construct($studentName, $studentAge) {
            $this->name = $studentName;
            $this->age = $studentAge;
        }

        //class এর মধ্যে Method তৈরি করি।
        public function showInfo() {
            echo "Name: $this->name , Age: $this->age";
        }

    }

    //Object তৈরি করি।
    $student1 = new person("Akib Islam ", 4);  // এখানে Arguments (Value বা মান) গুলো দিয়ে দিতে হয়।


    // মান দেখাতে।
    $student1->showInfo();

    /*

    class person{
        public $name;
        public $age;

        public function __construct($studentName, $studentAge){
            $this->name = $studentName;
            $this->age = $studentAge;
        }

        public function showInfo() {
            echo "Name: $this->name, Age: $this->age";
        }
    }

    $student1 = new person("Akib Islam", 4);
    $student1->showInfo();
        */