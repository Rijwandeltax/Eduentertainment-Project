<!DOCTYPE >
<html>
  <head>
    <title>Education & Entertainment</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="css/bootstrap.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">
	<link href="css/w3.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">
	<script src="js/bootstrap.min.js"></script>
	
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   
      


  <script type="text/javascript">
  $(document).ready(function(){   
   $("a").click(function(){
   var t=$(this).attr("class");  
   $("#"+t).fadeIn(1000);
   if(t=="new"){
   $("#book").hide();
   $("#movie").hide();
    $("#show").hide();
	$("#game").hide();
	$("#exam").hide();
	$("#carreer").hide();
	$("#mobile").hide();
	$("#delete").hide();
	$("#trand-shows").hide();
	$("#trand-mobiles").hide();
	$("#trand-carreer").hide();
   }
   else if(t=="book"){
    $("#new").hide();
   $("#movie").hide();
    $("#show").hide();
	$("#game").hide();
	$("#exam").hide();
	$("#carreer").hide();
	$("#mobile").hide();
	$("#delete").hide();
	$("#trand-shows").hide();
	$("#trand-mobiles").hide();
	$("#trand-carreer").hide();
   }
   else if(t=="movie"){
   $("#new").hide();
   $("#book").hide();
    $("#show").hide();
	$("#game").hide();
	$("#exam").hide();
	$("#carreer").hide();
	$("#mobile").hide();
	$("#delete").hide();
	$("#trand-shows").hide();
	$("#trand-mobiles").hide();
	$("#trand-carreer").hide();
   } 
   else if(t=="show"){
   $("#new").hide();
   $("#book").hide();
    $("#movie").hide();
	$("#game").hide();
	$("#exam").hide();
	$("#carreer").hide();
	$("#mobile").hide();
	$("#delete").hide();
	$("#trand-shows").hide();
	$("#trand-mobiles").hide();
	$("#trand-carreer").hide();
   }
    else if(t=="game"){
    $("#new").hide();
   $("#book").hide();
    $("#movie").hide();
	$("#show").hide();
	$("#exam").hide();
	$("#carreer").hide();
	$("#mobile").hide();
	$("#delete").hide();
	$("#trand-shows").hide();
	$("#trand-mobiles").hide();
	$("#trand-carreer").hide();
   }
    else if(t=="mobile"){
     $("#new").hide();
   $("#book").hide();
    $("#movie").hide();
	$("#show").hide();
	$("#exam").hide();
	$("#carreer").hide();
	$("#game").hide();
	$("#delete").hide();
	$("#trand-shows").hide();
	$("#trand-mobiles").hide();
	$("#trand-carreer").hide();
   }
   else if(t=="exam"){
     $("#new").hide();
   $("#book").hide();
    $("#movie").hide();
	$("#show").hide();
	$("#mobile").hide();
	$("#carreer").hide();
	$("#game").hide();
	$("#delete").hide();
	$("#trand-shows").hide();
	$("#trand-mobiles").hide();
	$("#trand-carreer").hide();
   }
   else if(t=="carreer"){
     $("#new").hide();
   $("#book").hide();
    $("#movie").hide();
	$("#show").hide();
	$("#mobile").hide();
	$("#exam").hide();
	$("#game").hide();
	$("#delete").hide();
	$("#trand-shows").hide();
	$("#trand-mobiles").hide();
	$("#trand-carreer").hide();
   }
   else if(t=="delete"){
    $("#new").hide();
   $("#book").hide();
    $("#movie").hide();
	$("#show").hide();
	$("#mobile").hide();
	$("#exam").hide();
	$("#game").hide();
	$("#carreer").hide();
	$("#trand-shows").hide();
	$("#trand-mobiles").hide();
	$("#trand-carreer").hide();
	}
	else if(t=="trand-shows"){
    $("#new").hide();
   $("#book").hide();
    $("#movie").hide();
	$("#show").hide();
	$("#mobile").hide();
	$("#exam").hide();
	$("#game").hide();
	$("#carreer").hide();
	$("#delete").hide();
	$("#trand-mobiles").hide();
	$("#trand-carreer").hide();
	
	}
	else if(t=="trand-mobiles"){
    $("#new").hide();
   $("#book").hide();
    $("#movie").hide();
	$("#show").hide();
	$("#mobile").hide();
	$("#exam").hide();
	$("#game").hide();
	$("#carreer").hide();
	$("#delete").hide();
	$("#trand-shows").hide();
	$("#trand-carreer").hide();
	}
	else if(t=="trand-carreer"){
    $("#new").hide();
   $("#book").hide();
    $("#movie").hide();
	$("#show").hide();
	$("#mobile").hide();
	$("#exam").hide();
	$("#game").hide();
	$("#carreer").hide();
	$("#delete").hide();
	$("#trand-shows").hide();
	$("#trand-mobiles").hide();
	}
	
	
   });   
});
</script>
	<script src="js/jquery.min.js"></script>
           <script type="text/javascript">
         $(document).ready(function(){
	      $(".atm").click(function(){
		var v=$(this).attr("id");
		
		
		// var m =parseInt(v); 
		 //alert(v);
		$.post(
		"alch.php",
		  {code:v},
		function(data){
	     $("#showing").html(data);
		// $("#msg").html(data);
		
              
                });
              });
         });
