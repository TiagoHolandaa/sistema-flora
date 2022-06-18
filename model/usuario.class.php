<?php

class Usuario{

    //LOGAR O USÚARIO

    public function login($email, $senha){
        session_start();
        global $pdo;


        $sqlEm = "SELECT * FROM tb_email_has_cli WHERE emCli_email = :emCli_email AND emCli_senha = :emCli_senha";
        $sqlEm = $pdo->prepare($sqlEm);
        $sqlEm->bindValue("emCli_email", $email);
        $sqlEm->bindValue("emCli_senha", $senha);
        $sqlEm->execute();

       /* $sql = "SELECT * FROM tb_cliente WHERE cli_nome = :cli_nome AND cli_sobrenome = :cli_sobrenome = :cli_sobrenome AND cli_cpf = :cli_cpf ";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("cli_nome", $nome);
        $sql->bindValue("cli_sobrenome", $sobrenome);
        $sql->bindValue("cli_cpf", $cpf);
        $sql->execute(); */

        //VERIFICANDO SE OS DADOS COLOCADOS EXISTEM NO BANCO DE DADOS
        if($sqlEm->rowCount()>0){
            $dado = $sqlEm->fetch();
            
            $_SESSION['iduser'] = $dado['tb_cliente_cli_id'];

            return true;
        }
        else{
            return false;
        }
    }

    public function cadastrar($email, $senha, $nome, $sobrenome, $cpf){
        global $pdo;

        $sqlEmail = "SELECT * FROM tb_email_has_cli WHERE emCli_email = :emCli_email AND emCli_senha = :emCli_senha";
        $sqlEmail = $pdo->prepare($sqlEmail);
        $sqlEmail->bindValue("emCli_email", $email);
        $sqlEmail->bindValue("emCli_senha", $senha);
        $sqlEmail->execute();

        $sql = "SELECT * FROM tb_cliente WHERE cli_nome = :cli_nome AND cli_sobrenome = :cli_sobrenome AND cli_cpf = :cli_cpf";
        
        $sql = $pdo->prepare($sql);
        $sql->bindValue("cli_nome", $nome);
        $sql->bindValue("cli_sobrenome", $sobrenome);
        $sql->bindValue("cli_cpf", $cpf);
        $sql->execute();
        //VERIFICANDO SE O USUÁRIO EXISTE
        if($sql->rowCount()>0 && $sqlEmail->rowCount()>0){
            return false;
        }
        //CASO NÃO EXISTA, CADASTRAR
        else{
            if(isset($_POST['email']) 
            && !empty($_POST['email']) 
            && isset($_POST['senha']) 
            && !empty($_POST['senha']) 
            && isset($_POST['nome']) 
            && !empty($_POST['nome']) 
            && isset($_POST['sobrenome']) 
            && !empty($_POST['sobrenome']) 
            && isset($_POST['cpf']) 
            && !empty($_POST['cpf'])){

                require '../controller/conexao.php'; 
                
                $nome = addslashes($_POST['nome']);
                $sobrenome = addslashes($_POST['sobrenome']); 
                $cpf = addslashes($_POST['cpf']);
                $email = addslashes($_POST['email']);
                $senha = addslashes($_POST['senha']);
               
                $pdo->query("INSERT INTO tb_cliente(cli_nome, cli_sobrenome, cli_cpf) VALUES('$nome', '$sobrenome', '$cpf')");
                $idCliente = $pdo->lastInsertId();
                $pdo->query("INSERT INTO tb_email_has_cli(emCli_email, emCli_senha, tb_cliente_cli_id) VALUES('$email', '$senha', '$idCliente')");
                header("Location: index.php");
            
        }
            else{
            header("Location: cadastro.php");
            }
        }
    }

    //BUSCAR O USUÁRIO QUE ESTÁ LOGADO

    public function logged($id){
        global $pdo;

        $array = array();
        $sql = "SELECT cli_nome, cli_id FROM cliente WHERE cli_id = :cli_id";
        $sql = $pdo->prepare($sql);
        $sql->bindValue('cli_id', $id);
        $sql->execute();

        if($sql->rowCount()>0){
            $array= $sql->fetch();
        }

        return $array;
    }

    public function agendar($data, $hora, $servico, $cliente){
        global $pdo;

        $sql = "SELECT * FROM agendamento WHERE agend_data = :agend_data AND agend_horario = :agend_horario 
        AND agend_servico = :agend_servico and agend_cliente = :agend_cliente";
        
        $sql = $pdo->prepare($sql);
        $sql->bindValue("agend_data", $data);
        $sql->bindValue("agend_horario", $hora);
        $sql->bindValue("agend_servico", $servico);
        $sql->bindValue("agend_cliente", $cliente);
        $sql->execute();
        //VERIFICANDO SE O USUÁRIO EXISTE
        if($sql->rowCount()>0){
            return false;
        }
        
        else{
            if(isset($_POST['data']) && !empty($_POST['data']) && isset($_POST['hora']) && !empty($_POST['hora'])
            && isset($_POST['servico']) && !empty($_POST['servico']) && isset($_POST['cliente']) && !empty($_POST['cliente'])){

                require 'conexao.php';

                $data = addslashes($_POST['data']);
                $hora = addslashes($_POST['hora']); 
                $servico = addslashes($_POST['servico']);
                $cliente = addslashes($_POST['cliente']);

                $pdo->query("INSERT INTO agendamento(agend_data, agend_horario, agend_servico, agend_cliente) VALUES('$data', '$hora', '$servico', '$cliente')");
                header("Location: login.php");
            }
        }

}
}


?>