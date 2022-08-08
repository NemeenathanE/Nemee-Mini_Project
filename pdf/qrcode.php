
<?php 
        $cust_id= $_SESSION['customer_Id'];
        include '../db_connect.php'; 
        $sql="SELECT * FROM bank_customers where Customer_ID= '$cust_id' ";
		$result = $conn->query($sql);
        $row = $result->fetch_assoc();
 
?>           
    <?php

    $picfile_path ='../Qr_code/userQr/';
                  
                 
    $result1 = mysqli_query($conn,"SELECT * FROM qrcodes where Customer_ID= '$cust_id' ");
        
    while($row = mysqli_fetch_array($result1))
      {                  
        $picsrc=$picfile_path.$row['qrImg'];
        
        echo "<img src='$picsrc.' class='img-thumbnail' width='180px' style='height:180px;'>";
        echo"<div>";
      }
?>