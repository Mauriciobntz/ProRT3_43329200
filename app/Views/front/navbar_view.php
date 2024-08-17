<?php
  $session = session();
  $nombre = $session->get('nombre');
  $perfil = $session->get('perfil_id');
?>

<!--navBar-->
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo base_url('principal')?>">
      <img src="assets/img/logo.png" class="d-block w-50" alt="img">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <!-- Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-lg-end" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php if ($nombre): ?>
              <div class="d-flex align-items-center">
                <span class="me-2"><?php echo $nombre; ?></span>
                <span class="badge bg-primary"><?php echo ($perfil == 1) ? 'Admin' : 'Cliente'; ?></span>
              </div>
            <?php else: ?>
              Mi Cuenta
            <?php endif; ?>
          </a>
          <ul class="dropdown-menu text-end">
            <?php if ($nombre): ?>
              <!-- Opciones para usuarios autenticados -->
              <li><a class="dropdown-item" href="<?php echo base_url('logout'); ?>">Cerrar Sesión</a></li>
              <li><a class="dropdown-item" href="<?php echo base_url('contacto'); ?>">Contacto</a></li>
            <?php else: ?>
              <!-- Opciones para usuarios no autenticados -->
              <li><a class="dropdown-item" href="<?php echo base_url('sign_in'); ?>">Registrarse</a></li>
              <li><a class="dropdown-item" href="<?php echo base_url('login'); ?>">Iniciar Sesión</a></li>
              <li><a class="dropdown-item" href="<?php echo base_url('contacto'); ?>">Contacto</a></li>
            <?php endif; ?>
          </ul>
        </li>
        <!-- Links de navegación -->
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo base_url('principal')?>">Principal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href='<?php echo base_url('quienes_somos')?>'>Quienes Somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href='<?php echo base_url('acerca_de')?>'>Acerca de</a>
        </li>
        <!-- Campo de búsqueda -->
        <li class="nav-item">
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </li>
      </ul>
    </div>
  </div>
</nav>
