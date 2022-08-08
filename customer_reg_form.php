<?php ob_start() ?>

<html>
<head>
    <title>Registration Form</title>
    <link rel="stylesheet" type="text/css" href="css/customer_reg_form.css"/>
	<link rel="shortcut icon" href="img/bank_logo.png"> 
    
    </head>
    <body>
    <div class="container_regfrm_container_parent">
	<h3>Online Account Opening Form</h3>
	<div class="container_regfrm_container_parent_child">
		<form method="post">
				 <input type="text" name="name" placeholder="Name" required />
				 <input type="text" name="fname" placeholder="Father Name" required />
				 <select name ="gender" required >
					  <option class="default" value="" disabled selected>Gender</option>
					  <option value="Male" required >Male</option>
					  <option value="Female">Female</option>
					  <option value="Others">Others</option>
				</select>
				 <input type="text" name="mobile" placeholder="Mobile no" required />
				 <input type="text" name="email" placeholder="Email id" />
				 <input type="text" name="dob" placeholder="Date of Birth" onfocus="(this.type='date')" required />
				 <input type="text" name="pan_no" placeholder="PAN Number" required />
				 <input type="text" name="aadhar" placeholder="Aadhar Number" required />
				 <input class="address" type="text" name="homeaddrs" placeholder="Home Address" required  />
				 <input type="text" name="country" placeholder="India" value="India" readonly="readonly" />
				 <script type="text/javascript">
var citiesByState = {
AndhraPradesh: ["Mumbai","Pune","Nagpur"],
ArunachalPradesh: ["Mumbai","Pune","Nagpur"],
Assam: ["kochi","Kanpur"],
Bihar: ["kochi","Kanpur"],
Chhattisgarh: ["kochi","Kanpur"],
Goa: ["kochi","Kanpur"],
Gujarat: ["kochi","Kanpur"],
Haryana: ["kochi","Kanpur"],
HimachalPradesh: ["kochi","Kanpur"],
Jharkhand: ["kochi","Kanpur"],
Karnataka: ["kochi","Kanpur"],
Kerala: ["kochi","Kanpur"],
MadhyaPradesh: ["kochi","Kanpur"],
Maharashtra: ["kochi","Kanpur"],
Manipur: ["kochi","Kanpur"],
Meghalaya: ["kochi","Kanpur"],
Mizoram: ["kochi","Kanpur"],
Nagaland: ["kochi","Kanpur"],
Odisha: ["kochi","Kanpur"],
Punjab: ["kochi","Kanpur"],
Rajasthan: ["kochi","Kanpur"],
Sikkim: ["kochi","Kanpur"],
TamilNadu:["Ariyalur","Chennai","Coimbatore","Cuddalore","Dharmapuri","Dindigul","Erode","Kallakurichi","Kanchipuram","Kanniyakumari","Karur","Krishnagiri","Madurai",
"Nagapattinam","Namakkal","Nilgiris","Perambalur","Pudukkottai","Ramanathapuram","Salem","Sivaganga","Thanjavur","Theni","Thoothukudi","Tiruchirappalli","Tirunelveli",
"Tiruppur","Tiruvallur","Tiruvannamalai","Tiruvarur","Vellore","Viluppuram","Virudhunagar"],
Telangana: ["Mumbai","Pune","Nagpur"],
Tripura: ["Mumbai","Pune","Nagpur"],
UttarPradesh: ["Mumbai","Pune","Nagpur"],
Uttarakhand: ["Mumbai","Pune","Nagpur"],
WestBengal: ["Mumbai","Pune","Nagpur"],
}
function makeSubmenu(value) {
if(value.length==0) document.getElementById("citySelect").innerHTML = "<option></option>";
else {
var citiesOptions = "";
for(cityId in citiesByState[value]) {
citiesOptions+="<option>"+citiesByState[value][cityId]+"</option>";
}
document.getElementById("citySelect").innerHTML = citiesOptions;
}
}
function displaySelected() { var country = document.getElementById("countrySelect").value;
var city = document.getElementById("citySelect").value;
alert(country+"\n"+city);
}
function resetSelection() {
document.getElementById("countrySelect").selectedIndex = 0;
document.getElementById("citySelect").selectedIndex = 0;
}
</script>
</head>
<body onload="resetSelection()">
<select id="countrySelect" name ="state" size="1" onchange="makeSubmenu(this.value)" required>
<option class="default" value="" disabled selected>Choose State</option>
<option>AndhraPradesh</option>
<option>ArunachalPradesh</option>
<option>Assam</option>
<option>Bihar</option>
<option>Chhattisgarh</option>	
<option>Goa</option>
<option>Gujarat	</option>
<option>Haryana</option>
<option>HimachalPradesh</option>	
<option>Jharkhand	</option>
<option>Karnataka</option>
<option>Kerala</option>
<option>MadhyaPradesh</option>	
<option>Maharashtra</option>
<option>Manipur</option>
<option>Meghalaya</option>
<option>Mizoram</option>
<option>Nagaland</option>
<option>Odisha</option>
<option>Punjab</option>
<option>Rajasthan</option>
<option>Sikkim</option>
<option>TamilNadu</option>
<option>Telangana</option>
<option>Tripura</option>
<option>UttarPradesh</option>
<option>Uttarakhand</option>
<option>WestBengal</option>
</select>
<select id="citySelect" name ="district" size="1" required>
<option class="default" value="" disabled selected>Choose Districts</option>
<option></option>
</select>



<input type="text" name="pin" placeholder="Pin Code" required />
				 <input type="text" name="arealoc" placeholder="City" required />
				 <input type="text" name="nominee_name" placeholder="Nominee Name (If any)" />
				 <input type="text" name="nominee_ac_no" placeholder="Nominee Account no"  />
				 
				 <select name ="acctype" required >
					  <option class="default" value="" disabled selected>Account Type</option>
					  <option>Saving</option>
					  <option>Current</option>
				</select>
				<input type="submit" name="submit" value="Submit">
				</form>
         </div>
		 </div>
		 
<?php include'footer.php';?>
    
</body>
</body>
</html>


<?php 

if(isset($_POST['submit'])){

	session_start();
	$_SESSION['$cust_acopening'] = TRUE;
	$_SESSION['cust_name']=$_POST['name'];
	$_SESSION['cust_fname']=$_POST['fname'];
	$_SESSION['cust_gender']=$_POST['gender'];
	$_SESSION['cust_mobile']=$_POST['mobile'];
	$_SESSION['cust_email']=$_POST['email'];
	$_SESSION['cust_dob']=$_POST['dob'];
	$_SESSION['cust_pan=']=$_POST['pan_no'];
	$_SESSION['cust_aadhar']=$_POST['aadhar'];
	$_SESSION['cust_homeaddrs']=$_POST['homeaddrs'];
	$_SESSION['cust_country']=$_POST['country'];
	$_SESSION['cust_state']=$_POST['state'];
	$_SESSION['cust_district']=$_POST['district'];
	$_SESSION['cust_city']=$_POST['city'];
	$_SESSION['cust_pin']=$_POST['pin'];
	$_SESSION['arealoc']=$_POST['arealoc'];
	$_SESSION['nominee_name']=$_POST['nominee_name'];
	$_SESSION['nominee_ac_no']=$_POST['nominee_ac_no'];
	$_SESSION['cust_acctype']=$_POST['acctype'];
	
	header('location:cust_regfrm_confirm.php');
	
	
}

?>