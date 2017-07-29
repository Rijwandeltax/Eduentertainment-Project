<?php
if(empty($_POST["cname"]) || empty($_POST["exam"])){
header("location:in.php?err=1");
}
else{
$date=date("d.m.y");
include("enter.php");
$cname=$_POST["cname"];
//$star=$_POST["star"];
$exam=$_POST["exam"];
$about=$_POST["about"];
$qua=$_POST["qua"];
$sub=$_POST["sub"];
//$genre=$_POST["genre"];
//$director=$_POST["director"];
//$link=$_POST["link"];
$x=1;
$img=$cname.$date.".jpg";
$target="../picss/";
$target=$target.$img;
$pic=($_FILES['photo']['size']);
$photo="no";


    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target)or die(mysql_error())) {
        $photo="yes";
    } 
	else {
            $photo="no";
    }
	

$rs=mysql_query("select * from 	trand");
while($r=mysql_fetch_array($rs)){
$x=$x+1;
}
        if(mysql_query("insert into trand values($x,'$title','$mname','$star','$cast','$year','$genre','$director','$link','$about','$photo',1,'$date')")){
		header("location:in.php?succ=1");
		}
		}
		?>