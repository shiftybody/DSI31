<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Multa</title>
</head>

<body>
    <form method="GET" action="DMultas.php">
        <label> ID Multa </label>
        <input type="text" name="IDMulta" id="IDMulta" placeholder="1">
        <input type="submit" value="Enviar">
    </form>
</body>

</html>

<?php

// Eliminar el registro de la tabla conductores 
if (isset($_GET['IDMulta']) && !empty($_GET['IDMulta'])) {

    $IDMulta = $_GET['IDMulta'];

    $SQL = "DELETE FROM multas WHERE IDMulta = '$IDMulta'";

    //enviar al dbms
    include("conexion.php");
    $Con = Conectar();
    $Result = Ejecutar($Con, $SQL) or die("Error al eliminar datos" . mysqli_error($Con));
    $FilasAfectadas = mysqli_affected_rows($Con);

    print("<br> Numero de Filas Eliminadas:" . $FilasAfectadas);

    Cerrar($Con);
} else {
    print("No se ha recibido el ID de la multa");
}

?>