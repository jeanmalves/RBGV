<!DOCTYPE html>
<!-- This site was created in Webflow. http://www.webflow.com-->
<!-- Last Published: Sat Jan 30 2016 16:02:29 GMT+0000 (UTC) -->
<html data-wf-site="56aa99a9315c67964ad621b4" data-wf-page="56abe2ec3d376b024250f194">
<head>
	<meta charset="utf-8">
	<title><?php echo PW_SITE_NAME; ?></title>
	<meta property="og:title" content="RBGV Advogados">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="generator" content="Webflow">
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo PW_THEME_URL ?>assets/images/favicon.png">
	<link rel="apple-touch-icon" href="<?php echo PW_THEME_URL ?>assets/images/webclip.jpg">
	<?php wp_head(); ?>
</head>
<body class="body">
	<div data-ix="modal-interaction" class="modal-wrapper">
		<div class="w-clearfix sign-up-wrapper">
			<a href="#" data-ix="close-interaction" class="w-clearfix w-inline-block link link-close"><img src="<?php echo PW_THEME_URL ?>assets/images/icon-close.svg" class="icon-fechar">
				<div class="w-hidden-medium w-hidden-small w-hidden-tiny txt-fechar">Fechar</div>
			</a>
			<h3 class="titulo-verde">Inscreva-se</h3>
			<div class="w-form">
				<form id="email-form" name="email-form" data-name="Email Form">
					<p class="subtitulo-sessao">Preencha o formulário abaixo para receber as novidades de atualizações da RBGV Advogados.</p>
					<input id="Nome" type="text" placeholder="*Nome" name="Nome" data-name="Nome" required="required" class="w-input form">
					<input id="email" type="email" placeholder="*Email" name="email" data-name="Email" required="required" class="w-input form">
					<div class="w-checkbox w-clearfix checkbox">
						<input id="checkbox" type="checkbox" name="checkbox" data-name="Checkbox" required="required" class="w-checkbox-input">
						<label for="checkbox" class="w-form-label">Eu autorizo meu cadastro no banco de dados da RBGV Advogados.</label>
					</div>
					<input type="submit" value="Enviar" data-wait="Aguarde..." wait="Aguarde..." class="w-button btn-branco enviar-newsletter">
				</form>
				<div class="w-form-done msg-obrigada">
					<p>Obrigado! Formulário enviado com sucesso!</p>
				</div>
				<div class="w-form-fail msg-erro">
					<p>Oops! Something went wrong while submitting the form</p>
				</div>
			</div>
		</div>
	</div><!-- formulário lightbox -->
	<div class="w-section header">
		<div class="navbar-scroll">
			<div data-collapse="medium" data-animation="default" data-duration="400" data-contain="1" class="w-nav w-hidden-medium w-hidden-small w-hidden-tiny navbar-scroll">
				<div class="w-container">
					<?php 
						printf(
							'<a href="%1$s" title="%2$s" class="w-nav-brand">
								<img src="%3$sassets/images/logo_rbgv_1.png" class="logo-scroll">
							</a>',
							PW_URL,
							PW_SITE_NAME,
							PW_THEME_URL
						);
					?>	
					<div data-ix="click-menu-icon" class="menu-icon">
						<div class="w-icon-nav-menu icon-hamburger"></div>
						<div>menu</div>
					</div>
					<nav role="navigation" data-ix="click-menu-icon" class="w-nav-menu navmenu-scroll">
						<a href="#" class="w-nav-link navlink-scroll">o escritório</a>
						<div data-delay="200" data-hover="1" class="w-dropdown">
							<div class="w-dropdown-toggle navlink-scroll">
								<div>atuação</div>
							</div>
							<nav class="w-dropdown-list">
								<a href="#" class="w-dropdown-link link-navdropdown">Direito Administrativo</a>
								<a href="#" class="w-dropdown-link link-navdropdown">Direito Ambiental</a><a href="#" class="w-dropdown-link link-navdropdown">Direito Constitucional</a>
								<a href="#" class="w-dropdown-link link-navdropdown">Direito de Infraestrutura</a>
								<a href="#" class="w-dropdown-link link-navdropdown">Direito Urbanístico</a>
								<a href="#" class="w-dropdown-link link-navdropdown">Direito Tributário</a>
							</nav>
						</div>
						<a href="#" class="w-nav-link navlink-scroll">profissionais</a>
						<div data-delay="200" data-hover="1" class="w-dropdown">
							<div class="w-dropdown-toggle navlink-scroll">
								<div>notícias</div>
							</div>
							<nav class="w-dropdown-list">
								<a href="#" class="w-dropdown-link link-navdropdown">Boletins</a>
								<a href="#" class="w-dropdown-link link-navdropdown">Artigos</a>
								<a href="#" class="w-dropdown-link link-navdropdown">Informativos</a>
								<a href="#" class="w-dropdown-link link-navdropdown">Blog RBGV</a>
								<a href="#" class="w-dropdown-link link-navdropdown">Newsletter</a>
							</nav>
						</div>
						<div data-delay="200" data-hover="1" class="w-dropdown">
							<div class="w-dropdown-toggle navlink-scroll">
								<div>fale conosco</div>
							</div>
							<nav class="w-dropdown-list">
								<a href="#" class="w-dropdown-link link-navdropdown">Contato</a>
								<a href="#" class="w-dropdown-link link-navdropdown">Programas e Carreiras</a>
								<a href="#" class="w-dropdown-link link-navdropdown">Política de Agendamento</a>
							</nav>
						</div>
					</nav>
				</div>
			</div>
		</div>
		<div data-collapse="medium" data-animation="default" data-duration="400" data-easing="ease-in" data-easing2="ease-out" data-ix="display-menu-rolagem" data-no-scroll="1" data-doc-height="1" class="w-nav navbar">
			<div class="w-container nav-wrapper">
				<?php 
					printf(
						'<a href="%1$s" title="%2$s" class="w-nav-brand logo">
							<img src="%3$sassets/images/logo_rbgv.png" class="logo-rbgv">
						</a>',
						PW_URL,
						PW_SITE_NAME,
						PW_THEME_URL
					);
				?>	
				<nav role="navigation" class="w-nav-menu navmenu">
					<a href="#" class="w-nav-link navlink">o escritório</a>
					<div data-delay="200" data-hover="1" class="w-dropdown">
						<div class="w-dropdown-toggle navlink">
							<div>atuação</div>
						</div>
						<nav class="w-dropdown-list">
							<a href="#" class="w-dropdown-link link-navdropdown">Direito Administrativo</a>
							<a href="#" class="w-dropdown-link link-navdropdown">Direito Ambiental</a>
							<a href="#" class="w-dropdown-link link-navdropdown">Direito Constitucional</a>
							<a href="#" class="w-dropdown-link link-navdropdown">Direito de Infraestrutura</a>
							<a href="#" class="w-dropdown-link link-navdropdown">Direito Urbanístico</a>
							<a href="#" class="w-dropdown-link link-navdropdown">Direito Tributário</a>
						</nav>
					</div>
					<a href="profissionais.html" class="w-nav-link navlink">profissionais</a>
					<div data-delay="200" data-hover="1" class="w-dropdown">
						<div class="w-dropdown-toggle navlink">
							<div>notícias</div>
						</div>
						<nav class="w-dropdown-list">
							<a href="#" class="w-dropdown-link link-navdropdown">Boletins</a>
							<a href="#" class="w-dropdown-link link-navdropdown">Artigos</a>
							<a href="#" class="w-dropdown-link link-navdropdown">Informativos</a>
							<a href="noticias.html" class="w-dropdown-link link-navdropdown">Blog RBGV</a><a href="#" data-ix="subscribe-interaction" class="w-dropdown-link link-navdropdown">Newsletter</a>
						</nav>
					</div>
					<div data-delay="200" data-hover="1" class="w-dropdown">
						<div class="w-dropdown-toggle navlink">
							<div>fale conosco</div>
						</div>
						<nav class="w-dropdown-list">
							<a href="contato.html" class="w-dropdown-link link-navdropdown">Contato</a>
							<a href="#" class="w-dropdown-link link-navdropdown">Programas e Carreiras</a><a href="#" class="w-dropdown-link link-navdropdown">Política de Agendamento</a>
						</nav>
					</div>
				</nav>
				<div class="w-nav-button navlink menubutton">
					<div class="w-icon-nav-menu icon-hamburger"></div>
					<div>menu</div>
				</div>
			</div>
		</div>
		<div class="w-container banner">
			<div class="titulo branco">
				<h1 class="titulo-sessao branco">Bem vindo à RBGV</h1>
				<div class="subtitulo-sessao branco">Escritório &nbsp;de advocacia e consultoria jurídica
					<br>Atuação preventiva e contenciosa na área de direito público
				</div>
			</div>
			<a href="#" class="w-button btn-transparente">Clique e conheça</a>
		</div>
		<div class="img-banner">
			<img src="<?php echo PW_THEME_URL ?>assets/images/img-banner.jpg">
		</div>
	</div>