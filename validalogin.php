<?php

	if(!isset($_SESSION)) {
		session_start();
	}
	include "funcoesbd.php";

	if ((isset($_POST['login']) && !empty($_POST['login'])) && (isset($_POST['senha']) && !empty($_POST['senha']))) {

		$conn = conecta_bd();
		
		$login = $_POST["login"];
		$senha = $_POST["senha"];
		
		$consulta_usu = login($login,$senha,$conn);
		if($consulta_usu > 0){
			//$id = (int)$_SESSION['id']
			if (((int)$_SESSION['id']) == 2) {
				header ("Location: sistema.php");
			}else{
				header ("Location: sistema_funcionario.php");
			}	

			}else{
			$_SESSION['loginErro'] = "Prezado usuario, o login não foi realizado porque os dados digitados são inválidos.";
			header ("Location: login.php");
		}
	} else{
		$_SESSION['loginErro'] = "Prezado usuario, o login não foi realizado porque os dados digitados são inválidos.";
		header ("Location: login.php");
	}					
?>