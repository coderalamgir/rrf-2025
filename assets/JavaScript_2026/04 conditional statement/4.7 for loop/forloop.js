

// for loop
// syntax: for( initialization; condition; increment/decrement) {

// }

// for( let i = 1; i <= 10; i++ ){
//   console.log(i);
// }


/*
// এক থেকে ৫ এর কম সংখ্যাগুলো প্রিন্ট কর।
for ( i = 1; i < 5; i++ ){
  console.log(i);
}

// আবার ১ থেকে ১০ এর কম বা ১০ পর্যন্ত সংখ্যাগুলো প্রিন্ট কর।
for ( i = 1; i <= 10; i++ ) {
  console.log(i);
}

 // ৫০ থেকে ১০০ পর্যন্ত প্রিন্ট কর।
 for ( i = 50; i <= 100; i ++ ){
  console.log(i);
  }
  
  
  // ১১ থেকে ২০ পর্যন্ত সংখ্যাগুলোর যোগফল বের কর।
  let sum = 0;
  for (let i = 11; i <= 20; i++ ) {
    sum += i;
    }
    console.log(`Sum of numbers 11 to 20 is : ${sum}`);
    

   
   // ১৫০ থেকে ১৭০ পর্যন্ত প্রিন্ট কর।
   for ( i = 150; i <= 170; i++ ) {
     console.log(i);
    }

    
    // ৩১ থেকে ৫৮ পর্যন্ত   রোল নম্বর প্রিন্ট কর। তারপর যোগ কর।
    let roll = 0;
    for ( i = 31; i <= 58; i++ ) {
      // console.log(i);
      roll += i;
    }
    console.log(`Sum of roll numbers ${roll}`);


    let numbers = 0;
    for ( i = 25; i <= 75; i++ ) {
      numbers += i;
    }

    console.log(`Sum of numbers 25 to 75 is: ${numbers}`);


  // ০ থেকে ২০ পর্যন্ত সংখ্যাগুলোর মধ্যে জোড় সংখ্যাগুলো বের কর।
    for ( i = 0; i <= 20; i++ ) {
      if ( i % 2 == 0 ){
        console.log(i);
      }
    }


  // ০ থেকে ২০ পর্যন্ত সংখ্যাগুলোর মধ্যে বিজোড় সংখ্যাগুলো বের কর।
    for ( i = 0; i <= 20; i++ ) {
      if ( i % 2 != 1 ){
        console.log(i);
      }
    }


  for ( i = 1; i <= 20; i ++  ) {
    if ( i % 2 != 0 ) {
      console.log(`Odd numbers from 1 to 20: ${i}`);
    }
  }

  for ( i = 1; i <= 30; i++ ) {
    if ( i % 3 == 0 && i % 5 == 0){
      console.log(i);
    }
  }



  let sum = 0;
  for ( i = 1; i <= 40; i++ ) {
    if ( i % 13 == 0 ){
    }
    sum += i;
  }
  console.log(sum);



// ০১ থেকে ৫০ পর্যন্ত লুপ চালাব । তবে লুপ চালানোর সময় প্রতিবার ৪ করে বৃদ্ধি পাবে।
  for (i = 1; i <= 50; i = i + 4){
    console.log(i);
  }



  // ০ থেকে ১০০ পর্যন্ত সংখ্যাগুলো প্রিন্ট কর, যা ৯ এবং ৬ দ্বারা বিভাজ্য।
  
  for ( i = 0; i <= 100; i++ ) {
    if ( i % 9 == 0 && i % 6 ==0) {
      console.log(i);
    }
  }

 // ১ থেকে ৫০ পর্যন্ত সংখ্যাগুলো প্রিন্ট কর, যা ৩ এবং ৪ উভয় দ্বারা বিভাজ্য।

  for ( i = 1; i <= 50; i++ ) {
    if ( i % 3 == 0 && i % 4 == 0 ){
      console.log(i);
    }
  }


 // ১ থেকে ১৫ পর্যন্ত সংখ্যা প্রিন্ট করার সময় ৭ এ গিয়ে break কর।

  for ( i = 1; i <= 15; i++ ) {
    console.log(i);
    if ( i >= 7 ){
      break;
    }
  }


 // ১ থেকে ১৫ পর্যন্ত সংখ্যা প্রিন্ট করার সময় ৭ এ গিয়ে  continue কর।

  for ( i = 1; i <= 15; i++ ) {
    if ( i == 7 ){
      continue;
    }
    console.log(i);
  }



 // ১ থেকে ১৫ পর্যন্ত জোড় সংখ্যাগুলো প্রিন্ট কর।

  for ( i = 1; i <= 15; i++ ) {
    if ( i % 2 != 0 ){
      continue;
    }
    console.log(i);
  }

  // ১ থেকে ৩০ পর্যন্ত সংখ্যাগুলো প্রিন্ট করতে চাই। কিন্তু ১৫ এর পরে প্রিন্ট বন্ধ হয়ে যাবে।

    for ( i = 1; i <= 30; i++ ) {
      console.log(i);
      if ( i == 15 ){
        break;
      }
    }
      

  // ১ থেকে ৪০ পর্যন্ত সংখ্যাগুলো প্রিন্ট করতে চাই। কিন্তু ৭ দিয়ে বিভাজ্য সংখ্যাগুলো বাদ যাবে।

    for ( i = 1; i <= 40; i++ ) {
      if ( i % 7 == 0 ){
        continue;
      }
      console.log(i);
    }


  // ১ থেকে ১৫পর্যন্ত সংখ্যাগুলো প্রিন্ট করতে চাই। কিন্তু ৯ বাদে।

    for ( i = 1; i <= 15; i++ ) {
      if ( i == 9 ){
        continue;
      }
      console.log(i);
    }


  // ১ থেকে ১২পর্যন্ত সংখ্যাগুলো প্রিন্ট করতে চাই। কিন্তু ১২ বাদে।

    for ( i = 1; i <= 20; i++ ) {
      if ( i == 12 ){
        continue;
      }
      console.log(i);
    }

  // ১ থেকে ২৫পর্যন্ত সংখ্যাগুলো প্রিন্ট করতে চাই। কিন্তু ৩ দিয়ে বিভাজ্য সংখ্যা  বাদে।

    for ( i = 1; i <= 25; i++ ) {
      if ( i % 3 == 0 ){
        continue;
      }
      console.log(i);
    }
  */ 

  // ৯১ থেকে ১২০ পর্যন্ত সংখ্যাগুলো প্রিন্ট করতে চাই। কিন্তু ১০ দিয়ে বিভাজ্য সংখ্যা  বাদে।

    for ( i = 91; i <= 120; i++ ) {
      if ( i % 10 == 0 ){
        continue;
      }
      console.log(i);
    }