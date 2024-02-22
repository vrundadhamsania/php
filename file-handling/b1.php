<?php
/*$myfile=fopen("b1_enrollment.txt","r");
echo fgets($myfile);
$myfile=fopen("b1_enrollment.txt","w");
$value="hello my world";
fwrite($myfile,$value);

$myfile=fopen("b1_enrollment.txt","r");
$contect=file_get_contents("b1_enrollment.txt");
echo $contect;*/

if(file_exists("b1_enrollment.txt"))
{
	echo "THE FILE EXISTS";
}
else
{
	echo "the file does not exists";
}
$myfile=fopen("b1_enrollment.txt","a");
$new_contect="append contect vrunda dhamsania GSDYGE GYESG ";
file_put_contents("b1_enrollment.txt",$new_contect,FILE_APPEND);
unlink("b1_enrollment.txt");




?>
