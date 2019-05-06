<?php
		require_once"Estoque.php";
 		
 		$nome=$_POST['nomeProduto'];
		$preco=$_POST['precoProduto'];
		$descricao=$_POST['categoria'];

		$u=new Estoque();
		$u->adicionarP($nome,$preco,$descricao);
		


 ?>