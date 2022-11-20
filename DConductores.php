<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar licencia</title>
</head>

<body>

    <form method="GET" action="DConductores.php">
        <label> ID Conductor </label>
        <input type="text" name="IDConductor" id="IDconductor" placeholder="1">
        <input type="submit" value="Enviar">
    </form>


</body>

</html>

<?php

// Eliminar el registro de la tabla conductores 
if (isset($_GET['IDConductor']) && !empty($_GET['IDConductor'])) {

    $IDConductor = $_GET['IDConductor'];
    
    $SQL = "DELETE FROM conductores WHERE IDConductor = $IDConductor";

    include("conexion.php");
    $Con = Conectar();
    $Result = Ejecutar($Con, $SQL);

    print("<br> Numero de Filas Eliminadas:"
             . mysqli_affected_rows($Con));

    Cerrar($Con);
} else {
    print("<br> No se ha ingresado el IDConductor");
} 



?>