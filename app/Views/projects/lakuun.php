<!-- Header Start -->
    <div class="container-xxl bg-white p-0 mt-4 mb-5">
        <div class="row g-0 align-items-center flex-md-row">
            <div class="col-lg-6 text-center px-3 px-lg-5 mt-0 mt-xxl-5">
                <div class="animated fadeInLeft bg-success text-white rounded-5 pb-2">
                    <h3>Lakuun</h3>
                    <h6>KOMCHÉN, MÉRIDA, YUCATÁN, MÉXICO</h6>
                </div>
                <h1 class="h2 animated fadeIn fw-bold my-2"><?= lang('Globals.header_1') ?></h1>
                <p class="h4 animated fadeIn mb-2 py-1"><?= lang('Globals.header_2') ?></p>
                <div class="text-center mt-lg-1 promo not_mobile d-none" id="" style="min-height: 9em">
                </div>
                <div class="m-2">
                    <a href="<?= base_url('templates/contactForm/?lang='. $lang) ?>" type="button" class="btn btn-lg btn-outline-success btn-contact text-decoration-none mt-0 not_mobile d-none" target="_blank">
                        <span class="fadeinout"><?= lang('Globals.header_3') ?></span>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 pe-lg-5">
                <div class="text-center mx-auto">
                    <p class="fw-bold small mb-0 not_mobile d-none"><?= lang('Globals.click_zoom') ?></p>
                </div>
                <div class="carousel carousel-fade slide  text-center" data-bs-ride="carousel" data-bs-pause="hover" data-bs-touch="false" id="carouselHome">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="<?= STATIC_URL . 'img/lakuun/01-' . $lang . '.jpg' ?>" class="img-fluid w-100" width="1754 px" height="1240 px" alt="Entrada a Lakuun, Mérida, Yucatán, México.(Imagen ilustrativa)">
                        </div>
                        <div class="carousel-item">
                            <img src="<?= STATIC_URL . 'img/lakuun/02-' . $lang . '.jpg' ?>" class="img-fluid w-100" width="1754 px" height="1240 px" alt="Vive en Tierra Dorada Lakuun, Mérida, Yucatán, México.">
                        </div>
                        <div class="carousel-item">
                            <img src="<?= STATIC_URL . 'img/lakuun/05-' . $lang . '.jpg' ?>" class="img-fluid w-100" width="1754 px" height="1240 px" alt="Características de Lakuun, Mérida, Yucatán, México.">
                        </div>
                        <div class="carousel-item">
                            <img src="<?= STATIC_URL . 'img/lakuun/06-' . $lang . '.jpg' ?>" class="img-fluid w-100" width="1754 px" height="1240 px" alt="Etapas y amenidades de Lakuun, Mérida, Yucatán, México.">
                        </div>
                        <div class="carousel-item">
                            <img src="<?= STATIC_URL . 'img/lakuun/07-' . $lang . '.jpg' ?>" class="img-fluid w-100" width="1754 px" height="1240 px" alt="Master Plan Lakuun, Mérida, Yucatán, México.">
                        </div>
                        <div class="carousel-item">
                            <img src="<?= STATIC_URL . 'img/lakuun/08-' . $lang . '.jpg' ?>" class="img-fluid w-100" width="1754 px" height="1240 px" alt="Amenidades de Lakuun, Mérida, Yucatán, México.">
                        </div>
                        <div class="carousel-item">
                            <img src="<?= STATIC_URL . 'img/lakuun/16-' . $lang . '.jpg' ?>" class="img-fluid w-100" width="1754 px" height="1240 px" alt="Entrada Casa Club Lakuun, Mérida, Yucatán, México.(Imagen ilustrativa)">
                        </div>
                        <div class="carousel-item">
                            <img src="<?= STATIC_URL . 'img/lakuun/12-' . $lang . '.jpg' ?>" class="img-fluid w-100" width="1754 px" height="1240 px" alt="Amenidades Casa Club Lakuun, Mérida, Yucatán, México.(Imagen ilustrativa)">
                        </div>
                        <div class="carousel-item">
                            <img src="<?= STATIC_URL . 'img/lakuun/22-' . $lang . '.jpg' ?>" class="img-fluid w-100" width="1754 px" height="1240 px" alt="Área Grill Lakuun, Mérida, Yucatán, México.(Imagen ilustrativa)">
                        </div>
                        <div class="carousel-item">
                            <img src="<?= STATIC_URL . 'img/lakuun/23-' . $lang . '.jpg' ?>" class="img-fluid w-100" width="1754 px" height="1240 px" alt="Área infantilLakuun, Mérida, Yucatán, México.(Imagen ilustrativa)">
                        </div>
                        <div class="carousel-item">
                            <img src="<?= STATIC_URL . 'img/lakuun/24-' . $lang . '.jpg' ?>" class="img-fluid w-100" width="1754 px" height="1240 px" alt="Pet park Lakuun, Mérida, Yucatán, México.(Imagen ilustrativa)">
                        </div>
                        <div class="carousel-item">
                            <img src="<?= STATIC_URL . 'img/lakuun/25-' . $lang . '.jpg' ?>" class="img-fluid w-100" width="1754 px" height="1240 px" alt="Área deportiva con ciclovías Lakuun, Mérida, Yucatán, México.(Imagen ilustrativa)">
                        </div>
                        <div class="carousel-item">
                            <img src="<?= STATIC_URL . 'img/lakuun/26-' . $lang . '.jpg' ?>" class="img-fluid w-100" width="1754 px" height="1240 px" alt="Área deportiva Lakuun, Mérida, Yucatán, México.(Imagen ilustrativa)">
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
                <div class="m-2 text-center mt-3">
                    <a href="<?= base_url('templates/contactForm/?lang='. $lang) ?>" type="button" class="btn btn-lg btn-outline-success text-decoration-none mt-0 mobile d-none" target="_blank">
                        <span class="fadeinout"><?= lang('Globals.header_3') ?></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
<!-- Header End -->

    <!-- Location Start -->
    <div class="container-xxl py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow slideInLeft" data-wow-delay="0.1s">
                    <div class="about-img position-relative overflow-hidden p-5 pe-0">
                        <div class="carousel carousel-fade slide animated fadeInLeft text-center" data-bs-ride="carousel" data-bs-pause="hover" data-bs-touch="false" id="carouselLocation" style="z-index: 100">
                            <p class="small fw-bolder text-center mb-0 pb-0 not_mobile d-none"><?= lang('Globals.click_zoom') ?></p>
                            <div class="carousel-inner" >
                                <div class="carousel-item active">
                                    <img src="<?= STATIC_URL . 'img/lakuun/03-' . $lang . '.jpg' ?>" class="card-img-top img-fluid" width="1754 px" height="1240 px" alt="Atractivos turísticos cercanos a Lakuun, Mérida, Yucatán, México.">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?= STATIC_URL . 'img/lakuun/04-' . $lang . '.jpg' ?>" class="card-img-top img-fluid" width="1754 px" height="1240 px" alt="Plazas comerciales cercanos a Lakuun, Mérida, Yucatán, México.">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselLocation" data-bs-slide="prev">
                                <span class="mdi mdi-chevron-left mdi-72px" aria-hidden="true"></span>
                                <span class="visually-hidden"><?= lang('Globals.previous') ?></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselLocation" data-bs-slide="next">
                                <span class="mdi mdi-chevron-right mdi-72px" aria-hidden="true"></span>
                                <span class="visually-hidden"><?= lang('Globals.next') ?></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow slideInRight" data-wow-delay="0.5s">
                    <h2 class="mb-3"><?= lang('Globals.location_1') ?></h2>
                    <p class="h5 mb-4"><?= lang('Globals.location_2') ?></p>
                    <p class="h5 mb-4"><?= lang('Globals.location_3') ?></p>
                    <p class="h4"><span class='mdi mdi-hospital-box-outline mdi-24px text-success me-1'></span><?= lang('Globals.location_4') ?></p>
                    <p class="h4"><span class='mdi mdi-school-outline mdi-24px text-success me-1'></span><?= lang('Globals.location_5') ?></p>
                    <p class="h4"><span class='mdi mdi-beach mdi-24px text-success me-1'></span></i><?= lang('Globals.location_6') ?></p>
                </div>
            </div>
    </div>
    <!-- Location End -->

    <!-- Caracteristicas Start -->
    <div class="container-xxl py-5">
            <div class="text-center mb-5 wow slideInLeft" data-wow-delay="0.1s">
                <h1 class="fw-bold text-decoration-underline"><?= lang('Globals.characteristic') ?></h1>
            </div>
            <div class="row g-0 g-lg-5 align-items-center">
                <div class="col-md-6 wow slideInLeft" data-wow-delay="0.5s">
                    <ul>
                        <li class="h4"><?= lang('Globals.characteristic_1') ?></li>
                        <li class="h4"><?= lang('Globals.characteristic_2') ?></li>
                        <li class="h4"><?= lang('Globals.characteristic_3') ?></li>
                        <li class="h4"><?= lang('Globals.characteristic_4') ?></li>
                        <li class="h4"><?= lang('Globals.characteristic_5') ?></li>
                    </ul>
                </div>
                <div class="col-md-6 wow slideInRight" data-wow-delay="0.5s">
                    <ul>
                        <li class="h4"><?= lang('Globals.characteristic_6') ?></li>
                        <li class="h4"><?= lang('Globals.characteristic_7') ?></li>
                        <li class="h4"><?= lang('Globals.characteristic_8') ?></li>
                        <li class="h4"><?= lang('Globals.characteristic_9') ?></li>
                        <li class="h4"><?= lang('Globals.characteristic_10') ?></li>
                    </ul>
                </div>
                <div class="text-center wow slideInLeft mt-0" data-wow-delay="0.1s">
                    <p class="h4"><span class='mdi mdi-umbrella-beach mdi-24px text-success me-3'></span><?= lang('Globals.characteristic_11') ?></p>
                </div>
            </div>
    </div>
    <!-- Caracteristicas  End -->

    <!-- Club Start -->
    <div class="container-xxl py-5">
            <div class="text-center mx-auto mb-1 wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="mt-2 mb-2 text-success"><?= lang('Globals.characteristic') ?></h1>
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow slideInLeft" data-wow-delay="0.5s">
                        <p class="h4 mb-4"><?= lang('Globals.club_1') ?></p>
                        <p class="h4"><?= lang('Globals.club_2') ?></p>
                    </div>
                    <div class="col-lg-6 wow slideInRight" data-wow-delay="0.1s">
                        <div class="about-img-right position-relative overflow-hidden p-5 pe-0">
                            <div class="text-center mx-auto">
                                <p class="fw-bold small mb-0 not_mobile d-none"><?= lang('Globals.click_zoom') ?></p>
                            </div>
                            <div class="carousel carousel-fade slide animated fadeInRight text-center" data-bs-ride="carousel" data-bs-pause="hover" data-bs-touch="false" id="carouselAmenitiesCasaClub" style="z-index: 100">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="<?= STATIC_URL . 'img/lakuun/16-' . $lang . '.jpg' ?>" class="card-img-top img-fluid" width="1754 px" height="1240 px" alt="Entrada Casa Club de Lakuun, Mérida, Yucatán, México.(Imagen ilustrativa)">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?= STATIC_URL . 'img/lakuun/12-' . $lang . '.jpg' ?>" class="card-img-top img-fluid" width="1754 px" height="1240 px" alt="Amenidades Casa Club de Lakuun, Mérida, Yucatán, México.">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?= STATIC_URL . 'img/lakuun/17-' . $lang . '.jpg' ?>" class="card-img-top img-fluid" width="1754 px" height="1240 px" alt="Interior Casa Club de Lakuun, Mérida, Yucatán, México.(Imagen ilustrativa)">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?= STATIC_URL . 'img/lakuun/18-' . $lang . '.jpg' ?>" class="card-img-top img-fluid" width="1754 px" height="1240 px" alt="Interior Casa Clubde Lakuun, Mérida, Yucatán, México.(Imagen ilustrativa)">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?= STATIC_URL . 'img/lakuun/19-' . $lang . '.jpg' ?>" class="card-img-top img-fluid" width="1754 px" height="1240 px" alt="Interior Casa Club de Lakuun, Mérida, Yucatán, México.(Imagen ilustrativa)">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?= STATIC_URL . 'img/lakuun/20-' . $lang . '.jpg' ?>" class="card-img-top img-fluid" width="1754 px" height="1240 px" alt="Casa Club de Lakuun, Mérida, Yucatán, México.(Imagen ilustrativa)">
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
    <div class="container-xxl py-5">
        <!-- <div class="container"> -->
            <!-- <div class="text-center mb-5 wow slideInLeft" data-wow-delay="0.1s">
            <h1 class="fw-bold text-decoration-underline">Características</h1>
            </div> -->
            <div class="row g-0 g-lg-5 align-items-center">
                <div class="col-md-6 wow slideInLeft" data-wow-delay="0.5s">
                    <ul>
                        <li class="h4"><?= lang('Globals.clubhouse_1') ?></li>
                        <li class="h4"><?= lang('Globals.clubhouse_2') ?></li>
                        <li class="h4"><?= lang('Globals.clubhouse_3') ?></li>
                        <li class="h4"><?= lang('Globals.clubhouse_4') ?></li>
                        <li class="h4"><?= lang('Globals.clubhouse_5') ?></li>
                    </ul>
                </div>
                <div class="col-md-6 wow slideInRight" data-wow-delay="0.5s">
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
                    <div class="about-img position-relative overflow-hidden p-5 pe-0">
                        <div class="text-center mx-auto">
                            <p class="fw-bold small mb-0 not_mobile d-none"><?= lang('Globals.click_zoom') ?></p>
                        </div>
                        <div class="carousel carousel-fade slide animated fadeInRight text-center" data-bs-ride="carousel" data-bs-pause="hover" data-bs-touch="false" id="carouselAmenities" style="z-index: 100">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="<?= STATIC_URL . 'img/lakuun/09-' . $lang . '.jpg' ?>" class="card-img-top img-fluid" width="1754 px" height="1240 px" alt="Amenidades Etapa 1: Recreativa de Lakuun, Mérida, Yucatán, México.(Imagen ilustrativa)">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?= STATIC_URL . 'img/lakuun/10-' . $lang . '.jpg' ?>" class="card-img-top img-fluid" width="1754 px" height="1240 px" alt="Amenidades Etapa 2: Familar de Lakuun, Mérida, Yucatán, México.(Imagen ilustrativa)">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?= STATIC_URL . 'img/lakuun/11-' . $lang . '.jpg' ?>" class="card-img-top img-fluid" width="1754 px" height="1240 px" alt="Amenidades Etapa 2: Deportiva de Lakuun, Mérida, Yucatán, México.(Imagen ilustrativa)">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselAmenities" data-bs-slide="prev">
                                <span class="mdi mdi-chevron-left mdi-72px" aria-hidden="true"></span>
                                <span class="visually-hidden"><?= lang('Globals.previous') ?></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselAmenities" data-bs-slide="next">
                                <span class="mdi mdi-chevron-right mdi-72px" aria-hidden="true"></span>
                                <span class="visually-hidden"><?= lang('Globals.next') ?></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow slideInRight" data-wow-delay="0.5s">
                    <h2 class="mb-3"><?= lang('Globals.about_inv_1') ?>:</h2>
                    <p class="h5 mb-4"><?= lang('Globals.stages') ?>: <span class="h3">3</span></p>
                    <p class="h5 mb-4"><?= lang('Globals.amenities') ?>: <span class="h3">19</span></p>
                    <p class="h5 mb-4"><?= lang('Globals.lots') ?>: <span class="h3">561</span></p>
                    <p class="h5 mb-4"><?= lang('Globals.green_areas') ?>: <span class="h3">32,780 m<sup>2</sup></span></p>
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
            <div class="loader-container text-center mb-2">
                <span class="mdi mdi-vanish mdi-spin"></span>
                <?= lang('Globals.loading') ?> <?= lang('Globals.image') ?>...
            </div>
            <div class="lots" id="image_site">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item border border-success my-4" id="header1">
                        <h2 class="accordion-header border-bottom border-success" id="heading-1">
                            <button class="accordion-button px-4 <?php if ($projectStage == 1) {
                                                                        echo "";
                                                                    } else {
                                                                        echo "collapsed";
                                                                    } ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" title="Click para ver detalles y mapa">
                                <div class="container table-responsive-md">
                                    <table class="table table-sm table-borderless caption-top">
                                        <caption class="h1 fw-bold text-center text-success text-nowrap"><?= lang('Globals.stage') ?>-1</caption>
                                        <thead>
                                            <tr>
                                                <th scope="col" class="h5 available-title text-center"><?= lang('Globals.total_lots') ?></th>
                                                <th scope="col" class="h5 available-title text-center"><?= lang('Globals.available') ?></th>
                                                <th scope="col" class="h5 available-title text-center"><?= lang('Globals.delivered') ?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="display-4 fw-bold text-center">241</td>
                                                <td class="display-4 fw-bold text-center" id="available-1"></td>
                                                <td class="display-4 fw-bold text-center">2024</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                    <!-- </div> -->
                                </div>
                        
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse <?php if ($projectStage == 1) {
                                                                                        echo "show";
                                                                                    } else {
                                                                                        echo "";
                                                                                    } ?>" aria-labelledby="heading-1">
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
                                                        <div class="col-12 col-lg-6 table-responsive-sm ">
                                                            <table class="table table-sm table-bordered border-2 text-left">
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="h5 available-title text-left"><?= lang('Globals.from') ?></td>
                                                                        <td class="h5 available-title text-left">300 m<small><sup>2</sup></small></td>
                                                                    </tr>
                                                                <tr>
                                                                        <td class="h5 available-title text-left"><?= lang('Globals.price') ?> (MXN) <?= lang('Globals.per') ?> m<small><sup>2</sup></small> <span class="text-lowercase"><?= lang('Globals.from') ?></span></td>
                                                                        <td class="h5 available-title text-left">$2,450.00</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="h5 available-title  text-left"><?= lang('Globals.down_payment') ?></td>
                                                                        <td class="h5 available-title  text-left">10%</td>
                                                                        </tr>
                                                                    <tr>
                                                                        <td class="h5 available-title  text-left"><?= lang('Globals.financing') ?> <?= lang('Globals.upto') ?></td>
                                                                        <td class="h5 available-title  text-left">80 <?= lang('Globals.months') ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="h5 available-title  text-left"><?= lang('Globals.financing') ?> (MXN) <span class="text-lowercase"><?= lang('Globals.from') ?></span></td>
                                                                        <td class="h5 available-title  text-left">$8,268.80</td>
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
                                <div class="loader-container text-center mb-2">
                                    <span class="mdi mdi-vanish mdi-spin"></span>
                                    <?= lang('Globals.loading') ?> <?= lang('Globals.image') ?>...
                                </div>
                                <div class="d-flex justify-content-center">
                                    <img src="<?= STATIC_URL . 'img/wind-rose_' . $lang . '.svg' ?>" alt="Brujula" height="80px" width="80px" style="transform: rotate(-90deg);">
                                </div>
                                <div class="row mt-2">
                                <p class="small fw-bolder text-center"><?= lang('Globals.for_information') ?> <span class="mouse-touche"><?= lang('Globals.hover_mouse') ?> </span><?= lang('Globals.over_lot') ?></p>
                                </div>
                                <div id="tiger-container" class="container mapsvg-scrollpane text-center" style="max-width: 900px; min-height: 300px;  ">
                                    <svg id="stage-01" viewBox="-10 100 1000 700" style="display: inline; width: inherit; min-width: inherit; max-width: inherit; height: inherit; min-height: inherit; max-height: inherit;">
                                        <style type="text/css">
                                            .st0 {
                                                fill: rgba(136, 194, 117);
                                                stroke: rgba(23, 149, 83);
                                                stroke-width: 1.97368px;
                                            }

                                            .st1 {
                                                font-family: Calibri;
                                                font-size: 11px;
                                                fill: rgba(255, 255, 255);
                                            }

                                            .st2 {
                                                fill: rgba(0, 0, 0, 0.1);
                                            }

                                            .st4 {
                                                font-size: 7px;
                                                font-family: 'Calibri-Bold';
                                            }
                                        </style>
                                        <image style="overflow:visible;enable-background:new    ;" width="4596" height="4237" xlink:href="<?= STATIC_URL . 'img/lakuun/56CFF67B.jpg' ?>" transform="matrix(0.1892 0 0 0.1892 -7.661545e-02 60.0748)">
                                        </image>
                                        <g id="stage_1">
                                            <path id="A-12" class="st0 mapsvg-region" d="M154.9,205.8l-6.5,17.9l55.7,2.9l3.2-8.2l0.2-3l-0.5-2.6l-1.3-2l-2-1.5l-2.8-1.2" style="fill: rgba(47, 172, 102); stroke: rgba(23, 149, 83); stroke-width: 1.97368px;" data-stroke-width="1.2" />
                                            <path id="A-11" class="st0 mapsvg-region" d="M148.7,223.4l27,1.4l28.5,1.5l-6.2,17.1l-55.7-3.2l2.2-5.2l2.7-7.7" />
                                            <path id="A-10" class="st0 mapsvg-region" d="M142.7,240.2l55.5,3.2l-6.2,17.1l-55.7-2.9l3.2-8.2" />
                                            <path id="A-09" class="st0 mapsvg-region" d="M130.4,274.5l6-16.7l55.7,2.9l-6.3,17l-11.2-0.8" />
                                            <path id="A-08" class="st0 mapsvg-region" d="M130,274.5l56,2.7l-6.7,17.9l-55.8-2.9l2.3-6.2l2-5.5" />
                                            <path id="A-07" class="st0 mapsvg-region" d="M123.5,292.1l55.8,2.9l-6.3,17l-55.7-3L123.5,292.1z" />
                                            <path id="A-06" class="st0 mapsvg-region" d="M173,312.1l-6.2,17.1l-56-3l6.5-17.1L173,312.1z" />
                                            <path id="A-05" class="st0 mapsvg-region" d="M111,326.2l55.8,3l-6.3,17.1l-56.2-2.7L111,326.2z" />
                                            <path id="A-04" class="st0 mapsvg-region" d="M104.4,343.6l56.2,2.7l-6.7,17.9l-56-3L104.4,343.6z" />
                                            <path id="A-03" class="st0 mapsvg-region" d="M154,364.2l-6.2,16.7L92,377.7l6.2-16.7L154,364.2z" />
                                            <path id="A-02" class="st0 mapsvg-region" d="M147.4,381l-6.3,17.1l-56.2-3l6.7-17.4L147.4,381z" />
                                            <path id="A-01" class="st0 mapsvg-region" d="M85.4,395.1l56.2,2.9l-6.2,17l-56.3-3L85.4,395.1z" />
                                            <path id="A-90" class="st0 mapsvg-region" d="M192.2,102.6l-7.5,21.4l-23.3,61.4l20.2,0.8l30.7-82.1L192.2,102.6z" />
                                            <path id="A-91" class="st0 mapsvg-region" d="M252,105.1l22.2,0.9l-30.3,82.7l-22.3-1.1L252,105.1z" />
                                            <path id="A-94" class="st0 mapsvg-region" d="M296.5,107.2l-22.3-1.2l-30.3,82.7l22.7,1.2L296.5,107.2z" />
                                            <path id="A-20" class="st0 mapsvg-region" d="M228.9,226.3l56,3l6.7-17.9l-50.8-2.7l-2.8,1.2l-2.3,1.2l-1.7,1.7l-0.7,1.4L228.9,226.3z" />
                                            <path id="A-19" class="st0 mapsvg-region" d="M284.5,228.7l-6.7,17.1l-55.5-3l6.3-17.3L284.5,228.7z" />
                                            <path id="A-18" class="st0 mapsvg-region" d="M222.4,243.3l55.3,3l-6.3,17.4l-56-2.9L222.4,243.3z" />
                                            <path id="A-17" class="st0 mapsvg-region" d="M271.5,263.6l-6.5,17.1l-55.5-3.3l6.2-16.7L271.5,263.6z" />
                                            <path id="A-16" class="st0 mapsvg-region" d="M265,280.8l-6.3,16.5l-55.3-2.9l6-16.8L265,280.8z" />
                                            <path id="A-15" class="st0 mapsvg-region" d="M203.5,294.3l-6.5,17.9l55.3,2.6l6.5-17.6L203.5,294.3z" />
                                            <path id="A-14" class="st0 mapsvg-region" d="M197,312.2l55.3,2.6l-6.3,17.4l-55.3-2.9L197,312.2z" />
                                            <path id="A-13" class="st0 mapsvg-region" d="M190.7,329.3l55.3,2.9l-6.2,17.6l-55.5-3.6L190.7,329.3z" />
                                            <path id="A-27" class="st0 mapsvg-region" d="M291.2,211.1l-6.7,17.9l54.8,2.3l3.3-8.9l-0.8-3.8L340,216l-1.7-1.5l-3.5-1.1l-1.5-0.5L291.2,211.1z" />
                                            <path id="A-26" class="st0 mapsvg-region" d="M284.5,229.8l54.7,2.3l-6.5,17.6l-55-2.7L284.5,229.8z" />
                                            <path id="A-25" class="st0 mapsvg-region" d="M326.2,266.1L333,249l-55-2.7l-6.3,17.3L326.2,266.1z" />
                                            <path id="A-24" class="st0 mapsvg-region" d="M319.9,283.3l6.3-17.1l-54.7-2.6l-6.5,17.1L319.9,283.3z" />
                                            <path id="A-23" class="st0 mapsvg-region" d="M313.5,300.1l6.3-16.8l-54.7-2.6l-6.3,16.5L313.5,300.1z" />
                                            <path id="A-22" class="st0 mapsvg-region" d="M306.9,317.5l6.7-17.4l-54.7-2.7l-6.5,17.6L306.9,317.5z" />
                                            <path id="A-21" class="st0 mapsvg-region" d="M252,314.8l54.7,2.7l-6.2,17.3l-54.7-2.6L252,314.8z" />
                                            <path id="A-33" class="st0 mapsvg-region" d="M362,233.6l5-13.2l2.3-2l2.5-1.2l2.7-0.3l3.3-0.3l40.2,2.1l-6.3,17.6L362,233.6z" />
                                            <path id="A-32" class="st0 mapsvg-region" d="M362,233.6l49.5,2.7l-6.8,17.6l-49.2-2.4L362,233.6z" />
                                            <path id="A-31" class="st0 mapsvg-region" d="M404.4,253.9l-6.2,17.1l-49-2.3l6-17.4L404.4,253.9z" />
                                            <path id="A-30" class="st0 mapsvg-region" d="M342.9,285.4l48.8,2.6l6.7-17l-49-2.3L342.9,285.4z" />
                                            <path id="A-29" class="st0 mapsvg-region" d="M391.7,288l-6.5,17.6l-48.7-2.6l6.3-17.6L391.7,288z" />
                                            <path id="A-28" class="st0 mapsvg-region" d="M336.5,303l48.8,2.6l-6.8,17l-30.8-1.5l-0.5-2.7l-1.5-2.6l-1.7-1.8l-2.5-1.5l-2.3-0.8l-2.5-0.3l-2,0.3l-1.5,0.6L336.5,303z" />
                                            <path id="A-39" class="st0 mapsvg-region" d="M417.7,218.7l-6.3,17.6l46.8,2.3l3.2-8.6l-0.3-2.7l-1.2-2.4l-2-2l-2.2-1.2l-1.5-1.1L417.7,218.7z" />
                                            <path id="A-38" class="st0 mapsvg-region" d="M411.5,236.3l-7,17.6l47.7,2l6.2-17.3L411.5,236.3z" />
                                            <path id="A-37" class="st0 mapsvg-region" d="M404.4,253.9l-6.2,17.1l47.7,2.3l6.2-17.4L404.4,253.9z" />
                                            <path id="A-36" class="st0 mapsvg-region" d="M398.4,271.1l47.7,2.3l-6.5,17.3l-47.8-2.6L398.4,271.1z" />
                                            <path id="A-35" class="st0 mapsvg-region" d="M391.7,288l47.8,2.6l-6.5,17.3l-47.8-2.4L391.7,288z" />
                                            <path id="A-34" class="st0 mapsvg-region" d="M385.2,305.5L433,308l-6.3,17l-3.2-0.2l-1.3-0.9l-2.7-1.2l-2.2-0.3l-2.2-0.2l-1.8,0.6l-2.3,0.9l-0.8,0.6l-7.5-0.3l-2.3-0.8l-2.5-0.2l-1.3,0.3l-0.3,0.5l-17.8-1.2L385.2,305.5z" />
                                            <path id="A-95" class="st0 mapsvg-region" d="M448.5,115.5L418,198.7l18.9,0.8l31-83.2L448.5,115.5z" />
                                            <path id="A-96" class="st0 mapsvg-region" d="M468,115.7l18.9,0.5l-31,84.3l-18.9-1.7L468,115.7z" />
                                            <path id="A-97" class="st0 mapsvg-region" d="M486.9,116.4l18.4,1.2L476,195.1l-1.5,2.4l-2.3,2l-2,0.6l-1.7,0.5l-1.2,0.2l-11.4-0.3L486.9,116.4z" />
                                            <path id="A-98" class="st0 mapsvg-region" d="M505.2,117.8l18.4,1.2l-19.3,52.6l-19.1-1.7L505.2,117.8z" />
                                            <path id="A-99" class="st0 mapsvg-region" d="M523.6,119l19.1,0.9l-19.8,52.4l-18.6-0.8L523.6,119z" />
                                            <path id="A-100" class="st0 mapsvg-region" d="M542.6,120.1l18.1,0.9l-19.3,52.3l-18.4-1.1L542.6,120.1z" />
                                            <path id="A-101" class="st0 mapsvg-region" d="M579.4,121.9l-18.8-0.9l-19.3,52.3l18.8,0.8L579.4,121.9z" />
                                            <path id="A-102" class="st0 mapsvg-region" d="M579.4,122l18.8,0.9l-19.4,52l-18.6-0.9L579.4,122z" />
                                            <path id="A-103" class="st0 mapsvg-region" d="M598.2,123.1l-19.3,51.8l18.4,0.8l19.8-52.1L598.2,123.1z" />
                                            <path id="A-104" class="st0 mapsvg-region" d="M616,176.6l-18.8-0.8l19.8-52.1l18.3,0.6L616,176.6z" />
                                            <path id="A-105" class="st0 mapsvg-region" d="M616,176.6l18.8,0.6l19.1-52.3l-18.4-0.6L616,176.6z" />
                                            <path id="A-106" class="st0 mapsvg-region" d="M673,125.8l-19.1-0.9l-19.1,52.3l18.9,0.9L673,125.8z" />
                                            <path id="A-107" class="st0 mapsvg-region" d="M653.5,178.4l18.3,0.5l19.6-52.1l-18.4-0.9L653.5,178.4z" />
                                            <path id="A-108" class="st0 mapsvg-region" d="M691.2,126.9l-19.6,52l18.9,0.9l19.6-52.1L691.2,126.9z" />
                                            <path id="A-109" class="st0 mapsvg-region" d="M710.5,127.8l18.3,0.9l-19.4,52.1l-18.6-0.9L710.5,127.8z" />
                                            <path id="A-110" class="st0 mapsvg-region" d="M708.7,180.8l18.4,0.6l19.1-51.5l-18.1-1.2L708.7,180.8z" />
                                            <path id="A-111" class="st0 mapsvg-region" d="M727.8,181.4l18.8,0.8l19.3-52l-18.8-0.3L727.8,181.4z" />
                                            <path id="A-112" class="st0 mapsvg-region" d="M746.5,182.3l18.8,0.8l19.3-51.7l-18.8-1.2L746.5,182.3z" />
                                            <path id="A-113" class="st0 mapsvg-region" d="M765,183.1l4.2,1.2l7.2,2.6l4.5,3l3.4,3.8l2.3,5.9l1,5.6l0.3,1.5l16.3-42.7l-0.8-1.5l-0.7-1.4l-1.8-0.3l-2.2-1.4l-1.2-1.5l-0.7-2.1V154l0.2-1.5l0.5-1.1l0.5-0.6l-9.4-19.2l-4.2-0.2L765,183.1z" />
                                            <path id="A-114" class="st0 mapsvg-region" d="M785.5,214.5l-9.5,26.2l-23.2-1.2l4.8-13.2l13-0.8l3.3-0.8l2.8-2.3l3-2.9l5.2-5.5L785.5,214.5z" />
                                            <path id="A-115" class="st0 mapsvg-region" d="M753,239.5l-6.3,17l23.3,0.9l6.3-16.8L753,239.5z" />
                                            <path id="A-116" class="st0 mapsvg-region" d="M746.5,256.6l23.3,0.9l-6.5,17.4l-23.2-1.2L746.5,256.6z" />
                                            <path id="A-117" class="st0 mapsvg-region" d="M740,273.7l-6.3,17.1l23.5,1.2l6.2-17L740,273.7z" />
                                            <path id="A-118" class="st0 mapsvg-region" d="M733.7,290.8l23.3,1.2l-6.3,17.3l-23.5-0.9L733.7,290.8z" />
                                            <path id="A-119" class="st0 mapsvg-region" d="M750.7,309.2l-6.5,17.4l-23.3-1.4l6.3-17.1L750.7,309.2z" />
                                            <path id="A-120" class="st0 mapsvg-region" d="M721,325.4l-6.5,17.3l23.7,0.9l6.2-17L721,325.4z" />
                                            <path id="A-121" class="st0 mapsvg-region" d="M714.5,342.7l-6.3,17.1l23.7,1.1l6.3-17.1L714.5,342.7z" />
                                            <path id="A-122" class="st0 mapsvg-region" d="M708.2,359.6l-6.2,17l23.5,0.9l6.3-17L708.2,359.6z" />
                                            <path id="A-123" class="st0 mapsvg-region" d="M702,376.6l23.5,0.9l-6.3,17.7l-23.7-1.2L702,376.6z" />
                                            <path id="A-124" class="st0 mapsvg-region" d="M695.5,394.2l23.5,1.2l-6.5,17.4l-23.8-1.1L695.5,394.2z" />
                                            <path id="A-125" class="st0 mapsvg-region" d="M688.9,411.6l23.7,1.1l-6.3,17.3l-23.8-1.2L688.9,411.6z" />
                                            <path id="A-126" class="st0 mapsvg-region" d="M682.5,428.7l23.8,1.2l-6.3,17l-23.7-1.4L682.5,428.7z" />
                                            <path id="A-127" class="st0 mapsvg-region" d="M676.4,445.6l-6.3,17.1l24,0.8l6-16.7L676.4,445.6z" />
                                            <path id="A-89" class="st0 mapsvg-region" d="M689.2,200.5l-7.3,19.5l52.2,2.6l3-7.7l0.2-2.7l-0.8-2.6l-1.2-2.3l-1.5-1.8l-2.2-1.5l-3.3-1.7L689.2,200.5z" />
                                            <path id="A-88" class="st0 mapsvg-region" d="M682,220.1l52.2,2.6l-6.7,17.9l-52.3-2.9L682,220.1z" />
                                            <path id="A-87" class="st0 mapsvg-region" d="M675.4,237.5l-6.3,17.1l52.5,2.3l6-16.5L675.4,237.5z" />
                                            <path id="A-86" class="st0 mapsvg-region" d="M669.2,254.8l52.3,2.3l-6.3,17.3l-52.3-2.6L669.2,254.8z" />
                                            <path id="A-85" class="st0 mapsvg-region" d="M662.9,271.8l-6.5,17.4l52.5,2.4l6.5-17.3L662.9,271.8z" />
                                            <path id="A-84" class="st0 mapsvg-region" d="M656.5,289.2L650,306l52.8,2.4l6.2-16.7L656.5,289.2z" />
                                            <path id="A-83" class="st0 mapsvg-region" d="M650,305.8l52.7,2.4l-6.8,18.2l-52.5-2.9L650,305.8z" />
                                            <path id="A-82" class="st0 mapsvg-region" d="M643.7,323.4l52.3,2.9l-6,16.5l-52.7-2.6L643.7,323.4z" />
                                            <path id="A-81" class="st0 mapsvg-region" d="M637.4,340.4L690,343l-6.3,17.4l-53-2.7L637.4,340.4z" />
                                            <path id="A-80" class="st0 mapsvg-region" d="M630.9,357.7l52.8,2.6l-6.5,17.4l-52.8-2.7L630.9,357.7z" />
                                            <path id="A-79" class="st0 mapsvg-region" d="M624.4,374.9l-6.2,17.1l52.7,2.4l6.3-16.8L624.4,374.9z" />
                                            <path id="A-243" class="st0 mapsvg-region" d="M556.8,741.5l0.2,32.9l18.6-0.6l19.6-52h-12.2l-0.8,3l-0.8,2.6l-1.7,3.9l-3,3.8l-3.5,3l-4,1.8l-4,1.4l-6,0.5L556.8,741.5z" />
                                            <path id="A-242" class="st0 mapsvg-region" d="M528.3,722.1l0.3,52.3h28.4l-0.2-32.9l-2.9-0.3l-3.5-1.2l-3-1.8l-3.5-2.6l-3.5-4.1l-2.9-3.5l-1.8-2.6l-1-1.7l-1.3-1.5l-2-0.3L528.3,722.1z" />
                                            <path id="A-216" class="st0 mapsvg-region" d="M510.8,721.8l17.4,0.3l0.3,52.3h-17.8V721.8z" />
                                            <path id="A-217" class="st0 mapsvg-region" d="M493,722l17.8-0.2v52.6h-18L493,722z" />
                                            <path id="A-218" class="st0 mapsvg-region" d="M474.9,721.7l18,0.3l-0.2,52.4l-18-0.2L474.9,721.7z" />
                                            <path id="A-78" class="st0 mapsvg-region" d="M618.4,392.1l-6.5,17.4l52.8,2.3l6.3-17.1L618.4,392.1z" />
                                            <path id="A-77" class="st0 mapsvg-region" d="M605.5,426.3l6.3-17l52.8,2.3l-6.5,17L605.5,426.3z" />
                                            <path id="A-76" class="st0 mapsvg-region" d="M605.5,426.3l-6.5,17.4l53.2,2.3l6.2-17.3L605.5,426.3z" />
                                            <path id="A-75" class="st0 mapsvg-region" d="M599.2,443.6l-6.5,17.4l47.2,3.3l3-0.9l1.2-0.6l1.3-1.1l1.5-1.5l0.7-1.4l0.3-0.8l4.3-12.3L599.2,443.6z" />
                                            <path id="A-60" class="st0 mapsvg-region" d="M545.4,440.4l54,2.4l-6.7,18.2l-42.8-2.9l-2.8-0.9l-1.5-1.5l-0.8-0.8l-0.7-1.4l-0.7-1.7l-0.2-1.7V449v-1.5l0.2-1.5L545.4,440.4z" />
                                            <path id="A-61" class="st0 mapsvg-region" d="M551.7,423.3l-6.3,17.1l54,2.4l6.2-16.4L551.7,423.3z" />
                                            <path id="A-62" class="st0 mapsvg-region" d="M605.5,426.3l6.3-17l-54-2.9l-6.2,16.7L605.5,426.3z" />
                                            <path id="A-63" class="st0 mapsvg-region" d="M618.5,391.3l-6.7,18l-54-2.9l6.7-17.7L618.5,391.3z" />
                                            <path id="A-64" class="st0 mapsvg-region" d="M624.7,374.2l-6.2,17.1l-54.2-2.6l6-17.1L624.7,374.2z" />
                                            <path id="A-65" class="st0 mapsvg-region" d="M570.5,371.6l54.3,2.6l6.7-17.6l-31-1.4l-23.8-1.1L570.5,371.6z" />
                                            <path id="A-66" class="st0 mapsvg-region" d="M637.4,339.9l-6,16.7l-54.8-2.6l6.3-16.8L637.4,339.9z" />
                                            <path id="A-67" class="st0 mapsvg-region" d="M637.4,339.9l6.7-17.6l-54.8-2.6l-6.3,17.4L637.4,339.9z" />
                                            <path id="A-68" class="st0 mapsvg-region" d="M650.4,305.1l-6.3,17.4l-54.8-2.6l6.3-17.3L650.4,305.1z" />
                                            <path id="A-69" class="st0 mapsvg-region" d="M650.4,305.1L657,288l-55.3-2.4l-6.2,17L650.4,305.1z" />
                                            <path id="A-70" class="st0 mapsvg-region" d="M663.2,271l-6.3,17.1l-55.3-2.4l6.3-17.3L663.2,271z" />
                                            <path id="A-71" class="st0 mapsvg-region" d="M669.7,253.7l-6.5,17.3l-55.2-2.6l6.3-17.3L669.7,253.7z" />
                                            <path id="A-72" class="st0 mapsvg-region" d="M675.5,236.9l-6,16.8l-55.3-2.7l6.2-17L675.5,236.9z" />
                                            <path id="A-73" class="st0 mapsvg-region" d="M681.9,219.6l-6.7,17.6l-55-2.9l6.5-17.4L681.9,219.6z" />
                                            <path id="A-74" class="st0 mapsvg-region" d="M689.2,200.5l-7,18.6l-55.3-2.7l2.7-7.1l1.2-2.1l2.2-2.6l1.7-1.5l2.7-1.7l3.2-1.1l2.2-0.6l2.5-0.6l0.8-0.8L689.2,200.5z" />
                                            <path id="A-49" class="st0 mapsvg-region" d="M491.5,367.8l-6.5,17.7l37.3,1.7l1.3-1.7l1.2-1.1l1.7-1.1l2.7-0.9l3-0.2l2,0.3l2,0.9l1.3,0.9l1.2,1.1l0.8,1.2l0.8,1.4l6.7-17.9L491.5,367.8z" />
                                            <path id="A-50" class="st0 mapsvg-region" d="M553.7,353.1l-6.5,17.3l-55.7-2.6l6-16.8L553.7,353.1z" />
                                            <path id="A-51" class="st0 mapsvg-region" d="M560.2,335.7l-6.5,17.4l-56.3-2.1l6.7-17.9L560.2,335.7z" />
                                            <path id="A-52" class="st0 mapsvg-region" d="M510.5,316l-6.5,17.1l56,2.6l6.5-17.3L510.5,316z" />
                                            <path id="A-53" class="st0 mapsvg-region" d="M516.8,299l-6.2,17l56.2,2.4l6.2-17L516.8,299z" />
                                            <path id="A-54" class="st0 mapsvg-region" d="M523,281.6l-6.2,17.4l56.2,2.6l6.7-17.3L523,281.6z" />
                                            <path id="A-55" class="st0 mapsvg-region" d="M529.3,264.8l-6.3,16.8l56.5,2.6l6.5-16.8L529.3,264.8z" />
                                            <path id="A-56" class="st0 mapsvg-region" d="M535.8,247.2l-6.5,17.6l56.7,2.6l6.3-17.6L535.8,247.2z" />
                                            <path id="A-57" class="st0 mapsvg-region" d="M535.8,247.4l56.5,2.6l6.5-17l-56.8-2.4L535.8,247.4z" />
                                            <path id="A-58" class="st0 mapsvg-region" d="M605.2,216l-6.5,17l-56.8-2.4l6.5-17.1L605.2,216z" />
                                            <path id="A-59" class="st0 mapsvg-region" d="M555.3,194.5l-7,18.9l56.8,2.6l2.2-6.2l0.2-2.1l-0.7-2.6l-1-2.3l-2.3-2.7l-2.2-1.4l-1.2-0.8l-3.3-1.7L555.3,194.5z" />
                                            <path id="A-48" class="st0 mapsvg-region" d="M555.3,194.5l-7.2,19.7l-57-2.6l4.2-11.1l2-2.9l2.3-2.3l3.3-1.7l3-0.5l4.7,0.2l1-0.2l0.2-0.8L555.3,194.5z" />
                                            <path id="A-47" class="st0 mapsvg-region" d="M548.2,214.2l-6.5,17.1l-56.5-2.6l6.2-17.1L548.2,214.2z" />
                                            <path id="A-46" class="st0 mapsvg-region" d="M535.7,247.7l6-16.2l-56.5-2.6l-6,16.5L535.7,247.7z" />
                                            <path id="A-45" class="st0 mapsvg-region" d="M529,265.7l6.7-18l-56.5-2.3l-6.3,17.9L529,265.7z" />
                                            <path id="A-44" class="st0 mapsvg-region" d="M529,265.7l-6.3,17l-56.2-2.6l6-16.8L529,265.7z" />
                                            <path id="A-43" class="st0 mapsvg-region" d="M522.8,282.5l-6.2,17.4l-56.2-2.7l6.3-17.3L522.8,282.5z" />
                                            <path id="A-42" class="st0 mapsvg-region" d="M516.5,299.9l-6.2,17.1l-56.3-2.7l6.3-17L516.5,299.9z" />
                                            <path id="A-41" class="st0 mapsvg-region" d="M510.3,316.9l-6.5,17.4l-55.8-2.9l6-17.3L510.3,316.9z" />
                                            <path id="A-40" class="st0 mapsvg-region" d="M503.7,334.3l-6.3,16.8l-5.3,0.3l-1.2-2.3l-1.8-2l-2.2-1.4l-3-0.8h-3.2l-2.3,0.6l-2.3,1.4l-1.8,1.5l-1,1.8l-31.3-1.4l6.2-17.4L503.7,334.3z" />
                                            <path id="A-128" class="st0 mapsvg-region" d="M526.7,564.8l54.2,0.2v18.5l-54.2-0.2V564.8z" />
                                            <path id="A-129" class="st0 mapsvg-region" d="M581,583.6l0.2,17.4l-54.2-0.3v-17.1H581z" />
                                            <path id="A-130" class="st0 mapsvg-region" d="M581,601l0.2,17.6l-54.3-0.3v-17.6L581,601z" />
                                            <path id="A-131" class="st0 mapsvg-region" d="M581,635.9l0.2-17.4l-54.3-0.3v17.4L581,635.9z" />
                                            <path id="A-132" class="st0 mapsvg-region" d="M580.8,635.7v17.7l-53.8-0.2l-0.2-17.7L580.8,635.7z" />
                                            <path id="A-133" class="st0 mapsvg-region" d="M581.2,670.7l-0.2-17.3l-53.8-0.2v17.4H581.2z" />
                                            <path id="A-134" class="st0 mapsvg-region" d="M581.2,670.7l-0.2,17.7l-54.2-0.3l0.2-17.4H581.2z" />
                                            <path id="A-135" class="st0 mapsvg-region" d="M526.8,688l54.2,0.3V717l-1.2-4.5l-1.5-2.3l-2.7-2.3l-2.5-1.4l-4-0.9l-3-0.3h-33.7l-2-0.6l-1.2-0.8l-1.3-1.5l-0.5-0.9l-0.3-1.5v-12H526.8z" />
                                            <path id="A-219" class="st0 mapsvg-region" d="M475.1,721.7h-18v52.6l17.6,0.2L475.1,721.7z" />
                                            <path id="A-220" class="st0 mapsvg-region" d="M457.3,721.7l-19.6,0.2l0.3,52.6l19.1-0.2L457.3,721.7z" />
                                            <path id="A-221" class="st0 mapsvg-region" d="M437.8,721.8L418,722l-0.2,52.4l20,0.2L437.8,721.8L437.8,721.8z" />
                                            <path id="A-223" class="st0 mapsvg-region" d="M418,721.8l-20.1-0.3l0.2,52.7l19.8,0.3L418,721.8z" />
                                            <path id="A-224" class="st0 mapsvg-region" d="M398.1,722v52.4l-19.8-0.2v-52.6L398.1,722z" />
                                            <path id="A-225" class="st0 mapsvg-region" d="M358.5,722l20.1,0.2l-0.2,52.4h-20V722z" />
                                            <path id="A-226" class="st0 mapsvg-region" d="M358.8,722.1l-0.3,52.4l-19.6-0.2v-52.3H358.8z" />
                                            <path id="A-227" class="st0 mapsvg-region" d="M338.3,721.8l0.7,52.6l-20.5,0.2l0.3-52.6L338.3,721.8z" />
                                            <path id="A-228" class="st0 mapsvg-region" d="M299.4,721.5l19.5,0.3l0.3,52.6h-20.1L299.4,721.5z" />
                                            <path id="A-229" class="st0 mapsvg-region" d="M279.3,722h20.1v52.1h-20.3L279.3,722z" />
                                            <path id="A-230" class="st0 mapsvg-region" d="M259.5,721.8h19.5v52.3l-19.6,0.3L259.5,721.8z" />
                                            <path id="A-231" class="st0 mapsvg-region" d="M259.5,722l0.3,52.3h-20l-0.2-52.4L259.5,722z" />
                                            <path id="A-232" class="st0 mapsvg-region" d="M219.9,722l20.1,0.2v52.4h-20.1L219.9,722z" />
                                            <path id="A-233" class="st0 mapsvg-region" d="M219.7,722l0.5,52.6l-19.8-0.2l-0.2-52.4H219.7z" />
                                            <path id="A-234" class="st0 mapsvg-region" d="M200.1,722.1l0.2,52.3l-20.3,0.3l0.2-53L200.1,722.1z" />
                                            <path id="A-235" class="st0 mapsvg-region" d="M160.8,774.1l19.1,0.3v-53h-19.3L160.8,774.1z" />
                                            <path id="A-236" class="st0 mapsvg-region" d="M160.3,721.8l0.2,52.4l-19.8,0.2v-52.6H160.3z" />
                                            <path id="A-237" class="st0 mapsvg-region" d="M141.4,774.5h-20.6V722l20-0.2L141.4,774.5z" />
                                            <path id="A-238" class="st0 mapsvg-region" d="M120.4,722v52.6h-20l-0.2-52.9L120.4,722z" />
                                            <path id="A-240" class="st0 mapsvg-region" d="M82.6,721.8l17.4-0.2l0.2,52.9l-18,0.2L82.6,721.8z" />
                                            <path id="A-241" class="st0 mapsvg-region" d="M83,721.7H64.5l0.2,53.2l17.6-0.2L83,721.7z" />
                                            <path id="A-137" class="st0 mapsvg-region" d="M452,682.9v18.2l46-0.3l2.2-0.3l1.8-1.4l1.7-1.4l1.2-2.3l0.7-2.1v-10.6L452,682.9z" />
                                            <path id="A-138" class="st0 mapsvg-region" d="M505.3,665v17.9l-53.2-0.2v-17.6L505.3,665z" />
                                            <path id="A-139" class="st0 mapsvg-region" d="M505.3,648v17l-53.2,0.3l-0.2-17.6L505.3,648z" />
                                            <path id="A-140" class="st0 mapsvg-region" d="M452.2,630.3l-0.3,17.4l53.3,0.2l0.2-17.6H452.2z" />
                                            <path id="A-141" class="st0 mapsvg-region" d="M505.5,613v17.3h-53.2l-0.2-17.4L505.5,613z" />
                                            <path id="A-142" class="st0 mapsvg-region" d="M505.5,595.6V613l-53.3-0.2v-17.4L505.5,595.6z" />
                                            <path id="A-143" class="st0 mapsvg-region" d="M452.2,578.3v17.3l53.3,0.2V578L452.2,578.3z" />
                                            <path id="A-144" class="st0 mapsvg-region" d="M452,560.4v17.7l53.3-0.5v-17.3L452,560.4z" />
                                            <path id="A-145" class="st0 mapsvg-region" d="M452,542.2v17.6l53.3,0.2l-0.2-17.6L452,542.2z" />
                                            <path id="A-156" class="st0 mapsvg-region" d="M397.9,507.5l54.7-0.2v18.9l-54.7-0.3V507.5z" />
                                            <path id="A-155" class="st0 mapsvg-region" d="M452.2,543l0.2-16.7l-54.7-0.3v16.8L452.2,543z" />
                                            <path id="A-154" class="st0 mapsvg-region" d="M452.2,543l-0.2,17.4h-54.2v-17.6L452.2,543z" />
                                            <path id="A-153" class="st0 mapsvg-region" d="M452.2,560.6v17.7l-54.3-0.2v-17.7L452.2,560.6z" />
                                            <path id="A-152" class="st0 mapsvg-region" d="M452.2,595.6v-17.4l-54.3-0.2v17.6H452.2z" />
                                            <path id="A-151" class="st0 mapsvg-region" d="M452.2,595.7L452.2,595.7v17.1l-54.3,0.2v-17.3H452.2z" />
                                            <path id="A-150" class="st0 mapsvg-region" d="M451.4,612.9l0.2,17.4l-54.3,0.3v-17.7H451.4z" />
                                            <path id="A-149" class="st0 mapsvg-region" d="M452.5,630.4l-0.3,17.4l-54,0.2v-17.3L452.5,630.4z" />
                                            <path id="A-148" class="st0 mapsvg-region" d="M452,647.7v17.7l-54.2,0.2V648L452,647.7z" />
                                            <path id="A-147" class="st0 mapsvg-region" d="M398,665.4v18.2l54.2-0.2v-18.2L398,665.4z" />
                                            <path id="A-146" class="st0 mapsvg-region" d="M452.2,683.6l-0.2,17.6l-46.5-0.5l-1.7-0.6l-1.7-1.2l-1.8-1.7l-1.2-1.8l-0.8-2.3l-0.3-1.8v-7.6L452.2,683.6z" />
                                            <path id="A-169" class="st0 mapsvg-region" d="M323.5,472.7l53.5-0.2V491l-53.7-0.2L323.5,472.7z" />
                                            <path id="A-168" class="st0 mapsvg-region" d="M376.9,490.9l0.2,17.7l-53.7-0.2v-17.6H376.9z" />
                                            <path id="A-167" class="st0 mapsvg-region" d="M376.9,508.6v17.7l-53.2-0.6l-0.3-17.3L376.9,508.6z" />
                                            <path id="A-166" class="st0 mapsvg-region" d="M377,543.6v-17.3l-53.2-0.6l-0.3,17.9H377z" />
                                            <path id="A-165" class="st0 mapsvg-region" d="M377,543.6v17.3h-53.7v-17.3H377z" />
                                            <path id="A-164" class="st0 mapsvg-region" d="M377,578.5v-17.6h-53.7l-0.2,17.6H377z" />
                                            <path id="A-163" class="st0 mapsvg-region" d="M377,578.3v17.6l-53.5,0.2l-0.3-17.4L377,578.3z" />
                                            <path id="A-162" class="st0 mapsvg-region" d="M323.5,595.7l53.5,0.2V613l-53.7,0.2L323.5,595.7z" />
                                            <path id="A-161" class="st0 mapsvg-region" d="M376.9,630.4V613l-53.7,0.2v17.4L376.9,630.4z" />
                                            <path id="A-160" class="st0 mapsvg-region" d="M377,648.3v-17.9l-53.7,0.2v17.6L377,648.3z" />
                                            <path id="A-159" class="st0 mapsvg-region" d="M377,665.7v-17.4l-53.7-0.2v17.7H377V665.7z" />
                                            <path id="A-158" class="st0 mapsvg-region" d="M377,683.3v-17.6h-53.7v17.6H377z" />
                                            <path id="A-157" class="st0 mapsvg-region" d="M323.4,683.3H377v10.6l-0.7,2.6l-0.8,1.4l-1.2,1.4l-2,1.2l-1.5,0.5l-1.8,0.5h-45.5v-18H323.4z" />
                                            <path id="A-183" class="st0 mapsvg-region" d="M269.4,455h54.5l-0.3,17.7l-54,0.2V455H269.4z" />
                                            <path id="A-182" class="st0 mapsvg-region" d="M269.5,472.8l54-0.2l-0.2,18.2l-54.2,0.2L269.5,472.8z" />
                                            <path id="A-181" class="st0 mapsvg-region" d="M269.7,508.5l53.7-0.2v-17.6l-54.2,0.2L269.7,508.5z" />
                                            <path id="A-180" class="st0 mapsvg-region" d="M269.5,526.2l54.3-0.6l-0.3-17.3l-53.7,0.2L269.5,526.2z" />
                                            <path id="A-179" class="st0 mapsvg-region" d="M323.5,543.6l0.2-17.9l-54.3,0.6v17.1L323.5,543.6z" />
                                            <path id="A-178" class="st0 mapsvg-region" d="M269.5,543.6h54.2l-0.2,17.4l-54-0.2L269.5,543.6L269.5,543.6z" />
                                            <path id="A-177" class="st0 mapsvg-region" d="M269.5,578.3v-17.4l54,0.2l-0.2,17.6L269.5,578.3z" />
                                            <path id="A-176" class="st0 mapsvg-region" d="M269.5,595l54.2,0.2l-0.3-17.3l-53.8-0.3V595z" />
                                            <path id="A-175" class="st0 mapsvg-region" d="M269.5,595.6l54.2,0.2l-0.3,17.4h-53.8V595.6z" />
                                            <path id="A-174" class="st0 mapsvg-region" d="M269.5,613.2h53.7v17.4l-53.8,0.2v-17.6H269.5z" />
                                            <path id="A-173" class="st0 mapsvg-region" d="M269.5,647.9v-17.1l53.8-0.2v17.6L269.5,647.9z" />
                                            <path id="A-172" class="st0 mapsvg-region" d="M269.7,648l53.7,0.2v17.7h-53.8L269.7,648z" />
                                            <path id="A-171" class="st0 mapsvg-region" d="M323.4,665.7v17.6l-53.8-0.3v-17.3H323.4z" />
                                            <path id="A-170" class="st0 mapsvg-region" d="M323.4,683.3v18.2l-45-0.2l-2-0.6l-1.7-0.9l-1.2-0.8l-1.2-1.1l-0.7-0.9l-0.7-1.2l-0.7-1.2l-0.5-0.9l-0.3-1.4V683L323.4,683.3z" />
                                            <path id="A-195" class="st0 mapsvg-region" d="M194.7,489.5l54.3,0.3V508l-54.3-0.2V489.5z" />
                                            <path id="A-194" class="st0 mapsvg-region" d="M249,526.2v-18l-54.3-0.2l-0.2,18.2H249z" />
                                            <path id="A-193" class="st0 mapsvg-region" d="M249,542.9v-16.7h-54.5V543L249,542.9z" />
                                            <path id="A-192" class="st0 mapsvg-region" d="M249,542.9v17.9l-54.3-0.3V543L249,542.9z" />
                                            <path id="A-191" class="st0 mapsvg-region" d="M249,578.2v-17.6l-54.3-0.3v17.6L249,578.2z" />
                                            <path id="A-190" class="st0 mapsvg-region" d="M249,595.4v-17.3l-54.3-0.2v17.4H249z" />
                                            <path id="A-189" class="st0 mapsvg-region" d="M249.2,612.9l-0.2-17.4l-54.3-0.2v17.4L249.2,612.9z" />
                                            <path id="A-188" class="st0 mapsvg-region" d="M249.2,612.7l-0.2,17.9l-54.3-0.3v-17.6L249.2,612.7L249.2,612.7z" />
                                            <path id="A-187" class="st0 mapsvg-region" d="M194.7,630.3l54.3,0.3V648l-54.2-0.2L194.7,630.3z" />
                                            <path id="A-186" class="st0 mapsvg-region" d="M194.9,647.7l0.2,17.4l54.2-0.2v-17L194.9,647.7z" />
                                            <path id="A-185" class="st0 mapsvg-region" d="M195,665v18l53.8-0.2v-18L195,665z" />
                                            <path id="A-184" class="st0 mapsvg-region" d="M249,682.9v8.8l-0.3,2.3l-1.3,2.4l-2.2,2.3l-1.5,0.9l-2.7,0.8l-45.7,0.3l-0.2-17.4L249,682.9z" />
                                            <path id="A-196" class="st0 mapsvg-region" d="M195.4,682.3l-0.2,18.2l-45.7,0.2l-2.7-0.6l-1.5-1.1l-1.2-0.8l-0.7-0.8l-0.8-1.1l-0.5-0.9l-0.5-1.2l-0.3-1.7v-10.3H195.4z" />
                                            <path id="A-197" class="st0 mapsvg-region" d="M195,664.1l0.3,18l-54,0.2v-18H195V664.1z" />
                                            <path id="A-198" class="st0 mapsvg-region" d="M194.9,646.8l0.2,17.4h-53.5v-17.4H194.9z" />
                                            <path id="A-199" class="st0 mapsvg-region" d="M141.5,629.4l53.3-0.2v17.6h-53.3V629.4z" />
                                            <path id="A-200" class="st0 mapsvg-region" d="M141.9,612l52.8,0.8l0.2,16.7l-53.3,0.2L141.9,612z" />
                                            <path id="A-201" class="st0 mapsvg-region" d="M141.5,594.8l0.2,17.1l52.8,0.8v-18.3L141.5,594.8z" />
                                            <path id="A-202" class="st0 mapsvg-region" d="M194.9,577.2v17.1l-53.3,0.5v-17.7L194.9,577.2z" />
                                            <path id="A-203" class="st0 mapsvg-region" d="M141.5,559.5h53.2v17.7l-53.2-0.2V559.5z" />
                                            <path id="A-204" class="st0 mapsvg-region" d="M141.5,542.2v17.1h53.2v-17.4L141.5,542.2z" />
                                            <path id="A-205" class="st0 mapsvg-region" d="M194.7,542.2h-53.2l0.2-17.1h52.8L194.7,542.2z" />
                                            <path id="A-215" class="st0 mapsvg-region" d="M64.5,524.8l2,0.5l2.2,0.2l1.5-0.5l2-0.8l46.8,0.2v18.5l-54.5-0.2V524.8z" />
                                            <path id="A-214" class="st0 mapsvg-region" d="M64.5,542.7l54.5,0.2v17.4l-54.5-0.2V542.7z" />
                                            <path id="A-213" class="st0 mapsvg-region" d="M64.5,560l54.5,0.2v17.7l-54.3-0.3L64.5,560z" />
                                            <path id="A-212" class="st0 mapsvg-region" d="M64,577.4l54.3,0.5v17.3L63.9,595L64,577.4z" />
                                            <path id="A-211" class="st0 mapsvg-region" d="M64.5,594.8l54.5,0.3v17.7l-54.5-0.5V594.8z" />
                                            <path id="A-210" class="st0 mapsvg-region" d="M64.5,612.4l54.3,0.5V630l-54.5-0.2L64.5,612.4z" />
                                            <path id="A-209" class="st0 mapsvg-region" d="M64.5,629.8l54.5,0.3v17.4l-54.5,0.2V629.8z" />
                                            <path id="A-208" class="st0 mapsvg-region" d="M119,647.4l0.2,17.9l-54.7-0.2v-17.6L119,647.4z" />
                                            <path id="A-207" class="st0 mapsvg-region" d="M119,664.8v17.6l-54.3,0.2L64.5,665L119,664.8z" />
                                            <path id="A-206" class="st0 mapsvg-region" d="M119,682.7v9.2l-0.5,2.3l-1,1.8l-1.2,1.4l-2.2,1.4l-1.8,0.6l-48,0.2l0.2-16.8H119z" />
                                            <rect class="cls-48" x="700" y="650" width="27.04" height="27.04"></rect>
                                            <rect class="cls-49" x="700" y="685" width="27.04" height="27.04"></rect>
                                            <rect class="cls-50" x="700" y="720" width="27.04" height="27.04"></rect>
                                        </g>
                                        <g id="Capa_3">
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 96.0001 408)" class="st1">A-01</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 102.4547 392)" class="st1">A-02</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 108.9091 375)" class="st1">A-03</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 115.3637 358)" class="st1">A-04</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 121.8183 341)" class="st1">A-05</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 128.2728 324)" class="st1">A-06</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 134.7274 306)" class="st1">A-07</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 141.1818 288)" class="st1">A-08</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 147.6364 270)" class="st1">A-09</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 154.091 254)" class="st1">A-10</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 160.5455 238)" class="st1">A-11</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 167.0001 221)" class="st1">A-12</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 200.0001 342)" class="st1">A-13</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 206.8573 324)" class="st1">A-14</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 213.7143 306)" class="st1">A-15</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 220.5715 290)" class="st1">A-16</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 227.4287 275)" class="st1">A-17</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 234.2858 256)" class="st1">A-18</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 241.1428 238)" class="st1">A-19</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 248 223)" class="st1">A-20</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 268 328)" class="st1">A-21</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 273.3335 309)" class="st1">A-22</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 278.6667 293)" class="st1">A-23</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 284 276)" class="st1">A-24</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 289.3335 260)" class="st1">A-25</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 294.6667 242)" class="st1">A-26</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 300 224)" class="st1">A-27</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 348 316)" class="st1">A-28</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 354 298)" class="st1">A-29</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 360 280)" class="st1">A-30</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 366 264)" class="st1">A-31</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 372 246)" class="st1">A-32</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 378 230)" class="st1">A-33</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 396 318)" class="st1">A-34</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 402 300)" class="st1">A-35</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 408 284)" class="st1">A-36</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 416 266)" class="st1">A-37</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 420 248)" class="st1">A-38</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 424 232)" class="st1">A-39</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 460 344)" class="st1">A-40</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 466 326.725)" class="st1">A-41</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 472 309.4498)" class="st1">A-42</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 479 292.1747)" class="st1">A-43</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 486 274.8997)" class="st1">A-44</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 492 257.6246)" class="st1">A-45</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 498 240.3497)" class="st1">A-46</text>
                                            <text transform="matrix(0.9949 0.1012 -0.1012 0.9949 504.9743 222.8961)" class="st1 st3">A-47</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 510.5999 205.7996)" class="st1">A-48</text>
                                            <text transform="matrix(1 0 0 1 540 577)" class="st1">A-128</text>
                                            <text transform="matrix(1 0 0 1 540 595)" class="st1">A-129</text>
                                            <text transform="matrix(1 0 0 1 540 613)" class="st1">A-130</text>
                                            <text transform="matrix(1 0 0 1 540 629)" class="st1">A-131</text>
                                            <text transform="matrix(1 0 0 1 540 647)" class="st1">A-132</text>
                                            <text transform="matrix(1 0 0 1 540 665)" class="st1">A-133</text>
                                            <text transform="matrix(1 0 0 1 540 683)" class="st1">A-134</text>
                                            <text transform="matrix(1 0 0 1 540 701)" class="st1">A-135</text>
                                            <text transform="matrix(1 0 0 1 466 556)" class="st1">A-145</text>
                                            <text transform="matrix(1 0 0 1 466 573.5)" class="st1">A-144</text>
                                            <text transform="matrix(1 0 0 1 466 591)" class="st1">A-143</text>
                                            <text transform="matrix(1 0 0 1 466 608.5)" class="st1">A-142</text>
                                            <text transform="matrix(1 0 0 1 466 626)" class="st1">A-141</text>
                                            <text transform="matrix(1 0 0 1 466 643.5)" class="st1">A-140</text>
                                            <text transform="matrix(1 0 0 1 466 661)" class="st1">A-139</text>
                                            <text transform="matrix(1 0 0 1 466 678.5)" class="st1">A-138</text>
                                            <text transform="matrix(1 0 0 1 466 696)" class="st1">A-137</text>
                                            <text transform="matrix(1 0 0 1 412 520)" class="st1">A-156</text>
                                            <text transform="matrix(1 0 0 1 412 537.6)" class="st1">A-155</text>
                                            <text transform="matrix(1 0 0 1 412 555.2)" class="st1">A-154</text>
                                            <text transform="matrix(1 0 0 1 412 572.8)" class="st1">A-153</text>
                                            <text transform="matrix(1 0 0 1 412 590.4)" class="st1">A-152</text>
                                            <text transform="matrix(1 0 0 1 412 608)" class="st1">A-151</text>
                                            <text transform="matrix(1 0 0 1 412 625.6)" class="st1">A-150</text>
                                            <text transform="matrix(1 0 0 1 412 643.2)" class="st1">A-149</text>
                                            <text transform="matrix(1 0 0 1 412 660.8)" class="st1">A-148</text>
                                            <text transform="matrix(1 0 0 1 412 678.4)" class="st1">A-147</text>
                                            <text transform="matrix(1 0 0 1 412 696)" class="st1">A-146</text>
                                            <text transform="matrix(1 0 0 1 336 485)" class="st1">A-169</text>
                                            <text transform="matrix(1 0 0 1 336 502.5833)" class="st1">A-168</text>
                                            <text transform="matrix(1 0 0 1 336 520.1666)" class="st1">A-167</text>
                                            <text transform="matrix(1 0 0 1 336 537.75)" class="st1">A-166</text>
                                            <text transform="matrix(1 0 0 1 336 555.3334)" class="st1">A-165</text>
                                            <text transform="matrix(1 0 0 1 336 572.9166)" class="st1">A-164</text>
                                            <text transform="matrix(1 0 0 1 336 590.5)" class="st1">A-163</text>
                                            <text transform="matrix(1 0 0 1 336 608.0834)" class="st1">A-162</text>
                                            <text transform="matrix(1 0 0 1 336 625.6666)" class="st1">A-161</text>
                                            <text transform="matrix(1 0 0 1 336 643.25)" class="st1">A-160</text>
                                            <text transform="matrix(1 0 0 1 336 660.8334)" class="st1">A-159</text>
                                            <text transform="matrix(1 0 0 1 336 678.4166)" class="st1">A-158</text>
                                            <text transform="matrix(1 0 0 1 336 696)" class="st1">A-157</text>
                                            <text transform="matrix(1 0 0 1 284 467)" class="st1">A-183</text>
                                            <text transform="matrix(1 0 0 1 284 484.6154)" class="st1">A-182</text>
                                            <text transform="matrix(1 0 0 1 284 502.2308)" class="st1">A-181</text>
                                            <text transform="matrix(1 0 0 1 284 519.8462)" class="st1">A-180</text>
                                            <text transform="matrix(1 0 0 1 284 537.4615)" class="st1">A-179</text>
                                            <text transform="matrix(1 0 0 1 284 555.0769)" class="st1">A-178</text>
                                            <text transform="matrix(1 0 0 1 284 572.6923)" class="st1">A-177</text>
                                            <text transform="matrix(1 0 0 1 284 590.3077)" class="st1">A-176</text>
                                            <text transform="matrix(1 0 0 1 284 607.9231)" class="st1">A-175</text>
                                            <text transform="matrix(1 0 0 1 284 625.5385)" class="st1">A-174</text>
                                            <text transform="matrix(1 0 0 1 284 643.1538)" class="st1">A-173</text>
                                            <text transform="matrix(1 0 0 1 284 660.7692)" class="st1">A-172</text>
                                            <text transform="matrix(1 0 0 1 284 678.3846)" class="st1">A-171</text>
                                            <text transform="matrix(1 0 0 1 284 696)" class="st1">A-170</text>
                                            <text transform="matrix(1 0 0 1 208 503)" class="st1">A-195</text>
                                            <text transform="matrix(1 0 0 1 208 520.5454)" class="st1">A-194</text>
                                            <text transform="matrix(1 0 0 1 208 538.0909)" class="st1">A-193</text>
                                            <text transform="matrix(1 0 0 1 208 555.6364)" class="st1">A-192</text>
                                            <text transform="matrix(1 0 0 1 208 573.1818)" class="st1">A-191</text>
                                            <text transform="matrix(1 0 0 1 208 590.7273)" class="st1">A-190</text>
                                            <text transform="matrix(1 0 0 1 208 608.2727)" class="st1">A-189</text>
                                            <text transform="matrix(1 0 0 1 208 625.8182)" class="st1">A-188</text>
                                            <text transform="matrix(1 0 0 1 208 643.3636)" class="st1">A-187</text>
                                            <text transform="matrix(1 0 0 1 208 660.9091)" class="st1">A-186</text>
                                            <text transform="matrix(1 0 0 1 208 678.4546)" class="st1">A-185</text>
                                            <text transform="matrix(1 0 0 1 208 696)" class="st1">A-184</text>
                                            <text transform="matrix(1 0 0 1 154 538)" class="st1">A-205</text>
                                            <text transform="matrix(1 0 0 1 154 555.5555)" class="st1">A-204</text>
                                            <text transform="matrix(1 0 0 1 154 573.1111)" class="st1">A-203</text>
                                            <text transform="matrix(1 0 0 1 154 590.6666)" class="st1">A-202</text>
                                            <text transform="matrix(1 0 0 1 154 608.2222)" class="st1">A-201</text>
                                            <text transform="matrix(1 0 0 1 154 625.7778)" class="st1">A-200</text>
                                            <text transform="matrix(1 0 0 1 154 643.3334)" class="st1">A-199</text>
                                            <text transform="matrix(1 0 0 1 154 660.8889)" class="st1">A-198</text>
                                            <text transform="matrix(1 0 0 1 154 678.4445)" class="st1">A-197</text>
                                            <text transform="matrix(1 0 0 1 154 696)" class="st1">A-196</text>
                                            <text transform="matrix(1 0 0 1 78 538)" class="st1">A-215</text>
                                            <text transform="matrix(1 0 0 1 78 555.5555)" class="st1">A-214</text>
                                            <text transform="matrix(1 0 0 1 78 573.1111)" class="st1">A-213</text>
                                            <text transform="matrix(1 0 0 1 78 590.6666)" class="st1">A-212</text>
                                            <text transform="matrix(1 0 0 1 78 608.2222)" class="st1">A-211</text>
                                            <text transform="matrix(1 0 0 1 78 625.7778)" class="st1">A-210</text>
                                            <text transform="matrix(1 0 0 1 78 643.3334)" class="st1">A-209</text>
                                            <text transform="matrix(1 0 0 1 78 660.8889)" class="st1">A-208</text>
                                            <text transform="matrix(1 0 0 1 78 678.4445)" class="st1">A-207</text>
                                            <text transform="matrix(1 0 0 1 78 696)" class="st1">A-206</text>
                                            <text transform="matrix(6.123234e-17 -1 1 6.123234e-17 572 771)" class="st1">A-236</text>
                                            <text transform="matrix(6.123234e-17 -1 1 6.123234e-17 546 767)" class="st1">A-242</text>
                                            <text transform="matrix(6.123234e-17 -1 1 6.123234e-17 524 767)" class="st1">A-216</text>
                                            <text transform="matrix(6.123234e-17 -1 1 6.123234e-17 506 767)" class="st1">A-217</text>
                                            <text transform="matrix(6.123234e-17 -1 1 6.123234e-17 488 767)" class="st1">A-218</text>
                                            <text transform="matrix(6.123234e-17 -1 1 6.123234e-17 470 767)" class="st1">A-219</text>
                                            <text transform="matrix(6.123234e-17 -1 1 6.123234e-17 452 767)" class="st1">A-220</text>
                                            <text transform="matrix(6.123234e-17 -1 1 6.123234e-17 432 767)" class="st1">A-221</text>
                                            <text transform="matrix(6.123234e-17 -1 1 6.123234e-17 412 767)" class="st1">A-223</text>
                                            <text transform="matrix(6.123234e-17 -1 1 6.123234e-17 394 767)" class="st1">A-224</text>
                                            <text transform="matrix(6.123234e-17 -1 1 6.123234e-17 374 767)" class="st1">A-225</text>
                                            <text transform="matrix(6.123234e-17 -1 1 6.123234e-17 354 767)" class="st1">A-226</text>
                                            <text transform="matrix(6.123234e-17 -1 1 6.123234e-17 334 767)" class="st1">A-227</text>
                                            <text transform="matrix(6.123234e-17 -1 1 6.123234e-17 314 767)" class="st1">A-228</text>
                                            <text transform="matrix(6.123234e-17 -1 1 6.123234e-17 294 767)" class="st1">A-229</text>
                                            <text transform="matrix(6.123234e-17 -1 1 6.123234e-17 274 767)" class="st1">A-230</text>
                                            <text transform="matrix(6.123234e-17 -1 1 6.123234e-17 254 767)" class="st1">A-231</text>
                                            <text transform="matrix(6.123234e-17 -1 1 6.123234e-17 234 767)" class="st1">A-232</text>
                                            <text transform="matrix(6.123234e-17 -1 1 6.123234e-17 214 767)" class="st1">A-233</text>
                                            <text transform="matrix(6.123234e-17 -1 1 6.123234e-17 194 767)" class="st1">A-234</text>
                                            <text transform="matrix(6.123234e-17 -1 1 6.123234e-17 174 767)" class="st1">A-235</text>
                                            <text transform="matrix(6.123234e-17 -1 1 6.123234e-17 154 767)" class="st1">A-236</text>
                                            <text transform="matrix(6.123234e-17 -1 1 6.123234e-17 134 767)" class="st1">A-237</text>
                                            <text transform="matrix(6.123234e-17 -1 1 6.123234e-17 114 767)" class="st1">A-238</text>
                                            <text transform="matrix(6.123234e-17 -1 1 6.123234e-17 96 767)" class="st1">A-240</text>
                                            <text transform="matrix(6.123234e-17 -1 1 6.123234e-17 78 767)" class="st1">A-241</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 514.9999 345.7599)" class="st1">A-51</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 508 362.8799)" class="st1">A-50</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 501 380)" class="st1">A-49</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 520.9999 328.6399)" class="st1">A-52</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 526.9999 311.52)" class="st1">A-53</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 533.9999 294.3995)" class="st1">A-54</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 540.9999 277.2795)" class="st1">A-55</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 546.9999 260.1597)" class="st1">A-56</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 552.9999 243.0394)" class="st1">A-57</text>
                                            <text transform="matrix(0.9949 0.1012 -0.1012 0.9949 559.9737 225.7406)" class="st1 st3">A-58</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 565.5999 208.7996)" class="st1">A-59</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 592.9999 351)" class="st1">A-66</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 598.9999 333.725)" class="st1">A-67</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 604.9999 316.4498)" class="st1">A-68</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 611.9999 299.1747)" class="st1">A-69</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 618.9999 281.8997)" class="st1">A-70</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 624.9999 264.6246)" class="st1">A-71</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 630.9999 247.3497)" class="st1">A-72</text>
                                            <text transform="matrix(0.9949 0.1012 -0.1012 0.9949 637.9743 229.8961)" class="st1 st3">A-73</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 643.5999 212.7996)" class="st1">A-74</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 647.9999 352.7599)" class="st1">A-81</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 640.9999 369.8799)" class="st1">A-80</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 633.9999 387)" class="st1">A-79</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 653.9999 335.6399)" class="st1">A-82</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 622.9999 419.7599)" class="st1">A-77</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 615.9999 436.8799)" class="st1">A-76</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 608.9999 454)" class="st1">A-75</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 628.9999 402.6399)" class="st1">A-78</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 587.9999 366.8799)" class="st1">A-65</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 580.9999 384)" class="st1">A-64</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 569.9999 416.7599)" class="st1">A-62</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 562.9999 433.8799)" class="st1">A-61</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 555.9999 451)" class="st1">A-60</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 575.9999 399.6399)" class="st1">A-63</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 659.9999 318.52)" class="st1">A-83</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 666.9999 301.3995)" class="st1">A-84</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 673.9999 284.2795)" class="st1">A-85</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 679.9999 267.1597)" class="st1">A-86</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 685.9999 250.0394)" class="st1">A-87</text>
                                            <text transform="matrix(0.9949 0.1012 -0.1012 0.9949 692.9737 232.7406)" class="st1 st3">A-88</text>
                                            <text transform="matrix(0.9962 8.715574e-02 -8.715574e-02 0.9962 698.5999 215.7996)" class="st1">A-89</text>
                                            <text transform="matrix(0.4008 -0.9162 0.9162 0.4008 187.2465 157.6526)" class="st1">A-90</text>
                                            <text transform="matrix(0.4008 -0.9162 0.9162 0.4008 248.2465 160.6526)" class="st1">A-91</text>
                                            <text transform="matrix(0.4008 -0.9162 0.9162 0.4008 270.2465 160.6526)" class="st1">A-92</text>
                                            <text transform="matrix(0.4008 -0.9162 0.9162 0.4008 462.2465 170.1526)" class="st1">A-96</text>
                                            <text transform="matrix(0.4008 -0.9162 0.9162 0.4008 479.2465 171.6526)" class="st1">A-97</text>
                                            <text transform="matrix(0.4008 -0.9162 0.9162 0.4008 504.2465 160.2952)" class="st1">A-98</text>
                                            <text transform="matrix(0.4008 -0.9162 0.9162 0.4008 521.2465 159.6526)" class="st1">A-99</text>
                                            <text transform="matrix(0.4008 -0.9162 0.9162 0.4008 540.2465 160.9387)" class="st1">A-100</text>
                                            <text transform="matrix(0.4008 -0.9162 0.9162 0.4008 558.2465 161.5813)" class="st1">A-101</text>
                                            <text transform="matrix(0.4008 -0.9162 0.9162 0.4008 576.2465 162.2239)" class="st1">A-102</text>
                                            <text transform="matrix(0.4008 -0.9162 0.9162 0.4008 614.2465 163.51)" class="st1">A-104</text>
                                            <text transform="matrix(0.4008 -0.9162 0.9162 0.4008 632.2465 164.1526)" class="st1">A-105</text>
                                            <text transform="matrix(0.4008 -0.9162 0.9162 0.4008 651.2465 164.7952)" class="st1">A-106</text>
                                            <text transform="matrix(0.4008 -0.9162 0.9162 0.4008 671.2465 165.4387)" class="st1">A-107</text>
                                            <text transform="matrix(0.4008 -0.9162 0.9162 0.4008 690.2465 166.0813)" class="st1">A-108</text>
                                            <text transform="matrix(0.4008 -0.9162 0.9162 0.4008 725.2465 166.7239)" class="st1">A-110</text>
                                            <text transform="matrix(0.4008 -0.9162 0.9162 0.4008 746.2465 167.3665)" class="st1">A-111</text>
                                            <text transform="matrix(0.3681 -0.9298 0.9298 0.3681 781.6599 181.7174)" class="st1">A-113</text>
                                            <text transform="matrix(0.4008 -0.9162 0.9162 0.4008 763.2465 168.6526)" class="st1">A-112</text>
                                            <text transform="matrix(0.4008 -0.9162 0.9162 0.4008 708.2465 168.01)" class="st1">A-109</text>
                                            <text transform="matrix(0.4008 -0.9162 0.9162 0.4008 595.2465 162.8665)" class="st1">A-103</text>
                                            <text transform="matrix(0.4008 -0.9162 0.9162 0.4008 443.2465 168.6526)" class="st1">A-95 </text>
                                            <text transform="matrix(0.9962 8.715528e-02 -8.715528e-02 0.9962 706.6445 371.2744)" class="st1 st4">A-122</text>
                                            <text transform="matrix(0.9962 8.715528e-02 -8.715528e-02 0.9962 700.3107 389.0099)" class="st1 st4">A-123</text>
                                            <text transform="matrix(0.9962 8.715528e-02 -8.715528e-02 0.9962 712.9791 354.5395)" class="st1 st4">A-121</text>
                                            <text transform="matrix(0.9962 8.715528e-02 -8.715528e-02 0.9962 687.6406 422.8549)" class="st1 st4">A-125</text>
                                            <text transform="matrix(0.9962 8.715528e-02 -8.715528e-02 0.9962 681.3049 439.5901)" class="st1 st4">A-126</text>
                                            <text transform="matrix(0.9962 8.715528e-02 -8.715528e-02 0.9962 674.9717 455.3257)" class="st1 st4">A-127</text>
                                            <text transform="matrix(0.9962 8.715528e-02 -8.715528e-02 0.9962 693.9757 406.1202)" class="st1 st4">A-124</text>
                                            <text transform="matrix(0.9962 8.715528e-02 -8.715528e-02 0.9962 719.3137 337.8044)" class="st1 st4">A-120</text>
                                            <text transform="matrix(0.9962 8.715528e-02 -8.715528e-02 0.9962 725.6494 320.0689)" class="st1 st4">A-119</text>
                                            <text transform="matrix(0.9962 8.715528e-02 -8.715528e-02 0.9962 731.9846 301.3339)" class="st1 st4">A-118</text>
                                            <text transform="matrix(0.9962 8.715528e-02 -8.715528e-02 0.9962 738.3192 285.599)" class="st1 st4">A-117</text>
                                            <text transform="matrix(0.9962 8.715528e-02 -8.715528e-02 0.9962 744.6533 267.8635)" class="st1 st4">A-116</text>
                                            <text transform="matrix(0.9949 0.1012 -0.1012 0.9949 750.9764 251.9636)" class="st1 st4">A-115</text>
                                            <text transform="matrix(0.9962 8.715528e-02 -8.715528e-02 0.9962 757.3232 236.3932)" class="st1 st4">A-114</text>
                                            <text class="cls-46" transform="translate(740 670)">Premium</text>
                                            <text class="cls-46" transform="translate(740 705)">Plus</text>
                                            <text class="cls-46" transform="translate(740 740)"><?= lang('Globals.standard') ?></text>
                                        </g>
                                        <g id="area_selection_1"  data-id="stage_1">
                                            <path data-id="A-12" class="st2 " d="M154.9,205.8l-6.5,17.9l55.7,2.9l3.2-8.2l0.2-3l-0.5-2.6l-1.3-2l-2-1.5l-2.8-1.2" />
                                            <path data-id="A-11" class="st2 " d="M148.7,223.4l27,1.4l28.5,1.5l-6.2,17.1l-55.7-3.2l2.2-5.2l2.7-7.7" />
                                            <path data-id="A-10" class="st2 " d="M142.7,240.2l55.5,3.2l-6.2,17.1l-55.7-2.9l3.2-8.2" />
                                            <path data-id="A-09" class="st2 " d="M130.4,274.5l6-16.7l55.7,2.9l-6.3,17l-11.2-0.8" />
                                            <path data-id="A-08" class="st2 " d="M130,274.5l56,2.7l-6.7,17.9l-55.8-2.9l2.3-6.2l2-5.5" />
                                            <path data-id="A-07" class="st2 " d="M123.5,292.1l55.8,2.9l-6.3,17l-55.7-3L123.5,292.1z" />
                                            <path data-id="A-06" class="st2 " d="M173,312.1l-6.2,17.1l-56-3l6.5-17.1L173,312.1z" />
                                            <path data-id="A-05" class="st2 " d="M111,326.2l55.8,3l-6.3,17.1l-56.2-2.7L111,326.2z" />
                                            <path data-id="A-04" class="st2 " d="M104.4,343.6l56.2,2.7l-6.7,17.9l-56-3L104.4,343.6z" />
                                            <path data-id="A-03" class="st2 " d="M154,364.2l-6.2,16.7L92,377.7l6.2-16.7L154,364.2z" />
                                            <path data-id="A-02" class="st2 " d="M147.4,381l-6.3,17.1l-56.2-3l6.7-17.4L147.4,381z" />
                                            <path data-id="A-01" class="st2 " d="M85.4,395.1l56.2,2.9l-6.2,17l-56.3-3L85.4,395.1z" />
                                            <path data-id="A-90" class="st2 " d="M192.2,102.6l-7.5,21.4l-23.3,61.4l20.2,0.8l30.7-82.1L192.2,102.6z" />
                                            <path data-id="A-91" class="st2 " d="M252,105.1l22.2,0.9l-30.3,82.7l-22.3-1.1L252,105.1z" />
                                            <path data-id="A-94" class="st2 " d="M296.5,107.2l-22.3-1.2l-30.3,82.7l22.7,1.2L296.5,107.2z" />
                                            <path data-id="A-20" class="st2 " d="M228.9,226.3l56,3l6.7-17.9l-50.8-2.7l-2.8,1.2l-2.3,1.2l-1.7,1.7l-0.7,1.4L228.9,226.3z" />
                                            <path data-id="A-19" class="st2 " d="M284.5,228.7l-6.7,17.1l-55.5-3l6.3-17.3L284.5,228.7z" />
                                            <path data-id="A-18" class="st2 " d="M222.4,243.3l55.3,3l-6.3,17.4l-56-2.9L222.4,243.3z" />
                                            <path data-id="A-17" class="st2 " d="M271.5,263.6l-6.5,17.1l-55.5-3.3l6.2-16.7L271.5,263.6z" />
                                            <path data-id="A-16" class="st2 " d="M265,280.8l-6.3,16.5l-55.3-2.9l6-16.8L265,280.8z" />
                                            <path data-id="A-15" class="st2 " d="M203.5,294.3l-6.5,17.9l55.3,2.6l6.5-17.6L203.5,294.3z" />
                                            <path data-id="A-14" class="st2 " d="M197,312.2l55.3,2.6l-6.3,17.4l-55.3-2.9L197,312.2z" />
                                            <path data-id="A-13" class="st2 " d="M190.7,329.3l55.3,2.9l-6.2,17.6l-55.5-3.6L190.7,329.3z" />
                                            <path data-id="A-27" class="st2 " d="M291.2,211.1l-6.7,17.9l54.8,2.3l3.3-8.9l-0.8-3.8L340,216l-1.7-1.5l-3.5-1.1l-1.5-0.5L291.2,211.1z" />
                                            <path data-id="A-26" class="st2 " d="M284.5,229.8l54.7,2.3l-6.5,17.6l-55-2.7L284.5,229.8z" />
                                            <path data-id="A-25" class="st2 " d="M326.2,266.1L333,249l-55-2.7l-6.3,17.3L326.2,266.1z" />
                                            <path data-id="A-24" class="st2 " d="M319.9,283.3l6.3-17.1l-54.7-2.6l-6.5,17.1L319.9,283.3z" />
                                            <path data-id="A-23" class="st2 " d="M313.5,300.1l6.3-16.8l-54.7-2.6l-6.3,16.5L313.5,300.1z" />
                                            <path data-id="A-22" class="st2 " d="M306.9,317.5l6.7-17.4l-54.7-2.7l-6.5,17.6L306.9,317.5z" />
                                            <path data-id="A-21" class="st2 " d="M252,314.8l54.7,2.7l-6.2,17.3l-54.7-2.6L252,314.8z" />
                                            <path data-id="A-33" class="st2 " d="M362,233.6l5-13.2l2.3-2l2.5-1.2l2.7-0.3l3.3-0.3l40.2,2.1l-6.3,17.6L362,233.6z" />
                                            <path data-id="A-32" class="st2 " d="M362,233.6l49.5,2.7l-6.8,17.6l-49.2-2.4L362,233.6z" />
                                            <path data-id="A-31" class="st2 " d="M404.4,253.9l-6.2,17.1l-49-2.3l6-17.4L404.4,253.9z" />
                                            <path data-id="A-30" class="st2 " d="M342.9,285.4l48.8,2.6l6.7-17l-49-2.3L342.9,285.4z" />
                                            <path data-id="A-29" class="st2 " d="M391.7,288l-6.5,17.6l-48.7-2.6l6.3-17.6L391.7,288z" />
                                            <path data-id="A-28" class="st2 " d="M336.5,303l48.8,2.6l-6.8,17l-30.8-1.5l-0.5-2.7l-1.5-2.6l-1.7-1.8l-2.5-1.5l-2.3-0.8l-2.5-0.3l-2,0.3l-1.5,0.6L336.5,303z" />
                                            <path data-id="A-39" class="st2 " d="M417.7,218.7l-6.3,17.6l46.8,2.3l3.2-8.6l-0.3-2.7l-1.2-2.4l-2-2l-2.2-1.2l-1.5-1.1L417.7,218.7z" />
                                            <path data-id="A-38" class="st2 " d="M411.5,236.3l-7,17.6l47.7,2l6.2-17.3L411.5,236.3z" />
                                            <path data-id="A-37" class="st2 " d="M404.4,253.9l-6.2,17.1l47.7,2.3l6.2-17.4L404.4,253.9z" />
                                            <path data-id="A-36" class="st2 " d="M398.4,271.1l47.7,2.3l-6.5,17.3l-47.8-2.6L398.4,271.1z" />
                                            <path data-id="A-35" class="st2 " d="M391.7,288l47.8,2.6l-6.5,17.3l-47.8-2.4L391.7,288z" />
                                            <path data-id="A-34" class="st2 " d="M385.2,305.5L433,308l-6.3,17l-3.2-0.2l-1.3-0.9l-2.7-1.2l-2.2-0.3l-2.2-0.2l-1.8,0.6l-2.3,0.9l-0.8,0.6l-7.5-0.3l-2.3-0.8l-2.5-0.2l-1.3,0.3l-0.3,0.5l-17.8-1.2L385.2,305.5z" />
                                            <path data-id="A-95" class="st2 " d="M448.5,115.5L418,198.7l18.9,0.8l31-83.2L448.5,115.5z" />
                                            <path data-id="A-96" class="st2 " d="M468,115.7l18.9,0.5l-31,84.3l-18.9-1.7L468,115.7z" />
                                            <path data-id="A-97" class="st2 " d="M486.9,116.4l18.4,1.2L476,195.1l-1.5,2.4l-2.3,2l-2,0.6l-1.7,0.5l-1.2,0.2l-11.4-0.3L486.9,116.4z" />
                                            <path data-id="A-98" class="st2 " d="M505.2,117.8l18.4,1.2l-19.3,52.6l-19.1-1.7L505.2,117.8z" />
                                            <path data-id="A-99" class="st2 " d="M523.6,119l19.1,0.9l-19.8,52.4l-18.6-0.8L523.6,119z" />
                                            <path data-id="A-100" class="st2 " d="M542.6,120.1l18.1,0.9l-19.3,52.3l-18.4-1.1L542.6,120.1z" />
                                            <path data-id="A-101" class="st2 " d="M579.4,121.9l-18.8-0.9l-19.3,52.3l18.8,0.8L579.4,121.9z" />
                                            <path data-id="A-102" class="st2 " d="M579.4,122l18.8,0.9l-19.4,52l-18.6-0.9L579.4,122z" />
                                            <path data-id="A-103" class="st2 " d="M598.2,123.1l-19.3,51.8l18.4,0.8l19.8-52.1L598.2,123.1z" />
                                            <path data-id="A-104" class="st2 " d="M616,176.6l-18.8-0.8l19.8-52.1l18.3,0.6L616,176.6z" />
                                            <path data-id="A-105" class="st2 " d="M616,176.6l18.8,0.6l19.1-52.3l-18.4-0.6L616,176.6z" />
                                            <path data-id="A-106" class="st2 " d="M673,125.8l-19.1-0.9l-19.1,52.3l18.9,0.9L673,125.8z" />
                                            <path data-id="A-107" class="st2 " d="M653.5,178.4l18.3,0.5l19.6-52.1l-18.4-0.9L653.5,178.4z" />
                                            <path data-id="A-108" class="st2 " d="M691.2,126.9l-19.6,52l18.9,0.9l19.6-52.1L691.2,126.9z" />
                                            <path data-id="A-109" class="st2 " d="M710.5,127.8l18.3,0.9l-19.4,52.1l-18.6-0.9L710.5,127.8z" />
                                            <path data-id="A-110" class="st2 " d="M708.7,180.8l18.4,0.6l19.1-51.5l-18.1-1.2L708.7,180.8z" />
                                            <path data-id="A-111" class="st2 " d="M727.8,181.4l18.8,0.8l19.3-52l-18.8-0.3L727.8,181.4z" />
                                            <path data-id="A-112" class="st2 " d="M746.5,182.3l18.8,0.8l19.3-51.7l-18.8-1.2L746.5,182.3z" />
                                            <path data-id="A-113" class="st2 " d="M765,183.1l4.2,1.2l7.2,2.6l4.5,3l3.4,3.8l2.3,5.9l1,5.6l0.3,1.5l16.3-42.7l-0.8-1.5l-0.7-1.4l-1.8-0.3l-2.2-1.4l-1.2-1.5l-0.7-2.1V154l0.2-1.5l0.5-1.1l0.5-0.6l-9.4-19.2l-4.2-0.2L765,183.1z" />
                                            <path data-id="A-114" class="st2 " d="M785.5,214.5l-9.5,26.2l-23.2-1.2l4.8-13.2l13-0.8l3.3-0.8l2.8-2.3l3-2.9l5.2-5.5L785.5,214.5z" />
                                            <path data-id="A-115" class="st2 " d="M753,239.5l-6.3,17l23.3,0.9l6.3-16.8L753,239.5z" />
                                            <path data-id="A-116" class="st2 " d="M746.5,256.6l23.3,0.9l-6.5,17.4l-23.2-1.2L746.5,256.6z" />
                                            <path data-id="A-117" class="st2 " d="M740,273.7l-6.3,17.1l23.5,1.2l6.2-17L740,273.7z" />
                                            <path data-id="A-118" class="st2 " d="M733.7,290.8l23.3,1.2l-6.3,17.3l-23.5-0.9L733.7,290.8z" />
                                            <path data-id="A-119" class="st2 " d="M750.7,309.2l-6.5,17.4l-23.3-1.4l6.3-17.1L750.7,309.2z" />
                                            <path data-id="A-120" class="st2 " d="M721,325.4l-6.5,17.3l23.7,0.9l6.2-17L721,325.4z" />
                                            <path data-id="A-121" class="st2 " d="M714.5,342.7l-6.3,17.1l23.7,1.1l6.3-17.1L714.5,342.7z" />
                                            <path data-id="A-122" class="st2 " d="M708.2,359.6l-6.2,17l23.5,0.9l6.3-17L708.2,359.6z" />
                                            <path data-id="A-123" class="st2 " d="M702,376.6l23.5,0.9l-6.3,17.7l-23.7-1.2L702,376.6z" />
                                            <path data-id="A-124" class="st2 " d="M695.5,394.2l23.5,1.2l-6.5,17.4l-23.8-1.1L695.5,394.2z" />
                                            <path data-id="A-125" class="st2 " d="M688.9,411.6l23.7,1.1l-6.3,17.3l-23.8-1.2L688.9,411.6z" />
                                            <path data-id="A-126" class="st2 " d="M682.5,428.7l23.8,1.2l-6.3,17l-23.7-1.4L682.5,428.7z" />
                                            <path data-id="A-127" class="st2 " d="M676.4,445.6l-6.3,17.1l24,0.8l6-16.7L676.4,445.6z" />
                                            <path data-id="A-89" class="st2 " d="M689.2,200.5l-7.3,19.5l52.2,2.6l3-7.7l0.2-2.7l-0.8-2.6l-1.2-2.3l-1.5-1.8l-2.2-1.5l-3.3-1.7L689.2,200.5z" />
                                            <path data-id="A-88" class="st2 " d="M682,220.1l52.2,2.6l-6.7,17.9l-52.3-2.9L682,220.1z" />
                                            <path data-id="A-87" class="st2 " d="M675.4,237.5l-6.3,17.1l52.5,2.3l6-16.5L675.4,237.5z" />
                                            <path data-id="A-86" class="st2 " d="M669.2,254.8l52.3,2.3l-6.3,17.3l-52.3-2.6L669.2,254.8z" />
                                            <path data-id="A-85" class="st2 " d="M662.9,271.8l-6.5,17.4l52.5,2.4l6.5-17.3L662.9,271.8z" />
                                            <path data-id="A-84" class="st2 " d="M656.5,289.2L650,306l52.8,2.4l6.2-16.7L656.5,289.2z" />
                                            <path data-id="A-83" class="st2 " d="M650,305.8l52.7,2.4l-6.8,18.2l-52.5-2.9L650,305.8z" />
                                            <path data-id="A-82" class="st2 " d="M643.7,323.4l52.3,2.9l-6,16.5l-52.7-2.6L643.7,323.4z" />
                                            <path data-id="A-81" class="st2 " d="M637.4,340.4L690,343l-6.3,17.4l-53-2.7L637.4,340.4z" />
                                            <path data-id="A-80" class="st2 " d="M630.9,357.7l52.8,2.6l-6.5,17.4l-52.8-2.7L630.9,357.7z" />
                                            <path data-id="A-79" class="st2 " d="M624.4,374.9l-6.2,17.1l52.7,2.4l6.3-16.8L624.4,374.9z" />
                                            <path data-id="A-243" class="st2 " d="M556.8,741.5l0.2,32.9l18.6-0.6l19.6-52h-12.2l-0.8,3l-0.8,2.6l-1.7,3.9l-3,3.8l-3.5,3l-4,1.8l-4,1.4l-6,0.5L556.8,741.5z" />
                                            <path data-id="A-242" class="st2 " d="M528.3,722.1l0.3,52.3h28.4l-0.2-32.9l-2.9-0.3l-3.5-1.2l-3-1.8l-3.5-2.6l-3.5-4.1l-2.9-3.5l-1.8-2.6l-1-1.7l-1.3-1.5l-2-0.3L528.3,722.1z" />
                                            <path data-id="A-216" class="st2 " d="M510.8,721.8l17.4,0.3l0.3,52.3h-17.8V721.8z" />
                                            <path data-id="A-217" class="st2 " d="M493,722l17.8-0.2v52.6h-18L493,722z" />
                                            <path data-id="A-218" class="st2 " d="M474.9,721.7l18,0.3l-0.2,52.4l-18-0.2L474.9,721.7z" />
                                            <path data-id="A-78" class="st2 " d="M618.4,392.1l-6.5,17.4l52.8,2.3l6.3-17.1L618.4,392.1z" />
                                            <path data-id="A-77" class="st2 " d="M605.5,426.3l6.3-17l52.8,2.3l-6.5,17L605.5,426.3z" />
                                            <path data-id="A-76" class="st2 " d="M605.5,426.3l-6.5,17.4l53.2,2.3l6.2-17.3L605.5,426.3z" />
                                            <path data-id="A-75" class="st2 " d="M599.2,443.6l-6.5,17.4l47.2,3.3l3-0.9l1.2-0.6l1.3-1.1l1.5-1.5l0.7-1.4l0.3-0.8l4.3-12.3L599.2,443.6z" />
                                            <path data-id="A-60" class="st2 " d="M545.4,440.4l54,2.4l-6.7,18.2l-42.8-2.9l-2.8-0.9l-1.5-1.5l-0.8-0.8l-0.7-1.4l-0.7-1.7l-0.2-1.7V449v-1.5l0.2-1.5L545.4,440.4z" />
                                            <path data-id="A-61" class="st2 " d="M551.7,423.3l-6.3,17.1l54,2.4l6.2-16.4L551.7,423.3z" />
                                            <path data-id="A-62" class="st2 " d="M605.5,426.3l6.3-17l-54-2.9l-6.2,16.7L605.5,426.3z" />
                                            <path data-id="A-63" class="st2 " d="M618.5,391.3l-6.7,18l-54-2.9l6.7-17.7L618.5,391.3z" />
                                            <path data-id="A-64" class="st2 " d="M624.7,374.2l-6.2,17.1l-54.2-2.6l6-17.1L624.7,374.2z" />
                                            <path data-id="A-65" class="st2 " d="M570.5,371.6l54.3,2.6l6.7-17.6l-31-1.4l-23.8-1.1L570.5,371.6z" />
                                            <path data-id="A-66" class="st2 " d="M637.4,339.9l-6,16.7l-54.8-2.6l6.3-16.8L637.4,339.9z" />
                                            <path data-id="A-67" class="st2 " d="M637.4,339.9l6.7-17.6l-54.8-2.6l-6.3,17.4L637.4,339.9z" />
                                            <path data-id="A-68" class="st2 " d="M650.4,305.1l-6.3,17.4l-54.8-2.6l6.3-17.3L650.4,305.1z" />
                                            <path data-id="A-69" class="st2 " d="M650.4,305.1L657,288l-55.3-2.4l-6.2,17L650.4,305.1z" />
                                            <path data-id="A-70" class="st2 " d="M663.2,271l-6.3,17.1l-55.3-2.4l6.3-17.3L663.2,271z" />
                                            <path data-id="A-71" class="st2 " d="M669.7,253.7l-6.5,17.3l-55.2-2.6l6.3-17.3L669.7,253.7z" />
                                            <path data-id="A-72" class="st2 " d="M675.5,236.9l-6,16.8l-55.3-2.7l6.2-17L675.5,236.9z" />
                                            <path data-id="A-73" class="st2 " d="M681.9,219.6l-6.7,17.6l-55-2.9l6.5-17.4L681.9,219.6z" />
                                            <path data-id="A-74" class="st2 " d="M689.2,200.5l-7,18.6l-55.3-2.7l2.7-7.1l1.2-2.1l2.2-2.6l1.7-1.5l2.7-1.7l3.2-1.1l2.2-0.6l2.5-0.6l0.8-0.8L689.2,200.5z" />
                                            <path data-id="A-49" class="st2 " d="M491.5,367.8l-6.5,17.7l37.3,1.7l1.3-1.7l1.2-1.1l1.7-1.1l2.7-0.9l3-0.2l2,0.3l2,0.9l1.3,0.9l1.2,1.1l0.8,1.2l0.8,1.4l6.7-17.9L491.5,367.8z" />
                                            <path data-id="A-50" class="st2 " d="M553.7,353.1l-6.5,17.3l-55.7-2.6l6-16.8L553.7,353.1z" />
                                            <path data-id="A-51" class="st2 " d="M560.2,335.7l-6.5,17.4l-56.3-2.1l6.7-17.9L560.2,335.7z" />
                                            <path data-id="A-52" class="st2 " d="M510.5,316l-6.5,17.1l56,2.6l6.5-17.3L510.5,316z" />
                                            <path data-id="A-53" class="st2 " d="M516.8,299l-6.2,17l56.2,2.4l6.2-17L516.8,299z" />
                                            <path data-id="A-54" class="st2 " d="M523,281.6l-6.2,17.4l56.2,2.6l6.7-17.3L523,281.6z" />
                                            <path data-id="A-55" class="st2 " d="M529.3,264.8l-6.3,16.8l56.5,2.6l6.5-16.8L529.3,264.8z" />
                                            <path data-id="A-56" class="st2 " d="M535.8,247.2l-6.5,17.6l56.7,2.6l6.3-17.6L535.8,247.2z" />
                                            <path data-id="A-57" class="st2 " d="M535.8,247.4l56.5,2.6l6.5-17l-56.8-2.4L535.8,247.4z" />
                                            <path data-id="A-58" class="st2 " d="M605.2,216l-6.5,17l-56.8-2.4l6.5-17.1L605.2,216z" />
                                            <path data-id="A-59" class="st2 " d="M555.3,194.5l-7,18.9l56.8,2.6l2.2-6.2l0.2-2.1l-0.7-2.6l-1-2.3l-2.3-2.7l-2.2-1.4l-1.2-0.8l-3.3-1.7L555.3,194.5z" />
                                            <path data-id="A-48" class="st2 " d="M555.3,194.5l-7.2,19.7l-57-2.6l4.2-11.1l2-2.9l2.3-2.3l3.3-1.7l3-0.5l4.7,0.2l1-0.2l0.2-0.8L555.3,194.5z" />
                                            <path data-id="A-47" class="st2 " d="M548.2,214.2l-6.5,17.1l-56.5-2.6l6.2-17.1L548.2,214.2z" />
                                            <path data-id="A-46" class="st2 " d="M535.7,247.7l6-16.2l-56.5-2.6l-6,16.5L535.7,247.7z" />
                                            <path data-id="A-45" class="st2 " d="M529,265.7l6.7-18l-56.5-2.3l-6.3,17.9L529,265.7z" />
                                            <path data-id="A-44" class="st2 " d="M529,265.7l-6.3,17l-56.2-2.6l6-16.8L529,265.7z" />
                                            <path data-id="A-43" class="st2 " d="M522.8,282.5l-6.2,17.4l-56.2-2.7l6.3-17.3L522.8,282.5z" />
                                            <path data-id="A-42" class="st2 " d="M516.5,299.9l-6.2,17.1l-56.3-2.7l6.3-17L516.5,299.9z" />
                                            <path data-id="A-41" class="st2 " d="M510.3,316.9l-6.5,17.4l-55.8-2.9l6-17.3L510.3,316.9z" />
                                            <path data-id="A-40" class="st2 " d="M503.7,334.3l-6.3,16.8l-5.3,0.3l-1.2-2.3l-1.8-2l-2.2-1.4l-3-0.8h-3.2l-2.3,0.6l-2.3,1.4l-1.8,1.5l-1,1.8l-31.3-1.4l6.2-17.4L503.7,334.3z" />
                                            <path data-id="A-128" class="st2 " d="M526.7,564.8l54.2,0.2v18.5l-54.2-0.2V564.8z" />
                                            <path data-id="A-129" class="st2 " d="M581,583.6l0.2,17.4l-54.2-0.3v-17.1H581z" />
                                            <path data-id="A-130" class="st2 " d="M581,601l0.2,17.6l-54.3-0.3v-17.6L581,601z" />
                                            <path data-id="A-131" class="st2 " d="M581,635.9l0.2-17.4l-54.3-0.3v17.4L581,635.9z" />
                                            <path data-id="A-132" class="st2 " d="M580.8,635.7v17.7l-53.8-0.2l-0.2-17.7L580.8,635.7z" />
                                            <path data-id="A-133" class="st2 " d="M581.2,670.7l-0.2-17.3l-53.8-0.2v17.4H581.2z" />
                                            <path data-id="A-134" class="st2 " d="M581.2,670.7l-0.2,17.7l-54.2-0.3l0.2-17.4H581.2z" />
                                            <path data-id="A-135" class="st2 " d="M526.8,688l54.2,0.3V717l-1.2-4.5l-1.5-2.3l-2.7-2.3l-2.5-1.4l-4-0.9l-3-0.3h-33.7l-2-0.6l-1.2-0.8l-1.3-1.5l-0.5-0.9l-0.3-1.5v-12H526.8z" />
                                            <path data-id="A-219" class="st2 " d="M475.1,721.7h-18v52.6l17.6,0.2L475.1,721.7z" />
                                            <path data-id="A-220" class="st2 " d="M457.3,721.7l-19.6,0.2l0.3,52.6l19.1-0.2L457.3,721.7z" />
                                            <path data-id="A-221" class="st2 " d="M437.8,721.8L418,722l-0.2,52.4l20,0.2L437.8,721.8L437.8,721.8z" />
                                            <path data-id="A-223" class="st2 " d="M418,721.8l-20.1-0.3l0.2,52.7l19.8,0.3L418,721.8z" />
                                            <path data-id="A-224" class="st2 " d="M398.1,722v52.4l-19.8-0.2v-52.6L398.1,722z" />
                                            <path data-id="A-225" class="st2 " d="M358.5,722l20.1,0.2l-0.2,52.4h-20V722z" />
                                            <path data-id="A-226" class="st2 " d="M358.8,722.1l-0.3,52.4l-19.6-0.2v-52.3H358.8z" />
                                            <path data-id="A-227" class="st2 " d="M338.3,721.8l0.7,52.6l-20.5,0.2l0.3-52.6L338.3,721.8z" />
                                            <path data-id="A-228" class="st2 " d="M299.4,721.5l19.5,0.3l0.3,52.6h-20.1L299.4,721.5z" />
                                            <path data-id="A-229" class="st2 " d="M279.3,722h20.1v52.1h-20.3L279.3,722z" />
                                            <path data-id="A-230" class="st2 " d="M259.5,721.8h19.5v52.3l-19.6,0.3L259.5,721.8z" />
                                            <path data-id="A-231" class="st2 " d="M259.5,722l0.3,52.3h-20l-0.2-52.4L259.5,722z" />
                                            <path data-id="A-232" class="st2 " d="M219.9,722l20.1,0.2v52.4h-20.1L219.9,722z" />
                                            <path data-id="A-233" class="st2 " d="M219.7,722l0.5,52.6l-19.8-0.2l-0.2-52.4H219.7z" />
                                            <path data-id="A-234" class="st2 " d="M200.1,722.1l0.2,52.3l-20.3,0.3l0.2-53L200.1,722.1z" />
                                            <path data-id="A-235" class="st2 " d="M160.8,774.1l19.1,0.3v-53h-19.3L160.8,774.1z" />
                                            <path data-id="A-236" class="st2 " d="M160.3,721.8l0.2,52.4l-19.8,0.2v-52.6H160.3z" />
                                            <path data-id="A-237" class="st2 " d="M141.4,774.5h-20.6V722l20-0.2L141.4,774.5z" />
                                            <path data-id="A-238" class="st2 " d="M120.4,722v52.6h-20l-0.2-52.9L120.4,722z" />
                                            <path data-id="A-240" class="st2 " d="M82.6,721.8l17.4-0.2l0.2,52.9l-18,0.2L82.6,721.8z" />
                                            <path data-id="A-241" class="st2 " d="M83,721.7H64.5l0.2,53.2l17.6-0.2L83,721.7z" />
                                            <path data-id="A-137" class="st2 " d="M452,682.9v18.2l46-0.3l2.2-0.3l1.8-1.4l1.7-1.4l1.2-2.3l0.7-2.1v-10.6L452,682.9z" />
                                            <path data-id="A-138" class="st2 " d="M505.3,665v17.9l-53.2-0.2v-17.6L505.3,665z" />
                                            <path data-id="A-139" class="st2 " d="M505.3,648v17l-53.2,0.3l-0.2-17.6L505.3,648z" />
                                            <path data-id="A-140" class="st2 " d="M452.2,630.3l-0.3,17.4l53.3,0.2l0.2-17.6H452.2z" />
                                            <path data-id="A-141" class="st2 " d="M505.5,613v17.3h-53.2l-0.2-17.4L505.5,613z" />
                                            <path data-id="A-142" class="st2 " d="M505.5,595.6V613l-53.3-0.2v-17.4L505.5,595.6z" />
                                            <path data-id="A-143" class="st2 " d="M452.2,578.3v17.3l53.3,0.2V578L452.2,578.3z" />
                                            <path data-id="A-144" class="st2 " d="M452,560.4v17.7l53.3-0.5v-17.3L452,560.4z" />
                                            <path data-id="A-145" class="st2 " d="M452,542.2v17.6l53.3,0.2l-0.2-17.6L452,542.2z" />
                                            <path data-id="A-156" class="st2 " d="M397.9,507.5l54.7-0.2v18.9l-54.7-0.3V507.5z" />
                                            <path data-id="A-155" class="st2 " d="M452.2,543l0.2-16.7l-54.7-0.3v16.8L452.2,543z" />
                                            <path data-id="A-154" class="st2 " d="M452.2,543l-0.2,17.4h-54.2v-17.6L452.2,543z" />
                                            <path data-id="A-153" class="st2 " d="M452.2,560.6v17.7l-54.3-0.2v-17.7L452.2,560.6z" />
                                            <path data-id="A-152" class="st2 " d="M452.2,595.6v-17.4l-54.3-0.2v17.6H452.2z" />
                                            <path data-id="A-151" class="st2 " d="M452.2,595.7L452.2,595.7v17.1l-54.3,0.2v-17.3H452.2z" />
                                            <path data-id="A-150" class="st2 " d="M451.4,612.9l0.2,17.4l-54.3,0.3v-17.7H451.4z" />
                                            <path data-id="A-149" class="st2 " d="M452.5,630.4l-0.3,17.4l-54,0.2v-17.3L452.5,630.4z" />
                                            <path data-id="A-148" class="st2 " d="M452,647.7v17.7l-54.2,0.2V648L452,647.7z" />
                                            <path data-id="A-147" class="st2 " d="M398,665.4v18.2l54.2-0.2v-18.2L398,665.4z" />
                                            <path data-id="A-146" class="st2 " d="M452.2,683.6l-0.2,17.6l-46.5-0.5l-1.7-0.6l-1.7-1.2l-1.8-1.7l-1.2-1.8l-0.8-2.3l-0.3-1.8v-7.6L452.2,683.6z" />
                                            <path data-id="A-169" class="st2 " d="M323.5,472.7l53.5-0.2V491l-53.7-0.2L323.5,472.7z" />
                                            <path data-id="A-168" class="st2 " d="M376.9,490.9l0.2,17.7l-53.7-0.2v-17.6H376.9z" />
                                            <path data-id="A-167" class="st2 " d="M376.9,508.6v17.7l-53.2-0.6l-0.3-17.3L376.9,508.6z" />
                                            <path data-id="A-166" class="st2 " d="M377,543.6v-17.3l-53.2-0.6l-0.3,17.9H377z" />
                                            <path data-id="A-165" class="st2 " d="M377,543.6v17.3h-53.7v-17.3H377z" />
                                            <path data-id="A-164" class="st2 " d="M377,578.5v-17.6h-53.7l-0.2,17.6H377z" />
                                            <path data-id="A-163" class="st2 " d="M377,578.3v17.6l-53.5,0.2l-0.3-17.4L377,578.3z" />
                                            <path data-id="A-162" class="st2 " d="M323.5,595.7l53.5,0.2V613l-53.7,0.2L323.5,595.7z" />
                                            <path data-id="A-161" class="st2 " d="M376.9,630.4V613l-53.7,0.2v17.4L376.9,630.4z" />
                                            <path data-id="A-160" class="st2 " d="M377,648.3v-17.9l-53.7,0.2v17.6L377,648.3z" />
                                            <path data-id="A-159" class="st2 " d="M377,665.7v-17.4l-53.7-0.2v17.7H377V665.7z" />
                                            <path data-id="A-158" class="st2 " d="M377,683.3v-17.6h-53.7v17.6H377z" />
                                            <path data-id="A-157" class="st2 " d="M323.4,683.3H377v10.6l-0.7,2.6l-0.8,1.4l-1.2,1.4l-2,1.2l-1.5,0.5l-1.8,0.5h-45.5v-18H323.4z" />
                                            <path data-id="A-183" class="st2 " d="M269.4,455h54.5l-0.3,17.7l-54,0.2V455H269.4z" />
                                            <path data-id="A-182" class="st2 " d="M269.5,472.8l54-0.2l-0.2,18.2l-54.2,0.2L269.5,472.8z" />
                                            <path data-id="A-181" class="st2 " d="M269.7,508.5l53.7-0.2v-17.6l-54.2,0.2L269.7,508.5z" />
                                            <path data-id="A-180" class="st2 " d="M269.5,526.2l54.3-0.6l-0.3-17.3l-53.7,0.2L269.5,526.2z" />
                                            <path data-id="A-179" class="st2 " d="M323.5,543.6l0.2-17.9l-54.3,0.6v17.1L323.5,543.6z" />
                                            <path data-id="A-178" class="st2 " d="M269.5,543.6h54.2l-0.2,17.4l-54-0.2L269.5,543.6L269.5,543.6z" />
                                            <path data-id="A-177" class="st2 " d="M269.5,578.3v-17.4l54,0.2l-0.2,17.6L269.5,578.3z" />
                                            <path data-id="A-176" class="st2 " d="M269.5,595l54.2,0.2l-0.3-17.3l-53.8-0.3V595z" />
                                            <path data-id="A-175" class="st2 " d="M269.5,595.6l54.2,0.2l-0.3,17.4h-53.8V595.6z" />
                                            <path data-id="A-174" class="st2 " d="M269.5,613.2h53.7v17.4l-53.8,0.2v-17.6H269.5z" />
                                            <path data-id="A-173" class="st2 " d="M269.5,647.9v-17.1l53.8-0.2v17.6L269.5,647.9z" />
                                            <path data-id="A-172" class="st2 " d="M269.7,648l53.7,0.2v17.7h-53.8L269.7,648z" />
                                            <path data-id="A-171" class="st2 " d="M323.4,665.7v17.6l-53.8-0.3v-17.3H323.4z" />
                                            <path data-id="A-170" class="st2 " d="M323.4,683.3v18.2l-45-0.2l-2-0.6l-1.7-0.9l-1.2-0.8l-1.2-1.1l-0.7-0.9l-0.7-1.2l-0.7-1.2l-0.5-0.9l-0.3-1.4V683L323.4,683.3z" />
                                            <path data-id="A-195" class="st2 " d="M194.7,489.5l54.3,0.3V508l-54.3-0.2V489.5z" />
                                            <path data-id="A-194" class="st2 " d="M249,526.2v-18l-54.3-0.2l-0.2,18.2H249z" />
                                            <path data-id="A-193" class="st2 " d="M249,542.9v-16.7h-54.5V543L249,542.9z" />
                                            <path data-id="A-192" class="st2 " d="M249,542.9v17.9l-54.3-0.3V543L249,542.9z" />
                                            <path data-id="A-191" class="st2 " d="M249,578.2v-17.6l-54.3-0.3v17.6L249,578.2z" />
                                            <path data-id="A-190" class="st2 " d="M249,595.4v-17.3l-54.3-0.2v17.4H249z" />
                                            <path data-id="A-189" class="st2 " d="M249.2,612.9l-0.2-17.4l-54.3-0.2v17.4L249.2,612.9z" />
                                            <path data-id="A-188" class="st2 " d="M249.2,612.7l-0.2,17.9l-54.3-0.3v-17.6L249.2,612.7L249.2,612.7z" />
                                            <path data-id="A-187" class="st2 " d="M194.7,630.3l54.3,0.3V648l-54.2-0.2L194.7,630.3z" />
                                            <path data-id="A-186" class="st2 " d="M194.9,647.7l0.2,17.4l54.2-0.2v-17L194.9,647.7z" />
                                            <path data-id="A-185" class="st2 " d="M195,665v18l53.8-0.2v-18L195,665z" />
                                            <path data-id="A-184" class="st2 " d="M249,682.9v8.8l-0.3,2.3l-1.3,2.4l-2.2,2.3l-1.5,0.9l-2.7,0.8l-45.7,0.3l-0.2-17.4L249,682.9z" />
                                            <path data-id="A-196" class="st2 " d="M195.4,682.3l-0.2,18.2l-45.7,0.2l-2.7-0.6l-1.5-1.1l-1.2-0.8l-0.7-0.8l-0.8-1.1l-0.5-0.9l-0.5-1.2l-0.3-1.7v-10.3H195.4z" />
                                            <path data-id="A-197" class="st2 " d="M195,664.1l0.3,18l-54,0.2v-18H195V664.1z" />
                                            <path data-id="A-198" class="st2 " d="M194.9,646.8l0.2,17.4h-53.5v-17.4H194.9z" />
                                            <path data-id="A-199" class="st2 " d="M141.5,629.4l53.3-0.2v17.6h-53.3V629.4z" />
                                            <path data-id="A-200" class="st2 " d="M141.9,612l52.8,0.8l0.2,16.7l-53.3,0.2L141.9,612z" />
                                            <path data-id="A-201" class="st2 " d="M141.5,594.8l0.2,17.1l52.8,0.8v-18.3L141.5,594.8z" />
                                            <path data-id="A-202" class="st2 " d="M194.9,577.2v17.1l-53.3,0.5v-17.7L194.9,577.2z" />
                                            <path data-id="A-203" class="st2 " d="M141.5,559.5h53.2v17.7l-53.2-0.2V559.5z" />
                                            <path data-id="A-204" class="st2 " d="M141.5,542.2v17.1h53.2v-17.4L141.5,542.2z" />
                                            <path data-id="A-205" class="st2 " d="M194.7,542.2h-53.2l0.2-17.1h52.8L194.7,542.2z" />
                                            <path data-id="A-215" class="st2 " d="M64.5,524.8l2,0.5l2.2,0.2l1.5-0.5l2-0.8l46.8,0.2v18.5l-54.5-0.2V524.8z" />
                                            <path data-id="A-214" class="st2 " d="M64.5,542.7l54.5,0.2v17.4l-54.5-0.2V542.7z" />
                                            <path data-id="A-213" class="st2 " d="M64.5,560l54.5,0.2v17.7l-54.3-0.3L64.5,560z" />
                                            <path data-id="A-212" class="st2 " d="M64,577.4l54.3,0.5v17.3L63.9,595L64,577.4z" />
                                            <path data-id="A-211" class="st2 " d="M64.5,594.8l54.5,0.3v17.7l-54.5-0.5V594.8z" />
                                            <path data-id="A-210" class="st2 " d="M64.5,612.4l54.3,0.5V630l-54.5-0.2L64.5,612.4z" />
                                            <path data-id="A-209" class="st2 " d="M64.5,629.8l54.5,0.3v17.4l-54.5,0.2V629.8z" />
                                            <path data-id="A-208" class="st2 " d="M119,647.4l0.2,17.9l-54.7-0.2v-17.6L119,647.4z" />
                                            <path data-id="A-207" class="st2 " d="M119,664.8v17.6l-54.3,0.2L64.5,665L119,664.8z" />
                                            <path data-id="A-206" class="st2 " d="M119,682.7v9.2l-0.5,2.3l-1,1.8l-1.2,1.4l-2.2,1.4l-1.8,0.6l-48,0.2l0.2-16.8H119z" />
                                        </g>
                                        <g>
                                            <path id="Casa_Club" class="st2" d="M400.7,384.4l2.9-5.7l9.8-19.1l16,11.6l-2.4,18.3l52.1,46.1l21.9,24.8l-20,24.8l-14.3-8.5
                                                    l-28.4-18.1l-26.6-14.1l-30.5-12l-31.6-7.8l-31.4-6.7l-29-4.9l4.6-44.6c24.2-0.9,24.2-0.9,24.2-0.9l8.2-0.8L400.7,384.4z" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="auto" data-bs-html="true" data-bs-content="Casa Club" />
                                            <polygon id="Entrada_distintiva" class="st2" points="592.3,494.9 619,491 637.3,555.1 612,560 " data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="auto" data-bs-html="true" data-bs-content="Entrada_distintiva" />
                                        </g>
                                    </svg>
                                </div>
                                <div class="leyend-status d-flex flex-row justify-content-around text-center fw-bold text-white mt-3">
                                    <div class="text-uppercase small bg-sold rounded-pill px-2"><?= lang('Globals.sold') ?></div>
                                    <div class="text-uppercase small bg-available rounded-pill px-2"><?= lang('Globals.available') ?></div>
                                    <div class="text-uppercase small bg-reserved rounded-pill px-2"><?= lang('Globals.reserved') ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border border-success my-4" id="header2">
                        <h2 class="accordion-header border-bottom border-success" id="heading-2">
                            <button class="accordion-button px-4 <?php if ($projectStage == 2) {
                                                                        echo "";
                                                                    } else {
                                                                        echo "collapsed";
                                                                    } ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" title="Click para ver detalles y mapa">
                                <div class="container table-responsive-md">
                                    <table class="table table-sm table-borderless caption-top">
                                        <caption class="h1 fw-bold text-center text-success text-nowrap"><?= lang('Globals.stage') ?>-2</caption>
                                        <thead>
                                            <tr>
                                                <th scope="col" class="h5 available-title text-center"><?= lang('Globals.total_lots') ?></th>
                                                <th scope="col" class="h5 available-title text-center"><?= lang('Globals.available') ?></th>
                                                <th scope="col" class="h5 available-title text-center"><?= lang('Globals.delivered') ?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="display-4 fw-bold text-center">161</td>
                                                <td class="display-4 fw-bold text-center" id="available-2"></td>
                                                <td class="display-4 fw-bold text-center">2025</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse <?php if ($projectStage == 2) {
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
                                                    <h4 class="fw-bold text-success mb-0 price-header"><?= lang('Globals.price_per_m') ?> M<small><sup>2</sup></small></h4>
                                                </div>
                                                <div class="card-body pb-0">
                                                    <div class="row d-flex justify-content-center ">
                                                        <div class="col-12 table-responsive">
                                                            <table class="table table-sm table-bordered text-nowrap border-2 text-left">
                                                                <thead>
                                                                    <tr>
                                                                        <th scope="col" class="h5 available-title text-center"><?= ucwords(lang('Globals.months')) ?></th>
                                                                        <th scope="col" class="h5 available-title text-center">1</th>
                                                                        <th scope="col" class="h5 available-title text-center">12</th>
                                                                        <th scope="col" class="h5 available-title text-center">24</th>
                                                                        <th scope="col" class="h5 available-title text-center">36</th>
                                                                        <th scope="col" class="h5 available-title text-center">48</th>
                                                                        <th scope="col" class="h5 available-title text-center">60</th>
                                                                        <th scope="col" class="h5 available-title text-center">72</th>
                                                                        <th scope="col" class="h5 available-title text-center">80</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="h5 available-title text-left"><?= lang('Globals.premiun_lot') ?></td>
                                                                        <td class="h5 available-title text-center">$2,050</td>
                                                                        <td class="h5 available-title text-center">$2,135</td>
                                                                        <td class="h5 available-title text-center">$2,120</td>
                                                                        <td class="h5 available-title text-center">$2,310</td>
                                                                        <td class="h5 available-title text-center">$2,400</td>
                                                                        <td class="h5 available-title text-center">$2,500</td>
                                                                        <td class="h5 available-title text-center">$2,600</td>
                                                                        <td class="h5 available-title text-center">$2,700</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="h5 available-title text-left"><?= lang('Globals.plus_lot') ?></td>
                                                                        <td class="h5 available-title text-center">$1,950</td>
                                                                        <td class="h5 available-title text-center">$2,030</td>
                                                                        <td class="h5 available-title text-center">$2,110</td>
                                                                        <td class="h5 available-title text-center">$2,195</td>
                                                                        <td class="h5 available-title text-center">$2,300</td>
                                                                        <td class="h5 available-title text-center">$2,375</td>
                                                                        <td class="h5 available-title text-center">$2,470</td>
                                                                        <td class="h5 available-title text-center">$2,570</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="h5 available-title text-left"><?= lang('Globals.standard_lot') ?></td>
                                                                        <td class="h5 available-title text-center">$1,850</td>
                                                                        <td class="h5 available-title text-center">$1,925</td>
                                                                        <td class="h5 available-title text-center">$2,000</td>
                                                                        <td class="h5 available-title text-center">$2,085</td>
                                                                        <td class="h5 available-title text-center">$2,170</td>
                                                                        <td class="h5 available-title text-center">$2,250</td>
                                                                        <td class="h5 available-title text-center">$2,350</td>
                                                                        <td class="h5 available-title text-center">$2,450</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <p class="text-center mx-auto my-1"><?= lang('Globals.enganche') ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-xxl py-1 px-0">
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
                                                                        <th scope="col" class="h5 available-title text-center">1</th>
                                                                        <th scope="col" class="h5 available-title text-center">12</th>
                                                                        <th scope="col" class="h5 available-title text-center">24</th>
                                                                        <th scope="col" class="h5 available-title text-center">36</th>
                                                                        <th scope="col" class="h5 available-title text-center">48</th>
                                                                        <th scope="col" class="h5 available-title text-center">60</th>
                                                                        <th scope="col" class="h5 available-title text-center">72</th>
                                                                        <th scope="col" class="h5 available-title text-center">80</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td class="h5 available-title text-left"><?= lang('Globals.premiun_lot') ?></td>
                                                                        <td class="h5 available-title text-center">$615,000</td>
                                                                        <td class="h5 available-title text-center">$640,500</td>
                                                                        <td class="h5 available-title text-center">$636,000</td>
                                                                        <td class="h5 available-title text-center">$693,000</td>
                                                                        <td class="h5 available-title text-center">$720,000</td>
                                                                        <td class="h5 available-title text-center">$750,000</td>
                                                                        <td class="h5 available-title text-center">$780,000</td>
                                                                        <td class="h5 available-title text-center">$810,000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="h5 available-title text-left"><?= lang('Globals.plus_lot') ?></td>
                                                                        <td class="h5 available-title text-center">$585,000</td>
                                                                        <td class="h5 available-title text-center">$609,000</td>
                                                                        <td class="h5 available-title text-center">$633,000</td>
                                                                        <td class="h5 available-title text-center">$658,500</td>
                                                                        <td class="h5 available-title text-center">$690,000</td>
                                                                        <td class="h5 available-title text-center">$712,500</td>
                                                                        <td class="h5 available-title text-center">$741,000</td>
                                                                        <td class="h5 available-title text-center">$771,000</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="h5 available-title text-left"><?= lang('Globals.standard_lot') ?></td>
                                                                        <td class="h5 available-title text-center">$555,000</td>
                                                                        <td class="h5 available-title text-center">$577,500</td>
                                                                        <td class="h5 available-title text-center">$600,000</td>
                                                                        <td class="h5 available-title text-center">$625,500</td>
                                                                        <td class="h5 available-title text-center">$651,000</td>
                                                                        <td class="h5 available-title text-center">$675,000</td>
                                                                        <td class="h5 available-title text-center">$705,000</td>
                                                                        <td class="h5 available-title text-center">$735,000</td>
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
                                <div class="loader-container text-center mb-2">
                                    <span class="mdi mdi-vanish mdi-spin"></span>
                                    <?= lang('Globals.loading') ?> <?= lang('Globals.image') ?>...
                                </div>
                                <div class="d-flex justify-content-center">
                                    <img src="<?= STATIC_URL . 'img/wind-rose_' . $lang . '.svg' ?>" alt="Brujula" height="80px" width="80px" style="transform: rotate(-90deg);">
                                </div>
                                <div class="row mt-2">
                                    <p class="small fw-bolder text-center"><?= lang('Globals.for_information') ?> <span class="mouse-touche"><?= lang('Globals.hover_mouse') ?> </span><?= lang('Globals.over_lot') ?></p>
                                </div>
                                <div class="container mapsvg-scrollpane text-center" style="max-width: 900px; min-height: 300px;  ">
                                    <svg id="stage-02" viewBox="100 0 900 900" preserveAspectRatio="xMidYMid meet" style="display: inline; width: inherit; min-width: inherit; max-width: inherit; height: inherit; min-height: inherit; max-height: inherit;">
                                        <defs>
                                            <style>
                                                .st0 {
                                                    fill: rgba(136, 194, 117);
                                                    stroke: rgba(23, 149, 83);
                                                    stroke-width: 1.97368px;
                                                }

                                                .st2 {
                                                    fill: rgba(0, 0, 0, 0.1);
                                                }

                                                .cls-1,
                                                .cls-6 {
                                                    fill: none;
                                                }

                                                .cls-1 {
                                                    fill-rule: evenodd;
                                                }

                                                .cls-2,
                                                .cls-46 {
                                                    fill: #585c5c;
                                                }

                                                .cls-2,
                                                .cls-6 {
                                                    stroke: #575756;
                                                }

                                                .cls-11,
                                                .cls-12,
                                                .cls-13,
                                                .cls-2,
                                                .cls-21,
                                                .cls-25,
                                                .cls-29,
                                                .cls-34,
                                                .cls-38,
                                                .cls-42,
                                                .cls-5,
                                                .cls-6,
                                                .cls-8 {
                                                    stroke-miterlimit: 10;
                                                }

                                                .cls-3 {
                                                    fill: #dad9db;
                                                }

                                                .cls-4 {
                                                    fill: #2bab5c;
                                                }

                                                .cls-5 {
                                                    fill: #b2b2b2;
                                                    stroke: #dadada;
                                                }

                                                .cls-21,
                                                .cls-25,
                                                .cls-29,
                                                .cls-34,
                                                .cls-38,
                                                .cls-42,
                                                .cls-6 {
                                                    stroke-width: 0.5px;
                                                }

                                                .cls-7 {
                                                    fill: #3aaa35;
                                                }

                                                .cls-18,
                                                .cls-8 {
                                                    fill: #9d9d9c;
                                                }

                                                .cls-8 {
                                                    stroke: #b2b2b2;
                                                    stroke-width: 0.75px;
                                                }

                                                .cls-9 {
                                                    fill: #706f6f;
                                                }

                                                .cls-10 {
                                                    fill: #c6c6c6;
                                                }

                                                .cls-11,
                                                .cls-49 {
                                                    fill: #2fac66;
                                                }

                                                .cls-11,
                                                .cls-12,
                                                .cls-13 {
                                                    stroke: #179553;
                                                }

                                                .cls-12,
                                                .cls-50 {
                                                    fill: #88c275;
                                                }

                                                .cls-13,
                                                .cls-48 {
                                                    fill: #063;
                                                }

                                                .cls-14 {
                                                    fill: #469948;
                                                }

                                                .cls-15 {
                                                    fill: #0f7836;
                                                }

                                                .cls-16 {
                                                    fill: #179553;
                                                }

                                                .cls-17 {
                                                    fill: #95c11f;
                                                }

                                                .cls-19 {
                                                    fill: #878787;
                                                }

                                                .cls-20 {
                                                    fill: #fff;
                                                }

                                                .cls-21 {
                                                    font-size: 11.15px;
                                                }

                                                .cls-21,
                                                .cls-25,
                                                .cls-29,
                                                .cls-34,
                                                .cls-38,
                                                .cls-42 {
                                                    fill: #f6f6f6;
                                                    stroke: #f6f6f6;
                                                }

                                                .cls-21,
                                                .cls-25,
                                                .cls-29,
                                                .cls-34,
                                                .cls-38,
                                                .cls-42,
                                                .cls-46 {
                                                    font-family: Calibri;
                                                }

                                                .cls-22 {
                                                    letter-spacing: -0.01em;
                                                }

                                                .cls-23 {
                                                    letter-spacing: 0.03em;
                                                }

                                                .cls-24 {
                                                    letter-spacing: -0.04em;
                                                }

                                                .cls-25,
                                                .cls-29 {
                                                    font-size: 11.35px;
                                                }

                                                .cls-26,
                                                .cls-29 {
                                                    letter-spacing: -0.01em;
                                                }

                                                .cls-27 {
                                                    letter-spacing: 0.03em;
                                                }

                                                .cls-28 {
                                                    letter-spacing: -0.04em;
                                                }

                                                .cls-30 {
                                                    letter-spacing: 0em;
                                                }

                                                .cls-31 {
                                                    letter-spacing: 0.03em;
                                                }

                                                .cls-32 {
                                                    letter-spacing: -0.01em;
                                                }

                                                .cls-33 {
                                                    letter-spacing: -0.04em;
                                                }

                                                .cls-34 {
                                                    font-size: 11.35px;
                                                }

                                                .cls-35 {
                                                    letter-spacing: -0.01em;
                                                }

                                                .cls-36 {
                                                    letter-spacing: 0.03em;
                                                }

                                                .cls-37 {
                                                    letter-spacing: -0.04em;
                                                }

                                                .cls-38,
                                                .cls-42 {
                                                    font-size: 11.35px;
                                                }

                                                .cls-39,
                                                .cls-42 {
                                                    letter-spacing: -0.01em;
                                                }

                                                .cls-40 {
                                                    letter-spacing: 0.03em;
                                                }

                                                .cls-41 {
                                                    letter-spacing: -0.04em;
                                                }

                                                .cls-43 {
                                                    letter-spacing: 0.03em;
                                                }

                                                .cls-44 {
                                                    letter-spacing: -0.04em;
                                                }

                                                .cls-45 {
                                                    letter-spacing: 0em;
                                                }

                                                .cls-46 {
                                                    font-size: 23.04px;
                                                    font-weight: bolder !important;
                                                }

                                                .cls-47 {
                                                    letter-spacing: 0em;
                                                }

                                                .st-27 {
                                                    font-family: 'Montserrat-Bold';
                                                    font-size: 15px;
                                                    fill: #000;
                                                }
                                            </style>
                                        </defs>
                                        <g id="Poligono">
                                            <polygon class="cls-2" points="252.09 887.04 748.67 888.66 748.67 568.25 765.23 426.65 910.13 26 885.22 26 846.96 128.58 744.38 124.64 783.02 18.38 614.73 11.26 576.98 116.19 519.15 114.47 557.79 8.71 468.3 3.12 430.17 110.4 359.31 106.02 352.76 122.48 228.06 466.44 228.06 590.75 258.19 589.22 257.05 799.72 257 819.74 252.03 819.74 252.09 887.04">
                                            </polygon>
                                        </g>
                                        <g id="banquetas">
                                            <path class="cls-3 " d="M688.63,365.41c-4.57,8.9-11.47,12.94-21.83,9.73-10.64-7.32-28.89-12.23-48.24-16.78a306.39,306.39,0,0,0-54.72-4.77c-13.75,0-15.85-7.22-18.11-14.3l66-183.61C613.79,148,618.92,144,627,143.29l117.38,5.53c11.21-.35,15.66,8.35,15.89,22.69Z">
                                            </path>
                                            <path class="cls-3" d="M522.09,347.43c-1.23,5.54-4.29,10.74-11.35,15.22-27.41,8-54.73,20.5-81.89,42.42L395,439c-12.44,16.76-28.56,29.76-46.59,40.8-8.25,3.49-18-3.53-19.69-7.1s-3.19-4.64,1.58-18.64L439.53,151.62c2.13-10.18,9.36-14.57,18.39-16.91l118.44,5.47c8.28,2.67,13.2,8.3,13.73,17.79Z">
                                            </path>
                                            <polyline class="cls-3" points="252.49 888.09 252.49 817.86 748.02 817.86 748.02 888.09"></polyline>
                                            <path class="cls-3" d="M226.81,564l94.82,25.93,3.31,5.59-.19,192.43-3.12,4.45H257.32v4.46h61.52c5.1-.8,8.4-5.21,10.67-11.69V596c-1.49-6.23-4.17-10.5-8.38-12.2l-94.32-25.17Z">
                                            </path>
                                            <path class="cls-3" d="M349,589.89v197c3.87,6.45,8.71,10.09,14.62,10.61H481.05c5.49-1.44,9.29-4.77,11-10.5l.9-252.55c-1.62-4.81-5.42-8.86-11.63-12.08a18.43,18.43,0,0,0-8.58,0c-15.3,12.27-30.12,23.31-44.23,32.54a193.9,193.9,0,0,1-43.85,18.12l-24.79,5.81C354.2,581.31,350.51,585,349,589.89Z">
                                            </path>
                                            <path class="cls-4" d="M488.72,567.9l-1.14-32c-2.32-7.81-7.84-10.31-17.74-5.53a253.77,253.77,0,0,1-57,37.56c-15.27,8.41-30.13,14-44.24,14.49-6.4-.41-11.06,2.78-15,7.53l135.09-.09Z" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="auto" data-bs-html="true" data-bs-content="Áreas Verdes">
                                            </path>
                                            <path class="cls-3" d="M512.17,464.56l.51,320.31c1.38,7,4.91,11.53,11.57,12.65l121.58.57a18,18,0,0,0,10.48-11.94V456.74C613,410,532.86,424.14,512.17,464.56Z">
                                            </path>
                                            <path class="cls-4" d="M516.89,478.6V461.44c33.75-37.3,102.69-38.06,135.09-3.56v20.63Z" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="auto" data-bs-html="true" data-bs-content="Áreas Verdes"></path>
                                            <path class="cls-3" d="M747.52,793.44v4.65H688.73A18.94,18.94,0,0,1,676,787.67l-.15-267.53c2.81-9.8,9.41-14.36,20.68-12.49,18,17,35.08,28.86,51,33.65Z">
                                            </path>
                                            <path class="cls-4" d="M680.59,519.09v48.7h66.93V545.53c-11.09-1.79-25-9.95-41.63-24.28l-10.3-9.41C687.84,511.24,683.14,514,680.59,519.09Z" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="auto" data-bs-html="true" data-bs-content="Áreas Verdes">
                                            </path>
                                            <path class="cls-3" d="M761.37,445.87l3.53-21.26,95.61-266.26c-8-9.72-33.79-6.17-64.82-6.48-6.43,1.51-10.25,5.65-12.2,11.66L705.38,376.85c-2.31,5.51-2.44,10,0,13.22,11.69,15.12,23,28.85,33.68,40.3l22.5,22.37Z">
                                            </path>
                                            <path class="cls-4" d="M709.7,376.85c-2.67,5.62-1.42,10.88,2.67,15.89,17.45,21,34.12,39.69,49,53.13l3.53-21.26,15.47-43.09Z" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="auto" data-bs-html="true" data-bs-content="Áreas Verdes">
                                            </path>
                                            <path class="cls-4" d="M687.58,354.9,685,363.51c-2.4,6.55-7.76,8.65-15.13,7.75A218.54,218.54,0,0,0,613.35,353c-16.27-3.43-47.3-2.74-54.09-4.32s-9.57-9.07-7.18-16.24l62.29-174c14.68-12.08,72.64-8.53,130-5.51,7.24.72,11,5,11.45,12.43Z" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="auto" data-bs-html="true" data-bs-content="Áreas Verdes">
                                            </path>
                                            <path class="cls-4" d="M581.76,168.9,516.84,347.05c-.8,5.35-4.41,9.49-11,12.33-27.14,6.11-54.15,22.23-81.1,43a303.93,303.93,0,0,0-38.51,40.93c-13.62,14-26.85,25.57-39.28,31.78-11.23,1.06-16.21-4.09-16.14-14.24l29.41-77.4,80.47-221.3c2.56-11.83,7.09-20.26,16.34-20.6l118.75,3.59C586,148.93,587.43,157.15,581.76,168.9Z" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="auto" data-bs-html="true" data-bs-content="Áreas Verdes">
                                            </path>
                                            <path class="cls-3" d="M226.81,497.1c27.55-.67,51.31-2.66,63.68-8.64a28,28,0,0,0,13.09-17.29L416.84,156.26c4.44-12.93.77-20.07-9-22.88l-58-2.86L226.81,468Z">
                                            </path>
                                            <path class="cls-4" d="M298.12,471.17q-5,15.25-27.08,17.79c-5.59.83-11.85,2-18.3,3.18H226.81V468Z" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="auto" data-bs-html="true" data-bs-content="Áreas Verdes"></path>
                                            <path class="cls-5" d="M226.81,540.06q27.66,6.65,55.93,11.44c17,1.83,50.66.92,84.4,0l11.95-10.17c48-19,74.48-43.36,91.23-70.16H478c18.68-28.59,44.3-47.25,75.66-57.71,15.23-4.51,32.75-5.61,52.72-3,31.93,4.22,55.79,20,75.76,41.28,7.36,9.84,14.51,20.53,21.48,31.94,11.94,17.63,29.54,29.78,49.44,39.69l5.6-48.07-60.76-59.76-12.71-.25q-23-17.37-54.91-26.18L601.59,383l-28.28-2.28L562,373.55c-32.44,1.43-62.34,9.06-89.39,23.64q-27,15.9-45.51,35.52a211.44,211.44,0,0,0-29.23,33.12c-12.52,11.14-24.41,21-34.07,26.31-14.14,7.44-27.4,13.45-39.08,16.91a168.37,168.37,0,0,1-34.26,4.57l-44.36,1.27-19.32.26Z">
                                            </path>
                                            <polygon class="cls-4" points="226.81 563.96 226.81 589.83 321.63 589.89 226.81 563.96" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="auto" data-bs-html="true" data-bs-content="Áreas Verdes"></polygon>
                                        </g>
                                        <g id="Areas_verdes" data-name="Areas verdes">
                                            <a xlink:title="Areas verdes">
                                                <path class="cls-6" d="M285.64,513.9c24.65.07,45.21-4.55,61.86-13.63l-11.93,13.5c-10.72,4.81-25,6.93-40.45,8.1l-8.68-7.3Z">
                                                </path>
                                                <path class="cls-6" d="M345.21,502.85c-17.47,7.93-38,11.91-58.31,12.11l1.26,1.06c17.47-.88,36.91-3.82,55.19-11.06l-.92,1c-18,6.83-36.58,9.83-53.16,11l1.12.94c16.33-1.32,34.09-4.41,51.07-10.79l-1,1.15a172.43,172.43,0,0,1-48.94,10.58l1.25,1.06a193.24,193.24,0,0,0,46.16-9.9l-1.22,1.38a171.48,171.48,0,0,1-43.78,9.49l.75.63a151.25,151.25,0,0,0,41.91-8.86">
                                                </path>
                                                <line class="cls-6" x1="315.41" y1="519.5" x2="315.04" y2="511.43"></line>
                                                <path class="cls-6" d="M355.51,551.42,345,543.14H292l-9.66,7.45h0c1.07,1.63,22.77,2,36.08,1.9C330.15,552.43,342.62,552,355.51,551.42Z">
                                                </path>
                                                <path class="cls-6" d="M353.92,550.17q-17.13.72-35.59.75t-35.49-.75l1.45-1.11q16.44.5,33.78.52,17.69,0,34.43-.52l-1.26-1q-16.44.27-33.39.27-16.37,0-32.28-.27l1.26-1H350l-1-.81H287.88l1-.74H348l-1.15-.91H290l1-.81h54.77">
                                                </path>
                                                <path class="cls-7" d="M226.81,515.15l59.35-1.4a60.15,60.15,0,0,0,10.61,8.77v21.25l-11,8-58.93-11.72Z"></path>
                                                <path class="cls-7" d="M345.79,501c-20.6,15.3-12.25,45.81,7.84,50.77l13.51-.28,11.95-10.17c47.49-18.18,74.41-42.63,91.23-70.16H478c42.11-54,78.85-61.2,112.11-62.05,27.77.53,50.87,10.4,71.82,24.24,15.79,11.35,25,26,34.73,39.46,8.11,16,18.74,27.6,31.47,35.63,4.86,4.42,14.76,10.56,25.56,17l5-50.21-60.49-59.49-13-.52c-26.36-18.68-59.89-32.66-111.86-34.57L562,373.55c-71.77,1.2-123.18,38-164.45,92.56Z">
                                                </path>
                                                <line class="cls-6" x1="318.07" y1="543.14" x2="318.07" y2="552.49"></line>
                                            </a>
                                        </g>
                                        <g id="ciclo_via" data-name="ciclo via">
                                            <a xlink:title="Ciclo via">
                                                <path class="cls-8" d="M226.81,532.18c18,2,46.73,2.12,76.77,2,14-1.59,26.87-.93,39.66-2A103.44,103.44,0,0,0,371.08,537c9.75-1.11,16.53-3.27,17.92-7.37a212.32,212.32,0,0,0,14.24-37.5l8.13-29.09a77.49,77.49,0,0,1,19.32-17.68c23.12-3.2,48.18,1.39,60.51-2.93A414.18,414.18,0,0,0,525,418.55l26.2-20.09c8.63-5,16.82-8,24.1-6.86,12.8.62,25.44,1.19,36.36,1.27,13.07,2.64,26.53,7.32,40.23,13.22,12.4,7.32,20.25,14.08,23.93,20.34l10.58,16.77,19.32,35.31c5.46,8.53,14,17.11,23.9,25.71l24,13.74.33-2.9c-11.09-6.46-22.14-12.92-26.66-18.09-6.39-4.37-11.84-11.66-17.26-19.06-7-9.2-14.11-22.37-21.26-36.71a129.81,129.81,0,0,0-8.75-17.57c-5.82-6.46-11.21-12.08-14.73-14-11.44-6.95-22.38-11.91-32.67-14.37-8.81-4.19-17.5-5.57-26.18-6.86a95.87,95.87,0,0,0-21.43-2.8,69.56,69.56,0,0,0-15.56.89c-6.66,1.21-11.85,2.95-14.87,5.47a109.06,109.06,0,0,0-19.71,14l-20.08,14.87a215.17,215.17,0,0,1-26.12,18.05c-8,4.07-34.77.89-57.26,3.69a22.68,22.68,0,0,0-10.28,4.83c-5.19,5.52-9.49,10.81-12.09,15.65-4.14,10-8.5,20.38-9.28,25.66L390.4,518.2c-2.62,6.57-5.69,10-9,11.69-3,2-6.32,3.33-10.43,2.67-10.54-1.09-20.33-2.46-28-4.65-10.69.3-24.9,2.06-39.66,2.75l-76.52-2.29Z">
                                                </path>
                                                <path class="cls-8" d="M226.81,535.74c18.37,7.1,40,7,63.68,2.29l22.47-4.6,30.28-1.25c24.94,8.39,37.47,4.59,49.19,0L412.33,522a162.21,162.21,0,0,0,49.19-42.52A79.36,79.36,0,0,1,481,455.66c15.64-20.49,37.72-32.15,60.6-42.71,10.47-3.91,22.78-6.41,36.42-7.88a121.82,121.82,0,0,1,43.82,4.32C640,412.9,660,427.66,680,443a107.5,107.5,0,0,1,16.8,23.39c9.14,12.52,17.79,23.8,24.69,30.49A136.62,136.62,0,0,0,753.67,518l-.63,5.36c-24.22-11.58-37.75-24.51-48.15-37.84-12.77-19.46-23.12-36.94-38.29-48.42C651.3,425,635.35,416,618.23,412.58a146.37,146.37,0,0,0-44.09-3c-19.52,1.55-39.59,9.8-60.14,23.76-13.95,9.65-25.76,22.56-36,37.81h-7.66c-7.8,10.75-16.11,26.95-49.1,48.93a209.89,209.89,0,0,1-42.13,21.23L367.14,551.5h-9.92L338.79,537H313.24l-17.79,5.09c-10.27,2.14-26.86,2.87-43.73,3.54l-24.91-5.58Z">
                                                </path>
                                                <path class="cls-8" d="M226.81,518.61l36.35-.67h21a52.44,52.44,0,0,0,15.35,10.78c14.4-.13,27.79-1.32,38.8-5,12-4.54,23.11-10,32.79-17.16a249.76,249.76,0,0,0,24.6-25.36l16.87-25.07,24.69-25c13.32-12.95,30.25-24.65,49.48-35.56A217.35,217.35,0,0,1,525,383.15c15.14-2.17,29.54-3.1,41.57,0l8.28,2.65c13.34-.44,26,.48,37.43,3.53,21.78,3.85,41.83,12.61,60.87,24.23l31.55,16.58c11.41,11.21,22.46,21.93,31.46,29.84l21.85,20.29.59-5q-28.47-29.5-60.49-59.49l-13-.52A180,180,0,0,0,601.59,383c-7.34-1.31-17.44-1.9-28.28-2.28L562,373.55a219.47,219.47,0,0,0-64.77,12.56,182.78,182.78,0,0,0-59.41,36.17l-25.27,25.17-15,18.66c-2.81,6.19-5.68,12.27-9.34,17-9.83,10.51-19.17,20.05-26.06,24.66-9.16,5.23-17.68,9.72-24,11.69-12,3.4-25,4.69-38.77,4.7a58.67,58.67,0,0,1-13.23-10.42l-59.35,1.4Z">
                                                </path>
                                            </a>
                                            <line class="cls-8" x1="383.38" y1="545.7" x2="381.78" y2="540.09"></line>
                                            <line class="cls-8" x1="397.51" y1="540.76" x2="395.49" y2="533.92"></line>
                                            <line class="cls-8" x1="409.83" y1="534.94" x2="407.22" y2="528.19"></line>
                                            <line class="cls-8" x1="471.88" y1="471.17" x2="477.44" y2="476.4"></line>
                                            <line class="cls-8" x1="462.72" y1="482.24" x2="468.57" y2="488.09"></line>
                                            <line class="cls-8" x1="454.97" y1="492.14" x2="459.93" y2="497.1"></line>
                                            <line class="cls-8" x1="446.63" y1="500.27" x2="451.29" y2="507.16"></line>
                                            <line class="cls-8" x1="438.38" y1="507.98" x2="442.94" y2="513.75"></line>
                                            <line class="cls-8" x1="427.94" y1="515.46" x2="431.46" y2="521.49"></line>
                                            <line class="cls-8" x1="418.51" y1="522.1" x2="421.7" y2="527.69"></line>
                                            <line class="cls-8" x1="571.78" y1="379.7" x2="571.78" y2="373.2"></line>
                                            <line class="cls-8" x1="584.43" y1="381.18" x2="584.43" y2="373.34"></line>
                                            <line class="cls-8" x1="598" y1="382.44" x2="599.03" y2="374.4"></line>
                                            <line class="cls-8" x1="609.88" y1="384.21" x2="610.94" y2="376.05"></line>
                                            <line class="cls-8" x1="620.89" y1="386.43" x2="622.09" y2="378.3"></line>
                                            <line class="cls-8" x1="633.8" y1="389.85" x2="635.5" y2="381.77"></line>
                                            <line class="cls-8" x1="645.47" y1="394.01" x2="647.57" y2="386.22"></line>
                                            <line class="cls-8" x1="657.44" y1="398.57" x2="659.88" y2="391.51"></line>
                                            <line class="cls-8" x1="670.45" y1="405.51" x2="673.46" y2="398.93"></line>
                                            <line class="cls-8" x1="682.37" y1="412.97" x2="686.69" y2="407.5"></line>

                                        </g>
                                        <g id="amenidades">
                                            <path class="cls-9" d="M708.1,441.78c-10.26,1.38-9.49,9.66-9.42,17.51.53,2.84,2.59,6.64,5.4,10.9a69.34,69.34,0,0,0,13.22,5.87,18.57,18.57,0,0,1,10,9.13c2.34,5.73,4.07,9.38,5.29,11.21,9.77,8,17,8.65,20.11-2.83a28.5,28.5,0,0,0-1.61-18.66l-6.55-5.66c-2.6-1.3-11-2-13.33-3.36-4-2.93-6.43-7.69-8.39-13a41,41,0,0,0-1.84-5.35C718.72,442.46,714.56,440.33,708.1,441.78Z" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="auto" data-bs-html="true" data-bs-content="Amenidades">
                                            </path>
                                            <rect class="cls-10" x="709.48" y="455.09" width="3.71" height="5.9"></rect>
                                            <rect class="cls-10" x="708.88" y="464.21" width="3.71" height="5.9"></rect>
                                            <rect class="cls-10" x="715.69" y="459.73" width="3.71" height="5.9"></rect>
                                            <rect class="cls-10" x="720.94" y="466.73" width="3.71" height="5.9"></rect>
                                            <rect class="cls-10" x="731.8" y="471.45" width="3.71" height="5.9"></rect>
                                            <rect class="cls-10" x="734.22" y="481.12" width="3.71" height="5.9"></rect>
                                            <rect class="cls-10" x="738.35" y="471.83" width="3.71" height="5.9"></rect>
                                            <path class="cls-9" d="M598.94,390.69v2.52c-2.9.94-3.92,3-4.41,5.34.1,2.34,1.15,3.36,2.82,3.53,4,1,7.14.13,10.41-.42,3.47,3.6,8.37,3.86,14,2.43,2.72,4.44,6.33,6.87,12.26,4,1.33,4.92,5.71,6.44,13.57,4.08,1.55,5.49,3.88,8.6,7.39,8.19,3.15-.3,4.09-2.94,3.06-7.65L660.3,410,656,408l-2.31,1.45a5.84,5.84,0,0,1-4.79,0c-.19-4.71-3.89-6.68-12.5-4.82-2.94-5.59-7.27-7.54-12.92-6-4.18-4.36-8.83-5-14-1.2a11.11,11.11,0,0,1-4.37-3.89l-.11-2.06Z" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="auto" data-bs-html="true" data-bs-content="Amenidades">
                                            </path>
                                            <circle class="cls-9" cx="578.33" cy="397.09" r="5.55" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="auto" data-bs-html="true" data-bs-content="Amenidades"></circle>
                                            <path class="cls-9" d="M472.84,427.3c14.21,14.11,46.72-16.39,27.08-25.45C486.86,396,463.69,415.1,472.84,427.3Z" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="auto" data-bs-html="true" data-bs-content="Amenidades">
                                            </path>
                                            <polygon class="cls-9" points="477.71 399.5 478.64 407.32 483.53 403.94 481.36 397.94 477.71 399.5" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="auto" data-bs-html="true" data-bs-content="Amenidades"></polygon>
                                            <path class="cls-9" d="M443.86,454.86c16.21,10.67-7.05,49.31-23.83,35.84C408.72,479,427.53,449,443.86,454.86Z" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="auto" data-bs-html="true" data-bs-content="Amenidades">
                                            </path>
                                            <path class="cls-9" d="M451.11,489.51c-.14,0-7.9-6-7.9-6l3.21-5.47,9.22,7.69Z" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="auto" data-bs-html="true" data-bs-content="Amenidades"></path>
                                            <circle class="cls-9" cx="374.08" cy="512.25" r="5.53" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="auto" data-bs-html="true" data-bs-content="Amenidades"></circle>
                                        </g>
                                        <g id="stage_2">
                                            <rect class="st0 mapsvg-region" x="724.76" y="822.15" width="23.26" height="65.94" title="299.46 m2" id="B-140" style="stroke-width: 1.98238px; fill: rgb(47, 172, 102);" data-stroke-width="1.2"></rect>
                                            <rect class="st0 mapsvg-region" x="702.83" y="822.15" width="21.93" height="65.94" title="299.41 m2" id="B-141" style="stroke-width: 1.98238px; fill: rgb(47, 172, 102);" data-stroke-width="1.2"></rect>
                                            <rect class="st0 mapsvg-region" x="679.57" y="822.15" width="23.26" height="65.94" title="299.36 m2" id="B-142" style="stroke-width: 1.98238px; fill: rgb(47, 172, 102);" data-stroke-width="1.2"></rect>
                                            <rect class="st0 mapsvg-region" x="657.08" y="822.15" width="22.5" height="65.94" title="299.31 m2" id="B-143" style="stroke-width: 1.98238px; fill: rgb(47, 172, 102);" data-stroke-width="1.2"></rect>
                                            <rect class="st0 mapsvg-region" x="634.58" y="822.15" width="22.5" height="65.94" title="299.27 m2" id="B-144" style="stroke-width: 1.98238px; fill: rgb(47, 172, 102);" data-stroke-width="1.2"></rect>
                                            <rect class="st0 mapsvg-region" x="612.08" y="822.15" width="22.5" height="65.94" title="299.22 m2" id="B-145" style="stroke-width: 1.98238px; fill: rgb(47, 172, 102);" data-stroke-width="1.2"></rect>
                                            <rect class="st0 mapsvg-region" x="589.58" y="822.15" width="22.5" height="65.94" title="299.17 m2" id="B-146" style="stroke-width: 1.98238px; fill: rgb(47, 172, 102);" data-stroke-width="1.2"></rect>
                                            <rect class="st0 mapsvg-region" x="567.08" y="822.15" width="22.5" height="65.94" title="299.13 m2" id="B-147" style="stroke-width: 1.98238px; fill: rgb(47, 172, 102);" data-stroke-width="1.2"></rect>
                                            <rect class="st0 mapsvg-region" x="544.58" y="822.15" width="22.5" height="65.94" title="299.08 m2" id="B-148" style="stroke-width: 1.98238px; fill: rgb(47, 172, 102);" data-stroke-width="1.2"></rect>
                                            <rect class="st0 mapsvg-region" x="522.09" y="822.15" width="22.5" height="65.94" title="299.03 m2" id="B-149" style="stroke-width: 1.98238px; fill: rgb(47, 172, 102);" data-stroke-width="1.2"></rect>
                                            <rect class="st0 mapsvg-region" x="499.59" y="822.15" width="22.5" height="65.94" title="298.98 m2" id="B-150" style="stroke-width: 1.98238px; fill: rgb(47, 172, 102);" data-stroke-width="1.2"></rect>
                                            <rect class="st0 mapsvg-region" x="477.47" y="822.15" width="22.5" height="65.94" title="298.94 m2" id="B-151" style="stroke-width: 1.98238px; fill: rgb(47, 172, 102);" data-stroke-width="1.2"></rect>
                                            <rect class="st0 mapsvg-region" x="454.97" y="822.15" width="22.5" height="65.94" title="298.89 m2" id="B-152" style="stroke-width: 1.98238px; fill: rgb(47, 172, 102);" data-stroke-width="1.2"></rect>
                                            <rect class="st0 mapsvg-region" x="432.47" y="822.15" width="22.5" height="65.94" title="298.84 m2" id="B-153" style="stroke-width: 1.98238px; fill: rgb(47, 172, 102);" data-stroke-width="1.2"></rect>
                                            <rect class="st0 mapsvg-region" x="409.98" y="822.15" width="22.5" height="65.94" title="298.80 m2" id="B-154" style="stroke-width: 1.98238px; fill: rgb(47, 172, 102);" data-stroke-width="1.2"></rect>
                                            <rect class="st0 mapsvg-region" x="387.48" y="822.15" width="22.5" height="65.94" title="298.75 m2" id="B-155" style="stroke-width: 1.98238px; fill: rgb(47, 172, 102);" data-stroke-width="1.2"></rect>
                                            <rect class="st0 mapsvg-region" x="364.98" y="822.15" width="22.5" height="65.94" title="298.70 m2" id="B-156" style="stroke-width: 1.98238px; fill: rgb(47, 172, 102);" data-stroke-width="1.2"></rect>
                                            <rect class="st0 mapsvg-region" x="342.48" y="822.15" width="22.5" height="65.94" title="298.65 m2" id="B-157" style="stroke-width: 1.98238px; fill: rgb(47, 172, 102);" data-stroke-width="1.2"></rect>
                                            <rect class="st0 mapsvg-region" x="319.98" y="822.15" width="22.5" height="65.94" title="298.61 m2" id="B-158" style="stroke-width: 1.98238px; fill: rgb(47, 172, 102);" data-stroke-width="1.2"></rect>
                                            <rect class="st0 mapsvg-region" x="297.48" y="822.15" width="22.5" height="65.94" title="298.56 m2" id="B-159" style="stroke-width: 1.98238px; fill: rgb(47, 172, 102);" data-stroke-width="1.2"></rect>
                                            <rect class="st0 mapsvg-region" x="274.99" y="822.15" width="22.5" height="65.94" title="298.51 m2" id="B-160" style="stroke-width: 1.98238px; fill: rgb(47, 172, 102);" data-stroke-width="1.2"></rect>
                                            <rect class="st0 mapsvg-region" x="252.49" y="822.15" width="22.5" height="65.94" title="298.47 m2" id="B-161" style="stroke-width: 1.98238px; fill: rgb(47, 172, 102);" data-stroke-width="1.2"></rect>
                                            <polyline class="cls-12" points="324.94 784.02 324.94 770.24 257.44 770.24"></polyline>
                                            <rect class="st0 mapsvg-region" x="257.32" y="612.01" width="67.43" height="22.24" title="300 m2" id="B-138" style="stroke-width: 1.98238px; fill: rgb(136, 194, 117);" data-stroke-width="1.2"></rect>
                                            <rect class="st0 mapsvg-region" x="257.32" y="634.25" width="67.43" height="22.24" title="300 m2" id="B-137" style="stroke-width: 1.98238px; fill: rgb(136, 194, 117);" data-stroke-width="1.2"></rect>
                                            <rect class="st0 mapsvg-region" x="257.32" y="656.49" width="67.43" height="22.24" title="300 m2" id="B-136" style="stroke-width: 1.98238px; fill: rgb(136, 194, 117);" data-stroke-width="1.2"></rect>
                                            <rect class="st0 mapsvg-region" x="257.32" y="678.74" width="67.43" height="23.01" title="300 m2" id="B-135" style="stroke-width: 1.98238px; fill: rgb(136, 194, 117);" data-stroke-width="1.2"></rect>
                                            <rect class="st0 mapsvg-region" x="257.32" y="701.86" width="67.43" height="23.01" title="300 m2" id="B-134" style="stroke-width: 1.98238px; fill: rgb(136, 194, 117);" data-stroke-width="1.2"></rect>
                                            <rect class="st0 mapsvg-region" x="257.32" y="724.49" width="67.43" height="23.01" title="300 m2" id="B-133" style="stroke-width: 1.98238px; fill: rgb(136, 194, 117);" data-stroke-width="1.2"></rect>
                                            <rect class="st0 mapsvg-region" x="257.32" y="747.23" width="67.43" height="23.01" title="300 m2" id="B-132" style="stroke-width: 1.98238px; fill: rgb(136, 194, 117);" data-stroke-width="1.2"></rect>
                                            <rect class="st0 mapsvg-region " x="353.63" y="589.92" width="67.5" height="23.17" title="299.79 m2" id="B-130" style="stroke-width: 1.98238px; fill: rgba(228, 22, 66, 0.52);" data-stroke-width="1.2"></rect>
                                            <rect class="st0 mapsvg-region " x="353.63" y="612.61" width="67.5" height="22.4" title="300 m2" id="B-129" style="stroke-width: 1.98238px; fill: rgba(228, 22, 66, 0.52);" data-stroke-width="1.2"></rect>
                                            <rect class="st0 mapsvg-region" x="353.63" y="635.01" width="67.5" height="22.4" title="300 m2" id="B-128" style="stroke-width: 1.98238px; fill: rgb(136, 194, 117);" data-stroke-width="1.2"></rect>
                                            <rect class="st0 mapsvg-region" x="353.63" y="657.42" width="67.5" height="22.4" title="300 m2" id="B-127" style="stroke-width: 1.98238px; fill: rgb(136, 194, 117);" data-stroke-width="1.2"></rect>
                                            <rect class="st0 mapsvg-region" x="353.63" y="679.82" width="67.5" height="22.4" title="300 m2" id="B-126" style="stroke-width: 1.98238px; fill: rgb(136, 194, 117);" data-stroke-width="1.2"></rect>
                                            <rect class="st0 mapsvg-region" x="353.63" y="702.22" width="67.5" height="22.4" title="300 m2" id="B-125" style="stroke-width: 1.98238px; fill: rgb(136, 194, 117);" data-stroke-width="1.2"></rect>
                                            <rect class="st0 mapsvg-region" x="353.63" y="724.62" width="67.5" height="22.4" title="300 m2" id="B-124" style="stroke-width: 1.98238px; fill: rgb(136, 194, 117);" data-stroke-width="1.2"></rect>
                                            <rect class="st0 mapsvg-region" x="353.63" y="747.03" width="67.5" height="22.4" title="300 m2" id="B-123" style="stroke-width: 1.98238px; fill: rgb(136, 194, 117);" data-stroke-width="1.2"></rect>
                                            <rect class="st0 mapsvg-region" x="421.22" y="589.83" width="67.5" height="23.17" title="300 m2" id="B-120" style="stroke-width: 1.98238px; fill: rgb(136, 194, 117);" data-stroke-width="1.2"></rect>
                                            <rect class="st0 mapsvg-region " x="421.22" y="567.9" width="67.5" height="21.93" title="300 m2" id="B-121" style="stroke-width: 1.98238px; fill: rgba(228, 22, 66, 0.52);" data-stroke-width="1.2"></rect>
                                            <rect class="st0 mapsvg-region" x="421.22" y="612.51" width="67.5" height="22.4" title="300 m2" id="B-119" style="stroke-width: 1.98238px; fill: rgb(136, 194, 117);" data-stroke-width="1.2"></rect>
                                            <rect class="st0 mapsvg-region" x="421.22" y="634.92" width="67.5" height="22.4" title="300 m2" id="B-118" style="stroke-width: 1.98238px; fill: rgb(136, 194, 117);" data-stroke-width="1.2"></rect>
                                            <rect class="st0 mapsvg-region" x="421.22" y="657.32" width="67.5" height="22.4" title="300 m2" id="B-117" style="stroke-width: 1.98238px; fill: rgb(136, 194, 117);" data-stroke-width="1.2"></rect>
                                            <rect class="st0 mapsvg-region" x="421.22" y="679.72" width="67.5" height="22.4" title="300 m2" id="B-116" style="stroke-width: 1.98238px; fill: rgb(136, 194, 117);" data-stroke-width="1.2"></rect>
                                            <rect class="st0 mapsvg-region" x="421.22" y="702.13" width="67.5" height="22.4" title="300 m2" id="B-115" style="stroke-width: 1.98238px; fill: rgb(136, 194, 117);" data-stroke-width="1.2"></rect>
                                            <rect class="st0 mapsvg-region" x="421.22" y="724.53" width="67.5" height="22.4" title="300 m2" id="B-114" style="stroke-width: 1.98238px; fill: rgb(136, 194, 117);" data-stroke-width="1.2"></rect>
                                            <rect class="st0 mapsvg-region" x="421.22" y="746.93" width="67.5" height="22.4" title="300 m2" id="B-113" style="stroke-width: 1.98238px; fill: rgb(136, 194, 117);" data-stroke-width="1.2"></rect>
                                            <rect class="st0 mapsvg-region" x="516.84" y="590.71" width="67.5" height="23.17" title="300 m2" id="B-106" style="stroke-width: 1.98238px; fill: rgb(136, 194, 117);" data-stroke-width="1.2"></rect>
                                            <rect class="st0 mapsvg-region" x="516.84" y="613.4" width="67.5" height="22.4" title="300 m2" id="B-105" style="stroke-width: 1.98238px; fill: rgb(136, 194, 117);" data-stroke-width="1.2"></rect>
                                            <rect class="st0 mapsvg-region" x="516.84" y="635.81" width="67.5" height="22.4" title="300 m2" id="B-104" style="stroke-width: 1.98238px; fill: rgb(136, 194, 117);" data-stroke-width="1.2"></rect>
                                            <rect class="st0 mapsvg-region" x="516.84" y="658.21" width="67.5" height="22.4" title="300 m2" id="B-103" style="stroke-width: 1.98238px; fill: rgb(136, 194, 117);" data-stroke-width="1.2"></rect>
                                            <rect class="st0 mapsvg-region" x="516.84" y="680.61" width="67.5" height="22.4" title="300 m2" id="B-102" style="stroke-width: 1.98238px; fill: rgb(136, 194, 117);" data-stroke-width="1.2"></rect>
                                            <rect class="st0 mapsvg-region" x="516.84" y="703.02" width="67.5" height="22.4" title="300 m2" id="B-101" style="stroke-width: 1.98238px; fill: rgb(136, 194, 117);" data-stroke-width="1.2"></rect>
                                            <rect class="st0 mapsvg-region" x="516.84" y="725.42" width="67.5" height="22.4" title="300 m2" id="B-100" style="stroke-width: 1.98238px; fill: rgb(136, 194, 117);" data-stroke-width="1.2"></rect>
                                            <rect class="st0 mapsvg-region" x="516.84" y="747.82" width="67.5" height="22.4" title="300 m2" id="B-99" style="stroke-width: 1.98238px; fill: rgb(136, 194, 117);" data-stroke-width="1.2">
                                            </rect>
                                            <rect class="st0 mapsvg-region" x="584.43" y="590.62" width="67.5" height="23.17" title="300 m2" id="B-92" style="stroke-width: 1.98238px; fill: rgb(136, 194, 117);" data-stroke-width="1.2">
                                            </rect>
                                            <rect class="st0 mapsvg-region" x="584.43" y="613.31" width="67.5" height="22.4" title="300 m2" id="B-91" style="stroke-width: 1.98238px; fill: rgb(136, 194, 117);" data-stroke-width="1.2">
                                            </rect>
                                            <rect class="st0 mapsvg-region" x="584.43" y="635.71" width="67.5" height="22.4" title="300 m2" id="B-90" style="stroke-width: 1.98238px; fill: rgb(136, 194, 117); stroke: rgb(23, 149, 83);" data-stroke-width="1.2"></rect>
                                            <rect class="st0 mapsvg-region" x="584.43" y="657.6203232756702" width="67.5" height="22.4" title="300 m2" id="B-89" style="stroke-width: 1.98238px; fill: rgb(136, 194, 117);" data-stroke-width="1.2"></rect>
                                            <rect class="st0 mapsvg-region" x="584.43" y="680.52" width="67.5" height="22.4" title="300 m2" id="B-88" style="stroke-width: 1.98238px; fill: rgb(136, 194, 117);" data-stroke-width="1.2">
                                            </rect>
                                            <rect class="st0 mapsvg-region" x="584.43" y="702.92" width="67.5" height="22.4" title="300 m2" id="B-87" style="stroke-width: 1.98238px; fill: rgb(136, 194, 117);" data-stroke-width="1.2">
                                            </rect>
                                            <rect class="st0 mapsvg-region" x="516.89" y="478.6" width="67.5" height="22.4" title="300 m2" id="B-111" style="stroke-width: 1.98238px; fill: rgb(5, 110, 57);" data-stroke-width="1.2">
                                            </rect>
                                            <rect class="st0 mapsvg-region" x="516.89" y="501.01" width="67.5" height="22.4" title="300 m2" id="B-110" style="stroke-width: 1.98238px; fill: rgb(47, 172, 102);" data-stroke-width="1.2">
                                            </rect>
                                            <rect class="st0 mapsvg-region" x="516.89" y="523.41" width="67.5" height="22.4" title="300 m2" id="B-109" style="stroke-width: 1.98238px; fill: rgb(47, 172, 102);" data-stroke-width="1.2">
                                            </rect>
                                            <rect class="st0 mapsvg-region" x="516.89" y="545.81" width="67.5" height="22.4" title="300 m2" id="B-108" style="stroke-width: 1.98238px; fill: rgb(47, 172, 102);" data-stroke-width="1.2">
                                            </rect>
                                            <rect class="st0 mapsvg-region" x="516.89" y="568.22" width="67.5" height="22.4" title="300 m2" id="B-107" style="stroke-width: 1.98238px; fill: rgb(136, 194, 117);" data-stroke-width="1.2"></rect>
                                            <rect class="st0 mapsvg-region" x="680.03" y="590.29" width="67.5" height="23.17" title="300 m2" id="B-75" style="stroke-width: 1.98238px; fill: rgb(136, 194, 117);" data-stroke-width="1.2">
                                            </rect>
                                            <rect class="st0 mapsvg-region" x="680.03" y="612.97" width="67.5" height="22.4" title="300 m2" id="B-76" style="stroke-width: 1.98238px; fill: rgb(136, 194, 117);" data-stroke-width="1.2">
                                            </rect>
                                            <rect class="st0 mapsvg-region" x="680.03" y="635.38" width="67.5" height="22.4" title="300 m2" id="B-77" style="stroke-width: 1.98238px; fill: rgb(136, 194, 117);" data-stroke-width="1.2">
                                            </rect>
                                            <rect class="st0 mapsvg-region" x="680.03" y="657.78" width="67.5" height="22.4" title="300 m2" id="B-78" style="stroke-width: 1.98238px; fill: rgb(136, 194, 117);" data-stroke-width="1.2">
                                            </rect>
                                            <rect class="st0 mapsvg-region" x="680.03" y="680.18" width="67.5" height="22.4" title="300 m2" id="B-79" style="stroke-width: 1.98238px; fill: rgb(136, 194, 117);" data-stroke-width="1.2">
                                            </rect>
                                            <rect class="st0 mapsvg-region" x="680.03" y="702.59" width="67.5" height="22.4" title="300 m2" id="B-80" style="stroke-width: 1.98238px; fill: rgb(136, 194, 117);" data-stroke-width="1.2">
                                            </rect>
                                            <rect class="st0 mapsvg-region" x="680.03" y="724.99" width="67.5" height="22.4" title="300 m2" id="B-81" style="stroke-width: 1.98238px; fill: rgb(136, 194, 117);" data-stroke-width="1.2">
                                            </rect>
                                            <rect class="st0 mapsvg-region" x="680.03" y="747.39" width="67.5" height="22.4" title="300 m2" id="B-82" style="stroke-width: 1.98238px; fill: rgb(136, 194, 117);" data-stroke-width="1.2">
                                            </rect>
                                            <rect class="st0 mapsvg-region" x="680.07" y="567.79" width="67.5" height="22.4" title="300 m2" id="B-74" style="stroke-width: 1.98238px; fill: rgba(228, 22, 66, 0.52);" data-stroke-width="1.2"></rect>
                                            <rect class="st0 mapsvg-region" x="584.48" y="478.51" width="67.5" height="22.4" title="300 m2" id="B-97" style="stroke-width: 1.98238px; fill: rgba(228, 22, 66, 0.52);" data-stroke-width="1.2"></rect>
                                            <rect class="st0 mapsvg-region" x="584.48" y="500.91" width="67.5" height="22.4" title="300 m2" id="B-96" style="stroke-width: 1.98238px; fill: rgb(47, 172, 102);" data-stroke-width="1.2">
                                            </rect>
                                            <rect class="st0 mapsvg-region" x="584.48" y="523.32" width="67.5" height="22.4" title="300 m2" id="B-95" style="stroke-width: 1.98238px; fill: rgb(47, 172, 102);" data-stroke-width="1.2">
                                            </rect>
                                            <rect class="st0 mapsvg-region" x="584.48" y="545.72" width="67.5" height="22.4" title="300 m2" id="B-94" style="stroke-width: 1.98238px; fill: rgb(47, 172, 102);" data-stroke-width="1.2">
                                            </rect>
                                            <rect class="st0 mapsvg-region" x="584.48" y="568.12" width="67.5" height="22.4" title="300 m2" id="B-93" style="stroke-width: 1.98238px; fill: rgb(136, 194, 117);" data-stroke-width="1.2">
                                            </rect>
                                            <rect class="st0 mapsvg-region" x="584.43" y="725.32" width="67.5" height="22.4" title="300 m2" id="B-86" style="stroke-width: 1.98238px; fill: rgb(136, 194, 117);" data-stroke-width="1.2">
                                            </rect>
                                            <rect class="st0 mapsvg-region" x="584.43" y="747.73" width="67.5" height="22.4" title="300 m2" id="B-85" style="stroke-width: 1.98238px; fill: rgb(136, 194, 117);" data-stroke-width="1.2">
                                            </rect>
                                            <path class="st0 mapsvg-region" d="M348.84,134.71,341,157.34l70,2.79c6.1-10.18,5.76-18.22-4.7-22.88Z" title="303.52 m2" id="B-15" style="stroke-width: 1.98238px; fill: rgb(47, 172, 102);" data-stroke-width="1.2"></path>
                                            <path class="st0 mapsvg-region" d="M519,142.72l-7.81,22.88-70.55-3.43c3.19-12.78,8-20.73,15.45-20.6Z" title="311.49 m2" id="B-26" style="stroke-width: 1.98238px; fill: rgb(47, 172, 102);" data-stroke-width="1.2"></path>
                                            <path class="st0 mapsvg-region" d="M860.51,158.35l-7.81,22.88-70.55-3.43c3.19-12.77,8-20.72,15.44-20.59Z" title="311.57 m2" id="B-64" style="stroke-width: 1.98238px; fill: rgb(47, 172, 102);" data-stroke-width="1.2"></path>
                                            <path class="st0 mapsvg-region" d="M688.63,150.71l-7.82,22.88-70.54-3.43c3.19-12.78,8-20.73,15.44-20.6Z" title="311.49 m2" id="B-43" style="stroke-width: 1.98238px; fill: rgb(47, 172, 102);" data-stroke-width="1.2"></path>
                                            <path class="st0 mapsvg-region" d="M576.42,145.2c-3-.19-57.39-2.48-57.39-2.48l-7.81,22.88,70.54,3.05C587.07,157.72,586.37,149.43,576.42,145.2Z" title="303.52 m2" id="B-35" style="stroke-width: 1.98238px; fill: rgb(47, 172, 102);" data-stroke-width="1.2"></path>
                                            <path class="st0 mapsvg-region" d="M747.16,153.05c-3-.19-57.39-2.48-57.39-2.48L682,173.45l70.54,3.05C757.81,165.57,757.11,157.28,747.16,153.05Z" title="303.52 m2" id="B-52" style="stroke-width: 1.98238px; fill: rgb(47, 172, 102);" data-stroke-width="1.2"></path>
                                            <path d="M 680.8099975585938 173.58999633789062 L 672.7999877929688 195.32000732421875 L 602.4500122070312 191.88999938964844 L 610.27001953125 170.16000366210938 L 680.8099975585938 173.58999633789062 Z" class="st0 mapsvg-region" title="314.04 m2" style="fill: rgb(136, 194, 117); stroke-width: 1.98238px; stroke: rgb(23, 149, 83);" id="B-42" data-stroke-width="1.2"></path>
                                            <path d="M 747.52001953125 793.4400024414062 L 747.52001953125 769.7999877929688 L 680.030029296875 769.7999877929688 L 680.030029296875 786.3800048828125 L 689.0399780273438 793.4400024414062 L 747.52001953125 793.4400024414062 Z" class="st0 mapsvg-region" title="295.60 m2" id="B-83" style="stroke-width: 1.98238px; fill: rgb(47, 172, 102);" data-stroke-width="1.2"></path>
                                            <path d="M 584.4299926757812 793.77001953125 L 584.4299926757812 770.1300048828125 L 651.9299926757812 770.1300048828125 L 651.9299926757812 786.719970703125 L 642.9199829101562 793.77001953125 L 584.4299926757812 793.77001953125 Z" class="st0 mapsvg-region" title="295.99 m2" id="B-84" style="stroke-width: 1.98238px; fill: rgb(47, 172, 102);" data-stroke-width="1.2"></path>
                                            <path d="M 584.3400268554688 793.8699951171875 L 584.3400268554688 770.22998046875 L 516.8400268554688 770.22998046875 L 516.8400268554688 786.8099975585938 L 525.8499755859375 793.8699951171875 L 584.3400268554688 793.8699951171875 Z" class="st0 mapsvg-region" title="293.28 m2" id="B-98" style="stroke-width: 1.98238px; fill: rgb(47, 172, 102);" data-stroke-width="1.2"></path>
                                            <path d="M 421.2200012207031 792.97998046875 L 421.2200012207031 769.3400268554688 L 488.7200012207031 769.3400268554688 L 488.7200012207031 785.9199829101562 L 479.7099914550781 792.97998046875 L 421.2200012207031 792.97998046875 Z" class="st0 mapsvg-region" title="295.99 m2" id="B-112" style="stroke-width: 1.98238px; fill: rgb(47, 172, 102);" data-stroke-width="1.2"></path>
                                            <path d="M 421.1300048828125 793.0700073242188 L 421.1300048828125 769.4299926757812 L 353.6300048828125 769.4299926757812 L 353.6300048828125 786.02001953125 L 362.6400146484375 793.0700073242188 L 421.1300048828125 793.0700073242188 Z" class="st0 mapsvg-region" title="293.28 m2" id="B-122" style="stroke-width: 1.98238px; fill: rgb(47, 172, 102);" data-stroke-width="1.2"></path>
                                            <path d="M 257.32000732421875 792.3599853515625 L 321.6300048828125 792.3599853515625 L 324.75 787.9099731445312 L 324.75 770.239990234375 L 257.32000732421875 770.239990234375 L 257.32000732421875 792.3599853515625 Z" class="st0 mapsvg-region" title="295.99 m2" id="B-131" style="stroke-width: 1.98238px; fill: rgb(47, 172, 102);" data-stroke-width="1.2"></path>
                                            <path d="M 257.32000732421875 589.8900146484375 L 321.6300048828125 589.8900146484375 L 324.75 594.3400268554688 L 324.75 612.010009765625 L 257.32000732421875 612.010009765625 L 257.32000732421875 589.8900146484375 Z" class="st0 mapsvg-region" title="297.85 m2" id="B-139" style="stroke-width: 1.98238px; fill: rgb(5, 110, 57);" data-stroke-width="1.2"></path>
                                            <path d="M 796.4500122070312 335.8599853515625 L 788.25 358.3599853515625 L 717.7100219726562 354.92999267578125 L 725.52001953125 332.80999755859375 L 796.4500122070312 335.8599853515625 Z" class="st0 mapsvg-region" title="314.04 m2" style="fill: rgb(136, 194, 117); stroke-width: 1.98238px; stroke: rgb(23, 149, 83);" id="B-72" data-stroke-width="1.2"></path>
                                            <path d="M 298.1199951171875 471.1700134277344 L 226.80999755859375 467.989990234375 L 235.1999969482422 445.3699951171875 L 306.25 448.4200134277344 L 298.1199951171875 471.1700134277344 Z" class="st0 mapsvg-region" title="314.04 m2" style="fill: rgb(5, 110, 57); stroke-width: 1.98238px;" id="B-01" data-stroke-width="1.2"></path>
                                            <path d="M 244.35000610351562 423.5 L 235.1999969482422 445.3699951171875 L 306.25 448.4200134277344 L 314.3900146484375 426.54998779296875 L 244.35000610351562 423.5 Z" class="st0 mapsvg-region" title="314.04 m2" style="fill: rgb(47, 172, 102); stroke-width: 1.98238px; stroke: rgb(23, 149, 83);" id="B-02" data-stroke-width="1.2"></path>
                                            <path d="M 251.72000122070312 401.1300048828125 L 244.35000610351562 423.5 L 314.3900146484375 426.54998779296875 L 322.2699890136719 404.17999267578125 L 251.72000122070312 401.1300048828125 Z" class="st0 mapsvg-region" title="314.04 m2" style="fill: rgb(47, 172, 102); stroke-width: 1.98238px; stroke: rgb(23, 149, 83);" id="B-03" data-stroke-width="1.2"></path>
                                            <path d="M 259.989990234375 378.8900146484375 L 251.72000122070312 401.1300048828125 L 322.2699890136719 404.17999267578125 L 330.2799987792969 381.80999755859375 L 259.989990234375 378.8900146484375 Z" class="st0 mapsvg-region" title="314.04 m2" style="fill: rgb(47, 172, 102); stroke-width: 1.98238px; stroke: rgb(23, 149, 83);" id="B-04" data-stroke-width="1.2"></path>
                                            <path d="M 268.3800048828125 356.260009765625 L 259.989990234375 378.8900146484375 L 330.2799987792969 381.80999755859375 L 338.7900085449219 359.57000732421875 L 268.3800048828125 356.260009765625 Z" class="st0 mapsvg-region" title="314.04 m2" style="fill: rgb(136, 194, 117); stroke-width: 1.98238px; stroke: rgb(23, 149, 83);" id="B-05" data-stroke-width="1.2"></path>
                                            <path d="M 346.92999267578125 337.45001220703125 L 338.7900085449219 359.57000732421875 L 268.3800048828125 356.260009765625 L 275.6199951171875 334.5299987792969 L 346.92999267578125 337.45001220703125 Z" class="st0 mapsvg-region" title="314.04 m2" style="fill: rgb(136, 194, 117); stroke-width: 1.98238px; stroke: rgb(23, 149, 83);" id="B-06" data-stroke-width="1.2"></path>
                                            <path d="M 354.55999755859375 315.4599914550781 L 346.92999267578125 337.45001220703125 L 275.6199951171875 334.5299987792969 L 282.739990234375 313.42999267578125 L 354.55999755859375 315.4599914550781 Z" class="st0 mapsvg-region" title="314.04 m2" style="fill: rgb(136, 194, 117); stroke-width: 1.98238px; stroke: rgb(23, 149, 83);" id="B-07" data-stroke-width="1.2"></path>
                                            <path d="M 362.69000244140625 293.6000061035156 L 354.55999755859375 315.4599914550781 L 282.739990234375 313.42999267578125 L 290.489990234375 291.05999755859375 L 362.69000244140625 293.6000061035156 Z" class="st0 mapsvg-region" title="314.04 m2" style="fill: rgb(136, 194, 117); stroke-width: 1.98238px; stroke: rgb(23, 149, 83);" id="B-08" data-stroke-width="1.2"></path>
                                            <path d="M 371.0799865722656 270.9700012207031 L 362.69000244140625 293.6000061035156 L 290.489990234375 291.05999755859375 L 300.2799987792969 268.42999267578125 L 371.0799865722656 270.9700012207031 Z" class="st0 mapsvg-region" title="314.04 m2" style="fill: rgb(136, 194, 117); stroke-width: 1.98238px; stroke: rgb(23, 149, 83);" id="B-09" data-stroke-width="1.2"></path>
                                            <path d="M 379.0899963378906 248.85000610351562 L 371.0799865722656 270.9700012207031 L 300.2799987792969 268.42999267578125 L 308.1600036621094 246.19000244140625 L 379.0899963378906 248.85000610351562 Z" class="st0 mapsvg-region" title="314.04 m2" style="fill: rgb(136, 194, 117); stroke-width: 1.98238px; stroke: rgb(23, 149, 83);" id="B-10" data-stroke-width="1.2"></path>
                                            <path d="M 386.8399963378906 226.47999572753906 L 379.0899963378906 248.85000610351562 L 308.1600036621094 246.19000244140625 L 316.54998779296875 223.42999267578125 L 386.8399963378906 226.47999572753906 Z" class="st0 mapsvg-region" title="314.04 m2" style="fill: rgb(136, 194, 117); stroke-width: 1.98238px; stroke: rgb(23, 149, 83);" id="B-11" data-stroke-width="1.2"></path>
                                            <path d="M 394.9800109863281 204.24000549316406 L 386.8399963378906 226.47999572753906 L 316.54998779296875 223.42999267578125 L 324.75 201.82000732421875 L 394.9800109863281 204.24000549316406 Z" class="st0 mapsvg-region" title="314.04 m2" style="fill: rgb(136, 194, 117); stroke-width: 1.98238px; stroke: rgb(23, 149, 83);" id="B-12" data-stroke-width="1.2"></path>
                                            <path d="M 403.239990234375 182.25 L 394.9800109863281 204.24000549316406 L 324.75 201.82000732421875 L 332.95001220703125 178.94000244140625 L 403.239990234375 182.25 Z" class="st0 mapsvg-region" title="314.04 m2" style="fill: rgb(136, 194, 117); stroke-width: 1.98238px; stroke: rgb(23, 149, 83);" id="B-13" data-stroke-width="1.2"></path>
                                            <path d="M 410.989990234375 160.1300048828125 L 403.239990234375 182.25 L 332.95001220703125 178.94000244140625 L 340.95001220703125 157.33999633789062 L 410.989990234375 160.1300048828125 Z" class="st0 mapsvg-region" title="314.04 m2" style="fill: rgb(136, 194, 117); stroke-width: 1.98238px; stroke: rgb(23, 149, 83);" id="B-14" data-stroke-width="1.2"></path>
                                            <path d="M 360.0199890136719 383.9700012207031 L 429.92999267578125 387.0199890136719 L 438.3800048828125 365.0299987792969 L 368.2200012207031 361.2200012207031 L 360.0199890136719 383.9700012207031 Z" class="st0 mapsvg-region" title="314.04 m2" style="fill: rgba(228, 22, 66, 0.52); stroke-width: 1.98238px;" id="B-16" data-stroke-width="1.2"></path>
                                            <path d="M 446.7699890136719 342.7300109863281 L 438.3800048828125 365.0299987792969 L 368.2200012207031 361.2200012207031 L 376.2300109863281 339.2900085449219 L 446.7699890136719 342.7300109863281 Z" class="st0 mapsvg-region" title="314.04 m2" style="fill: rgb(47, 172, 102); stroke-width: 1.98238px; stroke: rgb(23, 149, 83);" id="B-17" data-stroke-width="1.2"></path>
                                            <path d="M 454.9700012207031 320.2300109863281 L 446.7699890136719 342.7300109863281 L 376.2300109863281 339.2900085449219 L 384.04998779296875 317.17999267578125 L 454.9700012207031 320.2300109863281 Z" class="st0 mapsvg-region" title="314.04 m2" style="fill: rgb(136, 194, 117); stroke-width: 1.98238px; stroke: rgb(23, 149, 83);" id="B-18" data-stroke-width="1.2"></path>
                                            <path d="M 462.7900085449219 297.9200134277344 L 454.9700012207031 320.2300109863281 L 384.04998779296875 317.17999267578125 L 392.42999267578125 295.05999755859375 L 462.7900085449219 297.9200134277344 Z" class="st0 mapsvg-region" title="314.04 m2" style="fill: rgb(136, 194, 117); stroke-width: 1.98238px; stroke: rgb(23, 149, 83);" id="B-19" data-stroke-width="1.2"></path>
                                            <path d="M 478.80999755859375 254.07000732421875 L 471.55999755859375 275.989990234375 L 400.25 272.17999267578125 L 408.45001220703125 251.00999450683594 L 478.80999755859375 254.07000732421875 Z" class="st0 mapsvg-region" title="314.04 m2" style="fill: rgb(136, 194, 117); stroke-width: 1.98238px; stroke: rgb(23, 149, 83);" id="B-21" data-stroke-width="1.2"></path>
                                            <path d="M 471.55999755859375 275.989990234375 L 462.7900085449219 297.9200134277344 L 392.42999267578125 295.05999755859375 L 400.25 272.17999267578125 L 471.55999755859375 275.989990234375 Z" class="st0 mapsvg-region" title="314.04 m2" style="fill: rgb(136, 194, 117); stroke-width: 1.98238px; stroke: rgb(23, 149, 83);" id="B-20" data-stroke-width="1.2"></path>
                                            <path d="M 486.42999267578125 231.75999450683594 L 478.80999755859375 254.07000732421875 L 408.45001220703125 251.00999450683594 L 416.8399963378906 228.3300018310547 L 486.42999267578125 231.75999450683594 Z" class="st0 mapsvg-region" title="314.04 m2" style="fill: rgb(136, 194, 117); stroke-width: 1.98238px; stroke: rgb(23, 149, 83);" id="B-22" data-stroke-width="1.2"></path>
                                            <path d="M 495.20001220703125 209.63999938964844 L 486.42999267578125 231.75999450683594 L 416.8399963378906 228.3300018310547 L 424.6600036621094 206.77999877929688 L 495.20001220703125 209.63999938964844 Z" class="st0 mapsvg-region" title="314.04 m2" style="fill: rgb(136, 194, 117); stroke-width: 1.98238px; stroke: rgb(23, 149, 83);" id="B-23" data-stroke-width="1.2"></path>
                                            <path d="M 503.2099914550781 187.3300018310547 L 495.20001220703125 209.63999938964844 L 424.6600036621094 206.77999877929688 L 432.8599853515625 183.89999389648438 L 503.2099914550781 187.3300018310547 Z" class="st0 mapsvg-region" title="314.04 m2" style="fill: rgb(136, 194, 117); stroke-width: 1.98238px; stroke: rgb(23, 149, 83);" id="B-24" data-stroke-width="1.2"></path>
                                            <path d="M 511.2200012207031 165.60000610351562 L 503.2099914550781 187.3300018310547 L 432.8599853515625 183.89999389648438 L 440.6700134277344 162.1699981689453 L 511.2200012207031 165.60000610351562 Z" class="st0 mapsvg-region" title="314.04 m2" style="fill: rgb(136, 194, 117); stroke-width: 1.98238px; stroke: rgb(23, 149, 83);" id="B-25" data-stroke-width="1.2"></path>
                                            <path d="M 525.0399780273438 324.54998779296875 L 516.8400268554688 347.04998779296875 L 446.29998779296875 343.6099853515625 L 454.1099853515625 321.5 L 525.0399780273438 324.54998779296875 Z" class="st0 mapsvg-region" title="314.04 m2" style="fill: rgb(5, 110, 57); stroke-width: 1.98238px;" id="B-27" data-stroke-width="1.2"></path>
                                            <path d="M 532.8599853515625 302.239990234375 L 525.0399780273438 324.54998779296875 L 454.1099853515625 321.5 L 462.5 299.3800048828125 L 532.8599853515625 302.239990234375 Z" class="st0 mapsvg-region" title="314.04 m2" style="fill: rgb(136, 194, 117); stroke-width: 1.98238px; stroke: rgb(23, 149, 83);" id="B-28" data-stroke-width="1.2"></path>
                                            <path d="M 541.6300048828125 280.30999755859375 L 532.8599853515625 302.239990234375 L 462.5 299.3800048828125 L 470.32000732421875 276.5 L 541.6300048828125 280.30999755859375 Z" class="st0 mapsvg-region" title="314.04 m2" style="fill: rgb(136, 194, 117); stroke-width: 1.98238px; stroke: rgb(23, 149, 83);" id="B-29" data-stroke-width="1.2"></path>
                                            <path d="M 548.8699951171875 258.3900146484375 L 541.6300048828125 280.30999755859375 L 470.32000732421875 276.5 L 478.5199890136719 255.33999633789062 L 548.8699951171875 258.3900146484375 Z" class="st0 mapsvg-region" title="314.04 m2" style="fill: rgb(136, 194, 117); stroke-width: 1.98238px; stroke: rgb(23, 149, 83);" id="B-30" data-stroke-width="1.2"></path>
                                            <path d="M 556.5 236.0800018310547 L 548.8699951171875 258.3900146484375 L 478.5199890136719 255.33999633789062 L 486.9100036621094 232.64999389648438 L 556.5 236.0800018310547 Z" class="st0 mapsvg-region" title="314.04 m2" style="fill: rgb(136, 194, 117); stroke-width: 1.98238px; stroke: rgb(23, 149, 83);" id="B-31" data-stroke-width="1.2"></path>
                                            <path d="M 565.27001953125 213.9600067138672 L 556.5 236.0800018310547 L 486.9100036621094 232.64999389648438 L 494.7300109863281 211.10000610351562 L 565.27001953125 213.9600067138672 Z" class="st0 mapsvg-region" title="314.04 m2" style="fill: rgb(136, 194, 117); stroke-width: 1.98238px; stroke: rgb(23, 149, 83);" id="B-32" data-stroke-width="1.2"></path>
                                            <path d="M 572.3006758482153 191.66000366210938 L 564.2906660825903 213.9600067138672 L 493.7506575376684 211.10000610351562 L 501.94065997907467 188.22000122070312 L 572.3006758482153 191.66000366210938 Z" class="st0 mapsvg-region" title="314.04 m2" style="fill: rgb(136, 194, 117); stroke-width: 1.98238px; stroke: rgb(23, 149, 83);" id="B-33" data-stroke-width="1.2"></path>
                                            <path d="M 581.760009765625 168.64999389648438 L 573.280029296875 191.66000366210938 L 502.9200134277344 188.22000122070312 L 510.739990234375 166.49000549316406 L 581.760009765625 168.64999389648438 Z" class="st0 mapsvg-region" title="314.04 m2" style="fill: rgb(136, 194, 117); stroke-width: 1.98238px; stroke: rgb(23, 149, 83);" id="B-34" data-stroke-width="1.2"></path>
                                            <path d="M 632.3800048828125 305.9100036621094 L 624.5700073242188 328.2200012207031 L 553.6400146484375 325.1700134277344 L 562.030029296875 303.04998779296875 L 632.3800048828125 305.9100036621094 Z" class="st0 mapsvg-region" title="314.04 m2" style="fill: rgba(228, 22, 66, 0.52); stroke-width: 1.98238px;" id="B-36" data-stroke-width="1.2"></path>
                                            <path d="M 641.1500244140625 283.9800109863281 L 632.3800048828125 305.9100036621094 L 562.030029296875 303.04998779296875 L 569.8499755859375 280.1700134277344 L 641.1500244140625 283.9800109863281 Z" class="st0 mapsvg-region" title="314.04 m2" style="fill: rgb(136, 194, 117); stroke-width: 1.98238px; stroke: rgb(23, 149, 83);" id="B-37" data-stroke-width="1.2"></path>
                                            <path d="M 648.4000244140625 262.05999755859375 L 641.1500244140625 283.9800109863281 L 569.8499755859375 280.1700134277344 L 578.0399780273438 259 L 648.4000244140625 262.05999755859375 Z" class="st0 mapsvg-region" title="314.04 m2" style="fill: rgb(136, 194, 117); stroke-width: 1.98238px; stroke: rgb(23, 149, 83);" id="B-38" data-stroke-width="1.2"></path>
                                            <path d="M 656.030029296875 239.75 L 648.4000244140625 262.05999755859375 L 578.0399780273438 259 L 586.4299926757812 236.32000732421875 L 656.030029296875 239.75 Z" class="st0 mapsvg-region" title="314.04 m2" style="fill: rgb(136, 194, 117); stroke-width: 1.98238px; stroke: rgb(23, 149, 83);" id="B-39" data-stroke-width="1.2"></path>
                                            <path d="M 664.7999877929688 217.6300048828125 L 656.030029296875 239.75 L 586.4299926757812 236.32000732421875 L 594.25 214.77000427246094 L 664.7999877929688 217.6300048828125 Z" class="st0 mapsvg-region" title="314.04 m2" style="fill: rgb(136, 194, 117); stroke-width: 1.98238px; stroke: rgb(23, 149, 83);" id="B-40" data-stroke-width="1.2"></path>
                                            <path d="M 672.7999877929688 195.32000732421875 L 664.7999877929688 217.6300048828125 L 594.25 214.77000427246094 L 602.4500122070312 191.88999938964844 L 672.7999877929688 195.32000732421875 Z" class="st0 mapsvg-region" title="314.04 m2" style="fill: rgb(136, 194, 117); stroke-width: 1.98238px; stroke: rgb(23, 149, 83);" id="B-41" data-stroke-width="1.2"></path>
                                            <path d="M 695.780029296875 332.3999938964844 L 687.5800170898438 354.8900146484375 L 617.0399780273438 351.4599914550781 L 624.8499755859375 329.3500061035156 L 695.780029296875 332.3999938964844 Z" class="st0 mapsvg-region" title="314.04 m2" style="fill: rgb(5, 110, 57); stroke-width: 1.98238px;" id="B-44" data-stroke-width="1.2"></path>
                                            <path d="M 703.5999755859375 310.0899963378906 L 695.780029296875 332.3999938964844 L 624.8499755859375 329.3500061035156 L 633.239990234375 307.2300109863281 L 703.5999755859375 310.0899963378906 Z" class="st0 mapsvg-region" title="314.04 m2" style="fill: rgb(136, 194, 117); stroke-width: 1.98238px; stroke: rgb(23, 149, 83);" id="B-45" data-stroke-width="1.2"></path>
                                            <path d="M 712.3699951171875 288.1600036621094 L 703.5999755859375 310.0899963378906 L 633.239990234375 307.2300109863281 L 641.0599975585938 284.3500061035156 L 712.3699951171875 288.1600036621094 Z" class="st0 mapsvg-region" title="314.04 m2" style="fill: rgb(136, 194, 117); stroke-width: 1.98238px; stroke: rgb(23, 149, 83);" id="B-46" data-stroke-width="1.2"></path>
                                            <path d="M 719.6099853515625 266.239990234375 L 712.3699951171875 288.1600036621094 L 641.0599975585938 284.3500061035156 L 649.260009765625 263.19000244140625 L 719.6099853515625 266.239990234375 Z" class="st0 mapsvg-region" title="314.04 m2" style="fill: rgb(136, 194, 117); stroke-width: 1.98238px; stroke: rgb(23, 149, 83);" id="B-47" data-stroke-width="1.2"></path>
                                            <path d="M 727.239990234375 243.92999267578125 L 719.6099853515625 266.239990234375 L 649.260009765625 263.19000244140625 L 657.6500244140625 240.5 L 727.239990234375 243.92999267578125 Z" class="st0 mapsvg-region" title="314.04 m2" style="fill: rgb(136, 194, 117); stroke-width: 1.98238px; stroke: rgb(23, 149, 83);" id="B-48" data-stroke-width="1.2"></path>
                                            <path d="M 736.010009765625 221.80999755859375 L 727.239990234375 243.92999267578125 L 657.6500244140625 240.5 L 665.469970703125 218.9499969482422 L 736.010009765625 221.80999755859375 Z" class="st0 mapsvg-region" title="314.04 m2" style="fill: rgb(136, 194, 117); stroke-width: 1.98238px; stroke: rgb(23, 149, 83);" id="B-49" data-stroke-width="1.2"></path>
                                            <path d="M 744.02001953125 199.5 L 736.010009765625 221.80999755859375 L 665.469970703125 218.9499969482422 L 673.6599731445312 196.07000732421875 L 744.02001953125 199.5 Z" class="st0 mapsvg-region" title="314.04 m2" style="fill: rgb(136, 194, 117); stroke-width: 1.98238px; stroke: rgb(23, 149, 83);" id="B-50" data-stroke-width="1.2"></path>
                                            <path d="M 752.5 176.5 L 744.02001953125 199.5 L 673.6599731445312 196.07000732421875 L 681.47998046875 174.33999633789062 L 752.5 176.5 Z" class="st0 mapsvg-region" title="314.04 m2" style="fill: rgb(136, 194, 117); stroke-width: 1.98238px; stroke: rgb(23, 149, 83);" id="B-51" data-stroke-width="1.2"></path>
                                            <path d="M 852.7000122070312 181.22999572753906 L 844.6900024414062 202.97000122070312 L 774.3300170898438 199.5399932861328 L 782.1500244140625 177.8000030517578 L 852.7000122070312 181.22999572753906 Z" class="st0 mapsvg-region" title="314.04 m2" style="fill: rgb(136, 194, 117); stroke-width: 1.98238px; stroke: rgb(23, 149, 83);" id="B-65" data-stroke-width="1.2"></path>
                                            <path d="M 844.6900024414062 202.97000122070312 L 836.6799926757812 225.27999877929688 L 766.1300048828125 222.4199981689453 L 774.3300170898438 199.5399932861328 L 844.6900024414062 202.97000122070312 Z" class="st0 mapsvg-region" title="314.04 m2" style="fill: rgb(136, 194, 117); stroke-width: 1.98238px; stroke: rgb(23, 149, 83);" id="B-66" data-stroke-width="1.2"></path>
                                            <path d="M 836.6799926757812 225.27999877929688 L 827.9099731445312 247.38999938964844 L 758.3200073242188 243.9600067138672 L 766.1300048828125 222.4199981689453 L 836.6799926757812 225.27999877929688 Z" class="st0 mapsvg-region" title="314.04 m2" style="fill: rgb(136, 194, 117); stroke-width: 1.98238px; stroke: rgb(23, 149, 83);" id="B-67" data-stroke-width="1.2"></path>
                                            <path d="M 827.9099731445312 247.38999938964844 L 820.280029296875 269.70001220703125 L 749.9299926757812 266.6499938964844 L 758.3200073242188 243.9600067138672 L 827.9099731445312 247.38999938964844 Z" class="st0 mapsvg-region" title="314.04 m2" style="fill: rgb(136, 194, 117); stroke-width: 1.98238px; stroke: rgb(23, 149, 83);" id="B-68" data-stroke-width="1.2"></path>
                                            <path d="M 820.280029296875 269.70001220703125 L 813.0399780273438 291.6300048828125 L 741.72998046875 287.80999755859375 L 749.9299926757812 266.6499938964844 L 820.280029296875 269.70001220703125 Z" class="st0 mapsvg-region" title="314.04 m2" style="fill: rgb(136, 194, 117); stroke-width: 1.98238px; stroke: rgb(23, 149, 83);" id="B-69" data-stroke-width="1.2"></path>
                                            <path d="M 813.0399780273438 291.6300048828125 L 804.27001953125 313.54998779296875 L 733.9099731445312 310.69000244140625 L 741.72998046875 287.80999755859375 L 813.0399780273438 291.6300048828125 Z" class="st0 mapsvg-region" title="314.04 m2" style="fill: rgb(136, 194, 117); stroke-width: 1.98238px; stroke: rgb(23, 149, 83);" id="B-70" data-stroke-width="1.2"></path>
                                            <path d="M 804.27001953125 313.54998779296875 L 796.4500122070312 335.8599853515625 L 725.52001953125 332.80999755859375 L 733.9099731445312 310.69000244140625 L 804.27001953125 313.54998779296875 Z" class="st0 mapsvg-region" title="314.04 m2" style="fill: rgb(136, 194, 117); stroke-width: 1.98238px; stroke: rgb(23, 149, 83);" id="B-71" data-stroke-width="1.2"></path>
                                            <path d="M 788.25 358.3599853515625 L 779.8599853515625 380.6700134277344 L 709.7000122070312 376.8500061035156 L 717.7100219726562 354.92999267578125 L 788.25 358.3599853515625 Z" class="st0 mapsvg-region" title="314.04 m2" style="fill: rgba(228, 22, 66, 0.52); stroke-width: 1.98238px;" id="B-73" data-stroke-width="1.2"></path>
                                            <path d="M 614.239990234375 11.800000190734863 L 575.3400268554688 119.19999694824219 L 600 119.19999694824219 L 638.6400146484375 12.430000305175781 L 614.239990234375 11.800000190734863 Z" class="st0 mapsvg-region" title="508.46 m2" style="fill: rgb(47, 172, 102); stroke-width: 1.98238px; stroke: rgb(23, 149, 83);" id="B-56" data-stroke-width="1.2"></path>
                                            <path d="M 638.0800170898438 12.420000076293945 L 599.3900146484375 119.19999694824219 L 623.9199829101562 119.19999694824219 L 662.0499877929688 13.890000343322754 L 638.0800170898438 12.420000076293945 Z" class="st0 mapsvg-region" title="508.93 m2" style="fill: rgb(47, 172, 102); stroke-width: 1.98238px; stroke: rgb(23, 149, 83);" id="B-57" data-stroke-width="1.2"></path>
                                            <path d="M 685.4199829101562 15.359999656677246 L 662.0499877929688 13.890000343322754 L 623.9199829101562 119.19999694824219 L 648.2999877929688 120.86000061035156 L 685.4199829101562 15.359999656677246 Z" class="st0 mapsvg-region" title="508.95 m2" style="fill: rgb(47, 172, 102); stroke-width: 1.98238px; stroke: rgb(23, 149, 83);" id="B-58" data-stroke-width="1.2"></path>
                                            <path d="M 710.02001953125 16.479999542236328 L 685.4199829101562 15.359999656677246 L 648.2999877929688 120.86000061035156 L 671.6900024414062 122.37999725341797 L 710.02001953125 16.479999542236328 Z" class="st0 mapsvg-region" title="508.96 m2" style="fill: rgb(47, 172, 102); stroke-width: 1.98238px; stroke: rgb(23, 149, 83);" id="B-59" data-stroke-width="1.2"></path>
                                            <path d="M 733.9099731445312 17.260000228881836 L 710.02001953125 16.479999542236328 L 671.6900024414062 122.37999725341797 L 695.780029296875 123.45999908447266 L 733.9099731445312 17.260000228881836 Z" class="st0 mapsvg-region" title="508.98 m2" style="fill: rgb(47, 172, 102); stroke-width: 1.98238px; stroke: rgb(23, 149, 83);" id="B-60" data-stroke-width="1.2"></path>
                                            <path d="M 758.3200073242188 18.600000381469727 L 733.9099731445312 17.260000228881836 L 695.780029296875 123.45999908447266 L 720.5700073242188 124.80000305175781 L 758.3200073242188 18.600000381469727 Z" class="st0 mapsvg-region" title="508.99 m2" style="fill: rgb(47, 172, 102); stroke-width: 1.98238px; stroke: rgb(23, 149, 83);" id="B-61" data-stroke-width="1.2"></path>
                                            <path d="M 782.1500244140625 19.549999237060547 L 758.3200073242188 18.600000381469727 L 720.5700073242188 124.80000305175781 L 744.4000244140625 124.80000305175781 L 782.1500244140625 19.549999237060547 Z" class="st0 mapsvg-region" title="509.01 m2" style="fill: rgb(47, 172, 102); stroke-width: 1.98238px; stroke: rgb(23, 149, 83);" id="B-62" data-stroke-width="1.2"></path>
                                            <path d="M 884.1599731445312 24.700000762939453 L 845.260009765625 130.32000732421875 L 870.8099975585938 131.27999877929688 L 909.510009765625 26.219999313354492 L 884.1599731445312 24.700000762939453 Z" class="st0 mapsvg-region" title="528.79 m2" style="fill: rgba(228, 22, 66, 0.52); stroke-width: 1.98238px; stroke: rgb(23, 149, 83);" id="B-63" data-stroke-width="1.2"></path>
                                            <path d="M 468.05999755859375 4.930000305175781 L 429.4200134277344 110.69000244140625 L 459.30999755859375 111.69999694824219 L 497.29998779296875 5.949999809265137 L 468.05999755859375 4.930000305175781 Z" class="st0 mapsvg-region" title="630.49 m2" style="fill: rgb(47, 172, 102); stroke-width: 1.98238px; stroke: rgb(23, 149, 83);" id="B-53" data-stroke-width="1.2"></path>
                                            <path d="M 526.0900268554688 7.730000019073486 L 497.29998779296875 5.949999809265137 L 459.30999755859375 111.69999694824219 L 489.6700134277344 113.2300033569336 L 526.0900268554688 7.730000019073486 Z" class="st0 mapsvg-region" title="630.22 m2" style="fill: rgb(47, 172, 102); stroke-width: 1.98238px; stroke: rgb(23, 149, 83);" id="B-54" data-stroke-width="1.2"></path>
                                            <path d="M 556.5 8.489999771118164 L 526.0900268554688 7.730000019073486 L 489.6700134277344 113.2300033569336 L 519.030029296875 114.75 L 556.5 8.489999771118164 Z" class="st0 mapsvg-region" title="630.76 m2" style="fill: rgb(47, 172, 102); stroke-width: 1.98238px; stroke: rgb(23, 149, 83);" id="B-55" data-stroke-width="1.2"></path>
                                        </g>
                                        <g id="Capa_8" data-name="Capa 8">
                                            <circle class="cls-14" cx="717.6" cy="403.75" r="8.75"></circle>
                                            <path class="cls-15" d="M711.88,397c-9.92,10.68,7.19,24.08,13.73,10.24C720.93,411.6,709.81,408.66,711.88,397Z">
                                            </path>
                                            <circle class="cls-14" cx="719.82" cy="384.36" r="14.01"></circle>
                                            <path class="cls-15" d="M710.65,373.54c-15.88,17.11,11.53,38.59,22,16.42C725.14,396.94,707.34,392.22,710.65,373.54Z"></path>
                                            <circle class="cls-16" cx="361.75" cy="394.69" r="6"></circle>
                                            <path class="cls-15" d="M357.82,390.06c-6.8,7.33,4.94,16.52,9.42,7C364,400.08,356.4,398.06,357.82,390.06Z">
                                            </path>
                                            <circle class="cls-14" cx="361.92" cy="386.21" r="3.89"></circle>
                                            <path class="cls-15" d="M359.37,383.2c-4.41,4.76,3.2,10.72,6.11,4.56C363.39,389.7,358.45,388.39,359.37,383.2Z">
                                            </path>
                                            <circle class="cls-14" cx="365.8" cy="397.32" r="3.83"></circle>
                                            <path class="cls-15" d="M363.3,394.37c-4.34,4.67,3.15,10.54,6,4.48C367.26,400.76,362.39,399.47,363.3,394.37Z">
                                            </path>
                                            <circle class="cls-16" cx="290.09" cy="474.64" r="6"></circle>
                                            <path class="cls-15" d="M286.16,470c-6.8,7.33,4.94,16.52,9.42,7C292.37,480,284.74,478,286.16,470Z"></path>
                                            <circle class="cls-14" cx="290.26" cy="466.16" r="3.89"></circle>
                                            <path class="cls-15" d="M287.71,463.16c-4.41,4.75,3.2,10.71,6.11,4.56C291.74,469.66,286.79,468.35,287.71,463.16Z"></path>
                                            <circle class="cls-14" cx="294.15" cy="477.28" r="3.83"></circle>
                                            <path class="cls-15" d="M291.64,474.32c-4.34,4.68,3.15,10.54,6,4.48C295.6,480.71,290.73,479.42,291.64,474.32Z">
                                            </path>
                                            <circle class="cls-16" cx="277.22" cy="585.1" r="6"></circle>
                                            <path class="cls-15" d="M273.29,580.47c-6.8,7.32,4.94,16.51,9.42,7C279.5,590.48,271.87,588.46,273.29,580.47Z">
                                            </path>
                                            <circle class="cls-14" cx="277.39" cy="576.61" r="3.89"></circle>
                                            <path class="cls-15" d="M274.84,573.61c-4.41,4.75,3.2,10.72,6.11,4.56C278.87,580.11,273.92,578.8,274.84,573.61Z"></path>
                                            <circle class="cls-14" cx="281.28" cy="587.73" r="3.83"></circle>
                                            <path class="cls-15" d="M278.77,584.77c-4.34,4.68,3.15,10.54,6,4.49C282.73,591.16,277.86,589.88,278.77,584.77Z">
                                            </path>
                                            <circle class="cls-16" cx="439.68" cy="562.08" r="6"></circle>
                                            <path class="cls-15" d="M435.76,557.46c-6.81,7.32,4.93,16.51,9.41,7C442,567.47,434.34,565.45,435.76,557.46Z">
                                            </path>
                                            <circle class="cls-14" cx="439.85" cy="553.6" r="3.89"></circle>
                                            <path class="cls-15" d="M437.3,550.6c-4.41,4.75,3.2,10.72,6.11,4.56C441.33,557.1,436.38,555.79,437.3,550.6Z">
                                            </path>
                                            <circle class="cls-14" cx="443.74" cy="564.72" r="3.83"></circle>
                                            <path class="cls-15" d="M441.23,561.76c-4.34,4.68,3.15,10.54,6,4.49C445.19,568.15,440.33,566.87,441.23,561.76Z">
                                            </path>
                                            <circle class="cls-16" cx="417.57" cy="491.43" r="6"></circle>
                                            <path class="cls-15" d="M413.65,486.8c-6.81,7.33,4.93,16.52,9.41,7C419.85,496.82,412.23,494.8,413.65,486.8Z">
                                            </path>
                                            <circle class="cls-14" cx="417.74" cy="482.95" r="3.89"></circle>
                                            <path class="cls-15" d="M415.19,479.94c-4.41,4.76,3.2,10.72,6.11,4.56C419.22,486.44,414.27,485.13,415.19,479.94Z"></path>
                                            <circle class="cls-14" cx="421.63" cy="494.06" r="3.83"></circle>
                                            <path class="cls-15" d="M419.12,491.11c-4.34,4.67,3.15,10.54,6,4.48C423.08,497.5,418.22,496.21,419.12,491.11Z">
                                            </path>
                                            <circle class="cls-16" cx="562.55" cy="444.14" r="6"></circle>
                                            <path class="cls-15" d="M558.63,439.52c-6.8,7.32,4.93,16.51,9.42,7C564.83,449.53,557.21,447.51,558.63,439.52Z">
                                            </path>
                                            <circle class="cls-14" cx="562.72" cy="435.66" r="3.89"></circle>
                                            <path class="cls-15" d="M560.18,432.66c-4.42,4.75,3.2,10.72,6.11,4.56C564.2,439.16,559.25,437.85,560.18,432.66Z"></path>
                                            <circle class="cls-14" cx="566.61" cy="446.78" r="3.83"></circle>
                                            <path class="cls-15" d="M564.11,443.82c-4.34,4.68,3.14,10.54,6,4.49C568.06,450.21,563.2,448.93,564.11,443.82Z">
                                            </path>
                                            <circle class="cls-16" cx="720.15" cy="541.12" r="6"></circle>
                                            <path class="cls-15" d="M716.23,536.49c-6.8,7.33,4.93,16.52,9.42,7C722.43,546.51,714.81,544.49,716.23,536.49Z">
                                            </path>
                                            <circle class="cls-14" cx="720.32" cy="532.64" r="3.89"></circle>
                                            <path class="cls-15" d="M717.78,529.63c-4.42,4.76,3.2,10.72,6.11,4.56C721.8,536.13,716.85,534.82,717.78,529.63Z"></path>
                                            <circle class="cls-14" cx="724.21" cy="543.75" r="3.83"></circle>
                                            <path class="cls-15" d="M721.71,540.8c-4.34,4.67,3.14,10.54,6,4.48C725.67,547.19,720.8,545.9,721.71,540.8Z">
                                            </path>
                                            <circle class="cls-16" cx="770.89" cy="388.11" r="6"></circle>
                                            <path class="cls-15" d="M767,383.48c-6.8,7.32,4.93,16.51,9.42,7C773.17,393.49,765.55,391.47,767,383.48Z"></path>
                                            <circle class="cls-14" cx="771.06" cy="379.62" r="3.89"></circle>
                                            <path class="cls-15" d="M768.52,376.62c-4.42,4.75,3.2,10.72,6.11,4.56C772.54,383.12,767.59,381.81,768.52,376.62Z"></path>
                                            <circle class="cls-14" cx="774.95" cy="390.74" r="3.83"></circle>
                                            <path class="cls-15" d="M772.45,387.78c-4.34,4.68,3.14,10.54,6,4.49C776.41,394.17,771.54,392.89,772.45,387.78Z">
                                            </path>
                                            <circle class="cls-16" cx="613.38" cy="349.86" r="6"></circle>
                                            <path class="cls-15" d="M609.45,345.23c-6.8,7.33,4.93,16.52,9.42,7C615.65,355.25,608,353.23,609.45,345.23Z">
                                            </path>
                                            <circle class="cls-14" cx="613.54" cy="341.38" r="3.89"></circle>
                                            <path class="cls-15" d="M611,338.37c-4.42,4.76,3.2,10.72,6.11,4.56C615,344.87,610.08,343.56,611,338.37Z"></path>
                                            <circle class="cls-14" cx="617.43" cy="352.49" r="3.83"></circle>
                                            <path class="cls-15" d="M614.93,349.54c-4.34,4.67,3.15,10.54,6,4.48C618.89,355.93,614,354.64,614.93,349.54Z">
                                            </path>
                                            <circle class="cls-16" cx="671.01" cy="368.47" r="6"></circle>
                                            <path class="cls-15" d="M667.09,363.85c-6.81,7.32,4.93,16.51,9.41,7C673.29,373.86,665.67,371.84,667.09,363.85Z">
                                            </path>
                                            <circle class="cls-14" cx="671.18" cy="359.99" r="3.89"></circle>
                                            <path class="cls-15" d="M668.63,357c-4.41,4.75,3.2,10.72,6.11,4.56C672.66,363.49,667.71,362.18,668.63,357Z">
                                            </path>
                                            <circle class="cls-14" cx="312.39" cy="588.23" r="2.14"></circle>
                                            <path class="cls-15" d="M311,586.58c-2.43,2.61,1.76,5.89,3.36,2.5C313.2,590.15,310.48,589.43,311,586.58Z">
                                            </path>
                                            <circle class="cls-14" cx="357.65" cy="588.15" r="2.14"></circle>
                                            <path class="cls-15" d="M356.25,586.49c-2.42,2.62,1.76,5.9,3.36,2.51C358.47,590.07,355.75,589.35,356.25,586.49Z"></path>
                                            <circle class="cls-14" cx="368.55" cy="583.91" r="2.14"></circle>
                                            <path class="cls-15" d="M367.15,582.26c-2.43,2.61,1.76,5.89,3.36,2.5C369.36,585.83,366.64,585.11,367.15,582.26Z"></path>
                                            <circle class="cls-14" cx="378.73" cy="587.47" r="2.14"></circle>
                                            <path class="cls-15" d="M377.33,585.82c-2.43,2.61,1.76,5.89,3.36,2.5C379.54,589.39,376.82,588.67,377.33,585.82Z"></path>
                                            <circle class="cls-14" cx="426.39" cy="562.91" r="2.14"></circle>
                                            <path class="cls-15" d="M425,561.26c-2.43,2.62,1.76,5.9,3.36,2.51C427.21,564.84,424.49,564.12,425,561.26Z">
                                            </path>
                                            <circle class="cls-14" cx="454" cy="565.72" r="2.14"></circle>
                                            <path class="cls-15" d="M452.6,564.07c-2.42,2.61,1.76,5.89,3.36,2.51C454.82,567.64,452.1,566.92,452.6,564.07Z">
                                            </path>
                                            <circle class="cls-14" cx="447.82" cy="554.11" r="2.14"></circle>
                                            <path class="cls-15" d="M446.42,552.46c-2.43,2.61,1.76,5.89,3.36,2.51C448.63,556,445.91,555.31,446.42,552.46Z">
                                            </path>
                                            <circle class="cls-14" cx="472.71" cy="565.72" r="2.14"></circle>
                                            <path class="cls-15" d="M471.31,564.07c-2.43,2.61,1.76,5.89,3.36,2.51C473.52,567.64,470.8,566.92,471.31,564.07Z"></path>
                                            <circle class="cls-14" cx="482.13" cy="530.05" r="2.14"></circle>
                                            <path class="cls-15" d="M480.73,528.4c-2.43,2.61,1.76,5.89,3.36,2.51C482.94,532,480.22,531.25,480.73,528.4Z">
                                            </path>
                                            <circle class="cls-14" cx="518.41" cy="475.16" r="2.14"></circle>
                                            <path class="cls-15" d="M517,473.51c-2.43,2.62,1.76,5.9,3.36,2.51C519.23,477.09,516.5,476.37,517,473.51Z">
                                            </path>
                                            <circle class="cls-14" cx="548.39" cy="442.87" r="2.14"></circle>
                                            <path class="cls-15" d="M547,441.22c-2.43,2.61,1.76,5.89,3.36,2.5C549.2,444.79,546.48,444.07,547,441.22Z">
                                            </path>
                                            <circle class="cls-14" cx="550.64" cy="451.05" r="2.14"></circle>
                                            <path class="cls-15" d="M549.24,449.4c-2.43,2.61,1.76,5.89,3.36,2.51C551.45,453,548.73,452.25,549.24,449.4Z">
                                            </path>
                                            <circle class="cls-14" cx="564.44" cy="472.94" r="2.14"></circle>
                                            <path class="cls-15" d="M563,471.29c-2.43,2.62,1.76,5.9,3.36,2.51C565.25,474.87,562.53,474.15,563,471.29Z">
                                            </path>
                                            <circle class="cls-14" cx="567.39" cy="458.61" r="2.14"></circle>
                                            <path class="cls-15" d="M566,457c-2.42,2.61,1.76,5.89,3.36,2.5C568.21,460.53,565.49,459.81,566,457Z"></path>
                                            <circle class="cls-14" cx="580.65" cy="473.73" r="2.14"></circle>
                                            <path class="cls-15" d="M579.24,472.08c-2.42,2.61,1.76,5.9,3.36,2.51C581.46,475.65,578.74,474.93,579.24,472.08Z"></path>
                                            <circle class="cls-14" cx="595.31" cy="464.52" r="2.14"></circle>
                                            <path class="cls-15" d="M593.91,462.87c-2.43,2.61,1.76,5.89,3.36,2.51C596.12,466.44,593.4,465.72,593.91,462.87Z"></path>
                                            <circle class="cls-14" cx="595.31" cy="475" r="2.14"></circle>
                                            <path class="cls-15" d="M593.91,473.35c-2.43,2.62,1.76,5.9,3.36,2.51C596.12,476.93,593.4,476.21,593.91,473.35Z">
                                            </path>
                                            <circle class="cls-14" cx="758.64" cy="436.89" r="2.14"></circle>
                                            <path class="cls-15" d="M757.24,435.23c-2.43,2.62,1.76,5.9,3.36,2.51C759.45,438.81,756.73,438.09,757.24,435.23Z"></path>
                                            <circle class="cls-14" cx="762.76" cy="419.44" r="2.14"></circle>
                                            <path class="cls-15" d="M761.35,417.79c-2.42,2.61,1.77,5.89,3.37,2.5C763.57,421.36,760.85,420.64,761.35,417.79Z"></path>
                                            <circle class="cls-14" cx="735.51" cy="415.79" r="2.14"></circle>
                                            <path class="cls-15" d="M734.11,414.14c-2.43,2.62,1.76,5.9,3.36,2.51C736.32,417.72,733.6,417,734.11,414.14Z">
                                            </path>
                                            <circle class="cls-14" cx="751.65" cy="421.66" r="2.14"></circle>
                                            <path class="cls-15" d="M750.25,420c-2.43,2.61,1.76,5.89,3.36,2.51C752.46,423.58,749.74,422.86,750.25,420Z">
                                            </path>
                                            <circle class="cls-14" cx="764.9" cy="393.91" r="2.14"></circle>
                                            <path class="cls-15" d="M763.5,392.26c-2.43,2.62,1.76,5.9,3.36,2.51C765.71,395.84,763,395.12,763.5,392.26Z">
                                            </path>
                                            <circle class="cls-14" cx="766.01" cy="407.68" r="2.14"></circle>
                                            <path class="cls-15" d="M764.61,406c-2.43,2.61,1.76,5.89,3.36,2.5C766.82,409.6,764.1,408.88,764.61,406Z"></path>
                                            <circle class="cls-14" cx="758.64" cy="382.57" r="2.14"></circle>
                                            <path class="cls-15" d="M757.24,380.92c-2.43,2.61,1.76,5.89,3.36,2.5C759.45,384.49,756.73,383.77,757.24,380.92Z"></path>
                                            <circle class="cls-14" cx="736.98" cy="381.69" r="2.14"></circle>
                                            <path class="cls-15" d="M735.58,380c-2.42,2.61,1.76,5.89,3.36,2.51C737.8,383.61,735.08,382.89,735.58,380Z">
                                            </path>
                                            <circle class="cls-14" cx="684.53" cy="356.24" r="2.14"></circle>
                                            <path class="cls-15" d="M683.13,354.59c-2.43,2.61,1.76,5.89,3.36,2.5C685.34,358.16,682.62,357.44,683.13,354.59Z"></path>
                                            <circle class="cls-14" cx="681.04" cy="365.99" r="2.14"></circle>
                                            <path class="cls-15" d="M679.64,364.33c-2.43,2.62,1.76,5.9,3.36,2.51C681.85,367.91,679.13,367.19,679.64,364.33Z"></path>
                                            <circle class="cls-14" cx="629.56" cy="354.02" r="2.14"></circle>
                                            <path class="cls-15" d="M628.16,352.37c-2.43,2.61,1.76,5.89,3.36,2.5C630.37,355.94,627.65,355.22,628.16,352.37Z"></path>
                                            <circle class="cls-14" cx="619.37" cy="330.91" r="2.14"></circle>
                                            <path class="cls-15" d="M618,329.26c-2.42,2.61,1.76,5.89,3.36,2.5C620.19,332.83,617.47,332.11,618,329.26Z">
                                            </path>
                                            <circle class="cls-14" cx="584.43" cy="329.98" r="2.14"></circle>
                                            <path class="cls-15" d="M583,328.32c-2.43,2.62,1.76,5.9,3.36,2.51C585.25,331.9,582.53,331.18,583,328.32Z">
                                            </path>
                                            <circle class="cls-14" cx="513.04" cy="348.97" r="2.14"></circle>
                                            <path class="cls-15" d="M511.64,347.32c-2.43,2.61,1.76,5.89,3.36,2.5C513.85,350.89,511.13,350.17,511.64,347.32Z"></path>
                                            <circle class="cls-14" cx="503.12" cy="354.96" r="2.14"></circle>
                                            <path class="cls-15" d="M501.72,353.31c-2.42,2.61,1.76,5.89,3.36,2.5C503.94,356.88,501.22,356.16,501.72,353.31Z"></path>
                                            <circle class="cls-14" cx="493.49" cy="347.63" r="2.14"></circle>
                                            <path class="cls-15" d="M492.09,346c-2.43,2.62,1.76,5.9,3.36,2.51C494.3,349.56,491.58,348.84,492.09,346Z">
                                            </path>
                                            <circle class="cls-14" cx="495.45" cy="358.75" r="2.14"></circle>
                                            <path class="cls-15" d="M494.05,357.1c-2.43,2.61,1.76,5.89,3.36,2.5C496.26,360.67,493.54,360,494.05,357.1Z">
                                            </path>
                                            <circle class="cls-14" cx="483.53" cy="347.88" r="2.14"></circle>
                                            <path class="cls-15" d="M482.13,346.23c-2.42,2.61,1.76,5.89,3.36,2.5C484.35,349.8,481.63,349.08,482.13,346.23Z">
                                            </path>
                                            <circle class="cls-14" cx="486.43" cy="358.02" r="2.14"></circle>
                                            <path class="cls-15" d="M485,356.37c-2.43,2.61,1.76,5.89,3.36,2.5C487.24,359.94,484.52,359.22,485,356.37Z">
                                            </path>
                                            <circle class="cls-14" cx="472.72" cy="350.1" r="2.14"></circle>
                                            <path class="cls-15" d="M471.32,348.45c-2.43,2.61,1.76,5.89,3.36,2.5C473.54,352,470.82,351.3,471.32,348.45Z">
                                            </path>
                                            <circle class="cls-14" cx="439.91" cy="374.06" r="2.14"></circle>
                                            <path class="cls-15" d="M438.51,372.41c-2.43,2.61,1.76,5.89,3.36,2.5C440.72,376,438,375.26,438.51,372.41Z">
                                            </path>
                                            <circle class="cls-14" cx="443.69" cy="381.91" r="2.14"></circle>
                                            <path class="cls-15" d="M442.29,380.26c-2.43,2.61,1.76,5.89,3.36,2.5C444.5,383.83,441.78,383.11,442.29,380.26Z">
                                            </path>
                                            <circle class="cls-14" cx="376.23" cy="388.61" r="2.14"></circle>
                                            <path class="cls-15" d="M374.83,387c-2.43,2.61,1.76,5.9,3.36,2.51C377,390.53,374.32,389.81,374.83,387Z"></path>
                                            <circle class="cls-14" cx="403.75" cy="391.45" r="2.14"></circle>
                                            <path class="cls-15" d="M402.35,389.8c-2.43,2.62,1.76,5.9,3.36,2.51C404.56,393.38,401.84,392.66,402.35,389.8Z">
                                            </path>
                                            <circle class="cls-14" cx="422.37" cy="397.24" r="2.14"></circle>
                                            <path class="cls-15" d="M421,395.59c-2.42,2.62,1.77,5.9,3.37,2.51C423.18,399.17,420.46,398.45,421,395.59Z">
                                            </path>
                                            <circle class="cls-14" cx="405.89" cy="402.55" r="2.14"></circle>
                                            <path class="cls-15" d="M404.49,400.9c-2.43,2.61,1.76,5.89,3.36,2.5C406.7,404.47,404,403.75,404.49,400.9Z">
                                            </path>
                                            <circle class="cls-14" cx="390.4" cy="395.91" r="2.14"></circle>
                                            <path class="cls-15" d="M389,394.26c-2.43,2.62,1.76,5.9,3.36,2.51C391.21,397.84,388.49,397.12,389,394.26Z">
                                            </path>
                                            <circle class="cls-14" cx="378.19" cy="404.77" r="2.14"></circle>
                                            <path class="cls-15" d="M376.79,403.12c-2.43,2.61,1.76,5.89,3.36,2.51C379,406.69,376.28,406,376.79,403.12Z">
                                            </path>
                                            <circle class="cls-14" cx="358.02" cy="407.24" r="2.14"></circle>
                                            <path class="cls-15" d="M356.62,405.58c-2.42,2.62,1.76,5.9,3.36,2.51C358.84,409.16,356.12,408.44,356.62,405.58Z"></path>
                                            <circle class="cls-14" cx="370.37" cy="413.76" r="2.14"></circle>
                                            <path class="cls-15" d="M369,412.11c-2.42,2.61,1.76,5.89,3.37,2.51C371.18,415.68,368.46,415,369,412.11Z"></path>
                                            <circle class="cls-14" cx="394.68" cy="406.32" r="2.14"></circle>
                                            <path class="cls-15" d="M393.28,404.67c-2.43,2.61,1.76,5.89,3.36,2.51C395.49,408.24,392.77,407.52,393.28,404.67Z"></path>
                                            <circle class="cls-14" cx="399.2" cy="416.73" r="2.14"></circle>
                                            <path class="cls-15" d="M397.8,415.08c-2.43,2.61,1.76,5.89,3.36,2.51C400,418.65,397.3,417.93,397.8,415.08Z">
                                            </path>
                                            <circle class="cls-14" cx="381.9" cy="418.95" r="2.14"></circle>
                                            <path class="cls-15" d="M380.5,417.3c-2.42,2.61,1.76,5.89,3.36,2.51C382.72,420.87,380,420.15,380.5,417.3Z">
                                            </path>
                                            <circle class="cls-14" cx="376.23" cy="441.07" r="2.14"></circle>
                                            <path class="cls-15" d="M374.83,439.42c-2.43,2.61,1.76,5.89,3.36,2.5C377,443,374.32,442.27,374.83,439.42Z">
                                            </path>
                                            <circle class="cls-14" cx="374.09" cy="454.03" r="2.14"></circle>
                                            <path class="cls-15" d="M372.69,452.38c-2.43,2.61,1.76,5.89,3.36,2.5C374.9,456,372.18,455.23,372.69,452.38Z">
                                            </path>
                                            <circle class="cls-14" cx="358.9" cy="435.4" r="2.14"></circle>
                                            <path class="cls-15" d="M357.5,433.75c-2.43,2.61,1.76,5.89,3.36,2.51C359.71,437.32,357,436.6,357.5,433.75Z">
                                            </path>
                                            <circle class="cls-14" cx="276.93" cy="477.99" r="2.14"></circle>
                                            <path class="cls-15" d="M275.53,476.34c-2.42,2.62,1.76,5.9,3.36,2.51C277.75,479.92,275,479.2,275.53,476.34Z">
                                            </path>
                                            <circle class="cls-14" cx="285.64" cy="481.99" r="2.14"></circle>
                                            <path class="cls-15" d="M284.24,480.34c-2.43,2.61,1.76,5.89,3.36,2.51C286.45,483.91,283.73,483.19,284.24,480.34Z"></path>
                                            <circle class="cls-14" cx="283.5" cy="471.27" r="2.14"></circle>
                                            <path class="cls-15" d="M282.1,469.62c-2.43,2.61,1.76,5.9,3.36,2.51C284.31,473.19,281.59,472.47,282.1,469.62Z">
                                            </path>
                                            <circle class="cls-14" cx="268.67" cy="486.31" r="2.14"></circle>
                                            <path class="cls-15" d="M267.27,484.66c-2.43,2.62,1.76,5.9,3.36,2.51C269.49,488.24,266.77,487.52,267.27,484.66Z"></path>
                                            <circle class="cls-14" cx="268.67" cy="472.62" r="2.14"></circle>
                                            <path class="cls-15" d="M267.27,471c-2.43,2.61,1.76,5.89,3.36,2.5C269.49,474.54,266.77,473.82,267.27,471Z">
                                            </path>
                                            <circle class="cls-14" cx="364.12" cy="445.81" r="2.14"></circle>
                                            <path class="cls-15" d="M362.72,444.16c-2.43,2.61,1.76,5.89,3.36,2.51C364.93,447.73,362.21,447,362.72,444.16Z">
                                            </path>
                                            <circle class="cls-14" cx="357.93" cy="421.01" r="2.14"></circle>
                                            <path class="cls-15" d="M356.53,419.36c-2.42,2.61,1.76,5.89,3.36,2.51C358.75,422.93,356,422.21,356.53,419.36Z">
                                            </path>
                                            <circle class="cls-14" cx="372.33" cy="429.89" r="2.14"></circle>
                                            <path class="cls-15" d="M370.92,428.23c-2.42,2.62,1.76,5.9,3.37,2.51C373.14,431.81,370.42,431.09,370.92,428.23Z"></path>
                                            <circle class="cls-14" cx="389.07" cy="430.89" r="2.14"></circle>
                                            <path class="cls-15" d="M387.66,429.24c-2.42,2.61,1.76,5.9,3.37,2.51C389.88,432.81,387.16,432.09,387.66,429.24Z"></path>
                                            <circle class="cls-14" cx="596.39" cy="342.04" r="2.14"></circle>
                                            <path class="cls-15" d="M595,340.39c-2.43,2.61,1.76,5.89,3.36,2.51C597.21,344,594.48,343.24,595,340.39Z"></path>
                                            <circle class="cls-14" cx="602.8" cy="332.1" r="2.14"></circle>
                                            <path class="cls-15" d="M601.4,330.45c-2.43,2.61,1.76,5.9,3.36,2.51C603.61,334,600.89,333.3,601.4,330.45Z">
                                            </path>
                                            <circle class="cls-14" cx="604.94" cy="349.37" r="2.14"></circle>
                                            <path class="cls-15" d="M603.54,347.71c-2.43,2.62,1.76,5.9,3.36,2.51C605.75,351.29,603,350.57,603.54,347.71Z">
                                            </path>
                                            <circle class="cls-14" cx="644.27" cy="355.96" r="2.14"></circle>
                                            <path class="cls-15" d="M642.87,354.31c-2.42,2.61,1.76,5.89,3.36,2.5C645.09,357.88,642.37,357.16,642.87,354.31Z"></path>
                                            <circle class="cls-14" cx="656.41" cy="362.4" r="2.14"></circle>
                                            <path class="cls-15" d="M655,360.74c-2.43,2.62,1.76,5.9,3.36,2.51C657.22,364.32,654.5,363.6,655,360.74Z"></path>
                                            <circle class="cls-14" cx="659.88" cy="356.24" r="2.14"></circle>
                                            <path class="cls-15" d="M658.48,354.59c-2.42,2.61,1.76,5.89,3.36,2.5C660.7,358.16,658,357.44,658.48,354.59Z">
                                            </path>
                                            <circle class="cls-14" cx="755.78" cy="403.67" r="2.14"></circle>
                                            <path class="cls-15" d="M754.38,402c-2.43,2.61,1.76,5.89,3.36,2.5C756.59,405.59,753.87,404.87,754.38,402Z">
                                            </path>
                                            <circle class="cls-14" cx="608.64" cy="468.98" r="2.14"></circle>
                                            <path class="cls-15" d="M607.24,467.33c-2.42,2.61,1.76,5.89,3.36,2.5C609.46,470.9,606.74,470.18,607.24,467.33Z">
                                            </path>
                                            <circle class="cls-14" cx="612.01" cy="437.87" r="2.14"></circle>
                                            <path class="cls-15" d="M610.6,436.22c-2.42,2.61,1.76,5.89,3.36,2.51C612.82,439.79,610.1,439.07,610.6,436.22Z">
                                            </path>
                                            <circle class="cls-14" cx="682.17" cy="564.47" r="2.14"></circle>
                                            <path class="cls-15" d="M680.77,562.82c-2.43,2.62,1.76,5.9,3.36,2.51C683,566.4,680.26,565.68,680.77,562.82Z">
                                            </path>
                                            <circle class="cls-14" cx="698.64" cy="552.48" r="2.14"></circle>
                                            <path class="cls-15" d="M697.24,550.82c-2.43,2.62,1.76,5.9,3.36,2.51C699.45,554.4,696.73,553.68,697.24,550.82Z">
                                            </path>
                                            <circle class="cls-14" cx="706.38" cy="564.39" r="2.14"></circle>
                                            <path class="cls-15" d="M705,562.74c-2.43,2.61,1.76,5.9,3.36,2.51C707.19,566.31,704.47,565.59,705,562.74Z">
                                            </path>
                                            <circle class="cls-14" cx="683.8" cy="552.86" r="2.14"></circle>
                                            <path class="cls-15" d="M682.4,551.21c-2.43,2.62,1.76,5.9,3.36,2.51C684.61,554.79,681.89,554.07,682.4,551.21Z">
                                            </path>
                                            <circle class="cls-14" cx="715.69" cy="553.43" r="2.14"></circle>
                                            <path class="cls-15" d="M714.29,551.77c-2.43,2.62,1.76,5.9,3.36,2.51C716.5,555.35,713.78,554.63,714.29,551.77Z">
                                            </path>
                                            <circle class="cls-14" cx="719.9" cy="565.19" r="2.14"></circle>
                                            <path class="cls-15" d="M718.5,563.54c-2.43,2.61,1.76,5.89,3.36,2.5C720.72,567.11,718,566.39,718.5,563.54Z">
                                            </path>
                                            <circle class="cls-14" cx="634.68" cy="476.78" r="2.14"></circle>
                                            <path class="cls-15" d="M633.28,475.12c-2.42,2.62,1.76,5.9,3.36,2.51C635.5,478.7,632.78,478,633.28,475.12Z">
                                            </path>
                                            <circle class="cls-14" cx="602.42" cy="434.67" r="2.14"></circle>
                                            <path class="cls-15" d="M601,433c-2.43,2.62,1.76,5.9,3.36,2.51C603.23,436.59,600.51,435.87,601,433Z"></path>
                                            <circle class="cls-14" cx="614.42" cy="474.92" r="2.14"></circle>
                                            <path class="cls-15" d="M613,473.27c-2.42,2.61,1.76,5.9,3.37,2.51C615.23,476.84,612.51,476.12,613,473.27Z">
                                            </path>
                                            <circle class="cls-14" cx="287.78" cy="584.39" r="2.14"></circle>
                                            <path class="cls-15" d="M286.38,582.74c-2.43,2.61,1.76,5.89,3.36,2.5C288.59,586.31,285.87,585.59,286.38,582.74Z"></path>
                                            <circle class="cls-14" cx="265.3" cy="578.59" r="2.14"></circle>
                                            <path class="cls-15" d="M263.9,576.93c-2.42,2.62,1.76,5.9,3.36,2.51C266.12,580.51,263.4,579.79,263.9,576.93Z">
                                            </path>
                                            <circle class="cls-14" cx="267.72" cy="586.61" r="2.14"></circle>
                                            <path class="cls-15" d="M266.32,585c-2.43,2.61,1.76,5.89,3.36,2.51C268.53,588.53,265.81,587.81,266.32,585Z">
                                            </path>
                                            <circle class="cls-14" cx="296.07" cy="585.92" r="2.14"></circle>
                                            <path class="cls-15" d="M294.66,584.27c-2.42,2.62,1.77,5.9,3.37,2.51C296.88,587.85,294.16,587.13,294.66,584.27Z"></path>
                                            <circle class="cls-14" cx="303.71" cy="586.61" r="2.14"></circle>
                                            <path class="cls-15" d="M302.31,585c-2.43,2.61,1.76,5.89,3.36,2.51C304.52,588.53,301.8,587.81,302.31,585Z">
                                            </path>
                                            <circle class="cls-14" cx="675.07" cy="371.11" r="3.83"></circle>
                                            <path class="cls-15" d="M672.56,368.15c-4.34,4.68,3.15,10.54,6,4.49C676.52,374.54,671.66,373.26,672.56,368.15Z">
                                            </path>
                                            <circle class="cls-16" cx="432.02" cy="389.25" r="6"></circle>
                                            <path class="cls-15" d="M428.1,384.62c-6.8,7.32,4.93,16.52,9.42,7C434.3,394.63,426.68,392.61,428.1,384.62Z">
                                            </path>
                                            <circle class="cls-14" cx="432.19" cy="380.76" r="3.89"></circle>
                                            <path class="cls-15" d="M429.65,377.76c-4.42,4.75,3.2,10.72,6.11,4.56C433.67,384.26,428.72,383,429.65,377.76Z">
                                            </path>
                                            <circle class="cls-14" cx="436.08" cy="391.88" r="3.83"></circle>
                                            <path class="cls-15" d="M433.58,388.92c-4.35,4.68,3.14,10.55,6,4.49C437.53,395.32,432.67,394,433.58,388.92Z">
                                            </path>
                                            <circle class="cls-16" cx="736.98" cy="397.82" r="12.52"></circle>
                                            <path class="cls-15" d="M728.79,388.15c-14.21,15.3,10.3,34.49,19.66,14.67C741.74,409.06,725.82,404.85,728.79,388.15Z"></path>
                                            <circle class="cls-16" cx="712.54" cy="393.99" r="7.95"></circle>
                                            <path class="cls-15" d="M707.34,387.86c-9,9.71,6.54,21.89,12.48,9.31C715.56,401.13,705.46,398.46,707.34,387.86Z"></path>
                                            <circle class="cls-14" cx="558.76" cy="349.45" r="8.75"></circle>
                                            <path class="cls-15" d="M553,342.7c-9.92,10.68,7.19,24.08,13.73,10.24C562.08,357.3,551,354.36,553,342.7Z">
                                            </path>
                                            <circle class="cls-14" cx="560.98" cy="330.06" r="14.01"></circle>
                                            <path class="cls-15" d="M551.81,319.24c-15.89,17.11,11.52,38.59,22,16.41C566.3,342.64,548.49,337.92,551.81,319.24Z"></path>
                                            <circle class="cls-16" cx="578.14" cy="343.52" r="12.52"></circle>
                                            <path class="cls-15" d="M569.94,333.85c-14.2,15.29,10.3,34.49,19.67,14.67C582.9,354.76,567,350.55,569.94,333.85Z"></path>
                                            <circle class="cls-16" cx="553.7" cy="339.69" r="7.95"></circle>
                                            <path class="cls-15" d="M548.5,333.56c-9,9.71,6.53,21.89,12.48,9.31C556.72,346.83,546.61,344.16,548.5,333.56Z">
                                            </path>
                                            <circle class="cls-14" cx="453.34" cy="373.24" r="8.75"></circle>
                                            <path class="cls-15" d="M447.62,366.49c-9.92,10.68,7.19,24.09,13.73,10.25C456.67,381.1,445.55,378.15,447.62,366.49Z"></path>
                                            <circle class="cls-14" cx="455.56" cy="353.85" r="14.01"></circle>
                                            <path class="cls-15" d="M446.39,343c-15.88,17.11,11.53,38.58,22,16.41C460.88,366.43,443.08,361.72,446.39,343Z">
                                            </path>
                                            <circle class="cls-16" cx="472.72" cy="367.31" r="12.52"></circle>
                                            <path class="cls-15" d="M464.53,357.64c-14.21,15.3,10.3,34.5,19.66,14.68C477.48,378.56,461.56,374.34,464.53,357.64Z"></path>
                                            <circle class="cls-16" cx="448.28" cy="363.49" r="7.95"></circle>
                                            <path class="cls-15" d="M443.08,357.35c-9,9.71,6.54,21.9,12.48,9.32C451.3,370.63,441.2,368,443.08,357.35Z">
                                            </path>
                                            <circle class="cls-14" cx="339.52" cy="466.11" r="8.75"></circle>
                                            <path class="cls-15" d="M333.79,459.35c-9.91,10.69,7.2,24.09,13.74,10.25C342.84,474,331.72,471,333.79,459.35Z">
                                            </path>
                                            <circle class="cls-14" cx="341.74" cy="446.72" r="14.01"></circle>
                                            <path class="cls-15" d="M332.57,435.9c-15.89,17.11,11.52,38.58,22,16.41C347.06,459.3,329.25,454.58,332.57,435.9Z"></path>
                                            <circle class="cls-16" cx="358.9" cy="460.17" r="12.52"></circle>
                                            <path class="cls-15" d="M350.7,450.51C336.5,465.8,361,485,370.37,465.18,363.65,471.42,347.73,467.21,350.7,450.51Z"></path>
                                            <circle class="cls-16" cx="334.45" cy="456.35" r="7.95"></circle>
                                            <path class="cls-15" d="M329.25,450.21c-9,9.71,6.54,21.9,12.49,9.32C337.47,463.49,327.37,460.82,329.25,450.21Z">
                                            </path>
                                            <circle class="cls-14" cx="234.91" cy="486.4" r="8.75"></circle>
                                            <path class="cls-15" d="M229.18,479.64c-9.92,10.69,7.2,24.09,13.74,10.25C238.23,494.25,227.11,491.31,229.18,479.64Z"></path>
                                            <circle class="cls-14" cx="237.12" cy="467.01" r="14.01"></circle>
                                            <path class="cls-15" d="M228,456.19c-15.89,17.11,11.52,38.58,22,16.41C242.45,479.59,224.64,474.87,228,456.19Z">
                                            </path>
                                            <circle class="cls-16" cx="254.29" cy="480.46" r="12.52"></circle>
                                            <path class="cls-15" d="M246.09,470.8c-14.2,15.29,10.3,34.49,19.66,14.67C259,491.71,243.12,487.5,246.09,470.8Z">
                                            </path>
                                            <circle class="cls-16" cx="229.84" cy="476.64" r="7.95"></circle>
                                            <path class="cls-15" d="M224.64,470.51c-9,9.7,6.54,21.89,12.48,9.31C232.86,483.78,222.76,481.11,224.64,470.51Z">
                                            </path>
                                            <circle class="cls-14" cx="232.32" cy="588.79" r="8.75"></circle>
                                            <path class="cls-15" d="M226.59,582c-9.92,10.68,7.19,24.09,13.73,10.25C235.64,596.65,224.52,593.7,226.59,582Z">
                                            </path>
                                            <circle class="cls-14" cx="234.53" cy="569.4" r="14.01"></circle>
                                            <path class="cls-15" d="M225.36,558.59c-15.88,17.11,11.53,38.58,22,16.41C239.85,582,222.05,577.27,225.36,558.59Z"></path>
                                            <circle class="cls-16" cx="251.69" cy="582.86" r="12.52"></circle>
                                            <path class="cls-15" d="M243.5,573.2c-14.21,15.29,10.3,34.49,19.66,14.67C256.45,594.11,240.53,589.9,243.5,573.2Z"></path>
                                            <circle class="cls-16" cx="227.25" cy="579.04" r="7.95"></circle>
                                            <path class="cls-15" d="M222.05,572.9c-9,9.71,6.54,21.9,12.48,9.32C230.27,586.18,220.17,583.5,222.05,572.9Z">
                                            </path>
                                            <circle class="cls-14" cx="462.75" cy="557.7" r="8.75"></circle>
                                            <path class="cls-15" d="M457,551c-9.92,10.68,7.19,24.08,13.73,10.24C466.07,565.55,455,562.61,457,551Z"></path>
                                            <circle class="cls-14" cx="464.97" cy="538.31" r="14.01"></circle>
                                            <path class="cls-15" d="M455.8,527.5c-15.89,17.1,11.52,38.58,22,16.41C470.29,550.89,452.48,546.18,455.8,527.5Z">
                                            </path>
                                            <circle class="cls-14" cx="390.31" cy="403.63" r="9.71"></circle>
                                            <path class="cls-15" d="M384,396.13c-11,11.86,8,26.74,15.24,11.38C394,412.34,381.66,409.08,384,396.13Z"></path>
                                            <circle class="cls-14" cx="394.98" cy="416.41" r="6.53"></circle>
                                            <path class="cls-15" d="M390.7,411.37c-7.4,8,5.37,18,10.26,7.65C397.46,422.28,389.16,420.08,390.7,411.37Z">
                                            </path>
                                            <circle class="cls-16" cx="482.13" cy="551.77" r="12.52"></circle>
                                            <path class="cls-15" d="M473.93,542.1c-14.2,15.3,10.3,34.49,19.67,14.67C486.89,563,471,558.8,473.93,542.1Z">
                                            </path>
                                            <circle class="cls-16" cx="381.53" cy="412.5" r="12.52"></circle>
                                            <path class="cls-15" d="M373.33,402.83c-14.2,15.3,10.3,34.49,19.67,14.67C386.29,423.74,370.37,419.53,373.33,402.83Z"></path>
                                            <circle class="cls-14" cx="356.29" cy="520.82" r="4.49"></circle>
                                            <path class="cls-15" d="M353.35,517.35c-5.09,5.49,3.7,12.37,7.06,5.26C358,524.85,352.29,523.34,353.35,517.35Z">
                                            </path>
                                            <circle class="cls-14" cx="358.45" cy="526.73" r="3.02"></circle>
                                            <path class="cls-15" d="M356.48,524.4c-3.43,3.69,2.48,8.32,4.74,3.54C359.6,529.45,355.76,528.43,356.48,524.4Z">
                                            </path>
                                            <circle class="cls-16" cx="352.23" cy="524.92" r="5.79"></circle>
                                            <path class="cls-15" d="M348.44,520.45c-6.57,7.08,4.77,16,9.1,6.79C354.43,530.13,347.07,528.18,348.44,520.45Z">
                                            </path>
                                            <circle class="cls-14" cx="458.57" cy="465.72" r="4.49"></circle>
                                            <path class="cls-15" d="M455.63,462.26c-5.09,5.48,3.69,12.36,7.05,5.26C460.28,469.76,454.57,468.25,455.63,462.26Z"></path>
                                            <circle class="cls-14" cx="460.73" cy="471.64" r="3.02"></circle>
                                            <path class="cls-15" d="M458.75,469.31c-3.42,3.68,2.49,8.31,4.74,3.53C461.88,474.35,458,473.33,458.75,469.31Z">
                                            </path>
                                            <circle class="cls-16" cx="454.51" cy="469.83" r="5.79"></circle>
                                            <path class="cls-15" d="M450.72,465.36c-6.57,7.07,4.76,15.95,9.09,6.78C456.71,475,449.34,473.08,450.72,465.36Z">
                                            </path>
                                            <circle class="cls-14" cx="511.73" cy="413.81" r="4.49"></circle>
                                            <path class="cls-15" d="M508.79,410.34c-5.09,5.49,3.69,12.37,7.05,5.26C513.43,417.84,507.73,416.33,508.79,410.34Z"></path>
                                            <circle class="cls-14" cx="513.89" cy="419.72" r="3.02"></circle>
                                            <path class="cls-15" d="M511.91,417.39c-3.43,3.69,2.48,8.32,4.74,3.54C515,422.44,511.19,421.42,511.91,417.39Z">
                                            </path>
                                            <circle class="cls-16" cx="507.67" cy="417.91" r="5.79"></circle>
                                            <path class="cls-15" d="M503.87,413.44c-6.56,7.08,4.77,16,9.1,6.79C509.87,423.12,502.5,421.17,503.87,413.44Z">
                                            </path>
                                            <circle class="cls-14" cx="664.36" cy="420.02" r="4.49"></circle>
                                            <path class="cls-15" d="M661.42,416.55c-5.09,5.49,3.7,12.37,7.05,5.26C666.07,424.05,660.36,422.54,661.42,416.55Z"></path>
                                            <circle class="cls-14" cx="666.52" cy="425.93" r="3.02"></circle>
                                            <path class="cls-15" d="M664.54,423.6c-3.42,3.69,2.49,8.32,4.75,3.54C667.67,428.65,663.83,427.63,664.54,423.6Z">
                                            </path>
                                            <circle class="cls-16" cx="660.3" cy="424.12" r="5.79"></circle>
                                            <path class="cls-15" d="M656.51,419.65c-6.57,7.08,4.76,16,9.1,6.79C662.5,429.33,655.14,427.38,656.51,419.65Z">
                                            </path>
                                            <circle class="cls-14" cx="723.28" cy="479.39" r="4.49"></circle>
                                            <path class="cls-15" d="M720.34,475.93c-5.09,5.48,3.7,12.37,7.06,5.26C725,483.43,719.28,481.92,720.34,475.93Z">
                                            </path>
                                            <circle class="cls-14" cx="725.44" cy="485.31" r="3.02"></circle>
                                            <path class="cls-15" d="M723.46,483c-3.42,3.69,2.49,8.32,4.75,3.54C726.59,488,722.75,487,723.46,483Z"></path>
                                            <circle class="cls-16" cx="719.22" cy="483.5" r="5.79"></circle>
                                            <path class="cls-15" d="M715.43,479c-6.57,7.07,4.76,16,9.1,6.78C721.42,488.7,714.06,486.75,715.43,479Z"></path>
                                            <circle class="cls-14" cx="456.34" cy="445.89" r="4.49"></circle>
                                            <path class="cls-15" d="M453.4,442.43c-5.09,5.48,3.7,12.37,7.05,5.26C458.05,449.93,452.34,448.42,453.4,442.43Z">
                                            </path>
                                            <circle class="cls-14" cx="458.5" cy="451.81" r="3.02"></circle>
                                            <path class="cls-15" d="M456.52,449.48c-3.42,3.69,2.49,8.32,4.75,3.53C459.65,454.52,455.81,453.5,456.52,449.48Z"></path>
                                            <circle class="cls-16" cx="452.28" cy="450" r="5.79"></circle>
                                            <path class="cls-15" d="M448.49,445.53c-6.57,7.07,4.76,16,9.09,6.78C454.48,455.2,447.12,453.25,448.49,445.53Z">
                                            </path>
                                            <circle class="cls-14" cx="234.65" cy="520.07" r="4.49"></circle>
                                            <path class="cls-15" d="M231.71,516.61c-5.09,5.48,3.7,12.37,7.06,5.26C236.36,524.11,230.65,522.6,231.71,516.61Z"></path>
                                            <circle class="cls-14" cx="236.81" cy="525.99" r="3.02"></circle>
                                            <path class="cls-15" d="M234.84,523.66c-3.43,3.69,2.48,8.32,4.74,3.54C238,528.7,234.12,527.69,234.84,523.66Z">
                                            </path>
                                            <circle class="cls-16" cx="230.59" cy="524.18" r="5.79"></circle>
                                            <path class="cls-15" d="M226.8,519.71c-6.57,7.07,4.76,15.95,9.1,6.78C232.79,529.38,225.43,527.43,226.8,519.71Z">
                                            </path>
                                            <circle class="cls-14" cx="377.43" cy="482.51" r="4.49"></circle>
                                            <path class="cls-15" d="M374.49,479c-5.1,5.48,3.69,12.37,7.05,5.26C379.13,486.54,373.42,485,374.49,479Z"></path>
                                            <circle class="cls-14" cx="379.58" cy="488.42" r="3.02"></circle>
                                            <path class="cls-15" d="M377.61,486.09c-3.43,3.69,2.48,8.32,4.74,3.54C380.73,491.13,376.89,490.12,377.61,486.09Z"></path>
                                            <circle class="cls-16" cx="373.36" cy="486.61" r="5.79"></circle>
                                            <path class="cls-15" d="M369.57,482.14c-6.57,7.07,4.77,15.95,9.1,6.78C375.56,491.81,368.2,489.86,369.57,482.14Z"></path>
                                            <circle class="cls-14" cx="421.32" cy="457.59" r="4.49"></circle>
                                            <path class="cls-15" d="M418.38,454.12c-5.1,5.49,3.69,12.37,7.05,5.26C423,461.62,417.31,460.11,418.38,454.12Z">
                                            </path>
                                            <circle class="cls-14" cx="423.47" cy="463.5" r="3.02"></circle>
                                            <path class="cls-15" d="M421.5,461.17c-3.43,3.69,2.48,8.32,4.74,3.54C424.62,466.22,420.78,465.2,421.5,461.17Z">
                                            </path>
                                            <circle class="cls-16" cx="417.25" cy="461.69" r="5.79"></circle>
                                            <path class="cls-15" d="M413.46,457.22c-6.57,7.08,4.77,16,9.1,6.79C419.45,466.89,412.09,465,413.46,457.22Z">
                                            </path>
                                            <circle class="cls-14" cx="753.99" cy="500.79" r="4.49"></circle>
                                            <path class="cls-15" d="M751.05,497.32c-5.1,5.49,3.69,12.37,7.05,5.27C755.69,504.82,750,503.31,751.05,497.32Z">
                                            </path>
                                            <circle class="cls-14" cx="756.15" cy="506.7" r="3.02"></circle>
                                            <path class="cls-15" d="M754.17,504.37c-3.43,3.69,2.48,8.32,4.74,3.54C757.29,509.42,753.45,508.4,754.17,504.37Z"></path>
                                            <circle class="cls-16" cx="749.92" cy="504.89" r="5.79"></circle>
                                            <path class="cls-15" d="M746.13,500.42c-6.57,7.08,4.77,16,9.1,6.79C752.13,510.1,744.76,508.15,746.13,500.42Z">
                                            </path>
                                            <circle class="cls-14" cx="708.15" cy="436.24" r="4.49"></circle>
                                            <path class="cls-15" d="M705.21,432.77c-5.09,5.49,3.69,12.37,7,5.26C709.86,440.27,704.15,438.76,705.21,432.77Z">
                                            </path>
                                            <circle class="cls-14" cx="710.31" cy="442.15" r="3.02"></circle>
                                            <path class="cls-15" d="M708.33,439.82c-3.42,3.69,2.49,8.32,4.74,3.54C711.46,444.87,707.62,443.85,708.33,439.82Z"></path>
                                            <circle class="cls-16" cx="704.09" cy="440.34" r="5.79"></circle>
                                            <path class="cls-15" d="M700.3,435.87c-6.57,7.08,4.76,16,9.09,6.79C706.29,445.55,698.92,443.6,700.3,435.87Z">
                                            </path>
                                            <circle class="cls-16" cx="457.69" cy="547.94" r="7.95"></circle>
                                            <path class="cls-15" d="M452.48,541.81c-9,9.71,6.54,21.89,12.49,9.31C460.71,555.08,450.6,552.41,452.48,541.81Z">
                                            </path>
                                            <circle class="cls-14" cx="390.81" cy="585.19" r="8.75"></circle>
                                            <path class="cls-15" d="M385.08,578.44c-9.92,10.68,7.2,24.09,13.73,10.25C394.13,593.05,383,590.1,385.08,578.44Z"></path>
                                            <circle class="cls-14" cx="393.02" cy="565.8" r="14.01"></circle>
                                            <path class="cls-15" d="M383.86,555c-15.89,17.11,11.52,38.58,22,16.41C398.35,578.38,380.54,573.67,383.86,555Z">
                                            </path>
                                            <circle class="cls-16" cx="410.18" cy="579.26" r="12.52"></circle>
                                            <path class="cls-15" d="M402,569.59c-14.2,15.3,10.3,34.5,19.66,14.68C414.94,590.51,399,586.29,402,569.59Z">
                                            </path>
                                            <circle class="cls-16" cx="385.74" cy="575.44" r="7.95"></circle>
                                            <path class="cls-15" d="M380.54,569.3c-9,9.71,6.54,21.9,12.48,9.32C388.76,582.58,378.66,579.9,380.54,569.3Z">
                                            </path>
                                            <circle class="cls-14" cx="528.06" cy="471.35" r="8.75"></circle>
                                            <path class="cls-15" d="M522.34,464.6c-9.92,10.68,7.19,24.09,13.73,10.25C531.39,479.21,520.27,476.26,522.34,464.6Z"></path>
                                            <circle class="cls-14" cx="530.28" cy="451.96" r="14.01"></circle>
                                            <path class="cls-15" d="M521.11,441.15c-15.88,17.11,11.53,38.58,22,16.41C535.6,464.54,517.8,459.83,521.11,441.15Z"></path>
                                            <circle class="cls-16" cx="547.44" cy="465.42" r="12.52"></circle>
                                            <path class="cls-15" d="M539.25,455.75c-14.21,15.3,10.3,34.5,19.66,14.67C552.2,476.67,536.28,472.45,539.25,455.75Z"></path>
                                            <circle class="cls-16" cx="523" cy="461.6" r="7.95"></circle>
                                            <path class="cls-15" d="M517.8,455.46c-9,9.71,6.54,21.9,12.48,9.31C526,468.74,515.92,466.06,517.8,455.46Z">
                                            </path>
                                            <circle class="cls-14" cx="583.57" cy="457.36" r="8.75"></circle>
                                            <path class="cls-15" d="M577.84,450.61c-9.91,10.68,7.2,24.09,13.74,10.25C586.89,465.22,575.77,462.27,577.84,450.61Z"></path>
                                            <circle class="cls-14" cx="472.19" cy="451.65" r="8.75"></circle>
                                            <path class="cls-15" d="M466.47,444.9c-9.92,10.68,7.19,24.09,13.73,10.25C475.52,459.51,464.4,456.56,466.47,444.9Z"></path>
                                            <circle class="cls-14" cx="369.31" cy="525.04" r="8.75"></circle>
                                            <path class="cls-15" d="M363.59,518.29c-9.92,10.68,7.19,24.09,13.73,10.25C372.63,532.9,361.51,530,363.59,518.29Z"></path>
                                            <circle class="cls-14" cx="585.78" cy="437.97" r="14.01"></circle>
                                            <path class="cls-15" d="M576.62,427.16c-15.89,17.11,11.52,38.58,22,16.41C591.11,450.55,573.3,445.84,576.62,427.16Z"></path>
                                            <circle class="cls-16" cx="602.95" cy="451.43" r="12.52"></circle>
                                            <path class="cls-15" d="M594.75,441.76c-14.2,15.3,10.3,34.5,19.67,14.68C607.7,462.68,591.78,458.46,594.75,441.76Z"></path>
                                            <circle class="cls-16" cx="578.5" cy="447.61" r="7.95"></circle>
                                            <path class="cls-15" d="M573.3,441.47c-9,9.71,6.54,21.9,12.48,9.32C581.52,454.75,571.42,452.07,573.3,441.47Z">
                                            </path>
                                            <circle class="cls-16" cx="437.77" cy="436.56" r="7.95"></circle>
                                            <path class="cls-15" d="M432.56,430.43c-9,9.7,6.54,21.89,12.49,9.31C440.79,443.7,430.68,441,432.56,430.43Z">
                                            </path>
                                            <circle class="cls-16" cx="396.64" cy="523.88" r="7.95"></circle>
                                            <path class="cls-15" d="M391.44,517.74c-9,9.71,6.54,21.9,12.48,9.32C399.66,531,389.55,528.34,391.44,517.74Z">
                                            </path>
                                            <circle class="cls-16" cx="388.26" cy="504.35" r="7.95"></circle>
                                            <path class="cls-15" d="M383.06,498.21c-9,9.71,6.54,21.9,12.48,9.31C391.28,511.49,381.17,508.81,383.06,498.21Z">
                                            </path>
                                            <circle class="cls-16" cx="523" cy="388.42" r="7.95"></circle>
                                            <path class="cls-15" d="M517.8,382.28c-9,9.71,6.54,21.89,12.48,9.31C526,395.55,515.92,392.88,517.8,382.28Z">
                                            </path>
                                            <circle class="cls-16" cx="730.39" cy="461.78" r="7.95"></circle>
                                            <path class="cls-15" d="M725.19,455.64c-9,9.71,6.54,21.89,12.48,9.31C733.41,468.91,723.31,466.24,725.19,455.64Z"></path>
                                            <circle class="cls-16" cx="753.12" cy="486.31" r="7.95"></circle>
                                            <path class="cls-15" d="M747.92,480.17c-9,9.71,6.54,21.9,12.48,9.32C756.14,493.45,746,490.77,747.92,480.17Z">
                                            </path>
                                            <circle class="cls-16" cx="248.54" cy="521.59" r="7.95"></circle>
                                            <path class="cls-15" d="M243.34,515.45c-9,9.71,6.54,21.89,12.48,9.31C251.56,528.73,241.46,526.05,243.34,515.45Z"></path>
                                            <circle class="cls-16" cx="357.62" cy="499.01" r="7.95"></circle>
                                            <path class="cls-15" d="M352.42,492.88c-9,9.71,6.53,21.89,12.48,9.31C360.64,506.15,350.53,503.48,352.42,492.88Z"></path>
                                            <circle class="cls-14" cx="623.8" cy="470.26" r="8.75"></circle>
                                            <path class="cls-15" d="M618.07,463.51c-9.91,10.68,7.2,24.09,13.74,10.25C627.12,478.12,616,475.18,618.07,463.51Z"></path>
                                            <circle class="cls-14" cx="626.02" cy="450.87" r="14.01"></circle>
                                            <path class="cls-15" d="M616.85,440.06c-15.89,17.11,11.52,38.58,22,16.41C631.34,463.45,613.53,458.74,616.85,440.06Z"></path>
                                            <circle class="cls-16" cx="643.18" cy="464.33" r="12.52"></circle>
                                            <path class="cls-15" d="M635,454.67c-14.2,15.29,10.3,34.49,19.67,14.67C647.93,475.58,632,471.37,635,454.67Z">
                                            </path>
                                            <circle class="cls-14" cx="354.38" cy="128.35" r="7.67"></circle>
                                            <path class="cls-15" d="M349.36,122.43c-8.69,9.36,6.31,21.11,12,9C357.29,135.23,347.55,132.65,349.36,122.43Z">
                                            </path>
                                            <circle class="cls-14" cx="380.28" cy="128.99" r="8.31"></circle>
                                            <path class="cls-15" d="M374.84,122.58c-9.42,10.14,6.83,22.88,13.05,9.73C383.43,136.45,372.87,133.65,374.84,122.58Z"></path>
                                            <circle class="cls-14" cx="367.98" cy="129.07" r="6.87"></circle>
                                            <path class="cls-15" d="M363.49,123.77c-7.79,8.39,5.64,18.91,10.78,8C370.59,135.24,361.86,132.93,363.49,123.77Z"></path>
                                            <circle class="cls-16" cx="360.88" cy="130.51" r="5.02"></circle>
                                            <path class="cls-15" d="M357.59,126.64c-5.69,6.13,4.13,13.83,7.89,5.88C362.79,135,356.4,133.34,357.59,126.64Z">
                                            </path>
                                            <circle class="cls-16" cx="374.85" cy="131.45" r="5.02"></circle>
                                            <path class="cls-15" d="M371.56,127.58c-5.69,6.13,4.13,13.83,7.89,5.88C376.76,136,370.37,134.28,371.56,127.58Z">
                                            </path>
                                            <circle class="cls-14" cx="388.3" cy="131.64" r="6.87"></circle>
                                            <path class="cls-15" d="M383.8,126.34c-7.79,8.38,5.65,18.91,10.79,8C390.91,137.81,382.18,135.49,383.8,126.34Z">
                                            </path>
                                            <circle class="cls-14" cx="408.98" cy="131.32" r="6.87"></circle>
                                            <path class="cls-15" d="M404.49,126c-7.79,8.39,5.65,18.92,10.78,8C411.59,137.49,402.86,135.18,404.49,126Z">
                                            </path>
                                            <circle class="cls-14" cx="400.94" cy="129.62" r="8.62"></circle>
                                            <path class="cls-15" d="M395.3,123c-9.77,10.52,7.09,23.73,13.54,10.09C404.22,137.36,393.26,134.46,395.3,123Z">
                                            </path>
                                            <circle class="cls-16" cx="395.59" cy="132.95" r="5.02"></circle>
                                            <path class="cls-15" d="M392.31,129.07c-5.7,6.13,4.13,13.83,7.88,5.88C397.5,137.46,391.12,135.77,392.31,129.07Z"></path>
                                            <circle class="cls-16" cx="409.56" cy="133.89" r="5.02"></circle>
                                            <path class="cls-15" d="M406.28,130c-5.7,6.13,4.13,13.83,7.88,5.88C411.47,138.4,405.09,136.71,406.28,130Z">
                                            </path>
                                            <circle class="cls-14" cx="263.59" cy="790.72" r="7.67"></circle>
                                            <path class="cls-15" d="M258.57,784.8c-8.69,9.37,6.31,21.12,12,9C266.5,797.6,256.76,795,258.57,784.8Z"></path>
                                            <circle class="cls-14" cx="289.49" cy="791.36" r="8.31"></circle>
                                            <path class="cls-15" d="M284.05,785c-9.42,10.15,6.83,22.88,13,9.73C292.64,798.82,282.08,796,284.05,785Z"></path>
                                            <circle class="cls-14" cx="277.19" cy="791.44" r="6.87"></circle>
                                            <path class="cls-15" d="M272.69,786.14c-7.78,8.39,5.65,18.92,10.79,8.05C279.8,797.61,271.07,795.3,272.69,786.14Z"></path>
                                            <circle class="cls-16" cx="270.09" cy="792.89" r="5.02"></circle>
                                            <path class="cls-15" d="M266.8,789c-5.69,6.14,4.13,13.83,7.89,5.88C272,797.4,265.61,795.71,266.8,789Z"></path>
                                            <circle class="cls-16" cx="284.06" cy="793.83" r="5.02"></circle>
                                            <path class="cls-15" d="M280.77,790c-5.69,6.14,4.13,13.83,7.89,5.88C286,798.34,279.58,796.65,280.77,790Z">
                                            </path>
                                            <circle class="cls-14" cx="297.51" cy="794.01" r="6.87"></circle>
                                            <path class="cls-15" d="M293,788.71c-7.79,8.39,5.65,18.92,10.79,8C300.12,800.18,291.38,797.87,293,788.71Z">
                                            </path>
                                            <circle class="cls-14" cx="318.19" cy="793.69" r="6.87"></circle>
                                            <path class="cls-15" d="M313.7,788.39c-7.79,8.39,5.65,18.92,10.78,8.05C320.8,799.86,312.07,797.55,313.7,788.39Z"></path>
                                            <circle class="cls-14" cx="310.15" cy="791.99" r="8.62"></circle>
                                            <path class="cls-15" d="M304.51,785.34c-9.77,10.53,7.09,23.74,13.53,10.1C313.43,799.73,302.47,796.83,304.51,785.34Z"></path>
                                            <circle class="cls-16" cx="304.8" cy="795.32" r="5.02"></circle>
                                            <path class="cls-15" d="M301.51,791.44c-5.69,6.14,4.14,13.84,7.89,5.89C306.71,799.83,300.33,798.14,301.51,791.44Z"></path>
                                            <circle class="cls-16" cx="318.77" cy="796.26" r="5.02"></circle>
                                            <path class="cls-15" d="M315.48,792.38c-5.69,6.14,4.13,13.84,7.89,5.89C320.68,800.77,314.29,799.08,315.48,792.38Z"></path>
                                            <circle class="cls-14" cx="448.33" cy="133.9" r="7.67"></circle>
                                            <path class="cls-15" d="M443.32,128c-8.7,9.36,6.3,21.12,12,9C451.25,140.78,441.5,138.2,443.32,128Z"></path>
                                            <circle class="cls-14" cx="474.23" cy="134.54" r="8.31"></circle>
                                            <path class="cls-15" d="M468.79,128.13c-9.42,10.15,6.84,22.88,13,9.73C477.39,142,466.83,139.21,468.79,128.13Z">
                                            </path>
                                            <circle class="cls-14" cx="461.93" cy="134.62" r="6.87"></circle>
                                            <path class="cls-15" d="M457.44,129.32c-7.79,8.39,5.65,18.92,10.78,8.05C464.54,140.79,455.81,138.48,457.44,129.32Z"></path>
                                            <circle class="cls-16" cx="454.83" cy="136.07" r="5.02"></circle>
                                            <path class="cls-15" d="M451.55,132.19c-5.7,6.13,4.13,13.83,7.88,5.88C456.74,140.58,450.36,138.89,451.55,132.19Z"></path>
                                            <circle class="cls-16" cx="468.8" cy="137.01" r="5.02"></circle>
                                            <path class="cls-15" d="M465.52,133.13c-5.7,6.13,4.13,13.83,7.88,5.88C470.71,141.52,464.33,139.83,465.52,133.13Z"></path>
                                            <circle class="cls-14" cx="482.25" cy="137.19" r="6.87"></circle>
                                            <path class="cls-15" d="M477.75,131.89c-7.78,8.39,5.65,18.92,10.79,8C484.86,143.36,476.13,141.05,477.75,131.89Z"></path>
                                            <circle class="cls-14" cx="502.94" cy="136.87" r="6.87"></circle>
                                            <path class="cls-15" d="M498.44,131.57c-7.79,8.39,5.65,18.92,10.79,8.05C505.55,143,496.81,140.73,498.44,131.57Z"></path>
                                            <circle class="cls-14" cx="494.9" cy="135.17" r="8.62"></circle>
                                            <path class="cls-15" d="M489.26,128.52c-9.78,10.52,7.08,23.74,13.53,10.1C498.17,142.91,487.21,140,489.26,128.52Z"></path>
                                            <circle class="cls-16" cx="489.55" cy="138.5" r="5.02"></circle>
                                            <path class="cls-15" d="M486.26,134.62c-5.7,6.14,4.13,13.84,7.89,5.89C491.45,143,485.07,141.32,486.26,134.62Z">
                                            </path>
                                            <circle class="cls-16" cx="503.52" cy="139.44" r="5.02"></circle>
                                            <path class="cls-15" d="M500.23,135.56c-5.7,6.14,4.13,13.84,7.88,5.89C505.42,144,499,142.26,500.23,135.56Z">
                                            </path>
                                            <circle class="cls-14" cx="514.03" cy="135.55" r="7.67"></circle>
                                            <path class="cls-15" d="M509,129.64c-8.69,9.36,6.31,21.11,12,9C516.94,142.44,507.19,139.86,509,129.64Z"></path>
                                            <circle class="cls-14" cx="539.92" cy="136.19" r="8.31"></circle>
                                            <path class="cls-15" d="M534.49,129.78c-9.43,10.15,6.83,22.88,13,9.73C543.08,143.66,532.52,140.86,534.49,129.78Z"></path>
                                            <circle class="cls-14" cx="527.63" cy="136.27" r="6.87"></circle>
                                            <path class="cls-15" d="M523.13,131c-7.79,8.39,5.65,18.92,10.79,8.05C530.23,142.44,521.5,140.13,523.13,131Z">
                                            </path>
                                            <circle class="cls-16" cx="520.53" cy="137.72" r="5.02"></circle>
                                            <path class="cls-15" d="M517.24,133.84c-5.7,6.14,4.13,13.84,7.88,5.89C522.43,142.23,516.05,140.54,517.24,133.84Z"></path>
                                            <circle class="cls-16" cx="534.49" cy="138.66" r="5.02"></circle>
                                            <path class="cls-15" d="M531.21,134.78c-5.7,6.14,4.13,13.84,7.88,5.89C536.4,143.17,530,141.48,531.21,134.78Z">
                                            </path>
                                            <circle class="cls-14" cx="547.94" cy="138.84" r="6.87"></circle>
                                            <path class="cls-15" d="M543.45,133.54c-7.79,8.39,5.65,18.92,10.78,8.05C550.55,145,541.82,142.7,543.45,133.54Z">
                                            </path>
                                            <circle class="cls-14" cx="568.63" cy="138.53" r="6.87"></circle>
                                            <path class="cls-15" d="M564.13,133.23c-7.79,8.38,5.65,18.91,10.79,8C571.24,144.7,562.51,142.38,564.13,133.23Z">
                                            </path>
                                            <circle class="cls-14" cx="560.59" cy="136.82" r="8.62"></circle>
                                            <path class="cls-15" d="M555,130.17c-9.78,10.53,7.09,23.74,13.53,10.1C563.86,144.56,552.91,141.66,555,130.17Z">
                                            </path>
                                            <circle class="cls-16" cx="555.24" cy="140.15" r="5.02"></circle>
                                            <path class="cls-15" d="M552,136.28c-5.69,6.13,4.13,13.83,7.89,5.88C557.15,144.66,550.76,143,552,136.28Z">
                                            </path>
                                            <circle class="cls-16" cx="569.21" cy="141.09" r="5.02"></circle>
                                            <path class="cls-15" d="M565.92,137.22c-5.69,6.13,4.13,13.83,7.89,5.88C571.12,145.6,564.73,143.91,565.92,137.22Z"></path>
                                            <circle class="cls-14" cx="527.91" cy="136.08" r="7.67"></circle>
                                            <path class="cls-15" d="M522.89,130.17c-8.69,9.36,6.31,21.11,12,9C530.82,143,521.08,140.39,522.89,130.17Z">
                                            </path>
                                            <circle class="cls-14" cx="553.81" cy="136.72" r="8.31"></circle>
                                            <path class="cls-15" d="M548.37,130.31c-9.42,10.15,6.83,22.88,13,9.73C557,144.19,546.4,141.39,548.37,130.31Z">
                                            </path>
                                            <circle class="cls-14" cx="541.51" cy="136.8" r="6.87"></circle>
                                            <path class="cls-15" d="M537,131.5c-7.79,8.39,5.65,18.92,10.79,8.05C544.12,143,535.39,140.66,537,131.5Z"></path>
                                            <circle class="cls-16" cx="534.41" cy="138.25" r="5.02"></circle>
                                            <path class="cls-15" d="M531.12,134.37c-5.69,6.14,4.13,13.84,7.89,5.89C536.32,142.76,529.93,141.07,531.12,134.37Z"></path>
                                            <circle class="cls-16" cx="548.38" cy="139.19" r="5.02"></circle>
                                            <path class="cls-15" d="M545.09,135.31c-5.7,6.14,4.13,13.84,7.89,5.89C550.28,143.7,543.9,142,545.09,135.31Z">
                                            </path>
                                            <circle class="cls-14" cx="561.83" cy="139.37" r="6.87"></circle>
                                            <path class="cls-15" d="M557.33,134.07c-7.79,8.39,5.65,18.92,10.78,8.05C564.43,145.54,555.7,143.23,557.33,134.07Z"></path>
                                            <circle class="cls-14" cx="582.51" cy="139.06" r="6.87"></circle>
                                            <path class="cls-15" d="M578,133.76c-7.79,8.38,5.64,18.91,10.78,8C585.12,145.23,576.39,142.91,578,133.76Z">
                                            </path>
                                            <circle class="cls-14" cx="574.47" cy="137.35" r="8.62"></circle>
                                            <path class="cls-15" d="M568.83,130.7c-9.77,10.53,7.09,23.74,13.53,10.1C577.74,145.09,566.79,142.19,568.83,130.7Z"></path>
                                            <circle class="cls-16" cx="569.12" cy="140.68" r="5.02"></circle>
                                            <path class="cls-15" d="M565.83,136.81c-5.69,6.13,4.13,13.83,7.89,5.88C571,145.19,564.64,143.5,565.83,136.81Z">
                                            </path>
                                            <circle class="cls-16" cx="583.09" cy="141.62" r="5.02"></circle>
                                            <path class="cls-15" d="M579.8,137.75c-5.69,6.13,4.13,13.83,7.89,5.88C585,146.13,578.61,144.44,579.8,137.75Z">
                                            </path>
                                            <circle class="cls-14" cx="354.15" cy="792.59" r="7.67"></circle>
                                            <path class="cls-15" d="M349.14,786.67c-8.7,9.37,6.3,21.12,12,9C357.07,799.48,347.32,796.9,349.14,786.67Z">
                                            </path>
                                            <circle class="cls-14" cx="380.05" cy="793.23" r="8.31"></circle>
                                            <path class="cls-15" d="M374.61,786.82c-9.42,10.15,6.84,22.88,13.05,9.73C383.21,800.69,372.65,797.9,374.61,786.82Z"></path>
                                            <circle class="cls-14" cx="367.75" cy="793.31" r="6.87"></circle>
                                            <path class="cls-15" d="M363.26,788c-7.79,8.39,5.65,18.92,10.78,8C370.36,799.48,361.63,797.17,363.26,788Z">
                                            </path>
                                            <circle class="cls-16" cx="360.65" cy="794.76" r="5.02"></circle>
                                            <path class="cls-15" d="M357.36,790.88c-5.69,6.14,4.14,13.83,7.89,5.89C362.56,799.27,356.18,797.58,357.36,790.88Z"></path>
                                            <circle class="cls-16" cx="374.62" cy="795.7" r="5.02"></circle>
                                            <path class="cls-15" d="M371.33,791.82c-5.69,6.14,4.13,13.83,7.89,5.89C376.53,800.21,370.14,798.52,371.33,791.82Z"></path>
                                            <circle class="cls-14" cx="388.07" cy="795.88" r="6.87"></circle>
                                            <path class="cls-15" d="M383.57,790.58c-7.78,8.39,5.65,18.92,10.79,8C390.68,802.05,382,799.74,383.57,790.58Z">
                                            </path>
                                            <circle class="cls-14" cx="408.75" cy="795.57" r="6.87"></circle>
                                            <path class="cls-15" d="M404.26,790.26c-7.79,8.39,5.65,18.92,10.78,8C411.36,801.73,402.63,799.42,404.26,790.26Z"></path>
                                            <circle class="cls-14" cx="400.72" cy="793.86" r="8.62"></circle>
                                            <path class="cls-15" d="M395.07,787.21c-9.77,10.53,7.09,23.74,13.54,10.1C404,801.6,393,798.7,395.07,787.21Z">
                                            </path>
                                            <circle class="cls-16" cx="395.36" cy="797.19" r="5.02"></circle>
                                            <path class="cls-15" d="M392.08,793.32c-5.7,6.13,4.13,13.83,7.88,5.88C397.27,801.7,390.89,800,392.08,793.32Z">
                                            </path>
                                            <circle class="cls-16" cx="409.33" cy="798.13" r="5.02"></circle>
                                            <path class="cls-15" d="M406.05,794.26c-5.7,6.13,4.13,13.83,7.88,5.88C411.24,802.64,404.86,801,406.05,794.26Z">
                                            </path>
                                            <circle class="cls-14" cx="419.85" cy="794.24" r="7.67"></circle>
                                            <path class="cls-15" d="M414.83,788.33c-8.69,9.36,6.3,21.11,12,9C422.76,801.13,413,798.55,414.83,788.33Z">
                                            </path>
                                            <circle class="cls-14" cx="445.74" cy="794.89" r="8.31"></circle>
                                            <path class="cls-15" d="M440.31,788.47c-9.43,10.15,6.83,22.89,13,9.74C448.9,802.35,438.34,799.55,440.31,788.47Z"></path>
                                            <circle class="cls-14" cx="433.44" cy="794.97" r="6.87"></circle>
                                            <path class="cls-15" d="M429,789.66c-7.79,8.39,5.65,18.92,10.78,8.05C436.05,801.13,427.32,798.82,429,789.66Z">
                                            </path>
                                            <circle class="cls-16" cx="426.34" cy="796.41" r="5.02"></circle>
                                            <path class="cls-15" d="M423.06,792.54c-5.7,6.13,4.13,13.83,7.88,5.88C428.25,800.92,421.87,799.23,423.06,792.54Z"></path>
                                            <circle class="cls-16" cx="440.31" cy="797.35" r="5.02"></circle>
                                            <path class="cls-15" d="M437,793.48c-5.7,6.13,4.13,13.83,7.88,5.88C442.22,801.86,435.84,800.17,437,793.48Z">
                                            </path>
                                            <circle class="cls-14" cx="453.76" cy="797.54" r="6.87"></circle>
                                            <path class="cls-15" d="M449.27,792.23c-7.79,8.39,5.65,18.92,10.78,8C456.37,803.7,447.64,801.39,449.27,792.23Z">
                                            </path>
                                            <circle class="cls-14" cx="474.45" cy="797.22" r="6.87"></circle>
                                            <path class="cls-15" d="M470,791.92c-7.79,8.39,5.65,18.91,10.79,8C477.06,803.39,468.33,801.08,470,791.92Z">
                                            </path>
                                            <circle class="cls-14" cx="466.41" cy="795.52" r="8.62"></circle>
                                            <path class="cls-15" d="M460.77,788.86C451,799.39,467.86,812.6,474.3,799,469.68,803.26,458.73,800.36,460.77,788.86Z"></path>
                                            <circle class="cls-16" cx="461.06" cy="798.84" r="5.02"></circle>
                                            <path class="cls-15" d="M457.77,795c-5.7,6.13,4.13,13.83,7.89,5.88C463,803.36,456.58,801.67,457.77,795Z"></path>
                                            <circle class="cls-16" cx="475.03" cy="799.79" r="5.02"></circle>
                                            <path class="cls-15" d="M471.74,795.91c-5.7,6.13,4.13,13.83,7.89,5.88C476.93,804.3,470.55,802.61,471.74,795.91Z"></path>
                                            <circle class="cls-14" cx="433.73" cy="794.77" r="7.67"></circle>
                                            <path class="cls-15" d="M428.71,788.86c-8.69,9.36,6.31,21.11,12,9C436.64,801.66,426.9,799.08,428.71,788.86Z">
                                            </path>
                                            <circle class="cls-14" cx="459.62" cy="795.42" r="8.31"></circle>
                                            <path class="cls-15" d="M454.19,789c-9.42,10.15,6.83,22.89,13,9.74C462.78,802.88,452.22,800.08,454.19,789Z">
                                            </path>
                                            <circle class="cls-14" cx="447.33" cy="795.5" r="6.87"></circle>
                                            <path class="cls-15" d="M442.83,790.19c-7.79,8.39,5.65,18.92,10.79,8C449.94,801.66,441.21,799.35,442.83,790.19Z"></path>
                                            <circle class="cls-16" cx="440.23" cy="796.94" r="5.02"></circle>
                                            <path class="cls-15" d="M436.94,793.07c-5.7,6.13,4.13,13.83,7.89,5.88C442.13,801.45,435.75,799.76,436.94,793.07Z"></path>
                                            <circle class="cls-16" cx="454.2" cy="797.88" r="5.02"></circle>
                                            <path class="cls-15" d="M450.91,794c-5.7,6.13,4.13,13.83,7.89,5.88C456.1,802.39,449.72,800.7,450.91,794Z">
                                            </path>
                                            <circle class="cls-14" cx="467.64" cy="798.07" r="6.87"></circle>
                                            <path class="cls-15" d="M463.15,792.76c-7.79,8.39,5.65,18.92,10.78,8C470.25,804.23,461.52,801.92,463.15,792.76Z"></path>
                                            <circle class="cls-14" cx="488.33" cy="797.75" r="6.87"></circle>
                                            <path class="cls-15" d="M483.83,792.45c-7.78,8.39,5.65,18.91,10.79,8C490.94,803.92,482.21,801.61,483.83,792.45Z"></path>
                                            <circle class="cls-14" cx="480.29" cy="796.05" r="8.62"></circle>
                                            <path class="cls-15" d="M474.65,789.39c-9.77,10.53,7.09,23.74,13.53,10.1C483.56,803.79,472.61,800.89,474.65,789.39Z"></path>
                                            <circle class="cls-16" cx="474.94" cy="799.37" r="5.02"></circle>
                                            <path class="cls-15" d="M471.65,795.5c-5.69,6.13,4.13,13.83,7.89,5.88C476.85,803.89,470.46,802.2,471.65,795.5Z">
                                            </path>
                                            <circle class="cls-16" cx="488.91" cy="800.32" r="5.02"></circle>
                                            <path class="cls-15" d="M485.62,796.44c-5.69,6.13,4.13,13.83,7.89,5.88C490.82,804.83,484.43,803.14,485.62,796.44Z"></path>
                                            <circle class="cls-14" cx="624.7" cy="144.07" r="7.67"></circle>
                                            <path class="cls-15" d="M619.68,138.16c-8.69,9.36,6.31,21.11,12,9C627.61,151,617.87,148.38,619.68,138.16Z">
                                            </path>
                                            <circle class="cls-14" cx="650.6" cy="144.72" r="8.31"></circle>
                                            <path class="cls-15" d="M645.16,138.3c-9.42,10.15,6.83,22.89,13,9.74C653.75,152.18,643.19,149.38,645.16,138.3Z">
                                            </path>
                                            <circle class="cls-14" cx="638.3" cy="144.8" r="6.87"></circle>
                                            <path class="cls-15" d="M633.8,139.49c-7.78,8.39,5.65,18.92,10.79,8C640.91,151,632.18,148.65,633.8,139.49Z">
                                            </path>
                                            <circle class="cls-16" cx="631.2" cy="146.24" r="5.02"></circle>
                                            <path class="cls-15" d="M627.91,142.37c-5.69,6.13,4.13,13.83,7.89,5.88C633.11,150.75,626.72,149.06,627.91,142.37Z"></path>
                                            <circle class="cls-16" cx="645.17" cy="147.18" r="5.02"></circle>
                                            <path class="cls-15" d="M641.88,143.31c-5.69,6.13,4.13,13.83,7.89,5.88C647.08,151.69,640.69,150,641.88,143.31Z">
                                            </path>
                                            <circle class="cls-14" cx="658.62" cy="147.37" r="6.87"></circle>
                                            <path class="cls-15" d="M654.12,142.06c-7.79,8.39,5.65,18.92,10.79,8.05C661.23,153.53,652.49,151.22,654.12,142.06Z"></path>
                                            <circle class="cls-14" cx="679.3" cy="147.05" r="6.87"></circle>
                                            <path class="cls-15" d="M674.81,141.75c-7.79,8.39,5.65,18.91,10.78,8C681.91,153.22,673.18,150.91,674.81,141.75Z"></path>
                                            <circle class="cls-14" cx="671.26" cy="145.35" r="8.62"></circle>
                                            <path class="cls-15" d="M665.62,138.69c-9.77,10.53,7.09,23.74,13.53,10.1C674.54,153.09,663.58,150.19,665.62,138.69Z"></path>
                                            <circle class="cls-16" cx="665.91" cy="148.68" r="5.02"></circle>
                                            <path class="cls-15" d="M662.62,144.8c-5.69,6.13,4.14,13.83,7.89,5.88C667.82,153.19,661.44,151.5,662.62,144.8Z">
                                            </path>
                                            <circle class="cls-16" cx="679.88" cy="149.62" r="5.02"></circle>
                                            <path class="cls-15" d="M676.59,145.74c-5.69,6.13,4.13,13.83,7.89,5.88C681.79,154.13,675.4,152.44,676.59,145.74Z"></path>
                                            <circle class="cls-14" cx="688.96" cy="144.59" r="7.67"></circle>
                                            <path class="cls-15" d="M683.94,138.68c-8.7,9.36,6.3,21.11,12,9C691.87,151.48,682.12,148.9,683.94,138.68Z">
                                            </path>
                                            <circle class="cls-14" cx="714.85" cy="145.23" r="8.31"></circle>
                                            <path class="cls-15" d="M709.41,138.82c-9.42,10.15,6.84,22.88,13.05,9.73C718,152.7,707.45,149.9,709.41,138.82Z">
                                            </path>
                                            <circle class="cls-14" cx="702.55" cy="145.31" r="6.87"></circle>
                                            <path class="cls-15" d="M698.06,140c-7.79,8.39,5.65,18.92,10.78,8.05C705.16,151.48,696.43,149.17,698.06,140Z">
                                            </path>
                                            <circle class="cls-16" cx="695.45" cy="146.76" r="5.02"></circle>
                                            <path class="cls-15" d="M692.17,142.88c-5.7,6.14,4.13,13.84,7.88,5.89C697.36,151.27,691,149.58,692.17,142.88Z">
                                            </path>
                                            <circle class="cls-16" cx="709.42" cy="147.7" r="5.02"></circle>
                                            <path class="cls-15" d="M706.14,143.82c-5.7,6.14,4.13,13.84,7.88,5.89C711.33,152.21,705,150.52,706.14,143.82Z">
                                            </path>
                                            <circle class="cls-14" cx="722.87" cy="147.88" r="6.87"></circle>
                                            <path class="cls-15" d="M718.38,142.58c-7.79,8.39,5.64,18.92,10.78,8C725.48,154.05,716.75,151.74,718.38,142.58Z"></path>
                                            <circle class="cls-14" cx="743.56" cy="147.57" r="6.87"></circle>
                                            <path class="cls-15" d="M739.06,142.27c-7.79,8.38,5.65,18.91,10.79,8C746.17,153.73,737.44,151.42,739.06,142.27Z"></path>
                                            <circle class="cls-14" cx="735.52" cy="145.86" r="8.62"></circle>
                                            <path class="cls-15" d="M729.88,139.21c-9.78,10.53,7.08,23.74,13.53,10.1C738.79,153.6,727.84,150.7,729.88,139.21Z"></path>
                                            <circle class="cls-16" cx="730.17" cy="149.19" r="5.02"></circle>
                                            <path class="cls-15" d="M726.88,145.32c-5.7,6.13,4.13,13.83,7.89,5.88C732.07,153.7,725.69,152,726.88,145.32Z">
                                            </path>
                                            <circle class="cls-16" cx="744.14" cy="150.13" r="5.02"></circle>
                                            <path class="cls-15" d="M740.85,146.26c-5.7,6.13,4.13,13.83,7.88,5.88C746,154.64,739.66,153,740.85,146.26Z">
                                            </path>
                                            <circle class="cls-14" cx="526.76" cy="793.62" r="7.67"></circle>
                                            <path class="cls-15" d="M521.74,787.71c-8.7,9.36,6.3,21.11,12,9C529.67,800.51,519.92,797.93,521.74,787.71Z">
                                            </path>
                                            <circle class="cls-14" cx="552.65" cy="794.27" r="8.31"></circle>
                                            <path class="cls-15" d="M547.21,787.85c-9.42,10.15,6.84,22.89,13,9.74C555.81,801.73,545.25,798.93,547.21,787.85Z"></path>
                                            <circle class="cls-14" cx="540.35" cy="794.35" r="6.87"></circle>
                                            <path class="cls-15" d="M535.86,789c-7.79,8.39,5.65,18.92,10.78,8.05C543,800.51,534.23,798.2,535.86,789Z">
                                            </path>
                                            <circle class="cls-16" cx="533.25" cy="795.79" r="5.02"></circle>
                                            <path class="cls-15" d="M530,791.92c-5.7,6.13,4.13,13.83,7.88,5.88C535.16,800.3,528.78,798.61,530,791.92Z">
                                            </path>
                                            <circle class="cls-16" cx="547.22" cy="796.73" r="5.02"></circle>
                                            <path class="cls-15" d="M543.94,792.86c-5.7,6.13,4.13,13.83,7.88,5.88C549.13,801.24,542.75,799.55,543.94,792.86Z"></path>
                                            <circle class="cls-14" cx="560.67" cy="796.92" r="6.87"></circle>
                                            <path class="cls-15" d="M556.18,791.61c-7.79,8.39,5.65,18.92,10.78,8C563.28,803.08,554.55,800.77,556.18,791.61Z"></path>
                                            <circle class="cls-14" cx="581.36" cy="796.6" r="6.87"></circle>
                                            <path class="cls-15" d="M576.86,791.3c-7.79,8.39,5.65,18.91,10.79,8C584,802.77,575.24,800.46,576.86,791.3Z">
                                            </path>
                                            <circle class="cls-14" cx="573.32" cy="794.9" r="8.62"></circle>
                                            <path class="cls-15" d="M567.68,788.24c-9.78,10.53,7.09,23.74,13.53,10.1C576.59,802.64,565.64,799.74,567.68,788.24Z"></path>
                                            <circle class="cls-16" cx="567.97" cy="798.23" r="5.02"></circle>
                                            <path class="cls-15" d="M564.68,794.35c-5.7,6.13,4.13,13.83,7.89,5.88C569.88,802.74,563.49,801.05,564.68,794.35Z"></path>
                                            <circle class="cls-16" cx="581.94" cy="799.17" r="5.02"></circle>
                                            <path class="cls-15" d="M578.65,795.29c-5.7,6.13,4.13,13.83,7.89,5.88C583.84,803.68,577.46,802,578.65,795.29Z">
                                            </path>
                                            <circle class="cls-14" cx="591.01" cy="794.14" r="7.67"></circle>
                                            <path class="cls-15" d="M586,788.23c-8.69,9.36,6.31,21.11,12,9C593.92,801,584.18,798.45,586,788.23Z"></path>
                                            <circle class="cls-14" cx="616.91" cy="794.78" r="8.31"></circle>
                                            <path class="cls-15" d="M611.47,788.37c-9.42,10.15,6.83,22.88,13,9.73C620.06,802.25,609.5,799.45,611.47,788.37Z"></path>
                                            <circle class="cls-14" cx="604.61" cy="794.86" r="6.87"></circle>
                                            <path class="cls-15" d="M600.11,789.56c-7.78,8.39,5.65,18.92,10.79,8.05C607.22,801,598.49,798.72,600.11,789.56Z"></path>
                                            <circle class="cls-16" cx="597.51" cy="796.31" r="5.02"></circle>
                                            <path class="cls-15" d="M594.22,792.43c-5.69,6.14,4.13,13.84,7.89,5.89C599.42,800.82,593,799.13,594.22,792.43Z">
                                            </path>
                                            <circle class="cls-16" cx="611.48" cy="797.25" r="5.02"></circle>
                                            <path class="cls-15" d="M608.19,793.37c-5.69,6.14,4.13,13.84,7.89,5.89C613.39,801.76,607,800.07,608.19,793.37Z">
                                            </path>
                                            <circle class="cls-14" cx="624.93" cy="797.43" r="6.87"></circle>
                                            <path class="cls-15" d="M620.43,792.13c-7.79,8.39,5.65,18.92,10.79,8C627.54,803.6,618.8,801.29,620.43,792.13Z">
                                            </path>
                                            <circle class="cls-14" cx="645.61" cy="797.12" r="6.87"></circle>
                                            <path class="cls-15" d="M641.12,791.82c-7.79,8.38,5.65,18.91,10.78,8C648.22,803.29,639.49,801,641.12,791.82Z">
                                            </path>
                                            <circle class="cls-14" cx="637.57" cy="795.41" r="8.62"></circle>
                                            <path class="cls-15" d="M631.93,788.76c-9.77,10.53,7.09,23.74,13.53,10.1C640.85,803.15,629.89,800.25,631.93,788.76Z"></path>
                                            <circle class="cls-16" cx="632.22" cy="798.74" r="5.02"></circle>
                                            <path class="cls-15" d="M628.93,794.87c-5.69,6.13,4.14,13.83,7.89,5.88C634.13,803.25,627.75,801.56,628.93,794.87Z"></path>
                                            <circle class="cls-16" cx="646.19" cy="799.68" r="5.02"></circle>
                                            <path class="cls-15" d="M642.9,795.81c-5.69,6.13,4.13,13.83,7.89,5.88C648.1,804.19,641.71,802.5,642.9,795.81Z">
                                            </path>
                                            <circle class="cls-14" cx="801.01" cy="152.28" r="7.67"></circle>
                                            <path class="cls-15" d="M796,146.36c-8.69,9.37,6.31,21.12,12,9C803.92,159.16,794.18,156.59,796,146.36Z"></path>
                                            <circle class="cls-14" cx="826.91" cy="152.92" r="8.31"></circle>
                                            <path class="cls-15" d="M821.47,146.51c-9.42,10.15,6.83,22.88,13,9.73C830.06,160.38,819.5,157.59,821.47,146.51Z"></path>
                                            <circle class="cls-14" cx="814.61" cy="153" r="6.87"></circle>
                                            <path class="cls-15" d="M810.11,147.7c-7.79,8.39,5.65,18.92,10.79,8.05C817.22,159.17,808.49,156.86,810.11,147.7Z"></path>
                                            <circle class="cls-16" cx="807.51" cy="154.45" r="5.02"></circle>
                                            <path class="cls-15" d="M804.22,150.57c-5.7,6.13,4.13,13.83,7.89,5.88C809.41,159,803,157.27,804.22,150.57Z">
                                            </path>
                                            <circle class="cls-16" cx="821.48" cy="155.39" r="5.02"></circle>
                                            <path class="cls-15" d="M818.19,151.51c-5.7,6.14,4.13,13.83,7.89,5.88C823.38,159.9,817,158.21,818.19,151.51Z">
                                            </path>
                                            <circle class="cls-14" cx="834.92" cy="155.57" r="6.87"></circle>
                                            <path class="cls-15" d="M830.43,150.27c-7.79,8.39,5.65,18.92,10.78,8C837.53,161.74,828.8,159.43,830.43,150.27Z">
                                            </path>
                                            <circle class="cls-14" cx="855.61" cy="155.25" r="6.87"></circle>
                                            <path class="cls-15" d="M851.11,150c-7.78,8.39,5.65,18.92,10.79,8.05C858.22,161.42,849.49,159.11,851.11,150Z">
                                            </path>
                                            <circle class="cls-14" cx="847.57" cy="153.55" r="8.62"></circle>
                                            <path class="cls-15" d="M841.93,146.9c-9.77,10.53,7.09,23.74,13.53,10.1C850.84,161.29,839.89,158.39,841.93,146.9Z"></path>
                                            <circle class="cls-16" cx="842.22" cy="156.88" r="5.02"></circle>
                                            <path class="cls-15" d="M838.93,153c-5.69,6.14,4.13,13.84,7.89,5.89C844.13,161.39,837.74,159.7,838.93,153Z">
                                            </path>
                                            <circle class="cls-16" cx="856.19" cy="157.82" r="5.02"></circle>
                                            <path class="cls-15" d="M852.9,153.94c-5.69,6.14,4.13,13.84,7.89,5.89C858.1,162.33,851.71,160.64,852.9,153.94Z">
                                            </path>
                                            <circle class="cls-14" cx="690.33" cy="796.24" r="7.67"></circle>
                                            <path class="cls-15" d="M685.32,790.33c-8.7,9.36,6.3,21.11,12,9C693.25,803.13,683.5,800.55,685.32,790.33Z">
                                            </path>
                                            <circle class="cls-14" cx="716.23" cy="796.89" r="8.31"></circle>
                                            <path class="cls-15" d="M710.79,790.47c-9.42,10.15,6.84,22.89,13.05,9.74C719.39,804.35,708.83,801.55,710.79,790.47Z"></path>
                                            <circle class="cls-14" cx="703.93" cy="796.97" r="6.87"></circle>
                                            <path class="cls-15" d="M699.44,791.66c-7.79,8.39,5.65,18.92,10.78,8.05C706.54,803.13,697.81,800.82,699.44,791.66Z"></path>
                                            <circle class="cls-16" cx="696.83" cy="798.41" r="5.02"></circle>
                                            <path class="cls-15" d="M693.54,794.54c-5.69,6.13,4.14,13.83,7.89,5.88C698.74,802.92,692.36,801.23,693.54,794.54Z"></path>
                                            <circle class="cls-16" cx="710.8" cy="799.35" r="5.02"></circle>
                                            <path class="cls-15" d="M707.51,795.48c-5.69,6.13,4.13,13.83,7.89,5.88C712.71,803.86,706.32,802.17,707.51,795.48Z"></path>
                                            <circle class="cls-14" cx="724.25" cy="799.54" r="6.87"></circle>
                                            <path class="cls-15" d="M719.75,794.23c-7.79,8.39,5.65,18.92,10.79,8C726.86,805.7,718.13,803.39,719.75,794.23Z">
                                            </path>
                                            <circle class="cls-14" cx="744.93" cy="799.22" r="6.87"></circle>
                                            <path class="cls-15" d="M740.44,793.92c-7.79,8.39,5.65,18.91,10.78,8C747.54,805.39,738.81,803.08,740.44,793.92Z"></path>
                                            <circle class="cls-14" cx="736.89" cy="797.52" r="8.62"></circle>
                                            <path class="cls-15" d="M731.25,790.86c-9.77,10.53,7.09,23.74,13.54,10.1C740.17,805.26,729.21,802.36,731.25,790.86Z"></path>
                                            <circle class="cls-16" cx="731.54" cy="800.85" r="5.02"></circle>
                                            <path class="cls-15" d="M728.26,797c-5.7,6.13,4.13,13.83,7.88,5.88C733.45,805.36,727.07,803.67,728.26,797Z">
                                            </path>
                                            <circle class="cls-16" cx="745.51" cy="801.79" r="5.02"></circle>
                                            <path class="cls-15" d="M742.23,797.91c-5.7,6.13,4.13,13.83,7.88,5.88C747.42,806.3,741,804.61,742.23,797.91Z">
                                            </path>
                                            <circle class="cls-16" cx="618.73" cy="460.51" r="7.95"></circle>
                                            <path class="cls-15" d="M613.53,454.37c-9,9.71,6.54,21.9,12.49,9.32C621.75,467.65,611.65,465,613.53,454.37Z">
                                            </path>
                                            <circle class="cls-14" cx="689.19" cy="544.76" r="8.75"></circle>
                                            <path class="cls-15" d="M683.47,538c-9.92,10.68,7.19,24.09,13.73,10.25C692.52,552.62,681.4,549.67,683.47,538Z">
                                            </path>
                                            <circle class="cls-14" cx="691.41" cy="525.37" r="14.01"></circle>
                                            <path class="cls-15" d="M682.24,514.56c-15.88,17.11,11.53,38.58,22,16.41C696.73,538,678.93,533.24,682.24,514.56Z"></path>
                                            <circle class="cls-16" cx="708.57" cy="538.83" r="12.52"></circle>
                                            <path class="cls-15" d="M700.38,529.16c-14.21,15.3,10.3,34.5,19.66,14.67C713.33,550.08,697.41,545.86,700.38,529.16Z"></path>
                                            <circle class="cls-16" cx="684.13" cy="535.01" r="7.95"></circle>
                                            <path class="cls-15" d="M678.93,528.87c-9,9.71,6.54,21.9,12.48,9.31C687.15,542.15,677.05,539.47,678.93,528.87Z">
                                            </path>
                                            <circle class="cls-16" cx="378.64" cy="393.59" r="4.52"></circle>
                                            <path class="cls-15" d="M375.68,390.1c-5.13,5.52,3.72,12.45,7.1,5.29C380.35,397.65,374.61,396.12,375.68,390.1Z">
                                            </path>
                                            <circle class="cls-16" cx="379.61" cy="434.64" r="4.52"></circle>
                                            <path class="cls-15" d="M376.65,431.15c-5.13,5.52,3.72,12.45,7.1,5.3C381.33,438.7,375.58,437.18,376.65,431.15Z">
                                            </path>
                                            <circle class="cls-16" cx="358.02" cy="428.12" r="4.52"></circle>
                                            <path class="cls-15" d="M355.06,424.63c-5.12,5.52,3.72,12.45,7.1,5.29C359.74,432.18,354,430.66,355.06,424.63Z">
                                            </path>
                                            <circle class="cls-16" cx="415.5" cy="404.01" r="4.52"></circle>
                                            <path class="cls-15" d="M412.54,400.52c-5.13,5.52,3.72,12.45,7.1,5.3C417.22,408.07,411.47,406.55,412.54,400.52Z"></path>
                                            <circle class="cls-16" cx="415.31" cy="388.52" r="4.52"></circle>
                                            <path class="cls-15" d="M412.35,385c-5.13,5.52,3.72,12.46,7.1,5.3C417,392.58,411.28,391.06,412.35,385Z"></path>
                                            <circle class="cls-16" cx="491.35" cy="352.65" r="4.52"></circle>
                                            <path class="cls-15" d="M488.39,349.16c-5.13,5.52,3.72,12.45,7.1,5.3C493.06,356.71,487.32,355.19,488.39,349.16Z"></path>
                                            <circle class="cls-16" cx="596.3" cy="334.36" r="4.52"></circle>
                                            <path class="cls-15" d="M593.34,330.87c-5.12,5.52,3.72,12.45,7.1,5.29C598,338.42,592.27,336.89,593.34,330.87Z">
                                            </path>
                                            <circle class="cls-16" cx="651.79" cy="356.15" r="4.52"></circle>
                                            <path class="cls-15" d="M648.83,352.66c-5.12,5.52,3.72,12.45,7.1,5.3C653.51,360.21,647.76,358.69,648.83,352.66Z"></path>
                                            <circle class="cls-16" cx="753.44" cy="387.88" r="4.52"></circle>
                                            <path class="cls-15" d="M750.48,384.39c-5.13,5.52,3.72,12.45,7.1,5.3C755.16,391.94,749.41,390.42,750.48,384.39Z"></path>
                                            <circle class="cls-16" cx="749.61" cy="413.48" r="4.52"></circle>
                                            <path class="cls-15" d="M746.65,410c-5.12,5.52,3.72,12.46,7.1,5.3C751.33,417.54,745.58,416,746.65,410Z"></path>
                                            <circle class="cls-16" cx="751.65" cy="430.04" r="4.52"></circle>
                                            <path class="cls-15" d="M748.69,426.55c-5.13,5.52,3.72,12.45,7.1,5.3C753.37,434.1,747.62,432.58,748.69,426.55Z">
                                            </path>
                                            <circle class="cls-16" cx="690.82" cy="560.06" r="4.52"></circle>
                                            <path class="cls-15" d="M687.86,556.57c-5.13,5.52,3.72,12.45,7.1,5.3C692.54,564.12,686.79,562.6,687.86,556.57Z">
                                            </path>
                                            <circle class="cls-16" cx="711.34" cy="560.06" r="4.52"></circle>
                                            <path class="cls-15" d="M708.38,556.57c-5.13,5.52,3.71,12.45,7.1,5.3C713.05,564.12,707.31,562.6,708.38,556.57Z">
                                            </path>
                                            <circle class="cls-16" cx="380.87" cy="445.72" r="4.52"></circle>
                                            <path class="cls-15" d="M377.91,442.23c-5.13,5.52,3.72,12.45,7.1,5.3C382.58,449.78,376.84,448.26,377.91,442.23Z"></path>
                                            <circle class="cls-16" cx="275.15" cy="483.59" r="4.52"></circle>
                                            <path class="cls-15" d="M272.19,480.1c-5.12,5.52,3.72,12.45,7.1,5.3C276.87,487.65,271.12,486.13,272.19,480.1Z">
                                            </path>
                                            <circle class="cls-16" cx="291.07" cy="585.75" r="4.52"></circle>
                                            <path class="cls-15" d="M288.11,582.26c-5.13,5.53,3.72,12.46,7.1,5.3C292.78,589.81,287,588.29,288.11,582.26Z">
                                            </path>
                                            <circle class="cls-16" cx="372.23" cy="587.3" r="4.52"></circle>
                                            <path class="cls-15" d="M369.28,583.81c-5.13,5.52,3.71,12.45,7.1,5.29C374,591.36,368.21,589.84,369.28,583.81Z">
                                            </path>
                                            <circle class="cls-16" cx="420.11" cy="565.55" r="4.52"></circle>
                                            <path class="cls-15" d="M417.15,562.06c-5.13,5.52,3.72,12.45,7.1,5.3C421.82,569.61,416.08,568.09,417.15,562.06Z"></path>
                                            <circle class="cls-16" cx="571.78" cy="469.38" r="4.52"></circle>
                                            <path class="cls-15" d="M568.82,465.89c-5.13,5.52,3.72,12.45,7.1,5.29C573.5,473.44,567.75,471.92,568.82,465.89Z"></path>
                                            <circle class="cls-16" cx="602.42" cy="471.91" r="4.52"></circle>
                                            <path class="cls-15" d="M599.46,468.42c-5.13,5.52,3.72,12.45,7.1,5.3C604.14,476,598.39,474.45,599.46,468.42Z">
                                            </path>
                                            <circle class="cls-16" cx="562.78" cy="455.29" r="4.52"></circle>
                                            <path class="cls-15" d="M559.82,451.8c-5.12,5.52,3.72,12.45,7.1,5.3C564.5,459.35,558.75,457.83,559.82,451.8Z">
                                            </path>
                                            <circle class="cls-16" cx="429.7" cy="503.54" r="4.52"></circle>
                                            <path class="cls-15" d="M426.74,500.05c-5.13,5.52,3.72,12.45,7.1,5.3C431.41,507.6,425.67,506.08,426.74,500.05Z">
                                            </path>
                                            <circle class="cls-16" cx="393.84" cy="491.27" r="4.52"></circle>
                                            <path class="cls-15" d="M390.88,487.78c-5.12,5.52,3.72,12.45,7.1,5.3C395.56,495.33,389.81,493.81,390.88,487.78Z"></path>
                                            <circle class="cls-16" cx="382.06" cy="522.67" r="4.52"></circle>
                                            <path class="cls-15" d="M379.1,519.18c-5.13,5.53,3.72,12.46,7.1,5.3C383.78,526.73,378,525.21,379.1,519.18Z">
                                            </path>
                                            <circle class="cls-16" cx="247.36" cy="538.66" r="4.52"></circle>
                                            <path class="cls-15" d="M244.4,535.17c-5.13,5.52,3.72,12.45,7.1,5.3C249.08,542.72,243.33,541.2,244.4,535.17Z">
                                            </path>
                                            <circle class="cls-16" cx="362.69" cy="494.45" r="4.52"></circle>
                                            <path class="cls-15" d="M359.73,491c-5.13,5.52,3.72,12.45,7.1,5.3C364.41,498.51,358.66,497,359.73,491Z"></path>
                                            <circle class="cls-16" cx="589.27" cy="396.83" r="4.52"></circle>
                                            <path class="cls-15" d="M586.31,393.34c-5.13,5.52,3.72,12.45,7.1,5.29C591,400.89,585.24,399.37,586.31,393.34Z">
                                            </path>
                                            <circle class="cls-16" cx="685.76" cy="424.83" r="4.52"></circle>
                                            <path class="cls-15" d="M682.8,421.34c-5.13,5.53,3.72,12.46,7.1,5.3C687.47,428.89,681.73,427.37,682.8,421.34Z">
                                            </path>
                                            <circle class="cls-16" cx="768.15" cy="400.73" r="4.52"></circle>
                                            <path class="cls-15" d="M765.19,397.24c-5.13,5.52,3.72,12.45,7.1,5.29C769.87,404.79,764.12,403.27,765.19,397.24Z"></path>
                                            <circle class="cls-14" cx="730.76" cy="564.55" r="8.75"></circle>
                                            <path class="cls-15" d="M725,557.8c-9.92,10.68,7.19,24.09,13.73,10.25C734.08,572.41,723,569.47,725,557.8Z">
                                            </path>
                                            <circle class="cls-14" cx="732.98" cy="545.16" r="14.01"></circle>
                                            <path class="cls-15" d="M723.81,534.35c-15.89,17.11,11.52,38.58,22,16.41C738.3,557.74,720.49,553,723.81,534.35Z"></path>
                                            <circle class="cls-16" cx="750.14" cy="558.62" r="12.52"></circle>
                                            <path class="cls-15" d="M741.94,549c-14.2,15.29,10.31,34.49,19.67,14.67C754.9,569.87,739,565.66,741.94,549Z">
                                            </path>
                                            <circle class="cls-16" cx="725.7" cy="554.8" r="7.95"></circle>
                                            <path class="cls-15" d="M720.5,548.66c-9,9.71,6.54,21.9,12.48,9.32C728.72,561.94,718.61,559.26,720.5,548.66Z">
                                            </path>
                                            <path class="cls-14" d="M705.86,555.57s-1.47-.43-1.61-.68-.51,1.67-.51,1.67a6.36,6.36,0,0,1-.66-1.61c0-.34-1.54.82-1.54.82l.67-1.61-1.67-.51s1-.87,1.62-.66-.82-1.54-.82-1.54a4.37,4.37,0,0,1,1.61.67c.38.41.51-1.67.51-1.67a4.45,4.45,0,0,1,.66,1.62c0,.55,1.54-.82,1.54-.82s-.22,1.46-.68,1.61,1.67.51,1.67.51A5.33,5.33,0,0,1,705,554C704.37,554.1,705.86,555.57,705.86,555.57Z">
                                            </path>
                                            <path class="cls-17" d="M704.59,556.4s-1.08-1.08-1.09-1.37-1.24,1.23-1.24,1.23a6.83,6.83,0,0,1,.19-1.74c.19-.28-1.74,0-1.74,0l1.36-1.09-1.22-1.24s1.25-.3,1.73.19,0-1.74,0-1.74a4.27,4.27,0,0,1,1.09,1.36c.14.54,1.25-1.22,1.25-1.22a4.36,4.36,0,0,1-.2,1.73c-.28.48,1.75,0,1.75,0s-.89,1.18-1.37,1.09,1.23,1.25,1.23,1.25a5.36,5.36,0,0,1-1.74-.2C704,554.4,704.59,556.4,704.59,556.4Z">
                                            </path>
                                            <path class="cls-14" d="M720.09,552.4s-1.47-.43-1.61-.68-.51,1.67-.51,1.67a6.46,6.46,0,0,1-.66-1.62c0-.34-1.54.83-1.54.83l.67-1.61-1.67-.51s1-.87,1.62-.66-.82-1.55-.82-1.55a4.44,4.44,0,0,1,1.61.68c.38.41.51-1.67.51-1.67a4.45,4.45,0,0,1,.66,1.62c0,.55,1.54-.82,1.54-.82s-.22,1.46-.68,1.61,1.67.51,1.67.51a5.33,5.33,0,0,1-1.61.66C718.6,550.93,720.09,552.4,720.09,552.4Z">
                                            </path>
                                            <path class="cls-17" d="M718.83,553.23s-1.09-1.08-1.09-1.37-1.25,1.23-1.25,1.23a6.79,6.79,0,0,1,.19-1.74c.19-.28-1.74,0-1.74,0l1.36-1.09L715.08,549s1.25-.31,1.73.19,0-1.75,0-1.75a4.34,4.34,0,0,1,1.09,1.37c.14.54,1.25-1.22,1.25-1.22a4.36,4.36,0,0,1-.2,1.73c-.28.48,1.75,0,1.75,0s-.89,1.18-1.37,1.09,1.23,1.25,1.23,1.25a5.36,5.36,0,0,1-1.74-.2C718.22,551.23,718.83,553.23,718.83,553.23Z">
                                            </path>
                                            <path class="cls-14" d="M756.26,383a5.89,5.89,0,0,1-1.61-.68c-.14-.25-.51,1.67-.51,1.67a6.86,6.86,0,0,1-.66-1.62c0-.34-1.54.82-1.54.82l.68-1.61-1.67-.5s.95-.87,1.62-.66-.83-1.55-.83-1.55a4.44,4.44,0,0,1,1.61.68c.39.41.51-1.67.51-1.67a4.27,4.27,0,0,1,.66,1.62c0,.55,1.55-.82,1.55-.82s-.22,1.46-.68,1.61,1.67.51,1.67.51a5.3,5.3,0,0,1-1.62.66C754.78,381.51,756.26,383,756.26,383Z">
                                            </path>
                                            <path class="cls-17" d="M755,383.81s-1.08-1.08-1.09-1.37-1.25,1.23-1.25,1.23a6.44,6.44,0,0,1,.2-1.74c.19-.28-1.75,0-1.75,0l1.37-1.09-1.23-1.24s1.25-.31,1.74.19,0-1.75,0-1.75a4.34,4.34,0,0,1,1.09,1.37c.14.54,1.24-1.22,1.24-1.22a4.3,4.3,0,0,1-.19,1.73c-.28.48,1.75,0,1.75,0s-.9,1.18-1.37,1.09,1.22,1.25,1.22,1.25a5.31,5.31,0,0,1-1.73-.2C754.4,381.81,755,383.81,755,383.81Z">
                                            </path>
                                            <path class="cls-14" d="M683.21,357.59s-1.47-.43-1.61-.68-.51,1.67-.51,1.67a6.36,6.36,0,0,1-.66-1.61c0-.34-1.55.82-1.55.82l.68-1.61-1.67-.51s1-.87,1.62-.66-.82-1.54-.82-1.54a4.37,4.37,0,0,1,1.61.67c.38.41.51-1.67.51-1.67a4.45,4.45,0,0,1,.66,1.62c0,.56,1.54-.82,1.54-.82s-.22,1.46-.68,1.61,1.67.51,1.67.51a5.3,5.3,0,0,1-1.62.66C681.72,356.13,683.21,357.59,683.21,357.59Z">
                                            </path>
                                            <path class="cls-17" d="M681.94,358.42s-1.08-1.08-1.09-1.37-1.24,1.23-1.24,1.23a6.41,6.41,0,0,1,.19-1.74c.19-.28-1.75,0-1.75,0l1.37-1.09-1.22-1.25s1.25-.3,1.73.19,0-1.74,0-1.74A4.27,4.27,0,0,1,681,354c.14.54,1.25-1.22,1.25-1.22a4.36,4.36,0,0,1-.2,1.73c-.28.48,1.75,0,1.75,0s-.89,1.18-1.37,1.09,1.23,1.25,1.23,1.25a5.36,5.36,0,0,1-1.74-.2C681.34,356.42,681.94,358.42,681.94,358.42Z">
                                            </path>
                                            <path class="cls-14" d="M654.73,363.61a5.89,5.89,0,0,1-1.61-.68c-.14-.25-.51,1.67-.51,1.67A6.86,6.86,0,0,1,652,363c0-.34-1.54.82-1.54.82l.68-1.61-1.67-.5s1-.87,1.62-.66-.83-1.55-.83-1.55a4.44,4.44,0,0,1,1.61.68c.39.41.51-1.67.51-1.67a4.27,4.27,0,0,1,.66,1.62c0,.55,1.55-.82,1.55-.82s-.22,1.46-.68,1.61,1.67.51,1.67.51a5.3,5.3,0,0,1-1.62.66C653.25,362.14,654.73,363.61,654.73,363.61Z">
                                            </path>
                                            <path class="cls-17" d="M653.47,364.44s-1.08-1.08-1.09-1.37-1.25,1.23-1.25,1.23a6.44,6.44,0,0,1,.2-1.74c.19-.29-1.75,0-1.75,0l1.37-1.09-1.23-1.24s1.25-.31,1.74.19,0-1.75,0-1.75a4.34,4.34,0,0,1,1.09,1.37c.14.54,1.24-1.22,1.24-1.22a4.3,4.3,0,0,1-.19,1.73c-.28.48,1.75,0,1.75,0s-.9,1.18-1.37,1.09,1.22,1.24,1.22,1.24a5.19,5.19,0,0,1-1.73-.19C652.87,362.44,653.47,364.44,653.47,364.44Z">
                                            </path>
                                            <path class="cls-14" d="M635.5,355a5.83,5.83,0,0,1-1.61-.67c-.14-.25-.51,1.67-.51,1.67a6.46,6.46,0,0,1-.66-1.62c0-.34-1.54.82-1.54.82l.68-1.61-1.67-.51s.95-.86,1.61-.66-.82-1.54-.82-1.54a4.27,4.27,0,0,1,1.61.68c.38.4.51-1.67.51-1.67a4.28,4.28,0,0,1,.66,1.61c0,.56,1.54-.82,1.54-.82s-.21,1.47-.67,1.61,1.67.51,1.67.51a5.16,5.16,0,0,1-1.62.66C634,353.57,635.5,355,635.5,355Z">
                                            </path>
                                            <path class="cls-17" d="M634.24,355.86s-1.08-1.07-1.09-1.36-1.25,1.22-1.25,1.22a6.38,6.38,0,0,1,.2-1.73c.18-.29-1.75,0-1.75,0l1.37-1.09-1.23-1.25s1.25-.3,1.74.2,0-1.75,0-1.75a4.49,4.49,0,0,1,1.09,1.37c.14.53,1.24-1.23,1.24-1.23a4.35,4.35,0,0,1-.19,1.74c-.28.48,1.74,0,1.74,0s-.89,1.18-1.36,1.09,1.22,1.24,1.22,1.24a5.19,5.19,0,0,1-1.73-.19C633.64,353.87,634.24,355.86,634.24,355.86Z">
                                            </path>
                                            <path class="cls-14" d="M617.16,332s-1.47-.42-1.61-.67S615,333,615,333a6.46,6.46,0,0,1-.66-1.62c0-.34-1.54.82-1.54.82l.67-1.61-1.67-.51s.95-.86,1.62-.66-.82-1.54-.82-1.54a4.27,4.27,0,0,1,1.61.68c.38.4.51-1.67.51-1.67a4.46,4.46,0,0,1,.66,1.61c0,.56,1.54-.82,1.54-.82s-.22,1.47-.68,1.61,1.67.51,1.67.51a5.05,5.05,0,0,1-1.62.66C615.67,330.56,617.16,332,617.16,332Z">
                                            </path>
                                            <path class="cls-17" d="M615.89,332.85s-1.08-1.07-1.09-1.36-1.24,1.22-1.24,1.22a6.3,6.3,0,0,1,.19-1.73c.19-.29-1.74,0-1.74,0l1.36-1.09-1.22-1.25s1.25-.3,1.73.2,0-1.75,0-1.75a4.34,4.34,0,0,1,1.09,1.37c.14.53,1.25-1.23,1.25-1.23A4.41,4.41,0,0,1,616,329c-.28.48,1.75,0,1.75,0s-.89,1.18-1.37,1.08,1.23,1.25,1.23,1.25a5.25,5.25,0,0,1-1.74-.19C615.29,330.86,615.89,332.85,615.89,332.85Z">
                                            </path>
                                            <circle class="cls-14" cx="572.56" cy="401.47" r="2.14"></circle>
                                            <path class="cls-15" d="M571.16,399.82c-2.42,2.61,1.76,5.9,3.36,2.51C573.38,403.4,570.66,402.67,571.16,399.82Z">
                                            </path>
                                            <circle class="cls-14" cx="555.99" cy="402.67" r="2.14"></circle>
                                            <path class="cls-15" d="M554.59,401c-2.43,2.62,1.76,5.9,3.36,2.51C556.8,404.59,554.08,403.87,554.59,401Z">
                                            </path>
                                            <circle class="cls-16" cx="549.49" cy="404.92" r="4.52"></circle>
                                            <path class="cls-15" d="M546.53,401.43c-5.12,5.52,3.72,12.45,7.1,5.3C551.21,409,545.46,407.46,546.53,401.43Z">
                                            </path>
                                            <path class="cls-14" d="M570.35,402.59s-1.47-.43-1.61-.68-.51,1.67-.51,1.67a6.46,6.46,0,0,1-.66-1.62c0-.34-1.54.83-1.54.83l.67-1.62-1.67-.5s1-.87,1.62-.66-.82-1.55-.82-1.55a4.44,4.44,0,0,1,1.61.68c.38.41.51-1.67.51-1.67a4.45,4.45,0,0,1,.66,1.62c0,.55,1.54-.82,1.54-.82s-.22,1.46-.68,1.61,1.67.51,1.67.51a5.3,5.3,0,0,1-1.62.66C568.86,401.12,570.35,402.59,570.35,402.59Z">
                                            </path>
                                            <path class="cls-17" d="M569.08,403.42s-1.08-1.08-1.09-1.37-1.24,1.23-1.24,1.23a6.37,6.37,0,0,1,.19-1.74c.19-.28-1.74,0-1.74,0l1.36-1.09-1.22-1.24s1.25-.31,1.73.19,0-1.75,0-1.75a4.34,4.34,0,0,1,1.09,1.37c.14.54,1.25-1.22,1.25-1.22a4.36,4.36,0,0,1-.2,1.73c-.28.48,1.75,0,1.75,0s-.89,1.18-1.37,1.09,1.23,1.25,1.23,1.25a5.36,5.36,0,0,1-1.74-.2C568.48,401.42,569.08,403.42,569.08,403.42Z">
                                            </path>
                                            <path class="cls-14" d="M609.16,347.62s-1.47-.42-1.61-.67-.51,1.67-.51,1.67a6.46,6.46,0,0,1-.66-1.62c0-.34-1.54.82-1.54.82l.68-1.61-1.68-.51s1-.86,1.62-.66-.82-1.54-.82-1.54a4.27,4.27,0,0,1,1.61.68c.38.4.51-1.67.51-1.67a4.28,4.28,0,0,1,.66,1.61c0,.56,1.54-.82,1.54-.82s-.22,1.47-.68,1.61,1.68.51,1.68.51a5.16,5.16,0,0,1-1.62.66C607.67,346.16,609.16,347.62,609.16,347.62Z">
                                            </path>
                                            <path class="cls-17" d="M607.9,348.45s-1.08-1.07-1.09-1.36-1.25,1.22-1.25,1.22a6.72,6.72,0,0,1,.19-1.73c.19-.29-1.74,0-1.74,0l1.36-1.09-1.22-1.25s1.25-.3,1.74.2,0-1.75,0-1.75A4.34,4.34,0,0,1,607,344c.14.53,1.25-1.23,1.25-1.23a4.41,4.41,0,0,1-.2,1.74c-.28.48,1.75,0,1.75,0s-.89,1.18-1.36,1.09,1.22,1.24,1.22,1.24a5.25,5.25,0,0,1-1.74-.19C607.29,346.46,607.9,348.45,607.9,348.45Z">
                                            </path>
                                            <circle class="cls-16" cx="513.2" cy="399.94" r="6"></circle>
                                            <path class="cls-15" d="M509.28,395.31c-6.8,7.33,4.93,16.52,9.42,7C515.48,405.33,507.86,403.31,509.28,395.31Z">
                                            </path>
                                            <circle class="cls-14" cx="513.37" cy="391.46" r="3.89"></circle>
                                            <path class="cls-15" d="M510.83,388.46c-4.42,4.75,3.2,10.72,6.11,4.56C514.85,395,509.9,393.65,510.83,388.46Z">
                                            </path>
                                            <circle class="cls-14" cx="517.26" cy="402.58" r="3.83"></circle>
                                            <path class="cls-15" d="M514.76,399.62c-4.35,4.68,3.14,10.54,6,4.49C518.71,406,513.85,404.73,514.76,399.62Z">
                                            </path>
                                            <circle class="cls-14" cx="529.39" cy="404.1" r="2.14"></circle>
                                            <path class="cls-15" d="M528,402.45c-2.42,2.61,1.76,5.89,3.37,2.51C530.2,406,527.48,405.3,528,402.45Z"></path>
                                            <circle class="cls-14" cx="504.77" cy="399.45" r="2.14"></circle>
                                            <path class="cls-15" d="M503.37,397.8c-2.43,2.61,1.76,5.89,3.36,2.51C505.58,401.37,502.86,400.65,503.37,397.8Z">
                                            </path>
                                            <circle class="cls-14" cx="544.1" cy="406.04" r="2.14"></circle>
                                            <path class="cls-15" d="M542.7,404.39c-2.43,2.62,1.76,5.9,3.36,2.51C544.92,408,542.19,407.25,542.7,404.39Z">
                                            </path>
                                            <circle class="cls-16" cx="551.62" cy="406.23" r="4.52"></circle>
                                            <path class="cls-15" d="M548.66,402.74c-5.13,5.53,3.72,12.46,7.1,5.3C553.34,410.29,547.59,408.77,548.66,402.74Z"></path>
                                            <path class="cls-14" d="M535.33,405.12a5.89,5.89,0,0,1-1.61-.68c-.15-.25-.51,1.67-.51,1.67a6.52,6.52,0,0,1-.66-1.61c0-.34-1.54.82-1.54.82l.68-1.61L530,403.2s1-.87,1.61-.66-.82-1.54-.82-1.54a4.37,4.37,0,0,1,1.61.67c.38.41.51-1.67.51-1.67a4.27,4.27,0,0,1,.66,1.62c0,.55,1.54-.82,1.54-.82s-.21,1.46-.67,1.61,1.67.51,1.67.51a5.43,5.43,0,0,1-1.62.66C533.84,403.65,535.33,405.12,535.33,405.12Z">
                                            </path>
                                            <path class="cls-17" d="M534.07,406s-1.08-1.08-1.09-1.37-1.25,1.23-1.25,1.23a6.48,6.48,0,0,1,.2-1.74c.18-.28-1.75,0-1.75,0l1.36-1.09-1.22-1.24s1.25-.3,1.74.19,0-1.74,0-1.74a4.27,4.27,0,0,1,1.09,1.36c.14.54,1.25-1.22,1.25-1.22a4.3,4.3,0,0,1-.19,1.73c-.28.48,1.74,0,1.74,0s-.89,1.18-1.36,1.09,1.22,1.25,1.22,1.25a5.36,5.36,0,0,1-1.74-.2C533.46,404,534.07,406,534.07,406Z">
                                            </path>
                                            <path class="cls-14" d="M509,397.71s-1.47-.43-1.61-.68-.51,1.67-.51,1.67a6.52,6.52,0,0,1-.66-1.61c0-.34-1.54.82-1.54.82l.67-1.61-1.67-.51s1-.87,1.62-.66-.82-1.54-.82-1.54a4.37,4.37,0,0,1,1.61.67c.38.41.51-1.67.51-1.67a4.45,4.45,0,0,1,.66,1.62c0,.55,1.54-.82,1.54-.82s-.22,1.46-.68,1.61,1.67.51,1.67.51a5.33,5.33,0,0,1-1.61.66C507.5,396.24,509,397.71,509,397.71Z">
                                            </path>
                                            <path class="cls-17" d="M507.72,398.54s-1.08-1.08-1.08-1.37-1.25,1.23-1.25,1.23a6.83,6.83,0,0,1,.19-1.74c.19-.28-1.74,0-1.74,0l1.36-1.09L504,394.31s1.25-.3,1.73.19,0-1.74,0-1.74a4.27,4.27,0,0,1,1.09,1.36c.14.54,1.25-1.22,1.25-1.22a4.36,4.36,0,0,1-.2,1.73c-.28.48,1.75,0,1.75,0s-.89,1.18-1.37,1.09,1.23,1.25,1.23,1.25a5.36,5.36,0,0,1-1.74-.2C507.12,396.54,507.72,398.54,507.72,398.54Z">
                                            </path>
                                            <path class="cls-14" d="M589.66,330.28s-1.47-.43-1.61-.68-.51,1.67-.51,1.67a6.46,6.46,0,0,1-.66-1.62c0-.33-1.54.83-1.54.83l.67-1.61-1.67-.51s1-.87,1.62-.66-.82-1.55-.82-1.55a4.44,4.44,0,0,1,1.61.68c.38.41.51-1.67.51-1.67a4.45,4.45,0,0,1,.66,1.62c0,.55,1.54-.82,1.54-.82s-.22,1.46-.68,1.61,1.67.51,1.67.51a5.33,5.33,0,0,1-1.61.66C588.17,328.81,589.66,330.28,589.66,330.28Z">
                                            </path>
                                            <path class="cls-17" d="M588.39,331.11s-1.08-1.08-1.08-1.37-1.25,1.23-1.25,1.23a6.79,6.79,0,0,1,.19-1.74c.19-.28-1.74,0-1.74,0l1.36-1.09-1.22-1.24s1.25-.31,1.73.19,0-1.75,0-1.75a4.34,4.34,0,0,1,1.09,1.37c.14.54,1.25-1.22,1.25-1.22a4.36,4.36,0,0,1-.2,1.73c-.28.48,1.75,0,1.75,0s-.89,1.18-1.37,1.09,1.23,1.25,1.23,1.25a5.36,5.36,0,0,1-1.74-.2C587.79,329.11,588.39,331.11,588.39,331.11Z">
                                            </path>
                                            <path class="cls-14" d="M507.52,358.43a5.89,5.89,0,0,1-1.61-.68c-.14-.25-.51,1.67-.51,1.67a6.94,6.94,0,0,1-.66-1.61c0-.34-1.54.82-1.54.82l.68-1.61-1.67-.51s1-.87,1.62-.66-.83-1.54-.83-1.54a4.37,4.37,0,0,1,1.61.67c.39.41.51-1.67.51-1.67a4.27,4.27,0,0,1,.66,1.62c0,.55,1.55-.82,1.55-.82s-.22,1.46-.68,1.61,1.67.51,1.67.51a5.3,5.3,0,0,1-1.62.66C506,357,507.52,358.43,507.52,358.43Z">
                                            </path>
                                            <path class="cls-17" d="M506.26,359.26s-1.08-1.08-1.09-1.37-1.25,1.23-1.25,1.23a6.48,6.48,0,0,1,.2-1.74c.19-.28-1.75,0-1.75,0l1.37-1.09L502.51,355s1.25-.3,1.74.19,0-1.74,0-1.74a4.27,4.27,0,0,1,1.09,1.36c.14.54,1.24-1.22,1.24-1.22a4.3,4.3,0,0,1-.19,1.73c-.28.48,1.75,0,1.75,0s-.9,1.18-1.37,1.09,1.22,1.25,1.22,1.25a5.31,5.31,0,0,1-1.73-.2C505.66,357.26,506.26,359.26,506.26,359.26Z">
                                            </path>
                                            <path class="cls-14" d="M480.39,349.11s-1.47-.43-1.61-.68-.51,1.67-.51,1.67a6.46,6.46,0,0,1-.66-1.62c0-.33-1.54.83-1.54.83l.67-1.61-1.67-.51s1-.87,1.62-.66-.82-1.55-.82-1.55a4.44,4.44,0,0,1,1.61.68c.38.41.51-1.67.51-1.67a4.45,4.45,0,0,1,.66,1.62c0,.55,1.54-.82,1.54-.82s-.22,1.46-.68,1.61,1.67.51,1.67.51a5.33,5.33,0,0,1-1.61.66C478.9,347.64,480.39,349.11,480.39,349.11Z">
                                            </path>
                                            <path class="cls-17" d="M479.13,349.94s-1.09-1.08-1.09-1.37-1.25,1.23-1.25,1.23a6.79,6.79,0,0,1,.19-1.74c.19-.28-1.74,0-1.74,0L476.6,347l-1.22-1.24s1.25-.31,1.73.19,0-1.75,0-1.75a4.34,4.34,0,0,1,1.09,1.37c.14.54,1.25-1.22,1.25-1.22a4.36,4.36,0,0,1-.2,1.73c-.28.48,1.75,0,1.75,0s-.89,1.18-1.37,1.09,1.23,1.25,1.23,1.25a5.36,5.36,0,0,1-1.74-.2C478.52,347.94,479.13,349.94,479.13,349.94Z">
                                            </path>
                                            <path class="cls-14" d="M487.93,365.55s-1.47-.43-1.61-.68-.51,1.67-.51,1.67a6.36,6.36,0,0,1-.66-1.61c0-.34-1.54.82-1.54.82l.67-1.61-1.67-.51s1-.87,1.62-.66-.82-1.54-.82-1.54a4.37,4.37,0,0,1,1.61.67c.38.41.51-1.67.51-1.67a4.27,4.27,0,0,1,.66,1.62c0,.56,1.54-.82,1.54-.82s-.22,1.46-.68,1.61,1.67.51,1.67.51a5.33,5.33,0,0,1-1.61.66C486.44,364.09,487.93,365.55,487.93,365.55Z">
                                            </path>
                                            <path class="cls-17" d="M486.67,366.38s-1.08-1.08-1.09-1.37-1.25,1.23-1.25,1.23a6.83,6.83,0,0,1,.19-1.74c.19-.28-1.74,0-1.74,0l1.36-1.09-1.22-1.25s1.25-.3,1.73.19,0-1.74,0-1.74a4.27,4.27,0,0,1,1.09,1.36c.14.54,1.25-1.22,1.25-1.22a4.36,4.36,0,0,1-.2,1.73c-.28.48,1.75,0,1.75,0s-.89,1.18-1.36,1.09,1.22,1.25,1.22,1.25a5.36,5.36,0,0,1-1.74-.2C486.06,364.38,486.67,366.38,486.67,366.38Z">
                                            </path>
                                            <path class="cls-14" d="M428.28,399.39a5.89,5.89,0,0,1-1.61-.68c-.14-.25-.5,1.67-.5,1.67a6.46,6.46,0,0,1-.66-1.62c0-.34-1.55.82-1.55.82l.68-1.61-1.67-.51s.95-.86,1.62-.66-.82-1.54-.82-1.54a4.27,4.27,0,0,1,1.61.68c.38.4.51-1.67.51-1.67a4.45,4.45,0,0,1,.66,1.62c0,.55,1.54-.83,1.54-.83s-.22,1.47-.68,1.61,1.67.51,1.67.51a5.05,5.05,0,0,1-1.62.66C426.8,397.92,428.28,399.39,428.28,399.39Z">
                                            </path>
                                            <path class="cls-17" d="M427,400.22s-1.08-1.08-1.09-1.37-1.24,1.22-1.24,1.22a6.3,6.3,0,0,1,.19-1.73c.19-.29-1.75,0-1.75,0l1.37-1.09L423.28,396s1.25-.3,1.73.2,0-1.75,0-1.75a4.34,4.34,0,0,1,1.09,1.37c.14.54,1.24-1.23,1.24-1.23a4.35,4.35,0,0,1-.19,1.74c-.28.48,1.75,0,1.75,0s-.89,1.18-1.37,1.09,1.22,1.24,1.22,1.24a5.19,5.19,0,0,1-1.73-.19C426.42,398.22,427,400.22,427,400.22Z">
                                            </path>
                                            <circle class="cls-14" cx="417.02" cy="505.14" r="2.14"></circle>
                                            <path class="cls-15" d="M415.62,503.49c-2.43,2.61,1.76,5.89,3.36,2.5C417.83,507.06,415.11,506.34,415.62,503.49Z"></path>
                                            <circle class="cls-16" cx="410.15" cy="511.91" r="4.52"></circle>
                                            <path class="cls-15" d="M407.19,508.42c-5.13,5.52,3.72,12.45,7.1,5.29C411.87,516,406.12,514.45,407.19,508.42Z">
                                            </path>
                                            <circle class="cls-16" cx="409.96" cy="496.42" r="4.52"></circle>
                                            <path class="cls-15" d="M407,492.93c-5.13,5.52,3.72,12.45,7.1,5.3C411.68,500.48,405.93,499,407,492.93Z"></path>
                                            <path class="cls-14" d="M422.94,507.28a6,6,0,0,1-1.61-.67c-.15-.25-.51,1.67-.51,1.67a6.46,6.46,0,0,1-.66-1.62c0-.34-1.54.82-1.54.82l.67-1.61-1.67-.51s1-.86,1.62-.66-.82-1.54-.82-1.54a4.27,4.27,0,0,1,1.61.68c.38.4.51-1.67.51-1.67a4.46,4.46,0,0,1,.66,1.61c0,.56,1.54-.82,1.54-.82s-.22,1.47-.68,1.61,1.67.51,1.67.51a5.33,5.33,0,0,1-1.61.66C421.45,505.82,422.94,507.28,422.94,507.28Z">
                                            </path>
                                            <path class="cls-17" d="M421.67,508.11s-1.08-1.08-1.09-1.36-1.24,1.22-1.24,1.22a6.83,6.83,0,0,1,.19-1.74c.19-.28-1.74,0-1.74,0l1.36-1.09-1.22-1.25s1.25-.3,1.73.2,0-1.75,0-1.75a4.39,4.39,0,0,1,1.09,1.36c.14.54,1.25-1.22,1.25-1.22a4.41,4.41,0,0,1-.2,1.74c-.28.48,1.75,0,1.75,0s-.89,1.19-1.37,1.09,1.23,1.25,1.23,1.25a5.25,5.25,0,0,1-1.74-.19C421.07,506.12,421.67,508.11,421.67,508.11Z">
                                            </path>
                                            <path class="cls-14" d="M396.27,390.11a6,6,0,0,1-1.61-.67c-.15-.25-.51,1.67-.51,1.67a6.46,6.46,0,0,1-.66-1.62c0-.34-1.54.82-1.54.82l.67-1.61-1.67-.51s.95-.86,1.62-.66-.82-1.54-.82-1.54a4.27,4.27,0,0,1,1.61.68c.38.4.51-1.67.51-1.67a4.46,4.46,0,0,1,.66,1.61c0,.56,1.54-.82,1.54-.82s-.22,1.47-.68,1.61,1.67.51,1.67.51a5.3,5.3,0,0,1-1.62.66C394.78,388.65,396.27,390.11,396.27,390.11Z">
                                            </path>
                                            <path class="cls-17" d="M395,390.94s-1.08-1.08-1.09-1.36-1.24,1.22-1.24,1.22a6.41,6.41,0,0,1,.19-1.74c.19-.28-1.74,0-1.74,0l1.36-1.09-1.22-1.25s1.25-.3,1.73.2,0-1.75,0-1.75a4.39,4.39,0,0,1,1.09,1.36c.14.54,1.25-1.22,1.25-1.22a4.41,4.41,0,0,1-.2,1.74c-.28.48,1.75,0,1.75,0s-.89,1.19-1.37,1.09,1.23,1.25,1.23,1.25a5.25,5.25,0,0,1-1.74-.19C394.4,389,395,390.94,395,390.94Z">
                                            </path>
                                            <path class="cls-14" d="M371.89,393.52a5.89,5.89,0,0,1-1.61-.68c-.14-.25-.51,1.67-.51,1.67a6.46,6.46,0,0,1-.66-1.62c0-.34-1.54.82-1.54.82l.68-1.61-1.67-.51s.95-.86,1.61-.66-.82-1.54-.82-1.54a4.27,4.27,0,0,1,1.61.68c.38.4.51-1.67.51-1.67a4.27,4.27,0,0,1,.66,1.62c0,.55,1.54-.83,1.54-.83s-.21,1.47-.67,1.61,1.67.51,1.67.51a5.16,5.16,0,0,1-1.62.66C370.41,392.05,371.89,393.52,371.89,393.52Z">
                                            </path>
                                            <path class="cls-17" d="M370.63,394.35s-1.08-1.08-1.09-1.37-1.25,1.22-1.25,1.22a6.38,6.38,0,0,1,.2-1.73c.18-.29-1.75,0-1.75,0l1.37-1.09-1.23-1.25s1.25-.3,1.74.2,0-1.75,0-1.75a4.34,4.34,0,0,1,1.09,1.37c.14.54,1.25-1.23,1.25-1.23a4.35,4.35,0,0,1-.19,1.74c-.28.48,1.74,0,1.74,0s-.89,1.18-1.36,1.09,1.22,1.24,1.22,1.24a5.19,5.19,0,0,1-1.73-.19C370,392.35,370.63,394.35,370.63,394.35Z">
                                            </path>
                                            <path class="cls-14" d="M393.21,429.81a5.89,5.89,0,0,1-1.61-.68c-.14-.25-.51,1.67-.51,1.67a6.46,6.46,0,0,1-.66-1.62c0-.33-1.54.83-1.54.83l.68-1.61-1.67-.51s1-.87,1.61-.66-.82-1.55-.82-1.55a4.44,4.44,0,0,1,1.61.68c.38.41.51-1.67.51-1.67a4.27,4.27,0,0,1,.66,1.62c0,.55,1.54-.82,1.54-.82s-.21,1.46-.67,1.61,1.67.51,1.67.51a5.43,5.43,0,0,1-1.62.66C391.73,428.34,393.21,429.81,393.21,429.81Z">
                                            </path>
                                            <path class="cls-17" d="M392,430.64s-1.08-1.08-1.09-1.37-1.25,1.23-1.25,1.23a6.44,6.44,0,0,1,.2-1.74c.18-.28-1.75,0-1.75,0l1.36-1.09-1.22-1.24s1.25-.31,1.74.19,0-1.75,0-1.75a4.34,4.34,0,0,1,1.09,1.37c.14.54,1.25-1.22,1.25-1.22a4.3,4.3,0,0,1-.19,1.73c-.28.48,1.74,0,1.74,0s-.89,1.18-1.36,1.09,1.22,1.25,1.22,1.25a5.31,5.31,0,0,1-1.73-.2C391.35,428.64,392,430.64,392,430.64Z">
                                            </path>
                                            <path class="cls-14" d="M375.68,452.57a5.89,5.89,0,0,1-1.61-.68c-.15-.25-.51,1.67-.51,1.67a6.52,6.52,0,0,1-.66-1.61c0-.34-1.54.82-1.54.82l.68-1.61-1.67-.51s.95-.87,1.61-.66-.82-1.54-.82-1.54a4.37,4.37,0,0,1,1.61.67c.38.41.51-1.67.51-1.67a4.27,4.27,0,0,1,.66,1.62c0,.55,1.54-.82,1.54-.82s-.21,1.46-.67,1.61,1.67.51,1.67.51a5.43,5.43,0,0,1-1.62.66C374.19,451.1,375.68,452.57,375.68,452.57Z">
                                            </path>
                                            <path class="cls-17" d="M374.42,453.4s-1.08-1.08-1.09-1.37-1.25,1.23-1.25,1.23a6.48,6.48,0,0,1,.2-1.74c.18-.28-1.75,0-1.75,0l1.36-1.09-1.22-1.24s1.25-.31,1.74.19,0-1.74,0-1.74a4.27,4.27,0,0,1,1.09,1.36c.14.54,1.25-1.22,1.25-1.22a4.3,4.3,0,0,1-.19,1.73c-.28.48,1.74,0,1.74,0s-.89,1.18-1.36,1.09,1.22,1.25,1.22,1.25a5.36,5.36,0,0,1-1.74-.2C373.81,451.4,374.42,453.4,374.42,453.4Z">
                                            </path>
                                            <path class="cls-14" d="M356.82,423.07a6.15,6.15,0,0,1-1.61-.67c-.14-.25-.51,1.67-.51,1.67a6.86,6.86,0,0,1-.66-1.62c0-.34-1.54.82-1.54.82l.68-1.61-1.67-.51s.95-.86,1.62-.66-.83-1.54-.83-1.54a4.27,4.27,0,0,1,1.61.68c.39.4.51-1.67.51-1.67a4.28,4.28,0,0,1,.66,1.61c0,.56,1.55-.82,1.55-.82s-.22,1.47-.68,1.61,1.67.51,1.67.51a5.3,5.3,0,0,1-1.62.66C355.34,421.61,356.82,423.07,356.82,423.07Z">
                                            </path>
                                            <path class="cls-17" d="M355.56,423.9s-1.08-1.07-1.09-1.36-1.25,1.22-1.25,1.22a6.38,6.38,0,0,1,.2-1.73c.19-.29-1.75,0-1.75,0l1.37-1.09-1.23-1.25s1.25-.3,1.74.2,0-1.75,0-1.75a4.39,4.39,0,0,1,1.09,1.36c.14.54,1.24-1.22,1.24-1.22a4.35,4.35,0,0,1-.19,1.74c-.28.48,1.75,0,1.75,0s-.9,1.19-1.37,1.09,1.22,1.25,1.22,1.25a5.19,5.19,0,0,1-1.73-.19C355,421.91,355.56,423.9,355.56,423.9Z">
                                            </path>
                                            <path class="cls-14" d="M283.62,480.38s-1.47-.43-1.61-.68-.51,1.67-.51,1.67a6.36,6.36,0,0,1-.66-1.61c0-.34-1.55.82-1.55.82L280,479l-1.67-.51s.95-.87,1.62-.66-.82-1.54-.82-1.54a4.37,4.37,0,0,1,1.61.67c.38.41.51-1.67.51-1.67a4.45,4.45,0,0,1,.66,1.62c0,.56,1.54-.82,1.54-.82s-.22,1.46-.68,1.61,1.67.51,1.67.51a5.3,5.3,0,0,1-1.62.66C282.13,478.92,283.62,480.38,283.62,480.38Z">
                                            </path>
                                            <path class="cls-17" d="M282.35,481.21s-1.08-1.08-1.09-1.37-1.24,1.23-1.24,1.23a6.41,6.41,0,0,1,.19-1.74c.19-.28-1.74,0-1.74,0l1.36-1.09L278.61,477s1.25-.3,1.73.19,0-1.74,0-1.74a4.27,4.27,0,0,1,1.09,1.36c.14.54,1.25-1.22,1.25-1.22a4.36,4.36,0,0,1-.2,1.73c-.28.48,1.75,0,1.75,0s-.89,1.18-1.37,1.09,1.23,1.25,1.23,1.25a5.36,5.36,0,0,1-1.74-.2C281.75,479.21,282.35,481.21,282.35,481.21Z">
                                            </path>
                                            <path class="cls-14" d="M302.34,587.39a5.89,5.89,0,0,1-1.61-.68c-.14-.25-.51,1.67-.51,1.67a6.46,6.46,0,0,1-.66-1.62c0-.33-1.54.83-1.54.83l.68-1.61-1.67-.51s1-.87,1.61-.66-.82-1.54-.82-1.54a4.37,4.37,0,0,1,1.61.67c.38.41.51-1.67.51-1.67a4.27,4.27,0,0,1,.66,1.62c0,.55,1.54-.82,1.54-.82s-.21,1.46-.67,1.61,1.67.51,1.67.51a5.43,5.43,0,0,1-1.62.66C300.86,585.92,302.34,587.39,302.34,587.39Z">
                                            </path>
                                            <path class="cls-17" d="M301.08,588.22s-1.08-1.08-1.09-1.37-1.25,1.23-1.25,1.23a6.48,6.48,0,0,1,.2-1.74c.18-.28-1.75,0-1.75,0l1.37-1.09L297.33,584s1.25-.31,1.74.19,0-1.74,0-1.74a4.27,4.27,0,0,1,1.09,1.36c.14.54,1.25-1.22,1.25-1.22a4.3,4.3,0,0,1-.19,1.73c-.28.48,1.74,0,1.74,0s-.89,1.18-1.36,1.09,1.22,1.25,1.22,1.25a5.31,5.31,0,0,1-1.73-.2C300.48,586.22,301.08,588.22,301.08,588.22Z">
                                            </path>
                                            <circle class="cls-16" cx="262.65" cy="524.31" r="6"></circle>
                                            <path class="cls-15" d="M258.72,519.68c-6.8,7.32,4.93,16.52,9.42,7C264.93,529.69,257.3,527.68,258.72,519.68Z">
                                            </path>
                                            <circle class="cls-14" cx="262.82" cy="515.82" r="3.89"></circle>
                                            <path class="cls-15" d="M260.27,512.82c-4.42,4.75,3.2,10.72,6.11,4.56C264.29,519.32,259.35,518,260.27,512.82Z">
                                            </path>
                                            <circle class="cls-14" cx="266.7" cy="526.94" r="3.83"></circle>
                                            <path class="cls-15" d="M264.2,524c-4.34,4.68,3.15,10.55,6,4.49C268.16,530.38,263.29,529.09,264.2,524Z"></path>
                                            <circle class="cls-14" cx="297.81" cy="527.44" r="2.14"></circle>
                                            <path class="cls-15" d="M296.41,525.79c-2.42,2.61,1.76,5.89,3.36,2.5C298.63,529.36,295.91,528.64,296.41,525.79Z"></path>
                                            <circle class="cls-14" cx="273.21" cy="523.6" r="2.14"></circle>
                                            <path class="cls-15" d="M271.8,522c-2.42,2.61,1.76,5.89,3.37,2.51C274,525.52,271.3,524.8,271.8,522Z"></path>
                                            <circle class="cls-14" cx="281.49" cy="525.14" r="2.14"></circle>
                                            <path class="cls-15" d="M280.09,523.48c-2.42,2.62,1.76,5.9,3.36,2.51C282.31,527.06,279.59,526.34,280.09,523.48Z"></path>
                                            <circle class="cls-14" cx="289.14" cy="525.82" r="2.14"></circle>
                                            <path class="cls-15" d="M287.74,524.17c-2.43,2.61,1.76,5.89,3.36,2.51C290,527.74,287.23,527,287.74,524.17Z">
                                            </path>
                                            <circle class="cls-16" cx="276.49" cy="524.97" r="4.52"></circle>
                                            <path class="cls-15" d="M273.53,521.48c-5.12,5.52,3.72,12.45,7.1,5.29C278.21,529,272.46,527.51,273.53,521.48Z">
                                            </path>
                                            <path class="cls-14" d="M287.77,526.6s-1.47-.43-1.61-.68-.51,1.67-.51,1.67A6.36,6.36,0,0,1,285,526c0-.34-1.54.82-1.54.82l.67-1.61-1.67-.51s1-.87,1.62-.66-.82-1.54-.82-1.54a4.37,4.37,0,0,1,1.61.67c.38.41.51-1.67.51-1.67a4.35,4.35,0,0,1,.66,1.62c0,.56,1.54-.82,1.54-.82s-.22,1.46-.68,1.61,1.67.51,1.67.51a5.33,5.33,0,0,1-1.61.66C286.28,525.14,287.77,526.6,287.77,526.6Z">
                                            </path>
                                            <path class="cls-17" d="M286.51,527.43s-1.08-1.08-1.09-1.36-1.25,1.22-1.25,1.22a6.83,6.83,0,0,1,.19-1.74c.19-.28-1.74,0-1.74,0l1.36-1.09-1.22-1.25s1.25-.3,1.74.19,0-1.74,0-1.74A4.27,4.27,0,0,1,285.6,523c.14.54,1.25-1.22,1.25-1.22a4.36,4.36,0,0,1-.2,1.73c-.28.48,1.75,0,1.75,0s-.89,1.18-1.36,1.09,1.22,1.25,1.22,1.25a5.36,5.36,0,0,1-1.74-.2C285.9,525.43,286.51,527.43,286.51,527.43Z">
                                            </path>
                                            <path class="cls-14" d="M363.46,589.05a6.15,6.15,0,0,1-1.61-.67c-.14-.25-.51,1.67-.51,1.67a6.86,6.86,0,0,1-.66-1.62c0-.34-1.54.82-1.54.82l.68-1.61-1.67-.51s1-.86,1.62-.66-.83-1.54-.83-1.54a4.27,4.27,0,0,1,1.61.68c.39.4.51-1.67.51-1.67a4.28,4.28,0,0,1,.66,1.61c0,.56,1.55-.82,1.55-.82s-.22,1.47-.68,1.61,1.67.51,1.67.51a5.3,5.3,0,0,1-1.62.66C362,587.59,363.46,589.05,363.46,589.05Z">
                                            </path>
                                            <path class="cls-17" d="M362.2,589.88s-1.08-1.08-1.09-1.36-1.25,1.22-1.25,1.22a6.48,6.48,0,0,1,.2-1.74c.19-.28-1.75,0-1.75,0l1.37-1.09-1.23-1.25s1.26-.3,1.74.2,0-1.75,0-1.75a4.39,4.39,0,0,1,1.09,1.36c.14.54,1.24-1.22,1.24-1.22a4.35,4.35,0,0,1-.19,1.74c-.28.48,1.75,0,1.75,0s-.9,1.19-1.37,1.09,1.22,1.25,1.22,1.25a5.19,5.19,0,0,1-1.73-.19C361.6,587.89,362.2,589.88,362.2,589.88Z">
                                            </path>
                                            <path class="cls-14" d="M380.9,585.85s-1.47-.43-1.61-.68-.51,1.67-.51,1.67a6.46,6.46,0,0,1-.66-1.62c0-.34-1.55.82-1.55.82l.68-1.61-1.67-.51s.95-.86,1.62-.66-.82-1.54-.82-1.54a4.27,4.27,0,0,1,1.61.68c.38.4.51-1.67.51-1.67a4.45,4.45,0,0,1,.66,1.62c0,.55,1.54-.82,1.54-.82s-.22,1.46-.68,1.61,1.67.5,1.67.5a5.05,5.05,0,0,1-1.62.66C379.41,584.38,380.9,585.85,380.9,585.85Z">
                                            </path>
                                            <path class="cls-17" d="M379.63,586.68s-1.08-1.08-1.09-1.37-1.24,1.22-1.24,1.22a6.3,6.3,0,0,1,.19-1.73c.19-.29-1.74,0-1.74,0l1.36-1.09-1.22-1.25s1.25-.3,1.73.2,0-1.75,0-1.75a4.34,4.34,0,0,1,1.09,1.37c.14.54,1.25-1.23,1.25-1.23a4.41,4.41,0,0,1-.2,1.74c-.28.48,1.75,0,1.75,0s-.89,1.18-1.37,1.09,1.23,1.24,1.23,1.24a5.25,5.25,0,0,1-1.74-.19C379,584.68,379.63,586.68,379.63,586.68Z">
                                            </path>
                                            <circle class="cls-14" cx="269.68" cy="547.8" r="2.14"></circle>
                                            <path class="cls-15" d="M268.28,546.15c-2.42,2.61,1.76,5.89,3.36,2.51C270.5,549.72,267.78,549,268.28,546.15Z">
                                            </path>
                                            <circle class="cls-14" cx="280.58" cy="543.56" r="2.14"></circle>
                                            <path class="cls-15" d="M279.18,541.91c-2.43,2.61,1.76,5.89,3.36,2.51C281.39,545.48,278.67,544.76,279.18,541.91Z"></path>
                                            <circle class="cls-14" cx="290.76" cy="547.12" r="2.14"></circle>
                                            <path class="cls-15" d="M289.36,545.47c-2.43,2.61,1.76,5.89,3.36,2.51C291.57,549,288.85,548.32,289.36,545.47Z">
                                            </path>
                                            <circle class="cls-16" cx="284.27" cy="546.95" r="4.52"></circle>
                                            <path class="cls-15" d="M281.31,543.46c-5.13,5.52,3.72,12.45,7.1,5.3C286,551,280.24,549.49,281.31,543.46Z">
                                            </path>
                                            <path class="cls-14" d="M275.49,548.71a5.89,5.89,0,0,1-1.61-.68c-.14-.25-.5,1.67-.5,1.67a6.46,6.46,0,0,1-.66-1.62c0-.34-1.55.82-1.55.82l.68-1.61-1.67-.51s.95-.86,1.62-.66-.82-1.54-.82-1.54a4.27,4.27,0,0,1,1.61.68c.38.4.51-1.67.51-1.67a4.45,4.45,0,0,1,.66,1.62c0,.55,1.54-.83,1.54-.83s-.22,1.47-.68,1.61,1.67.51,1.67.51a5.05,5.05,0,0,1-1.62.66C274,547.24,275.49,548.71,275.49,548.71Z">
                                            </path>
                                            <path class="cls-17" d="M274.23,549.54s-1.08-1.08-1.09-1.37-1.24,1.22-1.24,1.22a6.3,6.3,0,0,1,.19-1.73c.19-.29-1.75,0-1.75,0l1.37-1.09-1.22-1.25s1.25-.3,1.73.2,0-1.75,0-1.75a4.34,4.34,0,0,1,1.09,1.37c.14.54,1.24-1.23,1.24-1.23a4.35,4.35,0,0,1-.19,1.74c-.28.48,1.75,0,1.75,0s-.89,1.18-1.37,1.09S276,548,276,548a5.19,5.19,0,0,1-1.73-.19C273.63,547.54,274.23,549.54,274.23,549.54Z">
                                            </path>
                                            <path class="cls-14" d="M292.93,545.5s-1.47-.43-1.61-.68-.51,1.67-.51,1.67a6.36,6.36,0,0,1-.66-1.61c0-.34-1.54.82-1.54.82l.67-1.61-1.67-.51s1-.87,1.62-.66-.82-1.54-.82-1.54a4.37,4.37,0,0,1,1.61.67c.38.41.51-1.67.51-1.67a4.45,4.45,0,0,1,.66,1.62c0,.56,1.54-.82,1.54-.82s-.22,1.46-.68,1.61,1.67.51,1.67.51a5.33,5.33,0,0,1-1.61.66C291.44,544,292.93,545.5,292.93,545.5Z">
                                            </path>
                                            <path class="cls-17" d="M291.66,546.33s-1.08-1.08-1.09-1.37-1.24,1.23-1.24,1.23a6.83,6.83,0,0,1,.19-1.74c.19-.28-1.74,0-1.74,0l1.36-1.09-1.22-1.25s1.25-.3,1.73.19,0-1.74,0-1.74a4.27,4.27,0,0,1,1.09,1.36c.14.54,1.25-1.22,1.25-1.22a4.36,4.36,0,0,1-.2,1.73c-.28.48,1.75,0,1.75,0s-.89,1.18-1.37,1.09,1.23,1.25,1.23,1.25a5.36,5.36,0,0,1-1.74-.2C291.06,544.33,291.66,546.33,291.66,546.33Z">
                                            </path>
                                            <path class="cls-14" d="M433.25,566.78a5.89,5.89,0,0,1-1.61-.68c-.14-.25-.51,1.67-.51,1.67a6.46,6.46,0,0,1-.66-1.62c0-.33-1.54.83-1.54.83l.68-1.61-1.67-.51s.95-.87,1.61-.66-.82-1.54-.82-1.54a4.37,4.37,0,0,1,1.61.67c.38.41.51-1.67.51-1.67a4.27,4.27,0,0,1,.66,1.62c0,.55,1.54-.82,1.54-.82s-.21,1.46-.67,1.61,1.67.51,1.67.51a5.43,5.43,0,0,1-1.62.66C431.77,565.31,433.25,566.78,433.25,566.78Z">
                                            </path>
                                            <path class="cls-17" d="M432,567.61s-1.08-1.08-1.09-1.37-1.25,1.23-1.25,1.23a6.48,6.48,0,0,1,.2-1.74c.18-.28-1.75,0-1.75,0l1.37-1.09-1.23-1.24s1.25-.31,1.74.19,0-1.74,0-1.74a4.27,4.27,0,0,1,1.09,1.36c.14.54,1.25-1.22,1.25-1.22a4.3,4.3,0,0,1-.19,1.73c-.28.48,1.74,0,1.74,0s-.89,1.18-1.36,1.09,1.22,1.25,1.22,1.25a5.31,5.31,0,0,1-1.73-.2C431.39,565.61,432,567.61,432,567.61Z">
                                            </path>
                                            <path class="cls-14" d="M451.68,552.36a5.89,5.89,0,0,1-1.61-.68c-.14-.25-.51,1.67-.51,1.67a6.46,6.46,0,0,1-.66-1.62c0-.33-1.54.83-1.54.83L448,551l-1.67-.51s.95-.87,1.62-.66-.83-1.55-.83-1.55a4.44,4.44,0,0,1,1.61.68c.38.41.51-1.67.51-1.67a4.27,4.27,0,0,1,.66,1.62c0,.55,1.54-.82,1.54-.82s-.21,1.46-.67,1.61,1.67.51,1.67.51a5.3,5.3,0,0,1-1.62.66C450.2,550.89,451.68,552.36,451.68,552.36Z">
                                            </path>
                                            <path class="cls-17" d="M450.42,553.19s-1.08-1.08-1.09-1.37-1.25,1.23-1.25,1.23a6.44,6.44,0,0,1,.2-1.74c.19-.28-1.75,0-1.75,0l1.37-1.09L446.67,549s1.25-.31,1.74.19,0-1.75,0-1.75a4.34,4.34,0,0,1,1.09,1.37c.14.54,1.24-1.22,1.24-1.22a4.3,4.3,0,0,1-.19,1.73c-.28.48,1.74,0,1.74,0s-.89,1.18-1.36,1.09,1.22,1.25,1.22,1.25a5.31,5.31,0,0,1-1.73-.2C449.82,551.19,450.42,553.19,450.42,553.19Z">
                                            </path>
                                            <path class="cls-14" d="M561.52,475.57s-1.47-.42-1.61-.67-.51,1.67-.51,1.67a6.46,6.46,0,0,1-.66-1.62c0-.34-1.55.82-1.55.82l.68-1.61-1.67-.51s.95-.86,1.62-.66-.82-1.54-.82-1.54a4.27,4.27,0,0,1,1.61.68c.38.4.51-1.67.51-1.67a4.46,4.46,0,0,1,.66,1.61c0,.56,1.54-.82,1.54-.82s-.22,1.47-.68,1.61,1.67.51,1.67.51a5.05,5.05,0,0,1-1.62.66C560,474.11,561.52,475.57,561.52,475.57Z">
                                            </path>
                                            <path class="cls-17" d="M560.25,476.4s-1.08-1.07-1.09-1.36-1.24,1.22-1.24,1.22a6.3,6.3,0,0,1,.19-1.73c.19-.29-1.75,0-1.75,0l1.37-1.09-1.22-1.25s1.25-.3,1.73.2,0-1.75,0-1.75a4.34,4.34,0,0,1,1.09,1.37c.14.53,1.25-1.23,1.25-1.23a4.41,4.41,0,0,1-.2,1.74c-.28.48,1.75,0,1.75,0s-.89,1.18-1.37,1.09,1.23,1.24,1.23,1.24a5.25,5.25,0,0,1-1.74-.19C559.65,474.41,560.25,476.4,560.25,476.4Z">
                                            </path>
                                            <path class="cls-14" d="M571.61,439.76a5.83,5.83,0,0,1-1.61-.67c-.14-.25-.51,1.67-.51,1.67a6.86,6.86,0,0,1-.66-1.62c0-.34-1.54.82-1.54.82l.68-1.61-1.67-.51s1-.86,1.62-.66-.82-1.54-.82-1.54a4.33,4.33,0,0,1,1.61.68c.38.4.5-1.67.5-1.67a4.28,4.28,0,0,1,.66,1.61c0,.56,1.55-.82,1.55-.82s-.22,1.47-.68,1.61,1.67.51,1.67.51a5.05,5.05,0,0,1-1.62.66C570.13,438.3,571.61,439.76,571.61,439.76Z">
                                            </path>
                                            <path class="cls-17" d="M570.35,440.59s-1.08-1.07-1.09-1.36-1.25,1.22-1.25,1.22a6.38,6.38,0,0,1,.2-1.73c.19-.29-1.75,0-1.75,0l1.37-1.09-1.23-1.25s1.26-.3,1.74.2,0-1.75,0-1.75a4.34,4.34,0,0,1,1.09,1.37c.14.53,1.24-1.23,1.24-1.23a4.35,4.35,0,0,1-.19,1.74c-.28.48,1.75,0,1.75,0s-.9,1.19-1.37,1.09S572.1,439,572.1,439a5.19,5.19,0,0,1-1.73-.19C569.75,438.6,570.35,440.59,570.35,440.59Z">
                                            </path>
                                            <circle class="cls-16" cx="463.95" cy="422.4" r="6"></circle>
                                            <path class="cls-15" d="M460,417.77c-6.8,7.32,4.93,16.52,9.42,7C466.23,427.78,458.61,425.77,460,417.77Z"></path>
                                            <circle class="cls-14" cx="464.12" cy="413.91" r="3.89"></circle>
                                            <path class="cls-15" d="M461.58,410.91c-4.42,4.75,3.2,10.72,6.11,4.56C465.6,417.41,460.65,416.1,461.58,410.91Z">
                                            </path>
                                            <circle class="cls-14" cx="468.01" cy="425.03" r="3.83"></circle>
                                            <path class="cls-15" d="M465.51,422.07c-4.34,4.68,3.14,10.55,6,4.49C469.47,428.47,464.6,427.18,465.51,422.07Z">
                                            </path>
                                            <circle class="cls-14" cx="449.79" cy="421.12" r="2.14"></circle>
                                            <path class="cls-15" d="M448.39,419.47c-2.43,2.61,1.76,5.89,3.36,2.51C450.61,423,447.88,422.32,448.39,419.47Z">
                                            </path>
                                            <circle class="cls-14" cx="452.04" cy="429.3" r="2.14"></circle>
                                            <path class="cls-15" d="M450.64,427.65c-2.43,2.62,1.76,5.9,3.36,2.51C452.85,431.23,450.13,430.51,450.64,427.65Z"></path>
                                            <circle class="cls-14" cx="468.79" cy="436.86" r="2.14"></circle>
                                            <path class="cls-15" d="M467.39,435.21c-2.42,2.61,1.76,5.89,3.36,2.51C469.61,438.78,466.89,438.06,467.39,435.21Z"></path>
                                            <circle class="cls-16" cx="464.18" cy="433.54" r="4.52"></circle>
                                            <path class="cls-15" d="M461.22,430.05c-5.12,5.53,3.72,12.46,7.1,5.3C465.9,437.6,460.15,436.08,461.22,430.05Z">
                                            </path>
                                            <path class="cls-14" d="M473,418a5.89,5.89,0,0,1-1.61-.68c-.14-.25-.51,1.67-.51,1.67a6.86,6.86,0,0,1-.66-1.62c0-.34-1.54.82-1.54.82l.68-1.61-1.67-.51s.95-.86,1.62-.66-.82-1.54-.82-1.54a4.27,4.27,0,0,1,1.61.68c.38.4.51-1.67.51-1.67a4.3,4.3,0,0,1,.65,1.62c0,.55,1.55-.82,1.55-.82s-.22,1.46-.68,1.61,1.67.5,1.67.5a5.05,5.05,0,0,1-1.62.66C471.53,416.55,473,418,473,418Z">
                                            </path>
                                            <path class="cls-17" d="M471.75,418.85s-1.08-1.08-1.09-1.37-1.24,1.22-1.24,1.22a6.3,6.3,0,0,1,.19-1.73c.19-.29-1.75,0-1.75,0l1.37-1.09L468,414.62s1.25-.31,1.73.19,0-1.75,0-1.75a4.34,4.34,0,0,1,1.09,1.37c.14.54,1.24-1.23,1.24-1.23a4.35,4.35,0,0,1-.19,1.74c-.28.48,1.75,0,1.75,0s-.89,1.18-1.37,1.09,1.22,1.24,1.22,1.24a5.19,5.19,0,0,1-1.73-.19C471.15,416.85,471.75,418.85,471.75,418.85Z">
                                            </path>
                                            <path class="cls-14" d="M585.83,475.7s-1.47-.42-1.61-.67-.51,1.67-.51,1.67a6.46,6.46,0,0,1-.66-1.62c0-.34-1.54.82-1.54.82l.67-1.61-1.67-.51s1-.86,1.62-.66-.82-1.54-.82-1.54a4.27,4.27,0,0,1,1.61.68c.38.4.51-1.67.51-1.67a4.46,4.46,0,0,1,.66,1.61c0,.56,1.54-.82,1.54-.82s-.22,1.47-.68,1.61,1.67.51,1.67.51a5.07,5.07,0,0,1-1.61.66C584.34,474.24,585.83,475.7,585.83,475.7Z">
                                            </path>
                                            <path class="cls-17" d="M584.56,476.53s-1.08-1.07-1.09-1.36-1.24,1.22-1.24,1.22a6.72,6.72,0,0,1,.19-1.73c.19-.29-1.74,0-1.74,0l1.36-1.09-1.22-1.25s1.25-.3,1.73.2,0-1.75,0-1.75a4.34,4.34,0,0,1,1.09,1.37c.14.53,1.25-1.23,1.25-1.23a4.41,4.41,0,0,1-.2,1.74c-.28.48,1.75,0,1.75,0s-.89,1.18-1.37,1.09,1.23,1.24,1.23,1.24a5.25,5.25,0,0,1-1.74-.19C584,474.54,584.56,476.53,584.56,476.53Z">
                                            </path>
                                            <circle class="cls-14" cx="547.31" cy="388.72" r="2.14"></circle>
                                            <path class="cls-15" d="M545.91,387.06c-2.42,2.62,1.76,5.9,3.36,2.51C548.13,390.64,545.41,389.92,545.91,387.06Z"></path>
                                            <circle class="cls-14" cx="560.65" cy="382.69" r="2.14"></circle>
                                            <path class="cls-15" d="M559.25,381c-2.43,2.61,1.76,5.89,3.36,2.51C561.46,384.61,558.74,383.89,559.25,381Z">
                                            </path>
                                            <circle class="cls-16" cx="554.42" cy="385.62" r="4.52"></circle>
                                            <path class="cls-15" d="M551.46,382.13c-5.12,5.52,3.72,12.45,7.1,5.3C556.14,389.68,550.39,388.16,551.46,382.13Z"></path>
                                            <path class="cls-14" d="M537.83,389.42a5.89,5.89,0,0,1-1.61-.68c-.14-.25-.51,1.67-.51,1.67a6.46,6.46,0,0,1-.66-1.62c0-.34-1.54.82-1.54.82l.68-1.61-1.67-.51s1-.86,1.61-.66-.82-1.54-.82-1.54a4.44,4.44,0,0,1,1.61.68c.38.41.51-1.67.51-1.67a4.27,4.27,0,0,1,.66,1.62c0,.55,1.54-.82,1.54-.82s-.21,1.46-.67,1.61,1.67.51,1.67.51a5.23,5.23,0,0,1-1.62.65C536.35,388,537.83,389.42,537.83,389.42Z">
                                            </path>
                                            <path class="cls-17" d="M536.57,390.25s-1.08-1.08-1.09-1.37-1.25,1.22-1.25,1.22a6.38,6.38,0,0,1,.2-1.73c.18-.29-1.75,0-1.75,0l1.37-1.09L532.82,386s1.25-.31,1.74.19,0-1.75,0-1.75a4.49,4.49,0,0,1,1.09,1.37c.14.54,1.24-1.22,1.24-1.22a4.3,4.3,0,0,1-.19,1.73c-.28.48,1.74,0,1.74,0s-.89,1.18-1.36,1.09,1.22,1.24,1.22,1.24a5.19,5.19,0,0,1-1.73-.19C536,388.25,536.57,390.25,536.57,390.25Z">
                                            </path>
                                            <path class="cls-14" d="M595.43,464.14s-1.47-.43-1.61-.68-.51,1.67-.51,1.67a6.46,6.46,0,0,1-.66-1.62c0-.34-1.54.82-1.54.82l.67-1.61-1.67-.51s1-.86,1.62-.66-.82-1.54-.82-1.54a4.44,4.44,0,0,1,1.61.68c.38.41.51-1.67.51-1.67a4.27,4.27,0,0,1,.66,1.62c0,.55,1.54-.82,1.54-.82s-.22,1.46-.68,1.61,1.67.51,1.67.51a5.33,5.33,0,0,1-1.61.66C593.94,462.67,595.43,464.14,595.43,464.14Z">
                                            </path>
                                            <path class="cls-17" d="M594.17,465s-1.08-1.08-1.09-1.37-1.25,1.22-1.25,1.22a6.72,6.72,0,0,1,.19-1.73c.19-.29-1.74,0-1.74,0l1.36-1.09-1.22-1.24s1.25-.31,1.74.19,0-1.75,0-1.75a4.34,4.34,0,0,1,1.09,1.37c.14.54,1.25-1.22,1.25-1.22a4.36,4.36,0,0,1-.2,1.73c-.28.48,1.75,0,1.75,0s-.89,1.18-1.36,1.09,1.22,1.24,1.22,1.24a5.25,5.25,0,0,1-1.74-.19C593.56,463,594.17,465,594.17,465Z">
                                            </path>
                                            <path class="cls-14" d="M619.2,440.6s-1.47-.43-1.61-.68-.51,1.67-.51,1.67a6.46,6.46,0,0,1-.66-1.62c0-.34-1.54.82-1.54.82l.67-1.61-1.67-.51s1-.86,1.62-.66-.82-1.54-.82-1.54a4.27,4.27,0,0,1,1.61.68c.38.4.51-1.67.51-1.67a4.27,4.27,0,0,1,.66,1.62c0,.55,1.54-.82,1.54-.82s-.22,1.46-.68,1.61,1.67.5,1.67.5a5.07,5.07,0,0,1-1.61.66C617.71,439.13,619.2,440.6,619.2,440.6Z">
                                            </path>
                                            <path class="cls-17" d="M617.94,441.43s-1.08-1.08-1.09-1.37-1.25,1.22-1.25,1.22a6.72,6.72,0,0,1,.19-1.73c.19-.29-1.74,0-1.74,0l1.36-1.09-1.22-1.24s1.25-.31,1.74.19,0-1.75,0-1.75A4.34,4.34,0,0,1,617,437c.14.54,1.25-1.23,1.25-1.23a4.41,4.41,0,0,1-.2,1.74c-.28.48,1.75,0,1.75,0s-.89,1.18-1.36,1.09,1.22,1.24,1.22,1.24a5.25,5.25,0,0,1-1.74-.19C617.33,439.43,617.94,441.43,617.94,441.43Z">
                                            </path>
                                            <path class="cls-14" d="M641.1,479.37a5.89,5.89,0,0,1-1.61-.68c-.14-.25-.51,1.67-.51,1.67a6.86,6.86,0,0,1-.66-1.62c0-.34-1.54.82-1.54.82l.68-1.61-1.67-.51s1-.86,1.62-.65-.83-1.55-.83-1.55a4.44,4.44,0,0,1,1.61.68c.39.41.51-1.67.51-1.67a4.27,4.27,0,0,1,.66,1.62c0,.55,1.55-.82,1.55-.82s-.22,1.46-.68,1.61,1.67.51,1.67.51a5.3,5.3,0,0,1-1.62.66C639.62,477.9,641.1,479.37,641.1,479.37Z">
                                            </path>
                                            <path class="cls-17" d="M639.84,480.2s-1.08-1.08-1.09-1.37-1.25,1.22-1.25,1.22a6.38,6.38,0,0,1,.2-1.73c.19-.29-1.75,0-1.75,0l1.37-1.09L636.09,476s1.25-.31,1.74.19,0-1.75,0-1.75a4.34,4.34,0,0,1,1.09,1.37c.14.54,1.24-1.22,1.24-1.22a4.3,4.3,0,0,1-.19,1.73c-.28.48,1.75,0,1.75,0s-.9,1.18-1.37,1.09,1.22,1.24,1.22,1.24a5.19,5.19,0,0,1-1.73-.19C639.24,478.2,639.84,480.2,639.84,480.2Z">
                                            </path>
                                            <path class="cls-14" d="M489.58,567.36a5.89,5.89,0,0,1-1.61-.68c-.14-.25-.51,1.67-.51,1.67a6.75,6.75,0,0,1-.66-1.61c0-.34-1.54.82-1.54.82l.68-1.61-1.67-.51s1-.87,1.62-.66-.83-1.54-.83-1.54a4.47,4.47,0,0,1,1.62.67c.38.41.5-1.67.5-1.67a4.27,4.27,0,0,1,.66,1.62c0,.56,1.55-.82,1.55-.82s-.22,1.46-.68,1.61,1.67.51,1.67.51a5.3,5.3,0,0,1-1.62.66C488.1,565.89,489.58,567.36,489.58,567.36Z">
                                            </path>
                                            <path class="cls-17" d="M488.32,568.19s-1.08-1.08-1.09-1.37-1.25,1.23-1.25,1.23a6.48,6.48,0,0,1,.2-1.74c.19-.28-1.75,0-1.75,0l1.37-1.09L484.57,564s1.26-.3,1.74.19,0-1.74,0-1.74a4.27,4.27,0,0,1,1.09,1.36c.14.54,1.24-1.22,1.24-1.22a4.3,4.3,0,0,1-.19,1.73c-.28.48,1.75,0,1.75,0s-.9,1.18-1.37,1.09,1.22,1.25,1.22,1.25a5.31,5.31,0,0,1-1.73-.2C487.72,566.19,488.32,568.19,488.32,568.19Z">
                                            </path>
                                            <path class="cls-14" d="M270,579.26a5.83,5.83,0,0,1-1.61-.67c-.15-.25-.51,1.67-.51,1.67a6.46,6.46,0,0,1-.66-1.62c0-.34-1.54.82-1.54.82l.68-1.61-1.68-.51s1-.86,1.62-.66-.82-1.54-.82-1.54a4.27,4.27,0,0,1,1.61.68c.38.4.51-1.67.51-1.67a4.28,4.28,0,0,1,.66,1.61c0,.56,1.54-.82,1.54-.82s-.21,1.47-.68,1.61,1.68.51,1.68.51a5.16,5.16,0,0,1-1.62.66C268.49,577.8,270,579.26,270,579.26Z">
                                            </path>
                                            <path class="cls-17" d="M268.72,580.09s-1.08-1.07-1.09-1.36-1.25,1.22-1.25,1.22a6.38,6.38,0,0,1,.2-1.73c.18-.29-1.75,0-1.75,0l1.36-1.09L265,575.86s1.25-.3,1.74.2,0-1.75,0-1.75a4.34,4.34,0,0,1,1.09,1.37c.14.53,1.25-1.23,1.25-1.23a4.35,4.35,0,0,1-.19,1.74c-.29.48,1.74,0,1.74,0s-.89,1.18-1.36,1.09,1.22,1.24,1.22,1.24a5.25,5.25,0,0,1-1.74-.19C268.11,578.1,268.72,580.09,268.72,580.09Z">
                                            </path>
                                            <path class="cls-14" d="M270.63,477.62a5.89,5.89,0,0,1-1.61-.68c-.14-.25-.5,1.67-.5,1.67a6.46,6.46,0,0,1-.66-1.62c0-.34-1.55.82-1.55.82l.68-1.61-1.67-.51s.95-.86,1.62-.66-.82-1.54-.82-1.54a4.27,4.27,0,0,1,1.61.68c.38.4.51-1.67.51-1.67a4.45,4.45,0,0,1,.66,1.62c0,.55,1.54-.83,1.54-.83s-.22,1.47-.68,1.61,1.67.51,1.67.51a5.05,5.05,0,0,1-1.62.66C269.15,476.15,270.63,477.62,270.63,477.62Z">
                                            </path>
                                            <path class="cls-17" d="M269.37,478.45s-1.08-1.08-1.09-1.37S267,478.3,267,478.3a6.3,6.3,0,0,1,.19-1.73c.19-.29-1.75,0-1.75,0l1.37-1.09-1.22-1.25s1.25-.3,1.73.2,0-1.75,0-1.75a4.34,4.34,0,0,1,1.09,1.37c.14.53,1.24-1.23,1.24-1.23a4.35,4.35,0,0,1-.19,1.74c-.28.48,1.75,0,1.75,0s-.89,1.18-1.37,1.09,1.22,1.24,1.22,1.24a5.19,5.19,0,0,1-1.73-.19C268.77,476.45,269.37,478.45,269.37,478.45Z">
                                            </path>
                                            <path class="cls-14" d="M740.82,415.22a5.89,5.89,0,0,1-1.61-.68c-.14-.25-.5,1.67-.5,1.67a6.46,6.46,0,0,1-.66-1.62c0-.34-1.55.82-1.55.82l.68-1.61-1.67-.51s1-.86,1.62-.66-.82-1.54-.82-1.54a4.27,4.27,0,0,1,1.61.68c.38.4.51-1.67.51-1.67a4.45,4.45,0,0,1,.66,1.62c0,.55,1.54-.83,1.54-.83s-.22,1.47-.68,1.61,1.67.51,1.67.51a5.05,5.05,0,0,1-1.62.66C739.34,413.75,740.82,415.22,740.82,415.22Z">
                                            </path>
                                            <path class="cls-17" d="M739.56,416.05s-1.08-1.08-1.09-1.37-1.24,1.22-1.24,1.22a6.3,6.3,0,0,1,.19-1.73c.19-.29-1.75,0-1.75,0l1.37-1.09-1.22-1.25s1.25-.3,1.73.2,0-1.75,0-1.75a4.34,4.34,0,0,1,1.09,1.37c.14.54,1.24-1.23,1.24-1.23a4.35,4.35,0,0,1-.19,1.74c-.28.48,1.75,0,1.75,0s-.89,1.18-1.37,1.09,1.23,1.24,1.23,1.24a5.25,5.25,0,0,1-1.74-.19C739,414.05,739.56,416.05,739.56,416.05Z">
                                            </path>
                                            <path class="cls-14" d="M758.75,412.16a5.89,5.89,0,0,1-1.61-.68c-.14-.25-.5,1.67-.5,1.67a6.36,6.36,0,0,1-.66-1.61c0-.34-1.55.82-1.55.82l.68-1.61-1.67-.51s.95-.87,1.62-.66-.82-1.54-.82-1.54a4.37,4.37,0,0,1,1.61.67c.38.41.51-1.67.51-1.67a4.45,4.45,0,0,1,.66,1.62c0,.56,1.54-.82,1.54-.82s-.22,1.46-.68,1.61,1.67.51,1.67.51a5.3,5.3,0,0,1-1.62.66C757.27,410.7,758.75,412.16,758.75,412.16Z">
                                            </path>
                                            <path class="cls-17" d="M757.49,413s-1.08-1.08-1.09-1.36-1.24,1.22-1.24,1.22a6.41,6.41,0,0,1,.19-1.74c.19-.28-1.75,0-1.75,0L755,410l-1.22-1.25s1.25-.3,1.73.19,0-1.74,0-1.74a4.27,4.27,0,0,1,1.09,1.36c.14.54,1.25-1.22,1.25-1.22a4.36,4.36,0,0,1-.2,1.73c-.28.48,1.75,0,1.75,0s-.89,1.18-1.37,1.09,1.23,1.25,1.23,1.25a5.36,5.36,0,0,1-1.74-.2C756.89,411,757.49,413,757.49,413Z">
                                            </path>
                                            <circle class="cls-14" cx="693.28" cy="453.9" r="2.14"></circle>
                                            <path class="cls-15" d="M691.88,452.25c-2.43,2.61,1.76,5.89,3.36,2.5C694.09,455.82,691.37,455.1,691.88,452.25Z">
                                            </path>
                                            <circle class="cls-14" cx="695.42" cy="428.37" r="2.14"></circle>
                                            <path class="cls-15" d="M694,426.72c-2.43,2.61,1.76,5.89,3.36,2.51C696.23,430.29,693.51,429.57,694,426.72Z">
                                            </path>
                                            <circle class="cls-14" cx="696.53" cy="442.14" r="2.14"></circle>
                                            <path class="cls-15" d="M695.13,440.49c-2.43,2.61,1.76,5.89,3.36,2.5C697.34,444.06,694.62,443.34,695.13,440.49Z"></path>
                                            <circle class="cls-14" cx="686.3" cy="438.13" r="2.14"></circle>
                                            <path class="cls-15" d="M684.9,436.47c-2.43,2.62,1.76,5.9,3.36,2.51C687.11,440.05,684.39,439.33,684.9,436.47Z">
                                            </path>
                                            <circle class="cls-16" cx="698.67" cy="435.19" r="4.52"></circle>
                                            <path class="cls-15" d="M695.71,431.7c-5.13,5.52,3.72,12.45,7.1,5.29C700.39,439.25,694.64,437.72,695.71,431.7Z">
                                            </path>
                                            <path class="cls-14" d="M689.28,446.62s-1.47-.43-1.61-.68-.51,1.67-.51,1.67a6.36,6.36,0,0,1-.66-1.61c0-.34-1.55.82-1.55.82l.68-1.61L684,444.7s.95-.87,1.62-.66-.82-1.54-.82-1.54a4.37,4.37,0,0,1,1.61.67c.38.41.51-1.67.51-1.67a4.45,4.45,0,0,1,.66,1.62c0,.55,1.54-.82,1.54-.82s-.22,1.46-.68,1.61,1.67.51,1.67.51a5.3,5.3,0,0,1-1.62.66C687.79,445.15,689.28,446.62,689.28,446.62Z">
                                            </path>
                                            <path class="cls-17" d="M688,447.45s-1.08-1.08-1.09-1.37-1.24,1.23-1.24,1.23a6.41,6.41,0,0,1,.19-1.74c.19-.28-1.75,0-1.75,0l1.37-1.09-1.22-1.24s1.25-.3,1.73.19,0-1.74,0-1.74a4.27,4.27,0,0,1,1.09,1.36c.14.54,1.25-1.22,1.25-1.22a4.36,4.36,0,0,1-.2,1.73c-.28.48,1.75,0,1.75,0s-.89,1.18-1.37,1.09,1.23,1.25,1.23,1.25a5.36,5.36,0,0,1-1.74-.2C687.41,445.45,688,447.45,688,447.45Z">
                                            </path>
                                            <path class="cls-14" d="M780.27,385a5.83,5.83,0,0,1-1.61-.67c-.15-.25-.51,1.67-.51,1.67a6.46,6.46,0,0,1-.66-1.62c0-.34-1.54.82-1.54.82l.68-1.61L775,383s.95-.86,1.61-.66-.82-1.54-.82-1.54a4.27,4.27,0,0,1,1.61.68c.38.4.51-1.67.51-1.67a4.28,4.28,0,0,1,.66,1.61c0,.56,1.54-.82,1.54-.82s-.21,1.47-.67,1.61,1.67.51,1.67.51a5.16,5.16,0,0,1-1.62.66C778.79,383.49,780.27,385,780.27,385Z">
                                            </path>
                                            <path class="cls-17" d="M779,385.78s-1.08-1.07-1.09-1.36-1.25,1.22-1.25,1.22a6.38,6.38,0,0,1,.2-1.73c.18-.29-1.75,0-1.75,0l1.36-1.09-1.22-1.25s1.25-.3,1.74.2,0-1.75,0-1.75a4.34,4.34,0,0,1,1.09,1.37c.14.53,1.25-1.23,1.25-1.23a4.35,4.35,0,0,1-.19,1.74c-.28.48,1.74,0,1.74,0s-.89,1.18-1.36,1.09,1.22,1.24,1.22,1.24A5.25,5.25,0,0,1,779,384C778.4,383.79,779,385.78,779,385.78Z">
                                            </path>
                                            <path class="cls-14" d="M702.8,566.86a5.89,5.89,0,0,1-1.61-.68c-.14-.25-.51,1.67-.51,1.67a6.36,6.36,0,0,1-.66-1.61c0-.34-1.54.82-1.54.82l.68-1.61-1.67-.51s1-.87,1.61-.66-.82-1.54-.82-1.54a4.37,4.37,0,0,1,1.61.67c.38.41.51-1.67.51-1.67a4.27,4.27,0,0,1,.66,1.62c0,.56,1.54-.82,1.54-.82s-.21,1.46-.67,1.61,1.67.51,1.67.51a5.43,5.43,0,0,1-1.62.66C701.32,565.4,702.8,566.86,702.8,566.86Z">
                                            </path>
                                            <path class="cls-17" d="M701.54,567.69s-1.08-1.08-1.09-1.37-1.25,1.23-1.25,1.23a6.48,6.48,0,0,1,.2-1.74c.18-.28-1.75,0-1.75,0l1.37-1.09-1.23-1.25s1.25-.3,1.74.19,0-1.74,0-1.74a4.27,4.27,0,0,1,1.09,1.36c.14.54,1.25-1.22,1.25-1.22a4.3,4.3,0,0,1-.19,1.73c-.28.48,1.74,0,1.74,0s-.89,1.18-1.36,1.09,1.22,1.25,1.22,1.25a5.31,5.31,0,0,1-1.73-.2C700.94,565.69,701.54,567.69,701.54,567.69Z">
                                            </path>
                                            <circle class="cls-14" cx="338" cy="518.45" r="2.14"></circle>
                                            <path class="cls-15" d="M335.91,517.89c-.52,3.53,4.79,3.85,4.19.15C339.76,519.57,337.11,520.52,335.91,517.89Z">
                                            </path>
                                            <circle class="cls-14" cx="357.89" cy="504.65" r="2.14"></circle>
                                            <path class="cls-15" d="M355.8,504.08c-.52,3.53,4.79,3.86,4.19.16C359.65,505.77,357,506.72,355.8,504.08Z">
                                            </path>
                                            <circle class="cls-16" cx="342.62" cy="509.91" r="4.52"></circle>
                                            <path class="cls-15" d="M338.2,508.71c-1.09,7.46,10.13,8.15,8.85.34C346.34,512.28,340.74,514.29,338.2,508.71Z">
                                            </path>
                                            <path class="cls-14" d="M356.34,508.71a5.64,5.64,0,0,1-1.71.35c-.26-.12.53,1.67.53,1.67a6.39,6.39,0,0,1-1.46-1c-.17-.29-.8,1.55-.8,1.55l-.36-1.71-1.67.53s.3-1.25,1-1.46-1.55-.8-1.55-.8a4.29,4.29,0,0,1,1.71-.36c.54.12-.53-1.66-.53-1.66a4.39,4.39,0,0,1,1.46.95c.3.47.81-1.55.81-1.55s.65,1.33.35,1.71,1.67-.53,1.67-.53a5.38,5.38,0,0,1-1,1.47C354.29,508.35,356.34,508.71,356.34,508.71Z">
                                            </path>
                                            <path class="cls-17" d="M355.77,510.11a5.94,5.94,0,0,1-1.67-.51c-.17-.23-.33,1.72-.33,1.72a6.61,6.61,0,0,1-.83-1.54c0-.34-1.44,1-1.44,1l.5-1.68-1.71-.33s.85-1,1.54-.82-1-1.45-1-1.45a4.35,4.35,0,0,1,1.67.5c.42.37.33-1.71.33-1.71a4.26,4.26,0,0,1,.83,1.54c0,.55,1.45-1,1.45-1s-.07,1.48-.51,1.67,1.72.34,1.72.34a5.45,5.45,0,0,1-1.54.82C354.14,508.81,355.77,510.11,355.77,510.11Z">
                                            </path>
                                            <polygon class="cls-10" points="426.25 481.61 424.96 479.2 427.35 477.95 428.72 480.41 426.25 481.61"></polygon>
                                            <polygon class="cls-10" points="430.2 479.4 429.19 477.3 431.36 475.96 432.81 478.42 430.2 479.4"></polygon>
                                            <polygon class="cls-10" points="428.03 484.5 429.8 483.7 424.67 474.32 423.43 474.97 428.03 484.5"></polygon>
                                            <polygon class="cls-10" points="427.35 477.95 428.97 477.23 427.81 474.77 426.25 475.46 427.35 477.95">
                                            </polygon>
                                            <polygon class="cls-10" points="431.99 477.03 437.15 474.48 437.33 474.77 432.17 477.34 431.99 477.03">
                                            </polygon>
                                            <polygon class="cls-10" points="431.16 479.04 433.88 483.88 434.11 483.59 431.67 478.85 431.16 479.04">
                                            </polygon>
                                            <polygon class="cls-10" points="428.15 480.69 431.16 479.04 429.8 476.76 426.81 478.23 428.15 480.69"></polygon>
                                            <circle class="cls-10" cx="424.12" cy="480.75" r="1.54"></circle>
                                            <circle class="cls-10" cx="601.02" cy="397.83" r="0.74"></circle>
                                            <circle class="cls-10" cx="616.2" cy="400.07" r="0.74"></circle>
                                            <circle class="cls-10" cx="628.73" cy="403.65" r="0.74"></circle>
                                            <circle class="cls-10" cx="642.13" cy="408.35" r="0.74"></circle>
                                            <circle class="cls-10" cx="653.53" cy="414.79" r="0.74"></circle>
                                        </g>
                                        <g id="Texto">
                                            <text class="cls-21" transform="translate(252.33 461.54) scale(1.02 1)">
                                                <tspan class="cls-22">B</tspan>
                                                <tspan class="cls-23" x="5.96" y="0">-</tspan>
                                                <tspan class="cls-24" x="9.67" y="0">0</tspan>
                                                <tspan x="14.88" y="0">1</tspan>
                                            </text>
                                            <polygon class="cls-1" points="250.82 450.39 311.42 450.39 311.42 465.26 250.82 465.26 250.82 450.39 250.82 450.39"></polygon><text class="cls-25" transform="translate(258.99 440.23)">
                                                <tspan class="cls-26">B</tspan>
                                                <tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">0</tspan>
                                                <tspan x="15.14" y="0">2</tspan>
                                            </text>
                                            <polygon class="cls-1" points="257.48 428.88 318.08 428.88 318.08 444.01 257.48 444.01 257.48 428.88 257.48 428.88"></polygon><text class="cls-25" transform="translate(268.6 418.37)">
                                                <tspan class="cls-26">B</tspan>
                                                <tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">0</tspan>
                                                <tspan x="15.14" y="0">3</tspan>
                                            </text>
                                            <polygon class="cls-1" points="267.09 407.03 327.69 407.03 327.69 422.16 267.09 422.16 267.09 407.03 267.09 407.03"></polygon><text class="cls-25" transform="translate(276.55 397.22)">
                                                <tspan class="cls-26">B</tspan>
                                                <tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">0</tspan>
                                                <tspan x="15.14" y="0">4</tspan>
                                            </text>
                                            <polygon class="cls-1" points="275.04 385.87 335.64 385.87 335.64 401 275.04 401 275.04 385.87 275.04 385.87">
                                            </polygon><text class="cls-25" transform="translate(285.06 373.67)">
                                                <tspan class="cls-26">B</tspan>
                                                <tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">0</tspan>
                                                <tspan x="15.14" y="0">5</tspan>
                                            </text>
                                            <polygon class="cls-1" points="283.55 362.33 344.15 362.33 344.15 377.46 283.55 377.46 283.55 362.33 283.55 362.33"></polygon><text class="cls-25" transform="translate(294.03 351.69)">
                                                <tspan class="cls-26">B</tspan>
                                                <tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">0</tspan>
                                                <tspan x="15.14" y="0">6</tspan>
                                            </text>
                                            <polygon class="cls-1" points="292.52 340.34 353.12 340.34 353.12 355.47 292.52 355.47 292.52 340.34 292.52 340.34"></polygon>
                                            <polygon class="cls-1" points="280.43 338.79 341.03 338.79 341.03 353.93 280.43 353.93 280.43 338.79 280.43 338.79"></polygon>
                                            <polygon class="cls-1" points="280.43 338.79 341.03 338.79 341.03 353.93 280.43 353.93 280.43 338.79 280.43 338.79"></polygon><text class="cls-25" transform="translate(301.87 330.34)">
                                                <tspan class="cls-26">B</tspan>
                                                <tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">0</tspan>
                                                <tspan x="15.14" y="0">7</tspan>
                                            </text>
                                            <polygon class="cls-1" points="300.36 319 360.96 319 360.96 334.13 300.36 334.13 300.36 319 300.36 319">
                                            </polygon>
                                            <polygon class="cls-1" points="288.98 318.14 349.58 318.14 349.58 333.27 288.98 333.27 288.98 318.14 288.98 318.14"></polygon>
                                            <polygon class="cls-1" points="288.98 318.14 349.58 318.14 349.58 333.27 288.98 333.27 288.98 318.14 288.98 318.14"></polygon><text class="cls-25" transform="translate(309.34 308.15)">
                                                <tspan class="cls-26">B</tspan>
                                                <tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">0</tspan>
                                                <tspan x="15.14" y="0">8</tspan>
                                            </text>
                                            <polygon class="cls-1" points="307.83 296.8 368.43 296.8 368.43 311.94 307.83 311.94 307.83 296.8 307.83 296.8">
                                            </polygon><text class="cls-25" transform="translate(317.61 285.65)">
                                                <tspan class="cls-26">B</tspan>
                                                <tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">0</tspan>
                                                <tspan x="15.14" y="0">9</tspan>
                                            </text>
                                            <polygon class="cls-1" points="316.1 274.31 376.7 274.31 376.7 289.44 316.1 289.44 316.1 274.31 316.1 274.31">
                                            </polygon><text class="cls-25" transform="translate(326.19 264.03)">
                                                <tspan class="cls-26">B</tspan>
                                                <tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">1</tspan>
                                                <tspan x="15.14" y="0">0</tspan>
                                            </text>
                                            <polygon class="cls-1" points="324.68 252.68 385.28 252.68 385.28 267.82 324.68 267.82 324.68 252.68 324.68 252.68"></polygon><text class="cls-25" transform="translate(335.01 241.27)">
                                                <tspan class="cls-26">B</tspan>
                                                <tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">1</tspan>
                                                <tspan x="15.14" y="0">1</tspan>
                                            </text>
                                            <polygon class="cls-1" points="333.5 229.92 394.1 229.92 394.1 245.06 333.5 245.06 333.5 229.92 333.5 229.92">
                                            </polygon><text class="cls-25" transform="translate(343.72 218.79)">
                                                <tspan class="cls-26">B</tspan>
                                                <tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">1</tspan>
                                                <tspan x="15.14" y="0">2</tspan>
                                            </text>
                                            <polygon class="cls-1" points="342.21 207.44 402.81 207.44 402.81 222.58 342.21 222.58 342.21 207.44 342.21 207.44"></polygon><text class="cls-25" transform="translate(351.64 196.23)">
                                                <tspan class="cls-26">B</tspan>
                                                <tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">1</tspan>
                                                <tspan x="15.14" y="0">3</tspan>
                                            </text>
                                            <polygon class="cls-1" points="350.13 184.88 410.73 184.88 410.73 200.02 350.13 200.02 350.13 184.88 350.13 184.88"></polygon>
                                            <polygon class="cls-1" points="338.3 183.72 398.9 183.72 398.9 198.85 338.3 198.85 338.3 183.72 338.3 183.72">
                                            </polygon>
                                            <polygon class="cls-1" points="338.3 183.72 398.9 183.72 398.9 198.85 338.3 198.85 338.3 183.72 338.3 183.72">
                                            </polygon><text class="cls-25" transform="translate(360.18 175.11)">
                                                <tspan class="cls-26">B</tspan>
                                                <tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">1</tspan>
                                                <tspan x="15.14" y="0">4</tspan>
                                            </text>
                                            <polygon class="cls-1" points="358.67 163.76 419.27 163.76 419.27 178.9 358.67 178.9 358.67 163.76 358.67 163.76"></polygon><text class="cls-25" transform="translate(368.3 152.91)">
                                                <tspan class="cls-26">B</tspan>
                                                <tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">1</tspan>
                                                <tspan x="15.14" y="0">5</tspan>
                                            </text>
                                            <polygon class="cls-1" points="366.79 141.57 427.39 141.57 427.39 156.7 366.79 156.7 366.79 141.57 366.79 141.57"></polygon>
                                            <polygon class="cls-1" points="352.27 139.46 412.87 139.46 412.87 154.59 352.27 154.59 352.27 139.46 352.27 139.46"></polygon>
                                            <polygon class="cls-1" points="352.27 139.46 412.87 139.46 412.87 154.59 352.27 154.59 352.27 139.46 352.27 139.46"></polygon><text class="cls-25" transform="translate(379.65 376.19)">
                                                <tspan class="cls-26">B</tspan>
                                                <tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">1</tspan>
                                                <tspan x="15.14" y="0">6</tspan>
                                            </text>
                                            <polygon class="cls-1" points="378.14 364.84 438.74 364.84 438.74 379.97 378.14 379.97 378.14 364.84 378.14 364.84"></polygon><text class="cls-25" transform="translate(388.5 354.89)">
                                                <tspan class="cls-26">B</tspan>
                                                <tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">1</tspan>
                                                <tspan x="15.14" y="0">7</tspan>
                                            </text>
                                            <polygon class="cls-1" points="386.99 343.54 447.59 343.54 447.59 358.68 386.99 358.68 386.99 343.54 386.99 343.54"></polygon><text class="cls-25" transform="translate(396.61 332)">
                                                <tspan class="cls-26">B</tspan>
                                                <tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">1</tspan>
                                                <tspan x="15.14" y="0">8</tspan>
                                            </text>
                                            <polygon class="cls-1" points="395.1 320.65 455.7 320.65 455.7 335.78 395.1 335.78 395.1 320.65 395.1 320.65">
                                            </polygon><text class="cls-25" transform="translate(404.39 311.33)">
                                                <tspan class="cls-26">B</tspan>
                                                <tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">1</tspan>
                                                <tspan x="15.14" y="0">9</tspan>
                                            </text>
                                            <polygon class="cls-1" points="402.88 299.98 463.48 299.98 463.48 315.11 402.88 315.11 402.88 299.98 402.88 299.98"></polygon><text class="cls-25" transform="translate(411.83 289.31)">
                                                <tspan class="cls-26">B</tspan>
                                                <tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">2</tspan>
                                                <tspan x="15.14" y="0">0</tspan>
                                            </text>
                                            <polygon class="cls-1" points="410.32 277.96 470.92 277.96 470.92 293.09 410.32 293.09 410.32 277.96 410.32 277.96"></polygon><text class="cls-25" transform="translate(420.51 265.79)">
                                                <tspan class="cls-26">B</tspan>
                                                <tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">2</tspan>
                                                <tspan x="15.14" y="0">1</tspan>
                                            </text>
                                            <polygon class="cls-1" points="419 254.44 479.6 254.44 479.6 269.58 419 269.58 419 254.44 419 254.44"></polygon>
                                            <text class="cls-25" transform="translate(428.7 244.21)">
                                                <tspan class="cls-26">B</tspan>
                                                <tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">2</tspan>
                                                <tspan x="15.14" y="0">2</tspan>
                                            </text>
                                            <polygon class="cls-1" points="427.19 232.86 487.79 232.86 487.79 248 427.19 248 427.19 232.86 427.19 232.86">
                                            </polygon><text class="cls-25" transform="translate(436.45 222.76)">
                                                <tspan class="cls-26">B</tspan>
                                                <tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">2</tspan>
                                                <tspan x="15.14" y="0">3</tspan>
                                            </text>
                                            <polygon class="cls-1" points="434.94 211.42 495.54 211.42 495.54 226.55 434.94 226.55 434.94 211.42 434.94 211.42"></polygon><text class="cls-25" transform="translate(444.58 199.1)">
                                                <tspan class="cls-26">B</tspan>
                                                <tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">2</tspan>
                                                <tspan x="15.14" y="0">4</tspan>
                                            </text>
                                            <polygon class="cls-1" points="443.07 187.76 503.67 187.76 503.67 202.89 443.07 202.89 443.07 187.76 443.07 187.76"></polygon><text class="cls-25" transform="translate(453.56 177.37)">
                                                <tspan class="cls-26">B</tspan>
                                                <tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">2</tspan>
                                                <tspan x="15.14" y="0">5</tspan>
                                            </text>
                                            <polygon class="cls-1" points="452.05 166.02 512.65 166.02 512.65 181.15 452.05 181.15 452.05 166.02 452.05 166.02"></polygon><text class="cls-25" transform="translate(461.89 155.8)">
                                                <tspan class="cls-26">B</tspan>
                                                <tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">2</tspan>
                                                <tspan x="15.14" y="0">6</tspan>
                                            </text>
                                            <polygon class="cls-1" points="460.38 144.46 520.98 144.46 520.98 159.59 460.38 159.59 460.38 144.46 460.38 144.46"></polygon><text class="cls-25" transform="translate(472.07 337.34)">
                                                <tspan class="cls-26">B</tspan>
                                                <tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">2</tspan>
                                                <tspan x="15.14" y="0">7</tspan>
                                            </text>
                                            <polygon class="cls-1" points="470.56 325.99 531.16 325.99 531.16 341.12 470.56 341.12 470.56 325.99 470.56 325.99"></polygon><text class="cls-25" transform="translate(479.09 315.11)">
                                                <tspan class="cls-26">B</tspan>
                                                <tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">2</tspan>
                                                <tspan x="15.14" y="0">8</tspan>
                                            </text>
                                            <polygon class="cls-1" points="477.58 303.76 538.18 303.76 538.18 318.89 477.58 318.89 477.58 303.76 477.58 303.76"></polygon><text class="cls-25" transform="translate(487.43 293.22)">
                                                <tspan class="cls-26">B</tspan>
                                                <tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">2</tspan>
                                                <tspan x="15.14" y="0">9</tspan>
                                            </text>
                                            <polygon class="cls-1" points="485.92 281.87 546.52 281.87 546.52 297 485.92 297 485.92 281.87 485.92 281.87">
                                            </polygon><text class="cls-25" transform="translate(495.47 270.43)">
                                                <tspan class="cls-26">B</tspan>
                                                <tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">3</tspan>
                                                <tspan x="15.14" y="0">0</tspan>
                                            </text>
                                            <polygon class="cls-1" points="493.96 259.08 554.56 259.08 554.56 274.22 493.96 274.22 493.96 259.08 493.96 259.08"></polygon><text class="cls-25" transform="translate(504.07 248.84)">
                                                <tspan class="cls-26">B</tspan>
                                                <tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">3</tspan>
                                                <tspan x="15.14" y="0">1</tspan>
                                            </text>
                                            <polygon class="cls-1" points="502.56 237.49 563.16 237.49 563.16 252.62 502.56 252.62 502.56 237.49 502.56 237.49"></polygon><text class="cls-25" transform="translate(511.87 227.37)">
                                                <tspan class="cls-26">B</tspan>
                                                <tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">3</tspan>
                                                <tspan x="15.14" y="0">2</tspan>
                                            </text>
                                            <polygon class="cls-1" points="510.37 216.03 570.97 216.03 570.97 231.16 510.37 231.16 510.37 216.03 510.37 216.03"></polygon><text class="cls-25" transform="translate(519.39 204.55)">
                                                <tspan class="cls-26">B</tspan>
                                                <tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">3</tspan>
                                                <tspan x="15.14" y="0">3</tspan>
                                            </text>
                                            <polygon class="cls-1" points="517.88 193.2 578.48 193.2 578.48 208.34 517.88 208.34 517.88 193.2 517.88 193.2">
                                            </polygon><text class="cls-25" transform="translate(527.38 182.85)">
                                                <tspan class="cls-26">B</tspan>
                                                <tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">3</tspan>
                                                <tspan x="15.14" y="0">4</tspan>
                                            </text>
                                            <polygon class="cls-1" points="525.87 171.5 586.47 171.5 586.47 186.64 525.87 186.64 525.87 171.5 525.87 171.5">
                                            </polygon><text class="cls-25" transform="translate(535.16 159.68)">
                                                <tspan class="cls-26">B</tspan>
                                                <tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">3</tspan>
                                                <tspan x="15.14" y="0">5</tspan>
                                            </text>
                                            <polygon class="cls-1" points="533.65 148.34 594.25 148.34 594.25 163.47 533.65 163.47 533.65 148.34 533.65 148.34"></polygon><text class="cls-25" transform="translate(577.34 317.33)">
                                                <tspan class="cls-26">B</tspan>
                                                <tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">3</tspan>
                                                <tspan x="15.14" y="0">6</tspan>
                                            </text>
                                            <polygon class="cls-1" points="575.83 305.99 636.43 305.99 636.43 321.12 575.83 321.12 575.83 305.99 575.83 305.99"></polygon><text class="cls-25" transform="translate(583.48 295.97)">
                                                <tspan class="cls-26">B</tspan>
                                                <tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">3</tspan>
                                                <tspan x="15.14" y="0">7</tspan>
                                            </text>
                                            <polygon class="cls-1" points="581.97 284.63 642.57 284.63 642.57 299.76 581.97 299.76 581.97 284.63 581.97 284.63"></polygon><text class="cls-25" transform="translate(591.68 275.27)">
                                                <tspan class="cls-26">B</tspan>
                                                <tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">3</tspan>
                                                <tspan x="15.14" y="0">8</tspan>
                                            </text>
                                            <polygon class="cls-1" points="590.17 263.93 650.77 263.93 650.77 279.06 590.17 279.06 590.17 263.93 590.17 263.93"></polygon><text class="cls-25" transform="translate(601.07 251.17)">
                                                <tspan class="cls-26">B</tspan>
                                                <tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">3</tspan>
                                                <tspan x="15.14" y="0">9</tspan>
                                            </text>
                                            <polygon class="cls-1" points="599.56 239.83 660.16 239.83 660.16 254.96 599.56 254.96 599.56 239.83 599.56 239.83"></polygon><text class="cls-25" transform="translate(608.6 230.23)">
                                                <tspan class="cls-26">B</tspan>
                                                <tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">4</tspan>
                                                <tspan x="15.14" y="0">0</tspan>
                                            </text>
                                            <polygon class="cls-1" points="607.09 218.88 667.69 218.88 667.69 234.02 607.09 234.02 607.09 218.88 607.09 218.88"></polygon><text class="cls-29" transform="translate(616.64 207.99)">B<tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">4</tspan>
                                                <tspan class="cls-30" x="15.14" y="0">1</tspan>
                                            </text>
                                            <polygon class="cls-1" points="615.13 196.64 675.74 196.64 675.74 211.77 615.13 211.77 615.13 196.64 615.13 196.64"></polygon><text class="cls-25" transform="translate(624.82 186.52)">
                                                <tspan class="cls-26">B</tspan>
                                                <tspan class="cls-31" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">4</tspan>
                                                <tspan x="15.14" y="0">2</tspan>
                                            </text>
                                            <polygon class="cls-1" points="623.31 175.17 683.91 175.17 683.91 190.31 623.31 190.31 623.31 175.17 623.31 175.17"></polygon><text class="cls-25" transform="translate(631.91 165.36)">
                                                <tspan class="cls-32">B</tspan>
                                                <tspan class="cls-31" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-33" x="9.84" y="0">4</tspan>
                                                <tspan x="15.14" y="0">3</tspan>
                                            </text>
                                            <polygon class="cls-1" points="630.4 154.01 691 154.01 691 169.14 630.4 169.14 630.4 154.01 630.4 154.01">
                                            </polygon><text class="cls-25" transform="translate(638.65 344.78)">
                                                <tspan class="cls-32">B</tspan>
                                                <tspan class="cls-31" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-33" x="9.84" y="0">4</tspan>
                                                <tspan x="15.14" y="0">4</tspan>
                                            </text>
                                            <polygon class="cls-1" points="637.14 333.43 697.74 333.43 697.74 348.56 637.14 348.56 637.14 333.43 637.14 333.43"></polygon><text class="cls-25" transform="translate(647.22 323.9)">
                                                <tspan class="cls-32">B</tspan>
                                                <tspan class="cls-31" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-33" x="9.84" y="0">4</tspan>
                                                <tspan x="15.14" y="0">5</tspan>
                                            </text>
                                            <polygon class="cls-1" points="645.71 312.56 706.31 312.56 706.31 327.69 645.71 327.69 645.71 312.56 645.71 312.56"></polygon><text class="cls-25" transform="translate(654.93 300.78)">
                                                <tspan class="cls-32">B</tspan>
                                                <tspan class="cls-31" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-33" x="9.84" y="0">4</tspan>
                                                <tspan x="15.14" y="0">6</tspan>
                                            </text>
                                            <polygon class="cls-1" points="653.42 289.44 714.02 289.44 714.02 304.57 653.42 304.57 653.42 289.44 653.42 289.44"></polygon><text class="cls-25" transform="translate(663.59 279.35)">
                                                <tspan class="cls-32">B</tspan>
                                                <tspan class="cls-31" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-33" x="9.84" y="0">4</tspan>
                                                <tspan x="15.14" y="0">7</tspan>
                                            </text>
                                            <polygon class="cls-1" points="662.08 268.01 722.68 268.01 722.68 283.14 662.08 283.14 662.08 268.01 662.08 268.01"></polygon><text class="cls-25" transform="translate(672 257.15)">
                                                <tspan class="cls-32">B</tspan>
                                                <tspan class="cls-31" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-33" x="9.84" y="0">4</tspan>
                                                <tspan x="15.14" y="0">8</tspan>
                                            </text>
                                            <polygon class="cls-1" points="670.49 245.8 731.09 245.8 731.09 260.93 670.49 260.93 670.49 245.8 670.49 245.8">
                                            </polygon><text class="cls-25" transform="translate(679.66 234.01)">
                                                <tspan class="cls-32">B</tspan>
                                                <tspan class="cls-31" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-33" x="9.84" y="0">4</tspan>
                                                <tspan x="15.14" y="0">9</tspan>
                                            </text>
                                            <polygon class="cls-1" points="678.15 222.66 738.75 222.66 738.75 237.8 678.15 237.8 678.15 222.66 678.15 222.66"></polygon>
                                            <polygon class="cls-1" points="684.93 221.61 745.52 221.61 745.52 236.75 684.93 236.75 684.93 221.61 684.93 221.61"></polygon>
                                            <polygon class="cls-1" points="684.93 221.61 745.52 221.61 745.52 236.75 684.93 236.75 684.93 221.61 684.93 221.61"></polygon><text class="cls-25" transform="translate(687.88 212.72)">
                                                <tspan class="cls-32">B</tspan>
                                                <tspan class="cls-31" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-33" x="9.84" y="0">5</tspan>
                                                <tspan x="15.14" y="0">0</tspan>
                                            </text>
                                            <polygon class="cls-1" points="686.37 201.38 746.97 201.38 746.97 216.51 686.37 216.51 686.37 201.38 686.37 201.38"></polygon><text class="cls-25" transform="translate(695.77 191.11)">
                                                <tspan class="cls-32">B</tspan>
                                                <tspan class="cls-31" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-33" x="9.84" y="0">5</tspan>
                                                <tspan x="15.14" y="0">1</tspan>
                                            </text>
                                            <polygon class="cls-1" points="694.26 179.77 754.86 179.77 754.86 194.9 694.26 194.9 694.26 179.77 694.26 179.77"></polygon><text class="cls-25" transform="translate(704.08 167.25)">
                                                <tspan class="cls-32">B</tspan>
                                                <tspan class="cls-31" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-33" x="9.84" y="0">5</tspan>
                                                <tspan x="15.14" y="0">2</tspan>
                                            </text>
                                            <polygon class="cls-1" points="702.57 155.91 763.17 155.91 763.17 171.04 702.57 171.04 702.57 155.91 702.57 155.91"></polygon><text class="cls-34" transform="matrix(0.38, -0.93, 0.93, 0.38, 460.55, 75.04)">
                                                <tspan class="cls-35">B</tspan>
                                                <tspan class="cls-36" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-37" x="9.84" y="0">5</tspan>
                                                <tspan x="15.14" y="0">3</tspan>
                                            </text>
                                            <polygon class="cls-1" points="449.44 72.18 472.18 16.01 486.21 21.69 463.47 77.86 449.44 72.18 449.44 72.18">
                                            </polygon><text class="cls-34" transform="matrix(0.38, -0.93, 0.93, 0.38, 490.31, 76.79)">
                                                <tspan class="cls-35">B</tspan>
                                                <tspan class="cls-36" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-37" x="9.84" y="0">5</tspan>
                                                <tspan x="15.14" y="0">4</tspan>
                                            </text>
                                            <polygon class="cls-1" points="479.2 73.93 501.94 17.76 515.97 23.44 493.23 79.61 479.2 73.93 479.2 73.93">
                                            </polygon><text class="cls-34" transform="matrix(0.38, -0.93, 0.93, 0.38, 517.59, 78.92)">
                                                <tspan class="cls-35">B</tspan>
                                                <tspan class="cls-36" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-37" x="9.84" y="0">5</tspan>
                                                <tspan x="15.14" y="0">5</tspan>
                                            </text>
                                            <polygon class="cls-1" points="506.47 76.06 529.22 19.89 543.24 25.57 520.5 81.74 506.47 76.06 506.47 76.06">
                                            </polygon><text class="cls-38" transform="matrix(0.38, -0.93, 0.93, 0.38, 604.49, 77.14)">
                                                <tspan class="cls-39">B</tspan>
                                                <tspan class="cls-40" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-41" x="9.84" y="0">5</tspan>
                                                <tspan x="15.14" y="0">6</tspan>
                                            </text>
                                            <polygon class="cls-1" points="593.38 74.28 616.12 18.11 630.15 23.79 607.4 79.96 593.38 74.28 593.38 74.28">
                                            </polygon><text class="cls-38" transform="matrix(0.38, -0.93, 0.93, 0.38, 627.46, 77.14)">
                                                <tspan class="cls-39">B</tspan>
                                                <tspan class="cls-40" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-41" x="9.84" y="0">5</tspan>
                                                <tspan x="15.14" y="0">7</tspan>
                                            </text>
                                            <polygon class="cls-1" points="616.35 74.28 639.09 18.11 653.12 23.79 630.38 79.96 616.35 74.28 616.35 74.28">
                                            </polygon><text class="cls-38" transform="matrix(0.38, -0.93, 0.93, 0.38, 650.56, 77.15)">
                                                <tspan class="cls-39">B</tspan>
                                                <tspan class="cls-40" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-41" x="9.84" y="0">5</tspan>
                                                <tspan x="15.14" y="0">8</tspan>
                                            </text>
                                            <polygon class="cls-1" points="639.44 74.3 662.18 18.13 676.21 23.8 653.47 79.98 639.44 74.3 639.44 74.3">
                                            </polygon>
                                            <polygon class="cls-1" points="635.56 58.73 696.16 58.73 696.16 73.86 635.56 73.86 635.56 58.73 635.56 58.73">
                                            </polygon>
                                            <polygon class="cls-1" points="635.56 58.73 696.16 58.73 696.16 73.86 635.56 73.86 635.56 58.73 635.56 58.73">
                                            </polygon><text class="cls-38" transform="matrix(0.38, -0.93, 0.93, 0.38, 675.16, 77.15)">
                                                <tspan class="cls-39">B</tspan>
                                                <tspan class="cls-40" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-41" x="9.84" y="0">5</tspan>
                                                <tspan x="15.14" y="0">9</tspan>
                                            </text>
                                            <polygon class="cls-1" points="664.05 74.3 686.79 18.13 700.82 23.8 678.08 79.98 664.05 74.3 664.05 74.3">
                                            </polygon><text class="cls-38" transform="matrix(0.38, -0.93, 0.93, 0.38, 699.85, 77.15)">
                                                <tspan class="cls-39">B</tspan>
                                                <tspan class="cls-40" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-41" x="9.84" y="0">6</tspan>
                                                <tspan x="15.14" y="0">0</tspan>
                                            </text>
                                            <polygon class="cls-1" points="688.74 74.3 711.48 18.13 725.51 23.8 702.76 79.98 688.74 74.3 688.74 74.3">
                                            </polygon>
                                            <polygon class="cls-1" points="685.21 61.42 745.81 61.42 745.81 76.56 685.21 76.56 685.21 61.42 685.21 61.42">
                                            </polygon>
                                            <polygon class="cls-1" points="685.21 61.42 745.81 61.42 745.81 76.56 685.21 76.56 685.21 61.42 685.21 61.42">
                                            </polygon><text class="cls-38" transform="matrix(0.38, -0.93, 0.93, 0.38, 724.47, 76.95)">
                                                <tspan class="cls-39">B</tspan>
                                                <tspan class="cls-40" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-41" x="9.84" y="0">6</tspan>
                                                <tspan x="15.14" y="0">1</tspan>
                                            </text>
                                            <polygon class="cls-1" points="713.35 74.1 736.1 17.93 750.12 23.61 727.38 79.78 713.35 74.1 713.35 74.1">
                                            </polygon><text class="cls-38" transform="matrix(0.38, -0.93, 0.93, 0.38, 748.87, 77.04)">
                                                <tspan class="cls-39">B</tspan>
                                                <tspan class="cls-40" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-41" x="9.84" y="0">6</tspan>
                                                <tspan x="15.14" y="0">2</tspan>
                                            </text>
                                            <polygon class="cls-1" points="737.75 74.18 760.49 18.01 774.52 23.69 751.78 79.86 737.75 74.18 737.75 74.18">
                                            </polygon>
                                            <polygon class="cls-1" points="744.31 52.4 804.91 52.4 804.91 67.53 744.31 67.53 744.31 52.4 744.31 52.4">
                                            </polygon>
                                            <polygon class="cls-1" points="744.31 52.4 804.91 52.4 804.91 67.53 744.31 67.53 744.31 52.4 744.31 52.4">
                                            </polygon><text class="cls-42" transform="matrix(0.38, -0.93, 0.93, 0.38, 879.76, 77.15)">B<tspan class="cls-43" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-44" x="9.84" y="0">6</tspan>
                                                <tspan class="cls-45" x="15.14" y="0">3</tspan>
                                            </text>
                                            <polygon class="cls-1" points="868.65 74.3 891.39 18.13 905.42 23.8 882.67 79.98 868.65 74.3 868.65 74.3">
                                            </polygon><text class="cls-25" transform="translate(805.26 173.61)">
                                                <tspan class="cls-32">B</tspan>
                                                <tspan class="cls-31" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-33" x="9.84" y="0">6</tspan>
                                                <tspan x="15.14" y="0">4</tspan>
                                            </text>
                                            <polygon class="cls-1" points="803.75 162.26 864.35 162.26 864.35 177.4 803.75 177.4 803.75 162.26 803.75 162.26"></polygon><text class="cls-25" transform="translate(797.63 193.82)">
                                                <tspan class="cls-32">B</tspan>
                                                <tspan class="cls-31" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-33" x="9.84" y="0">6</tspan>
                                                <tspan x="15.14" y="0">5</tspan>
                                            </text>
                                            <polygon class="cls-1" points="796.12 182.48 856.72 182.48 856.72 197.61 796.12 197.61 796.12 182.48 796.12 182.48"></polygon><text class="cls-25" transform="translate(789.56 216.61)">
                                                <tspan class="cls-32">B</tspan>
                                                <tspan class="cls-31" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-33" x="9.84" y="0">6</tspan>
                                                <tspan x="15.14" y="0">6</tspan>
                                            </text>
                                            <polygon class="cls-1" points="788.05 205.26 848.65 205.26 848.65 220.39 788.05 220.39 788.05 205.26 788.05 205.26"></polygon><text class="cls-25" transform="translate(782.33 237.09)">
                                                <tspan class="cls-32">B</tspan>
                                                <tspan class="cls-31" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-33" x="9.84" y="0">6</tspan>
                                                <tspan x="15.14" y="0">7</tspan>
                                            </text>
                                            <polygon class="cls-1" points="780.82 225.75 841.42 225.75 841.42 240.88 780.82 240.88 780.82 225.75 780.82 225.75"></polygon><text class="cls-25" transform="translate(773.55 261.18)">
                                                <tspan class="cls-32">B</tspan>
                                                <tspan class="cls-31" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-33" x="9.84" y="0">6</tspan>
                                                <tspan x="15.14" y="0">8</tspan>
                                            </text>
                                            <polygon class="cls-1" points="772.04 249.83 832.64 249.83 832.64 264.97 772.04 264.97 772.04 249.83 772.04 249.83"></polygon><text class="cls-25" transform="translate(767.33 280.28)">
                                                <tspan class="cls-32">B</tspan>
                                                <tspan class="cls-31" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-33" x="9.84" y="0">6</tspan>
                                                <tspan x="15.14" y="0">9</tspan>
                                            </text>
                                            <polygon class="cls-1" points="765.82 268.93 826.42 268.93 826.42 284.07 765.82 284.07 765.82 268.93 765.82 268.93"></polygon><text class="cls-25" transform="translate(757.33 304.46)">
                                                <tspan class="cls-32">B</tspan>
                                                <tspan class="cls-31" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-33" x="9.84" y="0">7</tspan>
                                                <tspan x="15.14" y="0">0</tspan>
                                            </text>
                                            <polygon class="cls-1" points="755.82 293.12 816.42 293.12 816.42 308.25 755.82 308.25 755.82 293.12 755.82 293.12"></polygon><text class="cls-25" transform="translate(749.58 327.34)">
                                                <tspan class="cls-32">B</tspan>
                                                <tspan class="cls-31" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-33" x="9.84" y="0">7</tspan>
                                                <tspan x="15.14" y="0">1</tspan>
                                            </text>
                                            <polygon class="cls-1" points="748.07 315.99 808.67 315.99 808.67 331.13 748.07 331.13 748.07 315.99 748.07 315.99"></polygon><text class="cls-25" transform="translate(741.89 347.64)">
                                                <tspan class="cls-32">B</tspan>
                                                <tspan class="cls-31" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-33" x="9.84" y="0">7</tspan>
                                                <tspan x="15.14" y="0">2</tspan>
                                            </text>
                                            <polygon class="cls-1" points="740.38 336.3 800.98 336.3 800.98 351.43 740.38 351.43 740.38 336.3 740.38 336.3">
                                            </polygon><text class="cls-25" transform="translate(734.87 368.48)">
                                                <tspan class="cls-32">B</tspan>
                                                <tspan class="cls-31" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-33" x="9.84" y="0">7</tspan>
                                                <tspan x="15.14" y="0">3</tspan>
                                            </text>
                                            <polygon class="cls-1" points="733.36 357.13 793.96 357.13 793.96 372.26 733.36 372.26 733.36 357.13 733.36 357.13"></polygon><text class="cls-25" transform="translate(700.32 582.85)">
                                                <tspan class="cls-32">B</tspan>
                                                <tspan class="cls-31" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-33" x="9.84" y="0">7</tspan>
                                                <tspan x="15.14" y="0">4</tspan>
                                            </text>
                                            <polygon class="cls-1" points="698.81 571.5 759.41 571.5 759.41 586.64 698.81 586.64 698.81 571.5 698.81 571.5">
                                            </polygon><text class="cls-25" transform="translate(700.32 605.65)">
                                                <tspan class="cls-32">B</tspan>
                                                <tspan class="cls-31" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-33" x="9.84" y="0">7</tspan>
                                                <tspan x="15.14" y="0">5</tspan>
                                            </text>
                                            <polygon class="cls-1" points="698.81 594.3 759.41 594.3 759.41 609.43 698.81 609.43 698.81 594.3 698.81 594.3">
                                            </polygon>
                                            <polygon class="cls-1" points="712.53 592.82 773.13 592.82 773.13 607.95 712.53 607.95 712.53 592.82 712.53 592.82"></polygon>
                                            <polygon class="cls-1" points="712.53 592.82 773.13 592.82 773.13 607.95 712.53 607.95 712.53 592.82 712.53 592.82"></polygon><text class="cls-25" transform="translate(700.14 628.57)">
                                                <tspan class="cls-32">B</tspan>
                                                <tspan class="cls-31" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-33" x="9.84" y="0">7</tspan>
                                                <tspan x="15.14" y="0">6</tspan>
                                            </text>
                                            <polygon class="cls-1" points="698.63 617.23 759.23 617.23 759.23 632.36 698.63 632.36 698.63 617.23 698.63 617.23"></polygon>
                                            <polygon class="cls-1" points="708.5 617.23 769.1 617.23 769.1 632.36 708.5 632.36 708.5 617.23 708.5 617.23">
                                            </polygon>
                                            <polygon class="cls-1" points="708.5 617.23 769.1 617.23 769.1 632.36 708.5 632.36 708.5 617.23 708.5 617.23">
                                            </polygon><text class="cls-25" transform="translate(699.85 650.74)">
                                                <tspan class="cls-32">B</tspan>
                                                <tspan class="cls-31" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-33" x="9.84" y="0">7</tspan>
                                                <tspan x="15.14" y="0">7</tspan>
                                            </text>
                                            <polygon class="cls-1" points="698.34 639.39 758.94 639.39 758.94 654.52 698.34 654.52 698.34 639.39 698.34 639.39"></polygon><text class="cls-25" transform="translate(699.85 672.76)">
                                                <tspan class="cls-32">B</tspan>
                                                <tspan class="cls-31" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-33" x="9.84" y="0">7</tspan>
                                                <tspan x="15.14" y="0">8</tspan>
                                            </text>
                                            <polygon class="cls-1" points="698.34 661.42 758.94 661.42 758.94 676.55 698.34 676.55 698.34 661.42 698.34 661.42"></polygon><text class="cls-25" transform="translate(700.32 695.17)">
                                                <tspan class="cls-32">B</tspan>
                                                <tspan class="cls-31" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-33" x="9.84" y="0">7</tspan>
                                                <tspan x="15.14" y="0">9</tspan>
                                            </text>
                                            <polygon class="cls-1" points="698.81 683.82 759.41 683.82 759.41 698.95 698.81 698.95 698.81 683.82 698.81 683.82"></polygon><text class="cls-25" transform="translate(700.14 718.38)">
                                                <tspan class="cls-32">B</tspan>
                                                <tspan class="cls-31" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-33" x="9.84" y="0">8</tspan>
                                                <tspan x="15.14" y="0">0</tspan>
                                            </text>
                                            <polygon class="cls-1" points="698.63 707.03 759.23 707.03 759.23 722.16 698.63 722.16 698.63 707.03 698.63 707.03"></polygon><text class="cls-25" transform="translate(700.14 740.78)">
                                                <tspan class="cls-32">B</tspan>
                                                <tspan class="cls-31" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-33" x="9.84" y="0">8</tspan>
                                                <tspan x="15.14" y="0">1</tspan>
                                            </text>
                                            <polygon class="cls-1" points="698.63 729.43 759.23 729.43 759.23 744.57 698.63 744.57 698.63 729.43 698.63 729.43"></polygon>
                                            <polygon class="cls-1" points="706.49 727.59 767.09 727.59 767.09 742.72 706.49 742.72 706.49 727.59 706.49 727.59"></polygon>
                                            <polygon class="cls-1" points="706.49 727.59 767.09 727.59 767.09 742.72 706.49 742.72 706.49 727.59 706.49 727.59"></polygon><text class="cls-25" transform="translate(700.37 762.38)">
                                                <tspan class="cls-32">B</tspan>
                                                <tspan class="cls-31" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-33" x="9.84" y="0">8</tspan>
                                                <tspan x="15.14" y="0">2</tspan>
                                            </text>
                                            <polygon class="cls-1" points="698.87 751.03 759.47 751.03 759.47 766.16 698.87 766.16 698.87 751.03 698.87 751.03"></polygon>
                                            <polygon class="cls-1" points="710.86 751.41 771.46 751.41 771.46 766.54 710.86 766.54 710.86 751.41 710.86 751.41"></polygon>
                                            <polygon class="cls-1" points="710.86 751.41 771.46 751.41 771.46 766.54 710.86 766.54 710.86 751.41 710.86 751.41"></polygon><text class="cls-25" transform="translate(700.37 784.35)">
                                                <tspan class="cls-32">B</tspan>
                                                <tspan class="cls-31" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-33" x="9.84" y="0">8</tspan>
                                                <tspan x="15.14" y="0">3</tspan>
                                            </text>
                                            <polygon class="cls-1" points="698.87 773 759.47 773 759.47 788.13 698.87 788.13 698.87 773 698.87 773">
                                            </polygon>
                                            <polygon class="cls-1" points="717.19 774.43 777.79 774.43 777.79 789.56 717.19 789.56 717.19 774.43 717.19 774.43"></polygon>
                                            <polygon class="cls-1" points="717.19 774.43 777.79 774.43 777.79 789.56 717.19 789.56 717.19 774.43 717.19 774.43"></polygon><text class="cls-25" transform="translate(604.21 784.35)">
                                                <tspan class="cls-26">B</tspan>
                                                <tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">8</tspan>
                                                <tspan x="15.14" y="0">4</tspan>
                                            </text>
                                            <polygon class="cls-1" points="602.7 773 663.3 773 663.3 788.13 602.7 788.13 602.7 773 602.7 773"></polygon>
                                            <polygon class="cls-1" points="616.69 773 677.28 773 677.28 788.13 616.69 788.13 616.69 773 616.69 773">
                                            </polygon>
                                            <polygon class="cls-1" points="616.69 773 677.28 773 677.28 788.13 616.69 788.13 616.69 773 616.69 773">
                                            </polygon><text class="cls-25" transform="translate(604.21 764.14)">
                                                <tspan class="cls-26">B</tspan>
                                                <tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">8</tspan>
                                                <tspan x="15.14" y="0">5</tspan>
                                            </text>
                                            <text class="cls-46" transform="translate(819.04 804.16)">Premium</text><text class="cls-46" transform="translate(818.81 838.51)">Plus</text><text class="cls-46" transform="translate(818.8 876.14)"><?= lang('Globals.standard') ?> </text>
                                            <polygon class="cls-1" points="602.7 752.8 663.3 752.8 663.3 767.93 602.7 767.93 602.7 752.8 602.7 752.8">
                                            </polygon>
                                            <polygon class="cls-1" points="616.69 752.8 677.28 752.8 677.28 767.93 616.69 767.93 616.69 752.8 616.69 752.8">
                                            </polygon>
                                            <polygon class="cls-1" points="616.69 752.8 677.28 752.8 677.28 767.93 616.69 767.93 616.69 752.8 616.69 752.8">
                                            </polygon><text class="cls-25" transform="translate(604.21 739.89)">
                                                <tspan class="cls-26">B</tspan>
                                                <tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">8</tspan>
                                                <tspan x="15.14" y="0">6</tspan>
                                            </text>
                                            <polygon class="cls-1" points="602.7 728.54 663.3 728.54 663.3 743.68 602.7 743.68 602.7 728.54 602.7 728.54">
                                            </polygon>
                                            <polygon class="cls-1" points="610.66 729.43 671.26 729.43 671.26 744.57 610.66 744.57 610.66 729.43 610.66 729.43"></polygon>
                                            <polygon class="cls-1" points="610.66 729.43 671.26 729.43 671.26 744.57 610.66 744.57 610.66 729.43 610.66 729.43"></polygon><text class="cls-25" transform="translate(604.21 717.57)">
                                                <tspan class="cls-26">B</tspan>
                                                <tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">8</tspan>
                                                <tspan x="15.14" y="0">7</tspan>
                                            </text>
                                            <polygon class="cls-1" points="602.7 706.22 663.3 706.22 663.3 721.36 602.7 721.36 602.7 706.22 602.7 706.22">
                                            </polygon>
                                            <polygon class="cls-1" points="615.31 707.41 675.91 707.41 675.91 722.54 615.31 722.54 615.31 707.41 615.31 707.41"></polygon>
                                            <polygon class="cls-1" points="615.31 707.41 675.91 707.41 675.91 722.54 615.31 722.54 615.31 707.41 615.31 707.41"></polygon><text class="cls-25" transform="translate(604.21 697.11)">
                                                <tspan class="cls-26">B</tspan>
                                                <tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">8</tspan>
                                                <tspan x="15.14" y="0">8</tspan>
                                            </text>
                                            <polygon class="cls-1" points="602.7 685.76 663.3 685.76 663.3 700.9 602.7 700.9 602.7 685.76 602.7 685.76">
                                            </polygon><text class="cls-25" transform="translate(604.21 673.19)">
                                                <tspan class="cls-26">B</tspan>
                                                <tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">8</tspan>
                                                <tspan x="15.14" y="0">9</tspan>
                                            </text>
                                            <polygon class="cls-1" points="602.7 661.85 663.3 661.85 663.3 676.98 602.7 676.98 602.7 661.85 602.7 661.85">
                                            </polygon><text class="cls-25" transform="translate(604.21 649.49)">
                                                <tspan class="cls-26">B</tspan>
                                                <tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">9</tspan>
                                                <tspan x="15.14" y="0">0</tspan>
                                            </text>
                                            <polygon class="cls-1" points="602.7 638.14 663.3 638.14 663.3 653.28 602.7 653.28 602.7 638.14 602.7 638.14">
                                            </polygon>
                                            <polygon class="cls-1" points="618.09 637.34 678.69 637.34 678.69 652.47 618.09 652.47 618.09 637.34 618.09 637.34"></polygon>
                                            <polygon class="cls-1" points="618.09 637.34 678.69 637.34 678.69 652.47 618.09 652.47 618.09 637.34 618.09 637.34"></polygon><text class="cls-25" transform="translate(604.21 627.96)">
                                                <tspan class="cls-26">B</tspan>
                                                <tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">9</tspan>
                                                <tspan x="15.14" y="0">1</tspan>
                                            </text>
                                            <polygon class="cls-1" points="602.7 616.61 663.3 616.61 663.3 631.74 602.7 631.74 602.7 616.61 602.7 616.61">
                                            </polygon>
                                            <polygon class="cls-1" points="615.6 616.99 676.2 616.99 676.2 632.12 615.6 632.12 615.6 616.99 615.6 616.99">
                                            </polygon>
                                            <polygon class="cls-1" points="615.6 616.99 676.2 616.99 676.2 632.12 615.6 632.12 615.6 616.99 615.6 616.99">
                                            </polygon><text class="cls-25" transform="translate(604.21 605.75)">
                                                <tspan class="cls-26">B</tspan>
                                                <tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">9</tspan>
                                                <tspan x="15.14" y="0">2</tspan>
                                            </text>
                                            <polygon class="cls-1" points="602.7 594.4 663.3 594.4 663.3 609.53 602.7 609.53 602.7 594.4 602.7 594.4">
                                            </polygon><text class="cls-25" transform="translate(604.21 583.86)">
                                                <tspan class="cls-26">B</tspan>
                                                <tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">9</tspan>
                                                <tspan x="15.14" y="0">3</tspan>
                                            </text>
                                            <polygon class="cls-1" points="602.7 572.51 663.3 572.51 663.3 587.65 602.7 587.65 602.7 572.51 602.7 572.51">
                                            </polygon><text class="cls-25" transform="translate(603.81 561.59)">
                                                <tspan class="cls-26">B</tspan>
                                                <tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">9</tspan>
                                                <tspan x="15.14" y="0">4</tspan>
                                            </text>
                                            <polygon class="cls-1" points="602.3 550.24 662.9 550.24 662.9 565.37 602.3 565.37 602.3 550.24 602.3 550.24">
                                            </polygon><text class="cls-25" transform="translate(604.21 538.39)">
                                                <tspan class="cls-26">B</tspan>
                                                <tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">9</tspan>
                                                <tspan x="15.14" y="0">5</tspan>
                                            </text>
                                            <polygon class="cls-1" points="602.7 527.05 663.3 527.05 663.3 542.18 602.7 542.18 602.7 527.05 602.7 527.05">
                                            </polygon><text class="cls-25" transform="translate(603.81 515.89)">
                                                <tspan class="cls-26">B</tspan>
                                                <tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">9</tspan>
                                                <tspan x="15.14" y="0">6</tspan>
                                            </text>
                                            <polygon class="cls-1" points="602.3 504.55 662.9 504.55 662.9 519.68 602.3 519.68 602.3 504.55 602.3 504.55">
                                            </polygon><text class="cls-25" transform="translate(604.08 494.61)">
                                                <tspan class="cls-26">B</tspan>
                                                <tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">9</tspan>
                                                <tspan x="15.14" y="0">7</tspan>
                                            </text>
                                            <polygon class="cls-1" points="602.57 483.27 663.17 483.27 663.17 498.4 602.57 498.4 602.57 483.27 602.57 483.27"></polygon>
                                            <polygon class="cls-1" points="615.19 482.54 675.78 482.54 675.78 497.67 615.19 497.67 615.19 482.54 615.19 482.54"></polygon>
                                            <polygon class="cls-1" points="615.19 482.54 675.78 482.54 675.78 497.67 615.19 497.67 615.19 482.54 615.19 482.54"></polygon><text class="cls-25" transform="translate(536.77 783.76)">
                                                <tspan class="cls-26">B</tspan>
                                                <tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">9</tspan>
                                                <tspan x="15.14" y="0">8</tspan>
                                            </text>
                                            <polygon class="cls-1" points="535.26 772.41 595.86 772.41 595.86 787.54 535.26 787.54 535.26 772.41 535.26 772.41"></polygon>
                                            <polygon class="cls-1" points="544.3 774.86 604.9 774.86 604.9 789.99 544.3 789.99 544.3 774.86 544.3 774.86">
                                            </polygon>
                                            <polygon class="cls-1" points="544.3 774.86 604.9 774.86 604.9 789.99 544.3 789.99 544.3 774.86 544.3 774.86">
                                            </polygon><text class="cls-25" transform="translate(536.95 763.18)">
                                                <tspan class="cls-26">B</tspan>
                                                <tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">9</tspan>
                                                <tspan x="15.14" y="0">9</tspan>
                                            </text>
                                            <polygon class="cls-1" points="535.44 751.84 596.04 751.84 596.04 766.97 535.44 766.97 535.44 751.84 535.44 751.84"></polygon><text class="cls-29" transform="translate(536.95 740.15)">B<tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">10</tspan>
                                                <tspan class="cls-47" x="20.44" y="0">0</tspan>
                                            </text>
                                            <polygon class="cls-1" points="535.44 728.8 596.04 728.8 596.04 743.94 535.44 743.94 535.44 728.8 535.44 728.8">
                                            </polygon><text class="cls-29" transform="translate(536.77 719.13)">B<tspan class="cls-27" x="6.06" y="0">-
                                                </tspan>
                                                <tspan class="cls-28" x="9.84" y="0">10</tspan>
                                                <tspan class="cls-47" x="20.44" y="0">1</tspan>
                                            </text>
                                            <polygon class="cls-1" points="535.26 707.79 595.86 707.79 595.86 722.92 535.26 722.92 535.26 707.79 535.26 707.79"></polygon>
                                            <polygon class="cls-1" points="546.66 707.79 607.26 707.79 607.26 722.92 546.66 722.92 546.66 707.79 546.66 707.79"></polygon>
                                            <polygon class="cls-1" points="546.66 707.79 607.26 707.79 607.26 722.92 546.66 722.92 546.66 707.79 546.66 707.79"></polygon><text class="cls-29" transform="translate(536.95 696.35)">B<tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">10</tspan>
                                                <tspan class="cls-47" x="20.44" y="0">2</tspan>
                                            </text>
                                            <polygon class="cls-1" points="535.44 685 596.04 685 596.04 700.14 535.44 700.14 535.44 685 535.44 685">
                                            </polygon>
                                            <polygon class="cls-1" points="547.23 685 607.83 685 607.83 700.14 547.23 700.14 547.23 685 547.23 685">
                                            </polygon>
                                            <polygon class="cls-1" points="547.23 685 607.83 685 607.83 700.14 547.23 700.14 547.23 685 547.23 685">
                                            </polygon><text class="cls-29" transform="translate(536.95 673.19)">B<tspan class="cls-27" x="6.06" y="0">-
                                                </tspan>
                                                <tspan class="cls-28" x="9.84" y="0">10</tspan>
                                                <tspan class="cls-47" x="20.44" y="0">3</tspan>
                                            </text>
                                            <polygon class="cls-1" points="535.44 661.85 596.04 661.85 596.04 676.98 535.44 676.98 535.44 661.85 535.44 661.85"></polygon>
                                            <polygon class="cls-1" points="542.1 662.6 602.7 662.6 602.7 677.74 542.1 677.74 542.1 662.6 542.1 662.6">
                                            </polygon>
                                            <polygon class="cls-1" points="542.1 662.6 602.7 662.6 602.7 677.74 542.1 677.74 542.1 662.6 542.1 662.6">
                                            </polygon><text class="cls-29" transform="translate(536.77 651.17)">B<tspan class="cls-27" x="6.06" y="0">-
                                                </tspan>
                                                <tspan class="cls-28" x="9.84" y="0">10</tspan>
                                                <tspan class="cls-47" x="20.44" y="0">4</tspan>
                                            </text>
                                            <polygon class="cls-1" points="535.26 639.82 595.86 639.82 595.86 654.95 535.26 654.95 535.26 639.82 535.26 639.82"></polygon>
                                            <polygon class="cls-1" points="547.23 641.64 607.83 641.64 607.83 656.77 547.23 656.77 547.23 641.64 547.23 641.64"></polygon>
                                            <polygon class="cls-1" points="547.23 641.64 607.83 641.64 607.83 656.77 547.23 656.77 547.23 641.64 547.23 641.64"></polygon><text class="cls-29" transform="translate(536.95 628.62)">B<tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">10</tspan>
                                                <tspan class="cls-47" x="20.44" y="0">5</tspan>
                                            </text>
                                            <polygon class="cls-1" points="535.44 617.28 596.04 617.28 596.04 632.41 535.44 632.41 535.44 617.28 535.44 617.28"></polygon>
                                            <polygon class="cls-1" points="542.92 617.66 603.52 617.66 603.52 632.79 542.92 632.79 542.92 617.66 542.92 617.66"></polygon>
                                            <polygon class="cls-1" points="542.92 617.66 603.52 617.66 603.52 632.79 542.92 632.79 542.92 617.66 542.92 617.66"></polygon><text class="cls-29" transform="translate(536.95 605.98)">B<tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">10</tspan>
                                                <tspan class="cls-47" x="20.44" y="0">6</tspan>
                                            </text>
                                            <polygon class="cls-1" points="535.44 594.64 596.04 594.64 596.04 609.77 535.44 609.77 535.44 594.64 535.44 594.64"></polygon><text class="cls-29" transform="translate(536.77 583.86)">B<tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">10</tspan>
                                                <tspan class="cls-47" x="20.44" y="0">7</tspan>
                                            </text>
                                            <polygon class="cls-1" points="535.26 572.51 595.86 572.51 595.86 587.65 535.26 587.65 535.26 572.51 535.26 572.51"></polygon><text class="cls-29" transform="translate(536.77 561.59)">B<tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">10</tspan>
                                                <tspan class="cls-47" x="20.44" y="0">8</tspan>
                                            </text>
                                            <polygon class="cls-1" points="535.26 550.24 595.86 550.24 595.86 565.37 535.26 565.37 535.26 550.24 535.26 550.24"></polygon><text class="cls-29" transform="translate(536.95 539.8)">B<tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">10</tspan>
                                                <tspan class="cls-47" x="20.44" y="0">9</tspan>
                                            </text>
                                            <polygon class="cls-1" points="535.44 528.45 596.04 528.45 596.04 543.58 535.44 543.58 535.44 528.45 535.44 528.45"></polygon><text class="cls-29" transform="translate(536.77 516.75)">B<tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">11</tspan>
                                                <tspan class="cls-47" x="20.44" y="0">0</tspan>
                                            </text>
                                            <polygon class="cls-1" points="535.26 505.4 595.86 505.4 595.86 520.53 535.26 520.53 535.26 505.4 535.26 505.4">
                                            </polygon><text class="cls-29" transform="translate(536.95 493.59)">B<tspan class="cls-27" x="6.06" y="0">-
                                                </tspan>
                                                <tspan class="cls-28" x="9.84" y="0">11</tspan>
                                                <tspan class="cls-47" x="20.44" y="0">1</tspan>
                                            </text>
                                            <polygon class="cls-1" points="535.44 482.24 596.04 482.24 596.04 497.37 535.44 497.37 535.44 482.24 535.44 482.24"></polygon>
                                            <polygon class="cls-1" points="551.63 481.69 612.23 481.69 612.23 496.82 551.63 496.82 551.63 481.69 551.63 481.69"></polygon>
                                            <polygon class="cls-1" points="551.63 481.69 612.23 481.69 612.23 496.82 551.63 496.82 551.63 481.69 551.63 481.69"></polygon><text class="cls-29" transform="translate(441.44 782.66)">B<tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">11</tspan>
                                                <tspan class="cls-47" x="20.44" y="0">2</tspan>
                                            </text>
                                            <polygon class="cls-1" points="439.93 771.31 500.53 771.31 500.53 786.45 439.93 786.45 439.93 771.31 439.93 771.31"></polygon><text class="cls-29" transform="translate(440.97 761.91)">B<tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">11</tspan>
                                                <tspan class="cls-47" x="20.44" y="0">3</tspan>
                                            </text>
                                            <polygon class="cls-1" points="439.46 750.57 500.06 750.57 500.06 765.7 439.46 765.7 439.46 750.57 439.46 750.57"></polygon><text class="cls-29" transform="translate(441.44 739.51)">B<tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">11</tspan>
                                                <tspan class="cls-47" x="20.44" y="0">4</tspan>
                                            </text>
                                            <polygon class="cls-1" points="439.93 728.16 500.53 728.16 500.53 743.3 439.93 743.3 439.93 728.16 439.93 728.16"></polygon>
                                            <polygon class="cls-1" points="453.05 728.8 513.65 728.8 513.65 743.94 453.05 743.94 453.05 728.8 453.05 728.8">
                                            </polygon>
                                            <polygon class="cls-1" points="453.05 728.8 513.65 728.8 513.65 743.94 453.05 743.94 453.05 728.8 453.05 728.8">
                                            </polygon><text class="cls-29" transform="translate(441.44 716.51)">B<tspan class="cls-27" x="6.06" y="0">-
                                                </tspan>
                                                <tspan class="cls-28" x="9.84" y="0">11</tspan>
                                                <tspan class="cls-47" x="20.44" y="0">5</tspan>
                                            </text>
                                            <polygon class="cls-1" points="439.93 705.17 500.53 705.17 500.53 720.3 439.93 720.3 439.93 705.17 439.93 705.17"></polygon>
                                            <polygon class="cls-1" points="449.24 706.24 509.84 706.24 509.84 721.37 449.24 721.37 449.24 706.24 449.24 706.24"></polygon>
                                            <polygon class="cls-1" points="449.24 706.24 509.84 706.24 509.84 721.37 449.24 721.37 449.24 706.24 449.24 706.24"></polygon><text class="cls-29" transform="translate(441.44 695.08)">B<tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">11</tspan>
                                                <tspan class="cls-47" x="20.44" y="0">6</tspan>
                                            </text>
                                            <polygon class="cls-1" points="439.93 683.74 500.53 683.74 500.53 698.87 439.93 698.87 439.93 683.74 439.93 683.74"></polygon>
                                            <polygon class="cls-1" points="449.89 685 510.49 685 510.49 700.14 449.89 700.14 449.89 685 449.89 685">
                                            </polygon>
                                            <polygon class="cls-1" points="449.89 685 510.49 685 510.49 700.14 449.89 700.14 449.89 685 449.89 685">
                                            </polygon><text class="cls-29" transform="translate(440.9 672.68)">B<tspan class="cls-27" x="6.06" y="0">-
                                                </tspan>
                                                <tspan class="cls-28" x="9.84" y="0">11</tspan>
                                                <tspan class="cls-47" x="20.44" y="0">7</tspan>
                                            </text>
                                            <polygon class="cls-1" points="439.39 661.33 499.99 661.33 499.99 676.47 439.39 676.47 439.39 661.33 439.39 661.33"></polygon>
                                            <polygon class="cls-1" points="450.6 659.49 511.2 659.49 511.2 674.62 450.6 674.62 450.6 659.49 450.6 659.49">
                                            </polygon>
                                            <polygon class="cls-1" points="450.6 659.49 511.2 659.49 511.2 674.62 450.6 674.62 450.6 659.49 450.6 659.49">
                                            </polygon><text class="cls-29" transform="translate(440.9 651.17)">B<tspan class="cls-27" x="6.06" y="0">-
                                                </tspan>
                                                <tspan class="cls-28" x="9.84" y="0">11</tspan>
                                                <tspan class="cls-47" x="20.44" y="0">8</tspan>
                                            </text>
                                            <polygon class="cls-1" points="439.39 639.82 499.99 639.82 499.99 654.95 439.39 654.95 439.39 639.82 439.39 639.82"></polygon>
                                            <polygon class="cls-1" points="449.62 639.82 510.22 639.82 510.22 654.95 449.62 654.95 449.62 639.82 449.62 639.82"></polygon>
                                            <polygon class="cls-1" points="449.62 639.82 510.22 639.82 510.22 654.95 449.62 654.95 449.62 639.82 449.62 639.82"></polygon><text class="cls-29" transform="translate(440.9 627.78)">B<tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">11</tspan>
                                                <tspan class="cls-47" x="20.44" y="0">9</tspan>
                                            </text>
                                            <polygon class="cls-1" points="439.39 616.43 499.99 616.43 499.99 631.57 439.39 631.57 439.39 616.43 439.39 616.43"></polygon>
                                            <polygon class="cls-1" points="449.25 617.66 509.85 617.66 509.85 632.79 449.25 632.79 449.25 617.66 449.25 617.66"></polygon>
                                            <polygon class="cls-1" points="449.25 617.66 509.85 617.66 509.85 632.79 449.25 632.79 449.25 617.66 449.25 617.66"></polygon><text class="cls-29" transform="translate(440.9 605)">B<tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">12</tspan>
                                                <tspan class="cls-47" x="20.44" y="0">0</tspan>
                                            </text>
                                            <polygon class="cls-1" points="439.39 593.65 499.99 593.65 499.99 608.78 439.39 608.78 439.39 593.65 439.39 593.65"></polygon>
                                            <polygon class="cls-1" points="451.94 594.32 512.54 594.32 512.54 609.45 451.94 609.45 451.94 594.32 451.94 594.32"></polygon>
                                            <polygon class="cls-1" points="451.94 594.32 512.54 594.32 512.54 609.45 451.94 609.45 451.94 594.32 451.94 594.32"></polygon><text class="cls-29" transform="translate(441.22 583.59)">B<tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">12</tspan>
                                                <tspan class="cls-47" x="20.44" y="0">1</tspan>
                                            </text>
                                            <polygon class="cls-1" points="439.71 572.25 500.31 572.25 500.31 587.38 439.71 587.38 439.71 572.25 439.71 572.25"></polygon>
                                            <polygon class="cls-1" points="453.73 572.07 514.33 572.07 514.33 587.21 453.73 587.21 453.73 572.07 453.73 572.07"></polygon>
                                            <polygon class="cls-1" points="453.73 572.07 514.33 572.07 514.33 587.21 453.73 587.21 453.73 572.07 453.73 572.07"></polygon><text class="cls-29" transform="translate(373.68 782.66)">B<tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">12</tspan>
                                                <tspan class="cls-47" x="20.44" y="0">2</tspan>
                                            </text>
                                            <polygon class="cls-1" points="372.17 771.31 432.77 771.31 432.77 786.45 372.17 786.45 372.17 771.31 372.17 771.31"></polygon><text class="cls-29" transform="translate(373.68 761.91)">B<tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">12</tspan>
                                                <tspan class="cls-47" x="20.44" y="0">3</tspan>
                                            </text>
                                            <polygon class="cls-1" points="372.17 750.57 432.77 750.57 432.77 765.7 372.17 765.7 372.17 750.57 372.17 750.57"></polygon><text class="cls-29" transform="translate(373.68 739.32)">B<tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">12</tspan>
                                                <tspan class="cls-47" x="20.44" y="0">4</tspan>
                                            </text>
                                            <polygon class="cls-1" points="372.17 727.97 432.77 727.97 432.77 743.1 372.17 743.1 372.17 727.97 372.17 727.97"></polygon>
                                            <polygon class="cls-1" points="385.37 727.97 445.97 727.97 445.97 743.1 385.37 743.1 385.37 727.97 385.37 727.97"></polygon>
                                            <polygon class="cls-1" points="385.37 727.97 445.97 727.97 445.97 743.1 385.37 743.1 385.37 727.97 385.37 727.97"></polygon><text class="cls-29" transform="translate(373.68 717.96)">B<tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">12</tspan>
                                                <tspan class="cls-47" x="20.44" y="0">5</tspan>
                                            </text>
                                            <polygon class="cls-1" points="372.17 706.61 432.77 706.61 432.77 721.75 372.17 721.75 372.17 706.61 372.17 706.61"></polygon><text class="cls-29" transform="translate(373.68 695.08)">B<tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">12</tspan>
                                                <tspan class="cls-47" x="20.44" y="0">6</tspan>
                                            </text>
                                            <polygon class="cls-1" points="372.17 683.74 432.77 683.74 432.77 698.87 372.17 698.87 372.17 683.74 372.17 683.74"></polygon><text class="cls-29" transform="translate(373.68 672.68)">B<tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">12</tspan>
                                                <tspan class="cls-47" x="20.44" y="0">7</tspan>
                                            </text>
                                            <polygon class="cls-1" points="372.17 661.33 432.77 661.33 432.77 676.47 372.17 676.47 372.17 661.33 372.17 661.33"></polygon><text class="cls-29" transform="translate(373.68 651.17)">B<tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">12</tspan>
                                                <tspan class="cls-47" x="20.44" y="0">8</tspan>
                                            </text>
                                            <polygon class="cls-1" points="372.17 639.82 432.77 639.82 432.77 654.95 372.17 654.95 372.17 639.82 372.17 639.82"></polygon>
                                            <polygon class="cls-1" points="382 639.82 442.6 639.82 442.6 654.95 382 654.95 382 639.82 382 639.82"></polygon>
                                            <polygon class="cls-1" points="382 639.82 442.6 639.82 442.6 654.95 382 654.95 382 639.82 382 639.82"></polygon>
                                            <text class="cls-29" transform="translate(373.68 627.83)">B<tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">12</tspan>
                                                <tspan class="cls-47" x="20.44" y="0">9</tspan>
                                            </text>
                                            <polygon class="cls-1" points="372.17 616.48 432.77 616.48 432.77 631.62 372.17 631.62 372.17 616.48 372.17 616.48"></polygon>
                                            <polygon class="cls-1" points="382.38 618.89 442.98 618.89 442.98 634.02 382.38 634.02 382.38 618.89 382.38 618.89"></polygon>
                                            <polygon class="cls-1" points="382.38 618.89 442.98 618.89 442.98 634.02 382.38 634.02 382.38 618.89 382.38 618.89"></polygon><text class="cls-29" transform="translate(373.86 605.66)">B<tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">13</tspan>
                                                <tspan class="cls-47" x="20.44" y="0">0</tspan>
                                            </text>
                                            <polygon class="cls-1" points="372.35 594.32 432.95 594.32 432.95 609.45 372.35 609.45 372.35 594.32 372.35 594.32"></polygon><text class="cls-29" transform="translate(277.44 783.36)">B<tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">13</tspan>
                                                <tspan class="cls-47" x="20.44" y="0">1</tspan>
                                            </text>
                                            <polygon class="cls-1" points="275.93 772.01 336.53 772.01 336.53 787.14 275.93 787.14 275.93 772.01 275.93 772.01"></polygon><text class="cls-29" transform="translate(277.44 762.52)">B<tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">13</tspan>
                                                <tspan class="cls-47" x="20.44" y="0">2</tspan>
                                            </text>
                                            <polygon class="cls-1" points="275.93 751.17 336.53 751.17 336.53 766.3 275.93 766.3 275.93 751.17 275.93 751.17"></polygon>
                                            <polygon class="cls-1" points="290.44 752.21 351.04 752.21 351.04 767.35 290.44 767.35 290.44 752.21 290.44 752.21"></polygon>
                                            <polygon class="cls-1" points="290.44 752.21 351.04 752.21 351.04 767.35 290.44 767.35 290.44 752.21 290.44 752.21"></polygon><text class="cls-29" transform="translate(277.44 739.83)">B<tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">13</tspan>
                                                <tspan class="cls-47" x="20.44" y="0">3</tspan>
                                            </text>
                                            <polygon class="cls-1" points="275.93 728.49 336.53 728.49 336.53 743.62 275.93 743.62 275.93 728.49 275.93 728.49"></polygon><text class="cls-29" transform="translate(277.44 717.21)">B<tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">13</tspan>
                                                <tspan class="cls-47" x="20.44" y="0">4</tspan>
                                            </text>
                                            <polygon class="cls-1" points="275.93 705.86 336.53 705.86 336.53 720.99 275.93 720.99 275.93 705.86 275.93 705.86"></polygon>
                                            <polygon class="cls-1" points="283.39 707.41 343.99 707.41 343.99 722.54 283.39 722.54 283.39 707.41 283.39 707.41"></polygon>
                                            <polygon class="cls-1" points="283.39 707.41 343.99 707.41 343.99 722.54 283.39 722.54 283.39 707.41 283.39 707.41"></polygon><text class="cls-29" transform="translate(277.44 693.84)">B<tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">13</tspan>
                                                <tspan class="cls-47" x="20.44" y="0">5</tspan>
                                            </text>
                                            <polygon class="cls-1" points="275.93 682.49 336.53 682.49 336.53 697.63 275.93 697.63 275.93 682.49 275.93 682.49"></polygon><text class="cls-29" transform="translate(277.44 672.4)">B<tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">13</tspan>
                                                <tspan class="cls-47" x="20.44" y="0">6</tspan>
                                            </text>
                                            <polygon class="cls-1" points="275.93 661.05 336.53 661.05 336.53 676.18 275.93 676.18 275.93 661.05 275.93 661.05"></polygon>
                                            <polygon class="cls-1" points="293.64 659.86 354.24 659.86 354.24 675 293.64 675 293.64 659.86 293.64 659.86">
                                            </polygon>
                                            <polygon class="cls-1" points="293.64 659.86 354.24 659.86 354.24 675 293.64 675 293.64 659.86 293.64 659.86">
                                            </polygon><text class="cls-29" transform="translate(277.44 649.87)">B<tspan class="cls-27" x="6.06" y="0">-
                                                </tspan>
                                                <tspan class="cls-28" x="9.84" y="0">13</tspan>
                                                <tspan class="cls-47" x="20.44" y="0">7</tspan>
                                            </text>
                                            <polygon class="cls-1" points="275.93 638.52 336.53 638.52 336.53 653.65 275.93 653.65 275.93 638.52 275.93 638.52"></polygon><text class="cls-29" transform="translate(277.44 627.83)">B<tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">13</tspan>
                                                <tspan class="cls-47" x="20.44" y="0">8</tspan>
                                            </text>
                                            <polygon class="cls-1" points="275.93 616.48 336.53 616.48 336.53 631.62 275.93 631.62 275.93 616.48 275.93 616.48"></polygon>
                                            <polygon class="cls-1" points="287.02 615.94 347.62 615.94 347.62 631.07 287.02 631.07 287.02 615.94 287.02 615.94"></polygon>
                                            <polygon class="cls-1" points="287.02 615.94 347.62 615.94 347.62 631.07 287.02 631.07 287.02 615.94 287.02 615.94"></polygon><text class="cls-29" transform="translate(277.44 606.04)">B<tspan class="cls-27" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-28" x="9.84" y="0">13</tspan>
                                                <tspan class="cls-47" x="20.44" y="0">9</tspan>
                                            </text>
                                            <polygon class="cls-1" points="275.93 594.69 336.53 594.69 336.53 609.83 275.93 609.83 275.93 594.69 275.93 594.69"></polygon>
                                            <polygon class="cls-1" points="287.63 594.69 348.23 594.69 348.23 609.83 287.63 609.83 287.63 594.69 287.63 594.69"></polygon>
                                            <polygon class="cls-1" points="287.63 594.69 348.23 594.69 348.23 609.83 287.63 609.83 287.63 594.69 287.63 594.69"></polygon><text class="cls-25" transform="translate(740.31 870.87) rotate(-90)">
                                                <tspan class="cls-32">B</tspan>
                                                <tspan class="cls-31" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-33" x="9.84" y="0">14</tspan>
                                                <tspan x="20.44" y="0">0</tspan>
                                            </text>
                                            <polygon class="cls-1" points="728.97 872.38 728.97 811.77 744.1 811.77 744.1 872.38 728.97 872.38 728.97 872.38"></polygon><text class="cls-25" transform="translate(718.31 870.87) rotate(-90)">
                                                <tspan class="cls-32">B</tspan>
                                                <tspan class="cls-31" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-33" x="9.84" y="0">14</tspan>
                                                <tspan x="20.44" y="0">1</tspan>
                                            </text>
                                            <polygon class="cls-1" points="706.96 872.38 706.96 811.77 722.1 811.77 722.1 872.38 706.96 872.38 706.96 872.38"></polygon>
                                            <polygon class="cls-1" points="706.96 862.95 706.96 802.35 722.1 802.35 722.1 862.95 706.96 862.95 706.96 862.95"></polygon>
                                            <polygon class="cls-1" points="706.96 862.95 706.96 802.35 722.1 802.35 722.1 862.95 706.96 862.95 706.96 862.95"></polygon><text class="cls-25" transform="translate(695.59 870.01) rotate(-90)">
                                                <tspan class="cls-32">B</tspan>
                                                <tspan class="cls-31" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-33" x="9.84" y="0">14</tspan>
                                                <tspan x="20.44" y="0">2</tspan>
                                            </text>
                                            <polygon class="cls-1" points="684.24 871.51 684.24 810.91 699.38 810.91 699.38 871.51 684.24 871.51 684.24 871.51"></polygon>
                                            <polygon class="cls-1" points="681.47 865.75 681.47 805.16 696.61 805.16 696.61 865.75 681.47 865.75 681.47 865.75"></polygon>
                                            <polygon class="cls-1" points="681.47 865.75 681.47 805.16 696.61 805.16 696.61 865.75 681.47 865.75 681.47 865.75"></polygon><text class="cls-25" transform="translate(673.03 870.87) rotate(-90)">
                                                <tspan class="cls-32">B</tspan>
                                                <tspan class="cls-31" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-33" x="9.84" y="0">14</tspan>
                                                <tspan x="20.44" y="0">3</tspan>
                                            </text>
                                            <polygon class="cls-1" points="661.68 872.38 661.68 811.77 676.82 811.77 676.82 872.38 661.68 872.38 661.68 872.38"></polygon>
                                            <polygon class="cls-1" points="657.8 865.92 657.8 805.32 672.93 805.32 672.93 865.92 657.8 865.92 657.8 865.92">
                                            </polygon>
                                            <polygon class="cls-1" points="657.8 865.92 657.8 805.32 672.93 805.32 672.93 865.92 657.8 865.92 657.8 865.92">
                                            </polygon><text class="cls-25" transform="translate(649.1 869.96) rotate(-90)">
                                                <tspan class="cls-32">B</tspan>
                                                <tspan class="cls-31" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-33" x="9.84" y="0">14</tspan>
                                                <tspan x="20.44" y="0">4</tspan>
                                            </text>
                                            <polygon class="cls-1" points="637.76 871.47 637.76 810.87 652.89 810.87 652.89 871.47 637.76 871.47 637.76 871.47"></polygon>
                                            <polygon class="cls-1" points="638.41 868.57 638.41 807.97 653.55 807.97 653.55 868.57 638.41 868.57 638.41 868.57"></polygon>
                                            <polygon class="cls-1" points="638.41 868.57 638.41 807.97 653.55 807.97 653.55 868.57 638.41 868.57 638.41 868.57"></polygon><text class="cls-25" transform="translate(626.69 870.44) rotate(-90)">
                                                <tspan class="cls-32">B</tspan>
                                                <tspan class="cls-31" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-33" x="9.84" y="0">14</tspan>
                                                <tspan x="20.44" y="0">5</tspan>
                                            </text>
                                            <polygon class="cls-1" points="615.34 871.95 615.34 811.35 630.47 811.35 630.47 871.95 615.34 871.95 615.34 871.95"></polygon>
                                            <polygon class="cls-1" points="615.34 871.09 615.34 810.49 630.47 810.49 630.47 871.09 615.34 871.09 615.34 871.09"></polygon>
                                            <polygon class="cls-1" points="615.34 871.09 615.34 810.49 630.47 810.49 630.47 871.09 615.34 871.09 615.34 871.09"></polygon><text class="cls-25" transform="translate(602.83 870.44) rotate(-90)">
                                                <tspan class="cls-32">B</tspan>
                                                <tspan class="cls-31" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-33" x="9.84" y="0">14</tspan>
                                                <tspan x="20.44" y="0">6</tspan>
                                            </text>
                                            <polygon class="cls-1" points="591.48 871.95 591.48 811.35 606.62 811.35 606.62 871.95 591.48 871.95 591.48 871.95"></polygon>
                                            <polygon class="cls-1" points="591.48 871.09 591.48 810.49 606.62 810.49 606.62 871.09 591.48 871.09 591.48 871.09"></polygon>
                                            <polygon class="cls-1" points="591.48 871.09 591.48 810.49 606.62 810.49 606.62 871.09 591.48 871.09 591.48 871.09"></polygon><text class="cls-25" transform="translate(581.9 870.44) rotate(-90)">
                                                <tspan class="cls-32">B</tspan>
                                                <tspan class="cls-31" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-33" x="9.84" y="0">14</tspan>
                                                <tspan x="20.44" y="0">7</tspan>
                                            </text>
                                            <polygon class="cls-1" points="570.55 871.95 570.55 811.35 585.68 811.35 585.68 871.95 570.55 871.95 570.55 871.95"></polygon>
                                            <polygon class="cls-1" points="570.55 871.09 570.55 810.49 585.68 810.49 585.68 871.09 570.55 871.09 570.55 871.09"></polygon>
                                            <polygon class="cls-1" points="570.55 871.09 570.55 810.49 585.68 810.49 585.68 871.09 570.55 871.09 570.55 871.09"></polygon><text class="cls-25" transform="translate(559.62 870.87) rotate(-90)">
                                                <tspan class="cls-32">B</tspan>
                                                <tspan class="cls-31" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-33" x="9.84" y="0">14</tspan>
                                                <tspan x="20.44" y="0">8</tspan>
                                            </text>
                                            <polygon class="cls-1" points="548.27 872.38 548.27 811.77 563.4 811.77 563.4 872.38 548.27 872.38 548.27 872.38"></polygon>
                                            <polygon class="cls-1" points="549.02 865.92 549.02 805.32 564.15 805.32 564.15 865.92 549.02 865.92 549.02 865.92"></polygon>
                                            <polygon class="cls-1" points="549.02 865.92 549.02 805.32 564.15 805.32 564.15 865.92 549.02 865.92 549.02 865.92"></polygon><text class="cls-25" transform="translate(536.82 870.87) rotate(-90)">
                                                <tspan class="cls-32">B</tspan>
                                                <tspan class="cls-31" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-33" x="9.84" y="0">14</tspan>
                                                <tspan x="20.44" y="0">9</tspan>
                                            </text>
                                            <polygon class="cls-1" points="525.48 872.38 525.48 811.77 540.61 811.77 540.61 872.38 525.48 872.38 525.48 872.38"></polygon>
                                            <polygon class="cls-1" points="524.29 868.19 524.29 807.59 539.42 807.59 539.42 868.19 524.29 868.19 524.29 868.19"></polygon>
                                            <polygon class="cls-1" points="524.29 868.19 524.29 807.59 539.42 807.59 539.42 868.19 524.29 868.19 524.29 868.19"></polygon><text class="cls-25" transform="translate(514.62 870.44) rotate(-90)">
                                                <tspan class="cls-32">B</tspan>
                                                <tspan class="cls-31" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-33" x="9.84" y="0">15</tspan>
                                                <tspan x="20.44" y="0">0</tspan>
                                            </text>
                                            <polygon class="cls-1" points="503.27 871.95 503.27 811.35 518.4 811.35 518.4 871.95 503.27 871.95 503.27 871.95"></polygon>
                                            <polygon class="cls-1" points="502.17 859.98 502.17 799.38 517.3 799.38 517.3 859.98 502.17 859.98 502.17 859.98"></polygon>
                                            <polygon class="cls-1" points="502.17 859.98 502.17 799.38 517.3 799.38 517.3 859.98 502.17 859.98 502.17 859.98"></polygon><text class="cls-25" transform="translate(493.25 870.01) rotate(-90)">
                                                <tspan class="cls-32">B</tspan>
                                                <tspan class="cls-31" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-33" x="9.84" y="0">15</tspan>
                                                <tspan x="20.44" y="0">1</tspan>
                                            </text>
                                            <polygon class="cls-1" points="481.9 871.51 481.9 810.91 497.03 810.91 497.03 871.51 481.9 871.51 481.9 871.51">
                                            </polygon>
                                            <polygon class="cls-1" points="481.9 859.98 481.9 799.38 497.03 799.38 497.03 859.98 481.9 859.98 481.9 859.98">
                                            </polygon>
                                            <polygon class="cls-1" points="481.9 859.98 481.9 799.38 497.03 799.38 497.03 859.98 481.9 859.98 481.9 859.98">
                                            </polygon><text class="cls-25" transform="translate(469.83 870.44) rotate(-90)">
                                                <tspan class="cls-32">B</tspan>
                                                <tspan class="cls-31" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-33" x="9.84" y="0">15</tspan>
                                                <tspan x="20.44" y="0">2</tspan>
                                            </text>
                                            <polygon class="cls-1" points="458.48 871.95 458.48 811.35 473.61 811.35 473.61 871.95 458.48 871.95 458.48 871.95"></polygon>
                                            <polygon class="cls-1" points="458.86 862.78 458.86 802.18 473.99 802.18 473.99 862.78 458.86 862.78 458.86 862.78"></polygon>
                                            <polygon class="cls-1" points="458.86 862.78 458.86 802.18 473.99 802.18 473.99 862.78 458.86 862.78 458.86 862.78"></polygon><text class="cls-25" transform="translate(446.18 870.44) rotate(-90)">
                                                <tspan class="cls-32">B</tspan>
                                                <tspan class="cls-31" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-33" x="9.84" y="0">15</tspan>
                                                <tspan x="20.44" y="0">3</tspan>
                                            </text>
                                            <polygon class="cls-1" points="434.83 871.95 434.83 811.35 449.96 811.35 449.96 871.95 434.83 871.95 434.83 871.95"></polygon>
                                            <polygon class="cls-1" points="434.11 865.6 434.11 805 449.24 805 449.24 865.6 434.11 865.6 434.11 865.6">
                                            </polygon>
                                            <polygon class="cls-1" points="434.11 865.6 434.11 805 449.24 805 449.24 865.6 434.11 865.6 434.11 865.6">
                                            </polygon><text class="cls-25" transform="translate(424.72 870.44) rotate(-90)">
                                                <tspan class="cls-32">B</tspan>
                                                <tspan class="cls-31" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-33" x="9.84" y="0">15</tspan>
                                                <tspan x="20.44" y="0">4</tspan>
                                            </text>
                                            <polygon class="cls-1" points="413.37 871.95 413.37 811.35 428.5 811.35 428.5 871.95 413.37 871.95 413.37 871.95"></polygon>
                                            <polygon class="cls-1" points="412.08 862.78 412.08 802.18 427.22 802.18 427.22 862.78 412.08 862.78 412.08 862.78"></polygon>
                                            <polygon class="cls-1" points="412.08 862.78 412.08 802.18 427.22 802.18 427.22 862.78 412.08 862.78 412.08 862.78"></polygon><text class="cls-25" transform="translate(402.51 870.01) rotate(-90)">
                                                <tspan class="cls-32">B</tspan>
                                                <tspan class="cls-31" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-33" x="9.84" y="0">15</tspan>
                                                <tspan x="20.44" y="0">5</tspan>
                                            </text>
                                            <polygon class="cls-1" points="391.16 871.51 391.16 810.91 406.29 810.91 406.29 871.51 391.16 871.51 391.16 871.51"></polygon>
                                            <polygon class="cls-1" points="392.19 862.78 392.19 802.18 407.33 802.18 407.33 862.78 392.19 862.78 392.19 862.78"></polygon>
                                            <polygon class="cls-1" points="392.19 862.78 392.19 802.18 407.33 802.18 407.33 862.78 392.19 862.78 392.19 862.78"></polygon><text class="cls-25" transform="translate(378.42 870.86) rotate(-90)">
                                                <tspan class="cls-32">B</tspan>
                                                <tspan class="cls-31" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-33" x="9.84" y="0">15</tspan>
                                                <tspan x="20.44" y="0">6</tspan>
                                            </text>
                                            <polygon class="cls-1" points="367.07 872.38 367.07 811.77 382.2 811.77 382.2 872.38 367.07 872.38 367.07 872.38"></polygon>
                                            <polygon class="cls-1" points="366.9 865.22 366.9 804.62 382.03 804.62 382.03 865.22 366.9 865.22 366.9 865.22">
                                            </polygon>
                                            <polygon class="cls-1" points="366.9 865.22 366.9 804.62 382.03 804.62 382.03 865.22 366.9 865.22 366.9 865.22">
                                            </polygon><text class="cls-25" transform="translate(356.94 870.87) rotate(-90)">
                                                <tspan class="cls-32">B</tspan>
                                                <tspan class="cls-31" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-33" x="9.84" y="0">15</tspan>
                                                <tspan x="20.44" y="0">7</tspan>
                                            </text>
                                            <polygon class="cls-1" points="345.59 872.38 345.59 811.77 360.72 811.77 360.72 872.38 345.59 872.38 345.59 872.38"></polygon>
                                            <polygon class="cls-1" points="345.59 867.86 345.59 807.26 360.72 807.26 360.72 867.86 345.59 867.86 345.59 867.86"></polygon>
                                            <polygon class="cls-1" points="345.59 867.86 345.59 807.26 360.72 807.26 360.72 867.86 345.59 867.86 345.59 867.86"></polygon><text class="cls-25" transform="translate(335.01 870.44) rotate(-90)">
                                                <tspan class="cls-32">B</tspan>
                                                <tspan class="cls-31" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-33" x="9.84" y="0">15</tspan>
                                                <tspan x="20.44" y="0">8</tspan>
                                            </text>
                                            <polygon class="cls-1" points="323.66 871.95 323.66 811.35 338.8 811.35 338.8 871.95 323.66 871.95 323.66 871.95"></polygon>
                                            <polygon class="cls-1" points="325.18 868.48 325.18 807.88 340.31 807.88 340.31 868.48 325.18 868.48 325.18 868.48"></polygon>
                                            <polygon class="cls-1" points="325.18 868.48 325.18 807.88 340.31 807.88 340.31 868.48 325.18 868.48 325.18 868.48"></polygon><text class="cls-25" transform="translate(311.73 870.44) rotate(-90)">
                                                <tspan class="cls-32">B</tspan>
                                                <tspan class="cls-31" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-33" x="9.84" y="0">15</tspan>
                                                <tspan x="20.44" y="0">9</tspan>
                                            </text>
                                            <polygon class="cls-1" points="300.38 871.95 300.38 811.35 315.51 811.35 315.51 871.95 300.38 871.95 300.38 871.95"></polygon>
                                            <polygon class="cls-1" points="300.38 867.48 300.38 806.88 315.51 806.88 315.51 867.48 300.38 867.48 300.38 867.48"></polygon>
                                            <polygon class="cls-1" points="300.38 867.48 300.38 806.88 315.51 806.88 315.51 867.48 300.38 867.48 300.38 867.48"></polygon><text class="cls-25" transform="translate(290.02 870.87) rotate(-90)">
                                                <tspan class="cls-32">B</tspan>
                                                <tspan class="cls-31" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-33" x="9.84" y="0">16</tspan>
                                                <tspan x="20.44" y="0">0</tspan>
                                            </text>
                                            <polygon class="cls-1" points="278.67 872.38 278.67 811.77 293.8 811.77 293.8 872.38 278.67 872.38 278.67 872.38"></polygon>
                                            <polygon class="cls-1" points="276.12 865.92 276.12 805.32 291.26 805.32 291.26 865.92 276.12 865.92 276.12 865.92"></polygon>
                                            <polygon class="cls-1" points="276.12 865.92 276.12 805.32 291.26 805.32 291.26 865.92 276.12 865.92 276.12 865.92"></polygon><text class="cls-25" transform="translate(267.37 870.44) rotate(-90)">
                                                <tspan class="cls-32">B</tspan>
                                                <tspan class="cls-31" x="6.06" y="0">-</tspan>
                                                <tspan class="cls-33" x="9.84" y="0">16</tspan>
                                                <tspan x="20.44" y="0">1</tspan>
                                            </text>
                                            <polygon class="cls-1" points="256.02 871.95 256.02 811.35 271.16 811.35 271.16 871.95 256.02 871.95 256.02 871.95"></polygon>
                                            <polygon class="cls-1" points="257.94 865.92 257.94 805.32 273.08 805.32 273.08 865.92 257.94 865.92 257.94 865.92"></polygon>
                                            <polygon class="cls-1" points="257.94 865.92 257.94 805.32 273.08 805.32 273.08 865.92 257.94 865.92 257.94 865.92"></polygon>
                                            <rect class="cls-48" x="788.22" y="783.92" width="27.04" height="27.04"></rect>
                                            <rect class="cls-49" x="788.22" y="818.97" width="27.04" height="27.04"></rect>
                                            <rect class="cls-50" x="788.22" y="854.85" width="27.04" height="27.04"></rect>
                                        </g>
                                        <g id="area_selection_2"  data-id="stage_2">
                                            <rect class="st2 " x="724.76" y="822.15" width="23.26" height="65.94" title="299.46 m2" data-id="B-140"></rect>
                                            <rect class="st2 " x="702.83" y="822.15" width="21.93" height="65.94" title="299.41 m2" data-id="B-141"></rect>
                                            <rect class="st2 " x="679.57" y="822.15" width="23.26" height="65.94" title="299.36 m2" data-id="B-142"></rect>
                                            <rect class="st2 " x="657.08" y="822.15" width="22.5" height="65.94" title="299.31 m2" data-id="B-143"></rect>
                                            <rect class="st2 " x="634.58" y="822.15" width="22.5" height="65.94" title="299.27 m2" data-id="B-144"></rect>
                                            <rect class="st2 " x="612.08" y="822.15" width="22.5" height="65.94" title="299.22 m2" data-id="B-145"></rect>
                                            <rect class="st2 " x="589.58" y="822.15" width="22.5" height="65.94" title="299.17 m2" data-id="B-146"></rect>
                                            <rect class="st2 " x="567.08" y="822.15" width="22.5" height="65.94" title="299.13 m2" data-id="B-147"></rect>
                                            <rect class="st2 " x="544.58" y="822.15" width="22.5" height="65.94" title="299.08 m2" data-id="B-148"></rect>
                                            <rect class="st2 " x="522.09" y="822.15" width="22.5" height="65.94" title="299.03 m2" data-id="B-149"></rect>
                                            <rect class="st2 " x="499.59" y="822.15" width="22.5" height="65.94" title="298.98 m2" data-id="B-150"></rect>
                                            <rect class="st2 " x="477.47" y="822.15" width="22.5" height="65.94" title="298.94 m2" data-id="B-151"></rect>
                                            <rect class="st2 " x="454.97" y="822.15" width="22.5" height="65.94" title="298.89 m2" data-id="B-152"></rect>
                                            <rect class="st2 " x="432.47" y="822.15" width="22.5" height="65.94" title="298.84 m2" data-id="B-153"></rect>
                                            <rect class="st2 " x="409.98" y="822.15" width="22.5" height="65.94" title="298.80 m2" data-id="B-154"></rect>
                                            <rect class="st2 " x="387.48" y="822.15" width="22.5" height="65.94" title="298.75 m2" data-id="B-155"></rect>
                                            <rect class="st2 " x="364.98" y="822.15" width="22.5" height="65.94" title="298.70 m2" data-id="B-156"></rect>
                                            <rect class="st2 " x="342.48" y="822.15" width="22.5" height="65.94" title="298.65 m2" data-id="B-157"></rect>
                                            <rect class="st2 " x="319.98" y="822.15" width="22.5" height="65.94" title="298.61 m2" data-id="B-158"></rect>
                                            <rect class="st2 " x="297.48" y="822.15" width="22.5" height="65.94" title="298.56 m2" data-id="B-159"></rect>
                                            <rect class="st2 " x="274.99" y="822.15" width="22.5" height="65.94" title="298.51 m2" data-id="B-160"></rect>
                                            <rect class="st2 " x="252.49" y="822.15" width="22.5" height="65.94" title="298.47 m2" data-id="B-161"></rect>
                                            <polyline class="cls-12" points="324.94 784.02 324.94 770.24 257.44 770.24"></polyline>
                                            <rect class="st2 " x="257.32" y="612.01" width="67.43" height="22.24" title="300 m2" data-id="B-138"></rect>
                                            <rect class="st2 " x="257.32" y="634.25" width="67.43" height="22.24" title="300 m2" data-id="B-137"></rect>
                                            <rect class="st2 " x="257.32" y="656.49" width="67.43" height="22.24" title="300 m2" data-id="B-136"></rect>
                                            <rect class="st2 " x="257.32" y="678.74" width="67.43" height="23.01" title="300 m2" data-id="B-135"></rect>
                                            <rect class="st2 " x="257.32" y="701.86" width="67.43" height="23.01" title="300 m2" data-id="B-134"></rect>
                                            <rect class="st2 " x="257.32" y="724.49" width="67.43" height="23.01" title="300 m2" data-id="B-133"></rect>
                                            <rect class="st2 " x="257.32" y="747.23" width="67.43" height="23.01" title="300 m2" data-id="B-132"></rect>
                                            <rect class="st2 " x="353.63" y="589.92" width="67.5" height="23.17" title="299.79 m2" data-id="B-130"></rect>
                                            <rect class="st2 " x="353.63" y="612.61" width="67.5" height="22.4" title="300 m2" data-id="B-129"></rect>
                                            <rect class="st2 " x="353.63" y="635.01" width="67.5" height="22.4" title="300 m2" data-id="B-128"></rect>
                                            <rect class="st2 " x="353.63" y="657.42" width="67.5" height="22.4" title="300 m2" data-id="B-127"></rect>
                                            <rect class="st2 " x="353.63" y="679.82" width="67.5" height="22.4" title="300 m2" data-id="B-126"></rect>
                                            <rect class="st2 " x="353.63" y="702.22" width="67.5" height="22.4" title="300 m2" data-id="B-125"></rect>
                                            <rect class="st2 " x="353.63" y="724.62" width="67.5" height="22.4" title="300 m2" data-id="B-124"></rect>
                                            <rect class="st2 " x="353.63" y="747.03" width="67.5" height="22.4" title="300 m2" data-id="B-123"></rect>
                                            <rect class="st2 " x="421.22" y="589.83" width="67.5" height="23.17" title="300 m2" data-id="B-120"></rect>
                                            <rect class="st2 " x="421.22" y="567.9" width="67.5" height="21.93" title="300 m2" data-id="B-121"></rect>
                                            <rect class="st2 " x="421.22" y="612.51" width="67.5" height="22.4" title="300 m2" data-id="B-119"></rect>
                                            <rect class="st2 " x="421.22" y="634.92" width="67.5" height="22.4" title="300 m2" data-id="B-118"></rect>
                                            <rect class="st2 " x="421.22" y="657.32" width="67.5" height="22.4" title="300 m2" data-id="B-117"></rect>
                                            <rect class="st2 " x="421.22" y="679.72" width="67.5" height="22.4" title="300 m2" data-id="B-116"></rect>
                                            <rect class="st2 " x="421.22" y="702.13" width="67.5" height="22.4" title="300 m2" data-id="B-115"></rect>
                                            <rect class="st2 " x="421.22" y="724.53" width="67.5" height="22.4" title="300 m2" data-id="B-114"></rect>
                                            <rect class="st2 " x="421.22" y="746.93" width="67.5" height="22.4" title="300 m2" data-id="B-113"></rect>
                                            <rect class="st2 " x="516.84" y="590.71" width="67.5" height="23.17" title="300 m2" data-id="B-106"></rect>
                                            <rect class="st2 " x="516.84" y="613.4" width="67.5" height="22.4" title="300 m2" data-id="B-105"></rect>
                                            <rect class="st2 " x="516.84" y="635.81" width="67.5" height="22.4" title="300 m2" data-id="B-104"></rect>
                                            <rect class="st2 " x="516.84" y="658.21" width="67.5" height="22.4" title="300 m2" data-id="B-103"></rect>
                                            <rect class="st2 " x="516.84" y="680.61" width="67.5" height="22.4" title="300 m2" data-id="B-102"></rect>
                                            <rect class="st2 " x="516.84" y="703.02" width="67.5" height="22.4" title="300 m2" data-id="B-101"></rect>
                                            <rect class="st2 " x="516.84" y="725.42" width="67.5" height="22.4" title="300 m2" data-id="B-100"></rect>
                                            <rect class="st2 " x="516.84" y="747.82" width="67.5" height="22.4" title="300 m2" data-id="B-99">
                                            </rect>
                                            <rect class="st2 " x="584.43" y="590.62" width="67.5" height="23.17" title="300 m2" data-id="B-92">
                                            </rect>
                                            <rect class="st2 " x="584.43" y="613.31" width="67.5" height="22.4" title="300 m2" data-id="B-91">
                                            </rect>
                                            <rect class="st2 " x="584.43" y="635.71" width="67.5" height="22.4" title="300 m2" data-id="B-90"></rect>
                                            <rect class="st2 " x="584.43" y="657.6203232756702" width="67.5" height="22.4" title="300 m2" data-id="B-89"></rect>
                                            <rect class="st2 " x="584.43" y="680.52" width="67.5" height="22.4" title="300 m2" data-id="B-88">
                                            </rect>
                                            <rect class="st2 " x="584.43" y="702.92" width="67.5" height="22.4" title="300 m2" data-id="B-87">
                                            </rect>
                                            <rect class="st2 " x="516.89" y="478.6" width="67.5" height="22.4" title="300 m2" data-id="B-111">
                                            </rect>
                                            <rect class="st2 " x="516.89" y="501.01" width="67.5" height="22.4" title="300 m2" data-id="B-110">
                                            </rect>
                                            <rect class="st2 " x="516.89" y="523.41" width="67.5" height="22.4" title="300 m2" data-id="B-109">
                                            </rect>
                                            <rect class="st2 " x="516.89" y="545.81" width="67.5" height="22.4" title="300 m2" data-id="B-108">
                                            </rect>
                                            <rect class="st2 " x="516.89" y="568.22" width="67.5" height="22.4" title="300 m2" data-id="B-107"></rect>
                                            <rect class="st2 " x="680.03" y="590.29" width="67.5" height="23.17" title="300 m2" data-id="B-75">
                                            </rect>
                                            <rect class="st2 " x="680.03" y="612.97" width="67.5" height="22.4" title="300 m2" data-id="B-76">
                                            </rect>
                                            <rect class="st2 " x="680.03" y="635.38" width="67.5" height="22.4" title="300 m2" data-id="B-77">
                                            </rect>
                                            <rect class="st2 " x="680.03" y="657.78" width="67.5" height="22.4" title="300 m2" data-id="B-78">
                                            </rect>
                                            <rect class="st2 " x="680.03" y="680.18" width="67.5" height="22.4" title="300 m2" data-id="B-79">
                                            </rect>
                                            <rect class="st2 " x="680.03" y="702.59" width="67.5" height="22.4" title="300 m2" data-id="B-80">
                                            </rect>
                                            <rect class="st2 " x="680.03" y="724.99" width="67.5" height="22.4" title="300 m2" data-id="B-81">
                                            </rect>
                                            <rect class="st2 " x="680.03" y="747.39" width="67.5" height="22.4" title="300 m2" data-id="B-82">
                                            </rect>
                                            <rect class="st2 " x="680.07" y="567.79" width="67.5" height="22.4" title="300 m2" data-id="B-74"></rect>
                                            <rect class="st2 " x="584.48" y="478.51" width="67.5" height="22.4" title="300 m2" data-id="B-97"></rect>
                                            <rect class="st2 " x="584.48" y="500.91" width="67.5" height="22.4" title="300 m2" data-id="B-96">
                                            </rect>
                                            <rect class="st2 " x="584.48" y="523.32" width="67.5" height="22.4" title="300 m2" data-id="B-95">
                                            </rect>
                                            <rect class="st2 " x="584.48" y="545.72" width="67.5" height="22.4" title="300 m2" data-id="B-94">
                                            </rect>
                                            <rect class="st2 " x="584.48" y="568.12" width="67.5" height="22.4" title="300 m2" data-id="B-93">
                                            </rect>
                                            <rect class="st2 " x="584.43" y="725.32" width="67.5" height="22.4" title="300 m2" data-id="B-86">
                                            </rect>
                                            <rect class="st2 " x="584.43" y="747.73" width="67.5" height="22.4" title="300 m2" data-id="B-85">
                                            </rect>
                                            <path class="st2 " d="M348.84,134.71,341,157.34l70,2.79c6.1-10.18,5.76-18.22-4.7-22.88Z" title="303.52 m2" data-id="B-15"></path>
                                            <path class="st2 " d="M519,142.72l-7.81,22.88-70.55-3.43c3.19-12.78,8-20.73,15.45-20.6Z" title="311.49 m2" data-id="B-26"></path>
                                            <path class="st2 " d="M860.51,158.35l-7.81,22.88-70.55-3.43c3.19-12.77,8-20.72,15.44-20.59Z" title="311.57 m2" data-id="B-64"></path>
                                            <path class="st2 " d="M688.63,150.71l-7.82,22.88-70.54-3.43c3.19-12.78,8-20.73,15.44-20.6Z" title="311.49 m2" data-id="B-43"></path>
                                            <path class="st2 " d="M576.42,145.2c-3-.19-57.39-2.48-57.39-2.48l-7.81,22.88,70.54,3.05C587.07,157.72,586.37,149.43,576.42,145.2Z" title="303.52 m2" data-id="B-35"></path>
                                            <path class="st2 " d="M747.16,153.05c-3-.19-57.39-2.48-57.39-2.48L682,173.45l70.54,3.05C757.81,165.57,757.11,157.28,747.16,153.05Z" title="303.52 m2" data-id="B-52"></path>
                                            <path d="M 680.8099975585938 173.58999633789062 L 672.7999877929688 195.32000732421875 L 602.4500122070312 191.88999938964844 L 610.27001953125 170.16000366210938 L 680.8099975585938 173.58999633789062 Z" class="st2 " title="314.04 m2" data-id="B-42"></path>
                                            <path d="M 747.52001953125 793.4400024414062 L 747.52001953125 769.7999877929688 L 680.030029296875 769.7999877929688 L 680.030029296875 786.3800048828125 L 689.0399780273438 793.4400024414062 L 747.52001953125 793.4400024414062 Z" class="st2 " title="295.60 m2" data-id="B-83"></path>
                                            <path d="M 584.4299926757812 793.77001953125 L 584.4299926757812 770.1300048828125 L 651.9299926757812 770.1300048828125 L 651.9299926757812 786.719970703125 L 642.9199829101562 793.77001953125 L 584.4299926757812 793.77001953125 Z" class="st2 " title="295.99 m2" data-id="B-84"></path>
                                            <path d="M 584.3400268554688 793.8699951171875 L 584.3400268554688 770.22998046875 L 516.8400268554688 770.22998046875 L 516.8400268554688 786.8099975585938 L 525.8499755859375 793.8699951171875 L 584.3400268554688 793.8699951171875 Z" class="st2 " title="293.28 m2" data-id="B-98"></path>
                                            <path d="M 421.2200012207031 792.97998046875 L 421.2200012207031 769.3400268554688 L 488.7200012207031 769.3400268554688 L 488.7200012207031 785.9199829101562 L 479.7099914550781 792.97998046875 L 421.2200012207031 792.97998046875 Z" class="st2 " title="295.99 m2" data-id="B-112"></path>
                                            <path d="M 421.1300048828125 793.0700073242188 L 421.1300048828125 769.4299926757812 L 353.6300048828125 769.4299926757812 L 353.6300048828125 786.02001953125 L 362.6400146484375 793.0700073242188 L 421.1300048828125 793.0700073242188 Z" class="st2 " title="293.28 m2" data-id="B-122"></path>
                                            <path d="M 257.32000732421875 792.3599853515625 L 321.6300048828125 792.3599853515625 L 324.75 787.9099731445312 L 324.75 770.239990234375 L 257.32000732421875 770.239990234375 L 257.32000732421875 792.3599853515625 Z" class="st2 " title="295.99 m2" data-id="B-131"></path>
                                            <path d="M 257.32000732421875 589.8900146484375 L 321.6300048828125 589.8900146484375 L 324.75 594.3400268554688 L 324.75 612.010009765625 L 257.32000732421875 612.010009765625 L 257.32000732421875 589.8900146484375 Z" class="st2 " title="297.85 m2" data-id="B-139"></path>
                                            <path d="M 796.4500122070312 335.8599853515625 L 788.25 358.3599853515625 L 717.7100219726562 354.92999267578125 L 725.52001953125 332.80999755859375 L 796.4500122070312 335.8599853515625 Z" class="st2 " title="314.04 m2" data-id="B-72"></path>
                                            <path d="M 298.1199951171875 471.1700134277344 L 226.80999755859375 467.989990234375 L 235.1999969482422 445.3699951171875 L 306.25 448.4200134277344 L 298.1199951171875 471.1700134277344 Z" class="st2 " title="314.04 m2" data-id="B-01" "></path>
                                            <path d=" M 244.35000610351562 423.5 L 235.1999969482422 445.3699951171875 L 306.25 448.4200134277344 L 314.3900146484375 426.54998779296875 L 244.35000610351562 423.5 Z" class="st2 " title="314.04 m2" data-id="B-02"></path>
                                            <path d="M 251.72000122070312 401.1300048828125 L 244.35000610351562 423.5 L 314.3900146484375 426.54998779296875 L 322.2699890136719 404.17999267578125 L 251.72000122070312 401.1300048828125 Z" class="st2 " title="314.04 m2" data-id="B-03"></path>
                                            <path d="M 259.989990234375 378.8900146484375 L 251.72000122070312 401.1300048828125 L 322.2699890136719 404.17999267578125 L 330.2799987792969 381.80999755859375 L 259.989990234375 378.8900146484375 Z" class="st2 " title="314.04 m2" data-id="B-04"></path>
                                            <path d="M 268.3800048828125 356.260009765625 L 259.989990234375 378.8900146484375 L 330.2799987792969 381.80999755859375 L 338.7900085449219 359.57000732421875 L 268.3800048828125 356.260009765625 Z" class="st2 " title="314.04 m2" data-id="B-05"></path>
                                            <path d="M 346.92999267578125 337.45001220703125 L 338.7900085449219 359.57000732421875 L 268.3800048828125 356.260009765625 L 275.6199951171875 334.5299987792969 L 346.92999267578125 337.45001220703125 Z" class="st2 " title="314.04 m2" data-id="B-06"></path>
                                            <path d="M 354.55999755859375 315.4599914550781 L 346.92999267578125 337.45001220703125 L 275.6199951171875 334.5299987792969 L 282.739990234375 313.42999267578125 L 354.55999755859375 315.4599914550781 Z" class="st2 " title="314.04 m2" data-id="B-07"></path>
                                            <path d="M 362.69000244140625 293.6000061035156 L 354.55999755859375 315.4599914550781 L 282.739990234375 313.42999267578125 L 290.489990234375 291.05999755859375 L 362.69000244140625 293.6000061035156 Z" class="st2 " title="314.04 m2" data-id="B-08"></path>
                                            <path d="M 371.0799865722656 270.9700012207031 L 362.69000244140625 293.6000061035156 L 290.489990234375 291.05999755859375 L 300.2799987792969 268.42999267578125 L 371.0799865722656 270.9700012207031 Z" class="st2 " title="314.04 m2" data-id="B-09"></path>
                                            <path d="M 379.0899963378906 248.85000610351562 L 371.0799865722656 270.9700012207031 L 300.2799987792969 268.42999267578125 L 308.1600036621094 246.19000244140625 L 379.0899963378906 248.85000610351562 Z" class="st2 " title="314.04 m2" data-id="B-10"></path>
                                            <path d="M 386.8399963378906 226.47999572753906 L 379.0899963378906 248.85000610351562 L 308.1600036621094 246.19000244140625 L 316.54998779296875 223.42999267578125 L 386.8399963378906 226.47999572753906 Z" class="st2 " title="314.04 m2" data-id="B-11"></path>
                                            <path d="M 394.9800109863281 204.24000549316406 L 386.8399963378906 226.47999572753906 L 316.54998779296875 223.42999267578125 L 324.75 201.82000732421875 L 394.9800109863281 204.24000549316406 Z" class="st2 " title="314.04 m2" data-id="B-12"></path>
                                            <path d="M 403.239990234375 182.25 L 394.9800109863281 204.24000549316406 L 324.75 201.82000732421875 L 332.95001220703125 178.94000244140625 L 403.239990234375 182.25 Z" class="st2 " title="314.04 m2" data-id="B-13"></path>
                                            <path d="M 410.989990234375 160.1300048828125 L 403.239990234375 182.25 L 332.95001220703125 178.94000244140625 L 340.95001220703125 157.33999633789062 L 410.989990234375 160.1300048828125 Z" class="st2 " title="314.04 m2" data-id="B-14"></path>
                                            <path d="M 360.0199890136719 383.9700012207031 L 429.92999267578125 387.0199890136719 L 438.3800048828125 365.0299987792969 L 368.2200012207031 361.2200012207031 L 360.0199890136719 383.9700012207031 Z" class="st2 " title="314.04 m2" data-id="B-16"></path>
                                            <path d="M 446.7699890136719 342.7300109863281 L 438.3800048828125 365.0299987792969 L 368.2200012207031 361.2200012207031 L 376.2300109863281 339.2900085449219 L 446.7699890136719 342.7300109863281 Z" class="st2 " title="314.04 m2" data-id="B-17"></path>
                                            <path d="M 454.9700012207031 320.2300109863281 L 446.7699890136719 342.7300109863281 L 376.2300109863281 339.2900085449219 L 384.04998779296875 317.17999267578125 L 454.9700012207031 320.2300109863281 Z" class="st2 " title="314.04 m2" data-id="B-18"></path>
                                            <path d="M 462.7900085449219 297.9200134277344 L 454.9700012207031 320.2300109863281 L 384.04998779296875 317.17999267578125 L 392.42999267578125 295.05999755859375 L 462.7900085449219 297.9200134277344 Z" class="st2 " title="314.04 m2" data-id="B-19"></path>
                                            <path d="M 478.80999755859375 254.07000732421875 L 471.55999755859375 275.989990234375 L 400.25 272.17999267578125 L 408.45001220703125 251.00999450683594 L 478.80999755859375 254.07000732421875 Z" class="st2 " title="314.04 m2" data-id="B-21"></path>
                                            <path d="M 471.55999755859375 275.989990234375 L 462.7900085449219 297.9200134277344 L 392.42999267578125 295.05999755859375 L 400.25 272.17999267578125 L 471.55999755859375 275.989990234375 Z" class="st2 " title="314.04 m2" data-id="B-20"></path>
                                            <path d="M 486.42999267578125 231.75999450683594 L 478.80999755859375 254.07000732421875 L 408.45001220703125 251.00999450683594 L 416.8399963378906 228.3300018310547 L 486.42999267578125 231.75999450683594 Z" class="st2 " title="314.04 m2" data-id="B-22"></path>
                                            <path d="M 495.20001220703125 209.63999938964844 L 486.42999267578125 231.75999450683594 L 416.8399963378906 228.3300018310547 L 424.6600036621094 206.77999877929688 L 495.20001220703125 209.63999938964844 Z" class="st2 " title="314.04 m2" data-id="B-23"></path>
                                            <path d="M 503.2099914550781 187.3300018310547 L 495.20001220703125 209.63999938964844 L 424.6600036621094 206.77999877929688 L 432.8599853515625 183.89999389648438 L 503.2099914550781 187.3300018310547 Z" class="st2 " title="314.04 m2" data-id="B-24"></path>
                                            <path d="M 511.2200012207031 165.60000610351562 L 503.2099914550781 187.3300018310547 L 432.8599853515625 183.89999389648438 L 440.6700134277344 162.1699981689453 L 511.2200012207031 165.60000610351562 Z" class="st2 " title="314.04 m2" data-id="B-25"></path>
                                            <path d="M 525.0399780273438 324.54998779296875 L 516.8400268554688 347.04998779296875 L 446.29998779296875 343.6099853515625 L 454.1099853515625 321.5 L 525.0399780273438 324.54998779296875 Z" class="st2 " title="314.04 m2" data-id="B-27"></path>
                                            <path d="M 532.8599853515625 302.239990234375 L 525.0399780273438 324.54998779296875 L 454.1099853515625 321.5 L 462.5 299.3800048828125 L 532.8599853515625 302.239990234375 Z" class="st2 " title="314.04 m2" data-id="B-28"></path>
                                            <path d="M 541.6300048828125 280.30999755859375 L 532.8599853515625 302.239990234375 L 462.5 299.3800048828125 L 470.32000732421875 276.5 L 541.6300048828125 280.30999755859375 Z" class="st2 " title="314.04 m2" data-id="B-29"></path>
                                            <path d="M 548.8699951171875 258.3900146484375 L 541.6300048828125 280.30999755859375 L 470.32000732421875 276.5 L 478.5199890136719 255.33999633789062 L 548.8699951171875 258.3900146484375 Z" class="st2 " title="314.04 m2" data-id="B-30"></path>
                                            <path d="M 556.5 236.0800018310547 L 548.8699951171875 258.3900146484375 L 478.5199890136719 255.33999633789062 L 486.9100036621094 232.64999389648438 L 556.5 236.0800018310547 Z" class="st2 " title="314.04 m2" data-id="B-31"></path>
                                            <path d="M 565.27001953125 213.9600067138672 L 556.5 236.0800018310547 L 486.9100036621094 232.64999389648438 L 494.7300109863281 211.10000610351562 L 565.27001953125 213.9600067138672 Z" class="st2 " title="314.04 m2" data-id="B-32"></path>
                                            <path d="M 572.3006758482153 191.66000366210938 L 564.2906660825903 213.9600067138672 L 493.7506575376684 211.10000610351562 L 501.94065997907467 188.22000122070312 L 572.3006758482153 191.66000366210938 Z" class="st2 " title="314.04 m2" data-id="B-33"></path>
                                            <path d="M 581.760009765625 168.64999389648438 L 573.280029296875 191.66000366210938 L 502.9200134277344 188.22000122070312 L 510.739990234375 166.49000549316406 L 581.760009765625 168.64999389648438 Z" class="st2 " title="314.04 m2" data-id="B-34"></path>
                                            <path d="M 632.3800048828125 305.9100036621094 L 624.5700073242188 328.2200012207031 L 553.6400146484375 325.1700134277344 L 562.030029296875 303.04998779296875 L 632.3800048828125 305.9100036621094 Z" class="st2 " title="314.04 m2" data-id="B-36"></path>
                                            <path d="M 641.1500244140625 283.9800109863281 L 632.3800048828125 305.9100036621094 L 562.030029296875 303.04998779296875 L 569.8499755859375 280.1700134277344 L 641.1500244140625 283.9800109863281 Z" class="st2 " title="314.04 m2" data-id="B-37"></path>
                                            <path d="M 648.4000244140625 262.05999755859375 L 641.1500244140625 283.9800109863281 L 569.8499755859375 280.1700134277344 L 578.0399780273438 259 L 648.4000244140625 262.05999755859375 Z" class="st2 " title="314.04 m2" data-id="B-38"></path>
                                            <path d="M 656.030029296875 239.75 L 648.4000244140625 262.05999755859375 L 578.0399780273438 259 L 586.4299926757812 236.32000732421875 L 656.030029296875 239.75 Z" class="st2 " title="314.04 m2" data-id="B-39"></path>
                                            <path d="M 664.7999877929688 217.6300048828125 L 656.030029296875 239.75 L 586.4299926757812 236.32000732421875 L 594.25 214.77000427246094 L 664.7999877929688 217.6300048828125 Z" class="st2 " title="314.04 m2" data-id="B-40"></path>
                                            <path d="M 672.7999877929688 195.32000732421875 L 664.7999877929688 217.6300048828125 L 594.25 214.77000427246094 L 602.4500122070312 191.88999938964844 L 672.7999877929688 195.32000732421875 Z" class="st2 " title="314.04 m2" data-id="B-41"></path>
                                            <path d="M 695.780029296875 332.3999938964844 L 687.5800170898438 354.8900146484375 L 617.0399780273438 351.4599914550781 L 624.8499755859375 329.3500061035156 L 695.780029296875 332.3999938964844 Z" class="st2 " title="314.04 m2" data-id="B-44"></path>
                                            <path d="M 703.5999755859375 310.0899963378906 L 695.780029296875 332.3999938964844 L 624.8499755859375 329.3500061035156 L 633.239990234375 307.2300109863281 L 703.5999755859375 310.0899963378906 Z" class="st2 " title="314.04 m2" data-id="B-45"></path>
                                            <path d="M 712.3699951171875 288.1600036621094 L 703.5999755859375 310.0899963378906 L 633.239990234375 307.2300109863281 L 641.0599975585938 284.3500061035156 L 712.3699951171875 288.1600036621094 Z" class="st2 " title="314.04 m2" data-id="B-46"></path>
                                            <path d="M 719.6099853515625 266.239990234375 L 712.3699951171875 288.1600036621094 L 641.0599975585938 284.3500061035156 L 649.260009765625 263.19000244140625 L 719.6099853515625 266.239990234375 Z" class="st2 " title="314.04 m2" data-id="B-47"></path>
                                            <path d="M 727.239990234375 243.92999267578125 L 719.6099853515625 266.239990234375 L 649.260009765625 263.19000244140625 L 657.6500244140625 240.5 L 727.239990234375 243.92999267578125 Z" class="st2 " title="314.04 m2" data-id="B-48"></path>
                                            <path d="M 736.010009765625 221.80999755859375 L 727.239990234375 243.92999267578125 L 657.6500244140625 240.5 L 665.469970703125 218.9499969482422 L 736.010009765625 221.80999755859375 Z" class="st2 " title="314.04 m2" data-id="B-49"></path>
                                            <path d="M 744.02001953125 199.5 L 736.010009765625 221.80999755859375 L 665.469970703125 218.9499969482422 L 673.6599731445312 196.07000732421875 L 744.02001953125 199.5 Z" class="st2 " title="314.04 m2" data-id="B-50"></path>
                                            <path d="M 752.5 176.5 L 744.02001953125 199.5 L 673.6599731445312 196.07000732421875 L 681.47998046875 174.33999633789062 L 752.5 176.5 Z" class="st2 " title="314.04 m2" data-id="B-51"></path>
                                            <path d="M 852.7000122070312 181.22999572753906 L 844.6900024414062 202.97000122070312 L 774.3300170898438 199.5399932861328 L 782.1500244140625 177.8000030517578 L 852.7000122070312 181.22999572753906 Z" class="st2 " title="314.04 m2" data-id="B-65"></path>
                                            <path d="M 844.6900024414062 202.97000122070312 L 836.6799926757812 225.27999877929688 L 766.1300048828125 222.4199981689453 L 774.3300170898438 199.5399932861328 L 844.6900024414062 202.97000122070312 Z" class="st2 " title="314.04 m2" data-id="B-66"></path>
                                            <path d="M 836.6799926757812 225.27999877929688 L 827.9099731445312 247.38999938964844 L 758.3200073242188 243.9600067138672 L 766.1300048828125 222.4199981689453 L 836.6799926757812 225.27999877929688 Z" class="st2 " title="314.04 m2" data-id="B-67"></path>
                                            <path d="M 827.9099731445312 247.38999938964844 L 820.280029296875 269.70001220703125 L 749.9299926757812 266.6499938964844 L 758.3200073242188 243.9600067138672 L 827.9099731445312 247.38999938964844 Z" class="st2 " title="314.04 m2" data-id="B-68"></path>
                                            <path d="M 820.280029296875 269.70001220703125 L 813.0399780273438 291.6300048828125 L 741.72998046875 287.80999755859375 L 749.9299926757812 266.6499938964844 L 820.280029296875 269.70001220703125 Z" class="st2 " title="314.04 m2" data-id="B-69"></path>
                                            <path d="M 813.0399780273438 291.6300048828125 L 804.27001953125 313.54998779296875 L 733.9099731445312 310.69000244140625 L 741.72998046875 287.80999755859375 L 813.0399780273438 291.6300048828125 Z" class="st2 " title="314.04 m2" data-id="B-70"></path>
                                            <path d="M 804.27001953125 313.54998779296875 L 796.4500122070312 335.8599853515625 L 725.52001953125 332.80999755859375 L 733.9099731445312 310.69000244140625 L 804.27001953125 313.54998779296875 Z" class="st2 " title="314.04 m2" data-id="B-71"></path>
                                            <path d="M 788.25 358.3599853515625 L 779.8599853515625 380.6700134277344 L 709.7000122070312 376.8500061035156 L 717.7100219726562 354.92999267578125 L 788.25 358.3599853515625 Z" class="st2 " title="314.04 m2" data-id="B-73"></path>
                                            <path d="M 614.239990234375 11.800000190734863 L 575.3400268554688 119.19999694824219 L 600 119.19999694824219 L 638.6400146484375 12.430000305175781 L 614.239990234375 11.800000190734863 Z" class="st2 " title="508.46 m2" data-id="B-56"></path>
                                            <path d="M 638.0800170898438 12.420000076293945 L 599.3900146484375 119.19999694824219 L 623.9199829101562 119.19999694824219 L 662.0499877929688 13.890000343322754 L 638.0800170898438 12.420000076293945 Z" class="st2 " title="508.93 m2" data-id="B-57"></path>
                                            <path d="M 685.4199829101562 15.359999656677246 L 662.0499877929688 13.890000343322754 L 623.9199829101562 119.19999694824219 L 648.2999877929688 120.86000061035156 L 685.4199829101562 15.359999656677246 Z" class="st2 " title="508.95 m2" data-id="B-58"></path>
                                            <path d="M 710.02001953125 16.479999542236328 L 685.4199829101562 15.359999656677246 L 648.2999877929688 120.86000061035156 L 671.6900024414062 122.37999725341797 L 710.02001953125 16.479999542236328 Z" class="st2 " title="508.96 m2" data-id="B-59"></path>
                                            <path d="M 733.9099731445312 17.260000228881836 L 710.02001953125 16.479999542236328 L 671.6900024414062 122.37999725341797 L 695.780029296875 123.45999908447266 L 733.9099731445312 17.260000228881836 Z" class="st2 " title="508.98 m2" data-id="B-60"></path>
                                            <path d="M 758.3200073242188 18.600000381469727 L 733.9099731445312 17.260000228881836 L 695.780029296875 123.45999908447266 L 720.5700073242188 124.80000305175781 L 758.3200073242188 18.600000381469727 Z" class="st2 " title="508.99 m2" data-id="B-61"></path>
                                            <path d="M 782.1500244140625 19.549999237060547 L 758.3200073242188 18.600000381469727 L 720.5700073242188 124.80000305175781 L 744.4000244140625 124.80000305175781 L 782.1500244140625 19.549999237060547 Z" class="st2 " title="509.01 m2" data-id="B-62"></path>
                                            <path d="M 884.1599731445312 24.700000762939453 L 845.260009765625 130.32000732421875 L 870.8099975585938 131.27999877929688 L 909.510009765625 26.219999313354492 L 884.1599731445312 24.700000762939453 Z" class="st2 " title="528.79 m2" data-id="B-63"></path>
                                            <path d="M 468.05999755859375 4.930000305175781 L 429.4200134277344 110.69000244140625 L 459.30999755859375 111.69999694824219 L 497.29998779296875 5.949999809265137 L 468.05999755859375 4.930000305175781 Z" class="st2 " title="630.49 m2" data-id="B-53"></path>
                                            <path d="M 526.0900268554688 7.730000019073486 L 497.29998779296875 5.949999809265137 L 459.30999755859375 111.69999694824219 L 489.6700134277344 113.2300033569336 L 526.0900268554688 7.730000019073486 Z" class="st2 " title="630.22 m2" data-id="B-54"></path>
                                            <path d="M 556.5 8.489999771118164 L 526.0900268554688 7.730000019073486 L 489.6700134277344 113.2300033569336 L 519.030029296875 114.75 L 556.5 8.489999771118164 Z" class="st2 " title="630.76 m2" data-id="B-55"></path>
                                        </g>
                                    </svg>
                                </div>
                                <div class="leyend-status d-flex flex-row justify-content-around text-center fw-bold text-white mt-3">
                                    <div class="text-uppercase small bg-sold rounded-pill px-2"><?= lang('Globals.sold') ?></div>
                                    <div class="text-uppercase small bg-available rounded-pill px-2"><?= lang('Globals.available') ?></div>
                                    <div class="text-uppercase small bg-reserved rounded-pill px-2"><?= lang('Globals.reserved') ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border border-success my-4">
                        <h2 class="accordion-header border-bottom border-success" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <div class="container table-responsive-md">
                                    <table class="table table-sm table-borderless caption-top">
                                        <caption class="h1 fw-bold text-center text-success text-nowrap"><?= lang('Globals.stage') ?>-3</caption>
                                        <thead>
                                            <tr>
                                                <th scope="col" class="h4 text-center"><?= lang('Globals.available') ?> <?= lang('Globals.available_soon') ?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="display-4 fw-bold text-center"></td>
                                                <td class="display-4 fw-bold text-center"></td>
                                                <td class="display-4 fw-bold text-center"></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse d-none" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- Property List End -->
<div class="data">
    <input type="hidden" name="data_url" id="data_url" value='<?= base_url('assets/json/lakuun.json') ?>'>
    <input type="hidden" name="language" id="language" value='<?= $lang ?>'>
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

<!-- Contact Us Section -->
<?= $sectionContact ?>
<!-- Reviews Section -->
<?= $sectionReviews ?>