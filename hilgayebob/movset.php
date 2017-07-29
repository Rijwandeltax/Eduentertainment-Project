<?php
if(empty($_POST["mname"])){
header("location:in.php?err=1");
}
else{
    include("enter.php");
$date=date("d.m.y");


$mname=$_POST["mname"];
$star=$_POST["star"];
$cast=$_POST["cast"];
$about=$_POST["about"];
$cadt=$_POST["cadt"];

$year=$_POST["year"];
$genre=$_POST["genre"];
$director=$_POST["dir"];
$link=$_POST["link"];
$x=1;
$img=$mname.".jpg";
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
	

$rs=mysql_query("select * from 	moviereview");
while($r=mysql_fetch_array($rs)){
$x=$x+1;
}
        if(mysql_query("insert into moviereview values($x,'$mname','$star','$cast','$year','$genre','$director','$link','$about','$photo',1,'$date','$cadt')")){
		header("location:in.php?succ=1");
		}
		else{
		
		
		
		header("location:in.php?err=1");}
		    
		
		}
		?>