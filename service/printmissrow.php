<?php
include '../backend/config.php';
$key = $_GET['key'];
$whichcount = $_GET['count'];
$sendcount = $whichcount * 24;
$missingdata = [];
if ($key = 'iZ23U35Gx9I8987x09tsW6i6oS2W5Ux1') {
	$cnt = 0;
	try {
		$sql = "select *  FROM missing_people order by missing_people.time DESC limit $sendcount,10";
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

for ($i=0; $i < ($a-1); $i++) {

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
															<img src="<?php $path = explode('/', $pjrep[$cnt + 1][63]);
								echo "http://talash.online/missing/" . $path[1];
								?>" />
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
								<?php }} ?>
