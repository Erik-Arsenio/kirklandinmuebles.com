<!-- Header Start -->
    <div class="container-xxl bg-white p-0 mt-4 mb-5">
        <div class="row g-0 align-items-center flex-md-row">
            <div class="col-lg-6 text-center px-3 px-lg-5 mt-0 mt-xxl-5">
                <div class="animated fadeInLeft bg-success text-white rounded-5 pb-2">
                    <h1 class="h3">Salama</h1>
                    <h2 class="h6">PROGRESO, MÉRIDA, YUCATÁN, MÉXICO</h2>
                </div>
                <h3 class="h2 animated fadeIn fw-bold my-2"><?= lang('Globals.header_25') ?></h3>
                <p class="h5 animated fadeIn mb-2 py-1"><?= lang('Globals.header_26') ?></p>
                <div class="text-center mt-lg-1 promo not_mobile d-none" id="" style="min-height: 9em">
                </div>
                <!-- <div class="m-2 d-none">
                    <a href="<?//= base_url('templates/contactForm/?lang='. $lang) ?>" type="button" class="btn btn-lg btn-outline-success btn-contact text-decoration-none mt-0 not_mobile d-none" target="_blank">
                        <span class="fadeinout"><?//= lang('Globals.header_3') ?></span>
                    </a>
                </div> -->
            </div>
            <div class="col-lg-6 pe-lg-5">
                <div class="text-center mx-auto">
                    <p class="fw-bold small mb-0 not_mobile d-none"><?= lang('Globals.click_zoom') ?></p>
                </div>
                <div class="carousel carousel-fade slide  text-center" data-bs-ride="carousel" data-bs-pause="hover" data-bs-touch="false" id="carouselHome">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="<?= STATIC_URL . 'img/salama/entrada principal.jpg' ?>" class="img-fluid h-100" width="1754 px" height="1240 px" alt="Acceso Principal a Salama, Mérida, Yucatán, México.">
                            <div class="carousel-caption bottom-0 py-0 ">
                                <p class="h6 text-black bg-dark-subtle subtle"><?= lang('Globals.carousel_50') ?></p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="<?= STATIC_URL . 'img/salama/relajacion.jpg' ?>" class="img-fluid h-100" width="1754 px" height="1240 px" alt="Salama es magia, Progreso, Mérida, Yucatán, México.">
                            <div class="carousel-caption bottom-0 py-0 ">
                                <p class="h6 text-black bg-dark-subtle subtle"><?= lang('Globals.carousel_51') ?></p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="<?= STATIC_URL . 'img/salama/muchacha bonita.jpg' ?>" class="img-fluid h-100" width="1754 px" height="1240 px" alt="Áea comercial Salama, Progreso, Mérida, Yucatán, México.">
                            <div class="carousel-caption bottom-0 py-0 ">
                                <p class="h6 text-black bg-dark-subtle subtle"><?= lang('Globals.carousel_52') ?></p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="<?= STATIC_URL . 'img/salama/tren.jpg' ?>" class="img-fluid h-100" width="1754 px" height="1240 px" alt="Disfruta la belleza de Salama, Progreso, Mérida, Yucatán, México.">
                            <div class="carousel-caption bottom-0 py-0 ">
                                <p class="h6 text-black bg-dark-subtle subtle"><?= lang('Globals.carousel_53') ?></p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="<?= STATIC_URL . 'img/salama/esparcimiento.jpg' ?>" class="img-fluid h-100" width="1754 px" height="1240 px" alt="Paz y tranquilidad están en Salama.">
                            <div class="carousel-caption bottom-0 py-0 ">
                                <p class="h6 text-black bg-dark-subtle subtle"><?= lang('Globals.carousel_54') ?></p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="<?= STATIC_URL . 'img/salama/vista aerea casa club.jpg' ?>" class="img-fluid h-100" width="1754 px" height="1240 px" alt="Vista Aerea de casa club, Salama, Mérida, Yucatán, México.">
                            <div class="carousel-caption bottom-0 py-0 ">
                                <p class="h6 text-black bg-dark-subtle subtle"><?= lang('Globals.carousel_55') ?></p>
                            </div>
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
                <div class="text-center px-3 px-lg-5 mt-2 promo mobile d-none" id="" style="min-height: 7em">
                </div>
                <!-- <div class="m-2 text-center mt-3">
                    <a href="<?//= base_url('templates/contactForm/?lang='. $lang) ?>" type="button" class="btn btn-lg btn-outline-success text-decoration-none mt-0 mobile d-none" target="_blank">
                        <span class="fadeinout"><?//= lang('Globals.header_3') ?></span>
                    </a>
                </div> -->
            </div>
        </div>
    </div>
