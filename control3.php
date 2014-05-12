<?php

$directory = "/home/pi/wac2/";

if(!empty($_GET["relay"])){
	$relay = $_GET["relay"];

	if(!empty($_GET["power"])){
		$power = $_GET["power"];

		if($power == "1"){
	        	echo "on!";
			file_put_contents($directory . "command",$relay . ":1");
		}
		if($power == "2"){
			echo "off!";
			file_put_contents($directory . "command",$relay . ":0");
		}
	}
	else{
		die("ERROR - NO POWER ARGUMENT!");
	}
}

?>zsegfgf
