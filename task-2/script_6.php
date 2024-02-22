<html>
<head>
<body>
<form>

input number1:<input type="number" name="val1">
input number2:<input type="number" name="val2">
input number3:<input type="number" name="val3">
<input type="submit" value="calculate">

</form>
</body>
</head>
</html>
<?php
$a=$_REQUEST['val1'];
$b=$_REQUEST['val2'];
$c=$_REQUEST['val3'];
if($a>$b)
{
	if($a>$c)
	{
		echo "$a is big";
	}
	else
	{
		echo "$c is big";
	}
}
else
{
	
	if($b>$c)
	{
		echo "$b is big";
	}
	else
	{
		echo "$c is big";
	}
}
?>