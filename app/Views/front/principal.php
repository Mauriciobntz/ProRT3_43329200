<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Euforia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <!--navBar-->
      <nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="assets/img/logo.png" class="d-block w-50" alt="img"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Principal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Quines Somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Aserca de</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Mi Cuenta
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Registrarse</a></li>
            <li><a class="dropdown-item" href="#">Iniciar Sesion</a></li>
            <li><a class="dropdown-item" href="<?php echo base_url('contacto') ?>">Contacto</a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    <!--end navBar-->

    <!--Carousel-->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/img/Remera.jpg" class="d-block w-100" alt="img">
    </div>
    <div class="carousel-item">
      <img src="assets/img/remeras.jpg" class="d-block w-100" alt="img">
    </div>
    <div class="carousel-item">
      <img src="assets/img/buzos.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  </div>
  <!--end of Carousel-->

    <!-- Footer -->
    <footer class="text-center text-lg-start bg-body-tertiary text-muted">

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i><img src="assets/img/logo.png" class="d-block w-50" alt="img">
          </h6>
          <p>
            Somos una empresa dedicada al comercio electronico con sede  en Corrientes Capital, y precencia en el NEA.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Productos
          </h6>
          <p>
            <a href="#!" class="text-reset">Hombres</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Mujeres</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Zapatillas</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Accesorios</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Menu
          </h6>
          <p>
            <a href="#!" class="text-reset">Incio</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Productos</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Contacto</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Trabaja con Nosotros</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contacto</h6>
          <p><i class="fas fa-home me-3"></i> Ctes, Corrientes, Arg</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
              euforia@gmail.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2024 Copyright
  </div>
  <!-- Copyright -->
  </footer>
  <!-- Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>