<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Derrick Abrams">
  <title>The Final Project</title>
  <style>
  	h1,h4 {
		text-align: center;
		font-family: Arial, Helvetica, sans-serif;
	}
	body {
		display: block;
		text-align: center;
		font-size: 20px;
	}
  </style>
</head>
<body>
	<h1>Celsius to Fahrenheit Converter</h1>   
	<h4>By Derrick Abrams</h4>

	<br><br>	
		
	<label>Degrees Celsius: </label>
	<input type="number" id="celsius" name="input" placeholder="0" pattern="[0-9]+">
		
	<br>
	<script>
	function solve() {
		var cels = document.getElementById("celsius").value;
		// Formula from https://www.rapidtables.com/convert/temperature/how-celsius-to-fahrenheit.html
		var toFahr = (cels * (9/5)) + 32;
		document.getElementById("answer").innerHTML = toFahr + "&#x2109;";
	}	

	</script>
	
	<br>	
	<input type="button" value="SOLVE" onclick="solve()"/>

	<br><br>

	<h2 id="answer"></h2>
		
	<br><br>

	<input type="button" value="Reset" onclick="document.location.reload(true)"/>
		
</body>
</html>
