<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles/bootstrap.min.css" />
    <link rel="stylesheet" href="styles/index.css" />
    <link rel="stylesheet" href="styles/home.css" />
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/footer.css">
    <title>O nama</title>
    <style>
      .about-us {
        margin-top: 100px;
      }
    </style>
  </head>
  <body>
  <?php include "./components/header.html"; ?>
    <div class="about-us">
      <section class="about-us-intro">
        <div class="section-container row justify-content-between">
          <div class="col-md-5 col-12">
            <h1 class="section-title text--dark mt-5">
              Njihov osmijeh vrijedi vise!
            </h1>
            <p class="section-text text--gray pt-5">
              Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
              nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam
              erat, sed diam voluptua. At vero eos et accusam et justo duo
              dolores et ea rebum. Stet clita kasd gubergren, no sea takimata
              sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit
              amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
              invidunt ut labore et dolore magna...
            </p>
            <h3 class="section-title text--dark mt-5" style="font-size: 36px;">
              Postani volonter doprinesi sirenju osmijeha
            </h3>
            <button class="button button-blue mt-5">Pridruzi se</button>
          </div>
          <div class="col-md-5 col-12 mt-5">
            <img src="./assets/slika1.jpg" class="img-fluid" alt="" />
          </div>
        </div>
      </section>
      <!--include section-->
      <section class="about-us-contact mt-5">
        <div class="section-container row justify-content-between py-5">
          <div class="col-md-6 col-12">
            <h1 class="section-title text--dark" style="font-size: 58px;">
              Kontaktiraj nas
            </h1>
            <div class="d-flex">
              <div>
                <img src="./assets/line-icon.svg" alt="" />
              </div>
              <p class="section-text text--gray pl-2">
                Ukoliko imaš neko pitanje, sugestiju ili primjedbu<br />
                za nas, slobodno nam se obrati, a mi ćemo u najkraćem<br />
                roku odgovoriti.
              </p>
            </div>
            <form>
              <div class="form-row mt-5">
                <div class="form-group col-md-6">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Ime i prezime"
                  />
                </div>
                <div class="form-group col-md-6">
                  <input
                    type="email"
                    class="form-control"
                    placeholder="Email"
                  />
                </div>
              </div>
              <div class="form-group mt-5">
                <input type="text" class="form-control" placeholder="Poruka" />
              </div>
              <button class="button button-blue mt-5">
                Posalji
              </button>
            </form>
          </div>
          <div
            class="col-md-6 col-12"
            style="background-color: rgba(0, 0, 0, 0.04); position: relative;"
          >
            <h1 class="section-title text--dark pl-3" style="font-size: 58px;">
              Adresa
            </h1>
            <div class="col-md-12 pl-5">
              <span class="section-text text--gray"
                >Ekonomski fakultet, Ul. Jovana Tomaševića br. 37,
                Podgorica</span
              >
              <div class="col-md-12 p-0 map-position">
                <iframe
                  width="100%"
                  height="340"
                  src="https://maps.google.com/maps?width=100%&amp;height=500&amp;hl=en&amp;q=Ekonomski%20fakultet%2C%20Ul.%20Jovana%20Toma%C5%A1evi%C4%87a%20br.%2037%2C%20Podgorica+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed"
                  frameborder="0"
                  scrolling="no"
                  marginheight="0"
                  marginwidth="0"
                  ><a href="https://www.maps.ie/draw-radius-circle-map/"
                    >Google Maps Radius</a
                  ></iframe
                >
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </body>
  <?php include "./components/footer.html"; ?>
</html>