<?php 

    session_start();


    $mensaje = '';

    if(isset($_POST['btnAccion'])){
        switch($_POST['btnAccion']){
            case 'Agregar' :
               if(is_numeric(openssl_decrypt($_POST['id'], COD, KEY ))){
                   $ID = openssl_decrypt($_POST['id'], COD, KEY );
                   $mensaje.= 'OK ID correcto'.$ID.'<br/>';
               }else{
                   $mensaje.= 'UPS.. ID incorrecto'.$ID.'<br/>';
               }

               if(is_string(openssl_decrypt($_POST['nombre'], COD, KEY ))){
                   $NOMBRE = openssl_decrypt($_POST['nombre'], COD, KEY );
                    $mensaje.= 'OK nombre'. $NOMBRE.'<br/>';
               }else{
                    $mensaje.= 'UPS.. algo paso con el nombre'.'<br/>'  ; break;
                }
                if(is_numeric(openssl_decrypt($_POST['cantidad'], COD, KEY))){
                    $CANTIDAD = openssl_decrypt($_POST['cantidad'], COD, KEY);
                    $mensaje.= 'OK cantidad'. $CANTIDAD.'<br/>';
                }else{
                    $mensaje.= 'UPS.. algo paso con la cantidad'.'<br/>'; break;
                }
                if(is_numeric(openssl_decrypt($_POST['precio'], COD, KEY))){
                    $PRECIO = openssl_decrypt($_POST['precio'], COD, KEY);
                    $mensaje.= 'OK precio'. $PRECIO.'<br/>';
                }else{
                    $mensaje.= 'UPS.. algo paso con el precio'.'<br/>'; break;
                }
                
                if(!isset($_SESSION['CARRITO'])){
                     $producto = array(
                        'ID' => $ID,
                        'NOMBRE' => $NOMBRE,
                        'CANTIDAD' =>  $CANTIDAD,
                        'PRECIO' => $PRECIO
                    );
                     $_SESSION['CARRITO'][0]=$producto; 
                 }else{
                     $NumeroProducto = count($_SESSION['CARRITO']);
                     $producto = array(
                        'ID' => $ID,
                        'NOMBRE' => $NOMBRE,
                        'CANTIDAD' =>  $CANTIDAD,
                        'PRECIO' => $PRECIO
                     );
                     $_SESSION['CARRITO'][$NumeroProducto]= $producto;
                }   
                 $mensaje = print_r($_SESSION, true);

            break; 
            case "Eliminar" :
                if(is_numeric(openssl_decrypt($_POST['id'],COD,KEY))){
                    $ID = openssl_decrypt($_POST['id'],COD,KEY);

                        foreach($_SESSION['CARRITO'] as $indice=>$producto){
                            if($producto['ID']==$ID){
                                unset($_SESSION['CARRITO'][$indice]);
                                echo "<script> alert('Elemento borrado....'); </script> ";
                            }
                        }
                }else{
                    $mensaje.= "UPS.. ID incorrecto".$ID."</br>";   
                }
            break; 
        }
    }
?>