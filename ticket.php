<?php
    include 'conexion.php';
    include 'code-registro.php';
    include 'carrito.php';
    $conexion = mysqli_connect('localhost', 'root', '', 'terminal_db');
    include 'templates/cabecera.php';
    
    
?>


        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="alert alert-success" >
            
            <?php echo $mensaje; ?>
            <a href="#" class="badge badge-success">Ver carrito</a>
        </div>

        <div class="row">
        <?php
            $sql= "SELECT * FROM `productos`";
            $result = mysqli_query( $conexion, $sql);
            $listaProductos = $result ->fetch_all(PDO ::FETCH_ASSOC);
            //hiddenprint_r($listaProductos)


        ?>
        <?php foreach($listaProductos as $producto){ ?>

            <div class="col-3">
                <div class="card">
                    <img 
                    title="<?php echo $producto[1];?>"
                    alt="<?php echo $producto[1];?>"
                    class="card-img-top" 
                    src="<?php echo $producto[4];?>"
                    data-bs-toggle="popover"
                    data-bs-trigger="hover"
                    data-bs-content="<?php echo $producto[2];?>"
                    height="317px"
                    
                    >
                    <div class="card-body">
                        <span><b><?php echo $producto[1];?></b></span>
                        <h5 class="card-title">$<?php echo $producto[3];?></h5>
                        <p class="card-text">Descripcion</p>

                        <form action="" method="post">


                        <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt ($producto[0], COD, KEY) ;?>"> 
                        <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto[1], COD, KEY);?>">
                        <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($producto[3], COD, KEY);?>">
                        <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1, COD, KEY);?>">
                        <button 
                        class="btn btn-primary" 
                        name="btnAccion" 
                        value="Agregar" 
                        type="submit"
                        >
                        Agregar al Carrito
                        </button>
                        
                        </form>
                        
                    </div>
                </div>
            </div>


        <?php }?>
            

        </div>
    </div>
    <script> 
        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
          var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
          return new bootstrap.Popover(popoverTriggerEl)
        })
    </script>
    <?php 
        include 'templates/pie.php';
    ?>
