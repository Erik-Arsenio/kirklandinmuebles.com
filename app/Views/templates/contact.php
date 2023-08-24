<!-- Call to Action Start -->
<div class="container-xxl py-5">
	<!-- <div class="container"> -->
		<!-- <div class="bg-light rounded p-3"> -->
		<div class="bg-white rounded p-1" style="border: 2px dashed rgba(0, 185, 142, .3)">
		<div class="p-1 p-lg-2">
			<div class="row g-5 d-flex align-items-center">
				<div class="col-lg-7 wow fadeIn" data-wow-delay="1.5s">
					<div class="card border border-2 border-success" style="max-width: 640px;">
						<div class="row d-flex align-items-center g-0">
							<div class="col-md-5">
								<img class="img-fluid border border-0 rounded-circle w-100" src="<?= STATIC_URL . 'img/carmen.png' ?>" loading="lazy" width="140 px" height="140 px"  alt="Carmen Palay">
							</div>
							<div class="col-md-7">
								<div class="card-body text-center">
									<h5 class="card-title">Carmen Palay Herrera</h5>
									<p class="card-text"><?= lang('Globals.contact_1') ?></p>
									<!-- <p class="card-text">Especialista de ACD desarrollo</p> -->
									<p class="mb-2"><span class='mdi mdi-phone mdi-18px me-3'></span>+52 999 449 7599</p>
									<p class="mb-2 text-nowrap"><span class='mdi mdi-email-outline mdi-18px me-3'></span>carmen@kirklandinmobiliaria.com</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-5 wow fadeIn mt-xs-5 mt-xl-0" data-wow-delay="0.5s">
					<div class="mb-1">
						<p class="h4 text-center"><?= lang('Globals.contact_2') ?></p>
						<p><?= lang('Globals.contact_3') ?></p>
						<!-- <p class="h3 mb-1">Contacte con Agente Certificado</p> -->
						<!-- <a href="tel:+529994497599" class="p-2 me-2" xlink:title="LLamar"><span class='mdi mdi-phone-forward mdi-48px text-success me-3' title="Llamar al teléfono"></span></a> -->
						<!-- <a href="https://api.whatsapp.com/send?phone=529994497599&amp;text=Hola%20quiero%20más%20Informacion%20de%20Anthia" target="_blank" class=" p-2 me-2"><span class='mdi mdi-whatsapp mdi-48px text-success me-3' title="Contactar por WhatsaApp"></span></a> -->
					</div>
					<div class="m-4 text-center">
						<a href="<?= base_url('templates/contactForm/?lang='. $lang) ?>" type="button" class="btn btn-lg btn-outline-success text-decoration-none mt-4" target="_blank">
						<?= lang('Globals.contact_4') ?>
						</a>
					</div>
				</div>
			</div>
		</div>
		</div>
	<!-- </div> -->
</div>
<!-- Call to Action End -->