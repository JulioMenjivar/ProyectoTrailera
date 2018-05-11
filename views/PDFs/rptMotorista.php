<?php

	include 'plantilla.php';

	$con = mysqli_connect("localhost", "root","","trailera");
	$query = "SELECT * FROM motorista WHERE estado = 1";
	$resultado = $con->query($query);
	
	$pdf = new PDF();
	$pdf->setClase('Motorista');
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(20,6,'CODIGO',1,0,'C',1);
	$pdf->Cell(50,6,'NOMBRES',1,0,'C',1);
	$pdf->Cell(50,6,'APELLIDOS',1,0,'C',1);
	$pdf->Cell(50,6,'N LICENCIA',1,1,'C',1);
	
	$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(20,6,$row['cod_motorista'],1,0,'C');
		$pdf->Cell(50,6,utf8_decode($row['nombres']),1,0,'C');
		$pdf->Cell(50,6,utf8_decode($row['apellidos']),1,0,'C');
		$pdf->Cell(50,6,utf8_decode($row['licencia']),1,1,'C');
	}

	$pdf->Output();

	//include '../Clases/cerrar_conexion.php';

?>