<?php   

include '../licencias/Flicencias.php';

$IDConductor = $_GET['IDConductor'];
$TipoLicencia = $_GET['TipoLicencia'];
$AtributoD = $_GET['AtributoDesconocido'];
$FechaExpedicion = $_GET['FechaExpedicion'];
$Vigencia = $_GET['Vigencia'];
$FechaVencimiento = date('Y-m-d', strtotime($FechaExpedicion . ' + ' . $Vigencia . ' years'));
$Restricciones = $_REQUEST['Restricciones'];


$SQL = "INSERT INTO licencias 
VALUES ('', '$IDConductor','$TipoLicencia','$FechaExpedicion',
'$FechaVencimiento', '$AtributoD', '$Restricciones')";

include("../conexion.php");
$Con = Conectar();
$Result = Ejecutar($Con, $SQL) or die("Error al insertar datos" . mysqli_error($Con));
if ($Result) {

    // Leer el ultimo IDLicencia de la tabla Licencias
    $last_sql_id = mysqli_insert_id($Con);
    $ascii = chr(substr($last_sql_id, 0, 2));
    $id = $ascii . substr($last_sql_id, 2, 6) . "-" . substr($last_sql_id, 8);


    // generar el pdf de la licencia

    $SQL2 = "SELECT l.TipoLicencia, c.Fotografia, c.Nombre, c.ApellidoPaterno, c.ApellidoMaterno, c.Observaciones, c.FechaNacimiento,
        l.FechaExpedicion, l.FechaVencimiento, c.Antiguedad, c.Firma, l.AtributoD, c.Domicilio, l.Restricciones, c.GrupoSanguineo,
         c.Donador, c.NumEmergencia, l.IDConductor FROM licencias l, conductores c WHERE l.IDLicencia ='$last_sql_id' AND l.IDConductor= c.IDConductor;";

    $ResultSelect = Ejecutar($Con, $SQL2);
    $Fila = mysqli_fetch_row($ResultSelect);

    require('../fpdf.php');

    $pdf = new FPDF();

    /* Cara frontal de la licencia */
    $pdf->AddPage();

    $fotografia ='../uploads/fotos/'.$Fila[17].'/' . $Fila[1];
    $firma = '../uploads/firmas/'.$Fila[17].'/' . $Fila[10];

    # Sección de la información del estado
    $country = utf8_decode("Estados Unidos Mexicanos");
    $branch = utf8_decode("Poder Ejecutivo del Estado de Querétaro");
    $title = utf8_decode("Licencia para conducir");
    $secretaria = utf8_decode("Secretaría de Seguridad Ciudadana");

    # Sección de la foto y tipo de licencia
    $noLicencia = utf8_decode("No. de Licencia");
    $licencia = utf8_decode($id);

    $tipoConductor = utf8_decode($Fila[0]);

    # Nombre del conductor
    $apellidoPaterno = utf8_decode($Fila[3]);
    $apellidoMaterno = utf8_decode($Fila[4]);
    $nombre = utf8_decode($Fila[2]);

    # Fechas y antigüedad
    $fechaNacimiento = utf8_decode($Fila[6]);
    $fechaExpedicion = utf8_decode($Fila[7]);
    $validez = utf8_decode($Fila[8]);
    $antiguedad = utf8_decode($Fila[9]);

    # Tipo de licencia
    $tipoLicencia = utf8_decode($Fila[0]);

    # Aviso
    $aviso = utf8_decode("AUTORIZADA PARA QUE LA PRESENTE SEA RECABADA COMO GARANTÍA DE INFRACCIÓN");

    # Folio
    $folio = utf8_decode($Fila[11]);
    $domicilio = utf8_decode($Fila[12]);
    $grupoSanguineo = utf8_decode($Fila[14]);
    $donador = utf8_decode($Fila[15]);
    $numeroEmegencia = utf8_decode($Fila[16]);
    $nombreFirma = utf8_decode("M. EN .P JUAN MARCOS GRANADOS TORRES SECRETARIO DE SEGURIDAD CIUDADANA");
    $fundamento = utf8_decode("Officia consequat adipisicing veniam ex excepteur dolor aute duis nostrud veniam aliqua ea tempor exercitation. Sint anim non ut Lorem et sit mollit aliquip laboris. Adipisicing proident excepteur exercitation dolor aliqua aliqua aliqua do eiusmod cupidatat. Est aliquip irure ea fugiat proident commodo nisi nisi Lorem culpa sit ipsum excepteur duis. Voluptate cillum officia pariatur non irure exercitation magna. Quis aliquip do irure pariatur exercitation nulla cillum mollit do. Nisi pariatur minim aliqua id eiusmod do in culpa voluptate pariatur.");


#  Imagen del estado
$pdf->Image('../assets/img/escudo.png', 10, 10, 20, 25);
# Línea vertical gris
$pdf->SetFillColor(169, 169, 169);
$pdf->Rect(35, 10, 0.5, 25, 'F');
$pdf->SetLeftMargin(40);

# Información del estado
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(10, 5, $country, 0, 1);
$pdf->Cell(10, 5, $branch, 0, 1);
$pdf->SetFont('Arial', 'B', 13);
$pdf->Cell(10, 3, '', 0, 1);
$pdf->Cell(10, 6, $secretaria, 0, 1);
$pdf->SetFont('Arial', 'B', 15);
$pdf->Cell(10, 6, $title, 0, 1);

# Información del tipo de licencia
$pdf->SetY(110);
$pdf->SetFont('Arial', '', 12);
$pdf->SetX(90);
$pdf->Cell(30, 5, $noLicencia, 0, 1, 'R');
$pdf->SetFont('Arial', 'B', 22);
$pdf->SetTextColor(255, 0, 0);
$pdf->SetX(90);
$pdf->Cell(30, 15, $licencia, 0, 1, 'R');
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', 'B', 12);
$pdf->SetX(90);
$pdf->Cell(30, 5, $tipoConductor, 0, 1, 'R');
$pdf->Image($fotografia, 130, 70, 70, 70);

# Nombre del conductor
$pdf->SetY(140);
$pdf->SetX(170);
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(30, 7, 'Nombre', 0, 1, 'R');
$pdf->SetX(170);
$pdf->SetFont('Arial', '', 20);
$pdf->Cell(30, 7, $apellidoPaterno, 0, 1, 'R');
$pdf->SetX(170);
$pdf->Cell(30, 7, $apellidoMaterno, 0, 1, 'R');
$pdf->SetX(170);
$pdf->SetFont('Arial', 'B', 20);
$pdf->Cell(30, 5, '', 0, 1, 'R');
$pdf->SetX(170);
$pdf->Cell(30, 5, $nombre, 0, 1, 'R');
$pdf->SetX(170);
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(30, 7, 'Observaciones', 0, 1, 'R');

# Fechas de la licencia y antiguedad
$pdf->SetY(200);
$pdf->SetFont('Arial', '', 10);
$pdf->SetX(10);
$pdf->Cell(30, 7, 'Fecha de nacimiento', 0, 1);
$pdf->SetX(10);
$pdf->SetFont('Arial', '', 18);
$pdf->Cell(30, 7, $fechaNacimiento, 0, 1);

$pdf->SetFont('Arial', '', 10);
$pdf->SetX(10);
$pdf->Cell(30, 7, utf8_decode('Fecha de Expedición'), 0, 1);
$pdf->SetX(10);
$pdf->SetFont('Arial', '', 18);
$pdf->Cell(30, 7, $fechaExpedicion, 0, 1);

$pdf->SetFont('Arial', '', 10);
$pdf->SetX(10);
$pdf->Cell(30, 7, utf8_decode('Válida hasta'), 0, 1);
$pdf->SetX(10);
$pdf->SetFont('Arial', '', 18);
$pdf->Cell(30, 7, $validez, 0, 1);

$pdf->SetFont('Arial', '', 10);
$pdf->SetX(10);
$pdf->Cell(30, 7, utf8_decode('Antigüedad'), 0, 1);
$pdf->SetX(10);
$pdf->SetFont('Arial', '', 18);
$pdf->Cell(30, 7, $antiguedad, 0, 1);

# Tipo de licencia
$pdf->SetY(267);
$pdf->SetFillColor(255, 255, 102);
$pdf->Rect(10, 260, 20, 20, 'F');
$pdf->SetX(15);
$pdf->SetTextColor(0, 51, 204);
$pdf->SetFont('Arial', 'B', 30);
$pdf->Cell(30, 7, $tipoLicencia, 0, 1);

# Firma
$pdf->SetY(230);
$pdf->SetX(80);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(30, 7, utf8_decode('Firma'), 0, 1);
$pdf->Image($firma, 70, 235, 25, 25);

# Aviso legal
$pdf->SetY(262);
$pdf->SetX(30);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', '', 8);
$pdf->MultiCell(70, 7, $aviso, 0, 'C');

/* Cara reversa de la licencia */
$pdf->AddPage();

# Encabezado
$pdf->Image('../assets/img/911.jpg', 0, 10, 40, 25);
$pdf->Image('../assets/img/089.png', 160, 10, 40, 25);
$pdf->SetY(20);
$pdf->SetX(75);
$pdf->SetFont('Arial', 'B', 25);
$pdf->Cell(30, 7, utf8_decode($folio), 0, 1);

#Domicilio
$pdf->SetY(40);
$pdf->SetX(170);
$pdf->SetFont('Arial', '', 10);
$pdf->SetX(170);
$pdf->Cell(30, 7, 'Domicilio', 0, 1, 'R');
$pdf->SetX(150);
$pdf->SetFont('Arial', '', 16);
$pdf->MultiCell(50, 7, $domicilio, 0, 'R');

# Autos
$pdf->Image('../assets/img/auto.png', 10, 90, 40, 15);
$pdf->Image('../assets/img/auto.png', 60, 90, 40, 15);
$pdf->Image('../assets/img/auto.png', 110, 90, 40, 15);
$pdf->Image('../assets/img/auto.png', 160, 90, 40, 15);

#Grupo Sangíneo
$pdf->SetY(110);
$pdf->SetX(170);
$pdf->SetFont('Arial', '', 10);
$pdf->SetX(170);
$pdf->Cell(30, 7, utf8_decode('Grupo Sanguíneo'), 0, 1, 'R');
$pdf->SetX(150);
$pdf->SetFont('Arial', '', 16);
$pdf->MultiCell(50, 7, $grupoSanguineo, 0, 'R');

# Donador de organos
$pdf->SetY(125);
$pdf->SetX(170);
$pdf->SetFont('Arial', '', 10);
$pdf->SetX(170);
$pdf->Cell(30, 7, utf8_decode('Donador de Orgános'), 0, 1, 'R');
$pdf->SetX(150);
$pdf->SetFont('Arial', '', 16);
$pdf->MultiCell(50, 7, $donador, 0, 'R');

# Número de emergencias 
$pdf->SetY(140);
$pdf->SetX(170);
$pdf->SetFont('Arial', '', 10);
$pdf->SetX(170);
$pdf->Cell(30, 7, utf8_decode('Número de emergencia'), 0, 1, 'R');
$pdf->SetX(150);
$pdf->SetFont('Arial', '', 16);
$pdf->MultiCell(50, 7, $numeroEmegencia, 0, 'R');

# Firma de autorización
$pdf->Image('../assets/img/firma_autorizacion.png', 165, 160, 40, 40);
$pdf->SetFont('Arial', '', 10);
$pdf->SetY(205);
$pdf->SetX(100);
$pdf->MultiCell(100, 7, $nombreFirma, 0, 'R');

#Fundamento legal
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetY(220);
$pdf->SetX(10);
$pdf->Cell(10, 7, 'Fundamento Legal', 0, 'R');
$pdf->SetFont('Arial', '', 10);
$pdf->SetY(230);
$pdf->SetX(10);
$pdf->MultiCell(0, 7, $fundamento, 0, 'L');

$pdf->Output('F','../backup/pdf/'.$id.'.pdf');

$Manejador = fopen("../backup/xml/".$id.".xml", "w");

// $SQL2 = "SELECT l.TipoLicencia, c.Fotografia, c.Nombre, c.ApellidoPaterno, c.ApellidoMaterno, c.Observaciones, c.FechaNacimiento,
//         l.FechaExpedicion, l.FechaVencimiento, c.Antiguedad, c.Firma, l.AtributoD, c.Domicilio, l.Restricciones, c.GrupoSanguineo,
//          c.Donador, c.NumEmergencia, l.IDConductor

    $Texto = "<XML>\n".
			"<NumLicencia>".$Fila[0]."</NumLicencia> \n".
        	"<Fotografia>".$Fila[1]."</Fotografia> \n".    
			"<Nombre>".$Fila[2]."</Nombre>\n".
            "<ApellidoPaterno>".$Fila[3]."</ApellidoPaterno> \n".
            "<ApellidoMaterno>".$Fila[4]."</ApellidoMaterno> \n".
            "<Observaciones>".$Fila[0]."</Observaciones> \n".
			"<FechaNacimiento>".$Fila[2]."</FechaNacimiento> \n".
			"<FechaExpedicion>".$Fila[3]."</FechaExpedicion> \n".
			"<FechaVencimiento>".$Fila[4]."</FechaVencimiento> \n".
            "<Antiguedad>".$Fila[8]."</Antiguedad> \n".
            "<Firma>".$Fila[6]."</Firma> \n".
			"<Tipo>".$Fila[11]."</Tipo> \n".
			"<Domicilio>".$Fila[5]."</Domicilio> \n".
			"<GrupoSanguineo>".$Fila[7]."</GrupoSanguineo> \n".
			"<Donador>".$Fila[10]."</Donador> \n".		
			"<Restriccion>".$Fila[9]."</Restriccion>\n".		
            "<Foto>".$Fila[12]."</Foto>\n".
			"</XML> \n";	
    fwrite($Manejador, $Texto);
    fclose($Manejador);

?>

<h1 style='text-align: center; padding-buttom:2em;'> Tu licencia ha sido expedida puede abrirla dessde el siguiente <a href="../backup/pdf/<?php echo $id.'.pdf'?>" style="color:red;" target="_blank">Link</a></h1>

<?php
    print("<h1 style='text-align: center; padding-buttom:2em;'>Licencia registrada con éxito. Tú número de licencia es: <strong>" . $id . "</strong> </h1>");
} else {
    print("Registro No insertado");
}

Cerrar($Con);

?>