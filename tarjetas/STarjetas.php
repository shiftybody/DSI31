<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Tarjeta de Circulación</title>
</head>
<body>
    <form action="STarjetas.php" method="post">
        <label for="">Criterio</lable>
        <input type="text" name="Criterio" id="Criterio" required>
        <label for=""> Atributos </label>
        <select name="Atributo" id="Atributo" required>
            <option value="">Selecciona un atributo</option>
            <option value="IDTarjeta">ID Tarjeta</option>
            <option value="TipoServicio">Tipo de Servicio</option>
            <option value="Folio">Folio</option>
            <option value="Vigencia"> Vigencia</option>
            <option value="Placa">Placa</option>
            <option value="IDPropietario">Apellido Paterno</option>
            <option value="IDVehiculo">Apellido Materno</option>
            <option value="Operacion">Operación</option>
            <option value="PlacaAnterior">Placa Anterior</option>
            <option value="NCI">NCI</option>
            <option value="Uso">Uso</option>
            <option value="Rfa">Rfa</option>]
            <option value="CVE">CVE</option>
            <option value="OficinaExpedidora">Oficina Expedidora</option>
            <option value="Movimiento">Movimiento</option>
            <option value="FechaExpedicion">Fecha de Expedición</option>      
        </select>
        <input type="submit" value="Enviar">
    </form>
    <br><br>
</body>
</html>

<?php
if(isset($_POST['Criterio']) && isset($_POST['Atributo'])){
    $Criterio = $_POST['Criterio'];
    $Atributo = $_POST['Atributo'];
    $SQL = "SELECT * FROM tarjetas WHERE $Atributo = '$Criterio'";
    include("../conexion.php");
    $Con = Conectar();
    $Result = mysqli_query($Con, $SQL);
    $Rows = mysqli_num_rows($Result);

    $Filas = mysqli_fetch_array($Result);

    if($Rows == 0){
        echo "No se encontraron resultados";
    }else{
        
        echo "<table border='1'>";
        echo "<tr>";
        echo "<th>ID Tarjeta</th>";
        echo "<th>Tipo de Servicio</th>";
        echo "<th>Folio</th>";
        echo "<th>Vigencia</th>";
        echo "<th>Placa</th>";
        echo "<th>ID Propietario</th>";
        echo "<th>ID Vehiculo</th>";
        echo "<th>Operación</th>";
        echo "<th>Placa Anterior</th>";
        echo "<th>NCI</th>";
        echo "<th>Uso</th>";
        echo "<th>Rfa</th>";
        echo "<th>CVE</th>";
        echo "<th>Oficina Expedidora</th>";
        echo "<th>Movimiento</th>";
        echo "<th>Fecha de Expedición</th>";
        echo "<th>Eliminnar</th>";
        echo "<th>Actualizar</th>";
        echo "</tr>";


        for($i = 0; $i < $Rows; $i++){
            echo "<tr>";
            echo "<td>".$Filas['IDTarjeta']."</td>";
            echo "<td>".$Filas['TipoServicio']."</td>";
            echo "<td>".$Filas['Folio']."</td>";
            echo "<td>".$Filas['Vigencia']."</td>";
            echo "<td>".$Filas['Placa']."</td>";
            echo "<td>".$Filas['IDPropietario']."</td>";
            echo "<td>".$Filas['IDVehiculo']."</td>";
            echo "<td>".$Filas['Operacion']."</td>";
            echo "<td>".$Filas['PlacaAnterior']."</td>";
            echo "<td>".$Filas['NCI']."</td>";
            echo "<td>".$Filas['Uso']."</td>";
            echo "<td>".$Filas['Rfa']."</td>";
            echo "<td>".$Filas['CVE']."</td>";
            echo "<td>".$Filas['OficinaExpedidora']."</td>";
            echo "<td>".$Filas['Movimiento']."</td>";
            echo "<td>".$Filas['FechaExpedicion']."</td>";
            echo "<td><a href='DTarjetas.php?IDTarjeta=" . $Filas['IDTarjeta'] . "'>Eliminar</a></td>";
            echo "<td><a href='UTarjetas.php?IDTarjeta=" . $Filas['IDTarjeta'] . 
                "&TipoServicio=" . $Filas['TipoServicio'] .
                "&Folio=" . $Filas['Folio'] .
                "&Vigencia=" . $Filas['Vigencia'] .
                "&Placa=" . $Filas['Placa'] .
                "&IDPropietario=" . $Filas['IDPropietario'] .
                "&IDVehiculo=" . $Filas['IDVehiculo'] .
                "&Operacion=" . $Filas['Operacion'] .
                "&PlacaAnterior=" . $Filas['PlacaAnterior'] .
                "&NCI=" . $Filas['NCI'] .
                "&Uso=" . $Filas['Uso'] .
                "&Rfa=" . $Filas['Rfa'] .
                "&CVE=" . $Filas['CVE'] .
                "&OficinaExpedidora=" . $Filas['OficinaExpedidora'] .
                "&Movimiento=" . $Filas['Movimiento'] .
                "&FechaExpedicion=" . $Filas['FechaExpedicion'] .
                "'>Actualizar</a></td>";
            echo "</tr>";

            $Filas = mysqli_fetch_array($Result);
        }
        echo "</table>";
    }
} 

?>