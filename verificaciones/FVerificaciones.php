<?php include 'MenuA.php' ?>
<div class="flex flex-col items-center pt-" >
    <label for="">
        <h1>
            Verificaciones
        </h1>
    </label>
    <p></p>
    <form method="POST" action="IVerificaciones.php">

        <label for="">IDTarjeta</label>
        <input type="text" id="IDTarjeta" name="IDTarjeta" required>
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
        <input type="text" id="Municipio" name="Municipio">
        <br>
        <label for="">Numero del Centro</label>
        <input type="text" id="NumCentro" name="NumCentro" required>
        <br>
        <label for="">Numero de Linea</label>
        <input type="number" id="NumLinea" name="NumLinea" min="0" max="99" required>
        <br>
        <label for="">Nombre del Tecnico</label>
        <input type="text" id="NombreTecnico" name="NombreTecnico" required>
        <br>
        <label for="">Fecha de Expedicion</label>
        <input type="date" id="FechaExpedicion" name="FechaExpedicion" required>
        <br>
        <label for="">Fecha de Vencimiento</label>
        <input type="date" id="FechaVencimiento" name="FechaVencimiento">
        <br>
        <label for="">Motivo de Verificacion</label>
        <br>
        <textarea name="MotivoVerificacion" id="MotivoVerificacion" cols="25" rows="2" required></textarea>
        <br>
        <label for="">Hora de Entrada</label>
        <input type="time" id="HoraEntrada" name="HoraEntrada" required>
        <br>
        <label for="">Hora de Salida</label>
        <input type="time" id="HoraSalida" name="HoraSalida" required>
        <br>
        <label for="">Semestre</label>
        <input type="number" id="Semestre" name="Semestre" min="1" max="2" size="5" required>
        <br>
        <label for="">Dictamen</label>
        <select id="Dictamen" name="Dictamen">
            <script>
                let dictamen = ["", "EXCENTO", "APROBADO", "RECHAZADO"];
                for (let i = 0; i < dictamen.length; i++) {
                    document.write("<option value=" + dictamen[i] + ">" + dictamen[i] + "</option>");
                }
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
            </script>
        </select>
        <br>
        <input type="submit" value="Enviar">
    </form>
    <script>
        document.getElementById('FechaExpedicion').valueAsDate = new Date();
    </script>
    </div>
</body>

</html>