<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$BD = "floricultura";

global $pdo; 

try{
    $pdo = new PDO("mysql:dbname=".$BD."; host=".$servidor,$usuario,$senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "tudo certo :)";  
}
catch(PDOException $e){
    echo "ERRO: ".$e->getMessage();
    exit;
}

?>