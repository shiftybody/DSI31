<?php include 'MenuA.php' ?>
<div class="flex flex-col items-center pt-" >
    <label for="">
        <h1>
            Tarjetas
        </h1>
    </label>
    <p></p>
    <form method="POST" action="ITarjetas.php">
        <label for="">TipoServicio</label>
        <select id="TipoServicio" name="TipoServicio" required>
            <script>
                let tipos = ["", "Particular", "Publico", "Federal", "Otro"];
                for (let i = 0; i < tipos.length; i++) {
                    document.write("<option value='" + tipos[i] + "'>" + tipos[i] + "</option>");
                }
            </script>
        </select>
        <br>
        <label for="">Vigencia</label>
        <select id="Vigencia" name="Vigencia" required >
            <script>
                document.write("<option value=''></option>")
                document.write("<option value='INDEFINIDA'>INDEFINIDA</option>")
                for (var i = 1; i <= 10; i++) {
                    document.write("<option value='" + i + "'>" + i + "</option>");
                }
            </script> 
        </select> años
        <br>
        <label for="">Placa</label>
        <input type="text" id="Placa" name="Placa" required>
        <br>
        <label for="">IDVehiculo</label>
        <input type="text" id="IDVehiculo" name="IDVehiculo" required>
        <br>
        <label for="">IDPropietario</label>
        <input type="text" id="IDPropietario" name="IDPropietario" required>
        <br>
        <label for="">Operacion</label required>
        <input type="text" id="Operacion" name="Operacion" required>
        <br>
        <label for="">Placa Anterior</label>
        <input type="text" id="PlacaAnterior" name="PlacaAnterior">
        <br>
        <label for="">NCI</label>
        <input type="text" id="NCI" name="NCI" minlength="8">
        <br>
        <label for="">Uso</label>
        <input type="text" id="Uso" name="Uso" required>
        <br>
        <label for="">Rfa</label>
        <input type="text" id="Rfa" name="Rfa">
        <br>
        <label for="">CVE</label>
        <input type="text" id="CVE" name="CVE" minlength="7" required>
        <br>
        <label for="">OficinaExpedidora</label>
        <input type="number" id="OficinaExpedidora" name="OficinaExpedidora" min="1" max="99" required>
        <br>
        <label for="">Movimiento</label>
        <input type="text" id="Movimiento" name="Movimiento" required>
        <br>
        <label for="">FechaExpedicion</label>
        <input type="date" id="FechaExpedicion" name="FechaExpedicion" readonly>
        <br>
        <input type="submit" value="Enviar">
    </form>
    <script>
        document.getElementById('FechaExpedicion').valueAsDate = new Date();
    </script>
    </div>
</body>

</html>