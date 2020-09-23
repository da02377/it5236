<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Derrick Abrams">
  <link href="frameworks/css/css.css rel="stylesheet">
  <script src="js/javascript.js"></script>
</head>
<body>
  <div style="padding-left:40px">
        <h2>Calculator</h2>
        
        <table border="1"> 
         <tr> 
            <td colspan="4"><input type="text" id="answer"/></td> 
            <!-- clr() function will call clr to clear all value -->
         </tr>
         <tr>
            <td><input type="button" value="AC" onclick="reset()" /></td>
            <td><input type="button" value="x^y" onclick="dis('**')" /></td>
            <td><input type="button" value="sqrt" onclick="sqroot()" /></td> 
            <td><input type="button" value="/" onclick="dis('/')" /></td>
         </tr>
         <tr> 
            <!-- create button and assign value to each button -->
            <!-- dis("1") will call function dis to display value -->
            <td><input type="button" value="7" onclick="dis('7')"/> </td> 
            <td><input type="button" value="8" onclick="dis('8')"/> </td> 
            <td><input type="button" value="9" onclick="dis('9')"/> </td> 
            <td><input type="button" value="*" onclick="dis('*')"/> </td> 
         </tr> 
         <tr> 
            <td><input type="button" value="4" onclick="dis('4')"/> </td> 
            <td><input type="button" value="5" onclick="dis('5')"/> </td> 
            <td><input type="button" value="6" onclick="dis('6')"/> </td> 
            <td><input type="button" value="+" onclick="dis('+')"/> </td> 
         </tr> 
         <tr> 
            <td><input type="button" value="1" onclick="dis('1')"/> </td> 
            <td><input type="button" value="2" onclick="dis('2')"/> </td> 
            <td><input type="button" value="3" onclick="dis('3')"/> </td> 
            <td><input type="button" value="-" onclick="dis('-')"/> </td> 
         </tr> 
         <tr> 
            <td colspan='2'><input type="button" value="0" onclick="dis('0')"/> </td> 
            <td><input type="button" value="." onclick="dis('.')"/> </td> 
            <!-- solve function call function solve to evaluate value -->
            <td><input type="button" value="=" onclick="solve()"/> </td> 
         </tr> 
      </table>   
    </div>
    <script src="js/javascript.js"></script>
</body>
</html>
