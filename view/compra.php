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
      @font-face {
        font-family: "Caligna";
        src: url(../assets/fonts/CalignaDEMO.ttf);
      }

      @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

      * {
        font-family: 'Poppins', sans-serif;
      }
      .banner-image {
        background-image: url('../assets/img/lands/pawel-czerwinski-rxdNnhMPRGE-unsplash.jpg');
        background-size: cover;
        background-position: center;
        width: 96.6vw;
        height: 100vh;
      }

      .b-shadow {
        box-shadow: rgba(239, 181, 196, 0.3) 0px 8px 24px, 
        rgba(239, 181, 196, 0.3)  0px 16px 56px, 
        rgba(239, 181, 196, 0.3) 0px 24px 80px;
      }

      .b-shadow-dark {
        box-shadow: rgba(0, 0, 0, 0.2) 0px 8px 24px, 
        rgba(0, 0, 0, 0.2)  0px 16px 56px, 
        rgba(0, 0, 0, 0.2) 0px 24px 80px;
      }

      .btn-pink {
        background-color: #EFB5C4;
      }

      

      .animate-h1 {
        background: linear-gradient(90deg, #EFB5C4, #EFB5C4, #444, #EFB5C4);
        background-size: 400%;
        -webkit-text-fill-color: transparent;
        -webkit-background-clip: text;
        animation: animate 10s linear infinite;
    }
  /*
    @keyframes animate {
        0% {
            background-position: 0%;
        }
        100% {
            background-position: 400%;
        }
    }
    */

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .list-group {
          max-width: 460px;
          margin: 4rem auto;
      }

      .form-check-input:checked+.form-checked-content {
          opacity: .5;
      }

      .form-check-input-placeholder {
          border-style: dashed;
      }

      [contenteditable]:focus {
          outline: 0;
      }

      .list-group-checkable .list-group-item {
          cursor: pointer;
      }

      .list-group-item-check {
          position: absolute;
          clip: rect(0, 0, 0, 0);
      }

      .list-group-item-check:hover+.list-group-item {
          background-color: var(--bs-light);
      }

      .list-group-item-check:checked+.list-group-item {
          color: #fff;
          background-color: var(--bs-secondary);
      }

      .list-group-item-check[disabled]+.list-group-item,
      .list-group-item-check:disabled+.list-group-item {
          pointer-events: none;
          filter: none;
          opacity: .5;
      }

      .list-group-radio .list-group-item {
          cursor: pointer;
          border-radius: .5rem;
      }

      .list-group-radio .form-check-input {
          z-index: 2;
          margin-top: -.5em;
      }

      .list-group-radio .list-group-item:hover,
      .list-group-radio .list-group-item:focus {
          background-color: var(--bs-light);
      }

      .list-group-radio .form-check-input:checked+.list-group-item {
          background-color: var(--bs-body);
          border-color: var(--bs-secondary);
          box-shadow: 0 0 0 2px var(--bs-secondary);
      }

      .list-group-radio .form-check-input[disabled]+.list-group-item,
      .list-group-radio .form-check-input:disabled+.list-group-item {
          pointer-events: none;
          filter: none;
          opacity: .5;
      }

      .form-check-input:focus {
        border-color: #6c757d;
        outline: 0;
        box-shadow: 0 0 0 0.25rem rgba(108, 117, 125, 0.25);
      }

      .form-check-input:checked {
          background-color: #6c757d;
          border-color: #6c757d;
      }
    </style>
</head>
<body class="bg-light">
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

    <div class="container m-5 p-5">
    <h1 class="display-5 fw-bold text-center mb-5">Algumas coisa</h1>
            <div class="row">

              <!-- parte 1 -->
                <div class="col-md-6">
                    <div class="h-100 p-4 text-dark bg-white shadow-sm rounded-3">
                    <div class="list-group list-group-radio d-grid gap-2 border-0 w-auto">
                    <!-- Radios -->
                    <label for="cc-expiration" class="form-label">Forma de Pagamento</label>
                    <div class="position-relative">
                      <input class="form-check-input position-absolute top-50 end-0 me-3 fs-5" type="radio" name="listGroupRadioGrid" id="listGroupRadioGrid1" value="" checked>
                      <label class="list-group-item py-3" for="listGroupRadioGrid1">
                        <strong class="fw-semibold">PayPal</strong>
                      </label>
                    </div>

                    <div class="position-relative">
                      <input class="form-check-input position-absolute top-50 end-0 me-3 fs-5" type="radio" name="listGroupRadioGrid" id="listGroupRadioGrid2" value="">
                      <label class="list-group-item py-3" for="listGroupRadioGrid2">
                        <strong class="fw-semibold">Crédito</strong>
                      </label>
                    </div>

                    <div class="position-relative">
                      <input class="form-check-input position-absolute top-50 end-0 me-3 fs-5" type="radio" name="listGroupRadioGrid" id="listGroupRadioGrid3" value="">
                      <label class="list-group-item py-3" for="listGroupRadioGrid3">
                        <strong class="fw-semibold">Débito</strong>
                      </label>
                    </div>

                  </div>

                  <!--Parte do cartão-->
                      <div class="row gy-3 mb-5">
                        <div class="col-md-6 ps-5">
                          <label for="cc-name" class="form-label">Nome do cartão</label>
                          <input type="text" class="form-control" id="cc-name" placeholder="" required>
                          <small class="text-muted">Nome completo conforme no cartão</small>
                          <div class="invalid-feedback">
                            O nome no cartão é obrigatório
                          </div>
                        </div>

                        <div class="col-md-6 pe-5">
                          <label for="cc-number" class="form-label">Número do cartão crédito</label>
                          <input type="text" class="form-control" id="cc-number" placeholder="" required>
                          <div class="invalid-feedback">
                            O número do cartão de crédito é obrigatório
                          </div>
                        </div>

                        <div class="col-md-6 ps-5">
                          <label for="cc-expiration" class="form-label">Expiração</label>
                          <input type="date" class="form-control" id="cc-expiration" placeholder="" required>
                          <div class="invalid-feedback">
                            Data de expiração obrigatória
                          </div>
                        </div>

                        <div class="col-md-4 pe-5">
                          <label for="cc-cvv" class="form-label">CVV</label>
                          <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                          <div class="invalid-feedback">
                            CVV é obrigatório
                          </div>
                        </div>
                      </div>
                    </div>
                </div>

                <!-- parte 2 -->
                <div class="col-md-6">
                    <div class="h-100 text-dark bg-white p-5 shadow-sm rounded-3" style="background-image: #FBEEF2;">
                    <h2 class="mb-5">Total do carrinho</h2>
                    <div class="card mb-5" style="max-width: 540px;">
                      <div class="row g-0">
                        <div class="col-md-4">
                          <img src="../assets/img/lands/tavin.jpg" width="100%" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                          <div class="card-body p-0">
                            <h5 class="card-title p-2">Rosa do deserto</h5>
                            <p class="card-text p-2">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="mb-2 row">
                      <label for="staticEmail" class="col-sm-4 col-form-label">Subtotal</label>
                      <div class="col-sm-8">
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="R$284,00">
                      </div>
                    </div>
                    <div class="mb-2 row">
                      <label for="staticEmail" class="col-sm-4 col-form-label">Frete</label>
                      <div class="col-sm-8">
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="R$30,00">
                      </div>
                    </div>
                    <div class="mb-5 row">
                      <label for="staticEmail" class="col-sm-4 col-form-label">Total</label>
                      <div class="col-sm-8">
                        <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="R$284,00">
                      </div>
                    </div>
                    <button class="btn btn-danger px-4" type="button">Finalizar compra</button>
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