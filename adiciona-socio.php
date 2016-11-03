<?php 
	require_once("cabecalho.php");
	require_once("logica-usuario.php");
	require_once("class/Socio.php");
	require_once("class/SocioDao.php");

	verificaUsuario();

	$nome = $_POST['nome'];
	$cpf = $_POST['cpf'];
	$email = $_POST['email'];


	$socio = new Socio($nome, $cpf, $email);
	$socioDao = new SocioDao($conexao);

	if($socioDao->insereSocio($socio)) { ?>
		<p class="text-success">O Sócio <?= $socio->getNome() ?>, <?= $socio->getCpf() ?> foi adicionado.</p>
	<?php 
	} else {
		$msg = mysqli_error($conexao);
	?>
		<p class="text-danger">O Sócio <?= $socio->getNome() ?> não foi adicionado: <?= $msg?></p>
	<?php
	}
	?>

<?php include("rodape.php"); ?>