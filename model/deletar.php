<?php
include('../controller/conexaoPro.php');

if(!empty($_GET['id'])){
    $id = $_GET['id'];
    $idFt = $_GET['idFt'];

    $sqlSelect = "SELECT * FROM tb_produto WHERE pro_id='$id' AND SELECT * FROM tb_foto_has_pro WHERE ft_id='$id'";

    $result = $mysqli->query($sqlSelect);

    if($result->num_rows > 0){
        $sqlDelet = "DELETE FROM tb_produto WHERE pro_id='$id'";
        $result = $mysqli->query($sqlDelet);}
    
if(!empty($_GET['idFt'])){
    $id = $_GET['idFt'];

    $sqlSelectFt = "SELECT `ft_id`, `ft_path`, `ft_nome`, `tb_produto_pro_id` FROM `tb_foto_has_pro` WHERE 1";

    $result = $mysqli->query($sqlSelectFt);

    if($result->num_rows > 0){
    $sqlDeletFt = "DELETE FROM tb_foto_has_pro WHERE pro_id='$id'";
    $result = $mysqli->query($sqlDelet);}

    }else{
        
    }
}
   //header('Location: ../view/admin.php');
?>