<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"> <!-- traduz os código para caracteres latinos -->
    <title>Ale's Noivas</title>

    <meta name="author" content="Bruna e Natalia">
	<meta name="description" content="Website trata sobre aluguel de trajes para festas">
	<meta name="keywords" content="aluguel, vestidos"><!-- palavras que digitadas poderão levar ao seu site ser encontrado -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<!-- usada para reconhecer o bodstrap  é a tag mais importante a largura do site será igual a largura do dispositivo-->

	 <!-- css -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/all.css">
	<link rel="stylesheet" href="css/estilo.css">
	
	
	<!-- JAVASCRIPT -->
	<script src="js/jquery.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.mask.min.js"></script>
	
	<link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
	<!-- Favicon -->
	
	<link rel="shortcut icon" href="imagens/logo.png">



<!-- inicio do php -->

<?php 


function conecta_bd(){
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "lojaaluguel";
	
	//Criar a conexao
	$conn = mysqli_connect($host, $user, $pass, $db);
	return $conn;
}	

/********************************************************LOGAR********************************************/
 
function consulta_usu_bd($login,$senha,$conn){
	//Comando SQL
	$comando = "Select * From funcionarios Where login = '$login' and senha = '$senha'";
	//Executa os comandos SQL
	$resultado = mysqli_query($conn,$comando);
	 
	//Retorna o numero de linhas da consulta SQL (SELECT) executada
	$linha = mysqli_num_rows($resultado);
	/*$id = $linha->fetch();
	$_SESSION['id'] = $id['idFuncionario'];*/
	return $linha;

}
/***************************************************************************************************************/
function login($login,$senha,$conn){

	$comando = "Select * From funcionarios Where login = '$login' and senha = '$senha'";
	$resultado = mysqli_query($conn,$comando);


		if(mysqli_num_rows($resultado) > 0){
			foreach ($resultado as $key => $value) {
				$_SESSION['id'] = $value['idFuncionario'];
			}
			return true;
		}else{
			return false;
			exit();
		}        
	}

?>
<!-- /********************************************************LISTAR********************************************/ -->

<?php
function lista_funcao_bd($conn){ //passa a connexão
	
	$comando = "Select *
				From funcao
				order by nome";
	$resultado = mysqli_query($conn,$comando);
	while($dados = mysqli_fetch_array($resultado)){   //enquanto tiver dados me retorne
				$idFuncao = $dados["idFuncao"];
				$nome = $dados["nome"];
				
				echo '
				<tr class="tr">
				<td class="td">'.'<a href="edita_funcao.php?idFuncao='.$idFuncao.'"><img src="imagens/editar.png" alt="Consultar" title="Clique para editar os dados" width="20" height="20"></a>'.'</td>
				
				<td class="td" id="idFuncao">'. '<img src="imagens/excluir.png" alt="Excluir" onclick="Deletar('.$idFuncao.')" title="Clique para excluir os dados" width="20"height="20"></a>'.'</td>
				
				<td class="td">'.$dados["nome"].'</td>
				<td class="td">'.$dados["idFuncao"].'</td>
				</tr>';
				
				}
				}


/*******************************************************/

function lista_fornecedor_bd($conn){ //passa a connexão
	
	$comando = "Select *
				From fornecedores
				order by nome";
	$resultado = mysqli_query($conn,$comando);
	while($dados = mysqli_fetch_array($resultado)){   //enquanto tiver dados me retorne
				$idFornecedores = $dados["idFornecedores"];
				$nome = $dados["nome"];
				
				echo '
				<tr class="tr">
				<td class="td">'.'<a href="edita_fornecedor.php?idFornecedores='.$idFornecedores.'"><img src="imagens/editar.png" alt="Consultar" title="Clique para editar os dados" width="20" height="20"></a>'.'</td>
				<td class="td" id="idFornecedores">'. '<img src="imagens/excluir.png" alt="Excluir" onclick="DeletarFornecedores('.$idFornecedores.')" title="Clique para excluir os dados" width="20"height="20"></a>'.'</td>
				<td class="td">'.$dados["nome"].'</td>
				<td class="td">'.$dados["telefone"].'</td>
				<td class="td">'.$dados["endereco"].'</td>
			
				</tr>';
				
				}
				}
/************************************************/

