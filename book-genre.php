<?php
   if($_REQUEST["code"] && $_REQUEST["del"] ){
	   $v=$_REQUEST["code"];
	   $w=$_REQUEST["del"];
	  // echo $w;
	   $k=(int)$v;
	   include("enter.php");
	   $x=1;
		$rs=mysql_query("select * from bookreview where genre=$w");
		while($r=mysql_fetch_array($rs)){
		$x=$x+1;
		}
		$x=$x-1;
	   
	   $rs=mysql_query("select * from bookreview where genre=$w order by sn DESC");
	   while($r=mysql_fetch_array($rs)){
	   if($r[0]<=$x-$k && $r[0]>$x-$k-5){
	    $p=(int)$r[3];
	?>
			<div class="col-md-2 w3l-movie-gride-agile requested-movies">
															<a href="full-story-book.php?id=<?=$r[2]?>" class="hvr-sweep-to-bottom"><img src="images/<?=$r[2]?><?=$r[11]?>.jpg" title="Movies Pro" class="img-responsive" alt=" ">
																<div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
															</a>
																<div class="mid-1 agileits_w3layouts_mid_1_home">
																	<div class="w3l-movie-text">
																		<h6><a href="full-story-book.php?id=<?=$r[2]?>"><?=$r[2]?></a></h6>							
																	</div>
																	<div class="mid-2 agile_mid_2_home">
																		<p>2016</p>
																	<!--	<div class="block-stars">
																			<ul class="w3l-ratings">
																				<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																				<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																				<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
																				<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																				<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
																			</ul>
																		</div>-->
																		<div class="clearfix"></div>
																	</div>
																</div>
															
													</div>
	<?php  
	  }
	}
}
?>