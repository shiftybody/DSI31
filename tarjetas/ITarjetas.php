<?php

include '../tarjetas/FTarjetas.php';

$TipoServicio = $_POST['TipoServicio'];
$Vigencia = $_POST['Vigencia'];
$Placa = $_POST['Placa'];
$IDVehiculo = $_POST['IDVehiculo'];
$IDPropietario = $_POST['IDPropietario'];
$Operacion = $_POST['Operacion'];
$PlacaAnterior = $_POST['PlacaAnterior'];
$NCI = $_POST['NCI'];
$Uso = $_POST['Uso'];
$Rfa = $_POST['Rfa'];
$CVE = $_POST['CVE'];
$OficinaExpedidora = $_POST['OficinaExpedidora'];
$Movimiento = $_POST['Movimiento'];
$FechaExpedicion = $_POST['FechaExpedicion'];
// check for folio number auto increment

$SQL = "INSERT INTO tarjetas(TipoServicio,Vigencia,Placa,IDPropietario ,IDVehiculo ,
    Operacion,PlacaAnterior,NCI,Uso,Rfa,CVE,OficinaExpedidora,Movimiento,FechaExpedicion) 
    VALUES ( '$TipoServicio', '$Vigencia', '$Placa', '$IDPropietario', 
    '$IDVehiculo', '$Operacion', '$PlacaAnterior', '$NCI', '$Uso', '$Rfa', '$CVE', 
    '$OficinaExpedidora', '$Movimiento', '$FechaExpedicion')";

