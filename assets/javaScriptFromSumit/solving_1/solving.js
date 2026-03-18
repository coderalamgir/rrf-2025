/*

// problem solving One
// লুডু খেলায় ১-৬ পর্যন্ত সংখ্যাগুলো randomly কিভাবে করা যায় ?
  function getRandomNumbers (min, max){
    return Math.floor(Math.random() * (max - min + 1) + min);
  }
  console.log(getRandomNumbers(1, 6));

  //কিভাবে শ্রেণী কক্ষের সকলের নাম alphabetically সাজাতে পারি ?
  const studentsName = ["Popy", "Akib", "Sadika", "Alamgir", "Abbas"];
  console.log(studentsName.sort());

  //কিভাবে শ্রেণী কক্ষের সকলের নাম রোল নাম্বার ক্রমানুসারে সাজাতে পারি ?
  const rollNumbers = [7, 9, 3, 6, 8, 1, 2, 5, 4];
  console.log(rollNumbers.sort(function(a, b){
    return a - b;
  }));

  // কোন সাল লিপ ইয়ার কি না তা বের করতে পারি কিভাবে ?

  function isLeapYear(year){
    if(( year % 400 === 0 ) || ((year % 4 === 0) && (year % 100 !== 0))) {
      console.log(`${year} is a leap year.`);
    }else{
      console.log(`${year} is not a leap year.`);
    }
  }

  isLeapYear(2033);

  // কোন sentence এ কতগুলো vowel আছে তা কিভাবে বের করা যায় ?

    const vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];

    function countVowels(sentence){
      let count = 0;
      const letters = Array.from(sentence);
      letters.forEach(function(value){
        if(vowels.includes(value)){
          count ++;
        }
      });
      return count;
    }

    console.log(countVowels("I love Bangladesh. Bangladesh is my home country."));
    */





    // Extra practice
    console.log("Sadika is sitting on the chair.");
    
    function sleep(name, toy){
      console.log(`${name} is playing to take his ${toy}`);
    }
    sleep("Akib", "bicycle"); 
    sleep("Sadik", "Arts"); 
    sleep("Popy", "Mobile"); 
    sleep("Alamgir", "computer"); 

