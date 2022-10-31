<?php

$IDConductor = $_GET['IDConductor'];
$TipoLicencia = $_GET['TipoLicencia'];
$FechaExpedicion = $_GET['FechaExpedicion'];
$Vigencia = $_GET['Vigencia'];
$FechaVencimiento = date('Y-m-d', strtotime($FechaExpedicion. ' + '.$Vigencia.' years'));
$Restricciones = $_REQUEST['Restricciones'];

// Leer el ultimo AtributoD de la tabla Licencias
$SQL = "SELECT AtributoD FROM licencias ORDER BY IDLicencia DESC LIMIT 1";
include("conexion.php");

$Con = Conectar();
$Result = Ejecutar($Con, $SQL) or die ("Error al seleccionar datos".mysqli_error($Con));
$AtributoD = mysqli_fetch_array($Result);
if ($AtributoD == null) {
    $AtributoD = 65123456789;
} else {
    $AtributoD = (int)$AtributoD[0] + 1;
}
Cerrar($Con);

// Insertar los datos en la tabla Licencias
$SQL = "INSERT INTO licencias 
VALUES ('', '$IDConductor','$TipoLicencia','$FechaExpedicion',
'$FechaVencimiento', '$AtributoD', '$Restricciones')";


$Con = Conectar();
$Result = Ejecutar($Con, $SQL) or die ("Error al insertar datos".mysqli_error($Con));
if ($Result) {

    // Leer el ultimo IDLicencia de la tabla Licencias
    $last_sql_id = mysqli_insert_id($Con);
    $ascii = chr(substr($last_sql_id, 0, 2));
    $id = $ascii.substr($last_sql_id, 2, 6)."-".substr($last_sql_id, 8);

    print("Licencia registrada con éxito. ID: " . $id );

}else{
    print("Registro No insertado");
}

Cerrar($Con);

