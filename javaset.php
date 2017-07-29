<?php
if(empty($_POST["mname"]) || empty($_POST["about"]) || empty($_POST["introd"]) || empty($_POST["example"])){
header("location:index.php?err=1");
}
else{
include("enter.php");
$type=$_POST["tname"];
$ch=$_POST["mname"];
$about=$_POST["about"];
$introd=$_POST["introd"];
$example=$_POST["example"];
$x=1;

$rs=mysql_query("select * from javalang where flag=1");
while($r=mysql_fetch_array($rs)){
	$x=$x+1;
	}

$img=$x.$type.java.".jpg";
$target="../images/";
$target=$target.$img;
$pic=($_FILES['photo']['size']);
$photo="no";


    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target)or die(mysql_error())) {
        $photo="yes";
    } else {
            $photo="no";
    }





	if(mysql_query("insert into javalang values($x,'java','$ch','$about','$type','$introd','$photo','$example',1)")){
		header("location:index.php?succ=1");
		}
		else{
		header("location:index.php?err=1");
	}
	}
?>
