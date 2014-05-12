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

			function ch(channel,power){
				var dropd = document.getElementById("channelSelect");
				if (dropd.value == "A") {
					httpGet("control.php?relay=A" + channel + "&power=" + power);
				}
				if (dropd.value == "B") {
                                        httpGet("control.php?relay=B" + channel + "&power=" + power);
                                }
                                if (dropd.value == "C") {
                                        httpGet("control.php?relay=C" + channel + "&power=" + power);
                                }
                                if (dropd.value == "D") {
                                        httpGet("control.php?relay=D" + channel + "&power=" + power);
                                }
                                if (dropd.value == "E") {
					httpGet("control.php?relay=E" + channel + "&power=" + power);
                                }
                                if (dropd.value == "F") {
					httpGet("control.php?relay=F" + channel + "&power=" + power);
                                }
			}

		</script>
	</head>
	<body style="color:#cccccc;background-color:#242424;">
		HELLO WORLD!<br>
		<br>
		<select id="channelSelect">
			<option value="A">A</option>
			<option value="B">B</option>
			<option value="C">C</option>
			<option value="D">D</option>
			<option value="E">E</option>
			<option value="F">F</option>
		</select>
		<br>
		<button onclick="ch(1,1)">CH1 ON</button>
		<button onclick="ch(2,1)">CH2 ON</button>
		<button onclick="ch(3,1)">CH3 ON</button>
		<br>
		<button onclick="ch(1,2)">CH1 OFF</button>
		<button onclick="ch(2,2)">CH2 OFF</button>
		<button onclick="ch(3,2)">CH3 OFF</button>

		<div id="empty"></div>
	</body>
</html>
