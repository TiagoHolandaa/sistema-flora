<?php 
   $servidor = "localhost";
    $usuario = "id19174641_flora";
    $senha = "rGh%MYJN84C|rS\p";
    $BD = "id19174641_floracultura";
   
   $mysqli = new mysqli($servidor, $usuario, $senha, $BD);
   
   if($mysqli->error){
      die("Falha ao conectar ao banco de dados");
   }
?>