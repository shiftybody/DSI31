<?php

    $Nombre = $_REQUEST['Nombre'];
    $ApellidoPaterno = $_REQUEST['ApellidoPaterno'];
    $ApellidoMaterno = $_REQUEST['ApellidoMaterno'];
    $Localidad = $_REQUEST['Localidad'];
    $Municipio = $_REQUEST['Municipio'];
    // request the RFC to uppercase
    $RFC = strtoupper($_REQUEST['RFC']);

    $SQL = "INSERT INTO propietarios(IDPropietario,Nombre,ApellidoPaterno,ApellidoMaterno,Localidad,Municipio,RFC) 
    VALUES ('','$Nombre','$ApellidoPaterno','$ApellidoMaterno','$Localidad','$Municipio','$RFC')";

    include("../conexion.php");
    $Con = Conectar();
    $Result = Ejecutar($Con, $SQL) or die ("Error al insertar datos".mysqli_error($Con));
    if ($Result) {
        print("El propietario con RFC: <strong>" . $RFC . " </strong> ha sido registrado con exito");
    }else{
        print("Registro No insertado");
    }
    Cerrar($Con);

?>
