<?php
	     
		//obtém os valores digitados
		$idTrajes = $_POST["idTrajes"];
		$nome = $_POST["nome"];
		$descricao = $_POST["descricao"];
		$status = $_POST["status"];
		$funcionario = $_POST["funcionario"];
		$fornecedor = $_POST["fornecedor"];
		//acesso ao banco de dados
		include "funcoesbd.php";
		$conexao = conecta_bd();
		editar_traje_bd($conexao,$idTrajes,$nome,$descricao,$status,$funcionario,$fornecedor);
					
?>



