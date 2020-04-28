<?php
	     
		//obtém os valores digitados
		$idFornecedores = $_POST["idFornecedores"];
		$nome = $_POST["nome"];
		$endereco = $_POST["endereco"];
		$telefone = $_POST["telefone"];
		$cnpj = $_POST["cnpj"];
		$email = $_POST["email"];
		$cep = $_POST["cep"];
		
		//acesso ao banco de dados
		include "funcoesbd.php";
		$conexao = conecta_bd();
		editar_fornecedor_bd($conexao,$idFornecedores,$nome,$endereco,$telefone,$cnpj,$email,$cep);
					
?>



