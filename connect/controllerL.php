<?php
    include_once 'autocompletar.php';

        $modeloM =  new AutocompletarL();
        $textoM = $_GET['tipo'];
        $resM = $modeloM -> buscar($textoM);
        echo json_encode($resM);
?>
