<?php 

    $IDTarjeta = $_GET['IDTarjeta'];

    $SQL = "DELETE FROM tarjetas WHERE IDTarjeta = '$IDTarjeta'";

    //enviar al dbms
    include("../conexion.php");
    $Con = Conectar();
    $Result = Ejecutar($Con, $SQL) or die ("Error al eliminar datos".mysqli_error($Con));
    $FilasAfectadas = mysqli_affected_rows($Con);

    print("<br> Numero de Filas Eliminadas:" . $FilasAfectadas);

    Cerrar($Con);
 

?>