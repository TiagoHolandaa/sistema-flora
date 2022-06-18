<?php

if(isset($_POST['email']) 
&& !empty($_POST['email']) 
&& isset($_POST['senha']) 
&& !empty($_POST['senha']) 
&& isset($_POST['nome']) 
&&!empty($_POST['nome']) 
&& isset($_POST['sobrenome']) 
&& !empty($_POST['sobrenome']) 
&& isset($_POST['cpf']) 
&& !empty($_POST['cpf'])){


require '../controller/conexao.php';
require 'usuario.class.php';

$u = new Usuario();

$email = addslashes($_POST['email']);
$senha = addslashes($_POST['senha']);
$nome = addslashes($_POST['nome']);
$sobrenome = addslashes($_POST['sobrenome']); 
$cpf = addslashes($_POST['cpf']);

$u->cadastrar($email, $senha, $nome, $sobrenome, $cpf);
    header("Location: ../view/login.php");
}
else{
    header("Location: cadastro.php");
}

?>