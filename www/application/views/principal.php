<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" >
	
	<title>InNove me</title>
	
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/css/style.css">
	
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
					<li><a href="/home">Cadastro</a></li>
                                        <li><a href="<?php echo ($this->session->userdata("ativo") == "ebook")? "/home/ebook": "/home"; ?>">E-Book</a></li>

				</ul>
			</div><!-- fim .nav-collapse -->
		</div><!-- fim .container -->
	</nav>
	</header>
	<!-- END CABECALHO -->


	
	
	
	
	
	
	
		<!-- Carrossel
	================================================== -->
	<div id="carrossel" class="carousel slide" data-ride="carousel">
		<!-- Indicadores para mudar de imagem -->
		<ol class="carousel-indicators">
			<li data-target="#carrossel" data-slide-to="0" class="active"></li>
			<li data-target="#carrossel" data-slide-to="1"></li>
			<li data-target="#carrossel" data-slide-to="2"></li>
			<li data-target="#carrossel" data-slide-to="3"></li>
			<li data-target="#carrossel" data-slide-to="4"></li>
		</ol>
		
		<div class="carousel-inner">
			<!-- Primeira Imagem -->
			<div class="item">
				<img class="third-slide" src="/img/capa.jpg" alt="Aproveitem!" />
				<div class="container">
					<div class="carousel-caption">

					</div>
				</div>
			</div>		
			
			
			<div class="item active">
				<img class="first-slide" src="/img/anuncio (1).jpg" alt="Primeiro Slide" />
				<div class="container">
					<div class="carousel-caption">

					</div>
				</div>
			</div>
			
			<div class="item">
				<img class="second-slide" src="/img/anuncio (2).jpg" alt="Página HTML5!!" />
				<div class="container">
					<div class="carousel-caption">

					</div>
				</div>
			</div>
			
			<div class="item">
				<img class="third-slide" src="/img/anuncio (3).jpg" alt="Aproveitem!" />
				<div class="container">
					<div class="carousel-caption">

					</div>
				</div>
			</div>
			<div class="item">
				<img class="third-slide" src="/img/anuncio (4).jpg" alt="Aproveitem!" />
				<div class="container">
					<div class="carousel-caption">

					</div>
				</div>
			</div>
		</div> <!-- fim carousel-inner -->
		
		<!-- Setas para mudar imagem -->
        <a class="left carousel-control" href="#carrossel" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
			<span class="sr-only">Anterior</span>
        </a>
		
        <a class="right carousel-control" href="#carrossel" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
			<span class="sr-only">Proximo</span>
        </a>
		
	</div> <!-- fim carousel -->
	
	
	
	<div class="container conteudo" id="conteudo_imagens">
		<!-- Cabecalho da seção -->
		<div class="row text-center titulo_secao" >
			<div class="col-md-6 col-md-offset-3">
				<!-- Título da seção -->
				<h2 class="head-set">Aprenda sobre as tecnologias mais utilizadas atualmente</h2>
				<!-- Sub-título da seção -->
				<p>
					Torne-se um profissional capaz de lidar com qualquer situação!
				</p>
			</div>
		</div>
		
		<div class="row text-center">
            <!-- Primeiro Item -->
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 ">
                <img class="img-circle" src="/img/3c.jpg" alt="Aumentem seus conhecimentos!" 
					width="240" height="240" />
                <h2>Os 3 C's</h2>
                <p>Quais são os 3 C’S dá credibilidade de um líder? !</p>
                <p><a class="btn btn-success" href="/detalhes/conteudo1" >Ver Detalhes &raquo;</a></p>
            </div>
			
			 <!-- Segundo item -->
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 ">
                <img class="img-circle" src="/img/lider.jpg" alt="Nosa página esta quase pronta!"
					width="240" height="240">
                <h2>Quer ser um Líder?</h2>
                <p>Você está pronto para sua oportunidade?</p>
                <p><a class="btn btn-primary" href="/detalhes/conteudo2" >Ver Detalhes &raquo;</a></p>
            </div>
			
            <!-- Terceiro item -->
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 ">
                <img class="img-circle" src="/img/gh.jpg" alt="Aprenda sobre isto!" 
					width="240" height="240">
                <h2>Growth Hacking </h2>
                <p>As vagas só aumentam pra essa área</p>
                <p><a class="btn btn-danger" href="/detalhes/conteudo3" >Ver Detalhes &raquo;</a></p>
            </div>
			

		</div>
	</div> <!-- fim #conteudo_imagens -->
	

	
	<div class="container conteudo" id="conteudo_imagens">
		<!-- Cabecalho da seção -->
		<div class="row text-center titulo_secao" >
			<div class="col-md-6 col-md-offset-3">
				<!-- Título da seção -->
				<h2 class="head-set">Fique atento s mudanças</h2>
				<!-- Sub-título da seção -->
				<h4>
				<p align="justify">
				O cotidiano agitado leva o consumidor a procurar mais praticidade! Enfrentar filas e se deslocar, fazem com que pensem duas vezes antes de comprar, em várias ocasiões até desistem.<br/>
				Hoje, estar presente no mundo digital é uma obrigação! Ter apenas um site já não é o suficiente. Segundo dados do cuponomamia a penetração do mobile no e-commerce no Brasil cresceu 170% em 2016, enquanto o desktop cresceu apenas 50%.<br/>
				O número de adeptos ao mobile cresce em ritmo acelerado graças a praticidade que essa plataforma traz, ter um app do seu negócio é o mesmo que facilitar a vida do seu consumidor! Você interage de forma pessoal com ele criando uma relação que vai além da venda, o que vai gerar mais fidelização e lucro para seu empreendimento!<br/>
				</p>
				
				</h4>
			</div>
		</div>

	</div> <!-- fim #conteudo_imagens -->
	
	
	
	
	
	<div class="container-fluid" id="background_icones">
		<div class="container conteudo" id="conteudo_icones">
			<!-- Cabecalho da seção -->
			<div class="row text-center titulo_secao" >
				<div class="col-md-6 col-md-offset-3">
					<!-- Título da seção -->
					<h2 class="head-set">Quer ter um app para o seu negócio é não sabe por onde começar?”</h2>
					<!-- Sub-título da seção -->
					<p>
						 Baixe o nosso e-book gratuito “4 dicas práticas para ter o seu aplicativo e faturar mais".
					</p>
				</div>
			</div>
			
			<div class="row text-center" >
				
				<!-- Segunda imagem do font awesome -->
				<div class="row center">
					<span class="fa fa-desktop fa-5x"> </span>
					<span class="fa fa-book fa-5x"> </span>
					<span class="fa fa-check fa-5x"> </span>
					<h2>E-Book</h2>
					<p><a class="btn btn-default" href="/home" >Adquira agora seu E-book e comece a evoluir &raquo;</a></p>
				</div>

				
				
				
			</div>
		
			
		</div>
	</div>
	
	<!-- RODAPE -->
	<footer id="rodape">
		<div class="container">
			<p>InNove</p>
		</div>
	</footer>
	<!-- END RODAPE -->


	<!-- SCRIPTS -->
	<script type="text/javascript" src="/js/pickaday.js"></script>
	<script>
		$(".datepicker").datepicker({
			dateFormat: "dd/mm/yy"
		});
	</script>
	
<script type="text/javascript" src="/js/jquery-1.11.3.min.js"> </script>
<script type="text/javascript" src="/js/bootstrap.min.js"> </script>

</body>

</html>