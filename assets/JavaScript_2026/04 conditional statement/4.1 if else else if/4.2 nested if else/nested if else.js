
// Nested if else
// একটা if else এর মধ্যে আরো if else থাকলে তাকে Nested if else বলে।

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