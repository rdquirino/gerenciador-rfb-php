<tr>
	<td>Nome: <span class="red">*</span></td>
	<td>
		<input class="form-control" type="text" name="nome" required
			value="<?=$socio->getNome()?>">
	</td>
</tr>
<tr>
	<td>CPF: <span class="red">*</span></td>
	<td>
		<input class="form-control" type="text" name="cpf" required
			value="<?=$socio->getCpf()?>">
	</td>
</tr>
<tr>
	<td>Email: <span class="red">*</span></td>
	<td>
		<input class="form-control" type="email" name="email" required
			value="<?=$socio->getEmail()?>">
	</td>
</tr>