<?php
include('../controller/conexaoPro.php');

if(
isset($_POST['pro_nome']) && !empty($_POST['pro_nome']) &&
isset($_POST['pro_preco']) && !empty($_POST['pro_preco']) &&
isset($_POST['pro_quantidade']) && !empty($_POST['pro_quantidade']) &&
isset($_POST['tb_categoria_has_pro_cat_id']) && !empty($_POST['tb_categoria_has_pro_cat_id'])
){


    $pro_preco = $_POST['pro_preco'];
    $pro_nome = $_POST['pro_nome'];
    $pro_quantidade = $_POST['pro_quantidade'];
    $tb_categoria_has_pro_cat_id = $_POST['tb_categoria_has_pro_cat_id'];

    $sql="INSERT INTO tb_produto (pro_preco, pro_nome, pro_quantidade, tb_categoria_has_pro_cat_id) VALUES ('$pro_preco','$pro_nome', '$pro_quantidade', '$tb_categoria_has_pro_cat_id')";

    require '../controller/conexao.php';
    require 'produto.class.php';

    $p = new Produto();

    if(isset($_FILES['arquivo'])) {
        $arquivos = $_FILES['arquivo'];
        $tudo_certo = true;
        foreach($arquivos['name'] as $index => $arq) {
        $deu_certo = $p->enviarArquivo($arquivos['error'][$index], $arquivos['size'][$index], $arquivos['name'][$index], $arquivos["tmp_name"][$index]);
        if(!$deu_certo)
            $tudo_certo = false;
        }

        if($tudo_certo)
            header('location: ../view/admin.php');
        else
            echo "<p>Falha ao enviar um ou mais arquivos!</p>";
    }

}

else{
    echo "preencha os campos";
}


?>
