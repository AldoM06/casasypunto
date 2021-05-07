<?php

    //INICIAR LAS SESION
    session_start();

    if(!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] !== true){
        header ("location: ../casasypunto/index.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <style>
        h1{
            color: white;
            align:center;
        }
        .box1{
            text-align:center;
        }
        .botones{

            text-align: center;
        }

    </style>

</head>
<body>
<?php include_once('vistas/nav.php'); ?>
<div class="raw">
    <div class="box1">

        <h1>¡Bienvenido a tu panel de administración <?php echo $_SESSION["Nombre"]?>!  <?php echo $_SESSION["Id"]?></h1>
    
    </div>

</div>   
</div>
<div>
    <div class="botones">
    <br>
    <br>
         <a type="button" href="connect/cerrar.php" class="btn btn-outline-danger">Cerrar Sesión</a>
         <a type="button" href="upload_inv.php" class="btn btn-outline-success">Publica tu anuncio una sola vez y punto</a>

    </div>
</div>	     
</body>
</html>
