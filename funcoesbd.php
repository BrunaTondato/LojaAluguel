<?php

function conecta_bd(){
	
	//Configuracao do banco de dados
	
	//Local que sta rodadando PHP
	$servidor = "localhost";
	
	//Nome de usuario que tem acesso
	$usuario_bd = "root";
	
	//Senha do usuario, que tem acesso ao banco de dados
	$senha_bd = "";
	
	//Banco de dados que deseja estabelecer a conexao
	$banco = "lojaaluguel";
	
	//Abre uma conexao com o servidor MySQL
	$conexao = mysqli_connect($servidor, $usuario_bd, $senha_bd, $banco);
	
	//Com a variavel $con definida, podemos fazer um teste usando o IF
	if(mysqli_connect_errno($conexao)) {
		echo "Erro ao conectar ao banco de dados!";
		die();
	}
	
	return $conexao;
	
}	
/*|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||*/

function consulta_usu_bd($usuario,$senha,$conexao){
	//Comando SQL
	$comando = "Select * 
			    From usuario
				Where usuario = '$usuario' and
					senha = '$senha'";
	//Executa os comandos SQL
	$resultado = mysqli_query($conexao,$comando);
	 
	//Retorna o numero de linhas da consulta SQL (SELECT) executada
	$linha = mysqli_num_rows($resultado);
	return $linha;

}
function consulta_cliente_bd($Nome,$conexao){
	//Comando SQL
	$comando = "Select * 
			    From paciente
				Where Nome = '$Nome'";
	//Executa os comandos SQL
	$resultado = mysqli_query($conexao,$comando);
	 
	//Retorna o numero de linhas da consulta SQL (SELECT) executada
	$linha = mysqli_num_rows($resultado);
	return $linha;

}
function consulta_doutor_bd($Nome,$conexao){
	//Comando SQL
	$comando = "Select * 
			    From doutor
				Where Nome = '$Nome'";
	//Executa os comandos SQL
	$resultado = mysqli_query($conexao,$comando);
	 
	//Retorna o numero de linhas da consulta SQL (SELECT) executada
	$linha = mysqli_num_rows($resultado);
	return $linha;

}
function consulta_agenda_bd($Nome,$conexao){
	//Comando SQL
	$comando = "Select * 
			    From consulta
				Where Paciente_Cod_Paciente = '$Paciente_Cod_Paciente' and tipo_Consulta = '$tipo_Consulta' and 
				Doutor_Cod_Doutor = '$Doutor_Cod_Doutor' and hora_consulta = '$hora_consulta' 
				and data_Consulta = '$data_Consulta' and Usuario_codusuario = 'Usuario_codusuario'";
	//Executa os comandos SQL
	$resultado = mysqli_query($conexao,$comando);
	 
	//Retorna o numero de linhas da consulta SQL (SELECT) executada
	$linha = mysqli_num_rows($resultado);
	return $linha;

}
/*|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||*/
function chave_paciente($conexao){ //passa a connexão
	
	$comando = "SELECT Paciente_Cod_Paciente, Nome from paciente inner join consulta on Paciente_Cod_Paciente = Cod_Paciente";
	
	$resultado = mysqli_query($conexao,$comando);
	while($dados = mysqli_fetch_array($resultado)){   //enquanto tiver dados me retorne
				$codusuario = $dados["Paciente_Cod_Paciente"];
				$nome = $dados["Nome"];
				
				echo "<option value={$dados["Paciente_Cod_Paciente"]}>{$dados["Nome"]}</option>";
				}}
function chave_doutor($conexao){ //passa a connexão
	
	$comando = "SELECT Doutor_Cod_Doutor, Nome from doutor inner join consulta on Doutor_Cod_Doutor = Cod_Doutor";
	
	$resultado = mysqli_query($conexao,$comando);
	while($dados = mysqli_fetch_array($resultado)){   //enquanto tiver dados me retorne
				$codusuario = $dados["Doutor_Cod_Doutor"];
				$nome = $dados["Nome"];
				
				echo "<option value={$dados["Doutor_Cod_Doutor"]}>{$dados["Nome"]}</option>";
				}}
