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
	<link rel="stylesheet" href="css/eventoEstilo.css">	
	
	<!-- JAVASCRIPT -->
	<script src="js/jquery.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.mask.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
	<!-- Favicon -->
	<link rel="shortcut icon" href="imagens/logo.png">
    
    <body>
	<div class="container-fluid" style="background-color: #97a1a8;">
		<!-- start header -->
		<header> 
		
				<!--Início da barra de menu -->

				<nav class="navbar navbar-expand-lg no-margin">
					<a class="navbar-brand d-none d-lg-block pr-5" href="index.html"><img id="logo"src="imagens/logo.png" alt=""></a>
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
				<form method="POST" action="processafuncao.php">
					<div class="col-md-12">
						<h1>Ale's Noivas</h1>
						<p>Clique nas imagens abaixo para escolher qual página do sistema deseja acessar.</p>
						<!--<div class="row" style="padding-bottom: 15%;">
								
						</div>-->
								
					</div>	<!-- end row principal -->

			</div>
				</form>
		<div class="row">
			<div class="col-md-4">
				<h5 class="text-center">Funcionários</h5>
				<a href="funcionario.php"><img src="./imagens/funcionario.jpg" alt="" width="70%" class="mx-auto d-block"></a>
			</div>
			<div class="col-md-4">
				<h5 class="text-center">Funções</h5>
				<a href="funcao.php"><img src="./imagens/funcao.jpg" alt="" width="70%" class="mx-auto d-block"></a>
			</div>
			<div class="col-md-4">
				<h5 class="text-center">Clientes</h5>
				<a href="cliente.php"><img src="./imagens/cliente.jpg" alt="" width="70%" class="mx-auto d-block"></a>
			</div>
		</div>
		<div class="row" id="imgs">
			<div class="col-md-4">
				<h5 class="text-center">Fornecedores</h5>
				<a href="fornecedor.php"><img src="./imagens/fornecedores.jpg" alt="" width="70%" class="mx-auto d-block"></a>
			</div>

			<div class="col-md-4">
				<h5 class="text-center">Trajes</h5>
				<a href="traje.php"><img src="./imagens/trajes.jpg" alt="" width="70%" class="mx-auto d-block"></a>
			</div>

			<div class="col-md-4">
				<h5 class="text-center">Aluguel</h5>
				<a href="aluguel.php"><img src="./imagens/aluguel.jpg" alt="" width="70%" class="mx-auto d-block"></a>
			</div>
		</div> <!-- fim imagens -->
			</div>
		</section>
        <!-- fim header -->


        
        <!-- start footer -->
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
        <!-- fim footer -->
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
	</div>	<!-- fim container fluid -->
    </body>
</head>
</html>

