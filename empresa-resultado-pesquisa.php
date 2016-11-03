<div class="container">
	
<div class="row">
	<div class="alert alert-success">
		<h1>Resultado da Pesquisa</h1>	
	</div>
</div>

<div class="row">
	<table class="table table-hover">
		<tr>
			<th>Nome da Empresa</th>
			<th>CNPJ</th>
		</tr>
		<tr>
			<td><?=$empresa->getNome()?></td>
			<td><?=$empresa->getCnpj()?></td>
		</tr>
	</table>
</div>
<div class="row">
	<a href="empresa-pesquisa-formulario.php" class="btn btn-primary" type="submit">Voltar</a>
</div>
</div>