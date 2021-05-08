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
    <!-- Boostrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    <link rel="stylesheet" href="css/upload_inv.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/redes.css">

    <script src="js/main.js"></script>


    <!-- /Boostrap-->

    <!--CSS externos-->
    <script src="js/main.js"></script>

    <h2>Bienvenido vamos a subir tu inmueble a la plataforma</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
        <section class="section-border">
            <div class="one">
                <table>
                <h2>Datos generales del inmuble</h2>
                    <tr>
                        <td><p>Ingresa la clabe del inmueble:</p></td>
                        <td><input class= "input-css"type="text" name="clave"></td>
                        <td></td>


                    </tr>
                    <tr>
                    <td><p>Tipo de propiedad:</p></td>
                        <td><select class="select-css" name="title_img" id="">
                        <option hidden selected>Tipo de propiedad </option>
                                <option  name="tipo" value="Terreno">Casa</option>
                                <option name="tipo" value="Departamento">Departamneto</option>
                                <option name="tipo" value="Casa">Terreno</option></td>

                        <td></td>
                    </tr>

                    <tr>
                        <td><p>Superficie del terreno (metros cuadrados):</p></td>
                        <td><input class= "input-css1" type="text" name="superficie_T"></td>
                        <td><p>Superficie construida (metros cuadrados): </p></td> 
                        <td><input class= "input-css1" type="text" name="superficie_C"></td>


                    </tr>
                    <tr>
                        <td><p>Número de recamaras :</p></td>
                        <td><select class="input-css1" name="recam">
                            <option>1 </option>
                            <option>2 </option>
                            <option>3 </option>
                            <option>4 </option>
                            <option>5 </option>
                            </select>
                        </td>
                        <td><p>Número de baños :</p></td>
                        <td><select class="input-css1" name="wc">
                            <option>1 </option>
                            <option>2 </option>
                            <option>3 </option>
                            </select>
                        </td>
                    </tr>
                    <td><p>Número de estacionamientos :</p> </td>

                    <td><select class="input-css1" name="estac">
                        <option>1 </option>
                        <option>2 </option>
                        <option>3 </option>
                        </select></td>

                    </tr>
                    <tr>
                        <td colspan="4" ><h2>Ubicación del inmueble</h2></td>
                    </tr>
                    <tr>
                        <td><p>Estado:</p></td>
                        <td><p>Municipio</p></td>
                        <td><p>Colonia</p></td>
                        <td><p>Calle</p></td>

                    </tr>
                    <tr>
                        <td><input class= "input-css2" type="text" name="estado"></td>
                        <td><input class= "input-css2" type="text" name="municipio"></td>
                        <td><input class= "input-css2" type="text" name="colonia"></td>
                        <td><input class= "input-css2" type="text" name="calle"></td>

                    
                    </tr>
                    <tr>
                        <td><p>No Exterior</p></td>
                        <td><input class= "input-css1" type="text" name="noExt"></td>
                        <td><p>No. Interior</p></td>
                        <td><input class= "input-css1" type="text" name="nInt"></td>
                    </tr>
                    <tr>
                        <td><p>Referencias</p></td>
                        <td>                        <textarea class="input-css" name = "ref" cols="45" row="2"></textarea></td>
                    </tr>
                    <tr>
                        <td colspan="4" ><h2>Ubica tu inmubele en el mapa</h2></td>
                    </tr>
        
                </table>
                <br>
                <div class="padre">
                <div id="map">
                        < Async script executes immediately and must be after any DOM elements used in callback.
                        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBbpJZrcax_lvmrZt4ARtpF0_D_WR2Nsao&callback=initMap&libraries=&v=weekly"
                        async></script>
                </div>
                </div>

            </div>
        </section>

        <section class="section-border">
            <div class="one">
                <h2>Sube aqui tus fotos</h2>

                <div class="container">
                    <section id="Images" class="images-cards">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-md-5 col-sm-6 col-xs-14">
                                <input type="hidden" name="photo-iohQc" value="test">
                                <div class="image-container">
                                    <figure>
                                        <img src="https://placekitten.com/640/360" alt="Foto del usuario">
                                        <figcaption>
                                            <span class="material-icons"> add_a_photo</span>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-5 col-sm-6 col-xs-14" id="add-photo-container">
                                <div class="add-new-photo first" id="add-photo">
                                    <span class="material-icons" style="font-size: 50px"> add_a_photo</span>
                                </div>
                                <input type="file" multiple id="add-new-photo" name="photo-file-hs5jg[]">
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>

        <section class="section-border">
            <div class="one">
                <table>
                    <h2>Detalles del Anuncio</h2>
                    <tr>
                        <td><p>Titulo: </p></td>
                        <td><input class= "input-css"type="text"></td>
                        <td><p>Precio: </p></td>
                        <td><input class= "input-css1"type="text"></td>
                    </tr>
                    <tr>
                        <td><p>Escribe una breve descipcion<br> del inmueble para tu anuncio.</p></td>
                        <td><textarea class="input-css" name = "ref" cols="45" row="5"></textarea></td>
                    </tr>
                    <tr>
                        <td colspan="4"><h2>Donde vamos a publicar tua nuncio:</h2></td>
                    </tr>
                    <tr>
                        <td>
                            <label><input type="checkbox" id="cbox1" onclick="marcar(this);">
                            <img src="imagenes/selectall.png" class = "imgredonda"alt="">
                        </td>
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
                    </tr>
                    <tr>
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
                    </tr>
                    <tr>
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

                        <tr>
                            <td><button type="submit" class="btn btn-success">Publicar ahora</button></td>
                            <td><button type="" class="btn btn-danger">Descargar PDF</button></td>
                            <td><button type="reset" class="btn btn-secondary">Cancelar</button></td>
                            <td><a type="button" href="prueba.php" class="btn btn-dark">Regresar al panel</a></td>

                        </tr>
                    </tr>


                </table>

                
            </div>
        </section>
        </form>



    <!-- Bootstrap y jQuery -->
    
    <script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/modal.js"></script>    
    <script src="js/functions.js"></script>
    <script src="js/scripts.js"></script>