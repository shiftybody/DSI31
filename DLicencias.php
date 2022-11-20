<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar licencia</title>
</head>

<body>
    <form method="GET" action="DLicencias.php">
        <label> No. de Licencia </label>
        <input type="text" name="IDLicencia" id="IDLicencia" placeholder="Q123456-78">
        <input type="submit" value="Enviar">
    </form>
</body>

</html>

<?php
// Eliminar el registro de la tabla licencias
if (isset($_GET['IDLicencia']) && !empty($_GET['IDLicencia'])) {

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
} else {
    print("<br> No se ha ingresado el IDLicencia");
}


?>