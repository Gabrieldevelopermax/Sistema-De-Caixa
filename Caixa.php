<?php 

class Caixa{

	private $saldoInicial;
	private $saldoFinal;
	private $vendasDia;
	private $verificaSeFoiAbertoCaixa;
	
	public function __construct(){
		$conn= new PDO("mysql:host=localhost;dbname=caixa","root","");
	}

	public function AbrirCaixa($n){
		$verificaSeFoiAbertoCaixa=1;
		


	}
	public function FecharCaixa(){
		

	}
	public function VenderP(){


	}
	public function Cobrar(){


	}


}



 ?>