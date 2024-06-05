<?php
require("conexao.php");
$nome = $_POST['nome'];
$valor = $_POST['valor'];
$tipo = $_POST['tipo'];
$insertmedicamentos = "INSERT INTO medicamentos(nome, valor, tipo) VALUES
('$nome','$valor','$tipo')";
$operacaoSQL = mysqli_query($conexao, $insertmedicamentos);
if (mysqli_affected_rows($conexao) != 0) {
echo "Medicamento cadastrado com Sucesso!";
 header("Location: listamedicamentos.php");
} else {
echo " O Medicamento não foi cadastrado com Sucesso!";
header("Location: listamedicamentos.php");
}