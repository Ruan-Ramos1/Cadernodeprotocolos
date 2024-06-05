<?php
require("conexao.php");
$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$idade = $_POST['idade'];
$telefone = $_POST['telefone'];
$insereCliente = "INSERT INTO cliente(nome, endereco, idade, telefone) VALUES
('$nome','$endereco','$idade', '$telefone')";
$operacaoSQL = mysqli_query($conexao, $insereCliente);
if (mysqli_affected_rows($conexao) != 0) {
echo "Cliente cadastrado com Sucesso!";
 header("Location: listaCliente.php");
} else {
echo " O Cliente não foi cadastrado com Sucesso!";
header("Location: listaCliente.php");
}