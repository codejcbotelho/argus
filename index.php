<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Argus Desenvolvimento</title>
	
	<meta name="title" content="Argus Desenvolvimento">
	<meta name="description" content="Você e sua empresa nas nuvens de forma fácil, rápida e econômica.">
	<meta name="author" content="Claudio Botelho">
	<meta name="url" content="http://www.argusdesenvolvimento.com.br">
	<meta http-equiv="expires" content="-1">
	<meta http-equiv="pragma" content="no-cache">

	<link rel="stylesheet" href="skin/css/style.css">
	<link rel="shortcut-icon" type="image/x-icon" href="favicon.ico">
	
	<!-- include jQuery + carouFredSel plugin -->
	<script type="text/javascript" language="javascript" src="js/jquery-1.8.2.min.js"></script>
	<script type="text/javascript" language="javascript" src="js/jquery.carouFredSel-6.2.1-packed.js"></script>

	<!-- optionally include helper plugins -->
	<script type="text/javascript" language="javascript" src="js/helper-plugins/jquery.mousewheel.min.js"></script>
	<script type="text/javascript" language="javascript" src="js/helper-plugins/jquery.touchSwipe.min.js"></script>
	<script type="text/javascript" language="javascript" src="js/helper-plugins/jquery.transit.min.js"></script>
	<script type="text/javascript" language="javascript" src="js/helper-plugins/jquery.ba-throttle-debounce.min.js"></script>
	
	<script>
		$(function(){
			$('#foo1').carouFredSel({auto: {pauseOnHover: 'resume', progress: '#timer1'}}, {transition: true});
		});
	</script>
</head>

