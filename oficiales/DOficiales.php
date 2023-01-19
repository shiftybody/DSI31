
<?php

    $IDOficial = $_GET['IDOficial'];

    $SQL = "DELETE FROM oficiales WHERE IDOficial = '$IDOficial'";

    //enviar al dbms
    include("../conexion.php");
    $Con = Conectar();
    $Result = Ejecutar($Con, $SQL) or die("Error al eliminar datos" . mysqli_error($Con));

    print("<br> Numero de Filas Eliminadas: " . mysqli_affected_rows($Con));

    Cerrar($Con);

?>