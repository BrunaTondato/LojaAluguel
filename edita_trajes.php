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
	
</head>



<?php
	/* recebe o código do usuário que terá as informações editadas */
	$idTrajes = $_GET["idTrajes"];
	//acesso ao banco de dados
	include "funcoesbd.php";
	$conexao = conecta_bd();
	$dados = consulta_editar_traje($conexao,$idTrajes);
		$idTrajes = $dados["idTrajes"];
		$nome = $dados["nome"];
		$descricao = $dados["descricao"];
		$status = $dados["status"];
		$Funcionarios_idFuncionario = $dados["Funcionarios_idFuncionario"]; 
		$Fornecedores_idFornecedores = $dados["Fornecedores_idFornecedores"];
		
		
		
 ?>
<body style="background-color: #97a1a8;">


  <section id="formulario">
  	<div class="container">

  		<form action="edtraje_envia.php" method="post" name="form" id="form" onSubmit="return valida_dados(this)">


			<div class="col-md-12">
				
				<p><h2>Alterar dados do Traje</h2></p>
			 </div>

		<div class="row">
						
	<div class="col-md-6"> <!--div da esquerda-->

		<div class="form-group">
					<label>Nome*</label>
					<input type="text" required="required" name="nome" class="form-control" value="<?php echo 
					$nome;?>">
        </div>
							
		
		 <div class="form-group">
					<label>Descrição:</label>
					<input type="text" required="required" name="descricao" class="form-control" value="<?php echo  
					$descricao;?>">
		</div>

		

        <div class="form-group">
					<label class="form-check-label" for="status">Status*:</label>
								<p><input type="radio" name="status" value="disponivel"> Disponivel
						        <input type="radio" name="status" value="alugado"> Alugado
                           		<input type="radio" name="status" value="lavando"> Lavando
		</div>


    </div> <!--fim da div da esquerda-->

    	<!--div da direita-->
 		<div class="col-md-6">

            
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

		 <div class="form-group">                              
					<label>Fornecedor</label>
					<select name="fornecedor">
						<?php
							$sql = "select * from fornecedores";
							$resultado_fornecedor = mysqli_query($conn, $sql);
							while( $dados = mysqli_fetch_array($resultado_fornecedor)){
								$codigo = $dados['idFornecedores'];
								$fornecedor = $dados['nome'];
								echo "<option value=$codigo>$fornecedor</option>";	
							}
						?>
					</select>
                           
		</div>
				
		
		<!-- div campos obrigatórios -->	
			<div class="col-md-6 text-center mx-auto d-block" style="padding-top: 5px;">
								<p>Verifique os campos assinalados</p>  
								<p>* CAMPO OBRIGATÓRIO</p>
		  	<input type="hidden" name="idTrajes" value="<?php echo $idTrajes;?> ">
			<input type="submit" class="btn" value="Alterar" class="botao" style="background-color: #091b29; color:#97a1a8; ">
			<input type="reset" class="btn" name="cancelar" value="Cancelar" class="botao" onclick="javascript: location.href='traje.php';" style="background-color: #091b29; color:#97a1a8; ">
			
			</div> <!--fim da div campos obrigatórios -->
				
				
			

	</div><!-- end col direita  -->
		
	</div><!-- end row principal -->
	</form> <!-- end formulario -->
	</div> <!-- end container -->
       

</section>
</body>
</html>






