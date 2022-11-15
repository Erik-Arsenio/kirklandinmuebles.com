<!-- Content ContactForm Start -->
<div class="container-xxl text-center py-3">
    <form id="form_contact" action="<?= route_to('send.email') ?>" method="post">
        <?= csrf_field() ?>
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-lg-6">
                <div class="card border-success mb-3">
                    <div class="card-header bg-transparent border-success">
                        <h1 class="card-title fs-5 text-center text-success"><?= lang('Globals.contact_us') ?></h1>
                    </div>
                    <div class="card-body ">
                        <?php if (!empty(session()->getFlashdata('error'))) : ?>
                            <div class="alert alert-danger"><?= session()->getFlashdata('error'); ?></div>
                        <?php endif ?>

                        <?php if (!empty(session()->getFlashdata('success'))) : ?>
                            <div class="alert alert-success"><?= session()->getFlashdata('success'); ?></div>
                        <?php endif ?>

                        <p class="h5 mb-4">¿Tienes dudas de como invertir?</p>
                        <p class="mb-4">Nuestros asesores patrimoniales te ayudarán a saber cual es la opción que más te conviene para que empieces a cimentar tu patrimonio.</p>
                        <p class="h6 mb-4">Responde el siguiente formulario, para que uno de nuestros asesores inmobiliarios te contacte.</p>

                        <div class="row row-cols-1 row-cols-lg-2 g-3">
                            <div class="col">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Nombre" aria-label="First name" value="<?= old('name') ?>">
                                <span class="text-danger small">
                                    <?= (session('errors.name')) ? 'Este campo es obligatorio' : '' ?>
                                </span>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Apellidos" aria-label="Last name" value="<?= old('last_name') ?>">
                                <span class="text-danger small">
                                    <?= (session('errors.last_name')  ? 'Este campo es obligatorio' : '') ?>
                                </span>
                            </div>
                            <div class="col">
                                <div class="input-group">
                                    <span class="input-group-text text-success mdi mdi-whatsapp mdi-18px"><span class=''></span></span>
                                    <input type="tel" onkeypress="return event.charCode>=48 && event.charCode<=57 || event.charCode == 32" class="form-control" name="phone" id="phone" placeholder="Número de WhatsApp" aria-label="phone" aria-describedby="phone" value="<?= old('phone') ?>">
                                </div>
                                <span class="text-danger small">
                                    <?= session('errors.phone') ?>
                                    <!-- <?= (session('errors.phone') ? 'Este campo es obligatorio' : '') ?> -->
                                </span>
                            </div>
                            <div class="col ">
                                <!-- <label for="exampleFormControlInput1" class="form-label">Dirección de correo electrónico</label> -->
                                <input type="email" class="form-control" name="email" id="email" placeholder="Correo electrónico" value="<?= old('email') ?>">
                                <span class="text-danger small">
                                    <?= session('errors.email') ?>
                                    <!-- <?= (session('errors.email') ? 'Este campo es obligatorio' : ''); ?> -->
                                </span>
                            </div>
                        </div>
                        <div class="row mx-1 my-3">
                            <label for="message" class="form-label h6 text-center">¿Cuáles son tus dudas e inquietudes?</label>
                            <textarea class="form-control" name="message" id="message" rows="6"><?= old('message') ?></textarea>
                        </div>
                        <div class="row mx-1 my-3">
                            <p class="h6 mb-4">Seleccione el(los) desarrollos en los que está interesado en recibir información.</p>
                        </div>
                        <div class="form-check form-check-inline mb-3">
                            <?php //var_dump($projects) ?>
                            <?php foreach ($projects as $v) : ?>
                                <div class="form-check-inline px-2">
                                    <input class="form-check-input" type="checkbox" name="project[]" value="<?= $v ?>" 
                                        <?=
                                            old("project")
                                                ?
                                                (in_array($v, old('project'))
                                                    ? 'checked'
                                                    : '')
                                                : ''
                                        ?>>
                                    <label class="form-check-label"><?= $v ?></label>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent border-success">
                        <!-- href="https://api.whatsapp.com/send?phone=+numerowhatsapp&text=aqui va el mensaje que deseas no importa los espacios&source=&data=&app_absent=" -->
                        <!-- <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Cancelar</button> -->
                        <button type="submit" id="submit" class="btn btn-sm btn-outline-success text-decoration-none" name="send_email" value="send_email">Enviar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<!-- Content ContactForm End -->