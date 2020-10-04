<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Derrick Abrams">
  <link href="frameworks/css/css.css" rel="stylesheet">
  <script src="js/javascript.js"></script>
</head>
<body>
  <div class = "calculator">
        <h2>Calculator App - Derrick Abrams</h2>        
        <form name ="calculator">
            <input readonly type="text" id="answer"/> 
            <br>
            
            <input type="button" value="AC" onclick="reset()" />
            <input type="button" value="x^y" onclick="dis('**')" />
            <input type="button" value="sqrt" onclick="sqroot()" /> 
            <input type="button" value="/" onclick="dis('/')" />
            <br>
         
            <!-- create button and assign value to each button -->
            <!-- dis("1") will call function dis to display value -->
            <input type="button" value="7" onclick="dis('7')"/> 
            <input type="button" value="8" onclick="dis('8')"/> 
            <input type="button" value="9" onclick="dis('9')"/>
            <input type="button" value="*" onclick="dis('*')"/>
            <br>
          
            <input type="button" value="4" onclick="dis('4')"/>
            <input type="button" value="5" onclick="dis('5')"/>
            <input type="button" value="6" onclick="dis('6')"/>
            <input type="button" value="+" onclick="dis('+')"/>
            <br>
         
            <input type="button" value="1" onclick="dis('1')"/> 
            <input type="button" value="2" onclick="dis('2')"/> 
            <input type="button" value="3" onclick="dis('3')"/> 
            <input type="button" value="-" onclick="dis('-')"/>
            <br>
         
            <input type="button" value="0" onclick="dis('0')"/>
            <input type="button" value="." onclick="dis('.')"/>
            <!-- solve function call function solve to evaluate value -->
            <input type="button" value="=" onclick="solve()" style="width:44%"/> 
            <br>  
    </div>
    <script src="js/javascript.js"></script>
</body>
</html>