include("../conexion.php");
$Con = Conectar();
$Result = Ejecutar($Con, $SQL) or die("Error al insertar datos" . mysqli_error($Con));
if ($Result) {


$SQL="SELECT T.TipoServicio, P.Nombre, T.Folio, V.Placa, P.RFC, P.Localidad, V.NumSerie, 
V.MarcaLineaSubm, V.Modelo, T.operacion, P.Municipio, V.Origen, V.Color, V.Cilindraje, 
V.Puerta, V.Asiento, V.Combustible, V.Transmision, V.Clase, V.Tipo, T.Uso, T.FechaExp, 
T.OficinaExp, V.NumMotor  FROM Propietarios P, Tarjetas T, Vehiculos V 
Where T.Folio='$Tarjeta' AND V.IdVehiculo =T.IdVehiculo AND P.IdPropietario=T.IdPropietario;";

$ResultSelect = Ejecutar($Con, $SQL2);
$Fila = mysqli_fetch_row($ResultSelect);


require('../fpdf.php'); //Invocar la libreria
$pdf = new FPDF('L','mm','Legal'); //Iniciar el contructor

$pdf->AddPage();

$tipoServicio = utf8_decode($Fila[0]);
$propietario = utf8_decode($Fila[1]);
$folio = utf8_decode($Fila[2]);
$vigencia = utf8_decode($Fila[3]);
$placa = utf8_decode($Fila[4]);
$rfc = utf8_decode($Fila[5]);
$localidad = utf8_decode($Fila[6]);
$municipio = utf8_decode($Fila[7]);
$origen = utf8_decode($Fila[8]);
$color = utf8_decode($Fila[9]);
$numeroSerie = utf8_decode($Fila[10]);
$marca = utf8_decode($Fila[11]);
$linea = utf8_decode($Fila[12]);
$sublinea = utf8_decode($Fila[13]);
$cilindraje = utf8_decode($Fila[14]);
$capacidad  = utf8_decode($Fila[15]);
$puertas = utf8_decode($Fila[16]);
$asientos = utf8_decode($Fila[17]);
$transmision = utf8_decode($Fila[18]);
$CVE = utf8_decode($Fila[19]);
$clase = utf8_decode($Fila[20]);
$tipo  = utf8_decode($Fila[21]);
$uso  = utf8_decode($Fila[22]);
$RFA = utf8_decode($Fila[23]);
$fechaExpedicion = utf8_decode($Fila[24]);
$oficinaExpedidora = utf8_decode($Fila[25]);
$movimiento = utf8_decode($Fila[26]);
$numeroMotor = utf8_decode($Fila[27]);
$modelo = utf8_decode($Fila[28]);
$operacion = utf8_decode($Fila[29]);

/* HEADER */

// Servicio 
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(10, 5, 'TIPO DE SERVICIO', 0, 1);
$pdf->SetFont('Arial', '', 14);
$pdf->Cell(10, 5, $tipoServicio, 0, 1);

// Propietario
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(10, 5, 'PROPIETARIO', 0, 1);
$pdf->SetFont('Arial', '', 14);
$pdf->SetX(40);
$pdf->Cell(10, 5, $propietario, 0, 1);

// Holograma
$pdf->SetFont('Arial', '', 11);
$pdf->setY(10);
$pdf->setX(73);
$pdf->Cell(10, 5, 'HOLOGRAMA', 0, 1);

// Folio
$pdf->SetFont('Arial', '', 11);
$pdf->setY(10);
$pdf->setX(110);
$pdf->Cell(10, 5, 'FOLIO', 0, 1);
$pdf->SetFont('Arial', '', 15);
$pdf->setY(15);
$pdf->setX(110);
$pdf->Cell(10, 5, $folio, 0, 1);

// Vigencia
$pdf->SetFont('Arial', '', 11);
$pdf->setY(10);
$pdf->setX(150);
$pdf->Cell(10, 5, 'VIGENCIA', 0, 1);
$pdf->SetFont('Arial', '', 15);
$pdf->setY(15);
$pdf->setX(150);
$pdf->Cell(10, 5, $vigencia, 0, 1);

// Placa
$pdf->SetFont('Arial', '', 11);
$pdf->setY(10);
$pdf->setX(200);
$pdf->Cell(10, 5, 'PLACA', 0, 1);
$pdf->SetFont('Arial', 'B', 18);
$pdf->setY(15);
$pdf->setX(200);
$pdf->Cell(10, 5, $placa, 0, 1);

// RFC
$pdf->SetFont('Arial', '', 11);
$pdf->SetY(50);
$pdf->Cell(10, 5, 'RFC', 0, 1);
$pdf->SetFont('Arial', '', 14);
$pdf->SetY(55);
$pdf->Cell(10, 5, $rfc, 0, 1);

// Localidad
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(10, 5, 'LOCALIDAD', 0, 1);
$pdf->SetFont('Arial', '', 14);
$pdf->MultiCell(40, 5, $localidad);

// MUNICIPIO
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(10, 5, 'MUNICIPIO', 0, 1);
$pdf->SetFont('Arial', '', 14);
$pdf->MultiCell(40, 5, $municipio);

// Constancia
$pdf->SetFont('Arial', 'B', 11);
$pdf->SetY(95);
$pdf->MultiCell(55, 5, 'NUMERO DE CONSTANCIA DE INCRIPCION (NCI)', 0, 1);

// Origen
$pdf->SetFont('Arial', '', 11);
$pdf->SetY(115);
$pdf->Cell(10, 5, 'ORIGEN', 0, 1);
$pdf->SetFont('Arial', '', 14);
$pdf->MultiCell(40, 5, $origen);

// Color
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(10, 5, 'COLOR', 0, 1);
$pdf->SetFont('Arial', '', 14);
$pdf->MultiCell(60, 5, $color);

// Numero de Serie
$pdf->SetFont('Arial', '', 11);
$pdf->SetY(50);
$pdf->SetX(100);
$pdf->Cell(10, 5, 'NUMERO DE SERIE', 0, 1);
$pdf->SetFont('Arial', '', 18);
$pdf->SetX(100);
$pdf->MultiCell(70, 5, $numeroSerie);

// Marca line sublinea
$pdf->SetX(100);
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(10, 5, utf8_decode('MARCA/LINEA/SUBLINEA'), 0, 1);
$pdf->SetFont('Arial', '', 18);
$pdf->SetX(100);
$pdf->MultiCell(100, 5, $marca.'/'.$linea.'/'.$sublinea);

// Cilindraje
$pdf->SetY(95);
$pdf->SetX(100);
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(10, 5, utf8_decode('CILINDRAJE'), 0, 1);
$pdf->SetY(95);
$pdf->SetX(130);
$pdf->Cell(10, 5, $cilindraje, 0, 1);

// Capacidad 
$pdf->SetX(100);
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(10, 6, utf8_decode('CAPACIDAD'), 0, 1);
$pdf->SetY(100.5);
$pdf->SetX(130);
$pdf->Cell(10, 5, $capacidad, 0, 1);

// Puertas
$pdf->SetX(100);
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(10, 6, utf8_decode('PUERTAS'), 0, 1);
$pdf->SetY(106);
$pdf->SetX(130);
$pdf->Cell(10, 5, $puertas, 0, 1);

// Asientos
$pdf->SetX(100);
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(10, 6, utf8_decode('ASIENTOS'), 0, 1);
$pdf->SetY(111);
$pdf->SetX(130);
$pdf->Cell(10, 5, $asientos, 0, 1);

// Combustible
$pdf->SetX(100);
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(10, 6, utf8_decode('COMBUSTIBLE'), 0, 1);
$pdf->SetY(116);
$pdf->SetX(130);
$pdf->Cell(10, 5, '', 0, 1);

// Transmision 
$pdf->SetX(100);
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(10, 6, utf8_decode('TRANSMISION'), 0, 1);
$pdf->SetFont('Arial', '', 18);
$pdf->SetX(100);
$pdf->Cell(10, 5, $transmision, 0, 1);

// CVE VEHICULAR 
$pdf->SetY(93);
$pdf->SetX(160);
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(10, 6, utf8_decode('CVE VEHICULAR'), 0, 1);
$pdf->SetFont('Arial', '', 18);
$pdf->SetX(160);
$pdf->Cell(10, 5, $CVE, 0, 1);

// Clase 
$pdf->SetX(160);
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(10, 6, utf8_decode('CLASE'), 0, 1);
$pdf->SetY(104);
$pdf->SetX(180);
$pdf->Cell(10, 5, $clase, 0, 1);

// Tipo  
$pdf->SetX(160);
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(10, 6, utf8_decode('TIPO'), 0, 1);
$pdf->SetY(109);
$pdf->SetX(180);
$pdf->Cell(10, 5, $tipo, 0, 1);

// Uso  
$pdf->SetX(160);
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(10, 6, utf8_decode('USO'), 0, 1);
$pdf->SetY(114);
$pdf->SetX(180);
$pdf->Cell(10, 5, $uso, 0, 1);

// Modelo
$pdf->SetY(50);
$pdf->SetX(210);
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(10, 6, utf8_decode('MODELO'), 0, 1);
$pdf->SetFont('Arial', '', 18);
$pdf->SetX(210);
$pdf->Cell(10, 5, $modelo, 0, 1);

// Operacion
$pdf->SetX(210);
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(10, 6, utf8_decode('OPERACION'), 0, 1);
$pdf->SetFont('Arial', '', 16);
$pdf->SetX(210);
$pdf->Cell(10, 5, $operacion, 0, 1);

// Folio
$pdf->SetX(210);
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(10, 6, utf8_decode('FOLIO'), 0, 1);
$pdf->SetFont('Arial', '', 16);
$pdf->SetX(210);
$pdf->Cell(10, 5, $folio, 0, 1);

// PLACA ANT

// fecha expedicion
$pdf->SetY(93);
$pdf->SetX(210);
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(10, 6, utf8_decode('FECHA DE EXPEDICION'), 0, 1);
$pdf->SetFont('Arial', '', 18);
$pdf->SetX(210);
$pdf->Cell(10, 5, $fechaExpedicion, 0, 1);

// Movimienot
$pdf->SetX(210);
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(10, 6, utf8_decode('MOVIMIENTO'), 0, 1);
$pdf->SetFont('Arial', '', 18);
$pdf->SetX(210);
$pdf->Cell(10, 5, $movimiento, 0, 1);

// Numero de motor 
$pdf->SetX(210);
$pdf->SetFont('Arial', '', 11);
$pdf->Cell(10, 6, utf8_decode('MOVIMIENTO'), 0, 1);
$pdf->SetFont('Arial', '', 18);
$pdf->SetX(210);
$pdf->Cell(10, 5, $numeroMotor, 0, 1);


// FOLIO
$pdf->SetFont('Arial', 'B', 20);

$pdf->Output('F','../backup/pdf/'.$folio.'.pdf');


$Manejador = fopen("../backup/xml".$Folio.".xml", "w");

    $Texto = "<XML>\n".
			"<Tipo>".$Fila[0]."</Tipo>\n".
			"<Propietario>".$Fila[1]."</Propietario>\n".
			"<RFC>".$Fila[4]."</RFC>\n".
			"<Localidad>".$Fila[5]."</Localidad>\n".
			"<Municipio>".$Fila[10]."</Municipio>\n".
			"<Origen>".$Fila[11]."</Origen>\n".
			"<Color>".$Fila[12]."</Color>\n".
			"<Placa>".$Fila[3]."</Placa>\n".
			"<NumSerie>".$Fila[6]."</NumSerie>\n".
			"<MarcaLineaSub>".$Fila[7]."</MarcaLineaSub>\n".
			"<Cilindraje>".$Fila[13]."</Cilindraje>\n".
			"<Puerta>".$Fila[14]."</Puerta>\n".
			"<Asiento>".$Fila[15]."</Asiento>\n".
			"<Combustible>".$Fila[16]."</Combustible>\n".
			"<Transmision>".$Fila[17]."</Transmision>\n".
			"<Clase>".$Fila[18]."</Clase>\n".
			"<Tipo>".$Fila[19]."</Tipo>\n".
			"<Uso>".$Fila[20]."</Uso>\n".
			"<Modelo>".$Fila[8]."</Modelo>\n".
			"<Operacion>".$Fila[9]."</Operacion>\n".
			"<Folio>".$Fila[2]."</Folio>\n".
			"<FechaExp>".$Fila[21]."</FechaExp>\n".
			"<OficinaExp>".$Fila[22]."</OficinaExp>\n".
			"<NumMotor>".$Fila[23]."</NumMotor>\n".
			"</XML> \n";	
    fwrite($Manejador, $Texto);

    fclose($Manejador);

?>

<h1 style='text-align: center; padding-buttom:2em;'> Tu tarjeta ha sido dada de alta puede abrirla dessde el siguiente <a href="../backup/pdf/<?php echo $id.'.pdf'?>" style="color:red;" target="_blank">Link</a></h1>

<?php
    print("<h1 style='text-align: center; padding-buttom:2em;'>Tarjeta registrada con éxito. Folio: " . "<strong>" . mysqli_insert_id($Con) . "</strong></h1>");

} else {
    print("Registro No insertado");
}
Cerrar($Con);

?>