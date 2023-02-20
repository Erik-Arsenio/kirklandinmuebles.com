<!-- Header Start -->

	<div class="container-xxl bg-white p-0 mt-2">
		<div class="row g-0 text-center">
			<div class="col-md-6 p-3 mt-0 mt-xxl-5">
				<h1 class="animated slideInLeft h2 fw-bold mb-4"><?= lang('Globals.homepage_1') ?></h1>
				<p class="animated slideInLeft h2 fw-bold mb-4"><?= lang('Globals.homepage_2') ?></p>
				<p class="animated slideInLeft h4 mb-4 pb-2"><?= lang('Globals.homepage_3') ?></p>
				<div class="m-4 text-center">
					<a href="<?= base_url('templates/contactForm/?lang='. $lang) ?>" type="button" class="btn btn-lg btn-outline-success text-decoration-none mt-4" target="_blank">
					<?= lang('Globals.header_3') ?>
					</a>
				</div>
			</div>
			<div class="col-md-6 pe-md-5">
				<div class="carousel slide carousel-fade text-center animated fadeInRight" data-bs-ride="carousel" data-bs-touch="false" data-bs-pause="hover" id="carouselHome">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="<?= STATIC_URL . 'img/marela_life/01-' . $lang . '.jpg' ?>" class="card-img-top img-fluid" alt="Desarrollo de Marela Life en Mérida, Yucatán, México.">
						</div>
						<div class="carousel-item">
							<img src="<?= STATIC_URL . 'img/marela_life/02-' . $lang . '.jpg' ?>" class="card-img-top img-fluid" alt="Desarrollo de Marela Life en Mérida, Yucatán, México.">
						</div>
						<div class="carousel-item">
							<img class="img-fluid" src="<?= STATIC_URL . 'img/marela_beach/01-' . $lang . '.jpg' ?>" width="1754 px" height="1240 px" alt="Playa de Marela Beach">
						</div>
						<div class="carousel-item">
							<img class="img-fluid" src="<?= STATIC_URL . 'img/marela_beach/09-' . $lang . '.jpg' ?>"  width="1754 px" height="1240 px" alt="Ubicación del Desarrollo de Marela Beach">
						</div>
						<div class="carousel-item">
							<img class="img-fluid" src="<?= STATIC_URL . 'img/marela_celestun/04.jpg' ?>"  width="1754 px" height="1240 px" alt="Marela Celestún en la hermosa playa de esmeralda">
							<div class="carousel-caption">
								<h3 class="fs-1 text-uppercase text-danger bg-dark-subtle"><?= lang('Globals.header_7') ?></h3>
							</div>
						</div>
						<div class="carousel-item">
							<img class="img-fluid" src="<?= STATIC_URL . 'img/marela_celestun/06.jpg' ?>"  width="1754 px" height="1240 px" alt="Ubicación del Desarrollo de Marela Celestún">
							<div class="carousel-caption">
								<h3 class="fs-1 text-uppercase text-danger bg-dark-subtle"><?= lang('Globals.header_7') ?></h3>
							</div>
						</div>
						<div class="carousel-item">
							<img class="img-fluid" src="<?= STATIC_URL . 'img/anthia/01-' . $lang . '.jpg' ?>"  width="1754 px" height="1240 px" alt="Anthia,Mérida, Yucatán, México. Desarrollo de terrenos de inversión semiurbanizados">
						</div>
						<div class="carousel-item">
							<img class="img-fluid" src="<?= STATIC_URL . 'img/anthia/07-' . $lang . '.jpg' ?>"  width="1754 px" height="1240 px" alt="Master Plan de 5 etapas del Desarrollo de inversión semiurbanizados en Anthia">
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
			<h2 class="mb-3"><?= lang('Globals.homepage_4') ?></h2>
		</div>
		<div class="row g-5 align-items-center">
			<div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
				<div class="about-img position-relative overflow-hidden p-5 pe-0">
					<img class="img-fluid w-100 shadow-lg border border-dark" src="<?= STATIC_URL . 'img/mapa_desarrollos.jpg' ?>" alt="Mapa de desarrollos en Mérida, Yucatán, México.">
				</div>
			</div>
			<div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
				<p class="h4"><?= lang('Globals.homepage_5') ?></p>
				<p class="h4"><?= lang('Globals.homepage_6') ?></p>
				<p class="h4"><?= lang('Globals.homepage_7') ?></p>
				<p class="h6"><?= lang('Globals.homepage_8') ?></p>
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
				<h1 class="text-uppercase mt-5 mb-2"><?= lang('Globals.homepage_9') ?></h1>
			</div>
		</div>
	</div>
	<div class="row row-cols-1 row-cols-lg-3 g-4">
		<div class="col wow fadeInUp mb-5" data-wow-delay="0.1s">
			<div class="card property-item border-5 h-100 shadow">
				<div class="position-relative overflow-hidden text-center">
					<div id="carouselLife" class="carousel slide text-center" data-bs-ride="false" data-bs-touch="false" title="" data-href="">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="<?= STATIC_URL . 'img/marela_life/01-' . $lang . '.jpg' ?>" class="card-img-top img-fluid" alt="Desarrollo de Marela Life en Mérida, Yucatán, México.">
							</div>
							<div class="carousel-item">
								<img src="<?= STATIC_URL . 'img/marela_life/02-' . $lang . '.jpg' ?>" class="card-img-top img-fluid" alt="Desarrollo de Marela Life en Mérida, Yucatán, México.">
							</div>
						</div>
						<button class="carousel-control-prev" type="button" data-bs-target="#carouselLife" data-bs-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="visually-hidden"><?= lang('Globals.previous') ?></span>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="#carouselLife" data-bs-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="visually-hidden"><?= lang('Globals.next') ?></span>
						</button>
					</div>
				</div>
				<div class="card-body " title="" data-href="" >
					<h4 class="card-text text-center" name="project_heading"><?= lang('Globals.header_5') ?></h4>
					<h6 class="card-text text-center" name="project_description"><?= lang('Globals.homepage_13') ?></h6>
				</div>
				<div class="card-footer" title="" data-href="">
					<small class="flex-fill text-center text-muted py-2"><span class='mdi mdi-map-marker-outline mdi-18px text-success me-3'></span><?= lang('Globals.homepage_43') ?>, <?= lang('Globals.homepage_40') ?></small>
				</div>
			</div>
		</div>
		<div class="col wow fadeInUp mb-5" data-wow-delay="0.1s">
			<div class="card property-item border-5 h-100 shadow">
				<div class="position-relative overflow-hidden text-center">
					<div id="carouselAnthia" class="carousel slide text-center" data-bs-ride="false" data-bs-touch="false" title="Click para ir a la página" data-href=<?= base_url('investments/anthia/3?lang='. $lang) ?>>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="<?= STATIC_URL . 'img/anthia/01-' . $lang . '.jpg' ?>" class="card-img-top img-fluid btn-investments" alt="Anthia, Mérida, Yucatán, México. Desarrollo de terrenos de inversión semiurbanizados">
							</div>
							<div class="carousel-item">
								<img src="<?= STATIC_URL . 'img/anthia/13-' . $lang . '.jpg' ?>" class="card-img-top img-fluid btn-investments" alt="Master Plan de 5 etapas del Desarrollo de inversión semiurbanizados en Anthia">
							</div>
							<div class="carousel-item">
								<img src="<?= STATIC_URL . 'img/anthia/07-' . $lang . '.jpg' ?>" class="card-img-top img-fluid btn-investments" alt="Imagen de lotes de la 3ra etapa del Desarrollo de Anthia">
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
					<h4 class="card-text text-center" name="project_heading"><?= lang('Globals.header_4') ?></h4>
					<h6 class="card-text text-center" name="project_description"><?= lang('Globals.homepage_10') ?></h6>
				</div>
				<div class="card-footer  btn-investments" title="Click para ir a la página" data-href=<?= base_url('investments/anthia/3?lang='. $lang) ?>>
					<small class="flex-fill text-center text-muted py-2"><span class='mdi mdi-map-marker-outline mdi-18px text-success me-3'></span><?= lang('Globals.homepage_41') ?><?= lang('Globals.homepage_40') ?></small>
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
					<h4 class="card-text text-center" name="project_heading"><?= lang('Globals.header_1') ?></h4>
					<h6 class="card-text text-center" name="project_description"><?= lang('Globals.homepage_11') ?></>
				</div>
				<div class="card-footer btn-investments" title="Click para ir a la página" data-href=<?= base_url('investments/lakuun/?lang='. $lang) ?>>
					<small class="flex-fill text-center text-muted py-2"><span class='mdi mdi-map-marker-outline mdi-18px text-success me-3'></span><?= lang('Globals.homepage_42') ?><?= lang('Globals.homepage_40') ?></small>
				</div>
			</div>
		</div>
		<div class="col wow fadeInUp mb-5" data-wow-delay="0.1s">
			<div class="card property-item  border-5 h-100 shadow">
				<div class="position-relative overflow-hidden">
					<div id="carouselMarelaBeach" class="carousel slide text-center" data-bs-ride="false" data-bs-touch="false" title="Click para ir a la página" data-href=<?= base_url('investments/marela_beach?lang='. $lang) ?>>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="<?= STATIC_URL . 'img/marela_beach/01-' . $lang . '.jpg' ?>" class="card-img-top img-fluid btn-investments" alt="Playa de Marela Beach en Mérida, Yucatán, México.">
							</div>
							<div class="carousel-item">
								<img src="<?= STATIC_URL . 'img/marela_beach/09-' . $lang . '.jpg' ?>" class="card-img-top img-fluid btn-investments" alt="Ubicación del Desarrollo de Marela Beach en Mérida, Yucatán, México.">
							</div>
							<div class="carousel-item">
								<img src="<?= STATIC_URL . 'img/marela_beach/10-' . $lang . '.jpg' ?>" class="card-img-top img-fluid btn-investments" alt="Master Plan de Marela Beach, Mérida, Yucatán, México.">
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
					<h4 class="card-text text-center" name="project_heading"><?= lang('Globals.header_5') ?></h4>
					<h6 class="card-title text-center" name="project_description"><?= lang('Globals.homepage_13') ?></h6>
				</div>
				<div class="card-footer btn-investments" title="Click para ir a la página" data-href=<?= base_url('investments/marela_beach?lang='. $lang) ?>>
					<small class="flex-fill text-center text-muted py-2"><span class='mdi mdi-map-marker-outline mdi-18px text-success me-3'></span><?= lang('Globals.homepage_43') ?>, <?= lang('Globals.homepage_40') ?></small>
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
									<h3 class="fs-1 text-uppercase text-danger bg-dark-subtle"><?= lang('Globals.header_7') ?></h3>
								</div>
							</div>
							<div class="carousel-item">
								<img src="<?= STATIC_URL . 'img/marela_celestun/05.jpg' ?>" class="card-img-top img-fluid btn-investments" alt="Master Plan de Marela Celestún, Mérida, Yucatán, México.">
								<div class="carousel-caption">
									<h3 class="fs-1 text-uppercase text-danger bg-dark-subtle"><?= lang('Globals.header_7') ?></h3>
								</div>
							</div>
							<div class="carousel-item">
								<img src="<?= STATIC_URL . 'img/marela_celestun/06.jpg' ?>" class="card-img-top img-fluid btn-investments" alt="Ubicación del Desarrollo de Marela Celestún">
								<div class="carousel-caption">
									<h3 class="fs-1 text-uppercase text-danger bg-dark-subtle"><?= lang('Globals.header_7') ?></h3>
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
					<h4 class="card-text text-center" name="project_heading"><?= lang('Globals.header_6') ?></h4>
					<h6 class="card-title text-center" name="project_description"><?= lang('Globals.homepage_12') ?></h6>
				</div>
				<div class="card-footer btn-investments" title="Click para ir a la página" data-href=<?= base_url('investments/marela_celestun?lang='. $lang) ?>>
					<small class="flex-fill text-center text-muted py-2"><span class='mdi mdi-map-marker-outline mdi-18px text-success me-3'></span><?= lang('Globals.homepage_43') ?>, <?= lang('Globals.homepage_40') ?></small>
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