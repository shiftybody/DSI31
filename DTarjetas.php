<html>
<!-- Solicitar a traves de un formulario el Folio de la tarjeta de circulacion-->
    <form method="GET" action="DVehiculos.php">
        <label> NIV del Vehiculo </label>
        <input type="text"
            name="NIV" 
            id="NIV" 
            placeholder="1GNCS12Z6M0246591">
        <input type="submit" value="Enviar">
    </form>
</html>

<?php 

// Eliminar el registro de la tabla oficiales 
if(isset($_GET['NIV'])){

    $NIV = $_GET['NIV'];

    $SQL = "DELETE FROM vehiculos WHERE NIV = '$NIV'";
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