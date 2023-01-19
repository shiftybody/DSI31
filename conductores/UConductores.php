<?php include '../menu/MenuA.php'; ?>

<link rel="stylesheet" href="../assets/css/styles.css">

<div class="flex flex-col items-center">
    <div class="py-8 uppercase font-bold">
        <label for="conductores">
            <h1>
                Modificar Conductor
            </h1>
        </label>
    </div>
    <?php
    if (!(isset($_GET['IDConductor']))) {
        echo '<div class="flex justify-center flex-col text-center mb-6" style="    padding: 1.6em;
    border: 2px solid;
    border-radius: 5.5px;
    -webkit-box-shadow: -1px 9px 20px -13px rgb(0 0 0 / 68%);">
        <p>Para asegurarte que la información ingresada</p>
        <p>coincida con algun registro  favor de</p>
        <a  class="font-bold text-red-600 hover:drop-shadow-xl" href="./SConductores.php"> consultar aquí </a>
    </div>';
    }
    ?>
    
    <div >
    <form method="GET" action="UConductores.php" enctype="multipart/form-data">
        <label for="" class="label-form">ID del conductor</label>
        <input type="text" class="input-form" name="IDConductor" id="IDConductor" value="<?php isset($_GET['IDConductor']) ? print($_GET['IDConductor']): null ?>" required readonly>
        <br>
        <label for="" class="label-form">Fotografia</label>
        <input type="file" class="input-file mb-2 " id="Fotografia" name="Fotografia" value="<?php isset($_GET['Fotografia']) ? print($_GET['Fotografia']) : null ?>" required>
        <label for="" class="label-form">Nombre</label>
        <input type="text" class="input-form" id="Nombre" name="Nombre" value="<?php isset($_GET['Nombre']) ? print($_GET['Nombre']) : null ?>" required>
        <br>
        <label for="" class="label-form">Apellido Paterno</label>
        <input type="text" class="input-form" id="ApellidoPaterno" name="ApellidoPaterno" value="<?php isset($_GET['ApellidoPaterno']) ? print($_GET['ApellidoPaterno']) : null?>">
        <br>
        <label for="" class="label-form">Apellido Materno</label>
        <input type="text" class="input-form" id="ApellidoMaterno" name="ApellidoMaterno" value="<?php isset($_GET['ApellidoMaterno']) ? print($_GET['ApellidoMaterno']) : null ?>">
        <br>
        <label for="" class="label-form">FechaNacimiento</label>
        <input type="date" class="input-form" id="FechaNacimiento" name="FechaNacimiento" value="<?php isset($_GET['FechaNacimiento']) ? print($_GET['FechaNacimiento']) : null ?>" required>
        <br>
        <label for="" class="label-form">Firma</label>
        <input type="file" class="input-file mb-2 " id="Firma" name="Firma" value="<?php isset($_GET['Firma']) ? print($_GET['Firma']) : null?>" required>
         
        <label for="" class="label-form">Domicilio</label>
        <input type="text" class="input-form" id="Domicilio" name="Domicilio" maxlength="100" size="50" value="<?php isset($_GET['IDConductor']) ? print($_GET['Domicilio']) : null?>">
        <br>
        <label for="" class="label-form">GrupoSanguineo</label>
        <select id="GrupoSanguineo" class="input-form" name="GrupoSanguineo" required>
            <option value="Seleccionar una opción"></option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
        </select>
        <br>
        <div class="flex justify-center flex-wrap items-center py-2">
        <label for="" class="label-form pr-2" >Donador</label>
        <input type="radio" class="w-4 h-4 mx-1" id="Donador" name="Donador" value="Si" <?php if(isset($_GET['Donador'])){ if ($_GET['Donador'] == "Si") echo 'checked';}else null ?> required> Si
        <input type="radio" class="w-4 h-4 mx-1" id="Donador" name="Donador" value="No" <?php if(isset($_GET['Donador'])){ if ($_GET['Donador'] == "No") echo 'checked';}else null ?> required> No
        <br>
        </div>
        <label for="" class="label-form">Número Emergencia</label>
        <input type="phone" class="input-form" id="NumEmergencia" name="NumEmergencia" placeholder="123-425-457-8901" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}-[0-9]{4}" value="<?php isset($_GET['NumEmergencia']) ? print($_GET['NumEmergencia']) : null ?>" required>
        <br>
        <div class="flex justify-center items-center py-2">
        <label for="" class="label-form pr-2">Sexo</label>
        <input type="radio" class="w-4 h-4 mx-1" id="Sexo" name="Sexo" value="H" <?php if(isset($_GET['Sexo'])){ if ($_GET['Sexo'] == "H") echo 'checked';}else null ?> required> Hombre
        <input type="radio" class="w-4 h-4 mx-1" id="Sexo" name="Sexo" value="M" <?php if(isset($_GET['Sexo'])){ if ($_GET['Sexo'] == "M") echo 'checked';}else null ?> equired> Mujer

        </div>
        <label for="" class="label-form">Antiguedad</label>
        <input type="number" class="input-form" id="Antiguedad" name="Antiguedad" value="<?php isset($_GET['Antiguedad']) ? print($_GET['Antiguedad']) : null?>" min="0" max="99" size="10">
        <br>
        <label for="" class="label-form">Observaciones</label>
        <textarea id="Observaciones" class="input-form" name="Observaciones" cols="25" rows="4"><?php isset($_GET['Observaciones']) ? print($_GET['Observaciones']) : null?></textarea>
        
        <div class="text-center ">
            <button type="submit" class="bg-neutral-900 hover:bg-black text-neutral-200 active:bg-sky-700 text-sm font-bold uppercase px-6 py-3 
                      rounded drop-shadow-lg hover:shadow-xl outline-none 
                      focus:outline-none focus-blue-400 focus:bg-sky-700 hover:text-white mr-1 mb-1 w-full
                      " style="transition: all 0.15s ease 0s;">
                Actualizar
            </button>
        </div>
    </div>
    </form>
    <script>
        let GrupoSanguineo = document.getElementById("GrupoSanguineo");
        GrupoSanguineo.value = "<?php isset($_GET['GrupoSanguineo']) ? print($_GET['GrupoSanguineo']) : null?>";
    </script>


