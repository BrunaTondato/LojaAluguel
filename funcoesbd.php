
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




/********************************************************LISTAR***************************************************************************/
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
				<td class="td">'. '<a href="confirmaFuncao.php?idFuncao='.$idFuncao.'"><img src="imagens/excluir.png" alt="Excluir"
				title="Clique para excluir os dados" width="20"
				height="20"></a>'.'</td>
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
				<td class="td">'. '<a href="confirmaFornecedor.php?idFuncao='.$idFornecedores.'"><img src="imagens/excluir.png" alt="Excluir"
				<img src="imagens/excluir.png" alt="Excluir"
				title="Clique para excluir os dados" width="20"
				height="20"></a>'.'</td>
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
				<td class="td">'. '<a href="confirmaFuncionario.php?idFuncionario='.$idFuncionario.'"><img src="imagens/excluir.png" alt="Excluir"
				title="Clique para excluir os dados" width="20"
				height="20"></a>'.'</td>
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
				<td class="td">'. '<a href="confirmaCliente.php?idFuncao='.$idClientes.'"><img src="imagens/excluir.png" alt="Excluir"
				<img src="imagens/excluir.png" alt="Excluir"
				title="Clique para excluir os dados" width="20"
				height="20"></a>'.'</td>
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
				<td class="td">'.'<a href="javascript:func()" onclick="confirmacao('.$idTrajes.')">
				<img src="imagens/excluir.png" alt="Excluir"
				title="Clique para excluir os dados" width="20"
				height="20"></a>'.'</td>
				<td class="td">'.$dados["nome"].'</td>
				<td class="td">'.$dados["descricao"].'</td>
				
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
				<td class="td">'. '<a href="confirmaAluguel.php?idAlugueis='.$idAlugueis.'"><img src="imagens/excluir.png" alt="Excluir"
				title="Clique para excluir os dados" width="20"
				height="20"></a>'.'</td>
				<td class="td">'.$dados["descricao"].'</td>
				<td class="td">'.$dados["idAlugueis"].'</td>
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
		funcao = '$funcao'		
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
		cep = '$cep',
		funcionario  = '$funcionario',
		cliente = '$cliente',
		traje = '$traje'
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
		$errorMessage = error_get_last()['message'];
		var_dump($errorMessage); exit;
		echo "<script>window.location='funcao.php';alert('Os dados não foram excluidos do sistema.');</script>";
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
		$errorMessage = error_get_last()['message'];
		var_dump($errorMessage); exit;
		echo "<script>window.location='funcao.php';alert('Os dados não foram excluidos do sistema.');</script>";
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
		$errorMessage = error_get_last()['message'];
		var_dump($errorMessage); exit;
		echo "<script>window.location='cliente.php';alert('Os dados não foram excluidos do sistema.');</script>";
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
		$errorMessage = error_get_last()['message'];
		var_dump($errorMessage); exit;
		echo "<script>window.location='fornecedor.php';alert('Os dados não foram excluidos do sistema.');</script>";
	}
			
}






		
		
?>