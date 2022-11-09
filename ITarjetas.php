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
$Folio = "123456790";


$SQL = "INSERT INTO tarjetas(TipoServicio,
    Folio ,Vigencia,Placa,IDPropietario ,IDVehiculo ,
    Operacion,PlacaAnterior,NCI,Rfa,CVE,OficinaExpedidora,Movimiento,FechaExpedicion) 
    VALUES ( '$TipoServicio', '$Folio', '$Vigencia', '$Placa', '$IDPropietario', 
    '$IDVehiculo', '$Operacion', '$PlacaAnterior', '$NCI', '$Rfa', '$CVE', 
    '$OficinaExpedidora', '$Movimiento', '$FechaExpedicion')";

include("conexion.php");
$Con = Conectar();
$Result = Ejecutar($Con, $SQL) or die("Error al insertar datos" . mysqli_error($Con));
if ($Result) {

    // leer el ultimo Folio de la tabla Tarjetas
    $last_sql_id = mysqli_insert_id($Con);
    $ascii = chr(substr($last_sql_id, 0, 2));
    // agregar ascii al resto del folio
    $Folio = $ascii . substr($last_sql_id, 2, 9);
    print("Tarjeta registrada con éxito. folio: " . $Folio );

} else {
    print("Registro No insertado");
}
Cerrar($Con);
