<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="styles/bootstrap.min.css" />
  <link rel="stylesheet" href="styles/index.css" />
  <link rel="stylesheet" href="styles/doniraj.css" />
  <link rel="stylesheet" href="styles/header.css">
  <link rel="stylesheet" href="styles/footer.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  <script defer src="./js/donate.js"></script>
  <title>Doniraj</title>
</head>

<body>
  <?php include "./components/header.html"; ?>
  <div class="doniraj">
    <section class="doniraj-intro">
      <div class="section-container row justify-content-between">
        <div data-aos="flip-up" class="col-md-6 col-12">
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
        <div data-aos="zoom-in" class="col-md-6 col-12 pl-5">
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
    <div id="popup-step-1" class="popup-step" style="display: none;">
      <div class="close-step" onclick="openCancelPopup()">
        <img src="./assets/close.svg" alt="">
      </div>
      <div class="d-flex flex-column align-items-center">
        <div class="col-md-6 col-12 form-content">
          <h1 class="section-title text--dark">Donacija: <span id="currentDonationName"></span> </h1>
        </div>
        <div class="section-text text--gray mt-2 pb-3" style="border-bottom: 1px solid var(--color-gray);">
          Popuni formu ispod i rezervisi donaciju</div>
        <span class="section-text text--gray mt-3">Odaberi pol: </span>
        <div class="mt-3 mb-2 d-flex">
          <div id="femaleGender" onclick="selectGender('Zensko')" class="select-gender">
            <img src="assets/zensko.svg" alt="">
            <span>Zensko</span>
          </div>
          <div id="maleGender" onclick="selectGender('Musko')" class="select-gender">
            <img src="assets/musko.svg" alt="">
            <span>Musko</span>
          </div>
        </div>
        <div class="col-md-3 col-12">
          <select id="selectUzrast" class="custom-field mb-3">
            <option>Uzrast</option>
            <option>5</option>
            <option>7</option>
            <option>10</option>
            <option>12</option>
          </select>
          <select id="selectBroj" class="custom-field mb-3">
            <option>Broj</option>
            <option>M</option>
            <option>L</option>
            <option>XL</option>
          </select>
          <select id="selectKolicina" class="custom-field mb-3">
            <option>Kolicina</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
          </select>
          <select id="selectRaspon" class="custom-field mb-3">
            <option>Cijenovni raspon</option>
            <option>10-20</option>
            <option>20-40</option>
          </select>
        </div>
        <button class="button button-blue mb-3" onclick="nextStep()">Sledeci korak</button>
        <div class="step-progress mb-5">
          <span id="currentStep">1</span> of <span id="totalSteps"></span>
        </div>
      </div>
    </div>

    <div id="popup-personal-info" class="popup-step" style="display: none">
      <div class="close-step" onclick="openCancelPopup()">
        <img src="./assets/close.svg" alt="">
      </div>
      <div class="d-flex flex-column align-items-center">
        <div class="col-md-6 col-12 form-content">
          <h1 class="section-title text--dark">Licne informacije: </h1>
        </div>
        <div class="section-text text--gray mt-2 pb-3" style="border-bottom: 1px solid var(--color-gray);">
          Informacije su nam potrebne kako bi<br>
          uspješno rezervisali rezervaciju</div>
        <span class="section-text text--gray mt-3">Odaberi</span>
        <div class="d-flex">
          <div id="pravnoLice" onclick="selectUserType('pravnoLice')" class="circle mt-3 mb-2 mr-4">Pravno lice</div>
          <div id="fizickoLice" onclick="selectUserType('fizickoLice')" class="circle mt-3 mb-2 ml-4">Fizicko lice</div>
        </div>
        <form class="col-md-3 col-12">
          <div class="form-group mt-5 mb-4">
            <input id="fullName" type="text" class="form-control form-style" placeholder="Ime i prezime">
          </div>
          <div class="form-group mb-4">
            <input id="email" type="email" class="form-control form-style" placeholder="Email">
          </div>
          <div class="form-group mb-4">
            <input id="phoneNumber" type="text" class="form-control form-style" placeholder="Poruka">
          </div>
        </form>
        <button onclick="showReview()" class="button button-blue mt-5">Sledeci korak</button>
      </div>
    </div>
    <div id="popup-review" class="popup-step" style="display:none">
    <div class="close-step" onclick="openCancelPopup()">
        <img src="./assets/close.svg" alt="">
      </div>
      <div class="d-flex flex-column align-items-center">
        <div class="col-md-6 col-12 form-content">
          <h1 class="section-title text--dark">Pregled rezervacije</h1>
        </div>
        <div class="col-md-4 col-lg-3 col-12 mt-5">
          <div class="review-group-title">
            Informacije o donoru:
          </div>
          <div class="review-form-item">
            <div class="review-form-item__label">Ime i prezime donatora</div>
            <div id="review-fullname" class="review-form-item__value"></div>
          </div>
          <div class="review-form-item">
            <div class="review-form-item__label">Email</div>
            <div id="review-email" class="review-form-item__value"></div>
          </div>
          <div class="review-form-item">
            <div class="review-form-item__label">Broj telefona</div>
            <div id="review-phone" class="review-form-item__value"></div>
          </div>
          <div class="review-group-title">
            Informacije o artiklima:
          </div>
          <div id="review-items" class="review-items">
          </div>
          <span class="section-text" style="color:#ffb550">* Donacija može biti rezervisana 5 dana od datuma rezervisanja, nakon čega prelazi u kategoriju slobodnih proizvoda.</span>
        </div>
        <button onclick="successRes()" class="button button-blue mt-5 mb-3">Rezervisi donaciju</button>
      </div>
    </div>
    <div id="cancel-popup" class="popup-step" style="display: none">
      <div class="d-flex flex-column justify-content-center align-items-center h-100">
        <div class="section-title col-md-6 text-center">
          Da li zelis da prekines proces doniranja?
        </div>
        <div class="d-flex">
          <div onclick="cancelFlow()" class="button button-blue mr-5">
            DA
          </div>
          <div onclick="document.getElementById('cancel-popup').style.display = 'none'" class="button button-transparent">
            NE
          </div>
        </div>
      </div>
    </div>
    <div id="success-popup" class="popup-step" style="display:none">
    <div class="close-step">
      <a href="doniraj.php">
        <img src="./assets/close.svg"alt=""></a>
      </div>
      <div class="d-flex justify-content-center flex-column align-items-center" style="margin-top:100px">
        <div class="section-title col-md-6 text-center">
          Uspjesna rezervacija!
        </div>
        <div class="col-md-6" style="margin-top: 150px;">
          <img src="./assets/zahvalnica.jpg" class="img-fluid" alt="">
        </div>
      </div>
    </div>
    </div>
  </div>
  </div>
  <?php include "./components/footer.html"; ?>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>