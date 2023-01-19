<?php include '../menu/MenuA.php' ?>

  <link rel="stylesheet" href="../assets/css/styles.css">
  <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/all.css" />

<div class="flex flex-col items-center">
    <div class="py-8" >
<form action="SMultas.php" method="GET" class="flex items-end">
    <div class="mr-3">
        <label for="" class="label-form">Criterio</label>
        <input type="text" name="Criterio" id="Criterio" class="input-form" required></input>
    </div>
    <div class="mr-3">
        <label for="" class="label-form"> Atributos </label>
        <select name="Atributo" id="Atributo" class="input-form" required>
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
            <option value="NoParteAccidente">No. de Partes</option>
            <option value="Convenio">Convenio</option>
            <option value="PuestaDisposicion">Puesto a disposicion</option>
            <option value="Deposito">Deposito</option>
            <option value="ObservacionConductor">Observaciones del Conductor</option>
            <option value="ObservacionOficial">Observaciones del Agente</option>
            <option value="CalificacionBoleta">Calificacion</option>
            <option value="IDLicencia">ID Licencia</option>
            <option value="IDVehiculo">ID Vehiculo</option>
            <option value="IDTarjeta">ID Tarjeta</option>
            <option value="IDOficial">ID Oficial</option>
        </select>
</div>
    <div classs="mr-3">
        <input type="submit" value="Enviar" class="bg-neutral-900 hover:bg-black text-neutral-200 active:bg-sky-700 text-sm font-bold uppercase px-6 pt-[0.58rem] pb-[0.58rem] 
                      rounded drop-shadow-lg hover:shadow-xl outline-none 
                      focus:outline-none focus-blue-400 focus:bg-sky-700 hover:text-white mr-1 mb-2 w-full
                      " style="transition: all 0.15s ease 0s;">
    </div>
    </form>
    <script>
        const selectElement = document.querySelector('.Atributo');

        selectElement.addEventListener('change', (event) => {
            if (event.target.value == "IDLicencia") {
                document.getElementById("Criterio").placeholder = "Q12345-67";
            }
        });
    </script>
    </div>
</div>
<div class="flex justify-center text-sm" >
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

    include("../conexion.php");
    $Con = Conectar();
    $Result = Ejecutar($Con, $SQL) or die("Error al insertar datos" . mysqli_error($Con));
    $Rows = mysqli_num_rows($Result);

    $Fila = mysqli_fetch_array($Result);

    //show all rows in table
    echo '<table class=" mr-4 ml-4 border-separate border-spacing-2 ">';
    echo "<tr>";
    echo '<th class=" border-b-2 border-neutral-400">ID Multa</th>';
    echo '<th class=" border-b-2 border-neutral-400">Fecha y Hora</th>';
    echo '<th class=" border-b-2 border-neutral-400">Reporte de Sección</th>';
    echo '<th class=" border-b-2 border-neutral-400">Nombre Via</th>';
    echo '<th class=" border-b-2 border-neutral-400">Kilometro</th>';
    echo '<th class=" border-b-2 border-neutral-400">Sentido</th>';
    echo '<th class=" border-b-2 border-neutral-400">Referencia</th>';
    echo '<th class=" border-b-2 border-neutral-400">Municipio</th>';
    echo '<th class=" border-b-2 border-neutral-400">Articulo</th>';
    echo '<th class=" border-b-2 border-neutral-400">Motivo</th>';
    echo '<th class=" border-b-2 border-neutral-400">Garantia Retenida</th>';
    echo '<th class=" border-b-2 border-neutral-400">No. de Partes</th>';
    echo '<th class=" border-b-2 border-neutral-400">Convenio</th>';
    echo '<th class=" border-b-2 border-neutral-400">Puesto a disposicion</th>';
    echo '<th class=" border-b-2 border-neutral-400">Deposito</th>';
    echo '<th class=" border-b-2 border-neutral-400">Observaciones del Conductor</th>';
    echo '<th class=" border-b-2 border-neutral-400">Observaciones del Oficial</th>';
    echo '<th class=" border-b-2 border-neutral-400">Calificacion Boleta</th>';
    echo '<th class=" border-b-2 border-neutral-400">IDLicencia</th>';
    echo '<th class=" border-b-2 border-neutral-400">IDVehiculo</th>';
    echo '<th class=" border-b-2 border-neutral-400">IDTarjeta</th>';
    echo '<th class=" border-b-2 border-neutral-400">IDOficial</th>';
    echo '<th class=" border-b-2 border-neutral-400">Eliminar</th>';
    echo '<th class=" border-b-2 border-neutral-400">Actualizar</th>';
    echo '</tr>';

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
        echo "<td>" . ParseID($Fila[18]) . "</td>";
        echo "<td>" . $Fila[19] . "</td>";
        echo "<td>" . $Fila[20] . "</td>";
        echo "<td>" . $Fila[21] . "</td>";
        echo '<td class="icon-center hover:text-red-600" hover:drop-shadow-lg "><a href="DMultas.php?IDMulta=' . $Fila[0] . '"><i class="fa-solid fa-trash"></i></a>' . "</td>";
        echo "<td ><a href='UMultas.php?IDMulta=" . $Fila[0] .
            "&Fecha=" . substr($Fila[1], 0, 10) .
            "&Hora=" . substr($Fila[1], 11, 8) .
            "&ReporteSeccion=" . $Fila[2] .
            "&NombreVia=" . $Fila[3] .
            "&Kilometro=" . $Fila[4] .
            "&DireccionSentido=" . $Fila[5] .
            "&Referencia=" . $Fila[6] .
            "&Municipio=" . $Fila[7] .
            "&Articulo=" . $Fila[8] .
            "&Motivo=" . $Fila[9] .
            "&GarantiaRetenida=" . $Fila[10] .
            "&NoParteAccidente=" . $Fila[11] .
            "&Convenio=" . $Fila[12] .
            "&PuestaDisposicion=" . $Fila[13] .
            "&Deposito=" . $Fila[14] .
            "&ObservacionConductor=" . $Fila[15] .
            "&ObservacionOficial=" . $Fila[16] .
            "&CalificacionBoleta=" . $Fila[17] .
            "&IDLicencia=" . ParseID($Fila[18]) .
            "&IDVehiculo=" . $Fila[19] .
            "&IDTarjeta=" . $Fila[20] .
            "&IDOficial=" . $Fila[21] .  
            "'><i class='fa-solid fa-pen'></i></a>" . "</td>";
        echo "</tr>";
        $Fila = mysqli_fetch_array($Result);
    }
} 
?>
</div>
</body>

</html>