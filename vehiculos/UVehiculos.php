<html>
<label for="">
    <h1>
        Vehiculos
    </h1>
</label>
<p></p>

<body>
    <form method="GET" action="UVehiculos.php">
        <label for=""><strong>ID del Vehiculo</strong></label>
        <input type="text" name="IDVehiculo" id="IDVehiculo" value="<?php print($_GET['IDVehiculo'])?>" readonly>
        <br>
        <label for="">NIV</label>
        <input type="text" id="NIV" name="NIV" minlength="17" value="<?php print($_GET['NIV'])?>" required>
        <br>
        <label for="">Modelo</label>
        <select id="Modelo" name="Modelo" required>
            <option value=""></option>
            <script>
                const currentYear = new Date().getFullYear();
                for (let i = currentYear; i >= 1800; i--) {
                    document.write("<option value='" + i + "'>" + i + "</option>");
                }
                let selectedYear = "<?php print($_GET['Modelo']) ?>";
                document.getElementById("Modelo").value = selectedYear;
            </script>
        </select>
        <br>
        <label for="">Marca</label required>
        <input type="text" id="Marca" name="Marca" value="<?php print($_GET['Marca'])?>">
        <br>
        <label for="">Linea</label required>
        <input type="text" id="Linea" name="Linea" value="<?php print($_GET['Linea'])?>">
        <br>
        <label fo="">Sublinea</label>
        <input type="text" id="Sublinea" name="Sublinea" value="<?php print($_GET['Sublinea'])?>">
        <br>
        <label for="">Origen</label>
        <select name="Origen" id="Origen" required>
            <option value=""></option>
            <option value="Nacional">Nacional</option>
            <option value="Importado">Importado</option>
        </select>
        <br>
        <label for="">Color</label>
        <input type="text" id="Color" name="Color" value="<?php print($_GET['Color'])?>" required>
        <br>
        <label for="">Clase</label>
        <input type="text" id="Clase" name="Clase" value="<?php print($_GET['Clase'])?>" required>
        <br>
        <label for="">Tipo de Vehiculo</label>
        <input type="text" id="TipoVehiculo" name="TipoVehiculo" value="<?php print($_GET['TipoVehiculo'])?>" required>
        <br>
        <label for="">Numero de cilindros</label>
        <input type="number" id="NumCilindros" name="NumCilindros" value="<?php print($_GET['NumCilindros'])?>" size="4" min="1" max="99" required>
        <br>
        <label for="">Capacidad</label>
        <input type="number" id="Capacidad" name="Capacidad" value="<?php print($_GET['Capacidad'])?>" size="4" min="0" max="20" required>
        <br>
        <label for="">Numero de Puertas</label>
        <input type="number" id="NumPuertas" name="NumPuertas" value="<?php print($_GET['NumPuertas'])?>" size="4" min="0" max="20">
        <br>
        <label for="">Numero de Asientos</label>
        <input type="number" id="NumAsientos" name="NumAsientos" value="<?php print($_GET['NumAsientos'])?>" size="4" min="1" max="99" required>
        <br>
        <label for="">Combustible</label>
        <select name="Combustible" id="Combustible" required>
            <script>
                const combustibles = ["", "Gasolina", "Gas LP", "Gas Natural", "Diesel", "Electrico", "Manual", "Otro", "No usa"];
                for (let i = 0; i < combustibles.length; i++) {
                    document.write("<option value='" + combustibles[i] + "'>" + combustibles[i] + "</option>");
                }

                let selectedCombustible = "<?php print($_GET['Combustible']) ?>";
                document.getElementById("Combustible").value = selectedCombustible;
                
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

                let selectedTransmision = "<?php print($_GET['Transmision']) ?>";
                document.getElementById("Transmision").value = selectedTransmision;

            </script>
        </select>
        <br>
        <label>Numero de motor</label>
        <input type="text" id="NumMotor" name="NumMotor" value="<?php print($_GET['NumMotor'])?>" minlength="11" maxlength="11" required>
        <br>
        <label for="">Numero de serie</label>
        <input type="text" id="NumSerie" name="NumSerie" value="<?php print($_GET['NumSerie'])?>" minlength="12">
        <br><br>
        <input type="submit" value="Enviar">
        <br>
    </form>
    <script>
        let selectedOrigen = "<?php print($_GET['Origen']) ?>";
        document.getElementById("Origen").value = selectedOrigen;
    </script>
</body>

</html>

<?php

if (isset($_GET['IDVehiculo'])) {
    $IDVehiculo = $_GET['IDVehiculo'];
    $NIV = $_GET['NIV'];
    $Modelo = $_GET['Modelo'];
    $Marca = $_GET['Marca'];
    $Linea = $_GET['Linea'];
    $Sublinea = $_GET['Sublinea'];
    $Origen = $_GET['Origen'];
    $Color = $_GET['Color'];
    $Clase = $_GET['Clase'];
    $TipoVehiculo = $_GET['TipoVehiculo'];
    $NumCilindros = $_GET['NumCilindros'];
    $Capacidad = $_GET['Capacidad'];
    $NumPuertas = $_GET['NumPuertas'];
    $NumAsientos = $_GET['NumAsientos'];
    $Combustible = $_GET['Combustible'];
    $Transmision = $_GET['Transmision'];
    $NumMotor = $_GET['NumMotor'];
    $NumSerie = $_GET['NumSerie'];

    $SQL = "UPDATE vehiculos SET NIV = '$NIV', Modelo = '$Modelo', Marca = '$Marca', 
    Linea = '$Linea', Sublinea = '$Sublinea', Origen = '$Origen', Color = '$Color', 
    Clase = '$Clase', TipoVehiculo = '$TipoVehiculo', NumCilindros = '$NumCilindros', 
    Capacidad = '$Capacidad', NumPuertas = '$NumPuertas', NumAsientos = '$NumAsientos', 
    Combustible = '$Combustible', Transmision = '$Transmision', NumMotor = '$NumMotor', 
    NumSerie = '$NumSerie' WHERE IDVehiculo = '$IDVehiculo'";

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