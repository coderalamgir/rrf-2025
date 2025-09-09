<?php
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