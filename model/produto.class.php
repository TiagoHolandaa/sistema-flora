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
    echo $path;
    
    $deu_certo = move_uploaded_file($tmp_name, $path);
    if($path) {
       $pdo->query("INSERT INTO tb_foto_has_pro (ft_nome, ft_path) VALUES ('$path', '$nomeDoArquivo')");
       var_dump($_FILES['arquivo']);
       return true;
    } else
       return false;
    }
}

?>