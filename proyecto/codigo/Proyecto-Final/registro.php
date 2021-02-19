

<?php 
    include 'code-registro.php';    
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
    <title>Registro</title>
</head>
<body>
    <div class="container-father">

        <div class="container-form">
            <!-- <img src="img/logo.jpg" alt="" class="logo"> -->
            <h1 class="title">Registrate</h1>

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                <label for="">Nombre de Usuario</label>
                <input type="text" name="username">
                <span class="msg-error"><?php echo $username_err; ?></span>

                <label for="">Email</label>
                <input type="text" name="email">
                <span class="msg-error"><?php echo $email_err; ?></span>

                <label for="">Contraseña</label>
                <input type="password" name="password">
                <span class="msg-error"><?php echo $password_err; ?></span>

                <input type="submit" value="Registrarse">
            </form>

            <span class="text-footer" >¿Ya te registrastes?
                <a href="index.php">Iniciar Sesión</a>
            </span>
        </div>
        <div class="container-img"></div>
    </div>
</body>
</html>