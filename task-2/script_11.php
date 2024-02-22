<html>
<head>
<body>
<form>
Number:<input type="number" name="val1">
<input type="submit" value="calculate">

</form>
</body>
</head>
</html>

<?php
$a=$_REQUEST['val1'];
$fact=1;
for($i=$a;$i>=1;$i--)
{
	$fact=$fact*$i;
}
echo "factorial is: $fact";
?>