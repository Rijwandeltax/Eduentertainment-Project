<?php
   if($_REQUEST["code"]){
	   $v=$_REQUEST["code"];
	   
	  // echo $w;
	   $k=(int)$v;
	   include("enter.php");
	   $x=1;
		$rs=mysql_query("select * from news");
		while($r=mysql_fetch_array($rs)){
		$x=$x+1;
		}
		$x=$x-1;
	   
	   $rs=mysql_query("select * from news order by sn DESC");
	   while($r=mysql_fetch_array($rs)){
	   if($r[0]<=$x-$k && $r[0]>$x-$k-5){
	    
	?>
			<div class="w3-agileits-news-one">
												<div class="wthree-news-img">
													<a href="full-story-news.php"><img src="images/<?=$r[2]?><?=$r[0]?>.jpg" alt=""></a>
												</div>
												<div class="wthree-news-info">
													<h5><a href="full-story-news.php"><?=$r[2]?></a></h5>
													<div class="agile-post">
															<p> on	<?=$r[6]?> with </p>
														</div>
														<p><?=$r[4]?></p>
														<a class="new-more" href="full-story-news.php">Read More</a>
												</div>
												<div class="clearfix"> </div>
	<?php  
	  }
	}
}
?>