<html>
</head><title>Qr Code</title>
<link rel="stylesheet" type="text/css" href="##">
</head>
<style>
.customer_container_heading {
  width: 40%;
  width: 100%;
  text-align: center;
  margin: 1.5%;
  font-size: 3vh;
}
.customer_container {
  padding: 2%;
  background-color: #c5d9e2;
  width: 30%;
  margin: 2% auto;
  text-align: center;
  color: rgb(5, 21, 71);
  box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.5);
}

.customer_container input {
  font-size: 2vh;
  width: 60%;
  padding: 2%;
  margin: 2%;
}
.input {
  background-color: #004156;
  border: 0px;
  color: white;
  font-size: 2.5vh;
  transition: 0.5s;
  border-bottom: 3px solid black;
  font-size: 2vh;
  width: 60%;
  padding: 2%;
  margin: 2%;
}

.customer_container input[type="submit"] {
  background-color: #004156;
  border: 0px;
  color: white;
  font-size: 2.5vh;
  transition: 0.5s;
  border-bottom: 3px solid black;
}

.customer_container input[type="submit"]:hover {
  cursor: pointer;
  background-color: #012f3f;
}
.button2 {
  background-color: white; 
  color: black; 
  padding:8px;
  border: 2px solid #008CBA;
  text-decoration:none;

}

.button2:hover {
  background-color: #008CBA;
  color: white;
}


</style>
<body>
     
    <div class ="customer_container">
    <div class ="customer_container_heading">
    <h3>QR Code Generate</h3>
    </div>



<?php 
  include "JKRKBANK/qrlib.php";
  include "config.php";
  if(isset($_POST['create']))
  {

    $cid =  $_POST['cid'];
    $caccno =  $_POST['caccno'];
    $cname = $_POST['cname'];
    $cdcn = $_POST['cdcn'];
    $cdob = $_POST['cdob'];
    $cmobile = $_POST['cmobile'];
    $ifsccode = $_POST['ifsccode'];
    $qrImgName = "nemee".rand();
  
    $dev = " ...JKRKBANK of India";
    $final = $cid. $caccno. $cname. $cdcn. $cdob. $cmobile. $ifsccode.$dev;
    $qrs = QRcode::png($final,"userQr/$qrImgName.png","H","3","3");
    $qrimage = $qrImgName.".png";
    $workDir = $_SERVER['HTTP_HOST'];
    $qrlink = $workDir."/qrcode".$qrImgName.".png";
    $insQr = $nemee->insertQr($cid,$caccno,$cname,$cdcn,$cdob,$cmobile,$ifsccode,$qrimage,$qrlink);
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
 <img src="userQr/<?php echo $_GET['success']; ?>" alt="">
    <?php 
$workDir = $_SERVER['HTTP_HOST'];
    $qrlink = $workDir."/qrcode/userQr/".$_GET['success'];
    ?>
 <input class="input" type="text" value="<?php echo $qrlink; ?>" readonly>
    <br><br>
<div class="">
<a class="button button2" href="download.php?download=<?php echo $_GET['success']; ?>">Download Now</a>
<br>
 <br><br>
    <a class="button button2" href="index.php">Go Back To Generate Again</a>
</div>
<?php
}
else
{
  ?>


<form method="POST">
<input type="text" name="cid" placeholder="Customer ID" value="<?php if(isset($_POST['create'])){ echo $_POST['cid']; } ?>" required><br>
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

