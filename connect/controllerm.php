<?php
    include_once 'autocompletar.php';

        $modeloM =  new AutocompletarM();
        $textoM = $_GET['tipo'];
        $resM = $modeloM -> buscar($textoM);
        echo json_encode($resM);
?>
