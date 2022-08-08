<html>
    <head><title>Customer Details</title>
    
    <link rel="stylesheet" type="text/css" href="../css/pending_customers.css"/>
    <link rel="shortcut icon" href="../img/bank_logo.png"> 
    <style>

    </style>
<body>
	<?php include 'admin_profile_header.php' ?>
    <div class="pending_customers_container">
    <table border="1px" cellpadding="10">
			   <th>#</th>
			   <th>Username</th>
			   <th>Customer_ID</th>
               <th>password</th>
               <th>Gender</th>
			   <th>Account_no</th>
			   <th>Mobile_no</th>
			   <th>PAN</th>
			   <th>Aadhar_Number</th>
			   <th>DOB</th>
			   <th>Email_ID</th>
			   <th>Home_Addr</th>
			   <th>Country</th>
			   <th>State</th>
			   <th>District</th>
			   <th>City</th>
			   <th>Pin_code</th>
			   <th>Nominee_name</th>
			   <th>Nominee_ac_no</th>
			   <th>Account_type</th>
               <th>Ac_Opening_Date</th>
               <th>Customer_Photo</th>
               <th>Debit_Card_No</th>
               <th>Debit_Card_Pin</th>
               <th>CVV</th>
    
               <?php


        $sql = "SELECT * from bank_customers ";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {   
                  $Sl_no = 1; 
        // output data of each row
            while($row = $result->fetch_assoc()) {
                
            echo '
                <tr>
                <td>'.$Sl_no++.'</td>
                <td>'.$row['Username'].'</td>
                <td>'.$row['Customer_ID'].'</td>
                <td>'.$row['password'].'</td>
                <td>'.$row['Gender'].'</td>
                <td>'.$row['Account_no'].'</td>
                <td>'.$row['Mobile_no'].'</td>
                <td>'.$row['PAN'].'</td>
                <td>'.$row['Aadhar_Number'].'</td>
                <td>'.$row['DOB'].'</td>
                <td>'.$row['Email_ID'].'</td>
                <td>'.$row['Home_Addr'].'</td>
                <td>'.$row['Country'].'</td>
                <td>'.$row['State'].'</td>
                <td>'.$row['District'].'</td>
                <td>'.$row['City'].'</td>
                <td>'.$row['Pin_code'].'</td>
                <td>'.$row['Nominee_name'].'</td>
                <td>'.$row['Nominee_ac_no'].'</td>
                <td>'.$row['Account_type'].'</td>
                <td>'.$row['Ac_Opening_Date'].'</td>
                <td>'.$row['Customer_Photo'].'</td>
                <td>'.$row['Debit_Card_No'].'</td>
                <td>'.$row['Debit_Card_Pin'].'</td>
                <td>'.$row['CVV'].'</td>
                </tr>';
        }
        
        
    }
    


?>
</table>
</div>
</body>
    
</html>