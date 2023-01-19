<?php include '../menu/MenuA.php' ?>

<div class="flex flex-col items-center ">
    <div class="py-8 uppercase font-bold">
        <label for="conductores">
            <h1>
                ALTA DE MULTAS
            </h1>
        </label>
    </div>
    <div class="text-rose-600 text-center px-4 lg:px-10 py-2 pt-0 ">
        <p id="msg"></p>
    </div>
    <div class="mb-6">
    <form method="GET" action="IMultas.php">
        <label for="" class="label-form">Fecha</label>
        <input type="date" class="input-form" id="Fecha" name="Fecha" readonly>
        <label for=""  class="label-form">Hora</label>
        <input type="time" class="input-form" id="Hora" name="Hora">
        <br>
        <label for="" class="label-form">Reporte de Seccion II</label>
        <input type="text"  class="input-form" id="ReporteSeccion" name="ReporteSeccion" maxlength="50" required>
        <br>
        <label for=""  class="label-form">Nombre de la via</label>
        <input type="text" class="input-form" id="NombreVia" name="NombreVia" required>
        <br>
        <label for="" class="label-form">Kilometro o número</label>
        <input type="number" class="input-form"  id="Kilometro" name="Kilometro" min="0" max="999" size="10" required>
        <br>
        <label for="" class="label-form">Direccion o Sentido</label>
        <select name="DireccionSentido" class="input-form" id="DireccionSentido" required>
            <option value=""></option>
            <option value="Norte">Norte</option>
            <option value="Sur">Sur</option>
            <option value="Este">Este</option>
            <option value="Oeste">Oeste</option>
        </select>
        <br>
        <label for="" class="label-form">Referencia del Lugar</label>
        <input type="text" class="input-form" id="ReferenciaLugar" name="ReferenciaLugar" maxlength="30" required>
        <br>
        <label for=""  class="label-form">Municipio</label>
        <input type="text" class="input-form" id="Municipio" name="Municipio" required>
        <br>
        <label for="" class="label-form">NoLicencia</label>
        <input type="text" class="input-form" id="NoLicencia" name="NoLicencia" maxlength="10" placeholder="Q123456-78">
        <br>
        <label for="" class="label-form">IDVehiculo</label>
        <input type="text" class="input-form" id="IDVehiculo" name="IDVehiculo" maxlength="17" size="20">
        <br>
        <label for="" class="label-form">ID Tarjeta de Ciruclación</label>
        <input type="text" class="input-form" id="IDTarjeta" name="IDTarjeta" maxlength="9" size="10">
        <br>
        <label for="" class="label-form">ArticuloFundamento</label>
        <input type="text" class="input-form" id="ArticuloFundamento" name="ArticuloFundamento" required>
        <br>
        <label for="" class="label-form">Motivo</label>
        <br>
        <textarea id="Motivo" class="input-form" name="Motivo" cols="50" rows="3" maxlength="150" required></textarea>
        <br>
        <label for="" class="label-form">Garantia Retenida</label>
        <select  class="input-form"  name="GarantiaRetenida" id="GarantiaRetenida" required>
            <option value=""></option>
            <option value="Licencia">Licencia</option>
            <option value="TarjetaCirculacion">Tarjeta Circulación</option>
            <option value="Placa">Placa</option>
            <option value="Vehiculo">Vehiculo</option>
        </select>
        <br>
        <label for="" class="label-form">No. Partes Accidente</label>
        <input type="number" class="input-form" id="NumeroParteAccidente" name="NumeroParteAccidente" min="0" max="10">
        <br>
        <div class="flex justify-center items-center py-2">
        <laber for=""  class="label-form">Convenio</laber>
        <input type="radio" class="w-4 h-4 mx-1" id="Convenio" name="Convenio" value="SI">Si
        <input type="radio" class="w-4 h-4 mx-1" id="Convenio" name="Convenio" value="NO">No
        </div>
        <div class="flex justify-center items-center py-2">
        <label for="" class="label-form">PuestoADisposicion</label>
        <input type="radio" class="w-4 h-4 mx-1" id="PuestoADisposicion" name="PuestoADisposicion" value="SI" required>Si
        <input type="radio" class="w-4 h-4 mx-1" id="PuestoADisposicion" name="PuestoADisposicion" value="NO" required>No
        </div>
        <label for="" class="label-form">DepositoOficial</label>
        <input type="number" class="input-form" id="DepositoOficial" name="DepositoOficial">
        <br>
        <label for="" class="label-form">ID Oficial</label>
        <input type="number" class="input-form" id="IDOficial" name="IDOficial" min="0" max="9999" required>
        <br>
        <label for="" class="label-form">Observaciones del Personal Operativo</label>
        <textarea class="input-form" id="ObservacionesP" name="ObservacionesP" cols="50" rows="2" maxlength="100"></textarea>
        <label for="" class="label-form">Calificacion de la boleta de infracción </label>
        <textarea class="input-form" id="CalificacionBoleta" name="CalificacionBoleta" cols="50" rows="2" maxlength="100"></textarea>
        <label for="" class="label-form">Observaciones del Conductor</label>
        <textarea class="input-form" id="ObservacionesC" name="ObservacionesC" cols="50" rows="2" maxlength="100"></textarea>
        <button type="submit" class="bg-neutral-900 hover:bg-black text-neutral-200 active:bg-sky-700 text-sm font-bold uppercase px-6 py-3 
                      rounded drop-shadow-lg hover:shadow-xl outline-none 
                      focus:outline-none focus-blue-400 focus:bg-sky-700 hover:text-white mr-1 mb-1 w-full
                      " style="transition: all 0.15s ease 0s;">
                Registrar
            </button>
</div>
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