<?php
$server = "localhost";
$user = "root";
$pass = "";
$DB = "floricultura";

$mysqli = new mysqli($server, $user, $pass, $DB);

$pro_preco=$_POST['pro_preco'];
$pro_nome=$_POST['pro_nome'];
$pro_quantidade=$_POST['pro_quantidade'];
$tb_categoria_has_pro_cat_id=$_POST['tb_categoria_has_pro_cat_id'];



$sql="INSERT INTO tb_produto (pro_preco, pro_nome, pro_quantidade, tb_categoria_has_pro_cat_id) VALUES ('$pro_preco','$pro_nome', '$pro_quantidade', '$tb_categoria_has_pro_cat_id')";

if(mysqli_query($mysqli, $sql)){
    echo "Produto Cadastrado com sucesso!(1)";
}else{
    echo "Erro ao codastrar produro(1)." .mysqli_connect_error($mysqli);
}

mysqli_close($mysqli);

header('location: ../view/admin.php');
?>
