<?php include '../menu/MenuA.php' ?>

  <link rel="stylesheet" href="../assets/css/styles.css">
  <link rel="stylesheet" href="../node_modules/@fortawesome/fontawesome-free/css/all.css" />

<div class="flex flex-col items-center">
    <div class="py-8" >
<form action="SVehiculos.php" method="POST" class="flex items-end">
    <div class="mr-3">
        <label for="" class="label-form">Criterio</label>
        <input type="text" name="Criterio" id="Criterio" class="input-form" required></input>
    </div>
    <div class="mr-3">
        <label for="" class="label-form"> Atributos </label>
        <select name="Atributo" id="Atributo" class="input-form" required>
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
    $SQL = "SELECT * FROM vehiculos WHERE $Atributo = '$Criterio'";
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
        echo "<th".' class=" border-b-2 border-neutral-400"'.">ID Vehiculo</th>";
        echo "<th".' class=" border-b-2 border-neutral-400"'.">NIV</th>";
        echo "<th".' class=" border-b-2 border-neutral-400"'.">Modelo</th>";
        echo "<th".' class=" border-b-2 border-neutral-400"'.">Marca</th>";
        echo "<th".' class=" border-b-2 border-neutral-400"'.">Linea</th>";
        echo "<th".' class=" border-b-2 border-neutral-400"'.">Sublinea</th>";
        echo "<th".' class=" border-b-2 border-neutral-400"'.">Origen</th>";
        echo "<th".' class=" border-b-2 border-neutral-400"'.">Color</th>";
        echo "<th".' class=" border-b-2 border-neutral-400"'.">Clase</th>";
        echo "<th".' class=" border-b-2 border-neutral-400"'.">Tipo Vehiculo</th>";
        echo "<th".' class=" border-b-2 border-neutral-400"'.">Numero de Cilindros</th>";
        echo "<th".' class=" border-b-2 border-neutral-400"'.">Capacidad</th>";
        echo "<th".' class=" border-b-2 border-neutral-400"'.">Numero de Puertas</th>";
        echo "<th".' class=" border-b-2 border-neutral-400"'.">Numero de Asientos</th>";
        echo "<th".' class=" border-b-2 border-neutral-400"'.">Combustible</th>";
        echo "<th".' class=" border-b-2 border-neutral-400"'.">Transmision</th>";
        echo "<th".' class=" border-b-2 border-neutral-400"'.">Numero de Motor</th>";
        echo "<th".' class=" border-b-2 border-neutral-400"'.">Numero de Serie</th>";
        echo "<th".' class=" border-b-2 border-neutral-400"'.">Eliminar</th>";
        echo "<th".' class=" border-b-2 border-neutral-400"'.">Actualizar</th>";
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
            echo "<td".' class="icon-center hover:text-red-600 hover:drop-shadow-lg "'."><a href='DVehiculos.php?NIV=".$Filas['NIV']."'>".'<i class="fa-solid fa-trash"></i>'."</a></td>";
            echo "<td".' class="icon-center hover:text-yellow-500 hover:drop-shadow-lg "'."><a href='UVehiculos.php?IDVehiculo=".$Filas['IDVehiculo'] .
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