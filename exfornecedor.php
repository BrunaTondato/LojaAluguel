<?php

 /* este script será utilizado para excluir função cadastrados */


 
	/* recebe o código da funcao que terá as informações excluidas */
	$idFornecedores = $_GET["idFornecedores"];
	//acesso ao banco de dados
    include "funcoesbd.php";
    $conn = conecta_bd();
	excluir_fornecedor_bd($conn,$idFornecedores);	

?> 