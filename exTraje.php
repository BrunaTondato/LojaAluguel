<?php

 /* este script será utilizado para excluir função cadastrados */


	/* recebe o código da funcao que terá as informações excluidas */
	$codigo = (int)$_GET["idTrajes"];
	//acesso ao banco de dados
	include "funcoesbd.php";
	$conn = conecta_bd();
	excluir_traje_bd($conn,$codigo);	

?> 