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
		$response = json_encode($missingdata);

	} catch(PDOException $e) {
		echo $e -> getMessage();
	}

} else {
	echo json_encode('invalid Request');
}
if(!$missingdata){
	?><div id="end of post">end of post</div> <?php
}
else {
	

$jresponce=explode('{', $response);

$a=1;
$cnt =0;
while ($a < count($jresponce)) {
$pjrep[$a]=explode('"', $jresponce[$a]);

$a=$a+1;
}
$check=intval($a/4);


for($i=0;$i<$check;$i++){
	
	?><div class="row">
	<div class="col-lg-2 col-md-2 col-xs-6"><?php

for($g=0;$g<4;$g++){
		?>
		<a href="#">
		<div class="post1" background-image: url("paper.gif")>
			<div class="post-imge">
				<img src="<?php $path = explode('/', $pjrep[$cnt + 1][63]);
				echo "http://talash.online/missing/" . $path[1];
  ?>" class="img-responsive"  width="100%" />
			</div>
			<div class="post-descp">
				<p>
					<?php

					echo $pjrep[$cnt + 1][31];
					$cnt++;
					?>
				</p>
			</div>
		</div></a><?php } ?>
	</div></div><?php } } ?>
	
