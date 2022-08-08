<?php
ob_start();
include 'header.php';
include 'customer_profile_header.php' ;
if($_SESSION['customer_login'] != true){

	header('location:customer_login.php');
	return 0;
	}
?>
 <html>
<head>
<title>Digital Quick Acccess</title>

</head>
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
  color:red;
  font-weight:bold;
}

tr:nth-child(even) {background-color: #f2f2f2;}

/*Download Profile Card*/
.h2 {
  color:green;
  font-weight:bold;
  font-family:;

}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

</style>
<body>

 <?php 
        $cust_id= $_SESSION['customer_Id'];
        include 'db_connect.php'; 
        $sql="SELECT * FROM bank_customers where Customer_ID= '$cust_id' ";
		$result = $conn->query($sql);
        $row = $result->fetch_assoc();
 
?>
<?php

$sql="SELECT * FROM qrcodes where Customer_ID = '$cust_id' ";
  $result = $conn->query($sql);
          $row = $result->fetch_assoc();
?>
<br>

<div class="card">
<br>
  <h2 class="h2">Digital Pay</h2><br><br>
  
<?php echo '<img class="custmr_img" src="data:image/jpeg;base64,'.base64_encode($row['qrImg']).'"'; ?> onerror="this.src='Qr_code/userQr/nemee2080572097.png'"  height="115px" width="105px"/>

<?php 
        $cust_id= $_SESSION['customer_Id'];
        include 'db_connect.php'; 
        $sql="SELECT * FROM bank_customers where Customer_ID= '$cust_id' ";
		$result = $conn->query($sql);
        $row = $result->fetch_assoc();
 
?><br><br>
<table>
<tr>
  <td>Name</td>
<td><?php echo $row['Username']; ?></td>
</tr>
<tr>
  <td>Account No</td>
<td><?php echo $row['Account_no']; ?></td>
</tr>
<tr>
  <td>Debit Card No</td>
<td><?php echo $row['Debit_Card_No']; ?></td>
</tr>
</table>
<p style="color:green;font-weight:bold;">Secure Your Self</p>
<br><br>
  <p><button>J K R K Bank of India.@2022</button></p>
  
</div>

</form>
</form>
<td>
<a href="digital.php" download="<?php echo $row ['Account_no']; ?>">Download</a>
</td>

                    
</body>
</html>