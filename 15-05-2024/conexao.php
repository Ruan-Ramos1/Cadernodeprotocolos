<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "mercado";

$conexao = mysqli_connect($servidor,$usuario,$senha,$dbname);

if(!$conexao){
    die("Erro para conectar o banco de dados");
}

?>
