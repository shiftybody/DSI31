<?php include '../menu/MenuA.php' ?>

<div class="flex flex-col items-center ">
    <div class="py-8 uppercase font-bold">
        <label for="conductores">
            <h1>
                ALTA DE TARJETA
            </h1>
        </label>
    </div>
    <div class="text-rose-600 text-center px-4 lg:px-10 py-2 pt-0 ">
        <p id="msg"></p>
    </div>
    <div class="mb-6" style="width:22%;">
    <form method="POST" action="ITarjetas.php">
        <label for=""  class="label-form">TipoServicio</label>
        <select class="input-form"id="TipoServicio" name="TipoServicio" required>
            <script>
                let tipos = ["", "Particular", "Publico", "Federal", "Otro"];
                for (let i = 0; i < tipos.length; i++) {
                    document.write("<option value='" + tipos[i] + "'>" + tipos[i] + "</option>");
                }
            </script>
        </select>
        <br>
        <label for=""  class="label-form">Vigencia (años)</label>
        <select class="input-form"id="Vigencia" name="Vigencia" required >
            <script>
                document.write("<option value=''></option>")
                document.write("<option value='INDEFINIDA'>INDEFINIDA</option>")
                for (var i = 1; i <= 10; i++) {
                    document.write("<option value='" + i + "'>" + i + "</option>");
                }
            </script> 
        </select> 
        <br>
        <label for=""  class="label-form">Placa</label>
        <input type="text" class="input-form"id="Placa" name="Placa" required>
        <br>
        <label for="" class="label-form">IDVehiculo</label>
        <input type="text" class="input-form"id="IDVehiculo" name="IDVehiculo" required>
        <br>
        <label for="" class="label-form">IDPropietario</label>
        <input type="text" class="input-form"id="IDPropietario" name="IDPropietario" required>
        <br>
        <label for="" class="label-form">Operacion</label required>
        <input type="text" class="input-form"id="Operacion" name="Operacion" required>
        <br>
        <label for="" class="label-form">Placa Anterior</label>
        <input type="text" class="input-form"id="PlacaAnterior" name="PlacaAnterior">
        <br>
        <label for="" class="label-form">NCI</label>
        <input type="text" class="input-form"id="NCI" name="NCI" minlength="8">
        <br>
        <label for="" class="label-form">Uso</label>
        <input type="text" class="input-form" id="Uso" name="Uso" required>
        <br>
        <label for="" class="label-form">Rfa</label>
        <input type="text" class="input-form"id="Rfa" name="Rfa">
        <br>
        <label for="" class="label-form">CVE</label>
        <input type="text" class="input-form"id="CVE" name="CVE" minlength="7" required>
        <br>
        <label for="" class="label-form">OficinaExpedidora</label>
        <input type="number" class="input-form"id="OficinaExpedidora" name="OficinaExpedidora" min="1" max="99" required>
        <br>
        <label for="" class="label-form">Movimiento</label>
        <input type="text" class="input-form"id="Movimiento" name="Movimiento" required>
        <br>
        <label for="" class="label-form">FechaExpedicion</label>
        <input type="date" class="input-form"id="FechaExpedicion" name="FechaExpedicion" readonly>
        <br>
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
    </div>
</body>

</html>