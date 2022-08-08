<link rel="shortcut icon" href="img/bank_logo.png"> 
<?php 
class jkrkbank
{
  public $server = "localhost";
  public $user = "root";
  public $pass = "";
  public $dbname = "bankjkrk";
	public $conn;
  public function __construct()
  {
  	$this->conn= new mysqli($this->server,$this->user,$this->pass,$this->dbname);
  	if($this->conn->connect_error)
  	{
  		die("connection failed");
  	}
  }
 	public function insertQr($Customer_ID,$caccno,$cname,$cdcn,$cdob,$cmobile,$ifsccode,$qrimage,$qrlink)
 	{
$sql = "INSERT INTO qrcodes(Customer_ID,caccno,cname,cdcn,cdob,cmobile,ifsccode,qrImg,qrlink) VALUES('$Customer_ID','$caccno','$cname','$cdcn','$cdob','$cmobile','$ifsccode','$qrimage','$qrlink')";
$query = $this->conn->query($sql);
return $query;
 	
 	}
 	public function displayImg()
 	{
 		$sql = "SELECT qrimg,qrlink from qrcodes where qrimg='$qrimage'";

 	}
}
$nemee = new jkrkbank();

?>