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
    <form method="POST" action="UTarjetas.php">
        <label for=""><strong> Ingrese el ID Tarjeta de Circulacion</strong></label>
        <input type="text" name="IDTarjeta" id="IDTarjeta" required>
        <br>
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
        <select id="Vigencia" name="Vigencia" required>
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
        <input type="date" id="FechaExpedicion" name="FechaExpedicion" >
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>

</html>

<?php
    if(isset($_POST['IDTarjeta'])){

        $IDTarjeta = $_POST['IDTarjeta'];
        $TipoServicio = $_POST['TipoServicio'];
        $Vigencia = $_POST['Vigencia'];
        $Placa = $_POST['Placa'];
        $IDVehiculo = $_POST['IDVehiculo'];
        $IDPropietario = $_POST['IDPropietario'];
        $Operacion = $_POST['Operacion'];
        $PlacaAnterior = $_POST['PlacaAnterior'];
        $NCI = $_POST['NCI'];
        $Uso = $_POST['Uso'];
        $Rfa = $_POST['Rfa'];
        $CVE = $_POST['CVE'];
        $OficinaExpedidora = $_POST['OficinaExpedidora'];
        $Movimiento = $_POST['Movimiento'];
        $FechaExpedicion = $_POST['FechaExpedicion'];

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
        } else {
            echo "No se actualizaron registros";
        }
        Cerrar($Con);

    } else {
        echo "No se han recibido datos";
    }
?>