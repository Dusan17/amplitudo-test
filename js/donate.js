let donationItems = [
  { id: 1, name: "Trenerke", category: "odjeca", selected: false },
  { id: 2, name: "Majice", category: "odjeca", selected: false },
  { id: 3, name: "Donji ves", category: "odjeca", selected: false },
  { id: 4, name: "Sveska", category: "pribor", selected: false },
  { id: 5, name: "Olovka", category: "pribor", selected: false },
  { id: 6, name: "Sapun", category: "higijena", selected: false },
  { id: 7, name: "Sampon", category: "higijena", selected: false },
];

let selectedItems = [];
let currentItem = "";
let selectedInformations = [];
let selectedItemsCount = 0;
let currentiItemIndex = 0;
let currentGender = "Musko";
let userInformation = {
  userType: "",
  fullName: "",
  email: "",
  phoneNumber: "",
};
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
    .filter((item) => item.category === selectedCategory)
    .forEach((item) => {
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
    .filter((item) => item.selected)
    .forEach((item) => {
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
  if (buttonWrapper.innerHTML == "") {
    buttonWrapper.innerHTML += `
		<button onclick="showFirstPopup()" id="donate-button" class="button button-blue mt-5">Doniraj </button>`;
  }
}
function removeButton() {
  if (countSelected() == 0) {
    let buttonWrapper = document.querySelector(".btn-wrapper");
    buttonWrapper.innerHTML = "";
  }
}
function buttonHandler() {
  addButton();
  removeButton();
}

function removeItemFromCart(id) {
  let donation = donationItems.find((item) => item.id === id);
  donation.selected = false;
  renderDonationItems();
  renderDonationCart();
}

function selectDonationItem(id) {
  let donation = donationItems.find((item) => item.id === id);
  donation.selected = !donation.selected;
  renderDonationItems();
  renderDonationCart();
}
renderDonationItems();

function showFirstPopup() {
  selectedItems = donationItems.filter((item) => item.selected);
  selectedItemsCount = selectedItems.length;
  document.getElementById("totalSteps").innerHTML = selectedItemsCount + 1;
  currentItem = selectedItems[currentiItemIndex];
  changeStepHeadline(currentItem.name);
  document.getElementById("popup-step-1").style.display = "block";
}

function changeStepHeadline(name) {
  document.getElementById("currentDonationName").innerText = name;
  document.getElementById("currentStep").innerHTML = currentiItemIndex + 1;
}

function selectGender(gender) {
  const activeClass = "select-gender--active";
  currentGender = gender;
  if (gender === "Musko") {
    document.getElementById("femaleGender").classList.remove(activeClass);
    document.getElementById("maleGender").classList.add(activeClass);
  } else {
    document.getElementById("femaleGender").classList.add(activeClass);
    document.getElementById("maleGender").classList.remove(activeClass);
  }
}
function selectUserType(userType) {
  const activeClass = "circle--active";
  userInformation.userType = userType;
  if (userType === "pravnoLice") {
    document.getElementById("pravnoLice").classList.add(activeClass);
    document.getElementById("fizickoLice").classList.remove(activeClass);
  } else {
    document.getElementById("pravnoLice").classList.remove(activeClass);
    document.getElementById("fizickoLice").classList.add(activeClass);
  }
}
selectGender("Zensko");
selectUserType("pravnoLice");

function showReview() {
  userInformation.fullName = document.getElementById("fullName").value;
  userInformation.email = document.getElementById("email").value;
  userInformation.phoneNumber = document.getElementById("phoneNumber").value;
  document.getElementById("review-fullname").innerHTML = userInformation.fullName;
  document.getElementById("review-email").innerHTML = userInformation.email;
  document.getElementById("review-phone").innerHTML = userInformation.phoneNumber;
  renderReviewItems();
  document.getElementById("popup-review").style.display = "none";
  document.getElementById("popup-review").style.display = "block";
}

function renderReviewItems() {
  let reviewWrapper = document.getElementById("review-items");
  for (let item of selectedInformations) {
    reviewWrapper.innerHTML += `
		<div class="review-item mb-3">
			<div onclick="toggleReviewItem('${item.name}')" class="review-item__header d-flex justify-content-between">
          <span>${item.name}</span>
          <img src="./assets/arrow-down.svg" alt="">
			</div>
			<div id="${item.name}" class="review-item__body mx-3" style="display: none"> 
				${Object.entries(item.body)
          .map(([key, value]) => {
            return `
						<div class="review-form-item">
							<div class="review-form-item__label">${key}</div>
					  	<div class="review-form-item__value">${value}</div>
						</div>`;
          })
          .join("")}
			</div>
		<div/>	
		`;
  }
}

function toggleReviewItem(name) {
  let reviewBody = document.getElementById(name);
  reviewBody.style.display = reviewBody.style.display === "block" ? "none" : "block";
}

function openCancelPopup() {
  document.getElementById("cancel-popup").style.display = "block";
}
function successRes() {
  document.getElementById("success-popup").style.display = "block";
}
function successMsg() {
  document.getElementById("prijava-popup").style.display = "block";
}
function cancelFlow() {
  document.getElementById("cancel-popup").style.display = "none";
  document.getElementById("popup-step-1").style.display = "none";
  document.getElementById("popup-personal-info").style.display = "none";
  
  

  //reset state
  donationItems = [
    { id: 1, name: "Trenerke", category: "odjeca", selected: false },
    { id: 2, name: "Majice", category: "odjeca", selected: false },
    { id: 3, name: "Donji ves", category: "odjeca", selected: false },
    { id: 4, name: "Sveska", category: "pribor", selected: false },
    { id: 5, name: "Olovka", category: "pribor", selected: false },
    { id: 6, name: "Sapun", category: "higijena", selected: false },
    { id: 7, name: "Sampon", category: "higijena", selected: false },
  ];
  selectedItems = [];
  currentItem = "";
  selectedInformations = [];
  selectedItemsCount = 0;
  currentiItemIndex = 0;
  currentGender = "Musko";
  userInformation = {
    userType: "",
    fullName: "",
    email: "",
    phoneNumber: "",
  };
  selectedCategory = "odjeca";
  renderDonationItems();
  renderDonationCart();
}

function nextStep() {
  let itemSummary = {
    name: currentItem.name,
    body: {
      uzrast: document.getElementById("selectUzrast").value,
      broj: document.getElementById("selectBroj").value,
      kolicina: document.getElementById("selectKolicina").value,
      raspon: document.getElementById("selectRaspon").value,
      pol: currentGender,
    },
  };

  selectedInformations.push(itemSummary);
  currentiItemIndex++;
  currentItem = selectedItems[currentiItemIndex];
  if (!currentItem) {
    document.getElementById("popup-step-1").style.display = "none";
    document.getElementById("popup-personal-info").style.display = "block";
    return;
  }
  changeStepHeadline(currentItem.name);
}
