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
$c=$_REQUEST['val1'];
$formula=($c*1.8+32);
echo $formula;
?>