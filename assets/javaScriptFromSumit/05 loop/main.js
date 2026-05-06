
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

const num1 = 100;
const num2 = 20;
const substraction = `defference between ${num1} and ${num2} is ${num1 - num2}!`;
console.log(substraction);

const employee = {
  name: "akib",
  age: 5,
  salary: 18000
};
const info = `Name: ${employee.name},\nAge: ${employee.age},\nSalary: ${employee.salary}`;
console.log(info);

const fruits = ['Banana', 'Mango', 'Orange', 'Dates'];
const random = `Third fruit is ${fruits[2]}.`;
console.log(random);


const a = 50;
const b = 10;
const division = `The division of a and b is ${a / b}`;
console.log(division);


const person = {
  firstName: "Akib",
  lastName: 'Islam'
};

const fullName = `Full Name: ${person.firstName} ${person.lastName}!`;
console.log(fullName);

const animals = ['Cat', 'Dog', 'Elephant'];
const result = `My favorite animals are: ${animals.join( ", " )}.`;
console.log(result);


function add( a, b ){
  return a + b;
  
}


const add = function(a, b){
  return a + b;
};
const result = add(5, 9);
console.log(result);


const add2 = (a, b) => a + b;

const added = add2(5, 5);
console.log(added);

const student = {
  name: 'Akib',
  age: 5
}

const getName = person => person.name;
const getAge = person => person.age;
const age = getAge(student);
console.log(age);

// ডিফল্ট প্যারামিটারসহ অ্যারো ফাংশন।
const greet = (name = "Akib") => `Hello, ${name}!`;
console.log(greet());
console.log(greet('Sadika'));

const getObject = () => ({key:"value"});
console.log(getObject());

const numbers = [4, 6, 8, 10, 12];
const number = () => numbers[1] ;
console.log(number());

const num = (num1 = 1, num2 = 1, num3 = 1) => num1 * num2 * num3; 
const multiply = num(3, 3, 3);;
console.log(multiply);

const sum = ( a = 10, b = 5 ) => {
  return a + b;
} ;

const final = sum();
console.log(final);

// Erorr Validation
function sum(num1, num2){
  if( typeof num1 !== 'number' || typeof num2 !== 'number' ){
    return "Please provide a number.";
  }
 
  const total = num1 + num2;
  return total;
}
const result = sum(5, 5);
console.log(result);


function getSecond( numbers ){
  if( Array.isArray(numbers) == false ){
    return "Please provide an array";
  }
  const second = numbers[2];
  return second;

}
const second = getSecond([1, 5, 10]);
console.log(second);



function getPrice(product){
  if( typeof product !== 'Object' ){
    return "Please provide an object.";
  }
  const price = product.price;
  return price;
}

const result = getPrice({name: "potato", price: 20, weight: "3kg"});
console.log(result);

const profile = {
  name:'Akib',
  age:5,
  city:'Kushtia'
};
// console.log(profile.city);
const result = Object.keys(profile);
const citys = result.includes('city');
// console.log(result);
console.log(citys);
console.log('name' in profile);

