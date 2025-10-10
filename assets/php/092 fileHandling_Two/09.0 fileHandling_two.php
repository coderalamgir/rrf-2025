<?php
  //ফাংশনের সাহায্যে রাইটিং মোড এ ফাইল তৈরি।
  $file = fopen("new.txt", "w");
  
  // fwrite(); Function এর সাহায্যে উপরের ফাইলের মধ্যে কিছু লিখতে।
  fwrite($file, "Projukti Plus");
  
  // ফাইল পড়ার ফাংশন
  $file = fopen("new.txt", "r");

  //Echo করতে হবে।
  // echo fread($file, fileSize("new.txt"));
