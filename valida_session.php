<?php
    if(session_status() !== PHP_SESSION_ACTIVE) { 
	session_start(); 
}
    //Caso o usuário não esteja autenticado, limpa os dados e redireciona
    if (!isset($_SESSION['id'])) {
        header ("Location:login.php");
    }
?>