<!-- Header End -->

    <!-- Location Start -->
    <div class="container-xxl py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="row mb-1 d-none">
                        <p class="h5 mb-0 text-center"><?= lang('Globals.location') ?></p>
                    </div>
                    <div class="loader-container-img text-center mb-2 d-none" id="carouselLocation">
                        <span class="mdi mdi-vanish mdi-spin"></span>
                        <?= lang('Globals.loading') ?> <?= lang('Globals.image') ?>...
                    </div>
                    <div class="row mb-0 pb-0 d-none">
                        <p class="small text-center mb-0 pb-0"><?= lang('Globals.for_information') ?> <span class="mouse-touche">click </span><?= lang('Globals.location_8') ?></p>
                    </div>
                    <div class="position-relative overflow-hidden p-0 pe-0">

                        <div class="row load-image d-none" style="max-width: 700px; min-height: 200px;  ">
                        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3720.9059458815645!2d-89.65034362496485!3d21.156140980525297!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f55df6c676cb0b9%3A0x807ffa924e3acb96!2sSalama%20Yucat%C3%A1n!5e0!3m2!1ses!2sus!4v1726763042110!5m2!1ses!2sus" 
                            class="border border-success rounded w-100" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d137551.85484764748!2d-89.75322876980253!3d21.172084371145086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f55df6c676cb0b9%3A0x807ffa924e3acb96!2sSalama%20Yucat%C3%A1n!5e0!3m2!1ses!2sus!4v1726763306132!5m2!1ses!2sus" 
                                class="border border-success rounded w-100" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d3723.420200934096!2d-89.591507!3d21.055873!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMjHCsDAzJzIxLjEiTiA4OcKwMzUnMjkuNCJX!5e0!3m2!1ses!2sus!4v1726494270623!5m2!1ses!2sus" id="map"
                            class="border border-success rounded w-100" height="500" style="border:2;" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe> -->
                        <!-- <iframe src="https://www.google.com/maps/d/embed?mid=11k7mkqCvpxKLZ2kbQ5ytIKzaDzXL2t4&ehbc=2E312F&noprof=1" id="map"
                            class="border border-success rounded w-100" height="500" style="border:2;" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe> -->
                        
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <p class="h2 mb-3"><?= lang('Globals.location_73') ?></p>
                    <p class="h4 mb-4"><?= lang('Globals.location_38') ?> <?= lang('Globals.location_21') ?></p>
                    <!-- <p class="h4 mb-4"><?= lang('Globals.location_21') ?></p> -->
                    <p class="h5"><?= lang('Globals.location_74') ?></p>
                    <p class="h5"><?= lang('Globals.location_75') ?></p>
                    <p class="h5"><?= lang('Globals.location_76') ?></p>
                    <p class="h5"><?= lang('Globals.location_77') ?></p>
                </div>
            </div>
    </div>
    <!-- Location End -->

    <!-- Caracteristicas Start -->
    <div class="container-xxl py-5">
            <div class="text-center">
                <p class="h1 mb-3 fw-bold text-decoration-underline"><?= lang('Globals.characteristic') ?></p>
            </div>
            <p class="h2 text-center mb-2 d-none"><?= lang('Globals.header_27') ?></p>
            <div class="d-flex justify-content-center row g-0 g-lg-4 align-items-center">
                <div class="col-md-6 pt-4 " >
                    <ul>
                        <li class="h4"><?= lang('Globals.characteristic_158') ?></li>
                        <li class="h4"><?= lang('Globals.characteristic_159') ?></li>
                        <li class="h4"><?= lang('Globals.characteristic_160') ?></li>
                        <li class="h4"><?= lang('Globals.characteristic_161') ?></li>
                        <li class="h4"><?= lang('Globals.characteristic_162') ?></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul>
                        <li class="h4"><?= lang('Globals.characteristic_163') ?></li>
                        <li class="h4"><?= lang('Globals.characteristic_164') ?></li>
                        <li class="h4"><?= lang('Globals.characteristic_165') ?></li>
                        <li class="h4"><?= lang('Globals.characteristic_166') ?></li>
                        <li class="h4"><?= lang('Globals.characteristic_167') ?></li>
                    </ul>
                </div>
            </div>
            <div class="text-center">
                   <p class="h1 mb-3 fw-bold text-decoration-underline"><?= lang('Globals.characteristic_169') ?></p>
                 <div class="row g-0 g-lg-5 pt-2 align-items-center">
                   <p class="h3 mb-1"><?= lang('Globals.characteristic_168') ?></p>
                 </div>
             </div>
            <div class="row g-0 g-lg-5 d-flex align-items-center justify-content-center pt-4">
                <div class="col-md-4 ">
                    <ul>
                        <li class="h4"><?= lang('Globals.characteristic_170') ?></li>
                        <li class="h4"><?= lang('Globals.characteristic_172') ?></li>
                        <li class="h4"><?= lang('Globals.characteristic_173') ?></li>
                        <li class="h4"><?= lang('Globals.characteristic_174') ?></li>
                        <li class="h4"><?= lang('Globals.characteristic_175') ?></li>
                        <li class="h4"><?= lang('Globals.characteristic_176') ?></li>
                        
                    </ul>
                </div>
                <div class="col-md-4 " >
                    <ul>
                        <li class="h4"><?= lang('Globals.characteristic_177') ?></li>
                        <li class="h4"><?= lang('Globals.characteristic_178') ?></li>
                        <li class="h4"><?= lang('Globals.characteristic_179') ?></li>
                        <li class="h4"><?= lang('Globals.characteristic_180') ?></li>
                        <li class="h4"><?= lang('Globals.characteristic_181') ?></li>
                        <li class="h4"><?= lang('Globals.characteristic_182') ?></li>
                    </ul>
                </div>
            </div>
    </div>
    <!-- Caracteristicas  End -->

    <!-- Ejemplo de construccion -->
    <div class="container-xxl py-5 d-none">
            <div class="row g-5 align-items-center">
                <p class="h2 text-center mb-2"><?= lang('Globals.characteristic_107') ?></p>
                <div class="col-lg-6 " >
                    <div class="about-img position-relative overflow-hidden p-3 pe-0">
                        <div class="text-center mx-auto">
                            <p class="fw-bold small mb-0 not_mobile d-none"><?= lang('Globals.click_zoom') ?></p>
                        </div>
                        <div class="carousel text-center" data-bs-ride="carousel" data-bs-pause="hover" data-bs-touch="false" id="carouselConstrutions" style="z-index: 100">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="<?= STATIC_URL . 'img/gran_telchac/construccion.jpg' ?>" class="card-img-top img-fluid" width="1754 px" height="1240 px" alt="Master Plan Mahal">
                                    <div class="carousel-caption bottom-0 py-0 ">
                                        <!-- <p class="h6 subtle"><?= lang('Globals.property_list_12') ?></p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" >
                        <div class="row g-5 align-items-center">
                            <div class="col-lg-4">
                                <p class="h4 mb-4 text-decoration-underline"><?= lang('Globals.characteristic_108') ?></p>
                                <ul class="">
                                    <li class="h5"><?= lang('Globals.characteristic_109') ?></li>
                                    <li class="h5"><?= lang('Globals.characteristic_110') ?></li>
                                    <li class="h5"><?= lang('Globals.characteristic_111') ?></li>
                                    <li class="h5"><?= lang('Globals.characteristic_112') ?></li>
                                    <li class="h5"><?= lang('Globals.characteristic_113') ?></li>
                                    <li class="h5"><?= lang('Globals.characteristic_114') ?></li>
                                    <li class="h5"><?= lang('Globals.characteristic_115') ?></li>
                                </ul>
                            </div>
                            <div class="col-lg-8 ">
                                <p class="h4 mb-4 text-decoration-underline"><?= lang('Globals.characteristic_116') ?></p>
                                <ul class="">
                                    <li class="h5"><?= lang('Globals.characteristic_117') ?></li>
                                    <li class="h5"><?= lang('Globals.characteristic_118') ?></li>
                                </ul>
                                <p class="h4 mb-4 text-decoration-underline"><?= lang('Globals.characteristic_119') ?></p>
                                <ul class="">
                                    <li class="h5"><?= lang('Globals.characteristic_120') ?></li>
                                    <li class="h5"><?= lang('Globals.characteristic_121') ?></li>
                                    <li class="h5"><?= lang('Globals.characteristic_122') ?></li>
                                    <li class="h5"><?= lang('Globals.characteristic_113') ?></li>
                                    <li class="h5"><?= lang('Globals.characteristic_123') ?></li>
                                </ul>

                            </div>

                        </div>
                </div>
            </div>
    </div>
    <!-- About Investment End -->

    <!-- Club Start -->
    <div class="container-xxl py-5">
            <div class="mx-auto mb-1">
                <p class="h1 text-center mb-3 fw-bold text-decoration-underline"><?= lang('Globals.characteristic') ?> <?= lang('Globals.characteristic_11') ?></p>
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 ">
                        <!-- <p class="h4 mb-4 text-center"><?= lang('Globals.club_12') ?></p> -->
                        <!-- <p class="h4"><?= lang('Globals.club_2') ?></p> -->
                        <div class="row g-5 align-items-center">
                            <div class="col-lg-6 ">
                                <ul class="">
                                    <li class="h4"><?= lang('Globals.clubhouse_140') ?></li>
                                    <li class="h4"><?= lang('Globals.clubhouse_141') ?></li>
                                    <li class="h4"><?= lang('Globals.clubhouse_142') ?></li>
                                    <li class="h4"><?= lang('Globals.clubhouse_143') ?></li>
                                    <li class="h4"><?= lang('Globals.clubhouse_144') ?></li>
                                    <li class="h4"><?= lang('Globals.clubhouse_145') ?></li>
                                    <li class="h4"><?= lang('Globals.clubhouse_146') ?></li>
                                    <li class="h4"><?= lang('Globals.clubhouse_147') ?></li>
                                    <li class="h4"><?= lang('Globals.clubhouse_148') ?></li>
                                    <li class="h4"><?= lang('Globals.clubhouse_149') ?></li>
                                </ul>
                            </div>
                            <div class="col-lg-6 ">
                                <ul class="">
                                    <li class="h4"><?= lang('Globals.clubhouse_150') ?></li>
                                    <li class="h4"><?= lang('Globals.clubhouse_151') ?></li>
                                    <li class="h4"><?= lang('Globals.clubhouse_152') ?></li>
                                    <li class="h4"><?= lang('Globals.clubhouse_153') ?></li>
                                    <li class="h4"><?= lang('Globals.clubhouse_154') ?></li>
                                    <li class="h4"><?= lang('Globals.clubhouse_155') ?></li>
                                    <li class="h4"><?= lang('Globals.clubhouse_156') ?></li>
                                    <li class="h4"><?= lang('Globals.clubhouse_157') ?></li>
                                    <li class="h4"><?= lang('Globals.clubhouse_158') ?></li>
                                    <li class="h4"><?= lang('Globals.clubhouse_1') ?></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6" >
                        <div class="about-img-right position-relative overflow-hidden p-3 pe-0">
                            <div class="text-center mx-auto">
                                <p class="fw-bold small mb-0 not_mobile d-none"><?= lang('Globals.click_zoom') ?></p>
                            </div>
                            <div class="carousel carousel-fade slide animated fadeInRight text-center" data-bs-ride="carousel" data-bs-pause="hover" data-bs-touch="false" id="carouselAmenitiesCasaClub" style="z-index: 100">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="<?= STATIC_URL . 'img/salama/vista aerea casa club.jpg' ?>" class="card-img-top img-fluid" width="1754 px" height="1240 px" alt=" Casa Club de Salama en Progreso, Mérida, Yucatán, México.(Imagen ilustrativa)">
                                        <div class="carousel-caption bottom-0 py-0 ">
                                            <p class="h6 text-black bg-dark-subtle subtle"><?= lang('Globals.clubhouse_129') ?></p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?= STATIC_URL . 'img/salama/terraza.jpg' ?>" class="card-img-top img-fluid" width="1754 px" height="1240 px" alt="Complejo de terrazas en Salama.(Imagen ilustrativa)">
                                        <div class="carousel-caption bottom-0 py-0 ">
                                            <p class="h6 text-black bg-dark-subtle subtle"><?= lang('Globals.clubhouse_130') ?></p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?= STATIC_URL . 'img/salama/tiendas.jpg' ?>" class="card-img-top img-fluid" width="1754 px" height="1240 px" alt="Centros comerciales(Imagen ilustrativa)">
                                        <div class="carousel-caption bottom-0 py-0 ">
                                            <p class="h6 text-black bg-dark-subtle subtle"><?= lang('Globals.clubhouse_131') ?></p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?= STATIC_URL . 'img/salama/sala de lectura.jpg' ?>" class="card-img-top img-fluid" width="1754 px" height="1240 px" alt="Sala de lecturas.(Imagen ilustrativa)">
                                        <div class="carousel-caption bottom-0 py-0 ">
                                            <p class="h6 text-black bg-dark-subtle subtle"><?= lang('Globals.clubhouse_132') ?></p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?= STATIC_URL . 'img/salama/reservado.jpg' ?>" class="card-img-top img-fluid" width="1754 px" height="1240 px" alt="Reservado.(Imagen ilustrativa)">
                                        <div class="carousel-caption bottom-0 py-0 ">
                                            <p class="h6 text-black bg-dark-subtle subtle"><?= lang('Globals.clubhouse_133') ?></p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?= STATIC_URL . 'img/salama/piscina.jpg' ?>" class="card-img-top img-fluid" width="1754 px" height="1240 px" alt="Piscina.(Imagen ilustrativa)">
                                        <div class="carousel-caption bottom-0 py-0 ">
                                            <p class="h6 text-black bg-dark-subtle subtle"><?= lang('Globals.clubhouse_134') ?></p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?= STATIC_URL . 'img/salama/gimnasio.jpg' ?>" class="card-img-top img-fluid" width="1754 px" height="1240 px" alt="Gimnasio.(Imagen ilustrativa)">
                                        <div class="carousel-caption bottom-0 py-0 ">
                                            <p class="h6 text-black bg-dark-subtle subtle"><?= lang('Globals.clubhouse_135') ?></p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?= STATIC_URL . 'img/salama/cine al aire libre.jpg' ?>" class="card-img-top img-fluid" width="1754 px" height="1240 px" alt="Cine al aire libre.(Imagen ilustrativa)">
                                        <div class="carousel-caption bottom-0 py-0 ">
                                            <p class="h6 text-black bg-dark-subtle subtle"><?= lang('Globals.clubhouse_136') ?></p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?= STATIC_URL . 'img/salama/bar cafe.jpg' ?>" class="card-img-top img-fluid" width="1754 px" height="1240 px" alt="Bar/Café.(Imagen ilustrativa)">
                                        <div class="carousel-caption bottom-0 py-0 ">
                                            <p class="h6 text-black bg-dark-subtle subtle"><?= lang('Globals.clubhouse_137') ?></p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?= STATIC_URL . 'img/salama/azadores.jpg' ?>" class="card-img-top img-fluid" width="1754 px" height="1240 px" alt="Area de Azadores.(Imagen ilustrativa)">
                                        <div class="carousel-caption bottom-0 py-0 ">
                                            <p class="h6 text-black bg-dark-subtle subtle"><?= lang('Globals.clubhouse_138') ?></p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?= STATIC_URL . 'img/salama/area de la piscina.jpg' ?>" class="card-img-top img-fluid" width="1754 px" height="1240 px" alt="Área de piscina.(Imagen ilustrativa)">
                                        <div class="carousel-caption bottom-0 py-0 ">
                                            <p class="h6 text-black bg-dark-subtle subtle"><?= lang('Globals.clubhouse_139') ?></p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?= STATIC_URL . 'img/salama/amor.jpg' ?>" class="card-img-top img-fluid" width="1754 px" height="1240 px" alt="Disfruta de las aguas cristalinas de Salama.(Imagen ilustrativa)">
                                        <div class="carousel-caption bottom-0 py-0 ">
                                            <p class="h6 text-black bg-dark-subtle subtle"><?= lang('Globals.clubhouse_139') ?></p>
                                        </div>
                                    </div>
                            
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselAmenitiesCasaClub" data-bs-slide="prev">
                                    <span class="mdi mdi-chevron-left mdi-72px" aria-hidden="true"></span>
                                    <span class="visually-hidden"><?= lang('Globals.previous') ?></span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselAmenitiesCasaClub" data-bs-slide="next">
                                    <span class="mdi mdi-chevron-right mdi-72px" aria-hidden="true"></span>
                                    <span class="visually-hidden"><?= lang('Globals.next') ?></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- </div> -->
        <!-- Club End -->

    </div>

    <!-- Caracteristicas HouseClub Start-->
    <div class="container-xxl py-5 d-none">
        <!-- <div class="container"> -->
            <!-- <div class="text-center mb-5 wow slideInLeft" data-wow-delay="0.1s">
            <h1 class="fw-bold text-decoration-underline">Características</h1>
            </div> -->
            <div class="row g-0 g-lg-5 align-items-center">
                <div class="col-md-6">
                    <ul>
                        <li class="h4"><?= lang('Globals.clubhouse_61') ?></li>
                        <li class="h4"><?= lang('Globals.clubhouse_4') ?></li>
                        <li class="h4"><?= lang('Globals.clubhouse_62') ?></li>
                        <li class="h4"><?= lang('Globals.clubhouse_63') ?></li>
                        <li class="h4"><?= lang('Globals.clubhouse_64') ?></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul>
                        <li class="h4"><?= lang('Globals.clubhouse_6') ?></li>
                        <li class="h4"><?= lang('Globals.clubhouse_7') ?></li>
                        <li class="h4"><?= lang('Globals.clubhouse_8') ?></li>
                        <li class="h4"><?= lang('Globals.clubhouse_9') ?></li>
                        <li class="h4"><?= lang('Globals.clubhouse_10') ?></li>
                    </ul>
                </div>
            </div>
    </div>
    <!-- Caracteristicas HouseClub End -->

    <!-- About Investment Start -->
    <div class="container-xxl py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow slideInLeft" data-wow-delay="0.1s">
                    <div class="about-img position-relative overflow-hidden p-3 pe-0">
                        <div class="text-center mx-auto">
                            <p class="fw-bold small mb-0 not_mobile d-none"><?= lang('Globals.click_zoom') ?></p>
                        </div>
                        <div class="carousel carousel-fade slide animated fadeInRight text-center" data-bs-ride="carousel" data-bs-pause="hover" data-bs-touch="false" id="carouselAmenities" style="z-index: 100">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="<?= STATIC_URL . 'img/salama/lote.jpg' ?>" class="card-img-top img-fluid" width="1754 px" height="1240 px" alt="Master Plan Mahal">
                                    <div class="carousel-caption bottom-0 py-0 ">
                                        <p class="h6 subtle"><?= lang('Globals.property_list_17') ?></p>
                                    </div>
                                </div>
                                <!-- <div class="carousel-item">
                                    <img src="<?//= STATIC_URL . 'img/salama/lotes-telchac-1.jpg' ?>" class="card-img-top img-fluid" width="1754 px" height="1240 px" alt="Lotes Etapa-1 ">
                                    <div class="carousel-caption bottom-0 py-0 ">
                                        <p class="h6 subtle"><?//= lang('Globals.property_list_13') ?></p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="<?//= STATIC_URL . 'img/gran_telchac/lotes-telchac-2.jpg' ?>" class="card-img-top img-fluid" width="1754 px" height="1240 px" alt="Lotes Etapa-2 ">
                                    <div class="carousel-caption bottom-0 py-0 ">
                                        <p class="h6 subtle"><?= lang('Globals.property_list_14') ?></p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="<?//= STATIC_URL . 'img/gran_telchac/lotes-telchac-3.jpg' ?>" class="card-img-top img-fluid" width="1754 px" height="1240 px" alt="Lotes Etapa-3 ">
                                    <div class="carousel-caption bottom-0 py-0 ">
                                        <p class="h6 subtle text-dark"><?//= lang('Globals.property_list_15') ?></p>
                                    </div>
                                </div> -->
                            </div>
                            <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselAmenities" data-bs-slide="prev">
                                <span class="mdi mdi-chevron-left mdi-72px" aria-hidden="true"></span>
                                <span class="visually-hidden"><?//= lang('Globals.previous') ?></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselAmenities" data-bs-slide="next">
                                <span class="mdi mdi-chevron-right mdi-72px" aria-hidden="true"></span>
                                <span class="visually-hidden"><?//= lang('Globals.next') ?></span>
                            </button> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow slideInRight" data-wow-delay="0.5s">
                    <h2 class="mb-3"><?= lang('Globals.about_inv_1') ?>:</h2>
                    <p class="h5 mb-4 d-none"><?= lang('Globals.private') ?>: <span class="h3">11</span></p>
                    <p class="h5 mb-4"><?= lang('Globals.amenities') ?>: <span class="h3">15</span></p>
                    <p class="h5 mb-4"><?= lang('Globals.lots') ?>: <span class="h3">162</span></p>
                    <p class="h5 mb-4"><?= lang('Globals.area') ?>: <span class="h3">8 <?= lang('Globals.hectares') ?></span></p>
                </div>
            </div>
    </div>
    <!-- About Investment End -->


    <!-- Property List Start -->
    <div class="container-xxl py-5">
            <div class="text-center mb-1 wow slideInLeft" data-wow-delay="0.1s">
                <h1 class="fw-bold"><?= lang('Globals.property_list_1') ?></h1>
                <h5 class="my-2 fw-lighter text-decoration-underline small"><?= lang('Globals.property_list_2') ?></h5>
            </div>
            <!-- <div class="loader-container text-center mb-2">
                <span class="mdi mdi-vanish mdi-spin"></span>
                <?= lang('Globals.loading') ?> <?= lang('Globals.image') ?>...
            </div> -->
            <div class="lots" id="image_site">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item border border-success my-4 map_area" id="header1">
                        <h2 class="accordion-header border-bottom border-success" id="heading-1">
                            <button class="accordion-button px-4 <?php if ($projectStage == 1) {
                                                                        echo "";
                                                                    } else {
                                                                        echo "collapsed";
                                                                    } ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCero" aria-expanded="false" aria-controls="collapseCero" title="Click para ver detalles y mapa">
                                <div class="container table-responsive-md">
                                    <table class="table table-sm table-borderless caption-top">
                                        <caption class="h1 fw-bold text-center text-success text-nowrap"><?= lang('Globals.private') ?> 1  <?= lang('Globals.stage') ?> 1</caption>
                                        <thead>
                                            <tr>
                                                <th scope="col" class="h5 available-title text-center"><?= lang('Globals.total_lots') ?></th>
                                                <th scope="col" class="h5 available-title text-center"><?= lang('Globals.available') ?></th>
                                                <th scope="col" class="h5 available-title text-center"><?= lang('Globals.delivered') ?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="display-4 fw-bold text-center">162</td>
                                                <td class="display-4 fw-bold text-center" id="available-1"><span class="mdi mdi-vanish mdi-spin text-success-emphasis d-none"></span></td>
                                                <td class="display-4 fw-bold text-center">2024</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!-- </div> -->
                                </div>
                        
                            </button>
                        </h2>
                        <div id="collapseCero" class="accordion-collapse collapse <?php if ($projectStage == 1) {
                                                                                        echo "show";
                                                                                    } else {
                                                                                        echo "";
                                                                                    } ?>" aria-labelledby="heading-1">
                            <div class="accordion-body">
                                <!-- Price Start -->
                                <div class="container-xxl py-1 px-0 d-none">
                                    <div class="row row-cols-1 row-cols-lg-1">
                                        <div class="col wow fadeInUp mx-0 px-0" data-wow-delay="0.1s">
                                            <div class="card border-3 h-100 shadow px-0">
                                                <div class="card-header text-center">
                                                    <h4 class="fw-bold text-uppercase text-success mb-0 price-header"><?= lang('Globals.lot_price') ?></h4>
                                                </div>
                                                <div class="card-body pb-0">
                                                    <div class="row d-flex justify-content-center ">
                                                        <div class="col-12 table-responsive">
                                                            <table class="table table-sm table-bordered text-nowrap border-2 text-left">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col" class="h5 available-title text-center"><?= ucwords(lang('Globals.months')) ?></th>
                                                                        <th scope="col" class="h5 available-title text-center"><?= lang('Globals.counted') ?></th>
                                                                        <th scope="col" class="h5 available-title text-center">12</th>
                                                                        <th scope="col" class="h5 available-title text-center">24</th>
                                                                        <th scope="col" class="h5 available-title text-center">36</th>
                                                                        <th scope="col" class="h5 available-title text-center">48</th>
                                                                        <th scope="col" class="h5 available-title text-center">60</th>
                                                                        <th scope="col" class="h5 available-title text-center">72</th>
                                                                        <th scope="col" class="h5 available-title text-center">120</th>
                                                                        <th scope="col" class="h5 available-title text-center">156</th>
                                                                        <th scope="col" class="h5 available-title text-center">180</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="h5 available-title text-left"><?= lang('Globals.corner_lot') ?> <?= lang('Globals.characteristic_11') ?></td>
                                                                        <td class="h5 available-title text-center">$2,600</td>
                                                                        <td class="h5 available-title text-center">$2,625</td>
                                                                        <td class="h5 available-title text-center">$2,675</td>
                                                                        <td class="h5 available-title text-center">$2,875</td>
                                                                        <td class="h5 available-title text-center">$3,100</td>
                                                                        <td class="h5 available-title text-center">$3,300</td>
                                                                        <td class="h5 available-title text-center">$3,425</td>
                                                                        <td class="h5 available-title text-center">$3,800</td>
                                                                        <td class="h5 available-title text-center">$4,400</td>
                                                                        <td class="h5 available-title text-center">$4,700</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="h5 available-title text-left"><?= lang('Globals.club_house_lot') ?></td>
                                                                        <td class="h5 available-title text-center">$2,500</td>
                                                                        <td class="h5 available-title text-center">$2,525</td>
                                                                        <td class="h5 available-title text-center">$2,575</td>
                                                                        <td class="h5 available-title text-center">$2,775</td>
                                                                        <td class="h5 available-title text-center">$3,000</td>
                                                                        <td class="h5 available-title text-center">$3,200</td>
                                                                        <td class="h5 available-title text-center">$3,325</td>
                                                                        <td class="h5 available-title text-center">$3,700</td>
                                                                        <td class="h5 available-title text-center">$4,300</td>
                                                                        <td class="h5 available-title text-center">$4,700</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="h5 available-title text-left"><?= lang('Globals.greenarea_corner_lot') ?></td>
                                                                        <td class="h5 available-title text-center">$2,350</td>
                                                                        <td class="h5 available-title text-center">$2,374</td>
                                                                        <td class="h5 available-title text-center">$2,421</td>
                                                                        <td class="h5 available-title text-center">$2,609</td>
                                                                        <td class="h5 available-title text-center">$2,820</td>
                                                                        <td class="h5 available-title text-center">$3,008</td>
                                                                        <td class="h5 available-title text-center">$3,126</td>
                                                                        <td class="h5 available-title text-center">$3,478</td>
                                                                        <td class="h5 available-title text-center">$4,042</td>
                                                                        <td class="h5 available-title text-center">$4,324</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="h5 available-title text-left"><?= lang('Globals.regular_lot') ?></td>
                                                                        <td class="h5 available-title text-center">$2,300</td>
                                                                        <td class="h5 available-title text-center">$2,323</td>
                                                                        <td class="h5 available-title text-center">$2,369</td>
                                                                        <td class="h5 available-title text-center">$2,553</td>
                                                                        <td class="h5 available-title text-center">$2,760</td>
                                                                        <td class="h5 available-title text-center">$2,944</td>
                                                                        <td class="h5 available-title text-center">$3,059</td>
                                                                        <td class="h5 available-title text-center">$3,404</td>
                                                                        <td class="h5 available-title text-center">$3,956</td>
                                                                        <td class="h5 available-title text-center">$4,232</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- </div> -->
                                        </div>
                                    </div>
                                    <div class="row row-cols-1 row-cols-lg-1">
                                        <div class="col wow fadeInUp mx-0 px-0" data-wow-delay="0.1s">
                                            <div class="card border-3 h-100 shadow px-0">
                                                <div class="card-header text-center">
                                                    <h4 class="fw-bold text-success mb-0 price-header"><?= lang('Globals.total_value_per_land') ?></h4>
                                                </div>
                                                <div class="card-body pb-0">
                                                    <div class="row d-flex justify-content-center ">
                                                        <div class="col-12 table-responsive">
                                                            <table class="table table-sm table-bordered text-nowrap border-2 text-left">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col" class="h5 available-title text-center"><?= ucwords(lang('Globals.months')) ?></th>
                                                                        <th scope="col" class="h5 available-title text-center"><?= lang('Globals.counted') ?></th>
                                                                        <th scope="col" class="h5 available-title text-center">12</th>
                                                                        <th scope="col" class="h5 available-title text-center">24</th>
                                                                        <th scope="col" class="h5 available-title text-center">36</th>
                                                                        <th scope="col" class="h5 available-title text-center">48</th>
                                                                        <th scope="col" class="h5 available-title text-center">60</th>
                                                                        <th scope="col" class="h5 available-title text-center">72</th>
                                                                        <th scope="col" class="h5 available-title text-center">120</th>
                                                                        <th scope="col" class="h5 available-title text-center">156</th>
                                                                        <th scope="col" class="h5 available-title text-center">180</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="h5 available-title text-left"><?= lang('Globals.corner_lot') ?> <?= lang('Globals.characteristic_11') ?></td>
                                                                        <td class="h5 available-title text-center">$520,000</td>
                                                                        <td class="h5 available-title text-center">$520,000</td>
                                                                        <td class="h5 available-title text-center">$535,000</td>
                                                                        <td class="h5 available-title text-center">$575,000</td>
                                                                        <td class="h5 available-title text-center">$620,000</td>
                                                                        <td class="h5 available-title text-center">$660,000</td>
                                                                        <td class="h5 available-title text-center">$685,000</td>
                                                                        <td class="h5 available-title text-center">$760,000</td>
                                                                        <td class="h5 available-title text-center">$880,000</td>
                                                                        <td class="h5 available-title text-center">$940,000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="h5 available-title text-left"><?= lang('Globals.club_house_lot') ?></td>
                                                                        <td class="h5 available-title text-center">$500,000</td>
                                                                        <td class="h5 available-title text-center">$505,000</td>
                                                                        <td class="h5 available-title text-center">$515,000</td>
                                                                        <td class="h5 available-title text-center">$555,000</td>
                                                                        <td class="h5 available-title text-center">$600,000</td>
                                                                        <td class="h5 available-title text-center">$640,000</td>
                                                                        <td class="h5 available-title text-center">$665,000</td>
                                                                        <td class="h5 available-title text-center">$740,000</td>
                                                                        <td class="h5 available-title text-center">$860,000</td>
                                                                        <td class="h5 available-title text-center">$920,000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="h5 available-title text-left"><?= lang('Globals.greenarea_corner_lot') ?></td>
                                                                        <td class="h5 available-title text-center">$470,000</td>
                                                                        <td class="h5 available-title text-center">$474,700</td>
                                                                        <td class="h5 available-title text-center">$484,100</td>
                                                                        <td class="h5 available-title text-center">$521,700</td>
                                                                        <td class="h5 available-title text-center">$564,000</td>
                                                                        <td class="h5 available-title text-center">$601,600</td>
                                                                        <td class="h5 available-title text-center">$625,100</td>
                                                                        <td class="h5 available-title text-center">$695,600</td>
                                                                        <td class="h5 available-title text-center">$808,400</td>
                                                                        <td class="h5 available-title text-center">$864,800</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="h5 available-title text-left"><?= lang('Globals.regular_lot') ?></td>
                                                                        <td class="h5 available-title text-center">$368,000</td>
                                                                        <td class="h5 available-title text-center">$371,680</td>
                                                                        <td class="h5 available-title text-center">$379,040</td>
                                                                        <td class="h5 available-title text-center">$408,480</td>
                                                                        <td class="h5 available-title text-center">$441,600</td>
                                                                        <td class="h5 available-title text-center">$471,040</td>
                                                                        <td class="h5 available-title text-center">$489,440</td>
                                                                        <td class="h5 available-title text-center">$544,640</td>
                                                                        <td class="h5 available-title text-center">$632,960</td>
                                                                        <td class="h5 available-title text-center">$677,120</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Price End -->
                                <div class="d-flex justify-content-center">
                                    <img src="<?= STATIC_URL . 'img/wind-rose_' . $lang . '.svg' ?>" alt="Brujula" height="80px" width="80px" style="transform: rotate(0deg);">
                                </div>
                                <div class="row mt-2">
                                    <p class="small fw-bolder text-center"><?= lang('Globals.for_information') ?> <span class="mouse-touche"><?= lang('Globals.hover_mouse') ?> </span><?= lang('Globals.over_lot') ?></p>
                                </div>
                                <div class="loader-container text-center mb-2">
                                    <span class="mdi mdi-vanish mdi-spin"></span>
                                    <?= lang('Globals.loading') ?> <?= lang('Globals.image') ?>...
                                </div>
                                <!-- Direccion para Scrap de Privada 1 Etapa 1: https://crmgea.com/sistemas_active/crm/if/indexBase.php?id=mGMOp5ItZkP113&rd=&rg=&clvde=NLA1daGIJTD42 -->
                                <!-- <div id="" class="row text-center">
                                    <img src="<?= STATIC_URL . 'img/gran_telchac/lotes-telchac-1.jpg' ?>" class="card-img-top img-fluid" width="1516 px" height="1240 px" alt="Master Plan Mahal">
                                </div> -->
                                <div id="stage-1" class="row text-center map-svg d-none"></div>
                                <div class="leyend-status d-flex justify-content-around text-center fw-bold mt-n5 d-none">
                                    <div class="px-2 d-inline-block"><span class="mdi mdi-checkbox-blank mdi-18px mr-2" style="color:rgb(0, 102, 51);"></span><span class="text-black text-uppercase"><?= lang('Globals.club_house_lot') ?></span></div>
                                    <div class="px-2 d-inline-block"><span class="mdi mdi-checkbox-blank mdi-18px mr-2" style="color:rgb(47, 172, 102);"></span><span class="text-black text-uppercase"><?= lang('Globals.greenarea_corner_lot') ?></span></div>
                                    <div class="px-2 d-inline-block"><span class="mdi mdi-checkbox-blank mdi-18px mr-2" style="color:rgb(183 245 162);"></span><span class="text-black text-uppercase"><?= lang('Globals.regular_lot') ?></span></div>
                                </div>
                                <div class="leyend-status d-flex flex-row justify-content-around text-center fw-bold text-white mt-3">
                                    <div class="text-uppercase small bg-sold rounded-pill px-2"><?= lang('Globals.sold') ?></div>
                                    <div class="text-uppercase small bg-available rounded-pill px-2"><?= lang('Globals.available') ?></div>
                                    <div class="text-uppercase small bg-reserved rounded-pill px-2"><?= lang('Globals.reserved') ?></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border border-success my-4 map_area d-none" id="header2">
                        <h2 class="accordion-header border-bottom border-success" id="heading-2">
                            <button class="accordion-button px-4 <?php if ($projectStage == 2) {
                                                                        echo "";
                                                                    } else {
                                                                        echo "collapsed";
                                                                    } ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" title="Click para ver detalles y mapa">
                                <div class="container table-responsive-md">
                                    <table class="table table-sm table-borderless caption-top">
                                        <caption class="h1 fw-bold text-center text-success text-nowrap"><?= lang('Globals.private') ?> 1  <?= lang('Globals.stage') ?> 2</caption>
                                        <thead>
                                            <tr>
                                                <th scope="col" class="h5 available-title text-center"><?= lang('Globals.total_lots') ?></th>
                                                <th scope="col" class="h5 available-title text-center"><?= lang('Globals.available') ?></th>
                                                <th scope="col" class="h5 available-title text-center"><?= lang('Globals.delivered') ?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="display-4 fw-bold text-center">209</td>
                                                <td class="display-4 fw-bold text-center" id="available-2"><span class="mdi mdi-vanish mdi-spin text-success-emphasis d-none"></span></td>
                                                <td class="display-4 fw-bold text-center">2028</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                    <!-- </div> -->
                                </div>
                        
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse <?php if ($projectStage == 2) {
                                                                                        echo "show";
                                                                                    } else {
                                                                                        echo "";
                                                                                    } ?>" aria-labelledby="heading-2">
                            <div class="accordion-body">
                                <!-- Price Start -->
                                <div class="container-xxl py-1 px-0">
                                    <div class="row row-cols-1 row-cols-lg-1">
                                        <div class="col wow fadeInUp mx-0 px-0" data-wow-delay="0.1s">
                                            <div class="card border-3 h-100 shadow px-0">
                                                <div class="card-header text-center">
                                                    <h4 class="fw-bold text-uppercase text-success mb-0 price-header"><?= lang('Globals.lot_price') ?></h4>
                                                </div>
                                                <div class="card-body pb-0">
                                                    <div class="row d-flex justify-content-center ">
                                                        <div class="col-12 table-responsive">
                                                            <table class="table table-sm table-bordered text-nowrap border-2 text-left">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col" class="h5 available-title text-center"><?= ucwords(lang('Globals.months')) ?></th>
                                                                        <th scope="col" class="h5 available-title text-center"><?= lang('Globals.counted') ?></th>
                                                                        <th scope="col" class="h5 available-title text-center">12</th>
                                                                        <th scope="col" class="h5 available-title text-center">24</th>
                                                                        <th scope="col" class="h5 available-title text-center">36</th>
                                                                        <th scope="col" class="h5 available-title text-center">48</th>
                                                                        <th scope="col" class="h5 available-title text-center">60</th>
                                                                        <th scope="col" class="h5 available-title text-center">72</th>
                                                                        <th scope="col" class="h5 available-title text-center">120</th>
                                                                        <th scope="col" class="h5 available-title text-center">156</th>
                                                                        <th scope="col" class="h5 available-title text-center">180</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="h5 available-title text-left"><?= lang('Globals.corner_lot') ?> <?= lang('Globals.characteristic_11') ?></td>
                                                                        <td class="h5 available-title text-center">$2,600</td>
                                                                        <td class="h5 available-title text-center">$2,625</td>
                                                                        <td class="h5 available-title text-center">$2,675</td>
                                                                        <td class="h5 available-title text-center">$2,875</td>
                                                                        <td class="h5 available-title text-center">$3,100</td>
                                                                        <td class="h5 available-title text-center">$3,300</td>
                                                                        <td class="h5 available-title text-center">$3,425</td>
                                                                        <td class="h5 available-title text-center">$3,800</td>
                                                                        <td class="h5 available-title text-center">$4,400</td>
                                                                        <td class="h5 available-title text-center">$4,700</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="h5 available-title text-left"><?= lang('Globals.club_house_lot') ?></td>
                                                                        <td class="h5 available-title text-center">$2,500</td>
                                                                        <td class="h5 available-title text-center">$2,525</td>
                                                                        <td class="h5 available-title text-center">$2,575</td>
                                                                        <td class="h5 available-title text-center">$2,775</td>
                                                                        <td class="h5 available-title text-center">$3,000</td>
                                                                        <td class="h5 available-title text-center">$3,200</td>
                                                                        <td class="h5 available-title text-center">$3,325</td>
                                                                        <td class="h5 available-title text-center">$3,700</td>
                                                                        <td class="h5 available-title text-center">$4,300</td>
                                                                        <td class="h5 available-title text-center">$4,700</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="h5 available-title text-left"><?= lang('Globals.greenarea_corner_lot') ?></td>
                                                                        <td class="h5 available-title text-center">$2,350</td>
                                                                        <td class="h5 available-title text-center">$2,374</td>
                                                                        <td class="h5 available-title text-center">$2,421</td>
                                                                        <td class="h5 available-title text-center">$2,609</td>
                                                                        <td class="h5 available-title text-center">$2,820</td>
                                                                        <td class="h5 available-title text-center">$3,008</td>
                                                                        <td class="h5 available-title text-center">$3,126</td>
                                                                        <td class="h5 available-title text-center">$3,478</td>
                                                                        <td class="h5 available-title text-center">$4,042</td>
                                                                        <td class="h5 available-title text-center">$4,324</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="h5 available-title text-left"><?= lang('Globals.regular_lot') ?></td>
                                                                        <td class="h5 available-title text-center">$2,300</td>
                                                                        <td class="h5 available-title text-center">$2,323</td>
                                                                        <td class="h5 available-title text-center">$2,369</td>
                                                                        <td class="h5 available-title text-center">$2,553</td>
                                                                        <td class="h5 available-title text-center">$2,760</td>
                                                                        <td class="h5 available-title text-center">$2,944</td>
                                                                        <td class="h5 available-title text-center">$3,059</td>
                                                                        <td class="h5 available-title text-center">$3,404</td>
                                                                        <td class="h5 available-title text-center">$3,956</td>
                                                                        <td class="h5 available-title text-center">$4,232</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- </div> -->
                                        </div>
                                    </div>
                                    <div class="row row-cols-1 row-cols-lg-1">
                                        <div class="col wow fadeInUp mx-0 px-0" data-wow-delay="0.1s">
                                            <div class="card border-3 h-100 shadow px-0">
                                                <div class="card-header text-center">
                                                    <h4 class="fw-bold text-success mb-0 price-header"><?= lang('Globals.total_value_per_land') ?></h4>
                                                </div>
                                                <div class="card-body pb-0">
                                                    <div class="row d-flex justify-content-center ">
                                                        <div class="col-12 table-responsive">
                                                            <table class="table table-sm table-bordered text-nowrap border-2 text-left">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col" class="h5 available-title text-center"><?= ucwords(lang('Globals.months')) ?></th>
                                                                        <th scope="col" class="h5 available-title text-center"><?= lang('Globals.counted') ?></th>
                                                                        <th scope="col" class="h5 available-title text-center">12</th>
                                                                        <th scope="col" class="h5 available-title text-center">24</th>
                                                                        <th scope="col" class="h5 available-title text-center">36</th>
                                                                        <th scope="col" class="h5 available-title text-center">48</th>
                                                                        <th scope="col" class="h5 available-title text-center">60</th>
                                                                        <th scope="col" class="h5 available-title text-center">72</th>
                                                                        <th scope="col" class="h5 available-title text-center">120</th>
                                                                        <th scope="col" class="h5 available-title text-center">156</th>
                                                                        <th scope="col" class="h5 available-title text-center">180</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="h5 available-title text-left"><?= lang('Globals.corner_lot') ?> <?= lang('Globals.characteristic_11') ?></td>
                                                                        <td class="h5 available-title text-center">$520,000</td>
                                                                        <td class="h5 available-title text-center">$520,000</td>
                                                                        <td class="h5 available-title text-center">$535,000</td>
                                                                        <td class="h5 available-title text-center">$575,000</td>
                                                                        <td class="h5 available-title text-center">$620,000</td>
                                                                        <td class="h5 available-title text-center">$660,000</td>
                                                                        <td class="h5 available-title text-center">$685,000</td>
                                                                        <td class="h5 available-title text-center">$760,000</td>
                                                                        <td class="h5 available-title text-center">$880,000</td>
                                                                        <td class="h5 available-title text-center">$940,000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="h5 available-title text-left"><?= lang('Globals.club_house_lot') ?></td>
                                                                        <td class="h5 available-title text-center">$500,000</td>
                                                                        <td class="h5 available-title text-center">$505,000</td>
                                                                        <td class="h5 available-title text-center">$515,000</td>
                                                                        <td class="h5 available-title text-center">$555,000</td>
                                                                        <td class="h5 available-title text-center">$600,000</td>
                                                                        <td class="h5 available-title text-center">$640,000</td>
                                                                        <td class="h5 available-title text-center">$665,000</td>
                                                                        <td class="h5 available-title text-center">$740,000</td>
                                                                        <td class="h5 available-title text-center">$860,000</td>
                                                                        <td class="h5 available-title text-center">$920,000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="h5 available-title text-left"><?= lang('Globals.greenarea_corner_lot') ?></td>
                                                                        <td class="h5 available-title text-center">$470,000</td>
                                                                        <td class="h5 available-title text-center">$474,700</td>
                                                                        <td class="h5 available-title text-center">$484,100</td>
                                                                        <td class="h5 available-title text-center">$521,700</td>
                                                                        <td class="h5 available-title text-center">$564,000</td>
                                                                        <td class="h5 available-title text-center">$601,600</td>
                                                                        <td class="h5 available-title text-center">$625,100</td>
                                                                        <td class="h5 available-title text-center">$695,600</td>
                                                                        <td class="h5 available-title text-center">$808,400</td>
                                                                        <td class="h5 available-title text-center">$864,800</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="h5 available-title text-left"><?= lang('Globals.regular_lot') ?></td>
                                                                        <td class="h5 available-title text-center">$368,000</td>
                                                                        <td class="h5 available-title text-center">$371,680</td>
                                                                        <td class="h5 available-title text-center">$379,040</td>
                                                                        <td class="h5 available-title text-center">$408,480</td>
                                                                        <td class="h5 available-title text-center">$441,600</td>
                                                                        <td class="h5 available-title text-center">$471,040</td>
                                                                        <td class="h5 available-title text-center">$489,440</td>
                                                                        <td class="h5 available-title text-center">$544,640</td>
                                                                        <td class="h5 available-title text-center">$632,960</td>
                                                                        <td class="h5 available-title text-center">$677,120</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Price End -->
                                <div class="d-flex justify-content-center">
                                    <img src="<?= STATIC_URL . 'img/wind-rose_' . $lang . '.svg' ?>" alt="Brujula" height="80px" width="80px" style="transform: rotate(90deg);">
                                </div>
                                <div class="row mt-2">
                                    <p class="small fw-bolder text-center"><?= lang('Globals.for_information') ?> <span class="mouse-touche"><?= lang('Globals.hover_mouse') ?> </span><?= lang('Globals.over_lot') ?></p>
                                </div>
                                <div class="loader-container text-center mb-2">
                                    <span class="mdi mdi-vanish mdi-spin"></span>
                                    <?= lang('Globals.loading') ?> <?= lang('Globals.image') ?>...
                                </div>
                                <!-- Direccion para Scrap de Privada 1 Etapa 2: https://crmgea.com/sistemas_active/crm/if/indexBase.php?id=hnoewpRDnlP114&rd=&rg=&clvde=NLA1daGIJTD42 -->
                                
                                <!-- <div id="" class="row text-center">
                                    <img src="<?= STATIC_URL . 'img/gran_telchac/lotes-telchac-2.jpg' ?>" class="card-img-top img-fluid" width="1516 px" height="1240 px" alt="Master Plan Mahal">
                                </div> -->
                                <div id="stage-2" class="row text-center map-svg d-none"></div>
                                <div class="leyend-status d-flex justify-content-around text-center fw-bold mt-n5">
                                    <div class="px-2 d-inline-block"><span class="mdi mdi-checkbox-blank mdi-18px mr-2" style="color:rgb(0, 102, 51);"></span><span class="text-black text-uppercase"><?= lang('Globals.club_house_lot') ?></span></div>
                                    <div class="px-2 d-inline-block"><span class="mdi mdi-checkbox-blank mdi-18px mr-2" style="color:rgb(47, 172, 102);"></span><span class="text-black text-uppercase"><?= lang('Globals.greenarea_corner_lot') ?></span></div>
                                    <div class="px-2 d-inline-block"><span class="mdi mdi-checkbox-blank mdi-18px mr-2" style="color:rgb(183 245 162);"></span><span class="text-black text-uppercase"><?= lang('Globals.regular_lot') ?></span></div>
                                </div>
                                <div class="leyend-status d-flex flex-row justify-content-around text-center fw-bold text-white mt-3">
                                    <div class="text-uppercase small bg-sold rounded-pill px-2"><?= lang('Globals.sold') ?></div>
                                    <div class="text-uppercase small bg-available rounded-pill px-2"><?= lang('Globals.available') ?></div>
                                    <div class="text-uppercase small bg-reserved rounded-pill px-2"><?= lang('Globals.reserved') ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border border-success my-4 map_area d-none" id="header3">
                        <h2 class="accordion-header border-bottom border-success" id="heading-3">
                            <button class="accordion-button px-4 <?php if ($projectStage == 3) {
                                                                        echo "";
                                                                    } else {
                                                                        echo "collapsed";
                                                                    } ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" title="Click para ver detalles y mapa">
                                <div class="container table-responsive-md">
                                    <table class="table table-sm table-borderless caption-top">
                                        <caption class="h1 fw-bold text-center text-success text-nowrap"><?= lang('Globals.private') ?> 2</caption>
                                        <thead>
                                            <tr>
                                                <th scope="col" class="h5 available-title text-center"><?= lang('Globals.total_lots') ?></th>
                                                <th scope="col" class="h5 available-title text-center"><?= lang('Globals.available') ?></th>
                                                <th scope="col" class="h5 available-title text-center"><?= lang('Globals.delivered') ?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="display-4 fw-bold text-center">385</td>
                                                <td class="display-4 fw-bold text-center" id="available-3"><span class="mdi mdi-vanish mdi-spin text-success-emphasis d-none"></span></td>
                                                <td class="display-4 fw-bold text-center">2029</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse <?php if ($projectStage == 3) {
                                                                                        echo "show";
                                                                                    } else {
                                                                                        echo "";
                                                                                    } ?>" aria-labelledby="heading-3">
                            <div class="accordion-body">
                                <!-- Price Start -->
                                <div class="container-xxl py-1 px-0">
                                    <div class="row row-cols-1 row-cols-lg-1">
                                        <div class="col wow fadeInUp mx-0 px-0" data-wow-delay="0.1s">
                                            <div class="card border-3 h-100 shadow px-0">
                                                <div class="card-header text-center">
                                                    <h4 class="fw-bold text-uppercase text-success mb-0 price-header"><?= lang('Globals.lot_price') ?></h4>
                                                </div>
                                                <div class="card-body pb-0">
                                                    <div class="row d-flex justify-content-center ">
                                                        <div class="col-12 table-responsive">
                                                            <table class="table table-sm table-bordered text-nowrap border-2 text-left">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col" class="h5 available-title text-center"><?= ucwords(lang('Globals.months')) ?></th>
                                                                        <th scope="col" class="h5 available-title text-center"><?= lang('Globals.counted') ?></th>
                                                                        <th scope="col" class="h5 available-title text-center">12</th>
                                                                        <th scope="col" class="h5 available-title text-center">24</th>
                                                                        <th scope="col" class="h5 available-title text-center">36</th>
                                                                        <th scope="col" class="h5 available-title text-center">48</th>
                                                                        <th scope="col" class="h5 available-title text-center">60</th>
                                                                        <th scope="col" class="h5 available-title text-center">72</th>
                                                                        <th scope="col" class="h5 available-title text-center">120</th>
                                                                        <th scope="col" class="h5 available-title text-center">156</th>
                                                                        <th scope="col" class="h5 available-title text-center">180</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="h5 available-title text-left"><?= lang('Globals.corner_lot') ?> <?= lang('Globals.characteristic_11') ?></td>
                                                                        <td class="h5 available-title text-center">$2,600</td>
                                                                        <td class="h5 available-title text-center">$2,625</td>
                                                                        <td class="h5 available-title text-center">$2,675</td>
                                                                        <td class="h5 available-title text-center">$2,875</td>
                                                                        <td class="h5 available-title text-center">$3,100</td>
                                                                        <td class="h5 available-title text-center">$3,300</td>
                                                                        <td class="h5 available-title text-center">$3,425</td>
                                                                        <td class="h5 available-title text-center">$3,800</td>
                                                                        <td class="h5 available-title text-center">$4,400</td>
                                                                        <td class="h5 available-title text-center">$4,700</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="h5 available-title text-left"><?= lang('Globals.club_house_lot') ?></td>
                                                                        <td class="h5 available-title text-center">$2,500</td>
                                                                        <td class="h5 available-title text-center">$2,525</td>
                                                                        <td class="h5 available-title text-center">$2,575</td>
                                                                        <td class="h5 available-title text-center">$2,775</td>
                                                                        <td class="h5 available-title text-center">$3,000</td>
                                                                        <td class="h5 available-title text-center">$3,200</td>
                                                                        <td class="h5 available-title text-center">$3,325</td>
                                                                        <td class="h5 available-title text-center">$3,700</td>
                                                                        <td class="h5 available-title text-center">$4,300</td>
                                                                        <td class="h5 available-title text-center">$4,700</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="h5 available-title text-left"><?= lang('Globals.greenarea_corner_lot') ?></td>
                                                                        <td class="h5 available-title text-center">$2,350</td>
                                                                        <td class="h5 available-title text-center">$2,374</td>
                                                                        <td class="h5 available-title text-center">$2,421</td>
                                                                        <td class="h5 available-title text-center">$2,609</td>
                                                                        <td class="h5 available-title text-center">$2,820</td>
                                                                        <td class="h5 available-title text-center">$3,008</td>
                                                                        <td class="h5 available-title text-center">$3,126</td>
                                                                        <td class="h5 available-title text-center">$3,478</td>
                                                                        <td class="h5 available-title text-center">$4,042</td>
                                                                        <td class="h5 available-title text-center">$4,324</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="h5 available-title text-left"><?= lang('Globals.regular_lot') ?></td>
                                                                        <td class="h5 available-title text-center">$2,300</td>
                                                                        <td class="h5 available-title text-center">$2,323</td>
                                                                        <td class="h5 available-title text-center">$2,369</td>
                                                                        <td class="h5 available-title text-center">$2,553</td>
                                                                        <td class="h5 available-title text-center">$2,760</td>
                                                                        <td class="h5 available-title text-center">$2,944</td>
                                                                        <td class="h5 available-title text-center">$3,059</td>
                                                                        <td class="h5 available-title text-center">$3,404</td>
                                                                        <td class="h5 available-title text-center">$3,956</td>
                                                                        <td class="h5 available-title text-center">$4,232</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- </div> -->
                                        </div>
                                    </div>
                                    <div class="row row-cols-1 row-cols-lg-1">
                                        <div class="col wow fadeInUp mx-0 px-0" data-wow-delay="0.1s">
                                            <div class="card border-3 h-100 shadow px-0">
                                                <div class="card-header text-center">
                                                    <h4 class="fw-bold text-success mb-0 price-header"><?= lang('Globals.total_value_per_land') ?></h4>
                                                </div>
                                                <div class="card-body pb-0">
                                                    <div class="row d-flex justify-content-center ">
                                                        <div class="col-12 table-responsive">
                                                            <table class="table table-sm table-bordered text-nowrap border-2 text-left">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col" class="h5 available-title text-center"><?= ucwords(lang('Globals.months')) ?></th>
                                                                        <th scope="col" class="h5 available-title text-center"><?= lang('Globals.counted') ?></th>
                                                                        <th scope="col" class="h5 available-title text-center">12</th>
                                                                        <th scope="col" class="h5 available-title text-center">24</th>
                                                                        <th scope="col" class="h5 available-title text-center">36</th>
                                                                        <th scope="col" class="h5 available-title text-center">48</th>
                                                                        <th scope="col" class="h5 available-title text-center">60</th>
                                                                        <th scope="col" class="h5 available-title text-center">72</th>
                                                                        <th scope="col" class="h5 available-title text-center">120</th>
                                                                        <th scope="col" class="h5 available-title text-center">156</th>
                                                                        <th scope="col" class="h5 available-title text-center">180</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="h5 available-title text-left"><?= lang('Globals.corner_lot') ?> <?= lang('Globals.characteristic_11') ?></td>
                                                                        <td class="h5 available-title text-center">$520,000</td>
                                                                        <td class="h5 available-title text-center">$520,000</td>
                                                                        <td class="h5 available-title text-center">$535,000</td>
                                                                        <td class="h5 available-title text-center">$575,000</td>
                                                                        <td class="h5 available-title text-center">$620,000</td>
                                                                        <td class="h5 available-title text-center">$660,000</td>
                                                                        <td class="h5 available-title text-center">$685,000</td>
                                                                        <td class="h5 available-title text-center">$760,000</td>
                                                                        <td class="h5 available-title text-center">$880,000</td>
                                                                        <td class="h5 available-title text-center">$940,000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="h5 available-title text-left"><?= lang('Globals.club_house_lot') ?></td>
                                                                        <td class="h5 available-title text-center">$500,000</td>
                                                                        <td class="h5 available-title text-center">$505,000</td>
                                                                        <td class="h5 available-title text-center">$515,000</td>
                                                                        <td class="h5 available-title text-center">$555,000</td>
                                                                        <td class="h5 available-title text-center">$600,000</td>
                                                                        <td class="h5 available-title text-center">$640,000</td>
                                                                        <td class="h5 available-title text-center">$665,000</td>
                                                                        <td class="h5 available-title text-center">$740,000</td>
                                                                        <td class="h5 available-title text-center">$860,000</td>
                                                                        <td class="h5 available-title text-center">$920,000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="h5 available-title text-left"><?= lang('Globals.greenarea_corner_lot') ?></td>
                                                                        <td class="h5 available-title text-center">$470,000</td>
                                                                        <td class="h5 available-title text-center">$474,700</td>
                                                                        <td class="h5 available-title text-center">$484,100</td>
                                                                        <td class="h5 available-title text-center">$521,700</td>
                                                                        <td class="h5 available-title text-center">$564,000</td>
                                                                        <td class="h5 available-title text-center">$601,600</td>
                                                                        <td class="h5 available-title text-center">$625,100</td>
                                                                        <td class="h5 available-title text-center">$695,600</td>
                                                                        <td class="h5 available-title text-center">$808,400</td>
                                                                        <td class="h5 available-title text-center">$864,800</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="h5 available-title text-left"><?= lang('Globals.regular_lot') ?></td>
                                                                        <td class="h5 available-title text-center">$368,000</td>
                                                                        <td class="h5 available-title text-center">$371,680</td>
                                                                        <td class="h5 available-title text-center">$379,040</td>
                                                                        <td class="h5 available-title text-center">$408,480</td>
                                                                        <td class="h5 available-title text-center">$441,600</td>
                                                                        <td class="h5 available-title text-center">$471,040</td>
                                                                        <td class="h5 available-title text-center">$489,440</td>
                                                                        <td class="h5 available-title text-center">$544,640</td>
                                                                        <td class="h5 available-title text-center">$632,960</td>
                                                                        <td class="h5 available-title text-center">$677,120</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Price End -->
                                <div class="d-flex justify-content-center">
                                    <img src="<?= STATIC_URL . 'img/wind-rose_' . $lang . '.svg' ?>" alt="Brujula" height="80px" width="80px" style="transform: rotate(90deg);">

                                </div>
                                <div class="row mt-2">
                                    <p class="small fw-bolder text-center"><?= lang('Globals.for_information') ?> <span class="mouse-touche"><?= lang('Globals.hover_mouse') ?> </span><?= lang('Globals.over_lot') ?></p>
                                </div>
                                <div class="loader-container text-center mb-2">
                                    <span class="mdi mdi-vanish mdi-spin"></span>
                                    <?= lang('Globals.loading') ?> <?= lang('Globals.image') ?>...
                                </div>
                                <!-- Direccion para Scrapde Privada 2: https://crmgea.com/sistemas_active/crm/if/indexBase.php?id=itk7gskut7P129&rd=&rg=&clvde=NLA1daGIJTD42 -->
                                                                
                                <!-- <div id="" class="row text-center">
                                    <img src="<?= STATIC_URL . 'img/gran_telchac/lotes-telchac-3.jpg' ?>" class="card-img-top img-fluid" width="1516 px" height="1240 px" alt="Master Plan Mahal">
                                </div> -->
                                <div id="stage-3" class="row text-center map-svg d-none"></div>
                                <div class="leyend-status d-flex flex-row justify-content-around text-center fw-bold mt-n5">
                                    <div class="px-2 d-inline-block"><span class="mdi mdi-checkbox-blank mdi-18px mr-2" style="color:rgb(0, 102, 51);"></span><span class="text-black text-uppercase"><?= lang('Globals.club_house_lot') ?></span></div>
                                    <div class="px-2 d-inline-block"><span class="mdi mdi-checkbox-blank mdi-18px mr-2" style="color:rgb(251, 219, 21);"></span><span class="text-black text-uppercase"><?= lang('Globals.club_house_corner_lot') ?></span></div>
                                    <div class="px-2 d-inline-block"><span class="mdi mdi-checkbox-blank mdi-18px mr-2" style="color:rgb(47, 172, 102);"></span><span class="text-black text-uppercase"><?= lang('Globals.greenarea_corner_lot') ?></span></div>
                                    <div class="px-2 d-inline-block"><span class="mdi mdi-checkbox-blank mdi-18px mr-2" style="color:rgb(183 245 162);"></span><span class="text-black text-uppercase"><?= lang('Globals.regular_lot') ?></span></div>
                                </div>
                                <div class="leyend-status d-flex flex-row justify-content-around text-center fw-bold text-white mt-3">
                                    <div class="text-uppercase small bg-sold rounded-pill px-2"><?= lang('Globals.sold') ?></div>
                                    <div class="text-uppercase small bg-available rounded-pill px-2"><?= lang('Globals.available') ?></div>
                                    <div class="text-uppercase small bg-reserved rounded-pill px-2"><?= lang('Globals.reserved') ?></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
    </div>
    <!-- Property List End -->


