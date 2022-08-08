<?php ob_start(); ?>
<?php
	
	include 'admin_profile_header.php' ;?>

<html>
<head>
    <title>Add Staff</title>
    <link rel="stylesheet" type="text/css" href="../css/customer_reg_form.css"/>
	<link rel="shortcut icon" href="../img/bank_logo.png"> 
    
    </head>
    <body>
    <div class="container_regfrm_container_parent">
	<div class="container_regfrm_container_parent_child">
		<form method="post">
                <input type="text" name="Staff_name" placeholder="Staff Name" required />
                <input type="date" name="dob" placeholder="Staff DOB" required />
                <input type="text" name="Mobile_no" placeholder="Mobile no (10 Digits)" required />
                <input type="text" name="email" placeholder="Email Id" required />
                <select name ="gender" required>
					  <option class="default" value="" disabled selected>Gender</option>
					  <option value="Male">Male</option>
					  <option value="Female">Female</option>
					  <option value="Others">Others</option>
				</select>
                <select name="staff_department" required>
                        <option value="" disabled selected>Staff Roles</option>
                        <option>Branch Manager</option>
                        <option>Cash Deposit</option>
                        </select>
                        <input type="file" name="staff_image" placeholder="Staff Photo"  required>
				 		<input type="submit" name="submit" value="Submit">
				</form>
         </div>
		 </div>
    
</body>
</body>
</html>
<?php
if(isset($_POST['submit'])){

    include '../db_connect.php';

    echo $staff_name = $_POST['Staff_name'];
    echo $staff_id = '1508'.mt_rand(100,999);
    echo $staff_password = mt_rand(100000,999999);
    echo $staff_mobile_no = $_POST['Mobile_no'];
    echo $staff_email = $_POST['email'];
    echo $staff_gender = $_POST['gender'];
    echo $staff_department = $_POST['staff_department'];
    echo $staff_dob = $_POST['dob'];
    echo $staff_image = $_POST['staff_image'];
    
    
    $sql = "INSERT INTO bank_staff (Staff_name,Staff_id,Password,Mobile_no,Email_id,Gender,
    Department,DOB,Staff_Image)
    VALUES('$staff_name','$staff_id','$staff_password','$staff_mobile_no','$staff_email','$staff_gender',
    '$staff_department','$staff_dob','$staff_image')";

    if($conn->query($sql) == TRUE){

        echo '<script>alert("New Staff Added Successfully\n\nStaff Id is '.$staff_id.'\n\nPassword is '.$staff_password.'")</script>';


    }


    else
     { 
        echo "<br>Error".$sql."<br>".$conn->error;

}

}

?>

