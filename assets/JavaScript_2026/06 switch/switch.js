

//Switch case

/*
let orderStatus = "  shipped  ";  

switch(orderStatus.trim()){
  case"pending":
    console.log("Your order is being processed.");
    break;
  case"confirmed":
    console.log("Your order has been confirmed.");
    break;
  case"canceled":
    console.log("Your order has been canceled.");
    break;
  case"shipped":
    console.log("Your order has been shipped.");
    break;
  case"delivered":
    console.log("Your order has been delivered.");
    break;
  default:
    console.log("Unknown");
}
    */

let marks = parseInt(prompt("Enter your marks."));

switch(true){
  case(marks >= 80 && marks <= 100):
  console.log("Your result A+");
  break;

  case(marks >= 70 && marks <= 79):
  console.log("Your result A");
  break;

  case(marks >= 60 && marks <= 69):
  console.log("Your result A-");
  break;

  case(marks >= 50 && marks <= 59):
  console.log("Your result B");
  break;

  case(marks >= 40 && marks <= 49):
  console.log("Your result C");
  break;

  case(marks >= 33 && marks <= 39):
  console.log("Your result D");
  break;

  case(marks >= 0 && marks <= 32):
  console.log("Your result F");
  break;

  default:
  console.log("Invalid input. Please enter number 0 to 100 than try again.");
    
}