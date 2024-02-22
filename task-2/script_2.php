<html>
<head>
<body>
<form>
input number1:<input type="number" name="val1">
<input type="submit" value="calculate">
</form>
</body>
</head>
</html>
<?php
$a=$_REQUEST['val1'];
if($a%2==0)
{
	echo "it is even number";
}
else
{
	echo "it is odd number";
}
?>
