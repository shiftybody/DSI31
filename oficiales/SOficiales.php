<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Oficial</title>
</head> 
<body>
    <form action="SOficiales.php" method="get">
        <label for="">Criterio</label>
        <input type="text" name="Criterio" id="Criterio" required>
        <label for=""> Atributos </label>
        <select name="Atributo" class="Atributo" required>
            <option value="">Selecciona un atributo</option>
            <option value="IDOficial">ID Oficial</option>
            <option value="Nombre">Nombre</option>
            <option value="ApellidoPaterno">Apellido Paterno</option>
            <option value="ApellidoMaterno">Apellido Materno</option>
            <option value="Grupo">Grupo</option>
            <option value="Firma">Firma</option>
            <input type="submit" value="Enviar">
            <br><br>
    </form>
</body>
</html>

<?php
if(isset($_GET['Criterio']) && isset($_GET['Atributo'])){
    $Criterio = $_GET['Criterio'];
    $Atributo = $_GET['Atributo'];
    $SQL = "SELECT * FROM Oficiales WHERE $Atributo = '$Criterio'";
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
        echo "<th>ID Oficial</th>";
        echo "<th>Nombre</th>";
        echo "<th>Apellido Paterno</th>";
        echo "<th>Apellido Materno</th>";
        echo "<th>Grupo</th>";
        echo "<th>Firma</th>";
        echo "<th>Eliminar</th>";
        echo "<th>Actualizar</th>";
        echo "</tr>";
    
        for($i = 0; $i < $Rows; $i++){
            echo "<tr>";
            echo "<td>" . $Filas['IDOficial'] . "</td>";
            echo "<td>" . $Filas['Nombre'] . "</td>";
            echo "<td>" . $Filas['ApellidoPaterno'] . "</td>";
            echo "<td>" . $Filas['ApellidoMaterno'] . "</td>";
            echo "<td>" . $Filas['Grupo'] . "</td>";
            echo "<td>" . $Filas['Firma'] . "</td>";
            echo "<td><a href='DOficiales.php?IDOficial=" . $Filas['IDOficial'] . "'>Eliminar</a></td>";
            echo "<td><a href='UOficiales.php?IDOficial=" . $Filas['IDOficial'] . 
                "&Nombre=" . $Filas['Nombre'] .
                "&ApellidoPaterno=" . $Filas['ApellidoPaterno'] .
                "&ApellidoMaterno=" . $Filas['ApellidoMaterno'] .
                "&Grupo=" . $Filas['Grupo'] .
                "&Firma=" . $Filas['Firma'] . 
                "'>Actualizar</a></td>";
            echo "</tr>";

            $Filas = mysqli_fetch_array($Result);
        }
        
    }

}
?>