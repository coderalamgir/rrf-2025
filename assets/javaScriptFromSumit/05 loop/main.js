
// for loop একটি কোড ব্লক এর কাজ বার বার করাকে লুপ বলে।

/*
let i = 0;
let text = '';

for (let i = 0; i < 5; i++) {
  text += "The number is " + i + "<br>";
  console.log(i);
}


// for in loop

// for in loop on Object: for in লুপ অবজেক্ট এর উপরে কাজ করে।  Object এর properties গুলোর মধ্যে দিয়ে যায়।
// অবজেক্ট এর প্রোপাটিজগুলোকে array syntax দিয়ে লেখা যায়।

  const  person = { fname: "Akib", lname: "Islam", age: 5 };

  for( let x in person ){
    console.log(x);   // শুধুমাত্র property / key গুলো পাব।
    console.log(person[x]);   // শুধুমাত্র Value গুলো পাব।
    
  }

  // for in loop on array: for in loop এর সাহায্যে array এর index number iteration  করতে পারি। এবং ঐ index এর item / element গুলো বের করতে পারি। array এর ক্ষেত্রে order / index number important. কিন্তু object এর ক্ষেত্রে নয়। তাই কখনই ‍array এর ক্ষেত্রে for in loop ব্যবহার করা যাবে না। এক্ষেত্রে for loop, for of loop এবং Array.forEach() method ব্যবহার করতে পারি।

  const numbers = [ 45, 4, 9, 16, 25 ];
  for( let number in numbers ){
    // console.log(number);    // শুধুমাত্র index number গুলো পাব।
    console.log(numbers[number]);    // শুধুমাত্র item গুলো পাব।
  }
*/

// for of loop এর ব্যবহার

