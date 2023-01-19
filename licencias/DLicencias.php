<?php include '../menu/MenuA.php' ?>

<link rel="stylesheet" href="../assets/css/styles.css">

<div class="flex flex-col  items-center">
    <div class="py-8" >
<form action="DLicencia.php" method="GET" class="flex justify-center items-end ">
    <div class="mr-3">
        <label for="" class="label-form">ID Licencia</label>
        <input type="text" name="Criterio" id="Criterio" class="input-form" value="<?php isset($_GET['IDConductor']) ? print($_GET['IDConductor']) : null?>"  required></input>
    </div>
    <div classs="mr3">
        <input type="submit" value="Eliminar" class="bg-neutral-900 hover:bg-black text-neutral-200 active:bg-sky-700 text-sm font-bold uppercase px-6 pt-[0.58rem] pb-[0.58rem] 
                      rounded drop-shadow-lg hover:shadow-xl outline-none 
                      focus:outline-none focus-blue-400 focus:bg-sky-700 hover:text-white mr-1 mb-2 w-full
                      " style="transition: all 0.15s ease 0s;">
    </div>
</form>
    <div class="flex flex-col justify-center items-center hidden" id="alert">
        <i class="fa-solid fa-triangle-exclamation p-2 text-7xl text-yellow-600"></i>
        <p  style="padding-top: .5em;" > 
        Antes de eliminar un registro favor de consultar </p>  
        <p >que la información sea correcta</p>
        <a class="font-bold mt-2 text-red-600 hover:drop-shadow-xl" href="./SLicencias.php">
              Ir a Consultar 
        </a>
    </div>
</div>

<?php

    if(isset($_GET['IDLicencia'])){

        $IDLicencia = $_GET['IDLicencia'];
    //convertir el primer caracter ascii a numero
    $ascii = ord(substr($IDLicencia, 0, 1));
    // concatenar el primer caracter ascii con el resto del id
    $IDLicencia = $ascii . substr($IDLicencia, 1);
    // eliminar el guion
    $IDLicencia = str_replace("-", "", $IDLicencia);

    $SQL = "DELETE FROM licencias WHERE IDLicencia = '$IDLicencia'";

    include("../conexion.php");
    $Con = Conectar();
    $Result = Ejecutar($Con, $SQL) or die("Error al eliminar datos" . mysqli_error($Con));

    print("<br> Numero de Filas Eliminadas:" . mysqli_affected_rows($Con));

    Cerrar($Con);

    } else{
        echo '<script>';
        echo " document.getElementById('Criterio').readOnly = true;";
        echo ' const alert = document.getElementById("alert").setAttribute("style", "display: flex;")';
        echo '</script>';
    }


?>