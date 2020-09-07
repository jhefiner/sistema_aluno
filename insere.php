<?php

	//Capturei as informações do formulário
	$nome = $_POST['nome'];
	$endereco = $_POST['endereco'];
	$idade = $_POST['idade'];
	
	//Abrindo conexão com o BD
	include('cabecalho_conexao.php');
	
	$SQL = "INSERT INTO pessoas (nome, endereco, idade) 
			VALUE ('$nome', '$endereco', $idade)";
			
	$texto = "Aluno Inserido com Sucesso<br>";
	
	include('rodape_conexao.php');
?>