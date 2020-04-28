<?php

function conecta_bd(){
	include_once("conexao.php");
	return $conn;
}	



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
				<td class="td">'.'<a heref="javascript:func()" onclick="confirmacao('.$idFuncao.')">
				<img src="imagens/excluir.png" alt="Excluir"
				title="Clique para excluir os dados" width="20"
				height="20"></a>'.'</td>
				<td class="td">'.$dados["nome"].'</td>
				<td class="td">'.$dados["idFuncao"].'</td>
				</tr>';
				
				}
				}


/********************************************************************************/
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
				<td class="td">'.'<a heref="javascript:func()" onclick="confirmacao('.$idFornecedores.')">
				<img src="imagens/excluir.png" alt="Excluir"
				title="Clique para excluir os dados" width="20"
				height="20"></a>'.'</td>
				<td class="td">'.$dados["nome"].'</td>
				<td class="td">'.$dados["telefone"].'</td>
			
				</tr>';
				
				}
				}
/************************************************/
function editar_funcao_bd($conexao,$idFuncao,$nome){
	
	$comando = "Select * 
				From funcao
				Where idFuncao = '$idFuncao'";
					
	//Executa o comando SQL 
	$resultado = mysqli_query($conexao,$comando);
	
	//Retorna o número de linhas da consulta SQL (SELECT) executada
	$linha = mysqli_num_rows($resultado);
	if($linha == 1){ //testa se a consulta retornou algum registro
	
	$comando = "UPDATE funcao
	SET nome = '$nome' where idFuncao = '$idFuncao'";
	$resultado = mysqli_query($conexao,$comando);
	echo "<script>window.location='funcao.php';alert('Prezado usuario os dados da funcao $nome, foram alterados com sucesso no sistema.');</script>"; 
	}
}
/***********************************************************************************/
function editar_fornecedor_bd($conn,$idFornecedores,$nome,$endereco,$telefone,$cnpj,$email,$cep){
	
	$comando = "Select * 
				From fornecedores
				Where idFornecedores = '$idFornecedores'";
					
	//Executa o comando SQL 
	$resultado = mysqli_query($conexao,$comando);
	
	//Retorna o número de linhas da consulta SQL (SELECT) executada
	$linha = mysqli_num_rows($resultado);
	if($linha == 1){ //testa se a consulta retornou algum registro
	
	$comando = "UPDATE fornecedores
	SET nome = '$nome' , endereco = '$endereco' , telefone = '$telefone' , 
	cnpj = '$cnpj', email = '$email' , cep = '$cep'
	where idFornecedores = '$idFornecedores'";
	$resultado = mysqli_query($conexao,$comando);
	echo "<script>window.location='fornecedor.php';alert('Prezado usuario os dados do(a) fornecedor $nome, foram alterados com sucesso no sistema.');</script>"; 
	}
}







		
		
?>