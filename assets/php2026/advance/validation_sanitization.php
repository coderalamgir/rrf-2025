<?php 
  // Form Input validation & sanitization এর ফাংশন এর বিভিন্ন পদ্ধতি রয়েছে।
  // htmlspecialchars(); 
  // htmlentities();
  $user_input = '<script>alert("XSS Attack!");</script>';
  $sanitized_input = htmlspecialchars($user_input);
  echo $sanitized_input ;
  echo "\n";

  //? filter_var(); 
  $email_input = 'john.doe@<script>alert("hack");</script>example.com';
  $sanitized_email = filter_var($email_input, FILTER_SANITIZE_EMAIL);
  echo $sanitized_email;
  echo"\n";

  //? trim();
  $user_input_name = " Akib Islam ";
  $sanitized_user_input_name = trim($user_input_name);
  echo $sanitized_user_input_name;
  echo "\n";
  echo $user_input_name;
  echo "\n";
  
  
