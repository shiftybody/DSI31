<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar propietario</title>
</head>
<body>
    <form method="GET" action="DPropietarios.php">
        <label> RFC del propietario </label>
        <input type="text" name="RFC" id="RFC" placeholder="VECJ880326XXX">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>

<?php 

// Eliminar el registro de la tabla oficiales 
if(isset($_GET['RFC']) && !empty($_GET['RFC'])){

    $RFC = $_GET['RFC'];

    $SQL = "DELETE FROM propietarios WHERE RFC = '$RFC'";

    //enviar al dbms
    include("conexion.php");
    $Con = Conectar();
    $Result = Ejecutar($Con, $SQL) or die ("Error al eliminar datos".mysqli_error($Con));
    $FilasAfectadas = mysqli_affected_rows($Con);

    print("<br> Numero de Filas Eliminadas:" . $FilasAfectadas);

    Cerrar($Con);
} else {
    print("No se ha recibido el RFC del propietario");
}

?>