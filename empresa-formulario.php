<?php
	require_once("cabecalho.php");
	require_once("banco-empresa.php");
	require_once("logica-usuario.php");
	require_once("class/Empresa.php");

	verificaUsuario();

	$empresa = new Empresa("", "");

?>	

<h1>Formulário de Empresas</h1>
<form action="adiciona-empresa.php" method="post">
	<table class="table">
		
		<?php include("empresa-formulario-base.php"); ?>

		<tr>
			<td>
				<button class="btn btn-primary" type="submit">Cadastrar</button>
			</td>
		</tr>
	</table>
</form>

<?php include("rodape.php"); ?>
