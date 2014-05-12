<?php

$directory = "/home/pi/wac2/";

if(!empty($_GET["relay"])){
	$relay = $_GET["relay"];

	if($relay == "D1"){
		echo "Switched " . $relay . " ";
	}

	if(!empty($_GET["power"])){
		$power = $_GET["power"];

		if($power == "ON"){
	        	echo "on!";
			file_put_contents($directory . "command",$relay . ":" . $power);
		}
		else{
			echo "off!";
			file_put_contents($directory . "command",$relay . ":" . $power);
		}
	}
	else{
		die("ERROR - NO POWER ARGUMENT!");
	}
}

?>
