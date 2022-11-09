<html>
<!-- Solicitar a traves de un formulario el IDconductor -->
    <form method="GET" action="DConductores.php">
        <label> ID Conductor </label>
        <input type="text" name="IDConductor" id="IDconductor" placeholder="1">
        <input type="submit" value="Enviar">
    </form>
</html>

<?php 

// Eliminar el registro de la tabla conductores 
if(isset($_GET['IDConductor'])){

    $IDConductor = $_GET['IDConductor'];

    $SQL = "DELETE FROM conductores WHERE IDConductor = '$IDConductor'";
    print("<br>".$SQL);

    //enviar al dbms
    include("conexion.php");
    $Con = Conectar();
    $Result = Ejecutar($Con, $SQL) or die ("Error al eliminar datos".mysqli_error($Con));
    $FilasAfectadas = mysqli_affected_rows($Con);

    print("<br> Numero de Filas Eliminadas:" . $FilasAfectadas);

    Cerrar($Con);
}

?>