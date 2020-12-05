<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Derrick Abrams">
  <title>The Final Project</title>
</head>
<body>
     <h1>Celsius to Fahrenheit Converter</h1>   
     <p>By Derrick Abrams</p>
		
	<label>Degrees Celsius: </label>
	<input type="number" id="celsius" name="input" placeholder="0" pattern="[0-9]+">
		
	<br>
	<script>
	function solve() {
		cels = document.getElementById("celsius").value;
		toFahr = (cels * (9/5)) + 32;
		document.getElementById("answer").innerHTML = toFahr + "&#x2109;" ;
	}
	</script>
	
	<br>	
	<input type="button" value="SOLVE" onclick="solve()"/>

	<h2 id="answer"></h2>
		
	<br><br>

	<input type="button" value="Reset" onclick="document.location.reload(true)"/>
		
</body>
</html>
