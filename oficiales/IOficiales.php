<?php

    include '../oficiales/FOficiales.php';

    $Nombre = $_REQUEST['Nombre'];
    $ApellidoPaterno = $_REQUEST['ApellidoPaterno'];
    $ApellidoMaterno = $_REQUEST['ApellidoMaterno'];
    $Grupo = $_REQUEST['Grupo'];
    $Firma = $_REQUEST['Firma'];


    $SQL = "INSERT INTO oficiales VALUES ('$','$Nombre','$ApellidoPaterno','$ApellidoMaterno','$Grupo','$Firma')";


    include("../conexion.php");
    $Con = Conectar();
    $Result = Ejecutar($Con, $SQL) or die ("Error al insertar datos".mysqli_error($Con));
    if ($Result) {

        $last_sql_id = mysqli_insert_id($Con);
        print("<h1 style='text-align: center; padding-buttom:2em;'>Oficial agregado correctamente ID: <strong> " . $last_sql_id . "</strong> </h1>");

    }else{
        print("Registro No insertado");
    }
    Cerrar($Con);

?>