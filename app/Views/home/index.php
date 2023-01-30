<!-- Header Start -->
<div class="container-xxl bg-white p-0 mt-4">
	<div class="row g-0 align-items-center flex-column-reverse flex-md-row">
		<div class="col-md-6 p-5 mt-0 mt-xxl-5">
			<p class="animated slideInLeft display-6 fw-bold mb-4">Terrenos residenciales y lotes patrimoniales.</p>
			<p class="animated slideInLeft display-6 fw-bold mb-4">Inversión en desarrollos residenciales.</p>
			<p class="animated slideInLeft h4 mb-4 pb-2">Invierte en lotes y terrenos residenciales con alta plusvalía</p>
			<div class="m-4 text-center">
				<a href="<?= base_url('templates/contactForm') ?>" type="button" class="btn btn-lg btn-outline-success text-decoration-none mt-4" target="_blank">
					Quiero que me contacten
				</a>
			</div>
		</div>
		<div class="col-md-6 pe-md-5">
			<div class="carousel slide carousel-fade text-center animated fadeInRight" data-bs-ride="carousel" data-bs-touch="false" data-bs-pause="hover" id="carouselHome">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="img-fluid" src="<?= STATIC_URL . 'img/marela_beach/01-es.jpg' ?>" alt="">
					</div>
					<div class="carousel-item">
						<img class="img-fluid" src="<?= STATIC_URL . 'img/marela_beach/09-es.jpg' ?>" alt="">
					</div>
					<div class="carousel-item">
						<img class="img-fluid" src="<?= STATIC_URL . 'img/marela_celestun/04.jpg' ?>" alt="">
					</div>
					<div class="carousel-item">
						<img class="img-fluid" src="<?= STATIC_URL . 'img/marela_celestun/06.jpg' ?>" alt="">
					</div>
					<div class="carousel-item">
						<img class="img-fluid" src="<?= STATIC_URL . 'img/anthia/01-es.jpg' ?>" alt="">
					</div>
					<div class="carousel-item">
						<img class="img-fluid" src="<?= STATIC_URL . 'img/anthia/07-es.jpg' ?>" alt="">
					</div>
					<div class="carousel-item">
						<img class="img-fluid" src="<?= STATIC_URL . 'img/lakuun/01.jpg' ?>" alt="">
					</div>
					<div class="carousel-item">
						<img class="img-fluid" src="<?= STATIC_URL . 'img/lakuun/07.jpg' ?>" alt="">
					</div>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#carouselHome" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden"><?= lang('Globals.previous') ?></span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carouselHome" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden"><?= lang('Globals.next') ?></span>
				</button>
			</div>
		</div>
	</div>
</div>
<!-- Header End -->

<!-- About Start -->
<div class="container-xxl py-1">
	<div class="container">
		<div class="text-center mx-auto py-5 wow fadeInUp" data-wow-delay="0.1s">
			<h2 class="mb-3">¿Por qué comprar lotes residenciales o lotes de inversión con nosotros?</h2>
		</div>
		<div class="row g-5 align-items-center">
			<div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
				<div class="about-img position-relative overflow-hidden p-5 pe-0">
					<img class="img-fluid w-100 shadow-lg border border-dark" src="<?= STATIC_URL . 'img/mapa_desarrollos.jpg' ?>">
				</div>
			</div>
			<div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
				<p class="h4">Ya sea que quieras mudarte o para vacacionar, nuestros terrenos de inversión te proporcionarán un excelente retorno de inversión y una diversificación de tu cartera.</p>
				<p class="h4">Este es el momento para invertir en el estado más seguro.</p>
				<p class="h4">Recuerda todo comienza con un sí.</p>
				<p class="h6">Conoce nuestros desarrollos e inicia tu nuevo estilo de vida con nosotros.</p>
			</div>
		</div>
	</div>
</div>
<!-- About End -->

