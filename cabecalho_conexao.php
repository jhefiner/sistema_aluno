<?php

	// Crio a conexão do PHP com o Banco de Dados
	$con = mysqli_connect("localhost", "Jhenifer", "teste");
	if(!$con) {
		echo mysqli_connect_error($con);
	}

	// Seleciona o banco de dados
	$db = mysqli_select_db($con, "alunos");
	if(!$db) {
		echo mysqli_error($con);
	}
?>