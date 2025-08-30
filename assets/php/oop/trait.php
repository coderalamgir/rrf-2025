<?php
    //১ম trait
    trait programmingLanguage_1{
        public function php(){
            echo"PHP is a programming Language.";
        }
    }

    //২য় trait
    trait programmingLanguage_2{
        public function c (){
            echo "C is a programming Language.";
        }
    }
    // ১টি trait থেকে ১টি class তৈরি করা হয়েছে।
    class phpLanguage{
        use programmingLanguage_1;
    }

    $php = new phpLanguage();

    $php ->  php();


    class php_c{
        use programmingLanguage_1;
        use programmingLanguage_2;
    }








