

/* 
  Data Types
    1. Primitive (Immutable - Value পরিবর্তন করা যায় না।)
      1. Number ==> Integer, Floating point
          let price = 50 or 50.6;

      2. String ==> Text
          let name = "Akib":

      3. Boolean ==> true or false
          let isStudent = true;

      4. null ==> Empty Value
          let amount = nul;

      5. Undefined ==> Value not assigned
          let address;

      6. Symbol ==> Unique identifire
          let uniqueId = Symbol("id");

      7. BigInt ==> Very large integer
          let bigNumber = 123458694568745684566446n;
          

    2. Non primitive (Mutable - Value পরিবর্তন করা যায়।)
      1. Object
      2. Array
      3. Function (Object)

 */
    // Object তৈরি।
    let product = {
        name: "Mobile",
        price: 1800
    }


    //array তৈরি।
    let fruits = ["Mango", " Banana", " Lychee", " Orange"];
    //console.log(fruits[1]);
    //document.write(fruits[2]);

    // সম্পূর্ন এ্যারে দেখতে।
    console.log(fruits);
    
    //নতুন এ্যারে আইটেম যোগ করতে।
    fruits[2] = "Jackfruit";
    console.log(fruits);
    
    let text = "ProjuktiPlus";
    text[0] = ["P"];
    console.log(text[0]);

     // primitive datatype এর ভ্যালু পরিবর্তন করা যায় না। 
     // তাই ভ্যালুর উপর ভিত্তি করে তুলনা করা হয়।
    let numOne = 4;
    let numTwo = 4;
    console.log(numOne === numTwo);

    //Non Primitive datatype এর ভ্যালু পরিবর্তন করা যায়।
    //  তাই ভ্যালুর উপর ভিত্তি করে তুলনা করা হয় না।
    //  তুলনা করা হয় রেফারেন্স এর উপর ভিত্তি করে ।
    let userOne = {
        name: "Akib",
        country: "Bangladesh"
    }
     
    let userTwo = {
        name: "Akib",
        country: "Bangladesh"
    }
    console.log(userOne === userTwo);