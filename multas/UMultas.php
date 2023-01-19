<?php include '../menu/MenuA.php'; ?>

<link rel="stylesheet" href="../assets/css/styles.css">

<div class="flex flex-col items-center">
    <div class="py-8 uppercase font-bold">
        <label for="multas">
            <h1>
                Modificar Multa
            </h1>
        </label>
    </div>
    <?php
    if (!(isset($_GET['IDMulta']))) {
        echo '<div class="flex justify-center flex-col text-center mb-6" style="    padding: 1.6em;
    border: 2px solid;
    border-radius: 5.5px;
    -webkit-box-shadow: -1px 9px 20px -13px rgb(0 0 0 / 68%);">
        <p>Para asegurarte que la información ingresada</p>
        <p>coincida con algun registro  favor de</p>
        <a  class="font-bold text-red-600 hover:drop-shadow-xl" href="./SMultas.php"> consultar aquí </a>
    </div>';
    }
    ?>
    
    <div >
    <form method="GET" action="UMultas.php">
        <label for="" class="label-form" ><strong> Folio </strong></label>
        <input type="text" class="input-form" name="IDMulta" id="IDMulta" value="<?php isset($_GET['IDMulta']) ? print($_GET['IDMulta']): null ?>" readonly>
        <br>
        <label for="" class="label-form">Fecha</label>
        <input type="date" class="input-form" id="Fecha" name="Fecha" value="<?php isset($_GET['Fecha']) ? print($_GET['Fecha']): null ?>">
        <label for="" class="label-form">Hora</label>
        <input type="time" class="input-form" id="Hora" name="Hora" value="<?php isset($_GET['Hora']) ? print($_GET['Hora']): null ?>">
        <br>
        <label for="" class="label-form">Reporte de Seccion II</label>
        <input type="text" class="input-form" id="ReporteSeccion" name="ReporteSeccion" maxlength="50" value="<?php isset($_GET['ReporteSeccion']) ? print($_GET['ReporteSeccion']): null ?>" required>
        <br>
        <label for="" class="label-form">Nombre de la via</label>
        <input type="text" class="input-form" id="NombreVia" name="NombreVia" value="<?php isset($_GET['NombreVia']) ? print($_GET['NombreVia']): null ?>" required>
        <br>
        <label for="" class="label-form">Kilometro o número</label>
        <input type="number" class="input-form" id="Kilometro" name="Kilometro" min="0" max="999" size="10" value="<?php isset($_GET['Kilometro']) ? print($_GET['Kilometro']): null ?>" required>
        <br>
        <label for="" class="label-form">Direccion o Sentido</label>
        <select name="DireccionSentido" class="input-form" id="DireccionSentido" required>
            <option value=""></option>
            <option value="Norte">Norte</option>
            <option value="Sur">Sur</option>
            <option value="Este">Este</option>
            <option value="Oeste">Oeste</option>
        </select>
        <br>
        <label for="" class="label-form">Referencia del Lugar</label>
        <input type="text" class="input-form" id="Referencia" name="Referencia" maxlength="30" value="<?php isset($_GET['Referencia']) ? print($_GET['Referencia']): null ?>" required>
        <br>
        <label for="" class="label-form">Municipio</label>
        <input type="text" class="input-form" id="Municipio" name="Municipio" value="<?php isset($_GET['Municipio']) ? print($_GET['Municipio']): null ?>" required>
        <br>
        <label for="" class="label-form">NoLicencia</label>
        <input type="text" class="input-form" id="IDLicencia" name="IDLicencia" maxlength="10" placeholder="Q123456-78" value="<?php isset($_GET['IDLicencia']) ? print($_GET['IDLicencia']): null ?>">
        <br>
        <label for="" class="label-form">IDVehiculo</label>
        <input type="text"  class="input-form"id="IDVehiculo" name="IDVehiculo" value="<?php isset($_GET['IDVehiculo']) ? print($_GET['IDVehiculo']): null ?>" maxlength="17" size="20">
        <br>
        <label for="" class="label-form">ID Tarjeta de Ciruclación</label>
        <input type="text"  class="input-form"id="IDTarjeta" name="IDTarjeta" value="<?php isset($_GET['IDTarjeta']) ? print($_GET['IDTarjeta']): null ?>" maxlength="9" size="10">
        <br>
        <label for="" class="label-form">Articulo Fundamento</label>
        <input type="text"  class="input-form"id="Articulo" name="Articulo" value="<?php isset($_GET['Articulo']) ? print($_GET['Articulo']): null ?>" required>
        <br>
        <label for="" class="label-form">Motivo</label>
        <br>
        <textarea  class="input-form" id="Motivo" name="Motivo" cols="50" rows="3" maxlength="150" required><?php isset($_GET['Motivo']) ? print($_GET['Motivo']): null ?></textarea>
        <br>
        <label for="" class="label-form">Garantia Retenida</label>
        <select name="GarantiaRetenida" class="input-form" id="GarantiaRetenida" required>
            <option value=""></option>
            <option value="Licencia">Licencia</option>
            <option value="TarjetaCirculacion">Tarjeta Circulación</option>
            <option value="Placa">Placa</option>
            <option value="Vehiculo">Vehiculo</option>
        </select>
        <br>
        <label for="" class="label-form">No. Partes Accidente</label>
        <input type="number" class="input-form" id="NoParteAccidente" name="NoParteAccidente" value="<?php isset($_GET['NoParteAccidente']) ? print($_GET['NoParteAccidente']): null ?>" min="0" max="10">
        <br>
        <div class="flex justify-center flex-wrap items-center py-2">
        <laber for="" class="label-form">Convenio</laber>
        <input type="radio" class="w-4 h-4 mx-1" class="input-form" id="Convenio" name="Convenio" value="SI" <?php if(isset($_GET['Convenio'])){ if ($_GET['Convenio'] == "SI") echo 'checked';}else null ?>>Si
        <input type="radio" class="w-4 h-4 mx-1" class="input-form" id="Convenio" name="Convenio" value="NO" <?php if(isset($_GET['Convenio'])){ if ($_GET['Convenio'] == "NO") echo 'checked';}else null ?>>No
        <br>
        </div>
        <div class="flex justify-center flex-wrap items-center py-2">
        <label for="" class="label-form">Puesto A Disposicion</label>
        <input type="radio" class="w-4 h-4 mx-1" class="input-form" id="PuestaDisposicion" name="PuestaDisposicion" value="SI" <?php if(isset($_GET['PuestaDisposicion'])){ if ($_GET['PuestaDisposicion'] == "SI") echo 'checked';}else null ?>  required>Si
        <input type="radio" class="w-4 h-4 mx-1" class="input-form" id="PuestaDisposicion" name="PuestaDisposicion" value="NO" <?php if(isset($_GET['PuestaDisposicion'])){ if ($_GET['PuestaDisposicion'] == "NO") echo 'checked';}else null ?> required>No
        <br>
        </div>
        <label for="" class="label-form">Deposito Oficial</label>
        <input type="number" class="input-form" id="Deposito" name="Deposito" value="<?php isset($_GET['Deposito']) ? print($_GET['Deposito']): null ?>">
        <br>
        <label for="" class="label-form">ID Oficial</label>
        <input type="number" class="input-form" id="IDOficial" name="IDOficial" value="<?php isset($_GET['IDOficial']) ? print($_GET['IDOficial']): null ?>" min="0" max="9999" required>
        <br>
        <label for="" class="label-form">Observaciones del Personal Operativo</label>
        <br>
        <textarea class="input-form" id="ObservacionOficial" name="ObservacionOficial" value="" cols="50" rows="2" maxlength="100"><?php isset($_GET['ObservacionOficial']) ? print($_GET['ObservacionOficial']): null ?></textarea>
        <br>
        <label for="" class="label-form">Calificacion de la boleta de infracción </label>
        <br>
        <textarea class="input-form" id="CalificacionBoleta" name="CalificacionBoleta" value="" cols="50" rows="2" maxlength="100"><?php isset($_GET['CalificacionBoleta']) ? print($_GET['CalificacionBoleta']): null ?></textarea>
        <br>
        <label for="" class="label-form">Observaciones del Conductor</label>
        <br>
        <textarea class="input-form" id="ObservacionConductor" name="ObservacionConductor" cols="50" rows="2" maxlength="100"><?php isset($_GET['ObservacionConductor']) ? print($_GET['ObservacionConductor']): null ?></textarea>
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
        let direccionSentido = document.getElementById('DireccionSentido');
        direccionSentido.value = "<?php isset($_GET['DireccionSentido']) ? print($_GET['DireccionSentido']): null ?>";

        let garantiaRetenida = document.getElementById('GarantiaRetenida');
        garantiaRetenida.value = "<?php isset($_GET['GarantiaRetenida']) ? print($_GET['GarantiaRetenida']): null ?>";
    </script>

