<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Inicio</title>
    <style>

body {
    margin: 0;
    padding: 0;
    height: auto;
    width: 100%;
    background-color:#ffffff;
    overflow-x: hidden;
    margin-top: px;
    }

    /*HEADER......................................................*/
    .header {
    background-color:#ffeec6;
    display: flex;
    align-items: center;
    width: 100vw;
    padding: 10px;
    text-align: center;
    height: 75px;
    position: fixed;
    z-index: 3;
    }
    .logo img {
    margin-left:-55px; 
    width: 50%;
    height:100%;
    }
    .headerbutton{
    width: 60%;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 18px;
    font-weight: 800;
    }
    .button {
    color: #7b5b47;
    margin: 5% 15px; 
    margin-bottom: 10px; 
    font-family: "Anton", sans-serif;
    display: inline-block;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 19px;
    transition: background-color 0.3s ease;
    }
    .button:active {
    background-color: #222;
    }
    .button:first-child {
    margin-left: 95%; 
    }
    #quienessomos .button-text {
    font-family: "Anton", sans-serif;
    font-size: 18px;
    white-space: nowrap;
    }

    .buttonUser{
    width: 30%;
    margin-right: 10%;
    display: flex;
    justify-content: flex-end;
    align-items: center;
    font-size: 15px;
    font-family: "Anton", sans-serif;
    }
    .buttonLogin{
    font-weight: 800;
    font-family: "Anton", sans-serif;
    color: #ffeec6;
    }
    .buttonLogin{
    border: 2px transparent solid;
    background-color: #7b5b47;
    width: 20%;
    border-radius: 20px;
    margin-right: 25px;
    margin-left: -25px;
    padding: 15px;
    text-align: center;
    }
    .cart-icon {
    margin-right: -10px; 
    }
    .cart-icon img {
    width: 45px; 
    height: auto;
    }
    .button:hover {
    background-color: #ffffff;
    }
    /*........................................*/
    /*Contenido.....................................................*/
    .container {
    margin: 0%;
    display: grid;
    grid-template-columns: repeat(1, 1fr);
    grid-template-rows: repeat(3, 1fr);
    gap: 0px;
    padding: 0px;
    }

    /*GRID 1.....................................................*/
    .grid-itemBlanco {
    background-color: #f5f1e8;
    padding: 10px;
    text-align: center;
    width: 100vw;
    height: 120vh;
    margin: 0%;
    }
    .textContainer {
    position: relative;
    margin-top: -180px; 
    z-index: 2; 
    }
    .text1
    {
    font-family: "Anton", sans-serif;
    margin-top: 670px;
    text-align: center;
    margin-left: 2%;
    color:#7b5b47;
    font-size: 55px;
    font-weight: bold;
    }
    .text6
    {
    font-family: Helvetica, Arial, sans-serif;
    font-size: 27px;
    align-items: center;
    margin-top: -20%;
    margin-left: 45%;
    color:  #070707;
    text-align: center;
    }
    .imgPromo{
    width: 350px;
    margin-left: -35%;
    }
    .imgDeco {
    position: absolute;
    margin-top: -18%; 
    left: -10px; 
    width: 250px;
    }

    .imgDeco1 {
    position: absolute;
    top: -23px; 
    right: -10px; 
    width: 250px;
    z-index: 1;
    }
    .square1 {
    background-color:#7b5b47;
    width: 15%;
    height: 7%;
    display: flex;
    justify-content: space-between;
    border-radius: 45px;
    position: relative;
    margin-top: 2%;
    margin-left: 65%;
    z-index: 1;
    }
    h2{
    font-size: 20px;
    margin-top: 20px;
    text-align: center;
    margin-left: 25px;
    color: #f4f1e8;
    font-family: "Anton", sans-serif;
    justify-content: center;
    display: flex;
    }
    .square3 {
    background-color:#9b4237;
    width:101.3vw;
    height: 5%;
    margin-top:-26%;
    margin-left: -15px;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 2;
    position: relative;
    }
    h1{
    font-size: 20px;
    margin-top: 20px;
    text-align: center;
    margin-left: 5px;
    color: #f4f1e8;
    font-family: "Anton", sans-serif;
    justify-content: space-between;
    display: flex;
    }
    /*CARRUSEL*/
    @keyframes slide {
    0% { transform: translateX(0); }
    100% { transform: translateX(-100%); }
    }
    .slide-inner {
    position: absolute;
    overflow: hidden;
    width: 101vw;
    margin-left:-10px;
    height: calc(400px + 3em);
    margin-top: -105%; 
    }

    .slide-open:checked + .slide-item {
    position: static;
    opacity: 100;
    }
    .slide-item {
    position: absolute;
    opacity: 0;
    -webkit-transition: opacity 0.6s ease-out;
    transition: opacity 0.6s ease-out;
    }
    .slide-item img {
    display: block;
    height: auto;
    max-width: 100%;
    }
    .slide-control {
    background: rgba(0, 0, 0, 0.28);
    border-radius: 50%;
    color: #fff;
    cursor: pointer;
    display: none;
    font-size: 40px;
    height: 40px;
    line-height: 35px;
    position: absolute;
    top: 65%;
    -webkit-transform: translate(0, -50%);
    cursor: pointer;
    -ms-transform: translate(0, -50%);
    transform: translate(0, -50%);
    text-align: center;
    width: 40px;
    z-index: 10;
    }
    .slide-control.prev {
    left: 5%;
    }
    .slide-control.next {
    right: 5%;
    }
    .slide-control:hover {
    background: rgba(0, 0, 0, 0.8);
    color: #aaaaaa;
    }
    #slide-1:checked ~ .control-1,
    #slide-2:checked ~ .control-2,
    #slide-3:checked ~ .control-3 {
    display: block;
    }
    .slide-indicador {
    list-style: none;
    margin: 0;
    padding: 0;
    position: absolute;
    bottom: 2%;
    left: 0;
    right: 0;
    text-align: center;
    z-index: 10;
    }
    .slide-indicador li {
    display: inline-block;
    margin: 0 5px;
    }
    .slide-circulo {
    color: #8282823e;
    cursor: pointer;
    display: block;
    font-size: 35px;
    }
    .slide-circulo:hover {
    color: #aaaaaa30;
    }
    #slide-1:checked ~ .control-1 ~ .slide-indicador 
        li:nth-child(1) .slide-circulo,
    #slide-2:checked ~ .control-2 ~ .slide-indicador 
        li:nth-child(2) .slide-circulo,
    #slide-3:checked ~ .control-3 ~ .slide-indicador 
        li:nth-child(3) .slide-circulo {
    color: #f2f2f21e;
    }
    #titulo {
    width: 100%;
    position: absolute;
    padding: 0px;
    margin: 0px auto;
    text-align: center;
    font-size: 27px;
    color: rgba(255, 255, 255, 1);
    font-family: 'Open Sans', sans-serif;
    z-index: 9999;
    text-shadow: 0px 1px 2px rgba(0, 0, 0, 0.33), 
            -1px 0px 2px rgba(255, 255, 255, 0);
    }
    .slide-item img {
    display: block;
    height: 200%; 
    width: 100%; 
    max-width: 100%;
    }
    /*GRID 2.....................................................*/
    .grid-itemGris { 
    background-color: #f5f1e8;
    padding: 10px;
    text-align: center;
    width: 100vw;
    height: 120vh;
    margin: 0%;
    }
    h3 {
    font-family: "Anton", sans-serif;
    margin-top: -250%; 
    text-align: center;
    color: #7b5b47;
    font-size: 55px;
    margin-left: 290%; 
    font-weight: bold;
    align-items: center;
    justify-content: center;
    display: flex;
    position: absolute;
    }
    .imgDec{
    position: absolute;
    top: 129%; 
    right: -11px; 
    width: 250px;
    z-index: 1; 
    }
    .imgDec1{
    position: absolute;
    top: 211.5%; 
    left:-4px; 
    width: 250px;
    z-index: 1; 
    }
    .cubos-container {
    display: flex;
    flex-direction: column;
    align-items: center; 
    margin-top: 15%;
    margin-left: -65%;
    text-decoration: none;
    }
    .cubosrojosder {
    background-color:#d07c4c;
    height: 200px;
    width: 350px;
    display: flex;
    border-radius: 50px;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    transition: background-color 0.3s ease;
    }
    .cubosrojosder a {
    text-decoration: none;
    }
    .cubosrojosder:hover {
    background-color: #e8afa0;
    }
    .cubosrojosder:active {
    background-color:#7b5b47; 
    }
    .text-container {
    position: relative;
    transform: translateY(-50%);
    text-align: center; 
    z-index: 2; 
    margin-top:10%; 
    }

    .p-style {
    font-size: 30px;
    font-family: Helvetica, Arial, sans-serif;
    font-weight: bold; 
    color: #f4f1e7; 
    }

    .cubos-container1 {
    display: flex;
    flex-direction: column;
    align-items: center; 
    margin-top: 15px;
    }

    .cubosrojosder1 {
    background-color: #c15757;
    height: 200px;
    width: 350px;
    display: flex;
    border-radius: 50px;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    transition: background-color 0.3s ease;
    }
    .cubosrojosder1 a {
    text-decoration: none;
    }
    .cubosrojosder1:hover {
    background-color: #e8afa0;
    }
    .cubosrojosder1:active {
    background-color:#7b5b47; 
    }
    .text-container1 {
    position: relative;
    top:280%; 
    transform: translateY(-50%);
    text-align: center; 
    z-index: 1; 
    top:15%; 
    }
    .p-style1 {
    font-size: 30px;
    font-family: Helvetica, Arial, sans-serif;
    font-weight: bold; 
    color: #f4f1e7; 
    }
    /*.............................................*/
    .cubos-container2 {
    display: flex;
    flex-direction: column;
    align-items: center; 
    margin-top: -16.5%;
    margin-left: 38%;
    }
    .cubosrojosder2 {
    background-color: #e3b85a;
    height: 200px;
    width: 350px;
    display: flex;
    border-radius: 50px;
    flex-direction: column;
    justify-content: center;
    align-items: center; 
    transition: background-color 0.3s ease;
    }
    .cubosrojosder2 a {
    text-decoration: none;
    }
    .cubosrojosder2:hover {
    background-color: #e8afa0;
    }
    .cubosrojosder2:active {
    background-color:#7b5b47; 
    }   
    .text-container2 {
    position: relative;
    transform: translateY(-50%);
    text-align: center; 
    z-index: 2; 
    margin-top:10%; 
    }

    .p-style2 {
    font-size: 30px;
    font-family: Helvetica, Arial, sans-serif;
    font-weight: bold; 
    color: #f4f1e7; 
    }

    .cubos-container3 {
    display: flex;
    flex-direction: column;
    align-items: center; 
    margin-top: 15px;
    }

    .cubosrojosder3 {
    background-color: #7b5942;
    height: 200px;
    width: 350px;
    display: flex;
    border-radius: 50px;
    flex-direction: column;
    justify-content: center;
    align-items: center; 
    transition: background-color 0.3s ease;
    }
    .cubosrojosder3 a {
    text-decoration: none;
    }
    .cubosrojosder3:hover {
    background-color: #e8afa0;
    }
    .cubosrojosder3:active {
    background-color:#7b5b47; 
    }   
    .text-container3 {
    position: relative;
    top:280%; 
    transform: translateY(-50%);
    text-align: center; 
    z-index: 1; 
    top:15%; 
    }
    .p-style3 {
    font-size: 30px;
    font-family: Helvetica, Arial, sans-serif;
    font-weight: bold; 
    color: #f4f1e7; 
    }
    /*.............................................*/
    .cubos-container4 {
    display: flex;
    flex-direction: column;
    align-items: center; 
    margin-top: -16%;
    margin-left: 75%;
    }
    .cubosrojosder4 {
    background-color:#db8898;
    height: 200px;
    width: 350px;
    display: flex;
    border-radius: 50px;
    flex-direction: column;
    justify-content: center;
    align-items: center; 
    transition: background-color 0.3s ease;
    }
    .cubosrojosder4 a {
    text-decoration: none;
    }
    .cubosrojosder4:hover {
    background-color: #e8afa0;
    }
    .cubosrojosder4:active {
    background-color:#7b5b47; 
    }   
    .text-container4 {
    position: relative;
    transform: translateY(-50%);
    text-align: center; 
    z-index: 2; 
    margin-top:10%; 
    }

    .p-style4 {
    font-size: 30px;
    font-family: Helvetica, Arial, sans-serif;
    font-weight: bold; 
    color: #f4f1e7; 
    }

    .cubos-container5 {
    display: flex;
    flex-direction: column;
    align-items: center; 
    margin-top: 15px;
    }

    .cubosrojosder5 {
    background-color: #cd8875;
    height: 200px;
    width: 350px;
    display: flex;
    border-radius: 50px;
    flex-direction: column;
    justify-content: center;
    align-items: center; 
    transition: background-color 0.3s ease;
    }
    .cubosrojosder5 a {
    text-decoration: none;
    }
    .cubosrojosder5:hover {
    background-color: #e8afa0;
    }
    .cubosrojosder5:active {
    background-color:#7b5b47; 
    }   
    .text-container5 {
    position: relative;
    top:280%; 
    transform: translateY(-50%);
    text-align: center; 
    z-index: 1; 
    top:10%; 
    }
    .p-style5 {
    font-size: 30px;
    font-family: Helvetica, Arial, sans-serif;
    font-weight: bold; 
    color: #f4f1e7; 
    }


    /*FOOTER.....................................................*/
    footer {
    width: 100vw;
    min-height: 200px; 
    background-color: #292929;
    padding: 10px;
    text-align: center;
    margin: 0%;
    position: relative; 
    }
    .white1 {
    margin-left: -50%;
    color: #ffffff;
    font-size: 25px;
    font-weight: bold;
    font-family: Helvetica, Arial, sans-serif;
    }
    .textologo1 {
    margin-top:5%;
    margin-left: -69%;
    display: inline-flex;
    align-items: center; 
    }

    .text12, .p2 {
    position: absolute; 
    bottom: 10%; 
    margin-top: 20px; 
    font-family: Helvetica, Arial, sans-serif;
    font-size: 18px;
    margin-left: 10%;
    text-align: left;
    color: #878484;
    font-weight: lighter;
    }
    .text13, .p2 {
    position: absolute; 
    bottom: 10%; 
    margin-top: 20px; 
    font-family: Helvetica, Arial, sans-serif;
    font-size: 18px;
    margin-left: 55%;
    text-align: left;
    color: #878484;
    font-weight: lighter;
    }

    .headerbutton1{
    width: 80%;
    margin-left: 22%;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 25px;

    }
    .button1{
    margin-top: -55%;
    color: #ffffff;
    margin-left:4%;
    font-weight: 300px;
    font-family: Helvetica, Arial, sans-serif;
    }
    b3{
    margin-left:2%;
    font-weight:bold;
    }
    .text24,.text25{
    font-family: Helvetica, Arial, sans-serif;
    font-size: 16px;
    margin-left: 5%;
    text-align: left;
    color: #ffffffaa;
    font-weight: lighter;
    }
	</style>
