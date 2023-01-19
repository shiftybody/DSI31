<?php include '../menu/MenuA.php' ?>

  <link rel="stylesheet" href="../assets/css/styles.css">
  <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/all.css" />

<div class="flex flex-col items-center">
    <div class="py-8" >
<form action="SVerificaciones.php" method="POST" class="flex items-end">
    <div class="mr-3">
        <label for="" class="label-form">Criterio</label>
        <input type="text" name="Criterio" id="Criterio" class="input-form" required></input>
    </div>
    <div class="mr-3">
        <label for="" class="label-form"> Atributos </label>
        <select name="Atributo" id="Atributo" class="input-form" required>
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
    $SQL = "SELECT * FROM verificaciones WHERE $Atributo = '$Criterio'";
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
        echo "<th".' class=" border-b-2 border-neutral-400 drop-shadow-lg" '.">Folio</th>";
        echo "<th".' class=" border-b-2 border-neutral-400 drop-shadow-lg" '.">ID Tarjeta Circulacion</th>";
        echo "<th".' class=" border-b-2 border-neutral-400 drop-shadow-lg" '.">Entidad Federativa</th>";
        echo "<th".' class=" border-b-2 border-neutral-400 drop-shadow-lg" '.">Municipio</th>";
        echo "<th".' class=" border-b-2 border-neutral-400 drop-shadow-lg" '.">Numero de Centro</th>";
        echo "<th".' class=" border-b-2 border-neutral-400 drop-shadow-lg" '.">Numero de Linea</th>";
        echo "<th".' class=" border-b-2 border-neutral-400 drop-shadow-lg" '.">Nombre del Tecnico</th>";
        echo "<th".' class=" border-b-2 border-neutral-400 drop-shadow-lg" '.">Fecha de Expedicion</th>";
        echo "<th".' class=" border-b-2 border-neutral-400 drop-shadow-lg" '.">Fecha de Vencimiento</th>";
        echo "<th".' class=" border-b-2 border-neutral-400 drop-shadow-lg" '.">Hora de Entrada</th>";
        echo "<th".' class=" border-b-2 border-neutral-400 drop-shadow-lg" '.">Hora de Salida</th>";
        echo "<th".' class=" border-b-2 border-neutral-400 drop-shadow-lg" '.">Motivo</th>";
        echo "<th".' class=" border-b-2 border-neutral-400 drop-shadow-lg" '.">Semestre</th>";
        echo "<th".' class=" border-b-2 border-neutral-400 drop-shadow-lg" '.">Dictamen</th>";
        echo "<th".' class=" border-b-2 border-neutral-400 drop-shadow-lg" '.">Holograma</th>";
        echo "<th".' class=" border-b-2 border-neutral-400 drop-shadow-lg" '.">Eliminar</th>";
        echo "<th".' class=" border-b-2 border-neutral-400 drop-shadow-lg" '.">Actualizar</th>";
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
            echo "<td".' class="icon-center hover:text-red-600 hover:drop-shadow-lg "'."><a href='DVerificaciones.php?FolioVerificacion=" . $Filas['FolioVerificacion'] . "'>".'<i class="fa-solid fa-trash"></i>'."</a></td>";
            echo "<td".' class="icon-center hover:text-yellow-500 hover:drop-shadow-lg "'."><a href='UVerificaciones.php?FolioVerificacion=" . $Filas['FolioVerificacion'] . 
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
                "&Holograma=" . $Filas['Holograma'] . "'>".'<i class="fa-solid fa-pen"></i>'."</a></td>";
    
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