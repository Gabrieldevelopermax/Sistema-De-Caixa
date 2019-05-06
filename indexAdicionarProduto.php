<!DOCTYPE html>
<html>
<head>
	<title>Adicionar Produtos</title>
</head>
<body>
	<form action="OkProdutoAdicionado.php" method="POST" role="form">
	Digite o nome do produtor<input type="text" name="nomeProduto" placeholder="Ex. tenis,celular,televisão" ><br><br>
	Preco do produto<input type="number" step="0.01"name="precoProduto" placeholder="Ex. 50,10" ><br><br>
	Categoria do Produto<select name="categoria">
				<option value="eletronico">Eletronico</option>
				<option value="Comida">Comida</option>
				<option value="Roupa">Roupa</option>
				<option value="Bazar">Bazar</option>
		</select>
	<button type="submit">Enviar</button>

</body>
</html>