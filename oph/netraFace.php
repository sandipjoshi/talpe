<?php
include ('php-image-magician/php_image_magician.php');
include "FaceDetector.php";
$ds = $_GET['im'];
//$imtype=$_GET['imtype'];
$dsi = explode('/', $ds);
$crppngnm = explode('.', $dsi[1]);
$crpname = 'HOF/' . $crppngnm[0] . '.png';
$crpHOFname = 'HOF/que/' . $crppngnm[0] . '.png';
$movehofpng='HOFPNG/' . $crppngnm[0] . '.png';

$detector = new svay\FaceDetector('detection.dat');
$detector -> faceDetect($ds);
$detector -> cropFaceToPng($crpname);


$magicianObj = new imageLib($crpname);
$magicianObj -> resizeImage(125, 150, 'exact');
$magicianObj -> saveImage($crpHOFname);


$output = shell_exec('/usr/bin/python2.7 /opt/lampp/htdocs/tal_netra/pyfaces /opt/lampp/htdocs/oph/' . $crpHOFname . ' /opt/lampp/htdocs/oph/HOFPNG 15 3');
echo "<pre>$output</pre>";
$arr = explode(' :', $output, 30);
$matchfile=explode(" ", $arr[1]);
$found= explode("oph/", $matchfile[0]);

echo "Query Image"."<img src=".$crpHOFname." ><br/>";

echo "match Found with name"."$found[1]";
echo "<img src=".$found[1].">";
//echo "<pre>$arr[1]</pre>";
echo "Processing time:"."<pre>$arr[2]</pre>";
echo $crpHOFname."<br/>";
echo $movehofpng;
copy($crpHOFname, $movehofpng);
?>
