<!-- Header Start -->
<div class="container-xxl bg-white p-0 mt-4 mb-5">
    <div class="row g-0 align-items-center flex-md-row">
        <div class="col-lg-6 text-center px-3 px-lg-5 mt-0 mt-xxl-5">
            <div class="animated slideInLeft bg-success text-center text-white rounded-5 pb-2">
                <h3>Anthia</h3>
                <h6>HUNUCMÁ</h6>
            </div>
            <p class="h2 animated slideIn fw-bold my-2">Lotes patrimoniales de inversión</p>
            <!-- <p class="h4 animated fadeIn mb-4 pb-2">Desarrollo de terrenos de inversión semiurbanizados, rodeado de desarrollos de inversión a 25 minutos de las playas de Sisal, pueblo mágico y playas Platinum</p> -->
            <div class="text-center mt-lg-5 promo not_mobile d-none" id="" style="min-height: 10em">
            </div>
            <div class="m-2">
                <a href="<?= base_url('templates/contactForm') ?>" type="button" class="btn btn-lg btn-outline-success btn-contact text-decoration-none mt-0 not_mobile d-none" target="_blank">
                    <span class="fadeinout">Quiero que me contacten</span>
                </a>
            </div>
        </div>
        <div class="col-lg-6 pe-lg-5">
            <div class="text-center mx-auto">
                <p class="fw-bold small mb-0 not_mobile d-none">Click para zoom</p>
            </div>
            <div class="carousel slide carousel-fade text-center  animated fadeInRight" data-bs-ride="carousel" data-bs-touch="false" data-bs-pause="hover" data-bs-interval="12000" id="carouselHome" title="Click para zoom">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?= STATIC_URL . 'img/anthia/01-es.jpg' ?>" class="img-fluid w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="<?= STATIC_URL . 'img/anthia/02-es.jpg' ?>" class="img-fluid w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="<?= STATIC_URL . 'img/anthia/03-es.jpg' ?>" class="img-fluid w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="<?= STATIC_URL . 'img/anthia/04-es.jpg' ?>" class="img-fluid w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="<?= STATIC_URL . 'img/anthia/05-es.jpg' ?>" class="img-fluid w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="<?= STATIC_URL . 'img/anthia/06-es.jpg' ?>" class="img-fluid w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="<?= STATIC_URL . 'img/anthia/07-es.jpg' ?>" class="img-fluid w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="<?= STATIC_URL . 'img/anthia/08-es.jpg' ?>" class="img-fluid w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="<?= STATIC_URL . 'img/anthia/09-es.jpg' ?>" class="img-fluid w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="<?= STATIC_URL . 'img/anthia/10-es.jpg' ?>" class="img-fluid w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="<?= STATIC_URL . 'img/anthia/11-es.jpg' ?>" class="img-fluid w-100" alt="...">
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
            <div class="text-center px-3 px-lg-5 mt-2 promo mobile d-none" id="" style="min-height: 12em">
            </div>
            <div class="m-2 text-center mt-3">
                <a href="<?= base_url('templates/contactForm') ?>" type="button" class="btn btn-lg btn-outline-success text-decoration-none mt-0 mobile d-none" target="_blank">
                    <span class="fadeinout">Quiero que me contacten</span>
                </a>
                <!-- <span class='mdi mdi-volume-high mdi-volume-mute mdi-24px text-success me-3'>
                <audio autoplay loop preload="auto" >
                    <source src="" type="audio/mpeg">
                    <source src="" type="audio/ogg">
                    El Navegador NO SOPORTA AUDIO.
                </audio>
                </span> -->
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow slideInLeft" data-wow-delay="0.1s">
                <div class="row mb-0 pb-0 load-image d-none">
                    <p class="small fw-bolder text-center mb-0 pb-0">Para más información, <span class="mouse-touche">click </span>en los marcadores</p>
                </div>
                <div class="loader-container-img text-center mb-2 ">
                    <span class="mdi mdi-vanish mdi-spin"></span>
                    Loading image...
                </div>
                <div class="about-svg position-relative overflow-hidden p-0 pe-0">
                    <!-- <img src="<?= STATIC_URL . 'img/anthia/04.jpg' ?>" class="img-fluid w-100" alt="..."> -->
                    <div class="row load-image d-none" style="max-width: 700px; min-height: 200px;  ">
                        <svg version="1.1" id="location" xmlns:x="&ns_extend;" xmlns:i="&ns_ai;" xmlns:graph="&ns_graphs;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 848.6 604.8" style="enable-background:new 0 0 848.6 604.8;" xml:space="preserve">
                            <style type="text/css">
                                .st100 {
                                    fill: rgba(0, 0, 0, 0.1)
                                }
                                <!-- .st100 {
                                    fill: rgba(0, 0, 0, 0.1);
                                    stroke: #000000;
                                    stroke-miterlimit: 10;
                                }
                                .st101 {
                                    fill: rgba(0, 0, 0, 0.1);
                                    stroke: #000;
                                    stroke-width: 3;
                                    stroke-dasharray: 15, 7;
                                } -->

                            </style>
                            <image style="overflow:visible;" width="1558" height="1109" id="Capa_Opt" 
                                xlink:href="data:image/jpeg;base64,/9j/4AAQSkZJRgABAgEAhACEAAD/7AARRHVja3kAAQAEAAAAHgAA/+4AIUFkb2JlAGTAAAAAAQMA
                                EAMCAwYAADZTAABUUgAAfs7/2wCEABALCwsMCxAMDBAXDw0PFxsUEBAUGx8XFxcXFx8eFxoaGhoX
                                Hh4jJSclIx4vLzMzLy9AQEBAQEBAQEBAQEBAQEABEQ8PERMRFRISFRQRFBEUGhQWFhQaJhoaHBoa
                                JjAjHh4eHiMwKy4nJycuKzU1MDA1NUBAP0BAQEBAQEBAQEBAQP/CABEIBFUGFgMBIgACEQEDEQH/
                                xADNAAEBAAMBAQEAAAAAAAAAAAAAAQMEBQIGBwEBAQEBAQEAAAAAAAAAAAAAAAEDAgQFEAACAQID
                                BgUEAwEBAQEBAAABAgMABBESBTBAUDETFRAgYCE1QTIUNHAiBjNCIyQWEQABAgMCCAwFAwQDAQEB
                                AAABAAIRIQMxEhBAQVGi0jOzIDBQYGFxkSIycwQFcIGhchOxwULhUiMU0WKCkvAVEgACAAQEBAYD
                                AQEBAQAAAAAAAREhMQIwUJEyECBAgWBBUWFxEsEigsJicAP/2gAMAwEAAhEDEQAAAOs0XzfRvNEb
                                zRG80RvNEbzRG80RvNEbzRG80RvNEbzRLvNEbzRJvNEu80SbzRG80RvNEbzRLvNEm80RvNEbzRG8
                                0RvNEbzRG80RvNEbzRG80RvNEbzRG80RvNEbzRG80S7zRJvNEu80SbzRLvNEm80S7zRJvNEu80Sb
                                zRLvNEm80S7zRJvNEu80SbzRLvNEm80S7zRJvNEu80SbzRLvNEm80S7zRJvNEu80SbzRLvNEm80S
                                7zRJvNEu80SbzRLvNEm80S7zRJvNEu80SbzRLvNEm80S7zRJvNEu80SbzRLvNEm80S7zRJvNEu80
                                SbzRLvNEm80S7zRJvNEu80SbzRLvNEm80S9Zpu+dUY9gAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
                                AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAbY051Bn0AAAAA
                                AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
                                AAAAAAAAAAAAAABto051ZZn1QAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
                                AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABAUAAAAAAAAAABtDTnULn0AAAAAAAAAAAAAAAAAAAAAAA
                                AAAAAAAAAAAAAAAAAAAAASgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAyy48uxJ1PWKx7k8qxZ
                                PfN1Gzg748jrkAAAAAAAADaGnOpZc+gAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
                                AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABV97OOc6Xd3tr2+bDlr05JSa3N7bPv5j11uN871ePGx
                                giDrgAAAAAAADaGnOpZeOggAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
                                AAAAAAAAAAAAAAAAAAAAAAAABkx5W17Wh3fT5g9mBKJQA5PW859fN+Mvn5Pv1xrgAAAAAAABtDTn
                                UHFCUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAEBQAAAAAAAAAAAA
                                AAAAAAAPXrx7no7u9y8n0/n77k7nXO059roOb4XquX6Ok52MnO6nK+X68fjJj5BeQAAAAAANsac6
                                g4oQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACggAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
                                AAAAAALcmP3PRhx/S7v0/n/n259Tk6nzE+lp85z/ALIfJ7XfHznv6LycLP1eT871+cWTHmC8AAAA
                                AAAbY0moOKEAoAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
                                AAAAAAAAAAAAAF9+Mk9HY6Xzv0Pv8NG+YAACXFLy9H15+R7sPmzvMEAAAAAAA2xpzqDigoQAAAAA
                                AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAyY66
                                z9LnL19Leb0fo+Oyu+YCp4l9cX3o+H0XFkweXaDTIAAAAAAADbGnOoOKCkFAEAAAAAAAAAAAAAAA
                                AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAe9rS9zvY9+ffLf2
                                uJ49Gff8cJZ0tCXDXwmDnq+TvIKCAAAAAAArbHfOoOeoIAWCgAAAAAAAAAAAAAAAAAAAAAAAAAAA
                                AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAvvGNzLqbeOyWc9YMEm+AWAAADS
                                6m755XjXnrTlTqdZyR1nJHV88sdLxoLO01Xc3IePYIAAWCpQAAAAAAAAAAAAAAAAAAAAAAAAAAAA
                                AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAC7+ht8d5ceTW40101/R59mc7Dpz0
                                Mek053GmrcmpDLiOoFiWAUABFh0BZtjwegIAAAAWCpQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
                                AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABm0tbt9Dwur88qWerAKAASwABEsULAAEsOg
                                K2x4N1iAAAAAAKlCCoKQqCoKgpCoKlACCoKgqCoKgqCgIKgqCgIKgqCoKgqCoKgqCoKgqCoKQoCC
                                oKgqCoKgqCoKgqCoKlBCoKlBCoKgqCoKgqCoKgqCpQlAACCoKgqCoKgp5PWpj1vRmS687epsa/Pa
                                HfAQFAJYAAJYBYAAlh0BW2Twb0IAAAAAAAEoAAAAAAAFBAFEAAAAAAAAAAAAKRVQQAAAAAUD2Y7s
                                J1rs/hMayyKIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAUiiVr9TLz/Hn0Zh3JZV39De0eNYXvGACg
                                EsAAEsAsAASw6Arblng3oQAAAAAAAAFCAAAAAAKgKEAAAAAAAAAAAAACoAAAAAFBlu1z3PWHLHjz
                                0MuufK9dHWnWvh93HTVmzr98eVdcwAAAAAAAAAAAAAAAAAAAAAAABRFEURRFEURQjS75urHpzsKA
                                llN7R3tDPao1xCAoBLAABLALAAEsOgK25Xg3BAAAAAAAAAAlAAAAAAKEAAAAAAAAAAAAAAAAAAAA
                                C5PGeae757+uePZr3+YLAPHK7DPv5i9Hm/L9eCZsPXMV1zAAAAAAAAAAAAAAAAAAAFEVUefFmVr4
                                +puTn+Opv+NN3Ntpq3Zpo3JqSzb86ys/jGs9eSoAACWVd/n9LncawveMAFAJYAAJYBYAAlh0BW0P
                                BtUoAAAAAAAAAAEoAAABQgAAAAAAAAAAAAAAAAAAACkoZPXnYm3X3JfqeCVLKACUJwPoNLz68bBl
                                8/N9eIm2IAAAAAAAAAAAAAAAABRFDzi1NedjX8zbgOoAlBAAAlgAAFQQABLKdTl9XlZ7yy6YQAUA
                                lgAAlgFgACWHQFbQ8GwCwUAAAAAAAAASgAAFCWAAAAAAAAAAAAAAAAAAAAAFDr31eV29L0R9DxTz
                                zvnT7Xz8Z5l+3fH5z6lzujZcWSc35me/HyPfhla4wAAAAAAAAAAAABRFEURfFntrYNJt6uJrwHcS
                                wAAAgAAEsAAAIAACWDp87e1MtsRdcYAKASwAASwCwABLDoCtoeDYACoKlAAAAAAAAAFgLJbLAAAA
                                AAAAAAAAAAAAAAAAAACh177XF6Wl7Q+h4tPm94cPx30vGxd4cLulTz71+bwfKfH92Em2IAAAAAAA
                                ABRFEURfFe2th753fGi7m1jwO578nUSywFASxAAEsAAAEsAAAIAACA3ccz5a6FjXIAKASwAASwCw
                                ABLDoCtong2oAAFlAAAAAAAAAAAAlAAAAAAAAAAAAAAAAAAAAAAoPeXDk52+nvM6f0/DR3ylAAE5
                                e9wfLt5x5dbwemU1ygAAAACiALAY6y+NTHrxuedR3Nrzrq9+DqSlAgAKliAAJYAAJYAAAJYAAAQA
                                AEBl3ud1steONcgAoBLAABLALAAEsOgK2pZ4NqlAAAFgoAAAAAAAAlCwJQAAAAAAAAAAAAAAAAAA
                                AAAFg9ZsHqd5+vy/Nn0l43T9/lzPN15Xz5l949Tl+fTJiePn+vziNMkssAAAAAoIoecWrrzlwG/C
                                xQAIACgAAJYgACWAACWAAACWAAAEAABAXs8btZacWWa5gBQCWAACWAWAAJYdAVtI8GwFSgAACwUA
                                AAAAAShYAAsSgAAAAAAAAAAAAAAAAAAAAAUHvb0bz1uY2fjrzknnuMOVzcXvxhl94TTNKshSFIUg
                                onizKweK2ml56m1rY5ryL3IUgCwBAAUAABLEAASwAASwAAASwAAAgAAIC9fkdLPTQx7Wr3wFgUAl
                                gAAlgFgACWHQFbI8OyxApLKAAALBUoAAAEoWAAAABKKRYAAAAAAAAAAAAAAAAAAAAUg9+R0Xj3h6
                                GtsafXGMa4njB22cep5052vGB3zlYlZPPkWFBQACWAAAAAIACgAAJYgACWAACWAAACWAAAEAABAX
                                c08vPW3zuxx5Q74CgEsAAEsAsAASw6ArZHh2CALKCCgAAWCpQAJQsAAAAAABViAAAAAAAAAAAAAA
                                AAAAAACgDZ2NDfy18aWblbZ7ODC9OVh1CwCgAAAAAEsAAAAAQAFAAASxAAEsAAEsAAAEsAAAIAAC
                                At81e3w+7w8u4NcwoBLAABLALAAEsOgK2SeHZZYAAsolgoAAFgqUAAAAAAAAAAWFCAAAAAAAAAAA
                                AAACiKIogqvGOzP51cWk2epwejz1i0/XnbMOoAFAAAAAAAJYAAAAAgAKAAAliAAJYAAJYAAAJYAA
                                AQAAEAsp2OT0NXLXWGuQUAlgAAlgFgACWHQFbMs8OwFShLAFBLKAAABFS0AAAAAAAAAAEoAAAAAA
                                AAAAAApK816a2Lvnc8abubPnA7nvzJYFAPXkbOvs48/Rhsa+cUgAAAAAAAEsAAAAAQAFAAASxAAE
                                sAAEsAAAEsAAAIAACAqDcy6fTx1442yCgEsAAEsAsAASw6ArZlnh2AAqWCUAFIoAAAWBYKAAAAAA
                                AAABYUsgAAAAAAAAAoHkmm8+nMO+QUCLAAAK9benlz2xTa1es1i8hQAAAAAACWAAAAAIACgAAJYg
                                ACWAACWAAACWAAAEAABAAXs8bs46cUbZhQCWAACWAWAAJYdAVsDw7AAAUgpAFSkqFAAABUoAAAAA
                                AAAACrCBKWAAAAAABZVYMPfO1qeGvIdwAACLAAAKssjd1vO7l6NBZr5woAAAAAABLAAAAAEABQAA
                                EsQABLAABLAAABLAAACAAAgAL1eVv596ePb1O+Q6gCWAACWAWAAJYdAVsJfDsAAABUpKQBUCoVKA
                                AAVBQAAAAAAAAAABKAAAAKRRNXJq78BryAAAABFgAAFANnXvPezqdHS47xjXEAAAAAABLAAAAAEA
                                BQAAEsQABLAABLAAABLAAACAAAgALnwepehzOvyOOg14ASwAASwCwABLDoCs48W1SwAAABUsSgAs
                                BYKAAACwVKAAAAAAAAAAtSxFgAUDxZ61sfjfkNOQAAAAAIsAAAoBYMu7zdvHfVm9o6ZFnXIAAAAA
                                CWACskY5tXnrUbfhNd78dQLAUAABLEAASwAASwAAASwAAAgAAIABYO1xezyMdfI3yASwAASwCwAB
                                LDoCs6PHtRyWCkKAACpSWIoFgoCUAAAAoAAgKAAAAAAACFi2mvZ61Y9HAdwIAAAAAAiwAACgAFI6
                                Gti6WPo5VvnbzhQAAAABd7jrU39735dceXHjy72JqSNtqUz62b3bydX6DW3z47Jj9OIdQABLEAAS
                                wAASwAAASwAAAgAAIAADpamT3jrojfIBLAABLALAAEsOgKzDxbLBRCwUAAACwLEUAFlEsoAAABUo
                                AAAAAAAAAATU6nrCejiw6BAAAAAAAEWAAAUAAAz4ZOulzd25aaI1xCgAAFdTPu7vjF498uD31tMu
                                Vt9f168dD3uNOdHD1EcHV+ow46fPZc+j4t/fL6tvfBbGv7vKFgUliAAJYAAJYAAAJYAAAQAAEAAF
                                Zt7mdfDXjjfIBLAABLALAAEsOgKzDxbALBRCwUBKAALBUsEoBUoIVKAAALBQAAAAAAAPHjW1l8m3
                                AAAAAAAAAAEWAAAUAAAsDpc25959frcyXwNcwABl5u3vY54vY2fPe38r1Z7/AD0BKAANDfcX5b32
                                OJ8z1+uT18DvlD3+UBLEAASwAASwAAASwAAAgAAIAAB2eN1cteXM2HXMLEsAAEsAsAASw6ArNDx7
                                VLAAFSixFlAAAAFSwABYpLBUoAAAsFSgAAAhXnD0z62Kbch3yAAAAAAAAAABFgAAFAAAAWBm3+Vu
                                Y6ak6PO05DrkB0dLpYen3HQxnSzy/T8cpYAAlhQAOH3MWPfznvH7+V7+Th6XN9/lDXhLEAASwAAS
                                wAAASwAAAgAAIAABu6WfjrJqdLmqGnCWAACWAWAAJYdAVmh49VhalgACpQIqUAAAAqCpYAWBUKgo
                                AALAqUGOsk18Wk2cON3ylncCgAgAAAAAAAAACLAAAKAAAAACOlh1Othrx7nwb5BW1u6uz4/dfo+D
                                9Jv4ll9mIAAAAACY8hw9Xr8b5Xs9cXt8jq4h7POliAAJYAAJYAAAJYAAAQAAEAAAsHW5PW5OWobZ
                                JYAAJYBYAAlh0BWUePYIAqUAAqUWIqUAAAAqIoAKgssKQoADFi7mxhwtebDuAAJYBQAQAAAAAAAA
                                ABFgAAFAAAAAAMmNHb4+few246zfHoZsObx/Q3e9xO37PncLN83i24+j2vnN8z7vzGqv0m58x0rO
                                nz+X0I3tjW+ar6no/AfQGD6387+9s8/P/RfPfP8ATk5XV5eW2sPd5UsQABLAABLAAABLAAACAAAg
                                AAAOrzdvDjtrjfFLAABLALAAEsOgKyk8e1EBQRUoABUFEVKAAAABFAAsFjxXvzr+Nec2KO+ROlAA
                                AAlgFABAAAAAAAAAAEWAAAUAAAAAAA39Bzepy+rix0ZtfZy9W73fnPo/Z4OFl7DfPk836gcb31hx
                                +d9QNHj/AE44V7g4eP6BXIz9CRrfP9rjfP8ATk5fU4/GmIe3zJYgACWAACWAAACWAAAEAABCgyxi
                                b2bPrluxeLzdnZZ6cVt63qx8yzuAAJYBYAAlh0BWUnj2BKJQAFgoAFgohYKAAAACiB5rDis9OYUE
                                BQUEAAJYBQAQAAAAAAAAABFgAAFAAAAAAAAXr8fJn1v+82Ly+59L812NvH0ie/zUAAAAAhfPrHHJ
                                0l+R7nE6nK9HAenFLEAASwAASwAAASwAAAgAAGxk6Hn7w5a82gSgAPHsmjpdvx6OOI29X08QdRLA
                                LAAEsOgKyDx7AVLAAAVURQALBUosS0IAAAY8PczYI25CwAAAKCAAEsAoAIAAAAAAAAAAiwAACgAA
                                AAAAAAM/Q5Gzhv0PU8+bT6b3xez9Pw0acgAJRKhTyOZtcHybX2xfP9mjq2fS8YdRLEAASwAASwAA
                                ASwAAAgAG3q9nHu08eoAQAFAAMWVXO1+zNeOH57epvzz3vxtwFgCWHQFZB5NggBYKIAAWCpQACpY
                                AqUGGveHzN+A6gUEAAABQQAAlgFABAAAAAAAAAAEAAAFAAAAAAAAABHR2+L1/L6pv6+HPj6a/P8A
                                Z+h5th5u3FSkqFnnye9XV5nk29V6+f65yM2n7MQ9GICWIAAlgAAlgAAAlgAABAWKZetq7Xi2DLqK
                                AgAKCAAAoDxodJ3zwHV5ftyg05Sw6ArIjybVLAACwUQAABUoABUsDxTAb8B1IAKCAAAAoIAASwCg
                                AgAAAAAAAAACAAACgAAAAAAAAAGXEl7uTg9Tyb5fG1Mesu5yce+X0Pv5m68fSYuAjq6OHJ59cWT3
                                4y1ujh1fViHpxCgEsQABLAABLAAABLAAACAufD1MustPFsEEoAAAAAAAAFNbZWcLz1uT78Us056A
                                rJK8m0EUAACwVBRAUEVBQCU17524sOoAAFBAAAAUEAAJYBQAQAAAAAAAAABAAABQAAAAAAAAAABE
                                b/V+b3vNt1rqbPn1vn3Ob4vqSzDqc/05b+l4enAOoFAAJYgACWAACWAAACWAAAErPGbel8O4Z0AA
                                AAAAAAAAAKnI6+rtxylnux6ArIPHrFEC1KAAAVLAAAUsRcPrFrzBpyAAAFBAAAAUEAAJYBQAQAAA
                                AAAAAABAAABQAAAAAAAAAACWA9Ru9bidLxejZlmGkPFvFw7Pj6HjwvfjuBQAACEHtHiZBjeleXpX
                                l6Hl6Hl7R4llgCWAAAHrq4Nvyahh2AAEAAAAAAAABUUPPonB87Wr9LDoDuZJZ5NqlhALCoKAACoK
                                IARi7nka8QUAAAFBAAAAUEAAJYBQAQAAAAAAAAABAAABQAAAAAAAAAACWF3tHqefv168vLpuvHvn
                                WYc2qnkdZzxkWa2LeaTkzoc/05hpHvJ1se9bLoafN7TjSu04o7TijtOMOzOOOw4w7LjDt6/M2Ob4
                                w9jxXJZsO+QWANnX6mXWWni2CAABKogAAAAASrAUAgK0ub2uL7sd8b8ZIeTYCoihIVZYqiAAKgp5
                                Tzis34WKAAAACggAAAKCAAEsAoAIAAAAAAAAAAgAAAoAAAAAAAAAABLD11Od0vJpKYd5s+puTTxq
                                bGu5ByFBHjl9f16OePu9HV6ublY/GmYa8gkURYAAJYAANrVS9jxytvz7YsHc1upzHubZZenjy+LU
                                M+hCgIKBFACCgAAAllAgAK88PucL15b49WeSWeTYAIWUBIsUCgAAYfePXgjqBQAAAAUEAAABQQAA
                                lgFABAAAAAAAAAAEAAAFAAAAAAAAAAAJZG3t4c/h1Djpt6maXzjEAAGLqY8OCe3L14ruRVJYAgCW
                                AACWAAAAh629Nz12cevu+PYTNQAASwUAAAAAEoBBKBQQFeeF3eF6st8erPJDy7AABCwUIlLAVKPN
                                xdSDXiCgAAAAAoIAAACggABLAKACAAAAAAAAAAIAAAKAAAAAAAAAAAFjpe5fn7BzQAABKvP6HM34
                                xj15gAJYgACWAACWAAACWF2295tFPNoAEBSX1ZcvZ52/GhDz6AJQEBQAAAQFAAeeF3eF6st8erPJ
                                LPLsAAAAEUIlLAecfrztwlnUAAAAAACggAAAKCAAEsAoAIAAAAAAAAAAgAAAoAAAAAAAAAABlxZu
                                HQS+DYFCAAoBobvN9GfgergABLEAASwAASwAAASje3NLd8Ozpc36XXniav03zfLz689fjrxo/ScL
                                fNsZt7Wc7xsJOdMubHTzOvqb56Ol9FeevmOnz/pMrxMXT0lzuvq+jPR1uxscX5V2OP5NW3q/Sa88
                                7nfT8nTnljx7AeeF3eF6st8evPJLPJsAAAAAsRUolJi8+vO/CWUAAAAAAFBAAAAUEAAJYBQAQAAA
                                AAAAAABAAABQAAAAAAAAAAQhZn3+Xv8Am1zJfN0CgS4tbTndw6XjfjLiNeQ6AAJYgACWAACWAAAA
                                z83dzR4Nr9N8x9P688vL2drfP5z6LDi5u5wu7wubvbepu68cqbsx04vS0Ohl10vl/qtP0Z83u451
                                OL3PmvpcutLS3dPjrufPfQ/O986/Y4/Rw07HzX03zm3GbuauXXnV3OX2E+WnQ5/g3Djrzwu7w/Vl
                                vD15+x5NgAAAAAALAwjbNLKAAAAAACggAAAKCAAEsAoAIAAAAAAAAAAgAAAoAAAAAAAAAAnuPOba
                                9YbZNPX8dT3u8+9cdW6Gz5u80x6p4xHsyCwFAAASxAAEsAAEsAAAHU1d/wAullebSfT/ADP0fsy0
                                c+voH0fz+XW5fT8HucLXnf2tPobc/PvoGXXznRyYs+uryuj8zpz9TyMu91PmPqPnPocutTT29Ne7
                                xey3z4nY9a0uXhXex76njx85rx9N6+W3+Oul879T89ncEXy6+eH2+H6st8evP2s8mwAAAAAACXzZ
                                jG3CWAAAAAAAUEAAABQQAAlgFABAAAAAAAAAAEAAAFAAAAAAAABB66WfevsYNLjvNgNsajpUCwLA
                                CAAoAACWIAAlgAAlgAAzYenl1mp4tgFgAJSwoiSgBQFhAAAAUCwAAQRcHH39D34dAbc5JZ5NgAAA
                                AAAh494+55GnCWUAAAAAAFBAAAAUEAAJYBQAQAAAAAAAAABAAABQAAAAAAACzp59+9L1p8dFb5JY
                                AAAAAgAKAAAliAAJYAAJYAAe+ty+p5NaPP2AAFBAAUEAAAABQAAQFBADH75uvOr4s9+PQHUySzyb
                                AAAAABAUx5MXfMHfKWUAAAAAAFBAAAAUEAAJYBQAQAAAAAAAAABAAABQAAAAAAAzc3Z8+tDLQNsg
                                pLAAAAAEABQAAEsQABLAABLAADL1OT1fLp6Hm0AAAAAAAAAAACpQAACBCppac+uZZ7sks756ArJL
                                PJsAAANiXBm6PrLvS9ZvPLD42fUvN1+5q6zmPXn1edKqAAAAAACggAAAKCAAEsAoAIAAAAAAAAAA
                                gAAAoAAAAAAB1efv+fXm+TfIKASwAAAABAAUAABLEAASwAASwAAb2j646698+vBqEoAAAAAAAAAA
                                AAAUAMXUx8r1492IacpYdAVklnk2AALn5697vhl15zdXa9WHNzbd9GelrdYfNz6Tl+TfnczpXDbj
                                smP2+aKsgAAAAAoIAAACggABLAKACAAAAAAAAAAIAAAKAAAAACDcmffvxtcvjqD0ZAAJYAAAAAgA
                                KAAAliAAJYAAJYAAAbu7pbnh2oy6AAAAACgAgAAAAKEKY7LymH25QbcAJYdAVklnk2CAPe9r5s98
                                vf19z2+OjfOKAEo53J+m4fg9GjzOxzuNMCPVgAAAAAFBAAAAUEAAJYBQAQAAAAAAAAABAAABQAAA
                                ADNi62XbV1PPN6fMNOQ75AASwAAAABAAUAABLEAASwAASwAAA2uhyer49aMOwAAAAqUAAgAAAiqI
                                Rp6TZ5eGevINuAAEsOgKyDyahBPTra2Nfqc69dH0vBXmlvge2Or7Y9Y3NXZ8cPnNfaxfL9/Mle/y
                                QAAAAAUEAAABQQAAlgFABAAAAAAAAAAEAAAFAAAADLGz52+TjpBvmAAAAlgAAAACAAoAACWIAAlg
                                AAlgAAA6fM2M++jZfDqAEAAAAAABQAIlKTV659cu+fdkld8wUAAlh0BWQeTUIevNne12OP171w83
                                R8e/x8fe2PBot/IcHN1tyOBsdjWr5ztbeaOdhy4vk+/lk+h5AAAAAAoIAAACggABLAKACAAAAAAA
                                AAAIAAAKAAACHW1vWGmriN8woAAABLAAAAAEABQAAEsQABLAABLAAAADp5+X0vFtaZdBAAAAAUER
                                YCks1u5tYudg342tQ9OYWAsFgACWHQFZJZ5NaJVhdrf5+bPb6iefX0/ALZAFADBm5ufXJx5tP5nt
                                1JZ7/KAAAAAFBAAAAUEAAJYBQAQAAAAAAAAABAAABQAADJ56mXblZcNgacgAAAAJYAAAAAgAKAAA
                                liAAJYAAJYAAAJYXf0PfHXXS+DUJQAAAoAhLL5r1h19H0cZcJ6c4KBAUCCwABLDoCsks8mtEsUZN
                                vQ3M9ul2Pmep6PP0rL7MIoAl844cDLh+b65y9jU0kG+QAAAAAUEAAABQQAAlgFABAAAAAAAAAAEA
                                AALUspLdzi6W3uamWm3pa3nvkNeAAAAAAEsAAAAAQAFAAASxAAEsAAEsAAAEsFg6G1yet4taMuwg
                                KCAAo86XfOxz8fn15hryAlgAABBYAAlh0BWSV5NQlAe/Bem5/Qw0z9TkYdc/o785k9GXf88HFz11
                                uZ59+XbzredLuIerCCgAAAAAoIAAACggABLAKACAAAAAAAAAAIAAUi73N0t3b0cu9zU053LDTgKA
                                AAAAAASwAAAABAAUAABLEAASwAASwAAASwAdHnZOOutceTw7ByRaAERh19P08ZMNnozLKACksAAA
                                ILAAEsOgKyw8mwQAIWzxW1ucZXfj14vR4nrT6k1MM9vnDTgCAAAAAACggAAAKCAAEsAoAIAAAAAA
                                AAAAgD1u83R3dvUz73NTS89T15NeAAAAAAAAAAEsAAAAAQAFAAASxAAEsAAEsAAAEsAAMvQ5Vz67
                                TmbPl02b49cW+dXT253tPDPRwsunMEAACVYAIAIoWAAJYdAVkHj2AAgLjyYu+fI15621y+r4PVOP
                                1uHrx5HqxBAIAAAAAAKCAAAAoIAASwCgAgAAAACVCliM+zzpz29pXmPW7Gju7Wlx1vaWnOubDXkI
                                CgAAAAAAAAAEsAAAAAQAFAAASxAAEsAAEsAAAEsAAACC2QASwAAACkoiwBAVLALAAEsOgKyw8ewA
                                ADDlxacwac++78/2fNt45O5p65hpyABAAAAAABQQAAAQVBQAJYAAD3L4bGXi6Toue+dOn6TlOqOV
                                en4XRy+vHXWx70PMm1ixO89ve41477ehpLyRpxYAUAAAAAAAAAAAAlgAAAACAAoAACWIAAlgAAlg
                                AAAlgAABAAAQAAAAUAlgAAlgFgACWHQFZZZ49gAATx4vnbkOo3tG82+Xu02PWXo050MVz1J6muMU
                                RRFEUQQFHrLLgbubPrmOtZeTep5Od63fJqNsak24ajbGpdsavrY8rjyePEbPvn4zqY+es2sWJpzY
                                dcgAAAAAAAQAAAUAAAAAAAAAAAlgAAAACAAoAACWIAAlgAAlgAAAlgAABAAAQAAAAUAlgAAlgFgA
                                CWHQFZZZ49gAEvjqeCbcAABAL629Jz30ceD1npluGucrGly3FbMjGjN61om45fjqdXFz3U28OJ1z
                                YdSUJQCiWAAEsAAAAAAAAAAAAAIAAAKAAAAAAAAAAASwAAAABAAUAABLAEASwAASwAAASwAAAgAA
                                IAAAAKASwAASwCwABLDoCssPJsEAMRpz5GnIAKCAAAAAAAAQAAAAAAAAACAAAAAAAAAAABAAAAAA
                                AAAAAAAAAAAQAAAAAAAAAACAFgCAAABAAAAAQAEBYAEoQFBABSEABQEAACQKFnQFf//aAAgBAgAB
                                BQAyvXVkrqyV1ZK6sldWSurJXVkrqyV1ZK6sldWSurJXVkrqSV1ZK6sldWSurJXVkrqyV1ZK6sld
                                WSurJXVkrqyV1ZK6sldWSurJXVkrqyV1ZK6sldWSurJXVkrqyV1ZK6sldWSurJXVkrqyV1ZK6sld
                                WSurJXVkrqyV1ZK6sldWSurJXVkrqyV1ZK6sldWSurJXVkrqyV1ZK6sldWSurJXVkrqyV1ZK6sld
                                WSurJXVkrqyV1ZK6sldWSurJXVkrqyV1ZK6sldWSurJXVkrqyV1ZK6sldWSurJXVkrqyV1ZK6sld
                                WSurJXUfKefqD/yefqD/AMnn6g/8nn6QPtRasrGsj1iwoNjs/wDyefpAAsYrYCgoFYU8COJYTGVb
                                HZf+Tz9HmraLyyoHUgq+x/8AJ5+jzUfsuNY1j43YwdT7bD/yefo/6oP64eGHjd/evLYf+Tz9Hmrd
                                wU8jHASNncbH/wAnn6PNRyZGRww8CQKuLgGkGy/8nn6QIxpWZCt2wo3pp53elWsNl/5PP0iRTD3A
                                9wo8qoWoQV0VroLXQWugtCFayLgefpJxSj3CE0IaESV01rprQAHn+h5+kukWFvHtfoefpAVHHh4R
                                4YbT6HnwnEVmFZhXtwMKTSRhfGLltPoefCC1KjNQtXNNayCiGWlYHgKIWKqAPGLltPoefByahgzl
                                VCjwkiVxJGY2U47vlahE1CGuktdJa6S10krprWVfNFy2n0PPg4GZlUKPJcxhkT2O6LETSoBt4tr9
                                Dz4PbjGSsaxrHwcYqfZ9xAJoRMaWNV3FPv2n0PPg9uwEnhhWHg5wXHF9qATQiY0IhQRRXtufKXaf
                                Q8+D44GN86+S6lAWMe+xAJoQ10loRqKwA3d/aTafQ8+DsKilMZSZGGNEgVLcqtMxdlGA2CRk0ABv
                                c3PafQ8+EFawIoTuAZXNBSaAA82U102oQmljA32Yf0U4rs/oefCiMCg8FQmhEK6a1lWsorDgMgxS
                                I4ps/oefCnHvFESFjUcHPKHls/oefCAjGliqaIYIMF4RH7SbP6HnwMDGhE1CIUI1FYDxIxpCQeEN
                                7S7P6HnwLD3RMo87rStiODy+zbP6HgQiY0qAbI/0bg8w/opxXZfQ8BjTaMMRGx4O/usJxTZfQ89+
                                AJpIwNtIpxVgRsSwFdRK6iViDvUJwOy+h576qliqgbgcY287uFp5mNFiawNYGgzCo7k0rBhu6+0u
                                y+h31ULUAANwIBCMVPleQLTMWMcDvS2qChDGKMEZqS0BqSJlqOVkKsGG7SDCXZfQ74kdYbnImYRv
                                j5GbAO2Jt4MaAAHkeNXE0JQwSkNu0/IHEbH6HeghNLGBu0ikFGDDwmaokzuowHmmjDqwwML5k3WT
                                7Ijimx+h57sFJoRGgijeWBjYMGFSnFrRfbYXKZXtG3Y8oT7bH6HdMKEbGhGBQ3sjEKem30fnbf8A
                                PGsaxrGsaxrGgavPvtfu3ZPaTY/TcgpNCKgoG/ugYRuVMnO1OKYVhWFYVhWFYVhV42LWo/tuZYCj
                                Ogr8kV1f/ositsfpuIGNAYeI3+RMQcTVs+DedjgJmzNbLgu5STYUWJ8gJBScildT5/puCxk0FA4J
                                LHQJUxSB181zNgACzIuVdxncqPOGIpbhhSTqaBB8n02yqSVQDg8seBSUoYp1ceJYCprkAFixgiyj
                                cpnzNsllZTHKGHh9NqBiVUAcHIBEkJFBiCty60LyjeGnuHahi1RQYbnM+VTtFYqY3zLX02gGNKuH
                                C5oaIA8Y4AQsarubMFDuWO1gfBq+m0ReGEgCXKTQ5q6AYg+UkVnWs61mWsRWIrEVmFYjzTSYnbA4
                                FDiv02arieGTt7UaHgGYUJmFRvmFSS4ERFq/HSvx1r8da/GSvxkr8ZK/GSui60JyCrA+MzZQdwtz
                                in02QGNAYDhlwfejQ8kUmUGSRqjiC7JlU00LKUnNZhhK+Y+GHjhWFYbG25fTZIuHDpTi3lVSxSMK
                                MNqyKwbBTuNty+mxUYnhp5Nz8tuPfbTSkeUDGmiVVPlw89ty+mxAwHDZMcp5+W3U7eb77aNXqeLI
                                Yo87XESIscMfTK29KiNK0MC09shW3iVi0aidoYVroRNUkZQ20WczwKq+Fty+mxHD5lUUQR4rEzBY
                                AKCgbZ2yhjibOnUSLGgiW7/5x4dEpb1B/wBp4TJSL0o7Ygs/7N5ytic94KjUpFHmZHXK1W3L6HYA
                                cOJADSljHCAXjDU0LCliYkDAbeeTHwtCATLkmlmzvckGOMgxfjRUiqk08pUvlljtcAW/YkRZKVYo
                                6ziWWa4EdR3WZroAmrbl9DsF58MkkCUI2chQBucz5VJx8MTWPhiaxNYmsTWJrE1iaxNYmsTWNH38
                                MfCBcE+mwTnwuV8oij3a4PvucUeYgYD6bBOFs2URoWO7XAOO5JGzmNMor6eQkCjKaLtWdqjnAoEH
                                hUxJcDAbtImZSMNxVcTHGFHh9PEnADFzHaChEgowRmpbUiklKEEEcH6yYxjNJvEo/vtwCTFFlHj9
                                PFjibeIIvkuoat34PK+ULAuVECjeJxg22SMsY4gvl+njGuaTxx8HGZY/6ycFJAEYLtvUyZlw2qoW
                                MaZR5fofA8rf/r44eHKucvBXJdgABvcqZW2SozUlvSoqjzfQ+KnK49xWHjM+VIhmk4JLIFES5V3y
                                RcynYAY1Hb0FC7H6Hxdat5/bxLAC4mzmBMo4EzqtZ3crEAd+mTBvMkbMUiC7P6HxPvTKRUdy60Lt
                                aa8FPM7mKE48BZ1Ws0j0sKg8AlTMpGB8QMajgoADafQ+RRiWgUgj3RMzLEi8BZ1Ws0j0sIHBHiDU
                                0LCspFJAxpIkXbfQ+ROdTLg9uu+4ijKgpXVqaRVrM70sQHCMBuH0PkjHhcrUS4JumNFgK6qCuuDX
                                Uaus1dVq/u1dOgi00IJWIDjX0PPxUYCnUMD7DO9CQY+fMtGVBXWFdR6zS1mmrNNWaWs0tZpqwmNd
                                FzQgWhGorAeOPH/oefgoxPlZAayyCiJawlrCWsstZJa6RNCFKCKK9vR30PPwTn6d+n//2gAIAQMA
                                AQUAyrWVayrWVayrWVayrWVayrWVayrWVayrWVayrWVayrWVayrWVayrWVayrWVayrWVayrWVayr
                                WVayrWVayrWVayrWVayrWVayrWVayrWVayrWVayrWVayrWVayrWVayrWVayrWVayrWVayrWVayrW
                                VayrWVayrWVayrWVayrWVayrWVayrWVayrWVayrWVayrWVayrWVayrWVayrWVayrWVayrWVayrWV
                                ayrWVayrWVayrWVayrWUY+ofr6h+vpTA7X6j0iBjWUCsVFZ1rBTTIRs/qPSAGJbBQ8hNYnwVyKjk
                                zB1w2X1HpCMYCaTE+RWIIIdDsfr6QPtG3ucKwrDxgPs/PYfX0g3/ADJ98fDHxt+T/dsPr9PR6HFJ
                                VIbyAYmNcqk4nYfX0gjYGVcwZSPEDGoozTn22P19Iq1MqtRhFCCliAouBROy+o9JY0p9voWJ8pOF
                                Z6zms5rOazmsxrMfSiGmOAJFF6zGsxrMfTgfAyt6gLeEgIPF8DWU0VNe/AyaLY+A53H3cWC0zha6
                                woTCgysGUjgJOFE4+I5z/dxVFqWTCiSfFWK1G+YOMDuuNYiswrPWY1mNZjWY1mNYnyjncfdxQc5T
                                lQnHyxNgXGK7oWok7Yc5+Kxj+1yfHCsPAc1903HGswrEncZDinFEODXI9vDGsfBR7r7R7XGs1Zqx
                                O6H3i4q/9kZcD5IkJLnAbHGi1ZjWY7wnvHxVHwqRA1MhHhgaSImlAQMcTsC1Y73Fy4srYV7GuitC
                                MCiyiixPmxFZhWaiTvsR/s3PiwoHEOfDEUWrE1iaxPAk9mkGDcXQ+0je5JPBwfeXnxXEUWqN/dji
                                eEP7pxHMKzGsTWPiOciKV4QBjHxAnYQvTplbg8fuOHFhROyH/wBE4PGcGb2PDGO0jbK0ycHXnKP7
                                cKxonHbROCHQqdjgayNWRqwO9Sj24SThROO4DCRfOqk0IwK9hWas4r+pp4aKkbwfePhBOFY7irFT
                                IoYeVELVgFDSgUZCaztWdqWU0kmNMgYEEHdk904OW3RHymRMPIq4nAKsklE4+UEiopMalQEbtDzY
                                YHgmNE7tG2IZSPGBPaZ8KJx86NgUOKyLlbdYzg0gwbgONFqJJ3lSGBBBpBhFKcTsIW9rgbsOcvAM
                                aJ3wHAkZx9W/5yc8KwrCsKw8MPCGp/t3Z/ePfS1Ynf1YqXUGj7xyD3xrGsaxrGsax8IBU59tzwoI
                                a6ZoD+hXDfCeBI2BXApOuwHOFcBOcTuSrQA8mFFaIO8E1jwSCTAyrjTLgfNEmJ9lVjidxQY7DAVk
                                FFKIw3MnCsTweOTMHTGmQjyYGo4yaVQolkx3NB7bIqDTLhuROPCASKWQGmUGjCKMFCClhFYKtSS4
                                7moxO0IxphgduTjwtJKBx8MKeXAlydzAxpRgNq4x27HhgpGPgT7NiTh5cKytWU1lNZTWU1lNZT50
                                XbmiPfaE4cNQUKFMfasBWUUww8FTGs4FdZq6zV1mrrNXWaus1dZq6imjFiCCPFRidwfntCeGp4Kf
                                Zj5ChasirTOTsgxFCRSGiFYHFRhuMnPZk8OXlQNHxJwosax2quVrHNuUmzJ4eOXlfbovmDEnaSbM
                                nhw5+Zzt15SMRSNjTNgI3JLO2IL0SQodzQc4uxADHKHY1nYUpxqRsKRyT4ScZxpAx8hYCi9Y7YDG
                                hUtKcpZs1R82P9wz0/2RsFonM0nIfZFzk5RUxxY4AqcRUnPi4BNLGFppSaDUGFFhRPvt0HhLQTFQ
                                mAQYEg5s7UxJRExABVpPcD7FJWiWagCqqmNGLAR4+EnPYnlwxIy1F1UEknc1GJ8vtWArAeOGyc++
                                xblwtFzF33ZBujHAHZNwsDEu2A3ZOW5FsKZsfOBjQSsFFAKaeKiMOFRjBScd3U4EHcSaY4nzKpJb
                                BaaY0XY0HYUk3uVVwRgeD9NsHOCbwvLbk0zbADIkj5j5IZPeZeDxrjRlbFmzHeEPttiwFFidgoxN
                                ycF8q+xP9o+CgYljlG9K2B2pOFMcTsI8M115vqv/AD4Kv9QTjvinEbIkCi9Ek7IHAzrip9vKi4lj
                                lTgiLiXbE74p99iXonHao2Kyx++HiPeoY8KlfHgYUmsFFF9/Q4+cthTNjtwcCCGp4ga6JxEBpIgt
                                PJ7HgIUmsFWi5PAVOB8peicdxxwoSHEcmbAGRjwEKTWCrRc8EVsKDCsaLiixO5t4Rn+sp30AmhE5
                                pkZaCE1gq0XJ4RjureEJpzi264GhGxoRVkFdMV01odJaM1Z2NLIcC542PIfBTgVAJEUWDQHDDz5T
                                QjY106yJWEdYR1hHWEdYR1hHWMYrqKKMpoux9DnzJKy0XjNZoqxjrGOsyVmSjIK6jUWJ9Jn0/wD/
                                2gAIAQEAAQUA71qdd61Ou9anXetTrvWp13rU671qdd61Ou9anXetTrvWp13rU671qdd61Ou9anXe
                                tTrvWp13rU671qdd61Ou9anXetTrvWp13rU671qdd61Ou9anXetTrvWp13rU671qdd61Ou9anXet
                                TrvWp13rU671qdd61Ou9anXetTrvWp13rU671qdd61Ou9anXetTrvWp13rU671qdd61Ou9anXetT
                                rvWp13rU671qdd61Ou9anXetTrvWp13rU671qdd61Ou9anXetTrvWp13rU671qdd61Ou9anXetTr
                                vWp13rU671qdd61Ou9anXetTrvWp13rU671qdd61Ou9anXetTrvWp13rU671qdd61Ou9anXetTrv
                                Wp13rU671qdd61Ou9anXetTrvWp13rU671qdd61Ou9anXetTrvWp13rU671qdd61Ou9anXetTrvW
                                p13rU671qdd61Ou9anXetTrvWp13rU671qdd61Ou9anXetTrvWp13rU671qdd61Ou9anXetTrvWp
                                13rU671qdd61Ou9anXetTrvWp13rU671qdd61Ou9anXetTrvWp13rU671qdd61Ou9anXetTrvWp1
                                3rU671qdd61Ou9anXetTrvWp13rU671qdd61Ou9anXetTrvWp13rU671qdd61Ou9anXetTrvWp13
                                rU671qdd61Ou9anXetTrvWp13rU671qdd61Ou9anXetTrvWp13rU671qdd61Ou9anXetTrvWp13r
                                U671qdd61Ou9anXetTrvWp13rU671qdd61Ou9anXetTrvWp13rU671qdd61OoNVv3tv5Ctv0/wCQ
                                rb9P+Qrb9P8AkK2/T/kK2/T/AJCtv0x/E2FYGsDWG8236f8AEgUmlt3NLbJXSjFdNKMSENbinhZa
                                II3a2/T/AIjjizFIkQNMi0Z3YrHdPX4t7RjuUoTGg6tTxghkK7rbfp/xFGmJxVFLvK1tpBaorS3i
                                GGFe9FVNTWFtKLnSpYiHKk4MHTDdLb9P+IVGJXBQoaaWzsooE8+oWCSoCVJXMGGB3K2/T/iFBRJN
                                adZrEmx1SywpDiJF3O2/T/iAUPYaZbiabDDZOodbmEwTn3Dc9xtv0/4gXnWlRZLbZ6zFS8nGB3G2
                                /T/iAfcOcms2GnCDXdOuIl/0+ks11qdlawWOu6ffSX2u6fYuuv6a1tD/AKTSpnuv9Dp9rMuv6a1v
                                Z69YXstx/pNMt5bq5t7ywXlJuVt+n/EA5rz16Tp6lBa3EjpOgsLqB7e51lrNtS078UavdXlpPp7y
                                C6XUEkTWJ7VZ9Lsb6a3k0RtLW00DMbNeUm5W36f8QDnUdhZ3dTRJNF2XTuhJpdlLb2mj6faPd6RY
                                Xjro2nLBJo2nyLNoOmzSdg0vp2ejWFk9xoemzyXscNtZJykPvuNt+n/EA8NGmzQ7I1q02Lj2DnE7
                                jbfp/wAQqMRZXBtp1YMNjNKI0eQzSv7A7lbfp/xChojEaZfe2OwZgBqF4ZnX2EjY7nbfp/xCDUZB
                                BVkay1NXAYHy408iqLzUs1KppmABOJ3K2/T/AIiRipRg4eKoL64tzFq0D0t3C1ddae9gQS6tEKmu
                                ZrgqgFOwUMxO6W36f8Ro5UpOpBVXpoAa6DCjC9CE10gK/qtSSiixJ3S2/T/iTE0srLUEzPWPjNKV
                                Jcts8RRkQUbiEV+Vb1+Vb1+TBX5NvX5VvX5dvRvrcUdQhFHUVqzvi1h/E1ucJPBqY5jsScBc3jBm
                                lkascdnY/G/xMDgVOZalbKniXVae9hWjqAruFdwruFHUHqS5lk21j8b/ABMKt2DJVy1M6LUl7GtP
                                dzNRZm3Wx+N/ie2bBz7C7vXeQsW3ix+N/iaa6SOheS9S6uFWzPPeLH43+Jbm6AGPvUtznsN5sfjf
                                4jZlUT3bP4ipLYLDvNj8b/EUkqxiadpT4jnP7Wm82PxvpTClhdqFo1fiNX4rUYJBRQj0PPdLGHdn
                                PkHOf9TebH430nHAzUkKLTSItG5Wvya/IoTI1EIweCmUj0GTgJ7vHzjnP+pvNj8b6SihzUSkYM7O
                                YdOup6j0RaGjWtNo1uam0aVQ0c8DCQGnjDBlKn0ASALi6LbAc5/1N5sfjfSMaY1nCLBBLdyW1jDb
                                jyyRRyreaUUCuRTKHDLgeJF0FNcwrRvUr81a/NSvzUr81K/OWje0b1qN7LRu5jRuJjTSO2xHOb9T
                                ebH430goxpcFFvC1zNb28dumw1LT/ZGqVcRw0yIKa5iFNerTXchpppGokndhzlANlvNj8b6QQUST
                                WnWogh2JAIv7c29wPcOMDwlmVQ93TSyNvg5kZrTebH430eKWrCPq3Wz1WIPbJylHCZrgJTOznfRz
                                hGa2PPeLH430eKHtWix4t4E4UJI2IZTQljJLKtEqACCPCdQ8QGVpPt4M9xGlSXDvwGwJaFhg28WP
                                xvo8UK0YDo+H+g/LNhpUltHc2bXjx6Y0EV5/ob57m/fUGuv85oDE6V4N7iYYXEn28C9qaWNae7FP
                                PI/A9Mb3uRhPvFj8b6QHLRWHS8NSsTfQW3+ZCzw/5oRrH/lz1bb/ADFmjD/LqqWv+bktpfBvYSEN
                                NJ9u/FlWmuIhTXgo3UhppHbg2mthNfrlud4sfjfR/wBF+3R5cs+zupRHCuJMvLe2mjSmuxTXErUW
                                J4VZtluNVXCXeLH430gtW79KdGDrsSa1aYBF5Sn33VpEWjdRCvy0o3i0btqaZ3rHhtucJtXX+u8W
                                PxvpBT74e2l3mK7DGp5liSaV7iU+yscTuck6JT3EjcUQ4PqIz2e8WPxvpAHAocQQyGxv1nGPnllS
                                Nby8a6ZRgJX3NmVRLcs3Fvq3/wBdN3ix+N9IoxBTBg0bobbVitRXEUgDCswrOtNIBVxqMUVT3E1w
                                yphUkmFE47lLcKlPIzni9iBJYMMDu9j8b6SjkKlHDh4Q1CN4zHfXkdd1uhTandtTy3E1LHWAUPN7
                                k47jJOiVJcO/GtHfGK4XLPu9j8b6TVypS6pXRwVBrprXTUUcAGmVaaZno7PEUZIxRuIhRukFG7NG
                                5kppZGonjejH/wCupLlvN3sfjfSqOVYHEeFw2HlJAo3EYo3Yo3b1+TLX5MtG4lNGVzWd6JJ9BaW+
                                W61lMs+72PxvpUVC2aOjylbF6NPKiU90xoszei7RstxrK4x7vY/G+lrVhjUhwUn3e4Rae5dqJJ9G
                                qcGvgJNO3ex+N9LRtlf6X0/SR5Xc+/pCE9XTN3sfjfSrMq090BVvJ1YdRkzT+kdJbPbTLlk3ax+N
                                9I4gUZY1prpBTXLtRYnw02cCORy7+kdGb/6agmS63ax+N9GF1FG4jFG6WjdPRnlNFmPmVipaFShH
                                pHTHyXWsR4T7tY/G+iWdUDXVNNI1Yk7S3kxE8WVvSFu2SbWFzRbtY/G+iJJBGHdpDtlYqcBLEQVP
                                o8HA3v8A9NP3ax+N9DswUSOXbcLeXK1zF7ekLU9XTSCDutj8b6GeVEqSUudyt5VkSaIxv6P0lwYp
                                1yzbrY/G7DHjZIAe5UU08jUSTukblGdRNEQVPo7SHwn1JMt1utj8b6DmlLHd7WUhrqIej7F8lzrK
                                4Putj8b6CnmyjeFYqYmWaOaIxt6NibJJqq57fdbH4368fJAEtwTWO9QTGNpUWWJgVPo1z19NPPdL
                                H4368eeVUEkrOd8tLjKbuAMvuNzwJpbaZ6Gn3NduuK7fPTWc600brWHE9ObPZSDB90sfjTz47LOF
                                pmLHfQSKt5llW6g6b7hFbySVBpYqO0hQBVFHCvavaiKaNGEthC4msZI6IIPENJer1Mlzulj8aefH
                                J5vE79G5R/6XEUiFG2oBJtLEuUiVBiBTTKKafGjKxou1Z2oSsCJqzBhzq4tEkEsLxtw/TWy3Oqph
                                Pulj8aefGiQBLOW4HbTmJrqESoQQdmqs7WlmqAYASTBaMjsYrWaYxaNIaXSIFoaXa02k2xqTRkwl
                                0u4joh0KymgwNSxJItzaPCeHWr5LjV1xTdLH408+Mu6oJZWc8Es7j3vrYDZqpLWlssYxC1JMagt5
                                bh7bS4oqVQo8uANTWsMy3WkyxgYqVbEModbq2MTcNU4NdjqWG6WPxp4zJKqB3LngoOBtJ1lS6tjE
                                +xsrcAY5Q741ZWLXDRRJCuyvtOSZSGRlbGpIxIs8DQvw21/+tgwwbc7H408+LyzhaJLHg6OyNGy3
                                UM8LQv57aIvIihVdjVjZtcyRxrGu0v7ATr7qwOIvIepGeG6S4Md0gSfc7H408/MOHu6qJLgtwu1u
                                DC9zAs8RBB81pHlUmlUu1lbrbw7bU7Qwyo1exq5i6UvDNLfLNqS5bjc7H408+Js6rT3ONFiTwyyu
                                shvbUMPLCuZ0GUGtIts77e4iWaFlMcgrUI80XDLN8lxqyDdLH408+IEgU06LTzu1Ek8QsrkOL616
                                Z8louPh7k2cIhg3DVYDHcKadcyMMDwtTg17hJZ7nY/Gnnw0kU0yLTXDGmdm4mrFWtp0uY7q2aB/G
                                z+01Zx9S5w9ts9zbxvWrR5rdTXMXQyzcMiHWsD7HcrH408+Fs6rTXDGi7NxeGVonPTuoJozFJ4W/
                                2VpIxuqm/wBDJFquta22mPf/AOiktG1bVm0+2n/0kkNmdYQ6VH/o3bTrPVzcaVo+t9xW6/1hSaD/
                                AESzWOi6wNSXWdeGnTC6H4OkXtvc6tV6M1qtCr4YT8M0s4wTKFk3Kx+NPPhBIFPOoppnajieNWV0
                                YWu7ZLiNlKmrf7K0Yf8A6K1UyDXNUn1CV9d9n/0s8UmnagMNKEtzawQAnQNMmjH+Y08yrpP+XtrG
                                WG9t9Pi0fTbyawuLyae6l1u/MOigx2xsblbq1uv11oVf/scM0t8Jb9CtzuVj8aefBmkRaa4Josx4
                                9YXeBv7IOuBFW32Hno74XVT/AOfkk1TWtFfUnvtCivLSL/JS59U0H8yK60KK506w0FYLFv8AJTBr
                                DR7Wzspf8nIssH+c6Nla/wCcijsr/wDzqzwz/wCcmubi7/zljLBo+ny6fBdtharz+l+QZuF4VYtl
                                uNVQY7lY/GnnwR5lWmldvQIOBsbsOL+zy1bH+hqwcJd7jqcmS0QV9Lpg0/BsCajtpZKTTxgtlAKF
                                vCK6UddGIG4iE8cmnutOjIdwsfjTz4HLIS3oMMVNpcLcxvbmB8KVirW8oli27nCtXlxkXk5yoxxb
                                gsNq8lRW0UYww2Dxo4lsBTxuh21j8aefAmYKCcT6EglMUnUW4gXkRWkTq0e3kYCppDLMB7XshSHg
                                tpaMSAANm8SuJ7J1JUja2Pxp58Axwp5wKZi3oe1umgdWVqYe1vO9vLG4kTasa1W6Cog8L6YO/BLO
                                2zHlt5LaKSpdPIL2syUVI2Vj8aee/vMq00jN6KtJsrL7hlrTb3pMDjtCcKurlbeNmaR1HtczCKJi
                                SeBqMSihU3HAVJBFIJdOADxOh89j8aee+vKq00jN6MBwqzuM4Ixp1K1YakY6Vgy7Emrq8jt1lle4
                                kVMKZgi3M5mfglsmabdXjSQXFgVogjzWPxp575JJ6PjcxvbTrKhUESR5Ta38ttVvdRXC5hWI8mIr
                                PTSAC61RQGZ5WVcKOAF7dFzwT62cIVd3urRJA6FG8lj8aee9ySZfSMM7wtBOkysoanh9kkliaHV3
                                UR6lavSzxtQYmi+Ae6gQTatEtTX1xPQQmlTCuVXV7hRxJ4JawGVwABvF1aLKHRkbxsfjTz3qR8ox
                                x9JRyvE1tfxyUMKaNWprejC4rBhWdxWLmgpNCJqWMCgMKkmSNbi9eXgwUk20eSPeru3WRCMD4WPx
                                p57yzhQSSfSY9qsr4oQQQGVvAgGii1kArAUSAJbqGOpdSJp5Hc8GsoN9u4TFL4WPxp57wTgGYsfS
                                1lfGM3FtnCHMvk1KchySeEW0BlZRgN81CLNF4WPxp57xI+J9MafeMjcx4mrp883B0Qu0EYjTfXXM
                                kgyvVj8aee7yOAPTCRmRlsXq1d1HjMSI2tJMWtpVoxuuzAJroy10Ja6E1dGWunJXTkrpyV05K6cl
                                dOSunJXTkrpSV0pKZWXaWdvlG/38eSarH40892ZgoJJPpizTKlIcGx9qNTt7eBANNBEwayQ09m4p
                                lZfLFDJK0WmxxqZ7KOvz7Wu4Wtfn2tfn2tfn2lfn2lfn2tfn2tfn2tfn2tfn2tfn2tfnWtfnWtZ7
                                aYT6bGwmtZoTsLSDqMBhwDUYyUqx+NPPdnbMfTC84wFTwibMlGpWxfzXMYaPxtbVrhgsNrFd3zTH
                                bhiKhv5Y6iu4ZxNp0T1LazRHyirUAQ8AuUzwmrH40891kb01GMXHLwtz7kU5yqffzzf8qRHc2+my
                                OZJobWO5unnO5AkVDfTR1FdwzCfTonWa1mhPjbQmV1UKOAP9rfdY/GnnujHAE+mrcYzeMbZXxqcg
                                L5wgcjT4BQEMC3GpRKJZWlbdeVW9+0dRzwzrc6fmqSJ4yilmt4uknAX+1vusfjTz3R2zH01Zp5Yz
                                ik7Yv57i5MZN9cmmkdvDCsN3VmUwai6UJLa5RLWKNuBP9rfdY/Gnnubt6ctVwi8kD4KxxPmmlEas
                                xY77Z25B4G/2t91j8aee5M2APpsc4xlTyAkbC6kzPvg96trQmgMNlFDJK3b7zBlKnd3+1vusfjTz
                                3EnCicT6bjGLj2G0nGWXfLKFXrADZRRtK9tbxWcN9qTTE7w/2N91j8aee4ufTtqmaXa3gHU3ywIy
                                +EejmSO8sHtfGKNpZBojEXVsbeWz043Ua6NIpOlXDDsjVeWH4i2VibsdkauyNUmjTKJreaBqTRi6
                                XmnG1jtLb8mXshrslHRHqfTbmHyWentdL2NqmiaGXyP9jfdY/GnnuLHE+nLaQRuDiNnI2RJJGkbf
                                LBT42361zCs8MsbRPWkWmUCtW/b0f9Z3WOPutoK7vaVqV5Dcpof2n2HdbSobqGep4UnjnjMUtv8A
                                8Nb/AF9I/bFSajaxOmo2jke41KwVkpVJNpAIIOdazb4HyP8AY33WPxp57i3P07DcGOkcOuwLBQ15
                                EDLM0h3wDGraPpx+Fr+tgK1a0zJZW5uJkVUStV/b0f8AWnjMsPZJq7JKKnhMEuh/a/2tz0kObutU
                                w/Lg/wCOt/r6R+3V/wDt1pFyz0wBWdMk2lwdS4YhVsL0zT3MImhZSreLfa33WPxp57i3P06qM5tb
                                aSNcynzTzdIG8kNPK77/AGkReTxtv1rq6/HmOV1tbOO2q9uum301X9vR/wBZ3WNO62dd2tKvZUmu
                                dE+wgEHSrPGC2hgFxcRwRyyNLJb/APDW/wBfSP26v/260VGM5q7ONzp0HRt7xZZILXT7yGcctXt+
                                nN4tyf77H4089x+vpy3tnlZY4bdbm8ZykjIYbhX8h9hPKZH38Ak20XTj8bX9fW60q56sMrrGnVM1
                                59NV/b0f9a5Rntxp17h229qazuYV0P7CcAmsMZscy6vbtnq3/wCGtfr6R+3V3Y3UlxFpN0WtrdLd
                                LuYQwWsbT3OAAM0Irrw0ro9ahD1bbxbk/wB9j8aee4Hl6bSJ3MNiiCW7ihEs0kp8McKiumSkuY2o
                                3MIE9yXHALO3LN5LaRBBrLq1W9w9vJd6lJcxwECZZY8NVIN1o7ott1Y66kddSOtXdGt9FZVVpY8p
                                +7S70FZujLHcQmKaCSPo6w6mDSSFu+pHXVipp4VE+qW0QuruS5fR4o0We4jjidiz1pNwIpmeJhew
                                iKfwkOCMcTY/GnnuD8vTIBNW9gzB5YLZZruSXhNvCZHUBR5MxrHyFj4YmszVmaszViTWNYnwBrMa
                                xNYmiSaxNZmrM1Yk+OYisx8caxPkvHywVY/GnnuEnL0wqM5gtYoFudQJokk8IHubSPJHwjUJQTVj
                                8aee4SemFUs0EMVtHdXjSnhUYzOBgODyyCNJZC71Y/GnnuD8/SwGJtLXoreXQkPC7b/twc4Cr64D
                                nwsfjTz3B+fpaxtRhe3Zbhtr/wB+D3tyEU+/jY/GnnuB5+lbWAzS3tzlHDY2yurBl4LcX+WmYsfG
                                x+NPPYgE0lpM1Lp7Gu3ijp9NYuKkikQH0taxiC2kcu3DrKXgt3ciJSST5LH408/PhVvaGWoreKMF
                                0WjdDE3LULhqEwNHBqnso3EkbIfSdtH1Jr+XpwcPjcoyMHXgU8whjkkZ28tj8aefnt7bNWZYw07M
                                YdNuphHosIA0mzptJtDUuiVNa3NsUlxqWGOUTwNG3pLTI8W1Bw8vELBzwKSRY1uJ2lfzWPxp5+Ue
                                9W8OYl1QQQS3clrYQW48rKrC90wYBmVpESVJojG3o+0suqs9g8ZtYjbwSNnfiFhhwGWVY1uLl5mx
                                89j8aefljUsyAIsELXMtvbx28fn+up2AdUJq5hDp6OtoDNJc3K2yRai2a8uozDxGxcCTf5J44xc3
                                BmbYWPxp5+WBcKJJrTbXoQ7E1qVt0JBgy3UYST0YqljCiWlvK5lficLZHBxG+3t1lBJOysfjTz8g
                                qMYLZx9W42eoxdWBKvk/p6M02DFtQnDvxTGrR80e+XdwsaEknZWPxp5+RR7j7dGjBkaREoSRlepG
                                aDoxaSNSsiNQmiJ60VNNEostQNywdDTlJA4yS3Qxh9F28LTyXEqWtuSSeK2cuSQb1yq5vAgZix2d
                                j8aefkTmOWif8lSTWtX1CxbT9G0aDrXX+Zdzqf8ApmfvFvbT/gaebeO51TTVstRv7Ltuq38pb/RW
                                2pXNpN/lHMkV0ALqf3i9FAE1axLbW9xO00nFgcDayiRN4lnjiE99I9Yk7Wx+NPPyIfdft0NvbUP8
                                3HdXH/8AMp+Bb/5ueBz/AJZxNN/lmlaP/OzCKH/Lnr6ho3519q2ix6kunf5xLSe1/wA5DDFpWkrp
                                iTnNc3H/AC9FWFtnbUbkluMW0vTdSCN0JAE17GlSXk70WJO2sfjTz8i80+3SZMl1s7mTpxKSTdvl
                                i9E28LTSXMq21uTieM2cwK7nNcxxVNdSSHcbH408/IKhOIjcxyRSLLFsTWrT5YwKvX9/RAVmNpAL
                                eK7uOvLxqGQxyKQw3BmVRPfYUzFjuVj8aeflhbA5cRpV50yNjcTLEk0rTzMyosjZ29DBSxh06V6y
                                2loLu9M1Yccspsw281ykYmuHkO6WPxp5+UEioJMyspBsdSDAHHzE1LMsa3d49y6rV5OGPoVVZjBp
                                sjV/+SzW41J3pmZjx2BykgII2jOqie9JpmLbtY/Gnn5onKGN0kV4jVvqU0FQ31vMM1ZxWYU8gAuN
                                UhjEs01wyphV1dZQTifQaozmHTHNF7W0WbUpXoksePirObMmzmuUjEs7yHd7H408/PHIyGCdZVaM
                                MGhylLi5jruV4KOoXjUxllKxiiAtXN4cSSfQYBJttN6gLW9qs+oyvRJJ9BQytG8UglXYEgVcXhxZ
                                2Y7xY/GnnsAxWotRdaivIJaKiii1kWmKqJb+JalupZPQaqWMGmSvQW0sxPqbNTO7n0LDO0RhuY5B
                                5WZVEt/GtTXcso3qx+NPPYM2HgrFTG+dDyNajJlj9BKjMYNMkasbSzE+pyPTOzn0QGIqK9mSkvoj
                                SzRvRIAmvgpknlkrE75Y/GnnsH+7w06TPBRq+fPP6AVGcw6Y5ovaWiT6jJJRJPo3GsTWd8Dv1j8a
                                eewf7vDTpcs3vjIwSN2LNxlUZqSzlak0+MVLpxwZGUpG7mHTGNGW1tFn1GWSiST6vsfjTz2BOJ8I
                                3KyA5hqUgWDiPvXvXvXvXvQxpY2YrauaS3jWjPDGJL0mjczVBfuhAt7hWkt7ZLnUTKMcfWVj8aef
                                nJwHksJOpb6k+M3C8KWKRqWyuGpNOahZQLRFnHSXNmK69ma61lXWsq6tlTPaU1wgprmQ0ZHNY+RX
                                ZaJJPrOx+NPPzyHy6bMIzI5kcDGhE5rpPRVhuuFYGum9dCY0LW4Nfh3Ffh3FfiXFfiz10Ja6EtdC
                                avx56FpcGhY3JoadcGhppFLp0dC2tUHWs46bUYxTahKaa6nYlmP8CWPxp5+djifICR4RMqsJ4xSz
                                Rmh03EtrjRBHjh44VhWFYeTA0I3alsrl6TS5zS6VGKFhZpWGnLRvLJaOpwCjqsdd1wrupruprupr
                                ubV3Rq7oa7nXdKOp40dTam1KY0b65pp5nrEn+CbH408/MxwGyWRlMNypp7dJR+AKFhXbq7bXba7Y
                                a7Wa7VXaqGlJS6XCKFlZpRk06IdytlDascH1K5amurhqLMf4csfjTz80h2q3cygX0tfnTUNQnruE
                                1dwmruU1dznruU9dznruVxT6jcNTTzNRJP8AENj8aefmbHH+OrH43//aAAgBAgIGPwDddqbrtTfd
                                qbrtTfdqbrtTfdqb7tTfdqb7tTfdqbrtTddqbrtTddqbrtTddqbrtTddqbrtTfdqbrtTfdqbrtTf
                                dqbrtTfdqbrtTfdqbrtTfdqbrtTfdqbrtTfdqbrtTfdqb7tTfdqb7tTfdqb7tTfdqb7tTfdqb7tT
                                fdqb7tTfdqb7tTfdqb7tTfdqb7tTfdqb7tTfdqb7tTfdqb7tTfdqb7tTfdqb7tTfdqb7tTfdqb7t
                                Tfdqb7tTfdqb7tTfdqb7tTfdqb7tTfdqb7tTfdqb7tTfdqb7tTfdqb7tTfdqb7tTfdqb7tTfdqb7
                                tTfdqb7tTfdqb7tTfdqb7tTfdqbrtnr/AND8Q/x/ofiH+P8AQ/EP8f68JyKFGTxP4/0PwjBEbiS4
                                Uhifx/rwl9n25YDWF/H+vCKEuZw88L+P9eEULoP4/wBeEkvNcrY3hfx/rwnFPjM+trI4X8f68Jyc
                                CZJLhF4f8f68NyJsqVKnmUKeX58LUJvhQoS5+3hVtrF7eE4vhLF7eEZHvxfzi9srknwpEnLI4Lkf
                                zi9sq+zoQXGa6mnCb5KFCnM/nF7ZSrfUguVv06aZJY9y98XtlK9uZ/B36KSJy6K5YvbKVHzlzP4x
                                6HoTZTpPlYvbKUyPL9U5sjhSJ8KEuntfri9sq9iT4tKbIvCmS6u1+jxe2WSbKsnz0KE+u+BfGJ2z
                                CbKFEUWRNC9sTtlscpa9HidsqoTFAhlN69Z4nbJZcJlOX6vKU/VYnbJffAivLKbX74nbI/TD9nlD
                                9pifth9sii8WD8sna9hYfbIIIi8b7LvhzZUqiT6q630eH2zBQo8CZJy5JMhcRXUXf9LD7dfBdDBn
                                1u7YEYSJzNqNp+pNHsRXT2XessPt1sX0kfNEHVckeH2uoQXLM9iHk+nT9GJ4Xbq6dP8Aa3kgJEFz
                                v2PgXt0zFhduokifVfZUZFcGO7BY107Xo8Lt03oevWQPq6MiP5w309y9Z4Xbo5ImSXXwZ9LhkPfB
                                +BvpJs9SjFf5Ik8HtmsVVEyHrgNjY369HBE3ywZJ8/boZ5LFCa8iPnz/AFQkJdFBeeBJkyZLk7Dz
                                aKJFYPkmQtJn2dej+MfsPFhlMGRRWB6k7SVpNkiN3RyxYojw7DziK5IskujiyOND14dsWOWRdCNr
                                4pRRXmqipUqiqKoqiT5oLHTEztnMOWTKxI8IWzbI3MqytxVlbitxW4rdqRsZD/6KBJ9L28AQ9SFq
                                JzeFNRPt/wDN9iF6gyKfR9sOLy580CEMaaGrXFdEztnDH0v1XNG5zxWds4cOeOOx/ZUJbWJeQnaK
                                5ryKogpo/aCI2MuVyofSEj9oI/R6EGNuiPtYvnizsPOJQjyRJksaI2XDt80TqxfIo+hUlQTXkOLL
                                3wtEL1JKbQ1cofI1wZ2zeLIWKPufa6b4+hDoILgxvyZbCghJvyNx9U5FsGSZcJii1IjFC8khJKIk
                                1AVydeDO2bJVbI3uXoQS6WfLUqVK8KleFeM+Re52zX3dD7XTb9emS9ulgdsF5XE+9/ZenTp9HBEO
                                HbnlwmoEsqtsXcgspgj349uWCI3G1E0RsmQZFZRCJdf5KXUvoIIi68nbkgRdXy/e0+uT/VVuIObI
                                LqY48FzduRLmaF85NF+Q73Ty6v4xpLn7ci5md8mVioqkF1nthyR+zIJc/bkT9GJ8rZHJYKrPd161
                                4MiLJKGD25In0ufJORBUIvzyObIWqCI3fs+v9n0fbliiDmUJIhE+12RTJfqiLm8ig+WLILE7c0ho
                                gUnkM2fqvqiL/Z5J7kplCLkUxu3OxvrqkUydSX6oi5vKKdB250xdNNlYkFa2bWbGbWehNlCKkTnn
                                XbngSNpBywKoqSTJWM2m1G1G1G1FETaRO4m2yS8B9sKhJlSpUqTZ+1zfCSXg/seR5Hl4f7H/2gAI
                                AQMCBj8AoiiKIoiiKIoiiKIoiiKIoiiKIoiiKIoiiKIoiiKIoiiKIoiiKIoiiKIoiiKIoiiKIoii
                                KIoiiKIoiiKIoiiKIoiiKIoiiKIoiiKIoiiKIoiiKIoiiKIoiiKIoiiKIoiiKIoiiKIoiiKIoiiK
                                IoiiKIoiiKIoiiKIoiir+PEX9fjxF/X48Rf1+PCc+MsT+vx4RhwlyQeH/X48IxILoP6/HhJ9B/X4
                                8Iroe/48IwHzRwv6/HhKK5Yshhf1+PCU+NSZBYf9fjw7QpyV8/8AzdLxFPxCvk7ZvPljkqO2bRZB
                                csH19SvKhfGep5Ii1/8AOarnWTWP2zVEeZZN8PPYZLcs2g+eOS3L1Wc04Syf5H4hTH4iT9s4eVWv
                                OVfb3yl+2cu26jIZRcvXOp7rcpecpn2to8nWdu27sQeFQoU6u153PcieBPliifUL2zuKPsu+FXhP
                                hHzJ9Pcs89URVHyJECCwIry6dr1Hnn1fI7h4T6ZDz2DqQ4J4afTp+uexIqvDssNdOn6Z/wDZC+MN
                                Lp3bn8HiJenheDwYkyPhiD55kSC8MyIPngvDkHyQXh+D4vnoUKFChQpzx8JxckQtR5HkeR5HkeR5
                                ELkRtcSnhaLZCiwpELkRtn4ikRfiGPiOXGZBFCJIgxQIkifCRB57SXTp8WU5FwfB8JCzqRG9r4Pq
                                lBdQ+ESnB8FxpwmRIZz6IhZqRfh/2PqqeIIH1t75pPhLK3c80kVKkyKrlKcKitzKPNBiuyeLoiVC
                                OYpCS5+2TQQrV3zNfPOh/GTfbzI5RLEjzIhksXRHxk8sb6sb5YshkkyClm0SZFckFkc5kpZ5HI5z
                                JSz6HWyKakGuE5kpZ/AfTUKE3AqbkbkV+zP1tgVZBzJeAYk5G4ja/tgUPQqbipUqVKlSkSVpKRN+
                                Dak0yjKcaElwr/5l/9oACAEBAQY/ANtoM1VttFmqttos1VttFmqttos1VttFmqttos1VttFmqtto
                                s1VttFmqttos1VttFmqttos1VttFmqttos1VttFmqttos1VttFmqttos1VttFmqttos1VttFmqtt
                                os1VttFmqttos1VttFmqttos1VttFmqttos1VttFmqttos1VttFmqttos1VttFmqttos1VttFmqt
                                tos1VttFmqttos1VttFmqttos1VttFmqttos1VttFmqttos1VttFmqttos1VttFmqttos1VttFmq
                                ttos1VttFmqttos1VttFmqttos1VttFmqttos1VttFmqttos1VttFmqttos1VttFmqttos1VttFm
                                qttos1VttFmqttos1VttFmqttos1VttFmqttos1VttFmqttos1VttFmqttos1VttFmqttos1VttF
                                mqttos1VttFmqttos1VttFmqttos1VttFmqttos1VttFmqttos1VttFmqttos1VttFmqttos1Vtt
                                Fmqttos1VttFmqttos1VttFmqttos1VttFmqttos1VttFmqttos1VttFmqttos1VttFmqttos1Vt
                                tFmqttos1VttFmqttos1VttFmqttos1VttFmqttos1VttFmqttos1VttFmqttos1VttFmqttos1V
                                ttFmqttos1VttFmqttos1VttFmqttos1VttFmqttos1VttFmqttos1VttFmqttos1VttFmqttos1
                                VttFmqttos1VttFmqttos1VttFmqttos1VttFmqttos1VttFmqttos1VttFmqttos1VttFmqttos
                                1VttFmqttos1VttFmqttos1VttFmqttos1VttFmqttos1VttFmqttos1VttFmqttos1VttFmqtto
                                s1VttFmqttos1VttFmqttos1VttFmqttos1VttFmqttos1VttFmqttos1VttFmqttos1VttFmqtt
                                os1VttFmqttos1VttFmqttos1VttFmqttos1VttFmqttos1VttFmqttos1VttFmqttos1VttFmqt
                                tos1VttFmqttos1VttFmqttos1VttFmqvU1HVYuptYWG62RLw0/xzfEP1n209434h+s+2nvG/EP1
                                n209434h+s+2nvG/EP1n209434h+s+2nvG/EP1n209434SyU5Kc1CCsCsUsY9Z9tPeN+E0pqDQu6
                                xx+RWzd2Fd5jh1grvDGPWfbT3jfhKGsnFB1cwFt0KDWDrNuGYijFoBOUK9S7zfqrrhPFvWfbT3jf
                                hIKYjNAwi/KTxBqMk8WwUDkxX1n209434RRV0L8jpvP04r89P/0MERifrPtp7xvwjDnTayfFlpsK
                                czJkxT1n209434R3srjHjGVBkkcU9b9tPeN+EdOh6guDy0GQiJqpUpPJ/ELz2kQdDoCAvuEcpbJN
                                r1aguPEWXZl3UvxUnFtTI14hHqX46zyamVrBEhO9UHn8bCA4Q7wj0IMbULXOk280iKdQql19tsBE
                                TTvU3yKbXXZiZPQEKVEvDzYHNhH9UaTnOe4SJY2IHzTq1B4ewTiP3xT1v209434RBemfc/IAxpuZ
                                +heq9Z+A+noFjoNIuiYsEgv9c0AXOqRFcwzeGz916FnrJ0Q1pMZtgSvT/wD8y6XSj+ICEY9Crn3I
                                NywFWBEfnJerpem9O2gynUb3mEODonqC9J6RlAUqgl+SQL4/IfqnsY5ge0NBdULQ2Qy3+6mX/Uen
                                FZrzJrmAGPTT7vaqnpajGvqupuYxzLhIl/dTBj2r1H+9cFacBUHe/wDMV6638crpyW4p637ae8b8
                                IRgo+rqMjVpgXTE5E6lUEWPEHDoX+v8Ai/xRvQibetN9NUp3qTPCCZj5q/RpAP8A7jM/VX69IF/9
                                wkUfTtpQpuILhG2CptdSlTkyZBCNSpSvPMIkk5Eaf4e7babUX0acHmV4zX5alLvm2BhFOpUWhjTA
                                ADFPW/bT3jfhG6kbWmPy4xtEWCZxT1v209434Rhx8JkVEWGzii9xkJp1R2U4p637ae8b8I5L8FU2
                                eE8V+Jh7gt6Tghifrftp7xvwjgg9soIU63ddYHZ+HEmAFpRp0DKwu/4UTbivrftp7xvwjjgi1QJv
                                MzFQdFh6bF3XtPzXib2qLnhEUwXOyHIu8ZZgo4t637ae8b8JJKBkcElJWqZU8EGqeK+t+2nvG/Ca
                                1EHJwIBT4ybgpvC8YXjC8YXjC8YXiCtUgSpNK9wdd8DKR7arR8JweBE8VNXaRHSV3nE8Z7n5dLfM
                                +E4KBz4CeB3iAoA3j0KTCvAvAvApNC7xlmHHe5+XS3zPhRDNggouICgzvFSN0dCiTHFfc/Lpb5nw
                                ohkKinBpgBKKmSevGPc/Lpb5nwngO87Mg6MADGARqNNrZHpONe5+XS3zPhNcYZ5So4KVKMwZ9Qxr
                                3Py6W+Z8JIuMArrJNz5+AKgJ6sa9z8ulvmfCOLvkFmbm4AQxr3Py6W+ZzWkFMq1WqyKmIcx7rZuU
                                XGJ4Tca9z8ulvmc1ImQUf1UFJWKYwxbJQPMOJsCuU5DKeIbjXufl0t8zmnE4LrBEnIrxFxud0lGp
                                U+QVru0f8LuucFGk4OhkMirr2kKa6VDmDEmCLGSblPEjGvc/Lpb5nNKKgEGssyuyBRAvPyuPCuva
                                COlGpQiWiZblUDbyrMgK2PUpNKm0rwleErwlSaV4VJoUgFaF4ipuJ4kIY17n5dLfM5phosy9SuME
                                M/EmvSFniAUCojk6ZCtj1LuglSEFNxU8XMrAMa9z8ulvmc0oBAkd98yeKIIiCiB4HTHJkXGAUGD5
                                lTcccCcP+uNe5+XS3zOaTGkRAMSocWXgRcyY6uS4NgSouMcfcP8Aqca9z8ulvmc0n1DkkMMSoNcC
                                cwKkQYWq6HAnMCpkDrUSQBnUQYjOMLmmwhFuY8kWxOZQsGYcgvGazsRBz4z7n5dLfM5pPItjhI9K
                                TGIvQtgmNrvq060CIHwkwXrv9dzi8EZSe7GcFR/2nVqdUunHwkn5o0aNS5TottBhEhO7xFai4NcQ
                                ZyVAuMTCZPAqAWXjyLMruCPSVMy6OQ3N+aeOnGfc/Lpb5nNJ7cscP4hUNIgxDmoVvU13VnN8Mf6q
                                s1vqHN/KQbwEIQKFSt6l1Us8EZwOS1PqepP53PMZygq1OnXLadUxuwsgVTe31byymQQwRDTDJCOH
                                qTznJ5AmYK2K7rVKSm48jEZwndM8Z9z8ulvmc0jTJk4WcZUecgl80Tnx2ZXdHzKtgOhTMeSmdJgm
                                uzjGfc/Lpb5nNJlTMUHCYIjxYpRm4x+WCGLTICzqwqTSpAKZ7OTmHM4Km/5Yz7n5dLfM5pRX4HmY
                                8PTxTnuMAEXusydWCOKQtOZQjAcqA5imvGSBxn3Py6W+ZzTD2GBEwrr5VB9eILnGDRaVdbKm0yGf
                                BAYnFxgEQ2Qz8rmFob+mM+5+XS3zOal5kiJxCDK88l4fugWODurgwab7sgFi75g3+0WYIDE4NmVE
                                nlhzcsCER04x7n5dLfM5p9CCzKLSQegqF+8OmamG9n9VIgdQX+R5IzKeCAUcRzlQsHLT2G2Ke3MT
                                jHufl0t8zmpIqDlIqxWKzBK1QsHGWqbgrY9SkCVJvapQCm7lx4jkVQfPGPc/Lpb5nNYFA4bvBmYK
                                2Kk1SACtCtVqm4q09qmeYQByiCa/+4Yx7n5dLfM5rjownDM/JQbIKZjzLYekJj8xhjHufl0t8zmv
                                dOAqJUplSkFE28zQcxQfmAOMe5+XS3zOa4OADK5TMuaJBnBpHYji/ufl0t8zmtMwUGD5prs4mi0G
                                Tf15pPYc5Tm5icX9z8ulvmc05ld0RUpBRJwVGkzaLwTnG0mPNJ7CbRFPGeeL+5+XS3zOZsyrYqQU
                                gArVMnhSlGR6lEW80mdMkHj+Qxf3Py6W+ZzKi4wUGhTKnxlx3yURYeaLHZnBMeMX9z8ulvmcyYm3
                                IFE8fELpRB5oA5kH9AOL+5+XS3zOZESo5MmIwNhV9vz5ouaZkAhQOLe5+XS3zOY8yujIMTuOtsRG
                                TJzQfT6Yp7cxOLe5+XS3zOYkTYoNmVbBTxQOCJGaSgbRzPLT/IJ3TPFvc/Lpb5nMSAkBjFw2K+Lc
                                vM+mc5gmPziGLe5+XS3zOYd1tptxmItUMthRGTJzOa7MQUyoMkI4t7n5dLfMR5gRJgoMkM+N9BtU
                                hOEQUQZEczukN/TFvc/Lpb5nMCduZTszY7cdZkX5GmeUYpYu60leFeFeFTaVAtPKjmnJEJwzHFfc
                                /Lpb5nL8GzOdRJjj0lddaAojwmw4j3Qo1TPMFJoUhDgzAUhdOdRAvDoUDLlF9POnt+eK+5+XS3zO
                                XrrT1nkEOBsRhOWVFp46SvPbLMVBoAGC1SVqtVqmeAYARRDhyg0ZDJXv7hivufl0t8xHluJV1shy
                                HA+EoPb4hmyqBtHGAARJV54i44JYO60lRe4BC8SSrCpRC7j4HpUQLw6FAggjOp4IOCiJsz8nsPSm
                                PxX3Py6W+Yjy1ElZhyKKbzLIvy0x93FgARV4jvHBAK6wRznIr1QXn/RQAgOGQ5tuXKi+l32jJlUD
                                Ii0YC11hRI8Bs5OBzIPtIAOK+5+XS3zEeWenMonkaK/G+Zh2olo7hs4q+602YbzhBgyq6wQHFmpT
                                F2oImWVFrhAi0YC05UWn5Hk4tOYhEZsU9z8ulvmI8sQbM51E8kBzbQoG3Ki02ZDxHQoYP+gtKDGi
                                AHGl9Mf5BPrCINowRHibMcnPp/NOaM+Ke5+XS3zOV4uKg2Q5L/6m1X2nvARHSoGR4cc+ANFpQaLT
                                Mnj/AMjR3H2dGCCcP4xl1cmlucInOI4p7n5dLfMR5UmVBsulRM+TfxvPdNiNZluXhAIDAazrGyGI
                                OpkRiDDrRa6RBwXwJtP05NYelMqDqxT3Py6W+YjylKalIKfKH4qhnYOlX2Dum3o4McEAmtywicRv
                                /wAX2YHNOUIjNyYDmKa/NA4p7n5dLfM5Qtiu7JTPKYcLQix1sIEI/wBpsPCptOePYocf+N7wHn+M
                                Z4L+VhGFw6eTbvR+ihifufl0t8xHkyZUhBTPK4c09azgj6osOQ4W9WAHMMH+j+KLb4ZejnVNop37
                                4jaqAFIO/MxrzOy8qVdrL/5MmZem9SKUTXBiI2QMEfX0wHECbI2FP9aaXgeGXY5xaq3uBZA0r3dz
                                3RFV3VGCkKAaSY5HR/4TmenpXmNML8ZFV69yFWg29cJtEQ1VLwDXsNkbQcqZRYwVHERdOxD1bhAG
                                mKhHWIq/VZGpUJIc4xAOSGCqDkEcJ6uTXsKc0ZDifufl0t8xHkmZUprN1KfLV13gP0V9vjAl0qBE
                                CMA6sDj0YKrqU6jancHSqf8AvNLXAd2IgvRnJ+Fi9KGODiZy6l7f1P8A1TqJBFOu0GBsgZxCrwyV
                                gfovVMLgHReIRnMBe5mnGf4QT0XnRVZ1drX1g6QdkaV64+juknxkTneElT9UwE0wbr8xjkTvV1o/
                                5nGBPRkHUvS+lYe/XpMvfaGhenrUXRqDvPGYxsVOs0xDmiPWq/2O/TCeocmlmRwTumeJ+5+XS3zE
                                eR5ld0QUzy8KTz3TYV+anb/IKabgu/3DB/vCoA2+H3cqpOY8M/GCJ9ao0nOu1qLQ0VM8EPzVwaYy
                                CKoUqDhTbQBaAcqo+mcQK1Fga2oBmVb0dd19tYxiMkkRTrgUibE70sL4q7Un+UoIu9NXuMOQxBh8
                                l6igKpNT1AAJ/iIGP7Kp6T1Dr994e1w/iQIKhR9O4MbRBE8pOVUqlWqDTpNYwN/6sH7pzKDBSqGF
                                1yNGo8PbGLYZIqqegjD0gT5NZHLJMfnkcT9z8ulvmI8iymVbAcwepfjeZ5OlfkpiWVDowUybCYdu
                                JEf3mGF0OR5BSEB0qL3TzKYieleALwjsQcGiIsKuHtUWm8oEQxH3Py6W+ZyKWiQHMSIMCFcf4gIG
                                OVG74HWdCCDhaDEJrxlE8RbSH8bcBOYInOY8jRMhnKsic54mDgCo0+xQcIcf7n5dLfMR5DiUTzFD
                                hkV5s8/XhNLKJ4gXmxoiU5+cy6sBAMCZcjB9QSyBQ4yBCLmiLbZKfG+5+XS3zEeQZqDZnOonmPG1
                                ptCvNMQcAe3JaOhB4sIjx/4GHvHxdWG6LG8iio+zIMQ7wnnC/wAZiOlTaT0hQIgeK9z8ulvmcgym
                                VOzmVdcZGxQwfiee6c+RRHGknxEd0IvcYlxiTgJykQCJOXkQdaAGQYnBwUaZ+RUHCHEe5+XS3zEc
                                ezlWy5mhrvEMEQhSqnu5DmQcCCDYRxZJMXnwtRqPMSfpgJNgUf4izkVotz4tBwiEXU5jMp8L3Py6
                                W+Yjjt0fPmeHC0IZ8qhgge9TytUafzHEEkwAmUW0Jmy8VecYuNpwdS/Gw90W9PI18+I4xebJ/wCq
                                LTaOD7n5dLfMRxyAt5ohzfmFFpnlCmpKLCQQgKrb3SF4rhOdd2o0/MKRUS4AdJXeqN+RiiKTb5zn
                                OoEwbmHANOl83KPIsT4RMqAsxkubJ4+qLXCBHA9z8ulvmI43AWqfNK80wKDXm67BNd0qyKyhSJUy
                                cEwp4CXGxXW91v15GgLcyEoRmcbLgO+BJQw+5+XS3zMcieakkKdTw5CoiYXdIOCxWKzBEyXeciKY
                                lkJXeMeR/wAjh1Y6ZSMxh9z8ulvmY1HmwGVDFhy5kK/p3EOEyBlQOccFtIEjKVM8kRyBQx2/lbh9
                                z8ulvmY1DJzZ/G4902RUeC8nORyQAMqAGPFucIjMcHufl0t8xHGIZebMBNRvQQpuMYZeA6FpEArQ
                                YqyKmOLgLSvAV4CvAV4D2LwHsXgPYvCexeA9i8J7F4T2LwnsXhPYvCexeE9imCOvjL7rTZyAXCx2
                                D3Py6W+ZjEebV45cAKjhAwzC8IUjBd2amOCGsEYqNY3j9FAXZZhFeL6LxfReL6LxfReL6LxfReL6
                                LxfReL6LxfReL6LxfReL6LxfRQiHdaLqXdObIu8JZxxN4+EKA5ADhktwe5+XS3zMY6ObQAzYR0Sw
                                nhuItAjwMzBaVGTWttKuskzEJGCgTeb0q66ROQouYbrj2LvCWccNvIL25YSwe5+XS3zMXgObQHTw
                                CMBKjw39R/TBBgLj0K9V7rcgylQEoWNyqcm5BiclAm83pUHSOYoup912TMu8IjOOBMd0WqAs5BPU
                                j1r3Py6W+YjisebbeADghn4gNNhkepf0CyNAFqhT7zvoi52Uxxa1XXC8FDKchRdSkcyg8QUAIxV3
                                Ll5CPUj1r3Py6W+Zi3RzbLuzghQzcRdpmDhavGV3iTjUQYEKFTvNREj0G1FzOzkM9SPWvc/Lpb5m
                                KwHNwdPBMck0SeHHKbFE48KjpZhyI7qKPWvc/Lpb5nPEDo40jIMevvsyDi7tNt42qJpkD5Ig2i3G
                                HdSPWvc/Lpb5iPO9o6RxzsdL3ZDLiwxtpUHeK1xRp0u7TynPjJ6kete5+XS3zEcShzdHRPjvljrh
                                lwtf+WF4A2Z0CTeacuFtNtrjAKdUA9SNIuvQy2I1A+7AwhCKi2tA5wP6qDvUEjNP/lbUdn9U1xfe
                                vGGZPIfduQyRtW1HZ/VSq/T+qi14cc0IK7UaR05MDXipC8AYQzoPL70TCEF+MOumEYra/RbX6f1U
                                W1Y/JEwvAZWz4BcHXQOhbX6f1RputbwXdSPWvc/Lpb5mJnm7PKojjC7KFedbjpOGl9o/RGmctnWn
                                U3Sc0zwH1D7TJvVgPUE77v2Tnu8LREq13Yv5diYKcYtJJiqvWP3RJyTXiPYv8TowtCLHiMbDmTmG
                                1pgqf2N/RM+79l/5OAsc43hbJBoqTNkYhdCNakIOE3DOMAAtJgmsFsInrwNrDLJ3Bd1I9a9z8ulv
                                mYmeb0HTag4ZeJiTBELMM2PAZcuGn9rf0wfnYO83xQzIM/ja7qQaJASAwHqCd937J9MGBcIR61tG
                                raN7E6k4gluUKr1t/dO6ij1oQMGgG91YKkOiPYqf2N/RM+79l/5OCr14HUXmN2bepFpsKe3MTBXy
                                O6yfzRcbGzVVjjImLB0JzDlEkWm0GB4B6kete5+XS3zMTPN6DRGKJe6WbMoAx4URacikAF3jHHwc
                                gmeBS+1v6Kle8DohygZtcn3bXmPyzKnSae89wj0BBHqCd9yL3eFoiVaexWnsT6jJtdZ2Kr1t/dQO
                                VE3TPpK/xth0oueYHIM6dUda4qn9jf0TPu/ZfI4KvX+2B74SAhHBUPSml3idMp1Ol4nSTahDQBbN
                                TX5RY/8AXgFO6yvc/Lpb5iOJHm7ZBuUqMhC0lXaZgxRaVBxAPAiugcgQFqAIg428Cl9o/RUz1q44
                                xczJ0IvMmgRJTahMYvEOqMkEeoJ33Koxoi5zSAFsz2hbP6hXqjLrc5gqvW390TmVxzRcjAnLDtQL
                                bDMFCqIlth6MFP7G/omfd+y+RwPexkQ4xBXfaGtzxVxoT3kwMJdaa2EYmJ6kBmU6jZZyFtG//QXd
                                cHdRinCEXCY4BTusr3Py6W+Yjztg0RQdUMTmyK7Tm4ZrFF5+XAgZhRJgo3oq62Q5BvuEhZwaYLh4
                                RlGZUw0g22GKFRk4SIzhfjLQ0G2GVMJyOC8be0IwMZZEbzgDeyleJvaF4m9oXib2hCDgTeFhiqt4
                                gRIhEwzo99thyhHrX4KhgW+EnMjTc5sCM4RZIiMiFTF4RDWi0Zk0Agm9YD0IEmAgZleIdoXiHaFN
                                7R8woB192YKLjBuRoTqz3CJkATkT3BwJAkIhFxtJjgLHGDXZTnULzYHpCcGkFpMRCeFx6ETnK9z8
                                ulvmI865TV6pIZFAW5goDutzDkkDJlQAsHBt4NuG1Wq3DbhtwWqeC0q0qZwyPBtKnhdnIgMHufl0
                                t8xHnUA0RJV50yJmKLaMhlKiTE8lRynkkU808Hufl0t8xHnSGgRirzrcpKLWyZ+vJYGcoDNyQXE2
                                WIuOXB7n5dLfMR50ADKr9TxGfUF+NvhGXkxnXyRNXG2DLh9z8ulvmI86BVqZJtRZTPdy8ms6+SDT
                                b4sqicPufl0t8xHETzWA/iJlfhpmyTjycHDIUCLDyMWU7QYRUXTJ4Hufl0t8xHioALww61MwXiUn
                                dqkQV3mkc13PNpF5FxtJjyfcPy5FujxH6KJt4Pufl0t8xHiYmQCk2efBABSCmproV5vdd0KB5qNb
                                0xKuC10vlygHDIg4ZeQy7LkRc4xJ4Xufl0t8xHiIvswQYOpRd3Y5XWrvvcT0SU2k/MqQI+a/xVPk
                                f6KLwbufIpqYnnUDZzTdUIskrosbyiWmzJyEXOsCiTLIOH7n5dLfMR4cXCWCDRLKcyBAvPH8jwiH
                                AEG0FfkoCBytV1wgRaFAj5ojmhfqRDcgUafeb9U5zrSLyc7OY8ouz8g3nGxZm5BxHufl0t8xHhBQ
                                QYPmUKdMQGU5TxJrUh3xaM6gVHKOZ4GQWlBjPFYAv8glnCusMS7lItzjkCLj8l/1yDifc/Lpb5iP
                                CjgDneN8zxd9ggxygpSBnzNgJk2Ivd4oRP8Awi82nlQFA48abDM2lTMeK9z8ulvmI8NjYREZ9XGO
                                AES0RwB2bmaarxIWdauNMm2wsjyrFQMyMdLQe8RKFoUTPi/c/Lpb5iPDfUhYIBd9wb1mCv3hdsDo
                                y7VJ4PUQiGuDiLYEFQc8A5iZo3XAwtgVAPaT0ELxt7Qib4MJyM0+9SNFoMGF5ALv/KN1wMLYFEAg
                                ygYEFOZmJR5mBg+ZQYyTrGw/VEnLysGmw45dZN2fMrzpk2njPc/Lpb5iPDqnMbFVo+orGkyneutG
                                SByKqGeoNYOrNhA+G2Ul6eLa3iiX/wAJL114kicMv8ymNBdA02RDZG1y9ZU9KKtOqAxv+QwLmudO
                                72Kkz1hrUqhdNx8J6F6b0zKtRza12JJnN11ejpMqOcx11znOJ/uIKphriRAZehVSCX0nFzXgxyle
                                oJJm7KYmaqAWRKd1cy4I1HycRF3Ui7+P8Rm5XioZRjPePyRDO63jvc/Lpb5iPDqN6iv9qhVNCq4x
                                fCQJ+Sf6T/YcXVHte5xzjoTHD1r7lMg3ASBI2WqpVp+rdTNRzibspON6EiFTefVOv02ht4iJMCTG
                                3pVSk/1j3ioAJxlAxykplX1XqHVmsMQ0xn8yqHqjVufgh3YW3TetTSX/AI6tPwvtR9RWqmrVAIbm
                                ERavUU6r/wAra85iEJqoG1C++YjoVQ/9indXMv8AM7wts61+Jhl/LlnoNqBFhxWJsUG95yIjAZgp
                                z4/3Py6W+YjwwCYB8uMc82AKJtM0RnlzKDB8zmVxkiRBqieWvxm0WYpC12YIzg3NiXufl0t8xHht
                                eP4mKbUZY4R4sUgZuMSOjAGZp8yYARKL3mZET0IkeESby2HBRFhxGJMBnRbS/wDpRNuJ+5+XS3zE
                                eFDAaFQwaTFpOfii9xgAjUdaf0RLsiLjaeY8AIlXn9xv1RjI5CbYq4yTM+U8u3DaLMQznMpmWbFf
                                c/Lpb5iPCioZVEWptGtJ1gdn6+ILnmDQoCVMWDP14LjTIW8xoNESr1XutzC1ZI57SoUhdGfKouJP
                                Xy8CFEcbFxgi2nZnUTi3ufl0t8xHhxCBiotQZU77BntCFx4j/aZFTwxJAHSiKf8AkfZKztV57ojI
                                3IMBpstynmLBrS45go1jdH9uVQk05rSi2n3BnyqJMSeYN02jjIRi7Mp2ZsY9z8ulvmI8RFpU5HMo
                                KIUGPcBmW0PYP+FteyA/RRqPLj0knB1IspmzKomZ5hwEyr1VxAzC36qTQ0fKP1Razut+qiTE8ww4
                                K8LcvEzRZTlC0qJMcZ9z8ulvmI8TEGBCuvF4DLlQAMHZiphWKxRMhnUGd451bAZhzDgBElB1U3G/
                                VZA7ObVCkLvSovcXHp5jRExmVsDm4UXGAUGC8fooEwGYY37n5dLfMR4mGAEWgxTXj+QwhgtJ5hwa
                                CT0IOqm6DkyqUj2lFtIXW58qi4lxznmTEGBUHd4dK70Wld1wUSYAWlFtOZzrvOJ6I477n5dLfMR4
                                wtNrDLCczZDmDBoJOYIOrG6M2VQAF4ZLXIimLgOXKokx5nwiYY/7n5dLfMR4y6bHiGBz/wC0RmiT
                                lPLUhFTl1qLnE/RXqZ/8lQcIFXWNLj0IGsbo/tFqg3unNaUWs7rfqokxOfnh7n5dLfMR4xrsxigc
                                hV3K4y6svK9ikF3pKJgVbHqXciOuCk4r/IS4K9J3TlUiG9VpV2nFozxUTM88vc/Lpb5iPGjOySDJ
                                90TjnM+TZNJ+S8MOtd9wHUu876wUSRHtUwOwL+A+QVrOwK1nYrWqIc0fJd2alJTce3g90kdRUSY9
                                fPT3Py6W+YjxAHBcxxgCI9ic82uMcEgrFMYtYpNPYvAexbMrwFeArZlbMrwHsXhK8B7F4Co3CvDD
                                rU4DrK71QfIKLnE/Rd6HzK/ieoKDGmVi7oAUS8jqkpkn4Ce5+XS3zOOiP/0cETMLMFCKzqLOxQIh
                                x3daSpM7V3i1vzXeeSouPaVYyKlPqCk0lSpntUqf1Wz+q2f1WzHatmO1bMdq2Y7Vs/qvB9V4PqpM
                                HapAD6rxfRd5xMVP4E+5+XS3zMTiCoPMDnUbDnXj+n9VN/0W0+n9VtPp/VbT6f1W0+n9VtPotp9F
                                tPopvK7ziV3oGGcqQb8hFd1pPyUGM7SpEN6lOoVMk/Bz3Py6W+Yjw4cbCMVkWTsWRWBWBWNVgVgV
                                gWRGBDY5lN5PzUz8Ifc/Lpb5iPDMfh37n5dLfMX/2Q==" transform="matrix(0.5449 0 0 0.5449 0 0.4545)">
                                </image>
                            <a type="button"  data-bs-toggle="modal" data-bs-target="#sisalModal">
                                <circle id="sisal" class="st100" cx="382" cy="181" r="37.5"/>
                            </a>
                            <!-- </circle> -->
                            <circle id="hunucma" class="st100" cx="512" cy="336" r="52" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-placement="auto" data-bs-html="true" data-bs-content="<p class='fw-bold text-center'>A solo 5 minutos del desarrollo.</p>" aria-label="<b>Lote</b> - A-17" data-bs-title="<b>Ciudad de Hunucmá</b>"></circle>
                            <circle id="progreso" class="st100" cx="731" cy="69" r="35.5" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-placement="auto" data-bs-html="true" data-bs-content="<p class='fw-bold text-center'>A solo 45 minutos del desarrollo.</p>" aria-label="<b>Lote</b> - A-17" data-bs-title="<b>Ciudad Progreso</b>" />
                            <circle id="celestum" class="st100" cx="62" cy="526" r="35.5" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-placement="auto" data-bs-html="true" data-bs-content="<p class='fw-bold text-center'>A solo 20 minutos del desarrollo.</p>" aria-label="<b>Lote</b> - A-17" data-bs-title="<b>Ciudad de Mérida</b>" />
                            <path id="merida" class="st100" d="M712,370c-15.9,28.8-23.8,43.2-26,46c-5.4,6.9-10.2,11.4-14,21c-2.5,6.4-1.3,6.7-4,13c-5.1,11.8-10.5,13-12,22
                                c-1,5.8,0.4,10.8,1,13c2,7.3,5.1,9.3,7,17c1.4,5.7-0.1,5.6,1,11c1.6,7.7,4.6,8.5,12,22c4,7.2,8,16,8,16c0,0,0.6,7,4,11
                                c1,1.2,2,1.8,12,5c6.1,2,9.1,3,10,3c5.8,0.3,9.4-3.3,17-9c4.9-3.7-3.9,3.3,24-16c13.2-9.1,14.1-9.9,18-12c9.8-5.2,11-3.7,18-8
                                c6-3.7,10-8.1,18-17c3.3-3.7,6.9-8.2,14-17c9.1-11.4,13.7-17.1,15-20c1.5-3.3,2.7-7,4-27c1.1-17.3,1.7-25.9,1-32
                                c-1.4-12.6-2.8-25-12-34c-2.9-2.9-7.6-5.6-17-11c-2.6-1.5-7.4-4-17-9c-12.8-6.7-14.1-7.3-16-8c-7.3-2.9-13.7-4.3-18-5
                                c-8.4-1.4-12.5-2.1-18-1c-10.8,2.2-17.6,9.4-21,13C716.6,361.7,714.2,365.9,712,370z" data-bs-toggle="popover" data-bs-trigger="focus" data-bs-placement="auto" data-bs-html="true" data-bs-content="<p class='fw-bold text-center'>A solo 20 minutos del desarrollo.</p>" aria-label="<b>Lote</b> - A-17" data-bs-title="<b>Ciudad de Mérida</b>"></path>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow slideInRight" data-wow-delay="0.5s">
                <h2 class="mb-3">¿Por qué comprar un lote patrimonial de inversión en Anthia?</h2>
                <p class="h5 mb-4">Nuestro desarrollo está pensado en un retorno de inversión a mediano plazo</p>
                <p class="h4"><span class='mdi mdi-map mdi-24px text-success me-3'></span>Terrenos listos para escriturar</p>
                <p class="h4"><span class='mdi mdi-finance mdi-24px text-success me-3'></span>Financiamiento directamente con la empresa</p>
                <p class="h4"><span class='mdi mdi-handshake mdi-24px text-success me-3'></span>No revisamos buró de crédito</p>
                <p class="h4"><span class='mdi mdi-account-check-outline mdi-24px text-success me-3'></span>Terrenos en propiedad privada</p>
            </div>
        </div>
    </div>
</div>
<!-- About End -->
<!-- Caracteristicas Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mb-5 wow slideInLeft" data-wow-delay="0.1s">
            <h1 class="fw-bold text-decoration-underline">Características</h1>
        </div>
        <div class="row g-0 g-lg-5 align-items-center">
            <div class="col-md-6 wow slideInLeft" data-wow-delay="0.5s">
                <ul>
                    <li class="h4">Calles blancas</li>
                    <li class="h4">Delimitado por mojoneras</li>
                    <li class="h4">Estela distintiva</li>
                    <li class="h4">Áreas verdes</li>
                    <li class="h4">Listo para escritura</li>
                    <li class="h4">Certeza jurídica</li>
                    <li class="h4">Vías de acceso rápido y amplias</li>
                    <li class="h4">Incluye una amplia avenida interna</li>
                    <li class="h4">Banquetas incluídas</li>
                </ul>
            </div>
            <div class="col-md-6 wow slideInRight" data-wow-delay="0.5s">
                <ul>
                    <li class="h4">Avenida principal con energía eléctrica</li>
                    <li class="h4">Excelente geometría y orientación</li>
                    <li class="h4"> A 25 minutos de la playa Sisal</li>
                    <li class="h4">A 5 minutos del pueblo de Hunucmá</li>
                    <li class="h4">A 25 minutos de Mérida</li>
                    <li class="h4">A 8 minutos del nuevo Central Busines Park</li>
                    <li class="h4">Lotes desde 300 m<small><sup>2</sup></small></li>
                    <li class="h4">Dimensiones desde 12 x 25 m</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Caracteristicas  End -->

</div>

<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow slideInLeft" data-wow-delay="0.1s">
                <div class="loader-container-img text-center mb-2">
                    <span class="mdi mdi-vanish mdi-spin"></span>
                    Loading image...
                </div>
                <div class="about-img position-relative overflow-hidden p-5 pe-0 load-image d-none">
                    <div class="text-center mx-auto">
                        <p class="fw-bold small mb-0 not_mobile d-none">Click para zoom</p>
                    </div>
                    <div class="carousel carousel-fade slide animated fadeInRight text-center" data-bs-ride="carousel" data-bs-pause="hover" data-bs-touch="false" id="carouselAmenities" style="z-index: 100">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?= STATIC_URL . 'img/anthia/13-es.jpg' ?>" class="card-img-top img-fluid" alt="Amenidades">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow slideInRight" data-wow-delay="0.5s">
                <h2 class="mb-3">El desarrollo cuenta con:</h2>
                <p class="h5 mb-4">Etapas: <span class="h3">5</span></p>
                <p class="h5 mb-4">Hectáreas: <span class="h3">47</span></p>
                <p class="h5 mb-4">Lotes: <span class="h3">927</span></p>
                <p class="h5 mb-4">Áreas verdes: <span class="h3">28,414.38 m<sup>2</sup></span></p>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Property List Start -->
<div class="container-xxl pt-5">
    <div class="container">
        <div class="text-center wow slideInLeft" data-wow-delay="0.1s">
            <h1 class="fw-bold">Disponiblidad de lotes patrimoniales de inversión</h1>
            <h5 class="my-2 fw-lighter text-decoration-underline small">(Click en Etapa para ver detalles y mapa)</h5>
        </div>
        <div class="loader-container text-center mb-2">
            <span class="mdi mdi-vanish mdi-spin"></span>
            Loading image...
        </div>
        <div class="lots" id="image_site">
            <div class="accordion" id="accordionStage">
                <div class="accordion-item border border-success my-4">
                    <h2 class="accordion-header border-bottom border-success" id="heading-1">
                        <button class="accordion-button  <?php if ($projectStage == 1) {
                                                                echo "";
                                                            } else {
                                                                echo "collapsed";
                                                            } ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapseStage-1" aria-expanded="false" aria-controls="collapseStage-1" title="Click para ver detalles y mapa">
                            <div class="container table-responsive-md">
                                <table class="table table-sm table-borderless caption-top">
                                    <caption class="h1 fw-bold text-center text-success text-nowrap">Etapa-1</caption>
                                    <thead>
                                        <tr>
                                            <!-- <th scope="col" class="h1 fw-bold text-success text-nowrap">Etapa-1</th> -->
                                            <th scope="col" class="h5 available-title text-center">Total de lotes</th>
                                            <th scope="col" class="h5 available-title text-center">Disponibles</th>
                                            <th scope="col" class="h5 available-title text-center">Fecha de entrega</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <!-- <th class="h2"></th> -->
                                            <!-- <td class="display-4 fw-bold text-center">100% VENDIDO</td> -->
                                            <td class="display-4 fw-bold text-center">151</td>
                                            <td class="display-4 fw-bold text-center" id="available-1"></td>
                                            <td class="display-4 fw-bold text-center">2024</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </button>
                    </h2>
                    <div id="collapseStage-1" class="accordion-collapse collapse <?php if ($projectStage == 1) {
                                                                                        echo "show";
                                                                                    } else {
                                                                                        echo "";
                                                                                    } ?>" aria-labelledby="heading-1" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <!-- Price Start -->
                            <div class="container-xxl  py-1 px-0">
                                <!-- <div class="container"> -->
                                <div class="row g-0 gx-5 align-items-center">
                                    <div class="col-lg-12">
                                        <div class="text-center mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                                            <h1 class="fw-bold text-decoration-underline">PRECIO DE LOTES</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-cols-1 row-cols-lg-1">
                                    <div class="col wow fadeInUp mb-5" data-wow-delay="0.1s">
                                        <div class="card border-5 h-100 shadow px-0">
                                            <div class="card-header text-center">
                                                <!-- <p class="h2">Precio por m<small><sup>2</sup></small></p> -->
                                                <p class="h2 text-success">Lote tipo</p>
                                            </div>
                                            <div class="card-body">
                                                <div class="row text-center">
                                                    <div class="col-6">
                                                        <p class="h6">Precio por m<small><sup>2</sup></small></p>
                                                        <p class="h4 text-success">315 <span class="h4">MXN</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <p class="h6">Financiamiento hasta</p>
                                                        <p class="h4 text-success">48 <span class="h4">MSI</p>
                                                    </div>
                                                </div>
                                                <div class="row text-center">
                                                    <p class="h6">Enganche de</p>
                                                    <p class="h4 text-success">10%</h6>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <p class="card-title text-center h4">Entrega Diciembre 2024</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- </div> -->
                            </div>
                            <!-- Price End -->
                            <div class="loader-container text-center mb-2">
                                <span class="mdi mdi-vanish mdi-spin"></span>
                                Loading image...
                            </div>
                            <div class="d-flex justify-content-center">
                                <img src="<?= STATIC_URL . 'img/wind-rose_ES.svg' ?>" alt="Brujula" height="80px" width="80px" style="transform: rotate(0deg);">
                            </div>
                            <div class="row mt-2">
                                <p class="small fw-bolder text-center">Para más información, <span class="mouse-touche">pase el mouse </span>sobre el lote</p>
                            </div>
                            <div class="row mapsvg-scrollpane text-center" style="max-width: 700px; min-height: 200px;  ">
                                <!-- SVG -->
                                <svg version="1.1" x="0px" y="0px" viewBox="-50 0 1570 1230" style="width: 700px; transform: scale(1);" xml:space="preserve" preserveAspectRatio="xMidYMid meet">
                                    <defs>
                                        <style>
                                            .cls-1 {
                                                fill: #dceddc;
                                            }

                                            .cls-2 {
                                                fill: #a7acaf;
                                            }

                                            .cls-3 {
                                                fill: #9bc578;
                                            }

                                            .cls-10,
                                            .cls-11,
                                            .cls-12,
                                            .cls-3,
                                            .cls-4,
                                            .cls-5,
                                            .cls-7,
                                            .cls-8,
                                            .cls-9 {
                                                stroke: #fff;
                                                stroke-miterlimit: 10;
                                            }

                                            .cls-10,
                                            .cls-11,
                                            .cls-12,
                                            .cls-3,
                                            .cls-7,
                                            .cls-8,
                                            .cls-9 {
                                                stroke-width: 2px;
                                            }

                                            .cls-10,
                                            .cls-4,
                                            .cls-6 {
                                                fill: none;
                                            }

                                            .cls-5,
                                            .cls-9 {
                                                fill: #57af60;
                                            }

                                            .cls-7 {
                                                fill: #3a8629;
                                            }

                                            .cls-8 {
                                                fill: #598535;
                                            }

                                            .cls-11 {
                                                fill: #9bad8a;
                                            }

                                            .cls-12 {
                                                fill: #77b739;
                                            }

                                            .cls-13 {
                                                fill: #428715;
                                            }

                                            .cls-14 {
                                                fill: #214414;
                                            }

                                            .cls-15 {
                                                fill: #748415;
                                            }

                                            .cls-16 {
                                                fill: #53601b;
                                            }

                                            .cls-17 {
                                                font-size: 29.74px;
                                            }

                                            .cls-17,
                                            .cls-18,
                                            .cls-19,
                                            .cls-20,
                                            .cls-21,
                                            .cls-22,
                                            .cls-23 {
                                                fill: #fff;
                                                font-family: MyriadPro-Regular, Myriad Pro;
                                            }

                                            .cls-18,
                                            .cls-19,
                                            .cls-22 {
                                                font-size: 25.67px;
                                            }

                                            .cls-18 {
                                                letter-spacing: -0.01em;
                                            }

                                            .cls-20 {
                                                font-size: 23.44px;
                                            }

                                            .cls-21 {
                                                font-size: 22.38px;
                                            }

                                            .cls-22 {
                                                letter-spacing: -0.01em;
                                            }

                                            .cls-23 {
                                                font-size: 28.49px;
                                            }
                                            .st2-34 {fill: rgba(0, 0, 0, 0.1);}
                                            .st1-37 {
                                            font-family: 'Montserrat-Bold';
                                            font-size: 40px;
                                            fill: #000;
                                            }
                                        </style>
                                    </defs>
                                    <!-- <title>ANTHIA ETAPA 1 modificado 17 de junio</title> -->
                                    <g id="Capa_11" data-name="Capa 11">
                                        <path class="cls-1 " d="M147.09,260.87C126.12,148,134,70.94,252.39,55.82S521,129,740.31,129.65c231.49.67,453.36-76.94,534.22-73.83C1432,61.88,1514.61,312.24,1507.9,412.09s-50,190.3-56.52,320.62c-5.84,117.21,43.21,169,19,296.44s-147,192.76-355.76,144.59c-149.13-46.42-409.62-120-508.55-137.43s-256,88.66-412.46-18.7c-82.67-56.75-38.12-232.12-25.12-402.71C180.07,462.72,157,314.08,147.09,260.87Z" transform="translate(-138.01 -54.08)"></path>
                                        <polyline class="cls-1" points="729.18 700.28 729.92 767.25 775.54 769.73 774.36 699.78 729.18 700.28"></polyline>
                                    </g>
                                    <g id="Calles">
                                        <path class="cls-2 " d="M1406.63,157.51,216.08,170.59q9.93,336.17-9.94,695.76c-7,24.24-23.15,36.76-48.19,38L155,950.77l155.78,8.3,1064.45,197.41,8.67-51.76,9-133.75.5-.71L1371.3,253l36.28-1.44Z" transform="translate(-138.01 -54.08)"></path>
                                        <rect class="cls-2" x="1333.2" y="1106.61" width="45.96" height="46.06" transform="translate(97.75 -288.25) rotate(10.8)"></rect>
                                        <polyline class="cls-2" points="339.9 300.97 339.18 232.61 389.57 232.04 390.34 300.41 339.9 300.97"></polyline>
                                        <polyline class="cls-2" points="280.3 301.62 277.07 233.32 339.18 232.61 339.9 300.97 281.44 300.97"></polyline>
                                        <path class="cls-3" d="M702.14,415.39c-6.72-17.5-10.95-38.63-13.19-62.66l-63.08.62.89,68.72c21,.71,42,2.3,63.16,4.91C698.5,427.3,703.41,424.2,702.14,415.39Z" transform="translate(-138.01 -54.08)"></path>
                                        <polyline class="cls-3" points="487.85 299.27 439.2 299.88 439.93 367.06 488.74 367.99 487.85 299.27"></polyline>
                                        <polygon class="cls-2" points="391.11 368.69 390.34 300.41 439.2 299.88 439.93 367.06 391.11 368.69"></polygon>
                                        <polygon class="cls-2" points="340.67 373.12 339.9 300.97 390.34 300.41 391.11 368.69 340.67 373.12"></polygon>
                                        <polygon class="cls-2" points="281.66 381.95 280.3 301.62 339.9 300.97 340.67 373.12 281.66 381.95"></polygon>
                                        <path class="cls-2" d="M913.56,823.81" transform="translate(-138.01 -54.08)"></path>
                                        <path class="cls-2" d="M374,169" transform="translate(-138.01 -54.08)"></path>
                                    </g>
                                    <g id="FONDO">
                                        <path class="cls-4" d="M215.44,170.68c6.88,226.17,2.8,458.51-10,695.76-7.34,25.13-24.06,36.93-48.48,37.8l25,1.32c9.08-4.54,15.46-10,20-16.11a54.53,54.53,0,0,0,10.19-22.22c6.06-106.52,9.81-218.82,12-335.11,1.42-133,1.31-256.95-2.09-361.44Z" transform="translate(-138.01 -54.08)"></path>
                                        <path class="cls-4" d="M176.74,904.86" transform="translate(-138.01 -54.08)"></path>
                                        <path class="cls-4" d="M210.4,851.21" transform="translate(-138.01 -54.08)"></path>
                                        <path class="cls-5" d="M249.76,170.32l2.88,155.52c.4,2.7,2,4.36,5,4.68,2.71-.24,4.45-1.68,4.81-4.8-.6-55-1.53-107.35-3-155.52Z" transform="translate(-138.01 -54.08)"></path>
                                        <path class="cls-5" d="M253,358.33c.38-2.94,1.87-4.7,4.84-4.89,2.63.28,4.46,1.54,4.87,4.56q1,246-11.63,481.68c-.45,2.8-2.26,4-5,4.2-3.07-.6-4.55-2.29-4.6-5C249.7,690.42,253,528.72,253,358.33Z" transform="translate(-138.01 -54.08)"></path>
                                        <path class="cls-5" d="M239.72,870.64c1.36-2.47,3-3.69,5-3.79,3-.11,5.28,1,6.64,3.79A99,99,0,0,0,268,910.24l-25.8-1.44-19.31-1.12A82.27,82.27,0,0,0,239.72,870.64Z" transform="translate(-138.01 -54.08)"></path>
                                        <path class="cls-4" d="M287.32,170c2.6,81.18,3.07,173.14,2.87,278.53l6.64,1c1-91.38-1.17-181-4.1-279.53Z" transform="translate(-138.01 -54.08)"></path>
                                        <path class="cls-4" d="M296.08,543.14l-6.4,1.81c-2.53,105.76-6.46,203.68-11.22,300.67-3.27,23.72,5.37,49.18,32.06,66.41l20.41.28c-33-13.89-47.74-37.07-45.57-67.07C290.47,744.73,293.73,646.87,296.08,543.14Z" transform="translate(-138.01 -54.08)"></path>
                                        <path class="cls-4" d="M281.21,846.21" transform="translate(-138.01 -54.08)"></path>
                                        <path class="cls-4" d="M315.79,912.31" transform="translate(-138.01 -54.08)"></path>
                                        <line class="cls-4" x1="245.79" y1="862.4" x2="678.87" y2="885.68"></line>
                                        <polyline class="cls-6" points="19.17 850.35 16.21 896.77 186.42 905.19 1255.11 962.66 1256.86 916.17 189.38 858.77"></polyline>
                                    </g>
                                    <g id="triangulo_entrada" data-name="triangulo entrada">
                                        <polygon class="cls-5" points="191.42 857.58 677.62 883.57 1254.55 914.64 1246.56 1054.85 191.42 857.58"></polygon>
                                    </g>
                                    <g id="Capa_13" data-name="Capa 13">
                                        <path class="cls-2" d="M769.73,934.15c13.8,36.31,10.79,71.28-12,104.7l51.42,9.66c15-37.82,17.31-75.1,5.7-111.79Z" transform="translate(-138.01 -54.08)"></path>
                                    </g>
                                    <g id="stage_1" data-name="Capa 17 copia">
                                        <path class="cls-3" d="M412,624.53c3.13-42.63,5.54-82.33,6.45-115.9,135.42-26.54,263.25-19.91,385.28,12,6,2.39,8.43,6.76,6.33,13.57-18.39,42.13-33.35,88.71-45.25,139.28L439.57,677A531.7,531.7,0,0,1,412,624.53Z" transform="translate(-138.01 -54.08)"></path>
                                        <path class="cls-3" d="M478.68,426.93,477.2,286.56v-.14l-62.11.71c3,53,4.75,103.2,4.59,148.63,92-16.84,182.54-18.86,271.91-8.86,7.94-.17,11.27-4,10.77-10.93a225.1,225.1,0,0,1-13.06-63.51c-.74-25,3.17-42.59,8.83-57.33,1.08-5.43-2.9-10.11-9.74-11.1L477.2,286.42" transform="translate(-138.01 -54.08)"></path>
                                        <path class="cls-7" d="M476.3,730.4c-3.21-6.49-.08-14.47,7.29-15.2l278.86-3a698.31,698.31,0,0,0-4.06,81.44A657.88,657.88,0,0,0,768,898.14L506.83,884c-7.4-1.28-11-7.26-7.71-15q18.21-29.53,8.2-72.66C502.12,773.8,490.49,750.87,476.3,730.4Z" transform="translate(-138.01 -54.08)"></path>
                                        <polyline class="cls-3" points="369.31 742.28 620.38 739.55 575.34 658.63 577.26 841.2 538.28 839.09 536.29 659.06 497.24 659.48 499.23 836.98 460.18 834.87 458.19 659.9 419.4 660.32 421 832.75"></polyline>
                                        <path class="mapsvg-region mapsvg-disabled" d="M726.42,246.52l59.45-.65c-11.43-27.87-20.42-55-26.15-81.08l-34.22.38Z" transform="translate(-138.01 -54.08)" title="349.54 m2" id="A-27" style="stroke-width: 1.5211px; fill: rgba(228, 22, 66, 0.52);" data-stroke-width="1.2"></path>
                                        <path class="cls-3" d="M725.5,165.17l-431.4,4.71c2.55,80.25,3.22,176.37,3,279.66,24.53,2.83,51.21.79,79.53-5a9.74,9.74,0,0,0,5.57-8.76c0-59.66-2.57-121.61-7.32-185.43l351.5-3.81" transform="translate(-138.01 -54.08)"></path>
                                        <path class="cls-3" d="M296.08,543.14c20.84-7.17,45.43-14.68,72-22.36,6.53-.82,11.4,2.17,12.2,8.86-3.07,91.76-16.14,167.25-9.41,250.65l13,134-53.56-2.85c-27.22-8.12-42-27.07-45.37-56C290.32,730.07,295.94,602.07,296.08,543.14Z" transform="translate(-138.01 -54.08)"></path>
                                        <path class="cls-3" d="M476.79,729.82c-3.21-6.48-.08-14.46,7.29-15.19l278.86-3a698.31,698.31,0,0,0-4.06,81.44,657.77,657.77,0,0,0,9.64,104.51l-261.2-14.13c-7.4-1.28-11-7.27-7.71-15q18.21-29.55,8.21-72.66C502.61,773.23,491,750.29,476.79,729.82Z" transform="translate(-138.01 -54.08)"></path>
                                        <path class="cls-3" d="M800.13,855.29A602.43,602.43,0,0,0,815.7,937.6l576.87,31.12-4.46-131.9-81.2,2.35.36,1.18-2.35,42.09Z" transform="translate(-138.01 -54.08)"></path>
                                        <path class="cls-3" d="M1371.37,283.68l-84.55,2.48c-5,61.2,4.6,143.34,2.11,234.42-9.44,118.31-10.55,226.75,18,318.59l81.2-2.35Z" transform="translate(-138.01 -54.08)"></path>
                                        <path class="cls-3" d="M798.15,164.3c7.76,29.43,16.94,56.95,28.63,81.07l461.9-5.08-1.86,45.87,84.55-2.48-.87-30.87,36.2-1.36-1-93.85Z" transform="translate(-138.01 -54.08)"></path>
                                        <path class="cls-3" d="M847.31,282.56c15.36,24.84,29.75,51.91,39.9,80.95,8.11,28.77,11.09,56.12,6.43,81.36l323.89-3.63c15.83-24.54,25.46-51.85,29.38-81.69,1.65-13.23,2.11-48.71,2.72-81.45Z" transform="translate(-138.01 -54.08)"></path>
                                        <path class="cls-3" d="M881.1,482.34c-31.44,55.11-55.26,101.87-70.56,163.57l338.35-3.72c7.8-.63,11.39-7.44,8.5-14.62-10.89-18.09-11.1-41.42-7.3-66.7,4.63-23,15.84-45.27,29.81-67.33,2.78-7-1.27-13.69-7.77-14.33Z" transform="translate(-138.01 -54.08)"></path>
                                        <path class="cls-3" d="M797,817.48l462.8,25.15c5.59-.62,7.78-3.5,7-8.38-6.56-23.69-11.7-52.71-16.2-84.08a660.73,660.73,0,0,1-4.94-71.59l-441,4.89C797.28,726.68,795.16,771.48,797,817.48Z" transform="translate(-138.01 -54.08)"></path>
                                        <ellipse class="cls-9" cx="792.43" cy="382.77" rx="63.4" ry="108.8" transform="translate(-221.79 246.71) rotate(-20.44)"></ellipse>
                                        <path class="cls-9" d="M390.93,643.79c-5.7,60.13-5.6,132.51,3.2,171.91C404.81,866.38,433,887,461.42,878.64c37.32-16.67,37.19-57.39,24-95.23A238,238,0,0,0,448,721.14c-19.44-26.53-36.13-52.9-47.76-79C397.48,637.85,392,639.55,390.93,643.79Z" transform="translate(-138.01 -54.08)"></path>
                                        <path class="cls-9" d="M1267.71,404.88c-.12-2.27-4-6.46-8.65-2.65-17.25,37.89-41.78,72-67.72,106.86-72.27,112.07,24.2,176.38,63.5,97.47,13.24-29.26,17.43-68.84,16.84-113.85C1272.11,466.43,1270.41,436.51,1267.71,404.88Z" transform="translate(-138.01 -54.08)"></path>
                                        <path class="cls-3" d="M379.53,484.53,357,490.23l-22.31,6.32-22.32,6.82-21.94,7.56.43-29.14A297.08,297.08,0,0,0,378.25,478C382.88,477.54,383.31,483.22,379.53,484.53Z" transform="translate(-138.01 -54.08)"></path>
                                        <path class="cls-3" d="M725.05,471.25l-20-3L685,465.8l-20.08-2.11-20.21-1.49L624.51,461l-20.2-.62-20.21-.25-20.21.25-20.2.74-20.21,1.24-20.08,1.62L483.19,466l-20.08,2.48-20,3.1-20,3.47c-4.4,0-4.49-5.27-1.11-6.44l20.08-3.47,20.08-3.1,20.21-2.48,20.33-2.11,20.33-1.74,20.33-1.11,20.33-.75,20.33-.24,20.33.24,20.46.62,20.33,1.12,20.33,1.61,20.2,2.11L706,461.83l20.21,3C729.74,466.2,729.16,471.41,725.05,471.25Z" transform="translate(-138.01 -54.08)"></path>
                                        <polyline class="cls-10" points="156.35 567.16 236.37 570 233.51 608.91 154.98 606.36 153.48 645.32 231.45 647.99 230.99 687.15 151.9 684.32 150.26 723.36 232.82 726.21 236.62 765.38 148.59 762.23 146.91 801.33 240.25 804.68"></polyline>
                                        <polyline class="cls-3" points="575.83 658.06 577.75 840.63 538.77 838.52 536.78 658.48 497.74 658.91 499.72 836.4 460.67 834.29 458.69 659.33 419.89 659.75 421.5 832.17"></polyline>
                                        <line class="cls-10" x1="276.2" y1="539.23" x2="650.98" y2="535.11"></line>
                                        <line class="cls-10" x1="348.11" y1="444.48" x2="350.09" y2="622.96"></line>
                                        <line class="cls-10" x1="582.65" y1="449.53" x2="584.51" y2="620.43"></line>
                                        <line class="cls-3" x1="280.3" y1="301.62" x2="551.29" y2="298.65"></line>
                                        <line class="cls-10" x1="389.57" y1="232.04" x2="391.11" y2="368.69"></line>
                                        <line class="cls-3" x1="438.48" y1="231.49" x2="439.92" y2="367.06"></line>
                                        <line class="cls-3" x1="488.75" y1="367.99" x2="486.96" y2="230.94"></line>
                                        <line class="cls-3" x1="244.22" y1="381.68" x2="159.14" y2="382.78"></line>
                                        <line class="cls-3" x1="159.12" y1="333.99" x2="243.68" y2="332.86"></line>
                                        <line class="cls-3" x1="242.35" y1="290.59" x2="158.96" y2="291.58"></line>
                                        <line class="cls-3" x1="158.59" y1="242.92" x2="239.94" y2="241.75"></line>
                                        <path class="mapsvg-region mapsvg-disabled" d="M507.82,795.79c-8.1-22.51-15-43.48-28.18-60.45-6.75-7.55-5.61-18.16,4.44-20.71l73.91-.36.87,81.13Z" transform="translate(-138.01 -54.08)" title="512.75 m2" id="A-98" style="stroke-width: 1.5211px; fill: rgba(228, 22, 66, 0.52);" data-stroke-width="1.2"></path>
                                        <path class="mapsvg-region mapsvg-disabled" d="M716.08,794l-.32-81.18,47.18-1.25c-2.87,25.1-4.07,53-4.55,82Z" transform="translate(-138.01 -54.08)" title="451.05 m2" id="A-93" style="stroke-width: 1.5211px; fill: rgba(228, 22, 66, 0.52);" data-stroke-width="1.2"></path>
                                        <path class="mapsvg-region mapsvg-disabled" d="M715.76,894.71l.32-99.45,42.32-.77c1.82,39.1,4.71,74,9.63,103.65Z" transform="translate(-138.01 -54.08)" title="454.05 m2" id="A-77" style="stroke-width: 1.5211px; fill: rgba(228, 22, 66, 0.52);" data-stroke-width="1.2"></path>
                                        <path class="mapsvg-region mapsvg-disabled" d="M 506.83 884 C 499.15 881.79 497.02 876.31 499.99 867.82 C 511.44 846.2700000000001 514.1800000000001 821.23 507.82 795.82 L 558.16 795.2 L 557.87 886.8000000000001 Z" transform="translate(-138.01 -54.08)" title="438.92 m2" id="A-82" style="fill: rgba(228, 22, 66, 0.52); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path class="mapsvg-region mapsvg-disabled" d="M 1205.33 359.65 L 1204.3899999999999 278.53 L 1249.6299999999999 278.09999999999997 C 1249.1999999999998 310.31999999999994 1248.6299999999999 341.29999999999995 1246.9099999999999 359.21999999999997 Z" transform="translate(-138.01 -54.08)" title="335.53 m2" id="A-145" style="stroke-width: 1.5211px; fill: rgba(228, 22, 66, 0.52);" data-stroke-width="1.2"></path>
                                        <line class="cls-3" x1="315.01" y1="195.4" x2="314.14" y2="114.07"></line>
                                        <line class="cls-3" x1="353.19" y1="113.64" x2="354.1" y2="194.93"></line>
                                        <line class="cls-3" x1="393.38" y1="194.55" x2="392.24" y2="113.22"></line>
                                        <line class="cls-3" x1="431.29" y1="112.79" x2="432.16" y2="194.13"></line>
                                        <line class="cls-3" x1="471.32" y1="193.7" x2="470.34" y2="112.36"></line>
                                        <line class="cls-3" x1="509.24" y1="111.94" x2="510.16" y2="193.28"></line>
                                        <line class="cls-3" x1="549.31" y1="192.78" x2="548.37" y2="111.46"></line>
                                        <line class="cls-3" x1="587.49" y1="111.09" x2="588.41" y2="192.43"></line>
                                        <line class="cls-3" x1="759.02" y1="109.13" x2="760.05" y2="190.51"></line>
                                        <line class="cls-3" x1="798.91" y1="190.08" x2="798.23" y2="108.69"></line>
                                        <line class="cls-3" x1="836.96" y1="108.27" x2="838.15" y2="189.65"></line>
                                        <line class="cls-3" x1="877.22" y1="189.22" x2="876.33" y2="107.83"></line>
                                        <line class="cls-3" x1="915.34" y1="107.4" x2="916.37" y2="188.79"></line>
                                        <line class="cls-3" x1="955.4" y1="188.36" x2="954.43" y2="106.97"></line>
                                        <line class="cls-3" x1="994.47" y1="187.93" x2="993.48" y2="106.43"></line>
                                        <line class="cls-3" x1="1032.65" y1="106.11" x2="1033.58" y2="187.5"></line>
                                        <line class="cls-3" x1="1072.57" y1="187.07" x2="1071.7" y2="105.68"></line>
                                        <line class="cls-3" x1="1110.76" y1="105.68" x2="1111.65" y2="186.64"></line>
                                        <line class="cls-3" x1="749.2" y1="309.43" x2="1108.89" y2="305.46"></line>
                                        <line class="cls-3" x1="792.82" y1="227.55" x2="794.76" y2="390.26"></line>
                                        <line class="cls-3" x1="833.78" y1="389.91" x2="832.07" y2="227.12"></line>
                                        <line class="cls-3" x1="871.11" y1="226.69" x2="872.86" y2="389.48"></line>
                                        <line class="cls-3" x1="912.01" y1="389.04" x2="910.17" y2="226.25"></line>
                                        <line class="cls-3" x1="949.21" y1="225.82" x2="950.96" y2="388.6"></line>
                                        <line class="cls-3" x1="990.01" y1="388.16" x2="988.27" y2="225.39"></line>
                                        <line class="cls-3" x1="1027.27" y1="224.94" x2="1029.06" y2="387.72"></line>
                                        <line class="cls-3" x1="1067.24" y1="305.92" x2="1066.37" y2="224.52"></line>
                                        <line class="cls-3" x1="700.61" y1="510.13" x2="1012.07" y2="506.79"></line>
                                        <line class="cls-3" x1="775.3" y1="590.7" x2="773.42" y2="427.94"></line>
                                        <line class="cls-3" x1="814.35" y1="590.34" x2="812.49" y2="427.57"></line>
                                        <line class="cls-3" x1="851.54" y1="427.09" x2="853.4" y2="589.84"></line>
                                        <line class="cls-3" x1="892.45" y1="589.47" x2="890.6" y2="426.67"></line>
                                        <line class="cls-3" x1="929.64" y1="426.25" x2="931.4" y2="588.98"></line>
                                        <line class="cls-3" x1="970.54" y1="588.55" x2="968.68" y2="425.85"></line>
                                        <line class="cls-3" x1="736.12" y1="591.21" x2="735.19" y2="509.76"></line>
                                        <line class="cls-3" x1="728.44" y1="628.65" x2="729.92" y2="767.25"></line>
                                        <line class="cls-3" x1="775.54" y1="769.73" x2="774.06" y2="628.2"></line>
                                        <polyline class="cls-3" points="819.55 627.69 821.16 772.21 866.7 774.68 865.17 627.19 910.67 626.68 912.3 777.16"></polyline>
                                        <line class="cls-3" x1="957.92" y1="779.72" x2="956.29" y2="626.18"></line>
                                        <line class="cls-3" x1="1001.78" y1="625.67" x2="1003.52" y2="781.99"></line>
                                        <line class="cls-3" x1="1049.14" y1="784.6" x2="1047.43" y2="625.17"></line>
                                        <path class="cls-3" d="M871.53,940.58" transform="translate(-138.01 -54.08)"></path>
                                        <line class="cls-3" x1="733.52" y1="886.5" x2="737.86" y2="805.28"></line>
                                        <line class="cls-3" x1="776.89" y1="807.38" x2="772.58" y2="888.46"></line>
                                        <line class="cls-3" x1="811.5" y1="890.71" x2="815.97" y2="809.48"></line>
                                        <line class="cls-3" x1="854.91" y1="811.58" x2="850.54" y2="892.88"></line>
                                        <line class="cls-3" x1="889.47" y1="894.94" x2="893.97" y2="813.72"></line>
                                        <line class="cls-3" x1="932.78" y1="815.77" x2="928.58" y2="897"></line>
                                        <line class="cls-3" x1="967.58" y1="898.97" x2="971.86" y2="817.87"></line>
                                        <line class="cls-3" x1="1010.93" y1="819.97" x2="1006.33" y2="901.25"></line>
                                        <line class="cls-3" x1="1045.55" y1="903.29" x2="1049.88" y2="822.16"></line>
                                        <polyline class="cls-3" points="1088.91 824.16 1084.61 905.53 1123.49 907.55 1127.98 826.26"></polyline>
                                        <line class="cls-3" x1="1162.57" y1="909.68" x2="1166.91" y2="828.36"></line>
                                        <line class="cls-3" x1="1147.34" y1="271" x2="1234.54" y2="268.61"></line>
                                        <line class="cls-3" x1="1235.59" y1="307.7" x2="1147.69" y2="310.3"></line>
                                        <line class="cls-3" x1="1149.33" y1="349.33" x2="1236.7" y2="346.75"></line>
                                        <line class="cls-3" x1="1237.82" y1="385.79" x2="1150.42" y2="388.4"></line>
                                        <line class="cls-3" x1="1151.32" y1="427.12" x2="1238.93" y2="424.84"></line>
                                        <line class="cls-3" x1="1240.44" y1="463.86" x2="1150.92" y2="466.5"></line>
                                        <line class="cls-3" x1="1148.1" y1="505.73" x2="1241.62" y2="502.79"></line>
                                        <line class="cls-3" x1="1242.81" y1="542.01" x2="1146.05" y2="544.77"></line>
                                        <line class="cls-3" x1="1145.01" y1="583.89" x2="1243.99" y2="581.13"></line>
                                        <line class="cls-3" x1="1245.16" y1="619.88" x2="1145.09" y2="622.94"></line>
                                        <line class="cls-3" x1="1146.7" y1="661.99" x2="1246.35" y2="659.1"></line>
                                        <line class="cls-3" x1="1247.53" y1="698.13" x2="1151.01" y2="700.98"></line>
                                        <line class="cls-3" x1="1157.4" y1="739.81" x2="1248.71" y2="737.16"></line>
                                        <line class="cls-10" x1="659.08" y1="701.04" x2="1112.59" y2="696.09"></line>
                                        <line class="cls-3" x1="369.8" y1="741.7" x2="620.87" y2="738.97"></line>
                                        <path class="cls-10" d="M412,625.08c3.13-42.64,5.54-82.34,6.45-115.91,135.42-26.53,263.25-19.9,385.28,12,6,2.39,8.43,6.76,6.33,13.57-18.39,42.13-33.35,88.71-45.25,139.28l-325.23,3.52A531.7,531.7,0,0,1,412,625.08Z" transform="translate(-138.01 -54.08)"></path>
                                        <line class="cls-10" x1="389.14" y1="622.54" x2="387.16" y2="440.79"></line>
                                        <line class="cls-10" x1="426.21" y1="438.9" x2="428.19" y2="622.12"></line>
                                        <line class="cls-10" x1="467.24" y1="621.69" x2="465.26" y2="438.73"></line>
                                        <line class="cls-10" x1="504.31" y1="440.54" x2="506.41" y2="621.27"></line>
                                        <line class="cls-10" x1="545.46" y1="620.85" x2="543.48" y2="444.06"></line>
                                        <rect class="cls-2" x="568.49" y="649.04" width="10.16" height="7.84"></rect>
                                        <polygon class="cls-11" points="390.34 300.41 389.57 232.04 339.18 232.61 339.9 300.97 390.34 300.41"></polygon>
                                        <path class="mapsvg-region mapsvg-disabled" d="M688.33,284.31l-63.45.71,1,68.33,63.08-.62c-.11-17.94,1.85-36.76,8.47-55.77C699.78,288.12,694.57,285.77,688.33,284.31Z" transform="translate(-138.01 -54.08)" title="431.13 m2" id="A-154" style="stroke-width: 1.5211px; fill: rgba(228, 22, 66, 0.52);" data-stroke-width="1.2"></path>
                                        <path class="mapsvg-region mapsvg-disabled" d="M1185.44,679.25l60-.52c1.18,18.19.89,43.45,5.34,71.44l-64.51.71Z" transform="translate(-138.01 -54.08)" title="416.42 m2" id="A-84" style="stroke-width: 1.5211px; fill: rgba(228, 22, 66, 0.52);" data-stroke-width="1.2"></path>
                                        <path class="mapsvg-region mapsvg-disabled" d="M1186.3,750.88l.85,87.8,72.69,4c4.63-.27,7.54-2.42,7-8.38-6.78-24.71-11.85-53.32-16-84.08Z" transform="translate(-138.01 -54.08)" title="610.74 m2" id="A-68" style="stroke-width: 1.5211px; fill: rgba(228, 22, 66, 0.52);" data-stroke-width="1.2"></path>
                                        <path class="mapsvg-region mapsvg-disabled" d="M866.45,682.73l-61.8.74c-3.83,21.34-6.17,45.58-7.56,71.66l70.11-.77Z" transform="translate(-138.01 -54.08)" title="451.10 m2" id="A-92" style="stroke-width: 1.5211px; fill: rgba(228, 22, 66, 0.52);" data-stroke-width="1.2"></path>
                                        <path class="mapsvg-region mapsvg-disabled" d="M867.94,821.33l-.74-67-70.11.77c-.7,24.23-1.13,47-.05,62.35Z" transform="translate(-138.01 -54.08)" title="434.84 m2" id="A-76" style="stroke-width: 1.5211px; fill: rgba(228, 22, 66, 0.52);" data-stroke-width="1.2"></path>
                                        <path class="mapsvg-region mapsvg-disabled" d="M374,169.27l-79.88,1,2.5,127L378,296.09c-.93-11.95-2.22-27.27-3-45.5Z" transform="translate(-138.01 -54.08)" title="954.63 m2" id="A-17" style="fill: rgba(228, 22, 66, 0.52); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path class="cls-12" d="M295.76,582.24" transform="translate(-138.01 -54.08)"></path>
                                        <path class="mapsvg-region mapsvg-disabled" d="M284.92,855.41a60.74,60.74,0,0,0,45.37,56l53.56,2.85-5.58-55.54Z" transform="translate(-138.01 -54.08)" id="A-1" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" title="434.62 m2" data-stroke-width="1.2"></path>
                                        <path class="mapsvg-region mapsvg-disabled" d="M 875.88 859.36 L 800.13 855.29 C 803.74 884.1999999999999 808.74 911.8199999999999 815.7 937.5999999999999 L 871.5300000000001 940.5999999999999 Z" transform="translate(-138.01 -54.08)" title="undefined" id="A-67" style="stroke-width: 1.5211px; fill: rgba(228, 22, 66, 0.52);" data-stroke-width="1.2"></path>
                                        <path class="mapsvg-region mapsvg-disabled" d="M720.67,503.61c28.82,4.66,56.22,10.21,82,16.77,6.71,2.45,9.78,6.75,7.36,13.84l-21.24,55-67.21.74Z" transform="translate(-138.01 -54.08)" title="590.83 m2" id="A-123" style="fill: rgba(228, 22, 66, 0.52); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path class="mapsvg-region mapsvg-disabled" d="M 721.6 589.94 L 788.8100000000001 589.2 C 778.5000000000001 621.13 769.8100000000001 650.38 764.8100000000001 673.5 L 722.5400000000001 674.5 Z" transform="translate(-138.01 -54.08)" title="431.60 m2" id="A-108" style="stroke-width: 1.5211px; fill: rgba(228, 22, 66, 0.52);" data-stroke-width="1.2"></path>
                                        <path class="mapsvg-region mapsvg-disabled" d="M418.31,355.7c1.07,28.31,1.33,55.2,1.37,80.06-1.28,1.09,33.85-6.71,59-8.83l-.76-71.88Z" transform="translate(-138.01 -54.08)" title="424.14 m2" id="A-144" style="stroke-width: 1.5211px; fill: rgba(228, 22, 66, 0.52);" data-stroke-width="1.2"></path>
                                        <path class="mapsvg-region mapsvg-disabled" d="M625.87,353.35l63.08-.62c.12,18.37,7.26,43.92,13.19,62.66,1.22,8.56-3.37,12-12.22,11.59-18.26-2.39-39.5-4-63.16-4.91Z" transform="translate(-138.01 -54.08)" title="462.79 m2" id="A-140" style="stroke-width: 1.5211px; fill: rgba(228, 22, 66, 0.52);" data-stroke-width="1.2"></path>
                                        <path class="mapsvg-region mapsvg-disabled" d="M 930.5 282.13 L 847.31 282.56 C 863.5 308.64 877.31 335.47 887.2099999999999 363.51 L 932.3599999999999 362.78 Z" transform="translate(-138.01 -54.08)" title="478.54 m2" id="A-153" style="stroke-width: 1.5211px; fill: rgba(228, 22, 66, 0.52);" data-stroke-width="1.2"></path>
                                        <path class="mapsvg-region mapsvg-disabled" d="M 932.36 362.78 L 887.21 363.51 C 895.82 395.65999999999997 898.3100000000001 423.05 893.64 444.87 L 933.31 443.87 Z" transform="translate(-138.01 -54.08)" title="298.00 m2" id="A-138" style="stroke-width: 1.5211px; fill: rgba(228, 22, 66, 0.52);" data-stroke-width="1.2"></path>
                                        <path class="mapsvg-region mapsvg-disabled" d="M1246.91,359.22l-80.68.86,1.17,81,50.13.2C1234.47,416.54,1243.84,389.05,1246.91,359.22Z" transform="translate(-138.01 -54.08)" title="530.31 m2" id="A-131" style="stroke-width: 1.5211px; fill: rgba(228, 22, 66, 0.52);" data-stroke-width="1.2"></path>
                                        <path class="mapsvg-region mapsvg-disabled" d="M911.51,482.55H881.66c-17.19,28.76-31.95,56.21-43,81.66l73.54-.42Z" transform="translate(-138.01 -54.08)" title="407.42 m2" id="A-122" style="stroke-width: 1.5211px; fill: rgba(228, 22, 66, 0.52);" data-stroke-width="1.2"></path>
                                        <path class="mapsvg-region mapsvg-disabled" d="M838.63,564.21c-11.27,24.27-20.24,52.11-28.09,81.7l63.45-.57-1-81.12Z" transform="translate(-138.01 -54.08)" title="385.69 m2" id="A-107" style="stroke-width: 1.5211px; fill: rgba(228, 22, 66, 0.52);" data-stroke-width="1.2"></path>
                                        <path class="mapsvg-region mapsvg-disabled" d="M1106.35,480.33l65.78-1.12c7.53,1.72,9.77,6.71,7.77,14.33l-29.81,67.33-42.95.29Z" transform="translate(-138.01 -54.08)" title="447.34 m2" id="A-116" style="stroke-width: 1.5211px; fill: rgba(228, 22, 66, 0.52);" data-stroke-width="1.2"></path>
                                        <path class="mapsvg-region mapsvg-disabled" d="M 1107.14 561.16 L 1108.01 642.28 L 1147.41 642.28 C 1156.8700000000001 641.28 1159.89 636.17 1157.41 627.5699999999999 C 1146.19 610.8399999999999 1146.8200000000002 586.93 1150.1100000000001 560.8699999999999 Z" transform="translate(-138.01 -54.08)" title="330.07 m2" id="A-100" style="stroke-width: 1.5211px; fill: rgba(228, 22, 66, 0.52);" data-stroke-width="1.2"></path>
                                        <path class="mapsvg-region mapsvg-disabled" d="M798.15,164.3c5.29,23.23,15.19,50.57,28.63,81.07L859,245l-.83-81.38Z" transform="translate(-138.01 -54.08)" title="365.85 m2" id="A-28" style="stroke-width: 1.5211px; fill: rgba(228, 22, 66, 0.52);" data-stroke-width="1.2"></path>
                                        <path d="M 148.58999633789062 762.22998046875 L 146.91000366210938 801.3300170898438 L 240.25 804.6799926757812 L 236.6199951171875 765.3800048828125 L 148.58999633789062 762.22998046875 Z" class="mapsvg-region mapsvg-disabled" id="A-2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" title="333.74 m2" data-stroke-width="1.2"></path>
                                        <path d="M 150.25999450683594 723.3599853515625 L 148.58999633789062 762.22998046875 L 236.6199951171875 765.3800048828125 L 232.82000732421875 726.2100219726562 L 150.25999450683594 723.3599853515625 Z" class="mapsvg-region mapsvg-disabled" title="312.50 m2" id="A-3" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 151.89999389648438 684.3200073242188 L 150.25999450683594 723.3599853515625 L 232.82000732421875 726.2100219726562 L 230.99000549316406 687.1500244140625 L 151.89999389648438 684.3200073242188 Z" class="mapsvg-region mapsvg-disabled" title="296.19 m2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" id="A-4" data-stroke-width="1.2"></path>
                                        <path d="M 153.47999572753906 645.3200073242188 L 151.89999389648438 684.3200073242188 L 230.99000549316406 687.1500244140625 L 231.4499969482422 647.989990234375 L 153.47999572753906 645.3200073242188 Z" class="mapsvg-region mapsvg-disabled" title="287.92 m2" id="A-5" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 154.97999572753906 606.3599853515625 L 153.47999572753906 645.3200073242188 L 231.4499969482422 647.989990234375 L 233.50999450683594 608.9099731445312 L 154.97999572753906 606.3599853515625 L 180.6766815185547 607.1943969726562 Z" class="mapsvg-region mapsvg-disabled" title="286.37 m2" style="fill: rgba(228, 22, 66, 0.52); stroke-width: 1.5211px;" id="A-6" data-stroke-width="1.2"></path>
                                        <path d="M 156.35000610351562 567.1599731445312 L 154.97999572753906 606.3599853515625 L 233.50999450683594 608.9099731445312 L 236.3699951171875 570 L 156.35000610351562 567.1599731445312 Z" class="mapsvg-region mapsvg-disabled" title="291.43 m2" id="A-7" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 157.74000549316406 528.1500244140625 L 156.35000610351562 567.1599731445312 L 236.3699951171875 570 L 239.25 531.1099853515625 L 157.74000549316406 528.1500244140625 Z" class="mapsvg-region mapsvg-disabled" title="299.12 m2" id="A-8" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 158.33999633789062 489.05999755859375 L 241.55999755859375 492.0199890136719 L 239.25 531.1099853515625 L 157.74000549316406 528.1500244140625 L 158.33999633789062 489.05999755859375 Z" class="mapsvg-region mapsvg-disabled" title="305.24 m2" id="A-9" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 159.1199951171875 333.989990234375 L 159.13999938964844 382.7799987792969 L 244.22000122070312 381.67999267578125 L 243.67999267578125 332.8599853515625 L 159.1199951171875 333.989990234375 Z" class="mapsvg-region mapsvg-disabled" title="390.39 m2" id="A-14" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 159.1199951171875 291.8500061035156 L 159.1199951171875 333.989990234375 L 243.67999267578125 332.8599853515625 L 242.36000061035156 290.8599853515625 L 159.1199951171875 291.8500061035156 Z" class="mapsvg-region mapsvg-disabled" title="335.02 m2" id="A-15" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 158.58999633789062 243.17999267578125 L 159.1199951171875 291.8500061035156 L 242.36000061035156 290.8599853515625 L 239.94000244140625 242.00999450683594 L 158.58999633789062 243.17999267578125" class="mapsvg-region mapsvg-disabled" title="379.72 m2" id="A-16" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 236.91000366210938 196.25 L 235.9600067138672 114.91999816894531 L 275.0899963378906 114.5 L 275.9599914550781 195.82000732421875 L 236.91000366210938 196.25 Z" class="mapsvg-region mapsvg-disabled" title="300.00 m2" id="A-18" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 275.5899963378906 195.61000061035156 L 274.6400146484375 114.29000091552734 L 313.7699890136719 113.86000061035156 L 314.6400146484375 195.19000244140625 L 275.5899963378906 195.61000061035156 Z" class="mapsvg-region mapsvg-disabled" title="300.00 m2" id="A-19" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 315.04998779296875 195.61000061035156 L 314.1000061035156 114.29000091552734 L 353.2300109863281 113.86000061035156 L 354.1000061035156 195.19000244140625 L 315.04998779296875 195.61000061035156 Z" class="mapsvg-region mapsvg-disabled" title="300.00 m2" id="A-20" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 354.1000061035156 194.75999450683594 L 353.1499938964844 113.43000030517578 L 392.2799987792969 113.01000213623047 L 393.1499938964844 194.33999633789062 L 354.1000061035156 194.75999450683594 Z" class="mapsvg-region mapsvg-disabled" title="300.00 m2" id="A-21" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 394.8149834157296 195.9849663258858 L 393.86497120869836 114.65497212422565 L 432.99497609151086 114.22497181904987 L 433.86497120869836 195.55497365010456 L 394.8149834157296 195.9849663258858 L 432.260009765625 193.91000366210938 L 432.260009765625 193.91000366210938 Z" class="mapsvg-region mapsvg-disabled" title="300.00 m2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" id="A-22" data-stroke-width="1.2"></path>
                                        <path d="M 432.260009765625 193.91000366210938 L 431.30999755859375 112.58000183105469 L 470.44000244140625 112.16000366210938 L 471.30999755859375 193.49000549316406 L 432.260009765625 193.91000366210938 Z" class="mapsvg-region mapsvg-disabled" title="300.00 m2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" id="A-23" data-stroke-width="1.2"></path>
                                        <path d="M 471.239990234375 193.91000366210938 L 470.2900085449219 112.58000183105469 L 509.4200134277344 112.16000366210938 L 510.2900085449219 193.49000549316406 L 471.239990234375 193.91000366210938 Z" class="mapsvg-region mapsvg-disabled" title="300.00 m2" id="A-24" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 510.3500061035156 193 L 509.3999938964844 111.66999816894531 L 548.530029296875 111.25 L 549.4000244140625 192.57000732421875 L 510.3500061035156 193 Z" class="mapsvg-region mapsvg-disabled" title="300.00 m2" id="A-25" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 549.3099975585939 194.28496937764365 L 548.3699951171876 112.95496754658896 L 587.4899902343751 112.52496724141318 L 588.3599853515626 193.8549767018624 L 549.3099975585939 194.28496937764365 Z" class="mapsvg-region mapsvg-disabled" title="300.00 m2" id="A-26" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 721.219970703125 191.1199951171875 L 720.280029296875 109.80000305175781 L 759.4000244140625 109.37000274658203 L 760.27001953125 190.6999969482422 L 721.219970703125 191.1199951171875 Z" class="mapsvg-region mapsvg-disabled" title="300.00 m2" id="A-29" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 759.9099731445312 190.69000244140625 L 758.9600219726562 109.37000274658203 L 798.0900268554688 108.94000244140625 L 798.9600219726562 190.27000427246094 L 759.9099731445312 190.69000244140625 Z" class="mapsvg-region mapsvg-disabled" title="300.00 m2" id="A-30" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 799.25 190.25999450683594 L 798.2999877929688 108.94000244140625 L 837.4299926757812 108.51000213623047 L 838.2999877929688 189.83999633789062 L 799.25 190.25999450683594 Z" class="mapsvg-region mapsvg-disabled" title="300.00 m2" id="A-31" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 837.9000244140625 189.8300018310547 L 836.9600219726562 108.51000213623047 L 876.0900268554688 108.08000183105469 L 876.9500122070312 189.41000366210938 L 837.9000244140625 189.8300018310547 Z" class="mapsvg-region mapsvg-disabled" title="300.00 m2" id="A-32" style="fill: rgba(228, 22, 66, 0.52); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 877.3099975585938 189.39999389648438 L 876.3699951171875 108.08000183105469 L 915.489990234375 107.6500015258789 L 916.3599853515625 188.97999572753906 L 877.3099975585938 189.39999389648438 Z" class="mapsvg-region mapsvg-disabled" title="300.00 m2" id="A-33" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 916.2899780273438 188.97000122070312 L 915.3499755859375 107.6500015258789 L 954.47998046875 107.22000122070312 L 955.3400268554688 188.5500030517578 L 916.2899780273438 188.97000122070312 Z" class="mapsvg-region mapsvg-disabled" title="300.00 m2" id="A-34" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 955.4600219726562 188.5399932861328 L 954.510009765625 107.22000122070312 L 993.6400146484375 106.79000091552734 L 994.510009765625 188.1199951171875 L 955.4600219726562 188.5399932861328 Z" class="mapsvg-region mapsvg-disabled" title="300.00 m2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" id="A-35" data-stroke-width="1.2"></path>
                                        <path d="M 994.5 188.05999755859375 L 993.5499877929688 106.7300033569336 L 1032.6800537109375 106.30000305175781 L 1033.550048828125 187.6300048828125 L 994.5 188.05999755859375 Z" class="mapsvg-region mapsvg-disabled" title="300.00 m2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" id="A-36" data-stroke-width="1.2"></path>
                                        <path d="M 1033.5799560546875 187.67999267578125 L 1032.6300048828125 106.3499984741211 L 1071.760009765625 105.93000030517578 L 1072.6300048828125 187.25999450683594 L 1033.5799560546875 187.67999267578125 Z" class="mapsvg-region mapsvg-disabled" title="300.00 m2" id="A-37" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 1072.6400146484375 187.25 L 1071.68994140625 105.91999816894531 L 1110.8199462890625 105.5 L 1111.68994140625 186.8300018310547 L 1072.6400146484375 187.25 Z" class="mapsvg-region mapsvg-disabled" title="300.00 m2" id="A-38" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 1111.699951171875 186.38999938964844 L 1110.760009765625 105.05999755859375 L 1149.8800048828125 104.63999938964844 L 1150.75 185.97000122070312 L 1111.699951171875 186.38999938964844 Z" class="mapsvg-region mapsvg-disabled" title="300.00 m2" id="A-39" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 1150.6700439453125 186.2100067138672 L 1149.800048828125 104.81999969482422 L 1267.68994140625 103.5199966430664 L 1268.68994140625 197.3699951171875 L 1232.489990234375 198.72999572753906 L 1233.3599853515625 229.60000610351562 L 1148.81005859375 232.0800018310547 L 1150.6700439453125 186.2100067138672 Z" class="mapsvg-region mapsvg-disabled" title="1303.81 m2" id="A-40" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 1148.81005859375 232.0800018310547 L 1147.3399658203125 271 L 1234.5400390625 268.6099853515625 L 1233.3599853515625 229.60000610351562 L 1148.81005859375 232.0800018310547 Z" class="mapsvg-region mapsvg-disabled" title="315.83 m2" id="A-41" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 955.2642303278028 697.719970703125 L 956.154183941084 779.719970703125 L 1001.7442107965528 782.1199951171875 L 1000.8842254449903 697.2899780273438 L 955.2642303278028 697.719970703125 Z" class="mapsvg-region mapsvg-disabled" title="undefined" id="A-70" style="stroke-width: 1.5211px; fill: rgba(228, 22, 66, 0.52);" data-stroke-width="1.2"></path>
                                        <path d="M 1147.3399658203125 271 L 1147.9599609375 310.29998779296875 L 1235.5899658203125 307.70001220703125 L 1234.5400390625 268.6099853515625 L 1147.3399658203125 271 Z" class="mapsvg-region mapsvg-disabled" title="322.62 m2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" id="A-42" data-stroke-width="1.2"></path>
                                        <path d="M 1147.9599609375 310.29998779296875 L 1149.3299560546875 349.3299865722656 L 1236.699951171875 346.75 L 1235.5899658203125 307.70001220703125 L 1147.9599609375 310.29998779296875 Z" class="mapsvg-region mapsvg-disabled" title="324.30 m2" id="A-43" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 1149.3299560546875 349.3299865722656 L 1150.6400146484375 388.3999938964844 L 1237.8199462890625 385.79998779296875 L 1236.699951171875 346.75 L 1149.3299560546875 349.3299865722656 Z" class="mapsvg-region mapsvg-disabled" title="rgb(89,133,53)" id="A-44" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 1150.6400146484375 388.3999938964844 L 1151.3199462890625 427.1199951171875 L 1238.9300537109375 424.8500061035156 L 1237.8199462890625 385.79998779296875 L 1150.6400146484375 388.3999938964844 Z" class="mapsvg-region mapsvg-disabled" title="322.02 m2" id="A-45" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 1151.3199462890625 427.1199951171875 L 1150.9200439453125 466.5 L 1240.43994140625 463.8599853515625 L 1238.9300537109375 424.8500061035156 L 1151.3199462890625 427.1199951171875 Z" class="mapsvg-region mapsvg-disabled" title="325.09 m2" id="A-46" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 1150.9200439453125 466.5 L 1148.0999755859375 505.739990234375 L 1241.22998046875 502.7900085449219 L 1240.43994140625 463.8599853515625 L 1150.9200439453125 466.5 Z" class="mapsvg-region mapsvg-disabled" title="334.93 m2" id="A-47" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 1148.0999755859375 505.739990234375 L 1146.050048828125 544.77001953125 L 1242.81005859375 542.010009765625 L 1241.22998046875 502.7900085449219 L 1148.0999755859375 505.739990234375 Z" class="mapsvg-region mapsvg-disabled" title="348.35 m2" id="A-48" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 1146.050048828125 544.77001953125 L 1145.010009765625 583.8900146484375 L 1243.989990234375 581.1300048828125 L 1242.81005859375 542.010009765625 L 1146.050048828125 544.77001953125 Z" class="mapsvg-region mapsvg-disabled" title="358.67 m2" id="A-49" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 1145.010009765625 583.8900146484375 L 1145.0899658203125 622.9400024414062 L 1245.1600341796875 619.8800048828125 L 1243.989990234375 581.1300048828125 L 1145.010009765625 583.8900146484375 Z" class="mapsvg-region mapsvg-disabled" title="365.13 m2" id="A-50" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 1145.0899658203125 622.9400024414062 L 1147.1199951171875 661.989990234375 L 1246.3499755859375 659.0999755859375 L 1245.1600341796875 619.8800048828125 L 1145.0899658203125 622.9400024414062 Z" class="mapsvg-region mapsvg-disabled" title="367.21 m2" id="A-51" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 1147.1199951171875 661.989990234375 L 1151.010009765625 700.97998046875 L 1247.530029296875 698.1300048828125 L 1246.3499755859375 659.0999755859375 L 1147.1199951171875 661.989990234375 Z" class="mapsvg-region mapsvg-disabled" title="361.03 m2" id="A-52" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 1151.010009765625 700.97998046875 L 1157.4000244140625 739.8099975585938 L 1248.7099609375 737.1599731445312 L 1247.530029296875 698.1300048828125 L 1151.010009765625 700.97998046875 Z" class="mapsvg-region mapsvg-disabled" title="345.55 m2" id="A-53" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 1157.4000244140625 739.8099975585938 L 1168.8900146484375 785.0900268554688 L 1250.0899658203125 782.739990234375 L 1248.7099609375 737.1599731445312 L 1157.4000244140625 739.8099975585938 Z" class="mapsvg-region mapsvg-disabled" title="371.00 m2" id="A-54" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 1168.8900146484375 785.0900268554688 L 1162.5699462890625 909.6799926757812 L 1254.550048828125 914.6400146484375 L 1250.0899658203125 782.739990234375 L 1168.8900146484375 785.0900268554688 Z" class="mapsvg-region mapsvg-disabled" title="1045.80 m2" id="A-55" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 1166.699951171875 828.3599853515625 L 1127.97998046875 826.260009765625 L 1123.489990234375 907.5499877929688 L 1162.5699462890625 909.6799926757812 L 1166.699951171875 828.3599853515625 Z" class="mapsvg-region mapsvg-disabled" title="300.00 m2" id="A-56" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 1127.97998046875 826.260009765625 L 1088.9100341796875 824.1599731445312 L 1084.6099853515625 905.530029296875 L 1123.489990234375 907.5499877929688" class="mapsvg-region mapsvg-disabled" title="300.00 m2" id="A-57" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 1088.9100341796875 824.1599731445312 L 1049.8800048828125 822.1599731445312 L 1045.550048828125 903.2899780273438 L 1084.6099853515625 905.530029296875 L 1088.9100341796875 824.1599731445312 Z" class="mapsvg-region mapsvg-disabled" title="300.00 m2" id="A-58" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 1049.8800048828125 822.1599731445312 L 1010.9299926757812 819.969970703125 L 1006.3300170898438 901.25 L 1045.550048828125 903.2899780273438 L 1049.8800048828125 822.1599731445312 Z" class="mapsvg-region mapsvg-disabled" title="300.00 m2" id="A-59" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 1010.9299926757812 819.969970703125 L 971.8599853515625 817.8699951171875 L 967.5800170898438 898.969970703125 L 1006.3300170898438 901.25 L 1010.9299926757812 819.969970703125 Z" class="mapsvg-region mapsvg-disabled" title="300.00 m2" id="A-60" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 971.8599853515625 817.8699951171875 L 932.780029296875 815.77001953125 L 928.5800170898438 897 L 967.5800170898438 898.969970703125 L 971.8599853515625 817.8699951171875 Z" class="mapsvg-region mapsvg-disabled" title="300.00 m2" id="A-61" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 932.780029296875 815.77001953125 L 893.969970703125 813.719970703125 L 889.47998046875 894.9400024414062 L 928.5800170898438 897 L 932.780029296875 815.77001953125 Z" class="mapsvg-region mapsvg-disabled" title="300.00 m2" id="A-62" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 893.969970703125 813.719970703125 L 854.9099731445312 811.5800170898438 L 850.5399780273438 892.8800048828125 L 889.47998046875 894.9400024414062 L 893.969970703125 813.719970703125 Z" class="mapsvg-region mapsvg-disabled" title="300.00 m2" id="A-63" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 854.9099731445312 811.5800170898438 L 815.969970703125 809.47998046875 L 811.5 890.7100219726562 L 850.5399780273438 892.8800048828125 L 854.9099731445312 811.5800170898438 Z" class="mapsvg-region mapsvg-disabled" title="300.00 m2" id="A-64" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 815.969970703125 809.47998046875 L 776.8900146484375 807.3800048828125 L 772.5800170898438 888.469970703125 L 811.5 890.7100219726562 L 815.969970703125 809.47998046875 Z" class="mapsvg-region mapsvg-disabled" title="300.00 m2" id="A-65" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 776.8900146484375 807.3800048828125 L 737.8599853515625 805.280029296875 L 733.52001953125 886.5 L 772.5800170898438 888.469970703125 L 776.8900146484375 807.3800048828125 Z" class="mapsvg-region mapsvg-disabled" title="300.00 m2" id="A-66" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 1002.6500244140625 697.2899780273438 L 1003.510009765625 782.1199951171875 L 1049.1400146484375 784.5999755859375 L 1048.280029296875 696.7899780273438 L 1002.6500244140625 697.2899780273438 Z" class="mapsvg-region mapsvg-disabled" title="371.39 m2" id="A-69" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 911.530029296875 698.3099975585938 L 912.3200073242188 777.1599731445312 L 957.9199829101562 779.719970703125 L 957.030029296875 697.719970703125 L 911.530029296875 698.3099975585938 Z" class="mapsvg-region mapsvg-disabled" title="345.90 m2" id="A-71" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 865.9299926757812 698.5700073242188 L 866.739990234375 774.6900024414062 L 912.3200073242188 777.1599731445312 L 911.530029296875 698.3099975585938 L 865.9299926757812 698.5700073242188 Z" class="mapsvg-region mapsvg-disabled" title="333.15 m2" id="A-72" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 820.0399780273438 699.2100219726562 L 821 772.2999877929688 L 866.739990234375 774.6900024414062 L 865.9299926757812 698.5700073242188 L 820.0399780273438 699.2100219726562 Z" class="mapsvg-region mapsvg-disabled" title="320.40 m2" id="A-73" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 774.3599853515625 699.780029296875 L 775.5399780273438 769.9600219726562 L 821 772.2999877929688 L 820.0399780273438 699.2100219726562 L 774.3599853515625 699.780029296875 Z" class="mapsvg-region mapsvg-disabled" title="307.66 m2" id="A-74" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 729.1799926757812 700.280029296875 L 729.9199829101562 767.25 L 775.5399780273438 769.9600219726562 L 774.3599853515625 699.780029296875 L 729.1799926757812 700.280029296875 Z" class="mapsvg-region mapsvg-disabled" title="294.91 m2" id="A-75" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 538.77001953125 838.52001953125 L 538.9400024414062 740.3800048828125 L 578.0700073242188 739.9600219726562 L 577.75 840.6300048828125 L 538.77001953125 838.52001953125 Z" class="mapsvg-region mapsvg-disabled" title="368.62 m2" id="A-78" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 499.7200012207031 836.4000244140625 L 498.9800109863281 740.3800048828125 L 538.1099853515625 739.9600219726562 L 538.27001953125 838.489990234375 L 499.7200012207031 836.4000244140625 Z" class="mapsvg-region mapsvg-disabled" title="359.25 m2" id="A-79" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 460.6700134277344 834.2899780273438 L 460.260009765625 740.3800048828125 L 499.3900146484375 739.9600219726562 L 499.7200012207031 836.4000244140625 L 460.6700134277344 834.2899780273438 Z" class="mapsvg-region mapsvg-disabled" title="349.89 m2" id="A-80" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 420.2699890136719 832.7100219726562 L 420.2699890136719 741.8300170898438 L 459.3999938964844 741.4000244140625 L 460.6700134277344 834.2899780273438 L 420.2699890136719 832.7100219726562 Z" class="mapsvg-region mapsvg-disabled" title="340.52 m2" id="A-81" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 1001.780029296875 625.6699829101562 L 1047.4300537109375 625.1599731445312 L 1048.280029296875 696.7899780273438 L 1002.6500244140625 697.2899780273438 L 1001.780029296875 625.6699829101562 Z" class="mapsvg-region mapsvg-disabled" title="308.00 m2" id="A-85" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 956.2899780273438 626.1799926757812 L 1001.780029296875 625.6699829101562 L 1002.6500244140625 697.2899780273438 L 957.030029296875 697.719970703125 L 956.2899780273438 626.1799926757812 Z" class="mapsvg-region mapsvg-disabled" title="308.00 m2" id="A-86" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 910.6699829101562 626.6799926757812 L 956.2899780273438 626.1799926757812 L 957.030029296875 697.719970703125 L 911.530029296875 698.3099975585938 L 910.6699829101562 626.6799926757812 Z" class="mapsvg-region mapsvg-disabled" title="308.00 m2" id="A-87" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 865.1900024414062 627.3800048828125 L 910.6699829101562 626.6799926757812 L 911.530029296875 698.3099975585938 L 865.9299926757812 698.5700073242188 L 865.1900024414062 627.3800048828125 Z" class="mapsvg-region mapsvg-disabled" title="308.00 m2" id="A-88" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 819.5499877929688 627.6900024414062 L 865.1900024414062 627.3800048828125 L 865.9299926757812 698.5700073242188 L 820.0399780273438 699.2100219726562 L 819.5499877929688 627.6900024414062 Z" class="mapsvg-region mapsvg-disabled" title="308.00 m2" id="A-89" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 819.5499877929688 627.6900024414062 L 774.0599975585938 628.2000122070312 L 774.3599853515625 699.780029296875 L 820.0399780273438 699.2100219726562 L 819.5499877929688 627.6900024414062 Z" class="mapsvg-region mapsvg-disabled" title="308.00 m2" id="A-90" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 728.4400024414062 628.6500244140625 L 729.1799926757812 700.280029296875 L 774.3599853515625 699.780029296875 L 774.0599975585938 628.2000122070312 L 728.4400024414062 628.6500244140625 Z" class="mapsvg-region mapsvg-disabled" title="308.00 m2" id="A-91" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 248, 248); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 538.3099975585938 739.9000244140625 L 537.4400024414062 658.780029296875 L 577.75 658.780029296875 L 578.0700073242188 739.9600219726562 L 538.3099975585938 739.9000244140625 Z" class="mapsvg-region mapsvg-disabled" title="300.00 m2" id="A-94" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 499.260009765625 740.3300170898438 L 498.30999755859375 659.2100219726562 L 537.4400024414062 658.780029296875 L 538.3099975585938 739.9000244140625 L 499.260009765625 740.3300170898438 Z" class="mapsvg-region mapsvg-disabled" title="300.00 m2" id="A-95" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 459.7699890136719 740.3599853515625 L 458.82000732421875 659.239990234375 L 497.95001220703125 658.8099975585938 L 498.82000732421875 739.9400024414062 L 459.7699890136719 740.3599853515625 Z" class="mapsvg-region mapsvg-disabled" title="300.00 m2" id="A-96" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 420.6499938964844 741.739990234375 L 420.2699890136719 660.6199951171875 L 459.3999938964844 660.1900024414062 L 460.260009765625 741.3099975585938 L 420.6499938964844 741.739990234375 Z" class="mapsvg-region mapsvg-disabled" title="300.00 m2" id="A-97" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 930.9400024414062 588.6199951171875 L 930 507.5 L 969.1300048828125 507.07000732421875 L 969.989990234375 588.2000122070312 L 930.9400024414062 588.6199951171875 Z" class="mapsvg-region mapsvg-disabled" title="300.00 m2" id="A-101" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 891.989990234375 588.6199951171875 L 891.0399780273438 507.5 L 930.1699829101562 507.07000732421875 L 931.030029296875 588.2000122070312 L 891.989990234375 588.6199951171875 Z" class="mapsvg-region mapsvg-disabled" title="300.00 m2" id="A-102" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 852.72998046875 590.02001953125 L 851.780029296875 508.8999938964844 L 890.9099731445312 508.4800109863281 L 891.77001953125 589.5999755859375 L 852.72998046875 590.02001953125 Z" class="mapsvg-region mapsvg-disabled" title=" 300.00 m2" id="A-103" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 814.1099853515625 590.02001953125 L 813.1599731445312 508.8999938964844 L 852.2899780273438 508.4800109863281 L 853.1500244140625 589.5999755859375 L 814.1099853515625 590.02001953125 Z" class="mapsvg-region mapsvg-disabled" title="300.00 m2" id="A-104" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 774.6400146484375 591.02001953125 L 773.7000122070312 509.8999938964844 L 812.8300170898438 509.4800109863281 L 813.7000122070312 590.5999755859375 L 774.6400146484375 591.02001953125 Z" class="mapsvg-region mapsvg-disabled" title="300.00 m2" id="A-105" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 253, 253); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 735.969970703125 591.260009765625 L 735.030029296875 510.1400146484375 L 774.1500244140625 509.7099914550781 L 775.02001953125 590.8300170898438 L 735.969970703125 591.260009765625 Z" class="mapsvg-region mapsvg-disabled" title="300.00 m2" id="A-106" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 544.469970703125 536.280029296875 L 583.5800170898438 535.8499755859375 L 584.510009765625 620.4299926757812 L 545.4600219726562 620.8499755859375 L 544.469970703125 536.280029296875 Z" class="mapsvg-region mapsvg-disabled" title="312.00 m2" id="A-109" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 505.489990234375 536.6699829101562 L 544.469970703125 536.280029296875 L 545.4600219726562 620.8499755859375 L 506.4100036621094 621.27001953125 L 505.489990234375 536.6699829101562 Z" class="mapsvg-region mapsvg-disabled" title="312.00 m2" id="A-110" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 466.25 536.8499755859375 L 505.489990234375 536.6699829101562 L 506.4100036621094 621.27001953125 L 467.239990234375 621.7000122070312 L 466.25 536.8499755859375 Z" class="mapsvg-region mapsvg-disabled" title="312.00 m2" id="A-111" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 427.42999267578125 537.5599975585938 L 466.25 536.8499755859375 L 467.239990234375 621.7000122070312 L 428.19000244140625 622.1199951171875 L 427.42999267578125 537.5599975585938 Z" class="mapsvg-region mapsvg-disabled" title="312.00 m2" id="A-112" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 388.2200012207031 537.9199829101562 L 427.42999267578125 537.5599975585938 L 428.19000244140625 622.1199951171875 L 389.1400146484375 622.5399780273438 L 388.2200012207031 537.9199829101562 Z" class="mapsvg-region mapsvg-disabled" title="312.00 m2" id="A-113" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 349.19000244140625 538.27001953125 L 388.2200012207031 537.9199829101562 L 389.1400146484375 622.5399780273438 L 350.0899963378906 622.9600219726562 L 349.19000244140625 538.27001953125 Z" class="mapsvg-region mapsvg-disabled" title="312.00 m2" id="A-114" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 276.20001220703125 538.6799926757812 L 273.9700012207031 571 L 301.55999755859375 623.489990234375 L 350.0899963378906 622.9600219726562 L 349.19000244140625 538.27001953125 L 276.20001220703125 538.6799926757812 Z" class="mapsvg-region mapsvg-disabled" title="535.79 m2" id="A-115" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 543.47998046875 443.57000732421875 L 582.6500244140625 449.5299987792969 L 583.5800170898438 535.8499755859375 L 544.469970703125 536.280029296875 L 543.47998046875 443.57000732421875 Z" class="mapsvg-region mapsvg-disabled" title="329.94 m2" id="A-124" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 930.1500244140625 507.7900085449219 L 929.2100219726562 426.6700134277344 L 968.3400268554688 426.239990234375 L 969.2000122070312 507.3699951171875 L 930.1500244140625 507.7900085449219 Z" class="mapsvg-region mapsvg-disabled" title="300.00 m2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" id="A-117" data-stroke-width="1.2"></path>
                                        <path d="M 891.1199951171875 507.7900085449219 L 890.1799926757812 426.6700134277344 L 929.2999877929688 426.239990234375 L 930.1699829101562 507.3699951171875 L 891.1199951171875 507.7900085449219 Z" class="mapsvg-region mapsvg-disabled" title="300.00 m2" id="A-118" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 852.72998046875 508.6400146484375 L 851.780029296875 427.5199890136719 L 890.9099731445312 427.0899963378906 L 891.77001953125 508.2200012207031 L 852.72998046875 508.6400146484375 Z" class="mapsvg-region mapsvg-disabled" title="300.00 m2" id="A-119" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 813.8800048828125 509.5899963378906 L 812.9299926757812 428.4700012207031 L 852.0599975585938 428.0400085449219 L 852.9199829101562 509.1700134277344 L 813.8800048828125 509.5899963378906 Z" class="mapsvg-region mapsvg-disabled" title="300.00 m2" id="A-120" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 774.4400024414062 509.5899963378906 L 773.489990234375 428.4700012207031 L 812.6199951171875 428.0400085449219 L 813.489990234375 509.1700134277344 L 774.4400024414062 509.5899963378906 Z" class="mapsvg-region mapsvg-disabled" title="300.00 m2" id="A-121" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 504.30999755859375 439.989990234375 L 543.47998046875 443.57000732421875 L 544.469970703125 536.280029296875 L 505.489990234375 536.6699829101562 L 504.30999755859375 439.989990234375 Z" class="mapsvg-region mapsvg-disabled" title="347.95 m2" id="A-125" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 465.25 438.3500061035156 L 504.30999755859375 439.989990234375 L 505.489990234375 536.6699829101562 L 466.25 536.8499755859375 L 465.25 438.3500061035156 Z" class="mapsvg-region mapsvg-disabled" title="359.26 m2" id="A-126" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 426.2099914550781 438.3500061035156 L 465.25 438.3500061035156 L 466.25 536.8499755859375 L 427.42999267578125 537.5599975585938 L 426.2099914550781 438.3500061035156 Z" class="mapsvg-region mapsvg-disabled" title="363.92 m2" id="A-127" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 387.1600036621094 440.239990234375 L 426.2099914550781 438.3500061035156 L 427.42999267578125 537.5599975585938 L 388.2200012207031 537.9199829101562 L 387.1600036621094 440.239990234375 Z" class="mapsvg-region mapsvg-disabled" title="361.99 m2" id="A-128" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 348.1099853515625 444.4800109863281 L 387.1600036621094 440.239990234375 L 388.2200012207031 537.9199829101562 L 349.19000244140625 538.27001953125 L 348.1099853515625 444.4800109863281 Z" class="mapsvg-region mapsvg-disabled" title="353.43 m2" id="A-129" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 280.4200134277344 454.5400085449219 L 276.20001220703125 538.6799926757812 L 349.19000244140625 538.27001953125 L 348.1099853515625 444.4800109863281 L 280.4200134277344 454.5400085449219 Z" class="mapsvg-region mapsvg-disabled" title="591.61 m2" id="A-130" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 990.3400268554688 387.3900146484375 L 989.3900146484375 306.260009765625 L 1028.52001953125 305.8399963378906 L 1029.3900146484375 386.9599914550781 L 990.3400268554688 387.3900146484375 Z" class="mapsvg-region mapsvg-disabled" title="300.00 m2" id="A-132" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 951.280029296875 387.80999755859375 L 950.3400268554688 306.69000244140625 L 989.4600219726562 306.2699890136719 L 990.3300170898438 387.3900146484375 L 951.280029296875 387.80999755859375 Z" class="mapsvg-region mapsvg-disabled" title="300.00 m2" id="A-133" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 912.0999755859375 388.9100036621094 L 911.1599731445312 307.7900085449219 L 950.280029296875 307.3699951171875 L 951.1500244140625 388.489990234375 L 912.0999755859375 388.9100036621094 Z" class="mapsvg-region mapsvg-disabled" title="300.00 m2" id="A-134" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 872.719970703125 389.5899963378906 L 871.780029296875 308.4700012207031 L 910.9099731445312 308.0400085449219 L 911.77001953125 389.1700134277344 L 872.719970703125 389.5899963378906 Z" class="mapsvg-region mapsvg-disabled" title="300.00 m2" id="A-135" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 833.8699951171875 389.5899963378906 L 832.9299926757812 308.4700012207031 L 872.0599975585938 308.0400085449219 L 872.9199829101562 389.1700134277344 L 833.8699951171875 389.5899963378906 Z" class="mapsvg-region mapsvg-disabled" title="300.00 m2" id="A-136" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 795.2899780273438 389.82000732421875 L 794.3499755859375 308.70001220703125 L 833.47998046875 308.2699890136719 L 834.3400268554688 389.3999938964844 L 795.2899780273438 389.82000732421875 Z" class="mapsvg-region mapsvg-disabled" title="300.00 m2" id="A-137" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 439.20001220703125 299.8800048828125 L 487.8500061035156 299.2699890136719 L 488.75 367.989990234375 L 439.9200134277344 366.7900085449219 L 439.20001220703125 299.8800048828125 Z" class="mapsvg-region mapsvg-disabled" title="311.95 m2" id="A-141" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 390.3399963378906 300.4100036621094 L 439.20001220703125 299.8800048828125 L 439.9200134277344 366.7900085449219 L 391.1099853515625 368.260009765625 L 390.3399963378906 300.4100036621094 Z" class="mapsvg-region mapsvg-disabled" title="311.21 m2" id="A-142" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 339.8999938964844 300.9700012207031 L 390.3399963378906 300.4100036621094 L 391.1099853515625 368.260009765625 L 340.6700134277344 372.8500061035156 L 339.8999938964844 300.9700012207031 Z" class="mapsvg-region mapsvg-disabled" title="333.46 m2" id="A-143" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 1028.2099609375 306 L 1027.27001953125 224.8699951171875 L 1066.3900146484375 224.4499969482422 L 1067.260009765625 305.57000732421875 L 1028.2099609375 306 Z" class="mapsvg-region mapsvg-disabled" title="300.00 m2" id="A-146" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 989.219970703125 307.3699951171875 L 988.27001953125 226.25 L 1027.4000244140625 225.82000732421875 L 1028.27001953125 306.94000244140625 L 989.219970703125 307.3699951171875 Z" class="mapsvg-region mapsvg-disabled" title="300.00 m2" id="A-147" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 950.1500244140625 307.3699951171875 L 949.2100219726562 226.25 L 988.3400268554688 225.82000732421875 L 989.2000122070312 306.94000244140625 L 950.1500244140625 307.3699951171875 Z" class="mapsvg-region mapsvg-disabled" title="300.00 m2" id="A-148" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 911.2899780273438 307.3699951171875 L 910.3400268554688 226.25 L 949.469970703125 225.82000732421875 L 950.3400268554688 306.94000244140625 L 911.2899780273438 307.3699951171875 Z" class="mapsvg-region mapsvg-disabled" title=" 300.00 m2" id="A-149" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 872.3099975585938 308.2300109863281 L 871.3599853515625 227.11000061035156 L 910.489990234375 226.69000244140625 L 911.3599853515625 307.80999755859375 L 872.3099975585938 308.2300109863281 Z" class="mapsvg-region mapsvg-disabled" title="300.00 m2" id="A-150" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 832.4500122070312 308.2300109863281 L 831.510009765625 227.11000061035156 L 870.6400146484375 226.69000244140625 L 871.5 307.80999755859375 L 832.4500122070312 308.2300109863281 Z" class="mapsvg-region mapsvg-disabled" title="300.00 m2" id="A-151" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 793.4299926757812 309.1700134277344 L 792.489990234375 228.0399932861328 L 831.6199951171875 227.6199951171875 L 832.47998046875 308.739990234375 L 793.4299926757812 309.1700134277344 Z" class="mapsvg-region mapsvg-disabled" title="300.00 m2" id="A-152" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 486.0250434397392 229.16502757059857 L 437.6350287913017 229.71503062235638 L 438.3650397776298 297.57503123270794 L 487.0150336741142 296.9750251291923 L 486.0250434397392 229.16502757059857 Z" class="mapsvg-region mapsvg-disabled" title="315.00 m2" id="A-155" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 438.4800109863281 231.49000549316406 L 389.57000732421875 232.0399932861328 L 390.3399963378906 300.4100036621094 L 439.20001220703125 299.8800048828125 L 438.4800109863281 231.49000549316406 Z" class="mapsvg-region mapsvg-disabled" title="315.00 m2" id="A-156" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 389.57000732421875 232.0399932861328 L 339.17999267578125 232.61000061035156 L 339.8999938964844 300.9700012207031 L 390.3399963378906 300.4100036621094 L 389.57000732421875 232.0399932861328 Z" class="mapsvg-region mapsvg-disabled" title="325.50 m2" id="A-157" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                        <path d="M 339.17999267578125 232.61000061035156 L 277.07000732421875 233.0399932861328 L 280.29998779296875 301.6199951171875 L 339.8999938964844 300.9700012207031 L 339.17999267578125 232.61000061035156 Z" class="mapsvg-region mapsvg-disabled" title="391.64 m2" id="A-158" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 1.5211px;" data-stroke-width="1.2"></path>
                                    </g>
                                    <g id="Capa_9" data-name="Capa 9">
                                        <circle class="cls-13" cx="275.18" cy="690.94" r="7.92"></circle>
                                        <path class="cls-14" d="M407.21,739.83a8.23,8.23,0,0,0,.42,10.83c4.85,5.66,10.93.19,10.93.19C410.87,752.42,407,748.85,407.21,739.83Z" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-13" cx="277.14" cy="674.43" r="12.65"></circle>
                                        <path class="cls-14" d="M405.6,720.22a13.17,13.17,0,0,0,.67,17.3c7.75,9,17.47.29,17.47.29C411.45,740.32,405.28,734.62,405.6,720.22Z" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-13" cx="295.9" cy="691.08" r="18.76"></circle>
                                        <path class="cls-14" d="M419.75,732.87s-10.5,12.26,1,25.65,25.9.44,25.9.44C428.42,762.68,419.27,754.23,419.75,732.87Z" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-13" cx="625.96" cy="335.7" r="12.43"></circle>
                                        <path class="cls-14" d="M752.19,385.8a12.94,12.94,0,0,0,7.06,15.48c10.42,5.32,16-6.24,16-6.24C765,401.9,757.27,399,752.19,385.8Z" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-13" cx="609.75" cy="334.39" r="12.65"></circle>
                                        <path class="cls-14" d="M735.78,384.43A13.16,13.16,0,0,0,743,400.18c10.6,5.41,16.27-6.36,16.27-6.36C748.82,400.81,741,397.87,735.78,384.43Z" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-13" cx="686.52" cy="393.51" r="27.55"></circle>
                                        <path class="cls-14" d="M803.73,429.54s-15.43,18,1.45,37.67,38,.64,38,.64C816.46,473.31,803,460.9,803.73,429.54Z" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-13" cx="616.37" cy="266.99" r="7.92"></circle>
                                        <path class="cls-14" d="M748.4,315.88a8.25,8.25,0,0,0,.42,10.83c4.86,5.66,10.94.19,10.94.19C752.06,328.47,748.2,324.9,748.4,315.88Z" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-13" cx="618.34" cy="250.48" r="12.65"></circle>
                                        <path class="cls-14" d="M746.8,296.27a13.15,13.15,0,0,0,.67,17.29c7.75,9,17.46.3,17.46.3C752.65,316.37,746.48,310.67,746.8,296.27Z" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-13" cx="268.69" cy="736.24" r="7.92"></circle>
                                        <path class="cls-14" d="M400.73,785.13a8.24,8.24,0,0,0,.41,10.83c4.86,5.65,10.94.18,10.94.18C404.39,797.71,400.53,794.15,400.73,785.13Z" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-13" cx="270.66" cy="719.72" r="12.65"></circle>
                                        <path class="cls-14" d="M399.12,765.51a13.17,13.17,0,0,0,.67,17.3c7.75,9,17.46.3,17.46.3C405,785.62,398.8,779.92,399.12,765.51Z" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-13" cx="289.42" cy="736.38" r="18.76"></circle>
                                        <path class="cls-14" d="M413.27,778.16s-10.51,12.26,1,25.65,25.9.44,25.9.44C421.94,808,412.79,799.52,413.27,778.16Z" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-13" cx="327.4" cy="767.15" r="7.92"></circle>
                                        <path class="cls-14" d="M459.21,826.16a8.24,8.24,0,0,0,10.73,1.57c6.44-3.74,2.18-10.72,2.18-10.72C472.26,824.87,468,828,459.21,826.16Z" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-13" cx="311.52" cy="762.19" r="12.65"></circle>
                                        <path class="cls-14" d="M439.64,824.15a13.16,13.16,0,0,0,17.13,2.51c10.29-6,3.48-17.12,3.48-17.12C460.47,822.08,453.74,827.1,439.64,824.15Z" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-13" cx="331.32" cy="746.79" r="18.76"></circle>
                                        <path class="cls-14" d="M454.66,812.56s10.13,12.57,25.4,3.71,5.16-25.38,5.16-25.38C485.55,809.49,475.57,816.93,454.66,812.56Z" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-13" cx="281.5" cy="794.84" r="7.92"></circle>
                                        <path class="cls-14" d="M413.53,843.73a8.25,8.25,0,0,0,.42,10.83c4.86,5.65,10.94.18,10.94.18C417.19,856.32,413.33,852.75,413.53,843.73Z" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-13" cx="283.47" cy="778.33" r="12.65"></circle>
                                        <path class="cls-14" d="M411.93,824.12a13.15,13.15,0,0,0,.67,17.29c7.75,9,17.46.3,17.46.3C417.77,844.22,411.61,838.52,411.93,824.12Z" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-13" cx="302.23" cy="794.98" r="18.76"></circle>
                                        <path class="cls-14" d="M426.08,836.76s-10.51,12.26,1,25.66,25.89.43,25.89.43C434.74,866.57,425.6,858.12,426.08,836.76Z" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-13" cx="273.19" cy="647.27" r="4.49"></circle>
                                        <path class="cls-14" d="M408.18,704.65a4.66,4.66,0,0,0,6.13-.07c3.28-2.66.28-6.18.28-6.18C415.36,702.78,413.28,704.91,408.18,704.65Z" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-13" cx="263.88" cy="645.89" r="7.16"></circle>
                                        <path class="cls-14" d="M397.05,705.26a7.46,7.46,0,0,0,9.8-.11c5.23-4.25.44-9.88.44-9.88C408.52,702.26,405.2,705.66,397.05,705.26Z" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-13" cx="273.6" cy="635.53" r="10.62"></circle>
                                        <path class="cls-14" d="M404.43,697.45a11,11,0,0,0,14.53-.17c7.76-6.3.65-14.65.65-14.65C421.44,693,416.51,698.05,404.43,697.45Z" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-13" cx="608.45" cy="315.05" r="12.65"></circle>
                                        <path class="cls-14" d="M734.48,365.09a13.15,13.15,0,0,0,7.18,15.75c10.6,5.41,16.27-6.36,16.27-6.36C747.52,381.47,739.65,378.54,734.48,365.09Z" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-13" cx="620.31" cy="321.16" r="12.43"></circle>
                                        <path class="cls-14" d="M746.54,371.26a12.94,12.94,0,0,0,7.06,15.48c10.42,5.32,16-6.25,16-6.25C759.36,387.36,751.62,384.48,746.54,371.26Z" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-13" cx="637.1" cy="267.13" r="18.76"></circle>
                                        <path class="cls-14" d="M761,308.91s-10.51,12.26,1,25.66,25.89.43,25.89.43C769.61,338.72,760.47,330.27,761,308.91Z" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-15" cx="652.48" cy="307.14" r="12.65"></circle>
                                        <path class="cls-16" d="M792.77,348.78a13.16,13.16,0,0,0-14.55,9.37c-3.84,11.27,8.63,15.19,8.63,15.19C778.44,364,780.21,355.83,792.77,348.78Z" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-13" cx="673.87" cy="285.15" r="12.65"></circle>
                                        <path class="cls-14" d="M800.16,344a13.16,13.16,0,0,0,15.72,7.25c11.56-2.82,8.18-15.43,8.18-15.43C820.73,347.9,812.85,350.81,800.16,344Z" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-13" cx="660.69" cy="315.26" r="12.43"></circle>
                                        <path class="cls-14" d="M798.83,381.77A12.93,12.93,0,0,0,811.12,370c1.59-11.58-11.16-13-11.16-13C809.81,364.38,809.63,372.63,798.83,381.77Z" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-13" cx="697.36" cy="308.72" r="12.43"></circle>
                                        <path class="cls-14" d="M838.54,350.78a12.93,12.93,0,0,0-15,8.09c-4.61,10.75,7.31,15.53,7.31,15.53C823.35,364.65,825.7,356.74,838.54,350.78Z" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-13" cx="649.85" cy="364.79" r="12.43"></circle>
                                        <path class="cls-14" d="M776.38,414.12a12.93,12.93,0,0,0,6,15.92c10,6,16.36-5.18,16.36-5.18C788.1,431,780.57,427.65,776.38,414.12Z" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-13" cx="1051.22" cy="551.03" r="7.92"></circle>
                                        <path class="cls-14" d="M1183.26,599.92a8.24,8.24,0,0,0,.41,10.83c4.86,5.65,10.94.18,10.94.18C1186.91,612.51,1183.05,608.94,1183.26,599.92Z" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-13" cx="1053.19" cy="534.52" r="12.65"></circle>
                                        <path class="cls-14" d="M1181.65,580.31a13.15,13.15,0,0,0,.67,17.29c7.75,9,17.46.3,17.46.3C1187.5,600.41,1181.33,594.71,1181.65,580.31Z" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-13" cx="1071.95" cy="551.17" r="18.76"></circle>
                                        <path class="cls-14" d="M1195.8,593s-10.51,12.26,1,25.66,25.9.43,25.9.43C1204.47,622.76,1195.32,614.31,1195.8,593Z" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-13" cx="1090.5" cy="502.13" r="27.55"></circle>
                                        <path class="cls-14" d="M1239.55,581.46s21.67-9.63,14.87-34.64-34.07-16.92-34.07-16.92C1246.86,536.46,1253.65,553.44,1239.55,581.46Z" transform="translate(-138.01 -54.08)"></path>
                                        <path class="cls-4" d="M1227.67,510.08" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-13" cx="1118.01" cy="443.28" r="12.43"></circle>
                                        <path class="cls-14" d="M1244.25,493.38a12.93,12.93,0,0,0,7.06,15.48c10.41,5.32,16-6.24,16-6.24C1257.06,509.48,1249.33,506.6,1244.25,493.38Z" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-13" cx="1101.81" cy="441.97" r="12.65"></circle>
                                        <path class="cls-14" d="M1227.83,492a13.17,13.17,0,0,0,7.19,15.75c10.6,5.41,16.27-6.36,16.27-6.36C1240.87,508.39,1233,505.45,1227.83,492Z" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-13" cx="1100.51" cy="422.63" r="12.65"></circle>
                                        <path class="cls-14" d="M1226.53,472.67a13.17,13.17,0,0,0,7.19,15.75c10.6,5.41,16.27-6.36,16.27-6.36C1239.57,489.05,1231.7,486.12,1226.53,472.67Z" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-13" cx="1112.36" cy="428.74" r="12.43"></circle>
                                        <path class="cls-14" d="M1238.6,478.84a12.93,12.93,0,0,0,7.06,15.48c10.41,5.32,16-6.25,16-6.25C1251.41,494.94,1243.68,492.06,1238.6,478.84Z" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-13" cx="1080.45" cy="462" r="12.65"></circle>
                                        <path class="cls-14" d="M1229.86,510.57a13.17,13.17,0,0,0-16.16-6.21c-11.36,3.57-7.16,15.94-7.16,15.94C1209.08,508,1216.75,504.6,1229.86,510.57Z" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-15" cx="683.71" cy="344.43" r="12.65"></circle>
                                        <path class="cls-16" d="M811.32,405.7a13.16,13.16,0,0,0,16.92,3.66c10.67-5.25,4.63-16.83,4.63-16.83C832.24,405.05,825.18,409.6,811.32,405.7Z" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-15" cx="171.01" cy="441.49" r="6.22"></circle>
                                        <path class="cls-16" d="M303.91,499.1a6.47,6.47,0,0,0,8.31,1.8c5.25-2.58,2.28-8.27,2.28-8.27C314.19,498.78,310.73,501,303.91,499.1Z" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-13" cx="173.66" cy="436.85" r="4.38"></circle>
                                        <path class="cls-14" d="M314.87,487.94a4.55,4.55,0,0,0-6-.4c-3.39,2.34-.74,6-.74,6C307.74,489.22,309.93,487.31,314.87,487.94Z" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-13" cx="191.28" cy="436.86" r="4.38"></circle>
                                        <path class="cls-14" d="M332.49,488a4.54,4.54,0,0,0-6-.4c-3.39,2.33-.74,6-.74,6C325.36,489.23,327.55,487.32,332.49,488Z" transform="translate(-138.01 -54.08)"></path>
                                        <ellipse class="cls-15" cx="342.69" cy="490.09" rx="3.11" ry="3.05" transform="translate(-355.36 645.75) rotate(-75.57)"></ellipse>
                                        <path class="cls-16" d="M340.17,491.87a3.13,3.13,0,0,0,4.08.88c2.59-1.3,1.14-4.14,1.14-4.14C345.23,491.69,343.52,492.81,340.17,491.87Z" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-13" cx="205.94" cy="433.12" r="2.7"></circle>
                                        <path class="cls-14" d="M345.92,485.36a2.81,2.81,0,0,0-3.68-.24c-2.09,1.44-.45,3.69-.45,3.69C341.53,486.15,342.88,485,345.92,485.36Z" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-13" cx="217.65" cy="475.99" r="4.38"></circle>
                                        <path class="cls-14" d="M358.86,527.09a4.55,4.55,0,0,0-6-.41c-3.39,2.34-.74,6-.74,6C351.73,528.36,353.92,526.45,358.86,527.09Z" transform="translate(-138.01 -54.08)"></path>
                                        <ellipse class="cls-15" cx="343.43" cy="536.96" rx="3.11" ry="3.05" transform="translate(-400.19 681.65) rotate(-75.57)"></ellipse>
                                        <path class="cls-16" d="M340.91,538.73a3.13,3.13,0,0,0,4.08.88c2.59-1.3,1.14-4.13,1.14-4.13C346,538.55,344.26,539.67,340.91,538.73Z" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-13" cx="206.68" cy="479.98" r="2.7"></circle>
                                        <path class="cls-14" d="M346.66,532.23A2.8,2.8,0,0,0,343,532c-2.09,1.44-.45,3.7-.45,3.7C342.27,533,343.62,531.84,346.66,532.23Z" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-15" cx="223.87" cy="484.04" r="6.22"></circle>
                                        <path class="cls-16" d="M356.76,541.65a6.48,6.48,0,0,0,8.32,1.81c5.24-2.59,2.28-8.28,2.28-8.28C367.05,541.34,363.58,543.57,356.76,541.65Z" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-13" cx="217.85" cy="482.49" r="4.38"></circle>
                                        <path class="cls-14" d="M359.06,533.59a4.54,4.54,0,0,0-6-.4c-3.39,2.34-.74,6-.74,6C351.93,534.87,354.12,533,359.06,533.59Z" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-13" cx="189.71" cy="484.04" r="4.38"></circle>
                                        <path class="cls-14" d="M330.93,535.14a4.56,4.56,0,0,0-6-.4c-3.39,2.34-.74,6-.74,6C323.8,536.42,326,534.5,330.93,535.14Z" transform="translate(-138.01 -54.08)"></path>
                                        <ellipse class="cls-13" cx="212.69" cy="385.88" rx="3.02" ry="3.31"></ellipse>
                                        <path class="cls-14" d="M351.41,436.74a3.06,3.06,0,0,0-3.59,2.24,3.22,3.22,0,0,0,1.85,4.1C347.79,440.52,348.32,438.4,351.41,436.74Z" transform="translate(-138.01 -54.08)"></path>
                                        <ellipse class="cls-15" cx="316.63" cy="447.1" rx="2.64" ry="2.59" transform="translate(-333.29 588.23) rotate(-75.57)"></ellipse>
                                        <path class="cls-16" d="M314.48,448.61a2.67,2.67,0,0,0,3.47.75c2.2-1.11,1-3.52,1-3.52C318.78,448.45,317.33,449.41,314.48,448.61Z" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-13" cx="176.34" cy="388.31" r="2.29"></circle>
                                        <path class="cls-14" d="M316,440.83a2.39,2.39,0,0,0-3.13-.21c-1.77,1.22-.38,3.14-.38,3.14C312.3,441.5,313.44,440.5,316,440.83Z" transform="translate(-138.01 -54.08)"></path>
                                        <ellipse class="cls-15" cx="218.66" cy="387.32" rx="4.29" ry="4.7"></ellipse>
                                        <path class="cls-16" d="M355.07,445.77s3.43,1.48,5.47-2.34-1.84-6.17-1.84-6.17C360.87,441.27,359.72,444.13,355.07,445.77Z" transform="translate(-138.01 -54.08)"></path>
                                        <ellipse class="cls-13" cx="198.33" cy="391.25" rx="3.02" ry="3.31"></ellipse>
                                        <path class="cls-14" d="M337.05,442.12a3.06,3.06,0,0,0-3.59,2.24c-1.06,2.89,1.86,4.09,1.86,4.09C333.44,445.9,334,443.78,337.05,442.12Z" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-13" cx="170.4" cy="391.79" r="3.72"></circle>
                                        <path class="cls-14" d="M311.13,443.34a3.86,3.86,0,0,0-5.07-.35c-2.88,2-.63,5.1-.63,5.1C305.08,444.42,306.93,442.8,311.13,443.34Z" transform="translate(-138.01 -54.08)"></path>
                                        <ellipse class="cls-15" cx="326.58" cy="445.31" rx="2.64" ry="2.59" transform="translate(-324.09 596.52) rotate(-75.57)"></ellipse>
                                        <path class="cls-16" d="M324.43,446.82a2.67,2.67,0,0,0,3.47.75c2.2-1.11,1-3.52,1-3.52C328.73,446.66,327.28,447.62,324.43,446.82Z" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-13" cx="189.61" cy="386.32" r="2.29"></circle>
                                        <path class="cls-14" d="M329.3,438.84a2.38,2.38,0,0,0-3.13-.21c-1.78,1.22-.39,3.14-.39,3.14C325.56,439.51,326.71,438.51,329.3,438.84Z" transform="translate(-138.01 -54.08)"></path>
                                        <ellipse class="cls-15" cx="340.2" cy="442.73" rx="2.64" ry="2.59" transform="translate(-311.36 607.77) rotate(-75.57)"></ellipse>
                                        <path class="cls-16" d="M338.06,444.23a2.66,2.66,0,0,0,3.47.75c2.19-1.1,1-3.51,1-3.51C342.35,444.08,340.9,445,338.06,444.23Z" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-13" cx="1211.69" cy="1019.56" r="7.92"></circle>
                                        <path class="cls-14" d="M1344,1079.17a8.25,8.25,0,0,0,10.83.49c6-4.36,1.1-10.88,1.1-10.88C1356.88,1076.58,1353,1080.13,1344,1079.17Z" transform="translate(-138.01 -54.08)"></path>
                                        <path class="cls-13" d="M1332.36,1082.9a12.65,12.65,0,1,1,13.67-11.54,12.66,12.66,0,0,1-13.67,11.54" transform="translate(-138.01 -54.08)"></path>
                                        <path class="cls-14" d="M1324.35,1079.12a13.16,13.16,0,0,0,17.3.78c9.65-7,1.76-17.37,1.76-17.37C1344.88,1075,1338.68,1080.65,1324.35,1079.12Z" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-13" cx="1213.58" cy="998.92" r="18.76"></circle>
                                        <path class="cls-14" d="M1338.15,1066.08s11.33,11.5,25.64,1.17,2.61-25.76,2.61-25.76C1368.58,1060,1359.39,1068.35,1338.15,1066.08Z" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-13" cx="1166.28" cy="976.31" r="27.55"></circle>
                                        <path class="cls-14" d="M1330.38,1021.52s-7.78-22.4-33.27-17.73-19.72,32.52-19.72,32.52C1286.15,1010.45,1303.64,1005.11,1330.38,1021.52Z" transform="translate(-138.01 -54.08)"></path>
                                        <path class="cls-4" d="M1258.25,1027.35" transform="translate(-138.01 -54.08)"></path>
                                        <path class="cls-13" d="M1358.74,977.06a12.43,12.43,0,1,1-8.13,15.59,12.42,12.42,0,0,1,8.13-15.59" transform="translate(-138.01 -54.08)"></path>
                                        <path class="cls-14" d="M1368.66,978.13c6,10.78,2.46,18.24-11.14,22.19a12.94,12.94,0,0,0,16-5.73c6.17-9.93-4.88-16.46-4.88-16.46" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-13" cx="1221.79" cy="950.87" r="12.65"></circle>
                                        <path class="cls-14" d="M1354.77,1016.56a13.15,13.15,0,0,0,16.29-5.83c6.29-10.11-5-16.75-5-16.75C1372.18,1005,1368.6,1012.54,1354.77,1016.56Z" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-13" cx="1202.41" cy="950.54" r="12.65"></circle>
                                        <path class="cls-14" d="M1335.39,1016.23a13.16,13.16,0,0,0,16.3-5.84c6.28-10.1-5-16.74-5-16.74C1352.81,1004.61,1349.22,1012.21,1335.39,1016.23Z" transform="translate(-138.01 -54.08)"></path>
                                        <path class="cls-13" d="M1343.77,981.46a12.43,12.43,0,1,1-8.12,15.6,12.45,12.45,0,0,1,8.12-15.6" transform="translate(-138.01 -54.08)"></path>
                                        <path class="cls-14" d="M1353.69,982.54c6,10.77,2.46,18.24-11.14,22.19a12.93,12.93,0,0,0,16-5.74c6.18-9.93-4.88-16.45-4.88-16.45" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-13" cx="1125.44" cy="982.94" r="12.65"></circle>
                                        <path class="cls-14" d="M1258.92,1025.21a13.16,13.16,0,0,0-7.54,15.58c2.59,11.62,15.27,8.47,15.27,8.47C1254.63,1045.7,1251.86,1037.77,1258.92,1025.21Z" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-13" cx="903.97" cy="926.05" r="7.92"></circle>
                                        <path class="cls-14" d="M1046.71,973.77a8.25,8.25,0,0,0-10.77,1.25c-5.26,5.27.66,10.92.66,10.92C1034.44,978.39,1037.7,974.26,1046.71,973.77Z" transform="translate(-138.01 -54.08)"></path>
                                        <path class="cls-13" d="M1057.63,968.22A12.65,12.65,0,1,1,1046,981.8a12.65,12.65,0,0,1,11.64-13.58" transform="translate(-138.01 -54.08)"></path>
                                        <path class="cls-14" d="M1066.14,970.67a13.17,13.17,0,0,0-17.2,2c-8.41,8.42,1,17.44,1,17.44C1046.55,978,1051.76,971.45,1066.14,970.67Z" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-13" cx="905.43" cy="946.73" r="18.76"></circle>
                                        <path class="cls-14" d="M1054.61,985.74s-13-9.53-25.49,3,1.55,25.85,1.55,25.85C1025.56,996.67,1033.28,986.91,1054.61,985.74Z" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-13" cx="955.74" cy="961.47" r="27.55"></circle>
                                        <path class="cls-14" d="M1069.43,1028.49s11.27,20.86,35.68,12.16,14.25-35.27,14.25-35.27C1114.86,1032.32,1098.46,1040.4,1069.43,1028.49Z" transform="translate(-138.01 -54.08)"></path>
                                        <path class="cls-4" d="M1139.69,1011.16" transform="translate(-138.01 -54.08)"></path>
                                        <path class="cls-13" d="M1144.84,1024.16a12.43,12.43,0,1,1,5.52-16.69,12.44,12.44,0,0,1-5.52,16.69" transform="translate(-138.01 -54.08)"></path>
                                        <path class="cls-14" d="M1134.88,1024.7c-7.63-9.68-5.35-17.61,7.43-23.69a12.93,12.93,0,0,0-14.89,8.22c-4.5,10.8,7.46,15.47,7.46,15.47" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-13" cx="1001.3" cy="942.72" r="12.65"></circle>
                                        <path class="cls-14" d="M1142.43,984.54a13.17,13.17,0,0,0-15.16,8.37c-4.58,11,7.59,15.73,7.59,15.73C1127.09,998.79,1129.41,990.72,1142.43,984.54Z" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-13" cx="1020.48" cy="939.94" r="12.65"></circle>
                                        <path class="cls-14" d="M1161.61,981.76a13.16,13.16,0,0,0-15.16,8.37c-4.58,11,7.59,15.73,7.59,15.73C1146.28,996,1148.6,987.94,1161.61,981.76Z" transform="translate(-138.01 -54.08)"></path>
                                        <path class="cls-13" d="M1158.91,1017.42a12.44,12.44,0,1,1,5.51-16.7,12.45,12.45,0,0,1-5.51,16.7" transform="translate(-138.01 -54.08)"></path>
                                        <path class="cls-14" d="M1148.94,1018c-7.63-9.68-5.35-17.61,7.44-23.69a12.93,12.93,0,0,0-14.89,8.23c-4.51,10.79,7.45,15.46,7.45,15.46" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-13" cx="1063.94" cy="996.87" r="12.65"></circle>
                                        <path class="cls-14" d="M1208.32,1061.88a13.17,13.17,0,0,0,5-16.59c-4.43-11-16.44-5.91-16.44-5.91C1209.27,1041,1213.27,1048.35,1208.32,1061.88Z" transform="translate(-138.01 -54.08)"></path>
                                        <path class="cls-13" d="M968.61,1018.72a12.43,12.43,0,1,1,5.52-16.69,12.42,12.42,0,0,1-5.52,16.69" transform="translate(-138.01 -54.08)"></path>
                                        <path class="cls-14" d="M958.65,1019.25c-7.63-9.68-5.35-17.61,7.43-23.69a12.94,12.94,0,0,0-14.89,8.23c-4.5,10.8,7.46,15.46,7.46,15.46" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-13" cx="825.07" cy="937.27" r="12.65"></circle>
                                        <path class="cls-14" d="M966.2,979.09A13.17,13.17,0,0,0,951,987.47c-4.58,11,7.59,15.73,7.59,15.73C950.86,993.35,953.19,985.28,966.2,979.09Z" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-13" cx="860.85" cy="930.4" r="12.65"></circle>
                                        <path class="cls-14" d="M1002,972.22a13.16,13.16,0,0,0-15.15,8.37c-4.59,11,7.58,15.74,7.58,15.74C986.65,986.48,989,978.41,1002,972.22Z" transform="translate(-138.01 -54.08)"></path>
                                        <path class="cls-13" d="M999.28,1007.88a12.43,12.43,0,1,1,5.52-16.69,12.43,12.43,0,0,1-5.52,16.69" transform="translate(-138.01 -54.08)"></path>
                                        <path class="cls-14" d="M989.31,1008.41c-7.63-9.68-5.35-17.61,7.44-23.69A12.94,12.94,0,0,0,981.86,993c-4.51,10.79,7.45,15.46,7.45,15.46" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-13" cx="462.33" cy="892.52" r="12.65"></circle>
                                        <path class="cls-14" d="M606.71,957.54A13.17,13.17,0,0,0,611.66,941c-4.42-11.05-16.44-5.92-16.44-5.92C607.66,936.62,611.66,944,606.71,957.54Z" transform="translate(-138.01 -54.08)"></path>
                                        <path class="cls-13" d="M1229.09,1032.42a12.43,12.43,0,1,1,5.52-16.69,12.44,12.44,0,0,1-5.52,16.69" transform="translate(-138.01 -54.08)"></path>
                                        <path class="cls-14" d="M1219.12,1033c-7.63-9.68-5.35-17.61,7.44-23.69a12.93,12.93,0,0,0-14.89,8.22c-4.51,10.8,7.45,15.47,7.45,15.47" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-13" cx="1085.54" cy="950.98" r="12.65"></circle>
                                        <path class="cls-14" d="M1226.67,992.8a13.15,13.15,0,0,0-15.15,8.37c-4.58,11,7.59,15.73,7.59,15.73C1211.34,1007.05,1213.66,999,1226.67,992.8Z" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-13" cx="1104.72" cy="948.2" r="12.65"></circle>
                                        <path class="cls-14" d="M1245.85,990a13.15,13.15,0,0,0-15.15,8.37c-4.58,11,7.59,15.73,7.59,15.73C1230.52,1004.27,1232.84,996.2,1245.85,990Z" transform="translate(-138.01 -54.08)"></path>
                                        <path class="cls-13" d="M1243.15,1025.68a12.43,12.43,0,1,1,5.52-16.7,12.44,12.44,0,0,1-5.52,16.7" transform="translate(-138.01 -54.08)"></path>
                                        <path class="cls-14" d="M1233.19,1026.21c-7.63-9.68-5.35-17.61,7.43-23.69a12.93,12.93,0,0,0-14.89,8.22c-4.5,10.8,7.46,15.47,7.46,15.47" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-13" cx="1063.94" cy="931.22" r="12.65"></circle>
                                        <path class="cls-14" d="M1208.32,996.24a13.17,13.17,0,0,0,5-16.59c-4.43-11-16.44-5.91-16.44-5.91C1209.27,975.32,1213.27,982.71,1208.32,996.24Z" transform="translate(-138.01 -54.08)"></path>
                                        <path class="cls-13" d="M878.75,1006a12.43,12.43,0,1,1,5.52-16.69,12.43,12.43,0,0,1-5.52,16.69" transform="translate(-138.01 -54.08)"></path>
                                        <path class="cls-14" d="M868.79,1006.57c-7.63-9.67-5.35-17.61,7.43-23.69a12.94,12.94,0,0,0-14.89,8.23c-4.5,10.8,7.46,15.46,7.46,15.46" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-13" cx="735.21" cy="924.6" r="12.65"></circle>
                                        <path class="cls-14" d="M876.34,966.41a13.17,13.17,0,0,0-15.16,8.38c-4.58,11,7.59,15.73,7.59,15.73C861,980.67,863.32,972.6,876.34,966.41Z" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-13" cx="754.39" cy="921.81" r="12.65"></circle>
                                        <path class="cls-14" d="M895.52,963.63A13.17,13.17,0,0,0,880.36,972c-4.58,11,7.59,15.73,7.59,15.73C880.19,977.89,882.51,969.82,895.52,963.63Z" transform="translate(-138.01 -54.08)"></path>
                                        <path class="cls-13" d="M892.82,999.29a12.43,12.43,0,1,1,5.51-16.69,12.43,12.43,0,0,1-5.51,16.69" transform="translate(-138.01 -54.08)"></path>
                                        <path class="cls-14" d="M882.85,999.82c-7.63-9.67-5.35-17.6,7.44-23.68a12.93,12.93,0,0,0-14.89,8.22c-4.51,10.8,7.45,15.46,7.45,15.46" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-13" cx="708.12" cy="905.71" r="12.65"></circle>
                                        <path class="cls-14" d="M852.5,970.72a13.17,13.17,0,0,0,5-16.59c-4.42-11-16.44-5.91-16.44-5.91C853.45,949.81,857.45,957.19,852.5,970.72Z" transform="translate(-138.01 -54.08)"></path>
                                        <path class="cls-13" d="M739.45,977.84A10.29,10.29,0,1,1,744,964a10.29,10.29,0,0,1-4.56,13.82" transform="translate(-138.01 -54.08)"></path>
                                        <path class="cls-14" d="M731.2,978.28c-6.31-8-4.43-14.58,6.16-19.61A10.72,10.72,0,0,0,725,965.48c-3.73,8.93,6.17,12.8,6.17,12.8" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-13" cx="596.86" cy="901.11" r="10.47"></circle>
                                        <path class="cls-14" d="M737.45,945A10.89,10.89,0,0,0,724.91,952c-3.8,9.09,6.28,13,6.28,13C724.76,956.84,726.68,950.16,737.45,945Z" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-13" cx="612.77" cy="898.89" r="10.47"></circle>
                                        <path class="cls-14" d="M753.36,942.83a10.88,10.88,0,0,0-12.54,6.92c-3.79,9.09,6.28,13,6.28,13C740.68,954.62,742.6,948,753.36,942.83Z" transform="translate(-138.01 -54.08)"></path>
                                        <path class="cls-13" d="M751.13,972.34a10.29,10.29,0,1,1,4.57-13.82,10.3,10.3,0,0,1-4.57,13.82" transform="translate(-138.01 -54.08)"></path>
                                        <path class="cls-14" d="M742.88,972.78c-6.31-8-4.43-14.58,6.16-19.61A10.72,10.72,0,0,0,736.71,960c-3.73,8.94,6.17,12.8,6.17,12.8" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-13" cx="555.24" cy="899.26" r="12.65"></circle>
                                        <path class="cls-14" d="M699.63,964.28a13.17,13.17,0,0,0,5-16.59c-4.43-11.05-16.44-5.91-16.44-5.91C700.58,943.36,704.58,950.75,699.63,964.28Z" transform="translate(-138.01 -54.08)"></path>
                                        <path class="cls-13" d="M645,967.22a8.89,8.89,0,1,1,3.95-11.94A8.89,8.89,0,0,1,645,967.22" transform="translate(-138.01 -54.08)"></path>
                                        <path class="cls-14" d="M637.84,967.6c-5.46-6.92-3.82-12.59,5.32-16.94a9.24,9.24,0,0,0-10.65,5.88c-3.22,7.73,5.33,11.06,5.33,11.06" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-13" cx="503" cy="893.57" r="9.05"></circle>
                                        <path class="cls-14" d="M643.24,938.88a9.41,9.41,0,0,0-10.84,6c-3.27,7.85,5.43,11.25,5.43,11.25C632.28,949.08,633.94,943.31,643.24,938.88Z" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-13" cx="516.75" cy="891.66" r="9.05"></circle>
                                        <path class="cls-14" d="M657,937a9.41,9.41,0,0,0-10.84,6c-3.28,7.85,5.42,11.25,5.42,11.25C646,947.16,647.69,941.39,657,937Z" transform="translate(-138.01 -54.08)"></path>
                                        <path class="cls-13" d="M655.06,962.47a8.89,8.89,0,1,1,4-11.94,8.89,8.89,0,0,1-4,11.94" transform="translate(-138.01 -54.08)"></path>
                                        <path class="cls-14" d="M647.94,962.85c-5.46-6.92-3.83-12.59,5.32-16.94a9.24,9.24,0,0,0-10.65,5.88c-3.23,7.72,5.33,11.06,5.33,11.06" transform="translate(-138.01 -54.08)"></path>
                                        <path class="cls-13" d="M556.53,952.27a6.78,6.78,0,1,1,3-9.11,6.78,6.78,0,0,1-3,9.11" transform="translate(-138.01 -54.08)"></path>
                                        <path class="cls-14" d="M551.1,952.56c-4.17-5.28-2.92-9.61,4.06-12.93a7.06,7.06,0,0,0-8.13,4.49c-2.46,5.89,4.07,8.44,4.07,8.44" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-13" cx="415.5" cy="883.26" r="6.9"></circle>
                                        <path class="cls-14" d="M555.22,930.65a7.18,7.18,0,0,0-8.27,4.56c-2.5,6,4.14,8.59,4.14,8.59C546.85,938.43,548.12,934,555.22,930.65Z" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-13" cx="391.72" cy="880.71" r="6.9"></circle>
                                        <path class="cls-14" d="M536.64,935a7.18,7.18,0,0,0-6.26-7.08c-6.39-1.14-7.48,5.9-7.48,5.9C527.23,928.52,531.8,928.8,536.64,935Z" transform="translate(-138.01 -54.08)"></path>
                                        <path class="cls-13" d="M517.32,937.78a6.78,6.78,0,1,1,9.55,1,6.79,6.79,0,0,1-9.55-1" transform="translate(-138.01 -54.08)"></path>
                                        <path class="cls-14" d="M515.86,932.53c4.25-5.21,8.75-4.93,13.5,1.16a7.06,7.06,0,0,0-6.15-7c-6.28-1.12-7.35,5.8-7.35,5.8" transform="translate(-138.01 -54.08)"></path>
                                        <circle class="cls-13" cx="369.24" cy="882.46" r="6.9"></circle>
                                        <path class="cls-14" d="M500.37,936.06a7.17,7.17,0,0,0,6,7.32c6.34,1.4,7.71-5.59,7.71-5.59C509.51,942.91,505,942.45,500.37,936.06Z" transform="translate(-138.01 -54.08)"></path>
                                        <path class="cls-13" d="M519.78,934.05a6.79,6.79,0,1,1-9.5-1.34,6.78,6.78,0,0,1,9.5,1.34" transform="translate(-138.01 -54.08)"></path>
                                        <path class="cls-14" d="M521,939.35c-4.46,5-8.94,4.58-13.44-1.69a7.05,7.05,0,0,0,5.86,7.19c6.23,1.38,7.58-5.5,7.58-5.5" transform="translate(-138.01 -54.08)"></path>
                                    </g>
                                    <g id="TEXTOS"><text class="cls-17" transform="translate(189.65 838.69)">1</text><text class="cls-17" transform="translate(187.71 796.34)">2</text><text class="cls-17" transform="translate(185 755.46)">3</text><text class="cls-17" transform="translate(183.65 717.62)">4</text><text class="cls-17" transform="translate(185 676.83)">5</text><text class="cls-17" transform="translate(186.53 638.73)">6</text><text class="cls-17" transform="translate(189.65 599.2)">7</text><text class="cls-17" transform="translate(191.42 560.2)">8</text><text class="cls-17" transform="translate(192.91 520.85)">9</text><text class="cls-17" transform="translate(184.33 368.26)">14</text><text class="cls-17" transform="translate(184.21 323.26)">15</text><text class="cls-17" transform="translate(184 277.44)">16</text><text class="cls-17" transform="translate(178.18 180.27)">17</text><text class="cls-17" transform="translate(241.26 164.32)">18</text><text class="cls-17" transform="translate(280.71 164.32)">19</text><text class="cls-17" transform="translate(320.07 164.32)">20</text><text class="cls-17" transform="translate(360.83 164.32)">21</text><text class="cls-17" transform="translate(399.38 164.32)">22</text><text class="cls-17" transform="translate(438.72 164.32)">23</text><text class="cls-17" transform="translate(477.72 164.32)">24</text><text class="cls-17" transform="translate(516.77 164.12)">25</text><text class="cls-17" transform="translate(555.24 164.12)">26</text><text class="cls-17" transform="translate(598.19 164.12)">27</text><text class="cls-17" transform="translate(686.04 162.32)">28</text><text class="cls-17" transform="translate(726.69 162.12)">29</text><text class="cls-17" transform="translate(765.57 162.12)">30</text><text class="cls-17" transform="translate(805.51 161.12)">31</text><text class="cls-17" transform="translate(843.86 161.12)">32</text><text class="cls-17" transform="translate(883.39 160.22)">33</text><text class="cls-17" transform="translate(923.04 160.01)">34</text><text class="cls-17" transform="translate(961.92 160.01)">35</text><text class="cls-17" transform="translate(1000.86 160.01)">36</text><text class="cls-17" transform="translate(1040.22 160.01)">37</text><text class="cls-17" transform="translate(1079.9 159.01)">38</text><text class="cls-17" transform="translate(1118.84 158.01)">39</text><text class="cls-17" transform="translate(1197.77 162.01)">40</text><text class="cls-17" transform="translate(1181.36 261.19)">41</text><text class="cls-17" transform="translate(1182.36 301.23)">42</text><text class="cls-17" transform="translate(1184.66 338.85)">43</text><text class="cls-17" transform="translate(1186.66 377.89)">44</text><text class="cls-17" transform="translate(1188.19 416.3)">45</text><text class="cls-17" transform="translate(1188.19 456.36)">46</text><text class="cls-17" transform="translate(1188.19 496.4)">47</text><text class="cls-17" transform="translate(1186.48 535.03)">48</text><text class="cls-17" transform="translate(1184.48 574.06)">49</text><text class="cls-17" transform="translate(1185.01 613.47)">50</text><text class="cls-17" transform="translate(1184.24 652.6)">51</text><text class="cls-17" transform="translate(1185.24 691.64)">52</text><text class="cls-17" transform="translate(1188.54 731.27)">53</text><text class="cls-17" transform="translate(1194.54 772.3)">54</text><text class="cls-17" transform="translate(1199.07 871.08)">55</text><text class="cls-17" transform="translate(692.95 857.12)">67</text><text class="cls-17" transform="translate(740.27 858.61)">66</text><text class="cls-17" transform="translate(780.48 860.88)">65</text><text class="cls-17" transform="translate(819.5 862.88)">64</text><text class="cls-17" transform="translate(859.24 865)">63</text><text class="cls-17" transform="translate(897.62 868.08)">62</text><text class="cls-17" transform="translate(937.42 869.08)">61</text><text class="cls-17" transform="translate(975.83 871.08)">60</text><text class="cls-17" transform="translate(1016.71 874.04)">59</text><text class="cls-17" transform="translate(1054.18 876.04)">58</text><text class="cls-17" transform="translate(1093.4 878.4)">57</text><text class="cls-17" transform="translate(1131.63 880.4)">56</text><text class="cls-17" transform="translate(425.48 798.51)">81</text><text class="cls-17" transform="translate(463.86 798.82)">80</text><text class="cls-17" transform="translate(504.18 797.51)">79</text><text class="cls-17" transform="translate(545.46 798.54)">78</text><text class="cls-17" transform="translate(586.04 798.54)">77</text><text class="cls-17" transform="translate(463.04 712.45)">96</text><text class="cls-17" transform="translate(501.42 712.76)">95</text><text class="cls-17" transform="translate(380.18 712.61)">98</text><text class="cls-17" transform="translate(424.57 712.92)">97</text><text class="cls-17" transform="translate(541.74 711.43)">94</text><text class="cls-17" transform="translate(582.2 711.43)">93</text><text class="cls-17" transform="translate(678.87 676.83)">92</text><text class="cls-18" transform="translate(390.6 588.5) scale(0.9 1)">113</text><text class="cls-18" transform="translate(429.32 587.91) scale(0.9 1)">112</text><text class="cls-18" transform="translate(468.11 587.63) scale(0.9 1)">111</text><text class="cls-18" transform="translate(506.96 587.63) scale(0.9 1)">110</text><text class="cls-18" transform="translate(546.13 587.74) scale(0.9 1)">109</text><text class="cls-19" transform="translate(587.75 587.57)">108</text><text class="cls-20" transform="translate(688.42 561.51)">107</text><text class="cls-20" transform="translate(735.82 561.62)">106</text><text class="cls-19" transform="translate(386.05 504.05)">128</text><text class="cls-19" transform="translate(425.26 504.32)">127</text><text class="cls-19" transform="translate(464.06 504.9)">126</text><text class="cls-19" transform="translate(503.25 504.9)">125</text><text class="cls-19" transform="translate(542.9 505.01)">124</text><text class="cls-19" transform="translate(596.03 504.84)">123</text><text class="cls-20" transform="translate(727.78 480.46)">122</text><text class="cls-20" transform="translate(772.61 480.74)">121</text><text class="cls-17" transform="translate(287.29 352.95)">144</text><text class="cls-17" transform="translate(341.63 353.52)">143</text><text class="cls-17" transform="translate(391.96 353.52)">142</text><text class="cls-17" transform="translate(441.07 353.32)">141</text><text class="cls-17" transform="translate(496.4 353.32)">140</text><text class="cls-17" transform="translate(286.45 277.67)">158</text><text class="cls-17" transform="translate(340.83 277.98)">157</text><text class="cls-17" transform="translate(389.89 277.67)">156</text><text x="-138.01" y="-54.08"></text><text class="cls-21" transform="translate(755.59 279.36)">153</text><text class="cls-20" transform="translate(794.7 279.06)">152</text><text class="cls-17" transform="translate(440.27 277.7)">155</text><text class="cls-17" transform="translate(495.38 277.4)">154</text><text class="cls-20" transform="translate(833.16 278.81)">151</text><text class="cls-20" transform="translate(872.16 278.06)">150</text><text class="cls-20" transform="translate(911.01 276.83)">149</text><text class="cls-20" transform="translate(949.99 277.44)">148</text><text class="cls-20" transform="translate(989.45 277.19)">147</text><text class="cls-20" transform="translate(1029.26 276.79)">146</text><text class="cls-20" transform="translate(1071.11 276.56)">145</text><text class="cls-20" transform="translate(754.02 353.97)">138</text><text class="cls-20" transform="translate(795.48 353.72)">137</text><text class="cls-20" transform="translate(835.49 352.97)">136</text><text class="cls-20" transform="translate(873.34 351.74)">135</text><text class="cls-20" transform="translate(912.32 351.35)">134</text><text class="cls-20" transform="translate(951.78 351.1)">133</text><text class="cls-20" transform="translate(990.97 351.16)">132</text><text class="cls-20" transform="translate(1041.43 350.92)">131</text><text class="cls-19" transform="translate(294.64 505.9)">130</text><text class="cls-19" transform="translate(348.49 504.67)">129</text><text class="cls-20" transform="translate(812.55 479.08)">120</text><text class="cls-20" transform="translate(850.01 478.84)">119</text><text class="cls-20" transform="translate(890.02 478.09)">118</text><text class="cls-20" transform="translate(928.87 476.85)">117</text><text class="cls-20" transform="translate(973.85 476.47)">116</text><text class="cls-19" transform="translate(291.84 589.2)">115</text><text class="cls-22" transform="translate(349.84 588.45) scale(0.9 1)">114</text><text class="cls-20" transform="translate(775.04 560.82)">105</text><text class="cls-20" transform="translate(812.5 559.57)">104</text><text class="cls-20" transform="translate(851.51 557.82)">103</text><text class="cls-20" transform="translate(891.36 557.59)">102</text><text class="cls-20" transform="translate(930.34 557.2)">101</text><text class="cls-20" transform="translate(969.8 555.95)">100</text><text class="cls-23" transform="translate(737.22 676.83)">91</text><text class="cls-23" transform="translate(781.32 675.7)">90</text><text class="cls-23" transform="translate(826.35 674.7)">89</text><text class="cls-23" transform="translate(871.93 675.7)">88</text><text class="cls-23" transform="translate(917.73 674.57)">87</text><text class="cls-23" transform="translate(963.04 673.41)">86</text><text class="cls-23" transform="translate(1009.39 673.49)">85</text><text class="cls-23" transform="translate(1064.5 673.7)">84</text><text class="cls-23" transform="translate(380.85 797.98)">82</text><text class="cls-23" transform="translate(684.22 741.36)">76</text><text class="cls-23" transform="translate(739.32 742.61)">75</text><text class="cls-23" transform="translate(784.91 744.95)">74</text><text class="cls-23" transform="translate(829.93 745.98)">73</text><text class="cls-23" transform="translate(876.73 746.12)">72</text><text class="cls-23" transform="translate(923.04 745.98)">71</text><text class="cls-23" transform="translate(967.39 745.98)">70</text><text class="cls-23" transform="translate(1015.5 745.98)">69</text><text class="cls-23" transform="translate(1067.63 745.98)">68 </text></g>
                                    <path d="M 371.68610931872763 -78.95855942376951 L -19.81674782412965 -74.02364945978391" class="" style="fill: rgba(255, 0, 0, 0.4); stroke: rgba(255, 100, 100, 0.4); stroke-width: 1.26759px;" data-stroke-width="1"></path>
                                    
                                    <g class="area_selection" data-id="stage_1">
                                        <path class="st2-34 mapsvg-region" d="M726.42,246.52l59.45-.65c-11.43-27.87-20.42-55-26.15-81.08l-34.22.38Z" transform="translate(-138.01 -54.08)" title="349.54 m2" data-id="A-27"  ></path>
                                        <path class="st2-34 mapsvg-region" d="M507.82,795.79c-8.1-22.51-15-43.48-28.18-60.45-6.75-7.55-5.61-18.16,4.44-20.71l73.91-.36.87,81.13Z" transform="translate(-138.01 -54.08)" title="512.75 m2" data-id="A-98"  ></path>
                                        <path class="st2-34 mapsvg-region" d="M716.08,794l-.32-81.18,47.18-1.25c-2.87,25.1-4.07,53-4.55,82Z" transform="translate(-138.01 -54.08)" title="451.05 m2" data-id="A-93"  ></path>
                                        <path class="st2-34 mapsvg-region" d="M715.76,894.71l.32-99.45,42.32-.77c1.82,39.1,4.71,74,9.63,103.65Z" transform="translate(-138.01 -54.08)" title="454.05 m2" data-id="A-77"  ></path>
                                        <path class="st2-34 mapsvg-region" d="M 506.83 884 C 499.15 881.79 497.02 876.31 499.99 867.82 C 511.44 846.2700000000001 514.1800000000001 821.23 507.82 795.82 L 558.16 795.2 L 557.87 886.8000000000001 Z" transform="translate(-138.01 -54.08)" title="438.92 m2" data-id="A-82"  ></path>
                                        <path class="st2-34 mapsvg-region" d="M 1205.33 359.65 L 1204.3899999999999 278.53 L 1249.6299999999999 278.09999999999997 C 1249.1999999999998 310.31999999999994 1248.6299999999999 341.29999999999995 1246.9099999999999 359.21999999999997 Z" transform="translate(-138.01 -54.08)" title="335.53 m2" data-id="A-145"  ></path>
                                        <path class="st2-34 mapsvg-region" d="M688.33,284.31l-63.45.71,1,68.33,63.08-.62c-.11-17.94,1.85-36.76,8.47-55.77C699.78,288.12,694.57,285.77,688.33,284.31Z" transform="translate(-138.01 -54.08)" title="431.13 m2" data-id="A-154"  ></path>
                                        <path class="st2-34 mapsvg-region" d="M1185.44,679.25l60-.52c1.18,18.19.89,43.45,5.34,71.44l-64.51.71Z" transform="translate(-138.01 -54.08)" title="416.42 m2" data-id="A-84"  ></path>
                                        <path class="st2-34 mapsvg-region" d="M1186.3,750.88l.85,87.8,72.69,4c4.63-.27,7.54-2.42,7-8.38-6.78-24.71-11.85-53.32-16-84.08Z" transform="translate(-138.01 -54.08)" title="610.74 m2" data-id="A-68"  ></path>
                                        <path class="st2-34 mapsvg-region" d="M866.45,682.73l-61.8.74c-3.83,21.34-6.17,45.58-7.56,71.66l70.11-.77Z" transform="translate(-138.01 -54.08)" title="451.10 m2" data-id="A-92"  ></path>
                                        <path class="st2-34 mapsvg-region" d="M867.94,821.33l-.74-67-70.11.77c-.7,24.23-1.13,47-.05,62.35Z" transform="translate(-138.01 -54.08)" title="434.84 m2" data-id="A-76"  ></path>
                                        <path class="st2-34 mapsvg-region" d="M374,169.27l-79.88,1,2.5,127L378,296.09c-.93-11.95-2.22-27.27-3-45.5Z" transform="translate(-138.01 -54.08)" title="954.63 m2" data-id="A-17"  ></path>
                                        <path class="st2-34 mapsvg-region" d="M284.92,855.41a60.74,60.74,0,0,0,45.37,56l53.56,2.85-5.58-55.54Z" transform="translate(-138.01 -54.08)" data-id="A-1"  title="434.62 m2" ></path>
                                        <path class="st2-34 mapsvg-region" d="M 875.88 859.36 L 800.13 855.29 C 803.74 884.1999999999999 808.74 911.8199999999999 815.7 937.5999999999999 L 871.5300000000001 940.5999999999999 Z" transform="translate(-138.01 -54.08)" title="undefined" data-id="A-67"  ></path>
                                        <path class="st2-34 mapsvg-region" d="M720.67,503.61c28.82,4.66,56.22,10.21,82,16.77,6.71,2.45,9.78,6.75,7.36,13.84l-21.24,55-67.21.74Z" transform="translate(-138.01 -54.08)" title="590.83 m2" data-id="A-123"  ></path>
                                        <path class="st2-34 mapsvg-region" d="M 721.6 589.94 L 788.8100000000001 589.2 C 778.5000000000001 621.13 769.8100000000001 650.38 764.8100000000001 673.5 L 722.5400000000001 674.5 Z" transform="translate(-138.01 -54.08)" title="431.60 m2" data-id="A-108"  ></path>
                                        <path class="st2-34 mapsvg-region" d="M418.31,355.7c1.07,28.31,1.33,55.2,1.37,80.06-1.28,1.09,33.85-6.71,59-8.83l-.76-71.88Z" transform="translate(-138.01 -54.08)" title="424.14 m2" data-id="A-144"  ></path>
                                        <path class="st2-34 mapsvg-region" d="M625.87,353.35l63.08-.62c.12,18.37,7.26,43.92,13.19,62.66,1.22,8.56-3.37,12-12.22,11.59-18.26-2.39-39.5-4-63.16-4.91Z" transform="translate(-138.01 -54.08)" title="462.79 m2" data-id="A-140"  ></path>
                                        <path class="st2-34 mapsvg-region" d="M 930.5 282.13 L 847.31 282.56 C 863.5 308.64 877.31 335.47 887.2099999999999 363.51 L 932.3599999999999 362.78 Z" transform="translate(-138.01 -54.08)" title="478.54 m2" data-id="A-153"  ></path>
                                        <path class="st2-34 mapsvg-region" d="M 932.36 362.78 L 887.21 363.51 C 895.82 395.65999999999997 898.3100000000001 423.05 893.64 444.87 L 933.31 443.87 Z" transform="translate(-138.01 -54.08)" title="298.00 m2" data-id="A-138"  ></path>
                                        <path class="st2-34 mapsvg-region" d="M1246.91,359.22l-80.68.86,1.17,81,50.13.2C1234.47,416.54,1243.84,389.05,1246.91,359.22Z" transform="translate(-138.01 -54.08)" title="530.31 m2" data-id="A-131"  ></path>
                                        <path class="st2-34 mapsvg-region" d="M911.51,482.55H881.66c-17.19,28.76-31.95,56.21-43,81.66l73.54-.42Z" transform="translate(-138.01 -54.08)" title="407.42 m2" data-id="A-122"  ></path>
                                        <path class="st2-34 mapsvg-region" d="M838.63,564.21c-11.27,24.27-20.24,52.11-28.09,81.7l63.45-.57-1-81.12Z" transform="translate(-138.01 -54.08)" title="385.69 m2" data-id="A-107"  ></path>
                                        <path class="st2-34 mapsvg-region" d="M1106.35,480.33l65.78-1.12c7.53,1.72,9.77,6.71,7.77,14.33l-29.81,67.33-42.95.29Z" transform="translate(-138.01 -54.08)" title="447.34 m2" data-id="A-116"  ></path>
                                        <path class="st2-34 mapsvg-region" d="M 1107.14 561.16 L 1108.01 642.28 L 1147.41 642.28 C 1156.8700000000001 641.28 1159.89 636.17 1157.41 627.5699999999999 C 1146.19 610.8399999999999 1146.8200000000002 586.93 1150.1100000000001 560.8699999999999 Z" transform="translate(-138.01 -54.08)" title="330.07 m2" data-id="A-100"  ></path>
                                        <path class="st2-34 mapsvg-region" d="M798.15,164.3c5.29,23.23,15.19,50.57,28.63,81.07L859,245l-.83-81.38Z" transform="translate(-138.01 -54.08)" title="365.85 m2" data-id="A-28"  ></path>
                                        <path d="M 148.58999633789062 762.22998046875 L 146.91000366210938 801.3300170898438 L 240.25 804.6799926757812 L 236.6199951171875 765.3800048828125 L 148.58999633789062 762.22998046875 Z" class="st2-34 mapsvg-region" data-id="A-2"  title="333.74 m2" ></path>
                                        <path d="M 150.25999450683594 723.3599853515625 L 148.58999633789062 762.22998046875 L 236.6199951171875 765.3800048828125 L 232.82000732421875 726.2100219726562 L 150.25999450683594 723.3599853515625 Z" class="st2-34 mapsvg-region" title="312.50 m2" data-id="A-3"></path>
                                        <path d="M 151.89999389648438 684.3200073242188 L 150.25999450683594 723.3599853515625 L 232.82000732421875 726.2100219726562 L 230.99000549316406 687.1500244140625 L 151.89999389648438 684.3200073242188 Z" class="st2-34 mapsvg-region" title="296.19 m2"  data-id="A-4" ></path>
                                        <path d="M 153.47999572753906 645.3200073242188 L 151.89999389648438 684.3200073242188 L 230.99000549316406 687.1500244140625 L 231.4499969482422 647.989990234375 L 153.47999572753906 645.3200073242188 Z" class="st2-34 mapsvg-region" title="287.92 m2" data-id="A-5"></path>
                                        <path d="M 154.97999572753906 606.3599853515625 L 153.47999572753906 645.3200073242188 L 231.4499969482422 647.989990234375 L 233.50999450683594 608.9099731445312 L 154.97999572753906 606.3599853515625 L 180.6766815185547 607.1943969726562 Z" class="st2-34 mapsvg-region" title="286.37 m2"  data-id="A-6" ></path>
                                        <path d="M 156.35000610351562 567.1599731445312 L 154.97999572753906 606.3599853515625 L 233.50999450683594 608.9099731445312 L 236.3699951171875 570 L 156.35000610351562 567.1599731445312 Z" class="st2-34 mapsvg-region" title="291.43 m2" data-id="A-7"></path>
                                        <path d="M 157.74000549316406 528.1500244140625 L 156.35000610351562 567.1599731445312 L 236.3699951171875 570 L 239.25 531.1099853515625 L 157.74000549316406 528.1500244140625 Z" class="st2-34 mapsvg-region" title="299.12 m2" data-id="A-8"></path>
                                        <path d="M 158.33999633789062 489.05999755859375 L 241.55999755859375 492.0199890136719 L 239.25 531.1099853515625 L 157.74000549316406 528.1500244140625 L 158.33999633789062 489.05999755859375 Z" class="st2-34 mapsvg-region" title="305.24 m2" data-id="A-9"></path>
                                        <path d="M 159.1199951171875 333.989990234375 L 159.13999938964844 382.7799987792969 L 244.22000122070312 381.67999267578125 L 243.67999267578125 332.8599853515625 L 159.1199951171875 333.989990234375 Z" class="st2-34 mapsvg-region" title="390.39 m2" data-id="A-14"></path>
                                        <path d="M 159.1199951171875 291.8500061035156 L 159.1199951171875 333.989990234375 L 243.67999267578125 332.8599853515625 L 242.36000061035156 290.8599853515625 L 159.1199951171875 291.8500061035156 Z" class="st2-34 mapsvg-region" title="335.02 m2" data-id="A-15"></path>
                                        <path d="M 158.58999633789062 243.17999267578125 L 159.1199951171875 291.8500061035156 L 242.36000061035156 290.8599853515625 L 239.94000244140625 242.00999450683594 L 158.58999633789062 243.17999267578125" class="st2-34 mapsvg-region" title="379.72 m2" data-id="A-16"></path>
                                        <path d="M 236.91000366210938 196.25 L 235.9600067138672 114.91999816894531 L 275.0899963378906 114.5 L 275.9599914550781 195.82000732421875 L 236.91000366210938 196.25 Z" class="st2-34 mapsvg-region" title="300.00 m2" data-id="A-18"></path>
                                        <path d="M 275.5899963378906 195.61000061035156 L 274.6400146484375 114.29000091552734 L 313.7699890136719 113.86000061035156 L 314.6400146484375 195.19000244140625 L 275.5899963378906 195.61000061035156 Z" class="st2-34 mapsvg-region" title="300.00 m2" data-id="A-19"></path>
                                        <path d="M 315.04998779296875 195.61000061035156 L 314.1000061035156 114.29000091552734 L 353.2300109863281 113.86000061035156 L 354.1000061035156 195.19000244140625 L 315.04998779296875 195.61000061035156 Z" class="st2-34 mapsvg-region" title="300.00 m2" data-id="A-20"></path>
                                        <path d="M 354.1000061035156 194.75999450683594 L 353.1499938964844 113.43000030517578 L 392.2799987792969 113.01000213623047 L 393.1499938964844 194.33999633789062 L 354.1000061035156 194.75999450683594 Z" class="st2-34 mapsvg-region" title="300.00 m2" data-id="A-21"></path>
                                        <path d="M 394.8149834157296 195.9849663258858 L 393.86497120869836 114.65497212422565 L 432.99497609151086 114.22497181904987 L 433.86497120869836 195.55497365010456 L 394.8149834157296 195.9849663258858 L 432.260009765625 193.91000366210938 L 432.260009765625 193.91000366210938 Z" class="st2-34 mapsvg-region" title="300.00 m2"  data-id="A-22" ></path>
                                        <path d="M 432.260009765625 193.91000366210938 L 431.30999755859375 112.58000183105469 L 470.44000244140625 112.16000366210938 L 471.30999755859375 193.49000549316406 L 432.260009765625 193.91000366210938 Z" class="st2-34 mapsvg-region" title="300.00 m2"  data-id="A-23" ></path>
                                        <path d="M 471.239990234375 193.91000366210938 L 470.2900085449219 112.58000183105469 L 509.4200134277344 112.16000366210938 L 510.2900085449219 193.49000549316406 L 471.239990234375 193.91000366210938 Z" class="st2-34 mapsvg-region" title="300.00 m2" data-id="A-24"></path>
                                        <path d="M 510.3500061035156 193 L 509.3999938964844 111.66999816894531 L 548.530029296875 111.25 L 549.4000244140625 192.57000732421875 L 510.3500061035156 193 Z" class="st2-34 mapsvg-region" title="300.00 m2" data-id="A-25"></path>
                                        <path d="M 549.3099975585939 194.28496937764365 L 548.3699951171876 112.95496754658896 L 587.4899902343751 112.52496724141318 L 588.3599853515626 193.8549767018624 L 549.3099975585939 194.28496937764365 Z" class="st2-34 mapsvg-region" title="300.00 m2" data-id="A-26"></path>
                                        <path d="M 721.219970703125 191.1199951171875 L 720.280029296875 109.80000305175781 L 759.4000244140625 109.37000274658203 L 760.27001953125 190.6999969482422 L 721.219970703125 191.1199951171875 Z" class="st2-34 mapsvg-region" title="300.00 m2" data-id="A-29"></path>
                                        <path d="M 759.9099731445312 190.69000244140625 L 758.9600219726562 109.37000274658203 L 798.0900268554688 108.94000244140625 L 798.9600219726562 190.27000427246094 L 759.9099731445312 190.69000244140625 Z" class="st2-34 mapsvg-region" title="300.00 m2" data-id="A-30"></path>
                                        <path d="M 799.25 190.25999450683594 L 798.2999877929688 108.94000244140625 L 837.4299926757812 108.51000213623047 L 838.2999877929688 189.83999633789062 L 799.25 190.25999450683594 Z" class="st2-34 mapsvg-region" title="300.00 m2" data-id="A-31"></path>
                                        <path d="M 837.9000244140625 189.8300018310547 L 836.9600219726562 108.51000213623047 L 876.0900268554688 108.08000183105469 L 876.9500122070312 189.41000366210938 L 837.9000244140625 189.8300018310547 Z" class="st2-34 mapsvg-region" title="300.00 m2" data-id="A-32"  ></path>
                                        <path d="M 877.3099975585938 189.39999389648438 L 876.3699951171875 108.08000183105469 L 915.489990234375 107.6500015258789 L 916.3599853515625 188.97999572753906 L 877.3099975585938 189.39999389648438 Z" class="st2-34 mapsvg-region" title="300.00 m2" data-id="A-33"></path>
                                        <path d="M 916.2899780273438 188.97000122070312 L 915.3499755859375 107.6500015258789 L 954.47998046875 107.22000122070312 L 955.3400268554688 188.5500030517578 L 916.2899780273438 188.97000122070312 Z" class="st2-34 mapsvg-region" title="300.00 m2" data-id="A-34"></path>
                                        <path d="M 955.4600219726562 188.5399932861328 L 954.510009765625 107.22000122070312 L 993.6400146484375 106.79000091552734 L 994.510009765625 188.1199951171875 L 955.4600219726562 188.5399932861328 Z" class="st2-34 mapsvg-region" title="300.00 m2"  data-id="A-35" ></path>
                                        <path d="M 994.5 188.05999755859375 L 993.5499877929688 106.7300033569336 L 1032.6800537109375 106.30000305175781 L 1033.550048828125 187.6300048828125 L 994.5 188.05999755859375 Z" class="st2-34 mapsvg-region" title="300.00 m2"  data-id="A-36" ></path>
                                        <path d="M 1033.5799560546875 187.67999267578125 L 1032.6300048828125 106.3499984741211 L 1071.760009765625 105.93000030517578 L 1072.6300048828125 187.25999450683594 L 1033.5799560546875 187.67999267578125 Z" class="st2-34 mapsvg-region" title="300.00 m2" data-id="A-37"></path>
                                        <path d="M 1072.6400146484375 187.25 L 1071.68994140625 105.91999816894531 L 1110.8199462890625 105.5 L 1111.68994140625 186.8300018310547 L 1072.6400146484375 187.25 Z" class="st2-34 mapsvg-region" title="300.00 m2" data-id="A-38"></path>
                                        <path d="M 1111.699951171875 186.38999938964844 L 1110.760009765625 105.05999755859375 L 1149.8800048828125 104.63999938964844 L 1150.75 185.97000122070312 L 1111.699951171875 186.38999938964844 Z" class="st2-34 mapsvg-region" title="300.00 m2" data-id="A-39"></path>
                                        <path d="M 1150.6700439453125 186.2100067138672 L 1149.800048828125 104.81999969482422 L 1267.68994140625 103.5199966430664 L 1268.68994140625 197.3699951171875 L 1232.489990234375 198.72999572753906 L 1233.3599853515625 229.60000610351562 L 1148.81005859375 232.0800018310547 L 1150.6700439453125 186.2100067138672 Z" class="st2-34 mapsvg-region" title="1303.81 m2" data-id="A-40"></path>
                                        <path d="M 1148.81005859375 232.0800018310547 L 1147.3399658203125 271 L 1234.5400390625 268.6099853515625 L 1233.3599853515625 229.60000610351562 L 1148.81005859375 232.0800018310547 Z" class="st2-34 mapsvg-region" title="315.83 m2" data-id="A-41"></path>
                                        <path d="M 955.2642303278028 697.719970703125 L 956.154183941084 779.719970703125 L 1001.7442107965528 782.1199951171875 L 1000.8842254449903 697.2899780273438 L 955.2642303278028 697.719970703125 Z" class="st2-34 mapsvg-region" title="undefined" data-id="A-70"  ></path>
                                        <path d="M 1147.3399658203125 271 L 1147.9599609375 310.29998779296875 L 1235.5899658203125 307.70001220703125 L 1234.5400390625 268.6099853515625 L 1147.3399658203125 271 Z" class="st2-34 mapsvg-region" title="322.62 m2"  data-id="A-42" ></path>
                                        <path d="M 1147.9599609375 310.29998779296875 L 1149.3299560546875 349.3299865722656 L 1236.699951171875 346.75 L 1235.5899658203125 307.70001220703125 L 1147.9599609375 310.29998779296875 Z" class="st2-34 mapsvg-region" title="324.30 m2" data-id="A-43"></path>
                                        <path d="M 1149.3299560546875 349.3299865722656 L 1150.6400146484375 388.3999938964844 L 1237.8199462890625 385.79998779296875 L 1236.699951171875 346.75 L 1149.3299560546875 349.3299865722656 Z" class="st2-34 mapsvg-region" title="rgb(89,133,53)" data-id="A-44"></path>
                                        <path d="M 1150.6400146484375 388.3999938964844 L 1151.3199462890625 427.1199951171875 L 1238.9300537109375 424.8500061035156 L 1237.8199462890625 385.79998779296875 L 1150.6400146484375 388.3999938964844 Z" class="st2-34 mapsvg-region" title="322.02 m2" data-id="A-45"></path>
                                        <path d="M 1151.3199462890625 427.1199951171875 L 1150.9200439453125 466.5 L 1240.43994140625 463.8599853515625 L 1238.9300537109375 424.8500061035156 L 1151.3199462890625 427.1199951171875 Z" class="st2-34 mapsvg-region" title="325.09 m2" data-id="A-46"></path>
                                        <path d="M 1150.9200439453125 466.5 L 1148.0999755859375 505.739990234375 L 1241.22998046875 502.7900085449219 L 1240.43994140625 463.8599853515625 L 1150.9200439453125 466.5 Z" class="st2-34 mapsvg-region" title="334.93 m2" data-id="A-47"></path>
                                        <path d="M 1148.0999755859375 505.739990234375 L 1146.050048828125 544.77001953125 L 1242.81005859375 542.010009765625 L 1241.22998046875 502.7900085449219 L 1148.0999755859375 505.739990234375 Z" class="st2-34 mapsvg-region" title="348.35 m2" data-id="A-48"></path>
                                        <path d="M 1146.050048828125 544.77001953125 L 1145.010009765625 583.8900146484375 L 1243.989990234375 581.1300048828125 L 1242.81005859375 542.010009765625 L 1146.050048828125 544.77001953125 Z" class="st2-34 mapsvg-region" title="358.67 m2" data-id="A-49"></path>
                                        <path d="M 1145.010009765625 583.8900146484375 L 1145.0899658203125 622.9400024414062 L 1245.1600341796875 619.8800048828125 L 1243.989990234375 581.1300048828125 L 1145.010009765625 583.8900146484375 Z" class="st2-34 mapsvg-region" title="365.13 m2" data-id="A-50"></path>
                                        <path d="M 1145.0899658203125 622.9400024414062 L 1147.1199951171875 661.989990234375 L 1246.3499755859375 659.0999755859375 L 1245.1600341796875 619.8800048828125 L 1145.0899658203125 622.9400024414062 Z" class="st2-34 mapsvg-region" title="367.21 m2" data-id="A-51"></path>
                                        <path d="M 1147.1199951171875 661.989990234375 L 1151.010009765625 700.97998046875 L 1247.530029296875 698.1300048828125 L 1246.3499755859375 659.0999755859375 L 1147.1199951171875 661.989990234375 Z" class="st2-34 mapsvg-region" title="361.03 m2" data-id="A-52"></path>
                                        <path d="M 1151.010009765625 700.97998046875 L 1157.4000244140625 739.8099975585938 L 1248.7099609375 737.1599731445312 L 1247.530029296875 698.1300048828125 L 1151.010009765625 700.97998046875 Z" class="st2-34 mapsvg-region" title="345.55 m2" data-id="A-53"></path>
                                        <path d="M 1157.4000244140625 739.8099975585938 L 1168.8900146484375 785.0900268554688 L 1250.0899658203125 782.739990234375 L 1248.7099609375 737.1599731445312 L 1157.4000244140625 739.8099975585938 Z" class="st2-34 mapsvg-region" title="371.00 m2" data-id="A-54"></path>
                                        <path d="M 1168.8900146484375 785.0900268554688 L 1162.5699462890625 909.6799926757812 L 1254.550048828125 914.6400146484375 L 1250.0899658203125 782.739990234375 L 1168.8900146484375 785.0900268554688 Z" class="st2-34 mapsvg-region" title="1045.80 m2" data-id="A-55"></path>
                                        <path d="M 1166.699951171875 828.3599853515625 L 1127.97998046875 826.260009765625 L 1123.489990234375 907.5499877929688 L 1162.5699462890625 909.6799926757812 L 1166.699951171875 828.3599853515625 Z" class="st2-34 mapsvg-region" title="300.00 m2" data-id="A-56"></path>
                                        <path d="M 1127.97998046875 826.260009765625 L 1088.9100341796875 824.1599731445312 L 1084.6099853515625 905.530029296875 L 1123.489990234375 907.5499877929688" class="st2-34 mapsvg-region" title="300.00 m2" data-id="A-57"></path>
                                        <path d="M 1088.9100341796875 824.1599731445312 L 1049.8800048828125 822.1599731445312 L 1045.550048828125 903.2899780273438 L 1084.6099853515625 905.530029296875 L 1088.9100341796875 824.1599731445312 Z" class="st2-34 mapsvg-region" title="300.00 m2" data-id="A-58"></path>
                                        <path d="M 1049.8800048828125 822.1599731445312 L 1010.9299926757812 819.969970703125 L 1006.3300170898438 901.25 L 1045.550048828125 903.2899780273438 L 1049.8800048828125 822.1599731445312 Z" class="st2-34 mapsvg-region" title="300.00 m2" data-id="A-59"></path>
                                        <path d="M 1010.9299926757812 819.969970703125 L 971.8599853515625 817.8699951171875 L 967.5800170898438 898.969970703125 L 1006.3300170898438 901.25 L 1010.9299926757812 819.969970703125 Z" class="st2-34 mapsvg-region" title="300.00 m2" data-id="A-60"></path>
                                        <path d="M 971.8599853515625 817.8699951171875 L 932.780029296875 815.77001953125 L 928.5800170898438 897 L 967.5800170898438 898.969970703125 L 971.8599853515625 817.8699951171875 Z" class="st2-34 mapsvg-region" title="300.00 m2" data-id="A-61"></path>
                                        <path d="M 932.780029296875 815.77001953125 L 893.969970703125 813.719970703125 L 889.47998046875 894.9400024414062 L 928.5800170898438 897 L 932.780029296875 815.77001953125 Z" class="st2-34 mapsvg-region" title="300.00 m2" data-id="A-62"></path>
                                        <path d="M 893.969970703125 813.719970703125 L 854.9099731445312 811.5800170898438 L 850.5399780273438 892.8800048828125 L 889.47998046875 894.9400024414062 L 893.969970703125 813.719970703125 Z" class="st2-34 mapsvg-region" title="300.00 m2" data-id="A-63"></path>
                                        <path d="M 854.9099731445312 811.5800170898438 L 815.969970703125 809.47998046875 L 811.5 890.7100219726562 L 850.5399780273438 892.8800048828125 L 854.9099731445312 811.5800170898438 Z" class="st2-34 mapsvg-region" title="300.00 m2" data-id="A-64"></path>
                                        <path d="M 815.969970703125 809.47998046875 L 776.8900146484375 807.3800048828125 L 772.5800170898438 888.469970703125 L 811.5 890.7100219726562 L 815.969970703125 809.47998046875 Z" class="st2-34 mapsvg-region" title="300.00 m2" data-id="A-65"></path>
                                        <path d="M 776.8900146484375 807.3800048828125 L 737.8599853515625 805.280029296875 L 733.52001953125 886.5 L 772.5800170898438 888.469970703125 L 776.8900146484375 807.3800048828125 Z" class="st2-34 mapsvg-region" title="300.00 m2" data-id="A-66"></path>
                                        <path d="M 1002.6500244140625 697.2899780273438 L 1003.510009765625 782.1199951171875 L 1049.1400146484375 784.5999755859375 L 1048.280029296875 696.7899780273438 L 1002.6500244140625 697.2899780273438 Z" class="st2-34 mapsvg-region" title="371.39 m2" data-id="A-69"></path>
                                        <path d="M 911.530029296875 698.3099975585938 L 912.3200073242188 777.1599731445312 L 957.9199829101562 779.719970703125 L 957.030029296875 697.719970703125 L 911.530029296875 698.3099975585938 Z" class="st2-34 mapsvg-region" title="345.90 m2" data-id="A-71"></path>
                                        <path d="M 865.9299926757812 698.5700073242188 L 866.739990234375 774.6900024414062 L 912.3200073242188 777.1599731445312 L 911.530029296875 698.3099975585938 L 865.9299926757812 698.5700073242188 Z" class="st2-34 mapsvg-region" title="333.15 m2" data-id="A-72"></path>
                                        <path d="M 820.0399780273438 699.2100219726562 L 821 772.2999877929688 L 866.739990234375 774.6900024414062 L 865.9299926757812 698.5700073242188 L 820.0399780273438 699.2100219726562 Z" class="st2-34 mapsvg-region" title="320.40 m2" data-id="A-73"></path>
                                        <path d="M 774.3599853515625 699.780029296875 L 775.5399780273438 769.9600219726562 L 821 772.2999877929688 L 820.0399780273438 699.2100219726562 L 774.3599853515625 699.780029296875 Z" class="st2-34 mapsvg-region" title="307.66 m2" data-id="A-74"></path>
                                        <path d="M 729.1799926757812 700.280029296875 L 729.9199829101562 767.25 L 775.5399780273438 769.9600219726562 L 774.3599853515625 699.780029296875 L 729.1799926757812 700.280029296875 Z" class="st2-34 mapsvg-region" title="294.91 m2" data-id="A-75"></path>
                                        <path d="M 538.77001953125 838.52001953125 L 538.9400024414062 740.3800048828125 L 578.0700073242188 739.9600219726562 L 577.75 840.6300048828125 L 538.77001953125 838.52001953125 Z" class="st2-34 mapsvg-region" title="368.62 m2" data-id="A-78"></path>
                                        <path d="M 499.7200012207031 836.4000244140625 L 498.9800109863281 740.3800048828125 L 538.1099853515625 739.9600219726562 L 538.27001953125 838.489990234375 L 499.7200012207031 836.4000244140625 Z" class="st2-34 mapsvg-region" title="359.25 m2" data-id="A-79"></path>
                                        <path d="M 460.6700134277344 834.2899780273438 L 460.260009765625 740.3800048828125 L 499.3900146484375 739.9600219726562 L 499.7200012207031 836.4000244140625 L 460.6700134277344 834.2899780273438 Z" class="st2-34 mapsvg-region" title="349.89 m2" data-id="A-80"></path>
                                        <path d="M 420.2699890136719 832.7100219726562 L 420.2699890136719 741.8300170898438 L 459.3999938964844 741.4000244140625 L 460.6700134277344 834.2899780273438 L 420.2699890136719 832.7100219726562 Z" class="st2-34 mapsvg-region" title="340.52 m2" data-id="A-81"></path>
                                        <path d="M 1001.780029296875 625.6699829101562 L 1047.4300537109375 625.1599731445312 L 1048.280029296875 696.7899780273438 L 1002.6500244140625 697.2899780273438 L 1001.780029296875 625.6699829101562 Z" class="st2-34 mapsvg-region" title="308.00 m2" data-id="A-85"></path>
                                        <path d="M 956.2899780273438 626.1799926757812 L 1001.780029296875 625.6699829101562 L 1002.6500244140625 697.2899780273438 L 957.030029296875 697.719970703125 L 956.2899780273438 626.1799926757812 Z" class="st2-34 mapsvg-region" title="308.00 m2" data-id="A-86"></path>
                                        <path d="M 910.6699829101562 626.6799926757812 L 956.2899780273438 626.1799926757812 L 957.030029296875 697.719970703125 L 911.530029296875 698.3099975585938 L 910.6699829101562 626.6799926757812 Z" class="st2-34 mapsvg-region" title="308.00 m2" data-id="A-87"></path>
                                        <path d="M 865.1900024414062 627.3800048828125 L 910.6699829101562 626.6799926757812 L 911.530029296875 698.3099975585938 L 865.9299926757812 698.5700073242188 L 865.1900024414062 627.3800048828125 Z" class="st2-34 mapsvg-region" title="308.00 m2" data-id="A-88"></path>
                                        <path d="M 819.5499877929688 627.6900024414062 L 865.1900024414062 627.3800048828125 L 865.9299926757812 698.5700073242188 L 820.0399780273438 699.2100219726562 L 819.5499877929688 627.6900024414062 Z" class="st2-34 mapsvg-region" title="308.00 m2" data-id="A-89"></path>
                                        <path d="M 819.5499877929688 627.6900024414062 L 774.0599975585938 628.2000122070312 L 774.3599853515625 699.780029296875 L 820.0399780273438 699.2100219726562 L 819.5499877929688 627.6900024414062 Z" class="st2-34 mapsvg-region" title="308.00 m2" data-id="A-90"></path>
                                        <path d="M 728.4400024414062 628.6500244140625 L 729.1799926757812 700.280029296875 L 774.3599853515625 699.780029296875 L 774.0599975585938 628.2000122070312 L 728.4400024414062 628.6500244140625 Z" class="st2-34 mapsvg-region" title="308.00 m2" data-id="A-91"></path>
                                        <path d="M 538.3099975585938 739.9000244140625 L 537.4400024414062 658.780029296875 L 577.75 658.780029296875 L 578.0700073242188 739.9600219726562 L 538.3099975585938 739.9000244140625 Z" class="st2-34 mapsvg-region" title="300.00 m2" data-id="A-94"></path>
                                        <path d="M 499.260009765625 740.3300170898438 L 498.30999755859375 659.2100219726562 L 537.4400024414062 658.780029296875 L 538.3099975585938 739.9000244140625 L 499.260009765625 740.3300170898438 Z" class="st2-34 mapsvg-region" title="300.00 m2" data-id="A-95"></path>
                                        <path d="M 459.7699890136719 740.3599853515625 L 458.82000732421875 659.239990234375 L 497.95001220703125 658.8099975585938 L 498.82000732421875 739.9400024414062 L 459.7699890136719 740.3599853515625 Z" class="st2-34 mapsvg-region" title="300.00 m2" data-id="A-96"></path>
                                        <path d="M 420.6499938964844 741.739990234375 L 420.2699890136719 660.6199951171875 L 459.3999938964844 660.1900024414062 L 460.260009765625 741.3099975585938 L 420.6499938964844 741.739990234375 Z" class="st2-34 mapsvg-region" title="300.00 m2" data-id="A-97"></path>
                                        <path d="M 930.9400024414062 588.6199951171875 L 930 507.5 L 969.1300048828125 507.07000732421875 L 969.989990234375 588.2000122070312 L 930.9400024414062 588.6199951171875 Z" class="st2-34 mapsvg-region" title="300.00 m2" data-id="A-101"></path>
                                        <path d="M 891.989990234375 588.6199951171875 L 891.0399780273438 507.5 L 930.1699829101562 507.07000732421875 L 931.030029296875 588.2000122070312 L 891.989990234375 588.6199951171875 Z" class="st2-34 mapsvg-region" title="300.00 m2" data-id="A-102"></path>
                                        <path d="M 852.72998046875 590.02001953125 L 851.780029296875 508.8999938964844 L 890.9099731445312 508.4800109863281 L 891.77001953125 589.5999755859375 L 852.72998046875 590.02001953125 Z" class="st2-34 mapsvg-region" title=" 300.00 m2" data-id="A-103"></path>
                                        <path d="M 814.1099853515625 590.02001953125 L 813.1599731445312 508.8999938964844 L 852.2899780273438 508.4800109863281 L 853.1500244140625 589.5999755859375 L 814.1099853515625 590.02001953125 Z" class="st2-34 mapsvg-region" title="300.00 m2" data-id="A-104"></path>
                                        <path d="M 774.6400146484375 591.02001953125 L 773.7000122070312 509.8999938964844 L 812.8300170898438 509.4800109863281 L 813.7000122070312 590.5999755859375 L 774.6400146484375 591.02001953125 Z" class="st2-34 mapsvg-region" title="300.00 m2" data-id="A-105"  ></path>
                                        <path d="M 735.969970703125 591.260009765625 L 735.030029296875 510.1400146484375 L 774.1500244140625 509.7099914550781 L 775.02001953125 590.8300170898438 L 735.969970703125 591.260009765625 Z" class="st2-34 mapsvg-region" title="300.00 m2" data-id="A-106"></path>
                                        <path d="M 544.469970703125 536.280029296875 L 583.5800170898438 535.8499755859375 L 584.510009765625 620.4299926757812 L 545.4600219726562 620.8499755859375 L 544.469970703125 536.280029296875 Z" class="st2-34 mapsvg-region" title="312.00 m2" data-id="A-109"></path>
                                        <path d="M 505.489990234375 536.6699829101562 L 544.469970703125 536.280029296875 L 545.4600219726562 620.8499755859375 L 506.4100036621094 621.27001953125 L 505.489990234375 536.6699829101562 Z" class="st2-34 mapsvg-region" title="312.00 m2" data-id="A-110"></path>
                                        <path d="M 466.25 536.8499755859375 L 505.489990234375 536.6699829101562 L 506.4100036621094 621.27001953125 L 467.239990234375 621.7000122070312 L 466.25 536.8499755859375 Z" class="st2-34 mapsvg-region" title="312.00 m2" data-id="A-111"></path>
                                        <path d="M 427.42999267578125 537.5599975585938 L 466.25 536.8499755859375 L 467.239990234375 621.7000122070312 L 428.19000244140625 622.1199951171875 L 427.42999267578125 537.5599975585938 Z" class="st2-34 mapsvg-region" title="312.00 m2" data-id="A-112"></path>
                                        <path d="M 388.2200012207031 537.9199829101562 L 427.42999267578125 537.5599975585938 L 428.19000244140625 622.1199951171875 L 389.1400146484375 622.5399780273438 L 388.2200012207031 537.9199829101562 Z" class="st2-34 mapsvg-region" title="312.00 m2" data-id="A-113"></path>
                                        <path d="M 349.19000244140625 538.27001953125 L 388.2200012207031 537.9199829101562 L 389.1400146484375 622.5399780273438 L 350.0899963378906 622.9600219726562 L 349.19000244140625 538.27001953125 Z" class="st2-34 mapsvg-region" title="312.00 m2" data-id="A-114"></path>
                                        <path d="M 276.20001220703125 538.6799926757812 L 273.9700012207031 571 L 301.55999755859375 623.489990234375 L 350.0899963378906 622.9600219726562 L 349.19000244140625 538.27001953125 L 276.20001220703125 538.6799926757812 Z" class="st2-34 mapsvg-region" title="535.79 m2" data-id="A-115"></path>
                                        <path d="M 543.47998046875 443.57000732421875 L 582.6500244140625 449.5299987792969 L 583.5800170898438 535.8499755859375 L 544.469970703125 536.280029296875 L 543.47998046875 443.57000732421875 Z" class="st2-34 mapsvg-region" title="329.94 m2" data-id="A-124"></path>
                                        <path d="M 930.1500244140625 507.7900085449219 L 929.2100219726562 426.6700134277344 L 968.3400268554688 426.239990234375 L 969.2000122070312 507.3699951171875 L 930.1500244140625 507.7900085449219 Z" class="st2-34 mapsvg-region" title="300.00 m2"  data-id="A-117" ></path>
                                        <path d="M 891.1199951171875 507.7900085449219 L 890.1799926757812 426.6700134277344 L 929.2999877929688 426.239990234375 L 930.1699829101562 507.3699951171875 L 891.1199951171875 507.7900085449219 Z" class="st2-34 mapsvg-region" title="300.00 m2" data-id="A-118"></path>
                                        <path d="M 852.72998046875 508.6400146484375 L 851.780029296875 427.5199890136719 L 890.9099731445312 427.0899963378906 L 891.77001953125 508.2200012207031 L 852.72998046875 508.6400146484375 Z" class="st2-34 mapsvg-region" title="300.00 m2" data-id="A-119"></path>
                                        <path d="M 813.8800048828125 509.5899963378906 L 812.9299926757812 428.4700012207031 L 852.0599975585938 428.0400085449219 L 852.9199829101562 509.1700134277344 L 813.8800048828125 509.5899963378906 Z" class="st2-34 mapsvg-region" title="300.00 m2" data-id="A-120"></path>
                                        <path d="M 774.4400024414062 509.5899963378906 L 773.489990234375 428.4700012207031 L 812.6199951171875 428.0400085449219 L 813.489990234375 509.1700134277344 L 774.4400024414062 509.5899963378906 Z" class="st2-34 mapsvg-region" title="300.00 m2" data-id="A-121"></path>
                                        <path d="M 504.30999755859375 439.989990234375 L 543.47998046875 443.57000732421875 L 544.469970703125 536.280029296875 L 505.489990234375 536.6699829101562 L 504.30999755859375 439.989990234375 Z" class="st2-34 mapsvg-region" title="347.95 m2" data-id="A-125"></path>
                                        <path d="M 465.25 438.3500061035156 L 504.30999755859375 439.989990234375 L 505.489990234375 536.6699829101562 L 466.25 536.8499755859375 L 465.25 438.3500061035156 Z" class="st2-34 mapsvg-region" title="359.26 m2" data-id="A-126"></path>
                                        <path d="M 426.2099914550781 438.3500061035156 L 465.25 438.3500061035156 L 466.25 536.8499755859375 L 427.42999267578125 537.5599975585938 L 426.2099914550781 438.3500061035156 Z" class="st2-34 mapsvg-region" title="363.92 m2" data-id="A-127"></path>
                                        <path d="M 387.1600036621094 440.239990234375 L 426.2099914550781 438.3500061035156 L 427.42999267578125 537.5599975585938 L 388.2200012207031 537.9199829101562 L 387.1600036621094 440.239990234375 Z" class="st2-34 mapsvg-region" title="361.99 m2" data-id="A-128"></path>
                                        <path d="M 348.1099853515625 444.4800109863281 L 387.1600036621094 440.239990234375 L 388.2200012207031 537.9199829101562 L 349.19000244140625 538.27001953125 L 348.1099853515625 444.4800109863281 Z" class="st2-34 mapsvg-region" title="353.43 m2" data-id="A-129"></path>
                                        <path d="M 280.4200134277344 454.5400085449219 L 276.20001220703125 538.6799926757812 L 349.19000244140625 538.27001953125 L 348.1099853515625 444.4800109863281 L 280.4200134277344 454.5400085449219 Z" class="st2-34 mapsvg-region" title="591.61 m2" data-id="A-130"></path>
                                        <path d="M 990.3400268554688 387.3900146484375 L 989.3900146484375 306.260009765625 L 1028.52001953125 305.8399963378906 L 1029.3900146484375 386.9599914550781 L 990.3400268554688 387.3900146484375 Z" class="st2-34 mapsvg-region" title="300.00 m2" data-id="A-132"></path>
                                        <path d="M 951.280029296875 387.80999755859375 L 950.3400268554688 306.69000244140625 L 989.4600219726562 306.2699890136719 L 990.3300170898438 387.3900146484375 L 951.280029296875 387.80999755859375 Z" class="st2-34 mapsvg-region" title="300.00 m2" data-id="A-133"></path>
                                        <path d="M 912.0999755859375 388.9100036621094 L 911.1599731445312 307.7900085449219 L 950.280029296875 307.3699951171875 L 951.1500244140625 388.489990234375 L 912.0999755859375 388.9100036621094 Z" class="st2-34 mapsvg-region" title="300.00 m2" data-id="A-134"></path>
                                        <path d="M 872.719970703125 389.5899963378906 L 871.780029296875 308.4700012207031 L 910.9099731445312 308.0400085449219 L 911.77001953125 389.1700134277344 L 872.719970703125 389.5899963378906 Z" class="st2-34 mapsvg-region" title="300.00 m2" data-id="A-135"></path>
                                        <path d="M 833.8699951171875 389.5899963378906 L 832.9299926757812 308.4700012207031 L 872.0599975585938 308.0400085449219 L 872.9199829101562 389.1700134277344 L 833.8699951171875 389.5899963378906 Z" class="st2-34 mapsvg-region" title="300.00 m2" data-id="A-136"></path>
                                        <path d="M 795.2899780273438 389.82000732421875 L 794.3499755859375 308.70001220703125 L 833.47998046875 308.2699890136719 L 834.3400268554688 389.3999938964844 L 795.2899780273438 389.82000732421875 Z" class="st2-34 mapsvg-region" title="300.00 m2" data-id="A-137"></path>
                                        <path d="M 439.20001220703125 299.8800048828125 L 487.8500061035156 299.2699890136719 L 488.75 367.989990234375 L 439.9200134277344 366.7900085449219 L 439.20001220703125 299.8800048828125 Z" class="st2-34 mapsvg-region" title="311.95 m2" data-id="A-141"></path>
                                        <path d="M 390.3399963378906 300.4100036621094 L 439.20001220703125 299.8800048828125 L 439.9200134277344 366.7900085449219 L 391.1099853515625 368.260009765625 L 390.3399963378906 300.4100036621094 Z" class="st2-34 mapsvg-region" title="311.21 m2" data-id="A-142"></path>
                                        <path d="M 339.8999938964844 300.9700012207031 L 390.3399963378906 300.4100036621094 L 391.1099853515625 368.260009765625 L 340.6700134277344 372.8500061035156 L 339.8999938964844 300.9700012207031 Z" class="st2-34 mapsvg-region" title="333.46 m2" data-id="A-143"></path>
                                        <path d="M 1028.2099609375 306 L 1027.27001953125 224.8699951171875 L 1066.3900146484375 224.4499969482422 L 1067.260009765625 305.57000732421875 L 1028.2099609375 306 Z" class="st2-34 mapsvg-region" title="300.00 m2" data-id="A-146"></path>
                                        <path d="M 989.219970703125 307.3699951171875 L 988.27001953125 226.25 L 1027.4000244140625 225.82000732421875 L 1028.27001953125 306.94000244140625 L 989.219970703125 307.3699951171875 Z" class="st2-34 mapsvg-region" title="300.00 m2" data-id="A-147"></path>
                                        <path d="M 950.1500244140625 307.3699951171875 L 949.2100219726562 226.25 L 988.3400268554688 225.82000732421875 L 989.2000122070312 306.94000244140625 L 950.1500244140625 307.3699951171875 Z" class="st2-34 mapsvg-region" title="300.00 m2" data-id="A-148"></path>
                                        <path d="M 911.2899780273438 307.3699951171875 L 910.3400268554688 226.25 L 949.469970703125 225.82000732421875 L 950.3400268554688 306.94000244140625 L 911.2899780273438 307.3699951171875 Z" class="st2-34 mapsvg-region" title=" 300.00 m2" data-id="A-149"></path>
                                        <path d="M 872.3099975585938 308.2300109863281 L 871.3599853515625 227.11000061035156 L 910.489990234375 226.69000244140625 L 911.3599853515625 307.80999755859375 L 872.3099975585938 308.2300109863281 Z" class="st2-34 mapsvg-region" title="300.00 m2" data-id="A-150"></path>
                                        <path d="M 832.4500122070312 308.2300109863281 L 831.510009765625 227.11000061035156 L 870.6400146484375 226.69000244140625 L 871.5 307.80999755859375 L 832.4500122070312 308.2300109863281 Z" class="st2-34 mapsvg-region" title="300.00 m2" data-id="A-151"></path>
                                        <path d="M 793.4299926757812 309.1700134277344 L 792.489990234375 228.0399932861328 L 831.6199951171875 227.6199951171875 L 832.47998046875 308.739990234375 L 793.4299926757812 309.1700134277344 Z" class="st2-34 mapsvg-region" title="300.00 m2" data-id="A-152"></path>
                                        <path d="M 486.0250434397392 229.16502757059857 L 437.6350287913017 229.71503062235638 L 438.3650397776298 297.57503123270794 L 487.0150336741142 296.9750251291923 L 486.0250434397392 229.16502757059857 Z" class="st2-34 mapsvg-region" title="315.00 m2" data-id="A-155"></path>
                                        <path d="M 438.4800109863281 231.49000549316406 L 389.57000732421875 232.0399932861328 L 390.3399963378906 300.4100036621094 L 439.20001220703125 299.8800048828125 L 438.4800109863281 231.49000549316406 Z" class="st2-34 mapsvg-region" title="315.00 m2" data-id="A-156"></path>
                                        <path d="M 389.57000732421875 232.0399932861328 L 339.17999267578125 232.61000061035156 L 339.8999938964844 300.9700012207031 L 390.3399963378906 300.4100036621094 L 389.57000732421875 232.0399932861328 Z" class="st2-34 mapsvg-region" title="325.50 m2" data-id="A-157"></path>
                                        <path d="M 339.17999267578125 232.61000061035156 L 277.07000732421875 233.0399932861328 L 280.29998779296875 301.6199951171875 L 339.8999938964844 300.9700012207031 L 339.17999267578125 232.61000061035156 Z" class="st2-34 mapsvg-region" title="391.64 m2" data-id="A-158"></path>
                                    </g>
                                    <g id="legend">
                                        <text class="st1-37" transform="translate(1370 715)">Premium</text>
                                        <rect class="st2-36" x="1330" y="690" width="28" height="28"></rect>
                                        <text class="st1-37" transform="translate(1370 765)">Estandar</text>
                                        <rect class="st2-35" x="1330" y="740" width="28" height="28"></rect>
                                    </g>
                                </svg>
                                <!-- SVG -->
                            </div>
                            <div class="leyend-status d-flex flex-row justify-content-around text-center fw-bold text-white mt-3">
                                <div class="small bg-sold rounded-pill px-2">VENDIDO</div>
                                <div class="small bg-available rounded-pill px-2">DISPONIBLE</div>
                                <div class="small bg-reserved rounded-pill px-2">RESERVADO</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item border border-success my-4">
                    <h2 class="accordion-header border-bottom border-success" id="heading-2">
                        <button class="accordion-button <?php if ($projectStage == 2) {
                                                            echo "";
                                                        } else {
                                                            echo "collapsed";
                                                        } ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapseStage-2" aria-expanded="false" aria-controls="collapseStage-2" title="Click para ver detalles y mapa">
                            <div class="container table-responsive-md">
                                <table class="table table-sm table-borderless caption-top">
                                    <caption class="h1 fw-bold text-center text-success text-nowrap">Etapa-2</caption>
                                    <thead>
                                        <tr>
                                            <!-- <th scope="col" class="h1 fw-bold text-success text-nowrap">Etapa-1</th> -->
                                            <th scope="col" class="h5 available-title text-center">Total de lotes</th>
                                            <th scope="col" class="h5 available-title text-center">Disponibles</th>
                                            <th scope="col" class="h5 available-title text-center">Fecha de entrega</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <!-- <th class="h2"></th> -->
                                            <td class="display-4 fw-bold text-center">171</td>
                                            <td class="display-4 fw-bold text-center" id="available-2"></td>
                                            <td class="display-4 fw-bold text-center">2024</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </button>
                    </h2>
                    <div id="collapseStage-2" class="accordion-collapse collapse <?php if ($projectStage == 2) {
                                                                                        echo "show";
                                                                                    } else {
                                                                                        echo "";
                                                                                    } ?>" aria-labelledby="heading-2" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <!-- Price Start -->
                            <div class="container-xxl py-1 px-0">
                                <!-- <div class="container"> -->
                                <div class="row g-0 gx-5 align-items-center">
                                    <div class="col-lg-12">
                                        <div class="text-center mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                                            <h1 class="fw-bold text-decoration-underline">PRECIO DE LOTES</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-cols-1 row-cols-lg-1">
                                    <div class="col wow fadeInUp mb-5" data-wow-delay="0.1s">
                                        <div class="card border-5 h-100 shadow px-0">
                                            <div class="card-header text-center">
                                                <!-- <p class="h2">Precio por m<small><sup>2</sup></small></p> -->
                                                <p class="h2 text-success">Lote tipo</p>
                                            </div>
                                            <div class="card-body">
                                                <div class="row text-center">
                                                    <div class="col-6">
                                                        <p class="h6">Precio por m<small><sup>2</sup></small></p>
                                                        <p class="h4 text-success">418 <span class="h4">MXN</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <p class="h6">Financiamiento hasta</p>
                                                        <p class="h4 text-success">60 <span class="h4">MSI</p>
                                                    </div>
                                                </div>
                                                <div class="row text-center">
                                                    <p class="h6">Enganche de</p>
                                                    <p class="h4 text-success">10%</h6>
                                                </div>
                                            </div>
                                            <!-- <div class="card-footer">
                                                    <p class="card-title text-center h4">Entrega Diciembre 2025</p>
                                                </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- </div> -->
                            <!-- Price End -->
                            <div class="loader-container text-center mb-2">
                                <span class="mdi mdi-vanish mdi-spin"></span>
                                Loading image...
                            </div>
                            <div class="d-flex justify-content-center">
                                <img src="<?= STATIC_URL . 'img/wind-rose_ES.svg' ?>" alt="Brujula" height="80px" width="80px" style="transform: rotate(0deg);">
                            </div>
                            <div class="row mt-2">
                                <p class="small fw-bolder text-center">Para más información, <span class="mouse-touche">pase el mouse </span>sobre el lote</p>
                            </div>
                            <div class="row">
                                <!-- SVG -->
                                <svg version="1.1" x="0px" y="0px" viewBox="0 0 1300 900" style="width: 1100px; transform: scale(1);" xml:space="preserve" preserveAspectRatio="xMidYMid meet">
                                    <style type="text/css">
                                        .st2-3 {
                                            font-family: 'Calibri';
                                        }

                                        .st2-4 {
                                            font-size: 7.0941px;
                                        }

                                        .st2-6 {
                                            font-size: 8.2551px;
                                        }

                                        .st2-8 {
                                            font-size: 7.0943px;
                                        }

                                        .st2-9 {
                                            font-size: 5.9117px;
                                        }

                                        .st2-10 {
                                            font-size: 5.9118px;
                                        }

                                        .st2-11 {
                                            font-size: 6.8792px;
                                        }

                                        .st2-12 {
                                            font-size: 7.0942px;
                                        }

                                        .st2-13 {
                                            font-size: 5.9122px;
                                        }

                                        .st2-14 {
                                            fill: #D6EDD6;
                                        }

                                        .st2-15 {
                                            fill: #989898;
                                        }

                                        .st2-16 {
                                            fill: #87C674;
                                            stroke: #FFFFFF;
                                            stroke-miterlimit: 10;
                                        }

                                        .st2-17 {
                                            fill: #7FC26A;
                                            stroke: #FFFFFF;
                                            stroke-miterlimit: 10;
                                        }

                                        .st2-18 {
                                            fill: #00B15A;
                                            stroke: #FFFFFF;
                                            stroke-miterlimit: 10;
                                        }

                                        .st2-19 {
                                            fill: #87C674;
                                        }

                                        .st2-20 {
                                            fill: #636566;
                                        }

                                        .st2-22 {
                                            fill: none;
                                            stroke: #FF0000;
                                            stroke-miterlimit: 10;
                                        }

                                        .st2-23 {
                                            fill: #FFFFFF;
                                        }

                                        .st2-24 {
                                            font-family: 'MyriadPro-Regular';
                                        }

                                        .st2-25 {
                                            font-size: 22.1897px;
                                        }

                                        .st2-26 {
                                            font-size: 17.4916px;
                                        }

                                        .st2-27 {
                                            font-size: 19.1503px;
                                        }

                                        .st2-28 {
                                            fill: none;
                                        }

                                        .st2-29 {
                                            font-size: 16.6978px;
                                        }

                                        .st2-30 {
                                            fill: #428715;
                                        }

                                        .st2-31 {
                                            fill: #214414;
                                        }

                                        .st2-32 {
                                            fill: #748415;
                                        }

                                        .st2-33 {
                                            fill: #53601B;
                                        }

                                        .st2-34 {
                                            fill: rgba(0, 0, 0, 0.1);
                                        }

                                        .st2-35 {
                                            fill: rgba(135, 198, 116);
                                        }

                                        .st2-36 {
                                            fill: rgba(5, 110, 57);
                                        }

                                        .st2-37 {
                                            font-family: 'Montserrat-Bold';
                                            font-size: 22px;
                                            fill: #000;
                                        }
                                    </style>
                                    <g id="Capa_9">
                                        <path class="st2-14 " d="M14.28,252.88C-2.6,175.25,3.75,122.26,99.05,111.86s216.22,50.33,392.76,50.77   c186.34,0.46,364.94-52.91,430.03-50.77c126.76,4.17,193.26,176.35,187.85,245.02s-40.26,130.87-45.49,220.5   c-4.7,80.61,34.78,116.24,15.27,203.87s-118.3,132.57-286.37,99.44c-120.04-31.93-329.74-82.53-409.37-94.51   s-206.12,60.97-332.03-12.86c-66.54-39.03-30.68-159.63-20.22-276.96C40.83,391.69,22.24,289.47,14.28,252.88z"></path>
                                    </g>
                                    <g id="poligono_completo">
                                        <path class="st2-15   " d="M77.5,174.5c14.27,90.45,25.28,181.12,33,272c11.45,119.33,18.97,230.61,20,314l933-9l-8-586L77.5,174.5z"></path>
                                    </g>
                                    <g id="AREAS_VERDES">
                                        <path class="st2-16" d="M103.5,375.5l0.74,4.63c12.06,0.84,24.96,0.59,38.39-0.39c10.51-0.73,20.45-1.98,29.7-3.85   c3.67-1.15,5.96-3.42,6.17-7.39L103.5,375.5z" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="auto" data-bs-html="true" aria-label="Áreas verdes y jardineras"></path>
                                        <path class="st2-16" d="M108.48,421.59l-1.7-18c26.43,0.85,49.85-0.9,71.04-4.59c3.27-0.5,4.41,3.56,1.7,4.59   C155.37,408.71,131.7,414.72,108.48,421.59z" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="auto" data-bs-html="true" aria-label="Áreas verdes y jardineras"></path>
                                        <path class="st2-17" d="M110.78,445.59l72.59-4.89v-5.63c-0.98-4.6-4.21-6.76-9.93-6.22C153.59,432.19,115.52,445,110.78,445.59z" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="auto" data-bs-html="true" aria-label="Áreas verdes y jardineras"></path>
                                        <path class="st2-18" d="M201.67,508.81c1.11,41.8,4.24,81.08,10.89,116.02c3.05,15.4,9.34,28.25,18.22,39.06   c22.78,21.67,61.78,10.22,65.33-17.11c1.77-27.73-8.91-47.17-25.56-62.64c-24.95-19.92-44.19-46.9-61.33-76.48   C208.44,504.19,201.67,504.63,201.67,508.81z" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="auto" data-bs-html="true" aria-label="Áreas verdes y jardineras"></path>
                                        <path class="st2-19" d="M214.67,392.22c-3.89,2-1.75,5.19,1,4.67c86.32-13.58,170.69-15.48,252.72-3.39c7.06,1.5,8.24-4.76,0-4.78   C385.87,376.23,301.1,378.73,214.67,392.22z" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="auto" data-bs-html="true" aria-label="Áreas verdes y jardineras"></path>
                                        <path class="st2-18" d="M469.96,281.51c-10.79,56.51,12.98,88.59,48.15,112.6c41.79,18.71,66.96-10.22,66.96-28.15   c9.48-43.41-16.24-86.3-51.85-105.78C507,247.67,479.67,256.67,469.96,281.51z" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="auto" data-bs-html="true" aria-label="Áreas verdes y jardineras"></path>
                                        <path class="st2-18" d="M957,350.78c-11.93,30.89-29.51,55.35-48.67,76c-22.67,20.07-32.06,53-23.17,75.17   c15.31,25.94,53.91,25.06,68.06,1.35c6.84-11.99,10.97-25.75,12.89-40.96c2.37-37.3,2.22-74.22-0.44-110.78   C964.31,347.92,960.16,347.1,957,350.78z" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="auto" data-bs-html="true" aria-label="Áreas verdes y jardineras"></path>
                                    </g>
                                    <g id="Calles">
                                        <path class="st2-15" d="M77.5,174.5H12c31.74,194,53.87,520.23,53.3,585.89h65.45C122.11,543.89,105.46,341.39,77.5,174.5z"></path>
                                        <polygon class="st2-20" points="127.67,760.39 119.3,586.85 110.78,476.78 102.33,394.56 88.19,271.74 76.41,186.04 74.7,174.5    15.39,174.5 22.11,221.67 33.22,305.67 39.56,358 48.19,444.78 56.56,541 64.19,655.59 67.89,732.78 68.78,760.39  "></polygon>
                                        <polygon class="st2-15" points="72.57,174.5 83,248.78 88.85,294.19 96.56,359.78 102.33,414.67 106.78,461 110.22,500    113.44,538.11 116.56,582.11 119.33,630.44 121.78,672.89 123.11,701.22 124.56,736.22 125.33,760.39 70.78,760.39 67.33,680.89    63.11,603.44 57.56,524.33 48.89,427.67 43.67,378.78 37.78,325.89 30.67,267.78 24.89,227 19.22,186.56 17.56,174.5  "></polygon>
                                        <path class="st2-18" d="M102.26,760.39l-2.81-72.06l-3.67-67.89L91,551l-6-73.11l-4-43.33l-0.67-7.81c-0.52-0.28-2.14-1.08-4.3-0.78   c-2.14,0.3-3.47,1.51-3.89,1.93c0.73,7.48,1.46,14.96,2.19,22.44l2.22,25.11l2,22.81L81,526.93l3.41,45.26l1.7,26.81l2.15,33.11   l1.63,32.52l1.41,27.56l1.48,34l1.11,34.2H102.26z"></path>
                                        <path class="st2-18" d="M40.89,174.5l8.33,56.94l5.78,44l6.44,50.67l5.33,47.56l3.33,30.89c0.37,0.33,1.81,1.52,4,1.56   c2.33,0.04,3.87-1.25,4.22-1.56c-2.06-16.52-4.12-33.04-6.19-49.56l-4.93-48.22L62.78,271l-5.56-38.22l-4.44-36.22l-2.89-19.33   L49,174.5H40.89z"></path>
                                    </g>
                                    <g id="Capa_6">
                                    </g>
                                    <g id="stage_2">
                                        <path class="st2-22" d="M257.52,232.5"></path>
                                        <path class="mapsvg-region" d="M521.56,228.81l-67.4,0.78l-0.83-58.57l46.18-0.41C505.13,190.67,512.32,210.13,521.56,228.81z" title="511.05 M2" id="A-14" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" data-stroke-width="1.2"></path>
                                        <path class="mapsvg-region" d="M531.78,170.31c5.25,18.98,13.55,38.47,24.08,58.35l34.58-0.34l-0.82-58.63L531.78,170.31z" title="434.86 M2" id="A-15" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" data-stroke-width="1.2"></path>
                                        <path class="mapsvg-region" d="M1060.17,542.78l-0.28-28.06l-81.22,0.61c-0.43,10.73-0.61,20.67,0,28.11L1060.17,542.78z" title="358.9 M2" id="A-144" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" data-stroke-width="1.2"></path>
                                        <path class="mapsvg-region" d="M440.28,361.78l-40.42-3.08l-0.58-52.33l40.09-0.55c0.27,15.37,3.18,30.05,8.52,44.07   c2.01,2.97,2.74,5.92,0,8.81C445.87,360.8,443.36,361.88,440.28,361.78z" title="372.11 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-50" data-stroke-width="1.2"></path>
                                        <path class="mapsvg-region" d="M398.61,257.11l0.67,49.25l40.09-0.55c0.97-14.78,2.57-28.89,8.13-38.81c1.46-6.14-0.78-9.64-6.94-10.33   L398.61,257.11z" title="340.13 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-39" data-stroke-width="1.2"></path>
                                        <path class="mapsvg-region" d="M215.86,473.33l0.3,10.17c6.86,16.69,15.21,32.09,25.2,46.09l51.85-0.67l-0.67-56.59L215.86,473.33z" title="592.08 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-76" data-stroke-width="1.2"></path>
                                        <path class="mapsvg-region" d="M509.06,526.83l-38.39,0.47l-0.71-56.26l56-0.49C518.21,488.51,512.74,507.33,509.06,526.83z" title="406.87 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-82" data-stroke-width="1.2"></path>
                                        <path class="mapsvg-region" d="M469.15,417.3l0.81,53.75c0,0-35.53,1.07-35.54,0.36c-0.01-0.7-0.74-58.35-0.74-58.35L469.15,417.3z" title="311.24 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-69" data-stroke-width="1.2"></path>
                                        <path class="mapsvg-region" d="M535.44,429.52c-22.5-5-44.63-9.14-66.3-12.22l0.81,53.75l56-0.49l14.67-30.52   C543.51,435.24,542.35,431.58,535.44,429.52z" title="489.35 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-68" data-stroke-width="1.2"></path>
                                        <path class="mapsvg-region" d="M356.06,555.39l-76.24,0.8c-5.34,1.64-8.15,4.69-6.15,10.44c16.34,13.75,28.74,29.33,34.67,47.89l48.63-0.52   L356.06,555.39z" title="602.62 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-108" data-stroke-width="1.2"></path>
                                        <path class="mapsvg-region" d="M503.72,554l-49.3,0.5l0.8,58.56l43.57-0.44C499.33,591.29,500.77,571.43,503.72,554z" title="419.66 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-104" data-stroke-width="1.2"></path>
                                        <path class="mapsvg-region" d="M357.72,672.58L356.96,614l-48.63,0.52c5.48,16.7,6.97,32.9,0,48.04c-2.47,4.93-1.07,8.46,5.78,10.03H357.72z   " title="425.26 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-109" data-stroke-width="1.2"></path>
                                        <path class="mapsvg-region" d="M502.22,671.28l-46.28,0.44l-0.72-58.67l43.57-0.44C498.65,632.4,499.77,651.96,502.22,671.28z" title="405.42 M2" style="stroke-width: 0.922432px; fill: rgba(228, 22, 66, 0.52);" id="A-113" data-stroke-width="1.2"></path>
                                        <path class="mapsvg-region" d="M533.63,670.89c-2.3-19.61-3.48-39.05-3.37-58.28l44.63-0.69l0.75,58.58L533.63,670.89z" title="403.68 M2" style="stroke-width: 0.922432px; fill: rgba(228, 22, 66, 0.52);" id="A-114" data-stroke-width="1.2"></path>
                                        <path class="mapsvg-region" d="M958.56,666.85l-55.41,0.44l-0.65-58.46l49.46-0.5c2.62,17.92,6.22,34.92,11.3,50.52   C964.12,663.37,962.7,666.15,958.56,666.85z" title="503.09 M2" id="A-125" style="fill: rgba(228, 22, 66, 0.52); stroke-width: 0.922432px;" data-stroke-width="1.2"></path>
                                        <path class="mapsvg-region" d="M946.11,549.67c0.72,18.78,2.75,38.39,5.85,58.67l-49.46,0.5l-0.92-58.61L946.11,549.67z" title="425.17 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-92" data-stroke-width="1.2"></path>
                                        <path class="mapsvg-region" d="M535.44,553.69c-3.18,20.55-5.13,40.33-5.19,58.93l44.63-0.69l-0.75-58.58L535.44,553.69z" title="388.18 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-103" data-stroke-width="1.2"></path>
                                        <path class="mapsvg-region" d="M595.61,408.94c-12.22,16.32-23.68,36.56-34.76,58.72l65.33-0.52l-0.71-58.55L595.61,408.94z" title="446.97 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-67" data-stroke-width="1.2"></path>
                                        <path class="mapsvg-region" d="M889,406.06l-67.08,0.64l0.75,58.69l45.28-0.5c3.74-16.74,11.9-31.79,24.83-45   C899.44,414.56,898.11,406.69,889,406.06z" title="546.99 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-60" data-stroke-width="1.2"></path>
                                        <path class="mapsvg-region" d="M823.44,524l42.72-0.36c9.91-2.66,9.23-6.62,7.14-10.75c-8.46-13.4-9.17-29.82-5.36-48l-45.28,0.5L823.44,524   z" title="415.3 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-91" data-stroke-width="1.2"></path>
                                        <path class="mapsvg-region" d="M540.89,526.5c4.17-18.76,11.03-38.44,19.96-58.83l32.67-0.26l0.67,58.67L540.89,526.5z" title="404.87 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-83" data-stroke-width="1.2"></path>
                                        <path class="mapsvg-region" d="M609.37,381.74c6.72-20.49,6.83-41.65,0.91-63.41l36.94-0.28l0.83,63.22L609.37,381.74z" title="343.31 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-51" data-stroke-width="1.2"></path>
                                        <path class="mapsvg-region" d="M925.33,378.67L880,379.18l-0.83-63.35l71.11-0.64C945.99,337.6,937.72,358.77,925.33,378.67z" title="598.37 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-59" data-stroke-width="1.2"></path>
                                        <path class="mapsvg-region" d="M568.83,255.5c19.04,16.41,33.85,36.48,41.44,62.83l36.94-0.28l-0.81-63.2L568.83,255.5z" title="521.12 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-38" data-stroke-width="1.2"></path>
                                        <path d="M 1055.3699951171875 165.22000122070312 L 982.6699829101562 165.94000244140625 L 983.2999877929688 257.29998779296875 L 1056.56005859375 256.70001220703125 Z" class="mapsvg-region" title="1040.57 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-28" data-stroke-width="1.2"></path>
                                        <path d="M 983.2999877929688 224.47999572753906 L 950.5599975585938 224.8300018310547 L 949.8300170898438 166.3300018310547 L 982.6699829101562 165.94000244140625 Z" class="mapsvg-region" id="A-27" title="300 M2" style="stroke-width: 0.922432px; fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255);" data-stroke-width="1.2"></path>
                                        <path d="M 950.5599975585938 224.8300018310547 L 917.8599853515625 225.13999938964844 L 917.1099853515625 166.6300048828125 L 949.8300170898438 166.3300018310547 Z" class="mapsvg-region" title="300 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-26" data-stroke-width="1.2"></path>
                                        <path d="M 917.8599853515625 225.13999938964844 L 885.1699829101562 225.47000122070312 L 884.3699951171875 166.88999938964844 L 917.1099853515625 166.6300048828125 Z" class="mapsvg-region" title="300 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-25" data-stroke-width="1.2"></path>
                                        <path d="M 885.1699829101562 225.47000122070312 L 852.3900146484375 225.69000244140625 L 851.5900268554688 167.25999450683594 L 884.3699951171875 166.88999938964844 Z" class="mapsvg-region" title="300 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-24" data-stroke-width="1.2"></path>
                                        <path d="M 852.3900146484375 225.69000244140625 L 819.5900268554688 226.1300048828125 L 818.9400024414062 167.55999755859375 L 851.5900268554688 167.25999450683594 Z" class="mapsvg-region" title="300 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-23" data-stroke-width="1.2"></path>
                                        <path d="M 819.5900268554688 226.1300048828125 L 786.8900146484375 226.4199981689453 L 786.0800170898438 167.85000610351562 L 818.9400024414062 167.55999755859375 Z" class="mapsvg-region" title="300 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-22" data-stroke-width="1.2"></path>
                                        <path d="M 786.8900146484375 226.4199981689453 L 754.1099853515625 226.6300048828125 L 753.3900146484375 168.1699981689453 L 786.0800170898438 167.85000610351562 Z" class="mapsvg-region" title="300 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-21" data-stroke-width="1.2"></path>
                                        <path d="M 178.5 368.5 L 103.5 375.5 L 99.5 340.5 L 149.72792053222656 335.81207275390625 L 174.5 333.5 Z" class="mapsvg-region" title="414.19 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-1" data-stroke-width="1.2"></path>
                                        <path d="M 170.5 298.5 L 174.5 333.5 L 99.5 340.5 L 95.5 305.5 Z" class="mapsvg-region" title="413.64 M2" id="A-2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" data-stroke-width="1.2"></path>
                                        <path d="M 164.5 263.5 L 170.5 298.5 L 95.5 305.5 L 91.5 270.5 Z" class="mapsvg-region" title="409.72 M2" id="A-3" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" data-stroke-width="1.2"></path>
                                        <path d="M 159.5 232.5 L 164.5 263.5 L 91.5 270.5 L 77.5 174.5 L 158.5 173.5 Z" class="mapsvg-region" title="1097.13 M2" id="A-4" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" data-stroke-width="1.2"></path>
                                        <path d="M 192.5 232.5 L 159.5 232.5 L 158.5 173.5 L 190.85000610351562 173.5 Z" class="mapsvg-region" title="300 M2" id="A-5" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" data-stroke-width="1.2"></path>
                                        <path d="M 224.5 231.5 L 192.5 232.5 L 190.85000610351562 173.5 L 223.88999938964844 173.5 Z" class="mapsvg-region" title="300 M2" id="A-6" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" data-stroke-width="1.2"></path>
                                        <path d="M 223.88999938964844 173.5 L 224.5 231.5 L 257.5199890136719 231.38999938964844 L 256.82000732421875 172.86000061035156 Z" class="mapsvg-region" title="300 M2" id="A-7" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" data-stroke-width="1.2"></path>
                                        <path d="M 290.3800048828125 231.10000610351562 L 257.5199890136719 231.38999938964844 L 256.82000732421875 172.86000061035156 L 289.55999755859375 172.61000061035156 Z" class="mapsvg-region" title="300 M2" id="A-8" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" data-stroke-width="1.2"></path>
                                        <path d="M 323.0799865722656 230.8300018310547 L 290.3800048828125 231.10000610351562 L 289.55999755859375 172.61000061035156 L 322.2799987792969 172.3300018310547 Z" class="mapsvg-region" title="300 M2" id="A-9" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" data-stroke-width="1.2"></path>
                                        <path d="M 355.6700134277344 230.3300018310547 L 323.0799865722656 230.8300018310547 L 322.2799987792969 172.3300018310547 L 355.0400085449219 171.92999267578125 Z" class="mapsvg-region" title="300 M2" id="A-10" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" data-stroke-width="1.2"></path>
                                        <path d="M 388.55999755859375 230.14999389648438 L 355.6700134277344 230.3300018310547 L 355.0400085449219 171.92999267578125 L 387.79998779296875 171.64999389648438 Z" class="mapsvg-region" title="300 M2" id="A-11" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" data-stroke-width="1.2"></path>
                                        <path d="M 421.30999755859375 229.8800048828125 L 388.55999755859375 230.14999389648438 L 387.79998779296875 171.64999389648438 L 420.55999755859375 171.41000366210938 Z" class="mapsvg-region" title="300 M2" id="A-12" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" data-stroke-width="1.2"></path>
                                        <path d="M 454.1499938964844 229.58999633789062 L 421.30999755859375 229.8800048828125 L 420.55999755859375 171.41000366210938 L 453.32000732421875 171.02000427246094 Z" class="mapsvg-region" title="300 M2" id="A-13" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" data-stroke-width="1.2"></path>
                                        <path d="M 623.1400146484375 227.94000244140625 L 590.4500122070312 228.3300018310547 L 589.6199951171875 169.69000244140625 L 622.3300170898438 169.41000366210938 Z" class="mapsvg-region" title="300 M2" id="A-16" style="fill: rgb(155, 197, 120); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" data-stroke-width="1.2"></path>
                                        <path d="M 655.8300170898438 227.6699981689453 L 623.1400146484375 227.94000244140625 L 622.3300170898438 169.41000366210938 L 655.1900024414062 169.08999633789062 Z" class="mapsvg-region" title="300 M2" id="A-17" style="fill: rgb(155, 197, 120); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" data-stroke-width="1.2"></path>
                                        <path d="M 688.6699829101562 227.3300018310547 L 655.8300170898438 227.6699981689453 L 655.1900024414062 169.08999633789062 L 687.8300170898438 168.8300018310547 Z" class="mapsvg-region" title="300 M2" id="A-18" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" data-stroke-width="1.2"></path>
                                        <path d="M 721.4400024414062 227 L 688.6699829101562 227.3300018310547 L 687.8300170898438 168.8300018310547 L 720.6300048828125 168.41000366210938 Z" class="mapsvg-region" title="300 M2" id="A-19" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" data-stroke-width="1.2"></path>
                                        <path d="M 754.1099853515625 226.6300048828125 L 721.4400024414062 227 L 720.6300048828125 168.41000366210938 L 753.3900146484375 168.1699981689453 Z" class="mapsvg-region" title="300 M2" id="A-20" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" data-stroke-width="1.2"></path>
                                        <path d="M 912.5 252.27999877929688 L 912.8936767578125 282.27740478515625 L 913.3300170898438 315.5299987792969 L 950.280029296875 315.19000244140625 L 952.2999877929688 251.92999267578125 Z" class="mapsvg-region" title="376.65 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-29" data-stroke-width="1.2"></path>
                                        <path d="M 878.3699951171875 252.57000732421875 L 879.1699829101562 315.8299865722656 L 913.3300170898438 315.5299987792969 L 912.5 252.27999877929688 Z" class="mapsvg-region" title="337.5 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-30" data-stroke-width="1.2"></path>
                                        <path d="M 844.280029296875 252.8300018310547 L 845.0700073242188 316.2200012207031 L 879.1699829101562 315.8299865722656 L 878.3699951171875 252.57000732421875 Z" class="mapsvg-region" title="337.5 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-31" data-stroke-width="1.2"></path>
                                        <path d="M 810.219970703125 253.25 L 811.0599975585938 316.5299987792969 L 845.0700073242188 316.2200012207031 L 844.280029296875 252.8300018310547 Z" class="mapsvg-region" title="337.5 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-32" data-stroke-width="1.2"></path>
                                        <path d="M 777.3499755859375 253.57000732421875 L 778.1400146484375 316.8599853515625 L 811.0599975585938 316.5299987792969 L 810.219970703125 253.25 Z" class="mapsvg-region" title="324 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-33" data-stroke-width="1.2"></path>
                                        <path d="M 744.6900024414062 253.8300018310547 L 745.52001953125 317.1499938964844 L 778.1400146484375 316.8599853515625 L 777.3499755859375 253.57000732421875 Z" class="mapsvg-region" title="324 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-34" data-stroke-width="1.2"></path>
                                        <path d="M 711.9600219726562 254.14999389648438 L 712.780029296875 317.5 L 745.52001953125 317.1499938964844 L 744.6900024414062 253.8300018310547 Z" class="mapsvg-region" title="324 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-35" data-stroke-width="1.2"></path>
                                        <path d="M 679.1500244140625 254.41000366210938 L 680 317.739990234375 L 712.780029296875 317.5 L 711.9600219726562 254.14999389648438 Z" class="mapsvg-region" title="324 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-36" data-stroke-width="1.2"></path>
                                        <path d="M 646.4099731445312 254.85000610351562 L 647.219970703125 318.05999755859375 L 680 317.739990234375 L 679.1500244140625 254.41000366210938 Z" class="mapsvg-region" title="324 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-37" data-stroke-width="1.2"></path>
                                        <path d="M 360.44000244140625 257.5 L 361.05999755859375 306.739990234375 L 399.2799987792969 306.3599853515625 L 398.6099853515625 257.1099853515625 Z" class="mapsvg-region" title="294 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-40" data-stroke-width="1.2"></path>
                                        <path d="M 322.1000061035156 257.8299865722656 L 322.8299865722656 307.05999755859375 L 361.05999755859375 306.739990234375 L 360.44000244140625 257.5 Z" class="mapsvg-region" title="294 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-41" data-stroke-width="1.2"></path>
                                        <path d="M 283.92999267578125 258.17999267578125 L 284.6199951171875 307.3999938964844 L 322.8299865722656 307.05999755859375 L 322.1000061035156 257.8299865722656 Z" class="mapsvg-region" title="294 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-42" data-stroke-width="1.2"></path>
                                        <path d="M 245.74000549316406 258.5400085449219 L 246.38999938964844 307.7200012207031 L 284.6199951171875 307.3999938964844 L 283.92999267578125 258.17999267578125 Z" class="mapsvg-region" title="294 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-43" data-stroke-width="1.2"></path>
                                        <path d="M 195.88999938964844 259.1099853515625 L 203.27999877929688 308.1099853515625 L 246.38999938964844 307.7200012207031 L 245.74000549316406 258.5400085449219 Z" class="mapsvg-region" title="357.06 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-44" data-stroke-width="1.2"></path>
                                        <path d="M 210.0399932861328 369.0400085449219 L 203.27999877929688 308.1099853515625 L 246.38999938964844 307.7200012207031 L 247.27999877929688 363.7799987792969 Z" class="mapsvg-region" title="365.17 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-45" data-stroke-width="1.2"></path>
                                        <path d="M 285.3299865722656 359.8900146484375 L 247.27999877929688 363.7799987792969 L 246.38999938964844 307.7200012207031 L 284.6199951171875 307.3999938964844 Z" class="mapsvg-region" title="324.06 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-46" data-stroke-width="1.2"></path>
                                        <path d="M 323.4599914550781 358.05999755859375 L 285.3299865722656 359.8900146484375 L 284.6199951171875 307.3999938964844 L 322.8299865722656 307.05999755859375 Z" class="mapsvg-region" title="308.9 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-47" data-stroke-width="1.2"></path>
                                        <path d="M 361.55999755859375 357.55999755859375 L 323.4599914550781 358.05999755859375 L 322.8299865722656 307.05999755859375 L 361.05999755859375 306.739990234375 Z" class="mapsvg-region" title="303.47 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-48" data-stroke-width="1.2"></path>
                                        <path d="M 399.8599853515625 358.69000244140625 L 361.55999755859375 357.55999755859375 L 361.05999755859375 306.739990234375 L 399.2799987792969 306.3599853515625 Z" class="mapsvg-region" title="307.71 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-49" data-stroke-width="1.2"></path>
                                        <path d="M 680.6300048828125 381 L 648.0599975585938 381.2799987792969 L 647.219970703125 318.05999755859375 L 680 317.739990234375 Z" class="mapsvg-region" title="324 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-52" data-stroke-width="1.2"></path>
                                        <path d="M 713.52001953125 380.739990234375 L 680.6300048828125 381 L 680 317.739990234375 L 712.780029296875 317.5 Z" class="mapsvg-region" title="324 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-53" data-stroke-width="1.2"></path>
                                        <path d="M 746.2999877929688 380.4599914550781 L 713.52001953125 380.739990234375 L 712.780029296875 317.5 L 745.52001953125 317.1499938964844 Z" class="mapsvg-region" title="324 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-54" data-stroke-width="1.2"></path>
                                        <path d="M 779.0800170898438 380.0799865722656 L 746.2999877929688 380.4599914550781 L 745.52001953125 317.1499938964844 L 778.1400146484375 316.8599853515625 Z" class="mapsvg-region" title="324 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-55" data-stroke-width="1.2"></path>
                                        <path d="M 811.8099975585938 379.8599853515625 L 779.0800170898438 380.0799865722656 L 778.1400146484375 316.8599853515625 L 811.0599975585938 316.5299987792969 Z" class="mapsvg-region" title="324 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-56" data-stroke-width="1.2"></path>
                                        <path d="M 845.9299926757812 379.5 L 811.8099975585938 379.8599853515625 L 811.0599975585938 316.5299987792969 L 845.0700073242188 316.2200012207031 Z" class="mapsvg-region" title="337.5 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-57" data-stroke-width="1.2"></path>
                                        <path d="M 880 379.17999267578125 L 845.9299926757812 379.5 L 845.0700073242188 316.2200012207031 L 879.1699829101562 315.8299865722656 Z" class="mapsvg-region" title="337.5 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-58" data-stroke-width="1.2"></path>
                                        <path d="M 1057 289.55999755859375 L 1056.56005859375 256.70001220703125 L 983.2999877929688 257.29998779296875 L 982.1699829101562 290.3299865722656 Z" class="mapsvg-region" title="380.31 M2" id="A-153" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" data-stroke-width="1.2"></path>
                                        <path d="M 1057.31005859375 317.7099914550781 L 1057 289.55999755859375 L 982.1699829101562 290.3299865722656 L 981.6400146484375 318.4200134277344 Z" class="mapsvg-region" title="331.26 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-152" data-stroke-width="1.2"></path>
                                        <path d="M 1057.6700439453125 345.79998779296875 L 1057.31005859375 317.7099914550781 L 981.6400146484375 318.4200134277344 L 982.1099853515625 346.55999755859375 Z" class="mapsvg-region" title="332.56 M2" style="fill: rgb(58, 134, 42); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-151" data-stroke-width="1.2"></path>
                                        <path d="M 821.9199829101562 406.69000244140625 L 789.260009765625 407.0400085449219 L 789.97998046875 465.70001220703125 L 822.6699829101562 465.3900146484375 Z" class="mapsvg-region" title="300 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-61" data-stroke-width="1.2"></path>
                                        <path d="M 789.260009765625 407.0400085449219 L 756.4099731445312 407.4100036621094 L 757.260009765625 465.92999267578125 L 789.97998046875 465.70001220703125 Z" class="mapsvg-region" title="300 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-62" data-stroke-width="1.2"></path>
                                        <path d="M 756.4099731445312 407.4100036621094 L 723.6900024414062 407.69000244140625 L 724.3800048828125 466.30999755859375 L 757.260009765625 465.92999267578125 Z" class="mapsvg-region" title="300 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-63" data-stroke-width="1.2"></path>
                                        <path d="M 723.6900024414062 407.69000244140625 L 691.0599975585938 408 L 691.719970703125 466.57000732421875 L 724.3800048828125 466.30999755859375 Z" class="mapsvg-region" title="300 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-64" data-stroke-width="1.2"></path>
                                        <path d="M 691.0599975585938 408 L 658.1699829101562 408.260009765625 L 658.9400024414062 466.92999267578125 L 691.719970703125 466.57000732421875 Z" class="mapsvg-region" title="300 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-65" data-stroke-width="1.2"></path>
                                        <path d="M 658.1699829101562 408.260009765625 L 625.469970703125 408.6000061035156 L 626.1900024414062 467.1499938964844 L 658.9400024414062 466.92999267578125 Z" class="mapsvg-region" title="300 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-66" data-stroke-width="1.2"></path>
                                        <path d="M 398.05999755859375 410.5 L 398.9800109863281 471.739990234375 L 363.5400085449219 472.0899963378906 L 362.69000244140625 409.239990234375 Z" class="mapsvg-region" title="344.71 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-71" data-stroke-width="1.2"></path>
                                        <path d="M 433.67999267578125 413.05999755859375 L 434.4200134277344 471.3999938964844 L 398.9800109863281 471.739990234375 L 398.05999755859375 410.5 Z" class="mapsvg-region" title="332.23 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-70" data-stroke-width="1.2"></path>
                                        <path d="M 362.69000244140625 409.239990234375 L 363.5400085449219 472.0899963378906 L 327.94000244140625 472.3299865722656 L 327.260009765625 409.6499938964844 Z" class="mapsvg-region" title="348.75 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-72" data-stroke-width="1.2"></path>
                                        <path d="M 327.260009765625 409.6499938964844 L 327.94000244140625 472.3299865722656 L 292.55999755859375 472.3299865722656 L 291.739990234375 411.4599914550781 Z" class="mapsvg-region" title="344.39 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-73" data-stroke-width="1.2"></path>
                                        <path d="M 291.739990234375 411.4599914550781 L 292.55999755859375 472.3299865722656 L 257.1499938964844 472.7900085449219 L 256.2200012207031 414.8900146484375 Z" class="mapsvg-region" title="331.61 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-74" data-stroke-width="1.2"></path>
                                        <path d="M 214.30999755859375 421 L 215.86000061035156 473.3299865722656 L 257.1499938964844 472.7900085449219 L 256.2200012207031 414.8900146484375 Z" class="mapsvg-region" title="361.84 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-75" data-stroke-width="1.2"></path>
                                        <path d="M 328.7200012207031 528.5800170898438 L 293.2200012207031 528.9299926757812 L 292.55999755859375 472.3299865722656 L 327.94000244140625 472.3299865722656 Z" class="mapsvg-region" title="312 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-77" data-stroke-width="1.2"></path>
                                        <path d="M 364.1400146484375 528.1900024414062 L 328.7200012207031 528.5800170898438 L 327.94000244140625 472.3299865722656 L 363.5400085449219 472.0899963378906 Z" class="mapsvg-region" title="312 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-78" data-stroke-width="1.2"></path>
                                        <path d="M 399.6700134277344 528.030029296875 L 364.1400146484375 528.1900024414062 L 363.5400085449219 472.0899963378906 L 398.9800109863281 471.739990234375 Z" class="mapsvg-region" title="312 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-79" data-stroke-width="1.2"></path>
                                        <path d="M 435.1700134277344 527.6500244140625 L 399.6700134277344 528.030029296875 L 398.9800109863281 471.739990234375 L 434.4200134277344 471.3999938964844 Z" class="mapsvg-region" title="312 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-80" data-stroke-width="1.2"></path>
                                        <path d="M 470.6700134277344 527.3099975585938 L 435.1700134277344 527.6500244140625 L 434.4200134277344 471.3999938964844 L 469.9599914550781 471.0400085449219 Z" class="mapsvg-region" title="312 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-81" data-stroke-width="1.2"></path>
                                        <path d="M 594.1900024414062 526.0700073242188 L 593.52001953125 467.4100036621094 L 626.1900024414062 467.1499938964844 L 627 525.780029296875 Z" class="mapsvg-region" title="300 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-84" data-stroke-width="1.2"></path>
                                        <path d="M 627 525.780029296875 L 626.1900024414062 467.1499938964844 L 658.9400024414062 466.92999267578125 L 659.6099853515625 525.4400024414062 Z" class="mapsvg-region" title="300 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-85" data-stroke-width="1.2"></path>
                                        <path d="M 659.6099853515625 525.4400024414062 L 658.9400024414062 466.92999267578125 L 691.719970703125 466.57000732421875 L 692.3699951171875 525.219970703125 Z" class="mapsvg-region" title="300 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-86" data-stroke-width="1.2"></path>
                                        <path d="M 692.3699951171875 525.219970703125 L 691.719970703125 466.57000732421875 L 724.3800048828125 466.30999755859375 L 724.9213256835938 503.991455078125 L 725.219970703125 524.780029296875 Z" class="mapsvg-region" title="300 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-87" data-stroke-width="1.2"></path>
                                        <path d="M 725.219970703125 524.780029296875 L 724.3800048828125 466.30999755859375 L 757.260009765625 465.92999267578125 L 757.9400024414062 524.6099853515625 Z" class="mapsvg-region" title="300 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-88" data-stroke-width="1.2"></path>
                                        <path d="M 757.9400024414062 524.6099853515625 L 757.260009765625 465.92999267578125 L 789.97998046875 465.70001220703125 L 790.6900024414062 524.239990234375 Z" class="mapsvg-region" title="300 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-89" data-stroke-width="1.2"></path>
                                        <path d="M 790.6900024414062 524.239990234375 L 789.97998046875 465.70001220703125 L 822.6699829101562 465.3900146484375 L 823.4400024414062 524 Z" class="mapsvg-region" title="300 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-90" data-stroke-width="1.2"></path>
                                        <path d="M 868.8499755859375 550.52001953125 L 869.5599975585938 609.1099853515625 L 902.5 608.8300170898438 L 901.5800170898438 550.219970703125 Z" class="mapsvg-region" title="300 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-93" data-stroke-width="1.2"></path>
                                        <path d="M 836.1099853515625 550.8300170898438 L 836.8300170898438 609.3900146484375 L 869.5599975585938 609.1099853515625 L 868.8499755859375 550.52001953125 Z" class="mapsvg-region" title="300 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-94" data-stroke-width="1.2"></path>
                                        <path d="M 803.3300170898438 551.219970703125 L 804.1099853515625 609.719970703125 L 836.8300170898438 609.3900146484375 L 836.1099853515625 550.8300170898438 Z" class="mapsvg-region" title="300 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-95" data-stroke-width="1.2"></path>
                                        <path d="M 770.6099853515625 551.4400024414062 L 771.3800048828125 610.0700073242188 L 804.1099853515625 609.719970703125 L 803.3300170898438 551.219970703125 Z" class="mapsvg-region" title="300 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-96" data-stroke-width="1.2"></path>
                                        <path d="M 737.8499755859375 551.7999877929688 L 738.6099853515625 610.3300170898438 L 771.3800048828125 610.0700073242188 L 770.6099853515625 551.4400024414062 Z" class="mapsvg-region" title="300 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-97" data-stroke-width="1.2"></path>
                                        <path d="M 705.0700073242188 552.1099853515625 L 705.8499755859375 610.739990234375 L 738.6099853515625 610.3300170898438 L 737.8499755859375 551.7999877929688 Z" class="mapsvg-region" title="300 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-98" data-stroke-width="1.2"></path>
                                        <path d="M 672.3900146484375 552.3599853515625 L 673.1799926757812 611.0599975585938 L 705.8499755859375 610.739990234375 L 705.0700073242188 552.1099853515625 Z" class="mapsvg-region" title="300 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-99" data-stroke-width="1.2"></path>
                                        <path d="M 639.5800170898438 552.6900024414062 L 640.4099731445312 611.4099731445312 L 673.1799926757812 611.0599975585938 L 672.3900146484375 552.3599853515625 Z" class="mapsvg-region" title="300 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-100" data-stroke-width="1.2"></path>
                                        <path d="M 606.780029296875 553 L 607.5599975585938 611.6099853515625 L 640.4099731445312 611.4099731445312 L 639.5800170898438 552.6900024414062 Z" class="mapsvg-region" title="300 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-101" data-stroke-width="1.2"></path>
                                        <path d="M 574.1400146484375 553.3300170898438 L 574.8900146484375 611.9199829101562 L 607.5599975585938 611.6099853515625 L 606.780029296875 553 Z" class="mapsvg-region" title="300 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-102" data-stroke-width="1.2"></path>
                                        <path d="M 454.42999267578125 554.5 L 421.70001220703125 554.72998046875 L 422.3900146484375 613.3900146484375 L 455.2200012207031 613.0599975585938 Z" class="mapsvg-region" title="300 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-105" data-stroke-width="1.2"></path>
                                        <path d="M 421.70001220703125 554.72998046875 L 388.9599914550781 555.1300048828125 L 389.7799987792969 613.5599975585938 L 422.3900146484375 613.3900146484375 Z" class="mapsvg-region" title="300 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-106" data-stroke-width="1.2"></path>
                                        <path d="M 388.9599914550781 555.1300048828125 L 389.7799987792969 613.5599975585938 L 356.9599914550781 614 L 356.05999755859375 555.3900146484375 Z" class="mapsvg-region" title="300 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-107" data-stroke-width="1.2"></path>
                                        <path d="M 390.3900146484375 672.280029296875 L 357.7200012207031 672.5800170898438 L 356.9599914550781 614 L 389.7799987792969 613.5599975585938 Z" class="mapsvg-region" title="300 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-110" data-stroke-width="1.2"></path>
                                        <path d="M 423.2799987792969 671.8900146484375 L 390.3900146484375 672.280029296875 L 389.7799987792969 613.5599975585938 L 422.3900146484375 613.3900146484375 Z" class="mapsvg-region" title="300 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-111" data-stroke-width="1.2"></path>
                                        <path d="M 455.94000244140625 671.719970703125 L 423.2799987792969 671.8900146484375 L 422.3900146484375 613.3900146484375 L 455.2200012207031 613.0599975585938 Z" class="mapsvg-region" title="300 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-112" data-stroke-width="1.2"></path>
                                        <path d="M 608.4400024414062 670.1900024414062 L 575.6400146484375 670.5 L 574.8900146484375 611.9199829101562 L 607.5599975585938 611.6099853515625 Z" class="mapsvg-region" title="300 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-115" data-stroke-width="1.2"></path>
                                        <path d="M 641.1900024414062 669.9400024414062 L 608.4400024414062 670.1900024414062 L 607.5599975585938 611.6099853515625 L 640.4099731445312 611.4099731445312 Z" class="mapsvg-region" title="300 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-116" data-stroke-width="1.2"></path>
                                        <path d="M 673.780029296875 669.5800170898438 L 641.1900024414062 669.9400024414062 L 640.4099731445312 611.4099731445312 L 673.1799926757812 611.0599975585938 Z" class="mapsvg-region" title="300 M2" id="A-117" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" data-stroke-width="1.2"></path>
                                        <path d="M 706.6699829101562 669.3099975585938 L 673.780029296875 669.5800170898438 L 673.1799926757812 611.0599975585938 L 705.8499755859375 610.739990234375 Z" class="mapsvg-region" title="300 M2" id="A-118" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" data-stroke-width="1.2"></path>
                                        <path d="M 739.4400024414062 668.9600219726562 L 706.6699829101562 669.3099975585938 L 705.8499755859375 610.739990234375 L 738.6099853515625 610.3300170898438 Z" class="mapsvg-region" title="300 M2" id="A-119" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" data-stroke-width="1.2"></path>
                                        <path d="M 772.260009765625 668.5599975585938 L 739.4400024414062 668.9600219726562 L 738.6099853515625 610.3300170898438 L 771.3800048828125 610.0700073242188 Z" class="mapsvg-region" title="300 M2" id="A-120" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" data-stroke-width="1.2"></path>
                                        <path d="M 804.8900146484375 668.3300170898438 L 772.260009765625 668.5599975585938 L 771.3800048828125 610.0700073242188 L 804.1099853515625 609.719970703125 Z" class="mapsvg-region" title="300 M2" id="A-121" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" data-stroke-width="1.2"></path>
                                        <path d="M 837.5 667.9400024414062 L 804.8900146484375 668.3300170898438 L 804.1099853515625 609.719970703125 L 836.8300170898438 609.3900146484375 Z" class="mapsvg-region" title="300 M2" id="A-122" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" data-stroke-width="1.2"></path>
                                        <path d="M 870.4400024414062 667.7000122070312 L 837.5 667.9400024414062 L 836.8300170898438 609.3900146484375 L 869.5599975585938 609.1099853515625 Z" class="mapsvg-region" title="300 M2" id="A-123" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" data-stroke-width="1.2"></path>
                                        <path d="M 903.1500244140625 667.2999877929688 L 870.4400024414062 667.7000122070312 L 869.5599975585938 609.1099853515625 L 902.5 608.8300170898438 Z" class="mapsvg-region" title="300 M2" id="A-124" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" data-stroke-width="1.2"></path>
                                        <path d="M 538.0800170898438 697.9400024414062 L 602.8900146484375 697.3300170898438 L 603.7000122070312 755.9299926757812 L 553.4000244140625 756.4299926757812 Z" class="mapsvg-region" title="532.68 M2" id="A-126" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" data-stroke-width="1.2"></path>
                                        <path d="M 602.8900146484375 697.3300170898438 L 635.760009765625 696.9299926757812 L 636.5599975585938 755.6400146484375 L 603.7000122070312 755.9299926757812 Z" class="mapsvg-region" title="300 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-127" data-stroke-width="1.2"></path>
                                        <path d="M 635.760009765625 696.9299926757812 L 668.5499877929688 696.7000122070312 L 669.27001953125 755.280029296875 L 636.5599975585938 755.6400146484375 Z" class="mapsvg-region" title="300 M2" id="A-128" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" data-stroke-width="1.2"></path>
                                        <path d="M 668.5499877929688 696.7000122070312 L 701.239990234375 696.3499755859375 L 701.97998046875 754.97998046875 L 669.27001953125 755.280029296875 Z" class="mapsvg-region" title="300 M2" id="A-129" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" data-stroke-width="1.2"></path>
                                        <path d="M 701.239990234375 696.3499755859375 L 734 696.1400146484375 L 734.760009765625 754.6699829101562 L 701.97998046875 754.97998046875 Z" class="mapsvg-region" title="300 M2" id="A-130" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" data-stroke-width="1.2"></path>
                                        <path d="M 734 696.1400146484375 L 766.8099975585938 695.780029296875 L 767.5399780273438 754.4199829101562 L 734.760009765625 754.6699829101562 Z" class="mapsvg-region" title="300 M2" id="A-131" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" data-stroke-width="1.2"></path>
                                        <path d="M 766.8099975585938 695.780029296875 L 799.5 695.3900146484375 L 800.2999877929688 754 L 767.5399780273438 754.4199829101562 Z" class="mapsvg-region" title="300 M2" id="A-132" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" data-stroke-width="1.2"></path>
                                        <path d="M 799.5 695.3900146484375 L 832.1099853515625 695.1099853515625 L 833.0700073242188 753.719970703125 L 800.2999877929688 754 Z" class="mapsvg-region" title="300 M2" id="A-133" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" data-stroke-width="1.2"></path>
                                        <path d="M 832.1099853515625 695.1099853515625 L 865.02001953125 694.8099975585938 L 865.75 753.3900146484375 L 833.0700073242188 753.719970703125 Z" class="mapsvg-region" title="300 M2" id="A-134" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" data-stroke-width="1.2"></path>
                                        <path d="M 865.02001953125 694.8099975585938 L 897.6699829101562 694.5599975585938 L 898.5800170898438 753.0599975585938 L 865.75 753.3900146484375 Z" class="mapsvg-region" title="300 M2" id="A-135" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" data-stroke-width="1.2"></path>
                                        <path d="M 897.6699829101562 694.5599975585938 L 930.5 694.219970703125 L 931.3099975585938 752.780029296875 L 898.5800170898438 753.0599975585938 Z" class="mapsvg-region" title="300 M2" id="A-136" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" data-stroke-width="1.2"></path>
                                        <path d="M 930.5 694.219970703125 L 963.260009765625 693.8900146484375 L 963.969970703125 752.469970703125 L 931.3099975585938 752.780029296875 Z" class="mapsvg-region" title="300 M2" id="A-137" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" data-stroke-width="1.2"></path>
                                        <path d="M 963.260009765625 693.8900146484375 L 995.9299926757812 693.8900146484375 L 996.780029296875 752.0399780273438 L 963.969970703125 752.469970703125 Z" class="mapsvg-region" title="300 M2" id="A-138" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" data-stroke-width="1.2"></path>
                                        <path d="M 1062.93994140625 751.5399780273438 L 1061.739990234375 660.0399780273438 L 995.4400024414062 660.7000122070312 L 996.780029296875 752.0399780273438 Z" class="mapsvg-region" title="944.88 M2" id="A-139" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" data-stroke-width="1.2"></path>
                                        <path d="M 1061.739990234375 660.0399780273438 L 1061.3699951171875 627.219970703125 L 987.8900146484375 628.1099853515625 L 995.4400024414062 660.7000122070312 Z" class="mapsvg-region" title="358.34 M2" id="A-140" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" data-stroke-width="1.2"></path>
                                        <path d="M 1061.3699951171875 627.219970703125 L 1060.9300537109375 599.0700073242188 L 983.52001953125 599.8099975585938 L 987.8900146484375 628.1099853515625 Z" class="mapsvg-region" title="332.09 M2" id="A-141" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" data-stroke-width="1.2"></path>
                                        <path d="M 1060.9300537109375 599.0700073242188 L 1060.56005859375 570.9299926757812 L 980.1900024414062 571.52001953125 L 983.52001953125 599.8099975585938 Z" class="mapsvg-region" title="347.94 M2" id="A-142" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" data-stroke-width="1.2"></path>
                                        <path d="M 1060.56005859375 570.9299926757812 L 1060.1700439453125 542.780029296875 L 978.6699829101562 543.4400024414062 L 980.1900024414062 571.52001953125 Z" class="mapsvg-region" title="357.08 M2" id="A-143" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" data-stroke-width="1.2"></path>
                                        <path d="M 1059.8900146484375 514.719970703125 L 1059.52001953125 486.4800109863281 L 980.0399780273438 487.2200012207031 L 978.6699829101562 515.3300170898438 Z" class="mapsvg-region" title="353.5 M2" id="A-145" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" data-stroke-width="1.2"></path>
                                        <path d="M 1059.52001953125 486.4800109863281 L 1059.0699462890625 458.4800109863281 L 982.260009765625 459 L 980.0399780273438 487.2200012207031 Z" class="mapsvg-region" title="343.44 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-146" data-stroke-width="1.2"></path>
                                        <path d="M 1059.0699462890625 458.4800109863281 L 1058.760009765625 430.2799987792969 L 983.780029296875 430.9599914550781 L 982.260009765625 459 Z" class="mapsvg-region" title="332.81 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-147" data-stroke-width="1.2"></path>
                                        <path d="M 1058.760009765625 430.2799987792969 L 1058.4100341796875 402.0400085449219 L 984.219970703125 402.6700134277344 L 983.780029296875 430.9599914550781 Z" class="mapsvg-region" title="327.15 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-148" data-stroke-width="1.2"></path>
                                        <path d="M 1058.4100341796875 402.0400085449219 L 1058 374 L 983.4099731445312 374.739990234375 L 984.219970703125 402.6700134277344 Z" class="mapsvg-region" title="326.74 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-149" data-stroke-width="1.2"></path>
                                        <path d="M 1058 374 L 1057.6700439453125 345.79998779296875 L 982.1099853515625 346.55999755859375 L 983.4099731445312 374.739990234375 Z" class="mapsvg-region" title="330.46 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-150" data-stroke-width="1.2"></path>
                                        <path d="M 110.77999877929688 445.5899963378906 L 113.44000244140625 473.3699951171875 L 184.25999450683594 468.92999267578125 L 183.3699951171875 440.70001220703125 Z" class="mapsvg-region" title="314.09 M2" style="stroke-width: 0.922432px; fill: rgba(228, 22, 66, 0.52);" id="A-154" data-stroke-width="1.2"></path>
                                        <path d="M 113.44000244140625 473.3699951171875 L 115.80999755859375 501.1300048828125 L 185.44000244140625 497.19000244140625 L 184.25999450683594 468.92999267578125 Z" class="mapsvg-region" title="307.51 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-155" data-stroke-width="1.2"></path>
                                        <path d="M 115.80999755859375 501.1300048828125 L 118.11000061035156 528.8900146484375 L 185.44000244140625 525.1099853515625 L 185.44000244140625 497.19000244140625 Z" class="mapsvg-region" title="299.53 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-156" data-stroke-width="1.2"></path>
                                        <path d="M 118.11000061035156 528.8900146484375 L 120 556.6699829101562 L 187 553.5599975585938 L 185.44000244140625 525.1099853515625 Z" class="mapsvg-region" title="293.64 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-157" data-stroke-width="1.2"></path>
                                        <path d="M 120 556.6699829101562 L 122 584.5599975585938 L 189.6699981689453 581.3300170898438 L 187 553.5599975585938 Z" class="mapsvg-region" title="293.62 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-158" data-stroke-width="1.2"></path>
                                        <path d="M 122 584.5599975585938 L 123.88999938964844 612.3300170898438 L 193.22000122070312 609.219970703125 L 189.6699981689453 581.3300170898438 Z" class="mapsvg-region" title="299.46 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-159" data-stroke-width="1.2"></path>
                                        <path d="M 123.88999938964844 612.3300170898438 L 125.33000183105469 640.4400024414062 L 198.3300018310547 637.3300170898438 L 193.22000122070312 609.219970703125 Z" class="mapsvg-region" title="312.65 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-160" data-stroke-width="1.2"></path>
                                        <path d="M 125.33000183105469 640.4400024414062 L 127.19000244140625 670.6099853515625 L 205.13999938964844 667.6400146484375 L 198.3300018310547 637.3300170898438 Z" class="mapsvg-region" title="356.32 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-161" data-stroke-width="1.2"></path>
                                        <path d="M 130.75 760.3900146484375 L 214.92999267578125 759.6699829101562 L 214.19000244140625 701 L 205.13999938964844 667.6400146484375 L 127.19000244140625 670.6099853515625 Z" class="mapsvg-region" title="1189.61 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-162" data-stroke-width="1.2"></path>
                                        <path d="M 215.41616336499527 701 L 248.26615420972183 700.5900268554688 L 248.94616214429215 759.280029296875 L 216.15615359937027 759.6699829101562 Z" class="mapsvg-region" title="300 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-163" data-stroke-width="1.2"></path>
                                        <path d="M 247.0399932861328 700.5900268554688 L 279.75 700.4400024414062 L 280.4800109863281 758.9400024414062 L 247.72000122070312 759.280029296875 Z" class="mapsvg-region" title="300 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-164" data-stroke-width="1.2"></path>
                                        <path d="M 279.75 700.4400024414062 L 312.3900146484375 700.0599975585938 L 313.2200012207031 758.719970703125 L 280.4800109863281 758.9400024414062 Z" class="mapsvg-region" title="300 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-165" data-stroke-width="1.2"></path>
                                        <path d="M 312.3900146484375 700.0599975585938 L 345.260009765625 699.739990234375 L 345.9800109863281 758.4299926757812 L 313.2200012207031 758.719970703125 Z" class="mapsvg-region" title="300 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-166" data-stroke-width="1.2"></path>
                                        <path d="M 345.260009765625 699.739990234375 L 377.8900146484375 699.4099731445312 L 378.8500061035156 758.0700073242188 L 345.9800109863281 758.4299926757812 Z" class="mapsvg-region" title="300 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-167" data-stroke-width="1.2"></path>
                                        <path d="M 377.8900146484375 699.4099731445312 L 410.7200012207031 699.1400146484375 L 411.4800109863281 757.760009765625 L 378.8500061035156 758.0700073242188 Z" class="mapsvg-region" title="300 M2" id="A-168" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" data-stroke-width="1.2"></path>
                                        <path d="M 443.5400085449219 698.7999877929688 L 476.2200012207031 698.5700073242188 L 477.0400085449219 757.1099853515625 L 444.260009765625 757.3300170898438 Z" class="mapsvg-region" title="300 M2" id="A-170" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" data-stroke-width="1.2"></path>
                                        <path d="M 410.7200012207031 699.1400146484375 L 443.5400085449219 698.7999877929688 L 444.260009765625 757.3300170898438 L 411.4800109863281 757.760009765625 Z" class="mapsvg-region" title="300 M2" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" id="A-169" data-stroke-width="1.2"></path>
                                        <path d="M 521.25 756.6799926757812 L 506.92999267578125 698.2100219726562 L 476.2200012207031 698.5700073242188 L 477.0400085449219 757.1099853515625 Z" class="mapsvg-region" title="339.58 M2" id="A-171" style="fill: rgba(228, 22, 66, 0.52); stroke: rgb(255, 255, 255); stroke-width: 0.922432px;" data-stroke-width="1.2"></path>
                                    </g>

                                    <g id="lots_num">
                                        <text transform="matrix(1 0 0 1 150.6297 718.8992)" class="st2-23 st2-24 st2-25">162</text>
                                        <text transform="matrix(1 0 0 1 139.1549 663.833)" class="st2-23 st2-24 st2-25">161</text>
                                        <text transform="matrix(1 0 0 1 139.5382 633.0835)" class="st2-23 st2-24 st2-25">160</text>
                                        <text transform="matrix(1 0 0 1 138.5289 604.8452)" class="st2-23 st2-24 st2-25">159</text>
                                        <text transform="matrix(1 0 0 1 139.5382 574.4136)" class="st2-23 st2-24 st2-25">158</text>
                                        <text transform="matrix(1 0 0 1 138.0131 548.6004)" class="st2-23 st2-24 st2-25">157</text>
                                        <text transform="matrix(1 0 0 1 139.155 522.2675)" class="st2-23 st2-24 st2-25">156</text>
                                        <text transform="matrix(1 0 0 1 138.9121 493.0771)" class="st2-23 st2-24 st2-25">155</text>
                                        <text transform="matrix(1 0 0 1 138.9121 465.5805)" class="st2-23 st2-24 st2-25">154</text>
                                        <text transform="matrix(1 0 0 1 131.1418 361.6053)" class="st2-23 st2-24 st2-25">1</text>
                                        <text transform="matrix(1 0 0 1 128.8503 327.3922)" class="st2-23 st2-24 st2-25">2</text>
                                        <text transform="matrix(1 0 0 1 128.235 291.4458)" class="st2-23 st2-24 st2-25">3</text>
                                        <text transform="matrix(1 0 0 1 114.5699 217.7324)" class="st2-23 st2-24 st2-25">4</text>
                                        <text transform="matrix(1 0 0 1 168.5491 211.6831)" class="st2-23 st2-24 st2-25">5</text>
                                        <text transform="matrix(1 0 0 1 201.8786 211.6831)" class="st2-23 st2-24 st2-25">6</text>
                                        <text transform="matrix(1 0 0 1 235.9043 211.6831)" class="st2-23 st2-24 st2-25">7</text>
                                        <text transform="matrix(1 0 0 1 269.062 211.8374)" class="st2-23 st2-24 st2-25">8</text>
                                        <text transform="matrix(1 0 0 1 297.8247 211.8374)" class="st2-23 st2-24 st2-25">9</text>
                                        <text transform="matrix(1 0 0 1 327.1768 211.8374)" class="st2-23 st2-24 st2-25">10</text>
                                        <text transform="matrix(1 0 0 1 356.2769 211.8374)" class="st2-23 st2-24 st2-25">11</text>
                                        <text transform="matrix(1 0 0 1 390.7547 211.6831)" class="st2-23 st2-24 st2-25">12</text>
                                        <text transform="matrix(1 0 0 1 424.2279 211.6831)" class="st2-23 st2-24 st2-25">13</text>
                                        <text transform="matrix(1 0 0 1 467.3374 211.6831)" class="st2-23 st2-24 st2-25">14</text>
                                        <text transform="matrix(1 0 0 1 556.0745 211.2593)" class="st2-23 st2-24 st2-25">15</text>
                                        <text transform="matrix(1 0 0 1 592.4036 212.105)" class="st2-23 st2-24 st2-25">16</text>
                                        <text transform="matrix(1 0 0 1 628.4158 211.1045)" class="st2-23 st2-24 st2-25">17</text>
                                        <text transform="matrix(1 0 0 1 658.8763 211.7568)" class="st2-23 st2-24 st2-25">18</text>
                                        <text transform="matrix(1 0 0 1 692.4935 210.7568)" class="st2-23 st2-24 st2-25">19</text>
                                        <text transform="matrix(1 0 0 1 724.3753 211.332)" class="st2-23 st2-24 st2-25">20</text>
                                        <text transform="matrix(1 0 0 1 758.2506 211.7573)" class="st2-23 st2-24 st2-25">21</text>
                                        <text transform="matrix(1 0 0 1 791.8051 211.7568)" class="st2-23 st2-24 st2-25">22</text>
                                        <text transform="matrix(1 0 0 1 822.6663 210.5756)" class="st2-23 st2-24 st2-25">23</text>
                                        <text transform="matrix(1 0 0 1 855.3614 211.7567)" class="st2-23 st2-24 st2-25">24</text>
                                        <text transform="matrix(1 0 0 1 889.4737 211.5028)" class="st2-23 st2-24 st2-25">25</text>
                                        <text transform="matrix(1 0 0 1 922.3847 211.5755)" class="st2-23 st2-24 st2-25">26</text>
                                        <text transform="matrix(1 0 0 1 955.1995 211.1439)" class="st2-23 st2-24 st2-25">27</text>
                                        <text transform="matrix(1 0 0 1 1007.9668 217.7324)" class="st2-23 st2-24 st2-25">28</text>
                                        <text transform="matrix(1 0 0 1 1011.6962 278.5706)" class="st2-23 st2-24 st2-25">153</text>
                                        <text transform="matrix(1 0 0 1 1011.2331 310.9964)" class="st2-23 st2-24 st2-25">152</text>
                                        <text transform="matrix(1 0 0 1 1011.5421 340.1233)" class="st2-23 st2-24 st2-25">151</text>
                                        <text transform="matrix(1 0 0 1 1011.6126 367.4)" class="st2-23 st2-24 st2-25">150</text>
                                        <text transform="matrix(1 0 0 1 1011.9913 397.1506)" class="st2-23 st2-24 st2-25">149</text>
                                        <text transform="matrix(1 0 0 1 1011.6962 452.7207)" class="st2-23 st2-24 st2-25">147</text>
                                        <text transform="matrix(1 0 0 1 1011.6329 425.4781)" class="st2-23 st2-24 st2-25">148</text>
                                        <text transform="matrix(1 0 0 1 1011.6962 481.2171)" class="st2-23 st2-24 st2-25">146</text>
                                        <text transform="matrix(1 0 0 1 1011.6962 509.495)" class="st2-23 st2-24 st2-25">145</text>
                                        <text transform="matrix(1 0 0 1 1011.6962 535.6444)" class="st2-23 st2-24 st2-25">144</text>
                                        <text transform="matrix(1 0 0 1 1011.9913 565.0848)" class="st2-23 st2-24 st2-25">143</text>
                                        <text transform="matrix(1 0 0 1 1011.9913 593.9677)" class="st2-23 st2-24 st2-25">142</text>
                                        <text transform="matrix(1 0 0 1 1011.9913 623.536)" class="st2-23 st2-24 st2-25">141</text>
                                        <text transform="matrix(1 0 0 1 1011.9913 654.1562)" class="st2-23 st2-24 st2-25">140</text>
                                        <text transform="matrix(1 0 0 1 1014.0833 714.0895)" class="st2-23 st2-24 st2-25">139</text>
                                        <text transform="matrix(1 0 0 1 637.4059 733.7036)" class="st2-23 st2-24 st2-26">128</text>
                                        <text transform="matrix(1 0 0 1 606.5291 733.2445)" class="st2-23 st2-24 st2-26">127</text>
                                        <text transform="matrix(1 0 0 1 562.7011 733.7035)" class="st2-23 st2-24 st2-26">126</text>
                                        <text transform="matrix(1 0 0 1 672.3887 733.245)" class="st2-23 st2-24 st2-26">129</text>
                                        <text transform="matrix(1 0 0 1 705.0743 733.7031)" class="st2-23 st2-24 st2-26">130</text>
                                        <text transform="matrix(1 0 0 1 737.8516 733.052)" class="st2-23 st2-24 st2-26">131</text>
                                        <text transform="matrix(1 0 0 1 769.3612 733.4258)" class="st2-23 st2-24 st2-26">132</text>
                                        <text transform="matrix(1 0 0 1 802.6445 733.4263)" class="st2-23 st2-24 st2-26">133</text>
                                        <text transform="matrix(1 0 0 1 836.1107 733.8957)" class="st2-23 st2-24 st2-26">134</text>
                                        <text transform="matrix(1 0 0 1 868.8519 733.4258)" class="st2-23 st2-24 st2-26">135</text>
                                        <text transform="matrix(1 0 0 1 900.9888 733.0522)" class="st2-23 st2-24 st2-26">136</text>
                                        <text transform="matrix(1 0 0 1 931.3146 733.2451)" class="st2-23 st2-24 st2-26">137</text>
                                        <text transform="matrix(1 0 0 1 965.5514 733.2446)" class="st2-23 st2-24 st2-26">138</text>
                                        <text transform="matrix(1 0 0 1 321.8557 640.4445)" class="st2-23 st2-24 st2-26">109</text>
                                        <text transform="matrix(1 0 0 1 357.7224 640.6364)" class="st2-23 st2-24 st2-26">110</text>
                                        <text transform="matrix(1 0 0 1 393.7467 640.9893)" class="st2-23 st2-24 st2-26">111</text>
                                        <text transform="matrix(1 0 0 1 426.047 640.8283)" class="st2-23 st2-24 st2-26">112</text>
                                        <text transform="matrix(1 0 0 1 463.244 640.6363)" class="st2-23 st2-24 st2-26">113</text>
                                        <text transform="matrix(1 0 0 1 392.0642 588.1679)" class="st2-23 st2-24 st2-26">106</text>
                                        <text transform="matrix(1 0 0 1 424.228 587.6127)" class="st2-23 st2-24 st2-26">105</text>
                                        <text transform="matrix(1 0 0 1 314.2079 587.4204)" class="st2-23 st2-24 st2-26">108</text>
                                        <text transform="matrix(1 0 0 1 359.2222 588.3275)" class="st2-23 st2-24 st2-26">107</text>
                                        <text transform="matrix(1 0 0 1 463.5413 587.4214)" class="st2-23 st2-24 st2-26">104</text>
                                        <text transform="matrix(1 0 0 1 641.8984 596.2769)" class="st2-23 st2-24 st2-26">100</text>
                                        <text transform="matrix(0.9 0 0 1 335.4789 506.0357)" class="st2-23 st2-24 st2-27">78</text>
                                        <text transform="matrix(0.9 0 0 1 373.7472 505.8628)" class="st2-23 st2-24 st2-27">79</text>
                                        <text transform="matrix(0.9 0 0 1 407.2737 506.5236)" class="st2-23 st2-24 st2-27">80</text>
                                        <text transform="matrix(0.9 0 0 1 445.0461 506.4615)" class="st2-23 st2-24 st2-27">81</text>
                                        <text transform="matrix(0.9 0 0 1 484.123 507.1293)" class="st2-23 st2-24 st2-27">82</text>
                                        <text transform="matrix(1 0 0 1 601.4571 498.6379)" class="st2-23 st2-24 st2-26">84</text>
                                        <text transform="matrix(1 0 0 1 563.9065 499.329)" class="st2-23 st2-24 st2-26">83</text>
                                        <text transform="matrix(1 0 0 1 633.2675 498.4457)" class="st2-23 st2-24 st2-26">85</text>
                                        <text transform="matrix(1 0 0 1 299.2258 456.6938)" class="st2-23 st2-24 st2-27">73</text>
                                        <text transform="matrix(1 0 0 1 336.3228 456.9033)" class="st2-23 st2-24 st2-27">72</text>
                                        <text transform="matrix(1 0 0 1 373.1459 457.0375)" class="st2-23 st2-24 st2-27">71</text>
                                        <text transform="matrix(1 0 0 1 407.2737 457.038)" class="st2-23 st2-24 st2-27">70</text>
                                        <text transform="matrix(1 0 0 1 442.9628 456.6929)" class="st2-23 st2-24 st2-27">69</text>
                                        <text transform="matrix(1 0 0 1 486.43 456.9033)" class="st2-23 st2-24 st2-27">68</text>
                                        <text transform="matrix(1 0 0 1 632.6723 445.3704)" class="st2-23 st2-24 st2-26">66</text>
                                        <text transform="matrix(1 0 0 1 594.1855 445.3704)" class="st2-23 st2-24 st2-26">67</text>
                                        <text transform="matrix(1 0 0 1 663.926 445.3704)" class="st2-23 st2-24 st2-26">65</text>
                                        <text transform="matrix(1 0 0 1 254.2778 335.8037)" class="st2-23 st2-24 st2-25">46</text>
                                        <text transform="matrix(1 0 0 1 214.6759 335.6778)" class="st2-23 st2-24 st2-25">45</text>
                                        <text transform="matrix(1 0 0 1 290.5034 335.5688)" class="st2-23 st2-24 st2-25">47</text>
                                        <text transform="matrix(1 0 0 1 332.2627 335.5688)" class="st2-23 st2-24 st2-25">48</text>
                                        <text transform="matrix(1 0 0 1 372.3785 335.5691)" class="st2-23 st2-24 st2-25">49</text>
                                        <text transform="matrix(1 0 0 1 405.9815 335.9065)" class="st2-23 st2-24 st2-25">50</text>
                                        <text transform="matrix(1 0 0 1 252.2779 291.1333)" class="st2-23 st2-24 st2-25">43</text>
                                        <text transform="matrix(1 0 0 1 211.2778 290.3832)" class="st2-23 st2-24 st2-25">44</text>
                                        <text transform="matrix(1 0 0 1 292.271 290.8896)" class="st2-23 st2-24 st2-25">42</text>
                                        <text transform="matrix(1 0 0 1 327.8333 291.4458)" class="st2-23 st2-24 st2-25">41</text>
                                        <rect x="318.55" y="353.83" class="st2-28" width="24.49" height="0"></rect>
                                        <text transform="matrix(1 0 0 1 648.0559 295.8793)" class="st2-23 st2-24 st2-29">37</text>
                                        <text transform="matrix(1 0 0 1 614.4385 297.1577)" class="st2-23 st2-24 st2-29">38</text>
                                        <text transform="matrix(1 0 0 1 680.63 297.1579)" class="st2-23 st2-24 st2-26">36</text>
                                        <text transform="matrix(1 0 0 1 368.537 292.105)" class="st2-23 st2-24 st2-25">40</text>
                                        <text transform="matrix(1 0 0 1 409.0513 290.304)" class="st2-23 st2-24 st2-25">39</text>
                                        <text transform="matrix(1 0 0 1 714.4831 296.9655)" class="st2-23 st2-24 st2-26">35</text>
                                        <text transform="matrix(1 0 0 1 750.2843 295.687)" class="st2-23 st2-24 st2-26">34</text>
                                        <text transform="matrix(1 0 0 1 786.083 295.687)" class="st2-23 st2-24 st2-26">33</text>
                                        <text transform="matrix(1 0 0 1 819.5922 295.687)" class="st2-23 st2-24 st2-26">32</text>
                                        <text transform="matrix(1 0 0 1 852.389 295.687)" class="st2-23 st2-24 st2-26">31</text>
                                        <text transform="matrix(1 0 0 1 887.4153 295.6872)" class="st2-23 st2-24 st2-26">30</text>
                                        <text transform="matrix(1 0 0 1 924.6447 296.0629)" class="st2-23 st2-24 st2-26">29</text>
                                        <text transform="matrix(1 0 0 1 623.1388 346.9889)" class="st2-23 st2-24 st2-26">51</text>
                                        <text transform="matrix(1 0 0 1 655.1851 346.6442)" class="st2-23 st2-24 st2-26">52</text>
                                        <text transform="matrix(1 0 0 1 687.8333 346.6442)" class="st2-23 st2-24 st2-26">53</text>
                                        <text transform="matrix(1 0 0 1 717.8173 346.5558)" class="st2-23 st2-24 st2-26">54</text>
                                        <text transform="matrix(1 0 0 1 751.0183 346.5557)" class="st2-23 st2-24 st2-26">55</text>
                                        <text transform="matrix(1 0 0 1 786.0829 346.5557)" class="st2-23 st2-24 st2-26">56</text>
                                        <text transform="matrix(1 0 0 1 818.9446 346.5557)" class="st2-23 st2-24 st2-26">57</text>
                                        <text transform="matrix(1 0 0 1 852.3891 346.6442)" class="st2-23 st2-24 st2-26">58</text>
                                        <text transform="matrix(1 0 0 1 898.5194 345.7964)" class="st2-23 st2-24 st2-26">59</text>
                                        <text transform="matrix(1 0 0 1 226.9061 456.6929)" class="st2-23 st2-24 st2-27">75</text>
                                        <text transform="matrix(1 0 0 1 266.3028 456.6938)" class="st2-23 st2-24 st2-27">74</text>
                                        <text transform="matrix(1 0 0 1 697.9982 444.6389)" class="st2-23 st2-24 st2-26">64</text>
                                        <text transform="matrix(1 0 0 1 731.2563 444.5627)" class="st2-23 st2-24 st2-26">63</text>
                                        <text transform="matrix(1 0 0 1 763.3677 444.8312)" class="st2-23 st2-24 st2-26">62</text>
                                        <text transform="matrix(1 0 0 1 796.9847 445.5627)" class="st2-23 st2-24 st2-26">61</text>
                                        <text transform="matrix(1 0 0 1 839.4167 444.6674)" class="st2-23 st2-24 st2-26">60</text>
                                        <text transform="matrix(1 0 0 1 249.5071 505.7153)" class="st2-23 st2-24 st2-27">76</text>
                                        <text transform="matrix(0.9 0 0 1 301.5759 505.7154)" class="st2-23 st2-24 st2-27">77</text>
                                        <text transform="matrix(1 0 0 1 665.837 498.6376)" class="st2-23 st2-24 st2-26">86</text>
                                        <text transform="matrix(1 0 0 1 699.5928 498.4449)" class="st2-23 st2-24 st2-26">87</text>
                                        <text transform="matrix(1 0 0 1 731.8508 499.3523)" class="st2-23 st2-24 st2-26">88</text>
                                        <text transform="matrix(1 0 0 1 765.6688 498.8152)" class="st2-23 st2-24 st2-26">89</text>
                                        <text transform="matrix(1 0 0 1 797.5793 498.4449)" class="st2-23 st2-24 st2-26">90</text>
                                        <text transform="matrix(1 0 0 1 835.7898 499.1481)" class="st2-23 st2-24 st2-26">91</text>
                                        <text transform="matrix(1 0 0 1 678.5148 596.7568)" class="st2-23 st2-24 st2-26">99</text>
                                        <text transform="matrix(1 0 0 1 711.5013 596.2871)" class="st2-23 st2-24 st2-26">98</text>
                                        <text transform="matrix(1 0 0 1 539.9205 596.7219)" class="st2-23 st2-24 st2-26">103</text>
                                        <text transform="matrix(1 0 0 1 576.537 596.2019)" class="st2-23 st2-24 st2-26">102</text>
                                        <text transform="matrix(1 0 0 1 610.2245 596.9763)" class="st2-23 st2-24 st2-26">101</text>
                                        <text transform="matrix(1 0 0 1 745.099 596.541)" class="st2-23 st2-24 st2-26">97</text>
                                        <text transform="matrix(1 0 0 1 778.1068 596.2871)" class="st2-23 st2-24 st2-26">96</text>
                                        <text transform="matrix(1 0 0 1 809.858 596.7217)" class="st2-23 st2-24 st2-26">95</text>
                                        <text transform="matrix(1 0 0 1 842.2619 596.541)" class="st2-23 st2-24 st2-26">94</text>
                                        <text transform="matrix(1 0 0 1 875.7532 596.2021)" class="st2-23 st2-24 st2-26">93</text>
                                        <text transform="matrix(1 0 0 1 913.9449 596.2871)" class="st2-23 st2-24 st2-26">92</text>
                                        <text transform="matrix(1 0 0 1 642.8085 640.4036)" class="st2-23 st2-24 st2-26">117</text>
                                        <text transform="matrix(1 0 0 1 674.7777 640.4031)" class="st2-23 st2-24 st2-26">118</text>
                                        <text transform="matrix(1 0 0 1 537.894 640.8328)" class="st2-23 st2-24 st2-26">114</text>
                                        <text transform="matrix(1 0 0 1 577.6385 640.8326)" class="st2-23 st2-24 st2-26">115</text>
                                        <text transform="matrix(1 0 0 1 610.0642 640.8331)" class="st2-23 st2-24 st2-26">116</text>
                                        <text transform="matrix(1 0 0 1 708.4727 641.0555)" class="st2-23 st2-24 st2-26">119</text>
                                        <text transform="matrix(1 0 0 1 741.2637 640.9896)" class="st2-23 st2-24 st2-26">120</text>
                                        <text transform="matrix(1 0 0 1 775.8308 641.0558)" class="st2-23 st2-24 st2-26">121</text>
                                        <text transform="matrix(1 0 0 1 805.9629 640.1624)" class="st2-23 st2-24 st2-26">122</text>
                                        <text transform="matrix(1 0 0 1 316.0269 733.8953)" class="st2-23 st2-24 st2-26">166</text>
                                        <text transform="matrix(1 0 0 1 348.1624 733.7034)" class="st2-23 st2-24 st2-26">167</text>
                                        <text transform="matrix(1 0 0 1 217.6058 733.052)" class="st2-23 st2-24 st2-26">163</text>
                                        <text transform="matrix(1 0 0 1 250.6761 733.052)" class="st2-23 st2-24 st2-26">164</text>
                                        <text transform="matrix(1 0 0 1 283.5918 733.7031)" class="st2-23 st2-24 st2-26">165</text>
                                        <text transform="matrix(1 0 0 1 381.6016 734.0881)" class="st2-23 st2-24 st2-26">168</text>
                                        <text transform="matrix(1 0 0 1 413.9889 733.8953)" class="st2-23 st2-24 st2-26">169</text>
                                        <text transform="matrix(1 0 0 1 447.1653 734.2802)" class="st2-23 st2-24 st2-26">170</text>
                                        <text transform="matrix(1 0 0 1 481.8524 733.2441)" class="st2-23 st2-24 st2-26">171</text>
                                        <text transform="matrix(1 0 0 1 839.4167 640.5003)" class="st2-23 st2-24 st2-26">123</text>
                                        <text transform="matrix(1 0 0 1 872.2791 640.5003)" class="st2-23 st2-24 st2-26">124</text>
                                        <text transform="matrix(1 0 0 1 911.816 640.7966)" class="st2-23 st2-24 st2-26">125</text>
                                    </g>
                                    <g id="Capa_8">
                                        <g>
                                            <circle class="st2-30" cx="505.29" cy="335.47" r="8.87"></circle>
                                            <path class="st2-31" d="M496.88,332.64c0,0-2.39,7.25,5.04,11.04c7.43,3.8,11.41-4.46,11.41-4.46    C506.03,344.12,500.51,342.06,496.88,332.64z"></path>
                                        </g>
                                        <g>
                                            <circle class="st2-30" cx="493.73" cy="334.54" r="9.03"></circle>
                                            <path class="st2-31" d="M485.18,331.65c0,0-2.44,7.38,5.13,11.24c7.56,3.86,11.61-4.53,11.61-4.53    C494.48,343.34,488.86,341.25,485.18,331.65z"></path>
                                        </g>
                                        <g>
                                            <circle class="st2-30" cx="551.98" cy="373.12" r="23.13"></circle>
                                            <path class="st2-31" d="M534.5,357.96c0,0-12.95,15.12,1.22,31.63c14.18,16.51,31.93,0.54,31.93,0.54    C545.19,394.72,533.92,384.29,534.5,357.96z"></path>
                                        </g>
                                        <g>
                                            <circle class="st2-30" cx="498.45" cy="286.45" r="5.65"></circle>
                                            <path class="st2-31" d="M494.18,282.75c0,0-3.16,3.69,0.3,7.73c3.46,4.03,7.8,0.13,7.8,0.13    C496.79,291.73,494.04,289.18,494.18,282.75z"></path>
                                        </g>
                                        <g>
                                            <circle class="st2-30" cx="499.85" cy="274.67" r="9.03"></circle>
                                            <path class="st2-31" d="M493.04,268.76c0,0-5.05,5.9,0.48,12.34c5.53,6.44,12.46,0.21,12.46,0.21    C497.21,283.1,492.81,279.03,493.04,268.76z"></path>
                                        </g>
                                        <g>
                                            <circle class="st2-30" cx="492.8" cy="320.74" r="9.03"></circle>
                                            <path class="st2-31" d="M484.25,317.86c0,0-2.44,7.38,5.13,11.24s11.61-4.53,11.61-4.53C493.55,329.54,487.94,327.45,484.25,317.86z    "></path>
                                        </g>
                                        <g>
                                            <circle class="st2-30" cx="501.26" cy="325.1" r="8.87"></circle>
                                            <path class="st2-31" d="M492.85,322.26c0,0-2.39,7.25,5.04,11.04c7.43,3.8,11.41-4.46,11.41-4.46    C502,333.75,496.48,331.69,492.85,322.26z"></path>
                                        </g>
                                        <g>
                                            <circle class="st2-30" cx="513.24" cy="286.55" r="13.38"></circle>
                                            <path class="st2-31" d="M503.13,277.78c0,0-7.49,8.75,0.71,18.3c8.2,9.55,18.48,0.31,18.48,0.31    C509.31,299.05,502.79,293.02,503.13,277.78z"></path>
                                        </g>
                                        <g>
                                            <circle class="st2-32" cx="524.21" cy="315.1" r="9.03"></circle>
                                            <path class="st2-33" d="M525.84,306.22c0,0-7.65-1.35-10.38,6.69c-2.74,8.04,6.16,10.83,6.16,10.83    C515.61,317.11,516.87,311.25,525.84,306.22z"></path>
                                        </g>
                                        <g>
                                            <circle class="st2-30" cx="539.47" cy="299.41" r="9.03"></circle>
                                            <path class="st2-31" d="M531.11,302.8c0,0,2.97,7.18,11.22,5.17c8.25-2.01,5.84-11.01,5.84-11.01    C545.78,305.59,540.16,307.67,531.11,302.8z"></path>
                                        </g>
                                        <g>
                                            <circle class="st2-30" cx="530.07" cy="320.89" r="8.87"></circle>
                                            <path class="st2-31" d="M530.16,329.76c0,0,7.63-0.12,8.77-8.39c1.14-8.27-7.96-9.3-7.96-9.3    C537.99,317.35,537.87,323.24,530.16,329.76z"></path>
                                        </g>
                                        <g>
                                            <circle class="st2-30" cx="556.23" cy="316.23" r="8.87"></circle>
                                            <path class="st2-31" d="M558.49,307.65c0,0-7.39-1.9-10.68,5.77c-3.28,7.67,5.22,11.08,5.22,11.08    C547.65,317.54,549.33,311.9,558.49,307.65z"></path>
                                        </g>
                                        <g>
                                            <circle class="st2-30" cx="522.34" cy="356.23" r="8.87"></circle>
                                            <path class="st2-31" d="M514.14,352.84c0,0-2.87,7.07,4.29,11.35c7.16,4.28,11.68-3.69,11.68-3.69    C522.5,364.91,517.13,362.49,514.14,352.84z"></path>
                                        </g>
                                        <g>
                                            <circle class="st2-32" cx="546.5" cy="341.71" r="9.03"></circle>
                                            <path class="st2-33" d="M539.07,346.83c0,0,4.45,6.36,12.07,2.61c7.62-3.75,3.31-12.01,3.31-12.01    C554,346.37,548.96,349.62,539.07,346.83z"></path>
                                        </g>
                                        <g>
                                            <circle class="st2-30" cx="233.06" cy="614.53" r="8.87"></circle>
                                            <path class="st2-31" d="M224.66,611.7c0,0-2.39,7.25,5.04,11.04c7.43,3.8,11.41-4.46,11.41-4.46    C233.8,623.18,228.28,621.13,224.66,611.7z"></path>
                                        </g>
                                        <g>
                                            <circle class="st2-30" cx="221.5" cy="613.6" r="9.03"></circle>
                                            <path class="st2-31" d="M212.95,610.71c0,0-2.44,7.38,5.13,11.24c7.56,3.86,11.61-4.53,11.61-4.53    C222.25,622.4,216.63,620.31,212.95,610.71z"></path>
                                        </g>
                                        <g>
                                            <circle class="st2-30" cx="263.94" cy="654.05" r="19.66"></circle>
                                            <path class="st2-31" d="M249.09,641.16c0,0-11.01,12.84,1.04,26.88c12.04,14.03,27.13,0.46,27.13,0.46    C258.17,672.4,248.59,663.54,249.09,641.16z"></path>
                                        </g>
                                        <g>
                                            <circle class="st2-30" cx="209.07" cy="548.6" r="5.65"></circle>
                                            <path class="st2-31" d="M204.8,544.9c0,0-3.16,3.69,0.3,7.73c3.46,4.03,7.8,0.13,7.8,0.13C207.41,553.88,204.66,551.33,204.8,544.9z    "></path>
                                        </g>
                                        <g>
                                            <circle class="st2-30" cx="210.48" cy="536.82" r="9.03"></circle>
                                            <path class="st2-31" d="M203.66,530.9c0,0-5.05,5.9,0.48,12.34c5.53,6.44,12.46,0.21,12.46,0.21    C207.83,545.24,203.43,541.18,203.66,530.9z"></path>
                                        </g>
                                        <g>
                                            <circle class="st2-30" cx="220.57" cy="599.8" r="9.03"></circle>
                                            <path class="st2-31" d="M212.02,596.92c0,0-2.44,7.38,5.13,11.24c7.56,3.86,11.61-4.53,11.61-4.53    C221.32,608.6,215.71,606.51,212.02,596.92z"></path>
                                        </g>
                                        <g>
                                            <circle class="st2-30" cx="229.03" cy="604.16" r="8.87"></circle>
                                            <path class="st2-31" d="M220.62,601.32c0,0-2.39,7.25,5.04,11.04c7.43,3.8,11.41-4.46,11.41-4.46    C229.77,612.81,224.25,610.75,220.62,601.32z"></path>
                                        </g>
                                        <g>
                                            <circle class="st2-30" cx="225.28" cy="555.51" r="13.38"></circle>
                                            <path class="st2-31" d="M215.17,546.74c0,0-7.49,8.75,0.71,18.3c8.2,9.55,18.48,0.31,18.48,0.31    C221.35,568,214.83,561.97,215.17,546.74z"></path>
                                        </g>
                                        <g>
                                            <circle class="st2-32" cx="241.65" cy="594.08" r="9.03"></circle>
                                            <path class="st2-33" d="M243.28,585.2c0,0-7.65-1.35-10.38,6.69c-2.74,8.04,6.16,10.83,6.16,10.83    C233.05,596.08,234.31,590.23,243.28,585.2z"></path>
                                        </g>
                                        <g>
                                            <circle class="st2-30" cx="270.06" cy="611.92" r="9.03"></circle>
                                            <path class="st2-31" d="M261.7,615.31c0,0,2.97,7.18,11.22,5.17s5.84-11.01,5.84-11.01C276.37,618.1,270.75,620.17,261.7,615.31z"></path>
                                        </g>
                                        <g>
                                            <circle class="st2-30" cx="247.51" cy="599.87" r="8.87"></circle>
                                            <path class="st2-31" d="M247.59,608.74c0,0,7.63-0.12,8.77-8.39c1.14-8.27-7.96-9.3-7.96-9.3    C255.43,596.32,255.31,602.21,247.59,608.74z"></path>
                                        </g>
                                        <g>
                                            <circle class="st2-30" cx="285.74" cy="637.81" r="8.87"></circle>
                                            <path class="st2-31" d="M288.01,629.24c0,0-7.39-1.9-10.68,5.77s5.22,11.08,5.22,11.08C277.16,639.13,278.84,633.49,288.01,629.24z"></path>
                                        </g>
                                        <g>
                                            <circle class="st2-30" cx="239.78" cy="635.2" r="8.87"></circle>
                                            <path class="st2-31" d="M231.58,631.82c0,0-2.87,7.07,4.29,11.35c7.16,4.28,11.68-3.69,11.68-3.69    C239.94,643.88,234.57,641.46,231.58,631.82z"></path>
                                        </g>
                                        <g>
                                            <circle class="st2-32" cx="263.94" cy="620.68" r="9.03"></circle>
                                            <path class="st2-33" d="M256.51,625.81c0,0,4.45,6.36,12.07,2.61c7.62-3.75,3.31-12.01,3.31-12.01    C271.44,625.34,266.4,628.59,256.51,625.81z"></path>
                                        </g>
                                        <g>
                                            <circle class="st2-30" cx="915.95" cy="454.02" r="7.05"></circle>
                                            <path class="st2-31" d="M912.33,447.97c0,0-5.19,3.15-2.65,9.28c2.53,6.13,9.2,3.19,9.2,3.19    C911.93,459.63,909.66,455.54,912.33,447.97z"></path>
                                        </g>
                                        <g>
                                            <circle class="st2-30" cx="909.44" cy="447.49" r="7.18"></circle>
                                            <path class="st2-31" d="M905.76,441.33c0,0-5.28,3.2-2.7,9.44c2.58,6.24,9.36,3.25,9.36,3.25    C905.35,453.2,903.04,449.03,905.76,441.33z"></path>
                                        </g>
                                        <g>
                                            <ellipse class="st2-30" cx="924.64" cy="498.95" rx="19.49" ry="17.93"></ellipse>
                                            <path class="st2-31" d="M921.75,481.22c0,0-16.57,2.39-16.52,19.26c0.05,16.87,20.16,16.39,20.16,16.39    C908.49,508.27,906.97,496.45,921.75,481.22z"></path>
                                        </g>
                                        <g>
                                            <circle class="st2-30" cx="947.42" cy="389.46" r="4.49"></circle>
                                            <path class="st2-31" d="M946.75,385.02c0,0-3.82,0.6-3.81,4.83c0.01,4.23,4.65,4.11,4.65,4.11    C943.69,391.79,943.34,388.83,946.75,385.02z"></path>
                                        </g>
                                        <g>
                                            <circle class="st2-30" cx="954.35" cy="383.06" r="7.18"></circle>
                                            <path class="st2-31" d="M953.28,375.96c0,0-6.1,0.96-6.08,7.71c0.02,6.75,7.42,6.56,7.42,6.56    C948.4,386.79,947.84,382.06,953.28,375.96z"></path>
                                        </g>
                                        <g>
                                            <circle class="st2-30" cx="916" cy="438.67" r="7.18"></circle>
                                            <path class="st2-31" d="M912.32,432.51c0,0-5.28,3.2-2.7,9.44c2.58,6.24,9.36,3.25,9.36,3.25    C911.91,444.38,909.6,440.21,912.32,432.51z"></path>
                                        </g>
                                        <g>
                                            <circle class="st2-30" cx="918.87" cy="445.67" r="7.05"></circle>
                                            <path class="st2-31" d="M915.25,439.61c0,0-5.19,3.15-2.65,9.28c2.53,6.13,9.2,3.19,9.2,3.19    C914.85,451.28,912.58,447.19,915.25,439.61z"></path>
                                        </g>
                                        <g>
                                            <circle class="st2-30" cx="956.31" cy="397.15" r="10.64"></circle>
                                            <path class="st2-31" d="M954.73,386.63c0,0-9.05,1.42-9.02,11.43c0.03,10.01,11.01,9.72,11.01,9.72    C947.49,402.68,946.66,395.67,954.73,386.63z"></path>
                                        </g>
                                        <g>
                                            <circle class="st2-32" cx="937.93" cy="432.57" r="7.18"></circle>
                                            <path class="st2-33" d="M943.49,428.05c0,0-3.93-4.77-9.73-1.32s-1.87,9.73-1.87,9.73C931.69,429.35,935.48,426.46,943.49,428.05z"></path>
                                        </g>
                                        <g>
                                            <circle class="st2-30" cx="955.25" cy="430.97" r="7.18"></circle>
                                            <path class="st2-31" d="M948.44,428.7c0,0-1.91,5.87,4.11,8.92c6.02,3.04,9.21-3.64,9.21-3.64    C955.88,437.96,951.41,436.31,948.44,428.7z"></path>
                                        </g>
                                        <g>
                                            <circle class="st2-30" cx="938.48" cy="439.1" r="7.05"></circle>
                                            <path class="st2-31" d="M933.95,444.51c0,0,4.68,3.86,9.63-0.55c4.96-4.41-0.01-9.73-0.01-9.73    C945.1,441.05,941.98,444.54,933.95,444.51z"></path>
                                        </g>
                                        <g>
                                            <circle class="st2-30" cx="956.7" cy="449.78" r="7.05"></circle>
                                            <path class="st2-31" d="M962.5,445.76c0,0-3.49-4.96-9.43-2.02c-5.95,2.94-2.57,9.39-2.57,9.39    C950.84,446.15,954.76,443.61,962.5,445.76z"></path>
                                        </g>
                                        <g>
                                            <ellipse class="st2-30" cx="918.11" cy="469.23" rx="8.79" ry="8.09"></ellipse>
                                            <path class="st2-31" d="M914.11,462.03c0,0-6.72,3.21-4.07,10.42s11.18,4.36,11.18,4.36C912.65,475.35,910.16,470.49,914.11,462.03z    "></path>
                                        </g>
                                        <g>
                                            <ellipse class="st2-32" cx="945.67" cy="473.47" rx="8.95" ry="8.23"></ellipse>
                                            <path class="st2-33" d="M936.77,472.62c0,0-0.74,7.05,7.42,8.96c8.16,1.91,10.23-6.38,10.23-6.38    C948.33,481.15,942.44,480.42,936.77,472.62z"></path>
                                        </g>
                                        <g>
                                            <circle class="st2-32" cx="119.3" cy="411.66" r="6.22"></circle>
                                            <path class="st2-33" d="M114.18,415.2c0,0,3.07,4.38,8.31,1.8c5.25-2.58,2.28-8.27,2.28-8.27C124.46,414.88,121,417.11,114.18,415.2    z"></path>
                                        </g>
                                        <g>
                                            <circle class="st2-30" cx="121.94" cy="407.02" r="4.38"></circle>
                                            <path class="st2-31" d="M125.14,404.04c0,0-2.59-2.74-5.98-0.4c-3.39,2.34-0.74,6-0.74,6C118.02,405.32,120.2,403.4,125.14,404.04z"></path>
                                        </g>
                                        <g>
                                            <circle class="st2-30" cx="139.56" cy="407.04" r="4.38"></circle>
                                            <path class="st2-31" d="M142.76,404.05c0,0-2.59-2.74-5.98-0.4c-3.39,2.34-0.74,6-0.74,6C135.63,405.33,137.82,403.42,142.76,404.05    z"></path>
                                        </g>
                                        <g>

                                            <ellipse transform="matrix(0.2492 -0.9684 0.9684 0.2492 -278.5291 453.0921)" class="st2-32" cx="152.96" cy="406.19" rx="3.11" ry="3.05"></ellipse>
                                            <path class="st2-33" d="M150.44,407.96c0,0,1.5,2.18,4.09,0.88c2.59-1.3,1.14-4.14,1.14-4.14    C155.5,407.78,153.79,408.9,150.44,407.96z"></path>
                                        </g>
                                        <g>
                                            <circle class="st2-30" cx="154.22" cy="403.3" r="2.7"></circle>
                                            <path class="st2-31" d="M156.19,401.46c0,0-1.59-1.69-3.68-0.25c-2.09,1.44-0.45,3.7-0.45,3.7    C151.8,402.25,153.15,401.07,156.19,401.46z"></path>
                                        </g>
                                        <g>
                                            <ellipse class="st2-30" cx="158.94" cy="372.78" rx="3.02" ry="3.31"></ellipse>
                                            <path class="st2-31" d="M159.64,369.56c0,0-2.53-0.65-3.59,2.24c-1.06,2.89,1.86,4.09,1.86,4.09    C156.03,373.34,156.56,371.22,159.64,369.56z"></path>
                                        </g>
                                        <g>

                                            <ellipse transform="matrix(0.2492 -0.9684 0.9684 0.2492 -272.6114 405.3008)" class="st2-32" cx="125.1" cy="378.47" rx="2.64" ry="2.59"></ellipse>
                                            <path class="st2-33" d="M122.95,379.98c0,0,1.27,1.85,3.47,0.75c2.2-1.11,0.97-3.51,0.97-3.51    C127.25,379.83,125.8,380.78,122.95,379.98z"></path>
                                        </g>
                                        <g>
                                            <circle class="st2-30" cx="126.56" cy="376.63" r="2.29"></circle>
                                            <path class="st2-31" d="M128.23,375.06c0,0-1.35-1.43-3.13-0.21c-1.77,1.22-0.39,3.14-0.39,3.14    C124.5,375.73,125.65,374.73,128.23,375.06z"></path>
                                        </g>
                                        <g>
                                            <ellipse class="st2-32" cx="165.14" cy="372.78" rx="4.29" ry="4.7"></ellipse>
                                            <path class="st2-33" d="M163.54,377.14c0,0,3.43,1.49,5.47-2.33c2.04-3.82-1.84-6.17-1.84-6.17    C169.34,372.65,168.19,375.51,163.54,377.14z"></path>
                                        </g>
                                        <g>
                                            <ellipse class="st2-30" cx="144.82" cy="376.71" rx="3.02" ry="3.31"></ellipse>
                                            <path class="st2-31" d="M145.52,373.49c0,0-2.53-0.65-3.59,2.24s1.86,4.09,1.86,4.09C141.91,377.27,142.44,375.15,145.52,373.49z"></path>
                                        </g>
                                        <g>
                                            <circle class="st2-30" cx="116.89" cy="377.24" r="3.72"></circle>
                                            <path class="st2-31" d="M119.6,374.71c0,0-2.2-2.33-5.08-0.34c-2.88,1.99-0.63,5.09-0.63,5.09    C113.55,375.8,115.41,374.17,119.6,374.71z"></path>
                                        </g>
                                        <g>

                                            <ellipse transform="matrix(0.2492 -0.9684 0.9684 0.2492 -263.4066 413.5937)" class="st2-32" cx="135.05" cy="376.68" rx="2.64" ry="2.59"></ellipse>
                                            <path class="st2-33" d="M132.91,378.19c0,0,1.27,1.85,3.47,0.75c2.2-1.11,0.97-3.51,0.97-3.51    C137.2,378.04,135.75,378.99,132.91,378.19z"></path>
                                        </g>
                                        <g>
                                            <circle class="st2-30" cx="156.95" cy="406.19" r="2.29"></circle>
                                            <path class="st2-31" d="M158.63,404.63c0,0-1.35-1.43-3.13-0.21c-1.77,1.22-0.39,3.14-0.39,3.14    C154.9,405.29,156.04,404.29,158.63,404.63z"></path>
                                        </g>
                                        <g>

                                            <ellipse transform="matrix(0.2492 -0.9684 0.9684 0.2492 -250.6796 424.8464)" class="st2-32" cx="148.67" cy="374.1" rx="2.64" ry="2.59"></ellipse>
                                            <path class="st2-33" d="M146.53,375.61c0,0,1.27,1.85,3.47,0.75c2.2-1.11,0.97-3.51,0.97-3.51    C150.82,375.46,149.37,376.41,146.53,375.61z"></path>
                                        </g>
                                        <g>
                                            <ellipse class="st2-30" cx="166.76" cy="433.95" rx="3.02" ry="3.31"></ellipse>
                                            <path class="st2-31" d="M167.46,430.73c0,0-2.53-0.65-3.59,2.24s1.86,4.09,1.86,4.09C163.85,434.51,164.38,432.39,167.46,430.73z"></path>
                                        </g>
                                        <g>

                                            <ellipse transform="matrix(0.2492 -0.9684 0.9684 0.2492 -327.5553 459.6524)" class="st2-32" cx="132.68" cy="441.09" rx="2.64" ry="2.59"></ellipse>
                                            <path class="st2-33" d="M130.54,442.59c0,0,1.27,1.85,3.47,0.75c2.2-1.11,0.97-3.51,0.97-3.51    C134.83,442.44,133.38,443.4,130.54,442.59z"></path>
                                        </g>
                                        <g>
                                            <circle class="st2-30" cx="177.22" cy="400.63" r="2.29"></circle>
                                            <path class="st2-31" d="M178.89,399.07c0,0-1.35-1.43-3.13-0.21s-0.39,3.14-0.39,3.14C175.16,399.74,176.31,398.73,178.89,399.07z"></path>
                                        </g>
                                        <g>
                                            <ellipse class="st2-32" cx="172.73" cy="435.39" rx="4.29" ry="4.7"></ellipse>
                                            <path class="st2-33" d="M171.13,439.75c0,0,3.43,1.49,5.47-2.33c2.04-3.82-1.84-6.17-1.84-6.17    C176.92,435.26,175.78,438.12,171.13,439.75z"></path>
                                        </g>
                                        <g>
                                            <ellipse class="st2-30" cx="152.4" cy="439.32" rx="3.02" ry="3.31"></ellipse>
                                            <path class="st2-31" d="M153.11,436.1c0,0-2.53-0.65-3.59,2.24c-1.06,2.89,1.86,4.09,1.86,4.09    C149.49,439.88,150.02,437.76,153.11,436.1z"></path>
                                        </g>
                                        <g>
                                            <circle class="st2-30" cx="166.81" cy="437.39" r="3.72"></circle>
                                            <path class="st2-31" d="M169.53,434.85c0,0-2.2-2.33-5.08-0.34c-2.88,1.99-0.63,5.09-0.63,5.09    C163.47,435.94,165.33,434.31,169.53,434.85z"></path>
                                        </g>
                                        <g>

                                            <ellipse transform="matrix(0.2492 -0.9684 0.9684 0.2492 -318.3506 467.9453)" class="st2-32" cx="142.63" cy="439.3" rx="2.64" ry="2.59"></ellipse>
                                            <path class="st2-33" d="M140.49,440.8c0,0,1.27,1.85,3.47,0.75c2.2-1.11,0.97-3.51,0.97-3.51    C144.78,440.65,143.33,441.61,140.49,440.8z"></path>
                                        </g>
                                        <g>
                                            <circle class="st2-30" cx="143.67" cy="434.39" r="2.29"></circle>
                                            <path class="st2-31" d="M145.35,432.83c0,0-1.35-1.43-3.13-0.21c-1.77,1.22-0.39,3.14-0.39,3.14    C141.62,433.49,142.76,432.49,145.35,432.83z"></path>
                                        </g>
                                        <g>

                                            <ellipse transform="matrix(0.2492 -0.9684 0.9684 0.2492 -305.6236 479.1981)" class="st2-32" cx="156.25" cy="436.72" rx="2.64" ry="2.59"></ellipse>
                                            <path class="st2-33" d="M154.11,438.22c0,0,1.27,1.85,3.47,0.75s0.97-3.51,0.97-3.51C158.41,438.07,156.95,439.02,154.11,438.22z"></path>
                                        </g>
                                    </g>
                                    <g class="area_selection" data-id="stage_2">
                                        <path class="st2-34 mapsvg-region" d="M521.56,228.81l-67.4,0.78l-0.83-58.57l46.18-0.41C505.13,190.67,512.32,210.13,521.56,228.81z" title="511.05 M2" data-id="A-14"></path>
                                        <path class="st2-34 mapsvg-region" d="M531.78,170.31c5.25,18.98,13.55,38.47,24.08,58.35l34.58-0.34l-0.82-58.63L531.78,170.31z" title="434.86 M2" data-id="A-15"></path>
                                        <path class="st2-34 mapsvg-region" d="M1060.17,542.78l-0.28-28.06l-81.22,0.61c-0.43,10.73-0.61,20.67,0,28.11L1060.17,542.78z" title="358.9 M2" data-id="A-144"></path>
                                        <path class="st2-34 mapsvg-region" d="M440.28,361.78l-40.42-3.08l-0.58-52.33l40.09-0.55c0.27,15.37,3.18,30.05,8.52,44.07   c2.01,2.97,2.74,5.92,0,8.81C445.87,360.8,443.36,361.88,440.28,361.78z" title="372.11 M2" data-id="A-50"></path>
                                        <path class="st2-34 mapsvg-region" d="M398.61,257.11l0.67,49.25l40.09-0.55c0.97-14.78,2.57-28.89,8.13-38.81c1.46-6.14-0.78-9.64-6.94-10.33   L398.61,257.11z" title="340.13 M2" data-id="A-39"></path>
                                        <path class="st2-34 mapsvg-region" d="M215.86,473.33l0.3,10.17c6.86,16.69,15.21,32.09,25.2,46.09l51.85-0.67l-0.67-56.59L215.86,473.33z" title="592.08 M2" data-id="A-76"></path>
                                        <path class="st2-34 mapsvg-region" d="M509.06,526.83l-38.39,0.47l-0.71-56.26l56-0.49C518.21,488.51,512.74,507.33,509.06,526.83z" title="406.87 M2" data-id="A-82"></path>
                                        <path class="st2-34 mapsvg-region" d="M469.15,417.3l0.81,53.75c0,0-35.53,1.07-35.54,0.36c-0.01-0.7-0.74-58.35-0.74-58.35L469.15,417.3z" title="311.24 M2" data-id="A-69"></path>
                                        <path class="st2-34 mapsvg-region" d="M535.44,429.52c-22.5-5-44.63-9.14-66.3-12.22l0.81,53.75l56-0.49l14.67-30.52   C543.51,435.24,542.35,431.58,535.44,429.52z" title="489.35 M2" data-id="A-68"></path>
                                        <path class="st2-34 mapsvg-region" d="M356.06,555.39l-76.24,0.8c-5.34,1.64-8.15,4.69-6.15,10.44c16.34,13.75,28.74,29.33,34.67,47.89l48.63-0.52   L356.06,555.39z" title="602.62 M2" data-id="A-108"></path>
                                        <path class="st2-34 mapsvg-region" d="M503.72,554l-49.3,0.5l0.8,58.56l43.57-0.44C499.33,591.29,500.77,571.43,503.72,554z" title="419.66 M2" data-id="A-104"></path>
                                        <path class="st2-34 mapsvg-region" d="M357.72,672.58L356.96,614l-48.63,0.52c5.48,16.7,6.97,32.9,0,48.04c-2.47,4.93-1.07,8.46,5.78,10.03H357.72z   " title="425.26 M2" data-id="A-109"></path>
                                        <path class="st2-34 mapsvg-region" d="M502.22,671.28l-46.28,0.44l-0.72-58.67l43.57-0.44C498.65,632.4,499.77,651.96,502.22,671.28z" title="405.42 M2" data-id="A-113"></path>
                                        <path class="st2-34 mapsvg-region" d="M533.63,670.89c-2.3-19.61-3.48-39.05-3.37-58.28l44.63-0.69l0.75,58.58L533.63,670.89z" title="403.68 M2" data-id="A-114"></path>
                                        <path class="st2-34 mapsvg-region" d="M958.56,666.85l-55.41,0.44l-0.65-58.46l49.46-0.5c2.62,17.92,6.22,34.92,11.3,50.52   C964.12,663.37,962.7,666.15,958.56,666.85z" title="503.09 M2" data-id="A-125"></path>
                                        <path class="st2-34 mapsvg-region" d="M946.11,549.67c0.72,18.78,2.75,38.39,5.85,58.67l-49.46,0.5l-0.92-58.61L946.11,549.67z" title="425.17 M2" data-id="A-92"></path>
                                        <path class="st2-34 mapsvg-region" d="M535.44,553.69c-3.18,20.55-5.13,40.33-5.19,58.93l44.63-0.69l-0.75-58.58L535.44,553.69z" title="388.18 M2" data-id="A-103"></path>
                                        <path class="st2-34 mapsvg-region" d="M595.61,408.94c-12.22,16.32-23.68,36.56-34.76,58.72l65.33-0.52l-0.71-58.55L595.61,408.94z" title="446.97 M2" data-id="A-67"></path>
                                        <path class="st2-34 mapsvg-region" d="M889,406.06l-67.08,0.64l0.75,58.69l45.28-0.5c3.74-16.74,11.9-31.79,24.83-45   C899.44,414.56,898.11,406.69,889,406.06z" title="546.99 M2" data-id="A-60"></path>
                                        <path class="st2-34 mapsvg-region" d="M823.44,524l42.72-0.36c9.91-2.66,9.23-6.62,7.14-10.75c-8.46-13.4-9.17-29.82-5.36-48l-45.28,0.5L823.44,524   z" title="415.3 M2" data-id="A-91"></path>
                                        <path class="st2-34 mapsvg-region" d="M540.89,526.5c4.17-18.76,11.03-38.44,19.96-58.83l32.67-0.26l0.67,58.67L540.89,526.5z" title="404.87 M2" data-id="A-83"></path>
                                        <path class="st2-34 mapsvg-region" d="M609.37,381.74c6.72-20.49,6.83-41.65,0.91-63.41l36.94-0.28l0.83,63.22L609.37,381.74z" title="343.31 M2" data-id="A-51"></path>
                                        <path class="st2-34 mapsvg-region" d="M925.33,378.67L880,379.18l-0.83-63.35l71.11-0.64C945.99,337.6,937.72,358.77,925.33,378.67z" title="598.37 M2" data-id="A-59"></path>
                                        <path class="st2-34 mapsvg-region" d="M568.83,255.5c19.04,16.41,33.85,36.48,41.44,62.83l36.94-0.28l-0.81-63.2L568.83,255.5z" title="521.12 M2" data-id="A-38"></path>
                                        <path d="M 1055.3699951171875 165.22000122070312 L 982.6699829101562 165.94000244140625 L 983.2999877929688 257.29998779296875 L 1056.56005859375 256.70001220703125 Z" class="st2-34 mapsvg-region" title="1040.57 M2" data-id="A-28"></path>
                                        <path d="M 983.2999877929688 224.47999572753906 L 950.5599975585938 224.8300018310547 L 949.8300170898438 166.3300018310547 L 982.6699829101562 165.94000244140625 Z" class="st2-34 mapsvg-region" data-id="A-27" title="300 M2"></path>
                                        <path d="M 950.5599975585938 224.8300018310547 L 917.8599853515625 225.13999938964844 L 917.1099853515625 166.6300048828125 L 949.8300170898438 166.3300018310547 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-26"></path>
                                        <path d="M 917.8599853515625 225.13999938964844 L 885.1699829101562 225.47000122070312 L 884.3699951171875 166.88999938964844 L 917.1099853515625 166.6300048828125 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-25"></path>
                                        <path d="M 885.1699829101562 225.47000122070312 L 852.3900146484375 225.69000244140625 L 851.5900268554688 167.25999450683594 L 884.3699951171875 166.88999938964844 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-24"></path>
                                        <path d="M 852.3900146484375 225.69000244140625 L 819.5900268554688 226.1300048828125 L 818.9400024414062 167.55999755859375 L 851.5900268554688 167.25999450683594 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-23"></path>
                                        <path d="M 819.5900268554688 226.1300048828125 L 786.8900146484375 226.4199981689453 L 786.0800170898438 167.85000610351562 L 818.9400024414062 167.55999755859375 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-22"></path>
                                        <path d="M 786.8900146484375 226.4199981689453 L 754.1099853515625 226.6300048828125 L 753.3900146484375 168.1699981689453 L 786.0800170898438 167.85000610351562 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-21"></path>
                                        <path d="M 178.5 368.5 L 103.5 375.5 L 99.5 340.5 L 149.72792053222656 335.81207275390625 L 174.5 333.5 Z" class="st2-34 mapsvg-region" title="414.19 M2" data-id="A-1"></path>
                                        <path d="M 170.5 298.5 L 174.5 333.5 L 99.5 340.5 L 95.5 305.5 Z" class="st2-34 mapsvg-region" title="413.64 M2" data-id="A-2"></path>
                                        <path d="M 164.5 263.5 L 170.5 298.5 L 95.5 305.5 L 91.5 270.5 Z" class="st2-34 mapsvg-region" title="409.72 M2" data-id="A-3"></path>
                                        <path d="M 159.5 232.5 L 164.5 263.5 L 91.5 270.5 L 77.5 174.5 L 158.5 173.5 Z" class="st2-34 mapsvg-region" title="1097.13 M2" data-id="A-4"></path>
                                        <path d="M 192.5 232.5 L 159.5 232.5 L 158.5 173.5 L 190.85000610351562 173.5 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-5"></path>
                                        <path d="M 224.5 231.5 L 192.5 232.5 L 190.85000610351562 173.5 L 223.88999938964844 173.5 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-6"></path>
                                        <path d="M 223.88999938964844 173.5 L 224.5 231.5 L 257.5199890136719 231.38999938964844 L 256.82000732421875 172.86000061035156 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-7"></path>
                                        <path d="M 290.3800048828125 231.10000610351562 L 257.5199890136719 231.38999938964844 L 256.82000732421875 172.86000061035156 L 289.55999755859375 172.61000061035156 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-8"></path>
                                        <path d="M 323.0799865722656 230.8300018310547 L 290.3800048828125 231.10000610351562 L 289.55999755859375 172.61000061035156 L 322.2799987792969 172.3300018310547 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-9"></path>
                                        <path d="M 355.6700134277344 230.3300018310547 L 323.0799865722656 230.8300018310547 L 322.2799987792969 172.3300018310547 L 355.0400085449219 171.92999267578125 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-10"></path>
                                        <path d="M 388.55999755859375 230.14999389648438 L 355.6700134277344 230.3300018310547 L 355.0400085449219 171.92999267578125 L 387.79998779296875 171.64999389648438 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-11"></path>
                                        <path d="M 421.30999755859375 229.8800048828125 L 388.55999755859375 230.14999389648438 L 387.79998779296875 171.64999389648438 L 420.55999755859375 171.41000366210938 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-12"></path>
                                        <path d="M 454.1499938964844 229.58999633789062 L 421.30999755859375 229.8800048828125 L 420.55999755859375 171.41000366210938 L 453.32000732421875 171.02000427246094 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-13"></path>
                                        <path d="M 623.1400146484375 227.94000244140625 L 590.4500122070312 228.3300018310547 L 589.6199951171875 169.69000244140625 L 622.3300170898438 169.41000366210938 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-16"></path>
                                        <path d="M 655.8300170898438 227.6699981689453 L 623.1400146484375 227.94000244140625 L 622.3300170898438 169.41000366210938 L 655.1900024414062 169.08999633789062 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-17"></path>
                                        <path d="M 688.6699829101562 227.3300018310547 L 655.8300170898438 227.6699981689453 L 655.1900024414062 169.08999633789062 L 687.8300170898438 168.8300018310547 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-18"></path>
                                        <path d="M 721.4400024414062 227 L 688.6699829101562 227.3300018310547 L 687.8300170898438 168.8300018310547 L 720.6300048828125 168.41000366210938 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-19"></path>
                                        <path d="M 754.1099853515625 226.6300048828125 L 721.4400024414062 227 L 720.6300048828125 168.41000366210938 L 753.3900146484375 168.1699981689453 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-20"></path>
                                        <path d="M 912.5 252.27999877929688 L 912.8936767578125 282.27740478515625 L 913.3300170898438 315.5299987792969 L 950.280029296875 315.19000244140625 L 952.2999877929688 251.92999267578125 Z" class="st2-34 mapsvg-region" title="376.65 M2" data-id="A-29"></path>
                                        <path d="M 878.3699951171875 252.57000732421875 L 879.1699829101562 315.8299865722656 L 913.3300170898438 315.5299987792969 L 912.5 252.27999877929688 Z" class="st2-34 mapsvg-region" title="337.5 M2" data-id="A-30"></path>
                                        <path d="M 844.280029296875 252.8300018310547 L 845.0700073242188 316.2200012207031 L 879.1699829101562 315.8299865722656 L 878.3699951171875 252.57000732421875 Z" class="st2-34 mapsvg-region" title="337.5 M2" data-id="A-31"></path>
                                        <path d="M 810.219970703125 253.25 L 811.0599975585938 316.5299987792969 L 845.0700073242188 316.2200012207031 L 844.280029296875 252.8300018310547 Z" class="st2-34 mapsvg-region" title="337.5 M2" data-id="A-32"></path>
                                        <path d="M 777.3499755859375 253.57000732421875 L 778.1400146484375 316.8599853515625 L 811.0599975585938 316.5299987792969 L 810.219970703125 253.25 Z" class="st2-34 mapsvg-region" title="324 M2" data-id="A-33"></path>
                                        <path d="M 744.6900024414062 253.8300018310547 L 745.52001953125 317.1499938964844 L 778.1400146484375 316.8599853515625 L 777.3499755859375 253.57000732421875 Z" class="st2-34 mapsvg-region" title="324 M2" data-id="A-34"></path>
                                        <path d="M 711.9600219726562 254.14999389648438 L 712.780029296875 317.5 L 745.52001953125 317.1499938964844 L 744.6900024414062 253.8300018310547 Z" class="st2-34 mapsvg-region" title="324 M2" data-id="A-35"></path>
                                        <path d="M 679.1500244140625 254.41000366210938 L 680 317.739990234375 L 712.780029296875 317.5 L 711.9600219726562 254.14999389648438 Z" class="st2-34 mapsvg-region" title="324 M2" data-id="A-36"></path>
                                        <path d="M 646.4099731445312 254.85000610351562 L 647.219970703125 318.05999755859375 L 680 317.739990234375 L 679.1500244140625 254.41000366210938 Z" class="st2-34 mapsvg-region" title="324 M2" data-id="A-37"></path>
                                        <path d="M 360.44000244140625 257.5 L 361.05999755859375 306.739990234375 L 399.2799987792969 306.3599853515625 L 398.6099853515625 257.1099853515625 Z" class="st2-34 mapsvg-region" title="294 M2" data-id="A-40"></path>
                                        <path d="M 322.1000061035156 257.8299865722656 L 322.8299865722656 307.05999755859375 L 361.05999755859375 306.739990234375 L 360.44000244140625 257.5 Z" class="st2-34 mapsvg-region" title="294 M2" data-id="A-41"></path>
                                        <path d="M 283.92999267578125 258.17999267578125 L 284.6199951171875 307.3999938964844 L 322.8299865722656 307.05999755859375 L 322.1000061035156 257.8299865722656 Z" class="st2-34 mapsvg-region" title="294 M2" data-id="A-42"></path>
                                        <path d="M 245.74000549316406 258.5400085449219 L 246.38999938964844 307.7200012207031 L 284.6199951171875 307.3999938964844 L 283.92999267578125 258.17999267578125 Z" class="st2-34 mapsvg-region" title="294 M2" data-id="A-43"></path>
                                        <path d="M 195.88999938964844 259.1099853515625 L 203.27999877929688 308.1099853515625 L 246.38999938964844 307.7200012207031 L 245.74000549316406 258.5400085449219 Z" class="st2-34 mapsvg-region" title="357.06 M2" data-id="A-44"></path>
                                        <path d="M 210.0399932861328 369.0400085449219 L 203.27999877929688 308.1099853515625 L 246.38999938964844 307.7200012207031 L 247.27999877929688 363.7799987792969 Z" class="st2-34 mapsvg-region" title="365.17 M2" data-id="A-45"></path>
                                        <path d="M 285.3299865722656 359.8900146484375 L 247.27999877929688 363.7799987792969 L 246.38999938964844 307.7200012207031 L 284.6199951171875 307.3999938964844 Z" class="st2-34 mapsvg-region" title="324.06 M2" data-id="A-46"></path>
                                        <path d="M 323.4599914550781 358.05999755859375 L 285.3299865722656 359.8900146484375 L 284.6199951171875 307.3999938964844 L 322.8299865722656 307.05999755859375 Z" class="st2-34 mapsvg-region" title="308.9 M2" data-id="A-47"></path>
                                        <path d="M 361.55999755859375 357.55999755859375 L 323.4599914550781 358.05999755859375 L 322.8299865722656 307.05999755859375 L 361.05999755859375 306.739990234375 Z" class="st2-34 mapsvg-region" title="303.47 M2" data-id="A-48"></path>
                                        <path d="M 399.8599853515625 358.69000244140625 L 361.55999755859375 357.55999755859375 L 361.05999755859375 306.739990234375 L 399.2799987792969 306.3599853515625 Z" class="st2-34 mapsvg-region" title="307.71 M2" data-id="A-49"></path>
                                        <path d="M 680.6300048828125 381 L 648.0599975585938 381.2799987792969 L 647.219970703125 318.05999755859375 L 680 317.739990234375 Z" class="st2-34 mapsvg-region" title="324 M2" data-id="A-52"></path>
                                        <path d="M 713.52001953125 380.739990234375 L 680.6300048828125 381 L 680 317.739990234375 L 712.780029296875 317.5 Z" class="st2-34 mapsvg-region" title="324 M2" data-id="A-53"></path>
                                        <path d="M 746.2999877929688 380.4599914550781 L 713.52001953125 380.739990234375 L 712.780029296875 317.5 L 745.52001953125 317.1499938964844 Z" class="st2-34 mapsvg-region" title="324 M2" data-id="A-54"></path>
                                        <path d="M 779.0800170898438 380.0799865722656 L 746.2999877929688 380.4599914550781 L 745.52001953125 317.1499938964844 L 778.1400146484375 316.8599853515625 Z" class="st2-34 mapsvg-region" title="324 M2" data-id="A-55"></path>
                                        <path d="M 811.8099975585938 379.8599853515625 L 779.0800170898438 380.0799865722656 L 778.1400146484375 316.8599853515625 L 811.0599975585938 316.5299987792969 Z" class="st2-34 mapsvg-region" title="324 M2" data-id="A-56"></path>
                                        <path d="M 845.9299926757812 379.5 L 811.8099975585938 379.8599853515625 L 811.0599975585938 316.5299987792969 L 845.0700073242188 316.2200012207031 Z" class="st2-34 mapsvg-region" title="337.5 M2" data-id="A-57"></path>
                                        <path d="M 880 379.17999267578125 L 845.9299926757812 379.5 L 845.0700073242188 316.2200012207031 L 879.1699829101562 315.8299865722656 Z" class="st2-34 mapsvg-region" title="337.5 M2" data-id="A-58"></path>
                                        <path d="M 1057 289.55999755859375 L 1056.56005859375 256.70001220703125 L 983.2999877929688 257.29998779296875 L 982.1699829101562 290.3299865722656 Z" class="st2-34 mapsvg-region" title="380.31 M2" data-id="A-153"></path>
                                        <path d="M 1057.31005859375 317.7099914550781 L 1057 289.55999755859375 L 982.1699829101562 290.3299865722656 L 981.6400146484375 318.4200134277344 Z" class="st2-34 mapsvg-region" title="331.26 M2" data-id="A-152"></path>
                                        <path d="M 1057.6700439453125 345.79998779296875 L 1057.31005859375 317.7099914550781 L 981.6400146484375 318.4200134277344 L 982.1099853515625 346.55999755859375 Z" class="st2-34 mapsvg-region" title="332.56 M2" data-id="A-151"></path>
                                        <path d="M 821.9199829101562 406.69000244140625 L 789.260009765625 407.0400085449219 L 789.97998046875 465.70001220703125 L 822.6699829101562 465.3900146484375 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-61"></path>
                                        <path d="M 789.260009765625 407.0400085449219 L 756.4099731445312 407.4100036621094 L 757.260009765625 465.92999267578125 L 789.97998046875 465.70001220703125 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-62"></path>
                                        <path d="M 756.4099731445312 407.4100036621094 L 723.6900024414062 407.69000244140625 L 724.3800048828125 466.30999755859375 L 757.260009765625 465.92999267578125 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-63"></path>
                                        <path d="M 723.6900024414062 407.69000244140625 L 691.0599975585938 408 L 691.719970703125 466.57000732421875 L 724.3800048828125 466.30999755859375 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-64"></path>
                                        <path d="M 691.0599975585938 408 L 658.1699829101562 408.260009765625 L 658.9400024414062 466.92999267578125 L 691.719970703125 466.57000732421875 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-65"></path>
                                        <path d="M 658.1699829101562 408.260009765625 L 625.469970703125 408.6000061035156 L 626.1900024414062 467.1499938964844 L 658.9400024414062 466.92999267578125 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-66"></path>
                                        <path d="M 398.05999755859375 410.5 L 398.9800109863281 471.739990234375 L 363.5400085449219 472.0899963378906 L 362.69000244140625 409.239990234375 Z" class="st2-34 mapsvg-region" title="344.71 M2" data-id="A-71"></path>
                                        <path d="M 433.67999267578125 413.05999755859375 L 434.4200134277344 471.3999938964844 L 398.9800109863281 471.739990234375 L 398.05999755859375 410.5 Z" class="st2-34 mapsvg-region" title="332.23 M2" data-id="A-70"></path>
                                        <path d="M 362.69000244140625 409.239990234375 L 363.5400085449219 472.0899963378906 L 327.94000244140625 472.3299865722656 L 327.260009765625 409.6499938964844 Z" class="st2-34 mapsvg-region" title="348.75 M2" data-id="A-72"></path>
                                        <path d="M 327.260009765625 409.6499938964844 L 327.94000244140625 472.3299865722656 L 292.55999755859375 472.3299865722656 L 291.739990234375 411.4599914550781 Z" class="st2-34 mapsvg-region" title="344.39 M2" data-id="A-73"></path>
                                        <path d="M 291.739990234375 411.4599914550781 L 292.55999755859375 472.3299865722656 L 257.1499938964844 472.7900085449219 L 256.2200012207031 414.8900146484375 Z" class="st2-34 mapsvg-region" title="331.61 M2" data-id="A-74"></path>
                                        <path d="M 214.30999755859375 421 L 215.86000061035156 473.3299865722656 L 257.1499938964844 472.7900085449219 L 256.2200012207031 414.8900146484375 Z" class="st2-34 mapsvg-region" title="361.84 M2" data-id="A-75"></path>
                                        <path d="M 328.7200012207031 528.5800170898438 L 293.2200012207031 528.9299926757812 L 292.55999755859375 472.3299865722656 L 327.94000244140625 472.3299865722656 Z" class="st2-34 mapsvg-region" title="312 M2" data-id="A-77"></path>
                                        <path d="M 364.1400146484375 528.1900024414062 L 328.7200012207031 528.5800170898438 L 327.94000244140625 472.3299865722656 L 363.5400085449219 472.0899963378906 Z" class="st2-34 mapsvg-region" title="312 M2" data-id="A-78"></path>
                                        <path d="M 399.6700134277344 528.030029296875 L 364.1400146484375 528.1900024414062 L 363.5400085449219 472.0899963378906 L 398.9800109863281 471.739990234375 Z" class="st2-34 mapsvg-region" title="312 M2" data-id="A-79"></path>
                                        <path d="M 435.1700134277344 527.6500244140625 L 399.6700134277344 528.030029296875 L 398.9800109863281 471.739990234375 L 434.4200134277344 471.3999938964844 Z" class="st2-34 mapsvg-region" title="312 M2" data-id="A-80"></path>
                                        <path d="M 470.6700134277344 527.3099975585938 L 435.1700134277344 527.6500244140625 L 434.4200134277344 471.3999938964844 L 469.9599914550781 471.0400085449219 Z" class="st2-34 mapsvg-region" title="312 M2" data-id="A-81"></path>
                                        <path d="M 594.1900024414062 526.0700073242188 L 593.52001953125 467.4100036621094 L 626.1900024414062 467.1499938964844 L 627 525.780029296875 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-84"></path>
                                        <path d="M 627 525.780029296875 L 626.1900024414062 467.1499938964844 L 658.9400024414062 466.92999267578125 L 659.6099853515625 525.4400024414062 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-85"></path>
                                        <path d="M 659.6099853515625 525.4400024414062 L 658.9400024414062 466.92999267578125 L 691.719970703125 466.57000732421875 L 692.3699951171875 525.219970703125 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-86"></path>
                                        <path d="M 692.3699951171875 525.219970703125 L 691.719970703125 466.57000732421875 L 724.3800048828125 466.30999755859375 L 724.9213256835938 503.991455078125 L 725.219970703125 524.780029296875 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-87"></path>
                                        <path d="M 725.219970703125 524.780029296875 L 724.3800048828125 466.30999755859375 L 757.260009765625 465.92999267578125 L 757.9400024414062 524.6099853515625 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-88"></path>
                                        <path d="M 757.9400024414062 524.6099853515625 L 757.260009765625 465.92999267578125 L 789.97998046875 465.70001220703125 L 790.6900024414062 524.239990234375 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-89"></path>
                                        <path d="M 790.6900024414062 524.239990234375 L 789.97998046875 465.70001220703125 L 822.6699829101562 465.3900146484375 L 823.4400024414062 524 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-90"></path>
                                        <path d="M 868.8499755859375 550.52001953125 L 869.5599975585938 609.1099853515625 L 902.5 608.8300170898438 L 901.5800170898438 550.219970703125 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-93"></path>
                                        <path d="M 836.1099853515625 550.8300170898438 L 836.8300170898438 609.3900146484375 L 869.5599975585938 609.1099853515625 L 868.8499755859375 550.52001953125 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-94"></path>
                                        <path d="M 803.3300170898438 551.219970703125 L 804.1099853515625 609.719970703125 L 836.8300170898438 609.3900146484375 L 836.1099853515625 550.8300170898438 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-95"></path>
                                        <path d="M 770.6099853515625 551.4400024414062 L 771.3800048828125 610.0700073242188 L 804.1099853515625 609.719970703125 L 803.3300170898438 551.219970703125 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-96"></path>
                                        <path d="M 737.8499755859375 551.7999877929688 L 738.6099853515625 610.3300170898438 L 771.3800048828125 610.0700073242188 L 770.6099853515625 551.4400024414062 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-97"></path>
                                        <path d="M 705.0700073242188 552.1099853515625 L 705.8499755859375 610.739990234375 L 738.6099853515625 610.3300170898438 L 737.8499755859375 551.7999877929688 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-98"></path>
                                        <path d="M 672.3900146484375 552.3599853515625 L 673.1799926757812 611.0599975585938 L 705.8499755859375 610.739990234375 L 705.0700073242188 552.1099853515625 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-99"></path>
                                        <path d="M 639.5800170898438 552.6900024414062 L 640.4099731445312 611.4099731445312 L 673.1799926757812 611.0599975585938 L 672.3900146484375 552.3599853515625 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-100"></path>
                                        <path d="M 606.780029296875 553 L 607.5599975585938 611.6099853515625 L 640.4099731445312 611.4099731445312 L 639.5800170898438 552.6900024414062 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-101"></path>
                                        <path d="M 574.1400146484375 553.3300170898438 L 574.8900146484375 611.9199829101562 L 607.5599975585938 611.6099853515625 L 606.780029296875 553 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-102"></path>
                                        <path d="M 454.42999267578125 554.5 L 421.70001220703125 554.72998046875 L 422.3900146484375 613.3900146484375 L 455.2200012207031 613.0599975585938 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-105"></path>
                                        <path d="M 421.70001220703125 554.72998046875 L 388.9599914550781 555.1300048828125 L 389.7799987792969 613.5599975585938 L 422.3900146484375 613.3900146484375 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-106"></path>
                                        <path d="M 388.9599914550781 555.1300048828125 L 389.7799987792969 613.5599975585938 L 356.9599914550781 614 L 356.05999755859375 555.3900146484375 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-107"></path>
                                        <path d="M 390.3900146484375 672.280029296875 L 357.7200012207031 672.5800170898438 L 356.9599914550781 614 L 389.7799987792969 613.5599975585938 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-110"></path>
                                        <path d="M 423.2799987792969 671.8900146484375 L 390.3900146484375 672.280029296875 L 389.7799987792969 613.5599975585938 L 422.3900146484375 613.3900146484375 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-111"></path>
                                        <path d="M 455.94000244140625 671.719970703125 L 423.2799987792969 671.8900146484375 L 422.3900146484375 613.3900146484375 L 455.2200012207031 613.0599975585938 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-112"></path>
                                        <path d="M 608.4400024414062 670.1900024414062 L 575.6400146484375 670.5 L 574.8900146484375 611.9199829101562 L 607.5599975585938 611.6099853515625 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-115"></path>
                                        <path d="M 641.1900024414062 669.9400024414062 L 608.4400024414062 670.1900024414062 L 607.5599975585938 611.6099853515625 L 640.4099731445312 611.4099731445312 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-116"></path>
                                        <path d="M 673.780029296875 669.5800170898438 L 641.1900024414062 669.9400024414062 L 640.4099731445312 611.4099731445312 L 673.1799926757812 611.0599975585938 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-117"></path>
                                        <path d="M 706.6699829101562 669.3099975585938 L 673.780029296875 669.5800170898438 L 673.1799926757812 611.0599975585938 L 705.8499755859375 610.739990234375 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-118"></path>
                                        <path d="M 739.4400024414062 668.9600219726562 L 706.6699829101562 669.3099975585938 L 705.8499755859375 610.739990234375 L 738.6099853515625 610.3300170898438 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-119"></path>
                                        <path d="M 772.260009765625 668.5599975585938 L 739.4400024414062 668.9600219726562 L 738.6099853515625 610.3300170898438 L 771.3800048828125 610.0700073242188 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-120"></path>
                                        <path d="M 804.8900146484375 668.3300170898438 L 772.260009765625 668.5599975585938 L 771.3800048828125 610.0700073242188 L 804.1099853515625 609.719970703125 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-121"></path>
                                        <path d="M 837.5 667.9400024414062 L 804.8900146484375 668.3300170898438 L 804.1099853515625 609.719970703125 L 836.8300170898438 609.3900146484375 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-122"></path>
                                        <path d="M 870.4400024414062 667.7000122070312 L 837.5 667.9400024414062 L 836.8300170898438 609.3900146484375 L 869.5599975585938 609.1099853515625 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-123"></path>
                                        <path d="M 903.1500244140625 667.2999877929688 L 870.4400024414062 667.7000122070312 L 869.5599975585938 609.1099853515625 L 902.5 608.8300170898438 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-124"></path>
                                        <path d="M 538.0800170898438 697.9400024414062 L 602.8900146484375 697.3300170898438 L 603.7000122070312 755.9299926757812 L 553.4000244140625 756.4299926757812 Z" class="st2-34 mapsvg-region" title="532.68 M2" data-id="A-126"></path>
                                        <path d="M 602.8900146484375 697.3300170898438 L 635.760009765625 696.9299926757812 L 636.5599975585938 755.6400146484375 L 603.7000122070312 755.9299926757812 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-127"></path>
                                        <path d="M 635.760009765625 696.9299926757812 L 668.5499877929688 696.7000122070312 L 669.27001953125 755.280029296875 L 636.5599975585938 755.6400146484375 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-128"></path>
                                        <path d="M 668.5499877929688 696.7000122070312 L 701.239990234375 696.3499755859375 L 701.97998046875 754.97998046875 L 669.27001953125 755.280029296875 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-129"></path>
                                        <path d="M 701.239990234375 696.3499755859375 L 734 696.1400146484375 L 734.760009765625 754.6699829101562 L 701.97998046875 754.97998046875 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-130"></path>
                                        <path d="M 734 696.1400146484375 L 766.8099975585938 695.780029296875 L 767.5399780273438 754.4199829101562 L 734.760009765625 754.6699829101562 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-131"></path>
                                        <path d="M 766.8099975585938 695.780029296875 L 799.5 695.3900146484375 L 800.2999877929688 754 L 767.5399780273438 754.4199829101562 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-132"></path>
                                        <path d="M 799.5 695.3900146484375 L 832.1099853515625 695.1099853515625 L 833.0700073242188 753.719970703125 L 800.2999877929688 754 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-133"></path>
                                        <path d="M 832.1099853515625 695.1099853515625 L 865.02001953125 694.8099975585938 L 865.75 753.3900146484375 L 833.0700073242188 753.719970703125 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-134"></path>
                                        <path d="M 865.02001953125 694.8099975585938 L 897.6699829101562 694.5599975585938 L 898.5800170898438 753.0599975585938 L 865.75 753.3900146484375 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-135"></path>
                                        <path d="M 897.6699829101562 694.5599975585938 L 930.5 694.219970703125 L 931.3099975585938 752.780029296875 L 898.5800170898438 753.0599975585938 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-136"></path>
                                        <path d="M 930.5 694.219970703125 L 963.260009765625 693.8900146484375 L 963.969970703125 752.469970703125 L 931.3099975585938 752.780029296875 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-137"></path>
                                        <path d="M 963.260009765625 693.8900146484375 L 995.9299926757812 693.8900146484375 L 996.780029296875 752.0399780273438 L 963.969970703125 752.469970703125 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-138"></path>
                                        <path d="M 1062.93994140625 751.5399780273438 L 1061.739990234375 660.0399780273438 L 995.4400024414062 660.7000122070312 L 996.780029296875 752.0399780273438 Z" class="st2-34 mapsvg-region" title="944.88 M2" data-id="A-139"></path>
                                        <path d="M 1061.739990234375 660.0399780273438 L 1061.3699951171875 627.219970703125 L 987.8900146484375 628.1099853515625 L 995.4400024414062 660.7000122070312 Z" class="st2-34 mapsvg-region" title="358.34 M2" data-id="A-140"></path>
                                        <path d="M 1061.3699951171875 627.219970703125 L 1060.9300537109375 599.0700073242188 L 983.52001953125 599.8099975585938 L 987.8900146484375 628.1099853515625 Z" class="st2-34 mapsvg-region" title="332.09 M2" data-id="A-141"></path>
                                        <path d="M 1060.9300537109375 599.0700073242188 L 1060.56005859375 570.9299926757812 L 980.1900024414062 571.52001953125 L 983.52001953125 599.8099975585938 Z" class="st2-34 mapsvg-region" title="347.94 M2" data-id="A-142"></path>
                                        <path d="M 1060.56005859375 570.9299926757812 L 1060.1700439453125 542.780029296875 L 978.6699829101562 543.4400024414062 L 980.1900024414062 571.52001953125 Z" class="st2-34 mapsvg-region" title="357.08 M2" data-id="A-143"></path>
                                        <path d="M 1059.8900146484375 514.719970703125 L 1059.52001953125 486.4800109863281 L 980.0399780273438 487.2200012207031 L 978.6699829101562 515.3300170898438 Z" class="st2-34 mapsvg-region" title="353.5 M2" data-id="A-145"></path>
                                        <path d="M 1059.52001953125 486.4800109863281 L 1059.0699462890625 458.4800109863281 L 982.260009765625 459 L 980.0399780273438 487.2200012207031 Z" class="st2-34 mapsvg-region" title="343.44 M2" data-id="A-146"></path>
                                        <path d="M 1059.0699462890625 458.4800109863281 L 1058.760009765625 430.2799987792969 L 983.780029296875 430.9599914550781 L 982.260009765625 459 Z" class="st2-34 mapsvg-region" title="332.81 M2" data-id="A-147"></path>
                                        <path d="M 1058.760009765625 430.2799987792969 L 1058.4100341796875 402.0400085449219 L 984.219970703125 402.6700134277344 L 983.780029296875 430.9599914550781 Z" class="st2-34 mapsvg-region" title="327.15 M2" data-id="A-148"></path>
                                        <path d="M 1058.4100341796875 402.0400085449219 L 1058 374 L 983.4099731445312 374.739990234375 L 984.219970703125 402.6700134277344 Z" class="st2-34 mapsvg-region" title="326.74 M2" data-id="A-149"></path>
                                        <path d="M 1058 374 L 1057.6700439453125 345.79998779296875 L 982.1099853515625 346.55999755859375 L 983.4099731445312 374.739990234375 Z" class="st2-34 mapsvg-region" title="330.46 M2" data-id="A-150"></path>
                                        <path d="M 110.77999877929688 445.5899963378906 L 113.44000244140625 473.3699951171875 L 184.25999450683594 468.92999267578125 L 183.3699951171875 440.70001220703125 Z" class="st2-34 mapsvg-region" title="314.09 M2" data-id="A-154"></path>
                                        <path d="M 113.44000244140625 473.3699951171875 L 115.80999755859375 501.1300048828125 L 185.44000244140625 497.19000244140625 L 184.25999450683594 468.92999267578125 Z" class="st2-34 mapsvg-region" title="307.51 M2" data-id="A-155"></path>
                                        <path d="M 115.80999755859375 501.1300048828125 L 118.11000061035156 528.8900146484375 L 185.44000244140625 525.1099853515625 L 185.44000244140625 497.19000244140625 Z" class="st2-34 mapsvg-region" title="299.53 M2" data-id="A-156"></path>
                                        <path d="M 118.11000061035156 528.8900146484375 L 120 556.6699829101562 L 187 553.5599975585938 L 185.44000244140625 525.1099853515625 Z" class="st2-34 mapsvg-region" title="293.64 M2" data-id="A-157"></path>
                                        <path d="M 120 556.6699829101562 L 122 584.5599975585938 L 189.6699981689453 581.3300170898438 L 187 553.5599975585938 Z" class="st2-34 mapsvg-region" title="293.62 M2" data-id="A-158"></path>
                                        <path d="M 122 584.5599975585938 L 123.88999938964844 612.3300170898438 L 193.22000122070312 609.219970703125 L 189.6699981689453 581.3300170898438 Z" class="st2-34 mapsvg-region" title="299.46 M2" data-id="A-159"></path>
                                        <path d="M 123.88999938964844 612.3300170898438 L 125.33000183105469 640.4400024414062 L 198.3300018310547 637.3300170898438 L 193.22000122070312 609.219970703125 Z" class="st2-34 mapsvg-region" title="312.65 M2" data-id="A-160"></path>
                                        <path d="M 125.33000183105469 640.4400024414062 L 127.19000244140625 670.6099853515625 L 205.13999938964844 667.6400146484375 L 198.3300018310547 637.3300170898438 Z" class="st2-34 mapsvg-region" title="356.32 M2" data-id="A-161"></path>
                                        <path d="M 130.75 760.3900146484375 L 214.92999267578125 759.6699829101562 L 214.19000244140625 701 L 205.13999938964844 667.6400146484375 L 127.19000244140625 670.6099853515625 Z" class="st2-34 mapsvg-region" title="1189.61 M2" data-id="A-162"></path>
                                        <path d="M 215.41616336499527 701 L 248.26615420972183 700.5900268554688 L 248.94616214429215 759.280029296875 L 216.15615359937027 759.6699829101562 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-163"></path>
                                        <path d="M 247.0399932861328 700.5900268554688 L 279.75 700.4400024414062 L 280.4800109863281 758.9400024414062 L 247.72000122070312 759.280029296875 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-164"></path>
                                        <path d="M 279.75 700.4400024414062 L 312.3900146484375 700.0599975585938 L 313.2200012207031 758.719970703125 L 280.4800109863281 758.9400024414062 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-165"></path>
                                        <path d="M 312.3900146484375 700.0599975585938 L 345.260009765625 699.739990234375 L 345.9800109863281 758.4299926757812 L 313.2200012207031 758.719970703125 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-166"></path>
                                        <path d="M 345.260009765625 699.739990234375 L 377.8900146484375 699.4099731445312 L 378.8500061035156 758.0700073242188 L 345.9800109863281 758.4299926757812 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-167"></path>
                                        <path d="M 377.8900146484375 699.4099731445312 L 410.7200012207031 699.1400146484375 L 411.4800109863281 757.760009765625 L 378.8500061035156 758.0700073242188 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-168"></path>
                                        <path d="M 443.5400085449219 698.7999877929688 L 476.2200012207031 698.5700073242188 L 477.0400085449219 757.1099853515625 L 444.260009765625 757.3300170898438 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-170"></path>
                                        <path d="M 410.7200012207031 699.1400146484375 L 443.5400085449219 698.7999877929688 L 444.260009765625 757.3300170898438 L 411.4800109863281 757.760009765625 Z" class="st2-34 mapsvg-region" title="300 M2" data-id="A-169"></path>
                                        <path d="M 521.25 756.6799926757812 L 506.92999267578125 698.2100219726562 L 476.2200012207031 698.5700073242188 L 477.0400085449219 757.1099853515625 Z" class="st2-34 mapsvg-region" title="339.58 M2" data-id="A-171"></path>
                                    </g>
                                    <g id="AREAS_VERDES_selections">
                                        <path class="st2-34" d="M103.5,375.5l0.74,4.63c12.06,0.84,24.96,0.59,38.39-0.39c10.51-0.73,20.45-1.98,29.7-3.85   c3.67-1.15,5.96-3.42,6.17-7.39L103.5,375.5z" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="auto" data-bs-html="true" title="Áreas verdes y jardineras"></path>
                                        <path class="st2-34" d="M108.48,421.59l-1.7-18c26.43,0.85,49.85-0.9,71.04-4.59c3.27-0.5,4.41,3.56,1.7,4.59   C155.37,408.71,131.7,414.72,108.48,421.59z" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="auto" data-bs-html="true" title="Áreas verdes y jardineras"></path>
                                        <path class="st2-34" d="M110.78,445.59l72.59-4.89v-5.63c-0.98-4.6-4.21-6.76-9.93-6.22C153.59,432.19,115.52,445,110.78,445.59z" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="auto" data-bs-html="true" title="Áreas verdes y jardineras"></path>
                                        <path class="st2-34" d="M201.67,508.81c1.11,41.8,4.24,81.08,10.89,116.02c3.05,15.4,9.34,28.25,18.22,39.06   c22.78,21.67,61.78,10.22,65.33-17.11c1.77-27.73-8.91-47.17-25.56-62.64c-24.95-19.92-44.19-46.9-61.33-76.48   C208.44,504.19,201.67,504.63,201.67,508.81z" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="auto" data-bs-html="true" title="Áreas verdes y jardineras"></path>
                                        <path class="st2-34" d="M214.67,392.22c-3.89,2-1.75,5.19,1,4.67c86.32-13.58,170.69-15.48,252.72-3.39c7.06,1.5,8.24-4.76,0-4.78   C385.87,376.23,301.1,378.73,214.67,392.22z" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="auto" data-bs-html="true" title="Áreas verdes y jardineras"></path>
                                        <path class="st2-34" d="M469.96,281.51c-10.79,56.51,12.98,88.59,48.15,112.6c41.79,18.71,66.96-10.22,66.96-28.15   c9.48-43.41-16.24-86.3-51.85-105.78C507,247.67,479.67,256.67,469.96,281.51z" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="auto" data-bs-html="true" title="Áreas verdes y jardineras"></path>
                                        <path class="st2-34" d="M957,350.78c-11.93,30.89-29.51,55.35-48.67,76c-22.67,20.07-32.06,53-23.17,75.17   c15.31,25.94,53.91,25.06,68.06,1.35c6.84-11.99,10.97-25.75,12.89-40.96c2.37-37.3,2.22-74.22-0.44-110.78   C964.31,347.92,960.16,347.1,957,350.78z" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="auto" data-bs-html="true" title="Áreas verdes y jardineras"></path>
                                    </g>
                                    <g id="legend">
                                        <text class="st2-37" transform="translate(1170 715)">Premium</text>
                                        <rect class="st2-36" x="1120" y="690" width="28" height="28"></rect>
                                        <text class="st2-37" transform="translate(1170 765)">Estandar</text>
                                        <rect class="st2-35" x="1120" y="740" width="28" height="28"></rect>
                                    </g>
                                </svg>
                                <!-- SVG -->
                            </div>
                            <div class="leyend-status d-flex flex-row justify-content-around text-center fw-bold text-white mt-3">
                                <div class="small bg-sold rounded-pill px-2">VENDIDO</div>
                                <div class="small bg-available rounded-pill px-2">DISPONIBLE</div>
                                <div class="small bg-reserved rounded-pill px-2">RESERVADO</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item border border-success my-4">
                    <h2 class="accordion-header border-bottom border-success" id="heading-3">
                        <button class="accordion-button <?php if ($projectStage == 3) {
                                                            echo "";
                                                        } else {
                                                            echo "collapsed";
                                                        } ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapseStage-3" aria-expanded="false" aria-controls="collapseStage-3" title="Click para ver detalles y mapa">
                            <div class="container table-responsive-md">
                                <table class="table table-sm table-borderless caption-top">
                                    <caption class="h1 fw-bold text-center text-success text-nowrap">Etapa-3</caption>
                                    <thead>
                                        <tr>
                                            <!-- <th scope="col" class="h1 fw-bold text-success text-nowrap">Etapa-1</th> -->
                                            <th scope="col" class="h5 available-title text-center">Total de lotes</th>
                                            <th scope="col" class="h5 available-title text-center">Disponibles</th>
                                            <th scope="col" class="h5 available-title text-center">Fecha de entrega</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <!-- <th class="h2"></th> -->
                                            <td class="display-4 fw-bold text-center">187</td>
                                            <td class="display-4 fw-bold text-center" id="available-3"></td>
                                            <td class="display-4 fw-bold text-center">2025</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </button>
                    </h2>
                    <div id="collapseStage-3" class="accordion-collapse collapse <?php if ($projectStage == 3) {
                                                                                        echo "show";
                                                                                    } else {
                                                                                        echo "";
                                                                                    } ?>" aria-labelledby="heading-3" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <!-- Price Start -->
                            <div class="container-xxl py-1 px-0">
                                <!-- <div class="container"> -->
                                <!-- <div class="row g-0 gx-5 align-items-center">
                                    <div class="col-lg-12">
                                        <div class="text-center mx-auto mb-5">
                                            <p class="fw-bold small mb-2">Click para descargar</p>
                                            <a href="<?= STATIC_URL . 'img/anthia/brochure_anthia_etapa-3.pdf' ?>" class="btn btn-sm btn-outline-success text-decoration-none gx-5" type="button" download>
                                                <span class='mdi mdi-file-pdf-box mdi-18px text-danger me-1'></span>Brochure Anthia Etapa-3</a>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="row g-0 gx-5 align-items-center">
                                    <div class="col-lg-12">
                                        <div class="text-center mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                                            <h1 class="fw-bold text-decoration-underline">PRECIO DE LOTES</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-cols-1 row-cols-lg-1">
                                    <div class="col wow fadeInUp mb-5" data-wow-delay="0.1s">
                                        <div class="card border-5 h-100 shadow px-0">
                                            <div class="card-header text-center">
                                                <!-- <p class="h2">Precio por m<small><sup>2</sup></small></p> -->
                                                <p class="h2 text-success">Lote tipo</p>
                                            </div>
                                            <div class="card-body">
                                                <div class="row text-center">
                                                    <div class="col-6">
                                                        <p class="h6">Precio por m<small><sup>2</sup></small></p>
                                                        <p class="h4 text-success">418 <span class="h4">MXN</p>
                                                    </div>
                                                    <div class="col-6">
                                                        <p class="h6">Financiamiento hasta</p>
                                                        <p class="h4 text-success">60 <span class="h4">MSI</p>
                                                    </div>
                                                </div>
                                                <div class="row text-center">
                                                    <p class="h6">Enganche de</p>
                                                    <p class="h4 text-success">10%</h6>
                                                </div>
                                            </div>
                                            <!-- <div class="card-footer">
                                                    <p class="card-title text-center h4">Entrega Diciembre 2025</p>
                                                </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- </div> -->
                            <!-- Price End -->
                            <div class="loader-container text-center mb-2">
                                <span class="mdi mdi-vanish mdi-spin"></span>
                                Loading image...
                            </div>
                            <div class="row">
                                <img src="<?= STATIC_URL . 'img/wind-rose_ES.svg' ?>" alt="Brujula" height="80px" width="80px" style="transform: rotate(0deg);">
                            </div>
                            <div class="row mt-2">
                                <p class="small fw-bolder text-center">Para más información, <span class="mouse-touche">pase el mouse </span>sobre el lote</p>
                            </div>
                            <div class="row text-center" style="max-width: 800px; min-height: 200px;  ">
                                <!-- SVG -->
                                <svg x="0px" y="0px" viewBox="-50 0 4500 3000" style="transform: scale(1.1);" xml:space="preserve" preserveAspectRatio="xMidYMid meet">
                                    <defs>
                                        <style type="text/css">
                                            .st0 {
                                                display: none;
                                            }

                                            .st1 {
                                                fill: #D6EDD6;
                                            }

                                            .st2 {
                                                fill: #989898;
                                            }

                                            .st3 {
                                                fill: #909090;
                                            }

                                            .st4 {
                                                fill: none;
                                                stroke: #D9D9D9;
                                                stroke-width: 5;
                                                stroke-miterlimit: 10;
                                            }

                                            .st8 {
                                                fill: #22903E;
                                                stroke: #FFFFFF;
                                                stroke-width: 3;
                                                stroke-miterlimit: 10;
                                            }

                                            .st9 {
                                                fill: #80BC55;
                                                stroke: #FFFFFF;
                                                stroke-width: 3;
                                                stroke-miterlimit: 10;
                                            }

                                            .st10 {
                                                fill: #28AA5B;
                                                stroke: #FFFFFF;
                                                stroke-width: 3;
                                                stroke-miterlimit: 10;
                                            }

                                            .st11 {
                                                fill: #318635;
                                                stroke: #FFFFFF;
                                                stroke-width: 3;
                                                stroke-miterlimit: 10;
                                            }

                                            .st13 {
                                                fill: #428715;
                                            }

                                            .st14 {
                                                fill: #214414;
                                            }

                                            .st15 {
                                                fill: none;
                                                stroke: #FFFFFF;
                                                stroke-miterlimit: 10;
                                            }

                                            .st16 {
                                                fill: #748415;
                                            }

                                            .st17 {
                                                fill: #53601B;
                                            }

                                            .st18 {
                                                fill: #FFFFFF;
                                            }

                                            .st19 {
                                                font-family: 'Montserrat-Bold';
                                            }

                                            .st20 {
                                                font-size: 48px;
                                            }

                                            .st21 {
                                                letter-spacing: -3;
                                            }

                                            .st22 {
                                                letter-spacing: -1;
                                            }

                                            .st230 {
                                                fill: transparent
                                            }

                                            .st-24 {
                                                fill: rgba(135, 198, 116);
                                            }

                                            .st-25 {
                                                fill: rgba(5, 110, 57);
                                            }

                                            .st-26 {
                                                font-family: 'Montserrat-Bold';
                                                font-size: 58px;
                                                fill: #000;
                                            }

                                            .st-27 {
                                                font-family: 'Montserrat-Bold';
                                                font-size: 68px;
                                                fill: #000;
                                            }

                                            .st28 {
                                                fill: rgba(0, 0, 0, 0.1);
                                            }
                                        </style>
                                    </defs>
                                    <g id="BASE">
                                        <path class="st1" d="M654.78,824.99c-49.35-225.64-30.79-379.7,247.84-409.92c278.63-30.22,632.17,146.32,1148.33,147.59   c544.8,1.34,1066.99-153.81,1257.29-147.59c370.6,12.11,565.03,512.63,549.22,712.24c-15.81,199.61-117.72,380.44-133.01,640.97   c-13.75,234.33,101.7,337.91,44.66,592.64s-345.88,385.37-837.27,289.07c-350.97-92.81-964.06-239.91-1196.87-274.75   s-602.64,177.25-970.75-37.4c-194.56-113.44-89.71-464.04-59.11-805.09C732.41,1228.53,678.05,931.38,654.78,824.99z"></path>
                                    </g>
                                    <g id="CARRETERA">
                                        <path class="st2" title="Carretera" data-stroke-width="1.2" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-html="true" d="M 651.3433991537379 529.8375317348379 C 651.3433991537379 529.8375317348379 650.5533991537379 530.0575317348379 650.6133991537379 530.7175317348378 C 650.6833991537379 531.3775317348378 652.1533991537378 541.3275317348379 652.1533991537378 541.3275317348379 L 653.9833991537379 554.0375317348379 L 655.9733991537379 568.0675317348379 L 658.2233991537379 584.1675317348379 L 659.8533991537379 595.6775317348379 L 662.2833991537378 612.5575317348379 L 664.8433991537378 630.7575317348379 L 672.3033991537378 682.7575317348379 L 678.6533991537378 726.9975317348379 L 685.5333991537378 774.4075317348379 L 691.4133991537378 814.347531734838 L 694.4833991537379 828.047531734838 L 707.5133991537379 916.667531734838 L 725.9533991537379 1027.857531734838 L 740.4933991537379 1118.107531734838 L 756.0733991537379 1206.367531734838 L 777.153399153738 1328.777531734838 L 793.3333991537379 1417.037531734838 L 808.9833991537379 1507.937531734838 L 825.8133991537379 1606.527531734838 L 840.6033991537379 1696.747531734838 L 856.7233991537379 1796.077531734838 L 871.523399153738 1897.7075317348379 L 882.783399153738 1972.8875317348377 L 893.963399153738 2050.7975317348373 L 905.533399153738 2136.3775317348372 L 916.0433991537379 2213.9275317348374 L 922.923399153738 2264.747531734838 C 922.923399153738 2264.747531734838 923.193399153738 2266.7275317348376 925.973399153738 2266.8175317348378 C 928.753399153738 2266.907531734838 961.3533991537381 2266.5975317348384 961.3533991537381 2266.5975317348384 L 990.163399153738 2266.0575317348384 L 1127.613399153738 2264.8875317348384 L 1244.223399153738 2263.667531734838 L 1411.983399153738 2261.907531734838 L 1516.683399153738 2260.8075317348384 L 1659.513399153738 2259.3175317348387 L 1795.8633991537379 2257.1475317348386 L 1941.513399153738 2255.5675317348387 L 1996.7333991537378 2254.587531734838 L 2078.9333991537374 2254.0675317348387 L 2165.503399153738 2253.5275317348387 L 2248.503399153738 2252.657531734839 L 2332.373399153738 2251.787531734839 L 2415.373399153738 2250.917531734839 L 2749.1033991537374 2246.547531734839 L 3083.713399153738 2243.0575317348394 L 3250.583399153738 2241.3075317348394 L 3413.953399153738 2239.5575317348394 L 3408.713399153738 1787.887531734839 L 3394.7333991537375 501.00753173483895 L 3104.6533991537376 504.0675317348389 L 2853.543399153738 506.5175317348378 L 2610.0133991537373 509.8675317348378 L 2354.833399153738 512.6875317348379 L 2276.6533991537376 513.3975317348379 L 2193.5333991537377 514.107531734838 L 1941.353399153738 516.7575317348379 L 1692.173399153738 519.7575317348379 L 1488.883399153738 521.8775317348379 L 1256.833399153738 524.5175317348378 L 923.4833991537378 528.0475317348378 L 651.3433991537379 529.8375317348379 Z"></path>
                                    </g>
                                    <g id="AVENIDA">
                                        <path class="st3" title="Avenida" data-stroke-width="1.2" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="left" data-bs-offset="50, -45" data-bs-html="true" d="M818.47,611h-14.24l-69.68,1.05l-58.32,0.72c0,0,4.94,115.06,12,149.65c7.06,34.59,40.24,251.29,40.24,251.29   l57.18,357.88L840.71,1721l61.41,419.29l28.24,207.02l0.82,6.98l84.35-5.29l60.35-0.47h5.65l8.71-0.47l-5.65-39.94l-7.06-54.53   l-9.53-71.65l-12.35-87.41l-15.53-103.88l-19.41-132.33l-17.12-106.26l-18.18-109.59l-27-150.71l-24.71-141.53l-24.53-141.71   c0,0-19.24-113.12-20.65-127.94c-1.41-14.82-16.41-97.06-16.41-97.06l-15-102.88l-15-104.65l-16.41-113.47L818.47,611z"></path>
                                    </g>
                                    <g id="LINEAS_DIVISIÓN">
                                        <path class="st4" d="M807.53,611l15.53,115.41l29.65,200.82l25.06,156.71l12.71,83.65l25.06,142.94l26.12,147.18l25.41,150.71   l6.71,38.47l10.24,59.65l10.94,65.65c0,0,20.82,129.18,23.29,141.53c2.47,12.35,8.12,62.12,8.12,62.12l17.29,116.82   c0,0,12.35,80.47,14.12,102c1.76,21.53,12.71,86.47,12.71,86.47l8.12,67.41"></path>
                                        <path class="st4" d="M937.92,2354.12l-18.75-137.24l-17.65-123.53l-16.59-115.41l-22.24-152.12l-23.29-162.35l-21.53-129.88   l-20.47-126.35L776.94,1277l-20.47-128.47l-27.88-175.06l-24-156.35c0,0-14.47-75.53-16.24-107.65   c-1.76-32.12-5.66-96.74-5.66-96.74"></path>
                                    </g>
                                    <g id="AREAS_VERDES_AVENIDAS">
                                        <path class="st8" d="M745.6,615.97c0,0-0.22-4.09-0.72-4.08c-0.5,0.01-10.37-0.18-10.32,0.16c0.05,0.33,1.24,8.71,1.24,8.71   l10.01,70.05l13.58,95.09l12.52,87.61l11.34,73.81l29.79,190.12l6.92,42.79l9.2,52.36l11.91,69.45l13.27,76.93l16.06,89.15   l18.56,110.14c0,0,14.21,81.47,14.7,81.38s10.36-1.91,9.06-11.19c-1.3-9.28-2.71-15.28-2.71-15.28l-3.57-19.63l-7.38-41.47   l-8.59-48.82l-9.06-50.24l-10.59-58.59l-8.94-53.06l-9.76-57.18l-8.47-49.53l-8-45.88L825.41,1151l-8.35-54.47l-8.12-52.94   l-8.12-52.71l-8.47-54.59l-5.18-32.71l-7.53-50.35l-8.59-60.59l-8-55.29l-9.29-63.53l-6.59-47.29L745.6,615.97z"></path>
                                        <path class="st8" d="M912.96,1718.22l1.99,10.76l2.8,18.67l4.89,27.98l3.41,23.01l2.12,11.54l4.49,29.05l5.37,32.61l4,25.02   l4.21,26.46l4.25,30.58l4.46,28.44l4.33,29.37l4.57,33.95l5.88,36.92l4.22,30.18l3.88,27.31l3.57,27.13l3.53,26.78l4.96,36.2   l3.62,27.72l4.09,31.29l3.61,25.85l1.85,15.94l1.81,13.85c0,0,0.39,4.03,0.52,4.02c0.14-0.01,10.52-0.62,10.48-0.87   c-0.03-0.25-1.03-7.78-1.03-7.78l-1.44-10.84l-1.92-14.43l-2.91-21.92l-4.66-35.08l-5.86-44.15l-6.7-50.49l-3.47-26.14l-6.45-44.41   l-5.85-40.29l-7.53-51.82l-6.75-46.45l-6.77-45.02l-7.17-45.28l-6.9-43.55l-7.67-48.45l-6.92-43.73l-2.16-12.51   c0,0-2.69-7.8-10.76-7.1C910.65,1708.74,912.96,1718.22,912.96,1718.22z"></path>
                                        <path class="st9" d="M934.98,1356.29l9.12,52.96c-0.91,0.37,79.96-35.89,96.98-41.55l49.71-18.87l25.46-9.05c0,0,6.2-2.68,4.3-8.86   c-1.9-6.18-8.15-5.13-8.15-5.13l-33.81,9.23c-22.8,5.57-46.35,10.3-70.79,14.02c-12.51,2.26-50.16,6.17-59.98,6.49   C938.45,1355.84,934.98,1356.29,934.98,1356.29z"></path>
                                        <path class="st9" d="M1204.39,1296.97c0,0,23.08-8.01,106.32-27.67c83.24-19.66,258.51-49.46,360.14-47.17l50.22-1.08   c0,0,102.37,0.47,112.1,2.36c0,0,123.08,7.74,141.14,12.4l63.73,9.1c0,0,7.28,2.38,6.04,8.15c-1.24,5.77-9.18,5.95-9.18,5.95   l-22.83-3.95l-52.35-6.95c0,0-95.26-10.78-128.89-10.83l-53.88-1.9l-61.29-0.3c-146.2-2.16-316.71,24.81-506.73,75.13   c0,0-6.11,0.96-8.28-4.36C1198.47,1300.53,1204.39,1296.97,1204.39,1296.97z"></path>
                                        <path class="st9" d="M957.34,1480.45c43.4-22.2,95.24-43.51,153.22-64.16c0,0,6.39-1.95,11.46,0.74   c5.07,2.69,11.03,5.39,12.72,13.57s3.44,17.52,3.44,17.52l-180.84,33.34"></path>
                                        <path class="st9" d="M1105.86,1229.71c0,0,2.91,12.58-0.87,18.31s-6.08,9.98-18.58,13.45c-12.5,3.47-51.71,12.73-51.71,12.73   s-32.93,6.43-40.46,7.61c-7.53,1.18-44.48,4.37-44.48,4.37l-26.59,1.55l-4.95-29.22L1105.86,1229.71"></path>
                                    </g>
                                    <g id="AREAS_VERDES_DENTRO_DESARROLLO">
                                        <path class="st10" d="M1206.33,1607.13l13.91,112.69c11.02,76.49,26.23,152.83,45.29,229.03c0,0,32.96,112.54,87.84,129.93   c54.88,17.39,84.99-1.21,111.23-30.03c26.23-28.82,17.8-82.26,17.8-82.26s-4.81-44.54-28.01-85.37   c-23.2-40.83-48.17-63.86-48.17-63.86l-25.17-22.22c-31.89-29.25-59.75-59.09-83.71-89.5l-28.23-37.88l-16.96-25.36l-15.2-24.78   l-9.3-16.29c0,0-7.58-7.19-13.37-5C1208.47,1598.41,1206.33,1607.13,1206.33,1607.13z"></path>
                                        <path class="st10" d="M3324.66,1126.21c-31.37,103.85-128.15,225.19-140.42,237.38c-7.29,6.59-12.74,18.17-20.56,28.9   c-39.44,66.28-46.78,152.9-22.37,193.04c44.3,55.04,94.25,66.39,152.23,15.63c18.62-24.48,32.13-59.77,41.74-103.31   c6.1-30.59,8.59-63.63,9.69-97.6l3.29-98.29l-1.15-119.09l-2.34-53.28c0,0-1.96-9.21-9.18-9.84   C3328.35,1119.12,3324.66,1126.21,3324.66,1126.21z"></path>
                                        <path class="st10" d="M2037.02,918.87c0,0-39.23,117.99,28.82,236.29c68.05,118.31,142.82,132.42,180.61,120.42   c37.79-12,94.54-41.55,85.58-167.95c-8.96-126.4-87.54-218.61-137.54-244.5c-50.01-25.9-92.19-18.33-127.97,11.36   C2048.47,889.47,2037.02,918.87,2037.02,918.87z"></path>
                                    </g>
                                    <g id="stage_3">
                                        <path class=" mapsvg-region" d="M818.95,614.41l0.03,0.2l7.22,50.31l20.29,143.32l13.87,92.98l37-5.63l65.03-9.9l70.09-10.67l-8.03-32.54   l-11.99-48.33l-2.69-10.86l-2.62-173.86c0,0-188.77,1.31-188.71,1.75C818.49,611.61,818.95,614.41,818.95,614.41z" id="L-5" title="1010.2 M2"></path>
                                        <rect x="1293.69" y="2171.06" transform="matrix(0.9999 -0.0105 0.0105 0.9999 -23.6921 14.1783)" class=" mapsvg-region" width="83" height="173.86" id="L-178" title="300 M2"></rect>
                                        <rect x="1376.68" y="2170.19" transform="matrix(0.9999 -0.0104 0.0104 0.9999 -23.4325 14.8983)" class=" mapsvg-region" width="83.87" height="173.86" id="L-179" title="300 M2"></rect>
                                        <rect x="1460.55" y="2169.32" transform="matrix(0.9999 -0.0105 0.0105 0.9999 -23.6645 15.9346)" class=" mapsvg-region" width="83" height="173.86" id="L-180" title="300 M2"></rect>
                                        <rect x="1543.55" y="2168.44" transform="matrix(0.9999 -0.0104 0.0104 0.9999 -23.4112 16.6405)" class=" mapsvg-region" width="83.87" height="173.86" id="L-181" title="300 M2"></rect>
                                        <rect x="1627.42" y="2167.57" transform="matrix(0.9999 -0.0105 0.0105 0.9999 -23.6369 17.6908)" class=" mapsvg-region" width="83" height="173.86" id="L-182" title="300 M2"></rect>
                                        <rect x="1710.42" y="2166.69" transform="matrix(0.9999 -0.0104 0.0104 0.9999 -23.378 18.3742)" class=" mapsvg-region" width="83.87" height="173.86" id="L-183" title="300 M2"></rect>
                                        <path class=" mapsvg-region" d="M2245.88,2334.54l86.57-0.94l-0.65-42.78l-1.39-92.46l-0.58-38.21c0,0-122.31,0.52-122.23,0.87   c0.08,0.35,0.57,2.62,0.57,2.62l1.97,9.53l7.42,38.09l7.22,36.08l7.04,28.6l7.12,29.47L2245.88,2334.54z" id="L-141" title="379.66 M2"></path>
                                        <rect x="3082.04" y="2150.97" transform="matrix(0.9999 -0.0104 0.0104 0.9999 -23.1398 32.6597)" class=" mapsvg-region" width="83.87" height="173.86" id="L-151" title="300 M2"></rect>
                                        <path class=" mapsvg-region" d="M3417.52,2321.77l71.07-0.76l59.29-0.63c0,0,33.01-0.09,33.01-0.35c0-0.26-0.13-11.73-0.13-11.73l-0.57-48.8   l-0.3-43.05l-0.64-44.56l-0.26-47.65l-0.87-54.7l0.15-20.34l-163.68,1.92v59.24l0.31,37L3417.52,2321.77z" id="L-155" title="917.85 M2"></path>
                                        <path class=" mapsvg-region" d="M3578.27,2049.19l-1.75-97.85l-181.72,1.75c0,0,7.78,42.31,10.13,52.94c2.36,10.63,9.65,46.26,9.65,46.26   L3578.27,2049.19z" id="L-156" title="349.18 M2"></path>
                                        <path class=" mapsvg-region" d="M3576.52,1951.35l-0.87-83l-192.2,1.75c0,0,10.69,80.03,11.36,83   C3395.47,1956.06,3576.52,1951.35,3576.52,1951.35z" id="L-157" title="323.97 M2"></path>
                                        <path class=" mapsvg-region" d="M3574.78,1784.48l-0.87-83.87l-198.32,2.62c0,0-0.16,52.47,0,53.77c0.16,1.3,0.87,29.23,0.87,29.23   L3574.78,1784.48z" id="L-159" title="343.38 M2"></path>
                                        <path class=" mapsvg-region" d="M3573.9,1700.61l-0.87-83l-195.7,1.75c0,0-1.89,35.82-1.82,43.05c0.07,7.24,0.07,40.82,0.07,40.82   L3573.9,1700.61z" id="L-160" title="341.23 M2"></path>
                                        <path class=" mapsvg-region" d="M3573.03,1617.61l-0.87-83.87c0,0-190.86,2.26-190.92,2.55c-0.06,0.29-1.03,11.06-1.03,11.06l-0.67,14.42   l-1.13,26.52l-0.78,18.28l-0.29,12.79L3573.03,1617.61z" id="L-161" title="334.45 M2"></path>
                                        <rect x="3389.12" y="1200.88" transform="matrix(0.9999 -0.0104 0.0104 0.9999 -12.756 36.3046)" class=" mapsvg-region" width="179.98" height="83.87" id="L-165" title="309.81 M2"></rect>
                                        <rect x="3195.61" y="584.52" transform="matrix(0.9999 -0.0104 0.0104 0.9999 -6.8181 33.7577)" class=" mapsvg-region" width="83.87" height="173.86" id="L-30" title="300 M2"></rect>
                                        <rect x="3112.62" y="585.4" transform="matrix(0.9999 -0.0105 0.0105 0.9999 -6.9052 33.2521)" class=" mapsvg-region" width="83" height="173.86" id="L-29" title="300 M2"></rect>
                                        <rect x="3028.75" y="586.27" transform="matrix(0.9999 -0.0104 0.0104 0.9999 -6.8453 32.0198)" class=" mapsvg-region" width="83.87" height="173.86" id="L-28" title="300 M2"></rect>
                                        <rect x="2444.28" y="593.26" transform="matrix(0.9999 -0.0104 0.0104 0.9999 -6.9498 25.9325)" class=" mapsvg-region" width="83.87" height="173.86" id="L-21" title="300 M2"></rect>
                                        <rect x="2361.28" y="594.13" transform="matrix(0.9999 -0.0105 0.0105 0.9999 -7.0353 25.3278)" class=" mapsvg-region" width="83" height="173.86" id="L-20" title="300 M2"></rect>
                                        <path class=" mapsvg-region" d="M2360.41,594.57l-169.04,1.39c8.18,31.93,17.52,63.03,28.19,93.2c10.84,29.28,21.87,56.47,33.24,80.08   l109.35-0.81L2360.41,594.57z" id="L-19" title="512.21 M2"></path>
                                        <path class=" mapsvg-region" d="M2109.13,597.1l-99.93,0.97l1.75,173.86l154.64-1.75C2141.56,713.88,2122.39,656.28,2109.13,597.1z" id="L-18" title="446.26 M2"></path>
                                        <rect x="1759.34" y="600.25" transform="matrix(0.9999 -0.0104 0.0104 0.9999 -7.0598 18.7988)" class=" mapsvg-region" width="83.87" height="173.86" id="L-15" title="300 M2"></rect>
                                        <rect x="1676.34" y="601.12" transform="matrix(0.9999 -0.0105 0.0105 0.9999 -7.1468 18.1189)" class=" mapsvg-region" width="83" height="173.86" id="L-14" title="300 M2"></rect>
                                        <rect x="1258.74" y="606.36" transform="matrix(0.9999 -0.0104 0.0104 0.9999 -7.1506 13.5851)" class=" mapsvg-region" width="83.87" height="173.86" id="L-9" title="300 M2"></rect>
                                        <path class="st11" d="M1428.35,844.65"></path>
                                        <path class=" mapsvg-region" d="M1851.95,854.05l107.36-1.71c0,0,22.55,2.94,19.03,23.92c-3.52,20.98-10.22,21.28-16.04,55.13   c-5.82,33.85-6.38,67.69-6.38,67.69l-102.22,0.87L1851.95,854.05z" id="L-43" title="339.54 M2"></path>
                                        <path class=" mapsvg-region" d="M1955.91,999.07c0,0,1.15,49.17,6.79,74.24c5.64,25.07,13.04,53.42,17.64,63.03   c4.6,9.6-1.04,17.71-1.04,17.71s-4.25,10.49-20.01,10.01c-15.76-0.47-50.05-5.45-50.05-5.45l-53.8-3.16l-1.75-155.51   L1955.91,999.07z" id="L-58" title="371.43 M2"></path>
                                        <path class=" mapsvg-region" d="M1855.44,1155.46c-30.63-1.59-63.4-2.72-97.85-3.49l-1.75-151.14l97.85-0.87L1855.44,1155.46z" id="L-57" title="307.71 M2"></path>
                                        <path class=" mapsvg-region " d="M 1757.6 1154.940832157969 C 1723.8799999999999 1154.550832157969 1691.6799999999998 1154.800832157969 1660.6299999999999 1155.550832157969 L 1658.8799999999999 1004.6808321579689 L 1755.85 1003.8108321579689 L 1757.6 1154.940832157969 Z" id="L-56" title="303.47 M2"></path>
                                        <path class=" mapsvg-region " d="M1660.63,1152.57c-37.77,1.57-70.15,3.68-97.86,6.23l-1.74-155.36l97.85-1.75L1660.63,1152.57z" id="L-55" title="308.9 M2"></path>
                                        <path class=" mapsvg-region" d="M1562.76,1158.8c-28.33,2.6-60.81,6.48-96.96,11.51l-1.75-165.99l96.97-0.87L1562.76,1158.8z" id="L-54" title="324.06 M2"></path>
                                        <path class=" mapsvg-region" d="M1465.8,1170.31c-35.56,5.36-67.78,10.8-97.1,16.3l-2.5-181.42l97.85-0.87L1465.8,1170.31z" id="L-53" title="349.04 M2"></path>
                                        <path class=" mapsvg-region" d="M1208.75,1383.37c72.6-22.06,144.98-39.43,217.15-51.74l1.46,156.68l-196.8,1.92   C1221.58,1456.05,1214.43,1420.33,1208.75,1383.37z" id="L-84" title="583.92 M2"></path>
                                        <path class=" mapsvg-region" d="M1425.9,1331.63c27.8-5.05,56.58-9.28,86.21-12.8l2.62,168.61l-87.36,0.87L1425.9,1331.63z" id="L-83" title="292.39 M2"></path>
                                        <path class=" mapsvg-region" d="M1512.1,1318.83c27.93-3.71,57.2-6.57,87.51-8.78l1.6,176.52l-86.49,0.87L1512.1,1318.83z" id="L-82" title="310.05 M2"></path>
                                        <path class=" mapsvg-region" d="M1599.61,1310.04c26.84-2.17,55.9-3.51,86.34-4.32l2.62,179.97l-87.36,0.87L1599.61,1310.04z" id="L-81" title="320.16 M2"></path>
                                        <path class=" mapsvg-region" d="M1685.96,1305.72c27.5-1.06,56.92-1.08,87.42-0.51l1.69,178.73l-86.49,1.75L1685.96,1305.72z" id="L-80" title="322.78 M2"></path>
                                        <path class=" mapsvg-region" d="M1773.38,1305.21c28.94,0.69,57.96,2,87.03,3.82l2.02,174.04l-87.36,0.87L1773.38,1305.21z" id="L-79" title="317.93 M2"></path>
                                        <path class=" mapsvg-region" d="M1860.41,1309.03c29.8,1.72,58.7,4.43,86.77,8.05l1.75,165.12l-86.49,0.87L1860.41,1309.03z" id="L-78" title="305.59 M2"></path>
                                        <path class=" mapsvg-region" d="M1947.18,1317.08c28.13,3.03,57.41,7.28,87.36,12.23l1.75,152.01l-87.36,0.87L1947.18,1317.08z" id="L-77" title="285.66 M2"></path>
                                        <path class=" mapsvg-region" d="M2034.54,1329.31c59.3,9.92,114.87,22.43,168.51,36.3c0,0,8.58,3.15,11.65,11.33s0,17.99,0,17.99   c-13.65,30.3-25.11,58.33-34.99,84.71l-143.42,1.68L2034.54,1329.31z" id="L-76" title="460.12 M2"></path>
                                        <path class=" mapsvg-region" d="M2179.7,1479.64c-20.92,58.2-36,116.4-46.04,174.61c-0.4,0.06-13.28,0.17-13.28,0.17l-82.35,0.76   l-1.75-173.86L2179.7,1479.64z" id="L-93" title="418.13 M2"></path>
                                        <rect x="1863.3" y="1482.63" transform="matrix(0.9999 -0.0101 0.0101 0.9999 -15.7555 19.3364)" class=" mapsvg-region" width="86.5" height="173.86" id="L-91" title="312.5 M2"></rect>
                                        <rect x="1775.94" y="1483.5" transform="matrix(0.9999 -9.999094e-03 9.999094e-03 0.9999 -15.612 18.2731)" class=" mapsvg-region" width="87.37" height="173.86" id="L-90" title="312.5 M2"></rect>
                                        <rect x="1602.08" y="1486.13" transform="matrix(0.9999 -9.999094e-03 9.999094e-03 0.9999 -15.6469 16.5348)" class=" mapsvg-region" width="87.37" height="173.86" id="L-88" title="312.5 M2"></rect>
                                        <rect x="1515.59" y="1487" transform="matrix(0.9999 -0.0101 0.0101 0.9999 -15.8173 15.8247)" class=" mapsvg-region" width="86.5" height="173.86" id="L-87" title="312.5 M2"></rect>
                                        <rect x="1428.23" y="1487.87" transform="matrix(0.9999 -9.999094e-03 9.999094e-03 0.9999 -15.673 14.7965)" class=" mapsvg-region" width="87.37" height="173.86" id="L-86" title="312.5 M2"></rect>
                                        <path class=" mapsvg-region" d="M1429.11,1662.17l-112.7,0.87c-45.52-62.44-79.17-121.48-85.84-172.8l196.8-1.92L1429.11,1662.17z" id="L-85" title="584.22 M2"></path>
                                        <path class=" mapsvg-region" d="M1644.9,1739.92l2.62,173.86l-134.96,0.48c-16.38-48.96-43.91-94.99-88.53-136.49c0,0-12.09-11.72-5.91-22.6   s11.77-13.03,16.3-13.28C1438.94,1741.65,1644.9,1739.92,1644.9,1739.92z" id="L-121" title="650.75 M2"></path>
                                        <path class=" mapsvg-region" d="M 1979.5 1738.540832157969 L 2120.16 1737.670832157969 C 2112.3999999999996 1799.480832157969 2108.91 1856.590832157969 2108.04 1910.820832157969 L 1981.25 1913.2708321579692 L 1979.5 1738.540832157969 Z" id="L-116" title="300 M2"></path>
                                        <path class=" mapsvg-region" d="M2108.04,1907.84c-0.68,66.81,2.12,124.43,7.75,174.56l-132.79,1.75l-1.75-173.86L2108.04,1907.84z" id="L-127" title="459.02 M2"></path>
                                        <rect x="1731.38" y="1912.46" transform="matrix(0.9999 -0.0104 0.0104 0.9999 -20.7289 18.5788)" class=" mapsvg-region" width="83.87" height="173.86" id="L-124" title="300 M2"></rect>
                                        <rect x="1648.39" y="1913.34" transform="matrix(0.9999 -0.0105 0.0105 0.9999 -20.9599 17.8974)" class=" mapsvg-region" width="83" height="173.86" id="L-123" title="300 M2"></rect>
                                        <path class=" mapsvg-region" d="M1649.26,2087.63l-122.31,0.87c0,0-12.17-2.22-17.18-10.86s-1.79-17.21-1.79-17.21   c15.68-31.43,27.23-67.9,4.57-146.17l134.96-0.48L1649.26,2087.63z" id="L-122" title="465.58 M2"></path>
                                        <path class=" mapsvg-region" d="M2200.53,1733.81l83-0.87l1.75,173.86l-97.85,0.87C2189.12,1843.58,2193.21,1784.98,2200.53,1733.81z" id="L-115" title="300 M2"></path>
                                        <rect x="2284.4" y="1732.49" transform="matrix(0.9999 -0.0105 0.0105 0.9999 -19.0212 24.5816)" class=" mapsvg-region" width="83" height="173.86" id="L-114" title="300 M2"></rect>
                                        <rect x="2367.4" y="1731.62" transform="matrix(0.9999 -0.0104 0.0104 0.9999 -18.8108 25.1935)" class=" mapsvg-region" width="83.87" height="173.86" id="L-113" title="300 M2"></rect>
                                        <rect x="2618.13" y="1728.12" transform="matrix(0.9999 -0.0105 0.0105 0.9999 -18.9567 28.094)" class=" mapsvg-region" width="83" height="173.86" id="L-110" title="300 M2"></rect>
                                        <rect x="2701.13" y="1727.25" transform="matrix(0.9999 -0.0104 0.0104 0.9999 -18.7472 28.6693)" class=" mapsvg-region" width="83.87" height="173.86" id="L-109" title="300 M2"></rect>
                                        <rect x="3118.73" y="1722.88" transform="matrix(0.9999 -0.0104 0.0104 0.9999 -18.679 33.0187)" class=" mapsvg-region" width="83.87" height="173.86" id="L-104" title="300 M2"></rect>
                                        <path class=" mapsvg-region" d="M3201.73,1722.45l93.48-0.87c-1.09,37.23,2.38,95.04,10.48,173.86l-102.22,0.87L3201.73,1722.45z" id="L-103" title="346.4 M2"></path>
                                        <path class=" mapsvg-region" d="M3305.69,1895.43c4.35,39.69,12.8,90.17,26.95,155.71c0,0,0.48,8.03-1.4,10.8s-5.44,6.24-12.04,7.06   s-17.84,0.48-17.84,0.48l-96.13,0.68l-1.75-173.86L3305.69,1895.43z" id="L-140" title="412.39 M2"></path>
                                        <rect x="3118.533950276243" y="1896.74" transform="matrix(0.9999 -0.0104 0.0104 0.9999 -20.4897 33.0463)" class=" mapsvg-region" width="83.87" height="173.86" id="L-139" title="300 M2"></rect>
                                        <rect x="3037.48" y="1897.61" transform="matrix(0.9999 -0.0105 0.0105 0.9999 -20.7174 32.5172)" class=" mapsvg-region" width="83" height="173.86" id="L-138" title="300 M2"></rect>
                                        <rect x="2953.61" y="1898.49" transform="matrix(0.9999 -0.0104 0.0104 0.9999 -20.517 31.3084)" class=" mapsvg-region" width="83.87" height="173.86" id="L-137" title="300 M2"></rect>
                                        <rect x="2369.14" y="1905.47" transform="matrix(0.9999 -0.0104 0.0104 0.9999 -20.6267 25.2275)" class=" mapsvg-region" width="83.87" height="173.86" id="L-130" title="300 M2"></rect>
                                        <rect x="2286.15" y="1906.35" transform="matrix(0.9999 -0.0105 0.0105 0.9999 -20.851 24.6097)" class=" mapsvg-region" width="83" height="173.86" id="L-129" title="300 M2"></rect>
                                        <path class=" mapsvg-region" d="M2287.02,2080.65l-90.86,0.87c-6.29-56.99-9.37-114.9-8.74-173.86l97.85-0.87L2287.02,2080.65z" id="L-128" title="346.21 M2"></path>
                                        <path class=" mapsvg-region" d="M2265.27,1478.5c24.29-61.41,54.16-119.49,89.27-174.42l108.96-0.97l1.74,173.48L2265.27,1478.5z" id="L-75" title="567.86 M2"></path>
                                        <rect x="2548.24" y="1301.79" transform="matrix(0.9999 -0.0105 0.0105 0.9999 -14.4732 27.3348)" class=" mapsvg-region" width="83" height="173.86" id="L-73" title="300 M2"></rect>
                                        <rect x="2798.1" y="1298.29" transform="matrix(0.9999 -0.0104 0.0104 0.9999 -14.2776 29.6637)" class=" mapsvg-region" width="83.87" height="173.86" id="L-70" title="300 M2"></rect>
                                        <path class=" mapsvg-region" d="M2964.1,1296.99l177.56-1.75c0,0,16.19,0.41,19.26,12.85s-0.85,17.18-0.85,17.18   c-43.6,58.1-63.27,104.68-69.3,144.69l-124.06,0.87L2964.1,1296.99z" id="L-68" title="573.93 M2"></path>
                                        <path class=" mapsvg-region" d="M3090.78,1469.97c-10.07,55.92-3.48,102.49,16.84,141.37c0,0,7.73,10.59,0.79,20.83   c-6.94,10.25-18.06,11.54-18.06,11.54l-121.89,0.99l-1.75-173.86L3090.78,1469.97z" id="L-102" title="452.45 M2"></path>
                                        <rect x="2883.72" y="1471.27" transform="matrix(0.9999 -0.0104 0.0104 0.9999 -16.0711 30.5573)" class=" mapsvg-region" width="83.87" height="173.86" id="L-101" title="300 M2"></rect>
                                        <path class="st11" d="M2868.53,1595"></path>
                                        <path class=" mapsvg-region " d="M2384,1651.69l-169.49,1.75c11.83-62.81,28.86-121.02,50.76-174.94l116.91-1.12L2384,1651.69z" id="L-94" title="525.77 M2"></path>
                                        <path class=" mapsvg-region" d="M2389.5,1223.14c16.76-58.86,17.79-121.27,2.51-187.39l124.78-1.73l1.75,187.83L2389.5,1223.14z" id="L-59" title="465.43 M2"></path>
                                        <path class=" mapsvg-region" d="M2392.01,1035.75c-16.3-72.63-52.71-134.57-106.11-187.48l229.15-2.09l1.75,187.83L2392.01,1035.75z" id="L-42" title="643.24 M2"></path>
                                        <path class=" mapsvg-region" d="M3301.26,1025.11c-6.51,68.89-27.6,132.13-65.46,188.88l-125.8,1.75l-1.75-187.83L3301.26,1025.11z" id="L-67" title="652.82 M2"></path>
                                        <path d="M 902.2999877929688 1169.4300537109375 L 918.219970703125 1258.510009765625 L 1105.8599853515625 1229.7099609375 L 1089.260009765625 1140.5999755859375 Z" class=" mapsvg-region" id="L-1" title="354.46 M2"></path>
                                        <path d="M 888.3200073242188 1080.3199462890625 L 902.2999877929688 1169.4300537109375 L 955.469970703125 1161.22998046875 L 1037.06005859375 1148.6500244140625 L 1089.260009765625 1140.5999755859375 L 1081.8599853515625 1099.239990234375 L 1072.6600341796875 1051.489990234375 Z" class=" mapsvg-region" id="L-2" title="351.29 M2">
                                        </path>
                                        <path d="M 874.2999877929688 991.0800170898438 L 880.969970703125 1036.2099609375 L 888.3200073242188 1080.3199462890625 L 923.9500122070312 1074.75 L 1008.9000244140625 1061.4599609375 L 1072.6600341796875 1051.489990234375 L 1056.02001953125 977.4099731445312 L 1052.8599853515625 963.3400268554688 Z" class=" mapsvg-region" id="L-3" title="344.18 M2"></path>
                                        <path d="M 860.3599853515625 901.219970703125 L 868.8200073242188 956.510009765625 L 874.2999877929688 991.0800170898438 L 891.8699951171875 988.3499755859375 L 1004.219970703125 970.9000244140625 L 1052.8599853515625 963.3400268554688 L 1041.8199462890625 914.27001953125 L 1032.469970703125 875.02001953125 Z" class=" mapsvg-region" id="L-4" title="333.12 M2"></path>
                                        <path d="M 3192.989990234375 839.2000122070312 L 3289.969970703125 838.3200073242188 L 3301.330078125 1026.1600341796875 L 3194.739990234375 1027.030029296875 Z" class=" mapsvg-region" id="L-33" title="395.62 M2"></path>
                                        <path d="M 1111.969970703125 861.9099731445312 L 1145.1700439453125 1007.8099975585938 L 1269.22998046875 1006.0599975585938 L 1267.47998046875 860.1599731445312 Z" class=" mapsvg-region" id="L-50" title="421.6 M2"></path>
                                        <path d="M 1270.969970703125 1207.2900390625 L 1186.0400390625 1229.52001953125 L 1145.1700439453125 1007.8099975585938 L 1269.22998046875 1006.0599975585938 Z" class=" mapsvg-region" id="L-51" title="458.54 M2"></path>
                                        <path d="M 1368.699951171875 1186.5999755859375 L 1270.969970703125 1207.2900390625 L 1269.22998046875 1006.0599975585938 L 1366.199951171875 1005.1900024414062 Z" class=" mapsvg-region" id="L-52" title="384.04 M2"></path>
                                        <path d="M 3567.7900390625 1117.010009765625 L 3566.909912109375 1033.1400146484375 L 3381.699951171875 1034.8900146484375 L 3386.070068359375 1118.760009765625 Z" class=" mapsvg-region" id="L-167" title="315.82 M2"></path>
                                        <path d="M 3568.659912109375 1200.010009765625 L 3567.7900390625 1117.010009765625 L 3386.070068359375 1118.760009765625 L 3388.68994140625 1188.06005859375 L 3388.68994140625 1201.760009765625 Z" class=" mapsvg-region" id="L-166" title="311.51 M2"></path>
                                        <path d="M 3570.409912109375 1366.8800048828125 L 3569.5400390625 1283.8800048828125 L 3389.56005859375 1285.6300048828125 L 3388.68994140625 1369.5 Z" class=" mapsvg-region" id="L-164" title="311.39 M2"></path>
                                        <path d="M 3571.280029296875 1450.75 L 3570.409912109375 1366.8800048828125 L 3508.469970703125 1367.77001953125 L 3429.169921875 1368.9100341796875 L 3388.68994140625 1369.5 L 3387.25 1407.5899658203125 L 3386.2900390625 1434.8900146484375 L 3385.340087890625 1452.3900146484375 Z" class=" mapsvg-region" id="L-163" title="316.22 M2"></path>
                                        <path d="M 3572.159912109375 1533.739990234375 L 3571.280029296875 1450.75 L 3385.340087890625 1452.3900146484375 L 3383.909912109375 1485.760009765625 L 3382.679931640625 1509.5 L 3381.530029296875 1530.1500244140625 L 3381.239990234375 1536.2900390625 Z" class=" mapsvg-region" id="L-162" title="324.3 M2"></path>
                                        <path d="M 2045.9000244140625 2336.6201171875 L 2163.840087890625 2335.75 L 2159.3798828125 2315.68994140625 L 2144.159912109375 2246.85009765625 L 2128.02001953125 2161.889892578125 L 2043.280029296875 2162.77001953125 Z" class=" mapsvg-region" id="L-187" title="360.96 M2"></path>
                                        <path d="M 957.3400268554688 1480.449951171875 L 974.8099975585938 1582.6700439453125 L 1155.6500244140625 1551.219970703125 L 1138.1800537109375 1448.1300048828125 Z" class=" mapsvg-region" id="L-170" title="394.76 M2"></path>
                                        <path d="M 974.8099975585938 1582.6700439453125 L 988.7899780273438 1663.9200439453125 L 1165.260009765625 1634.2099609375 L 1155.6500244140625 1551.219970703125 Z" class=" mapsvg-region" id="L-171" title="310.94 M2"></path>
                                        <path d="M 988.7899780273438 1663.9200439453125 L 1002.77001953125 1745.1700439453125 L 1176.6199951171875 1717.2099609375 L 1165.260009765625 1634.2099609375 Z" class=" mapsvg-region" id="L-172" title="304.64 M2"></path>
                                        <path d="M 1002.77001953125 1745.1700439453125 L 1015.8699951171875 1827.2900390625 L 1190.5999755859375 1799.3299560546875 L 1176.6199951171875 1717.2099609375 Z" class=" mapsvg-region" id="L-173" title="303.55 M2"></path>
                                        <path d="M 1015.8699951171875 1827.2900390625 L 1028.0999755859375 1908.5400390625 L 1207.199951171875 1881.449951171875 L 1190.5999755859375 1799.3299560546875 Z" class=" mapsvg-region" id="L-174" title="307.32 M2"></path>
                                        <path d="M 1028.0999755859375 1908.5400390625 L 1040.3299560546875 1990.6600341796875 L 1226.4200439453125 1962.699951171875 L 1207.199951171875 1881.449951171875 Z" class=" mapsvg-region" id="L-175" title="315.97 M2"></path>
                                        <path d="M 1040.3299560546875 1990.6600341796875 L 1056.06005859375 2095.5 L 1257.8699951171875 2066.669921875 L 1226.4200439453125 1962.699951171875 Z" class=" mapsvg-region" id="L-176" title="433.09 M2"></path>
                                        <path d="M 1056.06005859375 2095.5 L 1090.1300048828125 2347.110107421875 L 1294.56005859375 2345.360107421875 L 1292.8199462890625 2171.5 L 1257.8699951171875 2066.669921875 Z" class=" mapsvg-region" id="L-177" title="1182.26 M2">
                                        </path>
                                        <path d="M 1091 608.5499877929688 L 1007.1300048828125 609.4299926757812 L 1009.760009765625 783.280029296875 L 1092.75 782.4099731445312 Z" class=" mapsvg-region" id="L-6" title="300 M2"></path>
                                        <path d="M 1174 607.6799926757812 L 1091 608.5499877929688 L 1092.75 782.4099731445312 L 1176.6199951171875 781.530029296875 Z" class=" mapsvg-region" id="L-7" title="300 M2"></path>
                                        <path d="M 1257.8699951171875 606.8099975585938 L 1174 607.6799926757812 L 1174.9599609375 671.1199951171875 L 1176.6199951171875 781.530029296875 L 1259.6199951171875 780.6599731445312 Z" class=" mapsvg-region" id="L-8" title="300 M2"></path>
                                        <path d="M 1424.7099609375 604.1799926757812 L 1341.739990234375 605.9299926757812 L 1343.489990234375 779.7899780273438 L 1426.47998046875 778.9099731445312 Z" class=" mapsvg-region" id="L-10" title="300 M2"></path>
                                        <path d="M 1508.6099853515625 604.1799926757812 L 1424.7099609375 604.1799926757812 L 1426.47998046875 778.9099731445312 L 1510.3499755859375 778.0399780273438 Z" class=" mapsvg-region" id="L-11" title="300 M2"></path>
                                        <path d="M 1591.5999755859375 602.4400024414062 L 1508.6099853515625 604.1799926757812 L 1510.3499755859375 778.0399780273438 L 1593.3499755859375 777.1699829101562 Z" class=" mapsvg-region" id="L-12" title="300 M2"></path>
                                        <path d="M 1675.469970703125 601.5599975585938 L 1591.5999755859375 602.4400024414062 L 1593.3499755859375 777.1699829101562 L 1677.219970703125 775.4199829101562 Z" class=" mapsvg-region" id="L-13" title="300 M2"></path>
                                        <path d="M 1925.3399658203125 598.9400024414062 L 1842.3399658203125 599.8200073242188 L 1844.0899658203125 773.6699829101562 L 1927.9599609375 772.7999877929688 Z" class=" mapsvg-region" id="L-16" title="300 M2"></path>
                                        <path d="M 2009.2099609375 598.0700073242188 L 1925.3399658203125 598.9400024414062 L 1927.9599609375 772.7999877929688 L 2010.949951171875 771.9299926757812 Z" class=" mapsvg-region" id="L-17" title="300 M2"></path>
                                        <path d="M 2610.27001953125 591.9500122070312 L 2527.280029296875 592.8300170898438 L 2529.02001953125 766.6799926757812 L 2612.889892578125 765.8099975585938 Z" class=" mapsvg-region" id="L-22" title="300 M2"></path>
                                        <path d="M 2694.139892578125 591.0800170898438 L 2610.27001953125 591.9500122070312 L 2612.889892578125 765.8099975585938 L 2695.889892578125 764.9400024414062 Z" class=" mapsvg-region" id="L-23" title="300 M2"></path>
                                        <path d="M 2777.139892578125 590.2100219726562 L 2694.139892578125 591.0800170898438 L 2695.889892578125 764.9400024414062 L 2779.760009765625 764.0599975585938 Z" class=" mapsvg-region" id="L-24" title="300 M2"></path>
                                        <path d="M 2861.010009765625 588.4600219726562 L 2777.139892578125 590.2100219726562 L 2779.760009765625 764.0599975585938 L 2862.760009765625 762.3099975585938 Z" class=" mapsvg-region" id="L-25" title="300 M2"></path>
                                        <path d="M 2944.010009765625 587.5900268554688 L 2861.010009765625 588.4600219726562 L 2862.760009765625 762.3099975585938 L 2946.6298828125 761.4400024414062 Z" class=" mapsvg-region" id="L-26" title="300 M2"></path>
                                        <path d="M 3027.8798828125 586.7100219726562 L 2944.010009765625 587.5900268554688 L 2946.6298828125 761.4400024414062 L 3029.6201171875 760.5700073242188 Z" class=" mapsvg-region" id="L-27" title="300 M2"></path>
                                        <path d="M 3361.610107421875 583.219970703125 L 3278.610107421875 584.0900268554688 L 3280.080078125 730.1699829101562 L 3280.360107421875 757.9500122070312 L 3363.35009765625 757.0700073242188 Z" class=" mapsvg-region" id="L-31" title="300 M2"></path>
                                        <path d="M 3565.169921875 852.2999877929688 L 3562.760009765625 680.2899780273438 L 3561.669921875 581.469970703125 L 3361.610107421875 583.219970703125 L 3362.219970703125 643.8300170898438 L 3363.35009765625 757.0700073242188 L 3371.219970703125 854.9199829101562 Z" class=" mapsvg-region" id="L-32" title="1114.53 M2"></path>
                                        <path d="M 3566.0400390625 950.1500244140625 L 3565.169921875 852.2999877929688 L 3371.219970703125 854.9199829101562 L 3377.330078125 951.9000244140625 Z" class=" mapsvg-region" id="L-169" title="384.21 M2"></path>
                                        <path d="M 3566.909912109375 1033.1400146484375 L 3566.0400390625 950.1500244140625 L 3377.330078125 951.9000244140625 L 3381.699951171875 1034.8900146484375 Z" class=" mapsvg-region" id="L-168" title="321.55 M2"></path>
                                        <path d="M 2764.909912109375 843.5599975585938 L 2848.780029296875 842.6900024414062 L 2850.530029296875 1030.52001953125 L 2767.530029296875 1031.4000244140625 Z" class=" mapsvg-region" id="L-38" title="324 M2"></path>
                                        <path d="M 2848.780029296875 842.6900024414062 L 2931.77001953125 841.8200073242188 L 2934.39990234375 1029.6500244140625 L 2850.530029296875 1030.52001953125 Z" class=" mapsvg-region" id="L-37" title="324 M2"></path>
                                        <path d="M 3105.6298828125 840.0700073242188 L 3192.989990234375 839.2000122070312 L 3194.739990234375 1027.030029296875 L 3108.25 1027.9000244140625 Z" class=" mapsvg-region" id="L-34" title="337.5 M2"></path>
                                        <path d="M 3019.139892578125 840.9400024414062 L 3105.6298828125 840.0700073242188 L 3108.25 1027.9000244140625 L 3020.889892578125 1028.780029296875 Z" class=" mapsvg-region" id="L-35" title="337.5 M2"></path>
                                        <path d="M 2931.77001953125 841.8200073242188 L 3019.139892578125 840.9400024414062 L 3020.889892578125 1028.780029296875 L 2934.39990234375 1029.6500244140625 Z" class=" mapsvg-region" id="L-36" title="337.5 M2"></path>
                                        <path d="M 2681.909912109375 844.4400024414062 L 2764.909912109375 843.5599975585938 L 2767.530029296875 1031.4000244140625 L 2683.659912109375 1032.27001953125 Z" class=" mapsvg-region" id="L-39" title="324 M2"></path>
                                        <path d="M 2598.0400390625 845.3099975585938 L 2681.909912109375 844.4400024414062 L 2683.659912109375 1032.27001953125 L 2600.659912109375 1033.1400146484375 Z" class=" mapsvg-region" id="L-40" title="324 M2"></path>
                                        <path d="M 2515.050048828125 846.1799926757812 L 2598.0400390625 845.3099975585938 L 2600.659912109375 1033.1400146484375 L 2516.7900390625 1034.02001953125 Z" class=" mapsvg-region" id="L-41" title="324 M2"></path>
                                        <path d="M 2602.409912109375 1220.97998046875 L 2518.5400390625 1221.8499755859375 L 2516.7900390625 1034.02001953125 L 2600.659912109375 1033.1400146484375 Z" class=" mapsvg-region" id="L-60" title="324 M2"></path>
                                        <path d="M 2686.280029296875 1220.0999755859375 L 2602.409912109375 1220.97998046875 L 2600.659912109375 1033.1400146484375 L 2683.659912109375 1032.27001953125 Z" class=" mapsvg-region" id="L-61" title="324 M2"></path>
                                        <path d="M 2769.280029296875 1219.22998046875 L 2686.280029296875 1220.0999755859375 L 2683.659912109375 1032.27001953125 L 2767.530029296875 1031.4000244140625 Z" class=" mapsvg-region" id="L-62" title="324 M2"></path>
                                        <path d="M 2853.14990234375 1218.3599853515625 L 2769.280029296875 1219.22998046875 L 2767.530029296875 1031.4000244140625 L 2850.530029296875 1030.52001953125 Z" class=" mapsvg-region" id="L-63" title="324 M2"></path>
                                        <path d="M 2936.139892578125 1217.47998046875 L 2853.14990234375 1218.3599853515625 L 2850.530029296875 1030.52001953125 L 2934.39990234375 1029.6500244140625 Z" class=" mapsvg-region" id="L-64" title="324 M2"></path>
                                        <path d="M 3023.510009765625 1216.6099853515625 L 2936.139892578125 1217.47998046875 L 2934.39990234375 1029.6500244140625 L 3020.889892578125 1028.780029296875 Z" class=" mapsvg-region" id="L-65" title="337.5 M2"></path>
                                        <path d="M 3110 1215.739990234375 L 3023.510009765625 1216.6099853515625 L 3020.889892578125 1028.780029296875 L 3108.25 1027.9000244140625 Z" class=" mapsvg-region" id="L-66" title="337.5 M2"></path>
                                        <path d="M 1754.0999755859375 854.9199829101562 L 1851.949951171875 854.0499877929688 L 1853.699951171875 999.9500122070312 L 1755.8499755859375 1000.8200073242188 Z" class=" mapsvg-region" id="L-44" title="294 M2"></path>
                                        <path d="M 1657.1300048828125 855.7899780273438 L 1754.0999755859375 854.9199829101562 L 1755.8499755859375 1000.8200073242188 L 1658.8699951171875 1001.6900024414062 Z" class=" mapsvg-region" id="L-45" title="294 M2"></path>
                                        <path d="M 1559.280029296875 857.5399780273438 L 1657.1300048828125 855.7899780273438 L 1658.8699951171875 1001.6900024414062 L 1561.030029296875 1003.4400024414062 Z" class=" mapsvg-region" id="L-46" title="294 M2"></path>
                                        <path d="M 1462.300048828125 858.4199829101562 L 1559.280029296875 857.5399780273438 L 1561.030029296875 1003.4400024414062 L 1464.050048828125 1004.3099975585938 Z" class=" mapsvg-region" id="L-47" title="294 M2"></path>
                                        <path d="M 1365.3299560546875 859.2899780273438 L 1462.300048828125 858.4199829101562 L 1464.050048828125 1004.3099975585938 L 1366.199951171875 1005.1900024414062 Z" class=" mapsvg-region" id="L-48" title="294 M2"></path>
                                        <path d="M 1267.47998046875 860.1599731445312 L 1365.3299560546875 859.2899780273438 L 1366.199951171875 1005.1900024414062 L 1269.22998046875 1006.0599975585938 Z" class=" mapsvg-region" id="L-49" title="294 M2"></path>
                                        <path d="M 1776.8199462890625 1657.800048828125 L 1690.3299560546875 1659.550048828125 L 1688.5799560546875 1485.68994140625 L 1775.0699462890625 1483.949951171875 Z" class=" mapsvg-region " id="L-89" title="312.5 M2"></path>
                                        <path d="M 2038.0400390625 1655.1800537109375 L 2003.239990234375 1655.699951171875 L 1980.7900390625 1655.75 L 1950.6700439453125 1656.050048828125 L 1948.9200439453125 1482.199951171875 L 2036.2900390625 1481.3199462890625 Z" class=" mapsvg-region" id="L-92" title="312.5 M2"></path>
                                        <path d="M 2463.5 1303.0999755859375 L 2547.3701171875 1302.22998046875 L 2549.1201171875 1476.0799560546875 L 2465.239990234375 1476.5799560546875 Z" class=" mapsvg-region" id="L-74" title="300 M2"></path>
                                        <path d="M 2630.3701171875 1301.3499755859375 L 2714.239990234375 1299.6099853515625 L 2715.97998046875 1474.3399658203125 L 2632.110107421875 1475.2099609375 Z" class=" mapsvg-region" id="L-72" title="300 M2"></path>
                                        <path d="M 2714.239990234375 1299.6099853515625 L 2797.22998046875 1298.72998046875 L 2798.97998046875 1472.5899658203125 L 2715.97998046875 1474.3399658203125 Z" class=" mapsvg-region" id="L-71" title="300 M2"></path>
                                        <path d="M 2881.10009765625 1297.8599853515625 L 2964.10009765625 1296.989990234375 L 2966.719970703125 1470.8399658203125 L 2882.85009765625 1471.7099609375 Z" class=" mapsvg-region" id="L-69" title="300 M2"></path>
                                        <path d="M 2884.60009765625 1645.5699462890625 L 2801.60009765625 1647.3199462890625 L 2798.97998046875 1472.5899658203125 L 2882.85009765625 1471.7099609375 Z" class=" mapsvg-region" id="L-100" title="300 M2"></path>
                                        <path d="M 2801.60009765625 1647.3199462890625 L 2717.72998046875 1648.18994140625 L 2715.97998046875 1474.3399658203125 L 2798.97998046875 1472.5899658203125 Z" class=" mapsvg-region" id="L-99" title="300 M2"></path>
                                        <path d="M 2717.72998046875 1648.18994140625 L 2634.739990234375 1649.06005859375 L 2632.110107421875 1475.2099609375 L 2715.97998046875 1474.3399658203125 Z" class=" mapsvg-region" id="L-98" title="300 M2"></path>
                                        <path d="M 2634.739990234375 1649.06005859375 L 2550.8701171875 1649.93994140625 L 2549.1201171875 1476.0799560546875 L 2632.110107421875 1475.2099609375 Z" class=" mapsvg-region" id="L-97" title="300 M2"></path>
                                        <path d="M 2550.8701171875 1649.93994140625 L 2467 1650.81005859375 L 2465.239990234375 1476.5799560546875 L 2549.1201171875 1476.0799560546875 Z" class=" mapsvg-region" id="L-96" title="300 M2"></path>
                                        <path d="M 2467 1650.81005859375 L 2384 1651.68994140625 L 2382.179931640625 1477.3800048828125 L 2465.239990234375 1476.5799560546875 Z" class=" mapsvg-region" id="L-95" title="300 M2"></path>
                                        <path d="M 3033.989990234375 1724.199951171875 L 3117.860107421875 1723.3199462890625 L 3119.610107421875 1897.1800537109375 L 3036.610107421875 1898.050048828125 Z" class=" mapsvg-region" id="L-105" title="300 M2"></path>
                                        <path d="M 2950.989990234375 1725.0699462890625 L 3033.989990234375 1724.199951171875 L 3036.610107421875 1898.050048828125 L 2952.739990234375 1898.9300537109375 Z" class=" mapsvg-region" id="L-106" title="300 M2"></path>
                                        <path d="M 2869.31005859375 1899.81005859375 L 2867.1201171875 1725.949951171875 L 2950.989990234375 1725.0699462890625 L 2952.739990234375 1898.9300537109375 L 2869.75 1899.800048828125" class=" mapsvg-region" id="L-107" title="300 M2"></path>
                                        <path d="M 2784.1298828125 1726.8199462890625 L 2867.1201171875 1725.949951171875 L 2869.75 1899.800048828125 L 2785.8798828125 1900.6700439453125 Z" class=" mapsvg-region" id="L-108" title="300 M2"></path>
                                        <path d="M 2533.389892578125 1729.43994140625 L 2617.260009765625 1728.5699462890625 L 2619.010009765625 1902.4200439453125 L 2535.139892578125 1904.1700439453125 Z" class=" mapsvg-region" id="L-111" title="300 M2"></path>
                                        <path d="M 2450.39990234375 1731.18994140625 L 2533.389892578125 1729.43994140625 L 2535.139892578125 1904.1700439453125 L 2452.139892578125 1905.0400390625 Z" class=" mapsvg-region" id="L-112" title="300 M2"></path>
                                        <path d="M 2954.489990234375 2072.780029296875 L 2871.489990234375 2073.659912109375 L 2869.31005859375 1899.81005859375 L 2952.739990234375 1898.9300537109375 Z" class=" mapsvg-region" id="L-136" title="300 M2"></path>
                                        <path d="M 2871.489990234375 2073.659912109375 L 2787.6201171875 2074.530029296875 L 2785.8798828125 1900.6700439453125 L 2869.31005859375 1899.81005859375 Z" class=" mapsvg-region" id="L-135" title="300 M2"></path>
                                        <path d="M 2704.6298828125 2075.39990234375 L 2620.760009765625 2076.280029296875 L 2619.010009765625 1902.4200439453125 L 2702.010009765625 1901.550048828125 L 2703.686279296875 2012.78955078125 Z" class=" mapsvg-region" id="L-133" title="300 M2"></path>
                                        <path d="M 2787.6201171875 2074.530029296875 L 2704.6298828125 2075.39990234375 L 2702.010009765625 1901.550048828125 L 2785.8798828125 1900.6700439453125 Z" class=" mapsvg-region" id="L-134" title="300 M2"></path>
                                        <path d="M 2620.760009765625 2076.280029296875 L 2537.760009765625 2078.02001953125 L 2535.139892578125 1904.1700439453125 L 2619.010009765625 1902.4200439453125 Z" class=" mapsvg-region" id="L-132" title="300 M2"></path>
                                        <path d="M 2537.760009765625 2079.966069255007 L 2453.889892578125 2080.845952067507 L 2452.139892578125 1906.986088786257 L 2535.139892578125 1906.1160936690694 Z" class=" mapsvg-region" id="L-131" title="300 M2"></path>
                                        <path d="M 1983 2084.139892578125 L 1899.1300048828125 2084.139892578125 L 1897.3800048828125 1911.1600341796875 L 1981.25 1910.280029296875 L 1983 2085.590087890625" class=" mapsvg-region" id="L-126" title="300 M2"></path>
                                        <path d="M 1899.1300048828125 2084.139892578125 L 1816.1300048828125 2085.889892578125 L 1814.3800048828125 1912.030029296875 L 1897.3800048828125 1911.1600341796875 Z" class=" mapsvg-region" id="L-125" title="300 M2"></path>
                                        <path d="M 1895.6300048828125 1737.300048828125 L 1979.5 1735.56005859375 L 1981.25 1910.280029296875 L 1897.3800048828125 1911.1600341796875 Z" class=" mapsvg-region" id="L-117" title="300 M2"></path>
                                        <path d="M 1811.760009765625 1738.1800537109375 L 1895.6300048828125 1737.300048828125 L 1897.3800048828125 1911.1600341796875 L 1814.3800048828125 1912.030029296875 Z" class=" mapsvg-region" id="L-118" title="300 M2"></path>
                                        <path d="M 1728.77001953125 1739.050048828125 L 1811.760009765625 1738.1800537109375 L 1814.3800048828125 1912.030029296875 L 1730.510009765625 1912.9100341796875 Z" class=" mapsvg-region" id="L-119" title="300 M2"></path>
                                        <path d="M 1644.9000244140625 1739.9200439453125 L 1728.77001953125 1739.050048828125 L 1730.510009765625 1912.9100341796875 L 1647.52001953125 1913.780029296875 Z" class=" mapsvg-region" id="L-120" title="300 M2"></path>
                                        <path d="M 1795.1600341796875 2340.1201171875 L 1879.030029296875 2338.949951171875 L 1877.4100341796875 2231.35009765625 L 1876.4100341796875 2164.510009765625 L 1793.4200439453125 2166.260009765625 Z" class=" mapsvg-region" id="L-184" title="300 M2"></path>
                                        <path d="M 1879.030029296875 2340.896000895632 L 1921.93994140625 2340.216069255007 L 1962.030029296875 2339.446049723757 L 1961.280029296875 2265.056157145632 L 1960.449951171875 2182.466069255007 L 1960.280029296875 2165.585942301882 L 1876.4100341796875 2166.456059489382 Z" class=" mapsvg-region" id="L-185" title="300 M2"></path>
                                        <path d="M 1962.030029296875 2337.5 L 2045.9000244140625 2336.6201171875 L 2044.489990234375 2243.1298828125 L 2043.280029296875 2162.77001953125 L 1960.280029296875 2163.639892578125 Z" class=" mapsvg-region" id="L-186" title="300 M2"></path>
                                        <path d="M 2332.449951171875 2333.60009765625 L 2415.449951171875 2333.1298828125 L 2414.320068359375 2220.590087890625 L 2413.699951171875 2159.27001953125 L 2329.830078125 2160.14990234375 Z" class=" mapsvg-region" id="L-142" title="300 M2"></path>
                                        <path d="M 2415.449951171875 2333.1298828125 L 2499.320068359375 2332.25 L 2499.0400390625 2313.530029296875 L 2497.85009765625 2234.889892578125 L 2496.699951171875 2158.39990234375 L 2413.699951171875 2159.27001953125 Z" class=" mapsvg-region" id="L-143" title="300 M2"></path>
                                        <path d="M 2499.320068359375 2332.25 L 2582.320068359375 2331.3798828125 L 2582.0400390625 2303.7900390625 L 2580.570068359375 2157.530029296875 L 2496.699951171875 2158.39990234375 Z" class=" mapsvg-region" id="L-144" title="300 M2"></path>
                                        <path d="M 2582.320068359375 2331.3798828125 L 2666.18994140625 2330.510009765625 L 2665.300048828125 2242.300048828125 L 2664.43994140625 2156.64990234375 L 2580.570068359375 2157.530029296875 Z" class=" mapsvg-region" id="L-145" title="300 M2"></path>
                                        <path d="M 2666.18994140625 2330.510009765625 L 2749.179931640625 2329.6298828125 L 2747.43994140625 2154.89990234375 L 2664.43994140625 2156.64990234375 Z" class=" mapsvg-region" id="L-146" title="300 M2"></path>
                                        <path d="M 2749.179931640625 2329.6298828125 L 2758.35009765625 2329.080078125 L 2768 2328.860107421875 L 2779.760009765625 2328.72998046875 L 2833.050048828125 2327.889892578125 L 2832.489990234375 2272.409912109375 L 2831.889892578125 2211.93994140625 L 2831.31005859375 2154.030029296875 L 2747.43994140625 2154.89990234375 Z" class=" mapsvg-region" id="L-147" title="300 M2"></path>
                                        <path d="M 2833.050048828125 2327.889892578125 L 2916.050048828125 2327.010009765625 L 2915.6298828125 2285.239990234375 L 2915 2223.1201171875 L 2914.300048828125 2153.159912109375 L 2831.31005859375 2154.030029296875 Z" class=" mapsvg-region" id="L-148" title="300 M2"></path>
                                        <path d="M 2916.050048828125 2327.010009765625 L 2999.919921875 2326.139892578125 L 2999.030029296875 2238.179931640625 L 2998.3798828125 2173.1201171875 L 2998.169921875 2152.280029296875 L 2914.300048828125 2153.159912109375 Z" class=" mapsvg-region" id="L-149" title="300 M2"></path>
                                        <path d="M 2999.919921875 2326.139892578125 L 3082.919921875 2325.27001953125 L 3081.81005859375 2215.110107421875 L 3081.169921875 2151.409912109375 L 2998.169921875 2152.280029296875 Z" class=" mapsvg-region" id="L-150" title="300 M2"></path>
                                        <path d="M 3166.780029296875 2324.389892578125 L 3250.64990234375 2323.52001953125 L 3248.989990234375 2213.360107421875 L 3248.030029296875 2149.659912109375 L 3165.0400390625 2150.5400390625 Z" class=" mapsvg-region" id="L-152" title="300 M2"></path>
                                        <path d="M 3250.64990234375 2323.52001953125 L 3333.64990234375 2322.639892578125 L 3332.739990234375 2232.409912109375 L 3331.89990234375 2148.7900390625 L 3248.030029296875 2149.659912109375 Z" class=" mapsvg-region" id="L-153" title="300 M2"></path>
                                        <path d="M 3333.64990234375 2322.639892578125 L 3417.52001953125 2321.77001953125 L 3416.0400390625 2223.760009765625 L 3414.89990234375 2147.919921875 L 3331.89990234375 2148.7900390625 Z" class=" mapsvg-region" id="L-154" title="300 M2"></path>
                                        <path d="M 3575.64990234375 1868.3499755859375 L 3574.780029296875 1784.47998046875 L 3376.4599609375 1786.22998046875 L 3383.449951171875 1870.0999755859375 Z" class=" mapsvg-region" id="L-158" title="337.93 M2"></path>
                                    </g>
                                    <g id="ARBOLES">
                                        <g>
                                            <circle class="st13" cx="1296.55" cy="1839.62" r="13.14"></circle>
                                            <path class="st14" d="M1284.92,1833.5c0,0-5.2,10.04,4.77,17.33c9.98,7.29,17.72-3.84,17.72-3.84    C1295.6,1852.44,1288.01,1848.14,1284.92,1833.5z"></path>
                                        </g>
                                        <g>
                                            <circle class="st13" cx="1293.48" cy="1812.21" r="20.98"></circle>
                                            <path class="st14" d="M1274.91,1802.44c0,0-8.31,16.03,7.62,27.68c15.93,11.65,28.31-6.13,28.31-6.13    C1291.96,1832.68,1279.84,1825.81,1274.91,1802.44z"></path>
                                        </g>
                                        <g>
                                            <circle class="st13" cx="1330.07" cy="1832" r="31.11"></circle>
                                            <path class="st14" d="M1302.54,1817.51c0,0-12.32,23.77,11.31,41.04c23.63,17.27,41.98-9.09,41.98-9.09    C1327.82,1862.36,1309.85,1852.17,1302.54,1817.51z"></path>
                                        </g>
                                        <g>
                                            <circle class="st13" cx="1303.22" cy="1915.21" r="13.14"></circle>
                                            <path class="st14" d="M1291.6,1909.09c0,0-5.2,10.04,4.77,17.33c9.98,7.29,17.72-3.84,17.72-3.84    C1302.27,1928.02,1294.69,1923.72,1291.6,1909.09z"></path>
                                        </g>
                                        <g>
                                            <circle class="st13" cx="1300.15" cy="1887.8" r="20.98"></circle>
                                            <path class="st14" d="M1281.59,1878.02c0,0-8.31,16.03,7.62,27.68c15.93,11.65,28.31-6.13,28.31-6.13    C1298.63,1908.27,1286.52,1901.4,1281.59,1878.02z"></path>
                                        </g>
                                        <g>
                                            <circle class="st13" cx="1336.74" cy="1907.59" r="31.11"></circle>
                                            <path class="st14" d="M1309.21,1893.09c0,0-12.32,23.77,11.31,41.04c23.63,17.27,41.98-9.09,41.98-9.09    C1334.49,1937.94,1316.53,1927.76,1309.21,1893.09z"></path>
                                        </g>
                                        <g>
                                            <circle class="st13" cx="1409.7" cy="1942.9" r="13.14"></circle>
                                            <path class="st14" d="M1401.56,1953.21c0,0,8.92,6.95,17.91-1.53s-0.54-18.13-0.54-18.13    C1422.13,1946.18,1416.51,1952.85,1401.56,1953.21z"></path>
                                        </g>
                                        <g>
                                            <circle class="st13" cx="1382.2" cy="1940.91" r="20.98"></circle>
                                            <path class="st14" d="M1369.19,1957.37c0,0,14.24,11.1,28.6-2.44c14.37-13.54-0.85-28.95-0.85-28.95    C1402.04,1946.15,1393.08,1956.8,1369.19,1957.37z"></path>
                                        </g>
                                        <g>
                                            <circle class="st13" cx="1408.34" cy="1908.55" r="31.11"></circle>
                                            <path class="st14" d="M1389.06,1932.97c0,0,21.12,16.46,42.42-3.61s-1.27-42.93-1.27-42.93    C1437.77,1916.32,1424.47,1932.11,1389.06,1932.97z"></path>
                                        </g>
                                        <g>
                                            <circle class="st13" cx="1346.08" cy="2004.98" r="13.14"></circle>
                                            <path class="st14" d="M1334.45,1998.86c0,0-5.2,10.04,4.77,17.33c9.98,7.29,17.72-3.84,17.72-3.84    C1345.13,2017.8,1337.54,2013.5,1334.45,1998.86z"></path>
                                        </g>
                                        <g>
                                            <circle class="st13" cx="1343.01" cy="1977.57" r="20.98"></circle>
                                            <path class="st14" d="M1324.44,1967.8c0,0-8.31,16.03,7.62,27.68s28.31-6.13,28.31-6.13    C1341.49,1998.04,1329.37,1991.17,1324.44,1967.8z"></path>
                                        </g>
                                        <g>
                                            <circle class="st13" cx="1379.6" cy="1997.36" r="31.11"></circle>
                                            <path class="st14" d="M1352.07,1982.87c0,0-12.32,23.77,11.31,41.04s41.98-9.09,41.98-9.09    C1377.34,2027.72,1359.38,2017.53,1352.07,1982.87z"></path>
                                        </g>
                                        <g>
                                            <circle class="st13" cx="1276.82" cy="1769.85" r="7.44"></circle>
                                            <path class="st14" d="M1273.18,1776.33c0,0,5.6,3.1,9.88-2.43c4.28-5.53-1.9-10.09-1.9-10.09    C1284.06,1770.58,1281.51,1774.81,1273.18,1776.33z"></path>
                                        </g>
                                        <g>
                                            <circle class="st13" cx="1261.26" cy="1771.16" r="11.88"></circle>
                                            <path class="st14" d="M1255.44,1781.51c0,0,8.94,4.95,15.78-3.89c6.84-8.84-3.03-16.12-3.03-16.12    C1272.82,1772.34,1268.75,1779.09,1255.44,1781.51z"></path>
                                        </g>
                                        <g>
                                            <circle class="st13" cx="1273.03" cy="1750.75" r="17.62"></circle>
                                            <path class="st14" d="M1264.4,1766.11c0,0,13.26,7.34,23.41-5.76s-4.49-23.9-4.49-23.9    C1290.18,1752.5,1284.13,1762.51,1264.4,1766.11z"></path>
                                        </g>
                                        <g>
                                            <circle class="st13" cx="3185.28" cy="1553.51" r="14.5"></circle>
                                            <path class="st14" d="M3174.33,1544c0,0-8.12,9.48,0.77,19.83s20.02,0.34,20.02,0.34    C3181.03,1567.05,3173.96,1560.52,3174.33,1544z"></path>
                                        </g>
                                        <g>
                                            <circle class="st13" cx="3188.89" cy="1523.27" r="23.17"></circle>
                                            <path class="st14" d="M3171.39,1508.09c0,0-12.97,15.14,1.22,31.67c14.19,16.54,31.98,0.54,31.98,0.54    C3182.09,1544.9,3170.8,1534.46,3171.39,1508.09z"></path>
                                        </g>
                                        <g>
                                            <circle class="st13" cx="3223.24" cy="1553.77" r="34.35"></circle>
                                            <path class="st14" d="M3197.29,1531.25c0,0-19.23,22.45,1.81,46.97c21.05,24.52,47.42,0.8,47.42,0.8    C3213.17,1585.83,3196.42,1570.36,3197.29,1531.25z"></path>
                                        </g>
                                        <g>
                                            <circle class="st13" cx="3257.21" cy="1463.98" r="50.45"></circle>
                                            <path class="st14" d="M3277.41,1510.21c0,0,39.67-17.64,27.22-63.44c-12.45-45.8-62.38-30.97-62.38-30.97    C3290.79,1427.81,3303.23,1458.89,3277.41,1510.21z"></path>
                                        </g>
                                        <path class="st15" d="M3255.66,1379.5"></path>
                                        <g>
                                            <circle class="st13" cx="3307.58" cy="1356.21" r="22.77"></circle>
                                            <path class="st14" d="M3286,1348.93c0,0-6.15,18.6,12.93,28.34c19.07,9.74,29.27-11.44,29.27-11.44    C3309.47,1378.41,3295.31,1373.13,3286,1348.93z"></path>
                                        </g>
                                        <g>
                                            <circle class="st13" cx="3277.9" cy="1353.82" r="23.17"></circle>
                                            <path class="st14" d="M3255.95,1346.41c0,0-6.25,18.93,13.15,28.84c19.41,9.91,29.79-11.64,29.79-11.64    C3279.83,1376.4,3265.42,1371.03,3255.95,1346.41z"></path>
                                        </g>
                                        <g>
                                            <circle class="st13" cx="3275.52" cy="1318.41" r="23.17"></circle>
                                            <path class="st14" d="M3253.57,1311c0,0-6.25,18.93,13.15,28.84c19.41,9.91,29.79-11.64,29.79-11.64    C3277.44,1340.99,3263.04,1335.62,3253.57,1311z"></path>
                                        </g>
                                        <g>
                                            <circle class="st13" cx="3297.23" cy="1329.59" r="22.77"></circle>
                                            <path class="st14" d="M3275.66,1322.31c0,0-6.15,18.6,12.93,28.34c19.07,9.74,29.27-11.44,29.27-11.44    C3299.12,1351.78,3284.96,1346.5,3275.66,1322.31z"></path>
                                        </g>
                                        <g>
                                            <circle class="st13" cx="3238.81" cy="1390.49" r="23.17"></circle>
                                            <path class="st14" d="M3259.66,1380.4c0,0-8.8-17.89-29.59-11.36c-20.79,6.52-13.1,29.17-13.1,29.17    C3221.61,1375.72,3235.65,1369.46,3259.66,1380.4z"></path>
                                        </g>
                                        <g>
                                            <circle class="st13" cx="2127.24" cy="1056.53" r="22.33"></circle>
                                            <path class="st14" d="M2105.57,1051.15c0,0-4.51,18.68,14.92,26.67c19.43,7.99,27.7-13.54,27.7-13.54    C2130.87,1078.08,2116.61,1074.06,2105.57,1051.15z"></path>
                                        </g>
                                        <g>
                                            <circle class="st13" cx="2098.04" cy="1056.58" r="22.72"></circle>
                                            <path class="st14" d="M2075.99,1051.1c0,0-4.59,19.01,15.18,27.13c19.77,8.13,28.18-13.77,28.18-13.77    C2101.74,1078.5,2087.22,1074.41,2075.99,1051.1z"></path>
                                        </g>
                                        <g>
                                            <circle class="st13" cx="2256.73" cy="1153.13" r="49.48"></circle>
                                            <path class="st14" d="M2216.83,1123.87c0,0-24.96,34.5,8.15,67.22c33.11,32.72,68.17-4.45,68.17-4.45    C2246.06,1200.35,2220.2,1180.11,2216.83,1123.87z"></path>
                                        </g>
                                        <g>
                                            <circle class="st13" cx="2099.96" cy="934.96" r="14.23"></circle>
                                            <path class="st14" d="M2088.49,926.55c0,0-7.18,9.92,2.34,19.32s19.6-1.28,19.6-1.28    C2096.89,948.54,2089.46,942.72,2088.49,926.55z"></path>
                                        </g>
                                        <g>
                                            <circle class="st13" cx="2101.05" cy="905.11" r="22.72"></circle>
                                            <path class="st14" d="M2082.73,891.67c0,0-11.46,15.84,3.74,30.87c15.21,15.02,31.3-2.04,31.3-2.04    C2096.15,926.8,2084.28,917.5,2082.73,891.67z"></path>
                                        </g>
                                        <g>
                                            <circle class="st13" cx="2092.86" cy="1022.16" r="22.72"></circle>
                                            <path class="st14" d="M2070.81,1016.68c0,0-4.59,19.01,15.18,27.13c19.77,8.13,28.18-13.77,28.18-13.77    C2096.56,1044.08,2082.04,1039.99,2070.81,1016.68z"></path>
                                        </g>
                                        <g>
                                            <circle class="st13" cx="2114.99" cy="1031.33" r="22.33"></circle>
                                            <path class="st14" d="M2093.31,1025.95c0,0-4.51,18.68,14.92,26.67c19.43,7.99,27.7-13.54,27.7-13.54    C2118.62,1052.88,2104.35,1048.86,2093.31,1025.95z"></path>
                                        </g>
                                        <g>
                                            <circle class="st13" cx="2137.09" cy="932.16" r="33.69"></circle>
                                            <path class="st14" d="M2109.92,912.23c0,0-17,23.49,5.55,45.77c22.55,22.28,46.42-3.03,46.42-3.03    C2129.82,964.31,2112.21,950.53,2109.92,912.23z"></path>
                                        </g>
                                        <g>
                                            <circle class="st16" cx="2170.5" cy="1001.52" r="22.72"></circle>
                                            <path class="st17" d="M2172.75,978.91c0,0-19.47-1.81-24.67,18.92c-5.2,20.73,17.68,25.91,17.68,25.91    C2149.34,1008.33,2151.3,993.37,2172.75,978.91z"></path>
                                        </g>
                                        <g>
                                            <circle class="st13" cx="2205.55" cy="959" r="22.72"></circle>
                                            <path class="st14" d="M2185.27,969.24c0,0,8.92,17.4,29.21,10.66c20.29-6.74,12.37-28.83,12.37-28.83    C2222.66,973.2,2208.99,979.57,2185.27,969.24z"></path>
                                        </g>
                                        <g>
                                            <circle class="st13" cx="2186.4" cy="1014.83" r="22.33"></circle>
                                            <path class="st14" d="M2188.45,1037.07c0,0,19.12-1.89,20.27-22.86c1.15-20.98-21.9-21.7-21.9-21.7    C2205.55,1004.31,2206.44,1019.11,2188.45,1037.07z"></path>
                                        </g>
                                        <g>
                                            <circle class="st13" cx="2251.07" cy="997.73" r="22.33"></circle>
                                            <path class="st14" d="M2254.98,975.74c0,0-18.94-3.24-25.6,16.68c-6.66,19.92,15.37,26.72,15.37,26.72    C2229.82,1002.81,2232.87,988.3,2254.98,975.74z"></path>
                                        </g>
                                        <g>
                                            <circle class="st13" cx="2174.3" cy="1105.09" r="22.33"></circle>
                                            <path class="st14" d="M2153.03,1098.28c0,0-5.74,18.34,13.11,27.6c18.86,9.26,28.54-11.67,28.54-11.67    C2176.49,1126.82,2162.52,1121.87,2153.03,1098.28z"></path>
                                        </g>
                                        <g>
                                            <circle class="st13" cx="2205.64" cy="1221.16" r="10.88"></circle>
                                            <path class="st14" d="M2210.3,1230.99c0,0,8.44-4.06,5.45-13.86c-2.98-9.79-13.65-6.27-13.65-6.27    C2212.64,1213.14,2215.53,1219.76,2210.3,1230.99z"></path>
                                        </g>
                                        <g>
                                            <circle class="st13" cx="2198.08" cy="1251.95" r="13.64"></circle>
                                            <path class="st14" d="M2188.13,1242.62c0,0-7.98,8.61,0,18.67c7.98,10.05,18.81,1.05,18.81,1.05    C2193.59,1264.52,2187.18,1258.12,2188.13,1242.62z"></path>
                                        </g>
                                        <g>
                                            <circle class="st16" cx="2231.91" cy="1063.66" r="22.72"></circle>
                                            <path class="st17" d="M2214.33,1078.06c0,0,12.48,15.05,30.82,4.07s5.82-30.82,5.82-30.82    C2251.69,1073.81,2239.72,1083,2214.33,1078.06z"></path>
                                        </g>
                                        <g>
                                            <circle class="st16" cx="953.52" cy="1377.8" r="12.62"></circle>
                                            <path class="st17" d="M943.13,1384.97c0,0,6.23,8.9,16.88,3.65c10.65-5.24,4.63-16.8,4.63-16.8    C964.01,1384.32,956.97,1388.86,943.13,1384.97z"></path>
                                        </g>
                                        <g>
                                            <circle class="st13" cx="958.89" cy="1368.38" r="8.89"></circle>
                                            <path class="st14" d="M965.39,1362.32c0,0-5.25-5.56-12.13-0.81c-6.88,4.75-1.5,12.17-1.5,12.17    C950.91,1364.92,955.35,1361.03,965.39,1362.32z"></path>
                                        </g>
                                        <g>
                                            <circle class="st13" cx="994.65" cy="1368.41" r="8.89"></circle>
                                            <path class="st14" d="M1001.15,1362.35c0,0-5.25-5.56-12.13-0.81c-6.88,4.75-1.5,12.17-1.5,12.17    C986.68,1364.94,991.12,1361.06,1001.15,1362.35z"></path>
                                        </g>
                                        <g>
                                            <ellipse transform="matrix(0.2492 -0.9684 0.9684 0.2492 -556.3687 2015.6901)" class="st16" cx="1021.86" cy="1366.68" rx="6.31" ry="6.2"></ellipse>
                                            <path class="st17" d="M1016.74,1370.28c0,0,3.04,4.43,8.29,1.79c5.25-2.64,2.31-8.4,2.31-8.4    C1027.01,1369.92,1023.53,1372.2,1016.74,1370.28z"></path>
                                        </g>
                                        <g>
                                            <circle class="st13" cx="1024.42" cy="1360.82" r="5.48"></circle>
                                            <path class="st14" d="M1028.42,1357.08c0,0-3.23-3.43-7.48-0.5c-4.24,2.92-0.92,7.5-0.92,7.5    C1019.5,1358.68,1022.24,1356.29,1028.42,1357.08z"></path>
                                        </g>
                                        <g>
                                            <circle class="st13" cx="1089.8" cy="1433.22" r="6.88"></circle>
                                            <path class="st14" d="M1093.85,1427.65c0,0-4.81-3.45-9.34,1.17c-4.53,4.62,0.66,9.48,0.66,9.48    C1083.23,1431.76,1086.03,1428.15,1093.85,1427.65z"></path>
                                        </g>
                                        <g>
                                            <ellipse transform="matrix(0.0603 -0.9982 0.9982 0.0603 -436.5507 2431.2993)" class="st16" cx="1072.99" cy="1447.5" rx="4.89" ry="4.8"></ellipse>
                                            <path class="st17" d="M1069.63,1451c0,0,2.97,2.92,6.57,0.14s0.52-6.73,0.52-6.73C1077.38,1449.2,1075.08,1451.45,1069.63,1451z"></path>
                                        </g>
                                        <g>
                                            <circle class="st13" cx="1074.07" cy="1442.67" r="4.24"></circle>
                                            <path class="st14" d="M1076.56,1439.24c0,0-2.96-2.13-5.76,0.72c-2.79,2.85,0.4,5.84,0.4,5.84    C1070.02,1441.77,1071.75,1439.54,1076.56,1439.24z"></path>
                                        </g>
                                        <g>
                                            <circle class="st16" cx="1101.81" cy="1443.78" r="9.77"></circle>
                                            <path class="st17" d="M1094.97,1450.76c0,0,6.04,5.85,13.37,0.29c7.32-5.56,1.04-13.45,1.04-13.45    C1110.74,1447.19,1106.06,1451.68,1094.97,1450.76z"></path>
                                        </g>
                                        <g>
                                            <circle class="st13" cx="1092.06" cy="1443.19" r="6.88"></circle>
                                            <path class="st14" d="M1096.1,1437.63c0,0-4.81-3.45-9.34,1.17c-4.53,4.62,0.66,9.48,0.66,9.48    C1085.48,1441.74,1088.28,1438.13,1096.1,1437.63z"></path>
                                        </g>
                                        <g>
                                            <circle class="st13" cx="1049.1" cy="1454.01" r="6.88"></circle>
                                            <path class="st14" d="M1053.15,1448.44c0,0-4.81-3.45-9.34,1.17c-4.53,4.62,0.66,9.48,0.66,9.48    C1042.53,1452.55,1045.33,1448.94,1053.15,1448.44z"></path>
                                        </g>
                                        <g>
                                            <ellipse transform="matrix(0.9924 -0.123 0.123 0.9924 -145.6325 138.8826)" class="st13" cx="1051.77" cy="1248.68" rx="6.15" ry="6.75"></ellipse>
                                            <path class="st14" d="M1052.39,1242c0,0-5.28-0.68-6.7,5.43c-1.42,6.11,4.78,7.81,4.78,7.81    C1046.03,1250.55,1046.57,1246.13,1052.39,1242z"></path>
                                        </g>
                                        <g>
                                            <ellipse transform="matrix(0.1282 -0.9918 0.9918 0.1282 -402.7246 2085.1865)" class="st16" cx="984.66" cy="1271.66" rx="5.38" ry="5.29"></ellipse>
                                            <path class="st17" d="M980.7,1275.24c0,0,3.04,3.43,7.2,0.64c4.16-2.78,1.07-7.35,1.07-7.35    C989.35,1273.85,986.65,1276.15,980.7,1275.24z"></path>
                                        </g>
                                        <g>
                                            <circle class="st13" cx="978.14" cy="1256.64" r="4.67"></circle>
                                            <path class="st14" d="M981.13,1253.06c0,0-3.1-2.56-6.38,0.36c-3.28,2.92,0.01,6.44,0.01,6.44    C973.75,1255.35,975.82,1253.04,981.13,1253.06z"></path>
                                        </g>
                                        <g>
                                            <ellipse transform="matrix(0.9924 -0.123 0.123 0.9924 -146.3443 139.7747)" class="st16" cx="1058.64" cy="1254.89" rx="8.74" ry="9.58"></ellipse>
                                            <path class="st17" d="M1056.5,1264.12c0,0,7.31,2.15,10.47-6.09c3.16-8.23-5.26-12.02-5.26-12.02    C1067.09,1253.58,1065.49,1259.65,1056.5,1264.12z"></path>
                                        </g>
                                        <g>
                                            <ellipse transform="matrix(0.9924 -0.123 0.123 0.9924 -147.6219 135.5865)" class="st13" cx="1024.09" cy="1263.15" rx="6.15" ry="6.75"></ellipse>
                                            <path class="st14" d="M1024.71,1256.46c0,0-5.28-0.68-6.7,5.43c-1.42,6.11,4.78,7.81,4.78,7.81    C1018.34,1265.01,1018.88,1260.59,1024.71,1256.46z"></path>
                                        </g>
                                        <g>
                                            <circle class="st13" cx="967.75" cy="1271.23" r="7.57"></circle>
                                            <path class="st14" d="M972.61,1265.42c0,0-5.02-4.15-10.35,0.58c-5.32,4.74,0.01,10.46,0.01,10.46    C960.64,1269.13,963.98,1265.38,972.61,1265.42z"></path>
                                        </g>
                                        <g>
                                            <ellipse transform="matrix(0.1282 -0.9918 0.9918 0.1282 -379.511 2099.3652)" class="st16" cx="1004.33" cy="1265.54" rx="5.38" ry="5.29"></ellipse>
                                            <path class="st17" d="M1000.38,1269.13c0,0,3.04,3.43,7.2,0.64s1.07-7.35,1.07-7.35    C1009.02,1267.74,1006.33,1270.03,1000.38,1269.13z"></path>
                                        </g>
                                        <g>
                                            <circle class="st13" cx="1005.88" cy="1260.31" r="4.67"></circle>
                                            <path class="st14" d="M1008.87,1256.73c0,0-3.1-2.56-6.38,0.36c-3.28,2.92,0.01,6.44,0.01,6.44    C1001.5,1259.02,1003.56,1256.71,1008.87,1256.73z"></path>
                                        </g>
                                        <g>
                                            <ellipse transform="matrix(0.1282 -0.9918 0.9918 0.1282 -393.1344 2082.4988)" class="st16" cx="987.93" cy="1264.86" rx="5.38" ry="5.29"></ellipse>
                                            <path class="st17" d="M983.97,1268.44c0,0,3.04,3.43,7.2,0.64s1.07-7.35,1.07-7.35C992.62,1267.05,989.92,1269.35,983.97,1268.44z    "></path>
                                        </g>
                                        <g>
                                            <circle class="st13" cx="1005.21" cy="1255.35" r="4.67"></circle>
                                            <path class="st14" d="M1008.21,1251.78c0,0-3.1-2.56-6.38,0.36c-3.28,2.92,0.01,6.44,0.01,6.44    C1000.83,1254.06,1002.89,1251.75,1008.21,1251.78z"></path>
                                        </g>
                                        <g>
                                            <ellipse transform="matrix(0.1282 -0.9918 0.9918 0.1282 -347.5006 2118.5093)" class="st16" cx="1031.23" cy="1256.91" rx="5.38" ry="5.29"></ellipse>
                                            <path class="st17" d="M1027.27,1260.49c0,0,3.04,3.43,7.2,0.64c4.16-2.78,1.07-7.35,1.07-7.35    C1035.92,1259.1,1033.22,1261.4,1027.27,1260.49z"></path>
                                        </g>
                                        <g>
                                            <circle class="st13" cx="1024.31" cy="1254.32" r="4.67"></circle>
                                            <path class="st14" d="M1027.3,1250.74c0,0-3.1-2.56-6.38,0.36c-3.28,2.92,0.01,6.44,0.01,6.44    C1019.93,1253.03,1021.99,1250.71,1027.3,1250.74z"></path>
                                        </g>
                                    </g>
                                    <g id="NUMERACIÓN">
                                        <text transform="matrix(1 0 0 1 984.6609 1225.0455)" class="st18 st19 st20">1</text>
                                        <text transform="matrix(1 0 0 1 972.6088 1128.7845)" class="st18 st19 st20">2</text>
                                        <text transform="matrix(1 0 0 1 956.6089 1040.1969)" class="st18 st19 st20">3</text>
                                        <text transform="matrix(1 0 0 1 937.923 951.0735)" class="st18 st19 st20">4</text>
                                        <text transform="matrix(1 0 0 1 904.6492 767.0027)" class="st18 st19 st20">5</text>
                                        <text transform="matrix(1 0 0 1 1037.7867 717.3694)" class="st18 st19 st20">6</text>
                                        <text transform="matrix(1 0 0 1 1122.5498 717.3692)" class="st18 st19 st20">7</text>
                                        <text transform="matrix(1 0 0 1 1289.573 717.369)" class="st18 st19 st20">9</text>
                                        <text transform="matrix(1 0 0 1 1204.6259 717.369)" class="st18 st19 st20">8</text>
                                        <text transform="matrix(1 0 0 1 1359.4135 717.9449)" class="st18 st19 st20">10</text>
                                        <text transform="matrix(1 0 0 1 1450.0776 717.3692)" class="st18 st19 st20">11</text>
                                        <text transform="matrix(1 0 0 1 1528.202 712.6804)" class="st18 st19 st20">12</text>
                                        <text transform="matrix(1 0 0 1 1612.4731 712.201)" class="st18 st19 st20">13</text>
                                        <text transform="matrix(1 0 0 1 1697.2853 712.201)" class="st18 st19 st20">14</text>
                                        <text transform="matrix(1 0 0 1 1777.3213 711.722)" class="st18 st19 st20">15</text>
                                        <text transform="matrix(1 0 0 1 1860.6967 707.6099)" class="st18 st19 st20">16</text>
                                        <text transform="matrix(1 0 0 1 1947.5206 706.6508)" class="st18 st19 st20">17</text>
                                        <text transform="matrix(1 0 0 1 2044.8179 707.1302)" class="st18 st19 st20">18</text>
                                        <text transform="matrix(1 0 0 1 2265.9961 699.9569)" class="st18 st19 st20">19</text>
                                        <text transform="matrix(1 0 0 1 2371.157 699.9569)" class="st18 st19 st20">20</text>
                                        <text transform="matrix(1 0 0 1 2460.9385 700.756)" class="st18 st19 st20">21</text>
                                        <text transform="matrix(1 0 0 1 2541.2888 699.9572)" class="st18 st19 st20">22</text>
                                        <text transform="matrix(1 0 0 1 2624.2593 700.4363)" class="st18 st19 st20">23</text>
                                        <text transform="matrix(1 0 0 1 2707.8674 699.957)" class="st18 st19 st20">24</text>
                                        <text transform="matrix(1 0 0 1 2791.9736 699.9572)" class="st18 st19 st20">25</text>
                                        <text transform="matrix(1 0 0 1 2874.3223 698.3205)" class="st18 st19 st20">26</text>
                                        <text transform="matrix(1 0 0 1 2957.3025 698.3202)" class="st18 st19 st20">27</text>
                                        <text transform="matrix(1 0 0 1 3041.4204 698.3203)" class="st18 st19 st20">28</text>
                                        <text transform="matrix(1 0 0 1 3123.5303 698.3203)" class="st18 st19 st20">29</text>
                                        <text transform="matrix(1 0 0 1 3206.509 698.3204)" class="st18 st19 st20">30</text>
                                        <text transform="matrix(1 0 0 1 3296.2163 698.3199)" class="st18 st19 st20">31</text>
                                        <text transform="matrix(1 0 0 1 3431.5757 745.0332)" class="st18 st19 st20">32</text>
                                        <text transform="matrix(1 0 0 1 3216.0017 951.1484)" class="st18 st19 st20">33</text>
                                        <text transform="matrix(1 0 0 1 3125.363 954.5685)" class="st18 st19 st20">34</text>
                                        <text transform="matrix(1 0 0 1 3037.6226 958.3077)" class="st18 st19 st20">35</text>
                                        <text transform="matrix(1 0 0 1 2947.2419 958.787)" class="st18 st19 st20">36</text>
                                        <text transform="matrix(1 0 0 1 2863.1526 959.2666)" class="st18 st19 st20">37</text>
                                        <text transform="matrix(1 0 0 1 2778.9265 959.7463)" class="st18 st19 st20">38</text>
                                        <text transform="matrix(1 0 0 1 2696.7188 959.7461)" class="st18 st19 st20">39</text>
                                        <text transform="matrix(1 0 0 1 2611.6479 960.2261)" class="st18 st19 st20">40</text>
                                        <text transform="matrix(1 0 0 1 2535.2771 961.8535)" class="st18 st19 st20">41</text>
                                        <text transform="matrix(1 0 0 1 2415.1514 960.7054)" class="st18 st19 st20">42</text>
                                        <text transform="matrix(1 0 0 1 1880.739 949.1483)" class="st18 st19 st20">43</text>
                                        <text transform="matrix(1 0 0 1 1775.8032 947.0733)" class="st18 st19 st20">44</text>
                                        <text transform="matrix(1 0 0 1 1678.5236 949.1486)" class="st18 st19 st20">45</text>
                                        <text transform="matrix(1 0 0 1 1581.0131 952.5682)" class="st18 st19 st20">46</text>
                                        <text transform="matrix(1 0 0 1 1483.5096 955.0029)" class="st18 st19 st20">47</text>
                                        <text transform="matrix(1 0 0 1 1385.9299 954.7462)" class="st18 st19 st20">48</text>
                                        <text transform="matrix(1 0 0 1 1288.6858 956.3077)" class="st18 st19 st20">49</text>
                                        <text transform="matrix(1 0 0 1 1172.5011 955.2257)" class="st18 st19 st20">50</text>
                                        <text transform="matrix(1 0 0 1 1195.0457 1117.7894)" class="st18 st19 st20">51</text>
                                        <text transform="matrix(1 0 0 1 1290.2645 1112.5535)" class="st18 st19 st20">52</text>
                                        <text transform="matrix(1 0 0 1 1388.0896 1106.241)" class="st18 st19 st20">53</text>
                                        <text transform="matrix(1 0 0 1 1485.6692 1100.8965)" class="st18 st19 st20">54</text>
                                        <text transform="matrix(1 0 0 1 1583.1727 1098.2778)" class="st18 st19 st20">55</text>
                                        <text transform="matrix(1 0 0 1 1680.6833 1095.4596)" class="st18 st19 st20">56</text>
                                        <text transform="matrix(1 0 0 1 1778.321 1095.4594)" class="st18 st19 st20">57</text>
                                        <text transform="matrix(1 0 0 1 1880.739 1093.6321)" class="st18 st19 st20">58</text>
                                        <text transform="matrix(1 0 0 1 2431.1428 1142.5679)" class="st18 st19 st20">59</text>
                                        <text transform="matrix(1 0 0 1 2528.4255 1139.8087)" class="st18 st19 st20">60</text>
                                        <text transform="matrix(1 0 0 1 2620.4106 1140.0441)" class="st18 st19 st20">61</text>
                                        <text transform="matrix(1 0 0 1 2697.2441 1139.8087)" class="st18 st19 st20">62</text>
                                        <text transform="matrix(1 0 0 1 2781.0857 1139.8087)" class="st18 st19 st20">63</text>
                                        <text transform="matrix(1 0 0 1 2865.3123 1136.5146)" class="st18 st19 st20">64</text>
                                        <text transform="matrix(1 0 0 1 2949.4011 1136.0439)" class="st18 st19 st20">65</text>
                                        <text transform="matrix(1 0 0 1 3035.4548 1136.0439)" class="st18 st19 st20">66</text>
                                        <text transform="matrix(1 0 0 1 3164.1885 1136.0438)" class="st18 st19 st20">67</text>
                                        <text transform="matrix(1 0 0 1 3006.0828 1404.3969)" class="st18 st19 st20">68</text>
                                        <text transform="matrix(1 0 0 1 2892.5977 1408.632)" class="st18 st19 st20">69</text>
                                        <text transform="matrix(1 0 0 1 2809.6013 1412.3971)" class="st18 st19 st20">70</text>
                                        <text transform="matrix(1 0 0 1 2735.2827 1412.3969)" class="st18 st19 st20">71</text>
                                        <text transform="matrix(1 0 0 1 2645.4714 1412.8763)" class="st18 st19 st20">72</text>
                                        <text transform="matrix(1 0 0 1 2562.3618 1412.3971)" class="st18 st19 st20">73</text>
                                        <text transform="matrix(1 0 0 1 2478.5461 1412.8766)" class="st18 st19 st20">74</text>
                                        <text transform="matrix(1 0 0 1 2363.1062 1412.8766)" class="st18 st19 st20">75</text>
                                        <text transform="matrix(1 0 0 1 2079.8083 1433.6926)" class="st18 st19 st20">76</text>
                                        <text transform="matrix(1 0 0 1 1963.2988 1427.693)" class="st18 st19 st20">77</text>
                                        <text transform="matrix(1 0 0 1 1877.7388 1429.1721)" class="st18 st19 st20">78</text>
                                        <text transform="matrix(1 0 0 1 1792.0159 1428.6929)" class="st18 st19 st20">79</text>
                                        <text transform="matrix(1 0 0 1 1700.4651 1429.6519)" class="st18 st19 st20">80</text>
                                        <text transform="matrix(1 0 0 1 1621.4729 1428.6931)" class="st18 st19 st20">81</text>
                                        <text transform="matrix(1 0 0 1 1527.9468 1428.6929)" class="st18 st19 st20">82</text>
                                        <text transform="matrix(1 0 0 1 1440.1053 1433.2157)" class="st18 st19 st20">83</text>
                                        <text transform="matrix(1 0 0 1 1297.4769 1443.194)" class="st18 st19 st20">84</text>
                                        <text transform="matrix(1 0 0 1 1319.4625 1595.8103)" class="st18 st19 st20">85</text>
                                        <text transform="matrix(1 0 0 1 1441.3447 1590.5732)" class="st18 st19 st20">86</text>
                                        <text transform="matrix(1 0 0 1 1529.2019 1587.5731)" class="st18 st19 st20">87</text>
                                        <text transform="matrix(1 0 0 1 1615.9037 1587.5729)" class="st18 st19 st20">88</text>
                                        <text transform="matrix(1 0 0 1 1703.7046 1587.5736)" class="st18 st19 st20">89</text>
                                        <text transform="matrix(1 0 0 1 1788.8103 1588.052)" class="st18 st19 st20">90</text>
                                        <text transform="matrix(1 0 0 1 1882.5289 1587.5732)" class="st18 st19 st20">91</text>
                                        <text transform="matrix(1 0 0 1 1963.8036 1587.573)" class="st18 st19 st20">92</text>
                                        <text transform="matrix(1 0 0 1 2063.0972 1587.5731)" class="st18 st19 st20">93</text>
                                        <text transform="matrix(1 0 0 1 2273.4041 1588.1173)" class="st18 st19 st20">94</text>
                                        <text transform="matrix(1 0 0 1 2398.0774 1581.8085)" class="st18 st19 st20">95</text>
                                        <text transform="matrix(1 0 0 1 2480.3657 1577.1029)" class="st18 st19 st20">96</text>
                                        <text transform="matrix(1 0 0 1 2564.9351 1573.8087)" class="st18 st19 st20">97</text>
                                        <text transform="matrix(1 0 0 1 2647.406 1573.8087)" class="st18 st19 st20">98</text>
                                        <text transform="matrix(1 0 0 1 2731.3762 1573.8088)" class="st18 st19 st20">99</text>
                                        <text transform="matrix(1 0 0 1 2803.4209 1573.8088)" class="st18 st19 st20 st21">100</text>
                                        <text transform="matrix(1 0 0 1 2893.6367 1573.5259)" class="st18 st19 st20 st21">101</text>
                                        <text transform="matrix(1 0 0 1 2990.2456 1573.5256)" class="st18 st19 st20 st21">102</text>
                                        <text transform="matrix(1 0 0 1 3212.4624 1827.2878)" class="st18 st19 st20 st21">103</text>
                                        <text transform="matrix(1 0 0 1 3125.5298 1827.2881)" class="st18 st19 st20 st21">104</text>
                                        <text transform="matrix(1 0 0 1 3041.4204 1829.6235)" class="st18 st19 st20 st21">105</text>
                                        <text transform="matrix(1 0 0 1 2957.302 1829.6239)" class="st18 st19 st20 st21">106</text>
                                        <text transform="matrix(1 0 0 1 2874.4929 1829.6233)" class="st18 st19 st20 st21">107</text>
                                        <text transform="matrix(1 0 0 1 2790.0723 1830.0081)" class="st18 st19 st20 st21">108</text>
                                        <text transform="matrix(1 0 0 1 2705.8225 1830.0081)" class="st18 st19 st20 st21">109</text>
                                        <text transform="matrix(1 0 0 1 2630.259 1830.392)" class="st18 st19 st20 st21">110</text>
                                        <text transform="matrix(1 0 0 1 2552.1777 1831.7753)" class="st18 st19 st20 st21">111</text>
                                        <text transform="matrix(1 0 0 1 2464.9951 1834.5645)" class="st18 st19 st20 st21">112</text>
                                        <text transform="matrix(1 0 0 1 2382.1787 1834.5647)" class="st18 st19 st20 st21">113</text>
                                        <text transform="matrix(1 0 0 1 2294.9565 1834.9484)" class="st18 st19 st20 st21">114</text>
                                        <text transform="matrix(1 0 0 1 2212.6035 1837.3883)" class="st18 st19 st20 st21">115</text>
                                        <text transform="matrix(1 0 0 1 2016.9854 1835.4467)" class="st18 st19 st20 st21">116</text>
                                        <text transform="matrix(1 0 0 1 1909.9288 1839.7134)" class="st18 st19 st20 st21">117</text>
                                        <text transform="matrix(1 0 0 1 1825.4885 1839.3296)" class="st18 st19 st20 st21">118</text>
                                        <text transform="matrix(1 0 0 1 1740.6827 1839.7141)" class="st18 st19 st20 st21">119</text>
                                        <text transform="matrix(1 0 0 1 1651.4062 1840.0981)" class="st18 st19 st20 st21">120</text>
                                        <text transform="matrix(1 0 0 1 1529.2017 1840.9606)" class="st18 st19 st20 st21">121</text>
                                        <text transform="matrix(1 0 0 1 1554.9404 2013.329)" class="st18 st19 st20 st21">122</text>
                                        <text transform="matrix(1 0 0 1 1655.8406 2013.3292)" class="st18 st19 st20 st21">123</text>
                                        <text transform="matrix(1 0 0 1 1739.1768 2013.3295)" class="st18 st19 st20 st21">124</text>
                                        <text transform="matrix(1 0 0 1 1822.1895 2013.7126)" class="st18 st19 st20 st21">125</text>
                                        <text transform="matrix(1 0 0 1 1905.2916 2013.329)" class="st18 st19 st20 st21">126</text>
                                        <text transform="matrix(1 0 0 1 2010.7113 2009.7998)" class="st18 st19 st20 st21">127</text>
                                        <text transform="matrix(1 0 0 1 2205.2881 2006.447)" class="st18 st19 st20 st21">128</text>
                                        <text transform="matrix(1 0 0 1 2291.7759 2006.4474)" class="st18 st19 st20 st21">129</text>
                                        <text transform="matrix(1 0 0 1 2376.3228 2006.4468)" class="st18 st19 st20 st21">130</text>
                                        <text transform="matrix(1 0 0 1 2465.4255 2006.4476)" class="st18 st19 st20 st21">131</text>
                                        <text transform="matrix(1 0 0 1 2544.7896 2006.4475)" class="st18 st19 st20 st21">132</text>
                                        <text transform="matrix(1 0 0 1 2627.1177 2004.0942)" class="st18 st19 st20 st21">133</text>
                                        <text transform="matrix(1 0 0 1 2709.9124 2001.9248)" class="st18 st19 st20 st21">134</text>
                                        <text transform="matrix(1 0 0 1 2794.0115 2001.925)" class="st18 st19 st20 st21">135</text>
                                        <text transform="matrix(1 0 0 1 2876.9797 1999.859)" class="st18 st19 st20 st21">136</text>
                                        <text transform="matrix(1 0 0 1 2961.5767 1997.0349)" class="st18 st19 st20 st21">137</text>
                                        <text transform="matrix(1 0 0 1 3045.1536 1997.0352)" class="st18 st19 st20 st21">138</text>
                                        <text transform="matrix(1 0 0 1 3127.0171 1997.0354)" class="st18 st19 st20 st21">139</text>
                                        <text transform="matrix(1 0 0 1 3224.6592 1997.0354)" class="st18 st19 st20 st21">140</text>
                                        <text transform="matrix(1 0 0 1 2249.6638 2264.0747)" class="st18 st19 st20 st21">141</text>
                                        <text transform="matrix(1 0 0 1 2339.4392 2264.0745)" class="st18 st19 st20 st21">142</text>
                                        <text transform="matrix(1 0 0 1 2423.1309 2264.0745)" class="st18 st19 st20 st21">143</text>
                                        <text transform="matrix(1 0 0 1 2506.5842 2264.4585)" class="st18 st19 st20 st21">144</text>
                                        <text transform="matrix(1 0 0 1 2588.5386 2264.0742)" class="st18 st19 st20 st21">145</text>
                                        <text transform="matrix(1 0 0 1 2671.6409 2261.9766)" class="st18 st19 st20 st21">146</text>
                                        <text transform="matrix(1 0 0 1 2756.5308 2261.1528)" class="st18 st19 st20 st21">147</text>
                                        <text transform="matrix(1 0 0 1 2840.5195 2261.1533)" class="st18 st19 st20 st21">148</text>
                                        <text transform="matrix(1 0 0 1 2923.7134 2261.1528)" class="st18 st19 st20 st21">149</text>
                                        <text transform="matrix(1 0 0 1 3005.0823 2261.1523)" class="st18 st19 st20 st21">150</text>
                                        <text transform="matrix(1 0 0 1 3093.2205 2259.1521)" class="st18 st19 st20 st21">151</text>
                                        <text transform="matrix(1 0 0 1 3173.4536 2258.1528)" class="st18 st19 st20 st21">152</text>
                                        <text transform="matrix(1 0 0 1 3255.7129 2258.1521)" class="st18 st19 st20 st21">153</text>
                                        <text transform="matrix(1 0 0 1 3342.1145 2258.1528)" class="st18 st19 st20 st21">154</text>
                                        <text transform="matrix(1 0 0 1 3462.5027 2203.0613)" class="st18 st19 st20 st21">155</text>
                                        <text transform="matrix(1 0 0 1 3456.5083 2018.7998)" class="st18 st19 st20 st21">156</text>
                                        <text transform="matrix(1 0 0 1 3446.6797 1925.8948)" class="st18 st19 st20 st21">157</text>
                                        <text transform="matrix(1 0 0 1 3443.915 1844.5648)" class="st18 st19 st20 st21">158</text>
                                        <text transform="matrix(1 0 0 1 3437.2517 1761.1472)" class="st18 st19 st20 st21">159</text>
                                        <text transform="matrix(1 0 0 1 3437.5754 1677.1943)" class="st18 st19 st20 st21">160</text>
                                        <text transform="matrix(1 0 0 1 3443.7393 1594.8103)" class="st18 st19 st20 st21">161</text>
                                        <text transform="matrix(1 0 0 1 3440.0627 1510.2065)" class="st18 st19 st20 st21">162</text>
                                        <text transform="matrix(1 0 0 1 3443.063 1427.6931)" class="st18 st19 st20 st21">163</text>
                                        <text transform="matrix(1 0 0 1 3443.915 1344.4482)" class="st18 st19 st20 st21">164</text>
                                        <text transform="matrix(1 0 0 1 3441.6797 1259.2516)" class="st18 st19 st20 st21">165</text>
                                        <text transform="matrix(1 0 0 1 3438.55 1176.5634)" class="st18 st19 st20 st21">166</text>
                                        <text transform="matrix(1 0 0 1 3438.0371 1094.2778)" class="st18 st19 st20 st21">167</text>
                                        <text transform="matrix(1 0 0 1 3437.2517 1008.8588)" class="st18 st19 st20 st21">168</text>
                                        <text transform="matrix(1 0 0 1 3433.303 924.4673)" class="st18 st19 st20 st21">169</text>
                                        <text transform="matrix(1 0 0 1 1018.4509 1534.1274)" class="st18 st19 st20 st21">170</text>
                                        <text transform="matrix(1 0 0 1 1028.1632 1626.5061)" class="st18 st19 st20 st22">171</text>
                                        <text transform="matrix(1 0 0 1 1042.4836 1706.9767)" class="st18 st19 st20 st21">172</text>
                                        <text transform="matrix(1 0 0 1 1053.7001 1791.226)" class="st18 st19 st20 st21">173</text>
                                        <text transform="matrix(1 0 0 1 1070.0375 1873.918)" class="st18 st19 st20 st21">174</text>
                                        <text transform="matrix(1 0 0 1 1083.755 1952.6235)" class="st18 st19 st20 st21">175</text>
                                        <text transform="matrix(1 0 0 1 1102.5717 2044.8259)" class="st18 st19 st20 st21">176</text>
                                        <text transform="matrix(1 0 0 1 1145.6843 2230.9116)" class="st18 st19 st20 st21">177</text>
                                        <text transform="matrix(1 0 0 1 1302.1514 2272.2117)" class="st18 st19 st20 st21">178</text>
                                        <text transform="matrix(1 0 0 1 1385.9302 2272.5957)" class="st18 st19 st20 st21">179</text>
                                        <text transform="matrix(1 0 0 1 1464.9468 2272.2117)" class="st18 st19 st20 st21">180</text>
                                        <text transform="matrix(1 0 0 1 1555.25 2272.2122)" class="st18 st19 st20 st21">181</text>
                                        <text transform="matrix(1 0 0 1 1632.8589 2272.2119)" class="st18 st19 st20 st21">182</text>
                                        <text transform="matrix(1 0 0 1 1717.5536 2272.2119)" class="st18 st19 st20 st21">183</text>
                                        <text transform="matrix(1 0 0 1 1801.7588 2272.2114)" class="st18 st19 st20 st21">184</text>
                                        <text transform="matrix(1 0 0 1 1885.3536 2272.2114)" class="st18 st19 st20 st21">185</text>
                                        <text transform="matrix(1 0 0 1 1966.1683 2272.2124)" class="st18 st19 st20 st21">186</text>
                                        <text transform="matrix(1 0 0 1 2057.0332 2272.2109)" class="st18 st19 st20 st21">187</text>
                                    </g>
                                    <g id="AREAS_VERDES_AVENIDAS_hover">
                                        <path class="st230" title="Áreas verdes en avenida" data-stroke-width="1.2" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="auto" data-bs-html="true" d="M745.6,615.97c0,0-0.22-4.09-0.72-4.08c-0.5,0.01-10.37-0.18-10.32,0.16c0.05,0.33,1.24,8.71,1.24,8.71   l10.01,70.05l13.58,95.09l12.52,87.61l11.34,73.81l29.79,190.12l6.92,42.79l9.2,52.36l11.91,69.45l13.27,76.93l16.06,89.15   l18.56,110.14c0,0,14.21,81.47,14.7,81.38s10.36-1.91,9.06-11.19c-1.3-9.28-2.71-15.28-2.71-15.28l-3.57-19.63l-7.38-41.47   l-8.59-48.82l-9.06-50.24l-10.59-58.59l-8.94-53.06l-9.76-57.18l-8.47-49.53l-8-45.88L825.41,1151l-8.35-54.47l-8.12-52.94   l-8.12-52.71l-8.47-54.59l-5.18-32.71l-7.53-50.35l-8.59-60.59l-8-55.29l-9.29-63.53l-6.59-47.29L745.6,615.97z"></path>
                                        <path class="st230" title="Áreas verdes en avenida" data-stroke-width="1.2" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="auto" data-bs-html="true" d="M912.96,1718.22l1.99,10.76l2.8,18.67l4.89,27.98l3.41,23.01l2.12,11.54l4.49,29.05l5.37,32.61l4,25.02   l4.21,26.46l4.25,30.58l4.46,28.44l4.33,29.37l4.57,33.95l5.88,36.92l4.22,30.18l3.88,27.31l3.57,27.13l3.53,26.78l4.96,36.2   l3.62,27.72l4.09,31.29l3.61,25.85l1.85,15.94l1.81,13.85c0,0,0.39,4.03,0.52,4.02c0.14-0.01,10.52-0.62,10.48-0.87   c-0.03-0.25-1.03-7.78-1.03-7.78l-1.44-10.84l-1.92-14.43l-2.91-21.92l-4.66-35.08l-5.86-44.15l-6.7-50.49l-3.47-26.14l-6.45-44.41   l-5.85-40.29l-7.53-51.82l-6.75-46.45l-6.77-45.02l-7.17-45.28l-6.9-43.55l-7.67-48.45l-6.92-43.73l-2.16-12.51   c0,0-2.69-7.8-10.76-7.1C910.65,1708.74,912.96,1718.22,912.96,1718.22z"></path>
                                        <path class="st230" title="Áreas verdes separador" data-stroke-width="1.2" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="auto" data-bs-html="true" d="M1204.39,1296.97c0,0,23.08-8.01,106.32-27.67c83.24-19.66,258.51-49.46,360.14-47.17l50.22-1.08   c0,0,102.37,0.47,112.1,2.36c0,0,123.08,7.74,141.14,12.4l63.73,9.1c0,0,7.28,2.38,6.04,8.15c-1.24,5.77-9.18,5.95-9.18,5.95   l-22.83-3.95l-52.35-6.95c0,0-95.26-10.78-128.89-10.83l-53.88-1.9l-61.29-0.3c-146.2-2.16-316.71,24.81-506.73,75.13   c0,0-6.11,0.96-8.28-4.36C1198.47,1300.53,1204.39,1296.97,1204.39,1296.97z"></path>
                                        <path class="st230" title="Áreas verdes de entrada" data-stroke-width="1.2" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="auto" data-bs-html="true" d="M934.98,1356.29l9.12,52.96c-0.91,0.37,79.96-35.89,96.98-41.55l49.71-18.87l25.46-9.05c0,0,6.2-2.68,4.3-8.86   c-1.9-6.18-8.15-5.13-8.15-5.13l-33.81,9.23c-22.8,5.57-46.35,10.3-70.79,14.02c-12.51,2.26-50.16,6.17-59.98,6.49   C938.45,1355.84,934.98,1356.29,934.98,1356.29z"></path>
                                        <path class="st230" title="Áreas verdes de entrada" data-stroke-width="1.2" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="auto" data-bs-html="true" d="M957.34,1480.45c43.4-22.2,95.24-43.51,153.22-64.16c0,0,6.39-1.95,11.46,0.74   c5.07,2.69,11.03,5.39,12.72,13.57s3.44,17.52,3.44,17.52l-180.84,33.34"></path>
                                        <path class="st230" title="Áreas verdes de entrada" data-stroke-width="1.2" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="auto" data-bs-html="true" d="M1105.86,1229.71c0,0,2.91,12.58-0.87,18.31s-6.08,9.98-18.58,13.45c-12.5,3.47-51.71,12.73-51.71,12.73   s-32.93,6.43-40.46,7.61c-7.53,1.18-44.48,4.37-44.48,4.37l-26.59,1.55l-4.95-29.22L1105.86,1229.71"></path>
                                    </g>
                                    <g id="Areas Verdes simbolo">
                                        <path class="st230" d="M1206.33,1607.13l13.91,112.69c11.02,76.49,26.23,152.83,45.29,229.03c0,0,32.96,112.54,87.84,129.93   c54.88,17.39,84.99-1.21,111.23-30.03c26.23-28.82,17.8-82.26,17.8-82.26s-4.81-44.54-28.01-85.37   c-23.2-40.83-48.17-63.86-48.17-63.86l-25.17-22.22c-31.89-29.25-59.75-59.09-83.71-89.5l-28.23-37.88l-16.96-25.36l-15.2-24.78   l-9.3-16.29c0,0-7.58-7.19-13.37-5C1208.47,1598.41,1206.33,1607.13,1206.33,1607.13z" title="Áreas verdes y jardineras" data-stroke-width="1.2" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="auto" data-bs-html="true"></path>
                                        <path class="st230" d="M3324.66,1126.21c-31.37,103.85-128.15,225.19-140.42,237.38c-7.29,6.59-12.74,18.17-20.56,28.9   c-39.44,66.28-46.78,152.9-22.37,193.04c44.3,55.04,94.25,66.39,152.23,15.63c18.62-24.48,32.13-59.77,41.74-103.31   c6.1-30.59,8.59-63.63,9.69-97.6l3.29-98.29l-1.15-119.09l-2.34-53.28c0,0-1.96-9.21-9.18-9.84   C3328.35,1119.12,3324.66,1126.21,3324.66,1126.21z" title="Áreas verdes y jardineras" data-stroke-width="1.2" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="auto" data-bs-html="true"></path>
                                        <path class="st230" d="M2037.02,918.87c0,0-39.23,117.99,28.82,236.29c68.05,118.31,142.82,132.42,180.61,120.42   c37.79-12,94.54-41.55,85.58-167.95c-8.96-126.4-87.54-218.61-137.54-244.5c-50.01-25.9-92.19-18.33-127.97,11.36   C2048.47,889.47,2037.02,918.87,2037.02,918.87z" title="Áreas verdes y jardineras" data-stroke-width="1.2" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="auto" data-bs-html="true"></path>
                                    </g>
                                    <g id="LEYENDA">
                                        <text class="st-26" transform="translate(3970 1950)">Premium</text>
                                        <rect class="st-25" x="3850" y="1900" width="80" height="80"></rect>
                                        <text class="st-26" transform="translate(3970 2080)">Estandar</text>
                                        <rect class="st-24" x="3850" y="2018" width="80" height="80"></rect>
                                    </g>
                                    <g class="area_selection"  data-id="stage_3">
                                        <path class="st28 mapsvg-region" d="M818.95,614.41l0.03,0.2l7.22,50.31l20.29,143.32l13.87,92.98l37-5.63l65.03-9.9l70.09-10.67l-8.03-32.54   l-11.99-48.33l-2.69-10.86l-2.62-173.86c0,0-188.77,1.31-188.71,1.75C818.49,611.61,818.95,614.41,818.95,614.41z" data-id="L-5" title="1010.2 M2"></path>
                                        <rect x="1293.69" y="2171.06" transform="matrix(0.9999 -0.0105 0.0105 0.9999 -23.6921 14.1783)" class="st28 mapsvg-region" width="83" height="173.86" data-id="L-178" title="300 M2"></rect>
                                        <rect x="1376.68" y="2170.19" transform="matrix(0.9999 -0.0104 0.0104 0.9999 -23.4325 14.8983)" class="st28 mapsvg-region" width="83.87" height="173.86" data-id="L-179" title="300 M2"></rect>
                                        <rect x="1460.55" y="2169.32" transform="matrix(0.9999 -0.0105 0.0105 0.9999 -23.6645 15.9346)" class="st28 mapsvg-region" width="83" height="173.86" data-id="L-180" title="300 M2"></rect>
                                        <rect x="1543.55" y="2168.44" transform="matrix(0.9999 -0.0104 0.0104 0.9999 -23.4112 16.6405)" class="st28 mapsvg-region" width="83.87" height="173.86" data-id="L-181" title="300 M2"></rect>
                                        <rect x="1627.42" y="2167.57" transform="matrix(0.9999 -0.0105 0.0105 0.9999 -23.6369 17.6908)" class="st28 mapsvg-region" width="83" height="173.86" data-id="L-182" title="300 M2"></rect>
                                        <rect x="1710.42" y="2166.69" transform="matrix(0.9999 -0.0104 0.0104 0.9999 -23.378 18.3742)" class="st28 mapsvg-region" width="83.87" height="173.86" data-id="L-183" title="300 M2"></rect>
                                        <path class="st28 mapsvg-region" d="M2245.88,2334.54l86.57-0.94l-0.65-42.78l-1.39-92.46l-0.58-38.21c0,0-122.31,0.52-122.23,0.87   c0.08,0.35,0.57,2.62,0.57,2.62l1.97,9.53l7.42,38.09l7.22,36.08l7.04,28.6l7.12,29.47L2245.88,2334.54z" data-id="L-141" title="379.66 M2"></path>
                                        <rect x="3082.04" y="2150.97" transform="matrix(0.9999 -0.0104 0.0104 0.9999 -23.1398 32.6597)" class="st28 mapsvg-region" width="83.87" height="173.86" data-id="L-151" title="300 M2"></rect>
                                        <path class="st28 mapsvg-region" d="M3417.52,2321.77l71.07-0.76l59.29-0.63c0,0,33.01-0.09,33.01-0.35c0-0.26-0.13-11.73-0.13-11.73l-0.57-48.8   l-0.3-43.05l-0.64-44.56l-0.26-47.65l-0.87-54.7l0.15-20.34l-163.68,1.92v59.24l0.31,37L3417.52,2321.77z" data-id="L-155" title="917.85 M2"></path>
                                        <path class="st28 mapsvg-region" d="M3578.27,2049.19l-1.75-97.85l-181.72,1.75c0,0,7.78,42.31,10.13,52.94c2.36,10.63,9.65,46.26,9.65,46.26   L3578.27,2049.19z" data-id="L-156" title="349.18 M2"></path>
                                        <path class="st28 mapsvg-region" d="M3576.52,1951.35l-0.87-83l-192.2,1.75c0,0,10.69,80.03,11.36,83   C3395.47,1956.06,3576.52,1951.35,3576.52,1951.35z" data-id="L-157" title="323.97 M2"></path>
                                        <path class="st28 mapsvg-region" d="M3574.78,1784.48l-0.87-83.87l-198.32,2.62c0,0-0.16,52.47,0,53.77c0.16,1.3,0.87,29.23,0.87,29.23   L3574.78,1784.48z" data-id="L-159" title="343.38 M2"></path>
                                        <path class="st28 mapsvg-region" d="M3573.9,1700.61l-0.87-83l-195.7,1.75c0,0-1.89,35.82-1.82,43.05c0.07,7.24,0.07,40.82,0.07,40.82   L3573.9,1700.61z" data-id="L-160" title="341.23 M2"></path>
                                        <path class="st28 mapsvg-region" d="M3573.03,1617.61l-0.87-83.87c0,0-190.86,2.26-190.92,2.55c-0.06,0.29-1.03,11.06-1.03,11.06l-0.67,14.42   l-1.13,26.52l-0.78,18.28l-0.29,12.79L3573.03,1617.61z" data-id="L-161" title="334.45 M2"></path>
                                        <rect x="3389.12" y="1200.88" transform="matrix(0.9999 -0.0104 0.0104 0.9999 -12.756 36.3046)" class="st28 mapsvg-region" width="179.98" height="83.87" data-id="L-165" title="309.81 M2"></rect>
                                        <rect x="3195.61" y="584.52" transform="matrix(0.9999 -0.0104 0.0104 0.9999 -6.8181 33.7577)" class="st28 mapsvg-region" width="83.87" height="173.86" data-id="L-30" title="300 M2"></rect>
                                        <rect x="3112.62" y="585.4" transform="matrix(0.9999 -0.0105 0.0105 0.9999 -6.9052 33.2521)" class="st28 mapsvg-region" width="83" height="173.86" data-id="L-29" title="300 M2"></rect>
                                        <rect x="3028.75" y="586.27" transform="matrix(0.9999 -0.0104 0.0104 0.9999 -6.8453 32.0198)" class="st28 mapsvg-region" width="83.87" height="173.86" data-id="L-28" title="300 M2"></rect>
                                        <rect x="2444.28" y="593.26" transform="matrix(0.9999 -0.0104 0.0104 0.9999 -6.9498 25.9325)" class="st28 mapsvg-region" width="83.87" height="173.86" data-id="L-21" title="300 M2"></rect>
                                        <rect x="2361.28" y="594.13" transform="matrix(0.9999 -0.0105 0.0105 0.9999 -7.0353 25.3278)" class="st28 mapsvg-region" width="83" height="173.86" data-id="L-20" title="300 M2"></rect>
                                        <path class="st28 mapsvg-region" d="M2360.41,594.57l-169.04,1.39c8.18,31.93,17.52,63.03,28.19,93.2c10.84,29.28,21.87,56.47,33.24,80.08   l109.35-0.81L2360.41,594.57z" data-id="L-19" title="512.21 M2"></path>
                                        <path class="st28 mapsvg-region" d="M2109.13,597.1l-99.93,0.97l1.75,173.86l154.64-1.75C2141.56,713.88,2122.39,656.28,2109.13,597.1z" data-id="L-18" title="446.26 M2"></path>
                                        <rect x="1759.34" y="600.25" transform="matrix(0.9999 -0.0104 0.0104 0.9999 -7.0598 18.7988)" class="st28 mapsvg-region" width="83.87" height="173.86" data-id="L-15" title="300 M2"></rect>
                                        <rect x="1676.34" y="601.12" transform="matrix(0.9999 -0.0105 0.0105 0.9999 -7.1468 18.1189)" class="st28 mapsvg-region" width="83" height="173.86" data-id="L-14" title="300 M2"></rect>
                                        <rect x="1258.74" y="606.36" transform="matrix(0.9999 -0.0104 0.0104 0.9999 -7.1506 13.5851)" class="st28 mapsvg-region" width="83.87" height="173.86" data-id="L-9" title="300 M2"></rect>
                                        <path class="st11" d="M1428.35,844.65"></path>
                                        <path class="st28 mapsvg-region" d="M1851.95,854.05l107.36-1.71c0,0,22.55,2.94,19.03,23.92c-3.52,20.98-10.22,21.28-16.04,55.13   c-5.82,33.85-6.38,67.69-6.38,67.69l-102.22,0.87L1851.95,854.05z" data-id="L-43" title="339.54 M2"></path>
                                        <path class="st28 mapsvg-region" d="M1955.91,999.07c0,0,1.15,49.17,6.79,74.24c5.64,25.07,13.04,53.42,17.64,63.03   c4.6,9.6-1.04,17.71-1.04,17.71s-4.25,10.49-20.01,10.01c-15.76-0.47-50.05-5.45-50.05-5.45l-53.8-3.16l-1.75-155.51   L1955.91,999.07z" data-id="L-58" title="371.43 M2"></path>
                                        <path class="st28 mapsvg-region" d="M1855.44,1155.46c-30.63-1.59-63.4-2.72-97.85-3.49l-1.75-151.14l97.85-0.87L1855.44,1155.46z" data-id="L-57" title="307.71 M2"></path>
                                        <path class="st28 mapsvg-region " d="M 1757.6 1154.940832157969 C 1723.8799999999999 1154.550832157969 1691.6799999999998 1154.800832157969 1660.6299999999999 1155.550832157969 L 1658.8799999999999 1004.6808321579689 L 1755.85 1003.8108321579689 L 1757.6 1154.940832157969 Z" data-id="L-56" title="303.47 M2"></path>
                                        <path class="st28 mapsvg-region " d="M1660.63,1152.57c-37.77,1.57-70.15,3.68-97.86,6.23l-1.74-155.36l97.85-1.75L1660.63,1152.57z" data-id="L-55" title="308.9 M2"></path>
                                        <path class="st28 mapsvg-region" d="M1562.76,1158.8c-28.33,2.6-60.81,6.48-96.96,11.51l-1.75-165.99l96.97-0.87L1562.76,1158.8z" data-id="L-54" title="324.06 M2"></path>
                                        <path class="st28 mapsvg-region" d="M1465.8,1170.31c-35.56,5.36-67.78,10.8-97.1,16.3l-2.5-181.42l97.85-0.87L1465.8,1170.31z" data-id="L-53" title="349.04 M2"></path>
                                        <path class="st28 mapsvg-region" d="M1208.75,1383.37c72.6-22.06,144.98-39.43,217.15-51.74l1.46,156.68l-196.8,1.92   C1221.58,1456.05,1214.43,1420.33,1208.75,1383.37z" data-id="L-84" title="583.92 M2"></path>
                                        <path class="st28 mapsvg-region" d="M1425.9,1331.63c27.8-5.05,56.58-9.28,86.21-12.8l2.62,168.61l-87.36,0.87L1425.9,1331.63z" data-id="L-83" title="292.39 M2"></path>
                                        <path class="st28 mapsvg-region" d="M1512.1,1318.83c27.93-3.71,57.2-6.57,87.51-8.78l1.6,176.52l-86.49,0.87L1512.1,1318.83z" data-id="L-82" title="310.05 M2"></path>
                                        <path class="st28 mapsvg-region" d="M1599.61,1310.04c26.84-2.17,55.9-3.51,86.34-4.32l2.62,179.97l-87.36,0.87L1599.61,1310.04z" data-id="L-81" title="320.16 M2"></path>
                                        <path class="st28 mapsvg-region" d="M1685.96,1305.72c27.5-1.06,56.92-1.08,87.42-0.51l1.69,178.73l-86.49,1.75L1685.96,1305.72z" data-id="L-80" title="322.78 M2"></path>
                                        <path class="st28 mapsvg-region" d="M1773.38,1305.21c28.94,0.69,57.96,2,87.03,3.82l2.02,174.04l-87.36,0.87L1773.38,1305.21z" data-id="L-79" title="317.93 M2"></path>
                                        <path class="st28 mapsvg-region" d="M1860.41,1309.03c29.8,1.72,58.7,4.43,86.77,8.05l1.75,165.12l-86.49,0.87L1860.41,1309.03z" data-id="L-78" title="305.59 M2"></path>
                                        <path class="st28 mapsvg-region" d="M1947.18,1317.08c28.13,3.03,57.41,7.28,87.36,12.23l1.75,152.01l-87.36,0.87L1947.18,1317.08z" data-id="L-77" title="285.66 M2"></path>
                                        <path class="st28 mapsvg-region" d="M2034.54,1329.31c59.3,9.92,114.87,22.43,168.51,36.3c0,0,8.58,3.15,11.65,11.33s0,17.99,0,17.99   c-13.65,30.3-25.11,58.33-34.99,84.71l-143.42,1.68L2034.54,1329.31z" data-id="L-76" title="460.12 M2"></path>
                                        <path class="st28 mapsvg-region" d="M2179.7,1479.64c-20.92,58.2-36,116.4-46.04,174.61c-0.4,0.06-13.28,0.17-13.28,0.17l-82.35,0.76   l-1.75-173.86L2179.7,1479.64z" data-id="L-93" title="418.13 M2"></path>
                                        <rect x="1863.3" y="1482.63" transform="matrix(0.9999 -0.0101 0.0101 0.9999 -15.7555 19.3364)" class="st28 mapsvg-region" width="86.5" height="173.86" data-id="L-91" title="312.5 M2"></rect>
                                        <rect x="1775.94" y="1483.5" transform="matrix(0.9999 -9.999094e-03 9.999094e-03 0.9999 -15.612 18.2731)" class="st28 mapsvg-region" width="87.37" height="173.86" data-id="L-90" title="312.5 M2"></rect>
                                        <rect x="1602.08" y="1486.13" transform="matrix(0.9999 -9.999094e-03 9.999094e-03 0.9999 -15.6469 16.5348)" class="st28 mapsvg-region" width="87.37" height="173.86" data-id="L-88" title="312.5 M2"></rect>
                                        <rect x="1515.59" y="1487" transform="matrix(0.9999 -0.0101 0.0101 0.9999 -15.8173 15.8247)" class="st28 mapsvg-region" width="86.5" height="173.86" data-id="L-87" title="312.5 M2"></rect>
                                        <rect x="1428.23" y="1487.87" transform="matrix(0.9999 -9.999094e-03 9.999094e-03 0.9999 -15.673 14.7965)" class="st28 mapsvg-region" width="87.37" height="173.86" data-id="L-86" title="312.5 M2"></rect>
                                        <path class="st28 mapsvg-region" d="M1429.11,1662.17l-112.7,0.87c-45.52-62.44-79.17-121.48-85.84-172.8l196.8-1.92L1429.11,1662.17z" data-id="L-85" title="584.22 M2"></path>
                                        <path class="st28 mapsvg-region" d="M1644.9,1739.92l2.62,173.86l-134.96,0.48c-16.38-48.96-43.91-94.99-88.53-136.49c0,0-12.09-11.72-5.91-22.6   s11.77-13.03,16.3-13.28C1438.94,1741.65,1644.9,1739.92,1644.9,1739.92z" data-id="L-121" title="650.75 M2"></path>
                                        <path class="st28 mapsvg-region" d="M 1979.5 1738.540832157969 L 2120.16 1737.670832157969 C 2112.3999999999996 1799.480832157969 2108.91 1856.590832157969 2108.04 1910.820832157969 L 1981.25 1913.2708321579692 L 1979.5 1738.540832157969 Z" data-id="L-116" title="300 M2"></path>
                                        <path class="st28 mapsvg-region" d="M2108.04,1907.84c-0.68,66.81,2.12,124.43,7.75,174.56l-132.79,1.75l-1.75-173.86L2108.04,1907.84z" data-id="L-127" title="459.02 M2"></path>
                                        <rect x="1731.38" y="1912.46" transform="matrix(0.9999 -0.0104 0.0104 0.9999 -20.7289 18.5788)" class="st28 mapsvg-region" width="83.87" height="173.86" data-id="L-124" title="300 M2"></rect>
                                        <rect x="1648.39" y="1913.34" transform="matrix(0.9999 -0.0105 0.0105 0.9999 -20.9599 17.8974)" class="st28 mapsvg-region" width="83" height="173.86" data-id="L-123" title="300 M2"></rect>
                                        <path class="st28 mapsvg-region" d="M1649.26,2087.63l-122.31,0.87c0,0-12.17-2.22-17.18-10.86s-1.79-17.21-1.79-17.21   c15.68-31.43,27.23-67.9,4.57-146.17l134.96-0.48L1649.26,2087.63z" data-id="L-122" title="465.58 M2"></path>
                                        <path class="st28 mapsvg-region" d="M2200.53,1733.81l83-0.87l1.75,173.86l-97.85,0.87C2189.12,1843.58,2193.21,1784.98,2200.53,1733.81z" data-id="L-115" title="300 M2"></path>
                                        <rect x="2284.4" y="1732.49" transform="matrix(0.9999 -0.0105 0.0105 0.9999 -19.0212 24.5816)" class="st28 mapsvg-region" width="83" height="173.86" data-id="L-114" title="300 M2"></rect>
                                        <rect x="2367.4" y="1731.62" transform="matrix(0.9999 -0.0104 0.0104 0.9999 -18.8108 25.1935)" class="st28 mapsvg-region" width="83.87" height="173.86" data-id="L-113" title="300 M2"></rect>
                                        <rect x="2618.13" y="1728.12" transform="matrix(0.9999 -0.0105 0.0105 0.9999 -18.9567 28.094)" class="st28 mapsvg-region" width="83" height="173.86" data-id="L-110" title="300 M2"></rect>
                                        <rect x="2701.13" y="1727.25" transform="matrix(0.9999 -0.0104 0.0104 0.9999 -18.7472 28.6693)" class="st28 mapsvg-region" width="83.87" height="173.86" data-id="L-109" title="300 M2"></rect>
                                        <rect x="3118.73" y="1722.88" transform="matrix(0.9999 -0.0104 0.0104 0.9999 -18.679 33.0187)" class="st28 mapsvg-region" width="83.87" height="173.86" data-id="L-104" title="300 M2"></rect>
                                        <path class="st28 mapsvg-region" d="M3201.73,1722.45l93.48-0.87c-1.09,37.23,2.38,95.04,10.48,173.86l-102.22,0.87L3201.73,1722.45z" data-id="L-103" title="346.4 M2"></path>
                                        <path class="st28 mapsvg-region" d="M3305.69,1895.43c4.35,39.69,12.8,90.17,26.95,155.71c0,0,0.48,8.03-1.4,10.8s-5.44,6.24-12.04,7.06   s-17.84,0.48-17.84,0.48l-96.13,0.68l-1.75-173.86L3305.69,1895.43z" data-id="L-140" title="412.39 M2"></path>
                                        <rect x="3118.533950276243" y="1896.74" transform="matrix(0.9999 -0.0104 0.0104 0.9999 -20.4897 33.0463)" class="st28 mapsvg-region" width="83.87" height="173.86" data-id="L-139" title="300 M2"></rect>
                                        <rect x="3037.48" y="1897.61" transform="matrix(0.9999 -0.0105 0.0105 0.9999 -20.7174 32.5172)" class="st28 mapsvg-region" width="83" height="173.86" data-id="L-138" title="300 M2"></rect>
                                        <rect x="2953.61" y="1898.49" transform="matrix(0.9999 -0.0104 0.0104 0.9999 -20.517 31.3084)" class="st28 mapsvg-region" width="83.87" height="173.86" data-id="L-137" title="300 M2"></rect>
                                        <rect x="2369.14" y="1905.47" transform="matrix(0.9999 -0.0104 0.0104 0.9999 -20.6267 25.2275)" class="st28 mapsvg-region" width="83.87" height="173.86" data-id="L-130" title="300 M2"></rect>
                                        <rect x="2286.15" y="1906.35" transform="matrix(0.9999 -0.0105 0.0105 0.9999 -20.851 24.6097)" class="st28 mapsvg-region" width="83" height="173.86" data-id="L-129" title="300 M2"></rect>
                                        <path class="st28 mapsvg-region" d="M2287.02,2080.65l-90.86,0.87c-6.29-56.99-9.37-114.9-8.74-173.86l97.85-0.87L2287.02,2080.65z" data-id="L-128" title="346.21 M2"></path>
                                        <path class="st28 mapsvg-region" d="M2265.27,1478.5c24.29-61.41,54.16-119.49,89.27-174.42l108.96-0.97l1.74,173.48L2265.27,1478.5z" data-id="L-75" title="567.86 M2"></path>
                                        <rect x="2548.24" y="1301.79" transform="matrix(0.9999 -0.0105 0.0105 0.9999 -14.4732 27.3348)" class="st28 mapsvg-region" width="83" height="173.86" data-id="L-73" title="300 M2"></rect>
                                        <rect x="2798.1" y="1298.29" transform="matrix(0.9999 -0.0104 0.0104 0.9999 -14.2776 29.6637)" class="st28 mapsvg-region" width="83.87" height="173.86" data-id="L-70" title="300 M2"></rect>
                                        <path class="st28 mapsvg-region" d="M2964.1,1296.99l177.56-1.75c0,0,16.19,0.41,19.26,12.85s-0.85,17.18-0.85,17.18   c-43.6,58.1-63.27,104.68-69.3,144.69l-124.06,0.87L2964.1,1296.99z" data-id="L-68" title="573.93 M2"></path>
                                        <path class="st28 mapsvg-region" d="M3090.78,1469.97c-10.07,55.92-3.48,102.49,16.84,141.37c0,0,7.73,10.59,0.79,20.83   c-6.94,10.25-18.06,11.54-18.06,11.54l-121.89,0.99l-1.75-173.86L3090.78,1469.97z" data-id="L-102" title="452.45 M2"></path>
                                        <rect x="2883.72" y="1471.27" transform="matrix(0.9999 -0.0104 0.0104 0.9999 -16.0711 30.5573)" class="st28 mapsvg-region" width="83.87" height="173.86" data-id="L-101" title="300 M2"></rect>
                                        <path class="st11" d="M2868.53,1595"></path>
                                        <path class="st28 mapsvg-region " d="M2384,1651.69l-169.49,1.75c11.83-62.81,28.86-121.02,50.76-174.94l116.91-1.12L2384,1651.69z" data-id="L-94" title="525.77 M2"></path>
                                        <path class="st28 mapsvg-region" d="M2389.5,1223.14c16.76-58.86,17.79-121.27,2.51-187.39l124.78-1.73l1.75,187.83L2389.5,1223.14z" data-id="L-59" title="465.43 M2"></path>
                                        <path class="st28 mapsvg-region" d="M2392.01,1035.75c-16.3-72.63-52.71-134.57-106.11-187.48l229.15-2.09l1.75,187.83L2392.01,1035.75z" data-id="L-42" title="643.24 M2"></path>
                                        <path class="st28 mapsvg-region" d="M3301.26,1025.11c-6.51,68.89-27.6,132.13-65.46,188.88l-125.8,1.75l-1.75-187.83L3301.26,1025.11z" data-id="L-67" title="652.82 M2"></path>
                                        <path d="M 902.2999877929688 1169.4300537109375 L 918.219970703125 1258.510009765625 L 1105.8599853515625 1229.7099609375 L 1089.260009765625 1140.5999755859375 Z" class="st28 mapsvg-region" data-id="L-1" title="354.46 M2"></path>
                                        <path d="M 888.3200073242188 1080.3199462890625 L 902.2999877929688 1169.4300537109375 L 955.469970703125 1161.22998046875 L 1037.06005859375 1148.6500244140625 L 1089.260009765625 1140.5999755859375 L 1081.8599853515625 1099.239990234375 L 1072.6600341796875 1051.489990234375 Z" class="st28 mapsvg-region" data-id="L-2" title="351.29 M2">
                                        </path>
                                        <path d="M 874.2999877929688 991.0800170898438 L 880.969970703125 1036.2099609375 L 888.3200073242188 1080.3199462890625 L 923.9500122070312 1074.75 L 1008.9000244140625 1061.4599609375 L 1072.6600341796875 1051.489990234375 L 1056.02001953125 977.4099731445312 L 1052.8599853515625 963.3400268554688 Z" class="st28 mapsvg-region" data-id="L-3" title="344.18 M2"></path>
                                        <path d="M 860.3599853515625 901.219970703125 L 868.8200073242188 956.510009765625 L 874.2999877929688 991.0800170898438 L 891.8699951171875 988.3499755859375 L 1004.219970703125 970.9000244140625 L 1052.8599853515625 963.3400268554688 L 1041.8199462890625 914.27001953125 L 1032.469970703125 875.02001953125 Z" class="st28 mapsvg-region" data-id="L-4" title="333.12 M2"></path>
                                        <path d="M 3192.989990234375 839.2000122070312 L 3289.969970703125 838.3200073242188 L 3301.330078125 1026.1600341796875 L 3194.739990234375 1027.030029296875 Z" class="st28 mapsvg-region" data-id="L-33" title="395.62 M2"></path>
                                        <path d="M 1111.969970703125 861.9099731445312 L 1145.1700439453125 1007.8099975585938 L 1269.22998046875 1006.0599975585938 L 1267.47998046875 860.1599731445312 Z" class="st28 mapsvg-region" data-id="L-50" title="421.6 M2"></path>
                                        <path d="M 1270.969970703125 1207.2900390625 L 1186.0400390625 1229.52001953125 L 1145.1700439453125 1007.8099975585938 L 1269.22998046875 1006.0599975585938 Z" class="st28 mapsvg-region" data-id="L-51" title="458.54 M2"></path>
                                        <path d="M 1368.699951171875 1186.5999755859375 L 1270.969970703125 1207.2900390625 L 1269.22998046875 1006.0599975585938 L 1366.199951171875 1005.1900024414062 Z" class="st28 mapsvg-region" data-id="L-52" title="384.04 M2"></path>
                                        <path d="M 3567.7900390625 1117.010009765625 L 3566.909912109375 1033.1400146484375 L 3381.699951171875 1034.8900146484375 L 3386.070068359375 1118.760009765625 Z" class="st28 mapsvg-region" data-id="L-167" title="315.82 M2"></path>
                                        <path d="M 3568.659912109375 1200.010009765625 L 3567.7900390625 1117.010009765625 L 3386.070068359375 1118.760009765625 L 3388.68994140625 1188.06005859375 L 3388.68994140625 1201.760009765625 Z" class="st28 mapsvg-region" data-id="L-166" title="311.51 M2"></path>
                                        <path d="M 3570.409912109375 1366.8800048828125 L 3569.5400390625 1283.8800048828125 L 3389.56005859375 1285.6300048828125 L 3388.68994140625 1369.5 Z" class="st28 mapsvg-region" data-id="L-164" title="311.39 M2"></path>
                                        <path d="M 3571.280029296875 1450.75 L 3570.409912109375 1366.8800048828125 L 3508.469970703125 1367.77001953125 L 3429.169921875 1368.9100341796875 L 3388.68994140625 1369.5 L 3387.25 1407.5899658203125 L 3386.2900390625 1434.8900146484375 L 3385.340087890625 1452.3900146484375 Z" class="st28 mapsvg-region" data-id="L-163" title="316.22 M2"></path>
                                        <path d="M 3572.159912109375 1533.739990234375 L 3571.280029296875 1450.75 L 3385.340087890625 1452.3900146484375 L 3383.909912109375 1485.760009765625 L 3382.679931640625 1509.5 L 3381.530029296875 1530.1500244140625 L 3381.239990234375 1536.2900390625 Z" class="st28 mapsvg-region" data-id="L-162" title="324.3 M2"></path>
                                        <path d="M 2045.9000244140625 2336.6201171875 L 2163.840087890625 2335.75 L 2159.3798828125 2315.68994140625 L 2144.159912109375 2246.85009765625 L 2128.02001953125 2161.889892578125 L 2043.280029296875 2162.77001953125 Z" class="st28 mapsvg-region" data-id="L-187" title="360.96 M2"></path>
                                        <path d="M 957.3400268554688 1480.449951171875 L 974.8099975585938 1582.6700439453125 L 1155.6500244140625 1551.219970703125 L 1138.1800537109375 1448.1300048828125 Z" class="st28 mapsvg-region" data-id="L-170" title="394.76 M2"></path>
                                        <path d="M 974.8099975585938 1582.6700439453125 L 988.7899780273438 1663.9200439453125 L 1165.260009765625 1634.2099609375 L 1155.6500244140625 1551.219970703125 Z" class="st28 mapsvg-region" data-id="L-171" title="310.94 M2"></path>
                                        <path d="M 988.7899780273438 1663.9200439453125 L 1002.77001953125 1745.1700439453125 L 1176.6199951171875 1717.2099609375 L 1165.260009765625 1634.2099609375 Z" class="st28 mapsvg-region" data-id="L-172" title="304.64 M2"></path>
                                        <path d="M 1002.77001953125 1745.1700439453125 L 1015.8699951171875 1827.2900390625 L 1190.5999755859375 1799.3299560546875 L 1176.6199951171875 1717.2099609375 Z" class="st28 mapsvg-region" data-id="L-173" title="303.55 M2"></path>
                                        <path d="M 1015.8699951171875 1827.2900390625 L 1028.0999755859375 1908.5400390625 L 1207.199951171875 1881.449951171875 L 1190.5999755859375 1799.3299560546875 Z" class="st28 mapsvg-region" data-id="L-174" title="307.32 M2"></path>
                                        <path d="M 1028.0999755859375 1908.5400390625 L 1040.3299560546875 1990.6600341796875 L 1226.4200439453125 1962.699951171875 L 1207.199951171875 1881.449951171875 Z" class="st28 mapsvg-region" data-id="L-175" title="315.97 M2"></path>
                                        <path d="M 1040.3299560546875 1990.6600341796875 L 1056.06005859375 2095.5 L 1257.8699951171875 2066.669921875 L 1226.4200439453125 1962.699951171875 Z" class="st28 mapsvg-region" data-id="L-176" title="433.09 M2"></path>
                                        <path d="M 1056.06005859375 2095.5 L 1090.1300048828125 2347.110107421875 L 1294.56005859375 2345.360107421875 L 1292.8199462890625 2171.5 L 1257.8699951171875 2066.669921875 Z" class="st28 mapsvg-region" data-id="L-177" title="1182.26 M2">
                                        </path>
                                        <path d="M 1091 608.5499877929688 L 1007.1300048828125 609.4299926757812 L 1009.760009765625 783.280029296875 L 1092.75 782.4099731445312 Z" class="st28 mapsvg-region" data-id="L-6" title="300 M2"></path>
                                        <path d="M 1174 607.6799926757812 L 1091 608.5499877929688 L 1092.75 782.4099731445312 L 1176.6199951171875 781.530029296875 Z" class="st28 mapsvg-region" data-id="L-7" title="300 M2"></path>
                                        <path d="M 1257.8699951171875 606.8099975585938 L 1174 607.6799926757812 L 1174.9599609375 671.1199951171875 L 1176.6199951171875 781.530029296875 L 1259.6199951171875 780.6599731445312 Z" class="st28 mapsvg-region" data-id="L-8" title="300 M2"></path>
                                        <path d="M 1424.7099609375 604.1799926757812 L 1341.739990234375 605.9299926757812 L 1343.489990234375 779.7899780273438 L 1426.47998046875 778.9099731445312 Z" class="st28 mapsvg-region" data-id="L-10" title="300 M2"></path>
                                        <path d="M 1508.6099853515625 604.1799926757812 L 1424.7099609375 604.1799926757812 L 1426.47998046875 778.9099731445312 L 1510.3499755859375 778.0399780273438 Z" class="st28 mapsvg-region" data-id="L-11" title="300 M2"></path>
                                        <path d="M 1591.5999755859375 602.4400024414062 L 1508.6099853515625 604.1799926757812 L 1510.3499755859375 778.0399780273438 L 1593.3499755859375 777.1699829101562 Z" class="st28 mapsvg-region" data-id="L-12" title="300 M2"></path>
                                        <path d="M 1675.469970703125 601.5599975585938 L 1591.5999755859375 602.4400024414062 L 1593.3499755859375 777.1699829101562 L 1677.219970703125 775.4199829101562 Z" class="st28 mapsvg-region" data-id="L-13" title="300 M2"></path>
                                        <path d="M 1925.3399658203125 598.9400024414062 L 1842.3399658203125 599.8200073242188 L 1844.0899658203125 773.6699829101562 L 1927.9599609375 772.7999877929688 Z" class="st28 mapsvg-region" data-id="L-16" title="300 M2"></path>
                                        <path d="M 2009.2099609375 598.0700073242188 L 1925.3399658203125 598.9400024414062 L 1927.9599609375 772.7999877929688 L 2010.949951171875 771.9299926757812 Z" class="st28 mapsvg-region" data-id="L-17" title="300 M2"></path>
                                        <path d="M 2610.27001953125 591.9500122070312 L 2527.280029296875 592.8300170898438 L 2529.02001953125 766.6799926757812 L 2612.889892578125 765.8099975585938 Z" class="st28 mapsvg-region" data-id="L-22" title="300 M2"></path>
                                        <path d="M 2694.139892578125 591.0800170898438 L 2610.27001953125 591.9500122070312 L 2612.889892578125 765.8099975585938 L 2695.889892578125 764.9400024414062 Z" class="st28 mapsvg-region" data-id="L-23" title="300 M2"></path>
                                        <path d="M 2777.139892578125 590.2100219726562 L 2694.139892578125 591.0800170898438 L 2695.889892578125 764.9400024414062 L 2779.760009765625 764.0599975585938 Z" class="st28 mapsvg-region" data-id="L-24" title="300 M2"></path>
                                        <path d="M 2861.010009765625 588.4600219726562 L 2777.139892578125 590.2100219726562 L 2779.760009765625 764.0599975585938 L 2862.760009765625 762.3099975585938 Z" class="st28 mapsvg-region" data-id="L-25" title="300 M2"></path>
                                        <path d="M 2944.010009765625 587.5900268554688 L 2861.010009765625 588.4600219726562 L 2862.760009765625 762.3099975585938 L 2946.6298828125 761.4400024414062 Z" class="st28 mapsvg-region" data-id="L-26" title="300 M2"></path>
                                        <path d="M 3027.8798828125 586.7100219726562 L 2944.010009765625 587.5900268554688 L 2946.6298828125 761.4400024414062 L 3029.6201171875 760.5700073242188 Z" class="st28 mapsvg-region" data-id="L-27" title="300 M2"></path>
                                        <path d="M 3361.610107421875 583.219970703125 L 3278.610107421875 584.0900268554688 L 3280.080078125 730.1699829101562 L 3280.360107421875 757.9500122070312 L 3363.35009765625 757.0700073242188 Z" class="st28 mapsvg-region" data-id="L-31" title="300 M2"></path>
                                        <path d="M 3565.169921875 852.2999877929688 L 3562.760009765625 680.2899780273438 L 3561.669921875 581.469970703125 L 3361.610107421875 583.219970703125 L 3362.219970703125 643.8300170898438 L 3363.35009765625 757.0700073242188 L 3371.219970703125 854.9199829101562 Z" class="st28 mapsvg-region" data-id="L-32" title="1114.53 M2"></path>
                                        <path d="M 3566.0400390625 950.1500244140625 L 3565.169921875 852.2999877929688 L 3371.219970703125 854.9199829101562 L 3377.330078125 951.9000244140625 Z" class="st28 mapsvg-region" data-id="L-169" title="384.21 M2"></path>
                                        <path d="M 3566.909912109375 1033.1400146484375 L 3566.0400390625 950.1500244140625 L 3377.330078125 951.9000244140625 L 3381.699951171875 1034.8900146484375 Z" class="st28 mapsvg-region" data-id="L-168" title="321.55 M2"></path>
                                        <path d="M 2764.909912109375 843.5599975585938 L 2848.780029296875 842.6900024414062 L 2850.530029296875 1030.52001953125 L 2767.530029296875 1031.4000244140625 Z" class="st28 mapsvg-region" data-id="L-38" title="324 M2"></path>
                                        <path d="M 2848.780029296875 842.6900024414062 L 2931.77001953125 841.8200073242188 L 2934.39990234375 1029.6500244140625 L 2850.530029296875 1030.52001953125 Z" class="st28 mapsvg-region" data-id="L-37" title="324 M2"></path>
                                        <path d="M 3105.6298828125 840.0700073242188 L 3192.989990234375 839.2000122070312 L 3194.739990234375 1027.030029296875 L 3108.25 1027.9000244140625 Z" class="st28 mapsvg-region" data-id="L-34" title="337.5 M2"></path>
                                        <path d="M 3019.139892578125 840.9400024414062 L 3105.6298828125 840.0700073242188 L 3108.25 1027.9000244140625 L 3020.889892578125 1028.780029296875 Z" class="st28 mapsvg-region" data-id="L-35" title="337.5 M2"></path>
                                        <path d="M 2931.77001953125 841.8200073242188 L 3019.139892578125 840.9400024414062 L 3020.889892578125 1028.780029296875 L 2934.39990234375 1029.6500244140625 Z" class="st28 mapsvg-region" data-id="L-36" title="337.5 M2"></path>
                                        <path d="M 2681.909912109375 844.4400024414062 L 2764.909912109375 843.5599975585938 L 2767.530029296875 1031.4000244140625 L 2683.659912109375 1032.27001953125 Z" class="st28 mapsvg-region" data-id="L-39" title="324 M2"></path>
                                        <path d="M 2598.0400390625 845.3099975585938 L 2681.909912109375 844.4400024414062 L 2683.659912109375 1032.27001953125 L 2600.659912109375 1033.1400146484375 Z" class="st28 mapsvg-region" data-id="L-40" title="324 M2"></path>
                                        <path d="M 2515.050048828125 846.1799926757812 L 2598.0400390625 845.3099975585938 L 2600.659912109375 1033.1400146484375 L 2516.7900390625 1034.02001953125 Z" class="st28 mapsvg-region" data-id="L-41" title="324 M2"></path>
                                        <path d="M 2602.409912109375 1220.97998046875 L 2518.5400390625 1221.8499755859375 L 2516.7900390625 1034.02001953125 L 2600.659912109375 1033.1400146484375 Z" class="st28 mapsvg-region" data-id="L-60" title="324 M2"></path>
                                        <path d="M 2686.280029296875 1220.0999755859375 L 2602.409912109375 1220.97998046875 L 2600.659912109375 1033.1400146484375 L 2683.659912109375 1032.27001953125 Z" class="st28 mapsvg-region" data-id="L-61" title="324 M2"></path>
                                        <path d="M 2769.280029296875 1219.22998046875 L 2686.280029296875 1220.0999755859375 L 2683.659912109375 1032.27001953125 L 2767.530029296875 1031.4000244140625 Z" class="st28 mapsvg-region" data-id="L-62" title="324 M2"></path>
                                        <path d="M 2853.14990234375 1218.3599853515625 L 2769.280029296875 1219.22998046875 L 2767.530029296875 1031.4000244140625 L 2850.530029296875 1030.52001953125 Z" class="st28 mapsvg-region" data-id="L-63" title="324 M2"></path>
                                        <path d="M 2936.139892578125 1217.47998046875 L 2853.14990234375 1218.3599853515625 L 2850.530029296875 1030.52001953125 L 2934.39990234375 1029.6500244140625 Z" class="st28 mapsvg-region" data-id="L-64" title="324 M2"></path>
                                        <path d="M 3023.510009765625 1216.6099853515625 L 2936.139892578125 1217.47998046875 L 2934.39990234375 1029.6500244140625 L 3020.889892578125 1028.780029296875 Z" class="st28 mapsvg-region" data-id="L-65" title="337.5 M2"></path>
                                        <path d="M 3110 1215.739990234375 L 3023.510009765625 1216.6099853515625 L 3020.889892578125 1028.780029296875 L 3108.25 1027.9000244140625 Z" class="st28 mapsvg-region" data-id="L-66" title="337.5 M2"></path>
                                        <path d="M 1754.0999755859375 854.9199829101562 L 1851.949951171875 854.0499877929688 L 1853.699951171875 999.9500122070312 L 1755.8499755859375 1000.8200073242188 Z" class="st28 mapsvg-region" data-id="L-44" title="294 M2"></path>
                                        <path d="M 1657.1300048828125 855.7899780273438 L 1754.0999755859375 854.9199829101562 L 1755.8499755859375 1000.8200073242188 L 1658.8699951171875 1001.6900024414062 Z" class="st28 mapsvg-region" data-id="L-45" title="294 M2"></path>
                                        <path d="M 1559.280029296875 857.5399780273438 L 1657.1300048828125 855.7899780273438 L 1658.8699951171875 1001.6900024414062 L 1561.030029296875 1003.4400024414062 Z" class="st28 mapsvg-region" data-id="L-46" title="294 M2"></path>
                                        <path d="M 1462.300048828125 858.4199829101562 L 1559.280029296875 857.5399780273438 L 1561.030029296875 1003.4400024414062 L 1464.050048828125 1004.3099975585938 Z" class="st28 mapsvg-region" data-id="L-47" title="294 M2"></path>
                                        <path d="M 1365.3299560546875 859.2899780273438 L 1462.300048828125 858.4199829101562 L 1464.050048828125 1004.3099975585938 L 1366.199951171875 1005.1900024414062 Z" class="st28 mapsvg-region" data-id="L-48" title="294 M2"></path>
                                        <path d="M 1267.47998046875 860.1599731445312 L 1365.3299560546875 859.2899780273438 L 1366.199951171875 1005.1900024414062 L 1269.22998046875 1006.0599975585938 Z" class="st28 mapsvg-region" data-id="L-49" title="294 M2"></path>
                                        <path d="M 1776.8199462890625 1657.800048828125 L 1690.3299560546875 1659.550048828125 L 1688.5799560546875 1485.68994140625 L 1775.0699462890625 1483.949951171875 Z" class="st28 mapsvg-region " data-id="L-89" title="312.5 M2"></path>
                                        <path d="M 2038.0400390625 1655.1800537109375 L 2003.239990234375 1655.699951171875 L 1980.7900390625 1655.75 L 1950.6700439453125 1656.050048828125 L 1948.9200439453125 1482.199951171875 L 2036.2900390625 1481.3199462890625 Z" class="st28 mapsvg-region" data-id="L-92" title="312.5 M2"></path>
                                        <path d="M 2463.5 1303.0999755859375 L 2547.3701171875 1302.22998046875 L 2549.1201171875 1476.0799560546875 L 2465.239990234375 1476.5799560546875 Z" class="st28 mapsvg-region" data-id="L-74" title="300 M2"></path>
                                        <path d="M 2630.3701171875 1301.3499755859375 L 2714.239990234375 1299.6099853515625 L 2715.97998046875 1474.3399658203125 L 2632.110107421875 1475.2099609375 Z" class="st28 mapsvg-region" data-id="L-72" title="300 M2"></path>
                                        <path d="M 2714.239990234375 1299.6099853515625 L 2797.22998046875 1298.72998046875 L 2798.97998046875 1472.5899658203125 L 2715.97998046875 1474.3399658203125 Z" class="st28 mapsvg-region" data-id="L-71" title="300 M2"></path>
                                        <path d="M 2881.10009765625 1297.8599853515625 L 2964.10009765625 1296.989990234375 L 2966.719970703125 1470.8399658203125 L 2882.85009765625 1471.7099609375 Z" class="st28 mapsvg-region" data-id="L-69" title="300 M2"></path>
                                        <path d="M 2884.60009765625 1645.5699462890625 L 2801.60009765625 1647.3199462890625 L 2798.97998046875 1472.5899658203125 L 2882.85009765625 1471.7099609375 Z" class="st28 mapsvg-region" data-id="L-100" title="300 M2"></path>
                                        <path d="M 2801.60009765625 1647.3199462890625 L 2717.72998046875 1648.18994140625 L 2715.97998046875 1474.3399658203125 L 2798.97998046875 1472.5899658203125 Z" class="st28 mapsvg-region" data-id="L-99" title="300 M2"></path>
                                        <path d="M 2717.72998046875 1648.18994140625 L 2634.739990234375 1649.06005859375 L 2632.110107421875 1475.2099609375 L 2715.97998046875 1474.3399658203125 Z" class="st28 mapsvg-region" data-id="L-98" title="300 M2"></path>
                                        <path d="M 2634.739990234375 1649.06005859375 L 2550.8701171875 1649.93994140625 L 2549.1201171875 1476.0799560546875 L 2632.110107421875 1475.2099609375 Z" class="st28 mapsvg-region" data-id="L-97" title="300 M2"></path>
                                        <path d="M 2550.8701171875 1649.93994140625 L 2467 1650.81005859375 L 2465.239990234375 1476.5799560546875 L 2549.1201171875 1476.0799560546875 Z" class="st28 mapsvg-region" data-id="L-96" title="300 M2"></path>
                                        <path d="M 2467 1650.81005859375 L 2384 1651.68994140625 L 2382.179931640625 1477.3800048828125 L 2465.239990234375 1476.5799560546875 Z" class="st28 mapsvg-region" data-id="L-95" title="300 M2"></path>
                                        <path d="M 3033.989990234375 1724.199951171875 L 3117.860107421875 1723.3199462890625 L 3119.610107421875 1897.1800537109375 L 3036.610107421875 1898.050048828125 Z" class="st28 mapsvg-region" data-id="L-105" title="300 M2"></path>
                                        <path d="M 2950.989990234375 1725.0699462890625 L 3033.989990234375 1724.199951171875 L 3036.610107421875 1898.050048828125 L 2952.739990234375 1898.9300537109375 Z" class="st28 mapsvg-region" data-id="L-106" title="300 M2"></path>
                                        <path d="M 2869.31005859375 1899.81005859375 L 2867.1201171875 1725.949951171875 L 2950.989990234375 1725.0699462890625 L 2952.739990234375 1898.9300537109375 L 2869.75 1899.800048828125" class="st28 mapsvg-region" data-id="L-107" title="300 M2"></path>
                                        <path d="M 2784.1298828125 1726.8199462890625 L 2867.1201171875 1725.949951171875 L 2869.75 1899.800048828125 L 2785.8798828125 1900.6700439453125 Z" class="st28 mapsvg-region" data-id="L-108" title="300 M2"></path>
                                        <path d="M 2533.389892578125 1729.43994140625 L 2617.260009765625 1728.5699462890625 L 2619.010009765625 1902.4200439453125 L 2535.139892578125 1904.1700439453125 Z" class="st28 mapsvg-region" data-id="L-111" title="300 M2"></path>
                                        <path d="M 2450.39990234375 1731.18994140625 L 2533.389892578125 1729.43994140625 L 2535.139892578125 1904.1700439453125 L 2452.139892578125 1905.0400390625 Z" class="st28 mapsvg-region" data-id="L-112" title="300 M2"></path>
                                        <path d="M 2954.489990234375 2072.780029296875 L 2871.489990234375 2073.659912109375 L 2869.31005859375 1899.81005859375 L 2952.739990234375 1898.9300537109375 Z" class="st28 mapsvg-region" data-id="L-136" title="300 M2"></path>
                                        <path d="M 2871.489990234375 2073.659912109375 L 2787.6201171875 2074.530029296875 L 2785.8798828125 1900.6700439453125 L 2869.31005859375 1899.81005859375 Z" class="st28 mapsvg-region" data-id="L-135" title="300 M2"></path>
                                        <path d="M 2704.6298828125 2075.39990234375 L 2620.760009765625 2076.280029296875 L 2619.010009765625 1902.4200439453125 L 2702.010009765625 1901.550048828125 L 2703.686279296875 2012.78955078125 Z" class="st28 mapsvg-region" data-id="L-133" title="300 M2"></path>
                                        <path d="M 2787.6201171875 2074.530029296875 L 2704.6298828125 2075.39990234375 L 2702.010009765625 1901.550048828125 L 2785.8798828125 1900.6700439453125 Z" class="st28 mapsvg-region" data-id="L-134" title="300 M2"></path>
                                        <path d="M 2620.760009765625 2076.280029296875 L 2537.760009765625 2078.02001953125 L 2535.139892578125 1904.1700439453125 L 2619.010009765625 1902.4200439453125 Z" class="st28 mapsvg-region" data-id="L-132" title="300 M2"></path>
                                        <path d="M 2537.760009765625 2079.966069255007 L 2453.889892578125 2080.845952067507 L 2452.139892578125 1906.986088786257 L 2535.139892578125 1906.1160936690694 Z" class="st28 mapsvg-region" data-id="L-131" title="300 M2"></path>
                                        <path d="M 1983 2084.139892578125 L 1899.1300048828125 2084.139892578125 L 1897.3800048828125 1911.1600341796875 L 1981.25 1910.280029296875 L 1983 2085.590087890625" class="st28 mapsvg-region" data-id="L-126" title="300 M2"></path>
                                        <path d="M 1899.1300048828125 2084.139892578125 L 1816.1300048828125 2085.889892578125 L 1814.3800048828125 1912.030029296875 L 1897.3800048828125 1911.1600341796875 Z" class="st28 mapsvg-region" data-id="L-125" title="300 M2"></path>
                                        <path d="M 1895.6300048828125 1737.300048828125 L 1979.5 1735.56005859375 L 1981.25 1910.280029296875 L 1897.3800048828125 1911.1600341796875 Z" class="st28 mapsvg-region" data-id="L-117" title="300 M2"></path>
                                        <path d="M 1811.760009765625 1738.1800537109375 L 1895.6300048828125 1737.300048828125 L 1897.3800048828125 1911.1600341796875 L 1814.3800048828125 1912.030029296875 Z" class="st28 mapsvg-region" data-id="L-118" title="300 M2"></path>
                                        <path d="M 1728.77001953125 1739.050048828125 L 1811.760009765625 1738.1800537109375 L 1814.3800048828125 1912.030029296875 L 1730.510009765625 1912.9100341796875 Z" class="st28 mapsvg-region" data-id="L-119" title="300 M2"></path>
                                        <path d="M 1644.9000244140625 1739.9200439453125 L 1728.77001953125 1739.050048828125 L 1730.510009765625 1912.9100341796875 L 1647.52001953125 1913.780029296875 Z" class="st28 mapsvg-region" data-id="L-120" title="300 M2"></path>
                                        <path d="M 1795.1600341796875 2340.1201171875 L 1879.030029296875 2338.949951171875 L 1877.4100341796875 2231.35009765625 L 1876.4100341796875 2164.510009765625 L 1793.4200439453125 2166.260009765625 Z" class="st28 mapsvg-region" data-id="L-184" title="300 M2"></path>
                                        <path d="M 1879.030029296875 2340.896000895632 L 1921.93994140625 2340.216069255007 L 1962.030029296875 2339.446049723757 L 1961.280029296875 2265.056157145632 L 1960.449951171875 2182.466069255007 L 1960.280029296875 2165.585942301882 L 1876.4100341796875 2166.456059489382 Z" class="st28 mapsvg-region" data-id="L-185" title="300 M2"></path>
                                        <path d="M 1962.030029296875 2337.5 L 2045.9000244140625 2336.6201171875 L 2044.489990234375 2243.1298828125 L 2043.280029296875 2162.77001953125 L 1960.280029296875 2163.639892578125 Z" class="st28 mapsvg-region" data-id="L-186" title="300 M2"></path>
                                        <path d="M 2332.449951171875 2333.60009765625 L 2415.449951171875 2333.1298828125 L 2414.320068359375 2220.590087890625 L 2413.699951171875 2159.27001953125 L 2329.830078125 2160.14990234375 Z" class="st28 mapsvg-region" data-id="L-142" title="300 M2"></path>
                                        <path d="M 2415.449951171875 2333.1298828125 L 2499.320068359375 2332.25 L 2499.0400390625 2313.530029296875 L 2497.85009765625 2234.889892578125 L 2496.699951171875 2158.39990234375 L 2413.699951171875 2159.27001953125 Z" class="st28 mapsvg-region" data-id="L-143" title="300 M2"></path>
                                        <path d="M 2499.320068359375 2332.25 L 2582.320068359375 2331.3798828125 L 2582.0400390625 2303.7900390625 L 2580.570068359375 2157.530029296875 L 2496.699951171875 2158.39990234375 Z" class="st28 mapsvg-region" data-id="L-144" title="300 M2"></path>
                                        <path d="M 2582.320068359375 2331.3798828125 L 2666.18994140625 2330.510009765625 L 2665.300048828125 2242.300048828125 L 2664.43994140625 2156.64990234375 L 2580.570068359375 2157.530029296875 Z" class="st28 mapsvg-region" data-id="L-145" title="300 M2"></path>
                                        <path d="M 2666.18994140625 2330.510009765625 L 2749.179931640625 2329.6298828125 L 2747.43994140625 2154.89990234375 L 2664.43994140625 2156.64990234375 Z" class="st28 mapsvg-region" data-id="L-146" title="300 M2"></path>
                                        <path d="M 2749.179931640625 2329.6298828125 L 2758.35009765625 2329.080078125 L 2768 2328.860107421875 L 2779.760009765625 2328.72998046875 L 2833.050048828125 2327.889892578125 L 2832.489990234375 2272.409912109375 L 2831.889892578125 2211.93994140625 L 2831.31005859375 2154.030029296875 L 2747.43994140625 2154.89990234375 Z" class="st28 mapsvg-region" data-id="L-147" title="300 M2"></path>
                                        <path d="M 2833.050048828125 2327.889892578125 L 2916.050048828125 2327.010009765625 L 2915.6298828125 2285.239990234375 L 2915 2223.1201171875 L 2914.300048828125 2153.159912109375 L 2831.31005859375 2154.030029296875 Z" class="st28 mapsvg-region" data-id="L-148" title="300 M2"></path>
                                        <path d="M 2916.050048828125 2327.010009765625 L 2999.919921875 2326.139892578125 L 2999.030029296875 2238.179931640625 L 2998.3798828125 2173.1201171875 L 2998.169921875 2152.280029296875 L 2914.300048828125 2153.159912109375 Z" class="st28 mapsvg-region" data-id="L-149" title="300 M2"></path>
                                        <path d="M 2999.919921875 2326.139892578125 L 3082.919921875 2325.27001953125 L 3081.81005859375 2215.110107421875 L 3081.169921875 2151.409912109375 L 2998.169921875 2152.280029296875 Z" class="st28 mapsvg-region" data-id="L-150" title="300 M2"></path>
                                        <path d="M 3166.780029296875 2324.389892578125 L 3250.64990234375 2323.52001953125 L 3248.989990234375 2213.360107421875 L 3248.030029296875 2149.659912109375 L 3165.0400390625 2150.5400390625 Z" class="st28 mapsvg-region" data-id="L-152" title="300 M2"></path>
                                        <path d="M 3250.64990234375 2323.52001953125 L 3333.64990234375 2322.639892578125 L 3332.739990234375 2232.409912109375 L 3331.89990234375 2148.7900390625 L 3248.030029296875 2149.659912109375 Z" class="st28 mapsvg-region" data-id="L-153" title="300 M2"></path>
                                        <path d="M 3333.64990234375 2322.639892578125 L 3417.52001953125 2321.77001953125 L 3416.0400390625 2223.760009765625 L 3414.89990234375 2147.919921875 L 3331.89990234375 2148.7900390625 Z" class="st28 mapsvg-region" data-id="L-154" title="300 M2"></path>
                                        <path d="M 3575.64990234375 1868.3499755859375 L 3574.780029296875 1784.47998046875 L 3376.4599609375 1786.22998046875 L 3383.449951171875 1870.0999755859375 Z" class="st28 mapsvg-region" data-id="L-158" title="337.93 M2"></path>
                                    </g>
                                </svg>
                                <!-- SVG -->
                            </div>
                            <div class="leyend-status d-flex flex-row justify-content-around text-center fw-bold text-white mt-3">
                                <div class="small bg-sold rounded-pill px-2">VENDIDO</div>
                                <div class="small bg-available rounded-pill px-2">DISPONIBLE</div>
                                <div class="small bg-reserved rounded-pill px-2">RESERVADO</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item border border-success my-4">
                    <h2 class="accordion-header border-bottom border-success" id="heading-4">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="" data-bs-target="#collapseStage-4" aria-expanded="false" aria-controls="collapseStage-4" title="">
                            <div class="container table-responsive-md">
                                <table class="table table-sm table-borderless caption-top">
                                    <caption class="h1 fw-bold text-center text-success text-nowrap">Etapa-4</caption>
                                    <thead>
                                        <tr>
                                            <!-- <th scope="col" class="h1 fw-bold text-success text-nowrap">Etapa-1</th> -->
                                            <!-- <th scope="col" class="h5 text-center"></th> -->
                                            <!-- <th scope="col" class="h5 text-center">Disponibles</th> -->
                                            <!-- <th scope="col" class="h5 text-center">Fecha de entrega</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <!-- <th class="h2"></th> -->
                                            <td class="h2 fw-bold text-center">NO DISPONIBLE</td>
                                            <!-- <td class="display-4 fw-bold text-center">42</td> -->
                                            <!-- <td class="display-4 fw-bold text-center">2024</td> -->
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </button>
                    </h2>
                    <div id="collapseStage-4" class="accordion-collapse collapse d-none" aria-labelledby="heading-4" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <!-- Price Start -->
                            <div class="container-xxl py-5">
                                <div class="container">
                                    <div class="row g-0 gx-5 align-items-center">
                                        <div class="col-lg-12">
                                            <div class="text-center mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                                                <h1 class="fw-bold text-decoration-underline">PRECIO DE LOTES</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row row-cols-1 row-cols-lg-1">
                                        <div class="col wow fadeInUp mb-5" data-wow-delay="0.1s">
                                            <div class="card border-5 h-100 shadow px-0">
                                                <div class="card-header text-center">
                                                    <!-- <p class="h2">Precio por m<small><sup>2</sup></small></p> -->
                                                    <p class="h2 text-success">Lote tipo</p>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row text-center">
                                                        <div class="col-6">
                                                            <p class="h6">Precio por m<small><sup>2</sup></small></p>
                                                            <p class="h4 text-success">418 <span class="h4">MXN</p>
                                                        </div>
                                                        <div class="col-6">
                                                            <p class="h6">Financiamiento hasta</p>
                                                            <p class="h4 text-success">60 <span class="h4">MSI</p>
                                                        </div>
                                                    </div>
                                                    <div class="row text-center">
                                                        <p class="h6">Enganche de</p>
                                                        <p class="h4 text-success">10%</h6>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <p class="card-title text-center h4">Entrega Diciembre 2025</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Price End -->
                            <div class="loader-container text-center mb-2">
                                <span class="mdi mdi-vanish mdi-spin"></span>
                                Loading image...
                            </div>
                            <div class="row">
                                <img src="<?= STATIC_URL . 'img/wind-rose_ES.svg' ?>" alt="Brujula" height="100px" style="transform: rotate(0deg);">
                            </div>
                            <div class="row mt-2">
                                <p class="small fw-bolder text-center">Para más información, pase el mouse sobre el mapa</p>
                            </div>
                            <!-- SVG -->
                            <div class="d-flex flex-row justify-content-around text-center fw-bold text-white mt-3">
                                <div class="small bg-sold rounded-pill px-2">VENDIDO</div>
                                <div class="small bg-available rounded-pill px-2">DISPONIBLE</div>
                                <div class="small bg-reserved rounded-pill px-2">RESERVADO</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item border border-success my-4">
                    <h2 class="accordion-header border-bottom border-success" id="heading-5">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="" data-bs-target="#collapseStage-5" aria-expanded="false" aria-controls="collapseStage-5" title="">
                            <div class="container table-responsive-md">
                                <table class="table table-sm table-borderless caption-top">
                                    <caption class="h1 fw-bold text-center text-success text-nowrap">Etapa-5</caption>
                                    <thead>
                                        <tr>
                                            <!-- <th scope="col" class="h1 fw-bold text-success text-nowrap">Etapa-1</th> -->
                                            <!-- <th scope="col" class="h5 text-center"></th> -->
                                            <!-- <th scope="col" class="h5 text-center">Disponibles</th> -->
                                            <!-- <th scope="col" class="h5 text-center">Fecha de entrega</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <!-- <th class="h2"></th> -->
                                            <td class="h2 fw-bold text-center">DISPONIBLE PRÓXIMAMENTE</td>
                                            <!-- <td class="display-4 fw-bold text-center">42</td> -->
                                            <!-- <td class="display-4 fw-bold text-center">2024</td> -->
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </button>
                    </h2>
                    <div id="collapseStage-5" class="accordion-collapse collapse d-none" aria-labelledby="heading-5" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <!-- Price Start -->
                            <div class="container-xxl py-5">
                                <div class="container">
                                    <div class="row g-0 gx-5 align-items-center">
                                        <div class="col-lg-12">
                                            <div class="text-center mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                                                <h1 class="fw-bold text-decoration-underline">PRECIO DE LOTES</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row row-cols-1 row-cols-lg-1">
                                        <div class="col wow fadeInUp mb-5" data-wow-delay="0.1s">
                                            <div class="card border-5 h-100 shadow px-0">
                                                <div class="card-header text-center">
                                                    <!-- <p class="h2">Precio por m<small><sup>2</sup></small></p> -->
                                                    <p class="h2 text-success">Lote tipo</p>
                                                </div>
                                                <div class="card-body">
                                                    <div class="row text-center">
                                                        <div class="col-6">
                                                            <p class="h6">Precio por m<small><sup>2</sup></small></p>
                                                            <p class="h4 text-success">418 <span class="h4">MXN</p>
                                                        </div>
                                                        <div class="col-6">
                                                            <p class="h6">Financiamiento hasta</p>
                                                            <p class="h4 text-success">60 <span class="h4">MSI</p>
                                                        </div>
                                                    </div>
                                                    <div class="row text-center">
                                                        <p class="h6">Enganche de</p>
                                                        <p class="h4 text-success">10%</h6>
                                                    </div>
                                                </div>
                                                <div class="card-footer">
                                                    <p class="card-title text-center h4">Entrega Diciembre 2025</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Price End -->
                            <div class="loader-container text-center mb-2">
                                <span class="mdi mdi-vanish mdi-spin"></span>
                                Loading image...
                            </div>
                            <div class="row">
                                <img src="<?= STATIC_URL . 'img/wind-rose_ES.svg' ?>" alt="Brujula" height="100px" style="transform: rotate(0deg);">
                            </div>
                            <div class="row mt-2">
                                <p class="small fw-bolder text-center">Para más información, pase el mouse sobre el mapa</p>
                            </div>
                            <!-- SVG -->
                            <div class="d-flex flex-row justify-content-around text-center fw-bold text-white mt-3">
                                <div class="small bg-sold rounded-pill px-2">VENDIDO</div>
                                <div class="small bg-available rounded-pill px-2">DISPONIBLE</div>
                                <div class="small bg-reserved rounded-pill px-2">RESERVADO</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Property List End -->

<!-- <div class="container-xxl py-5">
    <div class="container ">
        <div class="row g-5 align-items-center">
            <iframe src="https://eva3d.com/realidad-virtual/recorridos-virtuales/acd-anthia/index.htm" width="1100" height="800" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen="" __idm_id__="131073"></iframe>
            </div>
    </div>
</div> -->
<div class="data">
    <input type="hidden" name="data_url" id="data_url" value='<?= base_url('assets/json/anthia.json') ?>'>
</div>

<!-- Modal -->
<div class="modal fade" id="modal-img" tabindex="-1" aria-labelledby="modal-imgLabel" aria-hidden="true" style="z-index: 99999">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header py-0 border-bottom-0">
                <!-- <ul class="nav nav-tabs pt-2" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link px-lg-5 active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Fotos</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link px-lg-5" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false" disabled>Videos</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link px-lg-5" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false" disabled>360</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link px-lg-5" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane" type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false" disabled>Planos</button>
                    </li>
                </ul> -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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

<div class="modal fade" id="sisalModal" tabindex="-1" aria-labelledby="sisalModalLabel" aria-hidden="true" style="z-index: 99999">
    <div class="modal-dialog modal-dialog-scrollable mt-5">
        <div class="modal-content mt-5">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="sisalModalLabel">Playa Sisal</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="text-center">
                    <!-- <div class="card-body "> -->
                        <div id="carouselAnthiSisal" class="carousel slide text-center" data-bs-ride="carousel" data-bs-touch="true">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="<?= STATIC_URL . 'img/anthia/promo/14.jpg' ?>" class="card-img-top img-fluid w-100 " alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?= STATIC_URL . 'img/anthia/promo/15.jpg' ?>" class="card-img-top img-fluid w-100 " alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?= STATIC_URL . 'img/anthia/promo/16.jpg' ?>" class="card-img-top img-fluid w-100 " alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="<?= STATIC_URL . 'img/anthia/promo/17.jpg' ?>" class="card-img-top img-fluid w-100 " alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselAnthiSisal" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden"><?= lang('Globals.previous') ?></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselAnthiSisal" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden"><?= lang('Globals.next') ?></span>
                            </button>
                        </div>
                    <!-- </div> -->
                    <!-- <div class="card-footer"> -->
                        <p class="fw-bold text-center">A solo 25 minutos del desarrollo.</p>
                        <p class="text-center">Sisal es un lugar muy tranquilo, que tiene una hermosa playa que te invita a la relajación.</p>
                        <p class="text-center">Además puedes: Visitar la famosa casa de la Emperatriz Carlota, el Fuerte de Santiago, la Laguna Cocodrilos y Reserva El Palmar,
                            disfrutar del atardecer en el Mirador Charcas, pasear por su muelle que recientemente fue remozado.</p>
                        <p class="text-center">En los alrededores del lugar podrás encontrar variedad de restaurantes con comida típica o mariscos, también de puestos donde venden el tradicional pescado frito y otras delicias del mar.</p>
                    <!-- </div> -->
                </div>
            </div>
            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div> -->
        </div>
    </div>
</div>
<!-- Modal End -->

<!-- Contact Us Section -->
<?= $sectionContact ?>
<!-- Reviews Section -->
<?= $sectionReviews ?>