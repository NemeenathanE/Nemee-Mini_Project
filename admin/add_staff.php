<html>
<head></head>
<title>Add Staff</title>
<link rel="shortcut icon" href="../img/bank_logo.png"> 

<body>


<div class="add_staff_container">
<br>
<form method="post">
<input type="text" name="Staff_name" placeholder="Staff Name" required><br>
<input type="text" name="Mobile_no" placeholder="Mobile no (10 Digits)" required><br>
<input type="text" name="email" placeholder="Email Id" required><br>
<select name="gender" required>
<option value="" disabled selected>Gender</option>
<option value="Male">Male</option>
<option value="Female">Female</option>
</select><br>
<input type="date" name="dob" required ><br>
<select name="dept" required>
<option value="" disabled selected>Department</option>
<option>Branch Manager</option>
<option>Cash Deposit</option>
</select><br>
<input type="submit" name="submit" value="Add Staff"><br>
</form><br>
</div>
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
    echo $staff_department = $_POST['dept'];
    echo $staff_dob = $_POST['dob'];
    
    
    $sql = "INSERT INTO bank_staff (Staff_name,Staff_id,Password,Mobile_no,Email_id,Gender,
    Department,DOB)
    VALUES('$staff_name','$staff_id','$staff_password','$staff_mobile_no','$staff_email','$staff_gender',
    '$staff_department','$staff_dob') ";

    if($conn->query($sql) == TRUE){

        echo '<script>alert("New Staff Added Successfully\n\nStaff Id is '.$staff_id.'\n\nPassword is '.$staff_password.'")</script>';

    }

    else
     { 
        echo "<br>Error".$sql."<br>".$conn->error;

}

}

?>