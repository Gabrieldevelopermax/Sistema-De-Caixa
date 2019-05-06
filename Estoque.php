<?php
	
 class Estoque {

 	


	public function __construct(){
		$this->conn= new PDO("mysql:host=localhost;dbname=caixa","root","");//todos já estao conectados

	}
	public function adicionarP($produto,$valor,$descri){// adiciona os produtos do banco de dados 
		
		
		$stmt=$this->conn->prepare("INSERT INTO produtos(nome,valor,descricao) VALUES (:NOME,:PRECO,:DESCRICAO)  ");
		$stmt->bindParam(":NOME",$produto);
		$stmt->bindParam(":PRECO",$valor);
		$stmt->bindParam(":DESCRICAO",$descri);
		$stmt->execute();

  		echo"<b>O Produto:$produto "."<br>"."Com valor de: $valor reais "."<br>"."Da categoria: $descri "."<br>"."Foi Adicionado com Sucesso.</b>";

	}
	public function removerP($v){//Remove produto do banco de dados
		
		$stmt=$this->conn->prepare("SELECT * FROM produtos");
		$stmt->execute();
		while($result=$stmt->fetch(PDO::FETCH_ASSOC)){
			if ($result['nome']===$v) {                                          //compara variavel passada como parametro com todos nomes do BD
			$conn = new PDO("mysql:host=localhost;dbname=caixa","root","");
			$stmt=$conn->prepare("DELETE FROM produtos WHERE NOME= :NOME"); 
			$stmt->execute();
			echo"Produto excluido";
			}
		}
	}
	public function verificarP($t){ //Vem variavel POST a variavel de consulta
		
		$stmt=$this->conn->prepare("SELECT * FROM produtos");
		$stmt->execute();
		$verificador=false;// Verifica se o produto consultado existe
		
		while($result=$stmt->fetch(PDO::FETCH_ASSOC)){
			if ($result['nome']===$t) { //ele compara todas entradas nome no BD com o parametro mandado
				echo"Produto com id:  "."<b>".$result['id']."</b>"."<br>"." Nome: "."<b>".$result['nome']."</b>"."<br>"." Valor:"."<b>".$result['valor']."</b>"."<br>"." Categoria: ".$result['descricao']."<br>"." Já existe";//exibe o resultado se for encontrado
				$verificador=true;//muda a variavel para mostrar existencia do produto pesquisado
			}elseif ($result['id']===$t) {
				echo"Produto com id:  "."<b>".$result['id']."</b>"."<br>"." Nome: "."<b>".$result['nome']."</b>"."<br>"." Valor:"."<b>".$result['valor']."</b>"."<br>"." Categoria: ".$result['descricao']."<br>"." Já existe";//exibe o resultado se for encontrado
				$verificador=true;//muda a variavel para mostrar existencia do produto pesquisado
			}
		}
		if($verificador===false){ //Se nao existir deixa como false e mostra Produto inexistente
			echo"Produto Inexistente";
		}
	}
	public function listarTodosProdutos(){// Mostra todos produtos do Banco de dados e seus respectivos valores
		
		$stmt=$this->conn->prepare("SELECT * FROM produtos");
		$stmt->execute();
		while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
  			echo"Codigo:".$result["id"]." "."<br>"."Nome do Produto:   "."<b>".$result["nome"]."<br>"."</b>"." de valor de    ".$result["valor"]." Reais "."<br>"."da categoria    ".$result["descricao"]."</b>"."<br>"."---------------------------------------------------"."<br>"; 


  		}

  		

	}
	



}




 ?>