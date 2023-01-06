<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Propietarios</title>
</head>

<body>
    <label for="">
        <h1>
            Propietarios
        </h1>
    </label>
    <p></p>
    <!-- FROM POST to GET -->
    <form method="GET" action="UPropietarios.php">
        <label for=""><strong> Ingrese el ID del Propietario</strong></label>
        <input type="text" name="IDPropietario" id="IDPropietario" value="<?php print($_GET['IDPropietario'])?>" required>
        <br>
        <label for="">Nombre</label>
        <input type="text" id="Nombre" name="Nombre" value="<?php print($_GET['Nombre'])?>" required>
        <br>
        <label for="">ApellidoPaterno</label>
        <input type="text" id="ApellidoPaterno" name="ApellidoPaterno" value="<?php print($_GET['ApellidoPaterno'])?>" required>
        <br>
        <label for="">ApellidoMaterno</label>
        <input type="text" id="ApellidoMaterno" name="ApellidoMaterno" value="<?php print($_GET['ApellidoMaterno'])?>" required>
        <br>
        <label for="">Localidad</label>
        <input type="text" id="Localidad" name="Localidad" value="<?php print($_GET['Localidad'])?>" required>
        <br>
        <label for="">Municipio</label>
        <input type="text" id="Municipio" name="Municipio" value="<?php print($_GET['Municipio'])?>" required>
        <br>
        <label for="">RFC</label>
        <input type="text" id="RFC" name="RFC" value="<?php print($_GET['RFC'])?>" required minlength="10" maxlength="13">
        <br>
        <input type="submit" value="Enviar">
        <br>
    </form>
</body>

</html>

<?php

if(isset($_REQUEST['IDPropietario'])){

    $IDPropietario = $_REQUEST['IDPropietario'];
    $Nombre = $_REQUEST['Nombre'];
    $ApellidoPaterno = $_REQUEST['ApellidoPaterno'];
    $ApellidoMaterno = $_REQUEST['ApellidoMaterno'];
    $Localidad = $_REQUEST['Localidad'];
    $Municipio = $_REQUEST['Municipio'];
    $RFC = $_REQUEST['RFC'];
    
    $SQL = "UPDATE propietarios SET IDPropietario='$IDPropietario', Nombre='$Nombre', 
    ApellidoPaterno='$ApellidoPaterno', ApellidoMaterno='$ApellidoMaterno', 
    Localidad='$Localidad', Municipio='$Municipio', RFC='$RFC' WHERE IDPropietario='$IDPropietario'";

    include("conexion.php");
    $Con = Conectar();
    $Result = Ejecutar($Con, $SQL);
    $FilasAfectadas = mysqli_affected_rows($Con);
    if ($FilasAfectadas > 0) {
        echo "Se actualizaron $FilasAfectadas registros";
    }
    Cerrar($Con);
}
?>