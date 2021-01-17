<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/bootstrap.min.css" />
    <link rel="stylesheet" href="styles/index.css" />
    <link rel="stylesheet" href="styles/galerija.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <title>Galerija</title>
</head>
<style>
 .galerija-pictures__naslov {
    font-family: var(--font-play-fair);
	font-size: 48px;
    font-weight: bold;
    text-align: center;
}   
</style>
<body>
<?php include "./components/header.html"; ?>
    <div class="galerija">
        <section class="galerija-pictures">
            <div class="section-container row justify-content-between" style="margin-top: 150px;">
                <div data-aos="zoom-in-right" class="col-md-6 col-12">
                    <img src="./assets/Happy-Children.jpg" class="img-fluid" alt="">
                    <h1 class="galerija-pictures__naslov">Za njihov osmijeh 2018</h1>
                    <p class="section-text text--gray" style="text-align: center;">12.05.2018.</p>
                </div>
                <div data-aos="zoom-in-left" class="col-md-6 col-12">
                    <img src="./assets/Happy-smiley.jpg" class="img-fluid" alt="">
                    <h1 class="galerija-pictures__naslov">Za njihov osmijeh 2017</h1>
                    <p class="section-text text--gray" style="text-align: center;">12.05.2017.</p>
                </div>

        </div>
        </section>  
    </div>
    <?php include "./components/footer.html"; ?>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    AOS.init();
  </script>
</body>
</html>