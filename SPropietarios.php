<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Propietario</title>
</head>
<body>
    <form action="SPropietarios.php" method="post">
        <label for="">Criterio</lable>
        <input type="text" name="Criterio" id="Criterio" required>
        <label for=""> Atributos </label>
        <select name="Atributo" id="Atributo" required>
            <option value="">Selecciona un atributo</option>
            <option value="IDPropietario">ID Propietario</option>
            <option value="RFC">RFC</option>
            <option value="Localidad">Localidad</option>
            <option value="Municipio">Municipio</option>
            <option value="Nombre">Nombre</option>
            <option value="ApellidoPaterno">Apellido Paterno</option>
            <option value="ApellidoMaterno">Apellido Materno</option>
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
    $SQL = "SELECT * FROM Propietarios WHERE $Atributo = '$Criterio'";
    include("conexion.php");
    $Con = Conectar();
    $Result = mysqli_query($Con, $SQL);
    $Rows = mysqli_num_rows($Result);

    $Filas = mysqli_fetch_array($Result);

    if($Rows == 0){
        echo "No se encontraron resultados";
    }else{
        echo "<table border='1'>";
        echo "<tr>";
        echo "<th>ID Propietario</th>";
        echo "<th>RFC</th>";
        echo "<th>Localidad</th>";
        echo "<th>Municipio</th>";
        echo "<th>Nombre</th>";
        echo "<th>Apellido Paterno</th>";
        echo "<th>Apellido Materno</th>";
        echo "</tr>";
    
        for($i = 0; $i < $Rows; $i++){
            echo "<tr>";
            echo "<td>" . $Filas['IDPropietario'] . "</td>";
            echo "<td>" . $Filas['RFC'] . "</td>";
            echo "<td>" . $Filas['Localidad'] . "</td>";
            echo "<td>" . $Filas['Municipio'] . "</td>";
            echo "<td>" . $Filas['Nombre'] . "</td>";
            echo "<td>" . $Filas['ApellidoPaterno'] . "</td>";
            echo "<td>" . $Filas['ApellidoMaterno'] . "</td>";
            echo "</tr>";
            $Filas = mysqli_fetch_array($Result);
        }
        echo "</table>";
    }
} else {
    echo "No se han recibido datos";
}

?>
