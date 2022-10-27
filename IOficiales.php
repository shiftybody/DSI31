<?php

    $IDOficial = $_REQUEST['IDOficial'];
    $Nombre = $_REQUEST['Nombre'];
    $ApellidoPaterno = $_REQUEST['ApellidoPaterno'];
    $ApellidoMaterno = $_REQUEST['ApellidoMaterno'];
    $Grupo = $_REQUEST['Grupo'];
    $Firma = $_REQUEST['Firma'];


    $SQL = "INSERT INTO oficiales VALUES ('$IDOficial','$Nombre','$ApellidoPaterno','$ApellidoMaterno','$Grupo','$Firma')";


    include("conexion.php");
    $Con = Conectar();
    $Result = Ejecutar($Con, $SQL) or die ("Error al insertar datos".mysqli_error($Con));
    if ($Result) {
        print("Registro insertado correctamente");
    }else{
        print("Registro No insertado");
    }
    Cerrar($Con);

?>