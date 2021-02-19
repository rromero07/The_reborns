<?php 

    session_start();

    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true ){
        header("location: menu.php");
        exit;
    }


require_once "conexion.php";

$username = $password = "";

$username_err = $password_err = "";

if($_SERVER["REQUEST_METHOD"] === "POST"){
    if(empty($_POST["username"])){
        $username_err = "Por favor ingrese un usuario";
    }else{
        $username = trim($_POST["username"]);
    }

    if(empty($_POST["password"])){
        $password_err = "Por favor ingrese una contraseña";
    }else{
        $password = trim($_POST["password"]);
    }

    //VALIDACION DE NOSEE XD
    if(empty($username_err) && empty($password_err)){
        $sql = "SELECT id, usuario, email, clave FROM usuarios WHERE usuario = ?";

        if($stmt = mysqli_prepare($link, $sql)){
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            $param_username = $username;
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
            }
            if(mysqli_stmt_num_rows($stmt) == 1){
                mysqli_stmt_bind_result($stmt, $id, $usuario, $email, $password);
                if(mysqli_stmt_fetch($stmt)){
                    session_start();
                    $_SESSION["loggedin"] = true;
                    $_SESSION["id"] = $id;
                    $_SESSION["username"] = $username;

                    header("location: menu.php");
                    
                    // if(password_verify($password, "password")){
                    //     session_start();
                    //     //ALMACENAR DATOS EN VARIABLES DE SESION
                    //     $_SESSION["loggedin"] = true;
                    //     $_SESSION["id"] = $id;
                    //     $_SESSION["username"] = $username;

                    //     header("location: menu.php");

                    // }else{
                    //     $password_err = "La contraseña que haz introducido no es valida";
                    // }
                }else{
                    $username_err = "No se ha encontrado ninguna cuenta con ese usuario";
                }

            }else{
                echo "Ups! Algo salio mal intentalo mas tarde";
            }
        }
    }
    mysqli_close($link);
}

?>