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
    h2 {
      font-family: stretch;
    }

    </style>
</head>
<body class="bg-light">
    <?php
        require_once "header.php";
    ?>

    <div class="hero">
      <div class="hero__inner">
        <div class="hero__image banner-image mb-5 container-flex d-flex justify-content-start align-items-center" data-x="0.05" data-y="0.05" data-scale="1.05">
          <div class=" container content text-start px-5">
            <div class="col-5 mb-4">
              <h1 class="text-dark fw-bold" style="font-family: Caligna;">Melhores <span class="animate-h1" style="font-family: Caligna;">presentes</span> para você é aqui</h1>
            </div>
            <a href="#lands"><button type="submit" id="btn-color" class="btn-lg btn btn-pink px-5 mb-3 b-shadow" style="background-color: #EFB5C4;">Veja mais</button></a>
            <footer class="teste d-flex" style="position: absolute; bottom: 20px;"><h2><i class='bx bxl-instagram mx-2'></i><i class='bx bxl-facebook-square'></i></h2></footer>
          </div>
        </div>
      </div>
    </div>
    
    <?php
      require_once "landing-page.php"
    ?>

    <?php
      require_once "footer.php"
    ?>
  <script src="../vendor/bootstrap/bootstrap.js"></script>
  <script src="../assets/js/image-pallarax.js"></script>
</body>
</html>