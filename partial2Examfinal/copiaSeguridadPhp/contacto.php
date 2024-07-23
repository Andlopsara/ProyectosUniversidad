<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleContacto.css">
    <title>Contacto</title>
    
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
    background-color: #f5f1e8;
}

/*CONTENIDO.................................*/
.container {
    padding: 20px;
    margin: 20px;
    height: 120vh;
}
.contacto-grande {
    color: #9b4237;
    font-size: 80px;
    font-weight: bold;
    margin-top: 10%;
    font-family: "Rowdies", sans-serif;
    font-weight: 700;
    font-style: normal;
    margin-left: 5%;
  }

  .contacto-pequeño {
    font-size: 25px;
    font-family: "Anton", sans-serif;
    margin-left: 5%;
  }
  .imgDec{
    position: absolute;
    top: 36.9%; 
    left: 67.5%; 
    width: 500px;
    z-index: 1; 
    }
  .formulario {
    background-color:#a7c7b1;
    color: #f5f1e8;
    padding: 20px;
    border-radius: 5px;
    margin-top: 20px;
    width: 50%;
    height: 55%;
    margin-left: 5%;
  }

  .formulario input[type="text"],
  .formulario input[type="email"],
  .formulario textarea {
    font-family: "Anton", sans-serif;
    width: 100%;
    height: 10%;
    padding: 10px;
    margin: 5px 0;
    border: none;
    border-radius: 3px;
    box-sizing: border-box;
    background-color: #f5f1e8;
    font-size: 20px;
  }

  .formulario textarea {
    height: 280px;
  }

  .formulario input[type="submit"] {
    background-color: #f5f1e8;
    color: #9b4237;
    border: none;
    padding: 10px 20px;
    border-radius: 3px;
    cursor: pointer;
    font-weight: bold;
  }

  .formulario input[type="submit"]:hover {
    background-color: #ddf4e4;
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
    <body >
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
<!--CONTAINER-->
    <div class="container">
        <div class="contacto-grande">Contáctanos</div>
        <div class="contacto-pequeño">Si estas interesado(a) en alguno de nuestros productos al mayoreo,
            <br>escríbenos todos tus datos para contactarte.</div>
        <!--formulario-->
        <form class="formulario" action="#" method="post">
          <input type="text" name="nombre" placeholder="Nombre completo" required><br>
          <input type="email" name="correo" placeholder="Correo electrónico" required><br>
          <textarea name="mensaje" placeholder="Mensaje" required></textarea><br>
          <input type="submit" value="Enviar">
        </form>
        <img src="imagen_2024-03-25_011246013-removebg-preview.png" class="imgDec">   

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