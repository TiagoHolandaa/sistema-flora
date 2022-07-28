<?php

if(!isset($_SESSION)){
    session_start();
}


$servidor = "localhost";
$usuario = "id19174641_flora";
$senha = "rGh%MYJN84C|rS\p";
$BD = "id19174641_floracultura";

global $pdo; 

try{
    $pdo = new PDO("mysql:dbname=".$BD."; host=".$servidor,$usuario,$senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
}
catch(PDOException $e){
    echo "ERRO: ".$e->getMessage();
    exit;
}

?>