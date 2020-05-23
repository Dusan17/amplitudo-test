<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./styles/bootstrap.min.css" />
  <link rel="stylesheet" href="./styles/index.css" />
  <link rel="stylesheet" href="styles/header.css">
  <link rel="stylesheet" href="styles/footer.css">
  <title>Blog</title>
  <style>
    .blog {
      margin-top: 100px;
    }
    .blog-info {
      padding-bottom: 100px;
    }

    .naslov-stil {
      width: 219px;
      height: 23px;
      opacity: 0.85;
      font-family: Muli;
      font-size: 18px;
      font-weight: 900;
      font-stretch: normal;
      font-style: normal;
      line-height: 1.28;
      letter-spacing: 3.6px;
      text-align: left;
      color: #2e3038;
    }
  </style>
</head>

<body>
  <?php include "./components/header.html"; ?>
  <div class="blog">
    <section class="blog-content mt-5">
      <div class="section-container row justify-content-between blog-info">
        <div class="col-md-6 col-12">
          <img src="./assets/dijete.jpg" class="img-fluid" width="804px" height="603px" />
        </div>
        <div class="col-md-6 col-12">
          <div class="d-flex">
            <div>
              <img src="./assets/man.svg" width="50px" height="50px" style="border-radius: 50%;" alt="" />
            </div>
            <p class="section-text text--gray naslov-stil pr-2">Petar Petrovic</p>
          </div>
          <h1 class="section-title text--dark">
            Naslov bloga u dva reda, naslov bloga
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
        </div>
      </div>
      <div class="section-container row justify-content-between blog-info">
        <div class="col-md-6 col-12">
          <img src="./assets/smajli.jpg" class="img-fluid" width="804px" height="603px" />
        </div>
        <div class="col-md-6 col-12">
          <div class="d-flex">
            <div>
              <img src="./assets/woman.svg" width="50px" height="50px" style="border-radius: 50%;" alt="" />
            </div>
            <p class="section-text text--gray pr-2">Petar Petrovic</p>
          </div>
          <h1 class="section-title text--dark">
            Naslov bloga
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
        </div>
      </div>
      <div class="section-container row justify-content-between blog-info">
        <div class="col-md-6 col-12">
          <img src="./assets/poklon.jpg" class="img-fluid" width="804px" height="603px" />
        </div>
        <div class="col-md-6 col-12">
          <div class="d-flex">
            <div>
              <img src="./assets/woman.svg" width="50px" height="50px" style="border-radius: 50%;" alt="" />
            </div>
            <p class="section-text text--gray pr-2">Petar Petrovic</p>
          </div>
          <h1 class="section-title text--dark">
            Naslov bloga
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
        </div>
      </div>
    </section>
  </div>
  <?php include "./components/footer.html"; ?>
</body>

</html>