<?php

    // do...while loop খুব বেশি ব্যবহার হয় না।
    /*
    $attempt = 0;
    do{
        echo"Please enter your password.\n";
        $attempt++;
    }while( $attempt < 3 );
    echo" Login attempts finished. \n ";

    $i = 1;
    do{
        echo"Give your password. \n";
        $i++;
    }while($i <= 3);
    */

    $i = 1;
    do {
        echo"Give your password. \n";
        $i++;
    }while ( $i <= 3 );



    $i = 1;
    do{
        echo"Login attempt $i\n";
        $i++;
    }while( $i <= 6 );
