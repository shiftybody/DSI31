<?php include '../menu/MenuA.php'; ?>

<link rel="stylesheet" href="../assets/css/styles.css">

<div class="flex flex-col items-center">
    <div class="py-8 uppercase font-bold">
        <label for="licencias">
            <h1>
                Modificar Licencia
            </h1>
        </label>
    </div>
    <?php
    if (!(isset($_GET['IDLicencia']))) {
        echo '<div class="flex justify-center flex-col text-center mb-6" style="    padding: 1.6em;
    border: 2px solid;
    border-radius: 5.5px;
    -webkit-box-shadow: -1px 9px 20px -13px rgb(0 0 0 / 68%);">
        <p>Para asegurarte que la información ingresada</p>
        <p>coincida con algun registro  favor de</p>
        <a  class="font-bold text-red-600 hover:drop-shadow-xl" href="./SLicencias.php"> consultar aquí </a>
    </div>';
    }
    ?>
    
    <div style="width: 22%;">
    <form method="GET" action="ULicencias.php">
        <label for="" class="label-form">Número de licencia</label>
        <input type="text" name="IDLicencia"  class="input-form"  id="IDLicencia" value="<?php isset($_GET['IDLicencia']) ? print($_GET['IDLicencia']): null ?>" readonly>
        <br>
        <label for=""  class="label-form">ID Conductor</label>
        <input type="text" id="IDConductor" name="IDConductor" class="input-form" value="<?php isset($_GET['IDConductor']) ? print($_GET['IDConductor']): null ?>" required>
        <br>
        <label for="" class="label-form">Tipo de Licencia</label>
        <select id="TipoLicencia" name="TipoLicencia" class="input-form" required>
            <option value=""></option>
            <option value="A">AUTOMOVILISTA</option>
            <option value="B">CHOFER PARTICULAR</option>
            <option value="Cc">CHOFER CARGA</option>
            <option value="Co">CHOFER COLECTIVO</option>
            <option value="Ct">CHOFER TAXI</option>
            <option value="D">MOTOCICLETA</option>
            <option value="PM">PERMISO MENOR</option>
        </select>
        <br>
        <label for="" class="label-form">Atributo Desconocido</label>
        <input type="text" id="AtributoD" class="input-form" name="AtributoD" maxlength="11" value="<?php isset($_GET['AtributoD']) ? print($_GET['AtributoD']): null ?>" required>
        <br>
        <label for=""  class="label-form">Fecha Expedicion</label>
        <input type="text" id="FechaExpedicion" class="input-form" name="FechaExpedicion" value="<?php isset($_GET['FechaExpedicion']) ? print($_GET['FechaExpedicion']): null ?>" required>
        <br>
        <label for="" class="label-form">Fecha Vencimiento</label>
        <input type="text" id="FechaVencimiento" class="input-form" name="FechaVencimiento" value="<?php isset($_GET['FechaVencimiento']) ? print($_GET['FechaVencimiento']): null ?>" readonly required>
        <br>
        <label for=""  class="label-form">Restricciones</label>
        <br>
        <textarea id="Restricciones" name="Restricciones"  class="input-form" cols="25" rows="4"><?php isset($_GET['Restricciones']) ? print($_GET['Restricciones']): null ?></textarea>
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
        let TipoLicencia = document.getElementById("TipoLicencia");
        TipoLicencia.value = "<?php isset($_GET['TipoLicencia']) ? print($_GET['TipoLicencia']): null ?>";

    </script>
<?php
if (isset($_GET['IDLicencia']) ) {

    $IDLicencia = $_GET['IDLicencia'];
    $ascii = ord(substr($IDLicencia, 0, 1));
    $IDLicencia = $ascii . substr($IDLicencia, 1);
    $IDLicencia = str_replace("-", "", $IDLicencia);
    $IDConductor = $_GET['IDConductor'];
    $TipoLicencia = $_GET['TipoLicencia'];
    $AtributoD = $_GET['AtributoD'];
    $FechaExpedicion = $_GET['FechaExpedicion'];
    $FechaVencimiento = $_GET['FechaVencimiento'];
    $Restricciones = $_GET['Restricciones'];

    $SQL = "UPDATE licencias SET IDConductor = '$IDConductor', 
            TipoLicencia = '$TipoLicencia', AtributoD = '$AtributoD', 
            FechaExpedicion = '$FechaExpedicion', FechaVencimiento = '$FechaVencimiento', 
            Restricciones = '$Restricciones' WHERE IDLicencia = '$IDLicencia'";

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
