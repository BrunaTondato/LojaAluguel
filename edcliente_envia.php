<?php
	     
		//obtém os valores digitados
		$idClientes = $_POST["idClientes"];
		$nome = $_POST["nome"];
		$endereco = $_POST["endereco"];
		$telefone = $_POST["telefone"];
		$dataNascimento = $_POST["dataNascimento"];
		$cpf = $_POST["cpf"];
		$cep = $_POST["cep"];
		$email = $_POST["email"];
		$funcionario = $_POST["funcionario"];
		//acesso ao banco de dados
		include "funcoesbd.php";
		$conexao = conecta_bd();
		editar_cliente_bd($conexao,$idClientes,$nome,$endereco,$telefone,$dataNascimento,$cpf,$cep,$email,$funcionario);
					
?>



