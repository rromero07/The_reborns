<?php 
    require "code-login.php";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
    <title>Login</title>
</head>
<body>
    <div class="container-father">

        <div class="container-form">
            <!-- <img src="img/logo.jpg" alt="" class="logo"> -->
            <h1 class="title">Iniciar Sesión</h1>

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                <label for="">Usuario</label>
                <input type="text" name="username" >
                <span class="msg-error"><?php echo $username_err; ?></span>
                <label for="">Contraseña</label>
                <input type="password" name="password">
                <span class="msg-error"><?php echo $password_err; ?></span>

                <input type="submit" value="Iniciar">
            </form>

            <span class="text-footer" >Aun no te haz registrado? 
                <a href="registro.php">Registrate</a>
            </span>
        </div>
        <div class="container-img"></div>
    </div>
</body>
</html>