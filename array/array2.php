<?php

$student_detail=array("name"=>"vrunda","div"=>"B1","rollno"=>22,"email"=>"vrundadhamsania812@gmail.com","city"=>"rajkot");
foreach($student_detail as $val)
{
	echo $val;
	echo "<br>";
}
print_r($student_detail);
echo $student_detail["div"];
?>