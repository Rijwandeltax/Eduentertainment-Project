<?php
if(empty($_POST["mname"]) || empty($_POST["title"])){
header("location:in.php?err=1");
}
else{
$date=date("d.m.y");
include("enter.php");
$mname=$_POST["mname"];
$star=$_POST["star"];
$cast=$_POST["cast"];
$about=$_POST["about"];
$title=$_POST["title"];
$year=$_POST["year"];
$genre=$_POST["genre"];
$director=$_POST["director"];
$link=$_POST["link"];
$x=1;
$img=$mname.$date.".jpg";
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