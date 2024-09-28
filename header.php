<!DOCTYPE html>
<html lang="en" style="margin-top: 0px !important;">

<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="x-icon" href="img/icon/Logo.png" >
    <title>The King Moss</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta content="" name="keywords">
    <meta content="" name="description">
    
    
    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/ticket.css" rel="stylesheet">
</head>
<?php
session_start();
include 'entity/Drymoss.php';
include_once 'entity/Livemoss.php';


if (isset($_SESSION['productos'])) {
    $productos = $_SESSION['productos'];
} else {
   echo "No hay productos disponibles.";
   $productos = [];
  exit; 
}
if (isset($_SESSION['livemoss'])) {
    $livemoss= $_SESSION['livemoss'];
} else {
   echo "No hay productos disponibles.";
   $livemoss= [];
  exit; 
}
?>





<body>
<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;">
    </div>
</div>
<!-- Spinner End -->

<!-- Topbar Start -->
<div style="z-index: 123;position: relative;" class="container-fluid bg-dark text-light px-0 py-2">
    <div id="theader" class="row gx-0 d-none d-lg-flex">
        <div id="f-contact" class="col-lg-7 px-5 text-start">
            <div class="h-100 d-inline-flex align-items-center me-4">
                <a style="color:inherit" href="https://api.whatsapp.com/send?phone=51983929015" target="_blank">
                    <span ><img src="img/icon/phone-left.svg" src="phoneleft"></span>
                    <span>+51 983 929 015</span>
                </a>
            </div>
            <div class="h-100 d-inline-flex align-items-center">
                <span><img src="img/icon/mail16x18.svg" alt="email"></span>
                <span>henry.management@thekingmoss.com</span>
            </div>
        </div>
        <div id="tp-sp-pp" class="col-lg-5 px-5 text-end">
            <div class="h-100 d-inline-flex align-items-center mx-n2">
                <span id="sp-pp">Pronto Importaciones Power Plant(RUC: 10724859441) será Grupo Empresarial King Moss SAC</span>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->

<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
    <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <img class="tkmlogo" src="img/icon/TKMLogo.png"/>
        <h1 id="lgD" class="m-0">The King Moss</h1>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div style="align-items: center;" class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="index.php" class="nav-item nav-link">Inicio</a>
            <a href="about.php" class="nav-item nav-link">Sobre Nosotros</a>
            <a href="store.php" class="nav-item nav-link">Tienda</a>
            <a href="products.php" class="nav-item nav-link">Productos</a>
            <a href="contact.php" class="nav-item nav-link">Contacto</a>
        </div>
    </div>
</nav>
<!-- Navbar End -->

<!--wsp_component_start-->
<div class="wsp-master-container">
    <div class="wsp-1-1">
        <div class="inner_wsp-1-1 dnf-inner">
            <div class="wsp-1-2-1">
                <img class="wsp-1-2-1_img" src="img/icon/TKMLogo.png"/> 
                <p class="usrname"> 
                    <span class="user-wsp-name">
                        The King Moss
                    </span>En Linea
                </p>
            </div>			
            <div class="wsp-1-2-2">
                <div class="wsp-1-2-2-1">
                <p>Hola, Que tal?👋<br>
                    Estoy aqui para ayudarte, Asi que dime lo que necesitas el dia de hoy🤓
                </p>
            </div>
        </div>			
        <div class="wsp-1-2-3">
            <textarea id='message' class="send-label" placeholder="Ingresa tu mensaje..." inputmode="text"></textarea>
            <button 
                style="color: rgb(255, 255, 255);" 
                onclick="sendMessage()" 
                class="send-icon-lb"
            >
                <span 
                    class="ButtonBase__Overlay-sc-p43e7i-4 cjTloD" 
                    style="padding: 6px; border-radius: calc(14px); background-color: rgba(0, 0, 0, 0);"
                >
                    <span 
                        class="ButtonBase__Ellipsis-sc-p43e7i-5 dqiKFy"
                    >
                    </span>
                    <div 
                        class="Icon__IconContainer-sc-11wrh3u-0 jOAIgD ButtonBase__ButtonIcon-sc-p43e7i-0 gMSomS"
                    >
                        <div>
                            <div>
                                <svg 
                                    fill="#ffffff" 
                                    xmlns="http://www.w3.org/2000/svg" 
                                    viewBox="0 0 28 28" 
                                    class="injected-svg" 
                                    data-src="https://static.elfsight.com/icons/app-chats-send-message.svg" 
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                >
                                    <path 
                                        d="M9.166 7.5a.714.714 0 0 0-.998.83l1.152 4.304a.571.571 0 0 0 .47.418l5.649.807c.163.023.163.26 0 .283l-5.648.806a.572.572 0 0 0-.47.418l-1.153 4.307a.714.714 0 0 0 .998.83l12.284-5.857a.715.715 0 0 0 0-1.29L9.166 7.5Z"
                                    >
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </span> 
            </button>
        </div>
        </div>
    </div>

    <div class="wsp-1-2">
        <button class="btn-base-wsp-contact dfn-wsp">
        <img class="wsp-1-2_wsp-logo" src="img/wsp_light_logo.png"/>
        </button>
    </div>
</div>


<button type="button" class="btn " id="btn-carrito"><img src="img/icon/shopping.svg" alt="carrito"></button>

<!--Cart Sidebar-->
<div class="sidebar" id="id_sidebar">
    <div id="sideClose" class="sidebar-close">
        <span>x</span>
    </div>
    <div class="cart-menu">
        <h3>Mi Carrito</h3>
        <div class="cart-items">test 1</div>
    </div>
    <div class="sidebar-footer">
        <div class="total-amount">
            <h5>Total</h5>
            <div class="cart-total">S/0.00</div>
        </div>
        <button class="btn btn-primary gopay-btn">Comprar</button>
    </div>
</div>
<style>
.sidebar{
    background:white;
    width:300px;
    height:100%;
    position:fixed;
    top:0;
    right: -300px; 
    /*right:0;*/
    box-shadow: -4px 0 6px rgba(0,0,0,0.1);
    transition: right 0.3s ease-in-out;
    z-index:100000000;
    padding: 20px;
    border-top-left-radius:20px;
    border-bottom-left-radius:20px;
}   
.sidebar-open{
    right:0;
} 
.sidebar-close{
    position:absolute;
    right:20px;
    top:10px;
    cursor:pointer;
}
.cart-items{
    display:flex;
    flex-direction:column;
    gap:10px;
    margin-top:1rem;
    justify-content: space-between;
    padding:10px 5px;
    border-radius:5px;
    border:1px solid grey;
}
.sidebar-footer{
    position:absolute;
    bottom:10px;
    width:88%;
}
.total-amount{
    display:flex;
    align-items:center;
    justify-content:space-between;
    border: 2px solid grey;
    border-radius:5px;
    padding:15px;
}
.cart-total{
    font-size:16px;
    font-weight:500;
}
.gopay-btn{
    width:100%;
    margin-top:2rem;
}
</style>
<script>

function toggleSectionCart(){
    const btnExpandBuy = document.getElementById('btn-carrito');
    let sidebarExpand = document.getElementById("id_sidebar");
    const closeBtn = document.getElementById("sideClose");
    btnExpandBuy.addEventListener("click",()=>{
        sidebarExpand.classList.add("sidebar-open") 
    }) 
    
    closeBtn.addEventListener("click",()=>{
        sidebarExpand.classList.remove("sidebar-open") 
    })
}
function addItemToCart(){

}


document.addEventListener('DOMContentLoaded',()=>{
    toggleSectionCart();
})
</script>
