<?php
	require_once("cabecalho.php");
	require_once("banco-empresa.php");
	require_once("class/Empresa.php");

	$cnpj = $_POST['cnpj'];

	$empresa = new Empresa("", "");

	$empresa = buscaEmpresaPorCnpj($conexao, $cnpj);
	
 	if($empresa){
		include("empresa-resultado-pesquisa.php");
 	}else{
 		include("alerta-pesquisa-sem-resultado-empresa.php");
 	}
?>

<?php include("rodape.php"); ?>