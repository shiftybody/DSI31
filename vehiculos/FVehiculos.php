<?php include 'MenuA.php' ?>
<div class="flex flex-col items-center pt-" >
<label for="">
    <h1>
        Vehiculos
    </h1>
</label>
<p></p>
<form method="GET" action="IVehiculos.php">
    <label for="">NIV</label>
    <input type="text" id="NIV" name="NIV" minlength="17" required>
    <br>
    <label for="">Modelo</label>
    <select id="Modelo" name="Modelo" required>
        <option value=""></option>
        <script>
            const currentYear = new Date().getFullYear();
            for (let i = currentYear; i >= 1800; i--) {
                document.write("<option value='" + i + "'>" + i + "</option>");
            }
        </script>
    </select>
    <br>
    <label for="">Marca</label required>
    <input type="text" id="Marca" name="Marca">
    <br>
    <label for="">Linea</label required>
    <input type="text" id="Linea" name="Linea">
    <br>
    <label fo="">Sublinea</label>
    <input type="text" id="Sublinea" name="Sublinea">
    <br>
    <label for="">Origen</label>
    <select name="Origen" id="Origen" required>
        <option value=""></option>
        <option value="Nacional">Nacional</option>
        <option value="Importado">Importado</option>
    </select>
    <br>
    <label for="">Color</label>
    <input type="text" id="Color" name="Color" required>
    <br>
    <label for="">Clase</label>
    <input type="text" id="Clase" name="Clase" required>
    <br>
    <label for="">Tipo de Vehiculo</label>
    <input type="text" id="TipoVehiculo" name="TipoVehiculo" required>
    <br>
    <label for="">Numero de cilindros</label>
    <input type="number" id="NumCilindros" name="NumCilindros" size="4" min="1" max="99" required>
    <br>
    <label for="">Capacidad</label>
    <input type="number" id="Capacidad" name="Capacidad" size="4" min="0" max="20" required>
    <br>
    <label for="">Numero de Puertas</label>
    <input type="number" id="NumPuertas" name="NumPuertas" size="4" min="0" max="20" >
    <br>
    <label for="">Numero de Asientos</label>
    <input type="number" id="NumAsientos" name="NumAsientos" size="4" min="1" max="99" required>
    <br>
    <label for="">Combustible</label>
    <select name="Combustible" id="Combustible" required>
        <script>
            const combustibles = ["","Gasolina", "Gas LP", "Gas Natural", "Diesel", "Electrico", "Manual", "Otro", "No usa"];
            for (let i = 0; i < combustibles.length; i++) {
                document.write("<option value='" + combustibles[i] + "'>" + combustibles[i] + "</option>");
            }
        </script>
    </select>
    <br>
    <label for="">Transmision</label>
    <select name="Transmision" id="Transmision" required>
        <script>
            const transmisiones = ["", "Automatica", "Estandar", "Otro"];
            for (let i = 0; i < transmisiones.length; i++) {
                document.write("<option value='" + transmisiones[i] + "'>" + transmisiones[i] + "</option>");
            }
        </script>
    </select>
    <br>
    <label>Numero de motor</label>
    <input type="text" id="NumMotor" name="NumMotor" minlength="11" maxlength="11"  required>
    <br>
    <label for="">Numero de serie</label>
    <input type="text" id="NumSerie" name="NumSerie" minlength="12" >
    <br>
    <input type="submit" value="Enviar">


</form>

</div>
</body>
</html>