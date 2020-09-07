<?php
	include("cabecalho.inc.php");
?>

	<form action="insere.php" method="POST">
		<label>Nome:</label>
		<input type="text" name="nome" />
		<br>
		
		<label>Endereço:</label>
		<input type="text" name="endereco" />
		<br>
		
		<label>Idade:</label>
		<input type="number" name="idade" />
		<br>
		
		<input type="submit" value="Salvar" />
	</form>
		
<?php
	include("rodape.inc.php");
?>