<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Licencias</title>
</head>

<body>
    <label for="">
        <h1>
            Licencias
        </h1>
    </label>
    <p></p>
    <form method="GET" action="ULicencias.php">
        <label for=""><strong> Ingrese el numero de licencia</strong></label>
        <input type="text" name="IDLicencia" id="IDLicencia" placeholder="Q123456-78" required>
        <br>
        <label for="">ID Conductor</label>
        <input type="text" id="IDConductor" name="IDConductor" required>
        <br>
        <label for="">Tipo de Licencia</label>
        <select id="TipoLicencia" name="TipoLicencia" required>
            <option value=""></option>
            <option value="A">AUTOMOVILISTA</option>
            <option value="B">CHOFER PARTICULAR</option>
            <option value="Cc">CHOFER CARGA</option>
            <option value="Co">CHOFER COLECTIVO</option>
            <option value="Ct">CHOFER TAXI</option>
            <option value="D">MOTOCICLETA</option>
            <option value="PM">PERMISO MENOR</option>
        </select>
        <br>
        <label for="">Atributo Desconocido</label>
        <input type="text" id="AtributoD" name="AtributoD" maxlength="11" required>
        <br>
        <label for="">Fecha Expedicion</label>
        <input type="date" id="fechaExpedicion" name="FechaExpedicion" required readonly>
        <br>
        <label for="">Vigencia</label>
        <select id="Vigencia" name="Vigencia" required>
            <script>
                for (var i = 1; i <= 10; i++) {
                    document.write("<option value='" + i + "'>" + i + "</option>");
                }
            </script>
        </select>
        <label for=""> años </label>
        <br>
        <label for="">Restricciones</label>
        <br>
        <textarea id="Restricciones" name="Restricciones" cols="25" rows="4"> </textarea>
        <br>
        <input type="submit" value="enviar">
        <br>
    </form>
    <!-- js code -->
    <script>
        document.getElementById('fechaExpedicion').valueAsDate = new Date();
    </script>
</body>

</html>

<?php
if (isset($_GET['IDLicencia'])) {

    $IDLicencia = $_GET['IDLicencia'];

    $ascii = ord(substr($IDLicencia, 0, 1));
    $IDLicencia = $ascii . substr($IDLicencia, 1);
    $IDLicencia = str_replace("-", "", $IDLicencia);

    $IDConductor = $_GET['IDConductor'];
    $TipoLicencia = $_GET['TipoLicencia'];
    $AtributoD = $_GET['AtributoD'];
    $FechaExpedicion = $_GET['FechaExpedicion'];
    $Vigencia = $_GET['Vigencia'];
    $FechaVencimiento = date('Y-m-d', strtotime($FechaExpedicion . ' + ' . $Vigencia . ' years'));  
    $Restricciones = $_GET['Restricciones'];

    $SQL = "UPDATE licencias SET IDConductor = '$IDConductor', 
            TipoLicencia = '$TipoLicencia', AtributoD = '$AtributoD', 
            FechaExpedicion = '$FechaExpedicion', FechaVencimiento = '$FechaVencimiento', 
            Restricciones = '$Restricciones' WHERE IDLicencia = '$IDLicencia'";

    include("conexion.php");
    $Con = Conectar();
    $Result = Ejecutar($Con, $SQL);
    $FilasAfectadas = mysqli_affected_rows($Con);
    if ($FilasAfectadas > 0) {
        echo "Se actualizaron $FilasAfectadas registros";
    } else {
        echo "No se actualizaron registros";
    }
    Cerrar($Con);
}
?>