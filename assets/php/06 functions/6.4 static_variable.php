<?php
    
    //কোন ভ্যরিয়েবল এর পূর্বে static keyword থাকলে তাকে static variable বলে।
    function visitorCounter () {
        static $visitorCount = 0;
        $visitorCount++;
        echo"You are visitor number: " . $visitorCount . "\n";
    }
    visitorCounter();
    visitorCounter();
    visitorCounter();
    visitorCounter();
    visitorCounter();