<?php
	     
		//obtém os valores digitados
		$idFuncionario = $_POST["idFuncionario"];
		$nome = $_POST["nome"];
		$telefone = $_POST["telefone"];
		$email = $_POST["email"];
		$endereco = $_POST["endereco"];
		$dataNascimento = $_POST["dataNascimento"];
		$cpf = $_POST["cpf"];
		$rg = $_POST["rg"];
		$dataAdmissao = $_POST["dataAdmissao"];
		$dataDemissao  = $_POST["dataDemissao"];
		$salario = $_POST["salario"];
		$login = $_POST["login"];
		$senha = $_POST["senha"];
		$funcao = $_POST["funcao"];
		//acesso ao banco de dados
		include "funcoesbd.php";
		$conexao = conecta_bd();
		editar_funcionario_bd($conexao,$idFuncionario,$nome,$telefone,$email,$endereco,$dataNascimento,$cpf,$rg,$dataAdmissao,$dataDemissao,$salario,$login,$senha,$funcao);
					
?>



