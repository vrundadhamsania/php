<html>
<body>
<form>
input number:<input type="number" name="year">
<input type="submit" value="submit">
</form>

</body>

</html>
<?php
$year=$_REQUEST['year'];
if($year%400==0)
{
  echo "it is leap year";
}
else if($year%100==0)
{
	echo "it is not leap year";
}
else if($year%4==0)
{
	echo "it is leap year";
}
else
{
	echo "it is not leap year";
}

?>