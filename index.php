<?php

session_start();
require_once "functions.php";
$user=new loginRegistration();
$uid=$_SESSION['uid'];
$username=$_SESSION['uname'];

if(!$user->getSession()){

header('location:index.php');
	exit();

}




?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Registration Page</title>

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
            	<?php if($user->getSession()){ ?>
            	
            		<li><a href="index.php">Home</a></li>
            		<li><a href="logout.php">logout</a></li>
            		<li><a href="profile.php">profile</a></li>
            		<li><a href="changepassword.php">changePassword</a></li>
            		
            		<?php } else{ ?>
            		
            		<li><a href="login.php">login</a></li>
            		<li><a href="register.php">register</a></li>
            		
            		<?php } ?>
            		
            	</ul>
            </div>
  		</div>
  	</div>
  </div>
  
  <p class="msg">
  	
  	<?php if(isset($_SESSION['login_msg'])){
         echo $_SESSION['login_msg'];
	     unset($_SESSION['login_msg']);
}
?>
  </p>
  <h2>Welcome <?php echo $username; ?></h2>
  <p class="userlist">All user list</p>
  
  <table class="table table-hover">
  <thead>
    <tr>
      <th>Serial</th>
      <th>Name</th>
      <th>Profile</th>
    </tr>
  </thead>
  <?php 
     $i=0;
     $alluser= $user->getAllusers();
     foreach($alluser as $user){
	 $i++;
	 
	

	  
	  
	  ?>
  <tbody>
    <tr>
      <td><?php echo $i; ?></td>
      <td><?php echo $user['name'];?></td>
		<td><a href="userprofile.php? id=<?php echo $user['id'];?> ">View details</a></td>
    </tr>
    
  </tbody>
  <?php } ?>
</table>

   
   
   
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