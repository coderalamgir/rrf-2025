

/*
// ১টা শর্ত হলে।
let num = 6;
if( num > 0 ){
  console.log(`${num} is a positive Number.`);
}

// ২টা শর্ত হলে।
if( num > 0 ){
  console.log(`${num} is a positive Number`);
}else{
  console.log(`${num} is a Negative Number`);
}

// ২টার বেশি শর্ত হলে।
  let Number = -10;
  
if( Number > 0 ){
  console.log(`${Number} is a positive Number.`);
}else if( Number < 0 ){
  console.log(`${Number} is a Negative Number.`);
}else if(Number == 0){
  console.log(`${Number}. It is zero.`);
}else{
  console.log(`${Number} It is not a number.`);
}



  let marks = 60; 

if( marks >= 33 ) {
  console.log( `You are passed.\n` );
}else{
  console.log( `You are failed. \n` );
}


//Ternary Operator
  let marks = 60; 
( marks >= 60 )
 ? console.log(`You are Passed`)
 :console.log(`You are Failed`);






let a = 100, b = 20, c = 30;

let max = (a > b)
? (a > c ? a : c)
: (b > c ? b : c);

console.log("Max number is", max);


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


  console.log("2" < "3");

  let age = 16;
  let text = "You can not drive.";
  if( age < 18 ){
    console.log(text);
  }


  let age = 26;
  let text = "You can drive.";
  if( age >= 18 ){
    console.log(text);
  }


  // নেসটেড ইফ : যদি দেশ হয় usa এবং বয়স হয় ১৬ বছরের উপরে হয় এবং তুমি যদি ছেলে হও তাহলে তুমি গাড়ি চালাতে পার।
  let country = "USA"
  let age = 17;
  let gender = "male";
  if(country == "USA"){
    if(age >= 16){
      if(gender == "male"){
        console.log("You can drive.");
      }
    }
  }



  // Nested if statement কোডকে জটিল করে ফেলে । তাই ভাল সমাধান হলো logical operator ব্যবহার করা।

  // যদি দেশ হয় usa এবং বয়স হয় ১৬ বছরের উপরে হয় এবং তুমি যদি ছেলে হও তাহলে তুমি গাড়ি চালাতে পার।

  let country = "USA";
  let age = 17;
  let gender = "male";
  if( country == "USA" && age >= 16 && gender == "male" ){
    console.log("You can drive.");
  }
    */
  // যদি সময় সন্ধ্যা ৬টা / (১৮)টার কম হয় তাহলে দেখাও "Good day". এবং যদি সন্ধ্যা ৬টা / (১৮)টার বেশি হয় তাহলে দেখাও "Good Evening".

  let hour = 23;
  if( hour < 18 ){
    console.log("Good day.");
  }else if( hour > 18 && hour < 10  ){
    console.log("Good evening.");
  }else{
    console.log("Good night.");
  }