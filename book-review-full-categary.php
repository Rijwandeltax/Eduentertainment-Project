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
		//alert(v);
		
		 var m =parseInt(v); 
		 $(".asd").attr("id",m+5);
		$.post(
		"book-genre.php",
		  {code:v,del:w},
		function(data){
	     document.getElementById("show").innerHTML+=data;
		// $("#msg").html(data);
		
              
                });
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
.form-control{
border-radius:1px;
border:black;
color:#000000;
    background-color: #069b6f;
}
p span {
    color: #02a388;
    font-size: 1.3em;
}

#df:hover{
background:#339966;
cursor:pointer;
padding:11px 0 12px;  color: #fff;  font-size: 0.9em; margin-bottom:3px;
-webkit-transition: 0.5s all;
border-radius:4px;
}
#df{
background:#02a388;
cursor:pointer;
padding:11px 0 12px;  color: #fff;  font-size: 0.9em; margin-bottom:3px;
-webkit-transition: 0.5s all;
}

</style>
<!--//web-fonts-->
</head>
<body style="background:url(images/bg.png)">

<?php
if($_REQUEST["id"]){
$d=$_REQUEST["id"];
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
							<li ><a href="index.php">Home</a></li>
							<li class="dropdown">
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
							<li><a href="mobile-review.php">Mobiles</a>
								</li>
								<li class="active"><a href="book-review.php">Books</a></li>
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
				<h3 class="agile_w3_title" style="margin-left:10%; color:#000000;"> <span><?=$d?></span></h3>
				
				
					<div class="agile_featured_movies">
					
									
			<!--/movies-->				
			
			<div class="row">
			<div class="col-sm-3" style="padding-left:15px; padding-right:10px; background:transparent; box-shadow: 0px 0px 1px #999; min-height:400px">
			
			<h3 class="agile_w3_title" style="color:#000000; font-size:18px"> <span>Categery</span></h3>
			<div class="row">
			<div class="col-sm-4" style="padding-left:3px; ">
			<div id="df">
			<a href="book-review-full-categary.php?id='Science fiction'"><p class="text-center">Science fiction</p></a>
			</div></div>
			
			<div class="col-sm-4" style="padding-left:3px; ">
			<div id="df">
			<a href="book-review-full-categary.php?id='Satire'"><p class="text-center">Satire</p></a>
			</div></div>
			
			<div class="col-sm-4" style="padding-left:3px; ">
			<div  id="df">
			<a href="book-review-full-categary.php?id='Drama'"><p class="text-center">Drama</p></a>
			</div></div>
			
			
			<div class="col-sm-4" style="padding-left:3px; ">
			<div  id="df">
			<a href="book-review-full-categary.php?id='Action and Adventure'"><p class="text-center">Action and Adventure</p></a>
			</div></div>
			
			<div class="col-sm-4" style="padding-left:3px; ">
			<div  id="df">
			<a href="book-review-full-categary.php?id='Romance'"><p class="text-center">Romance</p></a>
			</div></div>
			
			<div class="col-sm-4" style="padding-left:3px;">
			<div  id="df">
						<a href="book-review-full-categary.php?id='Mystery'"><p class="text-center">Mystery</p></a>
			</div></div>
			
			<div class="col-sm-4" style="padding-left:3px;">
			<div  id="df">
						<a href="book-review-full-categary.php?id='Horror'"><p class="text-center">Horror</p></a>
			</div></div>
			
			<div class="col-sm-4" style="padding-left:3px;">
			<div  id="df">
						<a href="book-review-full-categary.php?id='Biographies'"><p class="text-center">Biographies</p></a>
			</div></div>
			
			<div class="col-sm-4" style="padding-left:3px;">
			<div  id="df">
						<a href="book-review-full-categary.php?id='Religion, Spirituality & New Age'"><p class="text-center">Religion, Spirituality & New Age</p></a>
			</div></div>
			
			<div class="col-sm-4" style="padding-left:3px;">
			<div  id="df">
						<a href="book-review-full-categary.php?id='History'"><p class="text-center">History</p></a>
			</div></div>
			
			
			</div></div>
			
			<div class="col-sm-9">
			
			<h3 class="agile_w3_title"> Latest <span>Smartphone</span></h3>
			<!--/movies-->				
			 <div class="wthree_agile-requested-movies">
					 <div id="show">
					 
					 <?php
				include("enter.php");
				$i=0;
				$num=10;
				$rs=mysql_query("select * from bookreview where genre=$d order by year DESC ");
				while($r=mysql_fetch_array($rs)){
				if($i<11){
				$i=$i+1;
				?>
					 
										<div class="col-md-2 w3l-movie-gride-agile requested-movies">
															<a href="full-story-book.php?id=<?=$r[2]?>" class="hvr-sweep-to-bottom"><img src="images/<?=$r[2]?><?=$r[11]?>.jpg" title="Movies Pro" class="img-responsive" alt=" " />
																<div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
															</a>
																<div class="mid-1 agileits_w3layouts_mid_1_home">
																	<div class="w3l-movie-text">
																		<h6><a href="full-story-book.php?id=<?=$r[2]?>"><?=$r[2]?></a></h6>							
																	</div>
																	<div class="mid-2 agile_mid_2_home">
																		<p>2016</p>
																		
																		<div class="clearfix"></div>
																	</div>
																</div>
															
													</div>
											
											    <?php
													}
											}
													?>
											</div>
												<div class="clearfix"></div>
						</div>
				<!--//requested-movies-->
				
				 <div class="blog-pagenat-wthree">
								<ul>
									
									
									<li><button type="button" class="w3-btn last asd" id="<?=$num?>" id1="<?=$d?>">Next</a></li>
								</ul>
					
					
					<h3 class="agile_w3_title" style="margin-top:20px">Top <span>Rated</span></h3>
					<div class="w3_agile_latest_movies">
			
				<div id="owl-demo1" class="owl-carousel owl-theme">
										
					<?php
				include("enter.php");
				$i=0;
				
				$rs=mysql_query("select * from bookreview where genre=$d order by year DESC limit 0,10");
				while($r=mysql_fetch_array($rs)){
				if($i<11){
				$i=$i+1;
				?>
					
					
					<div class="item">
						<div class="w3l-movie-gride-agile w3l-movie-gride-slider ">
							<a href="full-story-book.php?id=<?=$r[2]?>" class="hvr-sweep-to-bottom"><img src="images/<?=$r[2]?><?=$r[11]?>.jpg" title="Movies Pro" class="img-responsive" alt=" " />
								<div class="w3l-action-icon"><i class="fa fa-play-circle-o" aria-hidden="true"></i></div>
							</a>
							<div class="mid-1 agileits_w3layouts_mid_1_home">
								<div class="w3l-movie-text">
									<h6><a href="full-story-book.php?id=<?=$r[2]?>"><?=$r[2]?></a></h6>							
								</div>
								<div class="mid-2 agile_mid_2_home">
									<p>2016</p>
									
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
			
			
			
			
			</div>
			
			
			</div>
				
					
					
					
					
					
					
					
					
					
				
				</div></div></div>
				
				
				
				
				
				
				
				
				
				
					
					
					
					
					
					
					
				
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
								
								<li><a href="terms.html">Terms & Condition</a></li>
								<li><a href="policy.html">Policy</a></li>
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
		  autoPlay : false,
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