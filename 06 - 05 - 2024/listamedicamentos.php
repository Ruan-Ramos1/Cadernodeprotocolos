<?php
require 'conexao.php';
?>
<html lang="pt-BR">
<head>
<meta charset="utf-8">
<title>Listagem de Medicamentos</title>
</head>
<body>
<a href="index.html">Início</a>
<a href="cadastromedicmanentos.html">Cadastro</a>
<h4>Medicamentos cadastrados</h4>
<table>
<thead>
<tr>
<th>ID</th>
<th>Nome</th>
<th>Valor</th>
<th>Tipo</th>
</tr>
</thead>
<tbody>
<?php
$consulta = "SELECT * FROM medicamentos";
$executaConsulta = mysqli_query($conexao, $consulta);
if (mysqli_num_rows($executaConsulta) > 0) {
foreach ($executaConsulta as $medicamentos) {
?>
<tr>
<td><?= $medicamentos['id']; ?></td>
<td><?= $medicamentos['nome']; ?></td>
<td><?= $medicamentos['valor']; ?></td>
<td><?= $medicamentos['tipo']; ?></td>
</tr>
<?php
}
} else {
echo "Nenhum medciamento cadastrado.";
}
?>
</tbody>
</table>
</body>
</html>