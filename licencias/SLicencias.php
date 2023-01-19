<?php 

 session_start(); 

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
    <form action="SLicencias.php" method="POST" class="flex items-end">
        <div class="mr-3">
        <label for="" class="label-form">Criterio</label>
        <input type="text" name="Criterio" id="Criterio" class="input-form" required></input>
    </div>
    <div class="mr-3">
        <label for="" class="label-form"> Atributos </label>
        <select name="Atributo" id="Atributo" class="input-form" required>
            <option value="">Selecciona un atributo</option>
            <option value="IDLicencia">ID Licencia</option>
            <option value="IDConductor">ID Conductor</option>
            <option value="TipoLicencia">Tipo de Licencia</option>
            <option value="FechaExpedicion">Fecha de Expedicion</option>
            <option value="FechaVencimiento">Fecha de Vencimiento</option>
            <option value="AtributoD">Atributo Desconocido</option>
            <option value="Restricciones">Restricciones</option>
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
if (isset($_POST['Criterio']) && isset($_POST['Atributo'])) {
    $Criterio = $_POST['Criterio'];
    $Atributo = $_POST['Atributo'];
    if ($Atributo == "IDLicencia") {
        //convertir el primer caracter ascii a numero
        $ascii = ord(substr($Criterio, 0, 1));
        // concatenar el primer caracter ascii con el resto del id
        $Criterio = $ascii . substr($Criterio, 1);
        // eliminar el guion
        $Criterio = str_replace("-", "", $Criterio);
    }
    

    $SQL = "SELECT * FROM licencias WHERE $Atributo LIKE '%$Criterio%'";
    include("../conexion.php");
    $Con = Conectar();
    $Result = Ejecutar($Con, $SQL) or die("Error al insertar datos" . mysqli_error($Con));
    $Rows = mysqli_num_rows($Result);

    $Fila = mysqli_fetch_row($Result);

    // show all rows in a table html format
    echo '<table class=" mr-4 ml-4 border-separate border-spacing-2 ">';
    echo "<tr>";
    echo '<th class=" border-b-2 border-neutral-400 drop-shadow-lg" >ID Licencia</th>';
    echo '<th class=" border-b-2 border-neutral-400 drop-shadow-lg" >ID Conductor</th>';
    echo '<th class=" border-b-2 border-neutral-400 drop-shadow-lg" >Tipo de Licencia</th>';
    echo '<th class=" border-b-2 border-neutral-400 drop-shadow-lg" >Fecha de Expedicion</th>';
    echo '<th class=" border-b-2 border-neutral-400 drop-shadow-lg" >Fecha de Vencimiento</th>';
    echo '<th class=" border-b-2 border-neutral-400 drop-shadow-lg" >Atributo Desconocido</th>';
    echo '<th class=" border-b-2 border-neutral-400 drop-shadow-lg" >Restricciones</th>';
    echo '<th class=" border-b-2 border-neutral-400 drop-shadow-lg" >Eliminar</th>';
    echo '<th class=" border-b-2 border-neutral-400 drop-shadow-lg" >Actualizar</th>';
    echo "</tr>";

    for ($i = 0; $i < $Rows; $i++) {
        echo "<tr>";
        echo "<td>" . ParseID($Fila[0]) . "</td>";
        echo "<td>" . $Fila[1] . "</td>";
        echo "<td>" . $Fila[2] . "</td>";
        echo "<td>" . $Fila[3] . "</td>";
        echo "<td>" . $Fila[4] . "</td>";
        echo "<td>" . $Fila[5] . "</td>";
        echo "<td>" . $Fila[6] . "</td>";
        echo '<td class="icon-center hover:text-red-600" hover:drop-shadow-lg "><a href="DLicencias.php?IDLicencia=' . ParseID($Fila[0]) . '"><i class="fa-solid fa-trash"></i></a></td>';
        echo '<td class="icon-center hover:text-yellow-500 hover:drop-shadow-lg"><a href="ULicencias.php?IDLicencia=' . ParseID($Fila[0]) .
            "&IDConductor=" . $Fila[1] .
            "&TipoLicencia=" . $Fila[2] .
            "&FechaExpedicion=" . $Fila[3] .
            "&FechaVencimiento=" . $Fila[4] .
            "&AtributoD=" . $Fila[5] .
            '&Restricciones=' . $Fila[6] . '"><i class="fa-solid fa-pen"></i></a>' . '</td>';
            "'>Actualizar</a></td>";
        echo "</tr>";

        $Fila = mysqli_fetch_row($Result);
    }
    echo "</table>";

}

?>
</div>
</body>

</html>