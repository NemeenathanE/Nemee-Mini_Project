<?php
session_start();

if($_SESSION['customer_login'] != true){

	return 0;
	}
?>

<?php 
        $cust_id= $_SESSION['customer_Id'];
        include '../db_connect.php'; 
        $sql="SELECT * FROM bank_customers where Customer_ID= '$cust_id' ";
		$result = $conn->query($sql);
        $row = $result->fetch_assoc();
 
?>
<?php
require_once "fpdf184/fpdf.php";
$pdf = new  FPDF();
$pdf->AddPage();
$pdf->Image("../img/bank_logo.png", 10, 10, 25);
$pdf->SetFont("Arial", "B", 22);
$pdf->Ln();
$pdf->SetX(40);
$pdf->SetFontSize(20);
$pdf->SetTextColor(63, 153, 242);
$pdf->Cell(30, 30, "Jivin Krishna Ravin Krishna Bank of India");
$pdf->Ln();
$pdf->SetX(70);
$pdf->Cell(0, 0, "Tindivanam - 604001.");
$pdf->Ln();
$pdf->SetX(10);
$pdf->SetFontSize(12);
$pdf->SetTextColor(8, 59, 117);
$pdf->Cell(20, 30, "Dear Customer ,");
$pdf->Ln();
$pdf->SetX(20);
$pdf->SetFontSize(12);
$pdf->SetTextColor(10, 10, 10);
$pdf->Cell(0, 0, "With reference to your email update request initiated through Internet Banking as");
$pdf->Ln();
$pdf->SetX(20);
$pdf->SetFontSize(12);
$pdf->SetTextColor(10, 10, 10);
$pdf->Cell(0, 15, "requested by you, the OTP for completing this request, is given in the attached password");
$pdf->Ln();
$pdf->SetX(20);
$pdf->SetFontSize(12);
$pdf->SetTextColor(10, 10, 10);
$pdf->Cell(0, 0, "protected PDF. The password is your registered mobile number without ISD code. For");
$pdf->Ln();
$pdf->SetX(20);
$pdf->SetFontSize(12);
$pdf->SetTextColor(10, 10, 10);
$pdf->Cell(0, 15, "instance, if your registered mobile number is +91-12345678, then password will be 12345678.");
$pdf->Ln();
$pdf->SetX(20);
$pdf->SetFontSize(12);
$pdf->SetTextColor(10, 10, 10);
$pdf->Cell(0, 0, "To open the attachment, you will require Adobe Acrobat Reader version 6.0 or above.");
$pdf->Ln();
$pdf->SetX(5);
$pdf->SetFontSize(12);
$pdf->SetTextColor(240, 20, 5);
$pdf->Cell(0, 20, "Do not disclose any confidential information such as Username, Password, OTP etc. to anyone.");
$pdf->Ln();



include '../db_connect.php';
        $cust_id= $_SESSION['customer_Id'];
        include '../db_connect.php'; 
        $sql="SELECT * FROM bank_customers where Customer_ID= '$cust_id' ";
		    $result = $conn->query($sql);
        $row = $result->fetch_assoc();
                 
    $Username = $row['Username'];
    $CVV = $row['CVV'];
    $Debit_Card_No = $row['Debit_Card_No'];
    
   // $Debit_Card_Pin = $row['Debit_Card_Pin'];

    $pdf->SetX(50);
    $pdf->SetFontSize(12);
    $pdf->SetTextColor(4, 18, 107);
    $pdf->Cell(20,20,'Name :');
    $pdf->Write(20,$Username);
    $pdf->SetX (80);
    $pdf->Ln(); 
    $pdf->SetX(50);
    $pdf->SetFontSize(12);
    $pdf->SetTextColor(4, 18, 107);
    $pdf->Cell(20,0,'CVV :');
    $pdf->Write(0,$CVV);
    $pdf->SetX (80);
    $pdf->Ln(); 
    $pdf->SetX(50);
    $pdf->SetFontSize(12);
    $pdf->SetTextColor(4, 18, 107);
    $pdf->Cell(45,20,'Debit Card Number :');
    $pdf->Write(20,$Debit_Card_No);
    $pdf->SetX (80);
    $pdf->Ln(); 
    //$pdf->SetX(50);
    //$pdf->SetFontSize(12);
    //$pdf->SetTextColor(4, 18, 107);
    //$pdf->Cell(55,0,'Debit Card Pin Number :');
    //$pdf->Write(0,$Debit_Card_Pin);
    //$pdf->SetX (80);
    //$pdf->Ln(); 
    //$pdf->SetX(50);
    //$pdf->SetFontSize(12);
    //$pdf->SetTextColor(4, 18, 107);
    //$pdf->Cell(55,0,'qrImg :');
    //$pdf->Write(0,$picsrc);
    //$pdf->SetX (80);
    //$pdf->Ln(); 
    $pdf->Image('../Qr_code/userQr/');
    
   
if (isset($_GET["download"]))    
{
    $pdf->output("JKRK-Bank.pdf", "F");

    header("Content-type: application/pdf");
    header("Content-disposition: attachment; filename = JKRK-Bank.pdf");
    readFile("JKRK-Bank.pdf");  
    unlink("JKRK-Bank.pdf");
}else
{

$pdf->output();
}
  

?>