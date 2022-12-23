
<?php

    $IDLicencia = $_GET['IDLicencia'];
    //convertir el primer caracter ascii a numero
    $ascii = ord(substr($IDLicencia, 0, 1));
    // concatenar el primer caracter ascii con el resto del id
    $IDLicencia = $ascii . substr($IDLicencia, 1);
    // eliminar el guion
    $IDLicencia = str_replace("-", "", $IDLicencia);

    $SQL = "DELETE FROM licencias WHERE IDLicencia = '$IDLicencia'";

    include("conexion.php");
    $Con = Conectar();
    $Result = Ejecutar($Con, $SQL) or die("Error al eliminar datos" . mysqli_error($Con));

    print("<br> Numero de Filas Eliminadas:" . mysqli_affected_rows($Con));

    Cerrar($Con);


?>