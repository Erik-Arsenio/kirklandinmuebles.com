<!doctype html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= $title ?></title>
	<?= load_css([
		'bootstrap/css/bootstrap.min',
		'css/signin'
	]) ?>

	<style>
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

		.b-example-divider {
			height: 3rem;
			background-color: rgba(0, 0, 0, .1);
			border: solid rgba(0, 0, 0, .15);
			border-width: 1px 0;
			box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
		}

		.b-example-vr {
			flex-shrink: 0;
			width: 1.5rem;
			height: 100vh;
		}

		.bi {
			vertical-align: -.125em;
			fill: currentColor;
		}

		.nav-scroller {
			position: relative;
			z-index: 2;
			height: 2.75rem;
			overflow-y: hidden;
		}

		.nav-scroller .nav {
			display: flex;
			flex-wrap: nowrap;
			padding-bottom: 1rem;
			margin-top: -1px;
			overflow-x: auto;
			text-align: center;
			white-space: nowrap;
			-webkit-overflow-scrolling: touch;
		}
	</style>
</head>

<body class="text-center">
	<main class="form-signin w-100 m-auto">
		<form action="<?= base_url('sign-in') ?>" method="POST">
			<h1 class="h3 mb-3 fw-normal"><?= lang('Globals.authentication') ?></h1>
			<div class="form-floating">
				<input type="email" name="user_email" class="form-control" id="user_email" placeholder="<?= lang('Globals.your_email') ?>">
				<label for="user_email"><?= lang('Globals.your_email') ?></label>
			</div>
			<div class="form-floating">
				<input type="password" name="user_password" class="form-control" id="user_password" placeholder="<?= lang('Globals.password') ?>">
				<label for="user_password"><?= lang('Globals.password') ?></label>
			</div>
			<button class="w-100 btn btn-lg btn-primary" type="submit"><?= lang('Globals.sign_in') ?></button>
			<p class="mt-5 mb-3 text-muted">&copy; Kirkland Inmuebles</p>
		</form>
	</main>
</body>

</html>