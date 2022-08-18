<!doctype html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<title><?= $title ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?= load_css([
		'bootstrap/css/bootstrap.min'
	]) ?>

	<style>
		body {
			padding-top: 4.5rem;
		}

		.bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			user-select: none;
		}

		@media (min-width: 768px) {
			.bd-placeholder-img-lg {
				font-size: 3.5rem;
			}
		}

		.bi {
			vertical-align: -.125em;
			fill: currentColor;
		}
	</style>
</head>

<body>
	<?php if (session()->has('msgConfirm') or session()->has('msgError')) : ?>
		<div class="toast-container position-absolute top-0 end-0 p-3" style="z-index: 1200">
			<div id="msg-toast" class="toast shadow bg-glass" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="10000">
				<div class="toast-header">
					<?= session()->has('msgConfirm') ? '<i class="bi-check-circle text-success me-1"></i><strong class="me-auto text-success">' . lang('Globals.done') . '</strong>' : '<i class="bi-x-circle text-danger me-1"></i><strong class="me-auto text-danger">' . lang('Globals.sorry') . '</strong>' ?>
					<button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
				</div>
				<div class="toast-body">
					<?= session()->get('msgConfirm') ?: session()->get('msgError') ?>
				</div>
			</div>
		</div>
	<?php endif; ?>
	<nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
		<div class="container-fluid">
			<a class="navbar-brand" href="<?= base_url() ?>">Kirkland Inmuebles</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="navbar-nav me-auto mb-2 mb-md-0">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle<?php if (url_is('investments*')) echo ' active'; ?>" href="#" data-bs-toggle="dropdown" aria-expanded="false"><?= lang('Globals.investments') ?></a>
						<ul class="dropdown-menu">
							<li>
								<a class="dropdown-item" href="<?= base_url('investments/listing') ?>"><?= lang('Globals.listing') ?></a>
							</li>
							<li>
								<a class="dropdown-item" href="<?= base_url('investments/amenities') ?>"><?= lang('Globals.amenities') ?></a>
							</li>
						</ul>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle<?php if (url_is('properties*')) echo ' active'; ?>" href="#" data-bs-toggle="dropdown" aria-expanded="false"><?= lang('Globals.properties') ?></a>
						<ul class="dropdown-menu">
							<li>
								<a class="dropdown-item" href="<?= base_url('properties/listing') ?>"><?= lang('Globals.listing') ?></a>
							</li>
							<li>
								<a class="dropdown-item" href="<?= base_url('properties/characteristics') ?>"><?= lang('Globals.characteristics') ?></a>
							</li>
							<li>
								<a class="dropdown-item" href="<?= base_url('properties/types') ?>"><?= lang('Globals.types') ?></a>
							</li>
						</ul>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle<?php if (url_is('settings*')) echo ' active'; ?>" href="#" data-bs-toggle="dropdown" aria-expanded="false"><?= lang('Globals.settings') ?></a>
						<ul class="dropdown-menu">
							<li>
								<a class="dropdown-item" href="<?= base_url('settings/currencies') ?>"><?= lang('Globals.currencies') ?></a>
							</li>
							<li>
								<a class="dropdown-item" href="<?= base_url('settings/municipalities') ?>"><?= lang('Globals.municipalities') ?></a>
							</li>
							<li>
								<a class="dropdown-item" href="<?= base_url('settings/cities') ?>"><?= lang('Globals.cities') ?></a>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<main class="container-fluid">
		<div class="bg-light p-2 rounded">
			<?= $content ?>
		</div>
	</main>
	<!-- JavaScript Libraries -->
	<?= load_js([
		'js/jquery-3.6.0.min',
		'bootstrap/js/bootstrap.bundle.min'
	]) ?>
</body>

</html>
<?php session()->remove(['msgConfirm', 'msgError']); ?>