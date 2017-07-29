<?php
if(empty($_POST["cname"]) || empty($_POST["about"]) || empty($_POST["qua"]) || empty($_POST["exam"]) || empty($_POST["sub"])){
header("location:in.php?err=1");
}
else{
include("enter.php");
$date=date("d.m.y");
$cname=$_POST["cname"];
$about=$_POST["about"];
$qua=$_POST["qua"];
$exam=$_POST["exam"];
$sub=$_POST["sub"];
$stream=$_POST["stream"];
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



		$rs=mysql_query("select * from career");
while($r=mysql_fetch_array($rs)){
$x=$x+1;
}
		if(mysql_query("insert into career values($x,'$sub','$cname','$about','$exam','$qua','$stream','$photo',1,'$date')")){
		header("location:in.php?succ=1");
		}
		}
		?>