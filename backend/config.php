<?php
$hostname = 'devkeymydb.cbva4wkrumxh.ap-southeast-1.rds.amazonaws.com';
$username = 'root';
$password = 'devkey123';
$mysqli = mysqli_connect($hostname, $username, $password, "talash_db");
if (mysqli_connect_errno($mysqli)) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$conn2 = mysql_connect($hostname, $username, $password);
	 if (!$conn2)
    {
	 die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("talash_db", $conn2);
mysql_query("SET character_set_results=utf8", $conn2);
mb_language('uni');
mb_internal_encoding('UTF-8');
mysql_select_db("talash_db", $conn2);
mysql_query("set names 'utf8'",$conn2); 
mysql_query("SET character_set_client=utf8", $conn2);
mysql_query("SET character_set_connection=utf8", $conn2); 
mysql_query("SET character_set_results=utf8", $conn2);


$dbh = new PDO("mysql:host=$hostname;dbname=talash_db", $username, $password);

			$dbh -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


?>

