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
    
    <body>
	<div class="container-fluid" style="background-color: #97a1a8;">
		<!-- start header -->
		<header> 
		
				<!--Início da barra de menu -->

				<nav class="navbar navbar-expand-lg no-margin">
					<a class="navbar-brand d-none d-lg-block pr-5" href="login.php"><img id="logo"src="imagens/logo.png" alt=""></a>
					<a class="navbar-brand font-weight-bold d-lg-none d-block pl-2 logo" href="#background">Ale's Noivas</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="fas fa-bars"></span>
					</button>

					<div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">

							<li class="nav-item pr-3">
								<a class="nav-link" href="login.php">Ale's Noivas: Aluguel de trajes de festa.</a>
							</li>

						</ul>
					</div>
				</nav>
				
        </header>

        <section id="formulario">
			<div class="container">
				<form method="POST" action="processafuncao.php">
					<div class="col-md-12">
						<h2>Login</h2>
						<p>Preencha os campos abaixo para fazer o login.</p>
						<div class="row">
								<!-- dados pessoais -->
								<div class="col-md-6">
									<div class="form-group">
										<label >Usuário</label>
									<input type="text" name="login" value="" class="form-control" id="login"required><br>
									</div>
									<div class="form-group">
										<label >Senha</label>
									<input type="text" name="senha" value="" class="form-control" id="senha"required><br>
									</div>
								
								
										<!-- campos obrigatórios -->	
										<div class="form-group" style="padding-top: 5px;">
										
										<button class="btn" type="submit" id="btn-enviar-contato" style="background-color: #091b29; color:#97a1a8; ">Acessar</button>
										</div>
								</div>
								
							</div>	<!-- end row principal -->

					</div>
				</form>
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
										 

									</div>
								</section>

							</div>
        </footer>
        <!-- fim footer -->
		<div class="copyright no-margin">
			<p id="copyright" style="color:#fff">Copyright 2020 - by Bruna Amorim e Natália Paulino</p> 
		</div>
	</div>	<!-- fim container fluid -->
    </body>
</head>
</html>

