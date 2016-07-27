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

// if ($lbstokg != 0){
// 	$massconvert->setlbs($initmass);
// 	$massconvert -> tokgs();
// 	echo $massconvert;
// }
// if ($lbstostone != 0){
// 	$massconvert->setlbs($initmass);
// 	$massconvert -> tostone();
// 	echo $massconvert;
// }
// if ($kgtostone != 0){
// 	$massconvert->setkgs($initmass);
// 	$massconvert -> tostone();
// 	echo $massconvert;
// }
// if ($kgtolbs != 0){
// 	$massconvert->setkg($initmass);
// 	$massconvert -> tolbs();
// 	echo $massconvert;
// }
// if ($stonetolbs != 0){
// 	$massconvert->setstone($initmass);
// 	$massconvert -> tolbs();
// 	echo $massconvert;
// }
// if ($stonetokg != 0){
// 	$massconvert->setstone($initmass);
// 	$massconvert -> tokgs();
// 	echo $massconvert;
// }


$tempcov = new Tempconvert();

// $tempcov->setF($inittemp);
// echo $tempcov;	

// if ($FtoC != 0){
// 	$tempcov->setF($inittemp);
// 	$tempcov->setC();
// 	echo $tempcov;
// }


?><br>
<a href="index.php">Home</a><br>


</php>
</body>
</html>