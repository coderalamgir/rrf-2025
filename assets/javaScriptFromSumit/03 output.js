"use strict"; // প্রতিটা জাভাস্ক্রিপ্ট ফাইলে সবার উপরে অবশ্যই লিখতে হবে। তাহলে অনেক সমস্যার সমাধান হবে।
/*
    ৪ ভাবে জাভাস্ক্রিপ্ট কোড দেখানো যায়।

        ১। console.log() এর মাধ্যমে 
        ২। ‍alert() এর মাধ্যমে। 
        ৩। document.write()


// let myName = "Akib Islam";
// console.log(myName);

// দুই ভাবে ভ্যারিয়েবল ডিক্লেয়ার করা যায়।
    // ১।
    //   let name, age, city, country;
    // ২।
    //  let name;
    //  let age;
    //  let city;
    //  let country;

    // console.log("Personal Budget Tracker App.");
    // console.log(" 18000");  //My income
    // console.log(" 8000");  //my expense


    const userName = "Akib Islam";
    const income = 18000;
    const expense = 10000;
    console.log(userName);
    console.log(income);
    console.log(expense);

    console.log(typeof(income));
    console.log(typeof(userName));


const money = 25;
const rich = money + 25;
console.log(rich);

let count = 0;
count = count + 10;
console.log(count);


const numbers = [23, 4, 23, 12, 56];
numbers[1] = 55;
numbers.push(8, 9, 56);
console.log(numbers);

const student = {
    name: 'moyna pakhi',
    age:5,
}
student.name = 'Kokil kontho'

console.log(student);

function add(num1, num2){
    const result = num1 + num2;
    return result;

}
const sum = add(5);
console.log(sum);


function add( num1, num2 = 0 ){
    const result = num1 + num2;
    console.log(num1, num2, result);
    return result;
}
const sum = add(5);
console.log(sum);

function add(num1 = 0, num2 = 0){
    const result = num1 + num2;
    return result;
}
const sum = add(10);
console.log(sum);

function add(a, b) {
  return a + b;
}

const add1 = add(2, 3) * 10;
console.log(add1);
*/
const title = "Welcome"; 
const body = "This is a dynamic template";
const html = `<div>
    <h1>${title}</h1>
    <p>${body}</p>
</div>`;
console.log(html);