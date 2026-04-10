
// Nested if else
// একটা if else এর মধ্যে আরো if else থাকলে তাকে Nested if else বলে।


/*
let a = 100, b = 200 , c = 30;

if( a > b ){
  if( a > c ){
    console.log(`${a} is the maximum number.`);
  }else{
    console.log(`${c} is the maximum number.`);
  }
}else{
  if( b > c ){
    console.log(`${b} is the maximum number.`);
  }else{
    console.log(`${c} is the maximum number.`);
  }
}


 const backTime = 6;
 if(backTime < 6){
  console.log("I will feed you special food.");
 }else{
  console.log(" I will beat you. ");
 }

 const logedIn = true;
 if(logedIn == true){
  console.log("Welcome!");    
 }else{
  console.log("Get Lost!");
 }



 const run = 5;

 if( run == 5){
  console.log('I will give to eat chocolate.');
 }else{
  console.log("তোর ভুড়ি মোটা হবে।");
 }


 const marks = 85;
 if( marks >= 80){
  console.log("বাইক কিনে দিবে।");
}else{
  console.log("বাইক পাবি না।");
}


const movieTime = "9pm";
if(movieTime <= "9pm"){
  console.log("আমি মুভি দেখব।");
}else{
  console.log("আমি নাকে তেল দিয়ে ঘুমাব।");

}


  const tempareture = 35;
  if(tempareture >= 30){
    console.log("Switch on the Airconditioner.");
  }else{
    console.log("কম্বল মুড়ি দিয়ে ঘুমাব।");
  }


  const salary = 75000;
  if(salary > 50000){
    console.log("Su--patro.");
  }else{
    console.log("Next 5 years single thako.");
  }
 
  const salary = 63000;
  const isBCS = true;
  if( salary >= 50000 && isBCS == true){
    console.log("আমি রাজি, আমি রাজি.....");
  }


    function timeWast(daily){
      const monthlyTimeWast = daily * 30;
      console.log(monthlyTimeWast);
    }
  
    timeWast(2);
  
  function tenTimes( number ){
    const result = number * 10;
    return result;
  }
  const outPut = tenTimes(50);
  console.log(outPut);

  function add( price1, price2 ){
    return price1 + price2;
    // const added = price1 + price2;
    // return added;
  }

  const bill = add(50, 50);
  console.log(bill);

    const potato = 35;
    const onion = 62;
    const shirt = 500;
    const pant = 1250;
    function add (price1, price2){
      return price1 + price2;
    }
  const bill1 = add(potato, onion);
  const bill2 = add(shirt, pant);
  const final = bill1 + bill2;
    console.log(final);
    */
  function doMath( num1, num2 ){
    const sum = num1 + num2;
    const diff = num1 - num2;
    const multipy = sum * diff;
    const result = multipy / 2;
    return result
  }

  const final = doMath(6, 4);
  console.log(final);
