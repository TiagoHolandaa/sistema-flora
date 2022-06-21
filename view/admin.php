<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $DB = "floricultura";
     
    $mysqli = new mysqli($server, $user, $pass, $DB);
    $sql = "SELECT pro_id, pro_preco, pro_nome, pro_quantidade, cat_tipo FROM tb_produto INNER JOIN tb_categoria_has_pro ON tb_categoria_has_pro_cat_id = cat_id;";
    $result = $mysqli->query($sql);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <link rel="shortcut icon" href="../assets/img/logo/logo-icon.svg" type="image/x-icon">
    <title>Admin</title>

    <link href="../vendor/bootstrap/bootstrap.css" rel="stylesheet">

    <script>
        function preco(i){

         var v = i.value;
   
        if(isNaN(v[v.length-1])){ // impede entrar outro caractere que não seja número
            i.value = v.substring(0, v.length-1);
            return;
        }
        
        i.setAttribute("maxlength", "6");
        if (v.length == 3 ) i.value += ",";
        }

        function quantidade(i){
   
         var v = i.value;
   
        if(isNaN(v[v.length-1])){ // impede entrar outro caractere que não seja número
            i.value = v.substring(0, v.length-1);
            return;
        }
        
        i.setAttribute("maxlength", "3");
    
        }
    </script>

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }
        
        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
        
        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }
        
        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }
        
        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }
        
        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }
        
        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .menu-bg:hover, .menu-bg:focus {
          background-color: #EFB5C4;
          box-shadow: rgba(239, 181, 196, 0.3) 0px 8px 24px, 
          rgba(239, 181, 196, 0.3)  0px 16px 56px, 
          rgba(239, 181, 196, 0.3) 0px 24px 80px;
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

    </style>


    <!-- Custom styles for this template -->
    <link href="../assets/css/dashboard.css" rel="stylesheet">
</head>

<body>

    <header class="navbar navbar-white sticky-top bg-white flex-md-nowrap p-0 shadow mb-4">
        <a class=" col-md-3 col-lg-2 me-0 py-1 px-3 fs-6" href="#">
          <img src="../assets/img/logo/logo.svg" alt="" width="90px" class="">
        </a>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <input class="form-control form-control-dark w-100 rounded-pill border bg-light" type="text" placeholder="Pesquisar" aria-label="Search">
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <a class="nav-link px-3" href="#"><button class="btn btn-secondary rounded-5 b-shadow-dark">Sair</button></a>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <!--<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="#mVenda">
                              <div class="menu-bg m-0 px-2 py-2 rounded-1">
                                <span data-feather="home" class="align-text-bottom"></span> Gráfico
                              </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#proCadastro">
                            <div class="menu-bg m-0 px-2 py-2 rounded-1">
                                <span data-feather="file" class="align-text-bottom"></span> Produtos
                            </div>
                            </a>
                        </li>
                    </ul>
            </nav>-->

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2" id="mVenda">Média de venda</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <button type="button" class="btn btn-sm btn-pink border-1 border-dark b-shadow">Share</button>
                            <button type="button" class="btn btn-sm btn-pink border-1 border-dark b-shadow">Export</button>
                        </div>
                        <button type="button" class="btn btn-sm btn-pink dropdown-toggle b-shadow border-1 border-dark">
                      <span data-feather="calendar" class="align-text-bottom">
                        aui
                      </span>
                      This week
                    </button>
                    </div>
                </div>

                <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 id="proCadastro" class="h2">Produtos cadastrados</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group me-2">
                            <button type="button" class="btn btn-sm btn-pink px-3  border-1 border-dark b-shadow">Ver</button>
                            <button type="button" class="btn btn-sm btn-pink  border-1 border-dark b-shadow">Baixar</button>
                        </div>
                    </div>
                </div>

                <form method="POST" action="../model/cadastroDB.php">
                <div class="row g-2 mb-4">
                        <div class="col-md-3">
                            <div class="form-floating">
                            <input type="text" name="pro_nome" data-ls-module="charCounter" maxlength="40" class="form-control" id="floatingInputGrid" placeholder="name@example.com">
                           <label for="floatingInputGrid">Nome</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-floating">
                            <input type="text" name="pro_preco" oninput="preco(this)" data-ls-module="charCounter" maxlength="20" class="form-control" id="floatingInputGrid" placeholder="name@example.com">
                            <label for="floatingInputGrid">Preço</label>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-floating">
                            <input type="text" name="pro_quantidade" oninput="quantidade(this)" class="form-control" id="floatingInputGrid" placeholder="name@example.com">
                            <label for="floatingInputGrid">Quantidade</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-floating">
                            <select name="tb_categoria_has_pro_cat_id" class="form-select" id="floatingInputGrid" placeholder="name@example.com">
                                <option disabled selected>Selecione</option>    
                            <!--este código em php tras as categorias da tebela categoria do banco de dados-->
                                <?php
                                    $cat = "SELECT * FROM tb_categoria_has_pro ORDER BY cat_tipo, cat_id ASC";
                                    $res = $mysqli->query($cat);

                                    while($user_data = mysqli_fetch_assoc($res)){?>

                                        <option value="<?php echo $user_data['cat_id']?>"><?php echo $user_data['cat_tipo']?></option>
                                  
                                  <?php }
                                ?>
                            </select>
                            <label for="floatingInputGrid">Categoria</label>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <button class="btn btn-pink p-3 b-shadow"  name="update">Salvar</button>
                        </div>
                    </div>
                    </div>
                    </form>

                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Preço</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Quantidade</th>
                                <th scope="col">Categoria</th>
                                <th scope="col">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            while($user_data = mysqli_fetch_assoc($result)){
                                echo "<tr>";
                                echo "<td>".$user_data['pro_id']."</td>";
                                echo "<td>".$user_data['pro_preco']."</td>";
                                echo "<td>".$user_data['pro_nome']."</td>";
                                echo "<td>".$user_data['pro_quantidade']."</td>";
                                echo "<td>".$user_data['cat_tipo']."</td>";
                                ?>
                               
                                <?php
                                echo "<td>
                                    <a class='btn btn-sm btn-primary' href='adminEditar.php?id=$user_data[pro_id]'>
                                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-fill' viewBox='0 0 16 16'>
                                            <path d='M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z'/>
                                        </svg>
                                    </a>
                                    <a class='btn btn-sm btn-danger' href='../model/deletar.php?id=$user_data[pro_id]'>
                                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                    <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                                </svg>
                                    </a>
                                </td>";
                                echo "</tr>";
                            }
                        ?>
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>


    <script src="../vendor/bootstrap/bootstrap.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
    <script src="../assets/js/dashboard.js"></script>
</body>

</html>