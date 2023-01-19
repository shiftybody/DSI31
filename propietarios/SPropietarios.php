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
<form action="SPropietarios.php" method="POST" class="flex items-end">
    <div class="mr-3">
        <label for="" class="label-form">Criterio</label>
        <input type="text" name="Criterio" id="Criterio" class="input-form" required></input>
    </div>
    <div class="mr-3">
        <label for="" class="label-form"> Atributos </label>
        <select name="Atributo" id="Atributo" class="input-form" required>
            <option value="">Selecciona un atributo</option>
            <option value="IDPropietario">ID Propietario</option>
            <option value="RFC">RFC</option>
            <option value="Localidad">Localidad</option>
            <option value="Municipio">Municipio</option>
            <option value="Nombre">Nombre</option>
            <option value="ApellidoPaterno">Apellido Paterno</option>
            <option value="ApellidoMaterno">Apellido Materno</option>
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
    $SQL = "SELECT * FROM Propietarios WHERE $Atributo = '$Criterio'";
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
        echo '<th class=" border-b-2 border-neutral-400 drop-shadow-lg" >ID Propietario</th>';
        echo '<th class=" border-b-2 border-neutral-400 drop-shadow-lg" >RFC</th>';
        echo '<th class=" border-b-2 border-neutral-400 drop-shadow-lg" >Localidad</th>';
        echo '<th class=" border-b-2 border-neutral-400 drop-shadow-lg" >Municipio</th>';
        echo '<th class=" border-b-2 border-neutral-400 drop-shadow-lg" >Nombre</th>';
        echo '<th class=" border-b-2 border-neutral-400 drop-shadow-lg" >Apellido Paterno</th>';
        echo '<th class=" border-b-2 border-neutral-400 drop-shadow-lg" >Apellido Materno</th>';
        echo '<th class=" border-b-2 border-neutral-400 drop-shadow-lg" >Eliminar</th>';
        echo '<th class=" border-b-2 border-neutral-400 drop-shadow-lg" >Actualizar</th>';
        echo "</tr>";
    
        for($i = 0; $i < $Rows; $i++){
            echo "<tr>";
            echo '<td class="icon-center" >' . $Filas['IDPropietario'] . "</td>";
            echo "<td>" . $Filas['RFC'] . "</td>";
            echo "<td>" . $Filas['Localidad'] . "</td>";
            echo "<td>" . $Filas['Municipio'] . "</td>";
            echo "<td>" . $Filas['Nombre'] . "</td>";
            echo "<td>" . $Filas['ApellidoPaterno'] . "</td>";
            echo "<td>" . $Filas['ApellidoMaterno'] . "</td>";
            echo "<td".' class="icon-center hover:text-red-600" hover:drop-shadow-lg" '."><a href='DPropietarios.php?RFC=" . $Filas['RFC'] . "'>".'<i class="fa-solid fa-trash"></i>'."</a></td>";
            echo "<td".' class="icon-center hover:text-yellow-500 hover:drop-shadow-lg "' ."><a href='UPropietarios.php?IDPropietario=" . $Filas['IDPropietario'] . 
                "&RFC=" . $Filas['RFC'] .
                "&Localidad=" . $Filas['Localidad'] .
                "&Municipio=" . $Filas['Municipio'] .
                "&Nombre=" . $Filas['Nombre'] .
                "&ApellidoPaterno=" . $Filas['ApellidoPaterno'] .
                "&ApellidoMaterno=" . $Filas['ApellidoMaterno'] .
                "'>". '<i class="fa-solid fa-pen"></i>'."</a></td>";
            echo "</tr>";

            $Filas = mysqli_fetch_array($Result);
        }
        echo "</table>";
    }
}

?>
