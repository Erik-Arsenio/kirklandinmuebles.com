<!-- Call to Attractions Start -->
<div class="modal" id="promoModal" tabindex="-1" aria-labelledby="promoModalLabel" aria-hidden="true" style="z-index: 99999">
    <div class="modal-dialog  modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header border-5">
                <p class="text-center h4 mb-3"><span class="text-promo h4 fw-bolder" id="promoModalLabel"></span>. <?= lang('Globals.location_7') ?> </p>
                
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body px-2">
                <div class="row mb-1 pb-1">
                    <div class="col-lg-5">
                        <div class="loader-container-img text-center mb-2 ">
                            <span class="mdi mdi-vanish mdi-spin"></span>
                            <?= lang('Globals.loading') ?> <?= lang('Globals.image') ?>...
                        </div>
                        <div id="carouselPromo" class="carousel slide text-center" data-bs-ride="false" data-bs-touch="false">
                            <div class="carousel-inner" id="promoModalImages" >
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselPromo" data-bs-slide="prev">
                                <span class="mdi mdi-chevron-left mdi-72px" aria-hidden="true"></span>
                                <span class="visually-hidden"><?= lang('Globals.previous') ?></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselPromo" data-bs-slide="next">
                            <span class="mdi mdi-chevron-right mdi-72px" aria-hidden="true"></span>
                                <span class="visually-hidden"><?= lang('Globals.next') ?></span>
                            </button>
                        </div>
                        <div class="mt-2" id="promoModalDistance"></div>
                    </div>
                    <div class="col-lg-7">

                        <div class="" id="promoModalContent"></div>
                    </div>
                </div>
            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div> -->
        </div>
    </div>
</div>
<!-- Call to Attractions End -->