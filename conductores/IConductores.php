
<?php
    include '../conductores/FConductores.php';

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

    include("../conexion.php");
    $Con = Conectar();
    $Result = Ejecutar($Con, $SQL) or die ("Error al insertar datos".mysqli_error($Con));
    if ($Result) {

        print("<h1 style='text-align: center; padding-buttom:2em;'>Conductor registrado exitosamente con id: <strong>" . mysqli_insert_id($Con) . " </strong> </h1>");

    }else{
        print("Registro No insertado");
    }
    Cerrar($Con);
?>