function lista_funcionarios_bd($conn){ //passa a connexão
	
	$comando = "Select *
				From funcionarios
				order by nome";
	$resultado = mysqli_query($conn,$comando);
	while($dados = mysqli_fetch_array($resultado)){   //enquanto tiver dados me retorne
				$idFuncionario = $dados["idFuncionario"];
				
				
				
				echo '
				<tr class="tr">
				<td class="td">'.'<a href="edita_funcionarios.php?idFuncionario='.$idFuncionario.'"><img src="imagens/editar.png" alt="Consultar" title="Clique para editar os dados" width="20" height="20"></a>'.'</td>
				
				<td class="td" id="idFuncionario">'. '<img src="imagens/excluir.png" alt="Excluir" onclick="DeletarFuncionario('.$idFuncionario.')" title="Clique para excluir os dados" width="20"height="20"></a>'.'</td>
				<td class="td">'.$dados["nome"].'</td>
				<td class="td">'.$dados["idFuncionario"].'</td>
				</tr>';
				
				}
				}
/****************************************************/

function lista_clientes_bd($conn){ //passa a connexão
	
	$comando = "Select *
				From clientes
				order by nome";
	$resultado = mysqli_query($conn,$comando);
	while($dados = mysqli_fetch_array($resultado)){   //enquanto tiver dados me retorne
				$idClientes = $dados["idClientes"];
				
				
				echo '
				<tr class="tr">
				<td class="td">'.'<a href="edita_clientes.php?idClientes='.$idClientes.'"><img src="imagens/editar.png" alt="Consultar" title="Clique para editar os dados" width="20" height="20"></a>'.'</td>
				<td class="td" id="idClientes">'. '<img src="imagens/excluir.png" alt="Excluir" onclick="DeletarClientes('.$idClientes.')" title="Clique para excluir os dados" width="20"height="20"></a>'.'</td>
				<td class="td">'.$dados["nome"].'</td>
				<td class="td">'.$dados["telefone"].'</td>
				<td class="td">'.$dados["endereco"].'</td>
				</tr>';
				
				
				}
				}
/****************************************************/

function lista_trajes_bd($conn){ //passa a connexão
	
	$comando = "Select *
				From trajes
				order by nome";
	$resultado = mysqli_query($conn,$comando);
	while($dados = mysqli_fetch_array($resultado)){   //enquanto tiver dados me retorne
				$idTrajes = $dados["idTrajes"];
				
				
				echo '
				<tr class="tr">
				<td class="td">'.'<a href="edita_trajes.php?idTrajes='.$idTrajes.'"><img src="imagens/editar.png" alt="Consultar" title="Clique para editar os dados" width="20" height="20"></a>'.'</td>
				<td class="td" id="idTrajes">'. '<img src="imagens/excluir.png" alt="Excluir" onclick="DeletarTrajes('.$idTrajes.')" title="Clique para excluir os dados" width="20"height="20"></a>'.'</td>
				<td class="td">'.$dados["idTrajes"].'</td>
				<td class="td">'.$dados["nome"].'</td>
				<td class="td">'.$dados["descricao"].'</td>
				<td class="td">'.$dados["status"].'</td>
				
				</tr>';
				
				}
				}
				/****************************************************/

function lista_aluguel_bd($conn){ //passa a connexão
	
	$comando = "Select *
				From alugueis
				order by descricao";
	$resultado = mysqli_query($conn,$comando);
	while($dados = mysqli_fetch_array($resultado)){   //enquanto tiver dados me retorne
				$idAlugueis = $dados["idAlugueis"];
				
				
				echo '
				<tr class="tr">
				<td class="td">'.'<a href="edita_aluguel.php?idAlugueis='.$idAlugueis.'"><img src="imagens/editar.png" alt="Consultar" title="Clique para editar os dados" width="20" height="20"></a>'.'</td>
				<td class="td" id="idAlugueis">'. '<img src="imagens/excluir.png" alt="Excluir" onclick="DeletarAlugueis('.$idAlugueis.')" title="Clique para excluir os dados" width="20"height="20"></a>'.'</td>
				<td class="td">'.$dados["Trajes_idTrajes"].'</td>
				<td class="td">'.$dados["descricao"].'</td>
				<td class="td">'.$dados["data"].'</td>
				</tr>';
				
				}
				}
