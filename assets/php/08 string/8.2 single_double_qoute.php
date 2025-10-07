<?php
  /*
    Single quote সাধারনত কোন বিশেষ চিহ্ন বা ভ্যারিয়েবলকে ব্যাখ্যা করতে পারে না। 
  
  */
    $name = 'Akib islam';
    // echo'My name is \n \t $name.';

    // echo"\n";

    // echo "My name is \n \t $name.";

    //heredoc string
    $text = <<<TOT
    This is
      multiline
        string
          for
             $name
    TOT;
    echo $text;
    echo "\n";
    echo "\n ";

    //nowdoc string
    $text = <<<'TOT'
    This is
      multiline
        string
          for
             $name
    TOT;
    echo $text;