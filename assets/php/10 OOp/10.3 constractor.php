<?php
    // class তৈরি করি।
    class person{
        //class এর মধ্যে properties তৈরি করি। 
        public $name;
        public $age;

        //class এর মধ্যে constructor তৈরি করি। auto call করার জন্য যে ফাংশন আছে তার নাম --constructor.
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
    $student1 = new person("Akib Islam", 4);


    // মান দেখাতে।
    $student1->showInfo();
