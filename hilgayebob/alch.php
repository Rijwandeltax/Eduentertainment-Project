<?php
   if($_REQUEST["code"]){
	   $v=$_REQUEST["code"];
	   //$t=$v;
	   include("enter.php");
	    $x=1;
	   ?>
	   <table class="table-condensed">
	   <?php
	   $i=0;
	   $rs=mysql_query("select * from $v order by sn DESC");
	   while($r=mysql_fetch_array($rs)){
	   if($i<10){
	   $i=$i+1;
           ?>
					  <tr>
					  <td><?=$r[1]?></td>
					  <td><?=$r[2]?></td>
					  <td><a href="deleterecord.php?id=<?=$r[0]?>&id1=<?=$v?>">DELETE</a></td>
					  </tr>
					  <?php
					  }
	
	  }
	?>
	</table>
	<?php
	
	
}
?>