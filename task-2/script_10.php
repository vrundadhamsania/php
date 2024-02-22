<html>
<head>
<body>
<form>
input number:<input type="number" name="val1">
<input type="submit" value="calculate">
</form>
</body>

</head>
</html>

<?php
$num=$_REQUEST['val1'];
$flag=0;

for($i=2;$i<$num;$i++)
{
	if($num%$i==0)
	{
		$flag=1;
		break;
	}
}

if($flag==1)
{
	echo "no. is not prime";
}
else
{
	echo "it is prime number";
}




?>