<tr>
	<td>Nome: <span class="red">*</span></td>
	<td>
		<input class="form-control" type="text" name="nome" required
			value="<?=$empresa->getNome()?>">
	</td>
</tr>
<tr>
	<td>CNPJ: <span class="red">*</span></td>
	<td>
		<input class="form-control" type="text" name="cnpj" required 
			value="<?=$empresa->getCnpj()?>">
	</td>
</tr>