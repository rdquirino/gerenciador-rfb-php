<div class="container">
	
<div class="row">
	<div class="alert alert-success">
		<h1>Resultado da Pesquisa</h1>	
	</div>
</div>

<div class="row">
	<table class="table table-hover">
		<tr>
			<th>Nome do Sócio</th>
			<th>CPF</th>
			<th>Email</th>
		</tr>
		<tr>
			<td><?=$socio->getNome()?></td>
			<td><?=$socio->getCpf()?></td>
			<td><?=$socio->getEmail()?></td>
		</tr>
	</table>
</div>
<div class="row">
	<a href="socio-pesquisa-formulario.php" class="btn btn-primary" type="submit">Voltar</a>
</div>
</div>