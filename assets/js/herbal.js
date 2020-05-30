/**
 * The JS page for herbal needs and other herbal needs
 * make addtolist function then Display costs
 * Not making the connection between the storage and the display
 */
const remove = document.querySelector('.delete');
const herb = document.getElementById("herbal");
let listing = document.querySelector(".listing");

let herbs;
let storedData = localStorage.getItem("herbs");
if (storedData !== null) {
  herbs = JSON.parse(storedData);
} else {
  herbs = [];
}


function zero() {
  document.getElementById('needs').value = "";
}

function herbal() {
  constructor(needs)
    this.needs = needs;
}
// works (addCosts)
function storeNeeds(needs) {
  const herbs = getItems();
  herbs.push(needs);
  localStorage.setItem('herbs', JSON.stringify(herbs));
}
//kinda works
function lister() {
  const herby = getItems();
  listing.innerHTML = "There are " + herby.length + " Items needed";
}
function display() {
  const herbs = getItems();
  herbs.forEach((herbs) => addToList(herbs));
}
//kinda works
function addToList(herbs) {
  const list = document.querySelector('.disp');
  const li = document.createElement('li');
  li.classList.add('under');
  li.innerHTML = `
    ${herbs} - <span><a class="delete" href="#">X</a></span>`;
    list.appendChild(li);
    lister();
}
//getCosts()
function getItems(herbs) {
  herbs = JSON.parse(localStorage.getItem('herbs'));
  return herbs;
}

function deleteNeed(el) {
  if (el.classList.contains('delete')) {
			el.parentElement.parentElement.remove();
	}
}

function removeNeed(e) {
  const del = getItems(herbs);
  del.forEach((needs, index) => {
    if(needs === needs) {
      del.splice(index, 1);
    }
  });
  localStorage.setItem('herbs', JSON.stringify(herbs));
  lister();
}

addEventListener('DOMContentLoaded', () => {
  display();
  lister();
})
// listens to  form submission then sends the value submitted to storeNeeds
// function
herb.addEventListener("submit", (e) => {
  e.preventDefault();
  const needs = document.getElementById('needs').value;
  storeNeeds(needs);
  addToList(needs);
  zero();
})
document.querySelector('.disp').addEventListener('click', (e) => {
  e.target;
  deleteNeed(e.target);
  removeNeed(e.target.parentElement.parentElement.textContent);
})
