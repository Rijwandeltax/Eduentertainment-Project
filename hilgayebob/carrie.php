<?php
	include("enter.php");
	mysql_query("update carreer set flag=0 where sn=4");
	
	header("location:in.php?succ=1");
	}
	?>