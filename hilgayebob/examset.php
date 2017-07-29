<?php
if(empty($_POST["ename"]) || empty($_POST["dname"]) || empty($_POST["about"]) || empty($_POST["sub"])){
header("location:in.php?err=1");
}
else{
include("enter.php");
$sub=$_POST["sub"];
$ename=$_POST["ename"];
$about=$_POST["about"];
$dname=$_POST["dname"];
$more=$_POST["more"];
$x=1;
$rs=mysql_query("select * from exam where flag=1");
while($r=mysql_fetch_array($rs)){
$x=$x+1;
}
        mysql_query("insert into exam values($x,'$sub','$ename','$dname','$about','$more',1)");
		$x=1;
		$rs=mysql_query("select * from alll where flag=1");
while($r=mysql_fetch_array($rs)){
$x=$x+1;
}
		if(mysql_query("insert into alll values($x,'exam','$sub','$ename','$dname','$about','$more','nothing',1)")){
		header("location:in.php?succ=1");
		}
	}
		?>