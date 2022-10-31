<?php

    $Nombre = $_REQUEST['Nombre'];
    $ApellidoPaterno = $_REQUEST['ApellidoPaterno'];
    $ApellidoMaterno = $_REQUEST['ApellidoMaterno'];
    $Grupo = $_REQUEST['Grupo'];
    $Firma = $_REQUEST['Firma'];


    $SQL = "INSERT INTO oficiales VALUES ('$','$Nombre','$ApellidoPaterno','$ApellidoMaterno','$Grupo','$Firma')";


    include("conexion.php");
    $Con = Conectar();
    $Result = Ejecutar($Con, $SQL) or die ("Error al insertar datos".mysqli_error($Con));
    if ($Result) {

        $last_sql_id = mysqli_insert_id($Con);
        print("Oficial agregado correctamente ID: " . $last_sql_id);

    }else{
        print("Registro No insertado");
    }
    Cerrar($Con);

?>