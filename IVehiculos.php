<?php

    $NIV = $_GET['NIV'];
    $Tipo = $_GET['Tipo'];
    $Marca = $_GET['Marca'];
    $SubMarca = $_GET['SubMarca'];
    $Modelo = $_GET['Modelo'];
    $NumSerieV = $_GET['NumSerieV'];
    $Clase = $_GET['Clase'];
    $TipoCarroceria = $_GET['TipoCarroceria'];
    $NumCilindros = $_GET['NumCilindros'];
    $Color = $_GET['Color'];
    $SerieMotor = $_GET['SerieMotor'];
    $CaballosFuerza = $_GET['CaballosFuerza'];
    $TipoCombustible = $_GET['TipoCombustible'];
    $Placa = $_GET['Placa'];


    $SQL = "INSERT INTO vehiculos(IDVehiculo,NIV,Tipo,Marca,SubMarca,Modelo,NumSerieV,Clase,TipoCarroceria,NumCilindros,Color,SerieMotor,CaballosFuerza,TipoCombustible,Placa) VALUES ('','$NIV','$Tipo','$Marca','$SubMarca','$Modelo','$NumSerieV','$Clase','$TipoCarroceria','$NumCilindros','$Color','$SerieMotor','$CaballosFuerza','$TipoCombustible','$Placa')";

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