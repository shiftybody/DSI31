<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Tarjeta de Circulacion</title>
</head>
<body>
        <form method="GET" action="DTarjetas.php">
        <label> Folio:  </label>
        <input type="text"
            name="IDTarjeta" 
            id="IDTarjeta" >
        <input type="submit" value="Enviar">
    </form>
</body>
</html>

<?php 

// Eliminar el registro de la tabla oficiales 
if(isset($_GET['IDTarjeta']) && !empty($_GET['IDTarjeta'])){

    $IDTarjeta = $_GET['IDTarjeta'];

    $SQL = "DELETE FROM tarjetas WHERE IDTarjeta = '$IDTarjeta'";

    //enviar al dbms
    include("conexion.php");
    $Con = Conectar();
    $Result = Ejecutar($Con, $SQL) or die ("Error al eliminar datos".mysqli_error($Con));
    $FilasAfectadas = mysqli_affected_rows($Con);

    print("<br> Numero de Filas Eliminadas:" . $FilasAfectadas);

    Cerrar($Con);
} else {
   print("<br> No se recibio el ID de la Tarjeta");
}

?>