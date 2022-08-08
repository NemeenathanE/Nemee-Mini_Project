<html>
<head><title>Apply Debit Card</title>
<link rel="stylesheet" type="text/css" href="css/debit_card_form.css">
<link rel="shortcut icon" href="img/bank_logo.png"> 
</head>
<body>
    
<div class="debit_card_form_container">
    <br>
<form method="POST">
<input type="text" name="holder_name" placeholder="Account Holder Name"><br>
<input type="text" name="dob" placeholder="Date of Birth" onfocus="(this.type='date')"><br>
<input type="text" name="pan" placeholder="PAN"><br>
<input type="text" name="mob" placeholder="Registered Mobile (10 Digit)"><br>
<input type="text" name="email" placeholder="E-Mail Id"><br>
<input type="text" name="acc_no" placeholder="Account No"><br>
<input type="submit" name ="dbt_crd_submit" value="Submit" ><br>
<form>
</div>
</body>
<?php include 'footer.php' ?>
</html>

<?php

if(isset($_POST['dbt_crd_submit'])){
    $holder_name = $_POST['holder_name'];
    $dob = $_POST['dob'];
    $pan = $_POST['pan'];
    $mob = $_POST['mob'];
    $acc_no = $_POST['acc_no'];
    $email = $_POST['email']; 
    if(empty($_POST['holder_name']) || empty($_POST['dob']) || empty($_POST['pan']) ||empty($_POST['mob']) ||empty($_POST['acc_no']) ||empty($_POST['email'])){

        echo '<script>alert("No field should be empty")</script>';
    }
    else{

    include 'db_connect.php'; 
    $sql = "SELECT * FROM bank_customers WHERE Account_no = '$acc_no' ";
    $result = $conn->query($sql);
    if($result->num_rows <=0){

        echo '<script>alert("No Data match with the details provided")</script>';

    }
    
    else{

    $row = $result->fetch_assoc();
    if(!is_numeric($mob) || (strlen($mob) > 10 || strlen($mob) < 10)){

        echo '<script>alert("Invalid Mobile Number\nPlease enter 10 Digit registered mobile number")</script>';

        }

        elseif($mob != $row['Mobile_no']){

            echo '<script>alert("Please enter your registered mobile number")</script>';
        }
        elseif($holder_name != $row['Username']){

            echo '<script>alert("Incorrect Account Holder Name")</script>';
            echo $row['Username'];
        }
        elseif($dob != $row['DOB']){

            echo '<script>alert("Incorrect Date of Birth\nPlease enter Date of Birth as on PAN Card")</script>';
    
        }
        elseif($pan != $row['PAN']){

            echo '<script>alert("Incorrect PAN Number")</script>';

        }
        elseif($email != $row['Email_ID']){

            echo '<script>alert("Incorrect E-Mail Id")</script>';

        }
     

        else{
            //-------------------------------------------------------------------'

            //Code to Issue Debit Card since all the provided details are correct
            
            $mob_no = $row['Mobile_no'];
           if($row['Debit_Card_No'] === NULL){

            $debit_card = "1508".mt_rand(1000,9999).mt_rand(1000,9999);
            $debit_card_pin = mt_rand(10,99).mt_rand(10,99);
            $cvv = mt_rand(0,9).mt_rand(0,99);
            
            

            
            $sql = "UPDATE bank_customers SET Debit_Card_No = '".$debit_card."', Debit_Card_Pin = '".$debit_card_pin."', CVV = '".$cvv."' WHERE Account_no = '$acc_no' ";
            if($conn->query($sql) == TRUE ){


                //Mail send
                
                if(mysqli_query($conn, $sql )) {
						$subject="Card Details";
						$output="<table cellspacing='2px' cell padding='2px'>
						<tr>
						<th>Debit_Card_No</th>
						<th>Debit_Card_Pin</th>
						<th>CVV</th>
						<th>Account_no</th>
						</tr>
						<tr>
						<td>$debit_card</td>
						<td>$debit_card_pin</td>
						<td>$cvv</td>
						<td>$acc_no</td>
						</tr>
						</table>";
						$body="<h1>Hello $holder_name</h1>
							   <h2>Your Bank Details</h2>
							   $output";  
					include "PHPMailer/PHPMailerAutoload.php";
					include "PHPMailer/class.phpmailer.php";
					$mail = new PHPMailer();
			$mail->isSMTP();// use SMTP
		
			$mail->SMTPDebug = 2;
			$mail->Debugoutput = 'html';
			//// enable SMTP authentication
			$mail->SMTPSecure = 'ssl';
			$mail->Host = "smtp.gmail.com"; // SMTP host
			$mail->Port = 587;// set the SMTP port
			$mail->SMTPAuth = true;
			$mail->SMTPSecure = 'tls';
			$mail->Username="sandhiyanemee@gmail.com";
			$mail->Password="dxtwkustsrdcbhbf";
			$mail->setFrom("sandhiyanemee@gmail.com");
			$mail->addAddress($email);
			$mail->IsHTML(true);
			$mail->Subject=$subject;
			$mail->Body=$body;
					if($mail->send()){
						echo "<div class='alert alert-danger'>Email Send Successfully!.</div>";
					}
					}else{
						echo "<div class='alert alert-danger'>Couldn't Send Mail</div>";
					}
                    //End Mail send------


                //SMS Integration for Debit Card Details  -----------------------------------------------------
						
					// require('textlocal.class.php');
					// $apikey = 'Mzie479SxfY-Z7slYf9AI3zVXCAu0G5skUBQVYOfRU';
					// $textlocal = new Textlocal(false,false,$apikey);
					// $numbers = array($mob_no);
					// $sender = 'TXTLCL';
					// $message = 'Hello '.$row['Username'].' Your Debit Card No is : '.$debit_card.' with the auto generated pin : '.$debit_card_pin.' Please change this pin as soon as possible';

					
					// 	try {
					// 		$result = $textlocal->sendSms($numbers, $message, $sender);
					// 		print_r($result);
					// 	} catch (Exception $e) {
					// 		die('Error: ' . $e->getMessage());
					// 	}
						
		//--------------------------------------------------------------------------------------				
		//--------------------------------------------------------------------------------------
	


            echo '<script>alert("Debit Card issued successfully.\n\nIt will be delivered to your home address soon.\n\nYour Debit Card No is : '.$debit_card.' and Pin is : '.$debit_card_pin.'\n\n Please change this pin as soon as possible.")</script>';
                
            }
            //--------------------------------------------------------------------
        }

        else{

            echo '<script>alert("You have already applied for debit card\n\nYour Debit Card number is : '.$row['Debit_Card_No'].'")</script>';
        }

        }
    
    }
}

}
?>
