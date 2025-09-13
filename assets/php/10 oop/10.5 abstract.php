<?php

    /*
    abstract class technologyVillage{
        public $tutorial;

        public function __constractor($name) {
            $this->tutorial = $name;
        }
        
        abstract public function message();
    }

    class phptuto extends technologyVillage{
        public function message() {
            return "Thanks for watching my". $this->tutorial ." Video.";
        }
    }

    $php = new phptuto('PHP'); 
    echo $php->message();
    */ 


    //Base abstract class
    abstract class paymentGateWay{
        abstract public function pay($amount); // abstract method এর body বা { } থাকে না।
    }

    // Child abstract class paypal এবং extends কীওয়ার্ড এর মাধ্যমে ক্লাসেকে inherit করলাম।
    class paypal extends paymentGateWay{
        public function pay($amount){
            echo "Paid $$amount via Paypal.\n";
        }
    }

    // Child abstract class stripeএবং extends কীওয়ার্ড এর মাধ্যমে ক্লাসেকে inherit করলাম।
    class stripe extends paymentGateWay{
        public function pay($amount){
            echo "Paid $$amount via Stripe.\n";    
        }
    }

    //Bkash payment gateway 
    class bkash extends paymentGateWay{
        public function pay($amount) {
            echo"Paid $$amount via Bkash.";
        }
    }

    $paypal = new paypal();
    $paypal->pay(100);

    $stripe = new stripe();
    $stripe->pay(900);

    $bkash = new bkash();
    $bkash->pay(300);