<?php

session_start();
if(isset($_SESSION["user_data"]))
{
	header("location:./dashboard/admin/");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Sports Club | Login</title>
	<link rel="stylesheet" href="./css/style.css"/>
	<link rel="stylesheet" type="text/css" href="./css/entypo.css">
</head>
<style>
h2 {
  color:white;
background-image: url("11.jpg");
width: 100%;
height: 300px;
align-items: center;
background-repeat: no-repeat;
background-position: center;
background-size: cover;

}

/* background-size: cover; */
}
</style>
<body>
    <h2 style="color: #EDEADE;font-size:30px;margin:0px;"><BR><BR><BR><div style="position: absolute;top: 8px;left:30%;">SPORTS CLUB MANAGEMENT SYSTEM</div><BR><BR><BR></h2>
<body class="page-body login-page login-form-fall">
    
    	<div id="container">
			<div class="login-container">
	
	<div class="login-header login-caret">
		
		<div class="login-content">
			
			<a href="#" class="logo">
				
				<img src="logo3.png" alt="" />
			</a>
			
			<p class="description">Log In to access the admin area</p>
			
			<!-- progress bar indicator -->
			<div class="login-progressbar-indicator">
				<h3>43%</h3>
				<span>logging in...</span>
			</div>
		</div>
		
	</div>
	
	<div class="login-progressbar">
		<div></div>
	</div>
	
	<div class="login-form">
		
		<div class="login-content">
			
			<form action="secure_login.php" method='post' id="bb">				
				<div class="form-group">					
					<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-user"></i>
						</div>
							<input type="text" placeholder="User ID" class="form-control" name="user_id_auth" id="textfield" data-rule-minlength="6" data-rule-required="true">
					</div>
				</div>				
								
				<div class="form-group">					
					<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-key"></i>
						</div>
						<input type="password" name="pass_key" id="pwfield" class="form-control" data-rule-required="true" data-rule-minlength="6" placeholder="Password">
					</div>				
				</div>
				
				<div class="form-group">
					<button type="submit" name="btnLogin" class="btn btn-primary">
						Login In
						<i class="entypo-login"></i>
					</button>
				</div>
			</form>
		
				<div class="login-bottom-links">
					<a href="forgot_password.php" class="link">Forgot your password?</a>
				</div>			
		</div>
		
	</div>
	
</div>

		</div>

</body>
</html>
