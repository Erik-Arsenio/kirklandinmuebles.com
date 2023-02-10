<!-- Header Start -->

	<div class="container-xxl bg-white p-0 mt-2">
		<div class="row g-0 text-center">
			<div class="col-md-6 p-3 mt-0 mt-xxl-5">
				<h1 class="animated slideInLeft h2 fw-bold mb-4">Venta de Terrenos residenciales y lotes patrimoniales en Yucatán, México.</h1>
				<p class="animated slideInLeft h2 fw-bold mb-4">Inversión en desarrollos residenciales.</p>
				<p class="animated slideInLeft h4 mb-4 pb-2">Invierte en lotes y terrenos residenciales con alta plusvalía</p>
				<div class="m-4 text-center">
					<a href="<?= base_url('templates/contactForm/?lang='. $lang) ?>" type="button" class="btn btn-lg btn-outline-success text-decoration-none mt-4" target="_blank">
						Quiero que me contacten
					</a>
				</div>
			</div>
			<div class="col-md-6 pe-md-5">
				<div class="carousel slide carousel-fade text-center animated fadeInRight" data-bs-ride="carousel" data-bs-touch="false" data-bs-pause="hover" id="carouselHome">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img class="img-fluid" src="<?= STATIC_URL . 'img/marela_beach/01-es.jpg' ?>" width="1754 px" height="1240 px" alt="Playa de Marela Beach">
						</div>
						<div class="carousel-item">
							<img class="img-fluid" src="<?= STATIC_URL . 'img/marela_beach/09-es.jpg' ?>"  width="1754 px" height="1240 px" alt="Ubicación del Desarrollo de Marela Beach">
						</div>
						<div class="carousel-item">
							<img class="img-fluid" src="<?= STATIC_URL . 'img/marela_celestun/04.jpg' ?>"  width="1754 px" height="1240 px" alt="Marela Celestún en la hermosa playa de esmeralda">
						</div>
						<div class="carousel-item">
							<img class="img-fluid" src="<?= STATIC_URL . 'img/marela_celestun/06.jpg' ?>"  width="1754 px" height="1240 px" alt="Ubicación del Desarrollo de Marela Celestún">
						</div>
						<div class="carousel-item">
							<img class="img-fluid" src="<?= STATIC_URL . 'img/anthia/01-es.jpg' ?>"  width="1754 px" height="1240 px" alt="Anthia,Mérida, Yucatán, México. Desarrollo de terrenos de inversión semiurbanizados">
						</div>
						<div class="carousel-item">
							<img class="img-fluid" src="<?= STATIC_URL . 'img/anthia/07-es.jpg' ?>"  width="1754 px" height="1240 px" alt="Master Plan de 5 etapas del Desarrollo de inversión semiurbanizados en Anthia">
						</div>
						<div class="carousel-item">
							<img class="img-fluid" src="<?= STATIC_URL . 'img/lakuun/01-' . $lang . '.jpg' ?>"  width="1754 px" height="1240 px" alt="Entrada distintiva del Desarrollo de Lakuun, Mérida, Yucatán, México.(Imagen ilustrativa)">
						</div>
						<div class="carousel-item">
							<img class="img-fluid" src="<?= STATIC_URL . 'img/lakuun/07-' . $lang . '.jpg' ?>"  width="1754 px" height="1240 px" alt="Master Plan de Lakuun, Mérida, Yucatán, México. Con 3 etapas del Desarrollo de lotes residenciales 100% semiurbanizados">
						</div>
					</div>
					<button class="carousel-control-prev" type="button" data-bs-target="#carouselHome" data-bs-slide="prev">
					<span class="mdi mdi-chevron-left mdi-72px" aria-hidden="true"></span>
						<span class="visually-hidden"><?= lang('Globals.previous') ?></span>
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#carouselHome" data-bs-slide="next">
					<span class="mdi mdi-chevron-right mdi-72px" aria-hidden="true"></span>
						<span class="visually-hidden"><?= lang('Globals.next') ?></span>
					</button>
				</div>
			</div>
		</div>
	</div>

<!-- Header End -->

