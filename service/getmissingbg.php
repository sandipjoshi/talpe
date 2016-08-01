<?php
include '../backend/config.php';
$key = $_GET['key'];
$whichcount = $_GET['count'];
$sendcount = $whichcount * 24;
$missingdata = [];
if ($key = 'iZ23U35Gx9I8987x09tsW6i6oS2W5Ux1') {$cnt = 0;
	try {
		$sql = "select *  FROM missing_people order by missing_people.time DESC limit $sendcount,24";
		$res = $dbh -> query($sql);
		$missingdata = $res -> fetchAll(PDO::FETCH_CLASS);
		echo json_encode($missingdata);

	} catch(PDOException $e) {
		echo $e -> getMessage();
	}
	
} else {
	echo json_encode('invalid Request');
}
	?>
