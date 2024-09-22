<?php
include_once 'Producto.php';

$productos = [
    new Producto(
        1,
        160,
        "Bloque fibra 5K",
        "Musgo Blanco",
        "Musgo Blanco Sphagnum de Fibra larga por 5kg prensado en bloque de
        33cmX33cmX50cm",
        "33cmX33cmX50cm",
        "5Kg",
        45,
        "img/bf5k.webp"
    ),

    new Producto(
        2,
        80,
        "Bloque picado 5K",
        "Musgo Blanco",
        "Musgo Blanco Sphagnum picado por 5kg prensado en bloque de
        33cmX33cmX45cm",
        "33cmX33cmX45cm",
        "5Kg",
        45,
        "img/bp5k.webp"
    ),

    new Producto(
        3,
        80,
        "Bloque fibra 2.5Kg",
        "Musgo Blanco",
        "Musgo Blanco Sphagnum de Fibra larga por 2.5kg prensado en bloque 
        de 33cmX33cmX30cm",
        "33cmX33cmX30cm",
        "2.5Kg",
        45,
        "img/bf2_5k.webp"
    ),

    new Producto(
        4,
        40,
        "Bloque picado 2.5Kg",
        "Musgo Blanco",
        "Musgo Blanco Sphagnum Picado por 2.5kg prensado en bloque de
        33cmX33cmX25cm",
        "33cmX33cmX25cm",
        "2.5Kg",
        45,
        "img/bp2_5k.webp"
    ),

    new Producto(
        5,
        40,
        "Bloque fibra 1Kg",
        "Musgo Blanco",
        "Musgo Blanco Sphagnum de fibra larga por 1kg prensado en forma de
        pizza en bloque de 33cmX33cmX8cm",
        "33cmX33cmX8cm",
        "1Kg",
        45,
        "img/pizza.webp"
    )
];

$_SESSION['productos'] = $productos;

?>
