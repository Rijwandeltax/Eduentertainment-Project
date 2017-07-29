<?php
if(empty($_POST["mname"])){
header("location:in.php?err=1");
}
else{
$date=date("d.m.y");
include("enter.php");
$mname=$_POST["mname"];
$writer=$_POST["writer"];
$lang=$_POST["lang"];
$about=$_POST["about"];
$dim=$_POST["dim"];
$year=$_POST["year"];
$genre=$_POST["genre"];
$pub=$_POST["pub"];
$x=1;
$img=$mname.$date.".jpg";
$target="../images/";
$target=$target.$img;
$pic=($_FILES['photo']['size']);
$photo="no";


    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target)or die(mysql_error())) {
        $photo="yes";
    } 
	else {
            $photo="no";
    }
	

$rs=mysql_query("select * from 	bookreview");
while($r=mysql_fetch_array($rs)){
$x=$x+1;
}
    if(mysql_query("insert into bookreview values($x,'$dim','$mname','$writer','$lang','$year','$genre','$pub','$about','$photo',1,'$date')")){
		
		header("location:in.php?succ=1");
		}
		}
		?>