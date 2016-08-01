<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href="css/style.css" type="text/css" rel="stylesheet" />
		<link href="dist/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
		<link rel="stylesheet" type="text/css" href="./jquery.datetimepicker.css"/>
		<link href="css/hover.css" type="text/css" rel="stylesheet" />
		<script src="js/jquery-1.11.3.min.js" type="text/javascript" ></script>
		<script src="js/jquery-ui.min.js" type="text/javascript" ></script>
		<script src="dist/js/bootstrap.min.js" type="text/javascript" ></script>
		<script src="js/dropdown.js" type="text/javascript"></script>
		<script src="js/collapse.js" type="text/javascript"></script>
		<script src="js/custom.js" type="text/javascript"></script>
		<title>Talash.Online</title>
	</head>

	<body>
		<div class="back-page-post">
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
								<img src="<?php
								echo "http://talash.online/" . $pjrep[$cnt + 1][63];
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
					<?php } ?>

				</div>
			</div>
		</div>

		<div class="post-page">
			<div class="header-section">
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
						<div class="col-md-2">
							<div class="left-panel">
								<ul>
									<li class="inbox">
										<a href="#"><span class="num">50</span></a>
									</li>
									<li class="notification">
										<a href="#"><span class="num">50</span></a>
									</li>
									<li class="karma-point">
										<a href="#"><span class="num">50</span></a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-md-2">
							<div class="user">
								<div class="navbar navbar-inverse" role="banner">
									<nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
										<ul class="nav navbar-nav">
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">Sandip<b class="caret"></b></a>
												<ul class="dropdown-menu animated fadeInUp">
													<li>
														<a href="#">Change Profile Picture</a>
													</li>
													<li>
														<a href="#">Edit Profile</a>
													</li>
													<li>
														<a href="#">My Profile</a>
													</li>
													<li>
														<a href="#">Logout</a>
													</li>
												</ul>
											</li>
										</ul>
									</nav>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="post-detail">
				<div class="container">
					<div class="post-dtl">
						<div class="row">
							<div class="col-md-2">
								<div class="cnt-head">
									<h5>POST</h5>
								</div>
									<div class="personal-info-page">
									<div class="frm-grp">
										<select>
											<option class="male">Missing</option>
											<option class="female">found</option>
										</select>
									</div>
									<div class="frm-grp">
										<input type="text" placeholder="Name of person" />
									</div>
									<div class="frm-grp">
										<input type="text" placeholder="Contact Number" />
									</div>
									<div class="frm-grp">
										<input type="text" placeholder="Date of missing/found" class="some_class" value="" id="datetimepicker2" />
									</div>
									<div class="frm-grp">
										<input type="password" placeholder="Password" />
									</div>
									<div class="frm-grp">
										<select>
											<option class="male">Male</option>
											<option class="female">Female</option>
										</select>
									</div>
									<div class="frm-grp">
										<textarea class="details"></textarea>
									</div>
									<div class="frm-grp">
										<input type="file" value="" />
									</div>
									<div class="frm-grp">
										<div class="sbt-btn">
											<button class="next">
												Submit
											</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-7" id="postcontainer">
								<?php

								$curl = curl_init();

								curl_setopt_array($curl, array(
								CURLOPT_URL => "http://localhost/talash/service/getmissingrow.php?key=iZ23U35Gx9I8987x09tsW6i6oS2W5Ux1&count=0",
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
								$jresponce=explode('{', $response);

								$a=1;
								$cnt =0;
								while ($a < count($jresponce)) {
								$pjrep[$a]=explode('"', $jresponce[$a]);

								$a=$a+1;
								}

								for ($i=0; $i < $a; $i++) {

								?>
								<div class="center-panel">
									<div class="center-detail">
										<div class="row">
											<div class="col-md-12">
												<div class="postby">
													<div class="row">
														<div class="col-md-5 col-xs-2">
															<div class="center-img"><img src="images/passport-size.jpg" class="img-circle" />
															</div>
														</div>
														<div class="col-md-7 col-xs-10">
															<div class="bg-trans">
																<div class="update-bold">
																	<p>
																		<span class="span1"><b> <?php

																		echo $pjrep[$cnt + 1][31];
																		$cnt++;
																		?></b></span>
																	</p>
																</div>
																<div class="update-time">
																	<p>
																		2Days Ago
																	</p>
																</div>
															</div>
														</div>
													</div>
												</div>

											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="missing-people-details">
													<div class="row">
														<div class="col-md-3 col-xs-3">
															<img src="<?php echo "http://talash.online/" . $pjrep[$cnt + 1][63]; ?>" />
														</div>
														<div class="col-md-9 col-xs-9">
															<div class="msg-ple-dtl">
																<div class="row">
																	<div class="col-md-4">
																		<span>Missing Name</span>
																	</div>
																	<div class="col-md-1">
																		:
																	</div>
																	<div class="col-md-7">
																		<p>
																			Manoj Tiwari
																		</p>
																	</div>
																</div>
																<div class="row">
																	<div class="col-md-4">
																		<span>Date Of Missing </span>
																	</div>
																	<div class="col-md-1">
																		:
																	</div>
																	<div class="col-md-7">
																		<p>
																			12/09/2015
																		</p>
																	</div>
																</div>
																<div class="row">
																	<div class="col-md-4">
																		<span>Talash Post Id </span>
																	</div>
																	<div class="col-md-1">
																		:
																	</div>
																	<div class="col-md-7">
																		<p>
																			T0012345
																		</p>
																	</div>
																</div>
																<div class="row">
																	<div class="col-md-4">
																		<span>Inform Us</span>
																	</div>
																	<div class="col-md-1">
																		:
																	</div>
																	<div class="col-md-7">
																		<p>
																			9940059900
																		</p>
																	</div>
																</div>
																<div class="row">
																	<div class="col-md-4">
																		<span>Last Seen </span>
																	</div>
																	<div class="col-md-1">
																		:
																	</div>
																	<div class="col-md-7">
																		<p>
																			Near Bus-Stand, Mehsana.
																		</p>
																	</div>
																</div>
																<div class="row">
																	<div class="col-md-4">
																		<span>Update By </span>
																	</div>
																	<div class="col-md-1">
																		:
																	</div>
																	<div class="col-md-7">
																		<p>
																			Mina Patel
																		</p>
																	</div>
																</div>

															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="missing-share">
													<div class="row">
														<div class="col-md-9 col-xs-12">
															<ul>
																<li class="report hvr-glow" onclick="OpenDivComment('cb1')">
																	<a>Report </a>
																</li>
																<li class="share  hvr-glow">
																	<a href="#">Share </a>
																</li>
															</ul>
														</div>
													</div>
													<div class="row">
														<div class="col-md-9">
															<div id="cb1" class="comment-box" style="display:none;">
																<input type="text" placeholder="Comment..." />
																<span>
																	<button>
																		Post
																	</button></span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<?php } ?>
							</div>

							<div class="col-md-3">
								<div class="missing-feeds">
									<h5>Missing Near You</h5>
								</div>
								<?php
$selong=23.1815605;
$selat=72.6565083;
function distance($lat1, $lon1, $lat2, $lon2, $unit) {

  $theta = $lon1 - $lon2;
  $dist = sin(deg2rad(floatval($lat1))) * sin(deg2rad(floatval($lat2))) +  cos(deg2rad(floatval($lat1))) * cos(deg2rad(floatval($lat2))) * cos(deg2rad(floatval($theta)));
  $dist = acos($dist);
  $dist = rad2deg($dist);
  $miles = $dist * 60 * 1.1515;
  $unit = strtoupper($unit);

  if ($unit == "K") {
    return ($miles * 1.609344);
	//return ($i=$i+1);
  } else if ($unit == "N") {
      return ($miles * 0.8684);
    } else {
        return $miles;
      }
}
include "backend/config.php"; 
					$index=0;		
					$view="YES";		
	$query=mysqli_query($mysqli, "select * from missing_people where view='$view' ORDER BY `missing_people`.`id` DESC ");
		while($row = mysqli_fetch_array($query))
    {
		$index=$index+1;
		$postid=$row['id'];
		$long=$row['long'];
		$lat=$row['lat'];
//echo distance(73.20001239999999, 23.347374799999997, 73.2000259, 23.347373599999997, "K")."KM </br>";
//$dis= array(	distance(73.20001239999999, 23.347374799999997, 73.2000259, 23.347373599999997, "K"), "ID 22");
$dis[$index][0]=distance($long, $lat, $selong, $selat, "K");
$dis[$index][1]=$postid;
}

array_multisort($dis, SORT_ASC);
for($c=1;$c<11;$c++){ 
									
					$index=0;		
					$view="YES";		
					$arrayid=$dis[$c][1];
	$query=mysqli_query($mysqli, "select * from missing_people where view='$view' AND id='$arrayid' ORDER BY `missing_people`.`id` DESC");
		while($row = mysqli_fetch_array($query))
    {
		$postid=$row['id'];
	
	?>
								<div class="miss-people" id="missingfeed">
									<div class="mis-cls">
										<a href="postdetail.php?postid=<?php echo $postid; ?>">
										<div class="miss-img"><img src="<?php echo "http://talash.online/" . $row['image']; ?>"/>
										</div>
										<div class="miss-cnt">
											<p>
												<?php echo $row['name']; ?>
											</p>
										</div>
										<div class="miss-dtls">
											<ul>
												<li class="miss-address">
													<?php echo round($dis[$index][0], 2) . " km"; ?>
												</li>
												<li class="miss-time">
													5:00 PM
												</li>
											</ul>
										</div> </a>
									</div>
										</div><?php  } } ?>
							

							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

	</body>
</html>
<script>
	$(document).ready(function() {

		var win = $(window);
		var sencount = 1;
		var lastres = true;
		// Each time the user scrolls
		win.scroll(function() {
			if ($(document).height() >= Number($(window).scrollTop() + $(window).height())) {
				console.log("up in the sky");

			} else {
				console.log("scrolling");
				var data = null;

				var xhr = new XMLHttpRequest();
				xhr.withCredentials = true;

				xhr.addEventListener("readystatechange", function() {
					if (this.readyState === 4) {
						console.log(this.responseText);
						if (!document.getElementById("end of post")) {
							$('#postcontainer').append(this.responseText);

						} else {
							console.log("last result recived");
							lastres = false;

						}
					}
				});

				xhr.open("GET", "http://localhost/talash/service/printmissrow.php?key=iZ23U35Gx9I8987x09tsW6i6oS2W5Ux1&count=" + sencount + "");
				xhr.setRequestHeader("mob_no", "9723011190");
				xhr.setRequestHeader("cache-control", "no-cache");
				xhr.setRequestHeader("postman-token", "dcf21a20-ebd4-2dc0-0312-22cc13c4ef0f");

				xhr.send(data);
				sencount = sencount + 1;
			}

		});

	});

		</script>
<script>
	function OpenDiv(divid) {
		$("#" + divid).toggle('slow');
	}
</script>
<script type="text/javascript">
	$("#missingfeed").ajaxComplete(function() {
		$('[data-toggle="tooltip"]').tooltip();
	});
</script>
<script>
	function OpenDivComment(divid) {
		$("#" + divid).toggle('slow');
	}
</script>
<script src="./jquery.js"></script>
<script src="build/jquery.datetimepicker.full.js"></script>
<script>
	/*
	 window.onerror = function(errorMsg) {
	 $('#console').html($('#console').html()+'<br>'+errorMsg)
	 }*/

	$.datetimepicker.setLocale('en');

	$('#datetimepicker_format').datetimepicker({
		value : '2015/04/15 05:03',
		format : $("#datetimepicker_format_value").val()
	});
	console.log($('#datetimepicker_format').datetimepicker('getValue'));

	$("#datetimepicker_format_change").on("click", function(e) {
		$("#datetimepicker_format").data('xdsoft_datetimepicker').setOptions({
			format : $("#datetimepicker_format_value").val()
		});
	});
	$("#datetimepicker_format_locale").on("change", function(e) {
		$.datetimepicker.setLocale($(e.currentTarget).val());
	});

	$('#datetimepicker').datetimepicker({
		dayOfWeekStart : 1,
		lang : 'en',
		disabledDates : ['1986/01/08', '1986/01/09', '1986/01/10'],
		startDate : '1986/01/05'
	});
	$('#datetimepicker').datetimepicker({
		value : '2015/04/15 05:03',
		step : 10
	});

	$('.some_class').datetimepicker();

	$('#default_datetimepicker').datetimepicker({
		formatTime : 'H:i',
		formatDate : 'd.m.Y',
		//defaultDate:'8.12.1986', // it's my birthday
		defaultDate : '+03.01.1970', // it's my birthday
		defaultTime : '10:00',
		timepickerScrollbar : false
	});

	$('#datetimepicker10').datetimepicker({
		step : 5,
		inline : true
	});
	$('#datetimepicker_mask').datetimepicker({
		mask : '9999/19/39 29:59'
	});

	$('#datetimepicker1').datetimepicker({
		datepicker : false,
		format : 'H:i',
		step : 5
	});
	$('#datetimepicker2').datetimepicker({
		yearOffset : 0,
		lang : 'ch',
		timepicker : false,
		format : 'd/m/Y',
		formatDate : 'Y/m/d',
		minDate : '2000/01/01', // yesterday is minimum date
		maxDate : '2022/01/02' // and tommorow is maximum date calendar
	});
	$('#datetimepicker3').datetimepicker({
		inline : true
	});
	$('#datetimepicker4').datetimepicker();
	$('#open').click(function() {
		$('#datetimepicker4').datetimepicker('show');
	});
	$('#close').click(function() {
		$('#datetimepicker4').datetimepicker('hide');
	});
	$('#reset').click(function() {
		$('#datetimepicker4').datetimepicker('reset');
	});
	$('#datetimepicker5').datetimepicker({
		datepicker : false,
		allowTimes : ['12:00', '13:00', '15:00', '17:00', '17:05', '17:20', '19:00', '20:00'],
		step : 5
	});
	$('#datetimepicker6').datetimepicker();
	$('#destroy').click(function() {
		if ($('#datetimepicker6').data('xdsoft_datetimepicker')) {
			$('#datetimepicker6').datetimepicker('destroy');
			this.value = 'create';
		} else {
			$('#datetimepicker6').datetimepicker();
			this.value = 'destroy';
		}
	});
	var logic = function(currentDateTime) {
		if (currentDateTime && currentDateTime.getDay() == 6) {
			this.setOptions({
				minTime : '11:00'
			});
		} else
			this.setOptions({
				minTime : '8:00'
			});
	};
	$('#datetimepicker7').datetimepicker({
		onChangeDateTime : logic,
		onShow : logic
	});
	$('#datetimepicker8').datetimepicker({
		onGenerate : function(ct) {
			$(this).find('.xdsoft_date').toggleClass('xdsoft_disabled');
		},
		minDate : '-1970/01/2',
		maxDate : '+1970/01/2',
		timepicker : false
	});
	$('#datetimepicker9').datetimepicker({
		onGenerate : function(ct) {
			$(this).find('.xdsoft_date.xdsoft_weekend').addClass('xdsoft_disabled');
		},
		weekends : ['01.01.2014', '02.01.2014', '03.01.2014', '04.01.2014', '05.01.2014', '06.01.2014'],
		timepicker : false
	});
	var dateToDisable = new Date();
	dateToDisable.setDate(dateToDisable.getDate() + 2);
	$('#datetimepicker11').datetimepicker({
		beforeShowDay : function(date) {
			if (date.getMonth() == dateToDisable.getMonth() && date.getDate() == dateToDisable.getDate()) {
				return [false, ""]
			}

			return [true, ""];
		}
	});
	$('#datetimepicker12').datetimepicker({
		beforeShowDay : function(date) {
			if (date.getMonth() == dateToDisable.getMonth() && date.getDate() == dateToDisable.getDate()) {
				return [true, "custom-date-style"];
			}

			return [true, ""];
		}
	});
	$('#datetimepicker_dark').datetimepicker({
		theme : 'dark'
	})

</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
 <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
	function myIP() {
		$("#btn").click(function() {
			var geocoder = new google.maps.Geocoder();
			geocoder.geocode({
				'address' : '#city'
			}, function(results, status) {
				if (status == google.maps.GeocoderStatus.OK) {
					alert("location : " + results[0].geometry.location.lat() + " " + results[0].geometry.location.lng());
				} else {
					alert("Something got wrong " + status);
				}
			});
		});
	}
 </script>
