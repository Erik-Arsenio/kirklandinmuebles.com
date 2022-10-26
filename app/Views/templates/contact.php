<!-- Call to Action Start -->
<div class="container-xxl py-5">
	<div class="container">
		<!-- <div class="bg-light rounded p-3"> -->
			<!-- <div class="bg-white rounded p-1" style="border: 1px dashed rgba(0, 185, 142, .3)"> -->
			<div class="bg-light rounded p-1 p-lg-2" >
				<div class="row g-5 align-items-center">
					<div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
						<img class="img-fluid rounded w-100" src="<?= STATIC_URL . 'img/yenny.jpg' ?>" loading="lazy" alt="">
					</div>
					<div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
						<div class="mb-1">
							<p class="h3">Este es el momento para invertir!</p>
							
							<p>Ya sea que quieras iniciar a formar tu patrimonio o quieras aumentarlo, estamos contigo en cada etapa para ofrecerte el mejor producto que maximice tu retorno de inversión.</p>
							
							<!-- <p class="h3 mb-1">Contacte con Agente Certificado</p> -->
							<!-- <a href="tel:+529994497599" class="p-2 me-2" xlink:title="LLamar"><span class='mdi mdi-phone-forward mdi-48px text-success me-3' title="Llamar al teléfono"></span></a> -->
							<!-- <a href="https://api.whatsapp.com/send?phone=529994497599&amp;text=Hola%20quiero%20más%20Informacion%20de%20Anthia" target="_blank" class=" p-2 me-2"><span class='mdi mdi-whatsapp mdi-48px text-success me-3' title="Contactar por WhatsaApp"></span></a> -->
						</div>
						<div class="m-4 text-center">
							<!-- Button trigger modal -->
							<a type="button" class="btn btn-lg btn-outline-success text-decoration-none mt-4" data-bs-toggle="modal" data-bs-target="#contactModal">
								Contactar un asesor
							</a>
						</div>
					</div>
				</div>
			</div>
		<!-- </div> -->
	</div>
</div>


<!-- Modal -->
<div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true" style="z-index: 99999">
	<form id="form_contact" action="" method="get" >
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
		<div class="modal-content">
				<div class="modal-header">
					<h1 class="modal-title fs-5 text-center"id="contactModalLabel">Contáctanos</h1>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<p class="h5 mb-4">¿Tienes dudas de como invertir?</p>
					<p class="mb-4">Nuestros asesores patrimoniales te ayudarán a saber cual es la opción que más te conviene para que empieces a cimentar tu patrimonio.</p>
					<p class="h6 mb-4">Responde el siguiente formulario, para que uno de nuestros asesores inmobiliarios te contacte.</p>

						<div class="row row-cols-1 row-cols-lg-2 g-3">
							<div class="col">
								<input type="text" class="form-control" id="name" placeholder="Nombre" aria-label="First name" required>
								<div class="valid-feedback">
									Correcto!
								</div>
							</div>
							<div class="col">
								<input type="text" class="form-control" id="last_name" placeholder="Apellidos" aria-label="Last name" required>
								<div class="valid-feedback">
									Correcto!
								</div>
							</div>
							<div class="col">
								<div class="input-group">
									<!-- <label for="phone_cell" class="col-form-label">Recipient:</label> -->
									<span class="input-group-text" ><span class='mdi mdi-phone-forward mdi-14px text-success'></span></span>
									<input type="tel" class="form-control" id="phone" placeholder="Número de WhatsApp" aria-label="phone" aria-describedby="phone" required>
								</div>
							</div>
							<div class="col ">
								<!-- <label for="exampleFormControlInput1" class="form-label">Dirección de correo electrónico</label> -->
								<input type="email" class="form-control" id="email" placeholder="Correo electrónico (nombre@ejemplo.com)" required>
							</div>
						</div>
						<div class="row mx-1 my-3">
							<label for="dudasTextarea" class="form-label h6 text-center">¿Cuáles son tus dudas e inquietudes?</label>
							<textarea class="form-control" id="dudasTextarea" rows="8"></textarea>
						</div>
						<div class="row mx-1 my-3">
							<p class="h6 mb-4">Seleccione el(los) desarrollos en los que está interesado en recibir información.</p>
						</div>
						<div class="row row-cols-2 row-cols-lg-4 g-3 mb-3">
							<div class="col">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="Anthia" id="gridCheck1">
									<label class="form-check-label" for="gridCheck1">Anthia</label>
								</div>
							</div>
							<div class="col">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="Lakuun" id="gridCheck2">
									<label class="form-check-label" for="gridCheck2">Lakuun</label>
								</div>
							</div>
							<div class="col">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="Marela Celestun" id="gridCheck3">
									<label class="form-check-label" for="gridCheck3">Marela Celestun</label>
								</div>
							</div>
							<div class="col">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="Marela beach" id="gridCheck4">
									<label class="form-check-label" for="gridCheck4">Marela beach</label>
								</div>
							</div>
						</div>
				</div>
				<div class="modal-footer">
					<!-- href="https://api.whatsapp.com/send?phone=+numerowhatsapp&text=aqui va el mensaje que deseas no importa los espacios&source=&data=&app_absent=" -->
					<!-- <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Cancelar</button> -->
					<button type="submit" id="submit" class="btn btn-sm btn-outline-success text-decoration-none">Enviar por WhatsaApp</button>
				</div>
			</div>
		</div>
	</form>
</div>

<!-- Call to Action End -->