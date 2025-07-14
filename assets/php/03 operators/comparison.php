<?php

#echo"Hello PHP Comparison operator \n";



$a = 20;
$b = "10";

$equal = $a == $b;
var_dump("$equal\n");

$not_equal = $a !== $b;
echo"$not_equal\n";


$identical = $a === $b;
var_dump($identical);

$not_identical = $a === $b;
echo($not_identical);

$greater = $a > $b;
var_dump($greater);

$less = $a < $b;
var_dump($less);

$greater_or_equal = $a >= $b; 
var_dump($greater_or_equal);

$less_or_equal = $a <= $b; 
var_dump($less_or_equal);



//২টি সংখ্যার মধ্যে তুলনা করতে হবে।
//Less than ( < )।
$number1 = 10;
$number2 = 20;

if($number1 < $number2) {
    echo" $number1 is less than $number2 ";
}else{
    echo" $number1 is not less than $number2 ";
}
    

    $age1 = 16;
    $age2 = 19;
    if( $age1 < $age2 ) {
        echo" Age is less.";
    }else{
        echo" Age is not less.";
    }

$price1 = 200;
$price2 = 300;
if( $price1 < $price2 ) {
    echo"Phone price is lower.\n";
}else{
    echo"Phone price is not lower.";
}

// Greater than ( > )

$number1 = 15;
$number2 = 10;

if( $number1 > $number2 ){
    echo"$number1 is greater than $number2.\n";
}else{
    echo"$number1 is not greater than $number2.";
}

$score1 = 85;
$score2 = 80;
if( $score1 > $score2 ){
    echo" Score is Higher.\n";
}else{
    echo" Score is not Higher.\n";
}

$temp1 = 30;
$temp2 = 25;

if( $temp1 > $temp2 ){
    echo" Temparature is higher.\n ";
}else{
    echo" Temparature is not higher.\n ";
}
   

    //Less than or Equal to ( <= )
    $price = 250;
    $budget = 300;
    if( $price <= $budget ){
        echo" মিনা বইটি কিনবেন। \n";
    }else{
        echo" মিনা বইটি কিনবেন না। \n";
    }

    $age = 20;
    $limit =21;
        if( $age <= $limit ){
            echo"You are within the age limit.\n";
        }else{
            echo"You are not within the age limit.";
        }

    $fee = 150;
    $budget = 200;
        if( $fee <= $budget ){
            echo" Fee is within budget. \n";
        }else{
            echo" Fee is not within budget. ";
        }
    //Greater than or Equal to ( >= )

    $salary = 5000;
    $minimum_salary = 4500;
        if( $salary >= $minimum_salary ){
            echo"Salary meets the criteria.\n";
        }else{
            echo"Salary does not meets the criteria.";
        }

 $currentVersion = 2.3;
 $requiredVersion = 2.2;
    if( $currentVersion >= $requiredVersion ){
        echo"Application is up to date.\n";
    }else{
        echo"Application is not up to date.";
    }

 // Spaceship Operator ( <=> )
 /*
 এই অপারেটরটি ২টা মানের মধ্যে তুলনা করে এবং  ৩টি সম্ভাব্য ফলাফল প্রদান করে।
 -1 ( যদি প্রথম মান ছোট হয়। ) 
 0 (যদি ২টি মান সমান হয়।) 
 1 (যদি প্রথম মান বড় হয়।) 
 */
 $studentScore = 88;
 $gradeThreshold = 85;
 $result = $studentScore <=> $gradeThreshold;
    if( $result === 1 ){
        echo " Student's score is above the grade threshold. \n";
    }elseif( result === 0 ){
        echo " Student's score is exactly the grade threshold. ";
    }else{
        echo " Student's score is below the grade threshold. ";
    }

 $guestAge = 28;
 $ageLimit = 30;
    if( $guestAge <=> $ageLimit < 0 ){
        echo"অতিথি পটিতে আমন্ত্রন পাবে।";
    }elseif( $guestAge <=> $ageLimit = 1 ){
        echo"অতিথি বয়স ঠিক সীমার সমান।";
    }else{
        echo"অতিথি পটিতে আমন্ত্রন পাবে না।";
    }






