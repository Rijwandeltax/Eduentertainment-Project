<!DOCTYPE >
<html>
  <head>
    <title>Education & Entertainment</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="../css/bootstrap.css" rel="stylesheet">
    <!-- styles -->
    <link href="../css/styles.css" rel="stylesheet">
	<link href="../css/w3.css" rel="stylesheet">
	<link href="../css/animate.css" rel="stylesheet">
	<script src="../js/bootstrap.min.js"></script>
	
	
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
	<script src="../js/jquery.min.js"></script>
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
  if($_REQUEST["id"] ||  $_REQUEST["id1"]){
  $v=$_REQUEST["id"];
  $m=$_REQUEST["id1"];

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
	
	   <?php
	   include("enter.php");
	   $i=1;
	   $v=$_REQUEST["id"];
       $m=$_REQUEST["id1"];
	   echo $m;
	   echo $v;
	   
	 if (mysql_query("delete from $m where sn=$v")){
	 echo "record delete";
	
	   }
	   echo "record delete";
	   }
	   ?>
	
	</body></html>
	