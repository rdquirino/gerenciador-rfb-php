<?php
	require_once("cabecalho.php");
	require_once("logica-usuario.php");
	require_once("class/EmpresaDao.php");

	verificaUsuario();


	$empresaDao = new EmpresaDao($conexao);

	$id = $_POST['id'];
	$empresaDao->removeEmpresa($id);
	$_SESSION["success"] = "Empresa removido com sucesso.";
	header("Location: empresa-lista.php");
	die();

?>