<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Youcef Shems: auteur, compositeur et interprète" />
    <meta name="author" content="amstram.be" />
    <title>Youcef Shems</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/custom202212.css" rel="stylesheet" />
</head>
<body>
<header>
    <h1 class="site-heading text-center text-faded d-none d-md-block">
        <span class="site-heading-lower cursive">Youcef</span>
        <span class="site-heading-upper cursive text-primary mb-3">Shems</span>
    </h1>
</header>
    <!-- Navigation-->
<nav class="navbar navbar-expand-md navbar-dark bg-primary py-lg-4" id="mainNav">
  <div class="container">
    <a class="navbar-brand text-secondary cursive fw-bold d-md-none py-2" href="index.php">Youcef Shems</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mx-auto">
        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase text-secondary" href="#discographie">Discographie</a></li>
        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase text-secondary" href="#biographie">Biographie</a></li>
        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase text-secondary" href="#contact">Contact</a></li>
    </ul>
    </div>
  </div>
</nav>

<section class="page-section clearfix">
  <div class="container">
  <div class="intro">
    <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="assets/img/intro.jpg" alt="..." />
    <div class="intro-text left-0 text-center bg-faded p-5 rounded">
        <h2 class="section-heading mb-4">
            <span class="section-heading-upper">Youcef</span>
            <span class="section-heading-lower">Shems</span>
        </h2>
        <p class="mb-3">Youcef Shems (shems signifie soleil, surnom donné pour sa joie de vivre), est un jeune artiste franco-marocain né dans le Nord de la France. Autodidacte dans l’âme, il est à la fois auteur, compositeur et interprète.</p>
        <div class="intro-button mx-auto"><a class="btn btn-primary btn-xl rale" href="#biographie">Biographie</a></div>
    </div>
  </div>
  </div>
</section>

<section class="page-section" id="discographie">
  <div class="container">
  <div class="bg-faded rounded  p-4">
      <h2 class="section-heading mb-4 text-center">
          <span class="section-heading-upper">Youcef Shems</span>
          <span class="section-heading-lower">Discographie</span>
      </h2>
  <?php
  foreach (array_reverse(require_once('content/discography_data.php')) as $single)
  {
    ?>
    <div class="card mb-4">
      <div class="row">
        <div class="col-md-4"><img src="assets/img/<?= $single[0];?>" class="card-img-top" alt="Mayemi">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title mb-4 d-flex justify-content-between rale">
              <strong class="fs-2"><?= $single[1];?></strong>
              <span><?= $single[2];?></span></h5>
            <p class="card-text rale"><?= $single[3];?></p>
            <div class="row">
              <div class="col-12 col-md-6">
                <strong class="rale">Voir le clip</strong>
                <iframe style="border-radius:12px; height:152px; width:100%;"  src="https://www.youtube.com/embed/<?= $single[4];?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
              <div class="col-12 col-md-6">
                <?php if(isset($single[5])){ ?>

                  <strong class="rale">Ecouter sur Spotify</strong>
                  <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/<?= $single[5];?>?utm_source=generator&theme=0" width="100%" height="152" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                  <?php
                }?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
  }
  ?>
  </div>
  </div>
</section>

<section class="page-section cta" id="biographie">
  <div class="container">
  <div class="cta-inner bg-faded  rounded">
      <h2 class="section-heading mb-4 text-center">
          <span class="section-heading-upper">Youcef Shems</span>
          <span class="section-heading-lower">Biographie</span>
      </h2>
      <?php echo file_get_contents('content/biographie.html');?>
  </div>
  </div>
</section>

<section class="page-section" id="contact">
  <div class="container">
    <div class="row">
      <div class="col-xl-9 mx-auto">
          <div class="cta-inner bg-faded text-center rounded py-4">
              <h2 class="section-heading mb-5">
                  <span class="section-heading-upper">YOUCEF SHEMS</span>
                  <span class="section-heading-lower">Contact</span>
              </h2>
              <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                  <li class="list-unstyled-item list-hours-item">
                      <!-- alias: 'Y29udGFjdEB5b3VjZWZzaGVtcy5jb20=' -->
                      <!-- gmail: 'eXNoZW1zdGVhbUBnbWFpbC5jb20=' -->
                      <a class="ms-auto" href="javascript:decryptEmail('Y29udGFjdEB5b3VjZWZzaGVtcy5jb20=');">
                        <i class="fa-solid fa-fw fa-envelope"></i>
                        contact@youcefshems.com
                      </a>
                  </li>
                  <li class="list-unstyled-item list-hours-item ">
                      <a class="ms-auto" href="tel:+33783491729">
                        <i class="fa-solid fa-fw fa-phone"></i>
                        0033 783 491 729
                      </a>
                  </li>
                  <li class="list-unstyled-item list-hours-item">
                      <a class="ms-auto" href="https://www.instagram.com/youcefshems/">
                        <i class="fa-brands fa-fw fa-instagram"></i>
                        youcefshems
                      </a>
                  </li>
                  <li class="list-unstyled-item list-hours-item">
                      <a class="ms-auto text-secondary" href="https://www.facebook.com/youcefshems/">
                        <i class="fa-brands fa-fw fa-facebook"></i>
                        youcef Shems</a>
                  </li>
                  <li class="list-unstyled-item list-hours-item">
                      <a class="ms-auto text-secondary" href="https://www.snapchat.com/add/youcefshems">
                        <i class="fa-brands fa-fw fa-snapchat"></i>
                        youceshems</a>
                  </li>
                  <li class="list-unstyled-item list-hours-item">
                      <a class="ms-auto text-secondary" href="https://twitter.com/YoucefShems">
                        <i class="fa-brands fa-fw fa-twitter"></i>
                        @YoucefShems</a>
                  </li>
                  <li class="list-unstyled-item list-hours-item">

                      <a class="ms-auto" href="https://www.youtube.com/channel/UCQ-KEtzjLPpPdOjUu9XqUrA">
                        <i class="fa-brands fa-fw fa-youtube"></i>
                        Ma chaine</a>
                  </li>
                  <li class="list-unstyled-item list-hours-item">
                      <a class="ms-auto" href="https://open.spotify.com/artist/01WhqEB9aeAYvjn5hZs3p0">
                        <i class="fa-brands fa-fw fa-spotify"></i>
                        Ma page</a>
                  </li>
              </ul>

          </div>
      </div>
  </div>
  </div>
</section>

<footer class=" text-faded text-center py-5">
    <div class="container rale">
      <p class="m-0 small text-primary">Copyright &copy; Youcef Shems <?php echo date('Y');?></p>
      <p class="m-0 small text-primary">Réalisé par <a href="https://amstram.be">amstram</a></p>
      </div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<script type="text/javascript">

  document.addEventListener("DOMContentLoaded", function(){
    window.addEventListener('scroll', function() {
        if (window.scrollY > 264) {
          document.querySelector('nav').classList.add('fixed-top');
          document.querySelector('nav').classList.add('compact');

          navbar_height = document.querySelector('header').offsetHeight / 2;
          document.body.style.paddingTop = navbar_height + 'px';
        } else {
          document.querySelector('nav').classList.remove('fixed-top');
          document.querySelector('nav').classList.remove('compact');
          document.body.style.paddingTop = '0';
        }
    });
  });

    function decryptEmail(encoded) {
      var address = atob(encoded);
      window.location.href = "mailto:" + address;

    }
</script>
</body>
</html>
