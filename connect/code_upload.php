<?php
    session_start();
    require_once "connect.php";
    //CANCELAR WARNINGS
   // error_reporting(0);
   function getFileExtension(string $filename) : string {
    //$filename = 1.jpg            |   ["1", "jpg"]       | return ".jpg"
    $name = explode(".", $filename);
    return ".".array_pop($name);
}
    //DECLARACION DE VARIABLES DE ERROR

    $ErrorFatal = $err_clav = $err_tipo = $err_T = $err_C = $err_Rec = $err_wc = $err_estac ="";
    $err_estado = $err_muni = $err_col = $err_call = $err_int = $err_ext = $err_ref = "";
    $err_lat = $err_long = $err_titulo = $err_desc = $err_precio = $err_publicar = ""; 
    //DECLARACION DE VARIBLES

    $inm_ok = $clave = $tipo = $sup_T = $sup_C = $recam = $wc = $estac = "";
    $estado = $muni = $col = $calle = $int = $ext = $ref = $coordenada = "";
    $lat = $long = $titulo = $desc = $precio = $publicar = "";


    if($_SERVER["REQUEST_METHOD"] == "POST"){

        

        function val($data){
            $data = trim($data);
            $data = stripcslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        //VARIABLES DE RELACION DE TABLAS
        $Id_user = $_SESSION["Id"];

        //VALIDACION DE CLAVE

        if(empty($_POST["clave"])){
            $err_clav = "**Ingresa una clave para el inmueble ";
        }else{
            $clave = $_POST["clave"];
        }

        //VALIDACION DE TIPO DE INMUEBLE

        if(empty($_POST["tipo"]) || $_POST["tipo"] == "Tipo de propiedad"){
            $err_tipo = "**Selecciona el tipo de inmueble ";
        }else{
            $tipo = val($_POST["tipo"]);
        }

        //VALIDACION DE TERRENO

        if(is_numeric($_POST["superficie_T"])){
            $sup_T = $_POST["superficie_T"];
        }else{
            $err_T = "Ingres un número valido para la Superficie del Terreno";

        }
        
        //VALIDACION DE CONTRUCCION
        if(is_numeric($_POST["superficie_C"])){
            $sup_C = $_POST["superficie_C"];
        }else{
            $err_C = "Ingres un número valido para la Superficie construida";

        }

        
        //VALIDACION   DE LAS RECAMARAS
        if(is_numeric($_POST["recam"])){
            $recam = $_POST["superficie_C"];
        }else{
            $err_Rec = "Ingresa el número de recamaras";

        }
        
         //VALIDACION DE WC 
         if(is_numeric($_POST["wc"])){
            $wc = $_POST["wc"];
        }else{
            $err_wc = "Ingresa el número de wc";

        }

         //VALIDACION DE ESTACIONAMIENTOS
         if(is_numeric($_POST["estac"])){
            $estac = $_POST["estac"];
        }else{
            $err_estac = "Ingresa el número de estacionamientos";

        }

        //VALIDACION DE DIRECCIONES

        if (empty($_POST["estado"])) {
            $err_estado = "Seleccione un estado ";
        }else{
            $estado = $_POST["estado"];
        }

        if (empty($_POST["municipio"])) {
            $err_muni = "Seleccione un municipio ";
        }else{
            $muni = $_POST["municipio"];
        }

        if (empty($_POST["localidad"])) {
            $err_col = "Ingrese su colonia ";
        }else{
            $col = $_POST["localidad"];
        }
        //validar calle
        if (empty($_POST["calle"])) {
            $err_call = "Ingrese tu calle ";
        }else{
            $calle = $_POST["calle"];
        }

        if (empty($_POST["noExt"])) {
            $err_ext = "Ingrese su número Exterior ";
        }else{
            $ext = $_POST["noExt"];
        }

        $int = $_POST["noInt"];
        
        if (empty($_POST["ref"])) {
            $err_ref = "Ingrese referencias";
        }else{
            $ref = $_POST["ref"];
        }
        //COORDENADAS latitud longitud -99.0575491703369 , 19.482837716973325
        if (empty($_POST["latitud"])) {
            $err_lat = "Selecciona un punto en el mapa";
        }else{
            $lat = $_POST["latitud"];
        }
        if (empty($_POST["longitud"])) {
            $err_long = "Selecciona un punto en el mapa";
        }else{
            $long = $_POST["longitud"];
        }

        if (empty($_POST["title"])) {
            $err_titulo = "Ingrea un titulo para tu anuncio";
        }else{
            $titulo = $_POST["title"];
        }

        if (empty($_POST["precio"])) {
            $err_precio = "Ingresa el precio";
        }else{
            $precio = $_POST["precio"];
        }

        if (empty($_POST["comment"])) {
            $err_desc = "Ingresa una descripcion";
        }else{
            $desc = $_POST["comment"];
        }

        if (empty($_POST["publicar"])) {
            $err_publicar = "Selecciona donde se publicara";
        }else{
            $publicar = TRUE;
        }

        //VALIDACION DE LOS DATOS NECESARIOS DEL ANUNCIO

        //ENVIAR DATOS A TABLA INMUEBLES 
        if(empty($err_clav) && empty($err_tipo) && empty($err_T) && empty($err_C) && empty($err_Rec) && empty($err_wc)  && empty($err_estac) && empty($err_estado) && empty($err_muni) && empty($err_col) && empty($err_call) && empty($err_ext) && empty($err_ref) && empty($err_lat) && empty($err_long) && empty($err_titulo) && empty($err_desc) && empty($err_precio) && empty($err_publicar)){
            $sql = "INSERT INTO inmuebles (clave, tipo, us_id ) VALUES ('$clave', '$tipo', '$Id_user')";
                if($conn->query($sql) === TRUE){
                    $last_inmueble_id = $conn->insert_id;
                    //ENVIAR DATOS A TABLA DESCRIPCION

                    $sql = "INSERT INTO descripcion (superficie_T, superficie_C, recamaras, wc, estacionamiento, inmueble_id) VALUES ('$sup_T','$sup_C','$recam','$wc','$estac','$last_inmueble_id')";
                        if($conn->query($sql) === TRUE){
                            $last_inmueble_desc = $conn->insert_id;
                            //enviar datos de localizacion
                            $sql = "INSERT INTO gps (Estado, Municipio , Colonia , calle , exterior, interior , coment , latitud ,longitud, inmueble_id ) VALUES ('$estado','$muni','$col','$calle','$int','$ext', '$ref', '$lat', '$long',$last_inmueble_id)";
                                if($conn->query($sql) === TRUE){

                                    $last_inmueble_gps = $conn->insert_id;
                                    //ENVIO DE IMAGENES
                                    if(isset($_FILES) && !empty($_FILES)){
                                        $fotoSubir = $_POST;
                                        $files = array_filter($_FILES, function($item){
                                            return $item["name"][0] != "";
                                        });

                                        foreach ($files as $InputFile) {
                                            $length = count($InputFile["name"]);
                                            for ($i=0; $i < $length; $i++) { 
                                                $tmp_name = $InputFile["tmp_name"][$i];
                                                $name = $InputFile["name"][$i];
                                                //var_dump($name);
                                                //var_dump($tmp_name);
                                                $extension = getFileExtension($name);
                                                //NOMBRE PARA IDENTIFICAR IMAGENES
                                                $newName = $i . $Id_user . $last_inmueble_id .$extension;
                                                $path = "connect/imagenes/$newName";
                                                if (in_array($name, $fotoSubir)) {
                                                    $sql = "INSERT INTO imagenes (imagen, nombre, inmueble_id) VALUES ('$newName', '$extension' , '$last_inmueble_id')";
                                                    $resultado = mysqli_query($conn,$sql);
                                                    if($resultado){
                                                        $subir = move_uploaded_file($tmp_name, $path);
                                                    }else{
                                                            echo "Error al subir las imagenes ";
                                                        }
                                                    
                                                }
                                            
                                            }
                                        }
                                                
                                    }

                                    //INSERTAR DATOS DEL ANUNCIO

                                    $sql = "INSERT INTO anuncio (titulo, descripcion, precio,publicar, inmueble_id) VALUES ('$titulo','$desc','$precio','$publicar','$last_inmueble_id')";
                                        if($conn->query($sql) === TRUE){
                                            $last_inmueble_desc = $conn->insert_id;
                                        }else{
                                            echo "Erro en el anuncio";
                                        }
                                }else {
                                    echo "Error en la ubicación del inmueble";
                                }
                        }else {
                            echo "Error en la descripcion";
                        }

                    }else{
                    echo "Error: " . $sql . "<br>" . $conn->error;
                    }


        }
        else{

            $ErrorFatal = "Se encontraron algunos errores: ";

            
                
        }
    }
    // header("location: ./")
    ?>