    <!--navBar-->
      <nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo base_url('principal')?>"><img src="assets/img/logo.png" class="d-block w-50" alt="img"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo base_url('principal')?>">Principal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href='quienes_somos'>Quines Somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href='acerca_de'>Acerca de</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Mi Cuenta
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href='sign_in'>Registrarse</a></li>
            <li><a class="dropdown-item" href='login'>Iniciar Sesion</a></li>
            <li><a class="dropdown-item" href='contacto'>Contacto</a></li>
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