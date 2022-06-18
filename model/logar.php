<?php
session_start();
    if(isset($_POST['email']) && !empty($_POST['email']) &&
    isset($_POST['senha']) && !empty($_POST['senha'])){

        
        require '../controller/conexao.php';
        require 'usuario.class.php';

        $u = new Usuario();

        $email = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);

        if($u->login($email, $senha)==true){
            if(isset($_SESSION['iduser'])){
                header("Location: ../view/index.php");
            }
            else{
                header("Location: ../view/login.php");
            }
        }
        else{
            header("Location: ../view/login.php");
        }

    }


    else{
        header("Location: ../view/login.php");
    }
   
?>