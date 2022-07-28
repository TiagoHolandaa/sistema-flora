<?php
    $valor = isset($_POST['categoria']) ? $valor=$_POST['categoria'] : 0;

    switch ($valor) {
        case '1':
            var_dump($valor);
            break; 
        
        case '2':
            var_dump($valor);
            break;

        case '3':
            var_dump($valor);
            break;
        case '4':
            var_dump($valor);
            break;
        case '5':
            var_dump($valor);
            break;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <link rel="shortcut icon" href="assets/img/logo/logo-icon.svg" type="image/x-icon">
    <title>Admin</title>

    <link href="vendor/bootstrap/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="assets/css/dashboard.css" rel="stylesheet">
</head>
<body>
<form action="#" method="POST">
    <div class="form-floating">
        <select class="form-select" name="categoria" id="floatingSelect" aria-label="Floating label select example">
        <option selected disabled>Categoria</option>
        <option value="1" name="rosas">Rosas</option>
        <option value="2" name="orquideas">Orquídeas</option>
        <option value="3" name="margaridas">Margaridas</option>
        <option value="4" name="violetas">Violetas</option>
        <option value="5" name="crisantemos">Crisântemos</option>
    </select>
    <label for="floatingSelect">Selecione</label>
    <button class="btn btn-dark" name="submit">
        aqui
    </button>
</form>
</div>
</body>
</html>