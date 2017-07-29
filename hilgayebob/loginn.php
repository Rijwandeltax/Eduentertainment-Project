<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <style>
   body{
 background-color:#f9ffe5;
 font-style:italic;
 font-family:Arial, Helvetica, sans-serif;
 }
  </style>
</head>
<body>
<?php
include("enter.php");
 if(isset($_COOKIE["user"])){
header("location:index.php");
}

else{
?>
  <div class="container-fluid">
   <nav class="navbar navbar-default" style="background-color:#9370DB">
   <div class="navbar-header">
   <a class="navbar-brand" href="loginn.php" style="color:#FFFFFF">Sign In</a></div>
   <ul class="nav navbar-nav">
   <li class="active"><a href="loginn.php">HOME</a></li></ul></nav>
   <div class="col-sm-2"></div>
   <div class="col-sm-6">
               <div class="w3-card-8 w3-gray" style="width:60%">
			   <div class="panel panel-success">
			   <div class="panel-body w3-light-grey">
			    
				<form  method="post" action="demo.php">
				<label for="exampleInputEmail">Email</label>
				<div class="row"><div class="col-sm-2"></div><div class="col-sm-9">
				<input type="email" class="form-control" name="email" required="required" placeholder="Enter the Email-Id"><br><br /></div></div>
				<label for="exampleInputPassword">Password</label>
				<div class="row"><div class="col-sm-2"></div><div class="col-sm-9">
				<input type="password" class="form-control" name="pass" required="required" placeholder="Enter the Password"><br><br /></div></div>
				<input type="submit" class="btn btn-primary" value="Log In"></div></div>
				</form>
   				</div></div></div>
   </div></div>
   <?php
   }
   ?>
   </body>
</html>
