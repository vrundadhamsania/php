<html>
<head>
<body>
<form>
input sentance<input type="text" name="val1">
<input type="submit" value="register">
</form>
</body>
</head>
</html>

<?php
$str=$_REQUEST['val1'];
$str=strtolower($str);
$len=strlen($str);
$count=0;
for($i=0;$i<$len;$i++)
{
	if($str[$i]=='a'||$str[$i]=='e'||$str[$i]=='i'||$str[$i]=='o'||$str[$i]=='u')
	{
		$count=$count+1;
	}
}
echo "total vowel are".$count;

?>