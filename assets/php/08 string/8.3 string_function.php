<?php
  // php তে যেমন অসংখ্য array function আছে ঠিক তেমনি অসংখ্য ‍string function ও আছে। নিচে আলোচনা করা হলো।

  //string এর দৈর্ঘ্য জানতে।
  $txt = " My name is Akib islam. ";
  $lenth = strlen($txt);
  // echo $lenth;
  
  //word এর সংখ্যা জানতে।
  $wordCount = str_word_count($txt);
  // echo $wordCount;
  
  //string কে উল্টাতে।
  $reversed = strrev($txt);
  // echo $reversed;
  
  //কোন শব্দের অবস্থান কোথায় জানতে।
  $reversed = strpos($txt, "Akib" );
  // echo $reversed;

  // একটি শব্দকে আরেকটি শব্দ দিয়ে প্রতিস্থাপিত করতে।
  $replaced = str_replace("Akib", "Sadika", $txt);
  // echo $replaced;

  //case পরিবর্তন করতে।
  $upperCase = strtoupper($txt);
  // echo $upperCase;
  
  $lowerCase = strtolower($txt);
  // echo $lowerCase;

  $upperCaseFirstWordInSentence = ucfirst($txt);
  // echo $upperCaseFirst;
  $upperCaseFirstWords = ucwords($txt);
  // echo $upperCaseFirstWords;

  //Extra space বাদ দিতে trim(), ।
  $noSpaceBoth = trim($txt);
  $trimed = trim($txt);
  // echo $noSpaceBoth . "\n" ;
  // echo $trimed ;

  $leftTrim = ltrim($txt);
  // echo $leftTrim;
  
  $rightTrim = rtrim($txt);
  echo $rightTrim;

