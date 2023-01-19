<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Vehiculo</title>
</head>
<body>
    <form action="SVehiculos.php" method="post">
        <label for="">Criterio</lable>
        <input type="text" name="Criterio" id="Criterio" required>
        <label for=""> Atributos </label>
        <select name="Atributo" id="Atributo" required>
            <option value="">Selecciona un atributo</option>
            <option value="IDVehiculo">ID Vehiculo</option>
            <option value="NIV">NIV</option>
            <option value="Modelo">Modelo</option>
            <option value="Marca"> Marca</option>
            <option value="Linea">Linea</option>
            <option value="Sublinea">Sublinea</option>
            <option value="Origen">Origen</option>
            <option value="Color">Color</option>
            <option value="Clase">Clase</option>
            <option value="TipoVehiculo">TipoVehiculo</option>
            <option value="NumCilindros">Numero de Cilindros</option>
            <option value="Capacidad" >Capacidad</option>
            <option value="NumPuertas">Numero de Puertas</option>
            <option value="NumAsientos">Num de Asientos</option>]
            <option value="Combustible">Combustible</option>
            <option value="Transmision">Transmision</option>
            <option value="NumMotor">Num de Motor</option>
            <option value="NumSerie">Num de Serie</option>      
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
    $SQL = "SELECT * FROM vehiculos WHERE $Atributo = '$Criterio'";
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
        echo "<th>ID Vehiculo</th>";
        echo "<th>NIV</th>";
        echo "<th>Modelo</th>";
        echo "<th>Marca</th>";
        echo "<th>Linea</th>";
        echo "<th>Sublinea</th>";
        echo "<th>Origen</th>";
        echo "<th>Color</th>";
        echo "<th>Clase</th>";
        echo "<th>Tipo Vehiculo</th>";
        echo "<th>Numero de Cilindros</th>";
        echo "<th>Capacidad</th>";
        echo "<th>Numero de Puertas</th>";
        echo "<th>Numero de Asientos</th>";
        echo "<th>Combustible</th>";
        echo "<th>Transmision</th>";
        echo "<th>Numero de Motor</th>";
        echo "<th>Numero de Serie</th>";
        echo "<th>Eliminar</th>";
        echo "<th>Actualizar</th>";
        echo "</tr>";


        for($i = 0; $i < $Rows; $i++){
            echo "<tr>";
            echo "<td>".$Filas['IDVehiculo']."</td>";
            echo "<td>".$Filas['NIV']."</td>";
            echo "<td>".$Filas['Modelo']."</td>";
            echo "<td>".$Filas['Marca']."</td>";
            echo "<td>".$Filas['Linea']."</td>";
            echo "<td>".$Filas['Sublinea']."</td>";
            echo "<td>".$Filas['Origen']."</td>";
            echo "<td>".$Filas['Color']."</td>";
            echo "<td>".$Filas['Clase']."</td>";
            echo "<td>".$Filas['TipoVehiculo']."</td>";
            echo "<td>".$Filas['NumCilindros']."</td>";
            echo "<td>".$Filas['Capacidad']."</td>";
            echo "<td>".$Filas['NumPuertas']."</td>";
            echo "<td>".$Filas['NumAsientos']."</td>";
            echo "<td>".$Filas['Combustible']."</td>";
            echo "<td>".$Filas['Transmision']."</td>";
            echo "<td>".$Filas['NumMotor']."</td>";
            echo "<td>".$Filas['NumSerie']."</td>";
            echo "<td><a href='DVehiculos.php?NIV=".$Filas['NIV']."'>Eliminar</a></td>";
            echo "<td><a href='UVehiculos.php?IDVehiculo=".$Filas['IDVehiculo'] .
                "&NIV=".$Filas['NIV'] .
                "&Modelo=".$Filas['Modelo'] .
                "&Marca=".$Filas['Marca'] .
                "&Linea=".$Filas['Linea'] .
                "&Sublinea=".$Filas['Sublinea'] .
                "&Origen=".$Filas['Origen'] .
                "&Color=".$Filas['Color'] .
                "&Clase=".$Filas['Clase'] .
                "&TipoVehiculo=".$Filas['TipoVehiculo'] .
                "&NumCilindros=".$Filas['NumCilindros'] .
                "&Capacidad=".$Filas['Capacidad'] .
                "&NumPuertas=".$Filas['NumPuertas'] .
                "&NumAsientos=".$Filas['NumAsientos'] .
                "&Combustible=".$Filas['Combustible'] .
                "&Transmision=".$Filas['Transmision'] .
                "&NumMotor=".$Filas['NumMotor'] .
                "&NumSerie=".$Filas['NumSerie'] .
                "'>Actualizar</a></td>";
            echo "</tr>";

            
            $Filas = mysqli_fetch_array($Result);
        }
        echo "</table>";
    }
}

?>