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

                        <p class="h5 mb-4"><?= lang('Globals.contactform_1') ?></p>
                        <p class="mb-4"><?= lang('Globals.contactform_2') ?></p>
                        <p class="h6 mb-4"><?= lang('Globals.contactform_3') ?></p>

                        <div class="row row-cols-1 row-cols-lg-2 g-3">
                            <div class="col">
                                <input type="text" class="form-control" name="name" id="name" placeholder="<?= lang('Globals.contactform_4') ?>" aria-label="First name" value="<?= old('name') ?>">
                                <span class="text-danger small">
                                    <?= (session('errors.name')) ? lang('Globals.contactform_15')  : '' ?>
                                </span>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="<?= lang('Globals.contactform_5') ?>" aria-label="Last name" value="<?= old('last_name') ?>">
                                <span class="text-danger small">
                                    <?= (session('errors.last_name')  ? lang('Globals.contactform_15') : '') ?>
                                </span>
                            </div>
                            <div class="col">
                                <div class="input-group">
                                    <span class="input-group-text text-success mdi mdi-phone mdi-18px"><span class=''></span></span>
                                    <input type="tel" onkeypress="return event.charCode>=48 && event.charCode<=57 || event.charCode == 32 || event.charCode == 43" class="form-control" name="phone" id="phone" placeholder="<?= lang('Globals.contactform_6') ?>" aria-label="phone" aria-describedby="phone" value="<?= old('phone') ?>">
                                </div>
                                <span class="text-danger small">
                                    <!-- <?= session('errors.phone') ?> -->
                                    <?= (session('errors.phone') ? lang('Globals.contactform_15') : '') ?>
                                </span>
                            </div>
                            <div class="col ">
                                <!-- <label for="exampleFormControlInput1" class="form-label">Dirección de correo electrónico</label> -->
                                <div class="input-group">
                                    <span class="input-group-text text-success mdi mdi-email-outline mdi-18px"><span class=''></span></span>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="<?= lang('Globals.contactform_7') ?>" value="<?= old('email') ?>">
                                </div>
                                <span class="text-danger small">
                                    <!-- <?= session('errors.email') ?> -->
                                    <?= (session('errors.email') ? lang('Globals.contactform_15') : ''); ?>
                                </span>
                            </div>
                        </div>
                        <div class="row mx-1 my-3">
                            <label for="message" class="form-label h6 text-center"><?= lang('Globals.contactform_8') ?></label>
                            <textarea class="form-control" name="message" id="message" rows="6"><?= old('message') ?></textarea>
                        </div>
                        <div class="row mx-1 my-3">
                            <p class="h6 mb-4"><?= lang('Globals.contactform_9') ?></p>
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
                        <div class="form-check form-check-inline mb-3">
                            <p class="h6 mb-4"><?= lang('Globals.contactform_10') ?></p>
                            <div class="form-check-inline px-2">
                                <input class="form-check-input" type="checkbox" name="spanish" value="<?= lang('Globals.contactform_11') ?>">
                                    <label class="form-check-label"><?= lang('Globals.contactform_11') ?></label>
                            </div>
                            <div class="form-check-inline px-2">
                                <input class="form-check-input" type="checkbox" name="english" value="<?= lang('Globals.contactform_12') ?>">
                                    <label class="form-check-label"><?= lang('Globals.contactform_12') ?></label>
                            </div>
                            <div class="form-check-inline px-2">
                                <input class="form-check-input" type="checkbox" name="either" value="<?= lang('Globals.contactform_13') ?>">
                                <label class="form-check-label"><?= lang('Globals.contactform_13') ?></label>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent border-success">
                        <!-- href="https://api.whatsapp.com/send?phone=+numerowhatsapp&text=aqui va el mensaje que deseas no importa los espacios&source=&data=&app_absent=" -->
                        <!-- <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Cancelar</button> -->
                        <button type="submit" id="submit" class="btn btn-sm btn-outline-success text-decoration-none" name="send_email" value="send_email"><?= lang('Globals.contactform_14') ?></button>
                    </div>
                </div>
            </div>
            <input type="hidden" name="lang" id="lang" value='<?= $lang ?>'>
        </div>
    </form>
</div>
<!-- Content ContactForm End -->