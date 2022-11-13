<html>
<!-- Solicitar a traves de un formulario el IDconductor -->
    <form method="GET" action="DOficiales.php">
        <label> ID Oficial </label>
        <input type="text" name="IDOficial" id="IDOficial" placeholder="8409">
        <input type="submit" value="Enviar">
    </form>
</html>

<?php 

// Eliminar el registro de la tabla oficiales 
if(isset($_GET['IDOficial'])){

    $IDOficial = $_GET['IDOficial'];

    $SQL = "DELETE FROM oficiales WHERE IDOficial = '$IDOficial'";
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