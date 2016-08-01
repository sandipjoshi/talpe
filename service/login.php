<?php
session_start();
include "../backend/config.php";
$key=$_GET['key'];
$uid = $_GET['uid'];
$passw=$_GET['pwd'];
//$mobile_no='9723011190';
//$sql="SELECT * FROM `Parent` WHERE      MobileNo='$mobile_no'";
//$result=mysql_query($sql,$conn2);
// Mysql_num_row is counting table row
//$count = mysql_num_rows($result);

if ($key = 'iZ23U35Gx9I8987x09tsW6i6oS2W5Ux1')
{
$sql = "select * FROM users where users.id='$uid'";
foreach ($dbh->query($sql) as $row) {
	$count = $row;
	
}
// If result matched $myusername and $mypassword, table row must be 1 row
if (empty($count)) {
	
	
	echo json_encode("False");
	

} else {
	$string = '0123456789';
	$string_shuffled = str_shuffle($string);
	$otp = substr($string_shuffled, 1, 4);
	
	if($passw==$count['User_pwd']){
		
	$_SESSION['userid']=$uid;
	echo json_encode('True');
	}

}
}
?>