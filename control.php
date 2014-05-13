<?php

$directory = "/home/pi/wac2/";
$jamConf = $directory . "conf/freqJam.conf";

if(!empty($_GET["relay"])){
	$relay = $_GET["relay"];

	if(!empty($_GET["power"])){
		$power = $_GET["power"];

		if($power == "1"){
	        	echo "on!";
			file_put_contents($directory . "command","R:" . $relay . ":1");
		}
		if($power == "2"){
			echo "off!";
			file_put_contents($directory . "command","R:" . $relay . ":0");
		}
	}
	else{
		die("ERROR - NO POWER ARGUMENT!");
	}
}

if(!empty($_GET["jam"])){
	$jam = $_GET["jam"];
	file_put_contents($directory . "command","J:" . $jam);
	file_put_contents($jamConf,$jam);
}
?>
