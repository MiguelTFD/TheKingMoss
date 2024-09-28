<?php
include 'header.php'; 
?>


<!-- Page Header Start -->
<div class="container-fluid page-header page-service py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white mb-4 animated slideInDown">Tienda</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                <li class="breadcrumb-item"><a href="#">Páginas</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tienda</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<style>
/* Estilos para el contenedor de la cuadrícula */
.grid-container {
    display: grid;
    grid-template-columns: repeat(3, 1fr); /* 3 columnas de igual tamaño */
    gap: 20px; /* Espacio entre elementos */
}

/* Estilos para las tarjetas */
.card {
    padding: 20px; /* Espaciado interno */
    border: 1px solid #dee2e6; /* Borde alrededor de los elementos */
    border-radius: 5px; /* Bordes redondeados */
    text-align: center; /* Alineación del texto */
}

.card .img img {
    width: 100%; /* Imagen se ajusta al tamaño del contenedor */
    height: 400px; /* Mantiene la proporción de la imagen */
    border-bottom: 1px solid #dee2e6; /* Borde inferior para separación */
    margin-bottom: 10px; /* Espacio debajo de la imagen */
}

.card h2 {
    font-size: 1.70rem; /* Tamaño de fuente para el título */
    margin: 10px 0; /* Espacio arriba y abajo del título */
}

.card .d-flex {
    margin-bottom: 10px; /* Espacio debajo del contenedor de precios */
}
#cpp{
    justify-content: center;
}

/* Media Queries para pantallas más pequeñas */
@media (max-width: 1200px) {
    .grid-container {
        grid-template-columns: repeat(2, 1fr); /* 2 columnas en pantallas medianas */
    }
}

@media (max-width: 768px) {
    .grid-container {
        grid-template-columns: 1fr; /* 1 columna en pantallas pequeñas */
    }
}
.shop-sales{
width: 120px;
top: -12px;
left: -12px;
z-index: 1000;
position: absolute;
filter: saturate(0.8);
}
</style>
<!-- Store Start-->

<div style="display:flex;align-items: center;justify-content: center;">
<img
    class="m-icon"
    src="img/icon/storefront_24dp_929302_FILL0_wght400_GRAD0_opsz24.svg" 
    alt="storefront"
>
<h1 style="width: fit-content;margin:0">Tienda</h1>
</div>
<!-- Dry Moss Sizes -->
<div class="container-xxl py-5">

    <h2 style="text-align: left;">Musgo Deshidratado</h2>
    <div class="grid-container">
        
        <?php foreach ($productos as $producto): ?>
        <div class="card">

            <img class="shop-sales" src="img/sale.png">
            <div class="img">
                <img
                    src="<?= htmlspecialchars($producto->URL_IMG); ?>"
                    alt="img" draggable="false"
                >
            </div>
            <h2><?= htmlspecialchars($producto->nombre); ?></h2>
            <div id="cpp" class="d-flex align-items-center gap-3 m-1">
                <p style="font-size:1.3em;color:gray;text-decoration: line-through;">
                    S/<?= htmlspecialchars($producto->precio) ?>
                </p>
                <p style="font-size:1.8em;color:#BD0000;font-weight: bold;">
                    S/<?= htmlspecialchars($producto->descuento()) ?>
                </p>
            </div>
            <div class="dv-btn-ps">
                <form action="details.php" method="post">
                    <input type="hidden" name="id" value="<?= $producto->id; ?>">
                    <button type="submit" class="btn btn-secondary btn-ps-cp">
                        Ver más
                    </button>
                    <button type="submit" class="btn btn-primary btn-ps-cp">
                        Agregar al carrito 
                    </button>

                </form>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<!-- Service End -->

<!-- Live Moss-->
<div class="container-xxl py-5">

    <h2 style="text-align: right;">Musgo Vivo</h2>
    <div class="grid-container">
        
        <?php foreach ($livemoss as $live): ?>
        <div class="card">

            <img class="shop-sales" src="img/sale.png">
            <div class="img">
                <img
                    src="<?= htmlspecialchars($live->URL_IMG); ?>"
                    alt="img" draggable="false"
                >
            </div>
            <h2><?= htmlspecialchars($live->nombre); ?></h2>
            <div id="cpp" class="d-flex align-items-center gap-3 m-1">
                <p style="font-size:1.3em;color:gray;text-decoration: line-through;">
                    S/<?= htmlspecialchars($live->precio) ?>
                </p>
                <p style="font-size:1.8em;color:#BD0000;font-weight: bold;">
                    S/<?= htmlspecialchars($live->descuento()) ?>
                </p>
            </div>
            <div class="dv-btn-ps">
                <form action="details.php" method="post">
                    <input type="hidden" name="id" value="<?= $live->id; ?>">
                    <button type="submit" class="btn btn-primary btn-ps-cp">
                        Ver más
                    </button>
                </form>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>



<?php include 'footer.php'; ?>
