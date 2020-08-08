<?php

include "fpdf/fpdf.php";
require ("conexion_base.php");
$id = $_POST['id'];
if (!isset($id)){
	header("location:index.php");
}

$prue = "SELECT * FROM VENTAS WHERE ID_TICKETS ='$id'";
$resultado = mysqli_query($conexion,$prue);
while ($row = mysqli_fetch_array($resultado)){
    $correo = $row[ 'CORREO' ];
    $festival = $row['FESTIVAL'];
    $numeroentradas = $row['CANTIDAD'];
    $preciototal = $row['PRECIOTOTAL'];
    $id = $row['ID_TICKETS'];
  }

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont("Arial","",30);

$pdf->SetY(20);
$pdf->SetX(5);
$pdf->Cell(0,0,"MISTER-FESTIVAL",0,1,"C");

$pdf->SetFont("Arial","",16);
$pdf->SetY(40);
$pdf->SetX(15);
$pdf->Cell(10,10,"Esta es tu entrada para el evento:");

$pdf->SetFont("Arial","",20);
$pdf->SetY(55);
$pdf->SetX(15);
$pdf->Cell(0,0,$festival,0,1,"C");

$pdf->SetFont("Arial","",16);
$pdf->SetY(70);
$pdf->SetX(15);
$pdf->Cell(10,10,"Tu numero de ticket es el: 00000".$id);

$pdf->SetY(90);
$pdf->SetX(15);
$pdf->Cell(10,10,"Valido para: ".$numeroentradas." personas");



$pdf->output();


?>
