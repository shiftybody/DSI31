<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarjetas</title>
</head>

<body>
    <label for="">
        <h1>
            Tarjetas
        </h1>
    </label>
    <p></p>
    <!-- Change POST to GET -->
    <form method="GET" action="UTarjetas.php">
        <label for=""><strong>ID Tarjeta de Circulacion</strong></label>
        <input type="text" name="IDTarjeta" id="IDTarjeta" value="<?php print($_GET['IDTarjeta'])?>" readonly>
        <br>
        <label for="">TipoServicio</label>
        <select id="TipoServicio" name="TipoServicio" required>
            <script>
                let tipos = ["", "Particular", "Publico", "Federal", "Otro"];
                for (let i = 0; i < tipos.length; i++) {
                    document.write("<option value='" + tipos[i] + "'>" + tipos[i] + "</option>");
                }

                let tipo = "<?php print($_GET['TipoServicio'])?>";
                document.getElementById("TipoServicio").value = tipo;

            </script>
        </select>
        <br>
        <label for="">Vigencia</label>
        <select id="Vigencia" name="Vigencia" required>
            <script>
                document.write("<option value=''></option>")
                document.write("<option value='INDEFINIDA'>INDEFINIDA</option>")
                for (var i = 1; i <= 10; i++) {
                    document.write("<option value='" + i + "'>" + i + "</option>");
                }

                let vigencia = "<?php print($_GET['Vigencia'])?>";
                document.getElementById("Vigencia").value = vigencia;

            </script>
        </select> años
        <br>
        <label for="">Placa</label>
        <input type="text" id="Placa" name="Placa" value="<?php print($_GET['Placa'])?>" required>
        <br>
        <label for="">IDVehiculo</label>
        <input type="text" id="IDVehiculo" name="IDVehiculo" value="<?php print($_GET['IDVehiculo'])?>" required>
        <br>
        <label for="">IDPropietario</label>
        <input type="text" id="IDPropietario" name="IDPropietario" value="<?php print($_GET['IDPropietario'])?>" required>
        <br>
        <label for="">Operacion</label required>
        <input type="text" id="Operacion" name="Operacion" value="<?php print($_GET['Operacion'])?>" required>
        <br>
        <label for="">Placa Anterior</label>
        <input type="text" id="PlacaAnterior" name="PlacaAnterior" value="<?php print($_GET['PlacaAnterior'])?>">
        <br>
        <label for="">NCI</label>
        <input type="text" id="NCI" name="NCI" minlength="8" value="<?php print($_GET['NCI'])?>">
        <br>
        <label for="">Uso</label>
        <input type="text" id="Uso" name="Uso" required value="<?php print($_GET['Uso'])?>">
        <br>
        <label for="">Rfa</label>
        <input type="text" id="Rfa" name="Rfa" value="<?php print($_GET['Rfa'])?>">
        <br>
        <label for="">CVE</label>
        <input type="text" id="CVE" name="CVE" minlength="7" value="<?php print($_GET['CVE'])?>" required >
        <br>
        <label for="">OficinaExpedidora</label>
        <input type="number" id="OficinaExpedidora" name="OficinaExpedidora" min="1" max="99" value="<?php print($_GET['OficinaExpedidora'])?>" required>
        <br>
        <label for="">Movimiento</label>
        <input type="text" id="Movimiento" name="Movimiento" value="<?php print($_GET['Movimiento'])?>" required>
        <br>
        <label for="">FechaExpedicion</label>
        <input type="date" id="FechaExpedicion" name="FechaExpedicion" value="<?php print($_GET['FechaExpedicion'])?>" >
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>

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
    

        include("conexion.php");
        $Con = Conectar();
        $Result = Ejecutar($Con, $SQL);
        $FilasAfectadas = mysqli_affected_rows($Con);
        if ($FilasAfectadas > 0) {
            echo "Se actualizaron $FilasAfectadas registros";
        } 
        Cerrar($Con);
    } 
?>