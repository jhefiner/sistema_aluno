<?php

	include('cabecalho_conexao.php');
	
	$SQL = "SELECT * FROM pessoas";
	
	// Executa o comando SQL
	$dados_recuperados = mysqli_query($con, $SQL);

	if(mysqli_num_rows($dados_recuperados) > 0){
		
		while( ($resultado = mysqli_fetch_array($dados_recuperados)) != null) {
			
			echo $resultado[0] . " -" . $resultado[1] . " - " . $resultado[2] . "<br>";
		}		
	}
	
	mysqli_close($con);
?>