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
	$idFuncionario = $_GET["idFuncionario"];
	//acesso ao banco de dados
	include "funcoesbd.php";
	$conexao = conecta_bd();
	$dados = consulta_editar_funcionario($conexao,$idFuncionario);
		$idFuncionario = $dados["idFuncionario"];
		$nome = $dados["nome"];
		$telefone = $dados["telefone"];
		$email = $dados["email"];
		$endereco = $dados["endereco"];
		$dataNascimento = $dados["dataNascimento"];
		$cpf = $dados["cpf"]; 
		$rg = $dados["rg"];
		$dataAdmissao = $dados["dataAdmissao"];
		$dataDemissao = $dados["dataDemissao"];
		$salario = $dados["salario"];
		$login = $dados["login"];
		$senha = $dados["senha"];
		$Funcao_idFuncao = $dados["Funcao_idFuncao"];
		
		
 ?>
<body style="background-color: #97a1a8;">


  <section id="formulario">
  	<div class="container">

  		<form action="edfuncionario_envia.php" method="post" name="form" id="form" onSubmit="return valida_dados(this)">


			<div class="col-md-12">
				
				<p><h2>Alterar dados do Funcionário</h2></p>
			 </div>

		<div class="row">
						
	<div class="col-md-6"> <!--div da esquerda-->
							
		
		 <div class="form-group">
					<label>Nome:</label>
					<input type="text" required="required" name="nome" class="form-control" value="<?php echo $nome;?>">
		</div>

		<div class="form-group">
					<label>Telefone*</label>
					<input type="text" required="required" name="telefone" class="form-control" value="<?php echo 
					$telefone;?>">
        </div>

        <div class="form-group">
					<label>Email*</label>
					<input type="text" required="required" name="email" class="form-control" value="<?php echo 
					$email;?>">
		</div>

		<div class="form-group">
					<label>Endereço</label>
					<input type="text" required="required" name="endereco" class="form-control" value="<?php echo 
					$endereco;?>">
        </div>
        <div class="form-group">
					<label>Data de Nascimento</label>
					<input type="date" required="required" name="dataNascimento" class="form-control" value="<?php echo 
					$dataNascimento;?>">
		</div>

		<div class="form-group">
					<label>CPF</label>
					<input type="text" required="required" name="cpf" class="form-control" value="<?php echo 
					$cpf;?>">
        </div>
        <div class="form-group">
					<label>RG</label>
					<input type="text" required="required" name="rg" class="form-control" value="<?php echo 
					$rg;?>">
        </div>

    </div> <!--fim da div da esquerda-->

    	<!--div da direita-->
 		<div class="col-md-6">
 			<div class="form-group">
					<label>Data Admissão</label>
					<input type="text" required="required" name="dataAdmissao" class="form-control" value="<?php echo 
					$dataAdmissao;?>">
        </div>
		<div class="form-group">
					<label>Data de Demissão</label>
					<input type="date" required="required" name="dataDemissao" class="form-control" value="<?php echo 
					$dataDemissao;?>">
		</div>

		<div class="form-group">
					<label>Salário</label>
					<input type="text" required="required" name="salario" class="form-control" value="<?php echo 
					$salario;?>">
        </div>

        <div class="form-group">
					<label>Login</label>
					<input type="text" required="required" name="login" class="form-control" value="<?php echo 
					$login;?>">
        </div>

        <div class="form-group">
					<label>Senha</label>
					<input type="text" required="required" name="senha" class="form-control" value="<?php echo 
					$senha;?>">
        </div>

       
        <div class="form-group">                              
					<label>Função</label>
					<select name="funcao">
						<?php
							$sql = "select * from funcao";
							$resultado_funcao = mysqli_query($conn, $sql);
							while( $dados = mysqli_fetch_array($resultado_funcao)){
								$codigo = $dados['idFuncao'];
								$funcao = $dados['nome'];
								echo "<option value=$codigo>$funcao</option>";	
							}
						?>
					</select>
                           
		</div>

		 
		<!-- div campos obrigatórios -->	
			<div class="col-md-6 text-center mx-auto d-block" style="padding-top: 5px;">
								<p>Verifique os campos assinalados</p>  
								<p>* CAMPO OBRIGATÓRIO</p>
		  	<input type="hidden" name="idFuncionario" value="<?php echo $idFuncionario;?> ">
			<input type="submit" class="btn" value="Alterar" class="botao" style="background-color: #091b29; color:#97a1a8; ">
			<input type="reset" class="btn" name="cancelar" value="Cancelar" class="botao" onclick="javascript: location.href='funcionario.php';" style="background-color: #091b29; color:#97a1a8; ">
			
			</div> <!--fim da div campos obrigatórios -->
				
				
			

	</div><!-- end col direita  -->
		
	</div><!-- end row principal -->
	</form> <!-- end formulario -->
	</div> <!-- end container -->
       

</section>
</body>
</html>






