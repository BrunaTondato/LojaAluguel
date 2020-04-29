<?php
	     
		//obtém os valores digitados
		$idFuncao = $_POST["idFuncao"];
		$nome = $_POST["nome"];
		
		
		//acesso ao banco de dados
		include "funcoesbd.php";
		$conn = conecta_bd();
		editar_funcao_bd($conexao,$idFuncao,$nome);
					
?>



