<?php
    /*
    inheritance কি ?
    >> একটা class এর ভেতর থেকে properties ও method গুলোকে অন্য class এ ব্যবহার করাকে inheritanc বলে।
    >> inheritance এ কখনোই parent class এর মাধ্যমে object তৈরি করব না।
    >> inherit করতে extends কীওয়ার্ড ব্যবহার করতে হয়।
    
    */

    // class তৈরি করি।
    class person{
        //class এর মধ্যে properties তৈরি করি। 
        public $name;
        public $age;

        //class এর মধ্যে Method তৈরি করি।
        public function showInfo() {
            echo "Name: $this->name , Age: $this->age";
        }

    }

    //inherited class তৈরি করি।
    class student extends person{
        //class এর মধ্যে properties তৈরি করি। 
        public $roll;

        //class এর মধ্যে Method তৈরি করি।
        public function showStudentInfo() {
            echo "Name: $this->name \n Age: $this->age\n Roll: $this->roll";
        }
    }

    //Object তৈরি করি।
    $student1 = new student();

    // properties এ value বা মান সেট।
    $student1->name = "Akib Islam";
    $student1->age = "4";
    $student1->roll = "01";

    // মান দেখাতে।
    $student1->showStudentInfo();
