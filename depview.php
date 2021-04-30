<?php
    //require "login.php";
?>
<!DOCTYPE html>
<html lang ="en">
    <head>
        <meta charset="UTF-8">
    <!-- religioisawar@gmail.com #DU-2ErE\;jjDkF-->
        <title>Usuarios</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    </head>
    <style>
        *{
            margin: 0px;
            padding: 0px;
        }
        body{
            background-color: #232537;
            color: #fff;
        }
        #section_1{
            margin: 7px;
            margin-left: 7px;
        }
        #sec_1{
            margin: 30px;
            border-radius: 20px;
            box-shadow: 4px 4px 7px #fff;

        }
        #img_1 img{
            align-items: center;
            width: 220px;
        }
        #metodos_pago img{
            border-radius: 50%;
            width: 50px;
            height: 50px;
            margin-top: 7px;
            margin-left: 10px;
           
        }
        #info_casa{
            background-color: rgb(85, 81, 79);
            border-radius: 15px;
        }
        #info_casa span{
            display: flex;
            
        }
        #info_casa span p{
            margin-left: 20px;
            font-size: small;
        }
        #redes_sociales{
            border-radius: 15px;
        }
        #redes_sociales div img{
            
            width: 37px;
            height: 37px;
            padding: 1px;
        }
        #icono{ 
            margin-left: 3px;
            width: 20px;
            height: 20px;
        }
    </style>
    <body >
        <?php include_once('vistas/nav.php'); ?>

        <h1 class="text-center">Conoce nuestras propiedades en el Estado de México</h1>
        <br>
        <section id="section_1" class="row container-fluid justify-content-center">
            
            <div id="sec_1" class="col col-sm-10 col-md-5 col-lg-5 col-xl-3">
                <div>
                    <h2 class="text-center">Ecatepec</h2>
                </div>
                <div id="img_1" align="center">
                    <a href="http://192.168.100.32/Proyecto/index.php"><img alt="Cambiar imagen" height="130px" onmouseout="this.src='img/C&P2189(1).jpg'" onmouseover="this.src='img/casa.png';" src="img/C&P2189(1).jpg" /></a>
                </div>
                <div id="metodos_pago" align="center">
                    <!--metodos de pago-->
                    <a href="javascript:window.open('https://propiedades.com/ecatepec-de-morelos/casas-venta','',' toolbar=yes width=800,height=500');void 0"><img src="img/descarga.jfif" alt=""></a>
                    <a href="javascript:window.open('https://segundamano.mx','','toolbar=yes');void 0"><img src="img/segunda.png" alt=""></a>
                    <a href="javascript:window.open('https://metroscubicos.com','','toolbar=yes');void 0"><img src="img/cubicos.jpg" alt=""></a>
                    <a href="javascript:window.open('https://mercadolibre.com.mx','','toolbar=yes');void 0"><img src="img/mercado.png" alt=""></a>
                </div>
                <div id="metodos_pago" align="center">
                    <a href="#"><img src="img/descarga.png" alt=""></a>
                    <a href="#"><img src="img/ef5f4ab92e2ffeb4cc45e1027646715a.jpg" alt=""></a>
                </div>
                <div id="redes_sociales" class="mt-3">
                    <!--redes sociales-->
                    <div align="center">
                        <a href="javascript:window.open('https://wa.me/message/IVTQXHGOK2MVB1','','toolbar=yes width=800,height=500');void 0"><img src="img/redes/wats.png" alt=""></a>
                        <a href="javascript:window.open('https://instagram.com','','toolbar=yes width=800,height=500');void 0"><img src="img/redes/instagram.png" alt=""></a>
                        <a href="javascript:window.open('https://youtube.com','',' toolbar=yes width=800,height=500');void 0"><img src="img/redes/youtube.png" alt=""></a>
                        <a href="javascript:window.open('https://twitter.com','',' toolbar=yes width=800,height=500');void 0"><img src="img/redes/gorjeo.png" alt=""></a>
                        <a href="javascript:window.open('https://facebook.com','',' toolbar=yes width=800,height=500');void 0"><img src="img/redes/facebook.png" alt=""></a>
                        <a href="javascript:window.open('https://tiktok.com','',' toolbar=yes width=800,height=500');void 0"><img src="img/redes/tik-tok.png" alt=""></a>
                    </div>
                </div>
                <div id="info_casa" class="mt-3">
                    <!--informacion de la casa-->
                    <h6 class="text-center">Excelente precio</h3>
                    <div>
                        <span>
                            <table>
                                <tr>
                                    <td>
                                        <span><img id="icono" src="img/img_149826.png" alt=""><p>Recamaras: </p> <p> </p></span>
                                    </td>
                                    <td > 
                                        <span><img src="img/hook.png" alt="" id="icono"><p>construidos: </p><p> </p></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                       <span><img src="img/toilet.png" alt="" id="icono"> <p>Baños: </p> <p> </p></span>
                                    </td>
                                    <td >
                                        <span><img src="img/terrain.png" alt="" id="icono"><p>Terrenos: </p><p> </p></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <span><img src="img/garage.png" id="icono" alt=""><p>Estacionamiento: </p><p> </p></span>
                                    </td>
                                </tr>
                            </table>
                        </span>  
                    </div>
                </div>
                <br>
            </div>


            <!--segunda clase-->
            <div id="sec_1" class="col col-sm-10 col-md-5 col-lg-5 col-xl-3">
                <div>
                    <h2 class="text-center">Coacalco</h2>
                </div>
                <div id="img_1" align="center">
                    <a href="http://192.168.100.177/Proyecto/index.php"><img alt="Cambiar imagen" height="130px" onmouseout="this.src='img/C&P2189(1).jpg'" onmouseover="this.src='img/casa.png';" src="img/C&P2189(1).jpg" /></a>
                </div>
                <div id="metodos_pago" align="center">
                    <!--metodos de pago-->
                    <a href="javascript:window.open('https://propiedades.com/ecatepec-de-morelos/casas-venta','',' toolbar=yes width=800,height=500');void 0"><img src="img/descarga.jfif" alt=""></a>
                    <a href="javascript:window.open('https://segundamano.mx','','toolbar=yes');void 0"><img src="img/segunda.png" alt=""></a>
                    <a href="javascript:window.open('https://metroscubicos.com','','toolbar=yes');void 0"><img src="img/cubicos.jpg" alt=""></a>
                    <a href="javascript:window.open('https://mercadolibre.com.mx','','toolbar=yes');void 0"><img src="img/mercado.png" alt=""></a>
                </div>
                <div id="metodos_pago" align="center">
                    <a href="#"><img src="img/descarga.png" alt=""></a>
                    <a href="#"><img src="img/ef5f4ab92e2ffeb4cc45e1027646715a.jpg" alt=""></a>
                </div>
                <div id="redes_sociales" class="mt-3">
                    <!--redes sociales-->
                    <div align="center">
                        <a href="javascript:window.open('https://wa.me/message/IVTQXHGOK2MVB1','','toolbar=yes width=800,height=500');void 0"><img src="img/redes/wats.png" alt=""></a>
                        <a href="javascript:window.open('https://instagram.com','','toolbar=yes width=800,height=500');void 0"><img src="img/redes/instagram.png" alt=""></a>
                        <a href="javascript:window.open('https://youtube.com','',' toolbar=yes width=800,height=500');void 0"><img src="img/redes/youtube.png" alt=""></a>
                        <a href="javascript:window.open('https://twitter.com','',' toolbar=yes width=800,height=500');void 0"><img src="img/redes/gorjeo.png" alt=""></a>
                        <a href="javascript:window.open('https://facebook.com','',' toolbar=yes width=800,height=500');void 0"><img src="img/redes/facebook.png" alt=""></a>
                        <a href="javascript:window.open('https://tiktok.com','',' toolbar=yes width=800,height=500');void 0"><img src="img/redes/tik-tok.png" alt=""></a>
                    </div>
                </div>
                <div id="info_casa" class="mt-3">
                    <!--informacion de la casa-->
                    <h6 class="text-center">Excelente precio</h3>
                    <div>
                        <span>
                            <table>
                                <tr>
                                    <td>
                                        <span><img id="icono" src="img/img_149826.png" alt=""><p>Recamaras: </p> <p> </p></span>
                                    </td>
                                    <td > 
                                        <span><img src="img/hook.png" alt="" id="icono"><p>construidos: </p><p> </p></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                       <span><img src="img/toilet.png" alt="" id="icono"> <p>Baños: </p> <p> </p></span>
                                    </td>
                                    <td >
                                        <span><img src="img/terrain.png" alt="" id="icono"><p>Terrenos: </p><p> </p></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <span><img src="img/garage.png" id="icono" alt=""><p>Estacionamiento: </p><p> </p></span>
                                    </td>
                                </tr>
                            </table>
                        </span>  
                    </div>
                </div>
                <br>
            </div>


            <!--Tercera clase-->
            <div id="sec_1" class="col col-sm-10 col-md-5 col-lg-5 col-xl-3">
                <div>
                    <h2 class="text-center">Nezahualcoyotl</h2>
                </div>
                <div id="img_1" align="center">
                    <a href="http://192.168.100.177/Proyecto/index.php"><img alt="Cambiar imagen" height="130px" onmouseout="this.src='img/C&P2189(1).jpg'" onmouseover="this.src='img/casa.png';" src="img/C&P2189(1).jpg" /></a>
                </div>
                <div id="metodos_pago" align="center">
                    <!--metodos de pago-->
                    <a href="javascript:window.open('https://propiedades.com/ecatepec-de-morelos/casas-venta','',' toolbar=yes width=800,height=500');void 0"><img src="img/descarga.jfif" alt=""></a>
                    <a href="javascript:window.open('https://segundamano.mx','','toolbar=yes');void 0"><img src="img/segunda.png" alt=""></a>
                    <a href="javascript:window.open('https://metroscubicos.com','','toolbar=yes');void 0"><img src="img/cubicos.jpg" alt=""></a>
                    <a href="javascript:window.open('https://mercadolibre.com.mx','','toolbar=yes');void 0"><img src="img/mercado.png" alt=""></a>
                </div>
                <div id="metodos_pago" align="center">
                    <a href="#"><img src="img/descarga.png" alt=""></a>
                    <a href="#"><img src="img/ef5f4ab92e2ffeb4cc45e1027646715a.jpg" alt=""></a>
                </div>
                <div id="redes_sociales" class="mt-3">
                    <!--redes sociales-->
                    <div align="center">
                        <a href="#"><img src="img/redes/wats.png" alt=""></a>
                        <a href="javascript:window.open('https://instagram.com','','toolbar=yes width=800,height=500');void 0"><img src="img/redes/instagram.png" alt=""></a>
                        <a href="javascript:window.open('https://youtube.com','',' toolbar=yes width=800,height=500');void 0"><img src="img/redes/youtube.png" alt=""></a>
                        <a href="javascript:window.open('https://twitter.com','',' toolbar=yes width=800,height=500');void 0"><img src="img/redes/gorjeo.png" alt=""></a>
                        <a href="javascript:window.open('https://facebook.com','',' toolbar=yes width=800,height=500');void 0"><img src="img/redes/facebook.png" alt=""></a>
                        <a href="javascript:window.open('https://tiktok.com','',' toolbar=yes width=800,height=500');void 0"><img src="img/redes/tik-tok.png" alt=""></a>
                    </div>
                </div>
                <div id="info_casa" class="mt-3">
                    <!--informacion de la casa-->
                    <h6 class="text-center">Excelente precio</h3>
                    <div>
                        <span>
                            <table>
                                <tr>
                                    <td>
                                        <span><img id="icono" src="img/img_149826.png" alt=""><p>Recamaras: </p> <p> </p></span>
                                    </td>
                                    <td > 
                                        <span><img src="img/hook.png" alt="" id="icono"><p>construidos: </p><p> </p></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                       <span><img src="img/toilet.png" alt="" id="icono"> <p>Baños: </p> <p> </p></span>
                                    </td>
                                    <td >
                                        <span><img src="img/terrain.png" alt="" id="icono"><p>Terrenos: </p><p> </p></span>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <span><img src="img/garage.png" id="icono" alt=""><p>Estacionamiento: </p><p> </p></span>
                                    </td>
                                </tr>
                            </table>
                        </span>  
                    </div>
                </div>
                <br>
            </div>

        </section>
    </body>
</html>