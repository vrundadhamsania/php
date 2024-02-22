<html>
<head>
<body>
<form>
first number:<input type="number" name="val1">
last number:<input type="number" name="val2">
<input type="submit" value="calculate">
</form>
</body>
</head>
</html>

<?php
$i=$_REQUEST['val1'];
$n=$_REQUEST['val2'];
$sum=0;
while($i<=$n)
{
	$sum += $i;
	$i++;
}
echo "sum is:$sum";	
?>