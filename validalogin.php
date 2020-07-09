<?php
	header('Content-type: text/html; charset=ISO-8859-1');
	//serve para saber se uma variável é vazia.
	if ((empty($_POST['login']) OR empty($_POST['senha']))) {
        header("Location: login.php"); 
    }

	else{
		
		$login = $_POST["login"];
		$senha = $_POST["senha"];
		
		include "funcoesbd.php";
				
		$conn = conecta_bd();
	
		$consulta_usu = consulta_usu_bd($login,$senha,$conn);
		
		//testa se a consulta retornou algum registro
		if($consulta_usu == 0) 
		{
			echo "<script>window.location='login.php';alert('Prezado usuario, o login não foi realizado porque os dados digitados são inválidos.');</script>";
			
			header ("Location: sistema.php"); 

		}
		else
		{
			// Salva os dados encontrados na sessão
			session_start();
			$_SESSION['login'] = $login;
			$_SESSION['senha'] = $senha;

			header ("Location: sistema.php"); 
		}
	}
					
?>
	






