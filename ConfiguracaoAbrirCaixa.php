<?php
	require_once"Caixa.php";
	
	$u=new Caixa();
	
	$inicial=$_POST['valor'];
	
	$u->AbrirCaixa($inicial);

	echo"<h1>Valor Inicial de $inicial reais inserido com sucesso</h1>";
	
?>
<!DOCTYPE html>
<html>

<head>
		<meta charset="utf-8">
		<title>Abertura do caixa</title>
</head>
<body>
		<a href="indexPOsCaixaAberto.php">Clique para Voltar ao Menu inicial</a><br><br>


</body>
</html>