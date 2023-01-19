<?php include '../menu/MenuA.php'; ?>

<link rel="stylesheet" href="../assets/css/styles.css">

<div class="flex flex-col items-center">
    <div class="py-8 uppercase font-bold">
        <label for="verificaciones">
            <h1>
                Modificar Verificacion
            </h1>
        </label>
    </div>
    <?php
    if (!(isset($_GET['FolioVerificacion']))) {
        echo '<div class="flex justify-center flex-col text-center mb-6" style="    padding: 1.6em;
    border: 2px solid;
    border-radius: 5.5px;
    -webkit-box-shadow: -1px 9px 20px -13px rgb(0 0 0 / 68%);">
        <p>Para asegurarte que la información ingresada</p>
        <p>coincida con algun registro  favor de</p>
        <a  class="font-bold text-red-600 hover:drop-shadow-xl" href="./SVerificaciones.php"> consultar aquí </a>
    </div>';
    }
    ?>
    
    <div style="width:20%;">
    <form method="GET" action="UVerificaciones.php">

        <label for="" class="label-form"><strong> Folio Verificacion</strong></label>
        <input type="text" name="FolioVerificacion"  class="input-form" id="FolioVerificacion" value="<?php isset($_GET['FolioVerificacion']) ? print($_GET['FolioVerificacion']): null ?>"  readonly>
        <br>
        <label for="" class="label-form">IDTarjeta</label>
        <input type="text" class="input-form" id="IDTarjeta" name="IDTarjeta" value="<?php isset($_GET['IDTarjeta']) ? print($_GET['IDTarjeta']): null ?>" required>
        <br>
        <label for="" class="label-form">EntidadFederativa</label>
        <select class="input-form" id="EntidadFederativa" name="EntidadFederativa">
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
        <label for="" class="label-form">Municipio</label>
        <input type="text"  class="input-form"id="Municipio" name="Municipio" value="<?php isset($_GET['Municipio']) ? print($_GET['Municipio']): null ?>" >
        <br>
        <label for="" class="label-form">Numero del Centro</label>
        <input type="text"  class="input-form"id="NumCentro" name="NumCentro" value="<?php isset($_GET['NumCentro']) ? print($_GET['NumCentro']): null ?>" required>
        <br>
        <label for="" class="label-form">Numero de Linea</label>
        <input type="number"  class="input-form"id="NumLinea" name="NumLinea" value="<?php isset($_GET['NumLinea']) ? print($_GET['NumLinea']): null ?>" min="0" max="99" required>
        <br>
        <label for="" class="label-form">Nombre del Tecnico</label>
        <input type="text"  class="input-form"id="NombreTecnico" name="NombreTecnico" value="<?php isset($_GET['NombreTecnico']) ? print($_GET['NombreTecnico']): null ?>" required>
        <br>
        <label for="" class="label-form">Fecha de Expedicion</label>
        <input type="date" class="input-form" id="FechaExpedicion" name="FechaExpedicion" value="<?php isset($_GET['FechaExpedicion']) ? print($_GET['FechaExpedicion']): null ?>" required>
        <br>
        <label for="" class="label-form">Fecha de Vencimiento</label>
        <input type="date"  class="input-form"id="FechaVencimiento" name="FechaVencimiento" value="<?php isset($_GET['FechaVencimiento']) ? print($_GET['FechaVencimiento']): null ?>">
        <br>
        <label for="" class="label-form">Motivo de Verificacion</label>
        <textarea name="MotivoVerificacion"  class="input-form"id="MotivoVerificacion" cols="25" rows="2" required><?php isset($_GET['MotivoVerificacion']) ? print($_GET['MotivoVerificacion']): null ?>"</textarea>
        <br>
        <label for="" class="label-form">Hora de Entrada</label>
        <input type="time"  class="input-form"id="HoraEntrada" name="HoraEntrada" value="<?php isset($_GET['HoraEntrada']) ? print($_GET['HoraEntrada']): null ?>" required>
        <br>
        <label for="" class="label-form">Hora de Salida</label>
        <input type="time"  class="input-form"id="HoraSalida" name="HoraSalida" value="<?php isset($_GET['HoraSalida']) ? print($_GET['HoraSalida']): null ?>" required>
        <br>
        <label for="" class="label-form">Semestre</label>
        <input type="number"  class="input-form"id="Semestre" name="Semestre" value="<?php isset($_GET['Semestre']) ? print($_GET['Semestre']): null ?>" min="1" max="2" size="5" required>
        <br>
        <label for="" class="label-form">Dictamen</label>
        <select  class="input-form"id="Dictamen" name="Dictamen">
            <script>
                let dictamen = ["", "EXCENTO", "APROBADO", "RECHAZADO"];
                for (let i = 0; i < dictamen.length; i++) {
                    document.write("<option value=" + dictamen[i] + ">" + dictamen[i] + "</option>");
                }

                let Dictamen = "<?php isset($_GET['Dictamen']) ? print($_GET['Dictamen']): null ?>";
                document.getElementById("Dictamen").value = Dictamen;

            </script>
        </select>
        <br>
        <label for="" class="label-form">Holograma</label>
        <select  class="input-form"id="Holograma" name="Holograma" required>
            <script>
                let hologramas = ["", "00", "0", "1", "2", "Foraneo"];
                for (let i = 0; i < hologramas.length; i++) {
                    document.write("<option value='" + hologramas[i] + "'>" + hologramas[i] + "</option>");
                }

                let Holograma = "<?php isset($_GET['Holograma']) ? print($_GET['Holograma']): null ?>";
                document.getElementById("Holograma").value = Holograma;
                
            </script>
        </select>
        <div class="text-center ">
            <button type="submit" class="bg-neutral-900 hover:bg-black text-neutral-200 active:bg-sky-700 text-sm font-bold uppercase px-6 py-3 
                      rounded drop-shadow-lg hover:shadow-xl outline-none 
                      focus:outline-none focus-blue-400 focus:bg-sky-700 hover:text-white mr-1 mb-1 w-full
                      " style="transition: all 0.15s ease 0s;">
                Actualizar
            </button>
        </div>
    </div>
    </form>
    <script>

        let EntidadFederativa = "<?php print($_GET['EntidadFederativa'])?>";
        document.getElementById("EntidadFederativa").value = EntidadFederativa;

    </script>
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

</div>
</body>

</html>