<?php

$student_detail=array(array("name"=>"vrunda","div"=>"B1","rollno"=>22,"city"=>"rajkot"),
array("name"=>"pia","div"=>"B1","rollno"=>23,"city"=>"rajkot"),
array("name"=>"heet","div"=>"B1","rollno"=>24,"city"=>"rajkot"),
array("name"=>"neal","div"=>"B1","rollno"=>25,"city"=>"rajkot"),
array("name"=>"om","div"=>"B1","rollno"=>26,"city"=>"rajkot"),
array("name"=>"mahir","div"=>"B1","rollno"=>27,"city"=>"rajkot"));

foreach($student_detail as $myval)
{
	print_r($myval);
	echo "<br>";
}
print_r($student_detail);
echo $student_detail[3]["name"];
?>