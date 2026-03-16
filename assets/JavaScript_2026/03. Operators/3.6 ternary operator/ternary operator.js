


// Ternary operator হলো একটি সংক্ষিপ্ত এবং সহজ উপায় যেটি দুটি মানের মধ্যে একটি বেছে নিতে ব্যবহৃত হয়। এটি িএকটি শত নির্ভর অপারেটর যা শত সত্য হলে একটি মান প্রদান করে এবং মিথ্যা হলে অন্য একটি মান প্রদান করে। এই অপারেটর তিনটি অংশে বিভক্ত। 

// সিনট্যাক্স $variable = (condition) ? true : false ;

$score = 55;

$result = ($score > 50) ? "Pass" : "Fail";
console.log($result);

// age
$age = 37;
$age_group = ($age >= 18) ? "Adult" : "Minor" ;
console.log($age_group);

// is logged in
$is_logged_in = "true"
$message = ($is_logged_in) ? "welcome, User!" : "Please log in."
console.log($message);

//discount
$promo_code = "DISCOUNT10";
$discount = ($promo_code == "DISCOUNT10") ? 0.10 : 0.00 ;
$total_price = 400000;
$final_price = $total_price - ($total_price * $discount);
console.log("Total price with discount: " + $final_price + "TK.");
