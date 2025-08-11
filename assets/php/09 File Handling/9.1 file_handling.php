<?php
    declare(strict_types = 1);
    // date(); function এর ব্যবহার।
    echo date("d/m/y") . "\n";
    echo date("Y/m/d")  . "\n";
    echo date("1")  . "\n";
    echo date("Y")  . "\n";
    echo date("h:i:sa")  . "\n";
    date_default_timezone_set("America/New_York");