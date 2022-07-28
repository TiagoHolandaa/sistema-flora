<?php
  session_start();
    if(isset($_POST['email']) && !empty($_POST['email']) &&
    isset($_POST['senha']) && !empty($_POST['senha'])){

        
        require '../controller/conexao.php';
        require 'usuario.class.php';

        $u = new Usuario();

        $email = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);

        if($u->loginAdmin($email, $senha)==true){
            if(isset($_SESSION['iduser'])){
                header("Location: ../view/admin.php");
            }
            else{
                header("Location: ../view/loginAdmin.php");
            }
        }
        else{
            header("Location: ../view/loginAdmin.php");
        }

    }


    else{
        header("Location: ../view/loginAdmin.php");
    }
   
?>