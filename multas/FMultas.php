<?php include 'MenuA.php' ?>
<div class="flex flex-col items-center pt-">
    <label for="">
        <h1>
            Multas
        </h1>
    </label>
    <p></p>
    <form method="GET" action="IMultas.php">
        <label for="">Fecha</label>
        <input type="date" id="Fecha" name="Fecha" readonly>
        <label for="">Hora</label>
        <input type="time" id="Hora" name="Hora">
        <br>
        <label for="">Reporte de Seccion II</label>
        <input type="text" id="ReporteSeccion" name="ReporteSeccion" maxlength="50" required>
        <br>
        <label for="">Nombre de la via</label>
        <input type="text" id="NombreVia" name="NombreVia" required>
        <br>
        <label for="">Kilometro o número</label>
        <input type="number" id="Kilometro" name="Kilometro" min="0" max="999" size="10" required>
        <br>
        <label for="">Direccion o Sentido</label>
        <select name="DireccionSentido" id="DireccionSentido" required>
            <option value=""></option>
            <option value="Norte">Norte</option>
            <option value="Sur">Sur</option>
            <option value="Este">Este</option>
            <option value="Oeste">Oeste</option>
        </select>
        <br>
        <label for="">Referencia del Lugar</label>
        <input type="text" id="ReferenciaLugar" name="ReferenciaLugar" maxlength="30" required>
        <br>
        <label for="">Municipio</label>
        <input type="text" id="Municipio" name="Municipio" required>
        <br>
        <label for="">NoLicencia</label>
        <input type="text" id="NoLicencia" name="NoLicencia" maxlength="10" placeholder="Q123456-78">
        <br>
        <label for="">IDVehiculo</label>
        <input type="text" id="IDVehiculo" name="IDVehiculo" maxlength="17" size="20">
        <br>
        <label for="">ID Tarjeta de Ciruclación</label>
        <input type="text" id="IDTarjeta" name="IDTarjeta" maxlength="9" size="10">
        <br>
        <label for="">ArticuloFundamento</label>
        <input type="text" id="ArticuloFundamento" name="ArticuloFundamento" required>
        <br>
        <label for="">Motivo</label>
        <br>
        <textarea id="Motivo" name="Motivo" cols="50" rows="3" maxlength="150" required></textarea>
        <br>
        <label for="">Garantia Retenida</label>
        <select name="GarantiaRetenida" id="GarantiaRetenida" required>
            <option value=""></option>
            <option value="Licencia">Licencia</option>
            <option value="TarjetaCirculacion">Tarjeta Circulación</option>
            <option value="Placa">Placa</option>
            <option value="Vehiculo">Vehiculo</option>
        </select>
        <br>
        <label for="">No. Partes Accidente</label>
        <input type="number" id="NumeroParteAccidente" name="NumeroParteAccidente" min="0" max="10">
        <br>
        <laber for="">Convenio</laber>
        <input type="radio" id="Convenio" name="Convenio" value="SI">Si
        <input type="radio" id="Convenio" name="Convenio" value="NO">No
        <br>
        <label for="">PuestoADisposicion</label>
        <input type="radio" id="PuestoADisposicion" name="PuestoADisposicion" value="SI" required>Si
        <input type="radio" id="PuestoADisposicion" name="PuestoADisposicion" value="NO" required>No
        <br>
        <label for="">DepositoOficial</label>
        <input type="number" id="DepositoOficial" name="DepositoOficial">
        <br>
        <label for="">ID Oficial</label>
        <input type="number" id="IDOficial" name="IDOficial" min="0" max="9999" required>
        <br>
        <label for="">Observaciones del Personal Operativo</label>
        <br>
        <textarea id="ObservacionesP" name="ObservacionesP" cols="50" rows="2" maxlength="100"></textarea>
        <br>
        <label for="">Calificacion de la boleta de infracción </label>
        <br>
        <textarea id="CalificacionBoleta" name="CalificacionBoleta" cols="50" rows="2" maxlength="100"></textarea>
        <br>
        <label for="">Observaciones del Conductor</label>
        <br>
        <textarea id="ObservacionesC" name="ObservacionesC" cols="50" rows="2" maxlength="100"></textarea>
        <br>
        <input type="submit" value="Enviar">
    </form>
    <!-- js code -->
    <script>
        // get the date and time
        document.getElementById('Fecha').valueAsDate = new Date();
        document.getElementById('Hora').value = new Date().getHours() + ":" + new Date().getMinutes();
    </script>
</div>
</body>

</html>