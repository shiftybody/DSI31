<?php

    $IDTarjeta = $_POST['IDTarjeta'];
    $TipoServicio = $_POST['TipoServicio'];
    $IDVehiculo = $_POST['IDVehiculo'];
    $IDPropietario = $_POST['IDPropietario'];
    $NumConstanciaInscripcion = $_POST['NumConstanciaInscripcion'];
    $Servicio = $_POST['Servicio'];
    $Origen = $_POST['Origen'];
    $Folio = $_POST['Folio'];
    $FechaVencimiento = $_POST['FechaVencimiento'];
    $CVEVehiculo = $_POST['CVEVehiculo'];
    $Uso = $_POST['Uso'];
    $Operacion = $_POST['Operacion'];
    $OficinaOperacion = $_POST['OficinaOperacion'];
    $Movimiento = $_POST['Movimiento'];
    $RFA = $_POST['RFA'];

    $SQL = "INSERT INTO tarjetas(IDTarjeta,TipoServicio,IDVehiculo,IDPropietario,NumConstanciaInscripcion,Servicio,Origen,Folio,FechaVencimiento,CVEVehiculo,Uso,Operacion,OficinaOperacion,Movimiento,RFA) VALUES ('$IDTarjeta','$TipoServicio','$IDVehiculo','$IDPropietario','$NumConstanciaInscripcion','$Servicio','$Origen','$Folio','$FechaVencimiento','$CVEVehiculo','$Uso','$Operacion','$OficinaOperacion','$Movimiento','$RFA')";

    include("conexion.php");
    $Con = Conectar();
    $Result = Ejecutar($Con, $SQL) or die ("Error al insertar datos".mysqli_error($Con));
    if ($Result) {
        print("Registro insertado correctamente");
    }else{
        print("Registro No insertado");
    }
    Cerrar($Con);

?>
