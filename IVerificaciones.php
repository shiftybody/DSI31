<?php

    $IDVerificaciones = $_REQUEST['IDVerificacion'];
    $IDTarjeta = $_REQUEST['IDTarjeta'];
    $EntidadFederativa = $_REQUEST['EntidadFederativa'];
    $Municipio = $_REQUEST['Municipio'];
    $NumVerificacion = $_REQUEST['NumVerificacion'];
    $IDTecnicoVerif = $_REQUEST['IDTecnicoVerif'];
    $NumCentroVerificacion = $_REQUEST['NumCentroVerificacion'];
    $FechaExpedicion = $_REQUEST['FechaExpedicion'];
    $HoraEntrada = $_REQUEST['HoraEntrada'];
    $HoraSalida = $_REQUEST['HoraSalida'];
    $Motivo = $_REQUEST['Motivo'];
    $FolioVerificacion = $_REQUEST['FolioVerificacion'];
    $Semestre = $_REQUEST['Semestre'];
    $FechaVencimiento = $_REQUEST['FechaVencimiento'];


    $SQL = "INSERT INTO verificacion(IDVerificacion, IDTarjeta, EntidadFederativa, Municipio, NumVerificacion, IDTecnicoVerif, NumCentroVerificacion, FechaExpedicion, HoraEntrada, HoraSalida, Motivo, FolioVerificacion, Semestre, FechaVencimiento) VALUES ('$IDVerificaciones', '$IDTarjeta', '$EntidadFederativa', '$Municipio', '$NumVerificacion', '$IDTecnicoVerif', '$NumCentroVerificacion', '$FechaExpedicion', '$HoraEntrada', '$HoraSalida', '$Motivo', '$FolioVerificacion', '$Semestre', '$FechaVencimiento')";

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