/*************************************************EDITAR*********************************************************************************/

function editar_funcao_bd($conn,$idFuncao,$nome){
	
	$comando = "Select * 
				From funcao
				Where idFuncao = '$idFuncao'";
					
	//Executa o comando SQL 
	$resultado = mysqli_query($conn,$comando);
	
	//Retorna o número de linhas da consulta SQL (SELECT) executada
	$linha = mysqli_num_rows($resultado);
	if($linha == 1){ //testa se a consulta retornou algum registro
	
	$comando = "UPDATE funcao
	SET nome = '$nome' where idFuncao = '$idFuncao'";
	$resultado = mysqli_query($conn,$comando);
	echo "<script>window.location='funcao.php';alert('Prezado usuario os dados da funcao $nome, foram alterados com sucesso no sistema.');</script>"; 
	}
}
/***********************************************************************************/
function consulta_editar_funcao($conn,$idFuncao){
	$comando = "Select *
				From funcao
				where idFuncao = '$idFuncao'";
	$resultado = mysqli_query($conn,$comando);
	return $dados = mysqli_fetch_array($resultado);
}

/********************************************************/
function editar_fornecedor_bd($conn,$idFornecedores,$nome,$endereco,$telefone,$cnpj,$email,$cep){
	
	$comando = "Select * 
				From fornecedores
				Where idFornecedores = '$idFornecedores'";
					
	//Executa o comando SQL 
	$resultado = mysqli_query($conn,$comando);
	
	//Retorna o número de linhas da consulta SQL (SELECT) executada
	$linha = mysqli_num_rows($resultado);
	if($linha == 1){ //testa se a consulta retornou algum registro
	
	$comando = "UPDATE fornecedores
	SET nome = '$nome',
		endereco = '$endereco',
		telefone = '$telefone', 
		cnpj = '$cnpj', 
		email = '$email', 
		cep = '$cep' 
		where idFornecedores = '$idFornecedores'";

	$resultado = mysqli_query($conn,$comando);
	echo "<script>window.location='fornecedor.php';alert('Prezado usuario os dados do fornecedor $nome, foram alterados com sucesso no sistema.');</script>"; 
	}
}
/***********************************************************************************/
function consulta_editar_fornecedor($conn,$idFornecedores){
	$comando = "Select *
				From fornecedores
				where idFornecedores = '$idFornecedores'";
	$resultado = mysqli_query($conn,$comando);
	return $dados = mysqli_fetch_array($resultado);
}


/********************************************************/
function editar_traje_bd($conn,$idTrajes,$nome,$descricao,$status,$funcionario,$fornecedor){
	
	$comando = "Select * 
				From trajes
				Where idTrajes = '$idTrajes'";
					
	//Executa o comando SQL 
	$resultado = mysqli_query($conn,$comando);
	
	//Retorna o número de linhas da consulta SQL (SELECT) executada
	$linha = mysqli_num_rows($resultado);
	if($linha == 1){ //testa se a consulta retornou algum registro
	
	$comando = "UPDATE trajes
	SET nome = '$nome',
		descricao = '$descricao',
		status = '$status',
		Funcionarios_idFuncionario = '$funcionario', 
		Fornecedores_idFornecedores = '$fornecedor' 
		where idTrajes = '$idTrajes'";

	$resultado = mysqli_query($conn,$comando);
	echo "<script>window.location='traje.php';alert('Prezado usuario os dados do traje $nome, foram alterados com sucesso no sistema.');</script>"; 
	}
}
/***********************************************************************************/
function consulta_editar_traje($conn,$idTrajes){
	$comando = "Select *
				From trajes
				where idTrajes = '$idTrajes'";
	$resultado = mysqli_query($conn,$comando);
	return $dados = mysqli_fetch_array($resultado);
}



