<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" >
	
	<title>InNove me</title>
	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
</head>

<body>

	<!-- CABECALHO -->
	<header id="cabecalho">
	  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-93979807-1', 'auto');
  ga('send', 'pageview');

</script>
	<nav class="navbar navbar-default navbar-static-top" id="nav_wrapper">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" 
					data-toggle="collapse" data-target="#navbar">
				<!-- A classe sr-only só é exibida em leitor de tela para que pessoas
					com deficiencia visual entendam o que há na tela -->
					<span class="sr-only">Menu de Navegação</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!-- Logomarca ao lado esquerdo -->
				<a class="navbar-brand" href="/"><img src="./img/innove_logo_inverso.png" alt="Logo"></a>
			</div>
			<!-- Itens da navbar -->
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="/home/principal">Home</a></li>
				</ul>
			</div><!-- fim .nav-collapse -->
		</div><!-- fim .container -->
	</nav>
	</header>
	<!-- END CABECALHO -->	
	
	<main id="conteudo">
	
			<section class="conteudo-central">
				<div id="banner-home">
					<article>
						<figure><img src="./img/post_face_01.jpg" alt="Banner principal"></figure>
					</article>
				</div>

				<article class="form">
					<div class="container">
						<form action="/" method="post">
                                                        
                                                    <?php if($mensagem):?>
                                                    <h4><?php echo $mensagem;?> </h4>
                                                    <?php endif; ?>
                                                    
							<h3>Quer ser um Campeão?</h3>
							<h3>Baixe Aqui o seu Ebook!</h3>
							<div class="grupo">
								<label for="campo1">Nome</label>
                                                                <input type="text" required="" id="campo1" name="nome">
							</div>
							
							<div class="grupo">
								<label for="campo2">Sobrenome</label>
                                                                <input type="text" required="" id="campo2" name="sobrenome">
							</div>
							
							<div class="grupo">
								<label for="campo3">E-mail</label>
                                                                <input type="email" required="" id="campo3" name="email">
							</div>

							<button class="btn btn-cadastrar" type="submit">Eu Quero!</button>
							
							<div class="row text-center  ">
								<p>Não se preocupe! </p>
								</p>Também odiamos SPAM</p>
							</div>
						</form>
					</div>
				</article>
			</section>
		

	</main>
	
	
	
	
		<!-- RODAPE -->
	<footer id="rodape">
		<div class="container">
			<p>InNove</p>
		</div>
	</footer>
	<!-- END RODAPE -->


	<!-- SCRIPTS -->
	<script type="text/javascript" src="js/pickaday.js"></script>
	<script>
		$(".datepicker").datepicker({
			dateFormat: "dd/mm/yy"
		});
	</script>

	
<script type="text/javascript" src="js/jquery-1.11.3.min.js"> </script>
<script type="text/javascript" src="js/bootstrap.min.js"> </script>

</body>

</html>