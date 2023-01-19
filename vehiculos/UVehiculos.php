<?php include '../menu/MenuA.php'; ?>

<link rel="stylesheet" href="../assets/css/styles.css">

<div class="flex flex-col items-center">
    <div class="py-8 uppercase font-bold">
        <label for="vehiculos">
            <h1>
                Modificar Vehiculo
            </h1>
        </label>
    </div>
    <?php
    if (!(isset($_GET['IDVehiculo']))) {
        echo '<div class="flex justify-center flex-col text-center mb-6" style="    padding: 1.6em;
    border: 2px solid;
    border-radius: 5.5px;
    -webkit-box-shadow: -1px 9px 20px -13px rgb(0 0 0 / 68%);">
        <p>Para asegurarte que la información ingresada</p>
        <p>coincida con algun registro  favor de</p>
        <a  class="font-bold text-red-600 hover:drop-shadow-xl" href="./SVehiculos.php"> consultar aquí </a>
    </div>';
    }
    ?>
    
    <div style="width:22%;">
    <form method="GET" action="UVehiculos.php">
        <label for="" class="label-form"><strong>ID del Vehiculo</strong></label>
        <input type="text" class="input-form" name="IDVehiculo" id="IDVehiculo" value="<?php isset($_GET['IDVehiculo']) ? print($_GET['IDVehiculo']): null ?>" readonly>
        <br>
        <label for="" class="label-form">NIV</label>
        <input type="text" class="input-form"id="NIV" name="NIV" minlength="17" value="<?php isset($_GET['NIV']) ? print($_GET['NIV']): null ?>" required>
        <br>
        <label for="" class="label-form">Modelo</label>
        <select class="input-form" id="Modelo" name="Modelo" required>
            <option value=""></option>
            <script>
                const currentYear = new Date().getFullYear();
                for (let i = currentYear; i >= 1800; i--) {
                    document.write("<option value='" + i + "'>" + i + "</option>");
                }
                let selectedYear = "<?php isset($_GET['Modelo']) ? print($_GET['Modelo']): null ?>";
                document.getElementById("Modelo").value = selectedYear;
            </script>
        </select>
        <br>
        <label for="" class="label-form">Marca</label required>
        <input type="text" class="input-form" id="Marca" name="Marca" value="<?php isset($_GET['Marca']) ? print($_GET['Marca']): null ?>">
        <br>
        <label for="" class="label-form">Linea</label required>
        <input type="text" class="input-form" id="Linea" name="Linea" value="<?php isset($_GET['Linea']) ? print($_GET['Linea']): null ?>">
        <br>
        <label fo="" class="label-form">Sublinea</label>
        <input type="text" class="input-form" id="Sublinea" name="Sublinea" value="<?php isset($_GET['Sublinea']) ? print($_GET['Sublinea']): null ?>">
        <br>
        <label for="" class="label-form">Origen</label>
        <select name="Origen" class="input-form" id="Origen" required>
            <option value=""></option>
            <option value="Nacional">Nacional</option>
            <option value="Importado">Importado</option>
        </select>
        <br>
        <label for="" class="label-form">Color</label>
        <input type="text" class="input-form" id="Color" name="Color" value="<?php isset($_GET['Color']) ? print($_GET['Color']): null ?>" required>
        <br>
        <label for="" class="label-form">Clase</label>
        <input type="text" class="input-form" id="Clase" name="Clase" value="<?php isset($_GET['Clase']) ? print($_GET['Clase']): null ?>" required>
        <br>
        <label for="" class="label-form">Tipo de Vehiculo</label>
        <input type="text" class="input-form" id="TipoVehiculo" name="TipoVehiculo" value="<?php isset($_GET['TipoVehiculo']) ? print($_GET['TipoVehiculo']): null ?>" required>
        <br>
        <label for="" class="label-form">Numero de cilindros</label>
        <input type="number" class="input-form" id="NumCilindros" name="NumCilindros" value="<?php isset($_GET['NumCilindros']) ? print($_GET['NumCilindros']): null ?>" size="4" min="1" max="99" required>
        <br>
        <label for="" class="label-form">Capacidad</label>
        <input type="number" class="input-form" id="Capacidad" name="Capacidad" value="<?php isset($_GET['Capacidad']) ? print($_GET['Capacidad']): null ?>"size="4" min="0" max="20" required>
        <br>
        <label for="" class="label-form">Numero de Puertas</label>
        <input type="number" class="input-form" id="NumPuertas" name="NumPuertas" value="<?php isset($_GET['NumPuertas']) ? print($_GET['NumPuertas']): null ?>" size="4" min="0" max="20">
        <br>
        <label for="" class="label-form">Numero de Asientos</label>
        <input type="number" class="input-form" id="NumAsientos" name="NumAsientos" value="<?php isset($_GET['NumAsientos']) ? print($_GET['NumAsientos']): null ?>" size="4" min="1" max="99" required>
        <br>
        <label for="" class="label-form">Combustible</label>
        <select name="Combustible" class="input-form" id="Combustible" required>
            <script>
                const combustibles = ["", "Gasolina", "Gas LP", "Gas Natural", "Diesel", "Electrico", "Manual", "Otro", "No usa"];
                for (let i = 0; i < combustibles.length; i++) {
                    document.write("<option value='" + combustibles[i] + "'>" + combustibles[i] + "</option>");
                }

                let selectedCombustible = "<?php isset($_GET['Combustible']) ? print($_GET['Combustible']): null ?>";
                document.getElementById("Combustible").value = selectedCombustible;
                
            </script>
        </select>
        <br>
        <label for="" class="label-form">Transmision</label>
        <select name="Transmision" class="input-form" id="Transmision" required>
            <script>
                const transmisiones = ["", "Automatica", "Estandar", "Otro"];
                for (let i = 0; i < transmisiones.length; i++) {
                    document.write("<option value='" + transmisiones[i] + "'>" + transmisiones[i] + "</option>");
                }

                let selectedTransmision = "<?php isset($_GET['Transmision']) ? print($_GET['Transmision']): null ?>";
                document.getElementById("Transmision").value = selectedTransmision;

            </script>
        </select>
        <br>
        <label  class="label-form">Numero de motor</label>
        <input type="text" class="input-form" id="NumMotor" name="NumMotor" value="<?php isset($_GET['NumMotor']) ? print($_GET['NumMotor']): null ?>" minlength="11" maxlength="11" required>
        <br>
        <label for="" class="label-form">Numero de serie</label>
        <input type="text" class="input-form" id="NumSerie" name="NumSerie" value="<?php isset($_GET['NumSerie']) ? print($_GET['NumSerie']): null ?>" minlength="12">
        <br><br>
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
        let selectedOrigen = "<?php print($_GET['Origen']) ?>";
        document.getElementById("Origen").value = selectedOrigen;
    </script>

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
</div>
</body>

</html>