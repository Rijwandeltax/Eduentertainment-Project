	<!--/book & movie-->
				  <h3 class="agile_w3_title"> BOOKS& <span>MOBILE</span></h3>
			<!--/movies-->				
			<div class="w3_agile_latest_movies">
			
				<div id="owl-demo1" class="owl-carousel owl-theme">
					<?php
					
				include("enter.php");
				$i=0;
				$rs=mysql_query("select * from trandshowbook order by sn DESC");
				
					
				while($r=mysql_fetch_array($rs)){
				if($i<10){
				$gh=$r[3];
				$i=$i+1;
				?>
				
				
				
					<div class="item">
						<div class="w3l-movie-gride-agile w3l-movie-gride-slider ">
							<a href="fulltrandbook.php?id=<?=$r[2]?>&event_id=<?=$r[0]?>" class="hvr-sweep-to-bottom"><img src="picss/<?=$r[2]?><?=$r[12]?>.jpg" title="Movies Pro" class="img-responsive" alt=" " />
								<div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
							</a>
							<div class="mid-1 agileits_w3layouts_mid_1_home">
								<div class="w3l-movie-text">
									<h6><a href="fulltrandbook.php?id=<?=$r[2]?>&event_id=<?=$r[0]?>"><?=$r[2]?></a></h6>							
								</div>
								<div class="mid-2 agile_mid_2_home">
									<p><?=$r[5]?></p>
									<div class="block-stars">
										<ul class="w3l-ratings">
											<?php
																			for($x=1;$x<=$gh;$x++){
																			?>
																				<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
																				<?php
																				}
																				?>
										</ul>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							
						</div>
					</div>
					<?php
					}
					}
					?>
					
					</div></div>
				
				
				
				<!--/agileinfo_tabs-->
				  <h3 class="agile_w3_title">C <span>AREER</span></h3>
			<!--/movies-->				
			<div class="w3_agile_latest_movies">
			
				<div id="owl-demo1" class="owl-carousel owl-theme">
					<?php
					
				include("enter.php");
				$i=0;
				$rs=mysql_query("select * from trandshowbook order by sn DESC ");
				
					
				while($r=mysql_fetch_array($rs)){
				if($i<10){
				$i=$i+1;
				echo "riju";
				?>
				
				
				
				
					<div class="item">
						<div class="w3l-movie-gride-agile w3l-movie-gride-slider ">
					<a href="fullstorytrandcareer.php?id=<?=$r[2]?>&event_id=<?=$r[0]?>" class="hvr-sweep-to-bottom"><img src="picss/<?=$r[2]?><?=$r[8]?>.jpg" title="Movies Pro" class="img-responsive" alt=" " />
								<div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
							</a>
							<div class="mid-1 agileits_w3layouts_mid_1_home">
								<div class="w3l-movie-text">
									<h6><a href="fullstorytrandcareer.php?id=<?=$r[2]?>&event_id=<?=$r[0]?>"><?=$r[2]?></a></h6>							
								</div>
								<div class="mid-2 agile_mid_2_home">
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
					<?php
					}
					}
					?>
					
					</div></div>



						
					<!--news-->
					
					
					<!--	news
				-->
					<?php
				include("enter.php");
				$i=0;
				$rs=mysql_query("select * from news where typenews='Mobile' order by sn DESC ");
				while($r=mysql_fetch_array($rs)){
				if($i<3){
				      
				?>
					
					
					<div class="row" style="margin-top:30px">
					
		<div class="col-sm-8">
				
		<div class="w3-card" style="background-color:#FFFFFF; padding:3px 3px 3px 3px;">
		
		
		
			
			<div class="row" style="margin-bottom:20px">
			<div class="col-sm-3">
			<img src="images/<?=$r[1]?><?=$r[0]?>.jpg" title="Movies Pro" class="img-responsive" alt=" " style="padding-top:20px; padding-left:6px;" id="im" >
			</div>
						
		<div class="col-sm-8">
				
		<div class="w3-card" style="background-color:#FFFFFF; padding:3px 3px 3px 3px;">
			
			<div class="col-sm-6">
			<h5 style="font-weight:500"><?=$r[2]?></h5>
			<h6 style="color:#fe423f">PUBLISHED <?=$r[6]?></h6>
			<ul class="ne" style="margin-bottom:8px;">
			<li>Entertainment</li>
			<li style="font-weight:400; color:#003366">Mobile & Book </li>
			<li >Career</li>
			</ul>
			<p style="font-family:'Lato', sans-serif; letter-spacing:1px"><?=$r[4]?></p>
			</div></div></div></div></div>
			<?php
			}
			}
			?>