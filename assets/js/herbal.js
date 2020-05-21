/**
 * The JS page for herbal needs and other herbal needs
 * make addtolist function then Display costs
 * Not making the connection between the storage and the display
 */
const herb = document.getElementById("herbal");
let herbs;
let storedData = localStorage.getItem("herbs");
if (storedData !== null) {
  herbs = JSON.parse(storedData);
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

  li.innerHTML = `
    ${herbs} `;
    list.appendChild(li);
}
//getCosts()
function getItems() {
  herbs = JSON.parse(localStorage.getItem('herbs'));
  return herbs;
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
