<?php
include_once 'Producto.php';

$livemoss = [

    new Producto(
        101,
        20,
        "Taper de Musgo Vivo 1L",
        "Musgo Vivo",
        "Musgo Vivo Sphagnum de diferentes colores, almacenado en taper de 1L",
        "1L",
        "1Kg",
        45,
        "img/mv1l.webp"
   ),

    new Producto(
        102,
        177,
        "Balde de Musgo Vivo 18L",
        "Musgo Vivo",
        "Musgo Vivo Sphagnum de diferentes colores, almacenado en taper de 1L",
        "18L",
        "18Kg",
        45,
        "img/mvbg.webp"
   ),
/* 
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
 */
];
$_SESSION['livemoss'] = $livemoss;
?>
