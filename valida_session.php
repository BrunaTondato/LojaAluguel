
<?php
session_start();
 
//Caso o usu�rio n�o esteja autenticado, limpa os dados e redireciona
if ( !isset($_SESSION['usuario']) and !isset($_SESSION['senha']) ) {
    //Limpa
    unset ($_SESSION['login']);
    unset ($_SESSION['senha']);
	
	//Destr�i
    session_destroy();
 
    //Redireciona para a p�gina de autentica��o
    header ("Location:index.php");
}


?>