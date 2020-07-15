<!-- variavel global php para apresntar o erro ao usr -->
<?php
//session usada para o aviso se cadastrou com sucesso
session_start();
include_once("conexao.php");
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"> <!-- traduz os código para caracteres latinos -->
    <title>Ale's Noivas</title>

    <meta name="author" content="Bruna e Natalia">
	<meta name="description" content="Website trata sobre aluguel de trajes para festas">
	<meta name="keywords" content="aluguel, vestidos"><!-- palavras que digitadas poderão levar ao seu site ser encontrado -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<!-- usada para reconhecer o bodstrap  é a tag mais importante a largura do site será igual a largura do dispositivo-->

	 <!-- css -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/all.css">
	<link rel="stylesheet" href="css/estilo.css">
	
	
	<!-- JAVASCRIPT -->
	<script src="js/jquery.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.mask.min.js"></script>
	
	<link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
	<!-- Favicon -->
	
	<link rel="shortcut icon" href="imagens/logo.png">

	<!-- script utilizado para validar campo senha e confirma senha se são iguais--> 
			<script language="javascript">
            function valida_dados(){
                 if(form.confsenha.value != form.senha.value)
                     {
                        alert("Confirmação de senha diferente. Tente novamente.");
                        document.form.confsenha.focus();
                        return false;
                     }
            }
            </script>


    <body>

		<!-- erro ou sucesso na tela ao enviar -->
		<?php
			if(isset($_SESSION['msg'])){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
		?>

	<div class="container-fluid" style="background-color: #97a1a8;">
        <!-- formulario -->
		
		<!-- start header -->
		<header> 
		
				<!--Início da barra de menu -->

				<nav class="navbar navbar-expand-lg no-margin">
					<a class="navbar-brand d-none d-lg-block pr-5" href="sistema.html"><img id="logo"src="imagens/logo.png" alt=""></a>
					<a class="navbar-brand font-weight-bold d-lg-none d-block pl-2 logo" href="#background">Ale's Noivas</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="fas fa-bars"></span>
					</button>

					<div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">

							<li class="nav-item pr-3">
								<a class="nav-link" href="sistema.php">Inicio</a>
							</li>

							<li class="nav-item pr-3">
								<a class="nav-link" href="funcionario.php">Funcionários</a>
								
							</li>
							<li class="nav-item pr-3">
								<a class="nav-link" href="funcao.php">Funções</a>
							</li>

							<li class="nav-item pr-3">
								<a class="nav-link" href="cliente.php">Clientes</a>
							</li>
							<li class="nav-item pr-3">
								<a class="nav-link" href="fornecedor.php">Fornecedores</a>
							</li>
							<li class="nav-item pr-3">
								<a class="nav-link" href="traje.php">Trajes</a>
							</li>
							<li class="nav-item pr-3">
								<a class="nav-link" href="aluguel.php">Aluguel</a>
							</li>
							<li class="nav-item pr-3">
								<a class="nav-link" href="login.php">Sair</a>
							</li>						
						</ul>
					</div>
				</nav>
				<script> //ao clicar em um link o menu recolhe
					$(document).ready(function () {
						$(".navbar-nav li a").click(function(event) {
							$(".navbar-collapse").collapse('hide');
						});
					});
				</script>
			</header>

		<section id="formulario">
			<div class="container">

				<form method="POST" action="processa.php"> 
					<!-- formatar mascaras -->
							<script type="text/javascript">
									$("#telefone").mask("(00)0000-0000");
    								$("#rg").mask("00.000.000-0");
    								$("#cpf").mask("000.000.000-00");
    								
    							</script>


					<div class="col-md-12">
						<h1>Funcionários</h1>
						<p>Preencha os campos abaixo para o cadastro de funcionários.</p>
					</div>
					<div class="row">
						<!-- dados pessoais -->
						<div class="col-md-6">
							<div class="form-group">
								<label >Nome*</label>
								<input type="text" name="nome" value="" class="form-control" id="nome"required>
                            </div>


                           

                            <div class="form-group">
								<label>Celular*</label>
								<input type="text" name="telefone" value="" class="form-control" id="telefone" required>
                            </div>
                            
                            <div class="form-group">
								<label>E-mail*</label>
								<input type="text" name="email" value="" class="form-control" id="email" required>
                            </div>
                            
                            
							<div class="form-group">
							    <label>Endereço completo*</label>
							    <input type="text" name="endereco" value="" class="form-control" id="endereco" required>
                            </div>


                            <div class="form-group">
									<label>Data de nascimento*</label>
									<input type="date" name="dataNascimento" value="" class="form-control" id="dataNascimento" required>
							</div>

							<div class="form-group">
								<label>CPF*</label>
								<input type="text" name="cpf" value="" class="form-control" id="cpf" required>
							</div>
							<div class="form-group">
								<label>RG*</label>
								<input type="text" name="rg" value="" class="form-control" id="rg" required>
                            </div>
                            
                            					
                        </div>

                        <!--div da direita-->
 						<div class="col-md-6">
							
							<div class="form-group">
							<label>Data de Admissão*</label>
									<input type="date" name="dataAdmissao" value="" class="form-control" id="dataAdmissao" required>
							</div>


							<div class="form-group">
									<label>Data de Demissão</label>
									<input type="date" name="dataDemissao" value="" class="form-control" id="dataDemissao">
							</div>
						

							<div class="form-group">
								<label>Salario*</label>
								<input type="text" name="salario" value="" class="form-control" id="salario" required>
							</div>
							
													
								
							<!-- dados do login -->
							
							<div class="form-group">
									<label>Login*</label>
									<input type="text" name="login" value="" class="form-control" id="login" required>
								</div>

								<div class="form-group">
									<label>Senha*</label>
									<input type="text" name="senha" value="" class="form-control" id="senha" required>
								</div>
									
									<div class="form-group">
									<label>Função*</label>
										<select name="tipofuncao">
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
								<!-- campos obrigatórios -->	
								<div class="col-md-6 text-center mx-auto d-block" style="padding-top: 5px;">
								<p>Verifique os campos assinalados</p>  
								<p>* CAMPO OBRIGATÓRIO</p>
								<button class="btn" type="submit" id="btn-enviar-contato" style="background-color: #091b29; color:#97a1a8; ">Cadastrar Funcionário</button>
								

								</div>
							
								

							
							</div>

							
						
							
							</div><!-- end col direita  -->
						</div><!-- end row principal -->
					</form> <!-- end formulario -->
				</div> <!-- end container -->
			<fieldset>
             <legend>
              <table>
                 <tr>
                    <td><h4>Gerenciar Funcionarios</h4></a></td>
                 </tr>
              </table>
             </legend>
             <article>
                  <table class="table">
                   <tr class="tr">
                    <td class="tabletd">Editar</td>
                    <td class="tabletd">Excluir</td>
                    <td class="tabletd">Nome</td>
                    <td class="tabletd">Telefone</td>
                   
                    
                   
                   </tr>
                   <?php
                        include "funcoesbd.php";
                        $conexao = conecta_bd();
                        lista_funcionarios_bd ($conexao);
                   ?>
                 </table>
            </article>
        </fieldset>
			</section><!-- end formulario -->
			<footer id="footer" class="no-margin">
							<div class="footer-top text-center">

								<section class="row col-md-12">
									<div class="col-lg-4 col-md-12 agradecimentos">
										<h3>Ale's Noivas</h3>
								
									</div>
									<div class="col-lg-4 col-md-12 contatos">
										<h4>Contate-nos</h4>

										<ul>
											<div style="color: #fff"><li class="fas fa-phone mr-1" style="color:#97a1a8"></li>(35)98891-0782</div> <br>
											


										</ul>
										<div class="redes-sociais">
											<ul>
												<a target="_blank" href="https://www.facebook.com/Ales-Noivas-194238994406490/"><span class="fab fa-facebook-f facebook"></span></a>
												<a target="_blank" href="https://instagram.com/alesvestidos?igshid=10xz4klcsqqg1"><span class="fab fa-instagram instagram" ></span></a>

											</ul>	
										</div>
									</div>
									<div class="col-lg-4 col-md-12 loc">
										<h4>Localização</h4>
										<p id="rua">Praça Antônio Carlos - Edifício Bias Maciel, Loja 2 </p>
										<p id="rua">Machado - MG </p>
										<a href="index.html"><div style="color: #fff" ><li class="fas fa-home mr-1" style="color:#97a1a8" ></li>Voltar</div></a> 

									</div>
								</section>

							</div>
						</footer>
							<div class="copyright no-margin">
							<p id="copyright" style="color:#fff">Copyright 2020 </p> 
							<p>By Bruna Amorim e Natália Paulino</p>
							</div>
						<a href="#top" class="fas fa-angle-double-up"></a>
						<!-- criando uma function para o icon fas fa-angle-double-up levar o usuário ao topo da pagina -->
						<script>
							$(document).ready(function(){
								$(window).scroll(function(){
									if ($(this).scrollTop() > 100) {
										$('a[href="#top"]').fadeIn();
									} else {
										$('a[href="#top"]').fadeOut();
									}
								});
								$('a[href="#top"]').click(function(){
									$('html, body').animate({scrollTop : 0},800);
									return false;
								});
							});
						</script>
						<!-- end of footer -->

					</div>
</body>
    </head>
			</html>