</head>
<body>
    <!---------HEARDER----------------------------->
   
    <div class="header">
        <div class="logo">
            <a href="index.php"><img src="logo.png"></a>
        </div>
        <section id="informacion">
            <div class="headerbutton">
                <a href="#inicio"class="button"><b> INICIO </b></a>
                <a href="#productos" class="button"><b> PRODUCTOS </b></a>
                <a href="contacto.php" class="button"><b> CONTACTO </b></a>
                <a href="quienes.php" class="button" id="quienessomos"><b class="button-text"> ¿QUIENES SOMOS?</b></a>
            </div>
        </section>
        <div class="buttonUser">
			<a href="login.php"class="button"> <div class="buttonLogin">LOGIN</div></a>
            <div class="cart-icon">
                <img src="imagen_2024-03-23_200018883-removebg-preview.png" alt="Carrito de compras">
            </div>
        </div>
    </div>
    

     <!---------CONTENIDO----------------------------->
    <div class="container">
        <!------------------------>
            <div class="grid-itemBlanco" id="inicio">   
            <div class="textContainer"> 
                <div class="text1">
                    <span class=""> Promoción del mes</span>
                </div>
                <img src="promo.png" class="imgPromo">
                <div class="text6">
                    En la compra de 3 kilos de Manguitos con chile,
                    <br> llévate un chamoy de 1L sabor original. 
                    <br>Por $500.00 MXN
                </div>   
                <img src="imagen_2024-03-23_184836267-removebg-preview-removebg-preview.png" class="imgDeco">     
                <img src="ideas_para_la_pagina-removebg-preview.png" class="imgDeco1">      
                </div>
                <div class="square1"> 
                    <h2>Agregar al carrito</h2>
                </div>
                <div class="square3">
                    <h1>En Querétaro envío gratis a partir de los $300.00 MXN de compra</h1>
                </div>
            </div>
        <!------------------------>
            <div class="grid-itemGris" id="productos">
                <div class="cubos-container">
                <div class="cubosrojosder">
                    <div class="text-container">
                        <a href="salsas.php" class="p-style">SALSAS</a>
                        <h3>NUESTROS PRODUCTOS</h3>
                    </div>
                    <img src="imagen_2024-03-23_211909506-removebg-preview.png" class="imgDec">   
                    <img src="descarga.png" class="imgDec1">         
                </div>
                <div class="cubos-container1">
                <div class="cubosrojosder1">
                    <div class="text-container1">
                    <a href="dulce.php" class="p-style1">DULCE ARTESANAL</a>
                    </div>
                </div>
                </div>

                <div class="cubos-container2">
                    <div class="cubosrojosder2">
                        <div class="text-container2">
                            <a href="rompope.php" class="p-style2">ROMPOPE</a>
                        </div>     
                    </div>
                    <div class="cubos-container3">
                    <div class="cubosrojosder3">
                        <div class="text-container3">-
                            <a href="cafe.php" class="p-style3">CHOCOLATE & CAFE</a>
                        </div>
                    </div>
                    </div>
            </div>
            
            <div class="cubos-container4">
                <div class="cubosrojosder4">
                    <div class="text-container4">
                        <a href="paletas.php"class="p-style4">PALETAS</a>
                    </div>   
                </div>
                <div class="cubos-container5">
                <div class="cubosrojosder5">
                    <div class="text-container5">
                        <a href="cajeta.php" class="p-style5">CAJETA</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!--CARRUSEL-->
        <div class="slide">
            <div class="slide-inner">
                <input class="slide-open" type="radio" id="slide-1" name="slide" aria-hidden="true" hidden="" checked="checked">
                <div class="slide-item">
                    <img src="https://lh3.googleusercontent.com/p/AF1QipMiFvVNg_V9oZPw30bHEgVlcpSX_SOXB7DVqF5T=s680-w680-h510">
                </div>
                <input class="slide-open" type="radio" id="slide-2" name="slide" aria-hidden="true" hidden="">
                <div class="slide-item">
                    <img src="https://lh3.googleusercontent.com/p/AF1QipOFg6INo5BwxrMcFx4KLnx3x6xjVuCqB2SiLibx=s680-w680-h510">
                </div>
                <input class="slide-open" type="radio" id="slide-3" name="slide" aria-hidden="true" hidden="">
                <div class="slide-item">
                    <img src="https://media.istockphoto.com/id/1809079186/es/foto/receta-de-caf%C3%A9-mexicano-vista-panor%C3%A1mica-de-la-mesa.jpg?s=612x612&w=0&k=20&c=4HwZ3gu0C9PrOK0QisARzHjrZpUQYa54bCIyjnU8vDM=">
                </div>
                <!-- Flechas de control -->
                <label for="slide-3" class="slide-control prev control-1">‹</label>
                <label for="slide-2" class="slide-control next control-1">›</label>
                <label for="slide-1" class="slide-control prev control-2">‹</label>
                <label for="slide-3" class="slide-control next control-2">›</label>
                <label for="slide-2" class="slide-control prev control-3">‹</label>
                <label for="slide-1" class="slide-control next control-3">›</label>
                <!-- Indicadores -->
                <ol class="slide-indicador">
                    <li>
                        <label for="slide-1" class="slide-circulo">•</label>
                    </li>
                    <li>
                        <label for="slide-2" class="slide-circulo">•</label>
                    </li>
                    <li>
                        <label for="slide-3" class="slide-circulo">•</label>
                    </li>
                </ol>
            </div>
            <!------------------------>
        </div>
        <script>
            // Función para cambiar automáticamente las imágenes cada cierto tiempo
            function autoChangeSlide() {
                let slides = document.querySelectorAll('.slide-open');
                let currentIndex = 0;
                setInterval(() => {
                    // Desmarca la diapositiva actual
                    slides[currentIndex].checked = false;
        
                    // Calcula el índice de la próxima diapositiva
                    currentIndex = (currentIndex + 1) % slides.length;
        
                    // Marca la próxima diapositiva
                    slides[currentIndex].checked = true;
                }, 5000); // Cambia la imagen cada 5 segundos (ajusta según sea necesario)
            }
        
            // Llama a la función para que comience el cambio automático de diapositivas cuando se cargue el documento
            document.addEventListener('DOMContentLoaded', autoChangeSlide);
        </script>
    </div><!--DIV CONTAINER-->
        
         <!------------------------>
         <footer>
            <div class="textologo1">
                <span class="white1">Visitanos en nuestra ubicación </span>
                
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3733.827961315805!2d-100.46224922495486!3d20.635868080916975!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d3508b08cf56cb%3A0xfa454fd9924690f3!2sHuicholes%20140%2C%20Cerrito%20Colorado%2C%2076116%20Santiago%20de%20Quer%C3%A9taro%2C%20Qro.!5e0!3m2!1ses!2smx!4v1711255245300!5m2!1ses!2smx" 
            width="600" height="450" 
            style="border:0; float: left; margin-left: 5%; margin-top: 10%;" 
            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" 
            class="map"></iframe>
            <div class="text12">
                <p2>
                    <br>Copyright © Mi morelia distribuidor,2024.
                </p2>
            </div>
            <div class="text13">
                <p2>
                    <br>Desarrollada por Andrea López Ceo de Miko.Creates.
                </p2>
            </div>
            <div class="headerbutton1">
                <!---->
               <div class="button1">
                   <b3> Contáctanos</b3> 
                   <div class="text24">
                       <br>+52 442 523 9734 
                   <div class="text25">
                       <br>mimorelia_dis@gmail.com
                   </div>
               </div>
                <!---->
           </div> 
        </footer>
</body>
</html>
</body>
</html>