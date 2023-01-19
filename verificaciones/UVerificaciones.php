<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificaciones</title>
</head>

<body>
    <label for="">
        <h1>
            Verificaciones
        </h1>
    </label>
    <p></p>
    <!-- from POST to GET -->
    <form method="GET" action="UVerificaciones.php">

        <label for=""><strong> Folio Verificacion</strong></label>
        <input type="text" name="FolioVerificacion" id="FolioVerificacion" value="<?php print($_GET['FolioVerificacion'])?>" readonly>
        <br>
        <label for="">IDTarjeta</label>
        <input type="text" id="IDTarjeta" name="IDTarjeta" value="<?php print($_GET['IDTarjeta'])?>" required>
        <br>
        <label for="">EntidadFederativa</label>
        <select id="EntidadFederativa" name="EntidadFederativa">
            <option value="no"></option>
            <option value="Aguascalientes">Aguascalientes</option>
            <option value="Baja California">Baja California</option>
            <option value="Baja California Sur">Baja California Sur</option>
            <option value="Campeche">Campeche</option>
            <option value="Chiapas">Chiapas</option>
            <option value="Chihuahua">Chihuahua</option>
            <option value="CDMX">Ciudad de México</option>
            <option value="Coahuila">Coahuila</option>
            <option value="Colima">Colima</option>
            <option value="Durango">Durango</option>
            <option value="Estado de México">Estado de México</option>
            <option value="Guanajuato">Guanajuato</option>
            <option value="Guerrero">Guerrero</option>
            <option value="Hidalgo">Hidalgo</option>
            <option value="Jalisco">Jalisco</option>
            <option value="Michoacán">Michoacán</option>
            <option value="Morelos">Morelos</option>
            <option value="Nayarit">Nayarit</option>
            <option value="Nuevo León">Nuevo León</option>
            <option value="Oaxaca">Oaxaca</option>
            <option value="Puebla">Puebla</option>
            <option value="Querétaro">Querétaro</option>
            <option value="Quintana Roo">Quintana Roo</option>
            <option value="San Luis Potosí">San Luis Potosí</option>
            <option value="Sinaloa">Sinaloa</option>
            <option value="Sonora">Sonora</option>
            <option value="Tabasco">Tabasco</option>
            <option value="Tamaulipas">Tamaulipas</option>
            <option value="Tlaxcala">Tlaxcala</option>
            <option value="Veracruz">Veracruz</option>
            <option value="Yucatán">Yucatán</option>
            <option value="Zacatecas">Zacatecas</option>
        </select>
        <br>
        <label for="">Municipio</label>
        <input type="text" id="Municipio" name="Municipio" value="<?php print($_GET['Municipio'])?>" >
        <br>
        <label for="">Numero del Centro</label>
        <input type="text" id="NumCentro" name="NumCentro" value="<?php print($_GET['NumCentro'])?>" required>
        <br>
        <label for="">Numero de Linea</label>
        <input type="number" id="NumLinea" name="NumLinea" value="<?php print($_GET['NumLinea'])?>" min="0" max="99" required>
        <br>
        <label for="">Nombre del Tecnico</label>
        <input type="text" id="NombreTecnico" name="NombreTecnico" value="<?php print($_GET['NombreTecnico'])?>" required>
        <br>
        <label for="">Fecha de Expedicion</label>
        <input type="date" id="FechaExpedicion" name="FechaExpedicion" value="<?php print($_GET['FechaExpedicion'])?>" required>
        <br>
        <label for="">Fecha de Vencimiento</label>
        <input type="date" id="FechaVencimiento" name="FechaVencimiento" value="<?php print($_GET['FechaVencimiento'])?>">
        <br>
        <label for="">Motivo de Verificacion</label>
        <br>
        <textarea name="MotivoVerificacion" id="MotivoVerificacion" cols="25" rows="2" required><?php print($_GET['MotivoVerificacion'])?></textarea>
        <br>
        <label for="">Hora de Entrada</label>
        <input type="time" id="HoraEntrada" name="HoraEntrada" value="<?php print($_GET['HoraEntrada'])?>" required>
        <br>
        <label for="">Hora de Salida</label>
        <input type="time" id="HoraSalida" name="HoraSalida" value="<?php print($_GET['HoraSalida'])?>" required>
        <br>
        <label for="">Semestre</label>
        <input type="number" id="Semestre" name="Semestre" value="<?php print($_GET['Semestre'])?>"value="<?php print($_GET['Municipio'])?>" min="1" max="2" size="5" required>
        <br>
        <label for="">Dictamen</label>
        <select id="Dictamen" name="Dictamen">
            <script>
                let dictamen = ["", "EXCENTO", "APROBADO", "RECHAZADO"];
                for (let i = 0; i < dictamen.length; i++) {
                    document.write("<option value=" + dictamen[i] + ">" + dictamen[i] + "</option>");
                }

                let Dictamen = "<?php print($_GET['Dictamen'])?>";
                document.getElementById("Dictamen").value = Dictamen;

            </script>
        </select>
        <br>
        <label for="">Holograma</label>
        <select id="Holograma" name="Holograma" required>
            <script>
                let hologramas = ["", "00", "0", "1", "2", "Foraneo"];
                for (let i = 0; i < hologramas.length; i++) {
                    document.write("<option value='" + hologramas[i] + "'>" + hologramas[i] + "</option>");
                }

                let Holograma = "<?php print($_GET['Holograma']) ?>";
                document.getElementById("Holograma").value = Holograma;
                
            </script>
        </select>
        <br>
        <input type="submit" value="Enviar">
    </form>
    <script>

        let EntidadFederativa = "<?php print($_GET['EntidadFederativa'])?>";
        document.getElementById("EntidadFederativa").value = EntidadFederativa;

    </script>
