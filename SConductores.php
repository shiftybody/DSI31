<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Conductor</title>
</head>

<body>
    <!-- filtrar los datos -->
    <form action="SConductores.php" method="POST">
        <label for="">Criterio</label>
        <input type="text" name="Criterio" id="Criterio" required>
        <label for=""> Atributos </label>
        <select name="Atributo" id="Atributo" required>
            <option value="">Selecciona un Atributo</option>
            <option value="IDconductor">ID Conductor</option>
            <option value="Fotografia">Fotografia</option>
            <option value="Nombre">Nombre</option>
            <option value="ApellidoPaterno">Apellido Paterno</option>
            <option value="ApellidoMaterno">Apellido Materno</option>
            <option value="FechaNacimiento">Fecha de Nacimiento</option>
            <option value="Firma">Firma</option>
            <option value="Domicilio">Domicilio</option>
            <option value="GrupoSanguineo">Grupo Sanguineo</option>
            <option value="Donador">Donador</option>
            <option value="NumEmergencia">Numero de Emergencia</option>
            <option value="Sexo">Sexo</option>
            <option value="Antiguedad">Antiguedad</option>
            <option value="Observaciones">Observaciones</option>
            <input type="submit" value="Enviar">
        </select>
    </form>
    <br>
</body>

</html>

<?php
if (isset($_POST['Criterio']) && !empty($_POST['Criterio']) && isset($_POST['Atributo']) && !empty($_POST['Atributo'])) {
    $Criterio = $_POST['Criterio'];
    $Atributo = $_POST['Atributo'];
    $SQL = "SELECT * FROM conductores WHERE $Atributo LIKE '%$Criterio%'";
    include("conexion.php");
    $Con = Conectar();
    $Result = Ejecutar($Con, $SQL) or die("Error al insertar datos" . mysqli_error($Con));
    $Rows = mysqli_num_rows($Result);

    $Fila = mysqli_fetch_row($Result);

    //show all rows in table
    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>ID Conductor</th>";
    echo "<th>Fotografia</th>";
    echo "<th>Nombre</th>";
    echo "<th>Apellido Paterno</th>";
    echo "<th>Apellido Materno</th>";
    echo "<th>Fecha de Nacimiento</th>";
    echo "<th>Firma</th>";
    echo "<th>Domicilio</th>";
    echo "<th>Grupo Sanguineo</th>";
    echo "<th>Donador</th>";
    echo "<th>Numero de Emergencia</th>";
    echo "<th>Sexo</th>";
    echo "<th>Antiguedad</th>";
    echo "<th>Observaciones</th>";
    echo "<th>Eliminar</th>";
    echo "<th>Actualizar</th>";
    echo "</tr>";

    for ($i = 0; $i < $Rows; $i++) {
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

        echo '<td>' . '<a href="DConductores.php?IDConductor=' . $Fila[0] . '">Eliminar</a>' . '</td>';
        echo '<td>' . '<a href="UConductores.php' .
            '?IDConductor=' . $Fila[0] .
            '&Fotografia=' . $Fila[1] .
            '&Nombre=' . $Fila[2] .
            '&ApellidoPaterno=' . $Fila[3] .
            '&ApellidoMaterno=' . $Fila[4] .
            '&FechaNacimiento=' . $Fila[5] .
            '&Firma=' . $Fila[6] .
            '&Domicilio=' . $Fila[7] .
            '&GrupoSanguineo=' . $Fila[8] .
            '&Donador=' . $Fila[9] .
            '&NumEmergenica=' . $Fila[10] .
            '&Sexo=' . $Fila[11] .
            '&Antiguedad=' . $Fila[12] .
            '&Observaciones=' . $Fila[13] . '">Actualizar</a>' . '</td>';
        echo "</tr>";
        $Fila = mysqli_fetch_row($Result);
    }
} else {
    echo "No se ha ingresado ningun criterio";
}

?>