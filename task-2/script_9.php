<html>
<head>
<body>
<form>
Input any number:<input type="number" name="val1">
<input type="submit" name="register">
</form>
</body>

</head>
</html>

<?php
$a=$_REQUEST['val1'];
$b=rand(1,10);
if($a==$b)
{
	echo "yes";
	echo $b;
}
else
{
	echo "false";
	echo $b;
}
?>
