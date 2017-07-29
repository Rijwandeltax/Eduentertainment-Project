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
	
	
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
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
	}
   });   
});
</script>
           <script type="text/javascript">
         $(document).ready(function(){
	      $(".asd").click(function(){
		var v=$(this).attr("id");
		 var m =parseInt(v); 
		 
		$.post(
		"alch.php",
		  {code:v},
		function(data){
	     //document.getElementById("show").innerHTML+=data;
		 $("#s").html(data);
		        alert(data);
              $("button").attr("id",m+5);
                });
              });
         });
</script>	
	
	
	

<style>
#book,#movie,#show,#game,#carreer,#exam,#new,#mobile,#delete{
display:none;
}
</style>
    
  </head>
  
  
  
  <body>
  
  <?php
if(!isset($_COOKIE["user"])){
header("location:404.asp");
}

else{
?>
  
  
  
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="in.php">Edutainment</a></h1>
	              </div>
	           </div>
			   <div class="col-md-5">
	              
	        </div>
			    <div class="col-md-2">
	             <h4 style="color:#FFFFFF"><a href="logout.php">Logout</a></h4> 
	        </div>
	           
	           </div>
	           <div class="col-md-2">
	              
	        </div>
	</div>

    <div class="page-content">
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
					<li><a href="#" class="delete">Delete Last 10</a></li>
					<li><a href="delete.php">Delete</a></li>
		  </ul></div></div></div>
		  
		  
		  <div class="col-md-8">
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
		         $j=$x-5;
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
					  <td><a href="dele.php?id=<?=$r[0]?>&event_id=<?=$r[1]?>&con_id=<?=$r[2]?>">Delete</a></td>
					  </tr>
					  <?php
					  }
					  
					 }
					 }
					?> 
					  </table><br><br>
					
					  <button class="w3-btn asd" id="<?=$num?>" style="float:right; margin-right:210px; margin-bottom:30px;">Load more</button>	
<div class="col-sm-5"></div><div class="col-sm-3">
		  <div id="s">rijwan m</div></div>
		  
		  
</div></div></div></div>
<?php
}
?>
</body></html>