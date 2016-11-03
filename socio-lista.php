<?php
	require_once("cabecalho.php");
	require_once("logica-usuario.php");
	require_once("class/SocioDao.php");

	verificaUsuario();
?>

<div class="container">
	<div class="row">
		<p><h1>Lista de Sócios Cadastrados</h1></p>
	</div>
</div>

<table class="table table-striped table-bordered">
	<?php
	$socioDao = new SocioDao($conexao);
	$socios = $socioDao->listaSocios();
	foreach($socios as $socio) :
	?>
		<tr>
			<td class="center"><?= $socio->getNome() ?></td>
			<td class="center"><?= $socio->getCpf() ?></td>
			<td class="center">
				<a class="btn btn-primary" href="socio-altera-formulario.php?id=<?=$socio->getId()?>">
					Alterar
					<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
				</a>
			</td>
			<td class="center">
				<form action="remove-socio.php" method="post">
					<input type="hidden" name="id" value="<?=$socio->getId()?>">
					<button class="btn btn-danger">
						Remover
						<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
					</button>
				</form>
			</td>
		</tr>
	<?php
	endforeach
	?>	
</table>

<?php include("rodape.php"); ?>