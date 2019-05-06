<!DOCTYPE html>
<html>
<head>
	<title>Adicionar Produtos</title>
</head>
<body>
	<form action="configuracaoAdicionarProduto.php" method="POST" role="form">
	Digite o nome do produto    <input type="text" name="nomeProduto" placeholder="Ex. tenis,celular,televisão" ><br><br>
	Preco do produto   <input type="text" name="nomeProduto" placeholder="Ex. 30,00" ><br><br>
	Categoria do Produto<select name="Categoria">
				<option value="1">Eletronico</option>
				<option value="2">Alimento</option>
				<option value="3">Textil</option>
				<option value="4">Bazar</option>
				<option value="4">Moveis</option>
		</select>
	<button type="submit">Enviar</button>

</body>
</html>