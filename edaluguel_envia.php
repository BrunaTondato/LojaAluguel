<?php
	     
		//obtém os valores digitados
		$idAlugueis = $_POST["idAlugueis"];
		$descricao = $_POST["descricao"];
		$valor = $_POST["valor"];
		$desconto = $_POST["desconto"];
		$valorFinal = $_POST["valorFinal"];
		$data = $_POST["data"];
		$funcionario = $_POST["funcionario"];
		$cliente = $_POST["cliente"];
		$traje = $_POST["traje"];
		//acesso ao banco de dados
		include "funcoesbd.php";
		$conexao = conecta_bd();
		editar_aluguel_bd($conexao,$idAlugueis,$descricao,$valor,$desconto,$valorFinal,$data,$funcionario,$cliente,$traje);
					
?>



