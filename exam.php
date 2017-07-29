<!DOCTYPE html>
<html lang="en">
<head>
	
	<title>Eduentertainment</title>
	<link rel="icon" type="image/png" href="images/favicon2.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
    <link rel="stylesheet" type="text/css" href="css/w3.css">
	<link rel="stylesheet" type="text/css" href="css/educab.css">
	<link rel="stylesheet" type="text/css" href="css/MediaQuery.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/riju.css" />
      <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  <script src="js/jquery.min.js"></script>
           <script type="text/javascript">
         $(document).ready(function(){
	      $(".asd").click(function(){
		var v=$(this).attr("id");
		 var m =parseInt(v); 
		$.post(
		"exch.php",
		  {code:v},
		function(data){
	     document.getElementById("show").innerHTML+=data;
		// $("#msg").html(data);
		
              $("button").attr("id",m+3);
                });
              });
         });
</script>

<script type="text/javascript">
(function($){
	$(document).ready(function(){
		$('ul.dropdown-menu [data-toggle=dropdown]').on('click', function(event) {
			event.preventDefault(); 
			event.stopPropagation(); 
			$(this).parent().siblings().removeClass('open');
			$(this).parent().toggleClass('open');
		});
	});
})(jQuery);
</script>
	<style>
.mtitle {
    font-size: 16px;
    color: #f0f0f0;
    margin: 10px 0px 10px 0px;
    padding-left: 10px;
    background: #000;
    padding: 10px;
    text-transform: uppercase;
    border-left: 10px solid #F7BD3D;
    border-right: 10px solid #F7BD3D;
    font-family: Arial, Helvetica, sans-serif;
    text-align: center;
    font-weight: bold;
}
   </style>
	  
	  </head>
<body style="background-image:url(images/newedu.jpg); background-repeat: no-repeat; background-attachment:fixed;">
    
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
               
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="index.php" class="navbar-brand"><img src="images/1.png" class="navbar-brand-img"></a>
			</div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>
				<li><a href="mobile.php">Mobile</a></li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Education <b class="caret"></b></a>
                    <ul class="dropdown-menu multi-level">
                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Career</a>
                            <ul class="dropdown-menu">
                                <li><a href="cmath.php">Science-Math</a></li>
								<li><a href="cbio.php">Science-Bio</a></li>
								<li><a href="ccommerce.php">Commerce</a></li>
								<li><a href="carts.php">Arts</a></li>
								<li><a href="cother.php">Others</a></li>
                                
                            </ul>
                        </li>
                        
                         
                        
                      <li>
                            <a href="exam.php">Exam</a>
                            
                        </li>
                    </ul>
                </li>
				
				<li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Entertain <b class="caret"></b></a>
                    
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href="movie.php" class="dropdown-menu-a">Movies</a></li>
                            <li><a href="game.php" class="dropdown-menu-a">Games</a></li>
                            <li><a href="show.php" class="dropdown-menu-a">TV Show</a></li>
                        </ul>
                    
                </li>
				
					
                                					
					<li><a href="book.php">Books</a></li>
					<li><a href="photograph.php">Photograph</a></li>
					<li><a href="about.php">About Us</a></li>
            </ul>
        </div>
    </div>
</div>
	
	<div class="row">
	<div class="col-sm-2"></div>
<div class="col-sm-8" style="margin-top:5px;">
		        
<div class="w3-panel w3-teal">
<p><div align="center"><h4><monospace>News About  Latest Exam</monospace></h4></div></p></div></div></div>
<div id="show">
<?php
include("enter.php");
$x=1;
		$rs=mysql_query("select * from exam where flag=1");
		while($r=mysql_fetch_array($rs)){
		$x=$x+1;
		}
		$x=$x-1;
		$j=$x-3;
	$rs=mysql_query("select * from exam order by sn DESC");
	$num=3;
	while($r=mysql_fetch_array($rs)){
	if($r[0]<=$x && $r[0]>$j){
?>
<div class="row"><div class="col-sm-2"></div>

<div class="col-sm-8 w3-card-8 w3-white">
	 <div class="col-sm-10">
	 <h2><b><?=$r[2]?></b></h2>
	 <h4><b>Exam date:</b><?=$r[3]?></h4> 
     
     <p><i><b>Qualification :</b><?=$r[4]?></i></p>
	 <br />
	 <p><b>More Information:-</b><?=$r[5]?></p> 
  </div></div></div><br /> <br />
 <?php
 }
}

?></div>
	
<button class="w3-btn asd" id="<?=$num?>" style="float:right; margin-right:18%;  margin-bottom10px;">Load more</button>		 
<br />
	
    <!--Navbar-->
<!--================================Scripts================================-->
	<script src="js/jquery.cycle2.min.js" type="text/javascript"></script>
	<script src="js/Myjavascript.js" type="text/javascript"></script>
</body>
</html>