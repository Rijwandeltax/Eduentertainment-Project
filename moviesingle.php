<!DOCTYPE html>
<html lang="en">
<head>
		
	<title>Edu-Entertainment</title>
	<link rel="icon" type="image/png" href="images/2.png" sizes="35x35"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="Movies Pro Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- pop-up -->
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<!-- //pop-up -->
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link rel="stylesheet" type="text/css" href="css/31.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/w3.css" />
<link rel="stylesheet" type="text/css" href="css/riju.css" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
<!--/web-fonts-->
<link href='//fonts.googleapis.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'>
<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<script src="js/jquery.min.js"></script>
           <script type="text/javascript">
         $(document).ready(function(){
	      $(".asd").click(function(){
		var v=$(this).attr("id");
		var w=$(this).attr("id1");
		var u=$(this).attr("id2");
		//alert(u);
		
		 var m =parseInt(v); 
		 $(".asd").attr("id",m+5);
		$.post(
		"movch-genre.php",
		  {code:v,del:w,cat:u},
		function(data){
	     document.getElementById("show").innerHTML+=data;
		// $("#msg").html(data);
		
              
                });
              });
         });
</script>




<script src="js/jquery.min.js"></script>
           <script type="text/javascript">
         $(document).ready(function(){
	      $(".fg").change(function() {
		  var v1 = $(this).find('option:selected').attr('data-othervalue');
		  var v2 = $(this).find('option:selected').attr('data-othervalue1');
		  //alert(v1);
		  //alert(v2);
            
         window.location = "moviesingle.php?id5="+v1+ "&id9="+v2;
});
         });
</script>

<style>
.ne li{
display:inline;
margin-right:5px;
border-right:1px #FF0000 dashed;
color:#FF0000;
}
.fk li a:hover{
background:#FFFFFF;
color:#FF3300;
font-size: 14px;
} 
.fk li a{
text-align:center;
color:#212121;
font-size: 14px;
}
@media (max-width: 767px){
.fk li a{
text-align:center;
color:#fff !important;
font-size: 14px;
}
.fk li a:hover{
color:#FF3300 !important;
font-size: 14px;
} 
}

