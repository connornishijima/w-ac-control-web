<?php

$directory = "/home/pi/wac2/";

file_put_contents($directory . "command","PAGELOAD");

?>

<html>
	<head>
		<title>Wireless AC Control 1.4 BETA</title>
		<script>
			function httpGet(theUrl){
				var xmlHttp = null;

				xmlHttp = new XMLHttpRequest();
				xmlHttp.open( "GET", theUrl, false );
				xmlHttp.send( null );
				return xmlHttp.responseText;
			}

			function ch1on(){
				httpGet("control.php?switch=1D&power=ON")
			}
		</script>
	</head>
	<body style="color:#cccccc;background-color:#242424;">
		HELLO WORLD!<br>
		<br>
		<button onclick="ch1on()">CH1 ON</button>
		<button onclick="ch2on()">CH2 ON</button>
		<button onclick="ch3on()">CH3 ON</button>
		<br>
		<button onclick="ch1off()">CH1 OFF</button>
		<button onclick="ch2off()">CH2 OFF</button>
		<button onclick="ch3off()">CH3 OFF</button>
	</body>
</html>
