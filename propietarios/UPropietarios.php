<?php include '../menu/MenuA.php'; ?>

<link rel="stylesheet" href="../assets/css/styles.css">

<div class="flex flex-col items-center">
    <div class="py-8 uppercase font-bold">
        <label for="propietarios">
            <h1>
                Modificar Propietario
            </h1>
        </label>
    </div>
    <?php
    if (!(isset($_GET['IDPropietario']))) {
        echo '<div class="flex justify-center flex-col text-center mb-6" style="    padding: 1.6em;
    border: 2px solid;
    border-radius: 5.5px;
    -webkit-box-shadow: -1px 9px 20px -13px rgb(0 0 0 / 68%);">
        <p>Para asegurarte que la información ingresada</p>
        <p>coincida con algun registro  favor de</p>
        <a  class="font-bold text-red-600 hover:drop-shadow-xl" href="./SPropietarios.php"> consultar aquí </a>
    </div>';
    }
    ?>
    
    <div style="width: 22% ;" >
    <form method="GET" action="UPropietarios.php">
        <label for="" class="label-form" ><strong> Ingrese el ID del Propietario</strong></label>
        <input type="text"  class="input-form" name="IDPropietario" id="IDPropietario" value="<?php isset($_GET['IDPropietario']) ? print($_GET['IDPropietario']): null ?>"  required>
        <br>
        <label for="" class="label-form">Nombre</label>
        <input type="text" class="input-form" id="Nombre" name="Nombre" value="<?php isset($_GET['Nombre']) ? print($_GET['Nombre']): null ?>"  required>
        <br>
        <label for="" class="label-form">ApellidoPaterno</label>
        <input type="text" class="input-form" id="ApellidoPaterno" name="ApellidoPaterno" value="<?php isset($_GET['ApellidoPaterno']) ? print($_GET['ApellidoPaterno']): null ?>"  required>
        <br>
        <label for="" class="label-form">ApellidoMaterno</label>
        <input type="text" class="input-form" id="ApellidoMaterno" name="ApellidoMaterno" value="<?php isset($_GET['ApellidoMaterno']) ? print($_GET['ApellidoMaterno']): null ?>"  required>
        <br>
        <label for="" class="label-form">Localidad</label>
        <input type="text" class="input-form" id="Localidad" name="Localidad" value="<?php isset($_GET['Localidad']) ? print($_GET['Localidad']): null ?>"  required>
        <br>
        <label for="" class="label-form">Municipio</label>
        <input type="text" class="input-form" id="Municipio" name="Municipio" value="<?php isset($_GET['Municipio']) ? print($_GET['Municipio']): null ?>"  required>
        <br>
        <label for="" class="label-form">RFC</label>
        <input type="text" class="input-form" id="RFC" name="RFC" value="<?php isset($_GET['RFC']) ? print($_GET['RFC']): null ?>"  required minlength="10" maxlength="13">
        <br>
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

<?php

if(isset($_REQUEST['IDPropietario'])){

    $IDPropietario = $_REQUEST['IDPropietario'];
    $Nombre = $_REQUEST['Nombre'];
    $ApellidoPaterno = $_REQUEST['ApellidoPaterno'];
    $ApellidoMaterno = $_REQUEST['ApellidoMaterno'];
    $Localidad = $_REQUEST['Localidad'];
    $Municipio = $_REQUEST['Municipio'];
    $RFC = $_REQUEST['RFC'];
    
    $SQL = "UPDATE propietarios SET IDPropietario='$IDPropietario', Nombre='$Nombre', 
    ApellidoPaterno='$ApellidoPaterno', ApellidoMaterno='$ApellidoMaterno', 
    Localidad='$Localidad', Municipio='$Municipio', RFC='$RFC' WHERE IDPropietario='$IDPropietario'";

    include("../conexion.php");
    $Con = Conectar();
    $Result = Ejecutar($Con, $SQL);
    $FilasAfectadas = mysqli_affected_rows($Con);
    if ($FilasAfectadas > 0) {
        echo "Se actualizaron $FilasAfectadas registros";
    }
    Cerrar($Con);
}
?>

</div>
</body>

</html>