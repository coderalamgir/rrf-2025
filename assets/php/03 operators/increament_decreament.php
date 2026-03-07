<?php



$a = 5;
$b = 6;

$c = ++$b;// pre increament
echo "$c\n";

$d = $a++; // post increament
echo"$d\n";

$x = 5;
echo ++$x . "\n";

$z = 5;

echo $z++ . "\n";

$studentsScore = [75, 80, 85, 90, 95];
  foreach($studentsScore as $score){
    ++$score;
  echo "Updated score:" . "\t" . $score. "\n";
}

echo"\n";
echo"\n";


  $score = 10;
  echo "Current score: $score \n";

  $score++;
  echo"Updated score: $score\n";

// Decrement (--) Operator
  $remainingPages = 50;
  for($day = 1; $day <= 5; $day++){
    // echo "Day $day: Remainging pages are $remainingPages\n";
    $remainingPages--;
    echo "After reading, remainning pages are:$remainingPages\n ";
  }

