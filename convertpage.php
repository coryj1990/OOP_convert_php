<!DOCTYPE html>
<html>
<head>
</head>

<body>


<?php

include("classes.php");
$initmass = $_POST['initmass'];
$lbstokg = $_POST["lbstokg"];
$lbstostone = $_POST["lbstostone"];
$kgtostone = $_POST["kgtostone"];
$kgtolbs = $_POST["kgtolbs"];
$stonetokg = $_POST["stonetokg"];
$stonetolbs = $_POST["stone"];

$inittemp = $_POST["inittemp"];
$FtoC = $_POST["FtoC"];
$CtoF = $_POST["CtoF"];

$initdist = $_POST["initdist"];
$mitokilom = $_POST["mitokilom"];
$kilomtomi = $_POST["mitokilom"];

$massconvert = new Massconvert();

if($lbstokg != ""){
	$massconvert->setlbs($initmass);
	echo $initmass . " lbs is equivalent to " . round(($massconvert->lbstokgs()),3) . " kgs";
}
if($lbstostone != ""){
	$massconvert->setlbs($initmass);
	echo $initmass . " lbs is equivalent to " . round(($massconvert->lbstostone()),3) . " stone";
}
if($kgtostone != ""){
	$massconvert->setkgs($initmass);
	echo $initmass . " kgs is equivalent to " . round(($massconvert->kgstostone()),3) . " stone";
}
if($kgtolbs != ""){
	$massconvert->setkgs($initmass);
	echo $initmass . " kgs is equivalent to " . round(($massconvert->kgstolbs()),3) . " lbs";
}
if($stonetolbs != ""){
	$massconvert->setstone($initmass);
	echo $initmass . " stone is equivalent to " . round(($massconvert->stonetolbs()),3) . " lbs";
}
if($stonetokg != ""){
	$massconvert->setstone($initmass);
	echo $initmass . " stone is equivalent to " . round(($massconvert->stonetokgs()),3) . " kgs";
}

$tempcov = new Tempconvert();
if($FtoC != ""){
	$tempcov->setF($inittemp);
	echo $inittemp . " fahrenheit is equivalent to " . round(($tempcov->ftoc()), 3) . " celsius";
}
if($CtoF != ""){
	$tempcov->setC($inittemp);
	echo $inittemp . " celsius is equivalent to " . round(($tempcov->ctof()), 3) . " fahrenheit";
}


$distcov = new Distconvert();
if($mitokilom != ""){
	$distcov->setmi($initdist);
	echo $initdist . " miles is equivalent to " . round(($distcov->mitokm()), 3) . " kilometers";
}
if($kilomtomi != ""){
	$distcov->setkm($initdist);
	echo $initdist . " kilometers is equivalent to " . round(($distcov->kmtomi()), 3) . " miles";
}


?><br>
<a href="index.php">Home</a><br>


</php>
</body>
</html>