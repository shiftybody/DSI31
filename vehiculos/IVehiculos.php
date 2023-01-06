<?php

    $NIV = $_GET['NIV'];
    $Marca = $_GET['Modelo'];
    $Modelo = $_GET['Marca'];
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
    

    $SQL = "INSERT INTO vehiculos 
    VALUES ('', '$NIV', '$Marca', '$Modelo', '$Linea', '$Sublinea', '$Origen', 
    '$Color', '$Clase', '$TipoVehiculo', '$NumCilindros', '$Capacidad', '$NumPuertas', 
    '$NumAsientos', '$Combustible', '$Transmision', '$NumMotor', '$NumSerie')";

    include("conexion.php");
    $Con = Conectar();
    $Result = Ejecutar($Con, $SQL) or die ("Error al insertar datos".mysqli_error($Con));
    if ($Result) {
        print("Vehiculo con NIV: <strong>" . $NIV . " </strong> agregado correctamente");
    }else{
        print("Registro No insertado");
    }
    Cerrar($Con);

?>