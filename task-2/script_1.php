<html>
 <head>
<body>
<form>
                input number:<input type="number" name="len">
                input number2:<input type="number" name="wid">
                <input type="submit" value="calculate">
</form>
</body>
</head>
</html>
<?php
$a=$_REQUEST['len'];
$b=$_REQUEST['wid'];

$rec=$a*$b;
echo "rec is=".$rec;
?>