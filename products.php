<?php
session_start();
include 'header.php'; 
include 'entity/Drymoss.php';

if (isset($_SESSION['productos'])) {
    $productos = $_SESSION['productos'];
} else {
   echo "No hay productos disponibles.";
   $productos = [];
  exit; 
}
?>

<!-- Page Header Start --> 
<div class="container-fluid page-header page-products py-5 mb-5 wow fadeIn" 
data-wow-delay="0.1s">
   <div class="container text-center py-5">
      <h1 class="display-3 text-white mb-4 animated slideInDown">
         Products
      </h1>
      <nav aria-label="breadcrumb animated slideInDown">
         <ol class="breadcrumb justify-content-center mb-0"> 
            <li class="breadcrumb-item">
               <a href="#">Home</a>
            </li> 
            <li class="breadcrumb-item">
               <a href="#">Pages</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
               Products 
            </li> 
         </ol>
      </nav>
   </div> 
</div> 

<!-- Page Header End -->

<!-- Projects Start --> 
<div class="container-xxl py-5"> 
	<div class="container">
		<div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s"
		style="max-width: 500px;">
			<p class="fs-5 fw-bold text-primary">Our Products</p>
			<h1 class="display-5 mb-5">Some of our amazing products</h1> 
		</div> 
	<div class="row wow fadeInUp" data-wow-delay="0.3s"> 
		<div class="col-12 text-center">
			<ul class="list-inline rounded mb-5" id="portfolio-flters"> 
				<li class="mx-2 active" data-filter="*">
					All
				</li> 
				<li class="mx-2" data-filter=".first">
					Dry Moss
				</li> 
				<li class="mx-2" data-filter=".second">
					Live Moss
				</li> 
			</ul> 
		</div>
	</div> 
	<div class="row g-4 portfolio-container"> 
		<div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" 
		data-wow-delay="0.1s"> 
			<div class="portfolio-inner rounded"> 
				<img class="img-fluid" src="img/service-1.webp" alt="" 
				loading="lazy"> 
				<div class="portfolio-text"> 
					<h4 class="text-white mb-4">
						Look this quality
					</h4> 
					<div class="d-flex"> 
						<a class="btn btn-lg-square rounded-circle mx-2" 
						href="img/service-1.webp" data-lightbox="portfolio">
							<i class="fa fa-eye"></i>
						</a> 
					</div> 
				</div> 
			</div> 
		</div> 
		<div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" 
		data-wow-delay="0.3s"> 
			<div class="portfolio-inner rounded"> 
				<img class="img-fluid" src="img/service-2.webp" alt="" 
				loading="lazy"> 
				<div class="portfolio-text"> 
					<h4 class="text-white mb-4">
						Pure green elegance
					</h4> 
					<div class="d-flex"> 
						<a class="btn btn-lg-square rounded-circle mx-2" 
						href="img/service-2.webp" data-lightbox="portfolio">
							<i class="fa fa-eye"></i>
						</a>
					</div> 
				</div> 
			 </div> 
		</div> 
		<div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" 
		data-wow-delay="0.5s"> 
			<div class="portfolio-inner rounded"> 
				<img class="img-fluid" src="img/service-3.webp"
				alt="" loading="lazy"> 
				<div class="portfolio-text"> 
					<h4 class="text-white mb-4">
						Simply breathtaking
					</h4> 
					<div class="d-flex"> 
						<a class="btn btn-lg-square rounded-circle mx-2" 
						href="img/service-3.webp" data-lightbox="portfolio">
							<i class="fa fa-eye"></i>
						</a> 
					</div> 
				</div> 
			</div> 
		</div>
		<div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" 
		data-wow-delay="0.1s"> 
			<div class="portfolio-inner rounded"> 
				<img class="img-fluid" src="img/service-4.webp" alt="" 
				loading="lazy"> 
				<div class="portfolio-text"> 
					<h4 class="text-white mb-4">
						A masterpiece of nature
					</h4> 
						<div class="d-flex"> 
							<a class="btn btn-lg-square rounded-circle mx-2" 
							href="img/service-4.webp" data-lightbox="portfolio">
								<i class="fa fa-eye"></i>
							</a> 
						</div> 
					</div> 
				</div>
			</div>
 			<div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp"
			data-wow-delay="0.3s"> 
				<div class="portfolio-inner rounded"> 
					<img class="img-fluid" src="img/service-5.webp" alt="" 
					loading="lazy"> 
					<div class="portfolio-text"> 
						<h4 class="text-white mb-4">
							Living art in green
						</h4>
						<div class="d-flex"> 
							<a class="btn btn-lg-square rounded-circle mx-2"
							href="img/service-5.webp" data-lightbox="portfolio">
								<i class="fa fa-eye"></i>
							</a> 
						</div> 
					</div> 
				</div> 
			</div>
			<div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" 
			data-wow-delay="0.5s"> 
				<div class="portfolio-inner rounded"> 
					<img class="img-fluid" src="img/service-6.webp"
					alt="" loading="lazy"> 
					<div class="portfolio-text"> 
						<h4 class="text-white mb-4">
							Unmatched natural beauty
						</h4> 
						<div class="d-flex"> 
							<a class="btn btn-lg-square rounded-circle mx-2" 
							href="img/service-6.webp" data-lightbox="portfolio">
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

<!--slider--> 

<h1 style="text-align:center">Product sizes</h1>


<!--Dry Moss Sizes-->
<div class="container-xxl py-5">
   <h2 style="text-align: left;">Dry Moss</h2>
   <div class="wrp-c">
      <div class="wrapper"> 
         <i id="left" class="fa-solid fa-angle-left"></i> 
         <ul class="carousel"> 
            <?php foreach ($productos as $producto): ?>
               <li class="card">
                  <div class="img">
                     <img 
                        src="<?= htmlspecialchars($producto->URL_IMG); ?>" 
                        alt="img" draggable="false"
                     >
                  </div>
                  <h2><?= htmlspecialchars($producto->nombre); ?></h2>
                  <span>S/<?= number_format($producto->precio, 2); ?></span>
                  <div class="dv-btn-ps">
                     <form action="details.php" method="post">
                        <input type="hidden" name="id" 
                        value="<?= $producto->id; ?>">
                           <button type="submit" 
                           class="btn btn-primary btn-ps-cp">
                              Ver más
                           </button>
                     </form>
                  </div>
               </li>
            <?php endforeach; ?>
         </ul> 
         <i id="right" class="fa-solid fa-angle-right"></i> 
      </div> 
   </div>
</div>

<?php include 'footer.php'; ?>
