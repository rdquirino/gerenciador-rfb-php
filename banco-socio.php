<?php
	require_once("conecta.php");
	require_once("class/Socio.php");

	/* Metodo responsavel por listar todas os um regitro na tabela socios
	 * $conexao: A conexao com o banco de dados
	*/
	function listaSocios($conexao) {

		$socios = array();
		$resultado = mysqli_query($conexao, "select * from socios");

		while($socio_array = mysqli_fetch_assoc($resultado)) {

			$nome = $socio_array['nome'];
			$cpf = $socio_array['cpf'];
			$email = $socio_array['email'];

			$socio = new Socio($nome, $cpf, $email);
			$socio->setId($socio_array['id']);

			array_push($socios, $socio);
		}

		return $socios;
	}

	/* Metodo responsavel por inserir um regitro na tabela socios
	 * $conexao: A conexao com o banco de dados
	 * $socio: Valor que deve ser inserido no banco
	*/
	function insereSocio($conexao, Socio $socio) {
		$query = "insert into socios (nome, cpf, email) 
			values ('{$socio->getNome()}', '{$socio->getCpf()}', '{$socio->getEmail()}')";

		return mysqli_query($conexao, $query);
	}

	/* Metodo responsavel por alterar um regitro na tabela socio
	 * $conexao: A conexao com o banco de dados
	 * $socio: Valor que deve ser alterado no banco
	*/
	function alteraSocio($conexao, Socio $socio) {
		$query = "update socios set nome = '{$socio->getNome()}', cpf = '{$socio->getCpf()}', email = '{$socio->getEmail()}'
			where id = '{$socio->getId()}'";


		return mysqli_query($conexao, $query);
	}

	/* Metodo responsavel por buscar um regitro usando o id como parametro
	 * $conexao: A conexao com o banco de dados
	 * $id: Valor usado como parametro da pesquisa
	*/
	function buscaSocio($conexao, $id) {

		$query = "select * from socios where id = {$id}";
		$resultado = mysqli_query($conexao, $query);
		$socio_buscado = mysqli_fetch_assoc($resultado);

		$nome = $socio_buscado['nome'];
		$cpf = $socio_buscado['cpf'];
		$email = $socio_buscado['email'];

		$socio = new Socio($nome, $cpf, $email);
		$socio->setId($socio_buscado['id']);

		return $socio;
	}

	/* Metodo responsavel por buscar um regitro usando o CNPJ como parametro
	 * $conexao: A conexao com o banco de dados
	 * $cpf: Valor usado como parametro da pesquisa
	*/
	function buscaSocioPorCpf($conexao, $cpf) {

		$query = "select * from socios where cpf = {$cpf}";
		$resultado = mysqli_query($conexao, $query);
		
		if(!$resultado){
			return;
		}

		$socio_buscado = mysqli_fetch_assoc($resultado);

		$nome 	= $socio_buscado['nome'];
		$cpf  	= $socio_buscado['cpf'];
		$email  = $socio_buscado['email'];
		$id   	= $socio_buscado['id'];

		$socio = new Socio($nome, $cpf, $email);
		$socio->setId($id);

		return $socio;
	}

	/* Metodo responsavel por remover um regitro usando o id como parametro
	 * $conexao: A conexao com o banco de dados
	 * $id: Valor que deve ser removido no banco
	*/
	function removeSocio($conexao, $id) {

		$query = "delete from socios where id = {$id}";

		return mysqli_query($conexao, $query);
	}