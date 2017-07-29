<?php
if(empty($_POST["mname"])){
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
$fc=$_POST["fc"];
$ram=$_POST["ram"];
$bettery=$_POST["bettery"];
$feture=$_POST["feture"];
$screen=$_POST["screen"];
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
	

$rs=mysql_query("select * from mobilereview");
while($r=mysql_fetch_array($rs)){
$x=$x+1;
}
        if(mysql_query("insert into mobilereview values($x,'$mname','$star','$cast','$year','$genre','$director','$link','$about','$photo','$fc','$ram','$bettery','$feture',1,'$date','$screen')")){
		header("location:in.php?succ=1");
		}
		}
		?>