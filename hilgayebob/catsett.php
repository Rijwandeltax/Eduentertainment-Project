<?php
if(empty($_POST["cname"]) || empty($_POST["about"]) || empty($_POST["qua"]) || empty($_POST["exam"]) || empty($_POST["sub"])){
header("location:in.php?err=1");
}
else{
include("enter.php");
$cname=$_POST["cname"];
$about=$_POST["about"];
$qua=$_POST["qua"];
$exam=$_POST["exam"];
$sub=$_POST["sub"];
$x=1;
$rs=mysql_query("select * from carreer where flag=1");
while($r=mysql_fetch_array($rs)){
$x=$x+1;
}
       
		$rs=mysql_query("select * from trandcareer where flag=1");
        while($r=mysql_fetch_array($rs)){
        $x=$x+1;
       }
	   
		if(mysql_query("insert into trandcareer values($x,'$sub','$cname','$about','$exam','$qua',1)")){
		header("location:in.php?succ=1");
		}
		}
		?>