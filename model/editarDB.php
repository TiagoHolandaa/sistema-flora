
<?php
    include('../controller/conexaoPro.php');

        if(isset($_POST['update'])){
        $pro_id = $_POST['pro_id'];    
        $pro_nome = $_POST['pro_nome'];
        $pro_preco = $_POST['pro_preco'];
        $pro_quantidade = $_POST['pro_quantidade'];
        $tb_categoria_has_pro_cat_id = $_POST['tb_categoria_has_pro_cat_id'];    

        $sqlUpdate ="UPDATE tb_produto SET pro_id='$pro_id' ,pro_nome='$pro_nome',pro_preco='$pro_preco', pro_quantidade='$pro_quantidade', tb_categoria_has_pro_cat_id='$tb_categoria_has_pro_cat_id' where pro_id = $pro_id";

        $result = $mysqli->query($sqlUpdate);
        }else{
            header('Location:../view/adminEditar.php');
        }
    
    header('Location: ../view/admin.php');
?>