<?php 
  //    include 'carrito.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/menu.css">
    <title>Menu</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</head>
<body>
    <header>
       
    <div class="contenedor">
    <ul>
        <li class="activo"><a href="menu.php">INICIO</a></li>
        <li class="activo"><a href="ticket.php">TICKETS</a></li>
         <li class="activo"><a href="mostrar-carrito.php">CARRITO(<?php   
                echo (empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']); 
            ?> )</a>
        </li> 
    </ul>
    </div>
        <div class="contenido-header">
            <h1 class="titulo-header">Bienvenido</h1>
            <span class="linea-header"></span>
            
        </div>
    </header>
    <main>
        <section class="quehacemos">
            <div class="contenedor">
            
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