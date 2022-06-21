<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../vendor/bootstrap/bootstrap.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
    <title>Flora Fogaça - Login</title>
    <style>
        .f-size {
            font-size: 13px;
        }

        .i-bg {
            background: rgba(21, 121, 76, 0.1);
        }

        .a-text {
            text-decoration: none;
        }
    </style>
</head>
<body> 
    <div class="container-flex">
        <div class="row ">
            <div class="col-sm-7 m-0">
                <img src="../assets/img/login/login-2.png" alt="" width="101.5%">
            </div>
            <div class="col-sm-5 d-flex align-items-center justify-content-center bg-light">
                <form method="POST" action="../model/logarAdmin.php">
                    <p class="h3 mb-3">Entrar</p>
                    <div class="row mb-2">
                    <label for="exampleDataList" class="form-label px-1 f-size">Email</label>
                    <input type="email" name="email" class="form-control i-bg" id="inputPassword3">
                    </div>
                    <div class="row mb-2">
                    <label for="exampleDataList" class="form-label px-1 f-size">Senha</label>
                    <input type="password" name="senha" class="form-control i-bg" id="inputPassword3">
                    </div>
                    <div class="row mb-3 px-0">
                        <div class="col-sm-12">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Lembrar de mim</label>
                        </div>
                        </div>
                    </div>
                    <center>
                        <button type="submit" name="submit" class="btn btn-success px-4 mb-3">Entrar</button><br>
                        <a href="cadastro.php" class="a-text text-dark">Ainda não tenho login</a>           
                    <div class="text-success">
                        <hr>
                    </div>
                    <button type="submit" class="btn btn-outline-secondary px-5 mb-3 mx-5 p-google d-flex align-items-center"><i class='bx bxl-google pe-1 text-dark'></i>Google</button>
                    </center>
                </form>
            </div>
        </div>
    </div>  

    <script src="../vendor/bootstrap/bootstrap.js"></script>
</body>
</html>