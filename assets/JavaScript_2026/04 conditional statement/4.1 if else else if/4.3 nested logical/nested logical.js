
// Nested if else with Logical operator


/*
let a = 100, b = 200, c = 300;

if( a > b && a > c ){
    console.log(`${a} is the maximum Number.`);
}else if( b > a && b > c ){
    console.log(`${b} is the maximum Number.`);
}else{
    console.log(`${c} is the maximum Number.`);
}


const salary = 66000;
const isBCS = true;
if(salary > 55000 && isBCS == false){
    console.log("সেই লেভেলের পাত্র।");
}else{
    console.log("দুরে গিয়ে মরো।");
}

const salary = 26000;
const height = 68;

if(salary > 25000 || height == 72){
    console.log("Bolo baba kobul.");
}else{
    console.log("Vag tui mokbul");
}
 

const age = 19;
const height = 64;

if( age > 18  && height > 60 ){
   console.log("তুমি গাড়ি ঠেলো।"); 
}else{
    console.log("তুমি গাড়িতে বসো।");
}

    const mathScore = 83;
    const englishScore = 79;
    if( mathScore > 80 && englishScore > 85  ){
        console.log("You are eligible for addmision.");
    }else{
        console.log("You are ready for marry.");
    }

    const gpa = 5;
    const familyIncome = 10500;

    if( gpa == 5 && familyIncome < 10000 ){
        console.log(" You have gotten scholership.");
    }else{
        console.log(" You have to study with education fees. ");
    }

    const age = 28;
    const experience = 3;
    if(age < 30 && experience > 2){
        console.log("You are allowed to seat for exam.");
    } else{
        console.log("You are not allowed to seat for exam.");
    }


    const eggs = 14;
    const chicken = 0;
    if(eggs > 12 || chicken == 0){
        console.log("You will cock egg corma.");
    }else{
        console("You will eat banana  & bun.");
    }

    const bodyTemparature = 102;
    const isCough = true;
    if( bodyTemparature > 100 || isCough == true ){
        console.log("He will go to the doctor.");
    }else{
        console.log("He will lay with Katha.");
    }


    const studentPresence = 90;
    const homeWork = true;
    if(studentPresence > 80 && homeWork == true){
        console.log("You are eligible for Exam.");
    }else{
        console.log("You are not eligible for Exam.");
    }

    const electricity = false;
    const mobileCharge = false;
    if( electricity == false && mobileCharge == false ){
        console.log("You will now read.");
    }else{
        console.log("You will play video game.");
    }

    const shirtPrice = 1300;
    const discount = 20;
    if( shirtPrice > 1000 && discount == 20 ){
        console.log("You will get discount.");
    }

// ৫০০০ টাকার উপরে কেনাকাটা করলে ১০% ডিসকাউন্ট পাবেন। এক কম হলে পাবেন না।
    const price = 5500;
    if( price > 5000 ){
        const discount = price / 100 * 10;
        const pay = price - discount;
        console.log("Your total bill with discount is: " + pay + " TK.");
    }else{
        console.log("Your total bill without discount is: " + price + " TK.");
    }


// ৫০০০ হাজার বা তার বেশি টাকার কেনাকাটা করলে ১০% ছাড়।  4০০০ হাজার বা তার বেশি টাকার কেনাকাটা করলে 5% ছাড়। 3০০০ হাজার বা তার বেশি টাকার কেনাকাটা করলে 3% ছাড়। 3০০০ হাজার টাকার কম কেনাকাটা করলে কোন ছাড় পাবে না। 
const price = 2000;
if(price >= 5000){
    const discount = price / 100 * 10;
    const pay = price - discount;
    console.log(pay);
}else if( price >= 4000 ){
    const discount = price / 100 * 5;
    const pay = price - discount;
    console.log(pay);
}else if(price >= 3000){
    const discount = price / 100 * 3;
    const pay = price - discount;
    console.log(pay);
}else{
    console.log(price);
}

    const price = 2900;

    if( price > 6000 ){
        const discount = price / 100 * 15;
        const pay = price - discount;
        console.log(pay);
    }else if( price > 3000 ){
        const discount = price / 100 * 5;
        const pay = price - discount;
        console.log(pay);
    }else{
        console.log(price);
    }


const age = 61;
const price = 450;

if( age > 60 ){
    const discount = price / 100 * 50;
    const pay = price - discount;
    console.log(pay);
}else if( age < 12 ){
    console.log("This food is free for you.");
}

    const balance = 900;

    if( balance > 5000 ){
        console.log("তুই ধনী আমাকে বিয়া কর।");
    }else if( balance > 1000 ){
        console.log("বিন্দাস লাইফ ইনজয় কর।");
    }else{
        console.log("ডিপোজিট কর।");
    }

    const marks = 40;

    if( marks > 80 ){
        console.log("A+");
    }else if(marks > 50){
        console.log("Pass");
    }else{
        console.log("Fail");
    }

    const bookPages = 590;

    if( bookPages < 100 ){
        console.log("Small Book");
    }else if( bookPages < 500 ){
        console.log("Mid-size Book");
    }else{
        console.log("Heart attack size Book");
    }


const tempareture = 22;

if( tempareture < 0 ){
    console.log("Ice");
}else if( tempareture < 20 ){
    console.log("Cool Cool");
}else{
    console.log("Hot Hot");
}
 
    const level = 69;

    if( level < 10 ){
        console.log("Novice");
    }else if( level < 50 ){
        console.log("Expert");
    }else{
        console.log("Pro Gamer");
    }


    const inviteMe = true;
    const money = 900;
    // if(inviteMe == true){
    //     console.log("I will go.");
        
    //     if(money > 1000){
    //         console.log("I will give you a special gift.");
    //     }else{
    //         console.log("I will go without gift.");
    //     }

    // }else{
    //     console.log("I will delete you from my friend list.");
    // }

    if( inviteMe == true && money > 1000 ){
        console.log( " I will go & give a special gift." );
    }else if( inviteMe == true && money < 1000){
        console.log(" I will go without gift.");
    }else{
        console.log("I will delete you from my friend list.");

    }

    const guest = true;
    const isEat = "Tea";

    if( isEat == "Tea" ){
        console.log("");
    }else{
    console.log("বসে বসে স্টার জলসা দেখুন।");
    }


let isLeader = true;
if(isLeader){
    console.log(" Government money is my money.");
}


const isPassed = false;
if( !isPassed ){
    console.log("আজকে খাওয়া দওয়া বন্ধ।");
}


//  const age = 20;
//  if( age >= 18 ){
//     console.log("Vote for the hot.");
//  }else{
//     console.log("You are not eligible to vote.");
//  }
const age = 10;
 age > 18 ? console.log("Eligible"): console.log("Not Eligible");

    let price =  500;
    let isLeader = false;
    if(!isLeader){
        price = 0;
        console.log(price);

    }else{
        price = price + 100;
        console.log(price);
    }

    const price = 3300;
    const cashback = 500;

    price > 3000 ? console.log(cashback): console.log(0);

    const age = 14;
    age > 15 ? console.log("Teenager"):console.log("Child");
    
   const isLoggin = false;
   isLoggin == true ? console.log("Welcome back"):console.log("Please login");

   const isTankFull = false;

   isTankFull == true ? console.log("Ready for a long drive."): console.log("Fill the tank.");
   
  const passed = true;
  passed == true ? console.log(" Party time. "): console.log(" Hard study for Next Semester.");
  
  const sunny = false;
  if(sunny == false){
    console.log("Stay Home.");
  }

  const expensive = false;
  if( expensive == false ){
    console.log("I will buy this item.");
  }
    
   // একটা অ্যারের বিজোড় সংখ্যাগুলোর গড় বের কর।
   function oddAverage(numbers){
        const odds = [];
        for(const number of numbers){
            if( number % 2 === 1 ){
                odds.push(number);
            };
        }
        // console.log(odds);
        let sum = 0;
        for( const number of odds ){
            sum += number;
            // console.log(sum);
        }
        const count = odds.length;
        const avg = sum / count;
        return avg;
   }

   const numbers = [42, 96, 7];
//    const nums = [12, 13, 63, 11, 24, 31];
//    const oddNumberAvg = oddAverage(numbers);
   const avg = oddAverage(numbers);
   console.log('Average of the odd numbers is: ' + avg);
   
  // অ্যারে থেকে ডুপ্লিকেট মান সরিয়ে ক্লিন একটি অ্যারে তৈরি করি।

  const students = ["abul", "babul", "cabul", "abul", "babul", "cabul"];

    function noDuplicate(array){
        const unique = [];
        for( const item of array ){
            if( unique.includes(item) === false){
                unique.push(item);
            }
        }
        return unique;
    }
    const uniqueArray = noDuplicate(students);
    console.log(uniqueArray);


// function এর সাহায্যে কোন সংখ্যাকে দ্বিগুন করা।
    function doubleIt( number ){
        const doubled = number * 20;
        console.log(doubled);
    }

    doubleIt(10);
    doubleIt(100);
    doubleIt(1000);

// function এর সাহায্যে কোন সংখ্যার বর্গ করা।
function square(number){
    const borgo = number * number;
    console.log('Square of ' + number + " is: " + borgo);
}
square(2);
square(8);
square(12);

// function এর সাহায্যে দুইটা প্যারামিটারকে যোগ করা।
function add(num1, num2){
    const sum = num1 + num2;
    console.log(sum);
}
add(60, 40);

// function এর সাহায্যে একাধিক প্যারামিটারকে যোগ করা।
function addAll(a, b, c, d, e){
    const total = a + b + c + d + e;
    console.log(total);
}
addAll(3,4,6,7,1);

// function এর সাহায্যে বিয়োগ করা।
    function difference( num1, num2 ){
        const diff = num1 - num2;
        console.log(diff);
    }

    const fatherAge = 43;
    const daughterAge = 10;
    difference(fatherAge, daughterAge);

function addNumber(a, b){
    console.log(arguments);
    return a + b;
}
const result = addNumber(5, 8, 9, 16);
// console.log(result);


function ageAdd(fatherAge, sonAge){
    const added = fatherAge + sonAge;
    console.log(added);
}

const fatherAge = 40;
const sonAge = 10;
ageAdd(fatherAge, sonAge);


function multiply( x, y){
    const multiplied = x * y;
    console.log(multiplied);
}

multiply(20, 15);

//নম্বর বের করার ফাংশন

function addMarks( Math, English, Bangla){
    const totalMarks = Math + English + Bangla;
    console.log(totalMarks);
}
addMarks(85, 90, 83);

// বয়স বের করার ফাংশন
function ageCalc(currentYear, presentYear){
    const calculated = currentYear - presentYear;
    console.log(calculated);
}
ageCalc(2026, 1990);


// লাউ কেনার ফাংশন।
function buyLau(taka, price){
    const perLau = taka/price;
    console.log(perLau);
}

const perpice = 35;
const taka = 105;
buyLau(taka, perpice);

function average(a, b, c, d){
    const avg = (a + b + c + d) / 4;
    console.log(avg);

}
average(10, 12, 8, 10);

function selling_price(benefit, buyingPrice){
    const soled = benefit + buyingPrice;
    console.log(soled);
}
const benefited = 250;
selling_price(benefited, 3000);


// কোন একটা সংখ্যা জোড় হলে true এবং বিজোড় হলে false
function isEven(num){
    if(num % 2 === 0){
        return true;
    }else{
        return false;
    }
}
console.log(isEven(15873));
console.log(isEven(1256874));

// কোন একটা সংখ্যা জোড় হলে true এবং বিজোড় হলে false
function isOdd(num){
    if(num % 2 === 1){
        return true;
    }
    return false;
}
console.log(isOdd(12));

function isGreater(num){
    if(num > 10){
        return true;
    }else{
        return false;
    }
}
console.log(isGreater(30));

function isGreater1(num){
    if(num % 13 === 0){
        return true;
    }
    return false;
}
console.log(isGreater1(104));

function totalPrice(rice, curry, drinks){
    return rice + curry + drinks;
    
}
console.log(totalPrice(25, 60, 15));

function ageCalculate(age){
    if( age > 18 ){
        // return "Eligible for Voting";
        console.log("Eligible for Voting");
    }else{

        console.log("Not Eligible");
    }
    // return "Not Eligible";
}
// console.log(ageCalculate(3));
ageCalculate(3);

function textLength(text){
    return text.length;
}
console.log(avg("Akib islam"));

function avgerage( num1, num2, num3 ){
    return (num1 + num2 + num3) / 3;
}
console.log(avgerage(20, 50, 20));

function evenSizedString(str){
    const size = str.length;
    if( size % 2 === 0 ){
        console.log("Even Size.");
    }else{
        console.log("Odd Size.");
    }
}
evenSizedString("Dhaka");
*/