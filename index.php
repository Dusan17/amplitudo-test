<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<script src="js/jquery-3.5.1.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="styles/bootstrap.min.css" />
		<link rel="stylesheet" href="styles/index.css" />
		<link rel="stylesheet" href="styles/home.css" />
		<link rel="stylesheet" href="styles/header.css">
		<link rel="stylesheet" href="styles/footer.css">
		<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
		<link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
		
		
		<title>Moj osmijeh</title>
	</head>
	<body>
		<?php include "./components/header_index.html"; ?>
		<div class="home">
			<section class="home-intro">
				<div class="section-container">
					<div class="col-md-5">
						<h1 class="section-title">Za njihov osmijeh!</h1>
						<p class="mt-5 section-text text--white">
							Postoji jedan životni fakultet koji studiraju oni koji imaju volju da izmame što više
							iskrenih osmijeha djeci koja žive bez roditelja. On proizvodi najbolje kadrove iz ove
							oblasti u našoj zemlji već duže od decenije i ne planira da se zaustavi. Upisuje sve
							kandidate dobre volje, pa nemojte brinuti da li za vas ima mjesta. Ukoliko želite,
							samo zakoračite unutra. Lako ćete ga pronaći, na njemu je velikim slovima ispisan
							grafit <b>NJIHOV OSMIJEH VRIJEDI VIŠE!</b> Ispitni rok je, za omladinu iz svih gradova
							Crne Gore, svake godine u aprilu!
						</p>
						<h3 class="mt-4">Mi smo spremni, a vi?</h3>
						<button class="button button-white mt-3">
							Doniraj
						</button>
					</div>
				</div>
			</section>
			<section class="home-info mb-5">
				<div class="home-info__container py-3 row">
					<div class="col-md-6 col-12 flex-mobile-column d-flex--center mb-4">
						<div class="home-info__number pr-3">
							296
						</div>
						<div class="home-info__text left-line pl-3">Broj <br />doniranih <br />artikala</div>
					</div>
					<div class="col-md-6 col-12 flex-mobile-column d-flex--center">
						<div class="home-info__number home-info__circle d-flex--center pr-3">
							75
						</div>
						<div class="home-info__text pl-3">Broj <br />ostvarenih <br />osmjeha</div>
					</div>
				</div>
			</section>
			<section class="home-about">
				<div class="section-container row justify-content-between">
					<div data-aos="fade-right" class="col-md-5 col-12">
						<h1 class="section-title text--dark mb-5">Ko smo mi?</h1>
						<div class="d-flex">
							<div>
								<img src="./assets/line-icon.svg" alt="" />
							</div>
							<p class="section-text home-about__text text--gray pl-2">
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
								Ipsum has been the industry's standard dummy text ever since the 1500s, when an
								unknown printer took a galley of type and scrambled it to make a type specimen
								book.<br />
								<br />
								It has survived not only five centuries, but also the leap into electronic
								typesetting, remaining essentially unchanged. It was popularised in the 1960s with
								the release of Letraset sheets containing Lorem Ipsum passages, and more recently
								with desktop publishing software like Aldus PageMaker including versions of Lorem
								Ipsum.
							</p>
						</div>
					</div>
					<div data-aos="fade-left" class="col-md-5 col-12 home-about__image">
						<!-- <div class="home-about__circle"></div> -->
						<img src="./assets/slika1.jpg" class="img-fluid" />
					</div>
				</div>
			</section>
			<section class="home-news">
			<div class="section-container row justify-content-between">
				<h1 class="section-title text--dark mb-5">Vijesti</h1>
				<div class="news-content">
					<div class="swiper-container">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<img src="./assets/children.jpg" alt="">
								<div class="news-description">
									<h3>Lorem ipsum dolor amet, consectetur adipiscing</h3>
									<p class="section-text">
										Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it.
									</p>
								</div>
							</div>
							<div class="swiper-slide">
								<img src="./assets/smajli.jpg" alt="">
								<div class="news-description">
									<h3>Lorem ipsum dolor amet, consectetur adipiscing</h3>
									<p class="section-text">
										Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it.
									</p>
								</div>
							</div>
							<div class="swiper-slide">
								<img src="./assets/children.jpg" alt="">
								<div class="news-description">
									<h3>Lorem ipsum dolor amet, consectetur adipiscing</h3>
									<p class="section-text">
										Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it.
									</p>
								</div>
							</div>
							<div class="swiper-slide">
								<img src="./assets/smajli.jpg" alt="">
								<div class="news-description">
									<h3>Lorem ipsum dolor amet, consectetur adipiscing</h3>
									<p class="section-text">
										Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it.
									</p>
								</div>
						</div>
					<!-- Add Pagination -->
						<!-- <div class="swiper-pagination"></div> -->
				</div>
				</div>
			</section>
			<section class="home-contact">
				<div class="section-container row justify-content-between py-5">
					<div class="col-md-6 col-12">
						<h1 class="section-title text--dark" style="font-size:58px;">Kontaktiraj nas</h1>
						<div class="d-flex">
							<div>
								<img src="./assets/line-icon.svg" alt=""/>
							</div>
							<p class="section-text  text--gray pl-2">
								Ukoliko imaš neko pitanje, sugestiju ili primjedbu<br>
								za nas, slobodno nam se obrati, a mi ćemo u najkraćem<br> 
								roku odgovoriti.
							</p>
						</div>
						<form>
							<div class="form-row mt-5">
							  <div class="form-group col-md-6">
								<input type="text" class="form-control form-style"  placeholder="Ime i prezime">
							  </div>
							  <div class="form-group col-md-6">
								<input type="email" class="form-control form-style"  placeholder="Email">
							  </div>
							</div>
							<div class="form-group mt-5">
							  <input type="text" class="form-control form-style"  placeholder="Poruka">
							</div>
							<button class="button button-blue mt-5">
								Posalji
							</button>
							</form>
					</div>	
					<div class="col-md-6 col-12" style="background-color:  rgba(0, 0, 0, 0.04); position: relative;">
						<h1 class="section-title text--dark pl-3" style="font-size: 58px;">Adresa</h1>
						<div class="col-md-12 pl-5" style="position: relative;">
							<span class="section-text text--gray">Ekonomski fakultet, Ul. Jovana Tomaševića br. 37, Podgorica</span>
							<div class="col-md-12 p-0 map-position">
							<iframe width="100%" height="340" src="https://maps.google.com/maps?width=100%&amp;height=500&amp;hl=en&amp;q=Ekonomski%20fakultet%2C%20Ul.%20Jovana%20Toma%C5%A1evi%C4%87a%20br.%2037%2C%20Podgorica+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/draw-radius-circle-map/">Google Maps Radius</a></iframe>	
							</div>
						</div>
					</div>	
				</div>
			</section>
		</div>
		<?php include "./components/footer.html"; ?>
		<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
		<script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
  <script>
    AOS.init();
  </script>
	<script>
		$(document).ready(function () {
  //initialize swiper when document ready
		var swiper = new Swiper('.swiper-container', {
      slidesPerView: 1,
      spaceBetween: 30,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
			},
			breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 40,
        },
        1024: {
          slidesPerView: 2,
          spaceBetween: 50,
        },
      }
		});
	});
		$(window).on("scroll", function() {
    if($(window).scrollTop() > 50) {
        $("#header-index").addClass("header-active");
        $("#nav-img").addClass("logo-img-active");
    } else {
        //remove the background property so it comes transparent again (defined in your css)
       $("#header-index").removeClass("header-active");
       $("#nav-img").removeClass("logo-img-active");
    }
	});
	</script>
	</body>

</html>
