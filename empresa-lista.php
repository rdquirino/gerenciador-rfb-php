<?php
	require_once("cabecalho.php");
	require_once("banco-empresa.php");
	require_once("class/EmpresaDao.php");
	require_once("logica-usuario.php");

	verificaUsuario();
?>

<div class="container">
	<div class="row">
		<p><h1>Lista de Empresas Cadastradas</h1></p>
	</div>
</div>

<table class="table table-striped table-bordered">
	<?php
		$empresaDao = new EmpresaDao($conexao);
		$empresas = $empresaDao->listaEmpresas();
		foreach($empresas as $empresa) :
	?>
		<tr>
			<td class="center"><?= $empresa->getNome() ?></td>
			<td class="center"><?= $empresa->getCnpj() ?></td>
			<td class="center">
				<a class="btn btn-primary" href="empresa-altera-formulario.php?id=<?=$empresa->getId()?>">
					Alterar
					<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
				</a>
			</td>
			<td class="center">
				<form action="remove-empresa.php" method="post">
					<input type="hidden" name="id" value="<?=$empresa->getId()?>">
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