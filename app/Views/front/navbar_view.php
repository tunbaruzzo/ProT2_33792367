<!--navegacion-->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="principal.php">TYTHON</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= base_url('principal') ?>">Inicio</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('_servicios') ?>">Servicios</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('_clientes') ?>">Clientes</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('_contacto') ?>">Contacto</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('_login') ?>">Login</a>
        </li>
      </ul>

      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>
<!--fin de navegacion-->
