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
	$idAlugueis = $_GET["idAlugueis"];
	//acesso ao banco de dados
	include "funcoesbd.php";
	$conexao = conecta_bd();
	$dados = consulta_editar_aluguel($conexao,$idAlugueis);
		$idAlugueis = $dados["idAlugueis"];
		$descricao = $dados["descricao"];
		$valor = $dados["valor"];
		$desconto = $dados["desconto"];
		$valorFinal = $dados["valorFinal"];
		$data = $dados["data"];
		$Funcionarios_idFuncionario = $dados["Funcionarios_idFuncionario"]; 
		$Clientes_idClientes = $dados["Clientes_idClientes"];
		$Trajes_idTrajes = $dados["Trajes_idTrajes"];
		
		
 ?>
<body style="background-color: #97a1a8;">


  <section id="formulario">
  	<div class="container">

  		<form action="edaluguel_envia.php" method="post" name="form" id="form" onSubmit="return valida_dados(this)">


			<div class="col-md-12">
				
				<p><h2>Alterar dados do Aluguel</h2></p>
			 </div>

		<div class="row">
						
	<div class="col-md-6"> <!--div da esquerda-->
							
		
		 <div class="form-group">
					<label>Descrição:</label>
					<input type="text" required="required" name="descricao" class="form-control" value="<?php echo  
					$descricao;?>">
		</div>

		<div class="form-group">
					<label>Valor*</label>
					<input type="text" required="required" name="valor" class="form-control" value="<?php echo 
					$valor;?>">
        </div>

        <div class="form-group">
					<label>Desconto*</label>
					<input type="text" required="required" name="desconto" class="form-control" value="<?php echo 
					$desconto;?>">
		</div>

		<div class="form-group">
					<label>Valor Final</label>
					<input type="text" required="required" name="valorFinal" class="form-control" value="<?php echo 
					$valorFinal;?>">
        </div>

    </div> <!--fim da div da esquerda-->

    	<!--div da direita-->
 		<div class="col-md-6">

        <div class="form-group">
					<label>Data</label>
					<input type="date" required="required" name="data" class="form-control" value="<?php echo 
					$data;?>">
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

		 <div class="form-group">                              
					<label>Cliente</label>
					<select name="cliente">
						<?php
							$sql = "select * from clientes";
							$resultado_cliente = mysqli_query($conn, $sql);
							while( $dados = mysqli_fetch_array($resultado_cliente)){
								$codigo = $dados['idClientes'];
								$cliente = $dados['nome'];
								echo "<option value=$codigo>$cliente</option>";	
							}
						?>
					</select>
                           
		</div>
				
		 <div class="form-group">                              
					<label>Traje</label>
					<select name="traje">
					<?php
							$sql = "select * from trajes";
							$resultado_traje = mysqli_query($conn, $sql);
							while( $dados = mysqli_fetch_array($resultado_traje)){
								$codigo = $dados['idTrajes'];
								$traje = $dados['nome'];
								echo "<option value=$codigo>$traje</option>";	
							}
						?>
                    </select>
		</div>
		<!-- div campos obrigatórios -->	
			<div class="col-md-6 text-center mx-auto d-block" style="padding-top: 5px;">
								<p>Verifique os campos assinalados</p>  
								<p>* CAMPO OBRIGATÓRIO</p>
		  	<input type="hidden" name="idAlugueis" value="<?php echo $idAlugueis;?> ">
			<input type="submit" class="btn" value="Alterar" class="botao" style="background-color: #091b29; color:#97a1a8; ">
			<input type="reset" class="btn" name="cancelar" value="Cancelar" class="botao" onclick="javascript: location.href='aluguel.php';" style="background-color: #091b29; color:#97a1a8; ">
			
			</div> <!--fim da div campos obrigatórios -->
				
				
			

	</div><!-- end col direita  -->
		
	</div><!-- end row principal -->
	</form> <!-- end formulario -->
	</div> <!-- end container -->
       

</section>
</body>
</html>






