<?php
	require_once("conecta.php");
	require_once("class/Empresa.php");

	/* Metodo responsavel por listar todas os um regitro na tabela empresa
	 * $conexao: A conexao com o banco de dados
	*/
	function listaEmpresas($conexao) {

		$empresas = array();
		$resultado = mysqli_query($conexao, "select * from empresas");

		while($empresa_array = mysqli_fetch_assoc($resultado)) {

			$nome = $empresa_array['nome'];
			$cnpj = $empresa_array['cnpj'];

			$empresa = new Empresa($nome, $cnpj);
			$empresa->setId($empresa_array['id']);

			array_push($empresas, $empresa);
		}

		return $empresas;
	}

	/* Metodo responsavel por inserir um regitro na tabela empresa
	 * $conexao: A conexao com o banco de dados
	 * $empresa: Valor que deve ser inserido no banco
	*/
	function insereEmpresa($conexao, Empresa $empresa) {
		$query = "insert into empresas (nome, cnpj) 
			values ('{$empresa->getNome()}', '{$empresa->getCnpj()}')";

		return mysqli_query($conexao, $query);
	}

	/* Metodo responsavel por alterar um regitro na tabela empresa
	 * $conexao: A conexao com o banco de dados
	 * $empresa: Valor que deve ser alterado no banco
	*/
	function alteraEmpresa($conexao, Empresa $empresa) {
		$query = "update empresas set nome = '{$empresa->getNome()}', cnpj = '{$empresa->getCnpj()}'
			where id = '{$empresa->getId()}'";


		return mysqli_query($conexao, $query);
	}

	/* Metodo responsavel por buscar um regitro usando o id como parametro
	 * $conexao: A conexao com o banco de dados
	 * $id: Valor usando como parametro da busca
	*/
	function buscaEmpresa($conexao, $id) {

		$query = "select * from empresas where id = {$id}";
		$resultado = mysqli_query($conexao, $query);
		$empresa_buscado = mysqli_fetch_assoc($resultado);

		$nome = $empresa_buscado['nome'];
		$cnpj = $empresa_buscado['cnpj'];

		$empresa = new Empresa($nome, $cnpj);
		$empresa->setId($empresa_buscado['id']);

		return $empresa;
	}

	/* Metodo responsavel por buscar um regitro usando o CNPJ como parametro
	 * $conexao: A conexao com o banco de dados
	 * $cnpj: Valor usando como parametro da pesquisa
	*/
	function buscaEmpresaPorCnpj($conexao, $cnpj) {

		$query = "select * from empresas where cnpj = {$cnpj}";
		$resultado = mysqli_query($conexao, $query);
		
		if(!$resultado){
			return;
		}

		$empresa_buscado = mysqli_fetch_assoc($resultado);

		$nome = $empresa_buscado['nome'];
		$cnpj = $empresa_buscado['cnpj'];
		$id   = $empresa_buscado['id'];

		$empresa = new Empresa($nome, $cnpj);
		$empresa->setId($id);

		return $empresa;
	}

	/* Metodo responsavel por remover um regitro usando o id como parametro
	 * $conexao: A conexao com o banco de dados
	 * $id: Valor que deve ser removido no banco
	*/
	function removeEmpresa($conexao, $id) {

		$query = "delete from empresas where id = {$id}";

		return mysqli_query($conexao, $query);
	}