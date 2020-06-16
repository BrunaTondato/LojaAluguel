<?php

/* este script será utilizado para excluir cliente cadastrados */


	/* recebe o código da funcao que terá as informações excluidas */
	$codigo = $_GET["idFuncao"];
	//acesso ao banco de dados
	include "funcoesbd.php";
	$conexao = conecta_bd();
	excluir_funcao_bd($conexao,$codigo);	

?>