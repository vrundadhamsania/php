<html>
<head>
<body>
<form>
input number:<input type="number" name="num">
<input type="submit" value="calculate">
</form>
</body>

</head>
</html>

<?php
$val=$_REQUEST['num'];
$cir=($val*$val*3.14);
echo $cir;
?>