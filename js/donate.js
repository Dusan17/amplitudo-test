let donationItems = [
	{ id: 1, name: "Trenerke", category: "odjeca", selected: false },
	{ id: 2, name: "Majice", category: "odjeca", selected: false },
	{ id: 3, name: "Donji ves", category: "odjeca", selected: false },
	{ id: 4, name: "Sveska", category: "pribor", selected: false },
	{ id: 5, name: "Olovka", category: "pribor", selected: false },
	{ id: 6, name: "Sapun", category: "higijena", selected: false },
	{ id: 7, name: "Sampon", category: "higijena", selected: false },
];

let selectedCategory = "odjeca";

function countSelected() {
	 return donationItems.filter(item => item.selected).length;
}

function selectCategory(category) {
	if (category === selectedCategory) {
		return;
	}
	document.getElementById(selectedCategory).classList.remove("category-item--active");
	selectedCategory = category;
	renderDonationItems();
	document.getElementById(category).classList += " category-item--active";
}

function renderDonationItems() {
	let donationsWrapper = document.querySelector(".donation-items");
	donationsWrapper.innerHTML = "";

	donationItems
		.filter(item => item.category === selectedCategory)
		.forEach(item => {
			donationsWrapper.innerHTML += `
        <div 
          onclick="selectDonationItem(${item.id})"
          class="donation-item mb-3 ${item.selected ? "donation-item--active" : ""}"> 
		  ${item.name}
		  <img src="./assets/checkmark.svg"/>
        </div>`;
		});
}

function renderDonationCart() {
	let donationCartWrapper = document.querySelector(".donation-cart");
	donationCartWrapper.innerHTML = "";

	donationItems
		.filter(item => item.selected)
		.forEach(item => {
			donationCartWrapper.innerHTML += `
        <div class="donation-cart-item mb-1" onclick="removeItemFromCart(${item.id})"> 
          ${item.name}
          <img src="./assets/close.svg"/>
        </div>`;
		});
		buttonHandler();
}
function addButton() {
	let buttonWrapper = document.querySelector(".btn-wrapper");
	if(buttonWrapper.innerHTML == ""){ 
		buttonWrapper.innerHTML += `
		<button class="button button-blue mt-5" onclick="showForm()">Doniraj </button>`;
	}
}
function removeButton() {
	if(countSelected() == 0) {
		let buttonWrapper = document.querySelector(".btn-wrapper");
		buttonWrapper.innerHTML = "";
	}
}
function buttonHandler() {
	addButton();
	removeButton();
}

function removeItemFromCart(id) {
	let donation = donationItems.find(item => item.id === id);
	donation.selected = false;
	renderDonationItems();
	renderDonationCart();
}

function selectDonationItem(id) {
	let donation = donationItems.find(item => item.id === id);
	donation.selected = !donation.selected;
	renderDonationItems();
	renderDonationCart();
}
function showForm() {
	
}
renderDonationItems();