<!-- Property List Start -->
<div class="container">
	<div class="row g-0 gx-5 align-items-center">
		<div class="col-lg-12">
			<div class="text-center mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
				<h1 class="mt-5 mb-2">NUESTRAS PROPIEDADES</h1>
			</div>
		</div>
	</div>
	<div class="row row-cols-1 row-cols-lg-3 g-4">
		<div class="col wow fadeInUp mb-5" data-wow-delay="0.1s">
			<div class="card property-item border-5 h-100 shadow">
				<div class="position-relative overflow-hidden text-center">
					<div id="carouselAnthia" class="carousel slide text-center" data-bs-ride="false" data-bs-touch="false" title="Click para ir a la página" data-href=<?= base_url('investments/anthia') ?>>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="<?= STATIC_URL . 'img/anthia/01-es.jpg' ?>" class="card-img-top img-fluid btn-investments" alt="...">
							</div>
							<div class="carousel-item">
								<img src="<?= STATIC_URL . 'img/anthia/13-es.jpg' ?>" class="card-img-top img-fluid btn-investments" alt="...">
							</div>
							<div class="carousel-item">
								<img src="<?= STATIC_URL . 'img/anthia/07-es.jpg' ?>" class="card-img-top img-fluid btn-investments" alt="...">
							</div>
						</div>
						<button class="carousel-control-prev" type="button" data-bs-target="#carouselAnthia" data-bs-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="visually-hidden"><?= lang('Globals.previous') ?></span>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="#carouselAnthia" data-bs-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="visually-hidden"><?= lang('Globals.next') ?></span>
						</button>
					</div>
				</div>
				<div class="card-body  btn-investments" title="Click para ir a la página" data-href=<?= base_url('investments/anthia') ?>>
					<h4 class="card-text text-center" name="project_heading">Lotes patrimoniales de inversión</h4>
					<h6 class="card-text text-center" name="project_description">Desarrollo de terrenos de inversión semi-urbanizados.</h6>
				</div>
				<div class="card-footer  btn-investments" title="Click para ir a la página" data-href=<?= base_url('investments/anthia') ?>>
					<small class="flex-fill text-center text-muted py-2"><span class='mdi mdi-map-marker-outline mdi-18px text-success me-3'></span><span name="city_name">Mérida, </span><span name="municipality_name">Hunucmá</span></small>
				</div>
			</div>
		</div>
		<div class="col wow fadeInUp mb-5" data-wow-delay="0.1s">
			<div class="card property-item border-5 h-100 shadow">
				<div class="position-relative overflow-hidden text-center">
					<div id="carouselLakuun" class="carousel slide text-center" data-bs-ride="false" data-bs-touch="false" title="Click para ir a la página" data-href=<?= base_url('investments/lakuun') ?>>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="<?= STATIC_URL . 'img/lakuun/01.jpg' ?>" class="card-img-top img-fluid btn-investments" alt="...">
							</div>
							<div class="carousel-item">
								<img src="<?= STATIC_URL . 'img/lakuun/06.jpg' ?>" class="card-img-top img-fluid btn-investments" alt="...">
							</div>
							<div class="carousel-item">
								<img src="<?= STATIC_URL . 'img/lakuun/07.jpg' ?>" class="card-img-top img-fluid btn-investments" alt="...">
							</div>
						</div>
						<button class="carousel-control-prev" type="button" data-bs-target="#carouselLakuun" data-bs-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="visually-hidden"><?= lang('Globals.previous') ?></span>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="#carouselLakuun" data-bs-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="visually-hidden"><?= lang('Globals.next') ?></span>
						</button>
					</div>
				</div>
				<div class="card-body btn-investments" title="Click para ir a la página" data-href=<?= base_url('investments/lakuun') ?>>
					<h4 class="card-text text-center" name="project_heading">Lotes residenciales premium</h4>
					<h6 class="card-text text-center" name="project_description">Desarrollo residencial inspirado en exclusividad, balance y elegancia.</>
				</div>
				<div class="card-footer btn-investments" title="Click para ir a la página" data-href=<?= base_url('investments/lakuun') ?>>
					<small class="flex-fill text-center text-muted py-2"><span class='mdi mdi-map-marker-outline mdi-18px text-success me-3'></span><span name="city_name">Mérida, </span><span name="municipality_name">Komchen</span></small>
				</div>
			</div>
		</div>
		<div class="col wow fadeInUp mb-5" data-wow-delay="0.1s">
			<div class="card property-item  border-5 h-100 shadow">
				<div class="position-relative overflow-hidden text-center">
					<div id="carouselMarelaCelestun" class="carousel slide text-center" data-bs-ride="false" data-bs-touch="false" title="Click para ir a la página" data-bs-ride="true" data-href=<?= base_url('investments/marela_celestun') ?>>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="<?= STATIC_URL . 'img/marela_celestun/01.jpg' ?>" class="card-img-top img-fluid btn-investments" alt="...">
							</div>
							<div class="carousel-item">
								<img src="<?= STATIC_URL . 'img/marela_celestun/05.jpg' ?>" class="card-img-top img-fluid btn-investments" alt="...">
							</div>
							<div class="carousel-item">
								<img src="<?= STATIC_URL . 'img/marela_celestun/06.jpg' ?>" class="card-img-top img-fluid btn-investments" alt="...">
							</div>
						</div>
						<button class="carousel-control-prev" type="button" data-bs-target="#carouselMarelaCelestun" data-bs-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="visually-hidden"><?= lang('Globals.previous') ?></span>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="#carouselMarelaCelestun" data-bs-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="visually-hidden"><?= lang('Globals.next') ?></span>
						</button>
					</div>
				</div>
				<div class="card-body btn-investments" title="Click para ir a la página" data-href=<?= base_url('investments/marela_celestun') ?>>
					<h4 class="card-text text-center" name="project_heading">Lotes patrimoniales en la Playa</h4>
					<h6 class="card-title text-center" name="project_description">Terrenos semi-urbanizados en la hermosa playa de Celestún</h6>
				</div>
				<div class="card-footer btn-investments" title="Click para ir a la página" data-href=<?= base_url('investments/marela_celestun') ?>>
					<small class="flex-fill text-center text-muted py-2"><span class='mdi mdi-map-marker-outline mdi-18px text-success me-3'></span><span name="city_name">Mérida, </span> <span name="municipality_name">Celestúm</span></small>
				</div>
			</div>
		</div>
		<div class="col wow fadeInUp mb-5" data-wow-delay="0.1s">
			<div class="card property-item  border-5 h-100 shadow">
				<div class="position-relative overflow-hidden">
					<div id="carouselMarelaBeach" class="carousel slide text-center" data-bs-ride="false" data-bs-touch="false" title="Click para ir a la página" data-href=<?= base_url('investments/marela_beach') ?>>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="<?= STATIC_URL . 'img/marela_beach/01-es.jpg' ?>" class="card-img-top img-fluid btn-investments" alt="...">
							</div>
							<div class="carousel-item">
								<img src="<?= STATIC_URL . 'img/marela_beach/09-es.jpg' ?>" class="card-img-top img-fluid btn-investments" alt="...">
							</div>
							<div class="carousel-item">
								<img src="<?= STATIC_URL . 'img/marela_beach/10-es.jpg' ?>" class="card-img-top img-fluid btn-investments" alt="...">
							</div>
						</div>
						<button class="carousel-control-prev" type="button" data-bs-target="#carouselMarelaBeach" data-bs-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="visually-hidden"><?= lang('Globals.previous') ?></span>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="#carouselMarelaBeach" data-bs-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="visually-hidden"><?= lang('Globals.next') ?></span>
						</button>
					</div>
				</div>
				<div class="card-body btn-investments" title="Click para ir a la página" data-href=<?= base_url('investments/marela_beach') ?>>
					<h4 class="card-text text-center" name="project_heading">Lotes residenciales en la playa</h4>
					<h6 class="card-title text-center" name="project_description">Terrenos residenciales semi-urbanizados en la hermosa playa de Celestún</h6>
				</div>
				<div class="card-footer btn-investments" title="Click para ir a la página" data-href=<?= base_url('investments/marela_beach') ?>>
					<small class="flex-fill text-center text-muted py-2"><span class='mdi mdi-map-marker-outline mdi-18px text-success me-3'></span><span name="city_name">Mérida, </span><span name="municipality_name">Celestúm</span></small>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Property List End -->
<!-- Contact Us Section -->
<?= $sectionContact ?>
<!-- Reviews Section -->
<?= $sectionReviews ?>