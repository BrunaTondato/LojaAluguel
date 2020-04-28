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
				





		
		
?>