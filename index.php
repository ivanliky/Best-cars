<?php

	include('inc/connection.php');
	require_once('functions.php');
	
	
	 $error ="";
	if(isset($_POST['submit'])){
	{
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$SubPassword = $_POST['SubPassword']; 
		
	}
	
     if(strlen($username)<2)
		{
			$error =  "Error! - Username must be greather than 2 characters";	
		}else if($password !== $SubPassword)
		{
			$error = "Error! - Password does not match";
		}else if(strlen($password)<8)
		{
			$error =  "Error! - Password must be greather than 8 characters";	
		}else if(!filter_var($email,FILTER_VALIDATE_EMAIL))
	    {
			$error =  "Error! - Please enter valid email adress";
		}
		else
		{
		$error = "You are succesfuly registered!";
		
		$md5pass = md5($password);
			
		$sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$md5pass','$email')";
           	
		mysqli_query($conn, $sql);
		}
	}
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>Untitled Document</title>
</head>

<body>



<div id="wrapper">

	<div id="form">
		<form method="post" action="">
			<label>Username:</label><br/>
			<input class="subm" type="text" name="username" placeholder="Please enter your username"/><br/><br/>
			<label>Email:</label><br/>
			<input class="subm" type="text" name="email" placeholder="Please enter your email"/><br/><br/>
			<label>Password:</label><br/>
			<input class="subm" type="password" name="password" placeholder="Minimum 8 caracters required!"/><br/><br/>
			<label>Confirm Password:</label><br/>
			<input class="subm" type="password" name="SubPassword" placeholder="Please confirm your password"/><br/><br/>
			<center><input class="btn "type="submit" name="submit" value="Register"/></center>
			<h1>
				Alredy a member? <div class="btn"><a href="login.php">Sign in</a></div>
			</h1>
			<div id="error"><?php echo $error;?></div>
		</form>
	</div>
 
 
 
 
</div>

</body>
</html>
