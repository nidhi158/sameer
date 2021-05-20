<?php
	$con=MySQLi_connect("localhost","root",""); 
	MySQLi_select_db($con,"krishworks");
	include_once('fpdf.php');
	define('FPDF_FONTPATH','C:\xampp\htdocs\Internship\fpdf\font');
	class PDF extends FPDF
	{
		// Page header
		function Header()
		{
			// Logo
			
			$this->SetFont('arial','B',13);
			// Move to the right
			$this->Cell(50);
			// Title
			$this->Cell(80,10,'Studnet Details',1,0,'C');
			// Line break
			$this->Ln(20);
		}
		
		// Page footer
		function Footer()
		{
			// Position at 1.5 cm from bottom
			$this->SetY(-15);
			// Arial italic 8
			$this->SetFont('arial','I',8);
			// Page number
			$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
		}
	}
	
	
	
	$phone1=$_POST['phone'];
	$result = MySQLi_query($con,"select * from student where Phone_num='$phone1';") or die("database error:". mysqli_error($conn));
	$row=MySQLi_fetch_array($result);
	$name="Name:-".$row[0];
	$phone="Phone num:-".$row[1];
	$ms1="Marks1:-".$row[3];
	$ms2="Marks2:-".$row[4];
	$ms3="Marks3:-".$row[5];
	$ms4="Marks4:-".$row[6];
	$ms5="Marks5:-".$row[7];
	$total="Total:-".$row[8];
	$pdf = new PDF();
	//header
	$pdf->AddPage();
	//foter page
	$pdf->AliasNbPages();
	$pdf->SetFont('arial','B',16);
	//foreach($result as $heading) {
	//$pdf->Cell(35,10,$display_heading[$heading['Field']],1);
	//}
	foreach($result as $row) {
	$pdf->SetFont('arial','',10);
	$pdf->Ln();
	$pdf->Cell(50,10,$name,1);
	$pdf->Ln();
	$pdf->Cell(50,10,$phone,1);
	$pdf->Ln();
	$pdf->Cell(50,10,$ms1,1);
	$pdf->Ln();
	$pdf->Cell(50,10,$ms2,1);
	$pdf->Ln();
	$pdf->Cell(50,10,$ms3,1);
	$pdf->Ln();
	$pdf->Cell(50,10,$ms4,1);
	$pdf->Ln();
	$pdf->Cell(50,10,$ms5,1);
	$pdf->Ln();
	$pdf->Cell(50,10,$total,1);
	}


	$pdf->Output();

?>
