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
    $email= $_POST["textEmail"];
    $cpf = $_POST["textCpf"];
    $cargo = $_POST["textCargo"];
    $sql = "INSERT INTO `dbcrud`.`tb_funcionarios` (`nome_funcionario`, `email`, `cpf`, `cargo`) VALUES ('$nome','$email','$cpf','$cargo');";
//exit(var_dump("<pre>",$sql));
if($conexao->query($sql)){
    print_r("Funcionário inserido com sucesso");
}
else{
    print_r("Erro ao inserir funcionário. ".$conexao->error);
}
}

function atualizarUsuario()
{
    global $conexao;
    $nome = $_POST["textName"];
    $email= $_POST["textEmail"];
    $cpf = $_POST["textCpf"];
    $cargo = $_POST["textCargo"];
    $sql = "update `dbcrud`.`tb_funcionarios` set `nome_funcionario`='$nome', `email`='$email', `cargo`='$cargo' 
            where cpf = '" . $cpf . "'";

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
    $sql = "delete from tb_funcionarios where cpf = '" . $_POST["textCpf"] . "'";
    if ($conexao->query($sql)) {
        $msg = "Deletado com sucesso!";
    } else {
        $msg = "Erro ao deletar!" . $conexao->error;
    }
    print_r($msg);
}
