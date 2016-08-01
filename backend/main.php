<?php
$self = array();
$time = 0;
$dataobj;
$hostname = 'devkeymydb.cbva4wkrumxh.ap-southeast-1.rds.amazonaws.com';
$username = 'root';
$password = 'devkey123';
$missingdata = [];

try {
	$dbh = new PDO("mysql:host=$hostname;dbname=talash_db", $username, $password);

	$dbh -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// <== add this line
	//echo 'Connected to Database<br/>';

	$sql = "select * FROM missing_people order by missing_people.time DESC limit 0,24";
	foreach ($dbh->query($sql) as $row) {
		$misingdata = $row;

	}

} catch(PDOException $e) {
	echo $e -> getMessage();
}
?>
