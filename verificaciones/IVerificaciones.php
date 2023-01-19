<?php
    include '../verificaciones/FVerificaciones.php';

    $IDTarjeta = $_REQUEST['IDTarjeta'];
    $EntidadFederativa = $_REQUEST['EntidadFederativa'];
    $Municipio = $_REQUEST['Municipio'];
    $NumCentro = $_REQUEST['NumCentro'];
    $NumLinea = $_REQUEST['NumLinea'];
    $NombreTecnico = $_REQUEST['NombreTecnico'];
    $FechaExpedicion = $_REQUEST['FechaExpedicion'];
    $FechaVencimiento = $_REQUEST['FechaVencimiento'];
    $MotivoVerificacion = $_REQUEST['MotivoVerificacion'];
    $HoraEntrada = $_REQUEST['HoraEntrada'];
    $HoraSalida = $_REQUEST['HoraSalida'];
    $Semestre = $_REQUEST['Semestre'];
    $Dictamen = $_REQUEST['Dictamen'];
    $Holograma = $_REQUEST['Holograma'];


    $SQL = "INSERT INTO verificaciones(IDTarjeta, EntidadFederativa, Municipio, 
    NumCentro, NumLinea, NombreTecnico, FechaExpedicion, FechaVencimiento, HoraEntrada,
     HoraSalida, MotivoVerificacion, Semestre, Dictamen,Holograma) 
     VALUES ( '$IDTarjeta', '$EntidadFederativa', '$Municipio', '$NumCentro', 
     '$NumLinea', '$NombreTecnico', '$FechaExpedicion', '$FechaVencimiento',
     '$HoraEntrada', '$HoraSalida', '$MotivoVerificacion', '$Semestre', '$Dictamen', '$Holograma')";

    include("../conexion.php");
    $Con = Conectar();
    $Result = Ejecutar($Con, $SQL) or die ("Error al insertar datos".mysqli_error($Con));
    if ($Result) {
        print("<h1 style='text-align: center; padding-buttom:2em;'>Registro insertado correctamente con Folio: <strong>" . mysqli_insert_id($Con) . "</strong></h1>");
    }else{
        print("Registro No insertado");
    }
    Cerrar($Con);

?>