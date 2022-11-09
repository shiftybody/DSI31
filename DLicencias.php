
<html>
    <!-- Solicitar a traves de un formulario el IDLicencia -->
    <form method="GET" action="DLicencias.php">
        <label> No. de Licencia </label>
        <input type="text" name="IDLicencia" id="IDLicencia" placeholder="Q115146-06">
        <input type="submit" value="Enviar">
    </form>
</html>

<?php
    // Eliminar el registro de la tabla licencias
    if(isset($_GET['IDLicencia'])){

        $IDLicencia = $_GET['IDLicencia'];
        //convertir el primer caracter ascii a numero
        $ascii = ord(substr($IDLicencia, 0, 1));
        // concatenar el primer caracter ascii con el resto del id
        $IDLicencia = $ascii . substr($IDLicencia, 1);
        // eliminar el guion
        $IDLicencia = str_replace("-", "", $IDLicencia);

        print("<br>".$IDLicencia);


        $SQL = "DELETE FROM licencias WHERE IDLicencia = '$IDLicencia'";
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