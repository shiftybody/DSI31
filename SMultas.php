<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Multa</title>
</head>

<body>
    <form action="SMultas.php" method="get">
        <label for="">Criterio</label>
        <input type="text" name="Criterio" id="Criterio" required>
        <label for=""> Atributos </label>
        <select name="Atributo" class="Atributo" required>
            <option value="">Selecciona un atributo</option>
            <option value="IDMulta">ID Multa</option>
            <option value="FechaHora"> Fecha y Hora</option>
            <option value="ReporteSeccion">Reporte de Sección</option>
            <option value="NombreVia">Nombre Via</option>
            <option value="Kilometro">Kilometro</option>
            <option value="Sentido">Sentido</option>
            <option value="Referencia">Referencia</option>
            <option value="Municipio">Municipio</option>
            <option value="Articulo">Articulo</option>
            <option value="Motivo">Motivo</option>
            <option value="GarantiaRetenida">Garantia Retenida</option>
            <option value="NoPartesAccidente">No. de Partes</option>
            <option value="Convenio">Convenio</option>
            <option value="PuestaDisposicion">Puesto a disposicion</option>
            <option value="Deposito">ID Agente</option>
            <option value="ObservacionConductor">Observaciones del Conductor</option>
            <option value="ObservacionOficial">Observaciones del Agente</option>
            <option value="CalificacionBoleta">Calificacion</option>
            <option value="IDLicencia">ID Licencia</option>
            <option value="IDVehiculo">ID Vehiculo</option>
            <option value="IDTarjeta">ID Tarjeta</option>
            <option value="IDOficial">ID Oficial</option>
            <input type="submit" value="Enviar">
            <br>
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
</body>

</html>

</html>

<?php
if (isset($_GET['Criterio']) && isset($_GET['Atributo'])) {
    $Criterio = $_GET['Criterio'];
    $Atributo = $_GET['Atributo'];
    if ($Atributo == "IDLicencia") {
        //convertir el primer caracter ascii a numero
        $ascii = ord(substr($Criterio, 0, 1));
        // concatenar el primer caracter ascii con el resto del id
        $Criterio = $ascii . substr($Criterio, 1);
        // eliminar el guion
        $Criterio = str_replace("-", "", $Criterio);
    }

    $SQL = "SELECT * FROM Multas WHERE $Atributo = '$Criterio'";
    include("conexion.php");
    $Con = Conectar();
    $Result = Ejecutar($Con, $SQL) or die("Error al insertar datos" . mysqli_error($Con));
    $Rows = mysqli_num_rows($Result);

    $Fila = mysqli_fetch_array($Result);

    //show all rows in table
    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>ID Multa</th>";
    echo "<th>Fecha y Hora</th>";
    echo "<th>Reporte de Sección</th>";
    echo "<th>Nombre Via</th>";
    echo "<th>Kilometro</th>";
    echo "<th>Sentido</th>";
    echo "<th>Referencia</th>";
    echo "<th>Municipio</th>";
    echo "<th>Articulo</th>";
    echo "<th>Motivo</th>";
    echo "<th>Garantia Retenida</th>";
    echo "<th>No. de Partes</th>";
    echo "<th>Convenio</th>";
    echo "<th>Puesto a disposicion</th>";
    echo "<th>ID Agente</th>";
    echo "<th>Observaciones del Conductor</th>";
    echo "<th>Observaciones del Agente</th>";
    echo "<th>Calificacion</th>";
    echo "<th>IDConductor</th>";
    echo "<th>IDAgente</th>";
    echo "<th>IDVehiculo</th>";
    echo "<th>IDLicencia</th>";
    echo "</tr>";

    for($i = 0; $i < $Rows; $i++){
        echo "<tr>";
        echo "<td>" . $Fila[0] . "</td>";
        echo "<td>" . $Fila[1] . "</td>";
        echo "<td>" . $Fila[2] . "</td>";
        echo "<td>" . $Fila[3] . "</td>";
        echo "<td>" . $Fila[4] . "</td>";
        echo "<td>" . $Fila[5] . "</td>";
        echo "<td>" . $Fila[6] . "</td>";
        echo "<td>" . $Fila[7] . "</td>";
        echo "<td>" . $Fila[8] . "</td>";
        echo "<td>" . $Fila[9] . "</td>";
        echo "<td>" . $Fila[10] . "</td>";
        echo "<td>" . $Fila[11] . "</td>";
        echo "<td>" . $Fila[12] . "</td>";
        echo "<td>" . $Fila[13] . "</td>";
        echo "<td>" . $Fila[14] . "</td>";
        echo "<td>" . $Fila[15] . "</td>";
        echo "<td>" . $Fila[16] . "</td>";
        echo "<td>" . $Fila[17] . "</td>";
        echo "<td>" . $Fila[18] . "</td>";
        echo "<td>" . $Fila[19] . "</td>";
        echo "<td>" . $Fila[20] . "</td>";
        echo "<td>" . $Fila[21] . "</td>";
        echo "</tr>";
        $Fila = mysqli_fetch_array($Result);
    }
} 
?>