<div class="data">
    <input type="hidden" name="data_url" id="data_url" value='<?= base_url('assets/json/salama.json') ?>'>
    <input type="hidden" name="data_url" id="static_url" value='<?= STATIC_URL ?>'>
    <input type="hidden" name="language" id="language" value='<?= $lang ?>'>
    <input type="hidden" name="investment" id="investment" value=''>
</div>

<!-- Modal -->
<div class="modal fade" id="modal-img" tabindex="-1" aria-labelledby="modal-imgLabel" aria-hidden="true" style="z-index: 99999">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header py-0 border-bottom-0">
                <!-- <ul class="nav nav-tabs pt-2" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link px-2 px-lg-5 active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Fotos</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link px-2 px-lg-5" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false" disabled>Videos</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link px-2 px-lg-5" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false" disabled>360</button>
                    </li>
                    <li class="nav-item d-none" role="presentation">
                        <button class="nav-link px-2 px-lg-5" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane" type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false" disabled>Planos</button>
                    </li>
                </ul> -->
                <button type="button" class="btn-close mt-2" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col p-0 p-md-2">
                        <div class=" rounded overflow-hidden border-5 shadow">
                            <div class="position-relative overflow-hidden">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                        <div id="carouselmodal" class="carousel slide text-center" data-bs-ride="false" data-bs-touch="false">
                                            <div class="carousel-inner" id="modal-carousel-container">
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselmodal" data-bs-slide="prev">
                                                <span class="mdi mdi-chevron-left mdi-72px" aria-hidden="true"></span>
                                                <span class="visually-hidden"><?= lang('Globals.previous') ?></span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#carouselmodal" data-bs-slide="next">
                                                <span class="mdi mdi-chevron-right mdi-72px" aria-hidden="true"></span>
                                                <span class="visually-hidden"><?= lang('Globals.next') ?></span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">Videos</div>
                                    <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">360</div>
                                    <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">Planos</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal End -->

<!-- Attractions Modal -->
<?= $sectionAttractions ?>
<!-- Contact Us Section -->
<?= $sectionContact ?>
<!-- Reviews Section -->
<?= $sectionReviews ?>