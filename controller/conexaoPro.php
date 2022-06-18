<?php 
   $server = "localhost";
   $user = "root";
   $pass = "";
   $DB = "floricultura";
   
   $mysqli = new mysqli($server, $user, $pass, $DB);
   
   if($mysqli->error){
      die("Falha ao conectar ao banco de dados");
   }
?>