</script>	
	
	
	

<style>
#book,#movie,#show,#game,#carreer,#exam,#new,#mobile,#delete,#trand-shows,#trand-carreer,#trand-mobiles{
display:none;
}
</style>
    
  </head>
  
  
  
  <body>
  
  <?php
 /*if(!isset($_COOKIE["user"])){
 header("location:404.asp");
}

else{
*/
if(isset($_GET["err"])){
	?>
	 <div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <p> try again</p>
                            </div>
	<?php
	
	}
?>
  
  
	
	
	<nav class="navbar navbar-default navbar-fixed-top" style="background:#1f8dc1">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="in.php" id="navbar" style="text-transform:uppercase; font-family:Arial, Helvetica, sans-serif; font-weight:800; font-style:oblique; color:#bab4b4; font-size-adjust:none">Edutainment</a>
    </div>
	<div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="logout.php" style="background:rgba(0, 0, 0, .5); color:#FFFFFF">Logout</a></li>
          </ul>
        </div>
	
	</div></nav>
	
	
	
	
	
	
	  
    <div class="page-content" style="padding-top:40px">
    	<div class="row">
		  <div class="col-md-2">
		  <div class="w3-card-4">
		  	<div class="sidebar content-box">
                <ul class="nav">
                    <!-- Main menu -->
                    <li class="current"><a href="index.php"> Home</a></li>
                    <li><a href="#" class="new">News</a></li>
					<li><a href="#" class="movie"> Movie</a></li>
					<li><a href="#" class="game"> Games</a></li>
					<li><a href="#" class="show">TV Show</a></li>
					
					
			        <li><a href="#" class="exam"> Exam</a></li>
					<li><a href="#" class="carreer"> Carrer</a></li>
					<li><a href="#" class="book"> Books</a></li>
                    <li><a href="#" class="query">Query</a></li>
                    <li><a href="#" class="mobile"> Mobile</a></li>
					<li><a href="#" class="trand-shows"> Trand-show</a></li>
                    <li><a href="#" class="trand-carreer">Trand-Carreer</a></li>
                    <li><a href="#" class="trand-mobiles"> Trand-Mobiles</a></li>
					
					<li><a href="#" class="delete">Delete Last 10</a></li>
		  </ul></div></div></div>
		  
		  
		  <div class="col-md-8">
		  
		  
		  <div id="trand-carreer">
		  
		            <div class="w3-card-2" style="padding:5px 5px 5px 5px">
		            <div id='showing'></div></div>
					<div class="w3-card-2"   style="height:600px">
					<button type="button" class="w3-btn atm" id='trandcareer' id21='trand-carreer'>Edit Data</button>
					<form method="post"  enctype="multipart/form-data"  action="career-box.php" style="padding-top:30px">
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Carreer</label></div>
					<div class="col-sm-7"><select name="sub" class="form-control">
					<option>Select sub</option>
					<option name="Science-math">Science-math</option>
					<option name="Science-bio">Science-bio</option>
					<option name="Arts">Arts</option>
					<option name="Commerce">commerce</option>
					<option name="other">other</option></select></div></div><br>
					
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Poster</label></div>
					<div class="col-sm-7">
					<input type="file" class="form-control" name="photo"></div></div><br>
					
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Carreer Name</label></div>
					<div class="col-sm-7">
					<input type="text" name="cname" class="form-control" placeholder="carreer name"></div></div><br>
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">About</label></div><div class="col-sm-7">
					<textarea name="about" class="form-control" cols="100000" rows="10" placeholder="Write Something"></textarea></div></div><br>
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Pre Qualification</label></div>
					<div class="col-sm-7">
					<textarea name="qua" class="form-control" cols="1000" rows="4" placeholder="Write Something"></textarea></div></div><br>
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Enters Exam</label></div><div class="col-sm-7">
					<textarea name="exam" class="form-control" cols="1000" rows="2" placeholder="Exam"></textarea></div></div>
					<input type="submit" class="w3-btn w3-ripple w3-green" style="float:right; margin-right:50px; margin-top:8px"></form></div></div>

		  
		  
		  
		  <div id="trand-mobiles">
		  <div class="w3-card-2" style="padding:5px 5px 5px 5px">
		            <div id='showing'></div></div>
		  <div class="w3-card-2" style="height:1040px">
		  <button type="button" class="w3-btn atm" id='trandshowbook'>Edit Data</button>
					<form method="post" enctype="multipart/form-data" action="games-box-set.php" style="padding-top:30px">
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Title Of Trand</label></div>
					<div class="col-sm-7">
					<input type="text" name="title" class="form-control" placeholder="title name"></div></div><br>
					
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Name</label></div>
					<div class="col-sm-7">
					<input type="text" name="mname" class="form-control" placeholder="Book/nobile name"></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Relesed</label></div>
					<div class="col-sm-7">
					<input type="text" name="year" class="form-control" placeholder="enter year"></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Genre/company</label></div>
					<div class="col-sm-7">
					<input type="text" name="genre" class="form-control" placeholder="genre"></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">publisher/rear camra</label></div>
					<div class="col-sm-7">
					<input type="text" name="director" class="form-control" placeholder="director name"></div></div><br>
					
					
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Review Star</label></div>
					<div class="col-sm-7">
					<select name="star" class="form-control">
					<option>Give Star</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					
					</select></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Poster</label></div>
					<div class="col-sm-7">
					<input type="file" class="form-control" name="photo"></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Internal/language</label></div>
					<div class="col-sm-7">
					<input type="text" name="link" class="form-control" ></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Front camra</label></div>
					<div class="col-sm-7">
					<input type="text" name="fc" class="form-control" ></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">RAM</label></div>
					<div class="col-sm-7">
					<input type="text" name="ram" class="form-control"></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Bettery/writer</label></div>
					<div class="col-sm-7">
					<input type="text" name="bettery" class="form-control"></div></div><br>
					
					
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">dimension/os</label></div>
					<div class="col-sm-7">
					<textarea name="cast" class="form-control" cols="100" rows="2" placeholder="Write Something"></textarea></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Specification/About</label></div>
					<div class="col-sm-7">
					<textarea name="feture" class="form-control" cols="100" rows="4" placeholder="Write Something"></textarea></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Reviews</label></div>
					<div class="col-sm-7">
					<textarea name="about" class="form-control" cols="1000" rows="6" placeholder="Write Something"></textarea></div></div>
					<input type="submit" class="w3-btn w3-ripple w3-green" style="float:right; margin-right:50px; margin-top:8px"></form></div></div>
		  
		  
		  
		  <div id="trand-shows">
		  <div class="w3-card-2" style="padding:5px 5px 5px 5px">
		            <div id='showing'></div></div>
		  <div class="w3-card-2" style="height:700px">
		  <button type="button" class="w3-btn atm" id='trand'>Edit Data</button>
					<form method="post" enctype="multipart/form-data" action="show-box-set.php" style="padding-top:30px">
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Title Of Trand</label></div>
					<div class="col-sm-7">
					<input type="text" name="title" class="form-control" placeholder="title name"></div></div><br>
					
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Name</label></div>
					<div class="col-sm-7">
					<input type="text" name="mname" class="form-control" placeholder="movie name"></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Year</label></div>
					<div class="col-sm-7">
					<input type="text" name="year" class="form-control" placeholder="enter year"></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Genre</label></div>
					<div class="col-sm-7">
					<input type="text" name="genre" class="form-control" placeholder="genre"></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Director</label></div>
					<div class="col-sm-7">
					<input type="text" name="director" class="form-control" placeholder="director name"></div></div><br>
					
					
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Review Star</label></div>
					<div class="col-sm-7">
					<select name="star" class="form-control">
					<option>Give Star</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
				<!--	<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>-->
					</select></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Poster</label></div>
					<div class="col-sm-7">
					<input type="file" class="form-control" name="photo"></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Trailer Link</label></div>
					<div class="col-sm-7">
					<input type="text" name="link" class="form-control" placeholder="Youtube Trailer"></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Star Cast</label></div>
					<div class="col-sm-7">
					<textarea name="cast" class="form-control" cols="1000" rows="2" placeholder="Write Something"></textarea></div></div><br>
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Review</label></div>
					<div class="col-sm-7">
					<textarea name="about" class="form-control" cols="1000" rows="6" placeholder="Write Something"></textarea></div></div>
					<input type="submit" class="w3-btn w3-ripple w3-green" style="float:right; margin-right:50px; margin-top:8px"></form></div></div>
		  
		  
		  
		  
		  
		  <div id="movie">
		  <div class="w3-card-2" style="padding:5px 5px 5px 5px">
		            <div id='showing'></div></div>
		  <div class="w3-card-2" style="height:740px">
		  <button type="button" class="w3-btn atm" id='moviereview'>Edit Data</button>
					<form method="post" enctype="multipart/form-data" action="movset.php" style="padding-top:30px">
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Movie Name</label></div>
					<div class="col-sm-7">
					<input type="text" name="mname" class="form-control" placeholder="movie name"></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Categrised</label></div>
					<div class="col-sm-7">
					<select name="cadt" class="form-control">
					<option>Categery</option>
					<option value="Hollywood">Hollywood</option>
					<option value="bollywood">bollywood</option>
					<option value="tollywood">tollywood</option>
					<option value="other">other</option>
					</select></div></div><br>
					
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Genre</label></div>
					<div class="col-sm-7">
					<input type="text" name="genre" class="form-control" placeholder="genre"></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Director</label></div>
					<div class="col-sm-7">
					<input type="text" name="dir" class="form-control" placeholder="director"></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Review Star</label></div>
					<div class="col-sm-7">
					<select name="star" class="form-control">
					<option>Give Star</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					
					</select></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Year</label></div>
					<div class="col-sm-7">
					<input type="text" name="year" class="form-control" placeholder="Year of relesed"></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Trailer Link</label></div>
					<div class="col-sm-7">
					<input type="text" name="link" class="form-control" placeholder="link"></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Poster</label></div>
					<div class="col-sm-7">
					<input type="file" class="form-control" name="photo"></div></div><br>
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Star Cast</label></div>
					<div class="col-sm-7">
					<textarea name="cast" class="form-control" cols="1000" rows="2" placeholder="Write Something"></textarea></div></div><br>
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Review</label></div>
					<div class="col-sm-7">
					<textarea name="about" class="form-control" cols="1000" rows="6" placeholder="Write Something"></textarea></div></div>
					<input type="submit" class="w3-btn w3-ripple w3-green" style="float:right; margin-right:50px; margin-top:8px"></form></div></div>
					
					<div id="show">
					<div class="w3-card-2" style="height:800px">
					<form method="post" enctype="multipart/form-data" action="showset.php" style="padding-top:30px">
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Show Name</label></div>
					<div class="col-sm-7">
					<input type="text" name="mname" class="form-control" placeholder="show name"></div></div><br>
					
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Categrised</label></div>
					<div class="col-sm-7">
					<select name="cadt" class="form-control">
					<option>Categery</option>
					<option value="English">English</option>
					<option value="Hindi">Hindi</option>
					<option value="Other">Other</option>
					</select></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Trailer Link</label></div>
					<div class="col-sm-7">
					<input type="text" name="link" class="form-control" placeholder="link"></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Director</label></div>
					<div class="col-sm-7">
					<input type="text" name="dir" class="form-control" placeholder="director"></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Episode year</label></div>
					<div class="col-sm-7">
					<input type="text" name="year" class="form-control" placeholder="year"></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Review Star</label></div>
					<div class="col-sm-7">
					<select name="star" class="form-control">
					<option>Give Star</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					</select></div></div><br>
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Poster</label></div>
					<div class="col-sm-7">
					<input type="file" class="form-control" name="photo"></div></div><br>
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Genre</label></div>
					<div class="col-sm-7">
					<textarea name="genre" class="form-control" cols="1000" rows="1" placeholder="Write Something"></textarea></div></div><br>
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Star Cast</label></div>
					<div class="col-sm-7">
					<textarea name="cast" class="form-control" cols="1000" rows="2" placeholder="Write Something"></textarea></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Review</label></div>
					<div class="col-sm-7">
					<textarea name="aboutt" class="form-control" cols="1000" rows="12" placeholder="Write Something"></textarea></div></div>
					<input type="submit" class="w3-btn w3-ripple w3-green" style="float:right; margin-right:50px; margin-top:8px"></form></div></div>
					
					
					
					<div id="game">
					<div class="w3-card-2" style="padding:5px 5px 5px 5px">
		            <div id='showing'></div></div>
					<div class="w3-card-2" style="height:690px">
					<button type="button" class="w3-btn atm" id='gamereview'>Edit Data</button>
					<form method="post" enctype="multipart/form-data" action="gameset.php" style="padding-top:30px">
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Category</label></div>
					<div class="col-sm-7">
					<select name="genre" class="form-control">
					<option>categories</option>
					<option value="action">Action</option>
					<option value="adventure">Adventure</option>
					<option value="puzzle">puzzle</option>
					<option value="sport">Sport</option>
					<option value="racing">Racing</option>
					</select></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Game Name</label></div>
					<div class="col-sm-7">
					<input type="text" name="mname" class="form-control" placeholder="game name"></div></div><br>
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Review Star</label></div>
					<div class="col-sm-7">
					<select name="star" class="form-control">
					<option>Give Star</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					</select></div></div><br>
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Episode year</label></div>
					<div class="col-sm-7">
					<input type="text" name="year" class="form-control" placeholder="year"></div></div><br>
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Trailer Link</label></div>
					<div class="col-sm-7">
					<input type="text" name="link" class="form-control" placeholder="link"></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Poster</label></div>
					<div class="col-sm-7">
					<input type="file" class="form-control" name="photo"></div></div><br>
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Specfication</label></div>
					<div class="col-sm-7">
					<textarea name="about" class="form-control" cols="1000" rows="4" placeholder="write something"></textarea></div></div><br>
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Review</label></div>
					<div class="col-sm-7">
					<textarea name="spc" class="form-control" cols="1000" rows="4" placeholder="write something"></textarea></div></div>
					<input type="submit" class="w3-btn w3-ripple w3-green" style="float:right; margin-right:50px; margin-top:8px"></form></div></div>
					
					<div id="exam">
					<div class="w3-card-2" style="padding:5px 5px 5px 5px">
		            <div id='showing'></div></div>
					<div class="w3-card-2" style="height:450px">
					<form method="post" enctype="multipart/form-data" action="examset.php" style="padding-top:30px">
										<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Carreer</label></div>
					<div class="col-sm-7"><select name="sub" class="form-control">
					<option>Select sub</option>
					<option name="Science-math">Science-math</option>
					<option name="Science-bio">Science-bio</option>
					<option name="Arts">Arts</option>
					<option name="Commerce">commerce</option>
					<option name="other">other</option></select></div></div><br>

					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Exam Name</label></div>
					<div class="col-sm-7">
					<input type="text" name="ename" class="form-control" placeholder="exam name"></div></div><br>
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Exam Date</label></div>
					<div class="col-sm-7">
					<input type="text" name="dname" class="form-control" placeholder="date name"></div></div><br>
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Qualification</label></div>
					<div class="col-sm-7">
					<textarea name="about" class="form-control" cols="1000" rows="4" placeholder="Write Something"></textarea></div></div><br>
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">More info</label></div>
					<div class="col-sm-7">
					<textarea name="more" class="form-control" cols="1000" rows="4" placeholder="Write Something"></textarea></div></div>
					<input type="submit" class="w3-btn w3-ripple w3-green" style="float:right; margin-right:50px; margin-top:8px"></form></div></div>
					
					<!--   Career         -->
					
					<div id="carreer">
					<div class="w3-card-2" style="padding:5px 5px 5px 5px">
		            <div id='showing'></div></div>
					<div class="w3-card-2" style="height:600px">
					<button type="button" class="w3-btn atm" id='career'>Edit Data</button>
					<form method="post" enctype="multipart/form-data"  action="carrset.php" style="padding-top:30px">
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Carreer</label></div>
					<div class="col-sm-7"><select name="sub" class="form-control">
					<option>Select sub</option>
					<option name="Science-bio">Science</option>
					<option name="Arts">Arts</option>
					<option name="Commerce">Commerce</option>
					<option name="Other after 10th">Other after 10th</option>
					<option name="Other after 12th">Other after 12th</option></select></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">internal stream if any</label></div>
					<div class="col-sm-7">
					<input type="text" name="stream" class="form-control"></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Poster</label></div>
					<div class="col-sm-7">
					<input type="file" class="form-control" name="photo"></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Carreer Name</label></div>
					<div class="col-sm-7">
					<input type="text" name="cname" class="form-control" placeholder="carreer name"></div></div><br>
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">About</label></div><div class="col-sm-7">
					<textarea name="about" class="form-control" cols="100000" rows="10" placeholder="Write Something"></textarea></div></div><br>
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Pre Qualification</label></div>
					<div class="col-sm-7">
					<textarea name="qua" class="form-control" cols="1000" rows="4" placeholder="Write Something"></textarea></div></div><br>
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Enters Exam</label></div><div class="col-sm-7">
					<textarea name="exam" class="form-control" cols="1000" rows="2" placeholder="Exam"></textarea></div></div>
					<input type="submit" class="w3-btn w3-ripple w3-green" style="float:right; margin-right:50px; margin-top:8px"></form></div></div>
					
					
					
					<div id="book">
					<div class="w3-card-2" style="padding:5px 5px 5px 5px">
		            <div id='showing'></div></div>
					<div class="w3-card-2" style="height:690px">
					<button type="button" class="w3-btn atm" id='bookreview'>Edit Data</button>
					<form method="post" enctype="multipart/form-data" action="book-set.php" style="padding-top:30px">
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Book Name</label></div>
					<div class="col-sm-7">
					<input type="text" name="mname" class="form-control" placeholder="book name"></div></div><br>
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Writer Name</label></div>
					<div class="col-sm-7">
					<input type="text" name="writer" class="form-control" placeholder="Writer name"></div></div><br>
					
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Genre</label></div>
					<div class="col-sm-7">
					<input type="text" name="genre" class="form-control" placeholder="genre"></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">publisher</label></div>
					<div class="col-sm-7">
					<input type="text" name="pub" class="form-control" placeholder="publisher"></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">year</label></div>
					<div class="col-sm-7">
					<input type="text" name="year" class="form-control" placeholder="year"></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Dimensation</label></div>
					<div class="col-sm-7">
					<input type="text" name="dim" class="form-control" placeholder="dimensation"></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Language</label></div>
					<div class="col-sm-7">
					<input type="text" name="lang" class="form-control" placeholder="language"></div></div><br>
					

					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Poster</label></div>
					<div class="col-sm-7">
					<input type="file" class="form-control" name="photo"></div></div><br>
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">About</label></div>
					<div class="col-sm-7">
					<textarea name="about" class="form-control" cols="1000" rows="8" placeholder="Write Something"></textarea></div></div>
					<input type="submit" class="w3-btn w3-ripple w3-green" style="float:right; margin-right:50px; margin-top:8px"></form></div></div>
					
					
					<div id="new">
					<div class="w3-card-2" style="padding:5px 5px 5px 5px">
		            <div id='showing'></div></div>
					<div class="w3-card-2" style="height:510px">
					<button type="button" class="w3-btn atm" id='news'>Edit Data</button>
					<form method="post" enctype="multipart/form-data" action="newsset.php" style="padding-top:30px">
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Type of News</label></div>
					<div class="col-sm-7">
					<select name="tnew" class="form-control">
					<option value="Entertainment">Entertainment</option>
					<option value="Mobile">Mobile</option>
					<option value="Book">Book</option>
					<option value="Career">Career</option>
					</select>
					</div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Heading of news</label></div>
					<div class="col-sm-7">
					<input type="text" name="nename" class="form-control" placeholder="news name"></div></div><br>

					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Poster</label></div>
					<div class="col-sm-7">
					<input type="file" class="form-control" name="photo"></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Short Discription</label></div>
					<div class="col-sm-7">
					<textarea name="sabout" class="form-control" cols="100" rows="3" placeholder="Write Something"></textarea></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">full discription</label></div>
					<div class="col-sm-7">
					<textarea name="about" class="form-control" cols="1000" rows="8" placeholder="Write Something"></textarea></div></div>
					<input type="submit" class="w3-btn w3-ripple w3-green" style="float:right; margin-right:50px; margin-top:8px"></form></div></div>
					
					
					<div id="mobile">
					<div class="w3-card-2" style="padding:5px 5px 5px 5px">
		            <div id='showing'></div></div>
					<div class="w3-card-2" style="height:1020px">
					<button type="button" class="w3-btn atm" id='mobilereview'>Edit Data</button>
					<form method="post" enctype="multipart/form-data" action="mobile-set.php" style="padding-top:30px">
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Name</label></div>
					<div class="col-sm-7">
					<input type="text" name="mname" class="form-control" placeholder="mobile name"></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Relesed</label></div>
					<div class="col-sm-7">
					<input type="text" name="year" class="form-control" placeholder="enter year"></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">company</label></div>
					<div class="col-sm-7">
					<input type="text" name="genre" class="form-control" placeholder="company"></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Rear camra</label></div>
					<div class="col-sm-7">
					<input type="text" name="director" class="form-control" ></div></div><br>
					
					
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Review Star</label></div>
					<div class="col-sm-7">
					<select name="star" class="form-control">
					<option>Give Star</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					
					</select></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Poster</label></div>
					<div class="col-sm-7">
					<input type="file" class="form-control" name="photo"></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Internal</label></div>
					<div class="col-sm-7">
					<input type="text" name="link" class="form-control" ></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Front camra</label></div>
					<div class="col-sm-7">
					<input type="text" name="fc" class="form-control" ></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">RAM</label></div>
					<div class="col-sm-7">
					<input type="text" name="ram" class="form-control"></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Bettery</label></div>
					<div class="col-sm-7">
					<input type="text" name="bettery" class="form-control"></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Screen dimensation</label></div>
					<div class="col-sm-7">
					<input type="text" name="screen" class="form-control"></div></div><br>
					
					
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">os</label></div>
					<div class="col-sm-7">
					<textarea name="cast" class="form-control" cols="100" rows="2" placeholder="Write Something"></textarea></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Specification</label></div>
					<div class="col-sm-7">
					<textarea name="feture" class="form-control" cols="100" rows="4" placeholder="Write Something"></textarea></div></div><br>
					
					<div class="row"><div class="col-sm-1"></div><div class="col-sm-2">
					<label class="label label-success">Reviews</label></div>
					<div class="col-sm-7">
					<textarea name="about" class="form-control" cols="1000" rows="6" placeholder="Write Something"></textarea></div></div>
					<input type="submit" class="w3-btn w3-ripple w3-green" style="float:right; margin-right:50px; margin-top:8px"></form></div></div>
					
					
					<div id="delete">
					<div id="s">
					<table class="table-condensed">
					<tr>
					<th>Type Containt</th>
					<th>Containt</th>
					<th>Delete</th>
					</tr>
					
					<?php
					include("enter.php");
	               $x=1;
	        	$rs=mysql_query("select * from alll where flag=1");
		         while($r=mysql_fetch_array($rs)){
		         $x=$x+1;
		          }
		         $x=$x-1;
		         $j=$x-3;
				 $num=3;
				
					
					$rs=mysql_query("select * from alll where flag=1 order by sn DESC");
					while($r=mysql_fetch_array($rs)){
					if($r[0]<=$x && $r[0]>$j){
					if($r[1]=='show' || $r[1]=='movie' || $r[1]=='news' || $r[1]=='book'){
                      ?>
					  <tr>
					  <td><?=$r[1]?></td>
					  <td><?=$r[2]?></td>
					  <td><a href="dele.php?id=<?=$r[0]?>&event_id=<?=$r[1]?>&con_id=<?=$r[2]?>">Delete</a></td>
					  </tr>
					  <?php
					  }
					  else{
					  ?>
					  <tr>
					  <td><?=$r[1]?></td>
					  <td><?=$r[3]?></td>
					  <td><a href="dele.php?id=<?=$r[0]?>&event_id=<?=$r[1]?>&con_id=<?=$r[3]?>">Delete</a></td>
					  </tr>
					  <?php
					  }
					  
					 }
					 }
					  ?>
					  </table></div>
					  <button class="w3-btn asd" id="<?=$num?>" style="float:right; margin-right:210px; margin-bottom:30px;">Load more</button></div>
					  
</div></div></div>
		  
	  
		  
		  
	<?php
	//}
	?>	  
		  
		  
		  </body></html>