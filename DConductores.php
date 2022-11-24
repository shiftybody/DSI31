<?php

    $IDConductor = $_GET['IDConductor'];
    
    $SQL = "DELETE FROM conductores WHERE IDConductor = $IDConductor";

    include("conexion.php");
    $Con = Conectar();
    $Result = Ejecutar($Con, $SQL);

    print("<br> Numero de Filas Eliminadas:"
             . mysqli_affected_rows($Con));

    Cerrar($Con);

?>