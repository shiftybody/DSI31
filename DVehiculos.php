<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Vehiculo</title>
</head>

<body>
    <form method="GET" action="DVehiculos.php">
        <label> NIV del Vehiculo </label>
        <input type="text" name="NIV" id="NIV" placeholder="1GNCS12Z6M0246591">
        <input type="submit" value="Enviar">
    </form>
</body>

</html>

<?php

// Eliminar el registro de la tabla oficiales 
if (isset($_GET['NIV']) && !empty($_GET['NIV'])) {

    $NIV = $_GET['NIV'];

    $SQL = "DELETE FROM vehiculos WHERE NIV = '$NIV'";

    //enviar al dbms
    include("conexion.php");
    $Con = Conectar();
    $Result = Ejecutar($Con, $SQL) or die("Error al eliminar datos" . mysqli_error($Con));
    $FilasAfectadas = mysqli_affected_rows($Con);

    print("<br> Numero de Filas Eliminadas:" . $FilasAfectadas);

    Cerrar($Con);
} else {
    print("<br> No se recibio el NIV del Vehiculo");
}

?>