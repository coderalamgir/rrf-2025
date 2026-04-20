
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

function sayHello(){
  return "Hello world let us talk to me.";
}

function showHello(){
  document.getElementById('demo').innerHTML = sayHello();

}

const retult = sayHello();
console.log(sayHello());



// Arrow function syntax
const multiply = (a, b) => a * b;
console.log(multiply(5, 4));




// Standard function Syntax
function multiply( a, b ){
  return a * b;
}
console.log(multiply(4, 5));


//Function Expression Syntax
const  multiply = function add( a, b ){
  return a + b;
};

console.log(multiply(40, 50));


//Arrow function syntax
// const multiply = ( a, b ) => a * b;

// console.log(multiply(2, 3));
let x = myFunction(4, 3);
console.log(x);

function myFunction(a, b) {
  return a * b;
}
  


function add(num1 = 0, num2 = 0, num3 = 0){
  const result = num1 + num2 + num3;
  return result;
}

const sum = add(10, 10, 30);
console.log(sum);

function add(num1 = 0){
  const result = num1 + 50;
  return result;
}
const final = add(50);
console.log(final);

function info( name = "Anonymous", income = 0){
  const updated = name + " " + "your monthly income is " + income + " TK. ";
  return updated;
}
const final = info(" Alamgir ", 17760 );
console.log(final);

function square(number = 1){
  const squared = number * number;
  return squared;
}
const result = square(12);
console.log(result);

const name = 'Akib';
const age = 5;
console.log("Name: " + name + ", Age: " + age);
console.log(`Name: ${name}, Age: ${age}`);

const a = 10;
const b = 20;
const math = `The sum of ${a} and ${b} is ${a + b}`;
console.log(math);

const email = `আমার সোনার বাংলা
আমি তোমায় ভালবাসি।
চিরদিন তোমার আকাশ
তোমার বাতাস
আমার প্রানে
ওমা আমার প্রানে
বাজাও বাসি সোনার বাংলা
আমি তোমায় ভাল বাসি।`;
console.log(email);

const getName = function(){
  return "Nadia";
}

const message = `না বললে সাদিয়া, আছে আমার ${getName()}!`;
console.log(message);

const age = 20;
const status = `You are ${age > 18? "Adult" : "Minor"}`;
console.log(status);


const user = {
  name: "Akib",
  age: 5
}
const info =`Name: ${user.name}, Age: ${user.age}`;
console.log(info);


const fruits = ['Apple', 'Banana', 'Mango'];
const second = `My second favorite fruit is ${fruits[2]}.`;
console.log(second);
const list = `My favorite fruits are ${fruits.join(", ")}.`;
console.log(list);
*/
