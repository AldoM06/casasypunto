<?php
    
    include_once "database.php";
    
    class Autocompletar extends Database{
        function buscar($texto){
            $res  = array();
            $query = $this->connect()->prepare('SELECT * FROM estados where nombre LIKE :texto');
            $query -> execute(['texto' => $texto . '%']);
            if($query -> rowCount()){
                while($r = $query -> fetch()){
                    array_push($res , $r['nombre']);
                    //echo ($r['id']);
                }
            }
                return $res;
        }
    }

    class AutocompletarM extends Database{
        function buscar($textoM){
            $res  = array();
            $query = $this->connect()->prepare('SELECT * FROM municipios where nombre LIKE :texto');
            $query -> execute(['texto' => $textoM . '%']);
            if($query -> rowCount()){
                while($r = $query -> fetch()){
                    array_push($res , $r['nombre']);
                    //echo ($r['id']);
                }
            }
                return $res;
        }

    }

    class AutocompletarL extends Database{
        function buscar($textoC){
            $res  = array();
            $query = $this->connect()->prepare('SELECT * FROM localidades where nombre LIKE :texto');
            $query -> execute(['texto' => $textoC . '%']);
            if($query -> rowCount()){
                while($r = $query -> fetch()){
                    array_push($res , $r['nombre']);
                    //echo ($r['id']);
                }
            }
                return $res;
        }

    }

?>