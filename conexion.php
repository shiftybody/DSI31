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
?>

