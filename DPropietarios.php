<html>
<!-- Solicitar a traves de un formulario el RFC -->
    <form method="GET" action="DPropietarios.php">
        <label> RFC del propietario </label>
        <input type="text" name="RFC" id="RFC" placeholder="VECJ880326XXX">
        <input type="submit" value="Enviar">
    </form>
</html>

<?php 

// Eliminar el registro de la tabla oficiales 
if(isset($_GET['RFC'])){

    $RFC = $_GET['RFC'];

    $SQL = "DELETE FROM propietarios WHERE RFC = '$RFC'";
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