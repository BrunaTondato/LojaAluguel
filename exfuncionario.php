
<?php

/* este script será utilizado para excluir função cadastrados */


   /* recebe o código da funcao que terá as informações excluidas */
   $codigo = (int)$_GET["idFuncionario"];
   //acesso ao banco de dados
   include "funcoesbd.php";
   $conn = conecta_bd();
   excluir_funcionario_bd($conn,$codigo);	

?> 