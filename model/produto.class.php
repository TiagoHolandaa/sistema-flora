<?php

class Produto{

    public function enviarArquivo($error, $size, $name, $tmp_name) {

        include("../controller/conexao.php"); 
    
        if($error)
        die("Falha ao enviar arquivoo");
      
    
    if($size > 2097152)
        die("Arquivo muito grande!! Max: 2MB");
    
    $pasta = "../arquivos/";
    $nomeDoArquivo = $name;
    $novoNomeDoArquivo = uniqid();
    $extensao = strtolower(pathinfo($nomeDoArquivo,PATHINFO_EXTENSION));
    
    if($extensao != "jpg" && $extensao != "png")
        die("Tipo de arquivo não aceito");
    
    $path =  $pasta . $novoNomeDoArquivo . "." . $extensao;
    
    $deu_certo = move_uploaded_file($tmp_name, $path);
    if($path) {
        $pro_preco = $_POST['pro_preco'];
        $pro_nome = $_POST['pro_nome'];
        $pro_quantidade = $_POST['pro_quantidade'];
        $tb_categoria_has_pro_cat_id = $_POST['tb_categoria_has_pro_cat_id'];
        $pdo->query("INSERT INTO tb_produto (pro_foto, pro_path, pro_preco, pro_nome, pro_quantidade, tb_categoria_has_pro_cat_id) VALUES ('$path', '$nomeDoArquivo', '$pro_preco','$pro_nome', '$pro_quantidade', '$tb_categoria_has_pro_cat_id')");

       return true;
    } else
       return false;
    }
}

?>