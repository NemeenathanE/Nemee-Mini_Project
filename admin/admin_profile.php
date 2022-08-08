<?php ob_start(); ?>

<html>
<head><title>Admin Home</title>
<link rel="stylesheet" type="text/css" href="../css/staff_profile.css" />
<link rel="shortcut icon" href="../img/bank_logo.png"> 
</head>
<body>
<?php
	
	include 'admin_profile_header.php' ;?>
	<form method="post">
<div class="staff_options">
		       	<input type="submit" name="viewdet" value="Add Staff"/>
				<input type="submit" name="view_cust_by_ac" value="View Customer"/>
				
                
                        	
			</div>
	</form>


</body>
</html>


<?php

if(isset($_POST['viewdet'])){
	
	
		header('location:staff.php');
}

if(isset($_POST['view_cust_by_ac'])){
	
	header('location:view_customer_by_acc_no.php');
	
}

?>
