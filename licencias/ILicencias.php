<?php   

include '../licencias/Flicencias.php';

$IDConductor = $_GET['IDConductor'];
$TipoLicencia = $_GET['TipoLicencia'];
$AtributoD = $_GET['AtributoDesconocido'];
$FechaExpedicion = $_GET['FechaExpedicion'];
$Vigencia = $_GET['Vigencia'];
$FechaVencimiento = date('Y-m-d', strtotime($FechaExpedicion . ' + ' . $Vigencia . ' years'));
$Restricciones = $_REQUEST['Restricciones'];


$SQL = "INSERT INTO licencias 
VALUES ('', '$IDConductor','$TipoLicencia','$FechaExpedicion',
'$FechaVencimiento', '$AtributoD', '$Restricciones')";

include("../conexion.php");
$Con = Conectar();
$Result = Ejecutar($Con, $SQL) or die("Error al insertar datos" . mysqli_error($Con));
if ($Result) {

    // Leer el ultimo IDLicencia de la tabla Licencias
    $last_sql_id = mysqli_insert_id($Con);
    $ascii = chr(substr($last_sql_id, 0, 2));
    $id = $ascii . substr($last_sql_id, 2, 6) . "-" . substr($last_sql_id, 8);

    print("<h1 style='text-align: center; padding-buttom:2em;'>Licencia registrada con éxito. Tú número de licencia es: <strong>" . $id . "</strong> </h1>");
} else {
    print("Registro No insertado");
}

Cerrar($Con);

?>