<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Qr Gen</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
 	include "qrlib.php";
 	include "config.php";
 	if(isset($_POST['create']))
 	{
 		$Customer_ID =  $_POST['customer_id'];
    $caccno =  $_POST['caccno'];
    $cname = $_POST['cname'];
    $cdcn = $_POST['cdcn'];
    $cdob = $_POST['cdob'];
    $cmobile = $_POST['cmobile'];
    $ifsccode = $_POST['ifsccode'];
    $qrImgName = "nemee".rand();
  
    $dev = " ...JKRKBANK of India";
    $final = $Customer_ID. $caccno. $cname. $cdcn. $cdob. $cmobile. $ifsccode.$dev;
    $qrs = QRcode::png($final,"Qr_code/userQr/$qrImgName.png","H","3","3");
    $qrimage = $qrImgName.".png";
    $workDir = $_SERVER['HTTP_HOST'];
    $qrlink = $workDir."/qrcode".$qrImgName.".png";
    $insQr = $nemee->insertQr($Customer_ID,$caccno,$cname,$cdcn,$cdob,$cmobile,$ifsccode,$qrimage,$qrlink);
    if($insQr==true)
    {
      echo "<script>alert('Thank You $caccno. Success Create Your QR Code'); window.location='customer_qrcode.php?success=$qrimage';</script>";

    }
    else
    {
      echo "<script>alert('cant create QR Code');</script>";
    }
}
  ?>
 <?php 
  if(isset($_GET['success']))
  {
  ?>
 <?php 
    ?>
 <img src="Qr_code/userQr/<?php echo $_GET['success']; ?>" alt="">
    <?php 
$workDir = $_SERVER['HTTP_HOST'];
    $qrlink = $workDir."/qrcode/Qr_code/userQr/".$_GET['success'];
    ?>
 <input class="input" type="text" value="<?php echo $qrlink; ?>" readonly>
    <br><br>
<div class="">
<a class="button button2" href="Qr_code/download.php?download=<?php echo $_GET['success']; ?>">Download Now</a>
<br>
 <br><br>
    <a class="button button2" href="customer_qrcode.php">Go Back To Generate Again</a>
</div>
<?php
}
else
{
  ?>


<form method="POST">
<input type="text" name="customer_id" placeholder="Customer ID" value="<?php if(isset($_POST['create'])){ echo $_POST['customer_id']; } ?>" required><br>
<input type="text" name="caccno" placeholder="Customer Account No" value="<?php if(isset($_POST['create'])){ echo $_POST['caccno']; } ?>" required><br>
<input type="text" name="cname" placeholder="Customer Name" value="<?php if(isset($_POST['create'])){ echo $_POST['cname']; } ?>" required ><br>
<input type="text" name="cdcn" placeholder="Customer Debit Card No" value="<?php if(isset($_POST['create'])){ echo $_POST['cdcn']; } ?>" required ><br>
<input type="text" name="cdob" placeholder="Customer DOB" value="<?php if(isset($_POST['create'])){ echo $_POST['cdob']; } ?>" required ><br>
<input type="text" name="cmobile" placeholder="Customer Mobile No" value="<?php if(isset($_POST['create'])){ echo $_POST['cmobile']; } ?>" required ><br>
<input type="text" name="ifsccode"  placeholder="Barnch IFSC Code" value="<?php if(isset($_POST['create'])){ echo $_POST['ifsccode']; } ?>" required ><br>
<input type="submit" name="create" value="Generate">

            </form>
 <?php 
}
   ?>
        </div>


</body>
</html>
