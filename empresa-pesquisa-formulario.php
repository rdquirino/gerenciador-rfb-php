<?php
	require_once("cabecalho.php");
	require_once("banco-empresa.php");
	require_once("logica-usuario.php");

	verificaUsuario();
?>

	<h1>Pesquisa Empresa</h1>
	<form action="pesquisa-empresa.php?cnpj" method="post">
		<div class="container">
			<div class="row">
				<div class="col-ms-1">
					CNPJ:
				</div>
				<div class="col-ms-6">
					<input class="form-control" type="text" name="cnpj">
				</div>
			</div>
			<div class="row">
				<div class="col-ms-12">
					<button class="btn btn-primary" type="submit">Pesquisar</button>
				</div>
			</div>
		</div>
	</form>

<?php include("rodape.php"); ?>