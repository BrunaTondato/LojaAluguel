<!-- variavel global php para apresntar o erro ao usr -->
<?php
//session usada para o aviso se cadastrou com sucesso
session_start();
include_once("conexao.php");
?>

<!DOCTYPE html>
<html>
<head> 
  <meta charset="UTF-8">
  <title>Gerenciador de Alugueis</title>   
  <link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/all.css">
	<link rel="stylesheet" href="css/estilo.css">
  <script src="js/jquery-1.js" type="text/javascript"></script>
  <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">

  	<!-- JAVASCRIPT -->
	<script src="js/jquery.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.mask.min.js"></script>
	
</head>



<?php
	/* recebe o código do usuário que terá as informações editadas */
	$idClientes = $_GET["idClientes"];
	//acesso ao banco de dados
	include "funcoesbd.php";
	$conexao = conecta_bd();
	$dados = consulta_editar_cliente($conexao,$idClientes);
		$idClientes= $dados["idClientes"];
		$nome = $dados["nome"];
		$endereco = $dados["endereco"];
		$telefone = $dados["telefone"];
		$dataNascimento = $dados["dataNascimento"];
		$cpf = $dados["cpf"]; 
		$cep = $dados["cep"]; 
		$email = $dados["email"];
		$Funcionarios_idFuncionario = $dados["Funcionarios_idFuncionario"];
		
		
 ?>
<body style="background-color: #97a1a8;">


  <section id="formulario">
  	<div class="container">

  		<form action="edcliente_envia_restricao.php" method="post" name="form" id="form" onSubmit="return valida_dados(this)">
  			
  			<!-- formatar mascaras -->
							<script type="text/javascript">
									$("#telefone").mask("(00)0000-0000");
    								$("#cep").mask("00000-000");
    								$("#cpf").mask("000.000.000-00");
    								
    							</script>


			<div class="col-md-12">
				
				<p><h2>Alterar dados do Cliente</h2></p>
			 </div>

		<div class="row">
						
	<div class="col-md-6"> <!--div da esquerda-->
							
		
		 <div class="form-group">
					<label>Nome:</label>
					<input type="text" required="required" name="nome" class="form-control" value="<?php echo $nome;?>">
		</div>

		<div class="form-group">
					<label>Endereço</label>
					<input type="text" required="required" name="endereco" class="form-control" value="<?php echo 
					$endereco;?>">
        </div>

		<div class="form-group">
					<label>Celular*</label>
					<input type="text" required="required" name="telefone" class="form-control" value="<?php echo 
					$telefone;?>">
        </div>
        <div class="col-md-6">
 			  <div class="form-group">
					<label>Data de Nascimento</label>
					<input type="date" required="required" name="dataNascimento" class="form-control" value="<?php echo 
					$dataNascimento;?>">
		</div>
</div> <!--fim da div da esquerda-->
</div>
         	
        
    

    	<!--div da direita-->
	<div class="col-md-6">
		<div class="form-group">
					<label>CPF</label>
					<input type="text" required="required" name="cpf" class="form-control" value="<?php echo 
					$cpf;?>">
        </div>
        <div class="form-group">
					<label>CEP</label>
					<input type="text" required="required" name="cep" class="form-control" value="<?php echo 
					$cep;?>">
        </div>



        <div class="form-group">
					<label>Email*</label>
					<input type="text" required="required" name="email" class="form-control" value="<?php echo 
					$email;?>">
		</div>
 		

        
       
          <div class="form-group">                              
					<label>Funcionário</label>
					<select name="funcionario">
						<?php
							$sql = "select * from funcionarios";
							$resultado_funcionario = mysqli_query($conn, $sql);
							while( $dados = mysqli_fetch_array($resultado_funcionario)){
								$codigo = $dados['idFuncionario'];
								$funcionario = $dados['nome'];
								echo "<option value=$codigo>$funcionario</option>";	
							}
						?>
					</select>
                           
		</div>

		 
		<!-- div campos obrigatórios -->	
			<div class="col-md-6 text-center mx-auto d-block" style="padding-top: 5px;">
								<p>Verifique os campos assinalados</p>  
								<p>* CAMPO OBRIGATÓRIO</p>
		  	<input type="hidden" name="idClientes" value="<?php echo $idClientes;?> ">
			<input type="submit" class="btn" value="Alterar" class="botao" style="background-color: #091b29; color:#97a1a8; ">
			<input type="reset" class="btn" name="cancelar" value="Cancelar" class="botao" onclick="javascript: location.href='cliente_tela_funcionario.php';" style="background-color: #091b29; color:#97a1a8; ">
			
			</div> <!--fim da div campos obrigatórios -->
				
				
			

	</div><!-- end col direita  -->
		
	</div><!-- end row principal -->
	</form> <!-- end formulario -->
	</div> <!-- end container -->
       

</section>
</body>
</html>






