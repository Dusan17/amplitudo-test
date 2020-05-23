<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="styles/bootstrap.min.css" />
	<link rel="stylesheet" href="styles/index.css" />
	<link rel="stylesheet" href="styles/doniraj.css" />
	<link rel="stylesheet" href="styles/header.css">
	<link rel="stylesheet" href="styles/footer.css">
	<script defer src="./js/donate.js"></script>
	<title>Doniraj</title>
</head>

<body>
	<?php include "./components/header.html"; ?>
	<div class="doniraj">
		<section class="doniraj-intro">
			<div class="section-container row justify-content-between">
				<div class="col-md-6 col-12">
					<h1 class="section-title text--dark">
						Doniraj osmijeh,<br />
						jer imas priliku!
					</h1>
					<p class="section-text text--gray pt-5">
						Pred tobom je prikazan spisak artikala koje je potrebno nabaviti za mališane iz
						Dječijeg doma “Mladost” u Bijeloj. Sve zainteresovane ustanove i građani kao
						potencijalni donatori mogu da odaberu, rezervišu i dostave nam određene proizvode koje
						će naši dobrovoljni aktivisti brižljivo sortirati i pakovati, kako bi se u sklopu
						jednoobraznih paketa predali štićenicima Doma u okviru manifestacije
						<b>"DAN BEZ TELEFONA I DRUŠTVENIH MREŽA"</b>
						koji je planiran za 29. april 2017.
					</p>
				</div>
				<div class="col-md-6 col-12 pl-5">
					<img src="./assets/medo.jpg" class="img-fluid" alt="" />
				</div>
			</div>
		</section>
		<section class="doniraj-form">
			<div class="section-container row justify-content-center">
				<div class="col-md-8 mx-auto heading-container">
					<h1 class="section-title text--dark pt-5">Sta zelite da donirate?</h1>
					<div class="col-md-8 mx-auto">
						<p class="section-text text--gray">
							Ovdje možeš odabrati kategoriju i pogledati spisak artikala kojima ćemo ove godine
							obradovati štićenike Doma "Mladost" u Bijeloj. Pogledaj - odaberi - DONIRAJ i
							izmamite bar jedan iskren i topao dječiji osmijeh.
						</p>
					</div>
				</div>
			</div>
		</section>
		<div class="d-flex donation-form mt-5 mb-5 justify-content-center">
			<div class="col-2">
				<div onclick="selectCategory('odjeca')" id="odjeca" class="category-item category-item--active d-flex--center mb-3">
					<img src="./assets/shirt.svg" alt="" />
					<p class="text--white font-style py-2">Obuca i odjeca</p>
				</div>
				<div id="pribor" onclick="selectCategory('pribor')" class="category-item d-flex--center mb-3">
					<img src="./assets/school.svg" alt="" />
					<p class="text--white font-style py-2">Skolski pribor i igracke</p>
				</div>
				<div id="higijena" onclick="selectCategory('higijena')" class="category-item d-flex--center">
					<img src="./assets/toothbrush.svg" alt="" />
					<p class="text--white font-style py-2">Higijena</p>
				</div>
			</div>
			<div class="col-4 donation-items"></div>
			<div class="col-2">
				<div class="row">
					<div class="col-12 donation-cart-wrapper pt-1">
						<strong>Odabrano:</strong>
						<div class="donation-cart mt-4 col-md-12"></div>
					</div>
					<div class="col-12 btn-wrapper"></div>

				</div>


			</div>

		</div>
		<div class="steps-form">

		</div>
		<!-- Popup 1 -->
		<div class="d-flex flex-column align-items-center">
			<div class="col-md-6 col-12 form-content">
				<h1 class="section-title text--dark">Donacija: </h1>
			</div>
			<div class="section-text text--gray mt-2 pb-3" style="border-bottom: 1px solid var(--color-gray);">
				Popuni formu ispod i rezervisi donaciju</div>
			<span class="section-text text--gray mt-3">Odaberi pol: </span>
			<div class="mt-3 mb-2">
				<img src="assets/zensko.svg" alt="">
				<img src="assets/musko.svg" alt="">
			</div>
			<div class="d-flex mb-5">
				<div class="section-text text--gray">
					<span>Zensko </span></div>
				<div class="section-text text--gray">
					<span>Musko</span></div>
			</div>
			<div class="col-md-3 col-12">
				<select class="custom-field mb-3">
					<option>Uzrast</option>
					<option>4</option>
					<option>5</option>
				</select>
				<select class="custom-field mb-3">
					<option>Broj</option>
					<option>4</option>
					<option>5</option>
				</select>
				<select class="custom-field mb-3">
					<option>Kolicina</option>
					<option>4</option>
					<option>5</option>
				</select>
				<select class="custom-field mb-3">
					<option>Cijenovni raspon</option>
					<option>4</option>
					<option>5</option>
				</select>
			</div>
			<button class="button button-blue mb-3">Sledeci korak</button>
		</div>
		<!-- Popup 2 -->
		<div class="d-flex flex-column align-items-center">
			<div class="col-md-6 col-12 form-content">
				<h1 class="section-title text--dark">Licne informacije: </h1>
			</div>
			<div class="section-text text--gray mt-2 pb-3" style="border-bottom: 1px solid var(--color-gray);">
				Informacije su nam potrebne kako bi<br>
				uspješno rezervisali rezervaciju</div>
			<span class="section-text text--gray mt-3">Odaberi</span>
				<div class="d-flex">
			<div class="circle mt-3 mb-2 mr-4"></div>
			<div class="circle mt-3 mb-2 ml-4"></div>
			</div>
			<form class="col-md-3 col-12">
				<div class="form-group mt-5">
					<input type="text" class="form-control form-style" placeholder="Ime i prezime">
				</div>
				<div class="form-group">
					<input type="email" class="form-control form-style" placeholder="Email">
				</div>
				<div class="form-group">
					<input type="text" class="form-control form-style" placeholder="Poruka">
				</div>
			</form>
			<button class="button button-blue mb-3">Sledeci korak</button>
		</div>
	</div>



	</div>
	</div>
	<?php include "./components/footer.html"; ?>
</body>

</html>