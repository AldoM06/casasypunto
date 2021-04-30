|<?php
    //Incluir archivo de conexion a db
    require_once "connect.php";

    //Definir variables e inicializar

    $email = $password = $nombre = $apellidos = $rfc = $celular = $telefono = "";
    $email_err = $password_err = $nombre_err = $apellidos_err = $rfc_err = $celular_err = $telefono_err = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        //validacion de correo
        if(empty(trim($_POST["email"]))){
            $email_err = "Por favor, ingrese un correo";
        }else{
        //prepara una declaracion de seleccion
        $sql = "SELECT Id FROM users2 WHERE email= ? ";

            if($stmt = mysqli_prepare($conn, $sql)){
                mysqli_stmt_bind_param($stmt, "s", $param_email);

                $param_email = trim($_POST["email"]);

                if(mysqli_stmt_execute($stmt)){
                    mysqli_stmt_store_result($stmt);

                    if(mysqli_stmt_num_rows($stmt) == 1){
                        $email_err = "Este correo ya esta en uso";
                    }else{
                        $email = trim($_POST["email"]);
                    }
                }else{
                    echo "Algo salió mal, intenta mas tarde";
                }
            
            }
            print_r($email);
        }

        //validando contraseña
        if(empty(trim($_POST["password"]))){
            $password_err = "Por favor, ingresa una constraseña";
        }elseif(strlen(trim($_POST["password"])) < 4){
            $password_err = "La contraseña debe de tener el menos 4  caracteres";
            print_r($password);
        }else{
            $password = trim($_POST["password"]);
            print_r($email);
        }

        //validando nombre
        if(empty(trim($_POST["nombre"]))){
            $nombre_err = "Por favor, ingresa un nombre";
        }else{
            $nombre = trim($_POST["nombre"]);
        }
        //validando apellido
        if(empty(trim($_POST["apellidos"]))){
            $apellido_err = "Por favor, ingresa tus apellidos";
        }else{
            $apellidos = trim($_POST["apellidos"]);
        }
        //validando RFC
        if(empty(trim($_POST["rfc"]))){
            $rfc_err = "Por favor, ingresa tu RFC";
        }else{
            $rfc = trim($_POST["rfc"]);
        }
        //validando celular
        if(empty(trim($_POST["celular"]))){
            $celular_err = "Por favor, ingresa tu Número de celular    ";
        }elseif(strlen(trim($_POST["celular"])) != 10){
            $celular_err = "El celular debe de ser de 10 digitos";
        }else{
            $celular = trim($_POST["celular"]);
        }
        
        //validando telefono
        if(empty(trim($_POST["telefono"]))){
            $telefono_err = "Por favor, ingresa tu Número de telefono fijo    ";
        }elseif(strlen(trim($_POST["telefono"])) != 10){
            $telefono_err = "El celular debe de ser de 10 digitos";
        }else{
            $telefono = trim($_POST["telefono"]);
        }
    //COMPROBANDO ERRORES DE ENTRADA ANTES DE INSERTAR LOS DATOS EN LA BASE DE DATOS
    if(empty($email_err) && empty($password_err) && empty($nombre_err)){
            
        $sql = "INSERT INTO users2 (email, pass, nombre, apellidos, rfc, celular, telefono) VALUES(?,?,?,?,?,?,?)";

        if($stmt = mysqli_prepare($conn, $sql)){
            mysqli_stmt_bind_param($stmt, "sssssss", $param_email, $param_password, $param_nombre,$param_apellidos, $param_rfc, $param_celular, $param_telefono);

            //ESTABLECIENDO PARAMETROS
            $param_email = $email;
            $param_password = password_hash($password, PASSWORD_DEFAULT); //ENCRIPTANDO
            $param_nombre = $nombre;
            $param_apellidos = $apellidos;
            $param_rfc = $rfc;
            $param_celular = $celular;
            $param_telefono = $telefono;
            if(mysqli_stmt_execute($stmt)){
                header("location: index.php");
            }else{
                echo "Algo salio mal, intentalo despues";
            }
        }
        
    }

    mysqli_close($conn);

}


?>
