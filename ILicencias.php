<?php

$NoLicencia = $_GET['NoLicencia'];
$FechaExpedicion = $_GET['FechaExpedicion'];
$IDConductor = $_GET['IDConductor'];
$AtributoD = $_GET['AtributoD'];
$FechaVencimiento = $_GET['FechaVencimiento'];
$Observacion = $_GET['Observacion'];


$SQL = "INSERT INTO licencias VALUES ('$NoLicencia','$FechaExpedicion','$IDConductor','$AtributoD','$FechaVencimiento','$Observacion')";

include("conexion.php");
$Con = Conectar();
$Result = Ejecutar($Con, $SQL) or die ("Error al insertar datos".mysqli_error($Con));
if ($Result) {
    print("Registro insertado correctamente");
}else{
    print("Registro No insertado");
}
Cerrar($Con);

?>
