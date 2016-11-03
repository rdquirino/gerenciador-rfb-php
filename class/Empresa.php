<?php

class Empresa {

	private $id;
	private $nome;
	private $cnpj;

	function __construct($nome, $cnpj) {
		$this->nome = $nome;
		$this->cnpj = $cnpj;
	}

	public function getId() {
		return $this->id;
	}

	public function setId($id) {
		$this->id = $id;
	}

	public function getNome() {
		return $this->nome;
	}

	public function getCnpj(){
		return $this->cnpj;
	}

	public function setCnpj($cnpj){
		$this->cnpj = $cnpj;
	}

	function __toString() {
		return $this->nome.": ".$this->cnpj;
	}
}

?>