<html>
<head>
<body>
<form>
input string:<input type="text" name="ft">
input string:<input type="text" name="lt">
<input type="submit" value="submit">
</form>
</body>
</head>
</html>
<?php
$firstname=$_REQUEST['ft'];
$lastname=$_REQUEST['lt'];
echo $firstname." ".$lastname;
?>