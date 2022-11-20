<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Oficial</title>
</head>

<body>
    <!-- Solicitar a traves de un formulario el IDconductor -->
    <form method="GET" action="DOficiales.php">
        <label> ID Oficial </label>
        <input type="text" name="IDOficial" id="IDOficial">
        <input type="submit" value="Enviar">
    </form>
</body>

</html>

<?php

// Eliminar el registro de la tabla oficiales 
if (isset($_GET['IDOficial']) && !empty($_GET['IDOficial'])) {

    $IDOficial = $_GET['IDOficial'];

    $SQL = "DELETE FROM oficiales WHERE IDOficial = '$IDOficial'";

    //enviar al dbms
    include("conexion.php");
    $Con = Conectar();
    $Result = Ejecutar($Con, $SQL) or die("Error al eliminar datos" . mysqli_error($Con));

    print("<br> Numero de Filas Eliminadas: " . mysqli_affected_rows($Con));

    Cerrar($Con);
} else {
    print("<br> No se ha recibido el ID del oficial");
}

?>