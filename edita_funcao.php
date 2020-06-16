<!-- 
	<?php /*
	include ("valida_session.php");
	header('Content-type: text/html; charset=ISO-8859-1');*/
?> -->
<!DOCTYPE html>
<html>
<head> 
  <meta charset="UTF-8">
  <title>Gerenciador de Tarefas</title>   
  <link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/all.css">
	<link rel="stylesheet" href="css/estilo.css">
  <script src="js/jquery-1.js" type="text/javascript"></script>
</head>



<?php
	/* recebe o código do usuário que terá as informações editadas */
	$idFuncao = $_GET["idFuncao"];
	//acesso ao banco de dados
	include "funcoesbd.php";
	$conexao = conecta_bd();
	$dados = consulta_editar_funcao($conexao,$idFuncao); //procurando os dados 
		$idFuncao = $dados["idFuncao"];
		$nome = $dados["nome"];
		
		
 ?>
<body>
<div id="geral">

  <section id="conteudo">
	<fieldset>
		 <legend>
		  <table>
			 <tr>
				<td><h4>ALTERAR DADOS DO USUÁRIO</h4></a></td>
			 </tr>
		  </table>
		 </legend>
		<form action="edfuncao_envia.php" method="post" name="form" id="form" onSubmit="return valida_dados(this)">
		 <article>
			<table border="0" cellpadding="0" cellspacing="0">
				<tr>
					<td><label>Nome:</label></td>
					<td><input type="text" required="required" name="nome" size="60" value="<?php echo  $nome;?>"></td>
					
				</tr>
				
			</table>
		  <br/>
		  	<input type="hidden" name="idFuncao" value="<?php echo $idFuncao;?>">
			<input type="submit" value="Alterar" class="botao"/>
			<input type="reset" name="cancelar" value="Cancelar" class="botao" onclick="javascript: location.href='funcao.php';">
        </article>
    </form>
	</fieldset>	
  </section>
  

</div>
</body>
</html>






