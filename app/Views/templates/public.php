<!DOCTYPE html>
<html lang="<?php echo strtolower($lang); ?>">

<head>
	<meta charset="utf-8">
	<title><?= $title ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="Venta de terrenos en Yucatán, Venta de terrenos residenciales en Mérida Yucatán, Venta de lotes residenciales en Mérida Yucatán, Venta de lotes en Mérida Yucatán, Venta de terrenos en Mérida Yucatán,
	Venta de terrenos en yucatán cerca de la playa, Venta de terrenos en la playa Yucatán, Venta de terrenos economicos en Yucatán" >
	<meta name="description" content="Venta de terrenos en Yucatán, Venta de Terrenos residenciales y lotes patrimoniales en Mérida, Yucatán, México.">
	<link rel="canonical" href="https://kirklandinmobiliaria.com/">
	<meta property="og:locale" content="es_ES">
	<meta property="og:type" content="website">
	<meta property="og:title" content="<?= $title ?>">
	<meta property="og:description" content="Venta de terrenos en Yucatán, Venta de Terrenos residenciales y lotes patrimoniales en Mérida, Yucatán, México.">
	<meta property="og:url" content="https://kirklandinmobiliaria.com/">
	<meta property="og:site_name" content="Kirkland Inmobiliaria">

	<meta name="google-site-verification" content="S15Mw-HJ9NoCXIvZj4VFltpy1Ut-qUz-HPdad4cdAlU" />
	<?= load_css([
		'bootstrap/css/bootstrap.min',
		// 'lib/animate/animate.min',
		'material_design_webfont/css/materialdesignicons.min',
		'css/flag-icon.min',
		'css/style'
	]) ?>
</head>
<!-- Google tag (gtag.js) -->
<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZCGEQ3M0D5"></script>
<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'G-ZCGEQ3M0D5');
</script> -->

<body>

<script src="https://cdn.botpress.cloud/webchat/v0/inject.js"></script>
<script>
	window.botpressWebChat.init({
		"composerPlaceholder": "Chat Kirkland Bot",
		"botConversationDescription": "Responde todas las preguntas que hagas",
		"botId": "4ab3d4e7-6079-4718-8be0-f2f577b537c1",
		"hostUrl": "https://cdn.botpress.cloud/webchat/v0",
		"messagingUrl": "https://messaging.botpress.cloud",
		"clientId": "4ab3d4e7-6079-4718-8be0-f2f577b537c1",
		"botName": "Kirkland bot",
		"avatarUrl": "https://cdn.imgbin.com/10/20/11/imgbin-avatar-user-profile-icon-women-wear-frock-GNLBV4N6qanFpjEYMEqxEgcCd.jpg",
		"stylesheet": "https://webchat-styler-css.botpress.app/prod/32168ded-34e6-4e32-a87f-f8feb1ba9d6b/v86316/style.css",
		"useSessionStorage": false,
		"showPoweredBy": false,
		"locale": "browser",
		"enableConversationDeletion": true,
		"showConversationsButton": false,
		"enableTranscriptDownload": false
	});
	window.onload = function() { 
		setTimeout(() => {
			window.botpressWebChat.sendEvent({type:'trigger'})
		}, "10000");
	};
</script>