.form-control{
border-radius:0px;
border:black 1px solid;
color:#000000;
    background-color:transparent;
}
</style>
<!--//web-fonts-->
</head>
<body style="background:url(images/bg.png)">
<?php
if($_REQUEST["id5"] || $_REQUEST["id9"]){
					$v= $_REQUEST["id5"];
					$ic=$_REQUEST["id9"];

?>

<!--/main-header-->
  <!--/banner-section-->
	<div id="demo-1" class="banner-inner">
	 <div class="banner-inner-dott">
		<!--/header-w3l-->
			   <div class="header-w3-agileits" id="home">
			     <div class="inner-header-agile part2">	
				<nav class="navbar navbar-default">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1><a  href="index.php"><span>E</span>du<span>E</span>ntertainment</a></h1>
					</div>
					<!-- navbar-header -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
							<li><a href="index.php">Home</a></li>
							<li class="dropdown active">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Show Box <b class="caret"></b></a>
								
								<ul class="dropdown-menu fk">
									<h6 style="text-align:center; color:#FF3333">Categary</h6>
										<hr style="margin-top:1px">
											
												<li><a href="show-review.php?id=English">English Show</a></li>
											<li><a href="show-review.php?id=Hindi">Hindi Show</a></li>
											<li><a href="show-review.php?id=Other">Other Show</a></li>
											
										
										<div class="clearfix"></div>
								</ul>
							</li>
							
							
							<!--<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Show Box <b class="caret"></b></a>
								
								
								<ul class="dropdown-menu multi-column columns-3">
									<li>
									<div class="col-sm-5">
									<h6 style="text-align:center; color:#FF3333">TV-SHOW</h6>
									<hr style="margin-top:3px">
										<ul class="multi-column-dropdown">
											<li><a href="show-review.php?id=English">English Show</a></li>
											<li><a href="show-review.php?id=Hindi">Hindi Show</a></li>
											<li><a href="show-review.php?id=Other">Other</a></li>
										</ul>
									<!--</div>-->
									<!--<div class="col-sm-5">
									<h6 style="text-align:center; color:#FF3333">GAME-BOX</h6>
									<hr style="margin-top:3px">
										<ul class="multi-column-dropdown">
											<li><a href="game-categary.php?id=adventure">Adventure</a></li>
											<li><a href="game-categary.php?id=adventure">Action</a></li>
											<li><a href="game-categary.php?id=adventure">Documentary</a></li>
										</ul>
									</div>
									<div class="clearfix"></div>
									</li>
								</ul>
							</li> -->
							<li><a href="career.php">Career</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Movie Box <b class="caret"></b></a>
								
								<ul class="dropdown-menu fk">
									<h6 style="text-align:center; color:#FF3333">Categary</h6>
										<hr style="margin-top:1px">
											
												<li><a href="movie-review.php?id=hollywood">Hollywood</a></li>
												<li><a href="movie-review.php?id=bollywood">Bollywood</a></li>
												<li><a href="movie-review.php?id=tollywood">Tollywood</a></li>
												<li><a href="movie-review.php?id=other">Other</a></li>
											
										
										<div class="clearfix"></div>
								</ul>
							</li>
							
							
							<li><a href="news.php">news</a></li>
							<li><a href="mobile-review.php">Mobiles</a></li>
								
								<li><a href="book-review.php">Books</a></li>
							    <li><a href="about.php">About</a></li>
						</ul>


					</div>
					<div class="clearfix"> </div>	
				</nav>
					<!--<div class="w3ls_search">
									<div class="cd-main-header">
										<ul class="cd-header-buttons">
											<li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
										</ul> 
									</div>
									<div id="cd-search" class="cd-search">
										<form action="#" method="post">
											<input name="Search" type="search" placeholder="Search...">
										</form>
									</div>
								</div>-->
	
			</div> 

			   </div>
		<!--//header-w3l-->
		</div>
    </div>
				
			<!--/content-inner-section-->
				<div class="w3_content_agilleinfo_inner">
					<div class="agile_featured_movies">
					
									<div class="col-sm-3">
				<select class="form-control fg">
				<option>Movies Categery</option>
				<option value=1 data-othervalue="Action" data-othervalue1="<?=$ic?>">Action</option>
				<option value=1 data-othervalue="Adventure" data-othervalue1="<?=$ic?>">Adventure</option>
				<option value=1 data-othervalue="Animation" data-othervalue1="<?=$ic?>">Animation</option>
				<option value=1 data-othervalue="Biography" data-othervalue1="<?=$ic?>">Biography</option>
				<option value=1 data-othervalue="Comedy" data-othervalue1="<?=$ic?>">Comedy</option>
				<option value=1 data-othervalue="Crime" data-othervalue1="<?=$ic?>">Crime</option>
				<option value=1 data-othervalue="Documentary" data-othervalue1="<?=$ic?>">Documentary</option>
				<option value=1 data-othervalue="Drama" data-othervalue1="<?=$ic?>">Drama</option>
				<option value=1 data-othervalue="Family" data-othervalue1="<?=$ic?>">Family</option>
				<option value=1 data-othervalue="History " data-othervalue1="<?=$ic?>">History </option>
				<option value=1 data-othervalue="Horror" data-othervalue1="<?=$ic?>">Horror</option>
				<option value=1 data-othervalue="Music" data-othervalue1="<?=$ic?>">Music</option>
				<option value=1 data-othervalue="Mystery" data-othervalue1="<?=$ic?>">Mystery</option>
				<option value=1 data-othervalue="Romance" data-othervalue1="<?=$ic?>">Romance</option>
				<option value=1 data-othervalue="Thriller" data-othervalue1="<?=$ic?>">Thriller</option>
				<option value=1 data-othervalue="War" data-othervalue1="<?=$ic?>">War</option>
				</select>
                  </div><br><br>
						
					
						
			<!--//tv-movies-->
				 <h3 class="agile_w3_title">Requested <span>Movies</span> </h3>
				<!--/requested-movies-->
				     <div class="wthree_agile-requested-movies">
					 <div id="show">
					 <?php
					 
					 if($_REQUEST["id5"]){
					$v= $_REQUEST["id5"];
					$ic=$_REQUEST["id9"];
					//$v = $_POST["secret"];
					//echo $v;
				include("enter.php");
				$i=0;
				
			
				
				
				
				$rs=mysql_query("select * from moviereview where genre='$v' AND typess='$ic' order by sn DESC");
				$num=10;
	while($r=mysql_fetch_array($rs)){
	if($i<11){
          $gh=$r[2];
		  $i=$i+1;
	?>
					 
										<div class="col-md-2 w3l-movie-gride-agile requested-movies">
															<a href="full-story-movie.php?id=<?=$r[1]?>" class="hvr-sweep-to-bottom"><img src="images/<?=$r[1]?><?=$r[11]?>.jpg" title="Movies Pro" class="img-responsive" alt=" ">
																<div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
															</a>
																<div class="mid-1 agileits_w3layouts_mid_1_home">
																	<div class="w3l-movie-text">
																		<h6><a href="full-story-movie.php?id=<?=$r[1]?>"><?=$r[1]?></a></h6>							
																	</div>
																	<div class="mid-2 agile_mid_2_home">
																		<p>2016</p>
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
											
											    <?php
													}
													}
													}
													?>
											</div>
												<div class="clearfix"></div>
						</div>
				<!--//requested-movies-->
					  <div class="blog-pagenat-wthree">
								<ul>
									
									
									<li><button type="button" class="w3-btn last asd"  id="<?=$num?>" id1="<?=$v?>" id2="<?=$ic?>">Next</button></li>
								</ul>
								
								<!--//requested-movies-->
								
								
								
								
								
				  <h3 class="agile_w3_title"> Top Movies <span>Review</span></h3>
			<!--/movies-->				
			<div class="w3_agile_latest_movies">
			
				<div id="owl-demo" class="owl-carousel owl-theme">
				
				<?php
				include("enter.php");
				$i=0;
				$rs=mysql_query("select * from moviereview where genre='action'");
				while($r=mysql_fetch_array($rs)){
				if($i<10){
				$gh=$r[2];
				?>
				
				
				
					<div class="item">
						<div class="w3l-movie-gride-agile w3l-movie-gride-slider ">
							<a href="full-story-movie.php?id=<?=$r[1]?>" class="hvr-sweep-to-bottom"><img src="images/<?=$r[1]?><?=$r[11]?>.jpg" title="Movies Pro" class="img-responsive" alt=" " />
								<div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
							</a>
							<div class="mid-1 agileits_w3layouts_mid_1_home">
								<div class="w3l-movie-text">
									<h6><a href="full-story-movie.php?id=<?=$r[1]?>"><?=$r[1]?></a></h6>							
								</div>
								<div class="mid-2 agile_mid_2_home">
									<p>2016</p>
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
					
						</div>
					   </div>
				<!--//movies-->
					</div>
				</div>
				</div>
			<!--//content-inner-section-->
		
	<!--/footer-bottom-->
	<div class="contact-w3ls" id="contact" style="background-color:#020d1f">
			<div class="footer-w3lagile-inner">
			
				
				
					<div class="footer-grids w3-agileits">
						<div class="col-md-3 footer-grid">
						<h4>About Us</h4>
						<p >	EDUENTERTAINMENT is a search engine which is helpful to everyone who want to know about Movie review, TV review, Games review, Book review and also helpful for students that aims to gets information about Career and various Exam.</p>
						</div>
							<div class="col-md-3 footer-grid">
						<h4>Pages</h4>
							<ul>
								
								<li ><a href="exam.php">LATEST EXAM</a></li>
								<li><a href="book-review.php">BOOKS</a></li>
								<li><a href="movie-review.php?id='hollywood'">HOLLWOOD MOVIES</a></li>
								<li><a href="show-review.php?id='hindi'">HINDI SHOW </a></li>
								<li><a href="mobile-review.php">MOBILE  </a></li>
								<li><a href="game-review.php?id='adventure'">ADVENTURE GAMES </a></li>
								
							</ul>
						</div>
				

							<div class="col-md-3 footer-grid">
								<h4>Quick Links</h4>
									<ul>
								
								<li><a href="career-science.php?id='ENGINEERING'">ENGINEERING</a></li>
								<li><a href="book-review.php">BEST BOOKS</a></li>
								<li><a href="movie-review.php">LATEST MOVIES</a></li>
								<li><a href="mobile-review.php">TOP RATED SMARTPHONE  </a></li>
								<li><a href="career-science.php">SCIENCE-CAREER  </a></li>
								<li><a href="after12th.php">AFTER 12TH CAREERE   </a></li>
								
							
								</ul>


						</div>
						
						
								<div class="col-md-3 footer-grid">
						<h4>Important Links</h4>
							<ul>
								
								<li><a href="terms.php">Terms & Condition</a></li>
								<li><a href="policy.php">Policy</a></li>
								<li><a href="movie-review.php">LATEST MOVIES</a></li>
								<li><a href="mobile-review.php">TOP RATED SMARTPHONE  </a></li>
								<li><a href="career-science.php">SCIENCE-CAREER  </a></li>
								<li><a href="after12th.php">AFTER 12TH CAREERE   </a></li>
								
							
								</ul>

							


						</div>
						
						<div class="clearfix"> </div>
						
					</div>
					<h3 class="text-center follow">Follow <span>Us</span></h3>
						<ul class="social slide" style="margin-top:15px">
	            <li><a href="#" class="facebook" title="Go to Our Facebook Page"></a></li>
	            <li><a href="#" class="twitter" title="Go to Our Twitter Account"></a></li>
	            <li><a href="#" class="googleplus" title="Go to Our Google Plus Account"></a></li>
	            <li><a href="#" class="instagram" title="Go to Our Instagram Account"></a></li>
	            <li><a href="#" class="youtube" title="Go to Our Youtube Channel"></a></li>
	        </ul>
					
			 </div>
						
			</div>
			<div class="w3agile_footer_copy">
				    <p> All rights reserved | Design by Rijwan Mohmmed</p>
			</div>
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

<script src="js/jquery-1.11.1.min.js"></script>
	<!-- Dropdown-Menu-JavaScript -->
			
		<!-- //Dropdown-Menu-JavaScript -->


<script type="text/javascript" src="js/jquery.zoomslider.min.js"></script>
		<!-- search-jQuery -->
				<script src="js/main.js"></script>
			<script src="js/simplePlayer.js"></script>
			<script>
				$("document").ready(function() {
					$("#video").simplePlayer();
				});
			</script>
			<script>
				$("document").ready(function() {
					$("#video1").simplePlayer();
				});
			</script>
			<script>
				$("document").ready(function() {
					$("#video2").simplePlayer();
				});
			</script>
				<script>
				$("document").ready(function() {
					$("#video3").simplePlayer();
				});
			</script>

			<!-- pop-up-box -->  
		<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
	<!--//pop-up-box -->

			<div id="small-dialog1" class="mfp-hide">
			<iframe src="https://player.vimeo.com/video/165197924?color=ffffff&title=0&byline=0&portrait=0"></iframe>
	</div>
	<div id="small-dialog2" class="mfp-hide">
		<iframe src="https://player.vimeo.com/video/165197924?color=ffffff&title=0&byline=0&portrait=0"></iframe>
	</div>
	<script>
		$(document).ready(function() {
		$('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});
																		
		});
	</script>
<script src="js/easy-responsive-tabs.js"></script>
<script>
$(document).ready(function () {
$('#horizontalTab').easyResponsiveTabs({
type: 'default', //Types: default, vertical, accordion           
width: 'auto', //auto or any width like 600px
fit: true,   // 100% fit in a container
closed: 'accordion', // Start closed if in accordion view
activate: function(event) { // Callback function if tab is switched
var $tab = $(this);
var $info = $('#tabInfo');
var $name = $('span', $info);
$name.text($tab.text());
$info.show();
}
});
$('#verticalTab').easyResponsiveTabs({
type: 'vertical',
width: 'auto',
fit: true
});
});
</script>
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all">
<script src="js/owl.carousel.js"></script>
<script>
	$(document).ready(function() { 
		$("#owl-demo").owlCarousel({
	 
		 autoPlay: 3000, //Set AutoPlay to 3 seconds
		  autoPlay : true,
		   navigation :true,

		  items : 5,
		  itemsDesktop : [640,4],
		  itemsDesktopSmall : [414,3]
	 
		});
	 
	}); 
</script> 

<script>
	$(document).ready(function() { 
		$("#owl-demo1").owlCarousel({
	 
		 autoPlay: 3000, //Set AutoPlay to 3 seconds
		  autoPlay : true,
		   navigation :true,

		  items : 5,
		  itemsDesktop : [640,4],
		  itemsDesktopSmall : [414,3]
	 
		});
	 
	}); 
</script> 

<script>
	$(document).ready(function() { 
		$("#owl-demo2").owlCarousel({
	 
		 autoPlay: 3000, //Set AutoPlay to 3 seconds
		  autoPlay : true,
		   navigation :true,

		  items : 5,
		  itemsDesktop : [640,4],
		  itemsDesktopSmall : [414,3]
	 
		});
	 
	}); 
</script> 

<!--/script-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>

<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
 <script type="text/javascript">
						$(document).ready(function() {
							/*
							var defaults = {
					  			containerID: 'toTop', // fading element id
								containerHoverID: 'toTopHover', // fading element hover id
								scrollSpeed: 1200,
								easingType: 'linear' 
					 		};
							*/
							
							$().UItoTop({ easingType: 'easeOutQuart' });
							
						});
					</script>
<!--end-smooth-scrolling-->
	<script src="js/bootstrap.js"></script>
<?php
}
?>
 
</body>
</html>