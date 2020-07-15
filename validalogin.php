<?php
	header('Content-type: text/html; charset=ISO-8859-1');
	//serve para saber se uma variável é vazia.
<<<<<<< HEAD
	/*$login = $_POST["login"];
	$senha = $_POST["senha"];
	var_dump($login,$senha);*/

	if ((empty($_POST['login']) OR empty($_POST['senha']))) {
        header("Location: login.php"); 
        
=======
	if ((empty($_POST['login']) OR empty($_POST['senha']))) {
        header("Location: login.php"); 
>>>>>>> 8673d6da4a786cd9a1ff2ef79cccb2f4e18b224a
    }

	else{
		
		$login = $_POST["login"];
		$senha = $_POST["senha"];
		
		include "funcoesbd.php";
				
		$conn = conecta_bd();
	
		$consulta_usu = consulta_usu_bd($login,$senha,$conn);
		
		//testa se a consulta retornou algum registro
<<<<<<< HEAD

=======
>>>>>>> 8673d6da4a786cd9a1ff2ef79cccb2f4e18b224a
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
	






