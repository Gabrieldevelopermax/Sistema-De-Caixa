<?php

 	require_once"Estoque.php";
	$Consulta=$_POST['produto'];


	$b=new Estoque();
	$b->removerP($Consulta);


  ?>