<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oficiales</title>
</head>

<body>
    <label for="">
        <h1>
            Oficiales
        </h1>
    </label>
    <p></p>
    <form method="GET" action="UOficiales.php">

        <label for=""><strong> ID del Oficial</strong></label>
        <input type="text" name="IDOficial" id="IDOficial" value="<?php print($_GET['IDOficial']) ?>" readonly>
        <br>
        <label for="">Nombre</label>
        <input type="text" id="Nombre" name="Nombre" value="<?php print($_GET['Nombre']) ?>" required maxlength="50">
        <br>
        <label for="">ApellidoPaterno</label>
        <input type="text" id="ApellidoPaterno" name="ApellidoPaterno" value="<?php print($_GET['ApellidoPaterno']) ?>" required>
        <br>
        <label for="">ApellidoMaterno</label>
        <input type="text" id="ApellidoMaterno" name="ApellidoMaterno" value="<?php print($_GET['ApellidoMaterno']) ?>" required>
        <br>
        <label for="">Grupo</label>
        <input type="text" id="Grupo" name="Grupo" value="<?php print($_GET['Grupo']) ?>" required>
        <br>
        <label for="">Firma</label>
        <input type="text" id="Firma" name="Firma" value="<?php print($_GET['Firma']) ?>" required>
        <br>
        <input type="submit" value="Enviar">
        <br>
    </form>

</body>

</html>

<?php

if (isset($_REQUEST['IDOficial'])) {
    $IDOficial = $_REQUEST['IDOficial'];
    $Nombre = $_REQUEST['Nombre'];
    $ApellidoPaterno = $_REQUEST['ApellidoPaterno'];
    $ApellidoMaterno = $_REQUEST['ApellidoMaterno'];
    $Grupo = $_REQUEST['Grupo'];
    $Firma = $_REQUEST['Firma'];

    $SQL = "UPDATE oficiales SET IDOficial='$IDOficial', Nombre='$Nombre', 
    ApellidoPaterno='$ApellidoPaterno', ApellidoMaterno='$ApellidoMaterno', 
    Grupo='$Grupo', Firma='$Firma' WHERE IDOficial='$IDOficial'";

    include("../conexion.php");
    $Con = Conectar();
    $Result = Ejecutar($Con, $SQL);
    $FilasAfectadas = mysqli_affected_rows($Con);
    if ($FilasAfectadas > 0) {
        echo "Se actualizaron $FilasAfectadas registros";
    }
    Cerrar($Con);
}

?>