function chave_usu($conexao){ //passa a connexão
	
	$comando = "SELECT Usuario_codusuario, Nome from usuario inner join consulta on Usuario_codusuario = codusuario";
	
	$resultado = mysqli_query($conexao,$comando);
	while($dados = mysqli_fetch_array($resultado)){   //enquanto tiver dados me retorne
				$codusuario = $dados["Usuario_codusuario"];
				$nome = $dados["Nome"];
				
				echo "<option value={$dados["Usuario_codusuario"]}>{$dados["Nome"]}</option>";
				}}
function lista_usuarios_bd($conexao){ //passa a connexão
	
	$comando = "Select *
				From usuario
				order by nome";
	$resultado = mysqli_query($conexao,$comando);
	while($dados = mysqli_fetch_array($resultado)){   //enquanto tiver dados me retorne
				$codusuario = $dados["codusuario"];
				$nome = $dados["nome"];
				
				echo '
				<tr class="tr">
				<td class="td">'.'<a href="edusuario.php?codusuario='.$codusuario.'"><img src="img/editar.png" alt="Consultar" title="Clique para editar os dados" width="20" height="20"></a>'.'</td>
				<td class="td">'.'<a heref="javascript:func()" onclick="confirmacao('.$codusuario.')">
				<img src="img/excluir.png" alt="Excluir"
				title="Clique para excluir os dados" width="20"
				height="20"></a>'.'</td>
				<td class="td">'.$dados["nome"].'</td>
				<td class="td">'.$dados["usuario"].'</td>
				<td class="td">'.$dados["email"].'</td>
				</tr>';
				
				}
				}
				
