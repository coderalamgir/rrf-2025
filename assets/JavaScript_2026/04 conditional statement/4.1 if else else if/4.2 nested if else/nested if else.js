
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

  function doMath( num1, num2 ){
    const sum = num1 + num2;
    const diff = num1 - num2;
    const multipy = sum * diff;
    const result = multipy / 2;
    return result
  }

  const final = doMath(6, 4);
  console.log(final);

  // একটা স্ট্রিং জোড় না বিজোড়। তা ফাংশন এর মাধ্যমে দেখাও।
  // step # 1 ফাংশন ঠিকমত কাজ করছে কি না।
  function evenSizedString(str){
    console.log(str);
  }
  evenSizedString("Dhaka");

  // step # 2 string length বের করব।
    function evenSizedString(str){
      const size = str.length;
    console.log(str, size);
  }
  evenSizedString("Dhaka");

  // step # 3 এখন চেকিং দিব string length জোড় কি না।
  function evenSizedString(str){
    const size = str.length;
    if( size % 2 === 0 ){
      console.log("Even size");
    }else{
      console.log("Odd size");
    }
  }
  evenSizedString("Akib");

   // step # 3 এখন চেকিং দিব string length জোড় কি না।
  function evenSizedString(str){
    const size = str.length;
    if( size % 2 === 0 ){
      return true;
    }else{
      return false;
    }
  }
  console.log(evenSizedString("Dhaka"));

   //প্রশ্ন: দুইটা প্যারামিটার নিব। একটা সংখ্যা দ্বিতীয়টি বুলিয়ান। শর্ত দ্বিতীয়টি true হলে ২ দিয়ে গুন হবে। আর false হলে তিন দিয়ে গুন হবে।
   function doubleOrTriple( num, doDouble ){
      if( doDouble === true ){
        const result = num * 2;
        return result;
      }else{
        const result = num * 3;
        return result;
      } 
   }
   console.log(doubleOrTriple(5, true));
   console.log(doubleOrTriple(5, false));

  // একটা এ্যারের মধ্যে কতগুলো আইটেম আছে তা বের কর।
  function numberOfElement(nums){
    const len = nums.length;
    return len;
  }
  const length = numberOfElement([12, 45, 78, 45, 121254, 4,5]);
  console.log(length);
   
    function numberOfElement(nums){
    const len = nums.length;
    if( len % 2 === 0 ){
      return "Even";
    }else{
      return "Odd";
    }
    
  }
  const length = numberOfElement([12, 45, 78, 45, 121254, 4, 5, 3]);
  console.log(length);


// একটা ফাংশন বানাতে হবে। যেখানে একটা নাম দিলে তার প্রথম অক্ষর দেখাবে।
  function firstLetter(letter){
    const name = letter.charAt(0);
    return name;
  }
  const named = firstLetter("Akib")
  console.log(named);

// 3 একটা ফাংশন বানাতে হবে। যেখানে একটা সংখ্যা দিব। সংখ্যাটি ১০ থেকে বড় হলে, ১০ দিয়ে ভাগ করব। আর ১০ এর ছোট হলে, ১০ দিয়ে গুন করবে। তারপর রেজাল্ট রিটার্ন করবে।
function divededOrMultiply(num){
  if( num > 10 ){
    const divided = num / 10;
    return divided;
  }else{
    const multipy = num * 10;
    return multipy;
  }
}
const result = divededOrMultiply(5)
console.log(result);
git 
//একটা ফাংশন লি
 */

