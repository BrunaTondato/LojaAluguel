<?php
    // Faz o usuario sair da aplicação
    session_start();
   if(isset($_SESSION['id'])){
        session_unset();
        session_destroy();
        header('location: login.php');
   }
    

?>