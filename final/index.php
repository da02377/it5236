<?php
# Derrick Abrams
# Final Exam Converter

# Code built from Russell Thackston's Zoom Lecture 11/16

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	
	$num1 = intval($_POST['num1']);
	
	# Google cloud endpoint
	$endpoint = "https://us-east1-it-5236-abrams-lamp.cloudfunctions.net/function-toFahr";
	
	# Convert to JSON
	$ary = array('num1' => $num1);
	$json = json_encode($ary);
	
# Curl PhP by Postman Code Snippet
	$curl = curl_init();

	curl_setopt_array($curl, array(
	  CURLOPT_URL => $endpoint,
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_ENCODING => '',
	  CURLOPT_MAXREDIRS => 10,
	  CURLOPT_TIMEOUT => 0,
	  CURLOPT_FOLLOWLOCATION => true,
	  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	  CURLOPT_CUSTOMREQUEST => 'POST',
	  CURLOPT_POSTFIELDS => $json,
	  CURLOPT_HTTPHEADER => array(
		"Content-Type: application/json"
	)));

	$response = curl_exec($curl);
	curl_close($curl);

}

?>
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
	
	<form action='index.php' method='POST'>
		<label>Degrees Celsius: </label>
		<!-- Pattern regex from  https://www.w3schools.com/tags/att_input_pattern.asp -->
		<input type="number" id="num1" name="num1" placeholder="0" pattern="[0-9]+" value="<?php echo $num1; ?>"><br><br>
		<input type="submit" value="SOLVE"/>
	</form>

	<br><br>

	<h2 id="answer">
	<?php echo $response; ?>&#xb0; Fahrenheit
	</h2>
		
</body>
</html>
