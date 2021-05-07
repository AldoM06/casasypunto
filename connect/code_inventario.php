
  |<?php
      session_start();

    //Incluir archivo de conexion a db
    require_once "connect.php";
    error_reporting(0);
    //variables de error

    $error_clave = $error_tipo = $error_img = $error_nombre = "";
    $error_supT = $error_supC = $error_reca = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){


    function val($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    //Definir variables e inicializar
    $clave = val($_POST["clave"]);
    $tipo = val($_POST["tipo"]);
    //Variables de las imagenes

    $imagen = $_FILES['imagen']['name'];
    //optenemos titulo
    $nombre = $_POST['title_img'];
    
    $superficie_T = trim($_POST["superficie_T"]);
    $superficie_C = trim($_POST["superficie_C"]);
    $recam = trim($_POST["recam"]);
    $wc = trim($_POST["wc"]);
    $estac= trim($_POST["estacionamiento"]);
    $estado = val($_POST["estado"]);
    $municipio = val($_POST["municipio"]);
    $colonia = val($_POST["colonia"]);
    $calle =  val($_POST["calle"]);
    $exterior = val($_POST["exterior"]);
    $interior = val($_POST["interior"]);
    $ref = val($_POST["ref"]);
    $Id_user = $_SESSION["Id"];




    //crear la conexion

    if(empty($_POST["clave"])){

                echo "Aun no has llenado los cambos : ";

    }else{

        $sql = "INSERT INTO inmuebles (clave, tipo, nombre, us_id ) VALUES ('$clave', '$tipo', '$nombre', '$Id_user')";
            if($conn->query($sql) === TRUE){
                
                $last_id = $conn->insert_id;
                echo "Registro de inmueble registrado: " . $last_id;
                
                }else{
                
                echo "Error: " . $sql . "<br>" . $conn->error;
                }
        
        if(isset($imagen) && $imagen != ""){
            //obtenemos extension de la imagen
            $tipo = $_FILES['imagen']['type'];
            //obtenemos  la ruta
            $temp  = $_FILES['imagen']['tmp_name'];
            echo "La ruta es : " .  $temp . " Y el tipo es : " .$tipo . "  ";
    
           if( !((strpos($tipo,'gif') || strpos($tipo,'jpeg') || strpos($tipo,'webp') || strpos($tipo,'png')))){
              $_SESSION['mensaje'] = 'solo se permite archivos jpeg, gif, webp';
              $_SESSION['tipo'] = 'danger';
              echo "Registro de inmueble registrado: ";
              //header('location:../subir_foto/foto.php');
           }else{
            $sql = "INSERT INTO imagenes (imagen, nombre, inmueble_id) VALUES ('$imagen', '$nombre', '$last_id')";
             $resultado = mysqli_query($conn,$sql);
             if($resultado){
                  $subir = move_uploaded_file($temp,'connect/imagenes/'.$imagen); 

                    if($subir === TRUE)
                    {
                        echo "se subio con exito";

                    }else{
                        echo "ha habido un erros al copiar el archivo";
                    }


             }else{

                 echo "ha ocurrido un error";

             }
           }
        }

                //$sql = "INSERT INTO descripcion (superficie_T, superficie_C, recamaras, wc, estacionamiento, inmueble_id) VALUES ('22','34','2','2','1','$last_id')";
        $sql = "INSERT INTO descripcion (superficie_T, superficie_C, recamaras, wc, estacionamiento, inmueble_id) VALUES ('$superficie_T','$superficie_C','$recam','$wc','$estac','$last_id')";

                  if($conn->query($sql) === TRUE){
                
                $last_id = $conn->insert_id;
                echo "Registro de inmueble registrado: " . $last_id;
                
                }else{
                
                echo "Error: " . $sql . "<br>" . $conn->error;
                }
        $sql = "INSERT INTO gps (Estado,Municipio,Colonia,calle,exterior, interior,coment,inmueble_id) VALUES ('$estado', '$municipio', '$colonia', '$calle', '$exterior','$interior','$ref', '$last_id')";

                if($conn->query($sql) === TRUE){
              
              echo "Registro de inmueble registrado: " . $last_id;
              
              }else{
              
              echo "Error: " . $sql . "<br>" . $conn->error;
              }

    }
}

$conn->close();
 
?>
