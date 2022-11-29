<?php
    function Conectar(){
        $Server = "localhost";
        $User = "root";
        $Password = "";
        $DB = "controlvehicular31";

        $Con = mysqli_connect($Server, $User, $Password, $DB);
        return $Con;
    }

    function Ejecutar($Con, $SQL){
        $Result = mysqli_query($Con, $SQL);
        return $Result;
    }

    function Cerrar($Con){
        $Var = mysqli_close($Con);
        return $Var;
    }

    function ParseID($ID)
    {
        // convertir el los 2 primeros numeros a caracter ascii
        $ascii = chr(substr($ID, 0, 2));
        // concatenar el caracter ascii con el resto del id
        $ID = $ascii . substr($ID, 2);
        // insertar el guion antes del penultimo caracter
        $ID = substr($ID, 0, -2) . "-" . substr($ID, -2);
        return $ID;
    }
    
?>

