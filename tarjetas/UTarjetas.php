<?php include '../menu/MenuA.php'; ?>

<link rel="stylesheet" href="../assets/css/styles.css">

<div class="flex flex-col items-center">
    <div class="py-8 uppercase font-bold">
        <label for="conductores">
            <h1>
                Modificar Conductor
            </h1>
        </label>
    </div>
    <?php
    if (!(isset($_GET['IDTarjeta']))) {
        echo '<div class="flex justify-center flex-col text-center mb-6" style="    padding: 1.6em;
    border: 2px solid;
    border-radius: 5.5px;
    -webkit-box-shadow: -1px 9px 20px -13px rgb(0 0 0 / 68%);">
        <p>Para asegurarte que la información ingresada</p>
        <p>coincida con algun registro  favor de</p>
        <a  class="font-bold text-red-600 hover:drop-shadow-xl" href="./SConductores.php"> consultar aquí </a>
    </div>';
    }
    ?>
    
    <div style="width:22%;">
    <form method="GET" action="UTarjetas.php">
        <label for="" class="label-form"><strong>ID Tarjeta de Circulacion</strong></label>
        <input type="text" class="input-form" name="IDTarjeta" id="IDTarjeta" value="<?php isset($_GET['IDTarjeta']) ? print($_GET['IDTarjeta']): null ?>"  readonly>
        <br>
        <label for="" class="label-form">TipoServicio</label>
        <select id="TipoServicio" class="input-form" name="TipoServicio" required>
            <script>
                let tipos = ["", "Particular", "Publico", "Federal", "Otro"];
                for (let i = 0; i < tipos.length; i++) {
                    document.write("<option value='" + tipos[i] + "'>" + tipos[i] + "</option>");
                }

                let tipo = "<?php isset($_GET['TipoServicio']) ? print($_GET['TipoServicio']): null ?>" ;
                document.getElementById("TipoServicio").value = tipo;

            </script>
        </select>
        <br>
        <label for="" class="label-form">Vigencia</label>
        <select id="Vigencia" class="input-form" name="Vigencia" required>
            <script>
                document.write("<option value=''></option>")
                document.write("<option value='INDEFINIDA'>INDEFINIDA</option>")
                for (var i = 1; i <= 10; i++) {
                    document.write("<option value='" + i + "'>" + i + "</option>");
                }

                let vigencia = "<?php isset($_GET['Vigencia']) ? print($_GET['Vigencia']): null ?>" ;
                document.getElementById("Vigencia").value = vigencia;

            </script>
        </select> años
        <br>
        <label for="" class="label-form">Placa</label>
        <input type="text" id="Placa" class="input-form" name="Placa" value="<?php isset($_GET['Placa']) ? print($_GET['Placa']): null ?>" required>
        <br>
        <label for="" class="label-form">IDVehiculo</label>
        <input type="text" class="input-form" id="IDVehiculo" name="IDVehiculo" value="<?php isset($_GET['IDVehiculo']) ? print($_GET['IDVehiculo']): null ?>"  required>
        <br>
        <label for="" class="label-form">IDPropietario</label>
        <input type="text" class="input-form" id="IDPropietario" name="IDPropietario" value="<?php isset($_GET['IDPropietario']) ? print($_GET['IDPropietario']): null ?>"  required>
        <br>
        <label for="" class="label-form">Operacion</label required>
        <input type="text" class="input-form" id="Operacion" name="Operacion" value="<?php isset($_GET['Operacion']) ? print($_GET['Operacion']): null ?>"  required>
        <br>
        <label for="" class="label-form">Placa Anterior</label>
        <input type="text" class="input-form" id="PlacaAnterior" name="PlacaAnterior" value="<?php isset($_GET['PlacaAnterior']) ? print($_GET['PlacaAnterior']): null ?>" >
        <br>
        <label for="" class="label-form">NCI</label>
        <input type="text" class="input-form" id="NCI" name="NCI" minlength="8" value="<?php isset($_GET['NCI']) ? print($_GET['NCI']): null ?>" >
        <br>
        <label for="" class="label-form">Uso</label>
        <input type="text" class="input-form" id="Uso" name="Uso" required value="<?php isset($_GET['Uso']) ? print($_GET['Uso']): null ?>" >
        <br>
        <label for="" class="label-form">Rfa</label>
        <input type="text" class="input-form" id="Rfa" name="Rfa" value="<?php isset($_GET['Rfa']) ? print($_GET['Rfa']): null ?>" >
        <br>
        <label for="" class="label-form">CVE</label>
        <input type="text" class="input-form" id="CVE" name="CVE" minlength="7" value="<?php isset($_GET['CVE']) ? print($_GET['CVE']): null ?>"  required >
        <br>
        <label for="" class="label-form">OficinaExpedidora</label>
        <input type="number" class="input-form" id="OficinaExpedidora" name="OficinaExpedidora" min="1" max="99" value="<?php isset($_GET['OficinaExpedidora']) ? print($_GET['OficinaExpedidora']): null ?>"  required>
        <br>
        <label for="" class="label-form">Movimiento</label>
        <input type="text" class="input-form" id="Movimiento" name="Movimiento" value="<?php isset($_GET['Movimiento']) ? print($_GET['Movimiento']): null ?>"  required>
        <br>
        <label for="" class="label-form">FechaExpedicion</label>
        <input type="date" class="input-form" id="FechaExpedicion" name="FechaExpedicion" value="<?php isset($_GET['FechaExpedicion']) ? print($_GET['FechaExpedicion']): null ?>"  >
        <br>
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

<?php
    // from POST to REQUEST
    if(isset($_REQUEST['IDTarjeta'])){

        $IDTarjeta = $_REQUEST['IDTarjeta'];
        $TipoServicio = $_REQUEST['TipoServicio'];
        $Vigencia = $_REQUEST['Vigencia'];
        $Placa = $_REQUEST['Placa'];
        $IDVehiculo = $_REQUEST['IDVehiculo'];
        $IDPropietario = $_REQUEST['IDPropietario'];
        $Operacion = $_REQUEST['Operacion'];
        $PlacaAnterior = $_REQUEST['PlacaAnterior'];
        $NCI = $_REQUEST['NCI'];
        $Uso = $_REQUEST['Uso'];
        $Rfa = $_REQUEST['Rfa'];
        $CVE = $_REQUEST['CVE'];
        $OficinaExpedidora = $_REQUEST['OficinaExpedidora'];
        $Movimiento = $_REQUEST['Movimiento'];
        $FechaExpedicion = $_REQUEST['FechaExpedicion'];
        

        $SQL = "UPDATE tarjetas SET TipoServicio = '$TipoServicio', Vigencia = '$Vigencia', 
        Placa = '$Placa', IDVehiculo = '$IDVehiculo', IDPropietario = '$IDPropietario', 
        Operacion = '$Operacion', PlacaAnterior = '$PlacaAnterior', NCI = '$NCI', Uso = '$Uso', 
        Rfa = '$Rfa', CVE = '$CVE', OficinaExpedidora = '$OficinaExpedidora', Movimiento = '$Movimiento', 
        FechaExpedicion = '$FechaExpedicion' WHERE IDTarjeta = '$IDTarjeta'"; 
    

        include("../conexion.php");
        $Con = Conectar();
        $Result = Ejecutar($Con, $SQL);
        $FilasAfectadas = mysqli_affected_rows($Con);
        if ($FilasAfectadas > 0) {
            echo "<h1>Se actualizaron $FilasAfectadas registros </h1>";
        } 
        Cerrar($Con);
    } 
?>

</div>
</body>

</html>