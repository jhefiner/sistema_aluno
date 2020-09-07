<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Sistema alunos</title>
	</head>
	<body>
		<?php
			if(empty($_POST)){
				include 'inc/formulario.inc';
			}else{
				include('cabecalho_conexao.php');
				
				$ra = $_POST['ra'];
				$SQL = "SELECT * FROM pessoas WHERE id = $ra";
				
				// Executa o comando SQL
				$dados_recuperados = mysqli_query($con, $SQL);

				if(mysqli_num_rows($dados_recuperados) > 0){
						while( ($resultado = mysqli_fetch_array($dados_recuperados)) != null) {
			
							echo $resultado[0] . " -" . $resultado[1] . " - " . $resultado[2];
						}	
				}else{
					echo"Não existe esse RA";
					echo"</br><a href=index.php> Voltar </a>";
				}
				
				mysqli_close($con);
			}
				
		?>
	</body>
</html>