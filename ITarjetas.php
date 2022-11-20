<?php

$TipoServicio = $_POST['TipoServicio'];
$Vigencia = $_POST['Vigencia'];
$Placa = $_POST['Placa'];
$IDVehiculo = $_POST['IDVehiculo'];
$IDPropietario = $_POST['IDPropietario'];
$Operacion = $_POST['Operacion'];
$PlacaAnterior = $_POST['PlacaAnterior'];
$NCI = $_POST['NCI'];
$Uso = $_POST['Uso'];
$Rfa = $_POST['Rfa'];
$CVE = $_POST['CVE'];
$OficinaExpedidora = $_POST['OficinaExpedidora'];
$Movimiento = $_POST['Movimiento'];
$FechaExpedicion = $_POST['FechaExpedicion'];
// check for folio number auto increment

$SQL = "INSERT INTO tarjetas(TipoServicio,Vigencia,Placa,IDPropietario ,IDVehiculo ,
    Operacion,PlacaAnterior,NCI,Rfa,CVE,OficinaExpedidora,Movimiento,FechaExpedicion) 
    VALUES ( '$TipoServicio', '$Vigencia', '$Placa', '$IDPropietario', 
    '$IDVehiculo', '$Operacion', '$PlacaAnterior', '$NCI', '$Rfa', '$CVE', 
    '$OficinaExpedidora', '$Movimiento', '$FechaExpedicion')";

include("conexion.php");
$Con = Conectar();
$Result = Ejecutar($Con, $SQL) or die("Error al insertar datos" . mysqli_error($Con));
if ($Result) {

    print("Tarjeta registrada con éxito. Folio: " . "<strong>" . mysqli_insert_id($Con) . "</strong>");

} else {
    print("Registro No insertado");
}
Cerrar($Con);
