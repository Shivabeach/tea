/**
 * The JS page for herbal needs and other herbal needs
 * make addtolist function then Display costs
 * Not making the connection between the storage and the display
 */
const remove = document.querySelector('.delete');
const herb = document.getElementById("herbal");
let listing = document.querySelector(".listing");
let needs;
let herbs;
let storedData = localStorage.getItem("herbs");
// if (storedData !== null) {
//   herbs = JSON.parse(storedData);
// } else {
//   herbs = [];
// }
function create() {
  let choco = "chocolate";
  if(storedData === null) {
    herbs.push(choco);
    localStorage.setItem('herbs', JSON.stringify(herbs));
  }
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
  herbs.sort();
  herbs.forEach((herbs) => addToList(herbs));
}
//kinda works
function addToList(herbs) {
  const list = document.querySelector('.disp');
  const li = document.createElement('li');
  li.classList.add('under');
  console.log(herbs);
  li.innerHTML = `
    ${herbs} - <span class="dele"><a class="delete" href="#">X</a></span>`;
    list.appendChild(li);
    lister();
}
//getCosts()
function getItems() {
  let herbs;
  if(localStorage.getItem('herbs') === null) {
    herbs = [];
  }else {
    herbs = JSON.parse(localStorage.getItem('herbs'));
  }
  return herbs;
}

function deleteNeed(el) {
  if (el.classList.contains('delete')) {
      el.parentElement.parentElement.remove();
  }
}

function removeNeed(target) {
  const herbs = getItems();
  herbs.forEach((target, index) => {
    if(target === target) {
      herbs.splice(index, 1);
    }
  });
  localStorage.setItem('herbs', JSON.stringify(herbs));
  lister();
}

addEventListener('DOMContentLoaded', () => {
  create();
  display();
  lister();
})
// listens to  form submission then sends the value submitted to storeNeeds
// function
herb.addEventListener("submit", (e) => {
  e.preventDefault();
  needs = document.getElementById('needs').value;
  storeNeeds(needs);
  addToList(needs);
  zero();
})
document.querySelector('.disp').addEventListener('click', (e) => {
  console.log(e.target);
  let target = e.target;
  deleteNeed(target);
  removeNeed(target.parentElement.textContent);
})
