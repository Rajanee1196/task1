<?php
require('fpdf185/fpdf.php');
// Database Connection 
$conn = new mysqli('localhost', 'root', '', 'Rajanee_test');
//Check for connection error
if($conn->connect_error){
  die("Error in DB connection: ".$conn->connect_errno." : ".$conn->connect_error);    
}
  $id = $_GET['id'];
// Select data from MySQL database
$select = "SELECT * FROM `tasks` where tid='$id'";
$result = $conn->query($select);
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',14);
$row = $result->fetch_object();
//print_r($row);exit;
  $id = $row->tid;
  $name = $row->Name;
  $email = $row->Email;
  $cname=$row->Collage_Name;
  $total = $row->Total;

   $pdf->Cell(30,10,"Marksheet",1);
 
    $pdf->Ln();

   $pdf->Cell(20,10,"sno",1);
  $pdf->Cell(40,10,"Name of student",1);
  $pdf->Cell(40,10,"Email",1);
  $pdf->Cell(40,10,"college name",1);
   $pdf->Cell(40,10,"Total marks",1);
    $pdf->Ln();
  $pdf->Cell(20,10,$id,1);
  $pdf->Cell(40,10,$name,1);
  $pdf->Cell(40,10,$email,1);
  $pdf->Cell(40,10,$cname,1);
   $pdf->Cell(40,10,$total,1);
  $pdf->Ln();
//}
$pdf->Output();
?>