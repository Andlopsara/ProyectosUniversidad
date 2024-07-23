<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleDulces.css">
    <title>Dulces Artesanales</title>
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

.cubos-container {
    display: flex;
    flex-direction: column;
    align-items: center; 
    margin-top: 35%;
    margin-left: -65%;
}

.cubosrojosder {
    background-color: #ffffff;
    height: 160px;
    width: 350px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.cuadroApply {
    background-color: #96a856;
    height: 50px;
    width: 350px;
    margin-bottom: 180px; 
    color: rgb(255, 255, 255);
    font-family: Helvetica, Arial, sans-serif;
    font-size: 19px;
    font-weight: bold;
    text-align: center; 
    display: flex;
    justify-content: center;
    align-items: center;
}
.img {
    width: 100%; 
    height: 200%; 
    margin-top: -160%;
}
.text-container {
    position: relative;
   top:-5%; 
    transform: translateY(-50%);
    text-align: center; 
    z-index: 1; 
}

.p-style {
    font-size: 20px;
    font-family: Helvetica, Arial, sans-serif;
    font-weight: bold; 
    color: #666;
}

.h4-style {
    margin-top:5px;
    font-size: 30px; 
    font-family: Helvetica, Arial, sans-serif;
    color: #010101;  
}
/*.............................................*/
.cubos-container1 {
    display: flex;
    flex-direction: column;
    align-items: center; 
    margin-top: -25%;
    margin-left: 2%;
}

.cubosrojosder1 {
    background-color: #ffffff;
    height: 160px;
    width: 350px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.cuadroApply1 {
    background-color: #96a856;
    height: 50px;
    width: 350px;
    margin-bottom: 180px; 
    color: rgb(255, 255, 255);
    font-family: Helvetica, Arial, sans-serif;
    font-size: 19px;
    font-weight: bold;
    text-align: center; 
    display: flex;
    justify-content: center;
    align-items: center;
}
.img1 {
    width: 100%; 
    height: 200%; 
    margin-top: -160%;
}
.text-container1 {
    position: relative;
   top:-5%; 
    transform: translateY(-50%);
    text-align: center; 
    z-index: 1; 
}

.p-style1 {
    font-size: 20px;
    font-family: Helvetica, Arial, sans-serif;
    font-weight: bold; 
    color: #666;
}

.h4-style1 {
    margin-top:5px;
    font-size: 30px; 
    font-family: Helvetica, Arial, sans-serif;
    color: #010101;  
}
/*.............................................*/

.cubos-container2 {
    display: flex;
    flex-direction: column;
    align-items: center; 
    margin-top: -25%;
    margin-left: 63%;
}

.cubosrojosder2 {
    background-color: #ffffff;
    height: 160px;
    width: 350px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.cuadroApply2 {
    background-color: #96a856;
    height: 50px;
    width: 350px;
    margin-bottom: 180px; 
    color: rgb(255, 255, 255);
    font-family: Helvetica, Arial, sans-serif;
    font-size: 19px;
    font-weight: bold;
    text-align: center; 
    display: flex;
    justify-content: center;
    align-items: center;
}
.img2 {
    width: 100%; 
    height: 200%; 
    margin-top: -160%;
}
.text-container2 {
    position: relative;
   top:-5%; 
    transform: translateY(-50%);
    text-align: center; 
    z-index: 1; 
}

.p-style2 {
    font-size: 20px;
    font-family: Helvetica, Arial, sans-serif;
    font-weight: bold; 
    color: #666;
}

.h4-style2 {
    margin-top:5px;
    font-size: 30px; 
    font-family: Helvetica, Arial, sans-serif;
    color: #010101;  
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
            <a href="/index.html"><img src="logo.png"></a>
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
<!--CONTENIDO-->
    <div class="container">
            <div class="cubos-container">
                <div class="cubosrojosder">
                    <div class="text-container">
                        <p class="p-style">Corazón de Ate <br>en cubitos 300 g</p>
                        <h4 class="h4-style">$49.900 MXN</h4>
                    </div>
                    <img src="https://laestrella.com.mx/images/virtuemart/product/Ate_Granulado/Corazon-de-ate-300-grs.jpg"
                         class="img" alt="Salsa habanera">
                </div>
                <div class="cuadroApply">Agregar al carrito</div>
            </div>
        </div>

        <div class="cubos-container1">
            <div class="cubosrojosder1">
                <div class="text-container1">
                    <p class="p-style1">Ate de frutas <br>con chile 150 g</p>
                    <h4 class="h4-style1">$22.57 MXN</h4>
                </div>
                <img src="https://laestrella.com.mx/images/virtuemart/product/Ate_Granulado/Ate-de-frutas-con-chile-150-grs.jpg"
                     class="img1" alt="Salsa habanera">
            </div>
            <div class="cuadroApply">Agregar al carrito</div>
        </div>

        <div class="cubos-container2">
            <div class="cubosrojosder2">
                <div class="text-container2">
                    <p class="p-style2">Ollita tamarindo de frutas 165g</p>
                    <h4 class="h4-style2">$20.20 MXN</h4>
                </div>
                <img src="https://laestrella.com.mx/images/virtuemart/product/Dulces_de_Tamarindo/Ollita-de-tamarindo-165-g.jpg"
                    class="img2" alt="Salsa habanera">
            </div>
            <div class="cuadroApply">Agregar al carrito</div>
        </div>
</div>
<!--FOOTER-->
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