<html>
<head>
<title>Digital Quick Acccess</title>
<link rel="shortcut icon" href="img/bank_logo.png"> 
</head>
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}
</style>
<body>
 <?php 
        $cust_id= $_SESSION['customer_Id'];
        include 'db_connect.php'; 
        $sql="SELECT * FROM bank_customers where Customer_ID= '$cust_id' ";
		$result = $conn->query($sql);
        $row = $result->fetch_assoc();
 
?>
<form action="" method="POST" enctype="multipart/form-data">
</form>
<div style="overflow-x: auto;">
<table>
<tr>
<th style="overflow-x: auto;text-align:center;background-color:red;color:white;width:100%;font-family: "Times New Roman", Times, serif; font-weight: bold;">Digital Quick Accesss</th>
</tr></table>
  <table>
    <tr>
    
      <th>Customer Id</th>
      <th>Account Number</th>
      <th>Name</th>
      <th>Debit Card No</th>
      <th>Mobile No</th>
      <th>Aadhar No</th>
      <th>Pan No</th>
      <th>E-Mail Id</th>
      <th>Digital Access Document</th>
    </tr>
    <tr>
      
      <td><?php echo $row['Customer_ID']; ?></td>
      <td><?php echo $row['Account_no']; ?></td>
      <td><?php echo $row['Username']; ?></td>
      <td><?php echo $row['Debit_Card_No']; ?></td>
      <td><?php echo $row['Mobile_no']; ?></td>
      <td><?php echo $row['Aadhar_Number']; ?></td>
      <td><?php echo $row['PAN']; ?></td>
      <td><?php echo $row['Email_ID']; ?></td>
       <td></td>
    </tr>
  
  </table>
</div>
<?php

  $sql="SELECT * FROM qrcodes where Customer_ID = '$cust_id' ";
		$result = $conn->query($sql);
            $row = $result->fetch_assoc();
?>
<?php echo $row['qrlink']; ?>
 
<img src="data:image;base64,'.base64_encode($row['qrImg'] ).'" height="200" width="200" class="img-thumnail" /> 

</form>
</body>
</html>