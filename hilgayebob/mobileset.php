<?php
if(empty($_POST["cname"]) || empty($_POST["mname"]) || empty($_POST["date"]) || empty($_POST["about"])){
header("location:in.php?err=1");
}
else{
include("enter.php");
$cname=$_POST["cname"];
$mname=$_POST["mname"];
$date=$_POST["date"];
$about=$_POST["about"];
$review=$_POST["star"];
$x=1;

$img=$cname.$mname.".jpg";
$target="../images/";
$target=$target.$img;
$pic=($_FILES['photo']['size']);

$photo="no";


    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target)or die(mysql_error())) {
        $photo="yes";
    } else {
            $photo="no";
    }







$rs=mysql_query("select * from mobile where flag=1");
while($r=mysql_fetch_array($rs)){
$x=$x+1;
}
        mysql_query("insert into mobile values($x,'$cname','$mname','$date','$about','$photo','$review',1)");

$x=1;
$rs=mysql_query("select * from alll where flag=1");
while($r=mysql_fetch_array($rs)){
$x=$x+1;
}
        if(mysql_query("insert into alll values($x,'mobile','$cname','$mname','$date','$about','$photo','$review',1)")){
		header("location:in.php?succ=1");
		}
		}
		?>