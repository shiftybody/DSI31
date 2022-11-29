<?php

$Fecha = $_REQUEST['Fecha'];
$Hora = $_REQUEST['Hora'];
// create datetime from date and time
$FechaHora = date('Y-m-d H:i:s', strtotime($Fecha . ' ' . $Hora));
$ReporteSeccion = $_REQUEST['ReporteSeccion'];
$NombreVia = $_REQUEST['NombreVia'];
$Kilometro = $_REQUEST['Kilometro'];
$DireccionSentido = $_REQUEST['DireccionSentido'];
$ReferenciaLugar = $_REQUEST['ReferenciaLugar'];
$Municipio = $_REQUEST['Municipio'];
$NoLicencia = $_REQUEST['NoLicencia'];
    //convertir el primer caracter ascii a numero
    $ascii = ord(substr($NoLicencia, 0, 1));
    // concatenar el primer caracter ascii con el resto del id
    $NoLicencia = $ascii . substr($NoLicencia, 1);
    // eliminar el guion
    $NoLicencia = str_replace("-", "", $NoLicencia);
$IDVehiculo = $_REQUEST['IDVehiculo'];
$IDTarjeta = $_REQUEST['IDTarjeta'];
$ArticuloFundamento = $_REQUEST['ArticuloFundamento'];
$Motivo = $_REQUEST['Motivo'];
$GarantiaRetenida = $_REQUEST['GarantiaRetenida'];
$NumeroParteAccidente = $_REQUEST['NumeroParteAccidente'];
$Convenio = $_REQUEST['Convenio'];
$PuestoADisposicion = $_REQUEST['PuestoADisposicion'];
$DepositoOficial = $_REQUEST['DepositoOficial'];
$IDOficial = $_REQUEST['IDOficial'];
$ObservacionesP = $_REQUEST['ObservacionesP'];
$CalificacionBoleta = $_REQUEST['CalificacionBoleta'];
$ObservacionesC = $_REQUEST['ObservacionesC'];


$SQL = "INSERT INTO multas VALUES ('', '$FechaHora', '$ReporteSeccion',
'$NombreVia', '$Kilometro', '$DireccionSentido', '$ReferenciaLugar', '$Municipio',
'$ArticuloFundamento', '$Motivo', '$GarantiaRetenida', '$NumeroParteAccidente', 
'$Convenio', '$PuestoADisposicion', '$DepositoOficial',
'$ObservacionesC', '$ObservacionesP', '$CalificacionBoleta', '$NoLicencia','$IDVehiculo', '$IDTarjeta', '$IDOficial')";

include("conexion.php");
$Con = Conectar();

$Result = Ejecutar($Con, $SQL) or die("Error al insertar datos" . mysqli_error($Con));

if ($Result) {

    print("Registro insertado correctamente con el Folio: <strong>" . mysqli_insert_id($Con) . "</strong>");

} else {

    print("Registro No insertado");
}
Cerrar($Con);
