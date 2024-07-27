<?php 
//     $a = $propertiesList[0]->property_data->bathrooms;
//     $b = null;
//     if ($a === NULL) {
//         echo "La otra variable es NULL.";
//     } else {
//         echo "La otra variable no es NULL.";
//     }

//     dd(
//         // array_key_exists('a', $GLOBALS), $lang, $propertiesList, $propertiesList[0]->investment_type, $propertyNameField, $propertyCharacteristicsField, $propertyDescriptionField,
//     // $propertiesList[0]->$propertyNameField,
//     // $propertiesList[0]->$propertyDescriptionField,
//     // $propertiesList[0]->$propertyCharacteristicsField,
//     // $propertiesList[0]->property_type,
//     // $propertiesList[0]->property_data->antiquity,
//         // $propertiesList[0]->property_model,
//         // $directoryPhotos,
//         $propertiesPromoList,
//         $propertiesListPromo,
//         $propertyInvesmentType,
//         $propertiesList[0]->property_description->$textField,
//         $propertiesList[0],
//         $textField,
//         $propertiesList[0]->property_name->$textField,
//         $propertiesList[0]->investment_type->$textField
// );
?>
<!-- Header Start -->
<div class="container-xxl bg-white p-0 mt-4 mb-5">
    <div class="row g-0 align-items-center flex-md-row">
        <div class="col-lg-6 text-center px-3 px-lg-5 mt-0 mt-xxl-5 mb-5">
            <div class="animated fadeInLeft bg-success text-white rounded-5 pb-1">
                <h1 class="h3"><?= $propertiesList[0]->property_name->$textField ?></h1>
            </div>
            <h6 class="my-2"><span class='mdi mdi-map-marker-outline mdi-18px text-success me-3'></span>
                <?= str_replace('_', ' ', $propertiesList[0]->zone_municipality_name->$textField) ?>, 
                <?= strtoupper($propertiesList[0]->zone_state_name->$textField) ?>, 
                <?= mb_strtoupper(strtoupper($propertiesList[0]->zone_state_name->$textField), 'UTF-8') ?>, MEXICO
            </h6>
            <h1 class="h2 text-left fw-bold my-3 pb-3">$<?= number_format($propertiesList[0]->property_price) ?> <spam class="text-left text-muted h6 pe-2"><?= strtoupper($propertiesList[0]->investment_type->$textField) ?></spam></h1>
            <!-- <p class="h4 animated fadeIn mb-2 py-1"><?= lang('Globals.header_23') ?></p> -->
            <div class="row g-0 text-left mt-lg-1 bg-secondary" style="--bs-bg-opacity: .05;" id="" style="min-height: 9em">
                <div class="col-4 border">
                    <p class="h2 mt-3"><?= $propertiesList[0]->property_data->bedrooms ?></p>
                    <p><small> <?=  mb_strtoupper(strtoupper(lang('Globals.bedrooms')), 'UTF-8') ?></small></p>
                </div>
                <div class="col-4 border">
                    <p class="h2 mt-3"><?= $propertiesList[0]->property_data->bathrooms ?></p>
                    <p><small> <?=  mb_strtoupper(strtoupper(lang('Globals.bathrooms')), 'UTF-8') ?></small></p>
                </div>
                <?php if ($propertiesList[0]->property_data->half_bathrooms != NULL) : ?>
                    <div class="col-4 border">
                        <p class="h2 mt-3"><?= $propertiesList[0]->property_data->half_bathrooms ?></p>
                        <p><small> <?= mb_strtoupper(strtoupper(lang('Globals.half_bathrooms')), 'UTF-8') ?></small></p>
                    </div>
                <?php endif; ?>
                <?php if ($propertiesList[0]->property_data->construction_area != NULL) : ?>
                    <div class="col-4 border">
                        <p class="h2 mt-3"><?= $propertiesList[0]->property_data->construction_area ?> m²</p>
                        <p><small> <?= strtoupper(lang('Globals.of_construction')) ?></small></p>
                    </div>
                <?php endif; ?>
                <?php if ($propertiesList[0]->property_data->terrain_area != NULL) : ?>
                    <div class="col-4 border">
                        <p class="h2 mt-3"><?= $propertiesList[0]->property_data->terrain_area ?> m²</p>
                        <p><small> <?= strtoupper(lang('Globals.terrain_area')) ?></small></p>
                    </div>
                <?php endif; ?>
                <?php if ($propertiesList[0]->property_data->parking_lots != NULL) : ?>
                    <div class="col-4 border">
                        <p class="h2 mt-3"><?= $propertiesList[0]->property_data->parking_lots ?></p>
                        <p><small> <?= strtoupper(lang('Globals.parking_lots')) ?></small></p>
                    </div>
                <?php endif; ?>
            </div>
            <!-- <div class="m-2">
                <a href="<?//= base_url('templates/contactForm/?lang='. $lang) ?>" type="button" class="btn btn-lg btn-outline-success btn-contact text-decoration-none mt-0 not_mobile d-none" target="_blank">
                    <span class="fadeinout"><?= lang('Globals.header_3') ?></span>
                </a>
            </div> -->
        </div>
        <div class="col-lg-6 pe-lg-5">
            <div class="text-center mx-auto">
                <p class="fw-bold small mb-0 not_mobile d-none"><?= lang('Globals.click_zoom') ?></p>
            </div>
            <div class="carousel slide text-center" data-bs-ride="true" data-bs-pause="hover" data-bs-touch="false" id="carouselHome">
                <div class="carousel-inner">
                    <?php foreach ($directoryPhotos as $p => $photo) : ?>
                        <div class="carousel-item <?php echo ($p == 0) ? ' active' : ''; ?> ">
                            <img src="<?= STATIC_URL . 'img/properties/'. $propertiesList[0]->property_code . '/'  . $photo ?>" class="d-block w-100"  alt="Vista aérea de lotes en Caoba, Mérida, Yucatán, México.">
                            <!-- <div class="carousel-caption bottom-0 py-0 ">
                                <p class="h6 text-black bg-dark-subtle subtle"><?//= lang('Globals.carousel_45') ?></p>
                            </div> -->
                        </div>
                    <?php endforeach; ?>
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
            <!-- <div class="text-center px-3 px-lg-5 mt-2 promo mobile d-none" id="" style="min-height: 7em">
            </div>
            <div class="m-2 text-center mt-3">
                <a href="<?//= base_url('templates/contactForm/?lang='. $lang) ?>" type="button" class="btn btn-lg btn-outline-success text-decoration-none mt-0 mobile d-none" target="_blank">
                    <span class="fadeinout"><?//= lang('Globals.header_3') ?></span>
                </a>
            </div> -->
        </div>
    </div>
