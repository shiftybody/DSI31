<html>
<!-- Solicitar a traves de un formulario el FolioVerificacion -->
    <form method="GET" action="DVerificaciones.php">
        <label> Folio </label>
        <input type="text" name="FolioVerificacion" id="FolioVerificacion" placeholder="1">
        <input type="submit" value="Enviar">
    </form>
</html>

<?php 

// Eliminar el registro de la tabla conductores 
if(isset($_GET['FolioVerificacion'])){

    $Folio = $_GET['FolioVerificacion'];

    $SQL = "DELETE FROM verificaciones WHERE FolioVerificacion = '$Folio'";
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