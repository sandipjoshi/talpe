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
	</head>
	<body>
		<div class="back-page">
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
					<?php } ?>

				</div>
			</div>
		</div>
		<div class="map">
			<div class="container-fluid">
				<div class="landing-page">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-xs-12">
							<!-- <div class="logo-img-homee"><img src="images/logo.png" class="img-responsive" /></div>-->
							<div class="logo-img-home"><img src="images/home-page-logo.png" class="img-responsive" />
							</div>

							<!--<div class="row">
							<div class="col-lg-12 col-xs-12 col-md-12">
							<div class="application-store-download">
							<div class="row">
							<div class="col-lg-6 col-md-6 col-xs-12">
							<div class="download-img"><a href="#"><img src="images/google-play-store.png" /></a></div>
							</div>
							<div class="col-lg-6 col-md-6 col-xs-12">
							<div class="download-img"><a href="#"><img src="images/apple.png" /></a></div>
							</div>
							</div>
							</div>
							</div>
							</div>-->
						</div>
						<div class="col-lg-4 col-md-4 col-xs-12">
							<div class="polina1">
								<h1>Let's help Missing find a way..</h1>
								<p>
									talash.online is plateform to trace and track missing person nationwide
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-xs-12">
							<div class="polina">
								<div class="login">
									<h2 id="login_header">Login / Sign up</h2>
								</div>
								<div class="txt-box">
									<input type="text" id="mobileno" name="" value="" placeholder="Email / Phone"  />
								</div>
								<div class="row">
									<div class="col-lg-6 col-md-6 col-xs-12">
										<div class="txt-box">
											<a href="forget-password.html" >
											<p id="forget_pass">
												Forgotten Password?
											</p></a>
										</div>
										<div class="txt-box">
											<input type="checkbox"  />
											<span><label>Remember Me</label></span>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-xs-12">
										<div class="lgn-btn">
											<button class="login" id="next" onclick="getlogin();">
												Next
											</button>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>

				</div>
				<script>
				
var inid="mobileno";
document.getElementById(inid)
    .addEventListener("keyup", function(event) {
    event.preventDefault();
    if (event.keyCode == 13) {
        document.getElementById("next").click();
        if(inid=="mobileno"){
        	getlogin();
        }
        if(inid=="OTP"){
        	login(userid);
        }
        if(inid=="pwd"){
        	verify(userid);
        }
    }
});

function getlogin() {

var data = null;
var mno = document.getElementById("mobileno").value;
if(mno){
var xhr = new XMLHttpRequest();
xhr.withCredentials = true;

xhr.addEventListener("readystatechange", function() {
if (this.readyState === 4) {
var resp = this.responseText;
var n = resp.includes("OTP");

if (n==true) {
var lhod = document.getElementById("login_header");
lhod.innerHTML = "OTP";
document.getElementById("mobileno").setAttribute("id", "OTP");
inid="OTP";
document.getElementById("OTP").setAttribute("name", "OTP");
document.getElementById("OTP").value = "";
document.getElementsByName('OTP')[0].placeholder = 'OTP';
document.getElementById("next").innerHTML = "Signup";
document.getElementById('next').setAttribute('onclick','verify('+resp+')');
} else {

var lhod = document.getElementById("login_header");
lhod.innerHTML = "Password";
document.getElementById("mobileno").setAttribute("type", "password")
document.getElementById("mobileno").setAttribute("id", "pwd");
inid="pwd";
var userid =resp;
document.getElementById("pwd").setAttribute("name", "pass");
document.getElementById("pwd").value = "";
document.getElementsByName('pass')[0].placeholder = 'Password';
document.getElementById("next").innerHTML = "Login";
document.getElementById('next').setAttribute('onclick','login('+resp+')');

}

}
});

xhr.open("GET", "http://localhost/talash/service/getOTP.php?key=iZ23U35Gx9I8987x09tsW6i6oS2W5Ux1&mobno=" + mno);
xhr.setRequestHeader("mob_no", "9723011190");
xhr.setRequestHeader("cache-control", "no-cache");
xhr.setRequestHeader("postman-token", "f12f823a-56c1-d401-d81f-8c9a239f5626");

xhr.send(data);
}

else{
	alert("Please enter your mobile no");
}
}
function login(str){

var pwd=document.getElementById('pwd').value;
if(!pwd){
alert('Please enter password');
}
var data = null;

var xhr = new XMLHttpRequest();
xhr.withCredentials = true;

xhr.addEventListener("readystatechange", function () {
  if (this.readyState === 4) {
    if(this.responseText=="True"){
    	alert("Please enter correct password");
    	    }
    else{
    	
    	window.location.assign("dash.php")
    }
    
  }
});

xhr.open("GET", "http://localhost/talash/service/login.php?key=iZ23U35Gx9I8987x09tsW6i6oS2W5Ux1&uid="+str+"&pwd="+pwd+"");
xhr.setRequestHeader("mob_no", "9723011190");
xhr.setRequestHeader("cache-control", "no-cache");
xhr.setRequestHeader("postman-token", "369122c7-6240-0a7c-59bf-ee02055335a3");

xhr.send(data);


}

function verify(str){
alert(str);
var otp=document.getElementById('OTP').value;

if(otp){
	otp1=str.split("=",2)
	console.log(otp1[1]);
	if (otp==otp1[1]) {
		alert("otp correct");
		window.location.assign("dash.php");
	}
	else{
		alert("please enter correct OTP");
	}
	}
else{
	alert("please enter OTP");
}


}

				</script>
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
								<small>copy right &copy; 2016 talash.online All Right Reserved | Developed By <a href="http://www.jupsys.com/" target="_blank"> Jupsys Infotech</a></small>
							</p>
						</div>
					</div>

				</div>
			</div>

		</div>

	</body>
</html>
