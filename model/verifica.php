<?php

require '../controller/conexao.php';


if(isset($_SESSION['iduser']) && !empty($_SESSION['iduser'])){
    require_once '../model/usuario.class.php';
    $u = new Usuario();

    $usuarioLogado = $u->logged($_SESSION['iduser']);
    $nomeUser = $usuarioLogado['emAdm_email'];
    $IDUser = $usuarioLogado['tb_admin_adm_id'];
}
else{   
    header("Location: ../view/loginAdmin.php");
}
?>