</div>
<!-- Header End -->

<!-- Details Start -->
<div class="container-xxl bg-white p-0 mt-4 mb-5">
    <div class="row g-5 align-items-top mx-1">
        <div class="col-lg-2 mt-lg-0">
            <p class="text-decoration-underline h5 mb-lg-4"><?= lang('Globals.details') ?></p>
        </div>
        <div class="col-lg-10 mt-1 mt-lg-2">
            <p class="h5"><?= ucwords(lang('Globals.type')) ?>: <strong class="text-black"><?= ucwords($propertiesList[0]->property_type->$textField) ?></strong></p>
            <?php if ( $propertiesList[0]->property_model !== null) : ?>
                <p class="h5"><?= ucwords(lang('Globals.model')) ?>: <strong class="text-black">(<?= $propertiesList[0]->property_model ?>)</strong></p>
            <?php endif; ?>
            <p class="h5">ID: <strong class="text-black"><?= $propertiesList[0]->property_code ?></strong></p>
            <?php if ( $propertiesList[0]->property_data->antiquity->$textField !== null) : ?>
                <p class="h5"><?= ucwords(lang('Globals.antiquity')) ?>: <strong class="text-black"><?= $propertiesList[0]->property_data->antiquity->$textField ?></strong></p>
            <?php endif; ?>
            <p class="h5"><?= ucwords(lang('Globals.bedrooms')) ?>: <strong class="text-black"><?= $propertiesList[0]->property_data->bedrooms ?> </strong></p>
            <p class="h5"><?= ucwords(lang('Globals.bathrooms')) ?>: <strong class="text-black"><?= $propertiesList[0]->property_data->bathrooms ?></strong></p>
            <?php if ( $propertiesList[0]->property_data->half_bathrooms !== null) : ?>
                <p class="h5"><?= ucwords(lang('Globals.half_bathrooms')) ?>: <strong class="text-black"><?= $propertiesList[0]->property_data->half_bathrooms ?></strong></p>
            <?php endif; ?>
            <?php if ( $propertiesList[0]->property_data->plant !== null) : ?>
                <p class="h5"><?= ucwords(lang('Globals.plant')) ?>: <strong class="text-black"><?= $propertiesList[0]->property_data->plant ?></strong></p>
            <?php endif; ?>
            <?php if ( $propertiesList[0]->property_data->land_length !== null) : ?>
                <p class="h5"><?= ucwords(lang('Globals.land_length')) ?>: <strong class="text-black"><?= $propertiesList[0]->property_data->land_length ?> m</strong></p>
            <?php endif; ?>
            <?php if ( $propertiesList[0]->property_data->from_land !== null) : ?>
                <p class="h5"><?= ucwords(lang('Globals.from_land')) ?>: <strong class="text-black"><?= $propertiesList[0]->property_data->from_land ?> m</strong></p>
            <?php endif; ?>
            <?php if ( $propertiesList[0]->property_data->maintenance->$textField !== null) : ?>
                <p class="h5"><?= ucwords(lang('Globals.maintenance')) ?>: <strong class="text-black"><?= $propertiesList[0]->property_data->maintenance->$textField ?></strong></p>
            <?php endif; ?>
        </div>
    </div>
    <div class="row g-5 align-items-top mx-1 my-2 my-lg-0">
        <div class="col-lg-2 mt-lg-0">
            <p class="text-decoration-underline h5 mt-lg-4"><?= ucwords(lang('Globals.description')) ?></p>
        </div>
        <div class="col-lg-10 mt-1 mt-lg-2">
            <?= $propertiesList[0]->property_description->$textField ?>
        </div>
    </div>
    <div class="row g-5 align-items-top mx-1 my-2 my-lg-4">
        <div class="col-lg-2 mt-lg-0">
            <p class="text-decoration-underline h5 mb-lg-4"><?= ucwords(lang('Globals.characteristics')) ?></p>
        </div>
        <div class="col-lg-10 mt-1 mt-lg-2"><?= $propertiesList[0]->property_characteristics->$textField ?>
        </div>
    </div>
