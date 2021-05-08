<?php
   include 'connect/code_inventario.php';
   include 'connect/connect.php';
     //INICIAR LAS SESION

   session_start();

   if(!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] !== true){
       header ("location: ../casasypunto/index.php");
       exit;
   }
   echo $_SESSION['Id'];
     $query = "select * from imagenes";
    $resultado = mysqli_query($conn,$query);

 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir datos de casas</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/inv.css">
    <script src="js/main.js"></script>

</head>

<body>

<div id="one">
     <h1>Bienvenido vamos a subir tu inmueble a la plataforma</h1>
</div>
<div class="fila1">

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
            <!--Tabla 1 datos generales-->
            <div class="table1">
                <table>
                    <tr>
                        <td colspan="3" ><h2>Datos generales del inmueble</h2></td>
                    </tr>
                    <tr>
                        <td>Ingresa la cable de la vivienda: </td>
                        <td> <input class="input-css" type="text" name="clave"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="3">Tipo de inmueble: </td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="tipo" value="Terreno"> Terreno</td>
                        <td><input type="radio" name="tipo" value="Departamento"> Departamento</td>
                        <td><input type="radio" name="tipo" value="Casa"> Casa </td>
                    </tr>
                    <tr>
                        <td colspan="1">Ingresa las fotos a publicar: </td>
                    </tr>
                    <tr>
                        <td colspan="1"></td>
                        <td><input  class="input-css" type="file" name="imagen" ></td>
                    </tr>
                    <tr>
                        <td colspan="1">Elige el titulo correcto de la foto: </td>
                            <td>
                            <select class="input-css" name="title_img" id="" placeholder="Elije un opcion">
                                <option hidden selected>Selecciona una opción</option>
                                <option value="Frente">Parte frontal del inmueble</option>
                                <option value="Interior">Parte interior del inmubele</option>
                                <option value="Otra">Otra</option>
                            </select>
                        </td>
                        <td></td>
                    </tr>
                      
                </table>
            </div>

            <!--Tabla 2 imagenes cargadas-->
            
            <div class="table2">
             <!--Matriz de imagen-->
                    <div class="col-lg-8">
                            <h2 class="text-primary text-center">Galeria de Imagenes</h2>
                            <hr>
                            <div class="card-columns" style="width: 18rem;">
                                <?php foreach($resultado as $row){ ?>
                            <div class="card">
                        <img src="connect/imagenes/<?php echo $row['imagen']; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                        <a class="card-title"><strong><?php echo $row['nombre']; ?></strong></a>
                        </div>
                                
                    </div>
                    <?php }?>
                        </div>
            </div>
        </div>
        <!--comienza segunda fila-->
        <div>

            <!--Tabla 1 datos generales-->
        <div>
            <div class="table3">
                <table>
                    <tr>
                        <td colspan="3" ><h2>Detalles del inmueble</h2></td>
                    </tr>
                    <tr>
                        <td>Superficie del terreno m<sup>2</sup>: </td>
                        <td><input class="input-css" type="text" name="superficie_T">
                            <span class="msg-error"><?php echo $error_supT; ?></span></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Superficie construida m<sup>2</sup>: </td>
                        <td><input class="input-css" type="text" name="superficie_C">
                            <span class="msg-error"><?php echo $error_supC; ?></span></td>
                    </tr>
                    <tr>
                        <td>Número de recamaras : </td>

                        <td><select class="input-css" name="recam">
                            <option>1 </option>
                            <option>2 </option>
                            <option>3 </option>
                            <option>4 </option>
                            <option>5 </option>
                            </select>
                            <span class="msg-error"><?php echo $error_reca; ?></span></td>
                    </tr>

                    <td>Número de baños : </td>

                    <td><select class="input-css" name="wc">
                        <option>1 </option>
                        <option>2 </option>
                        <option>3 </option>
                        </select>
                        <span class="msg-error"><?php echo $error_wc; ?></span></td>
                    </tr>
                <tr>
                    <td>Número de estacionamientos : </td>

                    <td><select class="input-css" name="estac">
                        <option>1 </option>
                        <option>2 </option>
                        <option>3 </option>
                        </select>
                        <span class="msg-error"><?php echo $error_esta; ?></span></td>
                    </tr>
                </table>
            </div>

                <!--Tabla 1 datos generales-->

            <div class="table4">
                <table>
                    <tr>
                        <td colspan="5" ><h2>¿Donde vamos a publicar tu inmueble? </h2></td>
                    </tr>
                    <tr>
                        <td>
                            <label><input type="checkbox" id="cbox1" value="first_checkbox">
                            <img src="imagenes/cubicos.jpg" class = "imgredonda"alt="">
                            </label></td>
                        <td>
                            <label><input type="checkbox" id="cbox1" value="first_checkbox">
                            <img src="imagenes/descarga.jpg" class = "imgredonda"alt="">
                            </label>
                        </td>
                        <td>
                            <label><input type="checkbox" id="cbox1" value="first_checkbox">
                            <img src="imagenes/lamudi.jpg" class = "imgredonda"alt="">
                            </label>
                        </td>
                        <td>
                            <label><input type="checkbox" id="cbox1" value="first_checkbox">
                            <img src="imagenes/mercado.png" class = "imgredonda"alt="">
                            </label>
                        </td>
                        <td>
                            <label><input type="checkbox" id="cbox1" value="first_checkbox">
                            <img src="imagenes/viva.png" class = "imgredonda"alt="">
                            </label>
                        </td>
                        <td>
                            <label><input type="checkbox" id="cbox1" value="first_checkbox">
                            <img src="imagenes/segunda.png" class = "imgredonda"alt="">
                            </label>
                        </td>
                        <td>
                            <label><input type="checkbox" id="cbox1" value="first_checkbox">
                            <img src="imagenes/trovit.png" class = "imgredonda"alt="">
                            </label>
                        </td>
                        <td>
                            <label><input type="checkbox" id="cbox1" value="first_checkbox">
                            <img src="imagenes/inmuebles24.png" class = "imgredonda"alt="">
                            </label>
                        </td>
                    </tr>
                    <!-- IMAGENES DE REDES SOCIALES-->
                    <tr>
                        <td>
                            <label><input type="checkbox" id="cbox1" value="first_checkbox">
                            <img src="imagenes/facebook.png" class = "imgredonda"alt="">
                            </label></td>
                        <td>
                            <label><input type="checkbox" id="cbox1" value="first_checkbox">
                            <img src="imagenes/instagram (1).png" class = "imgredonda"alt="">
                            </label>
                        </td>
                        <td>
                            <label><input type="checkbox" id="cbox1" value="first_checkbox">
                            <img src="imagenes/tik-tok.png" class = "imgredonda"alt="">
                            </label>
                        </td>
                        <td>
                            <label><input type="checkbox" id="cbox1" value="first_checkbox">
                            <img src="imagenes/linkedin.png" class = "imgredonda"alt="">
                            </label>
                        </td>
                        <td>
                            <label><input type="checkbox" id="cbox1" value="first_checkbox">
                            <img src="imagenes/wats.png" class = "imgredonda"alt="">
                            </label>
                        </td>
                        <td>
                            <label><input type="checkbox" id="cbox1" value="first_checkbox">
                            <img src="imagenes/gorjeo.png" class = "imgredonda"alt="">
                            </label>
                        </td>
                        <td>
                            <label><input type="checkbox" id="cbox1" value="first_checkbox">
                            <img src="imagenes/telegram.png" class = "imgredonda"alt="">
                            </label>
                        </td>
                        <td>
                            <label><input type="checkbox" id="cbox1" value="first_checkbox">
                            <img src="imagenes/youtube.png" class = "imgredonda"alt="">
                            </label>
                        </td>
                    </tr>


                </table>
                </div>
                </div>

    <div class="tabla5">
        <div id="map">
            <!-- Async script executes immediately and must be after any DOM elements used in callback.
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBbpJZrcax_lvmrZt4ARtpF0_D_WR2Nsao&callback=initMap&libraries=&v=weekly"
            async></script> -->
        </div>
    </div>
    <p>
                        <label>Referencias: </label>
                        <textarea class="input-css" name = "ref" cols="45" row="5"></textarea>  
                        <br></br>
                        <input class="input-css" type="submit" value="Enviar">
                        <input class="input-css" type="reset" value="Borrar">
                        <a type="button" href="prueba.php" class="btn btn-outline-info">Regresar al panel</a>

                    </p>
    </form>
    

</body>
</html>