<body>
	
	<div class="delimiter-header">
		<div class="header">
			<a class="link-logo" href="<?=$_SERVER['PHP_SELF']; ?>"><img src="skin/image/logo.png" alt="logo"></a>
		</div>
	</div>
	
	<div class="delimiter-content">
		<div class="content">
			
			<h1 class="title-section">Últimos Trabalhos</h1>

			<div class="list_carousel">
				<ul id="foo1">
					<!-- <li>
						<a target="_blank" href="http://camarabarueri.sp.gov.br/"><img class="banner-site" src="media/camara-barueri.png" alt="site"></a>
						
						<div class="information">
							<h1 class="title">Câmara Municipal de Barueri</h1>
							<p class="author">Desenvolvido por <a href="mailto:claudio.botelho@bugoo.com.br">Claudio Botelho</a></p>
						</div>
					</li> -->
					
					<!-- <li>
						<a target="_blank" href="http://camarasantanadeparnaiba.sp.gov.br/"><img class="banner-site" src="media/camara-santana.png" alt="site"></a>
						
						<div class="information">
							<h1 class="title">Câmara Municipal de Santana de Parnaíba</h1>
							<p class="author">Desenvolvido por <a href="mailto:claudio.botelho@bugoo.com.br">Claudio Botelho</a> e <a href="mailto:es-dias@hotmail.com">Ewerton Dias</a></p>
						</div>
					</li> -->
					
					<!-- <li>
						<a target="_blank" href="http://camaracarapicuiba.sp.gov.br/"><img class="banner-site" src="media/camara-carapicuiba.png" alt="site"></a>
						
						<div class="information">
							<h1 class="title">Câmara Municipal de Carapicuíba</h1>
							<p class="author">Desenvolvido por <a href="mailto:claudio.botelho@bugoo.com.br">Claudio Botelho</a> e <a href="mailto:es-dias@hotmail.com">Ewerton Dias</a></p>
						</div>
					</li> -->
					
					<li>
						<a target="_blank" href="http://www.birkmeier.com.br"><img class="banner-site" src="media/birkmeier.png" alt="site"></a>
						
						<div class="information">
							<h1 class="title">Birkmeier Idiomas</h1>
							<p class="author">Desenvolvido por <a href="mailto:claudio.botelho@bugoo.com.br">Claudio Botelho</a></p>
						</div>
					</li>
					
					<li>
						<a target="_blank" href="http://www.rdoamara.com.br"><img class="banner-site" src="media/amara.png" alt="site"></a>
						
						<div class="information">
							<h1 class="title">Sistema RDO Amara (Robério de Ogum)</h1>
							<p class="author">Desenvolvido por <a href="mailto:claudio.botelho@bugoo.com.br">Claudio Botelho</a> e <a href="mailto:es-dias@hotmail.com">Ewerton Dias</a></p>
						</div>
					</li>
					
					<li>
						<a target="_blank" href="http://www.viciouslife.com"><img class="banner-site" src="media/viciouslife.png" alt="site"></a>
						
						<div class="information">
							<h1 class="title">ViciousLife</h1>
							<p class="author">Desenvolvido por <a href="mailto:claudio.botelho@bugoo.com.br">Claudio Botelho</a></p>
						</div>
					</li>
					
					<li>
						<a target="_blank" href="http://www.escolainfojardins.com.br"><img class="banner-site" src="media/escola-info-jardins.png" alt="site"></a>
						
						<div class="information">
							<h1 class="title">Escola Info Jardins</h1>
							<p class="author">Desenvolvido por <a href="mailto:claudio.botelho@bugoo.com.br">Claudio Botelho</a></p>
						</div>
					</li>
					
					<li>
						<a target="_blank" href="http://www.algestaodenegocios.com.br"><img class="banner-site" src="media/al-gestao-negocios.png" alt="site"></a>
						
						<div class="information">
							<h1 class="title">AL Gestão de Negócios</h1>
							<p class="author">Desenvolvido por <a href="mailto:claudio.botelho@bugoo.com.br">Claudio Botelho</a></p>
						</div>
					</li>
					
					<li>
						<a target="_blank" href="http://infoquest.grupojardins.com.br"><img class="banner-site" src="media/infoquest.png" alt="site"></a>
						
						<div class="information">
							<h1 class="title">InfoQuest - Ferramenta de Avaliação da Escola Info Jardins</h1>
							<p class="author">Desenvolvido por <a href="mailto:claudio.botelho@bugoo.com.br">Claudio Botelho</a></p>
						</div>
					</li>

					<li>
						<a target="_blank" href="http://www.bugoo.com.br"><img class="banner-site" src="media/bugoo-outlet.png" alt="site"></a>
						
						<div class="information">
							<h1 class="title">Bugoo Outlet - Camisetas, Canecas, Bonés, Óculos, Livros, Botons e outros.</h1>
							<p class="author">Desenvolvido por <a href="mailto:claudio.botelho@bugoo.com.br">Claudio Botelho</a></p>
						</div>
					</li>
				</ul>
				
				<div class="clearfix"></div>
				
				<div id="timer1" class="timer"></div>
			</div>
		</div>
	</div>

	<div class="delimiter-contact">

		<div class="contact">
			
			<h1 class="title-section">Entre em contato conosco</h1>

			<form class="form-send" method="post" action="send.php">
				<div class="block">
					<label class="label" for="nome">Nome</label>
					<input class="box-text" type="text" name="nome" maxlength="45" placeholder="Nome e Sobrenome" id="nome">
				</div>

				<div class="block">
					<label class="label" for="email">E-mail</label>
					<input class="box-text" type="text" name="email" maxlength="45" placeholder="seu-email@exemplo.com" id="email">
				</div>

				<div class="block">
					<label class="label" for="telefone">Telefone</label>
					<input class="box-text" type="text" name="telefone" maxlength="45" id="telefone" placeholder="(11) 0000-0000">
				</div>

				<div class="block">
					<label class="label" for="assunto">Assunto</label>
					<input class="box-text" type="text" name="assunto" maxlength="100" placeholder="Assunto" id="assunto">
				</div>

				<div class="block">
					<label class="label" for="mensagem">Mensagem</label>
					<textarea class="box-text" name="mensagem" placeholder="Escreva aqui sua mensagem..." id="mensagem"></textarea>
				</div>

				<div class="block">
					<label class="label">&nbsp;</label>
					<input class="button" type="submit" value="Enviar">
				</div>
			</form>
		</div>
	</div>

	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-12806314-6', 'argusdesenvolvimento.com.br');
		ga('send', 'pageview');
	</script>

</body>
</html>