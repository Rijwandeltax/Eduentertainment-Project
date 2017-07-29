<?php
   if($_REQUEST["code"]){
	   $v=$_REQUEST["code"];
	   $t=(int)$v;
	   include("enter.php");
	   $x=1;
		$rs=mysql_query("select * from exam where flag=1");
		while($r=mysql_fetch_array($rs)){
		$x=$x+1;
		}
		$x=$x-1;
	   
	   $rs=mysql_query("select * from exam order by sn DESC");
	   while($r=mysql_fetch_array($rs)){
	   if($r[0]<=$x-$t && $r[0]>$x-$t-3){
?>
<div class="row"><div class="col-sm-2"></div>

<div class="col-sm-8 w3-card-8 w3-white">
	 <div class="col-sm-10">
	 <h2><b><?=$r[2]?></b></h2>
	 <h4><b>Exam date:</b><?=$r[3]?></h4> 
     
     <p><i><b>Qualification :</b><?=$r[4]?></i></p>
	 <br />
  </div></div></div><br /> <br />

	 
	<?php  
	  }
	}
}
?>