<html>
<head>
<body>
<form>
input number1:<input type="number" name="val1">
input number2:<input type="number" name="val2">
<input type="submit" value="calculate">
</form>
</body>
</head>
</html>


<?php
$a=$_REQUEST['val1'];
$b=$_REQUEST['val2'];
echo "a=".$a;
echo "<br>";
echo "b=".$b;
echo "<br>";
echo "<br>";

$a=$a+$b;
$b=$a-$b;
$a=$a-$b;

echo "a=".$a;
echo "<br>";
echo "b=".$b;
?>