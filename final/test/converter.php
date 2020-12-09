<!-- document to go into \api\v1.0\ folder on server -->
<!-- Code integrated from dabrams calculator app & rthackston (via Zoom Meeting) -->
<?php

# Only GET requests
if($_SERVER['REQUEST_METHOD'] == 'GET') {

	# Grab numbers for operation
	$num1 = $_GET['num1'];
	

	if (is_numeric($num1) == FALSE) {
		
		http_response_code(400); # syntax error
		exit();
		
	} else {
			
		# Do math
		$n1 = floatval($num1);
		$result = ($n1 * (9/5)) + 32;
		
		if ($result !== Null) {
			
			echo $result;
				
		} else {
				
			# say goodbye
			http_response_code(405);
				
		}
	}
}
			
	 else {
			
		http_response_code(500); # servor error
		exit();
			
		}

?>
