/**
 * The JS page for herbal needs and other herbal needs
 */
const herb = document.getElementById("herbal");
let herbs = [];
let storedData = localStorage.getItem("herbs");
if (storedData !== null) {
	herbs = JSON.parse(storedData);
}

function storeNeeds(needs) {

  herbs.push(needs);
  localStorage.setItem('herbs', JSON.stringify(herbs));
  }

function getItems(needs) {
  herbs = JSON.parse(localStorage.getItem('herbs'));
	return herbs;
}
//addEventListener('DOMContentLoaded', () => { init(); })

herb.addEventListener("submit", (e) => {
  e.preventDefault();
  let needs = document.getElementById('needs').value;
  storeNeeds(needs);
})
