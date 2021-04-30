<?php
    $hn ='127.0.0.1';
    $db = 'casaypunto';
    $user = 'root';
    $pw = '';
    $conn = new mysqli($hn, $user, $pw, $db);
    if ($conn->connect_error) die ("Error");
    if($conn === false){
        die("ERROR EN LA CONEXION" . mysqli_connect_error());
    }else{
        //echo("Esta es una conexion exitosa, ");
    }

?>