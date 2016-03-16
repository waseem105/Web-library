<html>
<head>
<title>A simple HTML form</title>
</head>
<body>
<form action="formDataRead.php" method="GET">
  <input type="text" name="user">
  <br>
  <textarea name="address" rows="5" cols="40">
  </textarea>
  <br>
  <input type="submit" value="hit it!">
</form>
</body>
</html>

<!--  formDataRead.php
<html>
<head>
<title>Reading input from the form</title>
</head>
<body>
<?php
print "Welcome <b>$user</b><P>\n\n";
print "Your address is:<P>\n\n<b>$address</b>";
?>
</body>
</html>