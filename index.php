<html>
<title>JKRK Online Banking</title>
<head>
   <link rel="stylesheet" type="text/css" href="css/index.css">
   <link rel="shortcut icon" href="img/bank_logo.png"> 

  
  
</head>
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 33%;
  padding: 10 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 0px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 10px;
  }
}

/* Style the counter cards */
.card {
  
  padding: 16px;
  padding-left0px;
  text-align: center;
  
}
.sand {
   background-color: yellow;    

}
.button {
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
.button:hover, a:hover {
  opacity: 0.7;
}

/*Popup Window*/

.box {
  width: 40%;
  margin: 0px auto;
  background: rgba(255,255,255,0.2);
  padding: 35px;
  border: 2px solid #fff;
  border-radius: 20px/50px;
  background-clip: padding-box;
  text-align: center;
  height: auto;
}
.popoverlay {
  position: fixed;
  top: 0px;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 500ms;
  visibility: hidden;
  opacity: 0;
  overflow-y: auto;
}
.popoverlay:target {
  visibility: visible;
  opacity: 1;
}

.popup {
  margin: 70px auto;
  padding:  18px;
  background: #fff;
  border-radius: 10px;
  width: 44%;
  height:auto;
  position: relative;
  transition: all 5s ease-in-out;
 overflow-y: auto;
 font-size:13pt;
 color:black;
}
}

.popup h2 {
  margin-top: 0;
  color: #333;
  font-family: Tahoma, Arial, sans-serif;
}
.popup .close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}
.popup .close:hover {
  color: red;
}
.popup .content {
  max-height: 100%;
  
}

@media screen and (max-width: 700px){
  .box{
    width: 70%;
  }
  .popup{
    width: 70%;
  }
}
.j-button{
 background-color: red;
    border: none;
    color: white;
    padding: 10px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12pt;;
    border-radius: 12px;
    cursor: pointer;
    outline:none;
}
.button1:hover {
    background-color:green;
    color: white;
}
#container{
width: 100%;
background-color: #fff;
height: auto;
}				


  video::-webkit-media-controls {
  display: none;
}

</style>
<body>
<?php include'header.php'?>
<div class="index_container">
<video width="100%" loop autoplay muted controls>
         <source type="video/mp4" src="img/video/4.mp4"></source>
         <source type="video/mp4" src="img/video/2.mp4"></source>
         <source type="video/mp4" src="img/video/4.mp4"></source>
         </video>

    
    </div><br>
    <!-- <div class="newsroom">
        
        <marquee class="marquee_news" scrolldelay="20"><p class="newsfeed"><span>Your bank may charge you for closing a bank account. 
        Bank also charges you when you close your account within a particular time period.</span><span>SBI cuts deposit rates; PPF to fetch lower interest rate. </span><span>No, it is not mandatory to link your bank account with CITIZENSHIP card</span></p></marquee>
    </div><br><br> -->
   

    
<div class="news_events">
    <h4>Tips | Updates | Events</h4><br>
        <ul>
            <p>First, open an account. Then apply for a debit card to get further details.
 </p><br>
<p>And finally, proceed for Internet Banking Registration to create your internet banking account.

</p>
            <br>
        </ul>
    </div>
    

    <div class="online_services">
        <h4>Online Services</h4>
        <ul>
            <a href="#popup1"><li>Open Account</li></a>
 <script>
function myOnClickFn(){
document.location.href="customer_reg_form.php";
}
</script>   

            <a href="debit_card_form.php"><li>Apply Debit Card</li></a><br>
            <a href="#" id="ebanking" ><li><div class="ebanking">Internet Banking
                <div class = "ebanking_options">
                <ul>
                    <a href="customer_login.php"><li>Login </li></a>
                    <a href="ebanking_reg_form.php"><li>Register</li></a>
                </ul>
            </div>
        </div>
    </li></a>
            <a href="fund_transfer.php"><li>Fund Transfer</li></a><br>
        </ul>
   
</div>

        <div id="aboutus" class="about"><span>About Us</span><br><br>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
