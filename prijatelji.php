<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/prijatelji.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>Prijatelji</title>
</head>
<body>
<?php include "./components/header.html";?>
    <div class="friends">
        <section class="friends-info">
            <div class="section-container row justify-content-between">
                <div data-aos="flip-right" class="col-md-5 col-12">
                    <h1 class="section-title text--dark mt-5">Prijatelji projekta "Za njihov osmijeh"</h1>
                <p class="section-text text--gray py-4">
                    Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna...
                </p>
                </div>
                <div data-aos="flip-down" class="col-md-5 col-12 mt-5 mr-5">
                    <img src="./assets/happy-face.svg" alt="" class="img-fluid">
                </div>
            </div>
        </section>
        <section class="container-fluid mt-5" style="background: #f5f5f5; margin-bottom:50px">
            <div class="section-container wrapper py-3">
              <div class="logo-wrapper">
                <img src="./assets/ef.svg" alt="">
              </div> 
              <div class="logo-wrapper">
                <img src="./assets/vsef.svg" alt="">
              </div> 
              <div class="logo-wrapper">
                <img src="./assets/vsef.svg" alt="">
              </div> 
              <div class="logo-wrapper">
                <img src="./assets/unija.svg" alt="">
              </div> 
              <div class="logo-wrapper">
                <img src="./assets/amplitudo.svg" alt="">
              </div> 
              <div class="logo-wrapper">
                <img src="./assets/cedis.jpg" alt="">
              </div> 
              <div class="logo-wrapper">
                <img src="./assets/visnjic.jpg" alt="">
              </div> 
              <div class="logo-wrapper">
                <img src="./assets/sport-vision.svg" alt="">
              </div> 
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
<script>
</script>
</html>
