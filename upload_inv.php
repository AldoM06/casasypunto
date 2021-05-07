<?php
   //include 'connect/code_inventario.php';
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

    <!-- /Boostrap-->

    <!--CSS externos-->
    <script src="js/main.js"></script>

    <h2>Bienvenido vamos a subir tu inmueble a la plataforma</h2>

        <section class="section-border">
            <div class="one">
                <table>
                <h2>Datos generales del inmuble</h2>
                    <tr>
                        <td><p>Ingresa la clabe del inmueble:</p></td>
                        <td><input class= "input-css"type="text"></td>
                        <td></td>


                    </tr>
                    <tr>
                    <td><p>Tipo de propiedad:</p></td>
                        <td><select class="select-css" name="title_img" id="">
                        <option hidden selected>Tipo de propiedad </option>
                                <option value="Frente">Casa</option>
                                <option value="Interior">Departamneto</option>
                                <option value="Otra">Terreno</option></td>

                        <td></td>
                    </tr>

                    <tr>
                        <td><p>Superficie del terreno m2:</p></td>
                        <td><input class= "input-css1"type="text"></td>
                        <td><p>Superficie construida m<sup>2</sup>: </p></td> 
                        <td><input class= "input-css1"type="text"></td>


                    </tr>
                    <tr>
                        <!--<td><input class="photo-input" type="file" id="file">
                            <label for="file">
                                <span class="material-icons">
                                add_a_photo</span> &nbsp;
                                Elige una foto
                            </label></td>
                        <td><select class="select-css" name="title_img" id="">
                                <option hidden selected>Selecciona un titulo </option>
                                <option value="Frente">Parte frontal del inmueble</option>
                                <option value="Interior">Parte interior del inmubele</option>
                                <option value="Otra">Otra</option></td>
                        <td><button type="button" class="btn btn-success">Subir</button></td>-->
                    </tr>

                </table>

                <h2>Tus fotos subidas</h2>



            </div>
        </section>

        <section class="section-border">
            <div class="one">
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
                                    <span class="material-icons"> add_a_photo</span>
                                </div>
                                <input type="file" multiple id="add-new-photo" name="photo-file-hs5jg[]">
                            </div>

                        </div>
                    </section>
                </div>
            </div>
        </section>

    <!-- Bootstrap y jQuery -->
    
    <script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    
    <script src="js/functions.js"></script>
    <script src="js/scripts.js"></script>