<?php
if (isset($_REQUEST['IDConductor'])) {

    $IDConductor = $_GET['IDConductor'];
    $Fotografia = $_GET['Fotografia'];
    $Nombre = $_GET['Nombre'];
    $ApellidoPaterno = $_GET['ApellidoPaterno'];
    $ApellidoMaterno = $_GET['ApellidoMaterno'];
    $FechaNacimiento = $_GET['FechaNacimiento'];
    $Firma = $_GET['Firma'];
    $Domicilio = $_GET['Domicilio'];
    $GrupoSanguineo = $_GET['GrupoSanguineo'];
    $Donador = $_GET['Donador'];
    $NumEmergencia = $_GET['NumEmergencia'];
    $Sexo = $_GET['Sexo'];
    $Antiguedad = $_GET['Antiguedad'];
    $Observaciones = $_GET['Observaciones'];


    $SQL = "UPDATE conductores SET Fotografia='$Fotografia', Nombre='$Nombre', 
        ApellidoPaterno='$ApellidoPaterno', ApellidoMaterno='$ApellidoMaterno', 
        FechaNacimiento='$FechaNacimiento', Firma='$Firma', Domicilio='$Domicilio', 
        GrupoSanguineo='$GrupoSanguineo', Donador='$Donador', NumEmergencia='$NumEmergencia', 
        Sexo='$Sexo', Antiguedad='$Antiguedad', Observaciones='$Observaciones' 
        WHERE IDConductor='$IDConductor'";

    include("../conexion.php");
    $Con = Conectar();
    $Result = Ejecutar($Con, $SQL);
    $FilasAfectadas = mysqli_affected_rows($Con);
    if ($FilasAfectadas > 0) {
        echo "<h1> Se actualizaron $FilasAfectadas registros </h1>";
    }
    Cerrar($Con);
} else {

}
?>

</div>
</body>

</html>