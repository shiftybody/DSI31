
<?php
    include '../conductores/FConductores.php';


    $Fotografia = $_FILES['Fotografia']['name'];
    $FotografiaTmp_name = $_FILES['Fotografia']['tmp_name'];
    $FotografiaError = $_FILES['Fotografia']['error'];
    $FotografiaTipo = $_FILES['Fotografia']['type'];
    $FotografiaSize = $_FILES['Fotografia']['size'];

    $Nombre = $_POST['Nombre'];
    $ApellidoPaterno = $_POST['ApellidoPaterno'];
    $ApellidoMaterno = $_POST['ApellidoMaterno'];
    $FechaNacimiento = $_POST['FechaNacimiento'];

    $Firma = $_FILES['Firma']['name'];
    $FirmaTmp_name = $_FILES['Firma']['tmp_name'];
    $FirmaError = $_FILES['Firma']['error'];
    $FirmaTipo = $_FILES['Firma']['type'];
    $FirmaSize = $_FILES['Firma']['size'];

    $Domicilio = $_POST['Domicilio'];
    $GrupoSanguineo = $_POST['GrupoSanguineo'];
    $Donador = $_POST['Donador'];
    $NumEmergencia = $_POST['NumEmergencia'];
    $Sexo = $_POST['Sexo'];
    $Antiguedad = $_POST['Antiguedad'];
    $Observaciones = $_REQUEST['Observaciones'];

    include("../conexion.php");
    $Con = Conectar();
    $SQL = "SELECT MAX(IDconductor) AS ID FROM conductores";
    $Result = Ejecutar($Con, $SQL);

    if ($row = mysqli_fetch_row($Result)) {
        $IDString = trim($row[0]) + 1;
        $ID = (int) $IDString;
    }

    cerrar($Con);

    if($FotografiaError > 0 || $FirmaError > 0){
        echo "<h1 style='text-align: center; padding-buttom:2em;'>Error al cargar archivos</h1>";
    } else {
        $ArchivoPermitido = array("image/gif","image/png","image/jpg");
        $limite = 500 * 1024;

        $RutaFotografia =$_SERVER['DOCUMENT_ROOT'].'/DSI31/uploads/fotos/'.$ID.'/';
        $ArchivoFotografia = $RutaFotografia.$Fotografia;

        $RutaFirma = $_SERVER['DOCUMENT_ROOT'].'/DSI31/uploads/firmas/'.$ID.'/'; 
        $ArchivoFirma = $RutaFirma.$Firma;

        if(!file_exists($RutaFotografia)){
            mkdir($RutaFotografia);
        } 
            
        if(!file_exists($RutaFirma)){
           mkdir($RutaFirma);
        };
            
        $UploadFotografia = @move_uploaded_file($FotografiaTmp_name, $ArchivoFotografia);
        $UploadFirma = @move_uploaded_file($FirmaTmp_name, $ArchivoFirma);

        if($UploadFotografia && $UploadFirma){
            echo "<h1 style='text-align: center; padding-buttom:2em;'>Archivos almacenados correctamente</h1>";
        } else {
             echo "<h1 style='text-align: center; padding-buttom:2em;'>Problema al guardar los archivos</h1>";
        }
            
    
    } 


    $SQL = "INSERT INTO conductores(IDConductor, Fotografia, Nombre, ApellidoPaterno, 
    ApellidoMaterno, FechaNacimiento, Firma, Domicilio, GrupoSanguineo, Donador,
    NumEmergencia, Sexo, Antiguedad, Observaciones) VALUES (' ', '$Fotografia', '$Nombre',
    '$ApellidoPaterno', '$ApellidoMaterno', '$FechaNacimiento','$Firma', '$Domicilio', 
    '$GrupoSanguineo', '$Donador', '$NumEmergencia', '$Sexo', '$Antiguedad', '$Observaciones')"; 

    $Con = Conectar();
    $Result = Ejecutar($Con, $SQL) or die ("Error al insertar datos".mysqli_error($Con));
    if ($Result) {

        print("<h1 style='text-align: center; padding-buttom:2em;'>Conductor registrado exitosamente con id: <strong>" . mysqli_insert_id($Con) . " </strong> </h1>");

    }else{
        print("Registro No insertado");
    }
    Cerrar($Con);
?>


