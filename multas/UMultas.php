</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multas</title>
</head>

<body>
    <label for="">
        <h1>
            Multas
        </h1>
    </label>
    <p></p>
    <form method="GET" action="UMultas.php">
        <label for=""><strong> Folio </strong></label>
        <input type="text" name="IDMulta" id="IDMulta" value="<?php print($_GET['IDMulta']) ?>" readonly>
        <br>
        <label for="">Fecha</label>
        <input type="date" id="Fecha" name="Fecha" value="<?php print($_GET['Fecha'])?>">
        <label for="">Hora</label>
        <input type="time" id="Hora" name="Hora" value="<?php print($_GET['Hora'])?>">
        <br>
        <label for="">Reporte de Seccion II</label>
        <input type="text" id="ReporteSeccion" name="ReporteSeccion" maxlength="50" value="<?php print($_GET['ReporteSeccion']) ?>" required>
        <br>
        <label for="">Nombre de la via</label>
        <input type="text" id="NombreVia" name="NombreVia" value="<?php print($_GET['NombreVia']) ?>" required>
        <br>
        <label for="">Kilometro o número</label>
        <input type="number" id="Kilometro" name="Kilometro" min="0" max="999" size="10" value="<?php print($_GET['Kilometro']) ?>" required>
        <br>
        <label for="">Direccion o Sentido</label>
        <select name="DireccionSentido" id="DireccionSentido" required>
            <option value=""></option>
            <option value="Norte">Norte</option>
            <option value="Sur">Sur</option>
            <option value="Este">Este</option>
            <option value="Oeste">Oeste</option>
        </select>
        <br>
        <label for="">Referencia del Lugar</label>
        <input type="text" id="Referencia" name="Referencia" maxlength="30" value="<?php print($_GET['Referencia']) ?>" required>
        <br>
        <label for="">Municipio</label>
        <input type="text" id="Municipio" name="Municipio" value="<?php print($_GET['Municipio']) ?>" required>
        <br>
        <label for="">NoLicencia</label>
        <input type="text" id="IDLicencia" name="IDLicencia" maxlength="10" placeholder="Q123456-78" value="<?php print($_GET['IDLicencia']) ?>">
        <br>
        <label for="">IDVehiculo</label>
        <input type="text" id="IDVehiculo" name="IDVehiculo" value="<?php print($_GET['IDVehiculo']) ?>" maxlength="17" size="20">
        <br>
        <label for="">ID Tarjeta de Ciruclación</label>
        <input type="text" id="IDTarjeta" name="IDTarjeta" value="<?php print($_GET['IDTarjeta']) ?>" maxlength="9" size="10">
        <br>
        <label for="">Articulo Fundamento</label>
        <input type="text" id="Articulo" name="Articulo" value="<?php print($_GET['Articulo']) ?>" required>
        <br>
        <label for="">Motivo</label>
        <br>
        <textarea id="Motivo" name="Motivo" cols="50" rows="3" maxlength="150" required><?php print($_GET['Motivo']) ?></textarea>
        <br>
        <label for="">Garantia Retenida</label>
        <select name="GarantiaRetenida" id="GarantiaRetenida" required>
            <option value=""></option>
            <option value="Licencia">Licencia</option>
            <option value="TarjetaCirculacion">Tarjeta Circulación</option>
            <option value="Placa">Placa</option>
            <option value="Vehiculo">Vehiculo</option>
        </select>
        <br>
        <label for="">No. Partes Accidente</label>
        <input type="number" id="NoParteAccidente" name="NoParteAccidente" value="<?php print($_GET['NoParteAccidente']) ?>" min="0" max="10">
        <br>
        <laber for="">Convenio</laber>
        <input type="radio" id="Convenio" name="Convenio" value="SI" <?php if ($_GET['Convenio'] == "SI") echo ' checked' ?>>Si
        <input type="radio" id="Convenio" name="Convenio" value="NO" <?php if ($_GET['Convenio'] == "NO") echo ' checked' ?>>No
        <br>
        <label for="">PuestoADisposicion</label>
        <input type="radio" id="PuestaDisposicion" name="PuestaDisposicion" value="SI" <?php if($_GET['Convenio'] == "SI") echo 'checked' ?>  required>Si
        <input type="radio" id="PuestaDisposicion" name="PuestaDisposicion" value="NO" <?php if($_GET['Convenio'] == "NO") echo 'checked' ?> required>No
        <br>
        <label for="">DepositoOficial</label>
        <input type="number" id="Deposito" name="Deposito" value="<?php print($_GET['Deposito']) ?>">
        <br>
        <label for="">ID Oficial</label>
        <input type="number" id="IDOficial" name="IDOficial" value="<?php print($_GET['IDOficial']) ?>" min="0" max="9999" required>
        <br>
        <label for="">Observaciones del Personal Operativo</label>
        <br>
        <textarea id="ObservacionOficial" name="ObservacionOficial" value="" cols="50" rows="2" maxlength="100"><?php print($_GET['ObservacionOficial']) ?></textarea>
        <br>
        <label for="">Calificacion de la boleta de infracción </label>
        <br>
        <textarea id="CalificacionBoleta" name="CalificacionBoleta" value="" cols="50" rows="2" maxlength="100"><?php print($_GET['CalificacionBoleta']) ?></textarea>
        <br>
        <label for="">Observaciones del Conductor</label>
        <br>
        <textarea id="ObservacionConductor" name="ObservacionConductor" cols="50" rows="2" maxlength="100"><?php print($_GET['ObservacionConductor']) ?></textarea>
        <br>
        <input type="submit" value="Enviar">
    </form>
    <script>
        let direccionSentido = document.getElementById('DireccionSentido');
        direccionSentido.value = "<?php print($_GET['DireccionSentido']) ?>";

        let garantiaRetenida = document.getElementById('GarantiaRetenida');
        garantiaRetenida.value = "<?php print($_GET['GarantiaRetenida']) ?>";
    </script>
</body>

</html>

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

    include("conexion.php");

    $Con = Conectar();
    $Result = Ejecutar($Con, $SQL);
    $FilasAfectadas = mysqli_affected_rows($Con);

    if ($FilasAfectadas > 0) {
        echo "Se actualizaron $FilasAfectadas registros";
    }
    Cerrar($Con);
}
?>