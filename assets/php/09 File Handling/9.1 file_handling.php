<?php

/*
    declare(strict_types = 1);
    // date(); function এর ব্যবহার।
    echo date("d/m/y") . "\n";
    echo date("Y/m/d")  . "\n";
    echo date("1")  . "\n";
    echo date("Y")  . "\n";
    echo date("h:i:sa")  . "\n";
    date_default_timezone_set("America/New_York");
    */

    $fileHandle = fopen("user_activitz_log.txt", "a");
    if ( $fileHandle ) {
        $logData = "User: JohnDoe | Login Time:" . date('Y-m-d H:i:s') . " | Status: Success \n";
        fwrite( $fileHandle, $logData );
        fclose( $fileHandle );
        echo " User activitz logged successfully. ";
    } else {
        echo " Failed to create or open log file. ";
    }