
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


// for loop
let text = "";
for( i = 0; i <= 5; i++ ){
  text = text + " The number is: " + i + "\n";
}
console.log(text );


// while loop
let i = 0;
let txt = "";
while( i < 4 ){
  txt = txt + "This is number : " + i + "\n";
  i++;
}
console.log(txt);


//do ... while

let text = "";
let i = 0;
do{
  text = text + "The number is " + i + "\n";
  i++;
}while(i < 10);
console.log(text);

// for ... in loop
const person = {
  fname: "Akib",
  lname: "Islam",
  age: 5
};

let text = "";
for( let x in person ){
  text = text + person[x] + " ";
}


// console.log(x);
console.log(text);

 
// একটা স্ট্রিং এর উপরেও পুনরাবৃত্তি করা যায়।
const name = "W3schools";

let text = " ";
for(const x of name){
  text += x + "\n";
}
console.log(text);

// Iterating over an array
const letters = ["a", "b", "c"];

let txt = " ";
for(const letter of letters){
  txt += letter + "\n";
}
console.log(txt);
*/
