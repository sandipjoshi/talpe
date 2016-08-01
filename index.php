<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href="css/style.css" type="text/css" rel="stylesheet" />
		<link href="dist/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
		<link rel="stylesheet" type="text/css" href="./jquery.datetimepicker.css"/>
		<link href="css/hover.css" type="text/css" rel="stylesheet" />
		<script src="js/jquery-1.11.3.min.js" type="text/javascript" ></script>
		<script src="dist/js/bootstrap.min.js" type="text/javascript" ></script>
		<script src="js/dropdown.js" type="text/javascript"></script>
		<script src="js/collapse.js" type="text/javascript"></script>
		<script src="js/custom.js" type="text/javascript"></script>
		<title>Talash.Online</title>
	</head>

	<body>

		<div class="back-page-missing">
			<div class="container-fluid">
				<div class="row" id="postcards">
					<?php
$curl = curl_init();

curl_setopt_array($curl, array(
CURLOPT_URL => "http://localhost/talash/service/getmissingbg.php?key=iZ23U35Gx9I8987x09tsW6i6oS2W5Ux1&count=0",
CURLOPT_RETURNTRANSFER => true,
CURLOPT_ENCODING => "",
CURLOPT_MAXREDIRS => 10,
CURLOPT_TIMEOUT => 30,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => "GET",
CURLOPT_HTTPHEADER => array(
"cache-control: no-cache",
"mob_no: 9723011190",
"postman-token: dbd1994f-9816-98f9-7abf-d6dca9678e6e"
),
));

$response = curl_exec($curl);
$err = curl_error($curl);
curl_close($curl);
if(empty($response)){ }
else {

$jresponce=explode('{', $response);

$a=1;
$cnt =0;
while ($a < count($jresponce)) {
$pjrep[$a]=explode('"', $jresponce[$a]);

$a=$a+1;
}

for($i=0;$i<6;$i++){
					?>
					<div class="col-lg-2 col-md-2 col-xs-6">
						<?php

for($g=0;$g<4;$g++){
						?>
						<a href="#">
						<div class="post1" background-image: url("paper.gif");>
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
					</div>
					<?php }} ?>
				</div>
			</div>
		</div>

		<script>
			$(document).ready(function() {
				var win = $(window);
				var sencount = 1;
				var lastres = true;
				// Each time the user scrolls
				win.scroll(function() {
					console.log($(document).height() >= Number($(window).scrollTop() + $(window).height()));
					console.log($(document).height() <= Number($(window).scrollTop() + $(window).height()));
					console.log($(document).height() == Number($(window).scrollTop() + $(window).height()));
					
					if ($(document).height() >= Number($(window).scrollTop() + $(window).height())) {

					} else {
						var data = null;

						var xhr = new XMLHttpRequest();
						xhr.withCredentials = true;

						xhr.addEventListener("readystatechange", function() {
							if (this.readyState === 4) {
								if (!document.getElementById("end of post")) {
									$('#postcards').append(this.responseText);

								} else {
									lastres = false;

								}
							}
						});

						xhr.open("GET", "http://localhost/talash/service/printmissbg.php?key=iZ23U35Gx9I8987x09tsW6i6oS2W5Ux1&count=" + sencount + "");
						xhr.setRequestHeader("mob_no", "9723011190");
						xhr.setRequestHeader("cache-control", "no-cache");
						xhr.setRequestHeader("postman-token", "dcf21a20-ebd4-2dc0-0312-22cc13c4ef0f");

						xhr.send(data);
						sencount = sencount + 1;
					}

				});

			});

		</script>
		<div class="header-section-missing">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="logo-img">
							<a href="home.php"><img src="images/logo.png" class="img-responsive" /></a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="serch">
							<div class="form-serch">
								<input type="text" class="form-control" placeholder="Search...">
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="row">
			<div class="footer">
				<ul>
					<li>
						<a href="#">Home</a>
					</li>
					<li>
						<a href="about-us.html">About Us</a>
					</li>
					<li>
						<a href="index.php">Missing Peoples</a>
					</li>
					<li>
						<a href="#">Lorem</a>
					</li>
					<li>
						<a href="#">Lorem</a>
					</li>
				</ul>
				<div class="copy-right">
					<p>
						<small>copy right &copy; 2016 talash.online All Right Reserved | Developed By DEVKEY Innovation Lab.</small>
					</p>
				</div>
			</div>

		</div>

	</body>
</html>
