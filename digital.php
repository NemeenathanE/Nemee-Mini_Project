<?php
ob_start();

include 'customer_profile_header.php' ;
if($_SESSION['customer_login'] != true){

	header('location:customer_login.php');
	return 0;
	}
?>
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
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}
.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
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

<br>

<div class="card">
<br>
  <a href="pdf/pdf.php?download=1" target="_blank" class="button button2">Download</a></td>
  
<br><br>
 
 <?php
                  
                  $picfile_path ='Qr_code/userQr/';
                  
                 
                  $result1 = mysqli_query($conn,"SELECT * FROM qrcodes where Customer_ID= '$cust_id' ");
                      
                  while($row8 = mysqli_fetch_array($result1))
                    {                  
                      $picsrc=$picfile_path.$row8['qrImg'];
                      
                      echo "<img src='$picsrc.' class='img-thumbnail' width='180px' style='height:180px;'>";
                      echo"<div>";
                    }
                    ?>
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
  <td>Debit Card No</td>
<td><?php echo $row['Debit_Card_No']; ?></td>
</tr>
<tr>
  <td>CVV</td>
<td><?php echo $row['CVV']; ?></td>
</tr>
</table>
<p style="color:green;font-weight:bold;">Secure Your Self</p>
<br><br>
  <p><button>J K R K Bank of India.@2022</button></p>
  
</div>

</form>
</body>
</html>