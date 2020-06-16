<!-- 
?php
	include ("valida_session.php");
	header('Content-type: text/html; charset=ISO-8859-1');
?>
-->
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
	$idFornecedores = $_GET["idFornecedores"];
	//acesso ao banco de dados
	include "funcoesbd.php";
	$conexao = conecta_bd();
	$dados = consulta_editar_fornecedor($conexao,$idFornecedores);
		$idFornecedores = $dados["idFornecedores"];
		$nome = $dados["nome"];
		$endereco = $dados["endereco"];
		$telefone = $dados["telefone"];
		$cnpj = $dados["cnpj"];
		$email = $dados["email"]; 
		$cep = $dados["cep"];
		
		
 ?>
<body style="background-color: #97a1a8;">


  <section id="formulario">
  	<div class="container">

  		<form action="edfornecedor_envia.php" method="post" name="form" id="form" onSubmit="return valida_dados(this)">


			<div class="col-md-12">
				
				<p><h2>Alterar dados do Fornecedor</h2></p>
			 </div>

		<div class="row">
						
	<div class="col-md-6"> <!--div da esquerda-->
							
		
		 <div class="form-group">
					<label>Nome:</label>
					<input type="text" required="required" name="nome" class="form-control" value="<?php echo  
					$nome;?>">
		</div>

		<div class="form-group">
					<label>Endereço completo*</label>
					<input type="text" required="required" name="endereco" class="form-control" value="<?php echo 
					$endereco;?>">
        </div>

        <div class="form-group">
					<label>Telefone*</label>
					<input type="text" required="required" name="telefone" class="form-control" value="<?php echo 
					$telefone;?>">
		</div>

		<div class="form-group">
					<label>CNPJ</label>
					<input type="text" required="required" name="cnpj" class="form-control" value="<?php echo 
					$cnpj;?>">
        </div>

    </div> <!--fim da div da esquerda-->

    	<!--div da direita-->
 		<div class="col-md-6">

        <div class="form-group">
					<label>E-mail</label>
					<input type="text" required="required" name="email" class="form-control" value="<?php echo 
					$email;?>">
		</div>
        
        <div class="form-group">                              
					<label>CEP</label>
					<input type="text" required="required" name="cep" class="form-control" value="<?php echo 
					$cep;?>">
                           
		</div>
				
			<!-- div campos obrigatórios -->	
			<div class="col-md-6 text-center mx-auto d-block" style="padding-top: 5px;">
								<p>Verifique os campos assinalados</p>  
								<p>* CAMPO OBRIGATÓRIO</p>
		  	<input type="hidden" name="idFornecedores" value="<?php echo $idFornecedores;?> ">
			<input type="submit" class="btn" value="Alterar" class="botao" style="background-color: #091b29; color:#97a1a8; ">
			<input type="reset" class="btn" name="cancelar" value="Cancelar" class="botao" onclick="javascript: location.href='fornecedor.php';" style="background-color: #091b29; color:#97a1a8; ">
			
			</div> <!--fim da div campos obrigatórios -->	

	</div><!-- end col direita  -->
	</div><!-- end row principal -->
	</form> <!-- end formulario -->
	</div> <!-- end container -->
       

</section>
</body>
</html>






