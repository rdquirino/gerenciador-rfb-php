<?php
	require_once("cabecalho.php");
	require_once("class/Socio.php");
	require_once("logica-usuario.php");
	require_once("class/SocioDao.php");

	verificaUsuario();

	$cpf = $_POST['cpf'];

	$socio = new Socio("", "", "");
	$socioDao = new SocioDao($conexao);

	$socio = $socioDao->buscaSocioPorCpf($cpf);
	
 	if($socio){
		include("socio-resultado-pesquisa.php");
 	}else{
 		include("alerta-pesquisa-sem-resultado-socio.php");
 	}
?>

<?php include("rodape.php"); ?>