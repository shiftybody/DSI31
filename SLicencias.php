<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Licencia</title>
</head>

<body>
    <form action="SLicencias.php" method="post">
        <label for="">Criterio</label>
        <input type="text" name="Criterio" id="Criterio" required>
        <label for=""> Atributos </label>
        <select name="Atributo" class="Atributo" required>
            <option value="">Selecciona un atributo</option>
            <option value="IDLicencia">ID Licencia</option>
            <option value="IDConductor">ID Conductor</option>
            <option value="TipoLicencia">Tipo de Licencia</option>
            <option value="FechaExpedicion">Fecha de Expedicion</option>
            <option value="FechaVencimiento">Fecha de Vencimiento</option>
            <option value="AtributoD">Atributo Desconocido</option>
            <option value="Restricciones">Restricciones</option>
            <input type="submit" value="Enviar">
        </select>
    </form>
    <script>
        const selectElement = document.querySelector('.Atributo');

        selectElement.addEventListener('change', (event) => {
            if (event.target.value == "IDLicencia") {
                document.getElementById("Criterio").placeholder = "Q12345-67";
            }
        });
    </script>
    <br>
</body>

</html>

<?php
if (isset($_POST['Criterio']) && isset($_POST['Atributo'])) {
    $Criterio = $_POST['Criterio'];
    $Atributo = $_POST['Atributo'];
    if ($Atributo == "IDLicencia") {
        //convertir el primer caracter ascii a numero
        $ascii = ord(substr($Criterio, 0, 1));
        // concatenar el primer caracter ascii con el resto del id
        $Criterio = $ascii . substr($Criterio, 1);
        // eliminar el guion
        $Criterio = str_replace("-", "", $Criterio);
    }
    


    $SQL = "SELECT * FROM licencias WHERE $Atributo LIKE '%$Criterio%'";
    include("conexion.php");
    $Con = Conectar();
    $Result = Ejecutar($Con, $SQL) or die("Error al insertar datos" . mysqli_error($Con));
    $Rows = mysqli_num_rows($Result);

    $Fila = mysqli_fetch_row($Result);

    // show all rows in a table html format
    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>ID Licencia</th>";
    echo "<th>ID Conductor</th>";
    echo "<th>Tipo de Licencia</th>";
    echo "<th>Fecha de Expedicion</th>";
    echo "<th>Fecha de Vencimiento</th>";
    echo "<th>Atributo Desconocido</th>";
    echo "<th>Restricciones</th>";
    echo "<th>Eliminar</th>";
    echo "<th>Actualizar</th>";

    echo "</tr>";
    for ($i = 0; $i < $Rows; $i++) {
        echo "<tr>";
        echo "<td>" . ParseID($Fila[0]) . "</td>";
        echo "<td>" . $Fila[1] . "</td>";
        echo "<td>" . $Fila[2] . "</td>";
        echo "<td>" . $Fila[3] . "</td>";
        echo "<td>" . $Fila[4] . "</td>";
        echo "<td>" . $Fila[5] . "</td>";
        echo "<td>" . $Fila[6] . "</td>";
        echo "<td><a href='DLicencias.php?IDLicencia=" . ParseID($Fila[0]) . "'>Eliminar</a></td>";
        echo "<td><a href='ULicencias.php?IDLicencia=" . ParseID($Fila[0]) .
            "&IDConductor=" . $Fila[1] .
            "&TipoLicencia=" . $Fila[2] .
            "&FechaExpedicion=" . $Fila[3] .
            "&FechaVencimiento=" . $Fila[4] .
            "&AtributoD=" . $Fila[5] .
            "&Restricciones=" . $Fila[6] .
            "'>Actualizar</a></td>";
        echo "</tr>";

        $Fila = mysqli_fetch_row($Result);
    }
    echo "</table>";

}

?>