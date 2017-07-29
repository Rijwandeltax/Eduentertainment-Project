<?php
if(empty($_POST["bname"]) || empty($_POST["writer"]) || empty($_POST["about"])){
header("location:in.php?err=1");
}
else{
include("enter.php");
$mname=$_POST["bname"];
$writer=$_POST["writer"];
$about=$_POST["about"];
$x=1;

$img=$mname.$writer.".jpg";
$target="../images/";
$target=$target.$img;
$pic=($_FILES['photo']['size']);
$photo="no";


    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target)or die(mysql_error())) {
        $photo="yes";
    } else {
            $photo="no";
    }







$rs=mysql_query("select * from book where flag=1");
while($r=mysql_fetch_array($rs)){
$x=$x+1;
}
        mysql_query("insert into book values($x,'$mname','$writer','$about','$photo',1)");
		$x=1;
$rs=mysql_query("select * from alll where flag=1");
while($r=mysql_fetch_array($rs)){
$x=$x+1;
}
if( mysql_query("insert into alll values($x,'book','$mname','$writer','$about','$photo','nothing','nothing',1)")){
header("location:in.php?succ=1");
	}
	else{
	echo "rijwan hahahahha";
	}	
	}
?>