<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Consulta todos os alunos</title>
	</head>
	<body>
		<?php

		include('cabecalho_conexao.php');

		$SQL = "SELECT * FROM pessoas";

		// Executa o comando SQL
		$dados_recuperados = mysqli_query($con, $SQL);

		if(mysqli_num_rows($dados_recuperados) > 0){

			echo'<table border="1">
					<tr>
						<th>RA</th>
						<th>Nome</th>
						<th>Idade</th>
						<th>Endereço</th>
						<th colspan="2">Operações</th>
					</tr>';
			
			while( ($resultado = mysqli_fetch_array($dados_recuperados)) != null) {
				
				echo '<tr>
							<td>'.$resultado[0].'</td>
							<td>'.$resultado[1].'</td>
							<td>'.$resultado[2].'</td>
							<td>'.$resultado[3].'</td>
							<td><a href="remover_aluno.php?pront='.$resultado[0].'">Remover</a></td>
							<td><a href="editar_aluno.php?pront='.$resultado[0].'">Editar</a></td>
					</tr>';
			}
			
			echo '</table>';
		}

		mysqli_close($con);
		?>
	</body>
</html>