</body>

</html>

<?php

if(isset($_REQUEST['FolioVerificacion'])){
    $FolioVerificacion = $_REQUEST['FolioVerificacion'];
    $IDTarjeta = $_REQUEST['IDTarjeta'];
    $EntidadFederativa = $_REQUEST['EntidadFederativa'];
    $Municipio = $_REQUEST['Municipio'];
    $NumCentro = $_REQUEST['NumCentro'];
    $NumLinea = $_REQUEST['NumLinea'];
    $NombreTecnico = $_REQUEST['NombreTecnico'];
    $FechaExpedicion = $_REQUEST['FechaExpedicion'];
    $FechaVencimiento = $_REQUEST['FechaVencimiento'];
    $MotivoVerificacion = $_REQUEST['MotivoVerificacion'];
    $HoraEntrada = $_REQUEST['HoraEntrada'];
    $HoraSalida = $_REQUEST['HoraSalida'];
    $Semestre = $_REQUEST['Semestre'];
    $Dictamen = $_REQUEST['Dictamen'];
    $Holograma = $_REQUEST['Holograma'];

    $SQL = "UPDATE verificaciones SET IDTarjeta = '$IDTarjeta', 
    EntidadFederativa = '$EntidadFederativa', Municipio = '$Municipio', 
    NumCentro = '$NumCentro', NumLinea = '$NumLinea', NombreTecnico = '$NombreTecnico', 
    FechaExpedicion = '$FechaExpedicion', FechaVencimiento = '$FechaVencimiento', 
    MotivoVerificacion = '$MotivoVerificacion', HoraEntrada = '$HoraEntrada', 
    HoraSalida = '$HoraSalida', Semestre = '$Semestre', Dictamen = '$Dictamen', 
    Holograma = '$Holograma' WHERE FolioVerificacion = '$FolioVerificacion'";

    include("../conexion.php");
    $Con = Conectar();
    $Result = Ejecutar($Con, $SQL);
    $FilasAfectadas = mysqli_affected_rows($Con);
    if ($FilasAfectadas > 0) {
        echo "Se actualizaron $FilasAfectadas registros";
    }
    Cerrar($Con);
}

?>