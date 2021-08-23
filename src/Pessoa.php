<?php

namespace Projeto\Autoload;

class Pessoa{
	
	private  $nome;
	private  $idade;
	
	public function __construct( $nome,  $idade)
	{
		$this->nome = $nome;
		$this->idade = $idade;
	}
	// metodo Get
	public function recuperaNome(){
		return $this->nome;
	}
	
	public function recuperaIdade(){
		return $this->idade;
	}
}

?>