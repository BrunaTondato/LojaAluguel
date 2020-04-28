
<?php
session_start();
 
//Caso o usuário não esteja autenticado, limpa os dados e redireciona
if ( !isset($_SESSION['usuario']) and !isset($_SESSION['senha']) ) {
    //Limpa
    unset ($_SESSION['login']);
    unset ($_SESSION['senha']);
	
	//Destrói
    session_destroy();
 
    //Redireciona para a página de autenticação
    header ("Location:index.php");
}


?>