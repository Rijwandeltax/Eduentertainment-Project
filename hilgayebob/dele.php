<?php
if($_REQUEST["id"]){
	   $v=$_REQUEST["id"];
	   $l=$_REQUEST["event_id"];
	   $j=$_REQUEST["con_id"];
	   $t=(int)$v;
	
	include("enter.php");
	if($l=='movie'){
	mysql_query("update alll set flag=0 where sn=$t");
	mysql_query("update movie set flag=0 where movie1='$j'");
	}
	else if($l=='game'){
    mysql_query("update alll set flag=0 where sn=$t");
	mysql_query("update game set flag=0 where game1='$j'");
	}
	else if($l=='news'){
	mysql_query("update alll set flag=0 where sn=$t");
	}
	else if($l=='show'){
	mysql_query("update alll set flag=0 where sn=$t");
	mysql_query("update showw set flag=0 where show1='$j'");
	}
	else if($l=='carreer'){
	mysql_query("update alll set flag=0 where sn=$t");
	mysql_query("update carreer set flag=0 where subb='$j'");
	}
	else if($l=='book'){
	mysql_query("update alll set flag=0 where sn=$t");
	mysql_query("update book set flag=0 where book1='$j'");
	}
	else if($l=='mobile'){
	mysql_query("update alll set flag=0 where sn=$t");
	mysql_query("update mobile set flag=0 where mobile1='$j'");
	}
	else if($l=='exam'){
	mysql_query("update alll set flag=0 where sn=$t");
	mysql_query("update exam set flag=0 where ename='$j'");
	}
	
	header("location:in.php?succ=1");
	
	}
	?>