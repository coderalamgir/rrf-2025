
/*
Falsy Values
    1. false
    2. 0
    3. -0
    4. ""
    5. null
    6. undefined
    7. NaN
  Truthy Values
    1. true
    2. (... -2, -1, 1, 2 ... )
    3. 3.1416
    4. "Akib"
    5. {}
    6. []
    7. function(){}


console.log(Boolean([]));
console.log(Boolean({}));
console.log(Boolean("false"));
console.log(Boolean(0));
console.log(Boolean(null));
console.log(Boolean(undefined));
console.log(Boolean(NaN));

const products = [];
console.log(products.length ? "Showing Products" : "NO Products available. ");



const numbers = [45, 4, 9, 55, 96];

function myFunction(value, index, array){
  console.log(value);
  // console.log(index);
  // console.log(array);
  console.log("----------------")
}
numbers.forEach(myFunction);

const numbers = [45, 4, 9, 16, 25];

let txt = "";

numbers.forEach(myFunction);

function myFunction (value, index, array){
  console.log(value );
  console.log("---------------");
}
  */


    /* Falsy values মোট সাতটি।
      1. false
      2. 0
      3. -0
      4. " "  Empty string
      5. null
      6. undefined
      7. NaN
      ************  Truthy values মোট সাতটি।  **************

      1. true
      2. ... -2, -1, 1, 2, ......
      3. 3.146
      4. " Akib " খালি নয় এমন string
      5. { } object
      6. [ ] array
      7. function(){}

      Boolean(); বড় হাতের Boolean() ফাংশনের উপর ভিত্তি করে এগুলোকে যাচাই করা হয়।



      console.log(Boolean(false));
      console.log(Boolean(0));
      console.log(Boolean(-0));
      console.log(Boolean(""));
      console.log(Boolean(undefined));
      console.log(Boolean(null));
      console.log(Boolean(NaN));
      console.log(Boolean(true));
      console.log(Boolean(-2));
      console.log(Boolean(3.55));
      console.log(Boolean("Akib"));
      console.log(Boolean({}));
      console.log(Boolean([]));

      const product = [];
      // console.log(product.length ? "Show product." : "Product Not Available.");
      console.log(product.length);

*/

  let age = "19";
  age = Number(age); // Number() ফাংশন এর কাজ হলো স্ট্রিংকে নাম্বারে রুপান্তর করা।

  if(isNaN(age)){     // age কি নাম্বার না ? অর্থ্যাৎ age যদি নাম্বার না হয়।
    console.log("Input is not a Number.");
  }else{
    // console.log((age < 18) ? "Too young." : "Old Enough.");
    if(age < 18){
      console.log("You are very young.");
    }else{
      console.log("You are eligible for Vote.");
    }
  }