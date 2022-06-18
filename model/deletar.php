<?php
include('../controller/conexaoPro.php');

if(!empty($_GET['id'])){
    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM tb_produto WHERE pro_id='$id'";

    $result = $mysqli->query($sqlSelect);

    if($result->num_rows > 0){
        $sqlDelet = "DELETE FROM tb_produto WHERE pro_id='$id'";
        $result = $mysqli->query($sqlDelet);
    
    }else{
        
    }
}
    header('Location: ../view/admin.php');
?>