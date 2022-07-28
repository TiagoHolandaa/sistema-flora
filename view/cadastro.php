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

        .i-bg{
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
                <form class="row mx-5" method="POST" action="../model/cadastrar.php">
                    <p class="h3 mb-3">Cadastrar</p>
                    <div class="col-md-6">
                        <label for="exampleDataList" class="form-label px-1 f-size">Nome</label>
                        <input type="text" name="nome" class="form-control i-bg" id="inputPassword3">
                    </div>
                    <div class="col-md-6 mb-2">
                        <label for="exampleDataList" class="form-label px-1 f-size">Sobrenome</label>
                        <input type="text" name="sobrenome" class="form-control i-bg" id="inputPassword3">
                    </div>
                    <div class="col-12 mb-2">
                        <label for="inputCPF" class="form-label">CPF</label>
                        <input type="text" name="cpf" class="form-control i-bg" id="inputCPF">
                    </div>
                    <div class="col-12 mb-2">
                        <label for="inputEmail" class="form-label">Email</label>
                        <input type="text" name="email" class="form-control i-bg" id="inputEmail">
                    </div>
                    <div class="col-12 mb-3">
                        <label for="inputSenha"  class="form-label">Senha</label>
                        <input type="text" name="senha" class="form-control i-bg" id="inputSenha">
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" name="submit" class="btn btn-success px-5 mb-3">Cadastrar</button>
                    </div>
                    <div class="d-flex justify-content-center">
                        <p><a href="login.php" class="a-text text-dark a-text">Já tenho cadastro</a></p>
                    </div>
                    <div class="text-success">
                        <hr>
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-outline-secondary px-5 p-google d-flex align-items-center"><i class='bx bxl-google pe-1 text-dark'></i>Google</button>
                    </div>
                </form>
            </div>
        </div>
    </div>  

    <script src="../vendor/bootstrap/bootstrap.js"></script>
</body>
</html>