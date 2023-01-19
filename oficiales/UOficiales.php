<?php include '../menu/MenuA.php'; ?>

<link rel="stylesheet" href="../assets/css/styles.css">

<div class="flex flex-col items-center">
    <div class="py-8 uppercase font-bold">
        <label for="Oficial">
            <h1>
                Modificar Oficial
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
        <a  class="font-bold text-red-600 hover:drop-shadow-xl" href="./SOficiales.php"> consultar aquí </a>
    </div>';
    }
    ?>
    
    <div style="width:22%;">
    <form method="GET" action="UOficiales.php">

        <label for="" class="label-form"><strong> ID del Oficial</strong></label>
        <input type="text" class="input-form"  name="IDOficial" id="IDOficial" value="<?php isset($_GET['IDOficial']) ? print($_GET['IDOficial']): null ?>" readonly>
        <br>
        <label for="" class="label-form">Nombre</label>
        <input type="text" class="input-form"  id="Nombre" name="Nombre" value="<?php isset($_GET['Nombre']) ? print($_GET['Nombre']): null ?>" required maxlength="50">
        <br>
        <label for="" class="label-form">ApellidoPaterno</label>
        <input type="text" class="input-form"  id="ApellidoPaterno" name="ApellidoPaterno" value="<?php isset($_GET['ApellidoPaterno']) ? print($_GET['ApellidoMaterno']): null ?>" required>
        <br>
        <label for="" class="label-form">ApellidoMaterno</label>
        <input type="text" class="input-form"  id="ApellidoMaterno" name="ApellidoMaterno" value="<?php isset($_GET['ApellidoMaterno']) ? print($_GET['ApellidoMaterno']): null ?>" required>
        <br>
        <label for="" class="label-form">Grupo</label>
        <input type="text" class="input-form"  id="Grupo" name="Grupo" value="<?php isset($_GET['Grupo']) ? print($_GET['Grupo']): null ?>" required>
        <br>
        <label for="" class="label-form">Firma</label>
        <input type="text" class="input-form"  id="Firma" name="Firma" value="<?php isset($_GET['Firma']) ? print($_GET['Firma']): null ?>" required>
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

</body>

</html>

<?php

if (isset($_REQUEST['IDOficial'])) {
    $IDOficial = $_REQUEST['IDOficial'];
    $Nombre = $_REQUEST['Nombre'];
    $ApellidoPaterno = $_REQUEST['ApellidoPaterno'];
    $ApellidoMaterno = $_REQUEST['ApellidoMaterno'];
    $Grupo = $_REQUEST['Grupo'];
    $Firma = $_REQUEST['Firma'];

    $SQL = "UPDATE oficiales SET IDOficial='$IDOficial', Nombre='$Nombre', 
    ApellidoPaterno='$ApellidoPaterno', ApellidoMaterno='$ApellidoMaterno', 
    Grupo='$Grupo', Firma='$Firma' WHERE IDOficial='$IDOficial'";

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