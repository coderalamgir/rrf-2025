// একটা array এর সমস্ত ইলেমেন্টের যোগফল আউটপুটে দেখাতে হবে।
/*
function sumOfNumbers(numbers){
    let sum = 0;
    for( const number of numbers ){
        sum = sum + number;
    }
    return sum;
}


const nums = [54, 62, 12, 6];
const result = sumOfNumbers(nums);
console.log( "Sum of numbers is: " + result);


// একটা array এর শুধুমাত্র জোড় ইলেমেন্টের যোগফল আউটপুটে দেখাতে হবে।
function onlyOdd(numbers){
    let sum = 0;
    for( const number of numbers ){
        if( number % 2 === 1 ){
            sum = sum + number;
        }
    }
    return sum;
}

const nums = [54, 13, 1, 6];
const total = onlyOdd(nums);
console.log("শুধুমাত্র বিজোড় সংখ্যাগুলোর যোগফল " + total);


// arrow function এর সাহায্যে শুধুমাত্র বিজোর সংখ্যার যোগফল বের কর।
const addEven = (numbers) => {
    let sum = 0;
    for( const number of numbers ){
        if(number % 2 === 1){
            sum = sum + number;
        }
    }
    return sum;
}

const nums = [5, 15, 8, 7, 2];
const result = addEven(nums);
console.log( result);



const addEven = (numbers) => {
    let sum = 0;
    for( const number of numbers ){
        if(number % 4 === 0){
            sum = sum + number;
        }
    }
    return sum;
}

const nums = [2, 4, 5, 7, 8, 32, 45,];
const result = addEven(nums);
console.log( result);


function multiplyOrDivided(value){
    if(value < 20){
        const result = value * 2;
        console.log(result);
    }else{
        const result = value / 20;
        console.log(result);
    }
}

multiplyOrDivided(1000);



const addEven = (numbers) => {
    let sum = 0;
    for( const number of numbers ){
        if(number % 3 === 0){
            sum = sum + number;
        }
    }
    return sum;
}

const nums = [2, 4, 5, 7, 8, 32, 45,];
const result = addEven(nums);
console.log( result);


//inch কে ফুটে রুপান্তর।
function inchToFeet(inch){
    const feet = inch / 12;
    return feet;
}

const akibHight = inchToFeet(75);
console.log(akibHight);



function inchToFeet(inch){
    const feetFraction = inch / 12;
    const feetNumber = parseInt(feetFraction);
    const inchRemaining = inch % 12;
    const result = feetNumber + ' ft ' + inchRemaining + " inch. ";
    return result;

}
const akibHight = inchToFeet(63);
console.log(akibHight);

function mileToKilometer(mile){
    const kilo = mile * 1.60934;
    return kilo;

}
const kilo = mileToKilometer(2);
console.log(kilo);

function isLeapYear(year){
    if(year % 4 === 0){
        return true;
    }else{
        return false;
    }
}
const leapYear1 = isLeapYear(2043);
const leapYear2 = isLeapYear(2052);
console.log(leapYear1);
console.log(leapYear2);

function isLeapYear( year ){
    if(year % 400 === 0){
        return true;
    }else if( year % 400 !== 0 && year % 100 === 0 ){
        return false;
    }
}
const leapYear1 = isLeapYear(200);
console.log(leapYear1);

// একটা অ্যারের বিজোড় সংখ্যাগুলোর গড় বের কর।
function oddAvarage(numbers){
    const odds = [];
    for(const number of numbers){
        if( number % 2 === 1 ){
            odds.push(number);
        }
    }
    let sum = 0;
    for( const number of odds ){
        sum = sum + number;
    }
    const count = odds.length;
    const avg = sum / count;
    return avg;
    
}

const nums = [4];
const result = oddAvarage(nums);
console.log(result);
*/