</div>
<!-- Details End -->

<!-- Location on map Start -->
<div class="container-xxl bg-white p-0 mt-4 mb-5">
    <div class="row g-0 align-items-center flex-md-row">
    <h2 class="text-body-emphasis mb-8"><?= lang('Globals.location') ?></h2>  
    <!-- <div class="ratio ratio-16x9"> -->
        <iframe src="<?= $propertiesList[0]->property_data->map_uri->$textField ?>" class="border border-success rounded w-100" height="500" style="border:2;" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <!-- </div> -->
    </div>
</div>      
<!-- Location on map End -->

<div class="container-xxl bg-white p-0 mt-4 mb-5">
    <div class="row g-5 align-items-center flex-md-row text-center">
        
        <h2 class="text-body-emphasis mb-8"><?= strtoupper(lang('Globals.featured_properties')) ?></h2>
                <!-- Slider main container -->
        <div class="col-12">
            <div class="swiper special-offer-slider">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <?php foreach ( $propertiesListPromo as $property) : ?>
                        <div class="swiper-slide">
                            <div class="card property-item h-100 shadow"> 
                                <a href="<?= base_url('properties/property/' . $propertiesPromoList[$property]->property_code . '?lang='. $lang) ?>" class="img-info glightbox" target="_blank">
                                    <figure class="img-info-thumbnail rounded-2 image-hover-scale image-hover-overlay mb-0">
                                        <img src="<?= STATIC_URL . 'img/properties/' . $propertiesPromoList[$property]->property_code .  '/' . 'k01.jpg' ?>" class="img-fluid w-100" alt="Photo">
                                    </figure>
                                    <div class="card-body p-0" title="Click para ir a la página" data-href=<?= base_url('investments/nodo?lang='. $lang) ?>>
                                        <p class="card-text text-left text-dark h4" name="property_price">$<?= number_format($propertiesPromoList[$property]->property_price) ?> <spam class="text-left text-muted h6 pe-2"><?= strtoupper($propertiesPromoList[$property]->investment_type->$textField) ?></spam></p>
                                        <p class="card-text text-left h6" name="property_heading"><?= $propertiesPromoList[$property]->property_name->$textField ?></p>
                                    </div>
                                    <div class="card-footer border-top-0 bg-transparent p-0" title="Click para ir a la página" data-href=<?= base_url('investments/nodo?lang='. $lang) ?>>
                                        <p class="d-flex justify-content-between mb-0 pt-1">
                                            <small class="flex-fill text-left text-muted"><span class='mdi mdi-bed mdi-18px text-success me-1'></span><?= $propertiesPromoList[$property]->property_data->bedrooms ?> <?= lang('Globals.bedrooms') ?> 
                                            <span class="mdi mdi-shower mdi-18px text-success me-1"></span><?= $propertiesPromoList[$property]->property_data->bathrooms ?> <?= lang('Globals.bathrooms') ?>  
                                            <!-- <span class="mdi mdi-bed-queen-outline mdi-18px text-success me-3"></span><span class="mdi mdi-toilet mdi-18px text-success me-3">
                                            <span class="mdi mdi-garage mdi-18px text-success me-3"></span><span class="mdi mdi-ruler mdi-18px text-success me-3"></span> -->
                                            <span class="mdi mdi-arrow-all mdi-18px text-success me-1"></span><?= $propertiesPromoList[$property]->property_data->terrain_area ?> m²
                                            </small>
                                        </p>
                                        <p class="mb-1"><small><span class='mdi mdi-map-marker-outline mdi-18px text-success me-1'></span><?= str_replace('_', ' ', $propertiesPromoList[$property]->zone_city_name->$textField) ?>, <?= $propertiesPromoList[$property]->zone_municipality_name->$textField ?>, <?=$propertiesPromoList[$property]->zone_state_name->$textField ?>, Mexico</small></p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <!-- If we need pagination -->
                <!-- <div class="swiper-pagination"></div> -->
                
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                
                <!-- If we need scrollbar -->
                <!-- <div class="swiper-scrollbar"></div> -->
            </div>

        </div>
    </div>
