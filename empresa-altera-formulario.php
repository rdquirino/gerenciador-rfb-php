<?php
	require_once("cabecalho.php");
	require_once("banco-empresa.php");

	$id = $_GET['id'];
	$empresa = buscaEmpresa($conexao, $id);
	$empresas = listaEmpresas($conexao);
?>

	<h1>Alterando empresa</h1>
	<form action="altera-empresa.php" method="post">
		<input type="hidden" name="id" value="<?=$empresa->getId()?>">
		<table class="table">
			<?php include("empresa-formulario-base.php"); ?>
			<tr>
				<td>
					<button class="btn btn-primary" type="submit">Alterar</button>
				</td>
			</tr>
		</table>
	</form>

<?php include("rodape.php"); ?>