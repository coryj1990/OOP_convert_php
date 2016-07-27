<!DOCTYPE html>
<html>
<head>
</head>

<body>


<?php
include("/classes.php");
$initmass = floatval($_POST['initmass']);
$lbstokg = floatval($_POST["lbstokg"]);
$lbstostone = floatval($_POST["lbstostone"]);
$kgtostone = floatval($_POST["kgtostone"]);
$kgtolbs = floatval($_POST["kgtolbs"]);
$stonetokg = floatval($_POST["stonetokg"]);
$stonetolbs = floatval($_POST["stone"]);

$inittemp = floatval($_POST["inittemp"]);
$FtoC = floatval($_POST["FtoC"]);
$CtoF = floatval($_POST["CtoF"]);

$initdist = floatval($_POST["initdist"]);
$mitokilom = floatval($_POST["mitokilom"]);
$kilomtomi = floatval($_POST["mitokilom"]);

var_dump($_POST);

// $massconvert new Massconvert;

// if ($lbstokg != nil){
// 	$toconvert->setlbs($initmass);
// 	$toconvert -> tokgs();
// 	echo $toconvert;
// }
// if ($lbstostone != nil){
// 	$toconvert->setlbs($initmass);
// 	$toconvert -> tostone();
// 	echo $toconvert;
// }
// if ($kgtostone != nil){
// 	$toconvert->setkgs($initmass);
// 	$toconvert -> tostone();
// 	echo $toconvert;
// }
// if ($kgtolbs != nil){
// 	$toconvert->setkg($initmass);
// 	$toconvert -> tolbs();
// 	echo $toconvert;
// }
// if ($stonetolbs != nil){
// 	$toconvert->setstone($initmass);
// 	$toconvert -> tolbs();
// 	echo $toconvert;
// }
// if ($stonetokg != nil){
// 	$toconvert->setstone($initmass);
// 	$toconvert -> tokgs();
// 	echo $toconvert;
// }


// $tempcov = new Tempconvert;

?><br>
<a href="index.php">Home</a>


</php>
</body>
</html>