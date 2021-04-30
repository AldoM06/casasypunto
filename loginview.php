
<style>
    h1{
        color: white;
        padding: 40px;
        align-content: center ;
    }

    #boxlogin{
        padding: 40px;
        width: 500px; 
        height: 600px;
    }
    label{
        color: white;
    }
    #button{
        margin-top: 10px;
    }
    #centrarspan{
        display: flex;
        align-items: center;
    }
</style>
<?php
    require "connect/login.php";
?>
<!DOCTYPE html>
<html lang ="en">
    <head>
        <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <link rel="stylesheet" href="css/style.css">

        </head>
    <body>
    <?php include_once('vistas/nav.php'); ?>

        <h1 style="text-align: center;">Bienvenido inicia sesión para entrar
             a tu panel.</h1>
        <div class="container-fluid">
         <div class="row"  id="boxlogin">
            <div class="col-lg-10 ctn-form">
                <img src="diseño/logo.png" alt="" class="logo">
                <h1 class="title">Iniciar Sesión</h1>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="form-group mb-2">

                        <label for="exampleInputEmail1">Email</label>
                        <input type="text"  class="form-control form-control-sm"  name="email" placeholder="Email" value="<?php echo $email_err; ?>">
                    </div>
                    <div class="form-group mb-2">
                        <label for="" >Contraseña</label>
                        <input type="" name="password" class="form-control form-control-sm" value="<?php echo $password_err; ?>" placeholder="Password" >
                        <button type="submit" class="btn btn-outline-light" id="button">Iniciar</button>
                        <button type="submit" class="btn btn-outline-light" id="button">Recuperar Contraseña</button>
                        <span class="text-footer" style="color: white ;" id="centrarspan">¿Registar un nuevo usuario? <a href="register.php">Registrar</a></span>


                    </div>
                </form>
            </div>
            <div align="left" class="col-lg-1" >
                <img  width="500px" height="600px" src="img/login.png" class="img-responsive" alt="">
            </div>
        </div>
        </div>

</div>
</nav>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
    </body>
</html>