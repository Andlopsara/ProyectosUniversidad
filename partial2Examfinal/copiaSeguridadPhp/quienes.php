<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleQuienes.css">
    <title>¿Quines somos?</title>
    <style>
        body {
    margin: 0;
    padding: 0;
    height: auto;
    background-color:#f5f1e8;
    overflow-x: hidden;
}
/*HEADER.................................*/
header {
    background-color:#ffeec6;
    display: flex;
    align-items: center;
    width: 100vw;
    padding: 20px;
    text-align: center;
    height: 75px;
    position: fixed;
    z-index: 3;
    top: 0;
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

/*CONTENIDO.................................*/
.container {
    padding: 20px;
    margin: 20px;
    height: 120vh;
}

.texto-grande {
    color: #9b4237;
    font-size: 80px;
    font-weight: bold;
    margin-top: 10%;
    font-family: "Rowdies", sans-serif;
    font-weight: 700;
    font-style: normal;
    margin-left: 24%;
  }
    .img{
    margin-left: 55%;
    }
  .texto-pequeño {
    font-size: 25px;
    font-family: "Anton", sans-serif;
    margin-left: 3%;
    margin-top: -20%;
  }
  .texto-grande2 {
    color: #9b4237;
    font-size: 80px;
    font-weight: bold;
    margin-top: 8%;
    font-family: "Rowdies", sans-serif;
    font-weight: 700;
    font-style: normal;
    margin-left: 10%;
  }
  .texto-pequeño2 {
    font-size: 20px;
    font-family: "Anton", sans-serif;
    margin-left: -58%;
    margin-top: 10px;
    text-align: center;
  }
  .texto-grande3 {
    color: #9b4237;
    font-size: 80px;
    font-weight: bold;
    margin-top: -18%;
    font-family: "Rowdies", sans-serif;
    font-weight: 700;
    font-style: normal;
    margin-left: 70%;
  }
  .texto-pequeño3 {
    font-size: 20px;
    font-family: "Anton", sans-serif;
    margin-left: 58%;
    margin-top: 10px;
    text-align: center;
  }
/*FOOTER.................................*/
footer {
    background-color: #292929;
    padding: 20px;
    text-align: center;
    height: 130vh;
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
    margin-top: 45%;
    font-family: Helvetica, Arial, sans-serif;
    font-size: 18px;
    margin-left: 10%;
    text-align: left;
    color: #878484;
    font-weight: lighter;
    }
    .text13, .p2 {
    position: absolute; 
    margin-top: 45%; 
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
    <header>
        <div class="logo">
            <a href="index.php"><img src="logo.png"></a>
        </div>
        <section id="informacion">
            <div class="headerbutton">
                <a href="index.php" class="button"><b>INICIO</b></a>
                <a href="index.php" class="button"><b>PRODUCTOS</b></a>
                <a href="contacto.php" class="button"><b> CONTACTO </b></a>
                <a href="quienes.php" class="button" id="quienessomos"><b class="button-text"> ¿QUIENES SOMOS?</b></a>            </div>
        </section>
        <div class="buttonUser">
            <div class="buttonLogin">LOGIN</div>
            <div class="cart-icon">
                <img src="imagen_2024-03-23_200018883-removebg-preview.png" alt="Carrito de compras">
            </div>
        </div>
    </header>

    <div class="container">
        <div class="texto-grande">¿QUIÉNES SOMOS?</div>
        <img src="https://static.wixstatic.com/media/495789_681cabfa45054f0aa984e6c3df10d05f~mv2.gif"  class="img">
        <div class="texto-pequeño">
            Somos una distribuidora de dulces artesanales y otros<br> productos de Morelia,Mich. 
            Fundada en 2022, nos ubicamos <br> en la ciudad de Querétaro. Nos enorgullecemos de ofrecerte <br>
            una amplia variedad de productos tanto al menudeo como al <br>mayoreo.Desde nuestros inicios, nos hemos comprometido <br> a proporcionar productos de alta calidad y un servicio<br> excepcional a nuestros clientes.
        </div>
        <div class="texto-grande2">MISIÓN</div>
        <div class="texto-pequeño2">
            Nuestra misión es proporcionar a nuestros clientes la<br> mejor selección de productos de alta calidad, ofreciendo <br>un servicio excepcional y construyendo relaciones duraderas <br>basadas en la confianza y la satisfacción mutua. <br>
            Manteniendo siempre nuestros valores fundamentales<br> y buscando constantemente formas de mejorar y crecer.
        </div>
        <div class="texto-grande3">VISIÓN</div>
        <div class="texto-pequeño3">
            Nos visualizamos ser reconocidos por nuestra calidad, servicio al cliente y compromiso con la comunidad. Aspiramos a expandirnos y diversificar nuestra oferta de productos,
             manteniendo siempre la excelencia en todo lo que hacemos. 
             Buscamos ser un referente en la industria, inspirando a otros con nuestro compromiso.       
        </div>
    </div>

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