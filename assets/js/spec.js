let blog = document.getElementsByClassName("container-inner");
let prime = document.getElementsByClassName("main-title");

// learn javascript timing section
let myVar = setInterval(myTimer, 1000);

function myTimer() {
  "use strict";
  let d = new Date();
  document.getElementById("demo12").innerHTML = d.toLocaleTimeString();
}