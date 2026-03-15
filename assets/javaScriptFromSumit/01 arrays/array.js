
//array
// const cars = ["RFL", "Saab", "BMW", "Volvo"];
// let x = cars[2];
// console.log(cars[2]);
// document.getElementById("demo").innerHTML = cars;

// const cars = ["Saab", "Volvo", "BMW"];
// document.getElementById("demo").innerHTML = cars;


//object
// const person = {firstName: "Akib", lastName: "Islam", age:5};

// //access object
// console.log(person.firstName);

/*
const fruits = ["Banana", "Orange", "Apple", "Mango"];
let length = fruits.length;
console.log(length);
console.log(fruits[0]);
console.log(fruits[fruits.length -1]);


const fruits = ["Banana", "Orange", "Apple", "Mango"];
// console.log(fruits);
fruits.sort();
// console.log(fruits);
console.log(fruits.reverse());

document.getElementById("demo1").innerHTML = fruits;

const months = ["Jan", "Feb", "Mar", "Apr"];
const sorted = months.toSorted();

console.log(sorted);

const points = [40, 100, 1, 5, 25, 10];
points.sort(function(a, b){return a - b});
console.log(points);
points.sort(function(a, b){
    return b - a});
// console.log(points);
*/
const fruits = ["Banana", "Orange", "Apple", "Mango"];
document.getElementById("demo1").innerHTML = fruits;

function myFunction1(){
    fruits.sort();
    document.getElementById("demo1").innerHTML = fruits;

}function myFunction2(){
    fruits.sort();
    fruits.reverse();
    document.getElementById("demo1").innerHTML = fruits;
}
