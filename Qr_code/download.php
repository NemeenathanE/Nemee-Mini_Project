<link rel="shortcut icon" href="img/bank_logo.png"> 
<?php 
if(isset($_GET['download']))
$file_name = $_GET['download'];
$file_url = 'http://JKRKBANK.com/practice/day2/qr' . $file_name;
header('Content-Type: application/octet-stream');
header("Content-Transfer-Encoding: Binary"); 
header("Content-disposition: attachment; filename=\"".$file_name."\""); 
readfile($file_url);
exit;