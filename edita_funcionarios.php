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
  <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
</head>



<?php
	/* recebe o código do usuário que terá as informações editadas */
	$idFuncionario = $_GET["idFuncionario"];
	//acesso ao banco de dados
	include "funcoesbd.php";
	$conexao = conecta_bd();
	$dados = consulta_editar_funcuncionario($conexao,$idFuncionario); //procurando os dados 
		$idFuncionario = $dados["idFuncionario"];
		$nome = $dados["nome"];
		
		
 ?>
<body style="background-color: #97a1a8;">

 <section id="formulario">
			<div class="container">
	
			<form action="edfuncionario_envia.php" method="post" name="form" id="form" onSubmit="return valida_dados(this)">

				<div class="col-md-12">

				<h2>Alterar dados da função</h2>

				</div>
			 
		<div class="row">

	<div class="col-md-6"> <!-- div da esquerda-->
		
		<div class="form-group">  
		<label>Nome:</label>
		<input type="text" required="required" name="nome" class="form-control" value="<?php echo  $nome;?>">
		</div>


	</div> <!--fim da div da esquerda-->

	<div class="col-md-6"> <!--div da direita-->

	<div class="col-md-6 text-center mx-auto d-block" style="padding-top: 5px;">
			<p>Verifique os campos assinalados</p>  
			<p>* CAMPO OBRIGATÓRIO</p>
		  	<input type="hidden" name="idFuncionario" value="<?php echo $idFuncionario;?>">
			<input type="submit" class="btn" value="Alterar" class="botao" style="background-color: #091b29; color:#97a1a8; ">
			<input type="reset" class="btn" name="cancelar" value="Cancelar" class="botao" onclick="javascript: location.href='funcionario.php';" style="background-color: #091b29; color:#97a1a8; ">
     </div> 

     </div><!--fim da div da direita-->

	</div><!-- end row principal -->
	</form> <!-- end formulario -->
	</div> <!-- end container -->
       

</section>
</body>
</html>


 






