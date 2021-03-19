<?php 
    require_once "conexion.php";




    $username = $email = $password = "";
    $username_err = $email_err = $password_err = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){

         if( empty($_POST["username"])){
             $username_err = "Porfavor ingrese un nombre";
        }else{
            $sql = "SELECT id FROM usuarios WHERE usuario = ?";

            if($stmt = mysqli_prepare($link, $sql)){
                mysqli_stmt_bind_param($stmt, "s", $param_username);

                $param_username = trim($_POST["username"]);

                if(mysqli_stmt_execute($stmt)){
                    mysqli_stmt_store_result($stmt);

                    if(mysqli_stmt_num_rows($stmt) == 1){
                        $username_err = "Este nombre de usuario ya esta en uso";
                    }else{
                        $username = trim($_POST["username"]);
                    }
                }else{
                    echo "Ups! algo salió mal, inténtalo mas tarde";
                }
            }
        }
       //VALIDACION INPUT DE EMAIL
        if( empty($_POST["email"])){
            $email_err = "Porfavor ingrese un emaill";
       }else{
           $sql = "SELECT id FROM usuarios WHERE email = ?";

           if($stmt = mysqli_prepare($link, $sql)){
               mysqli_stmt_bind_param($stmt, "s", $param_email);

               $param_email = trim($_POST["email"]);

               if(mysqli_stmt_execute($stmt)){
                   mysqli_stmt_store_result($stmt);

                   if(mysqli_stmt_num_rows($stmt) == 1){
                       $email_err = "Este correo ya esta en uso";
                   }else{
                       $email = trim($_POST["email"]);
                   }
               }else{
                   echo "Ups! algo salió mal, inténtalo mas tarde";
               }
           }
       }

       //VALIDANDO LA CONTRASEÑA

       if(empty($_POST["password"])){
           $password_err = "Por favor ingrese una contraseña";

        }elseif(strlen(trim($_POST["password"])) < 4 ){
            $password_err = "La contraseña debe de tener al menos 4 caracteres";
        } else{
            $password = trim($_POST["password"]);
        }

        //COMPROBANDO ERRORES DE ENTRADA ANTES DE INSERTAR LOS DATOS EN LA DB 
        if(empty($username_err) && empty($email_err) && empty($password_err)){
            
            $sql = "INSERT INTO usuarios (usuario, email, clave) VALUES (?, ?, ?)";

            if($stmt = mysqli_prepare($link, $sql)){
                mysqli_stmt_bind_param($stmt, "sss", $param_username, $param_email, $param_password);

                //ESTABLECIENDO PARAMETROS 
                $param_username = $username;
                $param_email = $email;
                $param_password = $password; //ENCRIPTANDO CONTRA
                
                
                if(mysqli_stmt_execute($stmt)){
                    header("location: index.php");
                }else{
                    echo "Algo salio mal, intentalo despues";
                }
            }
        }
        mysqli_close($link);
    }
?>