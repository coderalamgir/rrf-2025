
//Changing Data Type

/*
  1. String to Number (Interger / float)
      parseInt()
      parstFloat()
      Number()
      +variable

  2. Number to String
      string()
      toString

  3. Float to Integer
      parseInt()

  4. Integer to Float
      parseFloat()
  
*/

  var numStr = "10";
  console.log(parseInt(numStr));
  console.log(Number(numStr));
  console.log(+numStr);


  var numStr = "10.20";
  console.log(parseFloat(numStr));
  console.log(Number(numStr));
  console.log(+numStr);


  var num = 10;
  var stt = String(num);
  console.log(stt);
  console.log(typeof(stt));


  var priceOne = "30.40";
  var priceTwo = "40.20";
  var totalPrice = parseFloat(priceOne) + parseFloat(priceTwo);
  console.log(totalPrice);