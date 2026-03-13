

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

*/

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