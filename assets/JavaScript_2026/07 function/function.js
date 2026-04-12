// একটা array এর সমস্ত ইলেমেন্টের যোগফল আউটপুটে দেখাতে হবে।
/*
function sumOfNumbers(numbers){
    let sum = 0;
    for( const number of numbers ){
        sum = sum + number;
    }
    return sum;
}


const nums = [54, 62, 12, 6];
const result = sumOfNumbers(nums);
console.log( "Sum of numbers is: " + result);

*/
// একটা array এর শুধুমাত্র জোড় ইলেমেন্টের যোগফল আউটপুটে দেখাতে হবে।
function onlyOdd(numbers){
    let sum = 0;
    for( const number of numbers ){
        if( number % 2 === 0 ){
            sum = sum + number;
        }
    }
    return sum;
}

const nums = [54, 13, 1, 6];
const total = onlyOdd(nums);
console.log("শুধুমাত্র বিজোড় সংখ্যাগুলোর যোগফল " + total);
