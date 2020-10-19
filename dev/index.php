<?php
    // login information
    $conn = new mysqli($servername,$username,$password,$database);
    
    $description = "Page Accessed";
    $time = date("Y-m-d H:i:s");
    $useragent = $_SERVER["HTTP_USER_AGENT"];
    $remoteip = $_SERVER["REMOTE_ADDR"];
    $hostip = $_SERVER["HTTP_HOST"];

    $sql = "INSERT INTO access_log (description, time, useragent, remoteip, hostip) "
        . "VALUES ('$description','$time','$useragent','$remoteip','$hostip')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Derrick Abrams">
  <title>Welcome to the Calculator App</title>
  <link href="frameworks/css/css.css" rel="stylesheet">
  <script src="js/javascript.js"></script>
</head>
<body>


        <h2>Calculator App</h2>   
        <p>By Derrick Abrams</p>
   
  <div class = "calculator">     
        <form name ="calculator">

            <div class='display'>
                <input readonly type="text" id="answer"/>
            </div>

        <div class="buttons">
                <div class='row'>
            <input type="button" value="AC" onclick="reset()" />
            <input type="button" value="x^y" onclick="dis('**')" />
            <input type="button" value="√x" onclick="sqroot()" />
            <input type="button" value="/" onclick="dis('/')" />
                </div>
         
<!--             create button and assign value to each button 
             dis("1") will call function dis to display value -->
                <div class='row'>
            <input type="button" value="7" onclick="dis('7')"/>
            <input type="button" value="8" onclick="dis('8')"/>
            <input type="button" value="9" onclick="dis('9')"/>
            <input type="button" value="*" onclick="dis('*')"/>
                </div>
         
                <div class='row'>
            <input type="button" value="4" onclick="dis('4')"/>
            <input type="button" value="5" onclick="dis('5')"/>
            <input type="button" value="6" onclick="dis('6')"/>
            <input type="button" value="+" onclick="dis('+')"/>
                </div>

                <div class='row'>
            <input type="button" value="1" onclick="dis('1')"/>
            <input type="button" value="2" onclick="dis('2')"/>
            <input type="button" value="3" onclick="dis('3')"/>
            <input type="button" value="-" onclick="dis('-')"/>
                </div>

                <div class='row'>
            <input type="button" value="0" onclick="dis('0')"/>
            <input type="button" value="." onclick="dis('.')"/>
<!--             solve function call function solve to evaluate value -->
            <input type="button" value="=" onclick="solve()" style="width:44%"/>
                </div >
        </div> 
    </div>
    <script src="js/javascript.js"></script>
</body>
</html>
