<?php
    /*
    Method chaining কি ?
    উত্তরঃ Method chaining হলো একটি প্রোগ্রামিং কৌশল যেখানে একাধিক মেথড বা ফাংশন একটি লাইনেই কল করা যায়, একের পর এক। এটি একটি ধারাবাহিক প্রক্রিয়া, যেখানে একটি মেথড তার কাজ শেষ করার পর সেই একই অবজেক্টকে রিটার্ন করে। ফলে সেই অবজেক্টের ওপর আবার নতুন মেথড কল করা যায়।
    */

    // class তৈরি ।
    class abc{
        // methods তৈরি ।
        public function first() {
            echo "This is first function.\n";
            return $this;
        }

        public function second() {
            echo"This is second function. \n";
            return $this;
        }

        public function third() {
            echo"This is third function. \n";
            
        }
    }

    //Object তৈরি।
    $test = new abc();

    //object call 
    // $test->first();
    // $test->second();
    // $test->third();

    // বিকল্প উপায়ে object call করাকে method chaining বলে।  যা এক লাইনে লেখা হয়।
    // $test->first()->second()->third();

    //***************************************************************************************************/
    class post {
        private $title;
        private $content;

        public function setTitle($title) {
            $this->title = $title;
            return $this;
        }

        public function setContent($content) {
            $this->content = $content;
            return $this;
        }

        public function save() {
            echo"Saving post:'{$this->title}'\n";
            return $this;
        }

        public function debug() {
            echo"Post Title:{$this->title}\n";
            echo"Post Content:{$this->content}\n";
            return $this;
        }
    }
    $post = new post();

    $post->setTitle("Introduction to method chaining")->setContent("Method chaining is a usefull programming technique.")->save("All saved")->debug("Need debuging");

    /***************************************************************************************************/
