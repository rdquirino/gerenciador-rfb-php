<?php
	require_once("cabecalho.php");
	require_once("class/Socio.php");
	require_once("class/SocioDao.php");
	require_once("logica-usuario.php");
	require_once("class/SocioDao.php");

	verificaUsuario();

	$nome = $_POST['nome'];
	$cpf = $_POST['cpf'];
	$email = $_POST['email'];

	$socio = new Socio($nome, $cpf, $email);
	$socio->setId($_POST['id']);

	$socioDao = new SocioDao($conexao);

	if($socioDao->alteraSocio($socio)) { ?>
		<p class="text-success">O socio <?= $socio->getNome() ?>, <?= $socio->getCpf() ?> foi alterado.</p>
	<?php 
	} else {
		$msg = mysqli_error($conexao);
	?>
		<p class="text-danger">O socio <?= $socio->getNome() ?> não foi alterado: <?= $msg?></p>
	<?php
	}
	?>

	<?php include("rodape.php"); ?>