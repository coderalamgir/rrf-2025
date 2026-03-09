
/*
    const { x } = require("../1.6 variable/variable");

    
    document.write("Hello JavaScript");
    window.alert("Hello JavaScript");

    alert("Hello JavaScript in 2026");
    console.log("Look at the JavaScript in browser console.");
    document.getElementById("output").innerHTML = " JavaScript is a client side language ";document.write(x);


function changeColor(akib){
    akib.style.color = "red";
    akib.style.fontSize = "40px";
    
}

function restoreColor(akib){
    akib.style.color = "black";
    akib.style.fontSize = "32px";
}

function smallPhoto(s){
    s.style.width = "100px";
    s.style.height = "150px";
}

function normalPhoto(s){
    s.style.width = "150px";
    s.style.height = "200px";
}

function bigFont(Image){
    Image.style.fontSize = "100px";
}

function normalFont(Image){
    Image.style.fontSize = "25px";
}

function displayDate(){
    document.getElementById("demo").innerHTML = Date();
}

*/

  //addEventListener
  let x = document.getElementById("myBtn");
  x.addEventListener("mouseover", myFunction);
  x.addEventListener("click", mySecondFunction);
  x.addEventListener("mouseout", myThirdFunction);

  function myFunction (){
    document.getElementById("demop").innerHTML += "Moused over! <br>";
  }
  function mySecondFunction (){
    document.getElementById("demop").innerHTML += "Clicked! <br>";
  }
  function myThirdFunction (){
    document.getElementById("demop").innerHTML += "Moused out! <br>";
  }