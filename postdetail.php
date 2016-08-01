<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" type="text/css" rel="stylesheet" />
<link href="dist/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
<link href="css/hover.css" type="text/css" rel="stylesheet" />
<script src="dist/js/bootstrap.min.js" type="text/javascript" ></script>
<script src="js/jquery-1.11.3.min.js" type="text/javascript" ></script>
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
 
<div class="detail-page">
	<div class="header-section">
    	<div class="container">
        	<div class="row">
                <div class="col-md-4">
                	<div class="logo-img"><a href="home.php"><img src="images/logo.png" class="img-responsive" /></a></div>
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
                            <li class="inbox"><a href="#"><span class="num">50</span></a></li>
                            <li class="notification"><a href="#"><span class="num">50</span></a></li>
                            <li class="karma-point"><a href="#"><span class="num">50</span></a></li> 
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
	                           <li><a href="#">Change Profile Picture</a></li>
                               <li><a href="#">Edit Profile</a></li>
                               <li><a href="#">My Profile</a></li> 
	                          <li><a href="#">Logout</a></li>  
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
        <?php		include "backend/config.php"; 
		$pgid=$_GET['postid'];
							
	$query=mysqli_query($mysqli, "select * from missing_people where id='$pgid'");
		while($row = mysqli_fetch_array($query))
    { ?>
            	<div class="row">
                    <div class="col-md-9">
                    	<div class="center-panel">
                      		<div class="center-detail">
                            	<div class="row">
                                	<div class="col-md-12">
                                    	<div class="postby">
                                        	<div class="row">
                                            	<div class="col-md-6 col-xs-3">
                                                	<div class="center-img"><img src="images/passport-size.jpg" class="img-circle" /> </div>
                                                </div>
                                                <div class="col-md-6 col-xs-9"> 
                                                       <div class="bg-trans">
                                                            <div class="update-bold"><p><span class="span1"><b><?php echo $row['name']; ?></b></span></p></div>
                                                            <div class="update-time"><p>2Days Ago</p></div> 
                                                       </div>
                                                </div> 
                                            </div>
                                        </div>
                            	       
                                    </div>
                                </div>
                                <div class="row">
                                	<div class="col-md-5"> 
                                    	<div class="missing-people-details">
                                            	<div class="">
                                                	<img src="images/missing-1.png" class="img-responsive" width="100%" />
                                                </div>
                                        </div>
                                    </div>   
                                    <div class="col-md-7"> 
                                                	<div class="msg-ple-dtl">
                                                       <div class="row">
                                                       			<div class="col-md-4 col-xs-5"><span>Talash Post Id </span></div>
                                                                 <div class="col-md-1 col-xs-1">:</div>
                                                                <div class="col-md-7 col-xs-6"><p><?php echo $row['id']; ?></p></div>
                                                       </div>
                                                       <div class="row">
                                                       			<div class="col-md-4 col-xs-5"><span>Missing Name</span></div>
                                                                <div class="col-md-1 col-xs-1">:</div>
                                                                <div class="col-md-7 col-xs-6"><p><?php echo $row['name']; ?></p></div>
                                                       </div>
                                                        <div class="row">
                                                       			<div class="col-md-4 col-xs-5"><span>Updated By</span></div>
                                                                <div class="col-md-1 col-xs-1">:</div>
                                                                <div class="col-md-7 col-xs-6"><p>Mina Patel</p></div>
                                                       </div>
                                                       <div class="row">
                                                       			<div class="col-md-4 col-xs-5"><span>Date Of Missing </span></div>
                                                                 <div class="col-md-1 col-xs-1">:</div>
                                                                <div class="col-md-7 col-xs-6"><p>12/09/2015</p></div>
                                                       </div>
                                                       <div class="row">
                                                       			<div class="col-md-4 col-xs-5"><span>Inform Us</span></div>
                                                                 <div class="col-md-1 col-xs-1">:</div>
                                                                <div class="col-md-7 col-xs-6"><p>9940059900</p></div>
                                                       </div>
                                                        <div class="row">
                                                       			<div class="col-md-4 col-xs-5"><span>Last Seen </span></div>
                                                                 <div class="col-md-1 col-xs-1">:</div>
                                                                <div class="col-md-7 col-xs-6"><p>Near Bus-Stand, Mehsana.</p> </div>
                                                       </div>
                                                        <div class="row">
                                                       			<div class="col-md-4 col-xs-5"><span>Details </span></div>
                                                                 <div class="col-md-1 col-xs-1">:</div>
                                                                <div class="col-md-7 col-xs-6"><p>Color: Black, etc...</p> </div>
                                                       </div>
                                                        <div class="row">
                                                       			<div class="col-md-4 col-xs-5"><span>Address</span></div>
                                                                 <div class="col-md-1 col-xs-1">:</div>
                                                                <div class="col-md-7 col-xs-6"><p>400, Shiv Tower, Near, Passport Office, Mehsana.</p> </div>
                                                       </div>
                                                        
                                                    </div>
                                                </div>
                                           
                                </div>
                                <div class="row">
                                	<div class="col-md-12">
                                    	<div class="missing-share">
                                        	<div class="row">
                                                <div class="col-md-9 col-xs-9">
                                                	<ul>
                                                        <li class="report hvr-glow" onclick="OpenDivComment('comment-box')"><a >Report </a></li>
                                                        <li class="share  hvr-glow"><a href="#">Share </a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row">
                                            	<div class="col-md-9">
                                                	<div class="comment-box" style="display:none;"> 
                                                    	<input type="text" placeholder="Comment..." /><span><button>Post</button></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>   
                             </div>
                         </div>   
                             
                    </div><?php }?>
                  
           
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

<div class="container-fluid">
<div class="row">
    	<div class="footer">
        	<ul>
            	<li><a href="#">Home</a></li>
                <li><a href="about-us.html">About Us</a></li>
                <li><a href="index.php">Missing Peoples</a></li>
                <li><a href="#">Lorem</a></li>
                <li><a href="#">Lorem</a></li> 
            </ul>
            <div class="copy-right"> 	
        	  <p><small>copy right &copy; 2016 talash.online All Right Reserved | Developed By <a href="" target="_blank"> Devkey Innovation Lab</a></small></p>    
           </div>
        </div>
        
    </div>
</div>



</body>
</html>
<script>
function OpenDiv(divid){
	$("#"+divid).toggle('slow');
	}
</script>
<script>
function OpenDivComment(divid){
	$("."+divid).toggle('slow');
	}
</script>

