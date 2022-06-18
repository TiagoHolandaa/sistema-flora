<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../vendor/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/header.css">
    <title>header</title>
  </head>
  <body>
    <!-- Navbar  -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light p-md-3">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="../assets/img/logo/logo.svg" alt="" width="100">
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="mx-auto">
          <ul class="navbar-nav ">
            <li class="nav-item">
              <a class="nav-link font fw-bold" href="index.php">Início</a>
            </li>
            <li class="nav-item">
              <a class="nav-link font fw-bold" href="#">Categoria</a>
            </li>
            <li class="nav-item">
              <a class="nav-link font fw-bold" href="#">Contato</a>
            </li>
            <li class="nav-item">
              <a class="nav-link font fw-bold" href="#">Mudar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link font fw-bold" href="#">Mudar</a>
            </li>
          </ul>
          </div>
          <ul class="navbar-nav ">
          <li class="nav-item">
              <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class='bx bx-search bag fw-bold'></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php"><i class='bx bx-user bag fw-bold'></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class='bx bx-heart bag fw-bold'></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class='bx bx-shopping-bag bag fw-bold'></i></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <?php
      require_once "carrinho.php";
    ?>

    <?php
      require_once "search.php";
    ?>

    <script type="text/javascript">
      var nav = document.querySelector('nav');

      window.addEventListener('scroll', function () {
        if (window.pageYOffset > 650) {
          nav.classList.add('bg-white', 'shadow-sm',);
        } else {
          nav.classList.remove('bg-white', 'shadow-sm');
        }
      });
    </script>
    <script src="../vendor/bootstrap/bootstrap.js"></script>
</body>
</html>