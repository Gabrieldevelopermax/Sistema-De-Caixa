<?php  

$id=$_POST['pesquisa'];
$nome=$_POST['opcao'];

if(isset($id)){
	$conn = new PDO("mysql:host=localhost;dbname=caixa","root","");
	$stmt=$conn->prepare("SELECT * FROM produtos");
	$stmt->execute();
	while($result=$stmt->fetch(PDO::FETCH_ASSOC)){
		if ($result['id']===$id) {
		$conn = new PDO("mysql:host=localhost;dbname=caixa","root","");
		$stmt=$conn->prepare("DELETE FROM produtos WHERE ID= :ID");
		$stmt->bindParam(":ID",$id);
		$stmt->execute();
		echo"Produto vendido";
		}elseif ($result['nome']===$id) {
			$conn = new PDO("mysql:host=localhost;dbname=caixa","root","");
		$stmt=$conn->prepare("DELETE FROM produtos WHERE NOME= :NOME");
		$stmt->bindParam(":NOME",$id);
		$stmt->execute();
		echo"Produto vendido";
		}

 	}
}



?>