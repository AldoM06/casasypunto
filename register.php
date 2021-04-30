<?php
    include 'code-register.php';
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="CSS/style.css">
        <link rel="stylesheet" href="CSS/bootstrap.min.css">
    </head>
    <body>
        <div class="container-all">
            <div class="ctn-form">
                <img src="diseño/logo.png" alt="" class="logo">
                <h1 class="title">Registrarse</h1>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <label for="">Correo Electronico </label>
                    <input type="text" name="email">
                    <span class="msg-error"><?php echo $email_err; ?></span>
                    <label for="">Contraseña</label>
                    <input type="password" name=password>
                    <span class="msg-error"><?php echo $password_err; ?></span>
                    <label for="">Nombre(s) </label>
                    <input type="text" name=nombre>
                    <span class="msg-error"><?php echo $nombre_err; ?></span>
                    <label for="">Apellidos</label>
                    <input type="text" name=apellidos>
                    <span class="msg-error"><?php echo $apellidos_err; ?></span>
                    <label for="">RFC </label>
                    <input type="text" name=rfc>
                    <span class="msg-error"><?php echo $rfc_err; ?></span>
                    <label for="">Celular </label>
                    <input type="text" name=celular>
                    <span class="msg-error"><?php echo $celular_err; ?></span>
                    <label for="">Telefono fijo </label>
                    <input type="text" name=telefono>
                    <span class="msg-error"><?php echo $telefono_err; ?></span>

                    <input type="submit" value="Registrarse">

                </form>

                <span class="text-footer"> ¿Ya estas registrado?<a href="index.php">Iniciar Sesión</a>
                </span>
            </div>
            <div class="ctn-text">
                <div class="capa"></div>
            </div>
        </div>
    </body>
    </html>