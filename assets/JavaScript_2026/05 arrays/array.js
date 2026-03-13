

// Array
/*
const vasitable = ["Potato", "Onion", "Brinjal", "Radish", "Carrot", "Tomato", "Ladish Finger", "Law", "Cucumber", "Potol"]; 

let size = vasitable.length;
console.log(vasitable.length);


const favouriteMovies = ["Bipasha", "Dena Pawna", "Jibon niye khela", "Mouchak", "Rajkumari"];

const color = ["Black", "White", "Blue", "Green"];
let sizes = color.length;
console.log(color.length);

const capitals = ["Dhaka", "Kathmandu", "Dilhi", "Karachi", "Kampala", "Nirobi"];
let sizess = capitals.length;
console.log(sizess);


// find out index number
let indexing = capitals[5];
console.log(indexing);

const mobileGames = ["Freefire", "Pubzi", "Candy crush", "Temple run"];
let geme = mobileGames[3];
console.log(mobileGames[3]);


// index element update.
mobileGames[3] = "subway surfar";
console.log(mobileGames);


const numbers = [ 71, 72, 73, 74, 75, 76, 77, 78,79];
// numbers.push(80, 81,82, 83, 84,85);
// const pop1 = numbers.Pop();
// console.log(pop1);
// console.log(numbers);



const fruits = ["Apple", "Banana", "Orange", "Mango", "Goava"];
// fruits.shift();
fruits.unshift("Jackfruit");
console.log(fruits);



const number = [10, 20, 30, 40, 50];
number.push(60);
// number.pop()
// console.log(number);
document.getElementById("demo").innerHTML = number;

const friends = ["Sajib", "Sagor", "Sakib", "Sohel"];
console.log(friends);
friends.push("Sumon");
document.getElementById("demo1").innerHTML = friends;


// Mobile games
const mobileGames = ["FreeFire", "pubzi", "Surfer"];
mobileGames.pop();
document.getElementById("demo2").innerHTML = mobileGames;

const number1 = [ 24, 36, 48, 60];
number1.unshift(12);
document.getElementById("demo3").innerHTML = number1;


const books = ["PHP Mastering", "Marhaba JavaScript Maro thaba", "HTML", "CSS"];
books.shift();
document.getElementById("demo4").innerHTML = books;



//include() function
const books = ["PHP Mastering", "Marhaba JavaScript Maro thaba", "HTML", "CSS"];

  let exist = books.includes("html");
  // let index = books.indexOf("css");

  if(exist){
    document.getElementById("demo4").innerHTML = "Party";
  }else{
  document.getElementById("demo4").innerHTML = "No food, We are fasting.";
}



const fruits = ["Apple", "Banana", "Mango", "Lychee"];

const mango = fruits.includes("Mango");

if ( mango ) {
  console.log('আম আছে।');
}else{
  console.log('আম নেই, গাছে উঠ।');
}


const names = ["Babul", "Alif", "Choton", "Rifat"];
const named = names.indexOf("Rifat");
console.log(named);

const cities = ["Dhaka", "Chittagong", "Sylhet", "rajshahi"];
const city = cities.includes("Rajshahi");
console.log(city);


const rain = ["Dighi", "Megh", "Borsha", "Brishti"];
const rained = rain.includes("Brishti");
if ( rained){
  console.log("I need Umbrella.");
}else{
  console.log("No rain, No pain.");
}



const numbers = [12, 98, 45, 63, 21,72];
for( const num of numbers ){
  console.log(num);
}

const fruits = ["Orange", 'Apple', 'Banana', 'Jackfruit', 'watermelon'];
for( const fruit of fruits ){
  console.log(fruit);
}

const favouriteSubjects = ['HTML', 'CSS', 'JavaScript','PHP', 'English'];
for( const subject of favouriteSubjects ){
  console.log(subject);
}

const favFood = ['Biriyani', 'Rice', 'Vasitable', 'Fish', 'Dal',];
for(const food of favFood){
  console.log(food);
}
console.log(favFood.toString());

const years = [2015, 2020, 1983, 1989];
for( const year of years ){
  console.log(year);
}



// while loop
// while( num <= 10 ){
  //   console.log( " আমি প্রতিদিন কমপক্ষে ৩ ঘন্টা অনুশীলন করব। " );
  //   num ++;
  // }
  let num = 1;
while( num <= 10 ){
  console.log(num + " X " + 3 + " = " + num*3);
  num++;
}


//Merge arrays
const myGirls = ['Sadika', 'Mim'];
const myBoys = ['Hasib', 'Akib'];
const myBoyss = ["Emil", "Tobias", "Linus"];
const myGirlss = ["Cecilie", "Lone"];
const myChildren = myGirls.concat(myBoys, myBoyss,myGirlss);
console.log(myChildren);

const fruits = ["Banana", "Orange", "Apple", "Mango"];
// const sorted = fruits.sort();
// console.log(sorted);
console.log(fruits.toSorted());
// console.log(fruits.reverse());

    */

const points = [40, 100, 1, 5, 25, 10];
points.sort(function(a,b){return a - b});
console.log(points);