/********************************************************/
function editar_funcionario_bd($conn,$idFuncionario,$nome,$telefone,$email,$endereco,$dataNascimento,$cpf,$rg,$dataAdmissao,$dataDemissao ,$salario,$login,$senha,$funcao){
	
	$comando = "Select * 
				From funcionarios
				Where idFuncionario = '$idFuncionario'";
					
	//Executa o comando SQL 
	$resultado = mysqli_query($conn,$comando);
	
	//Retorna o número de linhas da consulta SQL (SELECT) executada
	$linha = mysqli_num_rows($resultado);
	if($linha == 1){ //testa se a consulta retornou algum registro
	
	$comando = "UPDATE funcionarios
	SET nome = '$nome',
		telefone = '$telefone',
		email = '$email',
		endereco = '$endereco',
		dataNascimento = '$dataNascimento',
		cpf = '$cpf', 
		rg = '$rg', 
		dataAdmissao = '$dataAdmissao',
		dataDemissao = '$dataDemissao',
		salario = '$salario',
		login = '$login',
		senha = '$senha',
		Funcao_idFuncao = '$funcao'		
		where idFuncionario = '$idFuncionario'";

	$resultado = mysqli_query($conn,$comando);
	echo "<script>window.location='funcionario.php';alert('Prezado usuario os dados do funcionário(a) $nome, foram alterados com sucesso no sistema.');</script>"; 
	}
}
/***********************************************************************************/
function consulta_editar_funcionario($conn,$idFuncionario){
	$comando = "Select *
				From funcionarios
				where idFuncionario = '$idFuncionario'";
	$resultado = mysqli_query($conn,$comando);
	return $dados = mysqli_fetch_array($resultado);
}



/*********************************************************************/

function editar_cliente_bd($conn,$idClientes,$nome,$endereco,$telefone,$dataNascimento,$cpf,$cep,$email,$funcionario){
	
	$comando = "Select * 
				From clientes
				Where idClientes = '$idClientes'";
					
	//Executa o comando SQL 
	$resultado = mysqli_query($conn,$comando);
	
	//Retorna o número de linhas da consulta SQL (SELECT) executada
	$linha = mysqli_num_rows($resultado);
	if($linha == 1){ //testa se a consulta retornou algum registro
	
	$comando = "UPDATE clientes
	SET nome = '$nome',
		endereco = '$endereco',
		telefone = '$telefone',
		dataNascimento = '$dataNascimento',
		cpf = '$cpf', 
		cep = '$cep', 
		email = '$email',
		Funcionarios_idFuncionario = '$funcionario'		
		where idClientes = '$idClientes'";
		//var_dump($comando);exit;
	$resultado = mysqli_query($conn,$comando);
	echo "<script>window.location='cliente.php';alert('Prezado usuario os dados do(a) cliente $nome, foram alterados com sucesso no sistema.');</script>"; 
	}
}
/***********************************************************************************/

/*********************************************************************/

function editar_cliente_bd_restricao($conn,$idClientes,$nome,$endereco,$telefone,$dataNascimento,$cpf,$cep,$email,$funcionario){
	
	$comando = "Select * 
				From clientes
				Where idClientes = '$idClientes'";
					
	//Executa o comando SQL 
	$resultado = mysqli_query($conn,$comando);
	
	//Retorna o número de linhas da consulta SQL (SELECT) executada
	$linha = mysqli_num_rows($resultado);
	if($linha == 1){ //testa se a consulta retornou algum registro
	
	$comando = "UPDATE clientes
	SET nome = '$nome',
		endereco = '$endereco',
		telefone = '$telefone',
		dataNascimento = '$dataNascimento',
		cpf = '$cpf', 
		cep = '$cep', 
		email = '$email',
		Funcionarios_idFuncionario = '$funcionario'		
		where idClientes = '$idClientes'";
		//var_dump($comando);exit;
	$resultado = mysqli_query($conn,$comando);
	echo "<script>window.location='cliente_tela_funcionario.php';alert('Prezado usuario os dados do(a) cliente $nome, foram alterados com sucesso no sistema.');</script>"; 
	}
}
/**********************************************************************/




function consulta_editar_cliente($conn,$idClientes){
	$comando = "Select *
				From clientes
				where idClientes = '$idClientes'";
	$resultado = mysqli_query($conn,$comando);
	return $dados = mysqli_fetch_array($resultado);
}



/************************************************************************************/

