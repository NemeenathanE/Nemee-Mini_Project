<link rel="shortcut icon" href="../img/bank_logo.png"> 
<?php  ob_start();  ?>
<?php
include '../db_connect.php';
if(isset($_POST['admin_login-btn'])){
	
if(isset($_POST['admin_id'])){
$admin_id = $_POST['admin_id'];
$password = $_POST['password'];
}

		$sql="SELECT * FROM bank_admin where admin_id='$admin_id' and Password='$password' ";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		if($admin_id != $row['admin_id'] && $password != $row['Password']){
			
		echo '<script>alert("Incorrect Id/Password.")</script>';
			
		}

			else{
			
		$_SESSION['admin_login'] = true;
		$_SESSION['admin_name'] = $row['admin_name'];
        $_SESSION['admin_id'] = $row['admin_id'];
		date_default_timezone_set('Asia/Kolkata'); 
		$_SESSION['admin_last_login'] = date("d/m/y h:i:s A");
		header('location:admin_profile.php');
		}
		
}



?>