<?php
    
    if (session_status() == PHP_SESSION_NONE) {
    session_start();
    }

    if($_SESSION['rol'] == 'user'){
      include '../menu/MenuU.php';
      
    } else if ($_SESSION['rol'] == 'admin') {
      include '../menu/MenuA.php';
    } else {
    session_destroy();
    header("Location: ../index.php");
  }

?>

  <link rel="stylesheet" href="../assets/css/styles.css">
  <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/all.css" />

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
    <div classs="mr-3">
        <input type="submit" value="Buscar" class="bg-neutral-900 hover:bg-black text-neutral-200 active:bg-sky-700 text-sm font-bold uppercase px-6 pt-[0.58rem] pb-[0.58rem] 
                      rounded drop-shadow-lg hover:shadow-xl outline-none 
                      focus:outline-none focus-blue-400 focus:bg-sky-700 hover:text-white mr-1 mb-2 w-full
                      " style="transition: all 0.15s ease 0s;">
    </div>
    </form>
    </div>
</div>
<div class="flex justify-center text-sm" >
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
    echo '<table class=" mr-4 ml-4 border-separate border-spacing-2 ">';
    echo '<tr>';
    echo '<th class=" border-b-2 border-neutral-400 drop-shadow-lg" >ID Conductor</th>';
    echo '<th class=" border-b-2 border-neutral-400 drop-shadow-lg">Fotografia</th>';
    echo '<th class=" border-b-2 border-neutral-400">Nombre</th>';
    echo '<th class=" border-b-2 border-neutral-400">Apellido Paterno</th>';
    echo '<th class=" border-b-2 border-neutral-400">Apellido Materno</th>';
    echo '<th class=" border-b-2 border-neutral-400">Fecha de Nacimiento</th>';
    echo '<th class=" border-b-2 border-neutral-400">Firma</th>';
    echo '<th class=" border-b-2 border-neutral-400">Domicilio</th>';
    echo '<th class=" border-b-2 border-neutral-400">Grupo Sanguineo</th>';
    echo '<th class=" border-b-2 border-neutral-400">Donador</th>';
    echo '<th class=" border-b-2 border-neutral-400">Numero de Emergencia</th>';
    echo '<th class=" border-b-2 border-neutral-400">Sexo</th>';
    echo '<th class=" border-b-2 border-neutral-400">Antiguedad</th>';
    echo '<th class=" border-b-2 border-neutral-400">Observaciones</th>';

    if($_SESSION['rol'] == 'user'){
      
      
    } else if ($_SESSION['rol'] == 'admin') {
    echo '<th class=" border-b-2 border-neutral-400">Eliminar</th>';
    echo '<th class=" border-b-2 border-neutral-400">Actualizar</th>';
    }

    echo "</tr>";

    for ($i = 0; $i < $Rows; $i++) {
        echo "<tr>";
        echo '<td class="icon-center" >' . $Fila[0] . '</td>';
        echo "<td>" . $Fila[1] . "</td>";
        echo "<td>" . $Fila[2] . "</td>";
        echo "<td>" . $Fila[3] . "</td>";
        echo "<td>" . $Fila[4] . "</td>";
        echo "<td>" . $Fila[5] . "</td>";
        echo "<td>" . $Fila[6] . "</td>";
        echo "<td>" . $Fila[7] . "</td>";
        echo '<td class="icon-center">' . $Fila[8] . "</td>";
        echo '<td class="icon-center">' . $Fila[9] . "</td>";
        echo '<td>' . $Fila[10] . '</td>';
        echo '<td class="icon-center">' . $Fila[11] . '</td>';
        echo '<td class="icon-center">' . $Fila[12] . '</td>';
        echo '<td class="icon-center">' . $Fila[13] . '</td>';

        if($_SESSION['rol'] == 'user'){
      
      
    } else if ($_SESSION['rol'] == 'admin') {
        echo '<td class="icon-center hover:text-red-600 hover:drop-shadow-lg " > ' . '<a href="DConductores.php? IDConductor=' . $Fila[0] . '"><i class="fa-solid fa-trash"></i></a>' . '</td>';
        echo '<td class="icon-center hover:text-yellow-500 hover:drop-shadow-lg " > ' . '<a href="UConductores.php' .
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
            '&Observaciones=' . $Fila[13] . '"><i class="fa-solid fa-pen"></i></a>' . '</td>';
    }
        echo "</tr>";

        $Fila = mysqli_fetch_row($Result);
    }
}

?>
</div>
</body>

</html>