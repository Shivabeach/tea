let blog = document.getElementsByClassName('container-inner');
let prime = document.getElementsByClassName('main-title');
let salted = document.getElementById('submited');
let answer = document.getElementById('answer');

// learn javascript timing section
let myVar = setInterval(myTimer, 1000);

function myTimer() {
	'use strict';
	let d = new Date();
	document.getElementById('demo12').innerHTML = d.toLocaleTimeString();
}

salted.addEventListener('click', e => {
	e.preventDefault();
	const heavy = document.getElementById('weight').value;
	const salt = heavy * 0.03;
	answer.innerHTML = Math.round(salt) + ' Grams of Salt';
});
