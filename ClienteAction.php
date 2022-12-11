<?php
require_once("conecta.php");

if (isset($_POST["criar"])) {
    criarUsuario();
} else if (isset($_POST["atualizar"])) {
    atualizarUsuario();
} else if (isset($_POST["deletar"])) {
    deletarUsuario();
}

function criarUsuario()
{
    global $conexao;
    $nome = $_POST["textName"];
    $cnpj = $_POST["textCnpj"];
    $telefone = $_POST["textTelefone"];
    $email = $_POST["textEmail"];
    $sql = "INSERT INTO `dbcrud`.`tb_cliente` (`nome_fantasia`, `cnpj`, `telefone`, `email`) VALUES ('$nome','$cnpj','$telefone','$email')";

    if ($conexao->query($sql)) {
        print_r("Cliente inserido com sucesso");
    } else {
        print_r("Erro ao inserir cliente. " . $conexao->error);
    }
}

function atualizarUsuario()
{
    global $conexao;
    $nome = $_POST["textName"];
    $cnpj = $_POST["textCnpj"];
    $telefone = $_POST["textTelefone"];
    $email = $_POST["textEmail"];
    $sql = "update `dbcrud`.`tb_cliente` set `nome_fantasia`='$nome', `telefone`='$telefone', `email`='$email' 
            where cnpj = '" . $cnpj . "'";

    if ($conexao->query($sql)) {
        $msg = "Atualizado com sucesso!";
    } else {
        $msg = "Erro ao atualizar!" . $conexao->error;
    }
    print_r($msg);
}

function deletarUsuario()
{
    global $conexao;
    $sql = "delete from tb_cliente where cnpj = '" . $_POST["textCnpj"] . "'";
    if ($conexao->query($sql)) {
        $msg = "Deletado com sucesso!";
    } else {
        $msg = "Erro ao deletar!" . $conexao->error;
    }
    print_r($msg);
}
