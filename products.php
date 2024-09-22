<?php include_once 'header.php' ?>

<style>
    .portfolio-item{
        position: inherit;
    }
    #ct-productos-25 {
        height: fit-content !important;
        position: relative;
    }
</style>


<!-- Page Header Start --> 
<div class="container-fluid page-header page-products py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white mb-4 animated slideInDown">
           Productos 
        </h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0"> 
                <li class="breadcrumb-item">
                   <a href="#">Inicio</a>
                </li> 
                <li class="breadcrumb-item">
                   <a href="#">Páginas</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Productos 
                </li> 
            </ol>
        </nav>
    </div> 
</div> 
<!-- Page Header End -->

<!-- Projects Start --> 
<div class="container-xxl py-5"> 
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="fs-5 fw-bold text-primary">Nuestros Productos</p>
            <h1 class="display-5 mb-5">Algunos de nuestros excelentes productos</h1> 
        </div> 
        <div class="row wow fadeInUp" data-wow-delay="0.3s"> 
            <div class="col-12 text-center">
                <ul class="list-inline rounded mb-5" id="portfolio-flters"> 
                    <li class="mx-2 active" data-filter="*">
                       Todos 
                    </li> 
                    <li class="mx-2" data-filter=".first">
                       Musgo Deshidratado 
                    </li> 
                    <li class="mx-2" data-filter=".second">
                       Musgo Vivo 
                    </li> 
                </ul> 
            </div>
	    </div> 
        <div id="ct-productos-25" style="height: fit-content !important;" class="row g-4 "> 
            <div style="position: relative !important;" class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s"> 
                <div class="portfolio-inner rounded"> 
                    <img class="img-fluid" src="img/service-1.webp" alt="" loading="lazy"> 
                    <div class="portfolio-text"> 
                        <div class="d-flex"> 
                            <a class="btn btn-lg-square rounded-circle mx-2" href="img/service-1.webp" data-lightbox="portfolio">
                                <i class="fa fa-eye"></i>
                            </a> 
                        </div> 
                    </div> 
                </div> 
            </div> 
            <div style="position: relative !important;" class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.3s"> 
                <div class="portfolio-inner rounded"> 
                    <img class="img-fluid" src="img/service-2.webp" alt="" loading="lazy"> 
                    <div class="portfolio-text"> 
                        <div class="d-flex"> 
                            <a class="btn btn-lg-square rounded-circle mx-2" href="img/service-2.webp" data-lightbox="portfolio">
                                <i class="fa fa-eye"></i>
                            </a>
                        </div> 
                    </div> 
                </div> 
            </div> 
            <div style="position: relative !important;" class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.5s"> 
                <div class="portfolio-inner rounded"> 
                    <img class="img-fluid" src="img/service-3.webp"alt="" loading="lazy"> 
                    <div class="portfolio-text"> 
                        <div class="d-flex"> 
                            <a class="btn btn-lg-square rounded-circle mx-2" href="img/service-3.webp" data-lightbox="portfolio">
                                <i class="fa fa-eye"></i>
                            </a> 
                        </div> 
                    </div> 
                </div> 
            </div>
            <div style="position:relative  !important;" class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.1s"> 
                <div class="portfolio-inner rounded"> 
                    <img class="img-fluid" src="img/service-4.webp" alt="" loading="lazy"> 
                    <div class="portfolio-text"> 
                        <div class="d-flex"> 
                            <a class="btn btn-lg-square rounded-circle mx-2" href="img/service-4.webp" data-lightbox="portfolio">
                                <i class="fa fa-eye"></i>
                            </a> 
                        </div> 
                    </div> 
                </div>
            </div>
            <div style="position: relative !important;" class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp"data-wow-delay="0.3s"> 
                <div class="portfolio-inner rounded"> 
                    <img class="img-fluid" src="img/service-5.webp" alt="" loading="lazy"> 
	                <div class="portfolio-text"> 
                        <div class="d-flex"> 
                            <a class="btn btn-lg-square rounded-circle mx-2"href="img/service-5.webp" data-lightbox="portfolio">
                                <i class="fa fa-eye"></i>
                            </a> 
                        </div> 
                    </div> 
                </div> 
            </div>
            <div style="position: inherit !important;" class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.5s"> 
                <div class="portfolio-inner rounded"> 
                    <img class="img-fluid" src="img/service-6.webp"alt="" loading="lazy"> 
                    <div class="portfolio-text"> 
                        <div class="d-flex"> 
                            <a class="btn btn-lg-square rounded-circle mx-2" href="img/service-6.webp" data-lightbox="portfolio">
                                <i class="fa fa-eye"></i>
                            </a> 
                        </div> 
                    </div> 
                </div>
            </div>
        </div> 
    </div> 
</div> 
<!-- Projects End -->

<?php include 'footer.php'; ?>
