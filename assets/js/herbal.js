/**
 * The JS page for herbal needs and other herbal needs
 * make addtolist function then Display costs
 * Not making the connection between the storage and the display
 */
const remove = document.querySelector('.delete');
const herb = document.getElementById("herbal");
let herbs;
let storedData = localStorage.getItem("herbs");
if (storedData !== null) {
  herbs = JSON.parse(storedData);
} else {
  herbs = [];
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
function display() {
  const herbs = getItems();
  herbs.forEach((herbs) => addToList(herbs));
  //console.log(herbs);

}
//kinda works
function addToList(herbs) {
  const list = document.querySelector('.disp');
  const li = document.createElement('li');
  li.classList.add('under');

  li.innerHTML = `
    ${herbs}  - <span><a class="delete" href="#">X</a></span>`;
    list.appendChild(li);
}
//getCosts()
function getItems() {
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
  console.log(herbs);
}

addEventListener('DOMContentLoaded', () => {
  display();
})
// listens to  form submission then sends the value submitted to storeNeeds
// function
herb.addEventListener("submit", (e) => {
  e.preventDefault();
  const needs = document.getElementById('needs').value;
  storeNeeds(needs);
  addToList(needs);
})
document.querySelector('.disp').addEventListener('click', (e) => {
  e.target;
  deleteNeed(e.target);
  removeNeed(e.target.parentElement.parentElement.textContent);
})