*/
/*
const profile = {
  name: 'Sadika',
  age:11,
  city: 'hakimpur'
};
*/
/*
if( 'ciy' in profile ){
  console.log('city Exists.');
}else{
  console.log('No city, No Spam.');
}


// মান চেক করার উপায়।
if( profile.city === 'hakimpur' ){
  console.log('জ্যামের শহর ঢাকা।');
}else{
  console.log('আমার শান্তি গ্রামে।');
}


const person = {
  name:'Akib',
  age:5,
  city:'Hakimpur'
};

const result = Object.entries(person);
console.log(result);


//অবজেক্ট এর উপর লুপ চালানো for ... in loop ব্যবহার করা হয়।
const profile = {
  name: 'Akib',
  age: 5,
  city:'Hakimpur'
};

for( const key in profile ){
  const value = profile[key];
  console.log(key.value);
}

const book = {
  name: 'JavaScript',
  writer: 'Jhankar Mahbub',
  price: 700,
};
const key = Object.keys(book);
console.log(key);
const value = Object.values(book);
console.log(value);

// Object.freeze(); Method

const adminUser = {
  username:'admin',
  email:'admin@example.com',
  role:'superadmin'
};
Object.freeze(adminUser);
delete adminUser.role;
adminUser.adminPassword = "1234567890";
adminUser.role = 'user';


console.log(adminUser);


// Object.seal();
const user = {
  username: 'akib',
  email: 'akib@gmail.com',
  password:'oldpassword'
};

Object.seal(user);
user.password = 'newpassword';
user.age = 5;
delete user.email;
console.log(user);

const headphone = {
  brand:'Sony',
  price:300,
  color:'red'
};
Object.freeze(headphone);
headphone.model = "s3";
console.log(headphone);

const player = {
  name: 'Messi',
  goals:800,
  club: 'Inter Milan'
};
Object.freeze(player);
player.team = 'Argentina';
console.log(player);

const book = {
  title: 'Harry Potter',
  author: 'JK Rowling',
  pages: 500,
};
Object.seal(book);
book.author = 'Akib Islam',
console.log(book);

const gadget = {
  name:'iPhone',
  price:120000,
  color:'black'
};
delete gadget.price;

console.log(gadget);

const animal = {
  name: 'Tiger',
  location:'Sundarban'
};
Object.freeze(animal);
animal.location = 'Bandarban';
console.log(animal);

const food = {
  mane: 'Pizza',
  price:500,
  size: 'Lage'
};
Object.seal(food);
food.price = 450;
console.log(food);

// Object Method
const person = {
  firstName: 'Akib',
  lastName: 'Islam',
  age: 5,
 
};
  person.fullName = function(){
    return (this.firstName + " " + this.lastName).toUpperCase();
  };
// console.log(person.firstName);
// console.log(person.lastName);
// console.log(person.age);
console.log(person.fullName());
// const persons = Object.keys(person);
// const persons = Object.values(person);
// const persons = Object.entries(person);
// console.log(persons);


// সাধারনত অবজেক্টকে ৪টি উপায়ে দেখানো যায়।
// প্রথমত অবজেক্ট এর সকল প্রাপার্টিজকে একটি স্ট্রিং এর মধ্যে দেখানো যায়।
const person = {
  name: 'akib',
  age:5,
  city: 'Hakimpur'
};
let txt = person['name'] + "," + person['age'] + "," + person['city'];
console.log(txt);


// দ্বিতীয়ত অবজেক্ট এর সকল প্রাপার্টিজকে একটি লুপ এর মধ্যে দেখানো যায়।
const person = {
  name: 'Akib',
  age:5,
  city: "Hakimpur"
};

let text = "";
for(let x in person ){
  text += (person[x] + ", ").toUpperCase();
}
console.log(text);

// তৃতীয়ত অবজেক্ট এর সকল প্রাপার্টিজকে একটি এ্যারেতে রুপান্তর এর মধ্যে দেখানো যায়। Object.values() এর মাধ্যমে।

// Create an Object
const person = {
  name:'Akib',
  age:5,
  city: 'Hakimpur'
};

//Create an Array
const result =Object.values(person);

// Stringify the Array
let text = result.toString();
console.log(result);

// Object function constractor for Person object
function Person(first, last, age, eye){
  this.firstName = first;
  this.lastName = last;
  this.age = age;
  this.eyeColor = eye;
  
}

//Create a person object
const myFather = new Person('Akib', 'Islam', 5, 'black');
myFather.nationality = "Bangoli";

// const myMother = new Person('Sadika', 'Sultana', 11, 'black');
const final = "My Father name is " + myFather.firstName + " " + myFather.lastName + " " + myFather.nationality +".";
console.log(final);


// Math method Or function
// সবচেয়ে ছোট মান বের করা।
const min = Math.min(3, 6, 7, 11, 40, 2);
console.log(min);

// সবচেয়ে বড় মান বের করা।
const max = Math.max(3, 6, 7, 11, 40, 2);
console.log(max);

// Absolute মান বের করা।
console.log(Math.abs(-7));
console.log(Math.abs(7));

// ভগ্নাংশ থেকে নিকটবর্তী পূর্ন সংখ্যা  পেতে।
console.log(Math.round(8.7));
console.log(Math.round(8.2));

// ভগ্নাংশ থেকে নিকটবর্তী ছোট পূর্ন সংখ্যা  পেতে।
console.log(Math.floor(4.7));
console.log(Math.floor(4.1));

// ভগ্নাংশ থেকে নিকটবর্তী বড় পূর্ন সংখ্যা  পেতে।
console.log(Math.ceil(4.7));
console.log(Math.ceil(4.1));


// random / দৈব্য চয়ন সংখ্যা পেতে।
console.log(Math.random());

const min = Math.min(45, 11, 89, 56, -12, -56);
console.log(min);

const max = Math.max(21, 36, 67);
console.log(max);

console.log(Math.round(7.6));  //নিকটবর্তী পূর্নসংখ্যা
console.log(Math.round(7.2));  //নিকটবর্তী পূর্নসংখ্যা

console.log(Math.floor(9.8));  //নিকটবর্তী পূর্নসংখ্যা ছোট
console.log(Math.floor(5.3));  //নিকটবর্তী পূর্নসংখ্যা ছোট

console.log(Math.ceil(3.1));  //নিকটবর্তী পূর্নসংখ্যা বড়
console.log(Math.ceil(6.9));  //নিকটবর্তী পূর্নসংখ্যা বড়

  //Absolute Value
  console.log(Math.abs(-34));

  // Function
  function number(decimal){
    return decimals;
  }
  // const final = Math.round(5.8);
  // const final = Math.floor(5.8);
  const final = Math.ceil(5.8);
  console.log(final);


// Date Object
const now = new Date();
console.log(now);


// Regular Expression
const phone = "01715684469";
const phonePattern = /^01[3-9]\d{8}$/;
console.log(phonePattern.test(phone));
*/