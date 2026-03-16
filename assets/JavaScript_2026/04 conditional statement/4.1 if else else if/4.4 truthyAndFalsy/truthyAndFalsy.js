
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
*/
const numbers = [45, 4, 9, 16, 25];

let txt = "";

numbers.forEach(myFunction);

function myFunction (value, index, array){
  console.log(value );
  console.log("---------------");
}