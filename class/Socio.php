<?php

class Socio {

	private $id;
	private $nome;
	private $cpf;
	private $email;

	function __construct($nome, $cpf, $email) {
		$this->nome = $nome;
		$this->cpf = $cpf;
		$this->email = $email;
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

	public function getCpf(){
		return $this->cpf;
	}

	public function setCpf($cpf){
		$this->cpf = $cpf;
	}

		public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	function __toString() {
		return $this->nome.": ".$this->cpf;
	}
}

?>