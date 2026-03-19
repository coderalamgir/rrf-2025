

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
 */

  for ( i = 1; i <= 20; i ++  ) {
    if ( i % 2 != 0 ) {
      console.log(`Odd numbers from 1 to 20: ${i}`);
    }
  }
