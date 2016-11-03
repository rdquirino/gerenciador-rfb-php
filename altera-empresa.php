<?php
	require_once("cabecalho.php");
	require_once("logica-usuario.php");
	require_once("class/Empresa.php");
	require_once("class/EmpresaDao.php");

	verificaUsuario();

	$nome = $_POST['nome'];
	$cnpj = $_POST['cnpj'];

	$empresa = new Empresa($nome, $cnpj);
	$empresaDao = new EmpresaDao($conexao);

	$empresa->setId($_POST['id']);

	if($empresaDao->alteraEmpresa($empresa)) { ?>
		<p class="text-success">O empresa <?= $empresa->getNome() ?>, <?= $empresa->getCnpj() ?> foi alterado.</p>
	<?php 
	} else {
		$msg = mysqli_error($conexao);
	?>
		<p class="text-danger">O empresa <?= $empresa->getNome() ?> não foi alterado: <?= $msg?></p>
	<?php
	}
	?>

	<?php include("rodape.php"); ?>