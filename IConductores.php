<?php
    header('Content-Type: text/html; charset=UTF-8');


    $Fotografia = $_POST['Fotografia'];
    $Nombre = $_POST['Nombre'];
    $ApellidoPaterno = $_POST['ApellidoPaterno'];
    $ApellidoMaterno = $_POST['ApellidoMaterno'];
    $FechaNacimiento = $_POST['FechaNacimiento'];
    $Firma = $_POST['Firma'];
    $Domicilio = $_POST['Domicilio'];
    $GrupoSanguineo = $_POST['GrupoSanguineo'];
    $Donador = $_POST['Donador'];
    $NumEmergencia = $_POST['NumEmergencia'];
    $Sexo = $_POST['Sexo'];
    $Antiguedad = $_POST['Antiguedad'];
    $Observaciones = $_REQUEST['Observaciones'];

    $SQL = "INSERT INTO conductores(IDConductor, Fotografia, Nombre, ApellidoPaterno, 
    ApellidoMaterno, FechaNacimiento, Firma, Domicilio, GrupoSanguineo, Donador,
    NumEmergencia, Sexo, Antiguedad, Observaciones) VALUES (' ', '$Fotografia', '$Nombre', 
    '$ApellidoPaterno', '$ApellidoMaterno', '$FechaNacimiento','$Firma', '$Domicilio', 
    '$GrupoSanguineo', '$Donador', '$NumEmergencia', '$Sexo', '$Antiguedad', '$Observaciones')"; 

    include("conexion.php");
    $Con = Conectar();
    $Result = Ejecutar($Con, $SQL) or die ("Error al insertar datos".mysqli_error($Con));
    if ($Result) {
        
        // return the id of the inserted row 
        $last_id = mysqli_insert_id($Con);
        //transform fist 2 numbers of the id to ascii
        $ascii = substr($last_id, 0, 2);
        $ascii = chr($ascii);
        //concatenate the ascii with the rest of the id
        $id = $ascii."-".substr($last_id, 2);
        //return the id

        print("Conductor registrado con éxito. ID: " . $id );

    }else{
        print("Registro No insertado");
    }
    Cerrar($Con);
?>


