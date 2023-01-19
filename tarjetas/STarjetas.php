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
<form action="STarjetas.php" method="POST" class="flex items-end">
    <div class="mr-3">
        <label for="" class="label-form">Criterio</label>
        <input type="text" name="Criterio" id="Criterio" class="input-form" required></input>
    </div>
    <div class="mr-3">
        <label for="" class="label-form"> Atributos </label>
        <select name="Atributo" id="Atributo" class="input-form" required>
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
        
        echo '<table class=" mr-4 ml-4 border-separate border-spacing-2 ">';
        echo "<tr>";
        echo "<th".' class=" border-b-2 border-neutral-400 drop-shadow-lg"'.">ID Tarjeta</th>";
        echo "<th".' class=" border-b-2 border-neutral-400 drop-shadow-lg"'.">Tipo de Servicio</th>";
        echo "<th".' class=" border-b-2 border-neutral-400 drop-shadow-lg"'.">Folio</th>";
        echo "<th".' class=" border-b-2 border-neutral-400 drop-shadow-lg"'.">Vigencia</th>";
        echo "<th".' class=" border-b-2 border-neutral-400 drop-shadow-lg"'.">Placa</th>";
        echo "<th".' class=" border-b-2 border-neutral-400 drop-shadow-lg"'.">ID Propietario</th>";
        echo "<th".' class=" border-b-2 border-neutral-400 drop-shadow-lg"'.">ID Vehiculo</th>";
        echo "<th".' class=" border-b-2 border-neutral-400 drop-shadow-lg"'.">Operación</th>";
        echo "<th".' class=" border-b-2 border-neutral-400 drop-shadow-lg"'.">Placa Anterior</th>";
        echo "<th".' class=" border-b-2 border-neutral-400 drop-shadow-lg"'.">NCI</th>";
        echo "<th".' class=" border-b-2 border-neutral-400 drop-shadow-lg"'.">Uso</th>";
        echo "<th".' class=" border-b-2 border-neutral-400 drop-shadow-lg"'.">Rfa</th>";
        echo "<th".' class=" border-b-2 border-neutral-400 drop-shadow-lg"'.">CVE</th>";
        echo "<th".' class=" border-b-2 border-neutral-400 drop-shadow-lg"'.">Oficina Expedidora</th>";
        echo "<th".' class=" border-b-2 border-neutral-400 drop-shadow-lg"'.">Movimiento</th>";
        echo "<th".' class=" border-b-2 border-neutral-400 drop-shadow-lg"'.">Fecha de Expedición</th>";
        echo "<th".' class=" border-b-2 border-neutral-400 drop-shadow-lg"'.">Eliminnar</th>";
        echo "<th".' class=" border-b-2 border-neutral-400 drop-shadow-lg"'.">Actualizar</th>";
        echo "</tr>";


        for($i = 0; $i < $Rows; $i++){
            echo "<tr>";
            echo "<td ".'class="icon-center"'.">".$Filas['IDTarjeta']."</td>";
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
            echo "<td".' class="icon-center hover:text-yellow-500 hover:drop-shadow-lg "'."><a href='DTarjetas.php?IDTarjeta=" . $Filas['IDTarjeta'] . "'>".'<i class="fa-solid fa-trash"></i>'."</a></td>";
            echo "<td".' class="icon-center hover:text-yellow-500 hover:drop-shadow-lg "'."><a href='UTarjetas.php?IDTarjeta=" . $Filas['IDTarjeta'] . 
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
                "'>".'<i class="fa-solid fa-pen"></i>'."</a></td>";
            echo "</tr>";

            $Filas = mysqli_fetch_array($Result);
        }
        echo "</table>";
    }
} 

?>

</div>
</body>

</html>