
// JavaScript String formating, concatenation & template literals.

let userName = "Akib Islam";
let userCity = "Kustia";
let userCountry = "Bangladesh";
let appName = "ProjuktiPlus";
let course = "JavaScript Basic";
let orderId = 2451;
let amount = 1400;

// Concatenation
console.log("Welcome to " + appName + ".");
console.log("welcome to " + appName + ", " + userName + ".");


// Template literals
console.log(`welcome to ${userName}, ${appName}.`);
console.log(`Your selected course Id is: #${orderId}.`);
console.log(`Order #${orderId} has been placed.`);
console.log(`Total amount to pay $${amount}.`);


//User details
console.log("Order Details:\n ---------------");
console.log(" Customer Name:\t" + userName + ".");
console.log(" Location:\t" + userCity + ", " + userCountry + ".");
console.log("Product Name: \"JavaScript guide book\" ");
console.log("Author's Name.");

// Template literal ( ` ` )
let invoice = `Invoice Summery
------------------
customer: ${userName}
city: ${userCity}
orderId: ${orderId}
Amount: $${amount}
Course: ${course}`;

console.log(invoice);

console.log(10 === 10);
console.log(10 === "10");
console.log(120 === "tomato");
console.log(120 != "tomato");
console.log(10 != 10);
console.log(10 != "10");
console.log(10 !== "10");
console.log(50 == "50");
console.log(50 === "50");
console.log("JavaScript" == 'JavaScript');
console.log("JavaScript" === 'JavaScript');