function editar_aluguel_bd($conn,$idAlugueis,$descricao,$valor,$desconto,$valorFinal,$data,$funcionario,$cliente,$traje){
	
	$comando = "Select * 
				From alugueis
				Where idAlugueis = '$idAlugueis'";
					
	//Executa o comando SQL 
	$resultado = mysqli_query($conn,$comando);
	
	//Retorna o número de linhas da consulta SQL (SELECT) executada
	$linha = mysqli_num_rows($resultado);
	if($linha == 1){ //testa se a consulta retornou algum registro
	
	$comando = "UPDATE alugueis
	SET descricao = '$descricao',
		valor = '$valor',
		desconto = '$desconto', 
		valorFinal = '$valorFinal', 
		data = '$data', 
		Funcionarios_idFuncionario  = '$funcionario',
		Clientes_idClientes = '$cliente',
		Trajes_idTrajes = '$traje'
		where idAlugueis = '$idAlugueis'";

	$resultado = mysqli_query($conn,$comando);
	echo "<script>window.location='aluguel.php';alert('Prezado usuario os dados do aluguel $descricao, foram alterados com sucesso no sistema.');</script>"; 
	}
}
/************************************************************/
function consulta_editar_aluguel($conn,$idAlugueis){
	$comando = "Select *
				From alugueis
				where idAlugueis = '$idAlugueis'";
	$resultado = mysqli_query($conn,$comando);
	return $dados = mysqli_fetch_array($resultado);
}


/*******************************************EXCLUIR*******************************************************/
function excluir_funcao_bd($conn,$idFuncao){
	
	$comando = "Delete
				From funcao
				where idFuncao = '$idFuncao'";
				
	//Executa o comando SQL
	$resultado = mysqli_query($conn,$comando);
	
	//Para obter o numero de linhas afetadas por uma consulta INSERT, UPDATE, REPLACE ou DELETE, use myslq_affected_rows()
	$linha = mysqli_affected_rows($conn);
	
	if($linha == 1) {
		echo "<script>window.location='funcao.php';alert('Dados foram excluidos com sucesso do sistema.');</script>";
	}
	else {
		echo "<script>window.location='funcao.php';alert('Atenção! Não foi posivel excluir os dados,  pois os mesmos estão em uso em outro cadastro.');</script>";
	}
			
}
/*******************************************EXCLUIR*******************************************************/
function excluir_traje_bd($conn,$idTrajes){
	
	$comando = "Delete
				From trajes
				where idTrajes = '$idTrajes'";
				
	//Executa o comando SQL
	$resultado = mysqli_query($conn,$comando);
	
	//Para obter o numero de linhas afetadas por uma consulta INSERT, UPDATE, REPLACE ou DELETE, use myslq_affected_rows()
	$linha = mysqli_affected_rows($conn);
	
	if($linha == 1) {
		echo "<script>window.location='traje.php';alert('Dados foram excluidos com sucesso do sistema.');</script>";
	}
	else {
		echo "<script>window.location='traje.php';alert('Atenção! Não foi posivel excluir os dados,  pois os mesmos estão em uso em outro cadastro.');</script>";
	}
			
}
/*******************************************EXCLUIR****************************************************************************************/
function excluir_funcionario_bd($conn,$idFuncionario){
	
	$comando = "Delete
				From funcionarios
				where idFuncionario = '$idFuncionario'";
				
	//Executa o comando SQL
	$resultado = mysqli_query($conn,$comando);
	
	//Para obter o numero de linhas afetadas por uma consulta INSERT, UPDATE, REPLACE ou DELETE, use myslq_affected_rows()
	$linha = mysqli_affected_rows($conn);
	
	if($linha == 1) {
		echo "<script>window.location='funcionario.php';alert('Dados foram excluidos com sucesso do sistema.');</script>";
	}
	else {
		echo "<script>window.location='funcionario.php';alert('Atenção! Não foi posivel excluir os dados,  pois os mesmos estão em uso em outro cadastro.');</script>";
	}
			
}

