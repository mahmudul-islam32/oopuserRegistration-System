<?php

require_once "functions.php";
$user=new loginRegistration();
if($user->getSession()){

header('location:index.php');
	exit();

}


	 if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	     $email=$_POST['email'];
	     $password=$_POST['password'];
		 
		 
		 if(empty($email)or empty($password) ){
		 
			 echo "filled required";
		 
		 }else{
			 $password=md5($password);
		 
	  $login=$user->login($email,$password);
			 if($login){
			 
			 header('location:index.php');
			 }
			 else{
			 
				 echo"error...email or password not match..";
			 
			 }
		 
		 }
		
		 
		 }
	 
	  
	  
	  
	  ?>










<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>login Page</title>

   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  
  <div class="container">
  	<div class="row">
  		<div class="col-md-12">
  			<div class="header">
    	  <h3>oop login register system</h3>
            </div>
            <div class="mainmenu">
            	<ul>
            		<li><a href="index.php">Home</a></li>
            		<li><a href="logout.php">logout</a></li>
            		<li><a href="login.php">login</a></li>
            		<li><a href="register.php">register</a></li>
            		<li><a href="changepassword.php">changePassword</a></li>
            	</ul>
            </div>
  		</div>
  	</div>
  </div>
   <div class="container">
   	<div class="row">
   		<div class="col-md-12">
   			<div class="form">
   	  <form action="" method="post" >
  
  <div class="form-group">
    <label for="exampleInputEmail2">Email</label>
    <input class="form-control" id="exampleInputEmail2" name ="email" placeholder="type your email" type="email">
  </div>

   <div class="form-group">
    <label for="exampleInputEmail2">password</label>
    <input class="form-control" type="password"id="exampleInputEmail2" name ="password" placeholder="Type your password" >
  </div>
 
  <button type="submit" class="btn btn-primary" name="login" >login</button>
  <button type="submit" class="btn btn-primary" name="register" >Reset</button>
</form>

   </div>
   		</div>
   	</div>
   </div>
   
   
   <div class="back">
   	
      <a href="login.php"><img src="" alt="back">Back</a>
   </div>
 
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
 
  </body>
</html>