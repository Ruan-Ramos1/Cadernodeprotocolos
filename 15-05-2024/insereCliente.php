<?php
require("conexao.php");

$nome = $_POST['Nome'];
$endereco = $_POST['Endereco'];
$telefone = $_POST['Telefone'];

$insereCliente = "INSERT INTO 
cliente (Nome,Endereco,Telefone)
VALUES ('$nome', '$endereco', '$telefone')";

$OperacaoSQL = mysqli_query($conexao,$insereCliente);

if(mysqli_affected_rows($conexao) != 0){
    echo "Cliente cadastrado com sucesso!";
} else {
    echo "O Cliente não foi cadastrado com Sucesso!";
    header("Location: listaCliente.php");
}
?>