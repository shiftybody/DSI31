<?php

$Fecha = $_REQUEST['Fecha'];
$IDTarjeta = $_REQUEST['IDTarjeta'];
$IDVehiculo = $_REQUEST['IDVehiculo'];
$IDOficial = $_REQUEST['IDOficial'];
$NoLicencia = $_REQUEST['NoLicencia'];
$Hora = $_REQUEST['Hora'];
$ReporteSeccion = $_REQUEST['ReporteSeccion'];
$NombreVia = $_REQUEST['NombreVia'];
$Kilometro = $_REQUEST['Kilometro'];
$DireccionSentido = $_REQUEST['DireccionSentido'];
$Municipio = $_REQUEST['Municipio'];
$ReferenciaLugar = $_REQUEST['ReferenciaLugar'];
$CalificacionBoleta = $_REQUEST['CalificacionBoleta'];
$ArticuloFundamento = $_REQUEST['ArticuloFundamento'];
$Motivo = $_REQUEST['Motivo'];
$GarantiaRetenida = $_REQUEST['GarantiaRetenida'];
$NumeroParteAccidente = $_REQUEST['NumeroParteAccidente'];
$Convenio = $_REQUEST['Convenio'];
$PuestoADisposicion = $_REQUEST['PuestoADisposicion'];
$ObservacionesP = $_REQUEST['ObservacionesP'];
$DepositoOficial = $_REQUEST['DepositoOficial'];
$ObservacionesC = $_REQUEST['ObservacionesC'];

// create datetime from date and time
$FechaHora = date('Y-m-d H:i:s', strtotime($Fecha . ' ' . $Hora));


$SQL = "INSERT INTO multas VALUES ('', '$FechaHora', 'ReporteSeccion',
'$NombreVia', '$Kilometro', '$DireccionSentido', '$ReferenciaLugar', '$Municipio',
'$ArticuloFundamento', '$ArticuloFundamento', '$Motivo', '$GarantiaRetenida',
'$NumeroParteAccidente', '$Convenio', '$PuestoADisposicion', '$DepositoOficial',
'$ObservacionesC', '$ObservacionesP', '$NoLicencia','$IDVehiculo', '$IDTarjeta', '$IDOficial')";


include("conexion.php");
$Con = Conectar();
$Result = Ejecutar($Con, $SQL) or die("Error al insertar datos" . mysqli_error($Con));
if ($Result) {

    // Mostrar el numero de Folio
    $id = mysqli_insert_id($Con);
    $ascii = substr($id, 0, 2);
    $ascii = chr($ascii);
    $id = $ascii . "-" . substr($id, 2);

    print("Registro insertado correctamente con el numero de folio: " . $id);
} else {
    print("Registro No insertado");
}
Cerrar($Con);