<!-- "containerWidth": "75%25",
        "layoutWidth": "75%25", -->
	<!-- <div class="container-fluid bg-white p-0 mx-0"> -->
		<!-- Spinner Start -->
		<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
			<div class="spinner-border text-success" style="width: 3rem; height: 3rem;" role="status">
				<span class="sr-only"><?= lang('Globals.loading') ?>...</span>
			</div>
		</div>
		<!-- Spinner End -->
		<!-- Navbar Start -->
		<div class="container-fluid nav-bar bg-transparent">
			<?php 
				// var_dump($lang);
				?>
				<!-- <header> -->

				<nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4 shadow-lg">
					<a href="<?= base_url('/?lang=' .$lang) ?>" class="navbar-brand d-flex align-items-center text-center">
						<img class="img-fluid h-100" src="<?= STATIC_URL . 'img/logo_kirkland.svg' ?>" alt="Logo Kirkland Inmobiliaria">
					</a>
					<button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse align-self-end" id="navbarCollapse">
						<div class="navbar-nav ms-auto">
							<a href="<?= base_url('/?lang=' .$lang) ?>" class="nav-item nav-link <?= (url_is('/')) ? ' active' : '' ?>"><?= lang('Globals.home') ?></a>
							<a href="<?= base_url('properties/all?lang=' .$lang) ?>" class="nav-item nav-link <?= (url_is('properties/all')) ? ' active' : '' ?>" target="_blank"><?= lang('Globals.properties') ?></a>
							<div class="nav-item dropdown">
								<a href="#" class="nav-link dropdown-toggle <?= (url_is('investments*')) ? ' active' : '' ?>" data-bs-toggle="dropdown"><?= lang('Globals.investments') ?></a>
								<div class="dropdown-menu rounded-0 m-0">
									<a href="<?= base_url('investments/all?lang='. $lang) ?>" class="dropdown-item <?= (url_is('*all')) ? ' active' : '' ?>" target="_blank"><?= lang('Globals.all') ?></a>
									<hr class="mt-2 mb-3 border-bottom"/>
									<a href="<?= base_url('investments/nodo?lang='. $lang) ?>" class="dropdown-item <?= (url_is('*nodo')) ? ' active' : '' ?>" target="_blank">Nodo</a>
									<a href="<?= base_url('investments/galiana?lang='. $lang) ?>" class="dropdown-item <?= (url_is('*galiana')) ? ' active' : '' ?>" target="_blank">Galiana</a>
									<a href="<?= base_url('investments/costa_flamingo?lang='. $lang) ?>" class="dropdown-item <?= (url_is('*costa_flamingo')) ? ' active' : '' ?>" target="_blank">Costa Flamingo</a>
									<a href="<?= base_url('investments/gran_telchac?lang='. $lang) ?>" class="dropdown-item <?= (url_is('*gran_telchac')) ? ' active' : '' ?>" target="_blank">Gran Telchac</a>
									<a href="<?= base_url('investments/mahal?lang='. $lang) ?>" class="dropdown-item <?= (url_is('*mahal')) ? ' active' : '' ?>" target="_blank">Mahal</a>
									<a href="<?= base_url('investments/sorenna?lang='. $lang) ?>" class="dropdown-item <?= (url_is('*sorenna')) ? ' active' : '' ?>" target="_blank">Sorenna</a>
									<a href="<?= base_url('investments/wayuum?lang='. $lang) ?>" class="dropdown-item <?= (url_is('*wayuum')) ? ' active' : '' ?>" target="_blank">Wayúum</a>
									<a href="<?= base_url('investments/lakuun/?lang='. $lang) ?>" class="dropdown-item <?= (url_is('*lakuun')) ? ' active' : '' ?>" target="_blank">Lakuun</a>
									<a href="<?= base_url('investments/anthia/4?lang='. $lang) ?>" class="dropdown-item <?= (url_is('*anthia')) ? ' active' : '' ?>" target="_blank">Anthia</a>
									<a href="<?= base_url('investments/marela_life?lang='. $lang) ?>" class="dropdown-item <?= (url_is('*marela_life')) ? ' active' : '' ?>" target="_blank">Marela Life</a>
									<a href="<?= base_url('investments/marela_celestun?lang='. $lang) ?>" class="dropdown-item <?= (url_is('*marela_celestun')) ? ' active' : '' ?>" target="_blank">Marela <?= lang('Globals.homepage_43') ?></a>
									<a href="<?= base_url('investments/marela_beach?lang='. $lang) ?>" class="dropdown-item <?= (url_is('*marela_beach')) ? ' active' : '' ?>" target="_blank">Marela Beach</a>
								</div>
							</div>
							<a href="<?= base_url('templates/contactForm/?lang='. $lang) ?>" class="nav-item nav-link <?= (url_is($lang . '/templates/contactForm')) ? ' active' : '' ?>" target="_blank"><?= lang('Globals.contact') ?></a>
							<div class="nav-item dropdown mx-2">
								<a class="nav-link dropdown-toggle" href="#" id="language-menu" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<span class="flag-icon flag-icon-<?php echo (strtolower($lang) == 'en') ? 'us' : strtolower($lang); ?>"></span>
									<span class="ml-2 text-uppercase"><?= lang('Globals.language') ?></span>
								</a>
								<form action="" method="get"> 
									<div class="dropdown-menu rounded-0 m-0" aria-labelledby="language-menu">
										<a class="dropdown-item <?= (strtolower($lang) == 'es') ? ' active' : '' ?>" href="<?php echo (current_url() . '?lang=es'); ?>"><span class="flag-icon flag-icon-<?php echo 'es'; ?> me-2"></span><?= lang('Globals.contactform_11') ?> </a>
										<a class="dropdown-item <?= (strtolower($lang) == 'en') ? ' active' : '' ?>" href="<?php echo (current_url() . '?lang=en'); ?>"><span class="flag-icon flag-icon-<?php echo 'us'; ?> me-2"></span><?= lang('Globals.contactform_12') ?> </a>
									</div>
								</form>
							</div> 
						</div>
					</div>
				</nav>
			<!-- </header> -->
			</div>
			<!-- Navbar End -->
		<main>
	
			<!-- Content Start -->
			<?= $content ?>
			<!-- Content End -->
		</main>

		<!-- Footer Start -->
		<footer>
			<div class="container-fluid bg-dark text-white-50 footer mt-5" >
				<div class="container py-2">
					<div class="row g-1 ">
							<p class="h5 mb-2 text-white"><?= lang('Globals.contact_us') ?></p>
						<div class="col-lg-6 col-md-6 mt-1 mt-lg-0">
							<!-- <p class="mb-1"><span class='mdi mdi-home-map-marker mdi-24px me-3'></span></i>Mérida, Yucatán, México.</p> -->
							<!-- <p class="mb-2"><span class='mdi mdi-phone mdi-24px me-3'></span>+52 999 449 7599</p>
							<p class="mb-2"><span class='mdi mdi-email-outline mdi-24px me-3'></span>carmen@kirklandinmobiliaria.com</p> -->
							<!-- <div class="d-flex pt-2"> -->
								<a class="text-white d-flex align-items-center" href="https://instagram.com/carmen_inversionesmerida?igshid=MmU2YjMzNjRlOQ==" target="_blank">
									<span class='mdi mdi-instagram mdi-24px'></span>
									<span class='mx-2'>Carmen Inversiones Mérida</span>
								</a>
								<!-- <a class="btn btn-outline-light btn-social" href=""><span class='mdi mdi-youtube mdi-24px'></span></a> -->
								<!-- <a class="btn btn-outline-light btn-social" href="https://api.whatsapp.com/send?phone=+53534549774&text=Mensaje%20de%20prueba"><span class='mdi mdi-linkedin mdi-24px'></span> Enviar mensaje de WhatsApp</a> -->
								<!-- </div> -->
						</div>
						<div class="col-lg-6 col-md-6 mt-1 mt-lg-0">
							<a class="text-white d-flex align-items-center" href="https://www.facebook.com/profile.php?id=100077365106779" target="_blank">
								<span class='mdi mdi-facebook mdi-24px'></span>
								<span class='mx-2'>Carmen Palay. Asesora Inmobiliaria</span>
							</a>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="copyright">
						<div class="row">
							<div class="col-md-8 text-center text-md-start mb-3 mb-md-0">
								&copy; <a class="border-bottom" href="<?= base_url() ?>">kirklandinmobiliaria.com</a>, <?= lang('Globals.text_2') ?>.
								<?= lang('Globals.designed_by') ?> <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
							</div>
							<div class="col-md-4 text-center text-md-end">
								<div class="footer-menu d-none">
									<!-- <a href="">Home</a>
									<a href="">Cookies</a>
									<a href="">Help</a>
									<a href="">FQAs</a> -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Footer End -->
		</footer>

		<!-- Back to Top -->
		<a href="#" class="btn btn-lg btn-success btn-lg-square back-to-top d-none"><span class='mdi mdi-arrow-up mdi-24px'></span></a>
	<!-- </div> -->

	<!-- Global JavaScript Libraries -->
	<?= load_js([
		'js/jquery-3.6.0.min',
		'bootstrap/js/bootstrap.bundle.min',
		'lib/easing/easing.min',
		// 'lib/wow/wow.min',
		'js/main',
		]) ?>

	<!-- Custom JavaScript Libraries -->
	<?= isset($js) ? $js : null ?>
</body>

</html>