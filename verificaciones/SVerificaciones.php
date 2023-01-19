<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Verificacion</title>
</head>
<body>
    <form action="SVerificaciones.php" method="post">
        <label for="">Criterio</lable>
        <input type="text" name="Criterio" id="Criterio" required>
        <label for=""> Atributos </label>
        <select name="Atributo" id="Atributo" required>
            <option value="">Selecciona un atributo</option>
            <option value="FolioVerificacion">Folio</option>
            <option value="IDTarjeta">ID Tarjeta Circulacion</option>
            <option value="EntidadFederativa">Entidad Federativa</option>
            <option value="Municipio"> Marca</option>
            <option value="NumCentro">Numero de Centro</option>
            <option value="NumLinea">Numero de Linea</option>
            <option value="NombreTecnico">Nombre del Tecnico</option>
            <option value="FechaExpedicion">Fecha de Expedicion</option>
            <option value="FechaVencimiento">Fecha de Vencimiento</option>
            <option value="HoraEntrada">Hora de Entrada</option>
            <option value="HoraSalida">Hora de Salida</option>
            <option value="MotivoVerificacion">Motivo</option>]
            <option value="Semestre">Semestre</option>
            <option value="Dictamen">Dictamen</option>
            <option value="Holograma">Holograma</option>    
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
    $SQL = "SELECT * FROM verificaciones WHERE $Atributo = '$Criterio'";
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
        echo "<th>Folio</th>";
        echo "<th>ID Tarjeta Circulacion</th>";
        echo "<th>Entidad Federativa</th>";
        echo "<th>Municipio</th>";
        echo "<th>Numero de Centro</th>";
        echo "<th>Numero de Linea</th>";
        echo "<th>Nombre del Tecnico</th>";
        echo "<th>Fecha de Expedicion</th>";
        echo "<th>Fecha de Vencimiento</th>";
        echo "<th>Hora de Entrada</th>";
        echo "<th>Hora de Salida</th>";
        echo "<th>Motivo</th>";
        echo "<th>Semestre</th>";
        echo "<th>Dictamen</th>";
        echo "<th>Holograma</th>";
        echo "<th>Eliminar</th>";
        echo "<th>Actualizar</th>";
        echo "</tr>";


        for($i = 0; $i < $Rows; $i++){
            echo "<tr>";
            echo "<td>" . $Filas['FolioVerificacion'] . "</td>";
            echo "<td>" . $Filas['IDTarjeta'] . "</td>";
            echo "<td>" . $Filas['EntidadFederativa'] . "</td>";
            echo "<td>" . $Filas['Municipio'] . "</td>";
            echo "<td>" . $Filas['NumCentro'] . "</td>";
            echo "<td>" . $Filas['NumLinea'] . "</td>";
            echo "<td>" . $Filas['NombreTecnico'] . "</td>";
            echo "<td>" . $Filas['FechaExpedicion'] . "</td>";
            echo "<td>" . $Filas['FechaVencimiento'] . "</td>";
            echo "<td>" . $Filas['HoraEntrada'] . "</td>";
            echo "<td>" . $Filas['HoraSalida'] . "</td>";
            echo "<td>" . $Filas['MotivoVerificacion'] . "</td>";
            echo "<td>" . $Filas['Semestre'] . "</td>";
            echo "<td>" . $Filas['Dictamen'] . "</td>";
            echo "<td>" . $Filas['Holograma'] . "</td>";
            echo "<td><a href='DVerificaciones.php?FolioVerificacion=" . $Filas['FolioVerificacion'] . "'>Eliminar</a></td>";
            echo "<td><a href='UVerificaciones.php?FolioVerificacion=" . $Filas['FolioVerificacion'] . 
                "&IDTarjeta=" . $Filas['IDTarjeta'] .
                "&EntidadFederativa=" . $Filas['EntidadFederativa'] .
                "&Municipio=" . $Filas['Municipio'] .
                "&NumCentro=" . $Filas['NumCentro'] .
                "&NumLinea=" . $Filas['NumLinea'] .
                "&NombreTecnico=" . $Filas['NombreTecnico'] .
                "&FechaExpedicion=" . $Filas['FechaExpedicion'] .
                "&FechaVencimiento=" . $Filas['FechaVencimiento'] .
                "&HoraEntrada=" . $Filas['HoraEntrada'] .
                "&HoraSalida=" . $Filas['HoraSalida'] .
                "&MotivoVerificacion=" . $Filas['MotivoVerificacion'] .
                "&Semestre=" . $Filas['Semestre'] .
                "&Dictamen=" . $Filas['Dictamen'] .
                "&Holograma=" . $Filas['Holograma'] . "'>Actualizar</a></td>";
                "'>Actualizar</a></td>";
            echo "</tr>";
            
            $Filas = mysqli_fetch_array($Result);
        }
        echo "</table>";
    }
} else {
    echo "No se han recibido datos";
}

?>