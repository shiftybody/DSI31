<html>
<!-- Solicitar a traves de un formulario el IDMulta -->
    <form method="GET" action="DMultas.php">
        <label> ID Multa </label>
        <input type="text" name="IDMulta" id="IDMulta" placeholder="1">
        <input type="submit" value="Enviar">
    </form>
</html>

<?php 

// Eliminar el registro de la tabla conductores 
if(isset($_GET['IDMulta'])){

    $IDMulta = $_GET['IDMulta'];

    $SQL = "DELETE FROM multas WHERE IDMulta = '$IDMulta'";
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