<?php
if (isset($_REQUEST['IDMulta'])) {

    $IDMulta = $_REQUEST['IDMulta'];
    $Fecha = $_REQUEST['Fecha'];
    $Hora = $_REQUEST['Hora'];
    // create datetime from date and time
    $FechaHora = date('Y-m-d H:i:s', strtotime($Fecha . ' ' . $Hora));
    $ReporteSeccion = $_REQUEST['ReporteSeccion'];
    $NombreVia = $_REQUEST['NombreVia'];
    $Kilometro = $_REQUEST['Kilometro'];
    $DireccionSentido = $_REQUEST['DireccionSentido'];
    $Referencia = $_REQUEST['Referencia'];
    $Municipio = $_REQUEST['Municipio'];
    $IDLicencia = $_REQUEST['IDLicencia'];
        //convertir el primer caracter ascii a numero
        $ascii = ord(substr($IDLicencia, 0, 1));
        // concatenar el primer caracter ascii con el resto del id
        $IDLicencia = $ascii . substr($IDLicencia, 1);
        // eliminar el guion
        $IDLicencia = str_replace("-", "", $IDLicencia);
    $IDVehiculo = $_REQUEST['IDVehiculo'];
    $IDTarjeta = $_REQUEST['IDTarjeta'];
    $Articulo = $_REQUEST['Articulo'];
    $Motivo = $_REQUEST['Motivo'];
    $GarantiaRetenida = $_REQUEST['GarantiaRetenida'];
    $NoParteAccidente = $_REQUEST['NoParteAccidente'];
    $Convenio = $_REQUEST['Convenio'];
    $PuestaDisposicion = $_REQUEST['PuestaDisposicion'];
    $Deposito = $_REQUEST['Deposito'];
    $IDOficial = $_REQUEST['IDOficial'];
    $ObservacionOficial = $_REQUEST['ObservacionOficial'];
    $CalificacionBoleta = $_REQUEST['CalificacionBoleta'];
    $ObservacionConductor = $_REQUEST['ObservacionConductor'];


    $SQL = "UPDATE multas SET FechaHora = '$FechaHora', IDTarjeta = '$IDTarjeta', 
    IDVehiculo = '$IDVehiculo', IDOficial = '$IDOficial', IDLicencia = '$IDLicencia', 
    ReporteSeccion = '$Referencia', NombreVia = '$NombreVia', Kilometro = '$Kilometro', 
    Sentido = '$DireccionSentido', Municipio = '$Municipio', 
    Referencia = '$Referencia', CalificacionBoleta = '$CalificacionBoleta', 
    Articulo = '$Articulo', Motivo = '$Motivo', 
    GarantiaRetenida = '$GarantiaRetenida', NoParteAccidente = '$NoParteAccidente', 
    Convenio = '$Convenio', PuestaDisposicion = '$PuestaDisposicion', 
    ObservacionOficial = '$ObservacionOficial', Deposito = '$Deposito', 
    ObservacionConductor = '$ObservacionConductor' WHERE IDMulta = '$IDMulta'";

    include("../conexion.php");

    $Con = Conectar();
    $Result = Ejecutar($Con, $SQL);
    $FilasAfectadas = mysqli_affected_rows($Con);

    if ($FilasAfectadas > 0) {
        echo "<h1>Se actualizaron $FilasAfectadas registros </h1>";
    }
    Cerrar($Con);
}
?>

</div>
</body>

</html>