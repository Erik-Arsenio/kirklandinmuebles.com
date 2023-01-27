<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<title><?= $title ?></title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="keywords">
	<meta content="" name="description">
	<meta http-equiv="Expires" content="0">
	<meta http-equiv="Last-Modified" content="0">
	<meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
	<meta http-equiv="Pragma" content="no-cache">
	<?= load_css([
		'bootstrap/css/bootstrap.min',
		'lib/animate/animate.min',
		'material_design_webfont/css/materialdesignicons.min',
		'css/style'
	]) ?>
</head>

<body>
	<div class="container-xxl bg-white p-0">
		<!-- Spinner Start -->
		<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
			<div class="spinner-border text-success" style="width: 3rem; height: 3rem;" role="status">
				<span class="sr-only"><?= lang('Globals.loading') ?>...</span>
			</div>
		</div>
		<!-- Spinner End -->

		<!-- Navbar Start -->
		<div class="container-fluid nav-bar bg-transparent">
			<nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4 shadow-lg">
				<a href="<?= base_url() ?>" class="navbar-brand d-flex align-items-center text-center">
					<img class="img-fluid h-100" src="<?= STATIC_URL . 'img/logo_kirkland.svg' ?>" alt="Kirkland Inmobiliaria">
				</a>
				<button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarCollapse">
					<div class="navbar-nav ms-auto">
						<a href="<?= base_url() ?>" class="nav-item nav-link <?= (url_is('/')) ? ' active' : '' ?>"><?= lang('Globals.home') ?></a>
						<div class="nav-item dropdown">
							<a href="#" class="nav-link dropdown-toggle <?= (url_is('investments*')) ? ' active' : '' ?>" data-bs-toggle="dropdown"><?= lang('Globals.investments') ?></a>
							<div class="dropdown-menu rounded-0 m-0">
								<a href="<?= base_url('investments/lakuun') ?>" class="dropdown-item <?= (url_is('*lakuun')) ? ' active' : '' ?>" target="_blank">Lakuun</a>
								<a href="<?= base_url('investments/anthia/3') ?>" class="dropdown-item <?= (url_is('*anthia')) ? ' active' : '' ?>" target="_blank">Anthia</a>
								<a href="<?= base_url('investments/marela_celestun') ?>" class="dropdown-item <?= (url_is('*marela_celestun')) ? ' active' : '' ?>" target="_blank">Marela Celestún</a>
								<a href="<?= base_url('investments/marela_beach') ?>" class="dropdown-item <?= (url_is('*marela_beach')) ? ' active' : '' ?>" target="_blank">Marela Beach</a>
							</div>
						</div>
						<a href="<?= base_url('templates/contactForm') ?>" class="nav-item nav-link <?= (url_is('templates/contactForm')) ? ' active' : '' ?>" target="_blank"><?= lang('Globals.contact') ?></a>
					</div>
				</div>
			</nav>
		</div>
		<!-- Navbar End -->

		<!-- Content Start -->
		
		<?= $content ?>
		<!-- Content End -->

		<!-- Footer Start -->
		<div class="container-fluid bg-dark text-white-50 footer mt-5 wow fadeIn" data-wow-delay="0.1s">
			<div class="container py-3 d-none">
				<div class="row g-4">
					<div class="col-lg-6 col-md-6 ">
						<h5 class="text-white mb-4"><?= lang('Globals.contact_us') ?></h5>
						<p class="mb-2"><span class='mdi mdi-home-map-marker mdi-24px me-3'></span></i>Mérida, Yucatán, México.</p>
						<!-- <p class="mb-2"><span class='mdi mdi-phone mdi-24px me-3'></span>+52 999 449 7599</p>
						<p class="mb-2"><span class='mdi mdi-email-outline mdi-24px me-3'></span>carmen@kirklandinmobiliaria.com</p> -->
						<div class="d-flex pt-2 d-none">
							<a class="btn btn-outline-light btn-social" href=""><span class='mdi mdi-twitter mdi-24px'></span></a>
							<a class="btn btn-outline-light btn-social" href=""><span class='mdi mdi-facebook mdi-24px'></span></a>
							<a class="btn btn-outline-light btn-social" href=""><span class='mdi mdi-youtube mdi-24px'></span></a>
							<a class="btn btn-outline-light btn-social" href=""><span class='mdi mdi-linkedin mdi-24px'></span></a>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<h5 class="text-white mb-4"><?= lang('Globals.news') ?></h5>
						<p><?= lang('Globals.text_1') ?></p>
						<div class="position-relative mx-auto" style="max-width: 400px;">
							<input class="form-control bg-transparent text-white w-100 py-3 ps-4 pe-5" type="text" placeholder="<?= lang('Globals.your_email') ?>">
							<button type="button" class="btn btn-success py-2 position-absolute top-0 end-0 mt-2 me-2"><?= lang('Globals.send') ?></button>
						</div>
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
								<a href="">Home</a>
								<a href="">Cookies</a>
								<a href="">Help</a>
								<a href="">FQAs</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Footer End -->

		<!-- Back to Top -->
		<a href="#" class="btn btn-lg btn-success btn-lg-square back-to-top"><span class='mdi mdi-arrow-up mdi-24px'></span></a>
	</div>

	<!-- Global JavaScript Libraries -->
	<?= load_js([
		'js/jquery-3.6.0.min',
		'bootstrap/js/bootstrap.bundle.min',
		'lib/wow/wow.min',
		'lib/easing/easing.min',
		'js/main',
	]) ?>

	<!-- Custom JavaScript Libraries -->
	<?= isset($js) ? $js : null ?>
</body>

</html>