</p></div>
    
    <div class="disclaimer">
    <span>Disclaimer !!</spasn><br><br>
        <p>Our bank does not ask for the details of your account/PIN/password. Therefore any one pretending to be asking you for information from the bank/technical team may be fraudulent entities, so please beware.</p>
        <p>You should know how to operate net transactions and if you are not familiar you may refrain from doing so. You may seek bank's guidance in this regard. Bank is not responsible for online transactions going wrong.</p>
        <p>We shall also not be responsible for wrong transactions and wanton disclosure of details by you. Viewing option and transaction option on the net are different. You may exercise your option diligently.</p>
    </div>


    </div>

</br>
<div class="sand">
<div class="row">
  <div class="column">
    <div class="card">
     
    <img class="item1"  src="img/nemee.png" style="width:60%;height: 200px;" >
<br><br>
    <h2 style="color:red;font-size: 19pt;font-weight:bold;font-family: normal;">NEMEENATHAN E</h2>
    <p style="color:#022335;font-size: 12pt;font-weight:bold;">Bank Manager</p>&nbsp;&nbsp;
 <p><input type="Submit" class="button" value="View More" onClick="DirOffice()"/></p>
 
<script>
function DirOffice() {
   window.location.href="img/Officer/DirOffice.html";
}
</script>
    </div>
  </div>

  <div class="column">
    <div class="card">
     <img class="item1"  src="img/jivin.png" style="width:60%;height: 200px;" >
<br><br>
    <h2 style="color:red;font-size: 19pt;font-weight:bold;font-family: normal;">JIVIN K I</h2>
    <p style="color:#022335;font-size: 12pt;font-weight:bold;">Internal Auditor</p>&nbsp;&nbsp;
 <p><input type="Submit" class="button" value="View More" onClick="Auditor()"/></p>
 
<script>
function Auditor() {
   window.location.href="img/Officer/Auditor.html";
}
</script>

    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img class="item1"  src="img/sand.png" style="width:60%;height: 200px;" >
<br><br>
    <h2 style="color:red;font-size: 19pt;font-weight:bold;font-family: normal;">SANDHIYA N</h2>
    <p style="color:#022335;font-size: 12pt;font-weight:bold;">Budget Analyst</p>&nbsp;&nbsp;
 <p><input type="Submit" class="button" value="View More" onClick="Analyst()"/></p>
 
<script>
function Analyst() {
   window.location.href="img/Officer/Analyst.html";
}
</script>

    </div>
  </div>
</div>
</div>
   
<?php include 'footer.php';?>


<div id="popup1" class="popoverlay">

	<div class="popup">
		<h5 style="color:red;font-weight:bold;">Declaration : </h5><br>
		<a class="close" href="#">&times;</a>
		<div class="content" style="text-align: justify;letter-spacing: 2px; ">
<strong style="color: #043F90;">Dear Applicant,</strong><a style="color:black;">Welcome to</a><br><strong style="color: #043F90;">Jivin Krishna Ravin Krishna 
Bank of India (JKRK-1508).
</strong> RBI has issued guidelines to banks to open small accounts for individuals who do not have the necessary KYC documents. Hence,
 you only need a self-attested photograph along with a signature or thumbprint to open a small account. 
 Bank officials must take the signature and thumbprint in their presence. 
As per the extant Reserve Bank of India (RBI) guidelines, which are mandatory,
photographs of all applicant(s) / Power of Attorney holders (i.e. who are authorized to
operate the account(s)) should be furnished to the bank.
As per extant Government of India (GOI) guidelines, PAN / Form No.60/61
(Where PAN is not available) is required to be furnished. 
Savings Bank A/c (SB A/c) can not be opened for business purposes as per RBI
directives and hence SB a/c should be used to route transactions of only nonbusiness / non-commercial nature. In the event of occurrence of such transactions
or any other such transactions that may be construed as dubious or undesirable, the Bank
reserves the right to unilaterally freeze operations in such accounts.
 <br>			
<input type="submit" class="j-button button1" value=" I Agree" onclick="reg()"   id="button3"/ style="margin-left:36%;margin-right:50%;">
<script>
function reg(){
document.location.href="customer_reg_form.php";
}
</script>
		</div>
	</div>
</div>

</body>

</html>
 