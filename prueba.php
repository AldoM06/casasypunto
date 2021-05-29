<?php

    //INICIAR LAS SESION
    session_start();
    require_once "connect/connect.php";
    $id = $_SESSION["Id"];

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
    <title>ETH-Inmuebles</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <style>
        h1,h3{
            color: white;
            align:center;
        }
        .box1{
            text-align:center;
        }
        .botones{

            text-align: center;
        }

        h2{
                background: -webkit-linear-gradient(yellow,green);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                color: tomato;
        }

        p{
            color: white;
        }

    </style>

</head>
<body>
<?php include_once('vistas/nav.php'); ?>
<div class="raw">
    <div class="box1">

        <h1>¡Bienvenido a tu panel de administración <?php echo $_SESSION["Nombre"]?>! </h1>
    
    </div>

</div>   
</div>
<div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <h2>Tus inmuebles que tenemos registrados son:</h2>
            </div>
            <div class="col-2">
                <p>Codigo</p>
            </div>
            <div class="col-6">
                <p>Titulo</p>
            </div>
            <div class="col-1">
                <p>Precio</p>
            </div>

            <div class="col-1">
                <p>Modificar</p>
            </div>

            <div class="col-1">
                <p>Estadisticas</p>
            </div>

            <div class="col-1">
                <p>Eliminar</p>
            </div>
        </div>
        <?php $resultado = mysqli_query($conn, "SELECT * FROM inmuebles WHERE us_id =' $id'");
            while($rows = mysqli_fetch_assoc($resultado)) { 
                $inn_id =  $rows["Id_inmuebles"];
                //echo "valor del Id: " . $last_inmueble_id . "El otro Id: " . $rows["Id_inmuebles"];
                $resultadoi = mysqli_query($conn, "SELECT * FROM anuncio WHERE inmueble_id ='$inn_id'");
                while($row = mysqli_fetch_assoc($resultadoi)){

                ?>
                    <div class="row">
        
                    <div class="col-2">
                        <p> <?php echo $rows["clave"]; ?> </p>
                    </div>
                    <div class="col-6">
                        <p>  <?php echo $row["titulo"]; ?>  </p>
                    </div>
                    <div class="col-1">
                        <p>  <?php echo "$" . $row["precio"]; ?>  </p>
                    </div>

                    <div class="col-1">
                        <a type="button" href="upload_inv.php" class="btn btn-outline-info">Modificar</a>
                    </div>

                    <div class="col-1">
                        <a type="button" href="report.php" class="btn btn-outline-warning">Descargar</a>
                    </div>
                    <?php } mysqli_free_result($resultadoi);?>
                <div class="col-1">
                    <a type="button" href="" class="btn btn-outline-danger">Eliminar</a>
                </div>
        </div>
        <?php } mysqli_free_result($resultado);?>

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
