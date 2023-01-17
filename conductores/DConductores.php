<?php include '../menu/MenuA.php' ?>

<link rel="stylesheet" href="../assets/css/styles.css">

<div class="flex flex-col items-center">
    <div class="py-8" >
<form action="DConductores.php" method="POST" class="flex items-end">
    <div class="mr-3">
        <label for="" class="label-form">ID del Conductor</label>
        <input type="text" name="Criterio" id="Criterio" class="input-form" value="<?php isset($_GET['IDConductor']) ? print($_GET['IDConductor']) : null?>"  required></input>
    </div>

    <div classs="mr3">
        <input type="submit" value="Eliminar" class="bg-neutral-900 hover:bg-black text-neutral-200 active:bg-sky-700 text-sm font-bold uppercase px-6 pt-[0.58rem] pb-[0.58rem] 
                      rounded drop-shadow-lg hover:shadow-xl outline-none 
                      focus:outline-none focus-blue-400 focus:bg-sky-700 hover:text-white mr-1 mb-2 w-full
                      " style="transition: all 0.15s ease 0s;">
    </div>
    
    </form>
    </div>

<?php

if (isset($_GET['IDConductor'])) {

    $IDConductor = $_GET['IDConductor'];
    
    $SQL = "DELETE FROM conductores WHERE IDConductor = $IDConductor";

    include("../conexion.php");
    $Con = Conectar();
    $Result = Ejecutar($Con, $SQL);

    print("<H1>Numero de Filas Eliminadas: "
             . mysqli_affected_rows($Con)) . " </h1>";
            
    Cerrar($Con);

}
    
?>
</div>
</body>

</html>