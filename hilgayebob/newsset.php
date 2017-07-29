<?php
if(empty($_POST["nename"]) || empty($_POST["about"])){
header("location:in.php?err=1");
}
else{
    $name=$_POST["nename"];
	$about=$_POST["about"];
	$sabout=$_POST["sabout"];
	$tnews=$_POST["tnew"];
	$date=date("d/m/y");
	$x=1;
	include("enter.php");
	
	
	$rs=mysql_query("select * from news");
	while($r=mysql_fetch_array($rs)){
	$x=$x+1;
	}
	
	$img=$tnews.$x.".jpg";
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


        if(mysql_query("insert into news values($x,'$tnews','$name','$about','$sabout','$photo','$date',1)")){
		header("location:in.php?succ=1");
		}
		else{header("location:in.php?err=1");
		}
		
		}
		?>