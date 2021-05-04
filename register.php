<?php
    include 'connect/code-register.php';
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <style>
            h1{
                color:white;
            }
            label{
                color: white;
            }
            span{
                color: white;
            }
            a{
                color:white;
            }
        </style>
    </head>
    <body>
        <div class="container-all">
            <div class="ctn-form">
                <img src="diseño/logo.png" alt="" class="logo">
                <table>
                    <tr>
                    <td col="2"><h1 class="title">Registrarse</h1></td>
                    </tr>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <tr>
                        <td><label for="">Correo Electronico </label></td>
                        <td><input type="text" name="email"></td>
                        <td><span class="msg-error"><?php echo $email_err; ?></span></td>
                    </tr>
                    <tr>
                    <td><label for="">Contraseña</label></td>
                    <td><input type="password" name=password></td>
                    <td><span class="msg-error"><?php echo $password_err; ?></span></td>
                    </tr>
                    <tr>
                    <td><label for="">Nombre(s) </label></td>
                    <td><input type="text" name=nombre></td>
                    <td><span class="msg-error"><?php echo $nombre_err; ?></span></td>
                    </tr>
                    <tr>
                    <td><label for="">Apellidos</label></td>
                    <td><input type="text" name=apellidos></td>
                    <td><span class="msg-error"><?php echo $apellidos_err; ?></span></td>
                    </tr>
                    <tr>
                    <td><label for="">RFC </label></td>
                    <td><input type="text" name=rfc></td>
                    <td><span class="msg-error"><?php echo $rfc_err; ?></span></td>
                    </tr>
                    <tr>
                    <td><label for="">Celular </label></td>
                    <td><input type="text" name=celular></td>
                    <td><span class="msg-error"><?php echo $celular_err; ?></span></td>
                    </tr>
                    <tr>
                    <td><label for="">Telefono fijo </label></td>
                    <td><input type="text" name=telefono></td>
                    <td><span class="msg-error"><?php echo $telefono_err; ?></span></td>
                    </tr>
                    <tr>
                    <td><input type="submit" value="Registrarse"></td>

                <td><span class="text-footer"> ¿Ya estas registrado?<a href="index.php">Iniciar Sesión</a></td>
                </span>
                </tr>
                </form>

        </table>
            </div>
            <div class="ctn-text">
                <div class="capa"></div>
            </div>
        </div>
    </body>
    </html>