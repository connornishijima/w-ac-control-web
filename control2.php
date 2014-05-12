spjpfejswpfj

<?php

echo "I HATE YOU";

$directory = "/home/pi/wac2/";

if(!empty($_GET["relay"])){
	$relay = $_GET["relay"];
	echo $relay;

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
		//die("ERROR - NO POWER ARGUMENT!");
	}
}

if(!empty($_GET["jam"])){
	$jam = $_GET["jam"];
	echo $jam;
	if($jam == "1"){
		file_put_contents($directory . "command","J:1");
	}
	if($jam == "0"){
                file_put_contents($directory . "command","J:0");
        }


?>
rohorehgf
