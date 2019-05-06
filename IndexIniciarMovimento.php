<!DOCTYPE html>
<html>
<head>
	<title>Movimento Do caixa</title>
</head>
<body>
	<form action="IniciarMovimento.php" method="POST" role="form">
	<h1>Escolha o Codigo ou o nome do Produto a ser vendido </h1>
	<select name="opcao">
		<option value="id">ID</option><br>
		<option value="nome">NOME</option>
	</select>
	<input type="text" name="pesquisa">
	<button type="submit">Registrar</button>
	</form>
	
</body>
</html>