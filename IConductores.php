<?php
    header('Content-Type: text/html; charset=UTF-8');

    $Nombre = $_POST['Nombre'];
    $ApellidoPaterno = $_POST['ApellidoPaterno'];
    $ApellidoMaterno = $_POST['ApellidoMaterno'];
    $Domicilio = $_POST['Domicilio'];
    $FechaNacimiento = $_POST['FechaNacimiento'];
    $GrupoSanguineo = $_POST['GrupoSanguineo'];
    $Donador = $_POST['Donador'];
    $Firma = $_POST['Firma'];
    $Foto = $_POST['Foto'];
    $Antiguedad = $_POST['Antiguedad'];
    $NumEmergencia = $_POST['NumEmergencia'];
    $Sexo = $_POST['Sexo'];
    $Restriccion = $_POST['Restriccion'];


    $SQL = "INSERT INTO conductores VALUES ('','$Nombre','$ApellidoPaterno','$ApellidoMaterno','$Domicilio','$FechaNacimiento','$GrupoSanguineo','$Donador','$Firma','$Foto','$Antiguedad','$NumEmergencia','$Sexo','$Restriccion')";

    // send to DBMS
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


