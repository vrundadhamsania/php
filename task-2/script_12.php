<html>
<head>
<body>
<form>
number:<input type="number" name="val1">
<input type="submit" value="calculate">
</form>
</body>
</head>
</html>


<?php
$a=$_REQUEST['val1'];
$b=strrev($a);
if($a==$b)
{
	echo "it is palindrome";
}
else
{
	echo " it is not palidrome";
}

?>





















