function lista_funcao_bd($conexao){ //passa a connexão
	
	$comando = "Select *
				From funcao
				order by nome";
	$resultado = mysqli_query($conexao,$comando);
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
				

function lista_doutor_bd($conexao){ //passa a connexão
	
	$comando = "Select *
				From doutor
				order by Nome";
	$resultado = mysqli_query($conexao,$comando);
	while($dados = mysqli_fetch_array($resultado)){   //enquanto tiver dados me retorne
				$Cod_Doutor = $dados["Cod_Doutor"];
				$nome = $dados["Nome"];
				
				echo '
				<tr class="tr">
				<td class="td">'.'<a href="eddoutor.php?Cod_Doutor='.$Cod_Doutor.'"><img src="img/editar.png" alt="Consultar" title="Clique para editar os dados" width="20" height="20"></a>'.'</td>
				<td class="td">'.'<a heref="javascript:func()" onclick="confirmacao('.$Cod_Doutor.')">
				<img src="img/excluir.png" alt="Excluir"
				title="Clique para excluir os dados" width="20"
				height="20"></a>'.'</td>
				<td class="td">'.$dados["Nome"].'</td>
				<td class="td">'.$dados["Telefone"].'</td>
				<td class="td">'.$dados["CRM_CRO"].'</td>
				</tr>';
				
				}
				}
function lista_agenda_bd($conexao){ //passa a connexão
	
	$comando = "Select *
				From consulta
				order by data_Consulta";
	$resultado = mysqli_query($conexao,$comando);
	while($dados = mysqli_fetch_array($resultado)){   //enquanto tiver dados me retorne
				$cod_Agenda = $dados["cod_Agenda"];
				$data_Consulta = $dados["data_Consulta"];
				
				echo '
				<tr class="tr">
				<td class="td">'.'<a href="edagenda.php?cod_Agenda='.$cod_Agenda.'"><img src="img/editar.png" alt="Consultar" title="Clique para editar os dados" width="20" height="20"></a>'.'</td>
				<td class="td">'.'<a heref="javascript:func()" onclick="confirmacao('.$cod_Agenda.')">
				<img src="img/excluir.png" alt="Excluir"
				title="Clique para excluir os dados" width="20"
				height="20"></a>'.'</td>
				<td class="td">'.$dados["Paciente_Cod_Paciente"].'</td>
				<td class="td">'.$dados["tipo_Consulta"].'</td>
				<td class="td">'.$dados["Doutor_Cod_Doutor"].'</td>
				<td class="td">'.$dados["hora_consulta"].'</td>
				<td class="td">'.$dados["data_Consulta"].'</td>
				<td class="td">'.$dados["Usuario_codusuario"].'</td>
				</tr>';
				
				}
				}
/*|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||*/

//faz uma consulta para verificar se o usuario já está cadastrado no banco
function cadastra_usu_bd($conexao,$nome,$usuario,$senha,$email,$telefone,$endereco,$numero,$bairro,$datancasc){ 

	$comando = "Select * 
				From usuario 
				Where usuario = '$usuario'";
  
	$resultado = mysqli_query($conexao,$comando);
	
	//Obtém o numero de linhas de um conjunto de resultados.
	// Este comando é valido apenas para comandos como SELECT 
	//ou SHOW que atualmente retornam um conjunto de resultados.
	$linha = mysqli_num_rows($resultado);

	if($linha == 0)//testa se a consulta retornou algum registro
	{
	if(!$resultado){
			$errorMessage = error_get_last()['message'];
			var_dump($errorMessage); exit;
		}
	$comando = "Insert Into usuario(nome,usuario,senha,email,telefone,endereco,numero,bairro,datancasc)
		values('$nome','$usuario','$senha','$email','$telefone','$endereco','$numero','$bairro','$datancasc')";
	if(!$resultado){
			$errorMessage = error_get_last()['message'];
			var_dump($errorMessage); exit;
		}
	//executa do comando insert
		$resultado = mysqli_query($conexao,$comando); 
	echo "<script>window.location='gerusuario.php';alert('Prezado(a) $nome, seus dados foram cadastrados com sucesso no sistema.');</script>";	
}

else {
	echo "<script>window.location='gerusuario.php';alert('Prezado(a) $nome, este nome de usuário já existe cadastrado no sistema, por favor cadastre outro nome.');</script>";
}

}


function cadastra_cliente_bd($conexao,$Nome,$Data_Nascimento,$CPF,$RG,$Telefone,$Cidade,$Logradouro,$Numero,$Bairro){ 

	$comando = "Select * 
				From paciente 
				Where Nome = '$Nome'";
  
	$resultado = mysqli_query($conexao,$comando);
	
	//Obtém o numero de linhas de um conjunto de resultados.
	// Este comando é valido apenas para comandos como SELECT 
	//ou SHOW que atualmente retornam um conjunto de resultados.
	$linha = mysqli_num_rows($resultado);

	if($linha == 0)//testa se a consulta retornou algum registro
	{
	$comando = "Insert Into paciente(Nome,Data_Nascimento,CPF,RG,Telefone,Cidade,Logradouro,Numero,Bairro)
		values('$Nome','$Data_Nascimento','$CPF','$RG','$Telefone','$Cidade','$Logradouro','$Numero','$Bairro')";
	
	//executa do comando insert
		$resultado = mysqli_query($conexao,$comando); 
	echo "<script>window.location='gercliente.php';alert('Prezado(a) usuario os dados do(a) cliente $Nome, foram cadastrados com sucesso no sistema.');</script>";	
}

else {
	echo "<script>window.location='gercliente.php';alert('Prezado(a) usuario os dados do(a) $Nome, já existe cadastrado no sistema, por favor cadastre outro.');</script>";
}

}

function cadastra_doutor_bd($conexao,$Nome,$Data_Nascimento,$CPF,$RG,$CRM_CRO,$Especializacao,$Telefone){ 

	$comando = "Select * 
				From doutor 
				Where Nome = '$Nome'";
  
	$resultado = mysqli_query($conexao,$comando);
	
	//Obtém o numero de linhas de um conjunto de resultados.
	// Este comando é valido apenas para comandos como SELECT 
	//ou SHOW que atualmente retornam um conjunto de resultados.
	$linha = mysqli_num_rows($resultado);

	if($linha == 0)//testa se a consulta retornou algum registro
	{
	$comando = "Insert Into doutor(Nome,Data_Nascimento,CPF,RG,CRM_CRO,Especializacao,Telefone)
		values('$Nome','$Data_Nascimento','$CPF','$RG','$CRM_CRO','$Especializacao','$Telefone')";
	
//executa do comando insert
		$resultado = mysqli_query($conexao,$comando); 
	echo "<script>window.location='gerdoutor.php';alert('Prezado(a) usuario os dados do(a) doutor(a) $Nome, foram cadastrados com sucesso no sistema.');</script>";	
}

else {
	echo "<script>window.location='gerdoutor.php';alert('Prezado(a) usuario os dados do(a) doutor(a) $Nome, já existe cadastrado no sistema, por favor cadastre outro.');</script>";
}

}


function cadastra_consulta_bd ($conexao,$Paciente_Cod_Paciente,$tipo_Consulta,$Doutor_Cod_Doutor,$hora_consulta,$data_Consulta,$Usuario_codusuario){ 

	$comando = "Select * 
				From consulta 
				Where Paciente_Cod_Paciente = '$Paciente_Cod_Paciente'";
  
	$resultado = mysqli_query($conexao,$comando);
	
	//Obtém o numero de linhas de um conjunto de resultados.
	// Este comando é valido apenas para comandos como SELECT 
	//ou SHOW que atualmente retornam um conjunto de resultados.
	$linha = mysqli_num_rows($resultado);

	if($linha == 0)//testa se a consulta retornou algum registro
	{
	$comando = "Insert Into consulta(Paciente_Cod_Paciente,tipo_Consulta,Doutor_Cod_Doutor,hora_consulta,data_Consulta,Usuario_codusuario)
		values('$Paciente_Cod_Paciente','$tipo_Consulta','$Doutor_Cod_Doutor','$hora_consulta','$data_Consulta','$Usuario_codusuario')";
	
	//executa do comando insert
		$resultado = mysqli_query($conexao,$comando); 
	echo "<script>window.location='geragenda.php';alert('Prezado(a) usuario a consulta do(a) paciente $Nome, foram cadastrados com sucesso no sistema.');</script>";	
}

else {
	echo "<script>window.location='geragenda.php';alert('Prezado(a) usuario a consulta do(a) $Nome, já existe cadastrado no sistema, por favor cadastre outro.');</script>";
}

}
/*|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||*/


function excluir_usu_bd($conexao,$codusuario){
	
	$comando = "Delete
				From usuario
				where codusuario = '$codusuario'";
				
	//Executa o comando SQL
	$resultado = mysqli_query($conexao,$comando);
	
	//Para obter o numero de linhas afetadas por uma consulta INSERT, UPDATE, REPLACE ou DELETE, use myslq_affected_rows()
	$linha = mysqli_affected_rows($conexao);
	
	if($linha == 1) {
		echo "<script>window.location='gerusuario.php';alert('Dados foram excluidos com sucesso do sistema.');</script>";
	}
	
	else {
		echo "<script>window.location='gerusuario.php';alert('Os dados não foram excluidos do sistema.');</script>";
	}
			
}
function excluir_cliente_bd($conexao,$Cod_Paciente){
	
	$comando = "Delete
				From paciente
				where Cod_Paciente = '$Cod_Paciente'";
				
	//Executa o comando SQL
	$resultado = mysqli_query($conexao,$comando);
	
	//Para obter o numero de linhas afetadas por uma consulta INSERT, UPDATE, REPLACE ou DELETE, use myslq_affected_rows()
	$linha = mysqli_affected_rows($conexao);
	
	if($linha == 1) {
		echo "<script>window.location='gercliente.php';alert('Dados foram excluidos com sucesso do sistema.');</script>";
	}
	
	else {
		$errorMessage = error_get_last()['message'];
		var_dump($errorMessage); exit;
		echo "<script>window.location='gercliente.php';alert('Os dados não foram excluidos do sistema.');</script>";
	}
			
}
function excluir_doutor_bd($conexao,$Cod_Doutor){
	
	$comando = "Delete
				From doutor
				where Cod_Doutor = '$Cod_Doutor'";
				
	//Executa o comando SQL
	$resultado = mysqli_query($conexao,$comando);
	
	//Para obter o numero de linhas afetadas por uma consulta INSERT, UPDATE, REPLACE ou DELETE, use myslq_affected_rows()
	$linha = mysqli_affected_rows($conexao);
	
	if($linha == 1) {
		echo "<script>window.location='gerdoutor.php';alert('Dados foram excluidos com sucesso do sistema.');</script>";
	}
	
	else {
		$errorMessage = error_get_last()['message'];
		var_dump($errorMessage); exit;
		echo "<script>window.location='gerdoutor.php';alert('Os dados não foram excluidos do sistema.');</script>";
	}
			
}
function excluir_consulta_bd($conexao,$cod_Agenda){
	
	$comando = "Delete
				From consulta
				where cod_Agenda = '$cod_Agenda'";
				
	//Executa o comando SQL
	$resultado = mysqli_query($conexao,$comando);
	
	//Para obter o numero de linhas afetadas por uma consulta INSERT, UPDATE, REPLACE ou DELETE, use myslq_affected_rows()
	$linha = mysqli_affected_rows($conexao);
	
	if($linha == 1) {
		echo "<script>window.location='geragenda.php';alert('A consulta foi excluida com sucesso do sistema.');</script>";
	}
	
	else {
		$errorMessage = error_get_last()['message'];
		var_dump($errorMessage); exit;
		echo "<script>window.location='geragenda.php';alert('A consulta não foi excluidas do sistema.');</script>";
	}
			
}
/*|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||*/

function consultaeditar_usu_bd($conexao,$idFuncao){
	$comando = "Select *
				From funcao
				where ifFuncao = '$idFuncao'";
	$resultado = mysqli_query($conexao,$comando);
	return $dados = mysqli_fetch_array($resultado);
}
function consultaeditar_cliente_bd($conexao,$Cod_Paciente){
	$comando = "Select *
				From paciente
				where Cod_Paciente = '$Cod_Paciente'";
	$resultado = mysqli_query($conexao,$comando);
	return $dados = mysqli_fetch_array($resultado);
}
function consultaeditar_doutor_bd($conexao,$Cod_Doutor){
	$comando = "Select *
				From doutor
				where Cod_Doutor = '$Cod_Doutor'";
	$resultado = mysqli_query($conexao,$comando);
	return $dados = mysqli_fetch_array($resultado);
}
function consultaeditar_agenda_bd($conexao,$cod_Agenda){
	$comando = "Select *
				From consulta
				where cod_Agenda = '$cod_Agenda'";
	$resultado = mysqli_query($conexao,$comando);
	return $dados = mysqli_fetch_array($resultado);
}
/*|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||*/

function editar_usu_bd($conexao,$codusuario,$nome,$usuario,$senha,$email,$telefone,$endereco,$numero,$bairro,$datancasc){
	
	$comando = "Select * 
				From usuario 
				Where codusuario = '$codusuario'";
					
	//Executa o comando SQL 
	$resultado = mysqli_query($conexao,$comando);
	
	//Retorna o número de linhas da consulta SQL (SELECT) executada
	$linha = mysqli_num_rows($resultado);
	if($linha == 1){ //testa se a consulta retornou algum registro
	
	$comando = "UPDATE usuario
	SET nome = '$nome' , usuario = '$usuario' , senha = '$senha' , email = '$email' , telefone = '$telefone' , 
	endereco = '$endereco', numero = '$numero' , bairro = '$bairro', datancasc = '$datancasc'
	where codusuario = '$codusuario'";
	$resultado = mysqli_query($conexao,$comando);
	echo "<script>window.location='gerusuario.php';alert('Prezado $nome, seus dados foram alterados com sucesso no sistema.');</script>"; 
	}
}
function editar_cliente_bd($conexao,$Cod_Paciente,$Nome,$Data_Nascimento,$CPF,$RG,$Telefone,$Cidade,$Logradouro,$Numero,$Bairro){
	
	$comando = "Select * 
				From paciente 
				Where Cod_Paciente = '$Cod_Paciente'";
					
	//Executa o comando SQL 
	$resultado = mysqli_query($conexao,$comando);
	
	//Retorna o número de linhas da consulta SQL (SELECT) executada
	$linha = mysqli_num_rows($resultado);
	if($linha == 1){ //testa se a consulta retornou algum registro
	
	$comando = "UPDATE paciente
	SET Nome = '$Nome' , Data_Nascimento = '$Data_Nascimento' , CPF = '$CPF' , RG = '$RG' , Telefone = '$Telefone' , 
	Cidade = '$Cidade', Logradouro = '$Logradouro' , Numero = '$Numero' , Bairro = '$Bairro'
	where Cod_Paciente = '$Cod_Paciente'";
	$resultado = mysqli_query($conexao,$comando);
	echo "<script>window.location='gercliente.php';alert('Prezado usuario os dados do(a) paciente $Nome, foram alterados com sucesso no sistema.');</script>"; 
	}
}	
function editar_doutor_bd($conexao,$Cod_Doutor,$Nome,$Data_Nascimento,$CPF,$RG,$CRM_CRO,$Especializacao,$Telefone){
	
	$comando = "Select * 
				From doutor 
				Where Cod_Doutor = '$Cod_Doutor'";
					
	//Executa o comando SQL 
	$resultado = mysqli_query($conexao,$comando);
	
	//Retorna o número de linhas da consulta SQL (SELECT) executada
	$linha = mysqli_num_rows($resultado);
	if($linha == 1){ //testa se a consulta retornou algum registro
	
	$comando = "UPDATE doutor
	SET Nome = '$Nome' , Data_Nascimento = '$Data_Nascimento' , CPF = '$CPF' , RG = '$RG', CRM_CRO = '$CRM_CRO', Especializacao = '$Especializacao' , Telefone = '$Telefone'
	where Cod_Doutor = '$Cod_Doutor'";
	$resultado = mysqli_query($conexao,$comando);
	echo "<script>window.location='gerdoutor.php';alert('Prezado usuario os dados do(a) doutor(a) $Nome, foram alterados com sucesso no sistema.');</script>"; 
	}
}
		
function editar_agenda_bd($conexao,$Paciente_Cod_Paciente,$tipo_Consulta,$Doutor_Cod_Doutor,$hora_consulta,$data_Consulta,$Usuario_codusuario){
	
	$comando = "Select * 
				From consulta 
				Where cod_Agenda = '$cod_Agenda'";
					
	//Executa o comando SQL 
	$resultado = mysqli_query($conexao,$comando);
	
	//Retorna o número de linhas da consulta SQL (SELECT) executada
	$linha = mysqli_num_rows($resultado);
	if($linha == 1){ //testa se a consulta retornou algum registro
	
	$comando = "UPDATE consulta
	SET Paciente_Cod_Paciente = '$Paciente_Cod_Paciente' , tipo_Consulta = '$tipo_Consulta' , Doutor_Cod_Doutor = '$Doutor_Cod_Doutor' , hora_consulta = '$hora_consulta' , data_Consulta = '$data_Consulta' , 
	Usuario_codusuario = '$Usuario_codusuario'
	where cod_Agenda = '$cod_Agenda'";
	$resultado = mysqli_query($conexao,$comando);
	echo "<script>window.location='geragenda.php';alert('Prezado usuario a consulta do(a) paciente $Nome, foi alterado com sucesso no sistema.');</script>"; 
	}
}	

/*|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||*/

function envia_email_bd ($conexao,$email){
	   
	   $comando = "Select * 
					From usuario 
					Where email = '$email'";
		$resultado = mysqli_query($conexao,$comando);
		$linha = mysqli_num_rows($resultado);
		$dados = mysqli_fetch_array($resultado);
		$email = $dados["email"];
		if($linha == 0){ //testa se a consulta retornou algum registro
		echo "<script>window.location='esqsenha.php';alert('Sua nova senha não pode ser enviada. E-mail não cadastrado.');</script>";
		}
		else{
		//gerar nova senha
		$array = 'abcd12345';
		$nova_senha = substr(str_shuffle($array), 0, 6);
		$senha = $nova_senha;
		
		//atualizar nova senha no banco
		$comando = "update usuario
		set senha='$senha'
		where email='$email'";
		$resultado = mysqli_query($conexao,$comando);
		
		//envia e-mail
		$destinatario = $dados["email"];
		$usuario = $dados["nome"];
		$mensagem = $usuario.", você solicitou uma nova senha de acesso ao sistema."."\n\n";
		$mensagem .= "Sua nova senha é: ".$nova_senha."\n\n";
		$headers = "From: Nalcler <nalclertavares@gmail.com>";
		
		$resultado = mail($destinatario, "Solicitação de Nova Senha", $mensagem, $headers);
		if(!$resultado){
			$errorMessage = error_get_last()['message'];
			var_dump($errorMessage); exit;
		}
		echo "<script>window.location='index.php';alert('Prezado(a) usuario, sua nova senha foi enviada para o seu e-mail, com sucesso.');</script>";
		}
	   
}
?>