<!-- About Start -->
<div class="container-xxl py-1">
	<!-- <div class="container"> -->
		<div class="text-center mx-auto py-5 wow fadeInUp" data-wow-delay="0.1s">
			<h2 class="mb-3">¿Por qué comprar lotes residenciales o lotes de inversión con nosotros?</h2>
		</div>
		<div class="row g-5 align-items-center">
			<div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
				<div class="about-img position-relative overflow-hidden p-5 pe-0">
					<img class="img-fluid w-100 shadow-lg border border-dark" src="<?= STATIC_URL . 'img/mapa_desarrollos.jpg' ?>" alt="Mapa de desarrollos en Mérida, Yucatán, México.">
				</div>
			</div>
			<div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
				<p class="h4">Ya sea que quieras mudarte o para vacacionar, nuestros terrenos de inversión te proporcionarán un excelente retorno de inversión y una diversificación de tu cartera.</p>
				<p class="h4">Este es el momento para invertir en el estado más seguro.</p>
				<p class="h4">Recuerda todo comienza con un sí.</p>
				<p class="h6">Conoce nuestros desarrollos e inicia tu nuevo estilo de vida con nosotros.</p>
			</div>
		</div>
	<!-- </div> -->
</div>
<!-- About End -->

<!-- Property List Start -->
<div class="container-xxl">
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
					<div id="carouselAnthia" class="carousel slide text-center" data-bs-ride="false" data-bs-touch="false" title="Click para ir a la página" data-href=<?= base_url('investments/anthia/3?lang='. $lang) ?>>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="<?= STATIC_URL . 'img/anthia/01-es.jpg' ?>" class="card-img-top img-fluid btn-investments" alt="Anthia, Mérida, Yucatán, México. Desarrollo de terrenos de inversión semiurbanizados">
							</div>
							<div class="carousel-item">
								<img src="<?= STATIC_URL . 'img/anthia/13-es.jpg' ?>" class="card-img-top img-fluid btn-investments" alt="Master Plan de 5 etapas del Desarrollo de inversión semiurbanizados en Anthia">
							</div>
							<div class="carousel-item">
								<img src="<?= STATIC_URL . 'img/anthia/07-es.jpg' ?>" class="card-img-top img-fluid btn-investments" alt="Imagen de lotes de la 3ra etapa del Desarrollo de Anthia">
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
				<div class="card-body  btn-investments" title="Click para ir a la página" data-href=<?= base_url('investments/anthia/3?lang='. $lang) ?>>
					<h4 class="card-text text-center" name="project_heading">Lotes patrimoniales de inversión</h4>
					<h6 class="card-text text-center" name="project_description">Desarrollo de terrenos de inversión semi-urbanizados.</h6>
				</div>
				<div class="card-footer  btn-investments" title="Click para ir a la página" data-href=<?= base_url('investments/anthia/3?lang='. $lang) ?>>
					<small class="flex-fill text-center text-muted py-2"><span class='mdi mdi-map-marker-outline mdi-18px text-success me-3'></span><span name="municipality_name">Hunucmá, </span><span name="city_name">Mérida, </span>Yucatán, México.</small>
				</div>
			</div>
		</div>
		<div class="col wow fadeInUp mb-5" data-wow-delay="0.1s">
			<div class="card property-item border-5 h-100 shadow">
				<div class="position-relative overflow-hidden text-center">
					<div id="carouselLakuun" class="carousel slide text-center" data-bs-ride="false" data-bs-touch="false" title="Click para ir a la página" data-href=<?= base_url('investments/lakuun/?lang='. $lang) ?>>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="<?= STATIC_URL . 'img/lakuun/01-' . $lang . '.jpg' ?>" class="card-img-top img-fluid btn-investments" alt="Entrada distintiva del Desarrollo de Lakuun, Mérida, Yucatán, México.(Imagen ilustrativa)">
							</div>
							<div class="carousel-item">
								<img src="<?= STATIC_URL . 'img/lakuun/06-' . $lang . '.jpg' ?>" class="card-img-top img-fluid btn-investments" alt="Desarrollo de Lakuun, Mérida,Yucatán. Conformado por 3 etapas y 19 amenidades">
							</div>
							<div class="carousel-item">
								<img src="<?= STATIC_URL . 'img/lakuun/07-' . $lang . '.jpg' ?>" class="card-img-top img-fluid btn-investments" alt="Master Plan de Lakuun, Mérida, Yucatán, México. Con 3 etapas del Desarrollo de lotes residenciales 100% semiurbanizados">
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
				<div class="card-body btn-investments" title="Click para ir a la página" data-href=<?= base_url('investments/lakuun/?lang='. $lang) ?>>
					<h4 class="card-text text-center" name="project_heading">Lotes residenciales premium</h4>
					<h6 class="card-text text-center" name="project_description">Desarrollo residencial inspirado en exclusividad, balance y elegancia.</>
				</div>
				<div class="card-footer btn-investments" title="Click para ir a la página" data-href=<?= base_url('investments/lakuun/?lang='. $lang) ?>>
					<small class="flex-fill text-center text-muted py-2"><span class='mdi mdi-map-marker-outline mdi-18px text-success me-3'></span><span name="municipality_name">Komchen, </span><span name="city_name">Mérida, </span></span>Yucatán, México.</small>
				</div>
			</div>
		</div>
		<div class="col wow fadeInUp mb-5" data-wow-delay="0.1s">
			<div class="card property-item  border-5 h-100 shadow">
				<div class="position-relative overflow-hidden text-center">
					<div id="carouselMarelaCelestun" class="carousel slide text-center" data-bs-ride="false" data-bs-touch="false" title="Click para ir a la página" data-bs-ride="true" data-href=<?= base_url('investments/marela_celestun?lang='. $lang) ?>>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="<?= STATIC_URL . 'img/marela_celestun/01.jpg' ?>" class="card-img-top img-fluid btn-investments" alt="Marela Celestún, Mérida, Yucatán, México">
								<div class="carousel-caption">
									<h3 class="fs-1 text-danger">VENDIDO</h3>
								</div>
							</div>
							<div class="carousel-item">
								<img src="<?= STATIC_URL . 'img/marela_celestun/05.jpg' ?>" class="card-img-top img-fluid btn-investments" alt="Master Plan de Marela Celestún, Mérida, Yucatán, México.">
								<div class="carousel-caption">
									<h3 class="fs-1 text-danger">VENDIDO</h3>
								</div>
							</div>
							<div class="carousel-item">
								<img src="<?= STATIC_URL . 'img/marela_celestun/06.jpg' ?>" class="card-img-top img-fluid btn-investments" alt="Ubicación del Desarrollo de Marela Celestún">
								<div class="carousel-caption">
									<h3 class="fs-1 text-danger">VENDIDO</h3>
								</div>
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
				<div class="card-body btn-investments" title="Click para ir a la página" data-href=<?= base_url('investments/marela_celestun?lang='. $lang) ?>>
					<h4 class="card-text text-center" name="project_heading">Lotes patrimoniales en la Playa</h4>
					<h6 class="card-title text-center" name="project_description">Terrenos semi-urbanizados en la hermosa playa de Celestún</h6>
				</div>
				<div class="card-footer btn-investments" title="Click para ir a la página" data-href=<?= base_url('investments/marela_celestun?lang='. $lang) ?>>
					<small class="flex-fill text-center text-muted py-2"><span class='mdi mdi-map-marker-outline mdi-18px text-success me-3'></span><span name="municipality_name">Celestúm, </span><span name="city_name">Mérida, </span></span>Yucatán, México.</small>
				</div>
			</div>
		</div>
		<div class="col wow fadeInUp mb-5" data-wow-delay="0.1s">
			<div class="card property-item  border-5 h-100 shadow">
				<div class="position-relative overflow-hidden">
					<div id="carouselMarelaBeach" class="carousel slide text-center" data-bs-ride="false" data-bs-touch="false" title="Click para ir a la página" data-href=<?= base_url('investments/marela_beach?lang='. $lang) ?>>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="<?= STATIC_URL . 'img/marela_beach/01-es.jpg' ?>" class="card-img-top img-fluid btn-investments" alt="Playa de Marela Beach en Mérida, Yucatán, México.">
							</div>
							<div class="carousel-item">
								<img src="<?= STATIC_URL . 'img/marela_beach/09-es.jpg' ?>" class="card-img-top img-fluid btn-investments" alt="Ubicación del Desarrollo de Marela Beach en Mérida, Yucatán, México.">
							</div>
							<div class="carousel-item">
								<img src="<?= STATIC_URL . 'img/marela_beach/10-es.jpg' ?>" class="card-img-top img-fluid btn-investments" alt="Master Plan de Marela Beach, Mérida, Yucatán, México.">
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
				<div class="card-body btn-investments" title="Click para ir a la página" data-href=<?= base_url('investments/marela_beach?lang='. $lang) ?>>
					<h4 class="card-text text-center" name="project_heading">Lotes residenciales en la playa</h4>
					<h6 class="card-title text-center" name="project_description">Terrenos residenciales semi-urbanizados en la hermosa playa de Celestún</h6>
				</div>
				<div class="card-footer btn-investments" title="Click para ir a la página" data-href=<?= base_url('investments/marela_beach?lang='. $lang) ?>>
					<small class="flex-fill text-center text-muted py-2"><span class='mdi mdi-map-marker-outline mdi-18px text-success me-3'></span><span name="municipality_name">Celestúm, </span><span name="city_name">Mérida, </span></span>Yucatán, México.</small>
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