/********************************************************/
function excluir_cliente_bd($conn,$idClientes){
	
	$comando = "Delete
				From clientes
				where idClientes = '$idClientes'";
				
	//Executa o comando SQL
	$resultado = mysqli_query($conn,$comando);
	
	//Para obter o numero de linhas afetadas por uma consulta INSERT, UPDATE, REPLACE ou DELETE, use myslq_affected_rows()
	$linha = mysqli_affected_rows($conn);
	
	if($linha == 1) {
		echo "<script>window.location='cliente.php';alert('Dados foram excluidos com sucesso do sistema.');</script>";
	}
	
	else {
		
		echo "<script>window.location='cliente.php';alert('Atenção! Não foi posivel excluir os dados,  pois os mesmos estão em uso em outro cadastro.');</script>";
	}
			
}
/********************************************************/
function excluir_fornecedor_bd($conn,$idFornecedores){
	
	$comando = "Delete
				From fornecedores
				where idFornecedores = '$idFornecedores'";
				
	//Executa o comando SQL
	$resultado = mysqli_query($conn,$comando);
	
	//Para obter o numero de linhas afetadas por uma consulta INSERT, UPDATE, REPLACE ou DELETE, use myslq_affected_rows()
	$linha = mysqli_affected_rows($conn);
	
	if($linha == 1) {
		echo "<script>window.location='fornecedor.php';alert('Dados foram excluidos com sucesso do sistema.');</script>";
	}
	
	else {
		
		echo "<script>window.location='fornecedor.php';alert('Atenção! Não foi posivel excluir os dados,  pois os mesmos estão em uso em outro cadastro.');</script>";
	}
			
}

/*******************************************EXCLUIR******************/
function excluir_aluguel_bd($conn,$idAlugueis){
	
	$comando = "Delete
				From alugueis
				where idAlugueis = '$idAlugueis'";
				
	//Executa o comando SQL
	$resultado = mysqli_query($conn,$comando);
	
	//Para obter o numero de linhas afetadas por uma consulta INSERT, UPDATE, REPLACE ou DELETE, use myslq_affected_rows()
	$linha = mysqli_affected_rows($conn);
	
	if($linha == 1) {
		echo "<script>window.location='aluguel.php';alert('Dados foram excluidos com sucesso do sistema.');</script>";
	}
	
	else {
		
		echo "<script>window.location='aluguel.php';alert('Atenção! Não foi posivel excluir os dados,  pois os mesmos estão em uso em outro cadastro.');</script>";
	}
			
}

	// final do php
?>
<!---------------------------------------------------------------------------------------------------------->
<script>
function Deletar(idFuncao) {
	let id = document.getElementById("idFuncao").innerHTML = idFuncao;
	if (Number(id) > 0) {
		let confirmar = confirm("Tem certeza que deseja excluir essa função?");
      	if(confirmar == true){
			location.href="exFuncao.php?idFuncao=" + id;
		}			  
   }
}
</script>
<script>
function DeletarFuncionario(idFuncionario) {
	let id = document.getElementById("idFuncionario").innerHTML = idFuncionario;
	if (Number(id) > 0) {
		let confirmar = confirm("Tem certeza que deseja excluir esse funcionário?");
      	if(confirmar == true){
			location.href="exFuncionario.php?idFuncionario=" + id;
		}			  
   }
}
</script>

<script>
function DeletarClientes(idClientes) {
	let id = document.getElementById("idClientes").innerHTML = idClientes;
	if (Number(id) > 0) {
		let confirmar = confirm("Tem certeza que deseja excluir esse cliente?");
      	if(confirmar == true){
			location.href="exCliente.php?idClientes=" + id;
		}			  
   }
}
</script>
<script>
function DeletarFornecedores(idFornecedores) {
	let id = document.getElementById("idFornecedores").innerHTML = idFornecedores;
	if (Number(id) > 0) {
		let confirmar = confirm("Tem certeza que deseja excluir esse fornecedor?");
      	if(confirmar == true){
			location.href="exfornecedor.php?idFornecedores=" + id;
		}			  
   }
}
</script>
<script>
function DeletarTrajes(idTrajes) {
	let id = document.getElementById("idTrajes").innerHTML = idTrajes;
	if (Number(id) > 0) {
		let confirmar = confirm("Tem certeza que deseja excluir esse traje?");
      	if(confirmar == true){
			location.href="exTraje.php?idTrajes=" + id;
		}			  
   }
}
</script>
<script>
function DeletarAlugueis(idAlugueis) {
	let id = document.getElementById("idAlugueis").innerHTML = idAlugueis;
	if (Number(id) > 0) {
		let confirmar = confirm("Tem certeza que deseja excluir esse aluguel?");
      	if(confirmar == true){
			location.href="exAluguel.php?idAlugueis=" + id;
		}			  
   }
}
</script>