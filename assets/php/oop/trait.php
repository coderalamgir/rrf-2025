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
    // ১টি trait থেকে class তৈরি করা হয়েছে।
    class phpLanguage{
        use programmingLanguage_1;
    }

    $php = new phpLanguage();

    $php ->  php();

    // একের অধিক trait থেকে  class তৈরি করা হয়েছে।
    class php_c{
        use programmingLanguage_1;
        use programmingLanguage_2;
    }

    // Object তৈরি।
    $php_c = new php_c();
    







