<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <title>Menu</title>
</head>
<body>
    <header>
        <div class="contenedor">
        <nav class="menu">
           <a href="#">INICIO</a>
           <a href="#">ACERCA DE...</a>
           <!-- <a href="#">PORTAFOLIO</a>  -->
           <a href="#">CONTACTO</a> 
        </nav> 
       
    </div>
        <div class="contenido-header">
            <h1 class="titulo-header">Bienvenido</h1>
            <span class="linea-header"></span>
            <h2 class="texto-header">Bienvenidod a la pagina de Ticket de la Terminal Terrestre
                <!-- <span class="desaparecer">Bienvenidod a mi primera pagina web</span> -->
            </h2>
            <!-- <a href="#" class="action-header">Action</a> -->
        </div>
    </header>
    <main>
        <section class="quehacemos">
            <div class="contenedor">
            <!-- <div class="noseee">
                <h2 class="contenido-titulo-cent"> NOTICIAS</h2>
            </div> -->
                <div class="contenido-caja">
                    
                    <div class="tarjeta">
                        <img style="width:200px; height:200px;" src="img/terminal.jpg"class="imagen-tarjeta">
                        <div class="contenido-tarjeta">
                            <h3 class="titulo-tarjeta">NOTICIAS</h3>
                            <p class="parrafo-tarjeta">Terminal Terrestre de Guayaquil, referente para Latinoamérica, intercambió experiencias de operación con brasileña SOCICAM</p>

                        </div>

                    </div>
                    <div class="tarjeta">
                        <img style="width:200px; height:200px;" src="img/terminal.jpg" class="imagen-tarjeta">
                        <div class="contenido-tarjeta">
                            <h3 class="titulo-tarjeta"> NOTICIAS</h3>
                            <p class="parrafo-tarjeta">Terminal Terrestre de Guayaquil cuenta con Guardería</p>

                        </div>

                    </div>
                        <!-- <div class="tarjeta">
                            <img src="./img/icono3.png" class="imagen-tarjeta">
                            <div class="contenido-tarjeta">
                                <h3 class="titulo-tarjeta"> Mi primera tarjeta</h3>
                                <p class="parrafo-tarjeta">Este es el desarrollo de mi primera pagina web con contenido de tarjeta</p>

                            </div>

                        </div> -->

                </div>
            </div>

        </section>
    </main>
    <footer>
        <section class="contacto">
            <div class="contenedor">
                <div class="footer-textos">
                    <h2>Formulario de Sugerencias</h2>
                </div>
                <form>
                    <input type="text" placeholder="Nombres" required>
                    <input type="email" placeholder="Correo" required>
                    <textarea placeholder="Mensaje"></textarea>
                    <div class="derecha">
                        <input type="submit" value="Enviar">
                    </div>  
                </form>
            </div>
        </section>
    </footer>
</body>
</html>