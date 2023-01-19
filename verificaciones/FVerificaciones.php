<?php include '../menu/MenuA.php' ?>

<div class="flex flex-col items-center ">
    <div class="py-8 uppercase font-bold">
        <label for="conductores">
            <h1>
                ALTA DE VERIFICACIONES
            </h1>
        </label>
    </div>
    <div class="text-rose-600 text-center px-4 lg:px-10 py-2 pt-0 ">
        <p id="msg"></p>
    </div>
    <div class="mb-6" style="width:22%;">
    <form method="POST" action="IVerificaciones.php">

        <label for="" class="label-form">IDTarjeta</label>
        <input type="text"  class="input-form" id="IDTarjeta" name="IDTarjeta" required>
        <br>
        <label for="" class="label-form">EntidadFederativa</label>
        <select  class="input-form" id="EntidadFederativa" name="EntidadFederativa">
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
        <input type="text"  class="input-form" id="Municipio" name="Municipio">
        <br>
        <label for="" class="label-form">Numero del Centro</label>
        <input type="text"  class="input-form" id="NumCentro" name="NumCentro" required>
        <br>
        <label for="" class="label-form">Numero de Linea</label>
        <input type="number"  class="input-form" id="NumLinea" name="NumLinea" min="0" max="99" required>
        <br>
        <label for="" class="label-form">Nombre del Tecnico</label>
        <input type="text"  class="input-form" id="NombreTecnico" name="NombreTecnico" required>
        <br>
        <label for="" class="label-form">Fecha de Expedicion</label>
        <input type="date"  class="input-form" id="FechaExpedicion" name="FechaExpedicion" required>
        <br>
        <label for="" class="label-form">Fecha de Vencimiento</label>
        <input type="date"  class="input-form" id="FechaVencimiento" name="FechaVencimiento">
        <br>
        <label for="" class="label-form">Motivo de Verificacion</label>
        <textarea name="MotivoVerificacion"  class="input-form" id="MotivoVerificacion" cols="25" rows="2" required></textarea>
        <br>
        <label for="" class="label-form">Hora de Entrada</label>
        <input type="time"  class="input-form" id="HoraEntrada" name="HoraEntrada" required>
        <br>
        <label for="" class="label-form">Hora de Salida</label>
        <input type="time"  class="input-form" id="HoraSalida" name="HoraSalida" required>
        <br>
        <label for="" class="label-form">Semestre</label>
        <input type="number"  class="input-form" id="Semestre" name="Semestre" min="1" max="2" size="5" required>
        <br>
        <label for="" class="label-form">Dictamen</label>
        <select  class="input-form" id="Dictamen" name="Dictamen">
            <script>
                let dictamen = ["", "EXCENTO", "APROBADO", "RECHAZADO"];
                for (let i = 0; i < dictamen.length; i++) {
                    document.write("<option value=" + dictamen[i] + ">" + dictamen[i] + "</option>");
                }
            </script>
        </select>
        <br>
        <label for="" class="label-form">Holograma</label>
        <select  class="input-form" id="Holograma" name="Holograma" required>
            <script>
                let hologramas = ["", "00", "0", "1", "2", "Foraneo"];
                for (let i = 0; i < hologramas.length; i++) {
                    document.write("<option value='" + hologramas[i] + "'>" + hologramas[i] + "</option>");
                }
            </script>
        </select>
            <button type="submit" class="bg-neutral-900 hover:bg-black text-neutral-200 active:bg-sky-700 text-sm font-bold uppercase px-6 py-3 
                      rounded drop-shadow-lg hover:shadow-xl outline-none 
                      focus:outline-none focus-blue-400 focus:bg-sky-700 hover:text-white mr-1 mb-1 w-full
                      " style="transition: all 0.15s ease 0s;">
                Registrar
            </button>
    </div>
    </form>
</div>
    <script>
        document.getElementById('FechaExpedicion').valueAsDate = new Date();
    </script>

</body>
</html>