</div> 


<div class="data">
    <input type="hidden" name="data_url" id="data_url" value='<?= base_url('assets/json/') ?>'>
    <input type="hidden" name="data_url" id="static_url" value='<?= STATIC_URL ?>'>
    <input type="hidden" name="language" id="language" value='<?= $lang ?>'>
    <input type="hidden" name="investment" id="investment" value=''>
</div>
<!-- Property List End -->

<!-- Modal -->
<div class="modal fade" id="modal-img" tabindex="-1" aria-labelledby="modal-imgLabel" aria-hidden="true" style="z-index: 99999">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header py-0 border-bottom-0">
                <ul class="nav nav-tabs pt-2" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link px-2 px-lg-5 active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true"><?= lang('Globals.photos') ?></button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link px-2 px-lg-5" id="video-tab" data-bs-toggle="tab" data-bs-target="#video-tab-pane" type="button" role="tab" aria-controls="video-tab-pane" aria-selected="false" disabled>Videos</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link px-2 px-lg-5" id="vistas-tab" data-bs-toggle="tab" data-bs-target="#vistas-tab-pane" type="button" role="tab" aria-controls="vistas-tab-pane" aria-selected="false" disabled>360</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link px-2 px-lg-5" id="planos-tab" data-bs-toggle="tab" data-bs-target="#planos-tab-pane" type="button" role="tab" aria-controls="planos-tab-pane" aria-selected="false">Planos</button>
                    </li>
                </ul>
                <button type="button" class="btn-close mt-2" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col p-0 p-md-2">
                        <div class=" rounded overflow-hidden border-5 shadow">
                            <div class="position-relative overflow-hidden">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                        <p class="text-center text-uppercase fs-1 fw-bold"></p>
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
                                    <div class="tab-pane fade" id="video-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">Videos</div>
                                    <div class="tab-pane fade" id="vistas-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">360</div>
                                    <div class="tab-pane fade" id="planos-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">
                                        <p class="text-center text-uppercase fs-1 fw-bold">Planos</p>
                                    </div>
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