<?php
	require_once("cabecalho.php");
	require_once("logica-usuario.php");
	require_once("class/SocioDao.php");

	verificaUsuario();

	$socioDao = new SocioDao($conexao);

	$id = $_GET['id'];
	$socio = $socioDao->buscaSocio($id);
	$socios = $socioDao->listaSocios();
?>

	<h1>Alterando socio</h1>
	<form action="altera-socio.php" method="post">
		<input type="hidden" name="id" value="<?=$socio->getId()?>">
		<table class="table">
			<?php include("socio-formulario-base.php"); ?>
			<tr>
				<td>
					<button class="btn btn-primary" type="submit">Alterar</button>
				</td>
			</tr>
		</table>
	</form>

<?php include("rodape.php"); ?>