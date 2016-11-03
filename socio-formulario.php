<?php
	require_once("cabecalho.php");
	require_once("logica-usuario.php");
	require_once("class/Socio.php");

	verificaUsuario();

	$socio = new Socio("", "", "");

?>	

<h1>Formulário de Socio</h1>
<form action="adiciona-socio.php" method="post">
	<table class="table">
		
		<?php include("socio-formulario-base.php"); ?>

		<tr>
			<td>
				<button class="btn btn-primary" type="submit">Cadastrar</button>
			</td>
		</tr>
	</table>
</form>

<?php include("rodape.php"); ?>
