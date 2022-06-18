<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../vendor/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/image-pallarax.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="../assets/img/logo/logo-icon.svg" type="image/x-icon">
    <title>Flora Fogaça - Início</title>
    <style>
        .t-color {
                color: #EFB5C4;
            }
    </style>
</head>
<body class="bg-light">
    <!-- Navbar  -->
    <nav class="navbar fixed-top bg-white navbar-expand-lg navbar-light p-md-3 shadow-sm" style="background-color: #EFB5C4;">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="../assets/img/logo/logo.svg" alt="" width="80">
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

    <div class="container p-5 m-5">
    <div class="row">
        <div class="col">
            <img src="../assets/img/lands/tavin.jpg" class="rounded " width="100%" alt="">
        </div>
        <div class="col d-flex align-items-center justify-content-center">
                <div class="p-5">
                    <h1 class="card-title">Flor do deserto</h1>
                    <p>
                        <i class='bx bxs-star text-warning'></i>
                        <i class='bx bxs-star text-warning'></i>
                        <i class='bx bxs-star text-warning'></i>
                        <i class='bx bxs-star-half text-warning'></i>
                        <i class='bx bx-star text-warning' ></i>
                        <small class="text-dark pe-3">(350)</small>
                        <small class="text-dark">99 perguntas</small>
                        <i class='bx bxs-comment-error align-text-bottom'></i>
                    </p>
                    <span class="text-sencondary text-break">digita texto. digita texto. digita texto. digita texto. digita texto. digita texto. digita texto. digita texto.digita texto. digita texto.</span><br><br>
                    <small class="text-muted text-decoration-line-throug">R$ 3500,00</small>
                    <h2 class="card-text ">R$ <span class="span "> 3000,00</span></h2>
                    <small class="text-muted">8x de R$ 28,74 sem juros no cartão</small>
                        <div class="py-5">
                        <div>
                        <form class="row g-3">
                        <small>Calcular frete e prazo</small>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Digite seu CEP" aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn btn-outline-dark" type="button" id="button-addon2">ok</button>
                        </div>
                        </form>
                        </div>  
                            <a href="compra.php"><button class="btn" style="background-color: #EFB5C4; padding-left: 44%; padding-right: 45%;">Compra</button></a>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <?php
      require_once "footer.php"
    ?>
  <script src="../vendor/bootstrap/bootstrap.js"></script>
  <script src="../assets/js/image-pallarax.js"></script>
</body>
</html>