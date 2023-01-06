<?php include '../menu/MenuA.php' ?>
<link rel="stylesheet" href="../assets/css/styles.css">

<div class="flex flex-col items-center">
    <div class="py-8" >
<form action="SConductores.php" method="POST" class="flex items-end">
    <div class="mr-3">
        <label for="" class="label-form">Criterio</label>
        <input type="text" name="Criterio" id="Criterio" class="input-form" required></input>
    </div>
    <div class="mr-3">
        <label for="" class="label-form"> Atributos </label>
        <select name="Atributo" id="Atributo" class="input-form" required>
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
        </select>
    </div>
    <div classs="mr3">
        <input type="submit" value="Enviar" class="bg-neutral-900 hover:bg-black text-neutral-200 active:bg-sky-700 text-sm font-bold uppercase px-6 pt-[0.58rem] pb-[0.58rem] 
                      rounded drop-shadow-lg hover:shadow-xl outline-none 
                      focus:outline-none focus-blue-400 focus:bg-sky-700 hover:text-white mr-1 mb-2 w-full
                      " style="transition: all 0.15s ease 0s;">
    </div>
    
    </form>
    </div>
</div>
</body>

</html>
<?php
if (isset($_POST['Criterio']) && !empty($_POST['Criterio']) && isset($_POST['Atributo']) && !empty($_POST['Atributo'])) {
    $Criterio = $_POST['Criterio'];
    $Atributo = $_POST['Atributo'];
    $SQL = "SELECT * FROM conductores WHERE $Atributo LIKE '%$Criterio%'";
    include("../conexion.php");
    $Con = Conectar();
    $Result = Ejecutar($Con, $SQL) or die("Error al insertar datos" . mysqli_error($Con));
    $Rows = mysqli_num_rows($Result);

    $Fila = mysqli_fetch_row($Result);

    //show all rows in table
    echo "<table>";
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
            '&NumEmergencia=' . $Fila[10] .
            '&Sexo=' . $Fila[11] .
            '&Antiguedad=' . $Fila[12] .
            '&Observaciones=' . $Fila[13] . '">Actualizar</a>' . '</td>';
        echo "</tr>";

        $Fila = mysqli_fetch_row($Result);
    }
}

?>